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
   if(results[0]==""){
     res.send({"status": 404, "error": "email not found", "response": "email is not register or is not type correctly"})
   }
   else {
     res.send({"status": 200, "error": null, "response": results})
   }

 });;
})
myRouter.route('/data')
//POST add a user
.post(function(req,res){
  let sql = "CALL PostData ('" + req.body.username + "', '" + req.body.password + "', '" + req.body.email + "','" + req.body.location+ "')";
  var input = "{\"email\":\"" + req.body.email + "\"}";

  let sqlverify = "SELECT email FROM utilisateur WHERE email = '"+ req.body.email + "';";
  let query = connexion.query(sqlverify, (err, results2) => {
    if(err) throw err;
            if (JSON.stringify(results2[0])!=input)
            {
                console.log(JSON.stringify(results2[0]))


                let query = connexion.query(sql, (err, results) => {
                  console.log("hey");
                    if(err) throw err;
                    res.send(JSON.stringify({"status": 200, "error": null, "response": results}));



                  });;

            }

            else {
                  res.send(JSON.stringify({"status": 404, "error": "Email arleady exist", "response": ""}));
            }

  });;




})
//PUT update location of user
.put(function(req,res){
  var input = "{\"email\":\"adminMail\"}";
  let sql = "CALL PutDataLocalisation ('" + req.body.username + "', '" + req.body.location + "', '" + req.body.passwordAdmin + "')";

  let sqlverify = "SELECT email FROM utilisateur WHERE email = 'adminMail' AND password = '"+req.body.passwordAdmin+"';";
  let query = connexion.query(sqlverify, (err, results2) => {
    if(err) throw err;

            if (JSON.stringify(results2[0])==input)
            {
                let query = connexion.query(sql, (err, results) => {

                    if(err) throw err;
                    res.send(JSON.stringify({"status": 200 , "error": null , "response": "updated successful"}));



                  });;

            }

            else {
                  res.send(JSON.stringify({"status": 404, "error": "wrong password", "response": ""}));
            }

  });;





})

//route for delete and connexion
myRouter.route('/connexDel/:identifiant/:mdp')
//connexion
.get(function(req,res){
  let sql = "CALL UserLogin ('" + req.params.identifiant + "', '" + req.params.mdp + "')";
  var input = "[{\"email\":\"" + req.params.identifiant + "\"}]";
  var result = "";
  var responseLogin ="false";
  let query = connexion.query(sql, (err, results) => {
    if(err) throw err;

    if (JSON.stringify(results[0])==input) {
      res.send({"status": 200, "error": "NULL", "response": "login successful"});
    }
    else {
      res.send({"status": 404, "error": "wrong password", "response": "wrong password or email"});
    }










  });;

})
//delete
.delete(function(req,res){
   //res.json({message : "GET connexion", methode : req.method, identifiant : req.params.identifiant, mdp : req.params.mdp });
   var input = "{\"email\":\"adminMail\"}";
   let sql = "CALL DeleteData ('" + req.params.identifiant + "', '" + req.params.mdp + "')";

   let sqlverify = "SELECT email FROM utilisateur WHERE email = 'adminMail' AND password = '"+req.body.passwordAdmin+"';";
   let query = connexion.query(sqlverify, (err, results2) => {
     if(err) throw err;

             if (JSON.stringify(results2[0])==input)
             {
                 let query = connexion.query(sql, (err, results) => {

                     if(err) throw err;
                     res.send(JSON.stringify({"status": 200, "error": null, "response": "DELETE successful"}));



                   });;

             }

             else {
                   res.send(JSON.stringify({"status": 404, "error": "wrong password", "response": "error"}));
             }

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
