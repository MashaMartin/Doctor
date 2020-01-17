<?php

  include('config.php');
 include('header.php');
 ?>
			<center>
	<div id="wrapper1" style="margin-top: 70px; margin-bottom: 40px;">
		<form action="" method="post" >
			<input type="text" name="name" value="" placeholder="username" required>
				<br><br>
			<input type="number" name="age"  placeholder="age" pattern="[0-9]{2,2}" title="please enter only  numbers between 2 to 2 for age"/>
				<br><br>
			<input type="number" name="contact"  placeholder="contact no" required>
				</label><br><br>
 			<input type="text" name="address" value="" placeholder="address" required>
				<br><br>
			<input type="text" name="email"  value="" placeholder="email" required>
				<br><br>
			<input type="password" name="password"  value="" placeholder="password" required>
				<br><br>
			<input type="password" name="cpassword"  value="" placeholder="Confirm password" required>
				<br><br>
				<button  type="submit" name="signup_btn">Sign Up</button> <br><br>
				Registered user <a href="login.php">&nbsp;Sign In</a>
				
		</form>
		</center>
	</div>


<?php
	
	$name=$_POST['name'];
	$age=$_POST['age'];
	$contact=$_POST['contact'];
	$address=$_POST['address'];
	$email=$_POST['email'];
	$password=$_POST['password'];
	$cpassword=$_POST['cpassword'];
	
	if(isset($_POST['signup_btn']))
	{
		$query = "SELECT * FROM patient WHERE name='$name' AND email='$email'";
        $query_run=mysqli_query($conn,$query);
			if($password===$cpassword)
			{	
					if (mysqli_num_rows($query_run) > 0) 
					{
						echo "<script>alert('Sorry, username or email already exist!');</script>";
					}
					else
					{
						$query = "INSERT INTO patient VALUES ('','$name','$age','$contact','$address','$email', '$password' )";

						if (mysqli_query($conn,$query) === TRUE) 
						{
							header('location:login.php');
						}
						else 
						{
							echo '<script text="text/javascript">alert("There was an Error")</script>';
						}
						mysqli_close($conn);
					}	
				
			}
	}
?> 

</body>
</html>