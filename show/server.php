<?php
  include 'database.php';

  $idRoom= $_GET['id'];

  $sql = "SELECT * FROM stanze";
  $result = $conn->query($sql);

  if ($result && $result->num_rows > 0) {
     $room = $result->fetch_assoc();
  } elseif ($result) {
    echo "No result";
  } else {
    echo "Query error";
  }
  $conn->close();
