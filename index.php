<?
    require_once __DIR__.'\model\library.php';
    $booksAuthors = getBookWithAuthor();


    if(strstr($_SERVER['REQUEST_URI'],'add.php')!==false){
        $authors = getAllAuthor();
        $books = getAllBooks();
        require_once __DIR__ . '\pages\add.php';
    }else if(strstr($_SERVER['REQUEST_URI'],'added.php')!==false){
        require_once __DIR__ . '\pages\added.php';
    }else
        require_once __DIR__ . '\pages\view.php';


?>