<?php
    include 'connection.php';
?>
<!DOCTYPE html>
<html class="full" lang="en">
<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>profile</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/profile_imp.css" rel="stylesheet">
</head>
<body>
    <div id="wrapper">
        <div id="sidebar-wrapper">
            <ul class="sidebar-nav">
                <li class="sidebar-brand">
                    <a class="one" href="index3.php"><font size=3><b>Dashboard</b></font></a>
                </li>
                <li>
                    <a class="one" href="#"><font size=3><b>Orders</b></font></a>
                </li>
                <li>
                    <a class="one" href="lvform.html"><font size=3><b>Leave form</b></font></a>
                </li>
                <li>
                    <a class="one" href="profile.php"><font size=3><b>Profile</b></font></a>
                </li>
                <li>
                    <a class="one" href="comp.html"><font size=3><b>Complains</b></font></a>
                </li>
            </ul>
        </div>
        <div id="page-content-wrapper ">   
        <div id="overview">
        <h1> About me!</h1>
        <h2> Student Details</h2>
        <div class="desc">
        <center>
        <!--HERE we shall echo form back end-->
        <?php
            $name=$_SESSION['pname'];
            echo "<h2>Name:&nbsp&nbsp".$name."</h2>";
            echo "<h2>Registratiion number:&nbsp&nbsp".$_SESSION['reg']."</h2>";
            echo "<h2>Email id:&nbsp&nbsp".$_SESSION['pmail']."</h2>";
            echo "<h2>Banch:&nbsp&nbsp".$_SESSION['bran']."</h2>";
            echo "<h2>Mess:&nbsp&nbsp".$_SESSION['mes']."</h2>";
            echo "<h2>Room number:&nbsp&nbsp".$_SESSION['room']."</h2>";
            echo "<h2>Phone number:&nbsp&nbsp".$_SESSION['mob']."</h2>";
        ?> 
        </center>
        </div>
        <a href="#menu-toggle" class="btn btn-default" id="menu-toggle">Toggle Menu</a>
        </div>
        </div>
    </div>
    </div>
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script>
    $("#menu-toggle").click(function(e) {
        e.preventDefault();
        $("#wrapper").toggleClass("toggled");
    });
    </script>
</body>
</html>
