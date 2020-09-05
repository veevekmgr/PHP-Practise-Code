<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>calculator(Part8)</title>
  </head>
  <body>
    <form action="calculator(Part8).php" method="get">
      Enter first Number: <br><input type="number" name="num1">
      <br>
      Enter Second Number: <br><input type="number" name="num2">
      <br>
      <br>
      <input type="submit">

    </form>

    Answer:
    Addition: <?php echo $_GET["num1"] + $_GET["num2"] ?>
    <br>
    Substraction: <?php echo $_GET["num1"] - $_GET["num2"] ?>
    <br>
    Multiplication: <?php echo $_GET["num1"] * $_GET["num2"] ?>
    <br>
    Division: <?php echo $_GET["num1"] / $_GET["num2"] ?>
    <br>
    Modulo: <?php echo $_GET["num1"] % $_GET["num2"] ?>
  </body>
</html>
