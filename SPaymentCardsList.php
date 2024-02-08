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
    <link rel="stylesheet" type="text/css" href="Css/Spaymentcards.css">
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

                        $firstName = $_SESSION['firstname'];
                        $lastName = $_SESSION['lastname'];

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
        <div class="back_back">
            <a href="SPay.php"><button class="back_button">Back<button></a></div>
            <table>

                <tr>
                    <th>Card Type</th>
                    <th>Card Number</th>
                    <th>Card Holder Name</th>
                    <th>Expiration Date</th>
                    <th>Verification Number</th>
                    <th>Action</th>
                </tr>
                

                <?php
                include "Sconfig.php";
                $userID = $_SESSION['user_id'];
                $query = "SELECT * FROM payment WHERE uID = $userID;";
                $result = $conn->query($query);

                if ($result->num_rows > 0) {
                    while ($row = $result->fetch_assoc()) {
                ?>
                    <tr>
                        <td><?php echo $row["cardType"]; ?></td>
                        <td><?php echo $row["cardNumber"]; ?></td>
                        <td><?php echo $row["cardHolder"]; ?></td>
                        <?php $formattedDate = date("m/Y", strtotime($row["expiryDate"])); ?>
                        <td><?php echo $formattedDate; ?></td>
                        <td><?php echo $row["verificationNum"]; ?></td>
                        <!--Kaveen's booking page eka href danna-->
                        <td><a href="K"><button class="back_button">Use<button></a></td>
                    </tr>
                <?php
                    }
                } else {
                    echo "Empty rows";
                }
                $conn->close();
                ?>
                </table>
        </div>
        
<?php
	include_once 'php/Pfooter.php'
?>