<?php

   session_start();
   require 'Pconnect.php';

    function checklogedIn()
    {
        if (!isset($_SESSION['user_id']))
        {
            echo "<script>alert('Please loggin first..');
            window.location.href = '../Ploging.php';
            </script>";
            exit();
        }
    }

    function saveFeedback($feedback)
    {
        require 'Pconnect.php';

        $user_id = $_SESSION['user_id'];
        $feedback = mysqli_real_escape_string($con, $feedback);

        $query = "INSERT INTO feedback_table (user_id, content) VALUES ('$user_id', '$feedback')";
    
        if (mysqli_query($con, $query)) {
            echo "<script>alert('Feedback added successfully');
            window.location.href = '../index.php';
            </script>";
        } else {
            echo "Error: " . $query . "<br>" . mysqli_error($con);
        }
    }
   
    checklogedIn();

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        if (isset($_POST['feedback'])) {
            $feedback = $_POST['feedback'];
            saveFeedback($feedback);
        }
    }


?>