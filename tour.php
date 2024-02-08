<?php
	include 'php/connect.php';

	if(isset($_POST['submit'])){

		$datee=$_POST['DATE'];
		$adults=$_POST['ADULTS'];
		$children=$_POST['CHILDREN'];
		$firstname=$_POST['fname'];
		$lastname=$_POST['lname'];

		$sql="insert into `tourbooking` (fname,lname,DATE,ADULTS,CHILDREN)
		values('$firstname','$lastname','$datee','$adults','$children')";
		$result=mysqli_query($con,$sql);

		if($result=TRUE){
			echo "";
		}
		else{
			die(mysql_error($con));
		}
	}
?>


<!DOCTYPE html>
<html>
	<head>
	
		<meta charset="UTF-8"/>
		<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
		<link rel="stylesheet" type="text/css" href="Css/style3.css"/>
		<link href="https://fonts.googleapis.com/css2?family=Roboto+Slab&display=swap" rel="stylesheet">

		

		<title>tour</title>
	</head>
	<body>
		
	<!--navbar starts-->
		<header>
		<div class="rectangle">
			<div class="navbar">
			<div class="imglogo">
			<div class="imag"><a href="#"><img src="images/logo.png" height="40px" width="40px"/></a></div>
			<div class="logo"><a href="#">Balentines Boat Safari</a></div></div>
			<ul class="links">
				<li><a href="index.php">Home</a></li>
				<li><a href="Booking.php">Book-In</a></li>
				<li><a href="AboutUs.php">About Us</a></li>
				<li><a href="Dindex.php">Contact Us</a></li>
			</ul>
				<a href="Ploging.php" class="action_btn">Login</a>
				
			
		</div>
		</div>
		</header>
		<!--navbar ends-->
		<CENTER>
		<div class="topics">
			<div class="bal">BALENTINE’S</div>
			<div class="hotel">TOURS & BOAT SAFARI</div>
			<DIV class="stay">THE ONE AND ONLY TOUR THAT<BR>YOU <P>NEVER FORGET!</P></DIV>
		</div>
		</CENTER>
		
		<div class="boxes">
			<div class="box1">
				
				
						<center>
						<form action="" method="POST"  >

							<label for="DATE">DATE:</label>
							<input type="date" id="DATE" name="DATE">
							
						  <label for="ADULTS">ADULTS</label>
						  <select id="ADULTS" name="ADULTS">
							<option value="0">0</option>
							<option value="1">1</option>
							<option value="2">2</option>
							<option value="3">3</option>
							<option value="4">4</option>
							<option value="5">5</option>
							<option value="6">6</option>
						</select>	

						  <label for="CHILDREN">CHILDREN</label>
						  <select id="CHILDREN" name="CHILDREN">
							<option value="0">0</option>
							<option value="1">1</option>
							<option value="2">2</option>
							<option value="3">3</option>
							<option value="4">4</option>
							<option value="5">5</option>
							<option value="6">6</option>
						  </select>		
						  
						 			 <label for="fname">FIRST NAME</label>
                                    <input type="text" class="fname" name="fname" placeholder="First name..">
                                    <label for="lname">LAST NAME</label>
                                    <input type="text" class="lname" name="lname" placeholder="Last name..">
                                  
								  
								<input type="submit" class="submit" value="submit" name="submit">

								<button class="view"><a href="php/KTdisplay.php">View <a></button>
						</form></center>

			</div>
		</div>
		
	
		
		<center><p class="embark">
            Embark on an unforgettable adventure as we take you on a thrilling journey through 
			the picturesque waterways and enchanting natural landscapes. Our boat safari tours offer a 
			unique and immersive experience, allowing you to explore the beauty of rivers, lakes,
			 and coastlines while getting up close and personal with wildlife and breathtaking scenery.        
        </p></center><BR><BR>

	

	<div class="slideshow-container">

		<div class="mySlides fade">
			<CENTER><div class="topic">FISH PEDICURE</div>
			<hr width="500px"><BR>
		  <div class="numbertext">1 / 3</div>
		  <img src="images
