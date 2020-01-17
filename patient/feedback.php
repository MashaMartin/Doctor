<?php session_start();  ?>

<?php include('uptomenu.php'); ?>


	<div id="wrapper" style="margin-top:100px;">
			<center><h1>Feedback</h1></center><br><br>
		<form action="" method="post">
					
						<textarea name="feedback" id="" cols="40" rows="4"  required></textarea>
					<br><br>
					
					<button name="submit" type="submit" class="submit_b">Send</button> <br>

			<?php 
					
							include('../config.php');
							if(isset($_POST['submit'])){
							

							$sql = "INSERT INTO feedback (email,feedback)	VALUES ('" . $_SESSION["email"] ."','" . $_POST["feedback"] ."')";

							if ($conn->query($sql) === TRUE) {
							    echo "<script>alert('Thanks for your feedback!');</script>";
							} else {
							    echo "<script>alert('There was an Error')<script>";
							}

							$conn->close();
						}
					
 			?>
				</form> 
		
	</div>
	
</body>
</html>
