<!DOCTYPE HTML>
<html>
		<head>
		<title>TUNE UP</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<link rel="stylesheet" href="css/main.css" />
	</head>
	<style>
		.h1{
			text-align: center;
		}
	</style>
	<body>
		<div class="page-wrap">

			<!-- Nav -->
				<nav id="nav">
					<ul>
						<li><a href="index.html" class="active"><img src="images/home.png" height="25" width="25"></a></li>
						<li><a href="music.html"><img src="images/video.png" height="25" width="25"></a></li>
						<li><a href="About us.html"><img src="images/message.png" height="25" width="25"></a></li>
					</ul>
				</nav>

			<!-- Main -->
				<section id="main">

					<!-- Banner -->
						<section id="banner">
							<div class="inner">
								<h1>TUNE UP</h1>
<?php
$name=$_POST["ntxt"];
$phoneno=$_POST["mtxt"];
$password=$_POST["ptxt"];
$cpassword=$_POST["cptxt"];
$cn=mysqli_connect ("localhost","root");
mysqli_select_db ($cn,"reg");

if (strcmp ($password,$cpassword) == 0 && $name!="" && $phoneno!="")
{
	echo "&nbsp;";
	echo "<h1>You Have Registered Successfully</h1>";
$ins=mysqli_query ($cn,"INSERT INTO customer VALUES (' ".$name." ',' ".$phoneno." ','  ".$password." ' )" );
}
else
{
echo "&nbsp;";
echo "<h1>Check Password & Try Again !</h1>";
}
?>
</div>
</section>
<footer id="footer">
							<div id="copyright" class="container">
	<p style="font-weight: bold; padding-top: 10px;"> Copyright &copy; All the rights belongs to TUNE UP.</p>
	<p style="font-weight: bold;">Contact No : 90909 - 90909</p>
	<p style="font-weight: bold;">Email Us : tune_up@gmail.com</p>
</div>
						</footer>
</body>
</html>