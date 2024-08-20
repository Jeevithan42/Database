<?php

$Name = $_POST['Name'];
$Description = $_POST['Description'];
$Meeting = $_POST['Meeting'];
$email = $_POST['email'];
$file = $_POST['myfile'];

//Connect to database Yippee!!!!!

$connect = new mysqli('localhost', 'SAC',  'CLUBHUB_24', 'clubhub');

if($connect -> connect_error){
    // $error_type = $connect->connect_error;
    // echo "<script>var error = '$error_type';</script>";
    // echo '<script>alert("Database Connection Failed: " + error);</script>';
    die("failed");
}

else{
// $smth = $connect->prepare("insert into customers(Name, Description, Meeting, email, image) values (?, ?, ?, ?, ?)");
// $smth->bind_param("ssssb", $Name, $Description, $Meeting, $email, $myfile);
// echo '<script>alert("Entry added sucessfully! Yippee! I like men!");</script>';
// $smth->close();
// $connect->close();
die("yay?");

}


?>