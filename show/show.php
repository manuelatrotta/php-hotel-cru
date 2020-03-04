<?php
include __DIR__ . '/../partials/header.php';
?>
  <body>
    <div class="card">
      <ul>
        <?php include 'server.php' ?>
          <li>ID: <?php echo $room['id']; ?></li>
          <li>Floor: <?php echo $room['floor']; ?></li>
          <li>Room number: <?php echo $room['room_number']; ?></li>
          <li>Beds: <?php echo $room['beds']; ?></li>
        </ul>
      </div>
  </body>
</html>
