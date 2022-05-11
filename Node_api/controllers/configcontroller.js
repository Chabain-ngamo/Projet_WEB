
require('dotenv').config();

const  { getEmail } = require('../models/config');

const { compareSync } = require('bcrypt');
const  { sign } = require('jsonwebtoken');


module.exports = {
	

	
  login : (req, res) => {
		
	const body = req.body;
    getEmail(body.email, (err, results) => {
			if (err) {
				console.log(err);
			}

			if (!results) {
				return res.json({
					success : 0,
					data : "Invalid email or password"
				});
			}
			
			
			const result = compareSync(body.password, results.password);
			
			if (result) {
				results.password = undefined;
				const  jsontoken = sign({ result : results }, process.env.JSON_WEB_TOKEN, {
					expiresIn : "2h"
				});
				return res.json({
					success : 1,
					message : "Login successfully",
					token : jsontoken
				});
			}
			
			else {
				return res.json({
					success : 0,
					message : "Invalid email or password",
				});
			}
 		});
  }
};