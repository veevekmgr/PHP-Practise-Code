<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Post(Part 10)</title>
  </head>
  <body>
    <form action="post(part10).php" method="post">
      Password: <input type="password" name="password"> </br>
      <input type="submit">
  </form>

  <?php
    echo $_POST["password"];
  ?>
  </body>
</html>
