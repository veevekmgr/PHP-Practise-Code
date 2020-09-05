<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>madlibs(Part8)</title>
  </head>
  <body>

    <form action="madlibs(Part8).php" method="get">
      Color: <br><input type="text" name="color"><br>
      Plural Noun: <br><input type="text" name="pluralNoun"><br>
      Celebrity: <br><input type="text" name="celebrity"><br>
      <br>
      <input type="submit">

    </form>
    <br><br>

    <?php
    $color = $_GET["color"];
    $pluralNoun = $_GET["pluralNoun"];
    $celebrity = $_GET["celebrity"];
      echo "Roses are $color <br>";
      echo "$pluralNoun are blue <br>";
      echo "I love $celebrity<br>";
     ?>
  </body>
</html>
