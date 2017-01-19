<?
    if($_POST['bookName']){
        $CONNECT = new PDO('mysql:host=localhost;dbname=library','root','');
        $CONNECT->prepare("Insert into books values ('','".$_POST['bookName']."')")->execute();
        echo 'Запись добавлена успешно';
    }
    if($_POST['authorName']){
        $CONNECT = new PDO('mysql:host=localhost;dbname=library','root','');
        $CONNECT->prepare("Insert into author values ('','".$_POST['authorName']."')")->execute();
        echo 'Запись добавлена успешно';
    }
    if($_POST['authorValue']) {
        $CONNECT = new PDO('mysql:host=localhost;dbname=library', 'root', '');
        $CONNECT->prepare("Insert into bookAuthor values (''," . $_POST['authorValue'] . "," . $_POST['bookValue'] . ")")->execute();
        echo 'Запись добавлена успешно';
    }

?>