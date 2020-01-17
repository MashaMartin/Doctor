<?php 
if(!isset($_SESSION)){
	session_start();
	}  
?>

<?php include('uptomenu.php'); ?>


<?php 
	$doc_id = isset($_GET['doc_id'])?$_GET['doc_id']:"";
	
 ?>
					<?php 
					include('../config.php');
					

							$sql="SELECT * FROM doctor WHERE doc_id = $doc_id ";

							$result = $conn->query($sql);
							if ($result->num_rows > 0) {
							    // output data of each row
							    while($row  = $result->fetch_assoc()) {
							        $doc_id   = $row["doc_id"];
							        $name 	= $row["name"];
							        $expertise 	= $row["expertise"];
							        $contact 	= $row["contact"];
							        $fee = $row["fee"];
									 $userid = $row["userid"];
							    }
							}
							
							$conn->close();

					?>
		
		<div id="wrapper5" style="margin-top:60px; margin-button:60px;">
		<center>
		<h1 >Book Appoinment</h1><br>
		
			<form action="" method="post" >
					

					<label>
						Dr. Name <br><input type="text" name="dname" value="<?php echo $name; ?>" >
					</label><br><br>

 					<label>
						Dr Contact <br><input type="text" name="dcontact" value="<?php echo $contact; ?>" />
					</label><br><br>
 					
					<label>
						Category <br><input type="text" name="expertise" value="<?php echo $expertise; ?>" >
					</label><br><br>

					<label>
						Fee(R) <br><input type="text" name="fee" value="<?php echo $fee; ?>" >
					</label><br><br>
					<label>
						Your Name <br><input type="text" name="pname" value="">
					</label><br><br>

 					<label>
						 Contact <br><input type="text" name="pcontact" value=""/>
					</label><br><br>
					<label>
						E-mail <br><input type="email" name="email" value=""/>
					</label><br><br>
 					
					<label>
						 Address <br><input type="text" name="address" value="">
					</label><br><br>
					<label>
						 Date<br> <input type="date" name="dates" value="">
					</label><br><br>
					<label>
						 Time <br><select name="tyme" required>
										<option value="">-select-</option>
										<option value="11.00am">90.00am</option>
										<option value="03.00pm">09.30am</option>
										<option value="11.00am">10.00am</option>
										<option value="03.00pm">10.30am</option>
										<option value="11.00am">11.00am</option>
										<option value="03.00pm">11.30am</option>
										<option value="11.00am">12.00pm</option>
										<option value="03.00pm">12.30pm</option>
										<option value="11.00am">13.00pm</option>
										<option value="03.00pm">13.30pm</option>
										<option value="11.00am">14.30pm</option>
										<option value="11.00am">15.00pm</option>
										<option value="03.00pm">15.30pm</option>
										<option value="11.00am">16.00pm</option>
										<option value="03.00pm">16.30pm</option>
										<option value="11.00am">17.00pm</option>
										<option value="03.00pm">17.30pm</option>
									</select>
					</label><br><br>
					<label>
						 Payment <br><select name="payment" required>
										<option value="">-select-</option>
										<option value="Cash">Cash</option>
										<option value="Card">Card</option>
										<option value="Medical Aid">Medical Aid</option>
									</select>
					</label><br>
					<label>
						  <input type="hidden" name="userid" value="<?php echo $userid; ?>">
					</label>
					
					<button name="submit" type="submit" class="submit_b">Confirm</button> 
					
					
				</form> <br><br>
				</center>
		</div>

					<?php

						include('../config.php');
						if(isset($_POST['submit'])){
							

						$sql = " INSERT INTO booking (dname,userid,dcontact,expertise,fee, pname,pcontact,email,address,dates,tyme,payment)
							VALUES ('" . $_POST["dname"] . "','" . $_POST["userid"] . "','" . $_POST["dcontact"] . "','" . $_POST["expertise"] . "', '" . $_POST["fee"] . "','" . $_POST["pname"] . "','". $_POST["pcontact"] . "','". $_POST["email"] . "','". $_POST["address"] . "','". $_POST["dates"] . "','". $_POST["tyme"] . "','". $_POST["payment"] . "' )";

							if ($conn->query($sql) === TRUE) {
							    echo "<script>alert('Your booking has been accepted!');</script>";
							} else {
							    echo "<script>alert('There was an Error')<script>";
							}

							$conn->close();
						}
					?> 
	<?php

		include('../config.php');
		
		$name=$_POST('pname');
		$userid=$_POST('userid');
		
	if(isset($_POST('cancel_btn')))
	{	echo'<script text="text/javascript">alert("Button clicked")</script>';
		$query="DELETE FROM booking WHERE pname='$name' AND userid='$userid'";
		$query_run=mysqli_query($conn,$query);
		
		if($query_run)
		{
			echo'<script text="text/javascript">alert("Appointment Cancelled")</script>';
		}
		else
		{
			echo'<script text="text/javascript">alert(" Error")</script>';
		}
			
		
	}
?>
</body>
</html>
