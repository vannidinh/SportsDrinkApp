<?php

include 'dbConnection.php';

//Brand Query for Related data dropdown box
$sql = "SELECT ID, Brand FROM brand";
$brand = $conn->query($sql);


//Check if a drinks_id was supplied in the URL Query Parameter
if (isset($_GET['drinks_id'])) {

 $drinks_id = $_GET['drinks_id'];

  //Query DB for details on that drinks
 $drinksSQL = "SELECT * FROM drinks where ID =$drinks_id";

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

    <title>SportsDrinkApp Drinks Form</title>

    <!-- Bootstrap core CSS -->
    <link href="bootstrapDist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
   <link href="css/style.css" rel="stylesheet">

  </head>

  <body><br>
  
  
    <?php include 'nav.php' ?>
    
    <div class="container">
      <form action="addDrink.php" method="post" class="form-signin">
        <h2 class="form-signin-heading">Add / Update Drinks</h2>
       <?php if(isset($drinks_id)) echo "<input type='hidden' name='drinks_id' value=" . $drinks_id ." >"; ?>
          <div>
              <label for="brand_id">Brand:</label>
              <select name="brand_id">
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
              <label for="topseller">Topseller:</label>
              <input type="text" name="topseller" class="form-control" <?php if (isset($drinks['topseller'])) echo "value='" .$drinks['topseller'] . "'"; ?> />
          </div>
          <div>
              <label for="flavor">Flavor:</label>
              <input type="text" name="flavor" class="form-control" <?php if (isset($drinks['flavor'])) echo "value='" .$drinks['flavor'] . "'"; ?> />
          </div>
          <div>
              <label for="taste">Taste:</label>
              <input type="text" name="taste" class="form-control" <?php if (isset($drinks['taste'])) echo "value='" .$drinks['taste'] . "'"; ?> />
          </div>
          <div>
              <label for="cost">Cost:</label>
              <input type="text" name="cost" class="form-control" <?php if (isset($drinks['cost'])) echo "value='" . $drinks['cost'] . "'"; ?> />
          </div>
          <div>
            <label for="nutritional_value">Nutritional_Value:</label>
            <textarea name="nutritional_value" class="form-control"><?php if (isset($drinks['nutritional_value'])) echo $drinks['nutritional_value']; ?></textarea>
          </div>
          <div class="button">
              <button type="submit" class="btn btn-lg btn-primary btn-block">Submit</button>
          </div>
      </form>
    </div>
    
  </body>
  <?php include 'footer.php' ?>
</html>