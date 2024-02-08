<!DOCTYPE html>
<html>
<head>
	<title>
		Balentine Boat Safari
	</title>

	<meta charset="UTF-8"/>
		<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
		<link rel="preconnect" href="https://fonts.googleapis.com">
		<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
		<link href="https://fonts.googleapis.com/css2?family=Roboto+Slab&display=swap" rel="stylesheet">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />

		<link rel="stylesheet" type="text/css" href="Css/PNavigation_bar.css">
		<link rel="stylesheet" type="text/css" href="Css/PHomePage.css">
		<link rel="stylesheet" type="text/css" href="Css/Pfooter.css">

	<script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
	<script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
</head>
	
<body>
	<div class ="banner" id="banner">
		<video autoplay muted loop>
		<source src="videos/home.mp4" type="">
		</video>
	</div>

	<section>
		<header class="headerr">
			<div class="rectangle">
				<div class="navbar">
				<div class="imglogo">
				<div class="imag"><a href="index.php"><img src="Images/logo/logo.png" height="40px" width="40px"/></a></div>
				<div class="logo"><a href="index.php">Balentines Boat Safari</a></div></div>
				<ul class="links">
					<li><a href="index.php" class="active">Home</a></li>
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
		<div class="caption">
			<h3>Welcome to Balentine's boat safari</h3>
			<marquee direction = "up" behavior="scroll"  onmouseover="this.stop();" onmouseout="this.start();">
				<p>We warmly welcome all the nature lovers to explore the Madu River with us.</p>
				<br>
				<p>We offer you trusted service with your requirement.</p>
			</marquee>
				<a href="#summery-photos">explore</a>
		</div>
	</section>
	
	<hr style="border-width: 20px; color:orange;">
	

	<div class="stdes" id="summery-photos"> <!--short description-->
		<h4>Balentine's Boat Safari</h4>
		<h1>What we Offer</h1>
		<p>Explore amazing boat safaris. Discover magnificent waterways, connect with wildlife, and create lifelong memories with us.</p>
	</div>

	<!--auto slide images-->
	<div class="imgslider">
		<div class="slide active">
			<img src="images/home/slidephtos/sample1.jpg" alt="" width="1366px" height="600px">
			<div class="info">
				<h2>The View</h2>
			</div>
		</div>
		<div class="slide">
			<img src="images/home/slidephtos/image2.jpg" alt="" width="1366px" height="600px">
			<div class="info">
				<h2>tour in <br>boats</h2>
			</div>
		</div>
		<div class="slide">
			<img src="images/home/slidephtos/image7.jpg" alt="" width="1366px" height="600px">
			<div class="info">
				<h2>fish <br>pedicure</h2>
			</div>
		</div>
		<div class="slide">
			<img src="images/home/slidephtos/sample3.jpg" alt="" width="1366px" height="600px">
			<div class="info">
				<h2>wonder of <br>creatures</h2>
			</div>
		</div>
		<div class="slide">
			<img src="images/home/slidephtos/image5.jpg" alt="" width="1366px" height="600px">
			<div class="info">
				<h2>unforgettable <br> rides</h2>
			</div>
		</div>
		<div class="slide">
			<img src="images/home/slidephtos/sample4.jpg" alt="" width="1366px" height="600px">
			<div class="info">
				<h2>attraction <br>location</h2>
			</div>
		</div>
		<div class="slide">
			<img src="images/home/slidephtos/sample5.jpg" alt="" width="1366px" height="600px">
			<div class="info">
				<h2>gorgeous moments <br>with sunset</h2>
			</div>
		</div>
		<div class="navigation">
			<div class="btn active"></div>
			<div class="btn"></div>
			<div class="btn"></div>
			<div class="btn"></div>
			<div class="btn"></div>
			<div class="btn"></div>
			<div class="btn"></div>			
		</div>
	</div>

	<!--photo slide javascript link-->
	<script type="text/javascript" src="js/Phome.js"></script>
	<div class="sub-navbar"></div>
	<h1 style="text-align: center;">
		Madu Queen offering exceptional service to explore the mangrove and the bio diversity of the Madu River. If you are also planning a safari on the Madhu River, the best safari service you should choose is the Madhu Queen Boat Safari. If you want to get away from the hustle and bustle of life and experience natural beauty, then Maduganga is one of the must-visit places for you. We now have the facilities to enjoy the natural beauty around the Madhu River, get food and lodging. Contact us today to experience the beauty of the Madhu River and a different kind of healing. 
	</h1>
	<hr>


	<!--Gallery-->
	<div class="gallery">
		<h1>Gallery</h1>
		<div class="gallery-photos">
			<a href="Images/home/gallery/photo1.jpg"><img src="Images/home/gallery/photo_smal1.jpg"></a>
			<a href="Images/home/gallery/photo2.jpg"><img src="Images/home/gallery/photo_smal2.jpg"></a>
			<a href="Images/home/gallery/photo3.jpg"><img src="Images/home/gallery/photo_smal3.jpg"></a>
			<a href="Images/home/gallery/photo4.jpg"><img src="Images/home/gallery/photo_smal4.jpg"></a>
			<a href="Images/home/gallery/photo5.jpg"><img src="Images/home/gallery/photo_smal5.jpg"></a>
			<a href="Images/home/gallery/photo6.jpg"><img src="Images/home/gallery/photo_smal6.jpg"></a>
			<a href="Images/home/gallery/photo7.jpg"><img src="Images/home/gallery/photo_smal7.jpg"></a>
			<a href="Images/home/gallery/photo8.jpg"><img src="Images/home/gallery/photo_smal8.jpg"></a>
			<a href="Images/home/gallery/photo9.jpg"><img src="Images/home/gallery/photo_smal9.jpg"></a>
			<a href="Images/home/gallery/photo10.jpg"><img src="Images/home/gallery/photo_smal10.jpg"></a>
			<a href="Images/home/gallery/photo11.jpg"><img src="Images/home/gallery/photo_smal11.jpg"></a>
			<a href="Images/home/gallery/photo12.jpg"><img src="Images/home/gallery/photo_smal12.jpg"></a>
			<a href="Images/home/gallery/photo13.jpg"><img src="Images/home/gallery/photo_smal13.jpg"></a>
			<a href="Images/home/gallery/photo14.jpg"><img src="Images/home/gallery/photo_smal14.jpg"></a>
			<a href="Images/home/gallery/photo15.jpg"><img src="Images/home/gallery/photo_smal15.jpg"></a>
			<a href="Images/home/gallery/photo16.jpg"><img src="Images/home/gallery/photo_smal16.jpg"></a>
		</div>
	</div>

	<!--feedbacks-->
	<div class="feedback">
		<h1>Reviews</h1>
		<br>
		<hr>

		<div class="box-container">
			<div class="box1">
				<div class="box-top">
					<div class="profile">
						<div class="profile-image">
							<img src="Images/home/feedback/usericon.png" alt="">
						</div>
						<div class="name-user">
							<b>Prasad Channdima</b>
							<span>@pcsplus</span>
						</div>
					</div>
					<div class="reviews">
						<ion-icon name="star"></ion-icon>
						<ion-icon name="star"></ion-icon>
						<ion-icon name="star"></ion-icon>
						<ion-icon name="star"></ion-icon>
						<ion-icon name="star"></ion-icon>
					</div>
				</div>
				<div class="user-comment">
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Incidunt facere tempora fugit magnam earum neque ea, natus aliquid deserunt repudiandae saepe autem maiores porro laudantium sit commodi est quas aut.</p>
				</div>
			</div>
			<div class="box1">
				<div class="box-top">
					<div class="profile">
						<div class="profile-image">
							<img src="Images/home/feedback/usericon.png" alt="">
						</div>
						<div class="name-user">
							<b>Sandali dias</b>
							<span>@dssnsandali</span>
						</div>
					</div>
					<div class="reviews">
						<ion-icon name="star"></ion-icon>
						<ion-icon name="star"></ion-icon>
						<ion-icon name="star"></ion-icon>
						<ion-icon name="star"></ion-icon>
						<ion-icon name="star-outline"></ion-icon>
					</div>
				</div>
				<div class="user-comment">
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Incidunt facere tempora fugit magnam earum neque ea, natus aliquid deserunt repudiandae saepe autem maiores porro laudantium sit commodi est quas aut.</p>
				</div>
			</div>
			<div class="box1">
				<div class="box-top">
					<div class="profile">
						<div class="profile-image">
							<img src="Images/home/feedback/usericon.png" alt="">
						</div>
						<div class="name-user">
							<b>Kaveen Dissanayaka</b>
							<span>@kveenstar</span>
						</div>
					</div>
					<div class="reviews">
						<ion-icon name="star"></ion-icon>
						<ion-icon name="star"></ion-icon>
						<ion-icon name="star"></ion-icon>
						<ion-icon name="star-outline"></ion-icon>
						<ion-icon name="star-outline"></ion-icon>
					</div>
				</div>
				<div class="user-comment">
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Incidunt facere tempora fugit magnam earum neque ea, natus aliquid deserunt repudiandae saepe autem maiores porro laudantium sit commodi est quas aut.</p>
				</div>
			</div>
			<div class="box1">
				<div class="box-top">
					<div class="profile">
						<div class="profile-image">
							<img src="Images/home/feedback/usericon.png" alt="">
						</div>
						<div class="name-user">
							<b>Dinithi Rajapaksha</b>
							<span>@dinithiprins</span>
						</div>
					</div>
					<div class="reviews">
						<ion-icon name="star"></ion-icon>
						<ion-icon name="star"></ion-icon>
						<ion-icon name="star-outline"></ion-icon>
						<ion-icon name="star-outline"></ion-icon>
						<ion-icon name="star-outline"></ion-icon>
					</div>
				</div>
				<div class="user-comment">
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Incidunt facere tempora fugit magnam earum neque ea, natus aliquid deserunt repudiandae saepe autem maiores porro laudantium sit commodi est quas aut.</p>
				</div>
			</div>
			<div class="box1">
				<div class="box-top">
					<div class="profile">
						<div class="profile-image">
							<img src="Images/home/feedback/usericon.png" alt="">
						</div>
						<div class="name-user">
							<b>Aseni Chandarasiri</b>
							<span>@asenibaby</span>
						</div>
					</div>
					<div class="reviews">
						<ion-icon name="star"></ion-icon>
						<ion-icon name="star"></ion-icon>
						<ion-icon name="star"></ion-icon>
						<ion-icon name="star"></ion-icon>
						<ion-icon name="star"></ion-icon>
					</div>
				</div>
				<div class="user-comment">
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Incidunt facere tempora fugit magnam earum neque ea, natus aliquid deserunt repudiandae saepe autem maiores porro laudantium sit commodi est quas aut.</p>
				</div>
			</div>
			<div class="box1">
				<div class="box-top">
					<div class="profile">
						<div class="profile-image">
							<img src="Images/home/feedback/usericon.png" alt="">
						</div>
						<div class="name-user">
							<b>Mahen Senavirathna</b>
							<span>@kumara23</span>
						</div>
					</div>
					<div class="reviews">
						<ion-icon name="star"></ion-icon>
						<ion-icon name="star"></ion-icon>
						<ion-icon name="star"></ion-icon>
						<ion-icon name="star"></ion-icon>
						<ion-icon name="star-outline"></ion-icon>
					</div>
				</div>
				<div class="user-comment">
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Incidunt facere tempora fugit magnam earum neque ea, natus aliquid deserunt repudiandae saepe autem maiores porro laudantium sit commodi est quas aut.</p>
				</div>
			</div>
		</div>
