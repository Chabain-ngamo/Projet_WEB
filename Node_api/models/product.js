// the connection file
const pool = require('../config/connection');


module.exports = {
	
  createProduct : (data, callBack) => {
    pool.query (
      " INSERT INTO product (name, description, price, image) VALUES (?, ?, ?, ?)",
      [
        		data.name,
				data.description,
				data.price,
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
	
	// getProduct by id
	getProduct : (id, callBack) => {
		pool.query(
			"SELECT * FROM product WHERE id = ?",
			[id],
			(error, results, fields) => {
				if (error) {
					return callBack(error);
				}
				return callBack(null, results[0]);
			}
		);
	},

	// 	updateProduct : (id, data, callBack) => {

	updateProduct : (id, data, callBack) => {
		pool.query(
			"UPDATE product set name=?, description=?, price=?, image=? WHERE id = ?",
			[
				data.name,
				data.description,
				data.price,
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

	// deleteProduct
	deleteProduct : (id, callBack) => {
		pool.query(
			"DELETE FROM product WHERE id = ?",
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