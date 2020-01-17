<?php if(!isset($_SESSION)){
	session_start();
	}  
?>

<?php include('header1.php'); ?>




	
	<div id="wrapper2" >
		<form enctype="multipart/form-data" method="post" class="text-center" style="margin-left: 110px">
		    <input type="text" name="doctor_id" value="" placeholder="doctor_id" required>
				<br><br>
			<input type="text" name="name" value="" placeholder="Full name" required>
				<br><br>
			<input type="text" name="address" value="" placeholder="address" required>
				<br><br>
			<input type="text" name="contact" value="" placeholder="contact" required>
				<br><br>
			<input type="email" name="email"  value="" placeholder="email" required>
				<br><br>
			<select name="expertise" required>
										<option>-Expert in-</option>
										<option>Medicine</option>
										<option>Heart</option>
										<option>Bone</option>
										<<option>kedney</option>
										<option>Cardiologist</option>
										<option>Plastic Surgeon</option>
										<option>General Physician</option>
										<option>Neurologist</option>
									</select>
					<br><br>
					
					     <input type="text" name="id" value="" placeholder="id" required>
					
					   <input type="text" name="fee" value="" placeholder="Fee" required>
					<br><br>
					<button name="submit" type="submit"class="submit_b" >Add</button> <br>
		</form>
			


		<?php
				include('../config.php');
				if(isset($_POST['submit'])){
							

				$sql = "INSERT INTO doctor (doctor_id,name,address,contact,email,expertise,id,fee)
				VALUES ('" . $_POST["doctor_id"] ."','" . $_POST["name"] . "','" . $_POST["address"] . "','" . $_POST["contact"] . "','" . $_POST["email"] . "', '" . $_POST["expertise"] . "','" . $_POST["id"] . "','" . $_POST["fee"] . "' )";

				if ($conn->query($sql) === TRUE)
					{
						echo "<script>alert('New Doctor Has been Added Successfully!');</script>";
					} else
					{
					    echo "<script>alert('There was an Error')<script>";
					}

						$conn->close();
					}
		?> 

	</div>
	
</body>
</html