<?php
  include 'env.php';
  // connect
  $conn = new mysqli($servername, $username, $password, $dbname);
//check connection
  if ($conn && $conn->connect_error) {
    echo "Connection failed: " . $conn->connect_error;
    die();
  }

  $sql = "SELECT * FROM 'stanze' ";
  $result = $conn ->query($sql);
  var_dump($result);

 ?>
