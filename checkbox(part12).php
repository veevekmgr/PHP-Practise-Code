<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Checkboxes(part 12)</title>
  </head>
  <body>
    <form action="checkbox(part12).php" method="post">
    Which fruits do you like?<br>
      Apples: <input type="checkbox" name="fruits[]" value="Apples"><br>
      Oranges: <input type="checkbox" name="fruits[]" value="Oranges"><br>
      Pears: <input type="checkbox" name="fruits[]" value="Pears"><br>
      <input type="submit">
    </form>


    <?php
    $fruits = $_POST["fruits"];
    if(empty($fruits)){
      echo "You didn't select any fruits. Thats means you dont like any fruits above listed.";
    }else{
      $N = count($fruits);
      echo ("You selected $N fruit(s).");
      for($i=0; $i< $N;$i++){
        echo($fruits[$i]." ");
      }
    }

    ?>
  </body>
</html>
