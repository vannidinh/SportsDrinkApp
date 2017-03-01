<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <title>SportDrinkApp Brand Form</title>

    <!-- Bootstrap core CSS -->
    <link href="bootstrapDist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/style.css" rel="stylesheet">

  </head>

  <body><br><br>

  
    <?php include 'nav.php' ?>
    <div class="container">
    
      <form action="addBrand.php" method="post" class="form-signin">
        <h1 class="form-signin-heading">Enter Brand</h1>
        

      
         
     <div id="navbar" class="collapse navbar-collapse">
      <ul class="nav navbar-nav">
        <a href="updateDeleteBrandForm.php">Update / Delete Brand</a>
      </ul>
    </div><!--/.nav-collapse -->

        <label for="Brand">Brand:</label>
        <input type="text" name="Brand" class="form-control"/>

        <label for="City">City:</label>
        <input type="text" name="City" class="form-control"/>

        <label for="State">State:</label>
        <input type="text" name="State" class="form-control"/>

        <label for="Manufacturer">Manufactuer:</label>
        <input type="text" name="Manufacturer" class="form-control"/>

        <button type="submit" class="btn btn-lg btn-primary btn-block">Submit</button>
    
      </form>
    </div>
    <?php include 'footer.php' ?>
  </body>
</html>