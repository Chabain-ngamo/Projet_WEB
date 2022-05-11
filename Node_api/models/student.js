// the connection file
const pool = require('../config/connection');


module.exports = {
	
  createStudent : (data, callBack) => {
    pool.query (
      " INSERT INTO student (firstname, secondname, centre, email, password, bde) VALUES (?, ?, ?, ?, ?, ?)",
      [
        		data.firstname,
				data.secondname,
				data.centre,
				data.email,
				data.password,
				0

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
			"SELECT * FROM student WHERE id = ?",
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
			"SELECT * FROM student WHERE centre = ?",
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
			"UPDATE student set firstname=?, secondname=?, centre=?, email=?, password=? WHERE id = ?",
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
			"DELETE FROM student WHERE id = ?",
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