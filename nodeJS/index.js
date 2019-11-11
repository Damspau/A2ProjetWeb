

//express loader
var express = require('express');
// server parameters
var hostname = 'localhost';
var port = 3000;
//use of express, router for the api
var app = express();
var myRouter = express.Router();
//driver bodyParser and mysql
var bodyParser = require('body-parser'); app.use(bodyParser.json()); app.use(bodyParser.urlencoded({ extended: true }));
var mysql = require('mysql');

var connexion = mysql.createConnection({
  host: 'localhost',
  user: 'root',
  password: '',
  database: 'national'
});

connexion.connect((err) =>{
  if(err) throw err;
  console.log('Mysql Connected...');
});
//data route for getting, update and add data
myRouter.route('/data/:userName')

// Get put and update method
// GET data without password
.get(function(req,res){
 let sql = "CALL UserGetData ('" + req.params.userName + "')";
 let query = connexion.query(sql, (err, results) => {
   if(err) throw err;
   res.send(results);
 });;
})
myRouter.route('/data')
//POST add a user
.post(function(req,res){
  let sql = "CALL PostData ('" + req.body.username + "', '" + req.body.mdp + "', '" + req.body.email + "','" + req.body.location+ "')";
  let query = connexion.query(sql, (err, results) => {
    if(err) throw err;
    res.send(results);
  });;


})
//PUT update location of user
.put(function(req,res){
  let sql = "CALL PutData ('" + req.body.username + "', '" + req.body.location + "', '" + req.body.passwordAdmin + "')";
  let query = connexion.query(sql, (err, results) => {
    if(err) throw err;
    res.send(results);
  });;
})

//route for delete and connexion
myRouter.route('/connexDel/:identifiant/:mdp')
.get(function(req,res){
  let sql = "CALL UserLogin ('" + req.params.identifiant + "', '" + req.params.mdp + "')";
  var input = "[{\"email\":\"" + req.params.mdp + "\"}]";
  var result = "";
  var responseLogin ="false";
  let query = connexion.query(sql, (err, results) => {
    if(err) throw err;

    if (JSON.stringify(results[0])==input) {
      responseLogin="true";
    }

    res.send({"response" : responseLogin});

      //res.send(JSON.stringify({"response": results[0]}));
      //res.send(JSON.stringify(results[0]));







  });;

})

.delete(function(req,res){
   //res.json({message : "GET connexion", methode : req.method, identifiant : req.params.identifiant, mdp : req.params.mdp });
   let sql = "CALL DeleteData ('" + req.params.identifiant + "', '" + req.params.mdp + "')";
   let query = connexion.query(sql, (err, results) => {
     if(err) throw err;
     res.send(JSON.stringify({"response": results}));
   });;
})




//start using the router
app.use(myRouter);
// parse application/x-www-form-urlencoded




//server start
app.listen(port, hostname, function(){
 console.log("Mon serveur fonctionne sur http://"+ hostname +":"+port);
});
