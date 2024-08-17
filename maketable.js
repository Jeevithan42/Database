//2:51 am (1 hr)

var mysql = require('mysql');

var con = mysql.createConnection({
  host: "localhost",
  user: "root",
  password: "Greenpanda$46",
  database: "clubs"
});

con.connect(function(err) {
  if (err) throw err;
  console.log("Connected!");
  var sql = "CREATE TABLE Clubs (id INT AUTO_INCREMENT PRIMARY KEY, Name VARCHAR(225), Description VARCHAR(225), Meeting VARCHAR(225), Notes VARCHAR(225))";
  con.query(sql, function (err, result) {
    if (err) throw err;
    console.log("Table created");
})
});


//var sql = "ALTER TABLE customers ADD COLUMN id INT AUTO_INCREMENT PRIMARY KEY";