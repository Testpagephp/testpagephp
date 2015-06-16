<?php require ('header.php');?>
<?php require 'database_connection.php'?>
<h1>Админ - часть</h1>
<form action="formControl.php" type="post">
    <label for="name">Имя</label>
        <input type="text" name="name" placeholder="Имя"/><br/>
    <label for="lastName"></label>
        <input type="text" name="lastName" placeholder="Фамилия"/><br/>
    <label for="year"></label>
         <input type="text" name="year" placeholder="Год рождения"/><br/>
    <input type="submit" value="Отправить"/>
</form>



<?php
require ('footer.php'); ?>