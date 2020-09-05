<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>If Statement (Part 16)</title>
  </head>
  <body>
    <form action="if(part16).php" method="post">
        Enter a Number: <input type="number" name="num">
        <br>
        <input type="submit">
    </form>
  <?php
      /*$isMale = false;
      $isTall = true;
      if ($isMale &&  $isTall){
        echo "You are tall male.";
      }elseif ($isMale && !$isTall) {
        echo "You are short male.";
      }elseif (!$isMale && $isTall) {
        echo "You are not male but you are Tall.";
      }
      else {
        echo "You are not male and not tall.";
      }*/
      $isEven = $_POST["num"];
    //  function isNumeric($isEven){
      //  if
      //}
      if ($isEven % 2 == 0) {
        echo "Entered number is Even.";
      }elseif (is_numeric ($isEven) ) {
        echo "Input place is empty .Please input number again";
      }
      else {
        echo "Entered number is odd.";
      }

    ?>
  </body>
</html>
