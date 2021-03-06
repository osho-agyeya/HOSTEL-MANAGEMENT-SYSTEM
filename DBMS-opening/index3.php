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
    <title>The Big Picture - Start Bootstrap Template</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    
</head>
<body>
<style>
/*!
 * Start Bootstrap - The Big Picture (http://startbootstrap.com/)
 * Copyright 2013-2016 Start Bootstrap
 * Licensed under MIT (https://github.com/BlackrockDigital/startbootstrap/blob/gh-pages/LICENSE)
 */

body {
    margin-top: 50px;
    margin-bottom: 50px;
    background: none;
  font-family: "TIMES";
}
.full {
    background: url("abcd.jpg") no-repeat center center fixed;
    -webkit-background-size: cover;
    -moz-background-size: cover;
    -o-background-size: cover;
    background-size: cover;
}
nav {
  width : 1700px;
  float : left;
  -webkit-transition : 0.3s cubic-bezier(0.175, 0.885, 0.32, 1.275) all;
  -moz-transition : 0.3s cubic-bezier(0.175, 0.885, 0.32, 1.275) all;
}

label {
  display     : inline-block;
  margin-left : auto;
  width       : 60px;
  padding     : 18px 0;
  background-color: rgba(100,100,100,.3);
  font-size : 30px;
  color : #fff;
  text-align : center;
  cursor : pointer;
}
li {
  list-style-type : none;
  border-top    : 1px solid #FFF;
  border-bottom : 1px solid #ddd;
  background-color: #f4f5f6;
  background-size : 200% 100%;
  background-position : 90% 0px;
  -webkit-transition : 0.3s cubic-bezier(0.175, 0.885, 0.32, 1.275) all;
  -moz-transition : 0.3s cubic-bezier(0.175, 0.885, 0.32, 1.275) all;
}

a.one {
  display    : block;
  padding    : 25px 0;
  color      : #454545;
  text-align : center;
  font-family: 'Source Code Pro', sans-serif;
  text-decoration: none;
  -webkit-transition : color .1s;
  -moz-transition : color .1s;
}

a.one:hover {
  color : #fff;
  -webkit-transition : color .1s;
  -moz-transition : color .1s;
}

