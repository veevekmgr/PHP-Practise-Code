<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
  <form action="ifcont(part17).php" method="post">
  Please enter First Number:<input type="number" name="num1" value="num1"><br>
  Please enter second Number:<input type="number" name="num2" value="num2"><br>
  Please enter third Number:<input type="number" name="num3" value="num3"><br>
  <input type="submit">
  </form>
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

      //Revise
      
      function getMaxi($num1, $num2, $num3){
        if($num1 >= $num2 && $num1 >= $num3){
          return $num1;
        } elseif ($num1 <= $num2 && $num2 >= $num3){
          return $num2;
        }else
        return $num3;
      }
      $number1 = $_POST["num1"];
      $number2 = $_POST["num2"];
      $number3 = $_POST["num3"];
      echo "<br>Greatest is".getMaxi($number1, $number2, $number3 );
      echo "<br>Minimum is".min($number1, $number2, $number3); 
      


    ?>
  </body>
</html>
