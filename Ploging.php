<!DOCTYPE html>
<html>
<head>
	<title>
		Balentine Boat Safari
	</title>

	<link rel="stylesheet" type="text/css" href="Css/PotherNavBar.css">
	<link rel="stylesheet" type="text/css" href="Css/Plogin.css">
</head>
<body>
	<div class="bgimage">
		<img src="images/login/loginnew.png" height="100%" width="100%">
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
				<a href="Psignup.php" class="action_btn">Sign Up</a>
		
			</div>
		</div>
	</header>
	
	<!--login part-->
	<div class="content">
		<h2>BALENTINE'S BOAT SAFARI</h2>
		<br><br><br>
		<P>Explore exclusive offers by connecting with us today! </P>
	</div>
	<section class="login-text">
		<div class="log-heading">
			<h2>Member Login</h2>
			<form action="php/Plogin.log.php" method="post">
				<div class="input-box">
					<input type="email" name="email" required>
					<label>Enter your email</label>
				</div>
				<div class="input-box">
					<input type="password" name = "password" required>
					<label>Enter your password</label>
				</div>
				<div class="remember">
					<label><input type="checkbox" name="">Remember me</label>
					<a href="Pforgetpassword.php">Forget password</a>
				</div>
				<div>
					<input class="btn" type="submit" name="submit" value="Login">
				</div> 
				<div class="register-link">
					<p>Not a member? <a href="Psignup.php">Sign up now</a></p>
				</div>
			</form>
		</div>
	</section>
</body>
</html>