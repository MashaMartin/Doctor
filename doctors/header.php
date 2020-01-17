<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="../style.css">
</head>
<body>

<?php
	if($_SESSION['adminstatus'] == "")
	{
		header("location:doctorlogin.php");
	}

?>
	
	<div class="navbar">
			<center><ul>
				<li><a href="myAppoinment.php">My Appoinment</a></li>
				<li><a href="myDetails.php">My Profile</a></li>
				<li><a href="../index.php"><button type="button" name="signout_btn" class="signin_b">Sign Out</button></a></li>
			</ul></center>
	</div>
	
	