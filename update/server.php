<?php
//includo i file relativi al database e a env
include_once __DIR__ . '/../env.php';
include __DIR__ . '/../database.php';
include __DIR__ . '/../functions.php';

//controllo che il campo id,beds,floor e room_number non risultino vuoti
if (empty($_POST['id'])) {
  die('Id non inserito');
}
if (empty($_POST['beds'])) {
  die('Non hai inserito il numero di letti');
}
if (empty($_POST['floor'])) {
  die('Non hai inserito il piano');
}
if (empty($_POST['room_number'])) {
  die('Non hai inserito il numero di stanza');
}
//dichiaro le variabili tramite $POST
$roomId = $_POST['id'];
$beds = $_POST['beds'];
$floor = $_POST['floor'];
$roomNumber = $_POST['room_number'];

//ciclo in controllo che se il valore immesso non è un numero segnale all'utente
foreach($_POST as $key => $value) {
  if (intval($value) == 0) {
    die("$key non è un numero");
  }
}

$result = getById($conn, 'stanze', $roomId);


if (count($result) > 0) {

  $sql = "UPDATE `stanze` SET `room_number` = ?, `beds` = ?, `floor` = ?, `updated_at` = NOW() WHERE id = ?";
  $stmt = $conn->prepare($sql);
  $stmt->bind_param("iiii", $roomNumber, $beds, $floor, $roomId);
  $stmt->execute();
  $conn->close();
  // var_dump($stmt); die();

  // $result = $conn->query($sql);

  if ($stmt->affected_rows > 0) {
    header("Location: $basePath/show/show.php?id=$roomId");
  } else {
    echo 'KO';
  }
}
else {
  die('La stanza non esiste');
