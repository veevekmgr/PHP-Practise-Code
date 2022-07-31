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
      if (empty($isEven)) {
        echo "Input place is empty .Please input number again";
      } elseif ($isEven % 2 == 0) {
        echo "$isEven is Even."; 
      }
      else {
        echo "$isEven is odd.";
      }

      //revise if and ifelsestatement
      $firstNumber = 2;
      if($firstNumber == 0){
        echo "<br>First Number is $firstNumber";
      }else{
        echo "<br>First Number is 0 not $firstNumber";
      }


      //nested if/else statement
      $number = array (100, 40, 200 );
      if($number[0]>$number[1] && $number[0]>$number[2]){
            echo "$number[0] is greatest among all";
          }
        if($number[1] > $number[0] && $number[1] > $number[2]){
          echo "$number[1] is greatest.";
        }       
        if($number[2] > $number[0] && $number[2] > $number[1]){
          echo "$number[2] is greatest.";
        } 

        //ternary operator
        $guest = 'Vivek';
        $message = '<br>Hello'." ".($user==!Null?$user:$guest);
        echo $message;
    ?>
  </body>
</html>
