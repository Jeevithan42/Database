<?php

$Name = $_POST['Name'];
$Description = $_POST['Description'];
$Meeting = $_POST['Meeting'];
$email = $_POST['email'];
$file = $_POST['myfile'];

//Connect to database Yippee!!!!!

$connect = new mysqli('localhost', 'root',  '', 'clubhub','3306');


if($connect -> connect_error){
    $error_type = $connect->connect_error;
    echo "<script>var error = '$error_type';</script>";
    echo '<script>alert("Database Connection Failed: " + error);</script>';
    die("failed");
}

else{

$smth = $connect->prepare('INSERT INTO ClubRegistry(Name, Description, Meeting, Email, Image) values (?, ?, ?, ?, ?)');

//This works in PHP 8.1 and later
//$smth->execute([$Name, $Description, $Meeting, $email, $file]);

$smth->bind_param("sssss", $Name, $Description, $Meeting, $email, $file);
$smth->execute();
echo '<script>alert("Entry added sucessfully! Yippee! I like men!");</script>';
$smth->close();
$connect->close();
die("yay?");

};


?>