<?php
include 'connection.php';
if(isset($_POST['submit']))
{
	$name=$_POST['name'];
	$regno=$_POST['regno'];
	$room=$_POST['room'];
	$complaint=$_POST['type'];
	$type=$_POST['describe'];
	$sql="INSERT INTO complaint values('$name','$regno',$room,'$complaint','$type')" or die('haha');
	mysql_query($sql) or die('not executed');
	echo 'Complaint Submitted';



}
?>