<?php if(!isset($_SESSION)){
	session_start();
	}  
	include('../config.php');
?>

<?php include('header1.php'); ?>



		<center><h1 style=" margin-top: 90px; padding-bottom: 30px;">This are all the patients</h1></center>
	
<?php 
					

		$sql = " SELECT * FROM patient";
		$result = mysqli_query($conn,$sql);
		$count = mysqli_num_rows($result);

		if($count>=1)
		{
			echo "<table border='1' align='center' cellpadding='32'>
				<tr>
					<th>patient ID</th>
					<th>Patient Name</th>
					<th>Age</th>
					<th>Mobile</th>
					<th>Address</th>
					<th>Email </th>
					<th>Action</th>
								
				</tr>";
			while($row=mysqli_fetch_array($result))
			{
				echo "<tr>";
				echo "<td>".$row['id']."</td>";
				echo "<td>".$row['name']."</td>";
				echo "<td>".$row['age']."</td>";
				echo "<td>".$row['contact']."</td>";
				echo "<td>".$row['address']."</td>";
				echo "<td>".$row['email']."</td>";
				echo "<td></button><button type='submit' name='submit' class='submit_b'>Delete</button></td>";
				echo "</tr>";
			}
			echo "</table>";
			}
			else
			{
				print "<p align='center'>Sorry, No match found for your search result..!!!</p>";
			}

	?>
			
	
</body>
</html>
