// the connection file
const pool = require('../config/connection');


module.exports = {
	
  createStudent : (data, callBack) => {
    pool.query (
      " INSERT INTO users (firstname, secondname, centre, email, password, role) VALUES (?, ?, ?, ?, ?, ?)",
      [
        		data.firstname,
				data.secondname,
				data.centre,
				data.email,
				data.password,
				"student"

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
	
	// getstudent by id
	getStudent : (id, callBack) => {
		pool.query(
			"SELECT * FROM users WHERE id = ?",
			[id],
			(error, results, fields) => {
				if (error) {
					return callBack(error);
				}
				return callBack(null, results[0]);
			}
		);
	},

	// getStudentCentre
	getStudentCentre : (centre, callBack) => {
		pool.query(
			"SELECT * FROM users WHERE centre = ?",
			[centre],
			(error, results, fields) => {
				if (error) {
					return callBack(error);
				}
				return callBack(null, results);
			}
		);
	},

	// UpdateStudent
	updateStudent : (id, data, callBack) => {
		pool.query(
			"UPDATE users set firstname=?, secondname=?, centre=?, email=?, password=? WHERE id = ?",
			[
				data.firstname,
				data.secondname,
				data.centre,
				data.email,
				data.password,
				id
			],
			(error, results, fields) => {
				if (error) {
					return callBack(error);
				}
				return callBack(null, results);
			}
		);
	},

	// DeleteStudent
	deleteStudent : (id, callBack) => {
		pool.query(
			"DELETE FROM users WHERE id = ?",
			[id],
			(error, results, fields) => {
				if (error) {
					return callBack(error);
				}
				return callBack(null, results);
			}
		);
	}
};