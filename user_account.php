<?php
require 'db_connection/database_connection.php';
$id = $_REQUEST['user_id'];
$query = "SELECT * FROM users WHERE user_id=".$id;
$result = $link->query($query);
if(!$result) die("Error with finding user id={$id}");
$row = $result->fetch_array(MYSQLI_ASSOC);

$name = $row['first_name'];
$last_name = $row['last_name'];;
$bio = $row['bio'];
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Account of <?php echo $name?></title>
    <link rel="stylesheet" href="style.css"/>
</head>
<body>
<div class="main-content">
    <div class="north column">
        <p>Greetings, <?php echo $name." ".$last_name ?></p>
    </div>
    <div class="west column">

    </div>
    <div class="east column">
        <?php echo $bio ?>
    </div>
</div>
</body>
</html>

