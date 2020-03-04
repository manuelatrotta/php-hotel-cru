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
           <td></td>
           <td></td>
           <td> <a href="#">VIEW</a> </td>
           <td><a href="#">UPDATE</a></td>
           <td><a href="#">DELETE</a></td>
         </tr>
        <?php }
          } ?>
       </tbody>
     </table>

   </body>
 </html>
