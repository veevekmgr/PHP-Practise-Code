<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Associative Array(part13).php</title>
  </head>
  <body>
<form action="associativearray(part13).php" method="post">
  <input type="text" name="student">
  <!--<input type="text" name="student">-->
  <input type="submit">
</form>


    <?php
      $grades = array("Jim"=>"A+", "Pam"=>"B-", "Oscar"=>"C+");
      //$grades["Jim"] = "F";
      //echo count($grades);
      //echo $grades["Jim"];
      echo $grades[$_POST["student"]];
    ?>

  </body>
</html>
