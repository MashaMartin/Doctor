<?php	$servername = "localhost";
		$username = "root";
		$password = "";
		$dbname = "doctor";

		$conn = new mysqli($servername, $username, $password, $dbname);
								
		if($conn)
	{
		//echo "Success";
	}
	else
	{
		echo "Not successful";
	}

?>	