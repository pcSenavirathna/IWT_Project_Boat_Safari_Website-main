<?php

    require 'Pconnect.php';

    if(isset($_POST["submit"]))
    {
        $useremail = $_POST["email"];
        $password = $_POST["password"];

        $result = mysqli_query($con, "SELECT * FROM Registration WHERE email = '$useremail'");
        $row = mysqli_fetch_assoc($result);

        if(mysqli_num_rows($result) > 0)
        {
            if($password == $row["password"])
            {
                session_start();
                $_SESSION["login"] = true;
                $_SESSION['firstname'] = $row["firstName"];
                $_SESSION['lastname'] = $row["lastName"];
                $_SESSION['user_id'] = $row["userID"];
                
                echo "<script>alert('Loggin Successful');
                window.location.href = '../index.php';
                </script>";
            }
            else
            {
                echo "<script>alert('Wrong Password,Tray again');
                window.location.href = '../Ploging.php';
                </script>";
            }
        }
        else 
        {
            echo "<script>alert('User Not Register,Please Register');
            window.location.href = '../Psignup.php';
            </script>";
        }
       
    }



?>