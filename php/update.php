<?php
	include 'connect.php';
    $id=$_GET['updateid'];
	if(isset($_POST['submitt'])){
		$checkinn=$_POST['CHECKIN'];
		$checkoutt=$_POST['CHECKOUT'];
		$adultss=$_POST['ADULTS'];
		$childrenn=$_POST['CHILDREN'];
		$nightss=$_POST['NIGHTS'];
		$rtypee=$_POST['rtype'];
		$rcountt=$_POST['No_of_rooms'];
		$fnamee=$_POST['fname'];
		$lnamee=$_POST['lname'];


		$sql="update `accommodationbooking` set id=$id ";
		$result=mysqli_query($con,$sql);

		if($result=TRUE){
			echo "success update";
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
		<link rel="stylesheet" type="text/css" href="../Css/style1.css"/>
		<link rel="preconnect" href="https://fonts.googleapis.com">
		<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
		<link href="https://fonts.googleapis.com/css2?family=Roboto+Slab&display=swap" rel="stylesheet">
		<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css"/>

		<title>Accommodation</title>
	</head>
	<body>
		
	<!--navbar starts-->
		<header>
		<div class="rectangle">
			<div class="navbar">
			<div class="imglogo">
			<div class="imag"><a href="#"><img src="../Images/logo.png" height="40px" width="40px"/></a></div>
			<div class="logo"><a href="#">Balentines Boat Safari</a></div></div>
			<ul class="links">
				<li><a href="Home">Home</a></li>
				<li><a href="Booking.html">Book-In</a></li>
				<li><a href="AboutUs">About Us</a></li>
				<li><a href="ContactUs">Contact Us</a></li>
			</ul>
				<a href="#" class="action_btn">Login</a>
			</div>
		</div>
		</header>
		<!--navbar ends-->
		<CENTER>
		<div class="topics">
			<div class="bal">BALENTINE’S</div>
			<div class="hotel">RESORT & SPA</div>
			<DIV class="stay">STAY. ENJOY.  FEEL.</DIV>
		</div>
		</CENTER>
		
		<div class="boxes">
			<div class="box1">
						<center>
						<form action="" method="POST">

							<label for="birthday">CHECK-IN:</label>
							<input type="date" id="CHECKIN" name="CHECKIN">
						<label for="birthday">CHECK-OUT:</label>
							<input type="date" id="CHECKOUT" name="CHECKOUT">
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

						  <label for="NIGHTS">NIGHTS</label>
						  <select id="NIGHTS" name="NIGHTS">
							<option value="0">0</option>
							<option value="1">1</option>
							<option value="2">2</option>
							<option value="3">3</option>
							<option value="4">4</option>
							<option value="5">5</option>
							<option value="6">6</option>
						  </select>
						<br>
						  <label for="rtype">SELECT ROOM TYPE</label>
						  <select id="rtype" name="rtype">
							<option value="EXCLUSIVE ROOM">EXCLUSIVE ROOM</option>
							<option value="STANDARD ROOM">STANDARD ROOM</option>
							<option value="BASIC ROOM">BASIC ROOM</option>		
						  </select>	

						  <label for="No_of_rooms">NO.OF ROOMS</label>
						  <select id="No_of_rooms" name="No_of_rooms">
							
							<option value="1">1</option>
							<option value="2">2</option>
							<option value="3">3</option>
							<option value="4">4</option>
							
						  </select>

						  <label for="name">NAME</label>
							<input type="text" class="name" name="fname" placeholder="First name..">
							<input type="text" class="name" name="lname" placeholder="Last name..">
							<input type="submit" class="submit" value="Pay Now" name="submitt">
							<button class="view"><a href="">View <a></button>
							

					</form></center>
			</div>
		</div>	
		<!---------------------------------------------------------------------------------------->
		<div class="cards">
			<div class="card1">
				<div class="topic">EXCLUSIVE ROOM</div>
				<hr width="500px">
				<div class="mainlist">
					<ul style="list-style-type:disc">
						<li>Bedroom 1: 1 extra-large double bed</li>
						<li>Bedroom 2: 2 single beds</li>
						<li>Living room: 1 sofa bed</li>
					</ul> 
					<p>This room has a balcony, private entrance and satellite TV.</p>
				</div>
				<div class="bullets">
				<div class="bullets1">
					<ul>
					<li>Private suite</li>
					<li>39 m²</li>
					<li>Private kitchen</li>
					<li>Private bathroom</li>
					<li>Private pool</li>
					<li>Balcony</li>
					<li>Pool view</li>
				</ul>
				</div>
				<div class="bullets2">
				<ul>
						<li>Mountain view</li>
						<li>Pool with a view</li>
						<li>Dishwasher</li>
						<li>Flat-screen TV</li>
						<li>Coffee machine</li>
						<li>Minibar</li>
						<li>Free WiFi </li>	
				</ul>
				</div>

				</div>
				<h2 class="price">LKR 65,000/=</h2>

				<div class="slidee1" style="max-width:500px">
					<img  src="../Images/exroom.png" style="width:100%">
				  </div>			  
			</div>
		</div>

		<div class="cards">
			<div class="card2">
				<div class="topic">STANDARD ROOM</div>
				<hr width="500px">
				<div class="mainlist">
					<ul style="list-style-type:disc">
						
						<li>Bedroom : 2 single beds</li>
						<li>Living room: 1 sofa bed</li>
					</ul> 
					<p>This room has a private entrance and satellite TV.</p>
				</div>
				<div class="bullets">
				<div class="bullets1">
					<ul>
					<li>Private suite</li>
					<li>39 m²</li>
					<li>Private kitchen</li>
					<li>Private bathroom</li>			
				</ul>
				</div>
				<div class="bullets2">
				<ul>
						<li>Mountain view</li>
						<li>Pool with a view</li>
						<li>Dishwasher</li>
						<li>Flat-screen TV</li>
						<li>Coffee machine</li>
						
						<li>Free WiFi </li>
					
				</ul>
				</div>

				</div>
				<br><br>
				<h2 class="price">LKR 45,000/=</h2>
				<div class="slidee2" style="max-width:500px">
					
				  
					<img  src="../Images/basroom.jpeg" style="width:100%">
					
				  </div>
				  
			</div>

		</div>

		<div class="cards">
			<div class="card2">
				<div class="topic">BASIC ROOM</div>
				<hr width="500px">
				<div class="mainlist">
					<ul style="list-style-type:disc">
						
						<li>Bedroom : 2 single beds</li>
						
					</ul> 
					<p>This room has an air conditined area and satellite TV.</p>
				</div>
				<div class="bullets">
				<div class="bullets1">
					<ul>
					<li>Private suite</li>
					<li>39 m²</li>
					<li>Private kitchen</li>
					<li>Private bathroom</li>
					
					
					
				</ul>
				</div>
				<div class="bullets2">
				<ul>
						
						<li>Flat-screen TV</li>
						<li>Coffee machine</li>
						
						<li>Free WiFi </li>
					
				</ul>
				</div>

				</div>
				<br><br><br><br><br>
				<h2 class="price">LKR 25,000/=</h2>

				<div class="slidee3" style="max-width:500px">
					<img  src="../Images/stroom.jpeg" style="width:100%">
					
				  </div>
				  
			</div>
			
		</div>

			

		<br><br>



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
	
	</body>
</html>