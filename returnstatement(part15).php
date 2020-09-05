<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Return Statement(part 15)</title>
  </head>
  <body>

    <?php
      function cube($num){
        return $num *$num * $num;
      }
      //echo cube(5);
      $cubeResult = cube(4);
      echo $cubeResult;
    ?>
  </body>
</html>