li:nth-child(1) {
  border-top : none;
  background-image : -webkit-linear-gradient(left, #78cdce 0%, #78cdce 50%, #f4f5f6 0%);
  background-image : -moz-linear-gradient(left, #78cdce 0%, #78cdce 50%, #f4f5f6 0%);
}

li:nth-child(2) {
  background-image : -webkit-linear-gradient(left, #f16767 0%, #f16767 50%, #f4f5f6 0%);
  background-image : -moz-linear-gradient(left, #f16767 0%, #f16767 50%, #f4f5f6 0%);
}

li:nth-child(3) {
  background-image : -webkit-linear-gradient(left, #f5ee32 0%, #f5ee32 50%, #f4f5f6 0%);
  background-image : -moz-linear-gradient(left, #f5ee32 0%, #f5ee32 50%, #f4f5f6 0%);
}

li:nth-child(4) {
  background-image : -webkit-linear-gradient(left, #97cc69 0%, #97cc69 50%, #f4f5f6 0%);
  background-image : -moz-linear-gradient(left, #97cc69 0%, #97cc69 50%, #f4f5f6 0%);
}

li:nth-child(5) {
  background-image : -webkit-linear-gradient(left, #507abd 0%, #507abd 50%, #f4f5f6 0%);
  background-image : -moz-linear-gradient(left, #507abd 0%, #507abd 50%, #f4f5f6 0%);
}

li:nth-child(6) {
  background-image : -webkit-linear-gradient(left, #6b408e 0%, #6b408e 50%, #f4f5f6 0%);
  background-image : -moz-linear-gradient(left, #6b408e 0%, #6b408e 50%, #f4f5f6 0%);
  border-bottom : none;
}


li:hover {
  -webkit-transition : 0.3s cubic-bezier(0.175, 0.285, 0.32,1.0) all;
  -moz-transition : 0.3s cubic-bezier(0.175, 0.285, 0.32,1.0) all;
  background-position : 0% 0%;
}

#toggle:checked ~ nav {
  margin-left:  -240px;
  -webkit-transition : 0.3s cubic-bezier(0.175, 0.885, 0.32, 1.275) all;
  -moz-transition : 0.3s cubic-bezier(0.175, 0.885, 0.32, 1.275) all;
}
#wrapper {
    padding-left: 0;
    -webkit-transition: all 0.5s ease;
    -moz-transition: all 0.5s ease;
    -o-transition: all 0.5s ease;
    transition: all 0.5s ease;
    
}

#wrapper.toggled {
    padding-left: 250px;
}

#sidebar-wrapper {
    z-index: 1000;
    position: fixed;
    left: 250px;
    width: 0;
    height: 100%;
    margin-left: -250px;
    overflow-y: auto;
    -webkit-transition: all 0.5s ease;
    -moz-transition: all 0.5s ease;
    -o-transition: all 0.5s ease;
    transition: all 0.5s ease;
}

#wrapper.toggled #sidebar-wrapper {
    width: 250px;
}

#page-content-wrapper {
    width: 100%;
    position: absolute;
    padding: 15px;
}

#wrapper.toggled #page-content-wrapper {
    position: absolute;
    margin-right: -250px;
}

/* Sidebar Styles */

.sidebar-nav {
    position: absolute;
    top: 0;
    width: 250px;
    margin: 0;
    padding: 0;
    list-style: none;
}

.sidebar-nav li {
    text-indent: 20px;
    line-height: 40px;
}

.sidebar-nav li a {
    display: block;
    text-decoration: none;
    color: #999999;
}

.sidebar-nav li a:hover {
    text-decoration: none;
    color: #fff;
    background: rgba(255,255,255,0.2);
}

.sidebar-nav li a:active,
.sidebar-nav li a:focus {
    text-decoration: none;
}

.sidebar-nav > .sidebar-brand {
    height: 65px;
    font-size: 18px;
    line-height: 60px;
}

.sidebar-nav > .sidebar-brand a {
    color: #999999;
}

.sidebar-nav > .sidebar-brand a:hover {
    color: #fff;
    background: none;
}

@media(min-width:768px) {
    #wrapper {
        padding-left: 250px;
    }

    #wrapper.toggled {
        padding-left: 0;
    }

    #sidebar-wrapper {
        width: 250px;
    }

    #wrapper.toggled #sidebar-wrapper {
        width: 0;
    }

    #page-content-wrapper {
        padding: 20px;
        position: relative;
    }

    #wrapper.toggled #page-content-wrapper {
        position: relative;
        margin-right: 0;
    }
}
#overview
{
    background-color: #fffaf0;
    opacity: 0.9;
    min-height: 554px;
    margin: auto;
  width: 100%;

}
#overview img
{
    display: block;
    margin-left: auto;
    margin-right: auto;
}
a.two:hover
{
    opacity: 0.5;
}
#desc
{
  margin-auto;
  align-content: center;
}
 #sub:hover,
 #sub:focus {
  background-color: #31b2c3;
  background-image: -webkit-gradient(linear, left top, left bottom, from(#0483a0), to(#31b2c3));
  background-image: -webkit-linear-gradient(top, #0483a0, #31b2c3);
  background-image: -moz-linear-gradient(top, #0483a0, #31b2c3);
  background-image: -ms-linear-gradient(top, #0483a0, #31b2c3);
  background-image: -o-linear-gradient(top, #0483a0, #31b2c3);
  background-image: linear-gradient(top, #0483a0, #31b2c3);
}

 #sub:active {
  -webkit-box-shadow: 0 1px 4px rgba(0, 0, 0, 0.5) inset;
  -moz-box-shadow: 0 1px 4px rgba(0, 0, 0, 0.5) inset;
  box-shadow: 0 1px 4px rgba(0, 0, 0, 0.5) inset;
  outline: 0;
}

 #sub::-moz-focus-inner {
  border: 0;
}
#search {
  border: 1px solid #CCC;
  -webkit-box-shadow: 0 1px 1px #ddd inset, 0 1px 0 #FFF;
  -moz-box-shadow: 0 1px 1px #ddd inset, 0 1px 0 #FFF;
  box-shadow: 0 1px 1px #ddd inset, 0 1px 0 #FFF;
  -webkit-border-radius: 3px;
  -moz-border-radius: 3px;
  border-radius: 3px;
  color: #999;
  float: left;
  font: 16px Lucida Sans, Trebuchet MS, Tahoma, sans-serif;
  height: 20px;
  padding: 10px;
  width: 320px;
  background-color: #ffffff;
}

 #search:focus {
  border-color: #aaa;
  -webkit-box-shadow: 0 1px 1px #bbb inset;
  -moz-box-shadow: 0 1px 1px #bbb inset;
  box-shadow: 0 1px 1px #bbb inset;
  outline: 0;
}

 #search:-moz-placeholder,
 #search:-ms-input-placeholder,
 #search::-webkit-input-placeholder {
  color: #999;
  font-weight: normal;
}
table {
  background: #f5f5f5;
  border-collapse: separate;
  box-shadow: inset 0 1px 0 #fff;
  font-size: 20px;
  line-height: 24px;
  margin: 30px auto;
  text-align: left;
  width: 800px;
} 

th {
  background: url(http://jackrugile.com/images/misc/noise-diagonal.png), linear-gradient(#777, #444);
  border-left: 1px solid #555;
  border-right: 1px solid #777;
  border-top: 1px solid #555;
  border-bottom: 1px solid #333;
  box-shadow: inset 0 1px 0 #999;
  color: #fff;
  font-weight: bold;
  padding: 10px 15px;
  position: relative;
  text-shadow: 0 1px 0 #000;  
}

th:after {
  background: linear-gradient(rgba(255,255,255,0), rgba(255,255,255,.08));
  content: '';
  display: block;
  height: 25%;
  left: 0;
  margin: 1px 0 0 0;
  position: absolute;
  top: 25%;
  width: 100%;
}

th:first-child {
  border-left: 1px solid #777;  
  box-shadow: inset 1px 1px 0 #999;
}

th:last-child {
  box-shadow: inset -1px 1px 0 #999;
}

td {
  border-right: 1px solid #fff;
  border-left: 1px solid #e8e8e8;
  border-top: 1px solid #fff;
  border-bottom: 1px solid #e8e8e8;
  padding: 10px 15px;
  position: relative;
  transition: all 300ms;
}

td:first-child {
  box-shadow: inset 1px 0 0 #fff;
} 

td:last-child {
  border-right: 1px solid #e8e8e8;
  box-shadow: inset -1px 0 0 #fff;
} 

tr {
  background: url(http://jackrugile.com/images/misc/noise-diagonal.png);  
}

tr:nth-child(odd) td {
  background: #f1f1f1 url(http://jackrugile.com/images/misc/noise-diagonal.png);  
}

tr:last-of-type td {
  box-shadow: inset 0 -1px 0 #fff; 
}

tr:last-of-type td:first-child {
  box-shadow: inset 1px -1px 0 #fff;
} 

tr:last-of-type td:last-child {
  box-shadow: inset -1px -1px 0 #fff;
} 

tbody:hover td {
  color: transparent;
  text-shadow: 0 0 3px #aaa;
}

tbody:hover tr:hover td {
  color: #444;
  text-shadow: 0 1px 0 #fff;
}

</style>
    <div id="wrapper">
        <div id="sidebar-wrapper">
            <ul class="sidebar-nav">
                <li>  
                <a class="one" href="index3.php"><font size=3><b>Dashboard</b></font></a>
                </li>
                <li>
                    <a class="one" href="order_accept.php"><font size=3><b>Orders</b></font></a>
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
                <li>
                    <a class="one" href="logout.php"><font size=3><b>logout</b></font></a>
                </li>
            </ul>
        </div>
        <div id="page-content-wrapper ">   
        <div id="overview">
        <fieldset>
        <form action ="search_s.php" method="post">
            <input placeholder="Search here" type="text" name="search" >
            <input type="submit" value="profile" name="submit" >
        </form>
        </fieldset>
        <h1 align="center">WELCOME</h2>
        <h1 align="center">To The Hostel Management System</h2>
        <table>
        <th text-align="center">
            MESSAGES
        </th>
        <?php
        	$query=@mysql_query("SELECT * FROM message ORDER BY mes_date DESC LIMIT 0, 5");
        	$counter=0;
        	while($row=@mysql_fetch_array($query))
        	{	
        		$m=$row['messages'];
        		$counter++;
        		echo "<tr><td>".$m."</td></tr>";
        	}
        	if($counter<5)
        	{	
        		for($i=$counter;$i<5;$i++)
        			{$t=$i+1;
        			echo "<tr><td>MESSAGE ".$t."</td></tr>";} 
        	}
		?>	
        </table>
        <a href= "#menu-toggle" class="btn btn-default" id="menu-toggle">Toggle Menu</a>
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

