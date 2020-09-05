<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Including PHP file (Part2)</title>
  </head>
  <body>
    <?php
      $title = "My first post";
      $author = "Veevek";
      $wordCount = 500;
      include "article-header.php"
    ?>
    <?php
      include "useful-tool.php";
      sayHi(" veevek<br>");
      echo $feetInMiles;
     ?>
  </body>
</html>
