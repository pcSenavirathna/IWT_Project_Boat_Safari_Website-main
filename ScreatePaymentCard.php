<?php
    include"Sconfig.php";

        session_start();

        $loggedInUserID = $_SESSION['user_id'];

        $card_type = $_POST['cardType'];
        $card_number = $_POST['cardNum'];

        // Check if the card number already exists for the user
        $query = "SELECT COUNT(*) AS count FROM payment WHERE cardNumber = '$card_number' AND uID = '$loggedInUserID';";
        $result = $conn->query($query);
        $row = $result->fetch_assoc();
        $count = $row['count'];

        if ($count > 0) {
            // Card number already exists for the user, perform appropriate action (e.g., display an error message)
            echo "Card number already exists for the user.";
            exit;
        }

        $card_holder = $_POST['cardHolder'];
        $expiry_date = $_POST["expDate"];
        // Convert the date to MySQL format (yyyy-mm-dd)
        $dateParts = explode('/', $expiry_date);

        if (count($dateParts) === 2) {
            $month = intval($dateParts[0]);
            $year = intval($dateParts[1]);

    
            $formattedDate = sprintf('%04d-%02d-01', $year, $month);
        }
        $verification_number = $_POST['verificationNum'];

        $query = "INSERT INTO payment(uID , cardType,cardNumber, cardHolder, expiryDate, verificationNum) 
        VALUES ('$loggedInUserID', '$card_type', '$card_number', '$card_holder', '$formattedDate', '$verification_number' );";
        $result = $conn->query($query);
        
        if ($result === true) {
            echo "Card details inserted successfully.";
        } else {
            echo "Error inserting card details: " . $conn->error;
        }

        header("Location: SPaymentDetails.php");
        $conn->close();

?>