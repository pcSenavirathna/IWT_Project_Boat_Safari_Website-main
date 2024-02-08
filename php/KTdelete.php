<?php
    	include 'connect.php';

        if(isset($_GET['deleteid'])){
            $id=$_GET['deleteid'];

            $sql="delete from `tourbooking` where tourID=$id";
            $result=mysqli_query($con,$sql);
            if($result){
                header('location:KTdisplay.php');
            }else{
                die(mysqli_error($con));
            }
        }


?>