<?php 

	include('header.php'); 

?>


<div id="wrapper2" style="margin-top:40px;">
				<center>
		<h2 >ASK A DOCTOR</h2>
	<form action="" method="post"  >
			<br><br>
		<input type="text" name="firstname" value="" placeholder="firstname" required>
			<br><br>
		<input type="text" name="lastname" value="" placeholder="lastname" required>
			<br><br>	
		<input type="email" name="email"  value="" placeholder="Your email" required>
			<br><br>
		<label>
			<b>Your Question</b><br><br> <textarea name="comment" id="" cols="30" rows="4" required ></textarea> 
		</label><br><br>
		<button type="submit" name="submit_btn" class="submit_b">Submit</button>			
	</form>
				</center>

</div>
	

<?php
	
	$firstname=$_POST['firstname'] ;
	$lastname=$_POST['lastname'] ;
	$email=$_POST['email'];
	$comment=$_POST['comment'];
	
	include('config.php');
	if(isset($_POST['submit_btn']))
	{
		$query = "INSERT INTO contact VALUES ('$firstname','$lastname','$email','$comment')";
		$query_run=mysqli_connect($conn,$query);
				if ($query_run === TRUE)
					{
					  echo '<script type="text/javascript">alert("Doctor will answer your as soon as possible..")</script>';
					}
					else
					{
					    echo "<script>alert('There was an Error')<script>";
					}

		mysqli_close($conn);
	}
?> 

</body>
</html>

