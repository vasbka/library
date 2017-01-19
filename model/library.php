<?
    function getBookWithAuthor(){
        $CONNECT = new PDO('mysql:host=localhost;dbname=library','root','');
        return $CONNECT->query("select books.name, author.namev from books, author inner join bookAuthor where bookauthor.bookId = books.bookId and bookauthor.authorId = author.authorId");
    }
    function getAllAuthor(){
        $CONNECT = new PDO('mysql:host=localhost;dbname=library','root','');
        return $CONNECT->query("select * from  author ");

    }
    function getAllBooks(){
        $CONNECT = new PDO('mysql:host=localhost;dbname=library','root','');
        return $CONNECT->query("select * from books");
    }

 ?>
