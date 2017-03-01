<?php

 include 'dbConnection.php';
 
$update_id = $conn->real_escape_string($_POST['update_id']);
$Brand = $conn->real_escape_string($_POST['Brand']);
$City = $conn->real_escape_string($_POST['City']);
$State = $conn->real_escape_string($_POST['State']);
$Manufacturer = $conn->real_escape_string($_POST['Manufacturer']);
$sql = "INSERT INTO brand (Brand, City, State, Manufacturer)
VALUES ('$Brand', '$City', '$State', '$Manufacturer')";

//Check if a update_id was provided if so, we're updating a brands, otherwise we're inserting
if (isset($_POST['update_id']))
{
  $update_id = $_POST['update_id'];
  $sql =  "UPDATE brand SET update_id='$update_id', Brand='$Brand', City='$City', State='$State', Manufacturer='$Manufacturer'
  WHERE id =$update_id";

} else { 
  $sql = "INSERT INTO brand (update_id, Brand, City, State, Manufacturer)
  VALUES ('$update_id', '$Brand', '$City', '$State', '$Manufacturer')";
}


?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
        
        <title> </title>
        
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
        
        <!-- Optional theme -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
        
        <link href="css/style.css" rel="stylesheet">
        
    </head>

  <body>
   
       <?php include 'nav.php' ?>
     <div class="container">
     <div class="starter-template"><br><br>
  
      <?php
      
        if ($conn->query($sql) === TRUE) {
            echo "<h1>New record created successfully</h1> <br>";
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
        $conn->close();
        
      ?>


      Brand: <?php echo $Brand ?><br>
      City: <?php echo $City ?><br>
      State: <?php echo $State ?><br>
      Manufacturer: <?php echo $Manufacturer ?><br>

    </div>
  </body>
</html>