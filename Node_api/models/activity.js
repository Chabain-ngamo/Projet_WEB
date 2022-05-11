// the connection file
const pool = require('../config/connection');


module.exports = {
	
  createActivity : (data, callBack) => {
    pool.query (
      " INSERT INTO activity (name, description, image, dates, status, price, is_repeating) VALUES (?, ?, ?, ?, ?, ?, ?)",
      [
        		data.name,
				data.description,
                data.image,
                data.dates,
                data.status,
				data.price,
                data.is_repeating

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
	
	// getActivity by id
	getActivity : (id, callBack) => {
		pool.query(
			"SELECT * FROM activity WHERE id = ?",
			[id],
			(error, results, fields) => {
				if (error) {
					return callBack(error);
				}
				return callBack(null, results[0]);
			}
		);
	},

	// 	update Activity : (id, data, callBack) => {

	updateActivity : (id, data, callBack) => {
		pool.query(
			"UPDATE activity set name=?, description=?, image=?, dates=?, status=?, price=?, is_repeating=? WHERE id = ?",
			[
				data.name,
				data.description,
                data.image,
                data.dates,
                data.status,
				data.price,
                data.is_repeating,	
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

	// deleteActivity
	deleteActivity : (id, callBack) => {
		pool.query(
			"DELETE FROM activity WHERE id = ?",
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