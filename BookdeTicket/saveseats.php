<?php 
		extract($_POST);
		$mysqli = new mysqli('localhost', 'root','','bookdeticket');
		if($mysqli->connect_errno > 0){
    		die('Unable to connect to database');
		}
		foreach($mseats as $selected)
			$seat.=$selected." ";
				
		$mysqli->query("DELETE FROM seats");
		$query = "INSERT INTO seats VALUES ('$seat')";
		$insert_row = $mysqli->query($query);
		if($insert_row){
		  header("location:ticket.php");
		}
		else{
			die('Error : ('. $mysqli->errno .') '. $mysqli->error);
		}
	?>
