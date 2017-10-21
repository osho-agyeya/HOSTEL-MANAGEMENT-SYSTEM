<?php
include 'connection.php';
$a=$_POST['sex'];
if($a=="user"){
if(isset($_POST['submit']))
{
	$email=$_POST['email'];
	$pass=$_POST['pass'];
	$regno=$_POST['uid'];

	$flag=0;
	$query1="SELECT *  from registration where email='$email'and psswrd='$pass' and reg_no='$regno'";
	$r=@mysql_query($query1) or die(@mysql_error());
	while($row=@mysql_fetch_array($r))
	{
		$_SESSION['id']=$regno;
		$_SESSION['usewr']=$regno;
		$_SESSION['pname']=$row['namec'];
		$_SESSION['pmail']=$row['email'];
		$_SESSION['reg']=$row['reg_no'];
		$_SESSION['bran']=$row['branch'];
		$_SESSION['mes']=$row['mess'];
		$_SESSION['room']=$row['room_no'];
		$_SESSION['mob']=$row['phone'];
		$flag=1;
	}
	echo "hello";
		if($flag==1)
		{
		echo "<script>
			window.location='index3.php';
		</script>";
		}
		else
		{
			echo "<script>
			window.location='error.html';
			</script>";	
		}
?>
		
		<?php
	}
	
}
else if($a=="owner"){
	if(isset($_POST['submit'])){
	$email=$_POST['email'];
	$pass=$_POST['pass'];
	$regno=$_POST['uid'];
	
	$flag2=0;
	$query1="select * from admin where email='".$email."'and password='".$pass."' and id='".$regno."'";
	$r=@mysql_query($query1) or die(@mysql_error());
	while($r=@mysql_fetch_array($r))
	{
		$_SESSION['pass1']=$pass;
		$_SESSION['user1']=$email;
		$_SESSION['id']=$regno;
		$flag2=1;
	
	}
	if($flag2=1)
	{
		echo "<script>
			window.location='index3_w.php';
		</script>";
		
	}
	else
		{
			echo "<script>
			window.location='error.html';
			</script>";	
		}
}

}		
?>