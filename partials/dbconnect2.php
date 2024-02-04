<?php
  //script to connect to the databse
  $servername = "localhost";
  $username = "root";
  $password = "";
  $database = "arb";

  $conn = mysqli_connect($servername,$username,$password,$database);
  if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
?>