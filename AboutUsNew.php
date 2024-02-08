<!DOCTYPE html>
<html>

<head>
	<title>
		Balentine Boat Safari
	</title>

	<link rel="stylesheet" type="text/css" href="Css/PNavigation_bar.css">
	<link rel="stylesheet" type="text/css" href="Css/footer.css">
	<link rel="stylesheet" type="text/css" href="Css/Astyle.css">
	<link rel="stylesheet" type="text/css" href="Css/Pfooter.css">

	<meta charset="UTF-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Roboto+Slab&display=swap" rel="stylesheet">

	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
	<link rel="stylesheet" type="text/css" href="Css/Astyle.css" />

	<script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
	<script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>

</head>

<body>
	<script>
		alert("Wanna get to know our trustworthy team? hear they are...")
	</script>

	<!--navbar starts-->
	<header>
		<div class="rectangle">
			<div class="navbar">
				<div class="imglogo">
					<div class="imag"><a href="ondex.php"><img src="Images/logo/logo.png" height="40px" width="40px" ></a></div>
					<div class="logo"><a href="index.php">Balentines Boat Safari</a></div>
				</div>
				<ul class="links">
					<li><a href="index.php">Home</a></li>
					<li><a href="Booking.php">Book-In</a></li>
					<li><a href="AboutUsNew.php" class = "active">About Us</a></li>
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

	<br /> <br /> <br /> <br /> <br />

	<div>
		<h2 class="topic1"> MEET OUR TEAM </h2>
		<br /><br />
		<hr class="main_line">
	</div>
	<br />
	<p class="para1">
		The BALENTINES, where unforgettable boat safari experiences come to life. Our management team is composed of passionate individuals who share
		a deep love for the ocean, wildlife, and the thrill of exploration. With their expertise and dedication, they ensure that every boat safari we
		offer is not only safe and well-organized but also a truly remarkable adventure.
	</p>

	<section class="team">
		<div class="team_content">
			<div class="box">
				<img src="Images/AboutUs/A_kaveen.jpg" alt="kaveen" />
				<h3> Kaveen Dissanayaka </h3>
				<h5> Co-Founder and Co-CEO </h5>
			</div>

			<div class="box">
				<img src="Images/AboutUs/A_prasad1.jpg" alt="prasad" />
				<h3> Prasad Chandima </h3>
				<h5> Founder and CEO </h5>
			</div>

			<div class="box">
				<img src="Images/AboutUs/A_sandali.jpg" alt="sandali" />
				<h3> Sandali Dias </h3>
				<h5> Managing Director </h5>
			</div>

		</div>
	</section>

	<section class="team">
		<div class="team_content">
			<div class="box">
				<img src="Images/AboutUs/A_dilmi.jpg" alt="dilum" />
				<h3> Dilum Punsara </h3>
				<h5> Tour Guide Operator </h5>
			</div>

			<div class="box">
				<img src="Images/AboutUs/A_dinithi.jpg" alt="dinithi" />
				<h3> Dinithi Rajapakse </h3>
				<h5> Marketing Manager </h5>
			</div>

			<div class="box">
				<img src="Images/AboutUs/A_Aseni.png" alt="ashen" />
				<h3> Ashen Madhuka </h3>
				<h5> Chief Financial Officer </h5>
			</div>

		</div>
	</section>

	<br /><br />

	<p class="para1">
		At BALENTINES', we believe that the key to a successful boat safari lies in the expertise and passion of our management team. Together, they are
		committed to delivering exceptional experiences, fostering a deep appreciation for nature, and creating memories that will last a lifetime.
	</p>

	<br />

	<p class="para2">
		Join us on a boat safari adventure and let our experienced team take you on an extraordinary journey through the wonders of the Madhu River.
	</p>
	<br /> <br /> <br />

<?php
	include_once 'php/Pfooter.php'
?>