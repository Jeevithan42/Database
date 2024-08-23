<?php

$Name = $_POST['Name'];
$Description = $_POST['Description'];
$Meeting = $_POST['Meeting'];
$email = $_POST['email'];
$file = $_POST['myfile'];
$Keyword = $_POST['Keyword'];




//echo implode('',$_POST);

//Connect to database Yippee!!!!!
$connect = new mysqli('localhost', 'root',  '', 'clubhub','3306');



//Check if the connection was sucessfull
if($connect -> connect_error){
    $error_type = $connect->connect_error;
    echo "<script>var error = '$error_type';</script>";
    echo '<script>alert("Database Connection Failed: " + error);</script>';
    die("failed:{");
}

//If it didnt fail it mustve been sucessfull
else{
    $letters = array('a',69420,'b','c',9,'&','D','E',7,'F','!','G','h',6,'I','$',8,'j','K',0,'L','M','n',5,'o','Q','r','P','s','T','u','v','W','X','y','Z','#','%',1,2,3,4);
    
    //This will be the array of characters to make up the verification code
    $verification = array();

    //We repeat this loop 20 times, and each time add a random character to the verification code
    for($x = 0; $x <= 20; $x++){
        $randomNumber = rand(0, 41);
        $verification[] = $letters[$randomNumber];
    }

    //convert verification code from array to string
    $string_verification = implode('', $verification);

    
    //Where you want to insert the information and into what table
    $smth = $connect->prepare('INSERT INTO ClubRegistry(Name, Description, Meeting, Email, Image, verification, Keyword) values (?, ?, ?, ?, ?, ?, ?)');

    //This works in PHP 8.1 and later
    //$smth->execute([$Name, $Description, $Meeting, $email, $file]);

    //Bind_param used in php versions 8.0 and before
    
    $smth->bind_param("sssssss", $Name, $Description, $Meeting, $email, $file, $string_verification, $Keyword);
    $smth->execute();
    //Alert box to say it was sucessfull
    echo '<script>alert("Entry added sucessfully! Yippee!");</script>';
    //Close the connections
    $smth->close();
    $connect->close();

    
    
    //end script with exit message
    //die("yay?");

}


?>