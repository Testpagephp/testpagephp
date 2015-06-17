<!DOCTYPE html>
<html>
<head>
    <meta charset="windows-1251">
    <title>Title of the document</title>
    <link rel="stylesheet" href="style.css"/>
</head>
<body>
<?php require 'db_connection/database_connection.php' ?>
<h1>Регистрация</h1>
<div class="intro-form">
    <form action="create_user.php" method="post">
        <label for="name">Имя</label>
            <input type="text" name="name" placeholder="Имя"/><br/>
        <label for="lastName">Ваша фамилия</label>
            <input type="text" name="lastName" placeholder="Фамилия"/><br/>
        <label for="year">Год рождения</label>
             <input type="text" name="year" placeholder="Год рождения"/><br/>
        <label for="shortDesc">Краткая информация</label>
        <textarea name="bio" cols="30" rows="10"></textarea>
        <input type="submit" value="Зарегистрироваться"/>
            
    </form>
</div>
</body>
</html>

