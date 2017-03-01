<?php
   
    include 'dbConnection.php';
    
   
   $sql = "SELECT
      drinks.ID as drinks_id, drinks.topseller as topsellerName, flavor, taste, cost, nutritional_value,
      brand.Brand as brandName, City, State, Manufacturer
     FROM drinks JOIN brand ON brand.ID = drinks.brand_id";
    $result = $conn->query($sql);


   
   ?>
   
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <title>SportDrinkApp Form</title>

    <!-- Bootstrap core CSS -->
    <link href="bootstrapDist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/style.css" rel="stylesheet">
   
  </head>
    <body>
        
  

  <div class="container"><br><br>
  
 <?php include 'nav.php' ?>
    
    <h1 class="form-signin-heading">SportDrinkApp</h1>
       <!--<h2><a href="BrandForm.php">Add Brand</a></h2>-->
       <!--<h2><a href="DrinkForm.php">Add Drink</a></h2>-->
       
       
     

<table class = "table table-bordered" style="white-space: nowrap">
   <thead >
     <tr BGCOLOR="#eee6ff">
         <th><FONT COLOR ="green">Topseller</FONT></th>
         <th><FONT COLOR ="green">Flavor</FONT></th>
         <th><FONT COLOR ="green">Taste</FONT></th>
         <th><FONT COLOR ="green">Brand</FONT></th>
         <th><FONT COLOR ="green">City</FONT></th>
         <th><FONT COLOR ="green">State</FONT></th>
         <th><FONT COLOR ="green">Manufacturer</FONT></th>
         <th></th>
         <th></th>
         
      </tr>
   </thead>
   
 
     
         
       <tbody >
     
     <?php
              // output data of each row
              while($row = $result->fetch_assoc()) {
              echo "<tr BGCOLOR =#ffe6e6><td>" . $row['topsellerName'] . "</td><td>" . $row['flavor'] . "</td><td>" . $row['taste'] .
              "</td><td>" . $row['brandName'] . "</td><td>" . $row['City'] . "</td><td>" . $row['State'] .
              "</td><td>" . $row['Manufacturer'] . 
              "</td><td> <a href=deleteDrink.php?drinks_id=" . $row['drinks_id']  ."> delete drink</a>" . 
              "</td><td> <a href=DrinkForm.php?drinks_id=" . $row['drinks_id']  . "> update drink</a>". "</td></tr>";
              }
        ?>
     
     
        </tbody>
        </table>
        </div>
        </div>
      
     
      
      
     
       
    </body>
    
</html> 
<?php include 'footer.php' ?> 