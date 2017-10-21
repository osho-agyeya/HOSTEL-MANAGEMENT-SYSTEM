<?php
session_start();
$user = 'root';
$password = 'root';
$db = 'iwp_project';
$host = 'localhost';
$port = 3306;

$link = mysql_connect(
   "$host:$port", 
   $user, 
   $password
) or die(mysql_error());

$db_selected = mysql_select_db(
   $db,  
   $link
) or die(mysql_error());

?>
