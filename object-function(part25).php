<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <?php
    class Student{
      var $name;
      var $major;
      var $gpa;

      function __construct($name, $major, $gpa){
        $this->name = $name;
        $this->major = $major;
        $this->gpa = $gpa;
      }

      function hasHonors(){
        if($this->gpa >= 3.5){
          return "true";
        }
        return "false";
    }
  }
    $student1 = new Student("Veevek", "IT", 3.80);
    $student2 = new Student("Sita", "Business", 3.00);

    echo $student1->hasHonors();
    echo $student2->hasHonors();
  ?>
  <body>

  </body>
</html>
