<?php
    include"Sconfig.php";
    $card_type = $_POST['cardType'];
    $card_number = $_POST['cardNum'];
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
    $pay_ID = $_GET['id'];

    $query = "UPDATE payment SET cardType = '$card_type', cardNumber = '$card_number', cardHolder = '$card_holder', expiryDate = '$formattedDate', verificationNum = '$verification_number' WHERE payID = '$pay_ID';";
    $result = $conn->query($query);

    if($result == TRUE){
        echo"Records updated successfully";
        header("Location: SPaymentCards.php");
    }
    else{
        return "error". $query. "<br>". $conn->error;
    }
?>