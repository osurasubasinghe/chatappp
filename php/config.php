<?php
  $hostname = "sql302.infinityfree.com";
  $username = "if0_34613546";
  $password = "2zyght0nR1Kd97";
  $dbname = "if0_34613546_chatapp";

  $conn = mysqli_connect($hostname, $username, $password, $dbname);
  if(!$conn){
    echo "Database connection error".mysqli_connect_error();
  }
?>
