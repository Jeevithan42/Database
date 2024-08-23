<?php
$connect = new mysqli('localhost', 'root',  '', 'clubhub','3306');


if($connect -> connect_error){
    $error_type = $connect->connect_error;
    echo "<script>var error = '$error_type';</script>";
    echo '<script>alert("Database Connection Failed: " + error);</script>';
    die("failed");
}


$sql = 'SELECT name, description, meeting, image, keyword FROM ClubRegistry';
$result = mysqli_query($connect, $sql) or die( mysqli_error($connect));


// fetch the resulting rows as an array
$clubs = mysqli_fetch_all($result, MYSQLI_ASSOC);

// free the $result from memory (good practise)
mysqli_free_result($result);

// close connection
mysqli_close($connect);


?>

<!DOCTYPE html>
<html>
<head>
<link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>
<h2>Form?</h2>

</head>

<body>

<div class ="club_page">
<h3 class="Title">Clubs Here at Cameron</h4>
  <div class="Table">
      <div class="row">
          <?php foreach($clubs as $club){ ?>
              <div class="col s6 md3">
                  <div class="card z-depth-0">
                      <div class="card-content center">
                          <h6 class="club_text"> Name: <?php echo $club['name']; ?></h6>
                          <h6 class="'club_text">Description: <?php echo $club['description']; ?></h6>
                          <h6 class="'club_text">Meeting: <?php echo $club['meeting']; ?></h6>
                          <h6 class="'club_text">Keyword: <?php echo $club['keyword']; ?></h6>
                          <img src="data:image/jpeg;base64,<?php base64_encode($club['image']); ?>"/>
                      </div>
                  </div>
              </div>
          <?php } ?>
      </div>
  </div>
</div>
</body>

</html>