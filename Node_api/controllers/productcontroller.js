
const  { createProduct, getProduct, updateProduct, deleteProduct } = require('../models/product'); 


const { genSaltSync, hashSync } = require('bcrypt');


module.exports = {
 
    createProduct : (req, res) => {
     
    const body = req.body;
    const salt = genSaltSync(10);
    //body.password = hashSync(body.password, salt);
    createProduct(body, (err, results) => {
      if(err) {
        console.log(err);
        return res.status(500).json({
          success : 0,
          message : "Database connection error"
        });
      }
      return res.status(200).json({
        success : 1,
        data : results
      });
    });
  },



  getProduct : (req, res) => {
    const id = req.params.id;
    getProduct(id, (err, results) => {
      if (err) {
        console.log(err);
        return;
      }
      if (!results) {
        return res.json({
          success : 0,
          message : "Record not found"
        });
      }
      return res.json({
        success : 1,
        data : results
      });
    });
  },

  // update Product
  updateProduct : (req, res) => {
    const id = req.params.id;
 
    const body = req.body;
    const salt = genSaltSync(10);
    //body.password = hashSync(body.password, salt);
    updateProduct(id, body, (err, results) => {
      if (err) {
        console.log(err);
        return false;
      }
      if (!results) {
        return res.json({
          success : 0,
          message : "Failed to update product"
        });
      }
      return res.json({
        success : 1,
        message : "Updated successfully"
      });
    });
  },

  // Delete Product
  deleteProduct : (req, res) => {
    const id = req.params.id;
    deleteProduct(id, (err, results) => {
      if (err) {
        console.log(err);
        return;
      }
      if (!results) {
        return res.json({
          success : 0,
          message : "Record not found"
        });
      }
      return res.json({
        success : 1,
        message : "product deleted successfully"
      });
    });
  }
};