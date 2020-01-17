<?php if(!isset($_SESSION)){
	session_start();
	}  
?>

<?php include('header1.php'); 
		include('../config.php');
?>

<center><h1 style="margin-top:90px;padding-bottom: 30px;">List of all Appoinments</h1></center>

<?php 
		
		
		$query = " SELECT * FROM booking";
		$query_run = mysqli_query($conn,$query);
		

		if(mysqli_num_rows($query_run)>=1)
		{
			echo "<table >
				<tr>				
				<th>Dr.Name</th>
				<th>Contact</th>
				<th>Expert at</th>
				<th>Patient</th>	
				<th>PatientContact</th>
				<th>Date</th>
				<th>Time</th>
				<th>Action</th>		
				</tr>";
				while($row=mysqli_fetch_array($query_run))
				{
					echo "<tr>";
					echo "<td>".$row['docname']."</td>";
					echo "<td>".$row['doccontact']."</td>";
					echo "<td>".$row['expertise']."</td>";
					echo "<td>".$row['pntname']."</td>";
					echo "<td>".$row['pntcontact']."</td>";	
					echo "<td>".$row['dates']."</td>";
					echo "<td>".$row['timee']."</td>";
					echo "<td><button type='submit' name='submit'>Update</button><button type='submit' name='submit'>Delete</button></td>";
					echo "</tr>";
				}
				echo "</table>";
		}
		else
		{
			print "<p align='center'>No result found</p>";
		}

?>
			


</body>
</html>
