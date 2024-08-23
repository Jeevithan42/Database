<!DOCTYPE html>
<html>
<head>
<h2>Form?</h2>

</head>

<body>

    <form action="connect.php" method="post" class="submission">
      <br>
      <h5 class="required">*Required</h5>
      <br>
      <label class="label" for="Name">*Club Name:</label>
      <input class="input_box" type="text" id="Name" name="Name"><br><br>
  
      <label class="label" for="Description" aria-placeholder="500 Characters">*Description:</label>
      <input class="input_box" type="text" id="Description" name="Description"><br><br>
  
      <label class="label" for="Meeting">*Meeting:</label>
      <input class="input_box" type="text" id="Meeting" name="Meeting"><br><br>
  
      <label class="label" for="email">*Email:</label>
      <input class="input_box" type="email" id="email" name="email"><br><br>

      <label class="label" for="Keyword">Keyword (ie. STEM, Art, Music etc..)</label>
      <input class="input_box" type="text" id="Keyword" name="Keyword"><br><br>
  
      <label class="label" for="myfile">Select an Image:</label>
      <input class="input_box" type="file" id="myfile" name="myfile"><br><br>

      
  
      <button type="submit" class="button" id="Submit">Submit</button>
      <button type="submit" class="button" id="Update">Update</button>
      <br>
  
  
  </form>



</body>

</html>