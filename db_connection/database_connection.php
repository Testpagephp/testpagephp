<?php
require 'app_config.php';//���������� ��������� ��

$link = mysqli_connect(DATABASE_HOST, DATABASE_USERNAME, DATABASE_PASSWORD)
    or die("<p> Error to DB connection ". mysql_error()."</p>");

mysqli_select_db($link, DATABASE_NAME)
    or die("<p>Error has been occured". mysql_error() ."</p>");

?>