
const pool = require('../config/connection');


module.exports = {
	
	create : (data, callBack) => {
    pool.query (
      " INSERT INTO student (email, password) VALUES (?, ?)",
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
			"SELECT * FROM student WHERE email = ?",
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