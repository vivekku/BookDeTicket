<!DOCTYPE html>
<?php 
		$conn = mysqli_connect('localhost', 'root', '','bookdeticket');
		$sql1="SELECT mname FROM ticket";
		$result1=mysqli_query($conn,$sql1);		
		$row1=mysqli_fetch_row($result1);
		$sql2="SELECT tdate FROM ticket";
		$result2=mysqli_query($conn,$sql2);		
		$row2=mysqli_fetch_row($result2);
		$sql3="SELECT theatre FROM ticket";
		$result3=mysqli_query($conn,$sql3);		
		$row3=mysqli_fetch_row($result3);
		$sql4="SELECT time FROM ticket";
		$result4=mysqli_query($conn,$sql4);		
		$row4=mysqli_fetch_row($result4);
		$sql5="SELECT s1 FROM seats";
		$result5=mysqli_query($conn,$sql5);		
		$row5=mysqli_fetch_row($result5);
		$sql6="SELECT mfare FROM ticket";
		$result6=mysqli_query($conn,$sql6);		
		$row6=mysqli_fetch_row($result6);
	?>
<html>
	<head>
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Book De Ticket</title>
		<link rel="shortcut icon" href="img/favicon.ico">
		<style>
			table, th, td {
			border: 1px solid black;
			}
		</style>
	</head>
	<body background="img/image.jpg" topmargin="0">
		<img src = "img/logo.png" style="width:1350px;height:220px;border:0;">
		<h2>
		<?php 
		session_start();
		echo "User : " . $_SESSION["user"] . "<br>"; 
		?></h2>
		<center>
		<table style="font-size:25px; background-color:#ffffff">
			<caption><h2>Ticket Summary</h2><caption>
			<tr>
				<th>Movie Name :</th>
				<td><?php echo $row1[0] ?></td>
			</tr>
			<tr>
				<th>Movie Date :</th>
				<td><?php echo $row2[0] ?></td>
			</tr>
			<tr>
				<th>Movie Time :</th>
				<td><?php echo $row4[0] ?></td>
			</tr>
			<tr>
				<th>Theatre Name :</th>
				<td><?php echo $row3[0] ?></td>
			</tr>
			<tr>
				<th>Seats :</th>
				<td><?php echo $row5[0] ?></td>
			</tr>
			<tr>
				<th>Total Fare :</th>
				<td><?php echo $row6[0] ?></td>
			</tr>
			
		</table>
		<div style="color:#0000FF;font-size:30px;">
		<footer><b>
		<p><br>Thank You for Booking Ticket through<br>BookDeTicket! Come Again!</p></b>
		</footer>
		</div>
		</center>
	</body>
</html>