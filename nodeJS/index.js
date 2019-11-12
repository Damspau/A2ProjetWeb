//express loader
var express = require('express');
// server parameters
var hostname = 'localhost';
var port = 3000;
//use of express, router for the api
var app = express();
var myRouter = express.Router();
//driver bodyParser and mysql
var bodyParser = require('body-parser');
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
   res.send(JSON.stringify({"status": 200, "error": null, "response": results}))
 });;
})
myRouter.route('/data')
//POST add a user
.post(function(req,res){
  let sql = "CALL PostData ('" + req.body.username + "', '" + req.body.password + "', '" + req.body.email + "','" + req.body.location+ "')";
  var input = "{\"email\":\"" + req.body.email + "\"}";
  var responseLogin = false;
  let sqlverify = "SELECT email FROM utilisateur WHERE email = '"+ req.body.email + "';";
  let query = connexion.query(sqlverify, (err, results2) => {
    if(err) throw err;
            if (JSON.stringify(results2[0])!=input)
            {
                console.log(JSON.stringify(results2[0]))

                responseLogin = true;
                let query = connexion.query(sql, (err, results) => {
                  console.log("hey");
                    if(err) throw err;
                    res.send(JSON.stringify({"status": 200, "error": null, "response": results}));



                  });;

            }
            if (responseLogin!=true)
            {

                res.send(JSON.stringify({"status": 404, "error": "Email arleady exist", "response": ""}));
            }
            else {

            }
  });;




})
//PUT update location of user
.put(function(req,res){
  let sql = "CALL PutData ('" + req.body.username + "', '" + req.body.location + "', '" + req.body.passwordAdmin + "', '" + req.body.parameter + "')";
  let query = connexion.query(sql, (err, results) => {
    if(err) throw err;
    res.send(JSON.stringify({"status": 200, "error": null, "response": results}));

  });;
})

//route for delete and connexion
myRouter.route('/connexDel/:identifiant/:mdp')
//connexion
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









  });;

})
//delete
.delete(function(req,res){
   //res.json({message : "GET connexion", methode : req.method, identifiant : req.params.identifiant, mdp : req.params.mdp });
   let sql = "CALL DeleteData ('" + req.params.identifiant + "', '" + req.params.mdp + "')";
   let query = connexion.query(sql, (err, results) => {
     if(err) throw err;
     res.send(JSON.stringify({"response": results}));
   });;
})


//bodyParserInit
app.use(bodyParser.json());
app.use(bodyParser.urlencoded({ extended: true }));
//start using the router
app.use(myRouter);
// parse application/x-www-form-urlencoded




//server start
app.listen(port, hostname, function(){
 console.log("Mon serveur fonctionne sur http://"+ hostname +":"+port);
});
