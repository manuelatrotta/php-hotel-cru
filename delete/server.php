<?php
  include __DIR__ . '/../database.php';

  if(empty($_POST['id'])) {
    die('Id non corretto');
  }

  $roomId = $_POST['id'];

  //controlliamo che l'id esiste
  $sql = "SELECT * FROM `stanze` WHERE `id` =  '$roomId'";

  $result = $conn->query($sql);

  if ($result && $result->num_rows == 0) {
    die('Id non corretto');
  }


  $sql = "DELETE FROM `stanze` WHERE `id` =  '$roomId'";

  $result = $conn->query($sql);

  if($result ) {

    header("Location: $basePath?roomNumber=$roomId");
  } else {
    echo 'KO';
  }

  $conn->close();
