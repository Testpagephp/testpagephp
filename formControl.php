<?php
require 'database_connection.php';
$name = $_REQUEST['name'];
$last_name = $_REQUEST['lastName'];
$year = $_REQUEST['year'];
$query = "INSERT INTO users(first_name, last_name, bd_year) VALUES('{$name}', '{$last_name}', '{$year}')";
$link->query($query)
    or die(mysql_error());
 ?>