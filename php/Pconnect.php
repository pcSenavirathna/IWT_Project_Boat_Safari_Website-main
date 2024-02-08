<?php
    $server = "localhost";
    $username = "root";
    $password = "";
    $dbName = "boat_safari_management_system";

    $con = mysqli_connect($server,$username,$password,$dbName);

    if(!$con)
    {
        die("Connection faild : " .mysqli_connect_error());
    }
?>