<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title> Inheritance (Part 27)</title>
  </head>
  <body>
    <?php
      class Chef{
        function makeChicken(){
          echo "The chef makes chicken <br>";
        }
        function makeSalad(){
          echo "The chef makes salad <br>";
        }
        function makeSpecialDish(){
          echo "The chef can makes bbq ribs. <br>";
        }
      }
      class ItalianChef extends Chef{
        function makePasta() {
          echo "The italian chef can make Pasta. <br>";
        }

        function makeSpecialDish(){
          echo "The chef makes chicken parm. <br>";
        }
      }


      $chef = new Chef();
      $chef->makeSpecialDish();

      $italianchef = new ItalianChef();
      $italianchef->makeSpecialDish();
    ?>
  </body>
</html>
