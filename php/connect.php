<?php

    $con=new mysqli('localhost','root','','boat_safari_management_system');

    if($con){
        echo "connection successful";
    }
    else{
        die(mysql_error($con));
    }
    

?>
