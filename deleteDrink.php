<?php

 include 'dbConnection.php';
 

  $drinks_id = $_GET['drinks_id'];
  
  // sql to delete a record
  $sql = "DELETE FROM drinks WHERE ID=$drinks_id";
  
   $result = $conn->query($sql);

?>


 <!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <title>SportsDrinkApp Form</title>

    <!-- Bootstrap core CSS -->
    <link href="bootstrapDist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/style.css" rel="stylesheet">

  </head>
 
   <body><br><br>
   <?php include 'nav.php' ?>  
    <div class="container">    
       
<?php 
 

 
if ($conn->query($sql) === TRUE) {
    echo "Record deleted successfully";
} else {
    echo "Error deleting record: " . $conn->error;
}

$conn->close();
?> 
   </div>
  </body>
</html>