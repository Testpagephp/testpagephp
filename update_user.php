<?php
require_once 'user_manage.php';
$id = $_REQUEST['user_id'];
$row = new User($link);
$final = $row -> show($id);
$name = $final['first_name'];
$last_name = $final['last_name'];
$bio = $final['bio'];
$year = $final['bd_year'];
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Изменить данные <?= $name?></title>
    <link rel="stylesheet" href="style.css"/>
</head>
<body>
<h1>Изменить данные</h1>
<div class="intro-form">
    <form action="change_user.php" method="GET">
        <label for="name">Имя</label>
        <input type="text" name="name" placeholder="Имя" value="<?=$name?>"/><br/>
        <label for="lastName">Ваша фамилия</label>
        <input type="text" name="lastName" placeholder="Фамилия" value="<?=$last_name?>"/><br/>
        <label for="year">Год рождения</label>
        <input type="text" name="year" placeholder="Год рождения" value="<?=$year?>"/><br/>
        <label for="shortDesc">Краткая информация</label>
        <textarea name="bio" cols="30" rows="10"><?=$bio?></textarea>
        <input type="hidden" name="user_id" value="<?= $id ?>"/>
<!--        <input type="hidden" name="MAX_FILE_SIZE" value="20000" />-->
<!--        <input name="userfile" type="file"/>-->
        <input type="submit" value="Обновить"/>
    </form>
</body>
</html>