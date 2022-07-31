<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Array(Paret 11)</title>
  </head>
  <body>

    <?php
      $friends = array("Kevin", "Karen","Oscar", "Jim");
      $friends[4] = "Angela";
      echo $friends[4];
      echo count($friends);
      ?>
      <p> Ascending alphabetical/numerical order </P>
      <br>
      <?php
      asort($friends);
      print_r($friends);
      ?>
      <p> Ascending alphabetical/numerical order </p>
      <br>
      <?php
      ksort($friends);
      print_r($friends);
      ?>
      <p>descending alphabetical/ numerical order</p>
       <br>
      <?php
      arsort($friends);
      print_r($friends);
      //revise
      $marks = array(100, 90, 70, 80, 85);
      echo (max($marks).""."<br>");
      echo (min($marks).""."<br>");
      ?>
      <p> Sorting </p>
      <?php
      sort($marks);
        print_r($marks);

        rsort($marks);
        print_r($marks);


      $marks[1] = 95;
      echo "<br>$marks[1]<br>";

      echo count($marks).""."<br>";

      foreach($marks as $numbers){
        echo "$numbers <br>";
      }
    ?>

  </body>
</html>
