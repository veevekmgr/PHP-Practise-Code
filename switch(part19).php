<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Switch Statement (Part 19)</title>
  </head>
  <body>
    <form action="switch(part19).php" method="post">
      Enter the number of days in week(1-7):<br>
      <input type="number" name="day"><br>
      <input type="submit">
    </form>

    <?php
      $day = $_POST["day"];
      switch ($day) {
        case '1':
          echo "Sunday";
          break;

        case '2':
          echo "Monday";
          break;

        case '3':
          echo "Tuesday";
          break;

        case '4':
            echo "Wednesday";
            break;

        case '5':
            echo "Thursday";
            break;

        case '6':
            echo "Friday";
            break;

        case '7':
            echo "Saturday";
            break;

        default:
          echo "Invalid Input! Please enter number between 1 to 7!";
          break;
      }
    ?>
  </body>
</html>
