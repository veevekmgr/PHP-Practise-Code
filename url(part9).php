<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Url Parameter(part 9)</title>
  </head>
  <body>
    <form action="url(part9).php" method="get">
      Name: <br><input type="text" name="name">
      <br>
      <input type="submit">
    </form>

    <?php
    echo $_GET["name"];
    ?>

  </body>
</html>
