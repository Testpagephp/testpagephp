<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Данные изменены</title>
    <link rel="stylesheet" href="style.css"/>
</head>
<body>
<?php
require_once 'user_manage.php';
$id = $_REQUEST['user_id'];
$name = $_REQUEST['name'];
$last_name = $_REQUEST['lastName'];
$bio = $_REQUEST['bio'];
$year = $_REQUEST['year'];
?>
<?php
    $user = new User($link);
    $res = $user->update($id,$name,$last_name,$year,$bio);
        if($res!=0)
            echo "Страница успешно обновлена <a href='all_users.php'>вернуться на страницу пользователей</a>"
?>
</body>
</html>
