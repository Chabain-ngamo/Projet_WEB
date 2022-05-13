
const pool = require('../config/connection');


module.exports = {
	
	create : (data, callBack) => {
    pool.query (
      " INSERT INTO users (email, password) VALUES (?, ?)",
      [
				data.email,
				data.password
			],
			(error, results, fields) => {
				if (error) {
					return callBack(error);
				}
				else {
					return callBack(null, results);
				}
			}
    );
  },

	
  getEmail : (email, callBack) => {
		pool.query(
			"SELECT * FROM users WHERE email = ?",
			[email],
			(error, results, fields) => {
				if (error) {
					return callBack(error);
				}
				return callBack(null, results[0]);
			}
		);
	},
};