<?php if(!isset($_SESSION)){
	session_start();
	}  
?>

<?php include('uptomenu.php'); ?>

<?php 
	include('../config.php');
	$sql="SELECT * FROM patient where name='" . $_SESSION["name"] . "'";
			
	$q=mysqli_query($conn,$sql);
	$row=mysqli_num_rows($q);
							
	$data=mysqli_fetch_array($q);
	$name=$data[1];
	$age=$data[2];
	$contact=$data[3];
	$address=$data[4];
	$email=$data[6];

	mysqli_close($conn);
?>

			
<div id="wrapper2" style="margin-top:60px;">
			<center>
		<h1>Welcome&nbsp;<?php echo $name; ?></h1><br>
	<form action="" method="post" >
		
		<label>
		Age<br><input type="number" name="age"  value="<?php echo $age; ?>" placeholder="age" required="required" pattern="[0-9]{2,2}" title="please enter only  numbers between 2 to 2 for age"/>
		</label><br><br>
		<label>
		Mobile<br><input type="text" name="contact" value="<?php echo $contact; ?>" placeholder="contact no" required="required" pattern="[0-9]{10,11}" title="please enter only numbers between 10 to 11 for mobile no."/>
		</label><br><br>
 		<label>
		Address<br><input type="text" name="address" value="<?php echo $address; ?>" placeholder="address" class="address_input"required>
		</label><br><br>
		<label>
		Email<br><input type="email" name="email" value="<?php echo $email; ?>" placeholder="email" required>
		</label>
					
			</form></center> <br><br>
					<button type="submit" name="update_b"  class="submit_b" >Update</button>
					<a href="view_booking.php"><button type="button" name="app_btn" class="app_b">view appointment</button></a>
					<a href="changepwd.php"><button type="button" name="reset_btn" class="app_b">Reset password</button></a>
</div>
<br><br><br>

				<?php
					include('config.php');
					if(isset($_POST['update_b']))
					{
							

						$sql="UPDATE patient SET name='" .$_POST["name"]. "' ,age='" .$_POST["age"]."' , contact='" .$_POST["contact"]. "',address='" .$_POST["address"]. "', email='".$_POST["email"]."' WHERE email='" .$_SESSION["email"]. "'";
		
						if (mysqli_query($conn, $sql))
						{
						echo "<script>alert(' Record updated successfully');</script>";
						} 
						else
						{
							echo "<script>alert('There was a Error Updating profile');</script>";
						}

						mysqli_close($conn);
					}
					if(isset($_POST['signoutbtn']))
					{
						session_destroy();
						header('location:../login.php');
					}
				?> 
</body>
</html>
