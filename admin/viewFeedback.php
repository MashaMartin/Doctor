<?php if(!isset($_SESSION)){
	session_start();
	}  
	
?>

<?php 	include('header1.php');
		include('../config.php');
 ?>

	<center><h1 style=" margin-top: 90px; padding-bottom: 30px;">Patients FeedBack</h1></center>


	<?php 
					
			$query = " SELECT * FROM feedback";
			$query_run = mysqli_query($conn,$query);
			

			if( mysqli_num_rows($query_run)>=1)
			{
			echo "<table>
				<tr>
				<th>ID</th>
				<th>Email</th>
				<th>FeedBack</th>
				</tr>";
				while($row=mysqli_fetch_array($query_run)){
				echo "<tr>";
				echo "<td>".$row['id']."</td>";
				echo "<td>".$row['email']."</td>";
				echo "<td>".$row['feedback']."</td>";
				echo "</tr>";
			}
			echo "</table>";
			}
				else
			{
				print "<p align='center'>No results found..</p>";
			}
			
			

	?>
		
</body>
</html>
