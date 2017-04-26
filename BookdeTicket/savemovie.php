<?php 
		extract($_POST);
		$conn = mysqli_connect('localhost', 'root', '','bookdeticket');
		$sql="SELECT vpath FROM mlist where mname='$name'";
		$result=mysqli_query($conn,$sql);		
		$row=mysqli_fetch_row($result);
		$mysqli = new mysqli('localhost', 'root','','bookdeticket');
		if($mysqli->connect_errno > 0){
    		die('Unable to connect to database');
		}
		
			$mysqli->query("DELETE FROM movie");
			$query = "INSERT INTO movie VALUES ('$name','$row[0]')";
			$insert_row = $mysqli->query($query);
			if($insert_row){
			  header("location:option.php");
			}
			else{
				die('Error : ('. $mysqli->errno .') '. $mysqli->error);
			}
	?>
