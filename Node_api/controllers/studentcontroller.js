
const  { createStudent, getStudentCentre, getStudent, updateStudent, deleteStudent } = require('../models/student'); 


const { genSaltSync, hashSync } = require('bcrypt');


module.exports = {
 
  createStudent : (req, res) => {
     
    const body = req.body;
    const salt = genSaltSync(10);
    body.password = hashSync(body.password, salt);
    createStudent(body, (err, results) => {
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

  // 
  getStudentCentre : (req, res) => {
    const centre = req.params.centre;
    getStudentCentre(centre, (err, results) => {
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


  getStudent : (req, res) => {
    const id = req.params.id;
    getStudent(id, (err, results) => {
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

  // Update student
  updateStudent : (req, res) => {
    const id = req.params.id;
 
    const body = req.body;
    const salt = genSaltSync(10);
    body.password = hashSync(body.password, salt);
    updateStudent(id, body, (err, results) => {
      if (err) {
        console.log(err);
        return false;
      }
      if (!results) {
        return res.json({
          success : 0,
          message : "Failed to update student"
        });
      }
      return res.json({
        success : 1,
        message : "Updated successfully"
      });
    });
  },

  // Delete student
  deleteStudent : (req, res) => {
    const id = req.params.id;
    deleteStudent(id, (err, results) => {
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
        message : "student deleted successfully"
      });
    });
  }
};