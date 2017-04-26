<html>
	<head>
		<meta http-equiv="content-type" content="text/html; charset=UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Book De Ticket</title>
		<link rel="shortcut icon" href="img/favicon.ico">
		<style type="text/css">
			body {
			  margin: 0;
			  padding: 0;
			  background: #EEE;
			  font: 10px/13px 'Lucida Sans',sans-serif;
			}
			.wrap {
			  overflow: hidden;
			  margin: 10px;
			}
			.box {
			  float: left;
			  position: relative;
			  width: 20%;
			  padding-bottom: 20%;
			}
			.boxInner {
			  position: absolute;
			  left: 10px;
			  right: 10px;
			  top: 10px;
			  bottom: 10px;
			  overflow: hidden;
			}
			.boxInner img {
			  width: 100%;
			}
			.boxInner .titleBox {
			  position: absolute;
			  bottom: 0;
			  left: 0;
			  right: 0;
			  margin-bottom: -50px;
			  background: #000;
			  background: rgba(0, 0, 0, 0.5);
			  color: #FFF;
			  padding: 10px;
			  text-align: center;
			  -webkit-transition: all 0.3s ease-out;
			  -moz-transition: all 0.3s ease-out;
			  -o-transition: all 0.3s ease-out;
			  transition: all 0.3s ease-out;
			}
			body.touch .boxInner:hover .titleBox, body.touch .boxInner.touchFocus .titleBox {
			  margin-bottom: 0;
			}
			@media only screen and (max-width : 480px) {
			  /* Smartphone view: 1 tile */
			  .box {
				width: 100%;
				padding-bottom: 100%;
			  }
			}
			@media only screen and (max-width : 650px) and (min-width : 481px) {
			  /* Tablet view: 2 tiles */
			  .box {
				width: 50%;
				padding-bottom: 50%;
			  }
			}
			@media only screen and (max-width : 1050px) and (min-width : 651px) {
			  /* Small desktop / ipad view: 3 tiles */
			  .box {
				width: 33.3%;
				padding-bottom: 33.3%;
			  }
			}
			@media only screen and (max-width : 1290px) and (min-width : 1051px) {
			  /* Medium desktop: 4 tiles */
			  .box {
				width: 25%;
				padding-bottom: 25%;
			  }
			}
		</style>
	</head>
	<body class="touch" background="img/image.jpg" topmargin="0">
	<form action = "savemovie.php" method = "POST">
	  <div class="wrap">
			<img src = "img/logo.png" style="width:1350px;height:220px;border:0">
	<h1>
	<?php 
	session_start();
	echo "User : " . $_SESSION["user"] . "<br>"; 
	?></h1>
		<!-- Define all of the tiles: -->
		<div class="box">
		  <div class="boxInner">
			<center>
				<input type="image" src="img/airlift.png" alt="Airlift" name="name" value="AIRLIFT">
			</center>
			<div class="titleBox">Airlift</div>
		  </div>
		</div>
		<div class="box">
		  <div class="boxInner">
		  <center>
			<input type="image" src="img/apocalypse.png" alt="X-Men : Apocalypse" name="name" value="X-MEN : APOCALYPSE">
		  </center>
			<div class="titleBox">X-Men : Apocalypse</div>
		  </div>
		</div>
		<div class="box">
		  <div class="boxInner">
		  <center>
			<input type="image" src="img/avatar.png" alt="Avatar" name="name" value="AVATAR">
		  </center>
			<div class="titleBox">Avatar</div>
		  </div>
		</div>
		<div class="box">
		  <div class="boxInner">
		  <center>
			<input type="image" src="img/avengers.png" alt="Avengers" name="name" value="AVENGERS">
		  </center>
			<div class="titleBox">Avengers</div>
		  </div>
		</div>
		<div class="box">
		  <div class="boxInner">
		  <center>
			<input type="image" src="img/captain.png" alt="Captain America : The Winter Soldier" name="name" value="CAPTAIN AMERICA : THE WINTER SOLDIER">
		  </center>
			<div class="titleBox">Captain America : The Winter Soldier</div>
		  </div>
		</div>
		<div class="box">
		  <div class="boxInner">
		  <center>
			<input type="image" src="img/deadpool.png" alt="Deadpool" name="name" value="DEADPOOL">
		  </center>
			<div class="titleBox">Deadpool</div>
		  </div>
		</div>
		<div class="box">
		  <div class="boxInner">
		  <center>
			<input type="image" src="img/hobbit.png" alt="Hobbit" name="name" value="HOBBIT">
		  </center>
			<div class="titleBox">Hobbit</div>
		  </div>
		</div>
		<div class="box">
		  <div class="boxInner">
		  <center>
			<input type="image" src="img/logan.png" alt="Logan" name="name" value="LOGAN">
		  </center>
			<div class="titleBox">Logan</div>
		  </div>
		</div>
		<div class="box">
		  <div class="boxInner">
		  <center>
			<input type="image" src="img/nemo.png" alt="Finding Nemo" name="name" value="FINDING NEMO">
		  </center>
			<div class="titleBox">Finding Nemo</div>
		  </div>
		</div>
		<div class="box">
		  <div class="boxInner">
		  <center>
			<input type="image" src="img/poc.png" alt="Pirates of Caribbean" name="name" value="PIRATES OF CARIBBEAN">
		  </center>
			<div class="titleBox">Pirates of Caribbean</div>
		  </div>
		</div>
		<div class="box">
		  <div class="boxInner">
		  <center>
			<input type="image" src="img/potter.png" alt="Harry Potter and the Order of Phoenix" name="name" value="HARRY POTTER AND THE ORDER OF PHOENIX">
		  </center>
			<div class="titleBox">Harry Potter and the Order of Phoenix</div>
		  </div>
		</div>
		<div class="box">
		  <div class="boxInner">
		  <center>
			<input type="image" src="img/starwars.png" alt="Star Wars : The Force Awakens" name="name" value="STAR WARS : THE FORCE AWAKENS">
		  </center>
			<div class="titleBox">Star Wars : The Force Awakens</div>
		  </div>
		</div>
		<div class="box">
		  <div class="boxInner">
		  <center>
			<input type="image" src="img/thor.png" alt="Thor" name="name" value="THOR">
		  </center>
			<div class="titleBox">Thor</div>
		  </div>
		</div>
		<div class="box">
		  <div class="boxInner">
		  <center>
			<input type="image" src="img/tintin.png" alt="The Adventures of Tintin" name="name" value="THE ADVENTURES OF TINTIN">
		  </center>
			<div class="titleBox">The Adventures of Tintin</div>
		  </div>
		</div>
		<div class="box">
		  <div class="boxInner">
		  <center>
			<input type="image" src="img/wolverine.png" alt="X-Men : The Wolverine" name="name" value="X-MEN : THE WOLVERINE">
		  </center>
			<div class="titleBox">X-Men : The Wolverine</div>
		  </div>
		</div>
	  </div>
	  </form>
	</body>
</html>
