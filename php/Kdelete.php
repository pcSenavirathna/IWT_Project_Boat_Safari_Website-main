<?php
    	include 'connect.php';

        if(isset($_GET['deleteid'])){
            $id=$_GET['deleteid'];

            $sql="delete from `accommodationbooking` where AccID=$id";
            $result=mysqli_query($con,$sql);
            if($result){
                header('location:Kdisplay.php');
            }else{
                die(mysqli_error($con));
            }
        }

?>