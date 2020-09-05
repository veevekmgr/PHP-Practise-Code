<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Checkboxes(part 12)</title>
  </head>
  <body>
    <form action="checkbox(part12).php" method="post">
      Apples: <input type="checkbox" name="fruits[]" value="apples"><br>
      Oranges: <input type="checkbox" name="fruits[]" value="oranges"><br>
      Pears: <input type="checkbox" name="fruits[]" value="pears"><br>
      <input type="submit">
    </form>


    <?php
    $fruits = $_POST["fruits"];
    echo $fruits[0];
    ?>
  </body>
</html>
