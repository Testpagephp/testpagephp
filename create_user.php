<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>List of users</title>
    <link rel="stylesheet" href="style.css"/>
</head>
<body>
<?php
require 'user_manage.php';
$name = $_REQUEST['name'];
$last_name = $_REQUEST['lastName'];
$year = $_REQUEST['year'];
$bio = $_REQUEST['bio'];
$add = new User($link);
$res = $add->add($name,$last_name,$year,$bio);
if($res){
    header("Location: user_account.php?user_id=" .$link->insert_id);
}else{
    echo "При запросе произошла ошибка, попробуйте снова";
}
exit();
?>
</body>
</html>