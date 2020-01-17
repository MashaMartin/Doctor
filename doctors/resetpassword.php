
<?php 
	include('../config.php');
	include('header.php'); 
	if(!isset($_SESSION))
	{
		session_start();
	}  

?>




<div id="wrapper3" style="margin-top:70px;">
	<center><h1>Rest your password</h1></center><br><br>
			<center>
	<form action="" method="post" >
	
		<input type="text" name="oldPassword" placeholder="Enter current password" required>
			<br><br>
		<input type="text" name="newPassword" placeholder="Enter new password"  required>
			<br><br>
		<input type="text" name="cPassword" placeholder="Confirm password"  required>
			<br><br>
		<button name="submit" type="submit" class="submit_b">Reset</button> <br>
</div>

	<?php

		
		if(isset($_POST['submit']))
		{
			$oldPassword=$_POST['oldPassword'];
			$newPassword=$_POST['newPassword'];
			$cPassword=$_POST['cPassword'];
			
			$query="SELECT * FROM doctor WHERE userid='" . $_SESSION["userid"] ."' AND password = '$oldPassword'";
			$query_run =mysqli_query($conn,$query);
			if($newPassword===$cPassword)
			{
				if(mysqli_num_rows($query) > 0)
				{
					$query="UPDATE doctor SET password='$newPassword'  WHERE userid='" . $_SESSION["userid"] . "'";
		
					if (mysqli_query($conn, $query)) 
					{
						echo "<script>alert(' Password rest successfully');</script>";
					} 
					else 
					{
						echo "<script>alert('Error try again');</script>";
						header('location:doctors/restpassword');
					}
				
				}
			
			}
			mysqli_close($conn);
		}
		
		
	
	?> 

</body>
</html>
