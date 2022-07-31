<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Fucntion(Part 14)</title>
  </head>
  <body>
    <?php
      function sayHi($name, $age){
        echo "Hello $name, you are $age years old. <br>";
      }

      sayHi("Mike",30);
      sayHi("Tom",20);
      sayHi("Dave",35);

      //revise
      function sayHello(){
        return "Hello!";
      }
      echo sayHello();

      function employee($emp_name,$emp_id){
        
        echo $emp_name."<br>".$emp_id;
      }
      employee("Ram Khadka", 1);
      ?>
  </body>
</html>
