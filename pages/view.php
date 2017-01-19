<!DOCTYPE html>
<head>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<html>
    <body>

    <div class="content">
        <div class="menu">
            <a href="add.php"> Добавить </a>
        </div>
        <? if($booksAuthors) foreach($booksAuthors as $book): ?>
            <? if($prevName != $book[0] && !empty($prevName)):?>
                </div>
            <? endif;?>
            <?
                if($prevName != $book[0]): //odin raz vuvod nazvaniya knigi
                    $prevName = $book[0];
                if(empty($lastName))
                    $lastName = $book[0];
            ?>
                <!--vuvod nazvaniya knigi nad kotoroi rabotali -->
                <div class="borderForInfo">
                <div class="aboutBook">
                    Над книгой "<?=$book[0]?>" работали :
                </div>
                <!-- end vuvod nazvaniya knigi -->
            <?endif;?>
            <!-- vuvod avtorov -->
            <div class ="nameAuthors">
                - <?=$book[1]?>
                <br>
            </div>
            <!-- end vuvod avtorov -->
        <? endforeach;?>
    </div>
    </body>
</html>
