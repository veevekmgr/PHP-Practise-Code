<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
      //echo max(3,6);
      function getMax($num1, $num2, $num3){
        if($num1 >= $num2 && $num1 >= $num3){
          return $num1;
        } elseif ($num1 <= $num2 && $num2 >= $num3){
          return $num2;
        }else
        return $num3;
      }

      echo getMax(30, 20, 30);

    ?>
  </body>
</html>
