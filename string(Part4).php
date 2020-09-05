<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Part 4</title>
  </head>
  <body>

    <?php
      $phrase = "Giraffe Academy";
    //lower string
      echo strtolower("$phrase<br>");
    //upper string
      echo strtoupper("veevek <br>");
    //String length
      echo strlen($phrase);
      $phrase[0] = "B";
      //replace string
        echo str_replace("Giraffe","Panda","$phrase<br>");
      //
        echo substr($phrase, 8, 3);
     ?>

  </body>
</html>
