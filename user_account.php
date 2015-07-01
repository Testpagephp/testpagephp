<!--шаблон для вывода личной страницы пользователя-->
<?php
$name = $final['first_name'];
$bio = $final['bio'];
$last_name = $final['last_name'];
$usid = $final['user_id'];
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Account of <?= $name?></title>
    <link rel="stylesheet" href="../style.css"/>
</head>
<body>
<div class="main-content">
    <div class="north column">
        <p>Greetings, <?= $name ?> <?= $last_name ?> <a href="update_user.php?user_id=<?= $usid ?>" class="button">Редактировать данные</a></p>
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