<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Slab&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
	<title>
		Balentine Boat Safari
	</title>

    <link rel="stylesheet" type="text/css" href="Css/Pfooter.css">
	<link rel="stylesheet" type="text/css" href="Css/SNavigation_bar.css">
	<link rel="stylesheet" type="text/css" href="Css/Sfooter.css">
    <link rel="stylesheet" type="text/css" href="Css/Suserdashboard.css">
    <script src="js/Suserdashboard.js"></script>
</head>
	
<body>
    <!--header-->
        <header>
            <div class="rectangle">
                <div class="navbar">
                <div class="imglogo">
                <div class="imag"><a href="#"><img src="images/logo/logo.png" height="40px" width="40px"/></a></div>
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
                    } else {
                        // Handle the case when the first name and last name are not available in the session
                        header("Location: Plogin.php");
                        exit();
                    }

                    // Generate the combined username
                    $username = $firstName . ' ' . $lastName;

                    // Get the first letter of the first name
                    $firstLetter = substr($firstName, 0, 1);

                ?>


                    <p id="username"><a href="SUserdashboard.php" class="action_btn"><?php echo $firstLetter; ?></a><?php echo $username; ?></p>
                    <a href="Slogout.php"><button class="action_btn">Logout</button></a>
                    <div class="toggLe_btn">
                        <i class="fa-solid fa-bars"></i>
                    </div>
                
                </div>
            </div>  
        </header>

        <!--main content-->
        <div class="outer_main">
        <div class="inner_main">
            <h3>Account Settings</h3><br>
            Manage your personal experience
            <div class="nav_bar">
                <ul class="inner_nav">
                    <!--inner navigation bar-->
                    <li><a href="SUserdashboard.php" class="now_actives">Personal details</a></li>
                    <li><a href="SPaymentDetails.php">Payment details</a></li>
                </ul>
            </div>
            <br><hr class="topHR">
            <!--form-->
            <form method="post" action="#" class="form_form">
                <div>
                  <label>Name</label>
                  <input type="text" name="nameDetails" value="Sandali Dias" class="text_form" id="nameDetails" disabled>
                  <button id="nameBtn" onclick="enableButton('nameBtn','nameDetails')">Edit</button>
                </div><hr>
        
                <div>
                  <label>Email</label>
                  <input type="email" name="emailDetals" value="sandali@gmail.com" class="text_form" id="emailDetals" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}" disabled>
                  <button id="emailBtn" onclick="enableButton('emailBtn','emailDetals')">Edit</button>
                </div><hr>
              
                <div>
                  <label>Phone Number</label>
                  <input type="phone" name="mobileDetails" value="0723984320" class="text_form" id="mobileDetails" pattern="[0-9]{10}" disabled>
                  <button id="mobileBtn" onclick="enableButton('mobileBtn','mobileDetails')">Edit</button>
                </div><hr>
              
                <div>
                  <label>Date of Birth</label>
                  <input type="date" name="dobDetails" value="2003-07-24" class="text_form" id="dobDetails" disabled>
                  <button id="dobBtn" onclick="enableButton('dobBtn','dobDetails')">Edit</button>
                </div><hr>
              
                <div>
                  <label>Gender</label>
                  <select name="genderDetails" id="genderDetails" class="text_form" disabled>
                    <option value="Female" selected>Female</option>
                    <option value="Male">Male</option>
                    <option value="Other">Other</option>
                  </select>
                  <button id="genderBtn" onclick="enableButton('genderBtn','genderDetails')">Edit</button>
                </div><hr>
              
                <div>
                  <label for="addressDetails">Address:</label>
                  <input type="textarea" name="addressDetails" value="No. 30/16 Ragama Road, Kadawatha" class="text_form" id="addressDetails" rows="2" cols="50" disabled>
                  <button id="addressBtn" onclick="enableButton('addressBtn','addressDetails')">Edit</button>
                </div><hr id="bottomHR">
            </form>
        </div>
        </div>
        
<?php
	include_once 'php/Pfooter.php'
?>

