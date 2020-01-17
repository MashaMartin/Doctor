<?php if(!isset($_SESSION)){
	session_start();
	}  
?>


<?php include('uptomenu.php'); ?>



	<div class="all_user" style="margin-top:200px; margin-left: 40px;">
		<?php 
			include('../config.php');
					

			$sql = " SELECT * FROM booking WHERE pntname = '".$_SESSION["name"]."'  ";
			$result = mysqli_query($conn,$sql);
			$count = mysqli_num_rows($result);

			if($count>=1){
				echo "<table border='1' align='center' cellpadding='32'>
					<tr>
						<th>My Disease Type</th>
						<th>My Doctor</th>
						<th>Appoinment Date</th>
						<th>Time</th>
					</tr>";
				while($row=mysqli_fetch_array($result)){
					echo "<tr>";
						echo "<td>".$row['expertise']."</td>";
						echo "<td>".$row['docname']."</td>";
						echo "<td>".$row['dates']."</td>";
						echo "<td>".$row['timee']."</td>";
					?>
					
					<?php
						echo "</tr>";
						}
						echo "</table>";
						}
						else
						{
						print "<p align='center'>Sorry, No match found for your search result..!!!</p>";
						}

			?>

					

			<?php
			include('config.php');
			if(isset($_POST['cancel_b'])){
							$name=$row['dname'];
							$sql = "DELETE * FROM booking WHERE dname='$name'";
							if (mysqli_query($conn, $sql)) {
							    echo "<script>alert('Your booking has been Canceled!');</script>";
							} else {
							     echo "<script>alert('There was an Error')<script>";
							}

							mysqli_close($conn);
						}
					?> 
				<br><br><br><center>
				<a href="feedback.php"><button type="button" name="feedback_btn" class="submit_b">Feedback</button><a/>
				&nbsp;&nbsp;<button name="cancel_b" type="submit" class="submit_b" >Cancel</button><center/>
				
					
	</div>
		
	




	
</body>
</html>
