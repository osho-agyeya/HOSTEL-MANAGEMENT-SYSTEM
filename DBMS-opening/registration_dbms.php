<?php
include 'connection.php';

if(isset($_POST['submit']))
{
	$name=$_POST['name'];
	$pass=$_POST['password'];
	$regno=$_POST['reg_no'];
	$branch=$_POST['branch'];
	$email=$_POST['email'];
	$room_no=$_POST['room_no'];
	$roomtype=$_POST['room_type'];
	$messtype=$_POST['mess_type'];
	$bedtype=$_POST['bed_type'];
	$mobile=$_POST['mob_no'];
		$query2="insert into registration values('$name','$email','$regno','$branch','$room_no','$roomtype','$bedtype','$messtype','$pass','$mobile');";
	
	mysql_query($query2) or die("Change the email or registration number </br> This username is already in use");
	
	echo "<script>
			window.location='succ.html';
	      </script>";
	

}
if(isset($_POST['submit3']))
	{
	$name=$_POST['name'];
	$regno=$_POST['reg_no'];
	$branch=$_POST['branch'];
	$email=$_POST['email'];
	$room_no=$_POST['room_no'];
	$roomtype=$_POST['room_type'];
	$messtype=$_POST['mess_type'];
	$bedtype=$_POST['bed_type'];
	$mobile=$_POST['mob_no'];
	$query1="update registration set namec='".$name."',email='".$email."',branch='".$branch."',room_no='".$room_no."',room_type='".$roomtype."',bed_type='".$bedtype."',mess='".$messtype."',phone='".$mobile."' where reg_no='".$regno."'";
	mysql_query($query1) or die("no");
	echo "updation succcesfull for"."$regno";
	} 
if(isset($_POST['s2']))
	{

		?>
		<script>
			window.open('home1.html');
		</script>
		<?php
	}
?>
</body>
</html>