/FISHH.jpg" style="width:100%"><BR><BR>
		  <div class="contain">Fish therapy, also known as fish pedicure or fish spa, is a unique spa treatment that involves 
			immersing your feet or hands in a tank of water filled with small, toothless fish known as Garra rufa or doctor fish. These tiny fish 
			nibble on the dead skin cells and calluses, providing a gentle exfoliating and massaging sensation
	</div></CENTER>
		</div>
		
		<div class="mySlides fade">
			<CENTER><div class="topic">BOAT RIDE</div>
			<hr width="500px"><BR>
		  <div class="numbertext">2 / 3</div>
		  <img src="images
/BOATT.jpg" style="width:100%"><BR><BR>
		  <div class="contain">"Sailing into the horizon, where the sun kisses the sea."<br>"Experience pure bliss on our exclusive resort boat ride.
			 Step aboard our luxurious vessel and embark on a journey of relaxation and adventure.
			  As you glide across the crystal-clear waters, feel the gentle sea breeze caress your skin and the warm sun rays energize your spirit.
			   Marvel at the breathtaking coastal scenery and immerse yourself in the tranquility of the ocean. Whether you choose a leisurely cruise or an exhilarating exploration,
			    our experienced crew will ensure your comfort and safety throughout the voyage. Indulge in the ultimate escape as you create unforgettable memories on this extraordinary
				 boat ride offered exclusively at our resort."</div></CENTER>
		</div>
		
		<div class="mySlides fade">
		<CENTER><div class="topic">BIRD WATCHING & ANIMAL OBSERVING</div>
			<hr width="500px"><BR>
		  <div class="numbertext">3 / 3</div>
		  <img src="images
/10.jpg" style="width:100%"><BR><BR>
		  <div class="contain">Feel the thrill of anticipation as you spot vibrant feathered creatures soaring above, 
			gracefully diving into the water, or perched on branches, showcasing their natural beauty.
			 Keep your binoculars at the ready, for each turn reveals a new spectacle, 
			 from majestic eagles and graceful herons to colorful kingfishers and elusive waterfowl.<br><br>

			But our safari is not just about birds; it's an opportunity to encounter a myriad of animal species.
			 Watch in awe as we come across gentle river otters playing in the shallows, families of monkeys swinging through the treetops, and ancient reptiles sunning themselves
			  along the riverbanks. Keep your eyes peeled for magnificent
			 crocodiles basking in the sun, and if you're lucky, catch a glimpse of elusive big cats prowling along the water's edge.</div></CENTER>
		</div>
		
		<a class="prev" onclick="plusSlides(-1)">❮</a>
		<a class="next" onclick="plusSlides(1)">❯</a>
		
		</div>
		<br>
		
		<div style="text-align:center">
		  <span class="dot" onclick="currentSlide(1)"></span> 
		  <span class="dot" onclick="currentSlide(2)"></span> 
		  <span class="dot" onclick="currentSlide(3)"></span> 
		</div>
		
		
        

					<br><br>	
			
<!----------------------------------------------------------------------------------------------------------->

	<section class="footer">
		<center><div class="content"><h4>CONNECT WITH </h4><h4>BALENTINE’S SAFARI AND HOTELS</h4></div>
		<div class="social">
			<a href="#"><i class="fab fa-instagram"></i></a>
			<a href="#"><i class="fab fa-snapchat"></i></a>
			<a href="#"><i class="fab fa-twitter"></i></a>
			<a href="#"><i class="fab fa-facebook"></i></a>
		</div>	
		
		<ul class="list">
			<li><a href="#">Home</a></li>
			<li><a href="#">Book-in</a></li>
			<li><a href="#">About Us</a></li>
			<li><a href="#">Contact Us</a></li>
		</ul>
		<p class="copyr">
			Copyright @ 2022 BALENTINE’S - All rights reserved.
		</p></center>
	<script src="js/script1.js"></script>
	</body>
</html>