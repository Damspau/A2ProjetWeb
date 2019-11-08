

//express loader
var express = require('express');
// server parameters
var hostname = 'localhost';
var port = 3000;
//use of express and router
var app = express();
var myRouter = express.Router();

//data route for getting, update and add data
myRouter.route('/data')

// Get put and update method
// GET data without password
.get(function(req,res){
   res.json({message : "GET data", methode : req.method});
})
//POST add a user
.post(function(req,res){
     res.json({message : "POST", methode : req.method});
})
//PUT update location of user
.put(function(req,res){
     res.json({message : "PUT", methode : req.method});
})

//route for delete and connexion
myRouter.route('/connexDel/:identifiant/:mdp')
.get(function(req,res){
   res.json({message : "GET connexion", methode : req.method, identifiant : req.params.identifiant, mdp : req.params.mdp });
})

.delete(function(req,res){
   res.json({message : "GET connexion", methode : req.method, identifiant : req.params.identifiant, mdp : req.params.mdp });
})




//start using the router
app.use(myRouter);

//server start
app.listen(port, hostname, function(){
 console.log("Mon serveur fonctionne sur http://"+ hostname +":"+port);
});
