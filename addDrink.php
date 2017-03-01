<?php

include 'dbConnection.php';

$brand_id = $conn->real_escape_string($_POST['brand_id']);
$topseller = $conn->real_escape_string($_POST['topseller']);
$flavor = $conn->real_escape_string($_POST['flavor']);
$taste = $conn->real_escape_string($_POST['taste']);
$cost = $conn->real_escape_string($_POST['cost']);
$nutritional_value = $conn->real_escape_string($_POST['nutritional_value']);

//Check if a drinks_id was provided if so, we're updating a drinks, otherwise we're inserting
if (isset($_POST['drinks_id']))
{
  $drinks_id = $_POST['drinks_id'];
  $sql = "UPDATE drinks SET topseller='$topseller', flavor='$flavor', taste='$taste', cost='$cost', nutritional_value='$nutritional_value'
  WHERE id = $drinks_id";

} else { 
  $sql = "INSERT INTO drinks (brand_id, topseller, flavor, taste, cost, nutritional_value)
  VALUES ('$brand_id', '$topseller', '$flavor', '$taste', '$cost', '$nutritional_value')";
}

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <title>SportsDrinkApp  Brand Form</title>

    <!-- Bootstrap core CSS -->
    <link href="bootstrapDist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/style.css" rel="stylesheet">

  </head>

  <body><br><br>
    <?php include 'nav.php' ?>
    <div class="container">
      <div class="starter-template">
      <?php
        if ($conn->query($sql) === TRUE) {
            echo "<h1>New record created successfully</h1> <br>";
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
        $conn->close();
      ?>


      Topseller: <?php echo $topseller ?><br>
      Flavor: <?php echo $flavor ?><br>
      taste: <?php echo $taste ?><br>
      Cost: <?php echo $cost ?><br>
      Nutritional Value: <?php echo $nutritional_value ?><br>

    </div>
  </body>
</html>