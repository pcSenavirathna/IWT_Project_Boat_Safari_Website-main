<!DOCTYPE html>
<html>
	<head>
	
		<meta charset="UTF-8"/>
		<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
		<link rel="stylesheet" type="text/css" href="Css/style.css"/>
		<link rel="preconnect" href="https://fonts.googleapis.com">
		<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
		<link href="https://fonts.googleapis.com/css2?family=Roboto+Slab&display=swap" rel="stylesheet">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
		<title>booking page</title>
	</head>
	<body>
	<!--navbar starts-->
		<header>
		<div class="rectangle">
			<div class="navbar">
			<div class="imglogo">
			<div class="imag"><a href="#"><img src="Images/logo.png" height="40px" width="40px"/></a></div>
			<div class="logo"><a href="#">Balentines Boat Safari</a></div></div>
			<ul class="links">
				<li><a href="index.php">Home</a></li>
				<li><a href="Booking.php">Book-In</a></li>
				<li><a href="AboutUsNew.php">About Us</a></li>
				<li><a href="Dindex.php">Contact Us</a></li>
			</ul>
			<?php
			session_start();

			if (isset($_SESSION['firstname']) && isset($_SESSION['lastname'])) {
				$firstName = $_SESSION['firstname'];
				$lastName = $_SESSION['lastname'];
				// Generate the combined username
				$username = $firstName . ' ' . $lastName;

				// Get the first letter of the first name
				$firstLetter = substr($firstName, 0, 1);
				
			} else {
				// Handle the case when the first name and last name are not available in the session
			}
		?>
		<p id="username" style="color: white;">
		<a href=<?php if(isset($_SESSION['firstname']) && isset($_SESSION['lastname']))
			{
				echo "SUserdashboard.php";
			}
			else
			{
				echo "Psignup.php";
			}?> 
			class="action_btn">
			<?php 
			if (isset($_SESSION['firstname']) && isset($_SESSION['lastname']))
			{
				echo $firstLetter;
			}
			else
			{
				echo "Login";
			}
			?></a>
			<?php 
				if (isset($_SESSION['firstname']) && isset($_SESSION['lastname']))
				{
					echo $username;
				}
			?></p>
			<?php 
				if(isset($_SESSION['firstname']) && isset($_SESSION['lastname']))
				{
					echo "<a href='Slogout.php'><button class='action_btn'>Logout</button></a>";
				}
			?>
				
			
			</div>
		</div>
		</header>
		<!--navbar ends-->
		<!--box starts-->
		<div class="boxes">
			<div class="box1">
				<div class="chutibox1"><h3>ACCOMMODATION</h3></DIV>
				<div class="chutiimage"><img src="Images/4.jpg" height="200px" width="235px"></div><br>
				<center><button class="button" style="vertical-align:middle" onclick='window.location.href="accommodation.php";'><span>BOOK NOW</span></button></center>
			</div>
			<div class="box2">
				<div class="chutibox2"><h3>TOURS</h3></DIV>
				<div class="chutiimage2"><img src="Images/15.jpg" height="200px" width="235px"></div><br>
				<center><button class="button2" style="vertical-align:middle" onclick='window.location.href="tour.php";'><span>BOOK NOW</span></button></center>
			</div>
		</div>	
		<!--footer starts-->
<section class="foooter">
		<center><div class="content"><h4>CONNECT WITH </h4><h4>BALENTINE’S SAFARI AND HOTELS</h4></div>
		<div class="social">
			<a href="#"><i class="fab fa-instagram"></i></a>
			<a href="#"><i class="fab fa-snapchat"></i></a>
			<a href="#"><i class="fab fa-twitter"></i></a>
			<a href="#"><i class="fab fa-facebook"></i></a>
		</div>	
		
		<ul class="list">
			<li><a href="index.php">Home</a></li>
			<li><a href="Booking.php">Book-in</a></li>
			<li><a href="AboutUsNew.php">About Us</a></li>
			<li><a href="Dindex.php">Contact Us</a></li>
		</ul>
		<p class="copyr">
			Copyright @ 2022 BALENTINE’S - All rights reserved.
		</p></center>
	</body>
</html>
