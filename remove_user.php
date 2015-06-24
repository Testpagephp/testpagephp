<?php
require_once "user_manage.php";
$currid = $_REQUEST['user_id'];
$us = new User($currid, $link);
$removing =  $us->delete();
    if($removing)
        echo "user_id{$currid} has been deleted!"
?>