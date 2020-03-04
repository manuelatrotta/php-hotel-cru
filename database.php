<?php
  include 'env.php';
  // connect
  $conn = new mysqli($servername, $username, $password, $dbname);
//check connection
  if ($conn && $conn->connect_error) {
    echo "Connection failed: " . $conn->connect_error;
    die();
  }

  $sql = " SELECT * FROM ospiti";
  $result = $conn ->query($sql);
  var_dump($result);
  if ($result && $result->num_rows > 0) {
  $rooms = [];
  while($row = $result->fetch_assoc()) {

    $rooms[] = $row;
    }
  } elseif ($result) {
    echo "No result";
  } else {
    echo "Query error";
}
  $conn->close();

?>
