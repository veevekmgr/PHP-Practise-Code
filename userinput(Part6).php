<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Part 7</title>
  </head>
  <body>
       <form action="userinput(Part6).php" method="get">
          Name: <br><input type="text" name="name">
          <br>
          Age: <br><input type="number" name="age">
          <br>
          <input type="submit">
       </form>
     </br>
     Your name is <?php
        echo $_GET["name"];
      ?>
      <br>
      Your age is <?php
         echo $_GET["age"];
       ?>
  </body>
</html>
