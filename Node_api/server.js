//  defined variable .env
require('dotenv').config();


var express = require('express'); 

var bodyParser = require('body-parser');

const { login } = require('./controllers/configcontroller');
const { createStudent, getStudentCentre, getStudent, updateStudent, deleteStudent } = require('./controllers/studentcontroller');
const { createProduct, getProduct, updateProduct, deleteProduct } = require('./controllers/productcontroller');
const { createActivity, getActivity, updateActivity, deleteActivity } = require('./controllers/activitycontroller');
const { createIdeas, getIdeas, updateIdeas, deleteIdeas } = require('./controllers/ideasboxcontroller');
const { okToken } = require('./authorization/token');
//const { getStudentCentre, getStudent } = require('./models/student');



var app = express(); 


app.use(bodyParser.urlencoded({ extended: false }));
app.use(bodyParser.json());
 
var Router = express.Router(); 


Router.post('/users/login',  login);

 //student
Router.get('/users/centre/:centre', okToken, getStudentCentre);

Router.get('/users/:id', okToken, getStudent);

Router.post('/users/add',  okToken, createStudent);

Router.put('/users/update/:id', okToken, updateStudent);

Router.delete('/users/delete/:id', okToken, deleteStudent);

//product

Router.get('/product/:id', okToken, getProduct);

Router.post('/product/add', okToken, createProduct);

Router.put('/product/update/:id', okToken, updateProduct);

Router.delete('/product/delete/:id', okToken, deleteProduct);

//activity

Router.get('/activity/:id', okToken, getActivity);

Router.post('/activity/add', okToken, createActivity);

Router.put('/activity/update/:id', okToken, updateActivity);

Router.delete('/activity/delete/:id', okToken, deleteActivity);

//ideas

Router.get('/ideabox/:id', getIdeas);

Router.post('/ideabox/add', createIdeas);

Router.put('/ideabox/update/:id', okToken, updateIdeas);

Router.delete('/ideabox/delete/:id', okToken, deleteIdeas);


app.use(Router);  


app.listen(process.env.APP_PORT, process.env.DB_HOST, function() {
	console.log("Server running on http://"+ process.env.DB_HOST +":"+process.env.APP_PORT); 
});