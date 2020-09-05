<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>For loop (Part 21)</title>
  </head>
  <body>
    <?php
       //for ($i=0; $i <= 5 ; $i++) {
         //echo "$i <br>";
       //}
       $luckyNumbers = array(2, 4, 6, 8, 10, 12);
       for ($i=0; $i < count($luckyNumbers); $i++) {
         echo "$luckyNumbers[$i] <br>";
       }
     ?>

  </body>
</html>
