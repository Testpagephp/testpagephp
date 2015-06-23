<?php
if(!isset($_REQUEST['err'])){
    $errlog = "Ошибка 404.Такой страницы не существует";
}else{
switch ($_REQUEST['err']){
    case 1:
        $errlog = "Такой страницы не сущуствует!";
        break;
    }
}
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>List of users</title>
    <link rel="stylesheet" href="style.css"/>
</head>
<body>
<h1>Возникла ошибка!</h1>
<p style="text-align: center"><?php echo $errlog ?></p>
</body>
</html