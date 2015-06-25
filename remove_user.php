
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>List of users</title>
    <link rel="stylesheet" href="style.css"/>
</head>
<body>
<?php
require_once "user_manage.php";
$currid = $_REQUEST['user_id'];
$us = new User($link);
$removing =  $us->delete($currid);
    if($removing)
        echo "Юзер с user_id{$currid} был удален!";
    else
        echo "Во время выполнения удаления произошла ошибка";
?>
</body>
</html>