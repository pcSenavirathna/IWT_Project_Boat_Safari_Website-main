<?php

    require 'Pconnect.php';

    if(isset($_POST["submit"]))
    {
        $firstName = $_POST["firstName"];
        $lastName = $_POST["lastName"];
        $email = $_POST["email"];
        $password = $_POST["password"];
        $confirmpassword = $_POST["confirmpassword"];
        
        $duplicate = mysqli_query($con, "SELECT * FROM Registration where email = '$email' ");

        if(mysqli_num_rows($duplicate)>0)
        {
            echo "<script>alert('Email Has Already Taken, Try Again..');
            window.location.href = '../Psignup.php';
            </script>";
        }
        else
        {
            if($password == $confirmpassword)
            {
                $query = "INSERT INTO Registration(firstName,lastName,email,password)VALUES ('$firstName','$lastName','$email','$password');";
            
                mysqli_query($con, $query);

                echo "<script>
                alert('Registration Successful');
                window.location.href = '../Ploging.php';
                </script>";
            }
            else
            {
                echo "<script>alert('Password Does Not Match, Try Again');
                window.location.href = '../Psignup.php';
                </script>";
            }
        }
    }
?>

