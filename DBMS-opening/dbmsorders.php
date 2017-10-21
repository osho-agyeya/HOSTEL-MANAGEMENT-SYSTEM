<?php
include 'connection.php';

if(isset($_POST['orders']))
{
	$name=$_POST['name'];
	$regno=$_POST['regno'];
	$doa=$_POST['doa'];
	$address=$_POST['address'];
	$roomno=$_POST['roomno'];
	$query="insert into orders values('$name','$regno','$doa','$address','$roomno','PENDING','');" or die('not executed');
	@mysql_query($query) or die('Not executed');

?>	<script>
	       window.location.href="orders_succ.html";
	</script><?php
}?>

