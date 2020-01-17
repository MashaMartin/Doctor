<?php session_start();  ?>
<?php include('header.php'); ?>
<?php include('config.php');?>


<div id="wrapper" style="margin-top:70px">
		<center><h1>Login</h1><br><br>
	<form action="" method="post" >
		<label>Login As</label>
		<input type="radio" name="usertype"  class="radiobtn" value="1" checked required > Patient 
		<input type="radio" name="usertype"  class="radiobtn" value="2" required > Doctor
		<input type="radio" name="usertype"  class="radiobtn" value="3" required > Admin
			<br><br>
		<input type="text" name="name"  placeholder="User details" required>
			<br><br>
		<input type="password" name="password"  placeholder="Password" required>
			<br><br>
		<button  type="submit" name="login_btn" class="signin_b" >Sign In</button> <br>
			Not a registered?<a href="register.php"name="signup" >&nbsp;Sign Up</a><br><br> 
		
	</form>
	</center>
</div>
	<?php 
	$logas=$_POST['usertype'];
	
	if($logas=="1")
	{
	$_SESSION['patient']="";
							
					
					if(isset($_POST["login_btn"]))
					{


					$name=$_POST['name'];
					$password=$_POST['password'];
					
					//echo '<script type="text/javascript"> alert("Login button clicked")</script>';
					$query = "SELECT * FROM patient WHERE name='$name' AND password='$password'";
					$query_run = mysqli_query($conn,$query);
					
					if(mysqli_num_rows($query_run)>0)
					{
						$_SESSION['name']=$name;
						header('location:patient/myDetails.php');
					}
					else
					{
						echo'<script type="text/javascript">alert("Username or password is incorrect")</script>';
					}
					}
					
	}
	if($logas=="2")
	{
		$_SESSION['adminstatus']="";
		$userid=$_POST['name'];
		$password=$_POST['password'];
		
		
		if(isset($_POST["login_btn"]))
		{
			$_SESSION['adminstatus']="";
							
			$query = "SELECT * FROM doctor WHERE userid='$userid' AND password='$password'";
			$query_run = mysqli_query($conn,$query);
					

			if (mysqli_num_rows($query_run) > 0) 
			{
				$_SESSION['name']= $_POST['name'];
				//echo'<script type="text/javascript">alert("login sucessfully")</script>';
				$_SESSION['adminstatus']= "yes";
				echo "<script>location.replace('doctors/myDetails.php');</script>";
			
			} 
			else 
			{
			  echo "<span style='color:red;'>Invalid username or password</span>";
			}
						
		}
					
		
	}
	if($logas=="3")
	{
		
		$_SESSION['adminstatus']="";
		$name=$_POST["name"];
		$password=$_POST["password"];
							
		if(isset($_POST["login_btn"]))
		{

		 $query = "SELECT * FROM admin WHERE username='$name' AND password='$password'";

		$query_run =mysqli_query($conn,$query);

			if (mysqli_num_rows($query_run) > 0) 
				{
					$_SESSION["name"]= $_POST["name"];
											
					$_SESSION['adminstatus']= "yes";
					echo "<script>location.replace('admin/index.php');</script>";
					//echo'<script type="text/javascript">alert("login sucessfully")</script>';
				} 
				else 
				{
				    echo "<span style='color:red;'>Invalid username or password</span>";
				}
		}
	}
	else
	{
		echo'<script type="text/javascript">alert("SELECT correct user")</script>';
	}
	
	?>
</body>
</html>

