<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Advanced Calculator (Part 18)</title>
  </head>
  <body>
    <form action="advancecalculator(Part18).php" method="post">
      Enter First Number:  <br><input type="number" step="0.001" name="num1"><br>
      Operator: <br><input type="text" name="op"><br>
      Enter Second Number:  <br><input type="number" name="num2"><br>
      <br>
        <input type="submit">
    </form>

    <?php
    $num1 = $_POST["num1"];
    $num2 = $_POST["num2"];
    $op = $_POST["op"];

    if($op == "+"){
      echo $num1 + $num2;
    }elseif($op == "-"){
      echo $num1 - $num2;
    }elseif($op == "/"){
      echo $num1 / $num2;
    }elseif($op == "*"){
      echo $num1 * $num2;
    }elseif($op == "%"){
      echo $num1 % $num2;
    }else{
      echo "Invalid Operator!";
    }

     ?>
  </body>
</html>
