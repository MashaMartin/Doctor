<?php if(!isset($_SESSION)){
	session_start();
	}  
?>

<?php include('uptomenu.php'); ?>

		<div id="wrapper" style="margin-top:70px;" >
			<h1>Search For Doctor</h1>
			<br><br>
					<form action="search_result.php" method="post" class="form-group">
						<label>
							Search By:<select name="address" type="text" style="width: 110px;margin-right: 175px;" />
												<option>-Place-</option>
												<option>Soshanguve</option>
												<option>Diepsloot</option>
												<option>Cosmo</option>							
											</select>
						</label><br><br>
					<label>
						 Specialty:<select name="expertise" type="text" />
												<option>-Select-</option>
												<option>Medicine</option>
												<option>Heart</option>
												<option>Gynecologist</option>
												<option>Obstetrician</option>
												<option>Bone</option>
												<option>Neurologist</option>
												<option>kedney</option>
												<option>Cardiologist</option>
												<option>Plastic Surgeon</option>
												<option>General Physician</option>
											</select>
					</label><br><br>
					<button  type="submit" name="submit" class="submit_b">Search</button>&nbsp;
					<a href="doctorinfo.php"><button type="button" name="" class="submit_b">View doctors</button></a>
					
				</form>

	</div>
	
</body>
</html>