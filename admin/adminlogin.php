<?php 
include('../config.php');
session_start();  

?>

<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="../style.css">
</head>
<body>

	<div class="navbar">
			<center><ul>
				<li><a href="../index.php">Home</a></li>
			</ul>
			</center>
	</div>

	<div id="wrapper" style="margin-top:90px;">
				<center>
					<h1>For Admin Use Only!!</h1><br><br>
				<form action="" method="post" >
					<input type="text" name="username"  placeholder="username" required >
						<br><br>
					<input type="password" name="password"  placeholder="password" required>
						<br><br>
					<button name="submit" type="submit" class="submit_b">Sign In </button><br>
				</center>

			<?php 
							$_SESSION['adminstatus']="";
				
							if(isset($_POST["submit"])){

									$sql= "SELECT * FROM users WHERE username= '" . $_POST["username"]."' AND password= '" . $_POST["password"]."'";

							$result = $conn->query($sql);

									if ($result->num_rows > 0) {
											$_SESSION["username"]= $_POST["username"];
											
											$_SESSION['adminstatus']= "yes";
										    echo "<script>location.replace('viewDoctor.php');</script>";
										
										} else {
										    echo '<script type="text/javascript">Alert(Incorrect username or password..)</script>';
										}
						$conn->close();		
					}
					
 			?>
		
				</form> 	
	</div>

	
</body>
</html>

