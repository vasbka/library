<!DOCTYPE html>
<head>
    <link rel="stylesheet" type="text/css" href="../style.css">
    <script src="jquery-3.1.1.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
</head>
<html>
    <body>
    <a href="../index.php" > Назад</a>
        <div class="addAuthor block" >
            Добавить автора :
            <input id="authorName" placeholder="ФИО автора">
            <button id="postAuthorName"> Добавить</button>
            <script>
                $('#postAuthorName').click(function(){
                    if(document.getElementById('authorName').value!="")
                        $.ajax({
                            type: "POST",
                            url: "added.php",
                            data: 'authorName='+document.getElementById('authorName').value,
                            success: function(data){
                                alert(data);
                            }
                        });
                    else
                        alert('поле не заполнено');
                });
            </script>

        </div>
        <div class="addBook block">
            Добавить книгу :
            <input id="bookName" placeholder="Название книги">
            <button id="postBookName">Добавить</button>
            <script>
                $('#postBookName').click(function(){
                    if(document.getElementById('bookName').value!="")
                        $.ajax({
                            type: "POST",
                            url: "added.php",
                            data: 'bookName='+document.getElementById('bookName').value,
                            success: function(data){
                                alert(data);
                            }
                        });
                    else
                        alert('поле не заполнено');
                });
            </script>
        </div>
        <div class="addConnect block">
            Добавить связь :
            <select id="ConnectAuthor">
                <option value ="0" disabled selected>Выбор писателя</option>
                <? if($authors) foreach($authors as $author): ?>
                    <option value = <?=$author[0]?>><?=$author[1]?></option>
                <? endforeach;?>
            </select>
            <select id="ConnectBook">
                <option value="0" disabled selected>Выбор книги</option>
                <? if ($books) foreach($books as $book): ?>
                    <option value = <?=$book[0]?>><?=$book[1]?></option>
                <? endforeach;?>
            </select>
            <button id="postConnection">Добавить</button>
            <script>
                $('#postConnection').click(function(){
                    if(document.getElementById('ConnectAuthor').value!=0 && document.getElementById('ConnectBook').value!=0  )
                        $.ajax({
                            type: "POST",
                            url: "added.php",
                            data: 'authorValue='+document.getElementById('ConnectAuthor').value+'&bookValue='+document.getElementById('ConnectBook').value+'',
                            success: function(data){
                                alert(data);
                            }
                        });
                    else
                        alert('Одно из полей не заполнено');
                });
            </script>
        </div>

    </body>
</html>
