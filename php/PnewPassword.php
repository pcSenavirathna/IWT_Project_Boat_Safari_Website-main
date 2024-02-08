<?php
    require 'Pconnect.php';
    session_start();

    if(isset($_POST['verify']))
    {
        $newPassword = $_POST['password'];
        $confirmPassword = $_POST['confirmpassword'];

        
        $email = $_SESSION["forgetemail"];

        if($newPassword == $confirmPassword)
        {
            $sql = "UPDATE registration SET password = '$newPassword' WHERE email = '$email';";
            mysqli_query($con,$sql);

            echo "<script>alert('Now you already new Password');
            window.location.href = '../Ploging.php';
            </script>";
        }
        else{
            echo "<script>alert('Password does not match, Try again');
            window.location.href = '../Pconfirmation.php';
            </script>";
        }
    }
?>