<?php
include 'database.php';
 ?>

 <!DOCTYPE html>
 <html lang="en" dir="ltr">
   <head>
     <meta charset="utf-8">
     <link rel="stylesheet" href="dist/app.css">
     <title>php-hotel-crud</title>
   </head>
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
