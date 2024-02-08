<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Contact Us-retrieve</title>
	<link rel="stylesheet" href="Css/Dstyles.css">
	

		<link rel="preconnect" href="https://fonts.googleapis.com">
		<link rel="stylesheet" type="text/css" href="Css/Pfooter.css">
		<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
		<link href="https://fonts.googleapis.com/css2?family=Roboto+Slab&display=swap" rel="stylesheet">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
	<style>
	body
	{
	    background-image: url('Images/DImages/Dmangroves.jpg');
        background-repeat: no-repeat;
        background-attachment: fixed;  
        background-size: cover;
	}
	
	</style>
</head>
<body>
    <!--navbar starts-->
    <header>
		<div class="rectangle">
			<div class="navbar">
			<div class="imglogo">
			<div class="imag"><a href="HomePage.html"><img src="Images/DImages/Dlogo.png" height="40px" width="40px"></a></div>
			<div class="logo"><a href="HomePage.html">Balentines Boat Safari</a></div></div>
			<ul class="links">
			<li><a href="index.php">Home</a></li>
				<li><a href="Booking.php">Book-In</a></li>
				<li><a href="AboutUsNew.php">About Us</a></li>
				<li><a href="Dindex.php" class="active">Contact Us</a></li>
			</ul>
				<a href="Login.html" class="action_btn">Login</a>
			</div>
		</div>
    </header>
	<!--end of the navbar-->

        <center>
		<div class="retrieve">
		    <?php include 'Dcontact.php';
			
			//retrieve data
			
			$name = $_POST['name'];
	        $email = $_POST['email'];
	        $subject = $_POST['subject'];
	        $message = $_POST['message'];
			
			echo "<p>Name : $name <br>
			        Email address : $email <br>
					Subject : $subject <br>
					Message : $message <br>";
			
			?>
			
			<p class="back">Go back to the <a href="Dindex.html">previous page</a></p>
		</div>
		</center>
		<script src="js/Dscript.js"></script>
<?php
	include_once 'php/Pfooter.php'
?>