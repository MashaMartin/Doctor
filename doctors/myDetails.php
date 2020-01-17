<?php 
	if(!isset($_SESSION))
	{
		session_start();
	}  
?>
<?php include('header.php'); ?>



	<?php 
		include('../config.php');
		$sql="SELECT * FROM doctor where userid='" . $_SESSION["userid"] . "'";
			
		$q=mysqli_query($conn,$sql);
		$row=mysqli_num_rows($q);
							
		$data=mysqli_fetch_array($q);
		$name=$data[2];
		$address=$data[3];
		$contact=$data[4];
		$email=$data[5];
		$userid=$data[9];
		$expertise=$data[6];
		$fee=$data[8];
		$pic = $data[11];

		mysqli_close($conn);
	?>

				

<div id="wrapper3" style="margin-top:70px;">
	<center><h1>Welcome&nbsp;<?php echo $name;?> </h1></center><br><br>
			<center>
	<form action="" method="post" >
		<label><b>Doctor Address</b></label><br>
			<input type="text" name="address" value="<?php echo $address; ?>"  required>
		<br><br>
		<label><b>Contact</b></label><br>
			<input type="text" name="contact" value="<?php echo $contact; ?>"  required>
		<br><br>
 		<label><b>E-mail Address</b></label><br>
			<input type="email" name="email" value="<?php echo $email; ?>"  required>
		<br><br>
			<button name="submit" type="submit" class="submit_b">Update</button> <br>
	</form><br><br>
			</center>
			<a href="reset.php">Reset password</a>
</div>

	<?php

		include('../config.php');
		if(isset($_POST['submit']))
		{
			$sql="UPDATE doctor SET address='" .$_POST["address"]."' , contact='" .$_POST["contact"]. "',email='" .$_POST["email"]. "'  WHERE userid='" . $_SESSION["userid"] . "'";
		
			if (mysqli_query($conn, $sql)) 
			{
				echo "<script>alert(' Updated successfully');</script>";
			} 
			else 
			{
				echo "<script>alert('There was a Error Updating profile');</script>";
			}

			mysqli_close($conn);
		}
		
		
	
	?> 

</body>
</html>
