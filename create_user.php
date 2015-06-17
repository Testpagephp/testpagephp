<?php
require 'db_connection/database_connection.php';
$name = $_REQUEST['name'];
$last_name = $_REQUEST['lastName'];
$year = $_REQUEST['year'];
$bio = $_REQUEST['bio'];
$query = "INSERT INTO users(first_name, last_name, bd_year, bio) VALUES('{$name}', '{$last_name}', '{$year}', '{$bio}')";
$link->query($query)
    or die(mysql_error());
header("Location: user_account.php?user_id=" .$link->insert_id);
exit();
 ?>