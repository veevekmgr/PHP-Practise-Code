<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>While Loop (Part 20)</title>
  </head>
  <body>
    <?php
    //While loop
      $index = 1;
      while ($index <= 5) {
        echo "$index <br>" ;
        $index++;
      }
      $index = 10;
while ($index >= 0)
{
    echo "The index is ".$index.".<br>";
    $index--;
}

    //Do-while loop
      $index1 = 0;
      do {
        echo "$index1 <br>";
        $index1++;
      } while ($index1 <= 5);
?>
<?php
    //while revise
    
    $i = 1;
    while($i <=5){
      echo "<br>$i";
      $i++;
    }

    //do-while

    $in = 3;
    do{
      //execute this line at least once
      echo "<br>$in<br>";
      $in--;
    }while($in>0);
?>
  </body>
</html>