<!--feedback-->
		<div class="add-feedback">
			<p>Add your feedback here...</p>
		</div>

	<form action="php/Pfeedback.inc.php" method ="POST">
			<textarea cols="50" rows="8" name="feedback"></textarea>
			<div class="star">
				<input type="radio" id="one" name="rate" value="1">
				<label for="one"></label>
				<input type="radio" id="two" name="rate" value="2">
				<label for="two"></label>
				<input type="radio" id="three" name="rate" value="3">
				<label for="three"></label>
				<input type="radio" id="four" name="rate" value="4">
				<label for="four"></label>
				<input type="radio" id="fiver" name="rate" value="5">
				<label for="five"></label>
			</div>
			<input type="submit" value="Submit" name = "submit"> 
			<a href="https://www.tripadvisor.com/" target="_blank" ><img src="Images/home/feedback/TripAdvisorlogo.webp" width="350px" height="250px"></a>
			<a href="https://www.booking.com/"  target="_blank"><img class="image2" src="Images/home/feedback/booking.png" width="380px" height="216px"></a>
	</form>
	
	</div>

	<!--Scroll top-->
	<div class="scroll-top">
		<a href="#banner"><img src="Images/home/sroll/arrow_up.png" alt="" width="256px" height="256px"></a>
	</div>
<?php
	include_once 'php/Pfooter.php'
?>