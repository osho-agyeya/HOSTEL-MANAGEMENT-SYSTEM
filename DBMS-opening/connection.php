<?php
session_start();
$user = 'root';
$password = '';
$db = 'dbms_project';
$host = 'localhost';
$port = 3306;

$link = @mysql_connect(
   "$host:$port", 
   $user, 
   $password
) or die("not connected");

$db_selected = @mysql_select_db(
   $db, 
   $link
) or die("database not found");

?>