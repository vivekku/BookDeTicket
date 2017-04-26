<?php 
		$conn = mysqli_connect('localhost', 'root', '','bookdeticket');
		$sql="SELECT name FROM movie";
		$result=mysqli_query($conn,$sql);		
		$row=mysqli_fetch_row($result);
		extract($_POST);
		$mysqli = new mysqli('localhost', 'root','','bookdeticket');
		$mfare=$seats*150;
		if($mysqli->connect_errno > 0){
    		die('Unable to connect to database');
		}
			$mysqli->query("DELETE FROM ticket");
			$query = "INSERT INTO ticket VALUES ('$row[0]','$tdate','$theatre','$time','$seats','$mfare')";
			$insert_row = $mysqli->query($query);
			if($insert_row){
			  header("location:select.php");
			}
			else{
				die('Error : ('. $mysqli->errno .') '. $mysqli->error);
			}
				
	?>
