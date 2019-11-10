var express = require('express');
var bodyParser = require('body-parser');
var app = express();
var mysql = require('mysql');

// parse application/json
app.use(bodyParser.json());

//create database connection
var conn = mysql.createConnection({
  host: 'localhost',
  user: 'root',
  password: '',
  database: 'data'
});

//connect to database
conn.connect((err) =>{
  if(err) throw err;
  console.log('Mysql Connected...');
});

//show all products
app.get('/api/products',(req, res) => {
  let sql = "SELECT * FROM product";
  let query = conn.query(sql, (err, results) => {
    if(err) throw err;
    res.send(JSON.stringify({"status": 200, "error": null, "response": results}));
  });
});

//show single product
app.get('/api/products/:id',(req, res) => {
  let sql = "SELECT * FROM product WHERE product_id="+req.params.id;
  let query = conn.query(sql, (err, results) => {
    if(err) throw err;
    res.send(JSON.stringify({"status": 200, "error": null, "response": results}));
  });
});

//add new product
app.post('/api/products',(req, res) => {
  console.log("Ceci est un post", req.body.identifiant);
  let data = {product_name: req.body.product_name, product_price: req.body.product_price};
  //let sql = "INSERT INTO product SET ?";
  //let query = conn.query(sql, data,(err, results) => {
    //if(err) throw err;
    //res.send(JSON.stringify({"status": 200, "error": null, "response": results}));
  });


//update product
app.put('/api/products/:id',(req, res) => {
  let sql = "UPDATE product SET product_name='"+req.body.product_name+"', product_price='"+req.body.product_price+"' WHERE product_id="+req.params.id;
  let query = conn.query(sql, (err, results) => {
    if(err) throw err;
    res.send(JSON.stringify({"status": 200, "error": null, "response": results}));
  });
});

//Delete product
app.delete('/api/products/:id',(req, res) => {
  let sql = "DELETE FROM product WHERE product_id="+req.params.id+"";
  let query = conn.query(sql, (err, results) => {
    if(err) throw err;
      res.send(JSON.stringify({"status": 200, "error": null, "response": results}));
  });
});

//Server listening
app.listen(3000,() =>{
  console.log('Server started on port 3000...');
});
