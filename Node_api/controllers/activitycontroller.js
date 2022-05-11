
const  { createActivity, getActivity, updateActivity, deleteActivity } = require('../models/activity'); 


const { genSaltSync, hashSync } = require('bcrypt');


module.exports = {
 
    createActivity : (req, res) => {
     
    const body = req.body;
    const salt = genSaltSync(10);
    //body.password = hashSync(body.password, salt);
    createActivity(body, (err, results) => {
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



  getActivity : (req, res) => {
    const id = req.params.id;
    getActivity(id, (err, results) => {
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

  // update Activity
  updateActivity : (req, res) => {
    const id = req.params.id;
 
    const body = req.body;
    const salt = genSaltSync(10);
    //body.password = hashSync(body.password, salt);
    updateActivity(id, body, (err, results) => {
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

  // Delete Activity
  deleteActivity : (req, res) => {
    const id = req.params.id;
    deleteActivity(id, (err, results) => {
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
        message : "activity deleted successfully"
      });
    });
  }
};