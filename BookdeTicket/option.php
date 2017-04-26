<html>
	<head>
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Book De Ticket</title>
		<link rel="shortcut icon" href="img/favicon.ico">
	</head>
	<body  background="img/image.jpg" topmargin="0">
	<img src = "img/logo.png" style="width:1333.1px;height:220px;border:0">
	<h2>
	<?php 
	session_start();
	echo "User : " . $_SESSION["user"] . "<br>"; 
	?></h2>
	<center>
	<font size=10>
		<form method="POST" action="saveticket.php" name="form1">
		<fieldset style="width:270px">
		<legend>
		<div style="color:#0000FF">
		<h3>Ticket Selection</h3>
		</div>
		</legend>
		<table>
			<tr>
			<td>Select Date:</td>
			<td><input type="date" name="tdate"></td>
			</tr><tr>
			<tr>
			<td>Select Theatre</td>
			<td>
			<select name="theatre">
            <option value="INOX">INOX</option>
            <option value="LUXE">LUXE</option>
            <option value="IMAX">IMAX</option>
            <option value="PVR">PVR</option>
            </select>
            </td></tr>
			<tr>
			<td>Time</td>
			<td><select name="time">
            <option value="8:45 AM">8:45 AM</option>
            <option value="12:30 PM">12:30 PM</option>
            <option value="4:00 PM">4:00 PM</option>
            <option value="8:00 PM">8:00 PM</option>
            </select></td>
			</tr>
			<tr>
			<td>Number of Seats</td>
			<td><select name="seats">
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
			<option value="4">4</option>
            <option value="5">5</option>
			<option value="6">6</option>
			<option value="7">7</option>
			<option value="8">8</option>
			<option value="9">9</option>
			<option value="10">10</option>
			</select></td>
			</tr>
			<tr><td> <td></tr>
			<tr><td> <td></tr>
			<tr><td> <td></tr>
			<tr>
			<td></td>
			<td><input type="submit" value="Select Seats"></td>
			</tr>
		</table>
		</fieldset>
		</form>
		
	</center>
	</font>
	<footer>
  		<p>Created by: Us</p>
  			<p>Contact information: <a href="mailto:vivek.it.1108@gmail.com">Us</a>.</p>
	</footer>
	</body>

</html>