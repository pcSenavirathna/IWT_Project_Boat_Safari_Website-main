<?php
    require 'Pconnect.php';
    session_start();

    if(isset($_POST['submit']))
    {
        $email = $_POST['email'];

        $emailCheckQuery = "SELECT * FROM Registration where email = '$email';";

        $emailCheckResult = mysqli_query($con,$emailCheckQuery);

        $row = mysqli_fetch_assoc($emailCheckResult);

        if($row['email']==$email)
        {
            $_SESSION["forgetemail"] = $email;

            echo "<script>alert('Otp code sent your email');
            window.location.href = '../Potp.php';
            </script>";
        }
        else
        {
            echo "<script>alert('Please Enter correct email');
            window.location.href = '../Pforgetpassword.php';
            </script>";
        }
    }
?>
