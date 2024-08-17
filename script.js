function submit(){
alert("hi");
let name = "What's your name?";
let test = document.getElementById("Name");
document.getElementById("result").innerHTML = "hi"+test.value;


var mysql = require('mysql');

var con = mysql.createConnection({
  host: "localhost",
  user: "root",
  password: "Greenpanda$46"
});

con.connect(function(err) {
  if (err) throw err;
  console.log("Connected!");
});

}