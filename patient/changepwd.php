<?php if(!isset($_SESSION)){
	session_start();
	}  
	include('uptomenu.php');
?>

		<center><h1 style="margin-top: 90px">Reset Password</h1><br><br></center>
	<div id="wrapper" >
		
			<form action="" method="post" class="text-center">
						<center>
					<label>
						Old Password<input type="password" name="password"  placeholder="Current password" required>
					</label><br><br>
					<label>
						New Password<input type="password" name="newpassword"  placeholder="New password" required>
					</label><br><br>
					<label>
						Confirm Password <input type="password" name="confpassword"  placeholder=" Confirm new password" required>
					</label><br><br>
					<button  type="submit" name="submit" class="app_b">Change Password</button> <br>
						</center>
			<?php 
					
							
							include('../config.php');
							if(isset($_POST["submit"])){
							

							$sql= "SELECT * FROM patient WHERE email= '" . $_SESSION["email"]."' AND password= '" . $_POST["password"]."'";

							$query=mysqli_query($conn,$sql);
							$row=mysqli_num_rows($query);

							if($row>0)
							{
								if($newpassword==$confpassword){
								
								$sql1="UPDATE patient SET password='" . $_POST["newpassword"]  ."' WHERE email='" .$_SESSION["email"] ."'";
								mysqli_query($conn,$sql1);
								mysqli_close($conn);
								echo "<script>alert('Password Has been Updated');</script>";
								echo "<script>location.replace('../index.php');</script>";
								}
								else
								{
									echo "<script>alert('Password did not match');</script>";

								}


							}
							else
							{
								echo "<script>alert('Input Correct Password');</script>";
							}
						
					}	
 			?>
	
			</form> 

	</div>

</body>
</html>
