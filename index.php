<?php
include 'database.php';
include 'server.php';
include 'partials/header.php';
 ?>


<body>
  <?php if (!empty($_GET['roomNumber'])) { ?>
  <div class="alert alert-danger">
    é stata cancellata la stanza con ID : <?php echo $_GET['roomNumber'] ?>
  </div>
  <?php } ?>
  <div class="container">
    <div class="row">
      <div class="col-12 ">
        <h1>Tutte le stanze</h1>
        <table class="table">
          <thead>
            <tr>
              <td>ID</td>
              <td>Number room</td>
              <td>floor</td>
            </tr>
          </thead>
          <tbody>
        <?php if (!empty($rooms)) {
            foreach ($rooms as $room) { ?>
              <tr>
                <td><?php echo $room['id'] ?></td>
                <td><?php echo $room['room_number'] ?></td>
                <td><?php echo $room['floor'] ?></td>
                <td><a href="show/show.php?id=<?php echo $room['id']; ?>">VIEW</a></td>
                <td><a href="#">UPDATE</a></td>
                <td> <form class="" action="delete/delete.php" method="post" >
              <input type="hidden" name="id" value="<?php echo $room['id']; ?>">
              <input class="btn-danger" type="submit" name="" value="DELETE">
            </form>
           </td>
          </tr>
         <?php }
           } ?>
        </tbody>
      </table>
    </div>
  </div>
</div>
   </body>
 </html>
