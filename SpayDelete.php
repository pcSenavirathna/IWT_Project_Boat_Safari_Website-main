<?php
    include"Sconfig.php";

    $pay_ID = $_GET['id'];

    $query = "DELETE FROM payment WHERE payID = '$pay_ID';";
    $result = $conn->query($query);

    if($result == TRUE){
        echo"Record deleted successfully";
        header("Location: SPaymentCards.php");
    }
    else{
        return "error". $query. "<br>". $conn->error;
    }

?>