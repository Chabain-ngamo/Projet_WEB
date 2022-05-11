// the connection file
const pool = require('../config/connection');


module.exports = {
	
  createIdeas : (data, callBack) => {
    pool.query (
      " INSERT INTO ideabox (sujet, description, image) VALUES (?, ?, ?)",
      [
        		data.sujet,
				data.description,
				data.image

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
	
	// getIdeas by id
	getIdeas : (id, callBack) => {
		pool.query(
			"SELECT * FROM ideabox WHERE id = ?",
			[id],
			(error, results, fields) => {
				if (error) {
					return callBack(error);
				}
				return callBack(null, results[0]);
			}
		);
	},

	// 	updateIdeas : (id, data, callBack) => {

	updateIdeas : (id, data, callBack) => {
		pool.query(
			"UPDATE ideabox set sujet=?, description=?, image=? WHERE id = ?",
			[
				data.sujet,
				data.description,
				data.image,
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

	// deleteIdeas
	deleteIdeas : (id, callBack) => {
		pool.query(
			"DELETE FROM ideabox WHERE id = ?",
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