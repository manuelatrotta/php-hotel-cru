<?php
include 'database.php';
include 'partials/header.php';
 ?>

   <body>
     <table>
       <thead>
         <tr>
           <td>ID</td>
           <td>floor</td>
           <td></td>
           <td></td>
         </tr>
       </thead>
       <tbody>
         <?php if (!empty($rooms)) {
           foreach ($rooms as $room) { ?>
         <tr>
           <td><?php echo $room['id']; ?></td>
           <td><?php echo $room['room_number']; ?></td>
           <td><?php echo $room['floor']; ?></td>
           <td><a href="show/show.php?id=<?php echo $room['id']; ?>">VIEW</a></td>
           <td> <a href="#">VIEW</a> </td>
           <td><a href="#">UPDATE</a></td>
           <td> <form class="" action="delete/delete.php" method="post" >
             <input type="hidden" name="id" value="<?php echo $room['id']; ?>">
             <input type="submit" name="" value="">

           </form>
             DELETE</td>
         </tr>
        <?php }
          } ?>
       </tbody>
     </table>

   </body>
 </html>
