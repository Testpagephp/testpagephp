<?php
require_once 'user_manage.php';
$id = $_REQUEST['user_id'];
$row = new User($link);
$final = $row -> show($id);
$name = $final['first_name'];
$last_name = $final['last_name'];
$bio = $final['bio'];
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Account of <?= $name?></title>
    <link rel="stylesheet" href="style.css"/>
</head>
<body>
<div class="main-content">
    <div class="north column">
        <p>Greetings, <?= $name ?> <?= $last_name ?> <a href="update_user.php?user_id=<?= $id ?>" class="button">Редактировать данные</a></p>
    </div>
    <div class="west column">
        <!--photo-->
    </div>
    <div class="east column">
        <?= $bio ?>
    </div>
</div>
</body>
</html>