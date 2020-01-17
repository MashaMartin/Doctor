<?php if(!isset($_SESSION)){
	session_start();
	}  
	include('../config.php');
?>

<?php include('uptomenu.php'); ?>



			

					<?php 
					
					

					$sql = " SELECT * FROM doctor WHERE address = '" . $_POST["address"]."' AND expertise = '" . $_POST["expertise"]."' ";
					$result = mysqli_query($conn,$sql);
					$count = mysqli_num_rows($result);
					
					if($count>=1){
						echo "<table border='1' align='center' cellpadding='32' style='margin-top:100px;'>
							<tr>
								<th>SL.</th>
								<th>Name</th>
								<th>Address</th>
								
								<th>Mobile</th>
								
								<th>Email</th>
								<th>Expertise in</th>
								<th>Fee</th>
								<th>Book</th>
								
							</tr>";
						while($row=mysqli_fetch_array($result)){
								echo "<tr>";
								echo "<td>".$row['doc_id']."</td>";
								echo "<td>".$row['name']."</td>";
								echo "<td>".$row['address']."</td>";
								
								echo "<td>".$row['contact']."</td>";
								echo "<td>".$row['email']."</td>";

								echo "<td>".$row['expertise']."</td>";
								echo "<td>".$row['fee']."</td>";
						?>
							<td><a href="booking.php?doc_id=<?php echo $row['doc_id'] ?>">Book</a></td>;
						<?php 		
								
								echo "</tr>";
						}
						echo "</table>";
					} 
					else{
						print "<p align='center'>Sorry, No match found for your search result..!!!</p>";
					}

					?>
					
			<a href="search_doctor.php"><button type="button" name="search_again_btn"class="reseach" style="margin-top: 20px; margin-left: 600px;">Search Again</button></a>
	



	
</body>
</html>
