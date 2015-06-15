<?php
require 'database_connection.php';
$name = $_REQUEST['name'];
$last_name = $_REQUEST['lastName'];
$year = $_REQUEST['year'];
$insert_sql = "INSERT INTO users(first_name, last_name, bd_year) VALUES('{$name}', '{$last_name}', '{$year}')";
mysql_query($insert_sql)
    or die(mysql_error());
 ?>