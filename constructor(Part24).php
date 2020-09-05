<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Constructor</title>
  </head>
  <body>
    <?php
    class Book{
      var $title;
      var $author;
      var $pages;

      function __construct($aTitle, $aAuthor, $aPages){
        $this->title = $aTitle;
        $this->author = $aAuthor;
        $this->pages = $aPages;
      }
    }

    $book1 = new Book("Harry Potter","JK Rolling", 500);
    $book1->title = "Hunger Games";
    $book2 = new Book("Lord Of Ring","Tolkien",700);

    echo $book1->title;
    //$book2->title = "Lord Of The Ring";
    //$book2->author = "Tolkien";
    //$book2->pages = 700;

    /*echo $book1->title;
    echo $book1->author;
    echo $book1->pages;

    echo $book2->title;
    echo $book2->author;
    echo $book2->pages;*/
    ?>
  </body>
</html>
