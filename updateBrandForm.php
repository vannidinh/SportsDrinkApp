<?php

include 'dbConnection.php';

//Brand Query for Related data dropdown box
$sql = "SELECT ID, Brand FROM brand";
$brand = $conn->query($sql);


//Check if a drinks_id was supplied in the URL Query Parameter
if (isset($_GET['update_id'])) {

 $update_id = $_GET['update_id'];

  //Query DB for details on that drinks
 $drinksSQL = "SELECT * FROM brand where ID =$update_id";

 $drinks =  $conn->query($drinksSQL)->fetch_assoc();

}

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <title>SportsDrinkApp</title>

    <!-- Bootstrap core CSS -->
    <link href="bootstrapDist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
   <link href="css/style.css" rel="stylesheet">

  </head>

  <body><br>
  
  
    <?php include 'nav.php' ?>
    
    <div class="container">
      <form action="addBrand.php" method="post" class="form-signin">
        <h2 class="form-signin-heading">Add / Update Brands</h2>
       <?php if(isset($update_id)) echo "<input type='hidden' name='update_id' value=" . $update_id ." >"; ?>
          <div>
              <label for="brand_id">Brand:</label>
              <select name="brand_id" >
                <?php
                if ($brand->num_rows > 0) {
                    // output data of each row
                    while($row = $brand->fetch_assoc()) {
                        echo "<option value='" . $row["ID"] ."'";
                        if (isset($drinks) and $drinks['brand_id'] == $row["ID"]) echo "selected";
                        echo ">" . $row["Brand"] . "</option>";
                    }
                }
                ?>
              </select>
          </div>
          <div>
              <label for="Brand">Brand:</label>
              <input type="text" name="Brand" class="form-control" <?php if (isset($drinks['Brand'])) echo "value='" .$drinks['Brand'] . "'"; ?> />
          </div>
          <div>
              <label for="City">City:</label>
              <input type="text" name="City" class="form-control" <?php if (isset($drinks['City'])) echo "value='" .$drinks['City'] . "'"; ?> />
          </div>
          <div>
              <label for="State">State:</label>
              <input type="text" name="State" class="form-control" <?php if (isset($drinks['State'])) echo "value='" .$drinks['State'] . "'"; ?> />
          </div>
          <div>
              <label for="Manufacturer">Manufacturer:</label>
              <input type="text" name="Manufacturer" class="form-control" <?php if (isset($drinks['Manufacturer'])) echo "value='" . $drinks['Manufacturer'] . "'"; ?> />
          </div>

          <div class="button">
              <button type="submit" class="btn btn-lg btn-primary btn-block">Submit</button>
          </div>
      </form>
    </div>
    
  </body>
  <?php include 'footer.php' ?>
</html>