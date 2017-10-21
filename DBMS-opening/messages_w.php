<?php
include 'connection.php';
if(isset($_POST['sub']))
{
	date_default_timezone_set('Asia/Kolkata');
	$date=date('Y/m/d h:i:s a', time());;
	echo $date;
	$message=$_POST['message'];
	$query="insert into message values('$message','$date');";
	@mysql_query($query) or die('No');
}
echo 'balle';
?>