<?php
   
   //Connect to the database
    $host = "127.0.0.1";
    $user = "vannidinh";                         //Your Cloud 9 username
    $pass = "";                                  //Remember, there is NO password by default!
    $db = "Sportsdrink";                         //Your database name you want to connect to
    $port = 3306;                                //The port #. It is always 3306
    
      // Create connection
        $conn = new mysqli ($host, $user, $pass, $db, $port);
     
     //Check connection
    if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
   
  
?>
