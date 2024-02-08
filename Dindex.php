
<!DOCTYPE html>
<html lang="en">
<head>
    
	<title>Contact Us</title>
	
	<meta charset="UTF-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Roboto+Slab&display=swap" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="Css/Pfooter.css">
	
	<link rel="stylesheet" href="Css/Dstyles.css">
	
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
	<!--end of the navbar-->

    <div class="contactUs">
	    <div class="title">
		    <h1>Contact Us</h1>
		</div>
	    <div class="box">
		    <!--form-->
			<div class="contact form">
			    <h3>Got any questions? feel free to contact us any time.</h3>
				<form method = "POST" action = "Dcontact.php" onsubmit="event.preventDefault(); validateForm()">
				    <div class="formBox">
					
						    <div class="inputBox">
							    <span>Name</span>
								<input type="text" name="name" id="name" placeholder="David Warner">
								<small class="error"></small>
								
								<span>Email</span>
								<input type="text" name="email" id="email" placeholder="dawidwarner@email.com" >
								<small class="error"></small>
								
							</div>
							
						<div class="row100">
						    <div class="inputBox">
							    <span>Subject</span>
								<textarea class="S" name="subject" id="subject" placeholder="Subject of the message"></textarea>
								<small class="error"></small>
							</div>
							
							<div class="inputBox">
							    <span>Message</span>
								<textarea class="M" name="message" id="message" placeholder="Write your message here..."></textarea>
								<small class="error"></small>
							</div>
						</div>
						
                        <div class="row100">
						    <div class="inputBox">
							    <div><input type="reset" value="Reset"></div>
                                <input type="submit" name="submit" value="Submit">
								<p id="success"></p>
							</div>
						</div>							
					</div>
				</form>	
			</div>
			
			<!--info box-->
			<div class="contact info">
			    <h3>Contact Info</h3>
				<div class="infoBox">
				    <div>
						<span><ion-icon name="location"></ion-icon></span>
						<p>Balentines Boat Safari, Balapitiya, <br>Sri Lanka</p>
					</div>
					<div>
						<span><ion-icon name="mail"></ion-icon></span>
						<a href="mailto:balentineboatsafari@gmail.com">balentineboatsafari@gmail.com</a>
					</div>
					<div>
						<span><ion-icon name="call"></ion-icon></span>
						<a href="tel:+94332290153">+94 332 290 153</a>
					</div>
					<!--social media links-->
					<ul class="sci">
						<li><a href="http://www.facebook.com"><ion-icon name="logo-facebook"></ion-icon></a></li>
						<li><a href="http://www.instagram.com"><ion-icon name="logo-instagram"></ion-icon></a></li>
						<li><a href="http://youtube.com"><ion-icon name="logo-youtube"></ion-icon></a></li>
						<li><a href="http://twitter.com"><ion-icon name="logo-twitter"></ion-icon></a></li>
					</ul>
				</div>	
			</div>
			
			<!--map-->
			<div class="contact map">
			    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d31724.832931703193!2d80.07125774170821!3d6.
				3156209507110725!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3ae22aa99019d38b%3A0xfeef7dcab2e7bf78!2sMadu%20Ganga
				!5e0!3m2!1sen!2slk!4v1686282268639!5m2!1sen!2slk" style="border:0;" allowfullscreen="" loading="lazy" 
				referrerpolicy="no-referrer-when-downgrade"></iframe>
			</div>
	    </div>
	</div>	
	<script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>

<script src="js/Dscript.js"></script>

<?php
	include_once 'php/Pfooter.php'
?>