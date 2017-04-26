<?php

$host='localhost';
$username='root';
$password='';
$db_name='bookdeticket';
$tbl_name='register';
$conn = mysqli_connect($host, $username, $password,$db_name);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$myusername=$_POST['email'];
$mypassword=$_POST['psw'];

$sql2="SELECT name FROM $tbl_name WHERE email='$myusername' and psw1='$mypassword'";
$result2=mysqli_query($conn,$sql2);
$row2=mysqli_fetch_row($result2);

session_start();
$_SESSION["user"] = $row2[0];

setcookie("Email",$myusername,time()+60*60*24*1);
setcookie("Password",$mypassword,time()+60*60*24*1);

$sql="SELECT * FROM $tbl_name WHERE email='$myusername' and psw1='$mypassword'";
$result=mysqli_query($conn,$sql);

$count=mysqli_num_rows($result);

if($count==1){
	header("location:home.php");
}
else {
	echo '<script type="text/javascript">alert("Wrong Password!\nTry Again!!"); window.location.href="login.php";</script>';
}
?>