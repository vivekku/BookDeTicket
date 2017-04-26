<?php 
		extract($_POST);
		$mysqli = new mysqli('localhost', 'root','','bookdeticket');
		if($mysqli->connect_errno > 0){
    		die('Unable to connect to database');
		}
		
			$query = "INSERT INTO register VALUES ('$name','$email','$dob','$psw1','$psw2','$num','$gender')";
			$insert_row = $mysqli->query($query);
			if($insert_row){
			  header("location:Login.php");
			}
			else{
				die('Error : ('. $mysqli->errno .') '. $mysqli->error);
			}
	?>
