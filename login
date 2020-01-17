<?php session_start();  ?>
<?php include('header.php'); ?>
<?php include('config.php'); ?>


<div id="wrapper" style="margin-top:70px">
		<center><h1>Login</h1><br><br>
	<form action="patient_login.php" method="post" >
			<label>Login As:</label>
		<input type="radio" name="usertype"  class="radiobtn" value="patient" checked required > Patient 
		<input type="radio" name="usertype"  class="radiobtn" value="doctor" required > Doctor
		<input type="radio" name="usertype"  class="radiobtn" value="admin" required > Admin
			<br><br>
		<input type="text" name="loginName"  placeholder="User details" required>
			<br><br>
		<input type="password" name="password"  placeholder="Password" required>
			<br><br>
		<button  type="submit" name="login_btn" class="signin_b" >Sign In</button> <br>
			Not a registered?<a href="patient_regi.php"name="signup" >&nbsp;Sign Up</a><br><br> 
		
	</form>
	</center>
</div>
	<?php 
	
	$user=$_POST["usertype"];
	
	if($user=="patient")
	{	
		$_SESSION['patient']="";
							
							include('config.php');
							if(isset($_POST["login_btn"])){


							$sql= "SELECT * FROM patient WHERE email= '" . $_POST["usertype"]."' AND password= '" . $_POST["password"]."'";

							$result = $conn->query($sql);

									if ($result->num_rows > 0) {
											$_SESSION["email"]= $_POST["usertype"];
											
											$_SESSION['patient']= "yes";
										    echo "<script>location.replace('patient/myDetails.php');</script>";
												// echo "u are supposed to redirect to ur profile";
										} else {
										    echo "<span style='color:red;'>Invalid username or password</span>";
										}
						$conn->close();		
					}
					
			
 			
	}else if($user=="doctor")	
	{
				
		$_SESSION['adminstatus']="";
							
				
		if(isset($_POST["login_btn"]))
		{
			$query= "SELECT * FROM doctor WHERE userid= '" . $_POST["loginName"]."' AND password= '" . $_POST["password"]."'";
			$query_run = mysqli_query($conn,$query);
			if (mysqli_num_rows($query_run)> 0) 
				{
						$_SESSION["userid"]= $_POST["loginName"];
						$_SESSION['adminstatus']= "yes";
						header('location:doctors/myDetails.php');
						echo "<span style='color:red;'>Logged in successfully</span>";
								
				} else 
				{
						echo '<script type="text/javascript">alert("Incorrect username or password") <script>';
				}
							
		}
		
		
				
	}
	else if($user=="admin")	
	{
			$_SESSION['adminstatus']="";
			$username=$_POST["loginName"];
			$password=$_POST["password"];
							
			if(isset($_POST["login_btn"]))
			{

				$query = "SELECT * FROM test WHERE username= '$loginName' AND password= '$password'";
				$query_run =mysqli_query($conn,$query);

				if(mysqli_num_rows($query_run) > 0) 
					{
						$_SESSION["username"]= $_POST["loginName"];
						$_SESSION['adminstatus']= "yes";
						header('location:test.php');
						echo '<script type="text/javascript">alert("Logined in ") <script>';
					} 
					else 
					{
						echo '<script type="text/javascript">alert("Incorrect username or password") <script>';
					}
								
			}
	}
	?>
</body>
</html>

