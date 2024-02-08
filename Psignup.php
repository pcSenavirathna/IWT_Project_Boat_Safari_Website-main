<!DOCTYPE html>
<html>
<head>
	<title>
		Balentine Boat Safari
	</title>

	<link rel="stylesheet" type="text/css" href="Css/PotherNavBar.css">
	<link rel="stylesheet" type="text/css" href="Css/Psingup.css">
</head>
<body>
	<div class="bgimage">
		<img src="images/login/singup.jpg" height="100%" width="100%">
	</div>
	<header class="headerr">
		<div class="rectangle">
			<div class="navbar">
			<div class="imglogo">
			<div class="imag"><a href="index.php"><img src="Images/logo/logo.png" height="40px" width="40px"/></a></div>
			<div class="logo"><a href="index.php">Balentines Boat Safari</a></div></div>
			<ul class="links">
				<li><a href="index.php">Home</a></li>
				<li><a href="Booking.php">Book-In</a></li>
				<li><a href="AboutUsNew.php">About Us</a></li>
				<li><a href="Dindex.php">Contact Us</a></li>
			</ul>
				<a href="Ploging.php" class="action_btn">Login</a>
				
			</div>
		</div>
		</header>
	<div class="mainbox">
		<div class="left">
			<div class="caption">
				<h1>Sign Up</h1>
				<div class="descript">
					<p>Please enter your details to sign up and</p>
					<p>start your journey today</p>
				</div>
				<div class="linkin">
					<a href="Ploging.php">LOGIN</a>
				</div>
			</div>
		</div>
		<div class="right">
			<form action="php/Psignup.sign.php" method="POST">
				<div class="input-name">
					<input class="fname" type="text" placeholder="Enter First Name" name="firstName" required>
					<input class="lname" type="text" placeholder="Enter Last Name" name="lastName" required>
				</div>
				<div class="input-box">
					<input type="text" placeholder="Enter Email" name="email" required>
				</div>
				<div class="input-box">
					<input type="password" placeholder="Enter password" name="password" required>
				</div>
				<div class="input-box">
					<input type="password" placeholder="confirm password" name="confirmpassword" required>
				</div>
				<div class="agree">
					<label><input type="checkbox" required> I Agree Terms And Conditions</label>
				</div>
				<div class="btn">
					<input type="submit" value="Sign Up" name="submit" required>
				</div>
			</form>
		</div>
	</div>
</body>
</html>