
const  { createIdeas, getIdeas, updateIdeas, deleteIdeas } = require('../models/ideasbox'); 


const { genSaltSync, hashSync } = require('bcrypt');


module.exports = {
 
    createIdeas : (req, res) => {
     
    const body = req.body;
    const salt = genSaltSync(10);
    //body.password = hashSync(body.password, salt);
    createIdeas(body, (err, results) => {
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



  getIdeas : (req, res) => {
    const id = req.params.id;
    getIdeas(id, (err, results) => {
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

  // update Ideas
  updateIdeas : (req, res) => {
    const id = req.params.id;
 
    const body = req.body;
    const salt = genSaltSync(10);
    //body.password = hashSync(body.password, salt);
    updateIdeas(id, body, (err, results) => {
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

  // delete Ideas
  deleteIdeas : (req, res) => {
    const id = req.params.id;
    deleteIdeas(id, (err, results) => {
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
        message : "ideas deleted successfully"
      });
    });
  }
};