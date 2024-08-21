
<?php

$Name = $_POST['Name'];
$Description = $_POST['Description'];
$Meeting = $_POST['Meeting'];
$email = $_POST['email'];
$file = $_POST['myfile'];




echo implode('',$_POST);

//Connect to database Yippee!!!!!
$connect = new mysqli('localhost', 'root',  '', 'clubhub','3306');



//Check if the connection was sucessfull
if($connect -> connect_error){
    $error_type = $connect->connect_error;
    echo "<script>var error = '$error_type';</script>";
    echo '<script>alert("Database Connection Failed: " + error);</script>';
    die("failed:{");
}



else{
    //Where you want to insert the information and into what table
    $smth = $connect->prepare('INSERT INTO ClubRegistry(Name, Description, Meeting, Email, Image) values (?, ?, ?, ?, ?)');

    //This works in PHP 8.1 and later
    //$smth->execute([$Name, $Description, $Meeting, $email, $file]);

    //Bind_param used in php versions 8.0 and before
    
    $smth->bind_param("sssss", $name, $description, $meeting, $email, $file);
    $smth->execute();
    //Alert box to say it was sucessfull
    echo '<script>alert("Entry added sucessfully! Yippee!");</script>';
    //Close the connections
    $smth->close();
    $connect->close();
    //end script with exit message
    die("yay?");


};

?>