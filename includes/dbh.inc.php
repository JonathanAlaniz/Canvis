<?php
  
    /*Change these variables to match your host providers database. 
    If in doubt I can provide database connection advice for a low,
    low, price ;) */
    
    $servername = "localhost:3306";
    $database = "example_canvis";
    $dBUsername = "example_admin";
    $dBPassword = "examplePassword1987";
    
    // Create connection
    $conn = mysqli_connect($servername, $dBUsername, $dBPassword, $database);
    // Check connection
    if (!$conn) {
      die("Connection failed: " . mysqli_connect_error());
}
?>
