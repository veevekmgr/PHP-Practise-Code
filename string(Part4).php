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
    
      $last_name = 'O\'Brian';

      $quote = "Mary said, \"I want some toast,\"";
        echo substr($phrase, 8, 3);
        echo $last_name . "<br>";
        echo $quote;

        //revised
        $name = "VeeVek";

        echo strlen($name).""."<br>";
        echo str_word_count("I am a good boy");

        echo strrev($name);
        echo strpos("I am a good boy","good");

        $name[3] = "v";

        echo $name;

        echo str_replace("Veevek","Aerika","Hello"." ".$name);

        echo strtoupper($name);

        echo strtolower($name);


     ?>

  </body>
</html>
