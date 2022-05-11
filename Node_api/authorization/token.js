// Use any defined variable in the .env file
require('dotenv').config();

// The variable below will help us to use  jsonwebtoken functionalities
const  { verify } = require('jsonwebtoken');

module.exports = {
	
  okToken : (req, res, next) => {
		
		let token = req.get("authorization");
		if (token) {
			token = token.slice(7);
			verify(token, process.env.JSON_WEB_TOKEN, (err, decoded) => {
				if (err) {
					res.json({
						success: 0,
						message : "Invalid token"
					});
				} else {
					next();
				}
			});
		} else {
			res.json({
				success : 0,
				message : "Access "
			});
		}
  }
};