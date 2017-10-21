<?php
include 'connection.php';
$ward=$_POST['authority'];
$ltype=$_POST['type'];
$reason=$_POST['reason'];
$date1=$_POST['go'];
$date2=$_POST['come'];
$regno=$_SESSION['id'];

$queryn="select namec from registration where reg_no='$regno';";
$r=mysql_query($queryn);
$n=mysql_fetch_array($r);
$name=$n['namec'];

$query1="insert into leavef values('$regno','$name','$ward','$ltype','$reason','$date1','$date2','','');";
mysql_query($query1) or die('NN');
echo "leave form succesfully submited";

?>