<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="stylesheet" type="text/css" href="Css/Pfooter.css">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Slab&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
	<title>
		Balentine Boat Safari
	</title>

	<link rel="stylesheet" type="text/css" href="Css/SNavigation_bar.css">
	<link rel="stylesheet" type="text/css" href="Css/Sfooter.css">
    <link rel="stylesheet" type="text/css" href="Css/Spay.css">
    <script src="js/Spayment.js"></script>
    <script src="js/Spay.js"></script>
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
                        //Prasad aiyage login.php eka
                        header("Location: Plogings.php");
                        exit();
                    }

                    // Generate the combined username
                    $username = $firstName . ' ' . $lastName;

                    // Get the first letter of the first name
                    $firstLetter = substr($firstName, 0, 1);

                ?>


                    <p id="username"><a href="SUserdashboard.php" class="action_btn"><?php echo $firstLetter; ?></a><?php echo $username; ?></p>
                    
                    <div class="toggLe_btn">
                        <i class="fa-solid fa-bars"></i>
                    </div>
                
                </div>
            </div>   
        </header>

        <!--main content-->
        <div class="outer_main">
            <div class="box" >
                <div class="text" >
                    <h2>Pay</h2>
                    <div class="a_addedCards"><button class="addedCards" onclick="toggleFormFields(); redirectToPaymentCards()">Use Added Card</button></div>
                    <!--kaveenge booking eka one-->
                    <form method="post" action="" class="form_form">
                        <div>
                          <label>Card Type</label>
                          <input type="radio" name="cardType" value="Visa" class="cardtype" checked> Visa
                          <input type="radio" name="cardType" value="Master" class="cardtype"> Master
                        </div><hr class="topHR">
                
                        <div>
                          <label>Card Number</label>
                          <input type="text" name="cardNumDetails" placeholder="Add card number" class="text_form" id="cardNumDetails" oninput="validateCardNumInput(this)" required>
                        </div><hr>
                      
                        <div>
                          <label>Card Holder Name</label>
                          <input type="text" name="cardHolderDetails" placeholder="Add name" class="text_form" id="cardHolderDetails" oninput="validateNameInput(this)" required>
                        </div><hr>
                      
                        <div>
                          <label>Expiration Date</label>
                          <input type="text" name="expDateDetails" placeholder="mm/yyyy" class="text_form" id="expDateDetails" oninput="formatDateInput(this)"  required>
                        </div><hr>
                      
                        <div>
                          <label>Verification Number</label>
                          <input type="text" name="verificationNumDetails" placeholder="XXX" class="text_form" id="verificationNumDetails" oninput="validateNumberInput(this)" required>
                        </div><hr>

                        <div>
                            <label>Amount</label>
                            <input type="text" name="cardNumDetails" placeholder="Add card number" class="text_form" id="cardNumDetails" oninput="validateCardNumInput(this)" required>
                            <!--Kaveenge booking eka-->
                            <div class="submitPayDiv"><a href=""><button value="Submit" class="submitPay" name="submit">Submit</button></a></div>
                        </div><hr id="bottomHR">
                    </form>
                </div>
            </div>
        </div>
        
<?php
	include_once 'php/Pfooter.php'
?>

