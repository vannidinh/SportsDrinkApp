<?php
   
    include 'dbConnection.php';
    
  
    $sql = "SELECT
       brand.ID as update_id, brand.Brand as brandName, City, State, Manufacturer 
      FROM brand";
      
     $result = $conn->query($sql);

  ?>
   
      <!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
        
        <title>UpdateDeleteBrand</title>
        
        <!-- Bootstrap core CSS -->
         <link href="bootstrapDist/css/bootstrap.min.css" rel="stylesheet">

         <!-- Custom styles for this template -->
         <link href="css/style.css" rel="stylesheet">
         <link href="css/vanform.css" rel="stylesheet">
       <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
        
        <!-- Latest compiled and minified JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
                
    
    </head>
   
    
      <?php include 'nav.php' ?>
    <div class="container">

      <!--<h1  class="form-signin-heading">SportDrinkApp</h1>-->

      <h2><a class="" href="">Brands</a></h2>
      
      <table class = "table table-bordered">
   <thead >
      <tr BGCOLOR="#eee6ff">
         <th><FONT COLOR ="green">Brand</FONT></th>
         <th><FONT COLOR ="green">City</FONT></th>
         <th><FONT COLOR ="green">State</FONT></th>
         <th><FONT COLOR ="green">Manufacturer</FONT></th>
         <th></th>
         <th></th>
      </tr>
   </thead>
   
  
      
    <?php
    
      if ($result->num_rows > 0) {
          // output data of each row
          while($row = $result->fetch_assoc()) {
              echo 
                "<tr BGCOLOR =#ffe6e6><td>" . $row['brandName'] . "</td><td>" . $row['City'] . "</td><td>"  . $row['State'] .
               "</td><td>"  . $row['Manufacturer'] .
               "</td><td>  <a href=deleteBrand.php?update_id=" . $row['update_id']  ."> delete Brand</a>" .
               "</td><td> <a href=updateBrandForm.php?update_id=" . $row['update_id']  ."> update Brand</a>" . "</td></tr>";
               
             
               
          }
      }
?>
    </tbody>
 </table>
  </div>
    </body>
</html>   
<?php include 'footer.php' ?> 