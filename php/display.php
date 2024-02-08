<?php
	include 'connect.php';
?>
<!DOCTYPE html>
<html>
	<head>
	
		<meta charset="UTF-8"/>
		<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
		<link rel="stylesheet" type="text/css" href="../Css/payments.css"/>
		<link rel="preconnect" href="https://fonts.googleapis.com">
		<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
		<link href="https://fonts.googleapis.com/css2?family=Roboto+Slab&display=swap" rel="stylesheet">
		<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css"/>

		<title>acc results</title>
	</head>
	<body>
<br>
    <button class="view"><a href="../accommodation.php">back to page </a></button>


    <table class = "table">
        <thead>
         <tr>
            <th scope="col">id</th>
            <th scope="col">check-in</th>
            <th scope="col">check-out</th>
            <th scope="col">adults</th>
            <th scope="col">Children</th>
            <th scope="col">nights</th>
            <th scope="col">room type</th>
            <th scope="col">No of rooms</th>
            <th scope="col">first name</th>
            <th scope="col">Last name</th>
         </tr></thead>
         
         <tbody>



         <?php
            $sql="Select * from `accommodationbooking`";
            $result=mysqli_query($con,$sql);
            if($result){
                while($row=mysqli_fetch_assoc($result)){
                $id=$row['AccID'];
                $checkinnn=$row['checkin'];
                $checkouttt=$row['checkout'];
                $adultsss=$row['adults'];
                $childrennn=$row['children'];
                $nightsss=$row['nights'];
                $rtypeee=$row['rtype'];
                $rcounttt=$row['No_of_rooms'];
                $fnameee=$row['fname'];
                $lnameee=$row['lname'];
                echo '<tr>
                <th scope="row">'.$id.'</th>
                <td>'.$checkinnn.'</td>
                <td>'.$checkouttt.'</td>
                <td>'.$adultsss.'</td> 
                <td>'.$childrennn.'</td>
                <td>'.$nightsss.'</td>
                <td>'.$rtypeee.'</td>
                <td>'.$rcounttt.'</td>
                <td>'.$fnameee.'</td>
                <td>'.$lnameee.'</td>
                <td>
                <button class="view"><a href="update.php? updateid='.$id.'">Update</a></button>
                <button class="view"><a href="delete.php? deteleid='.$id.'">Delete</a></button>
                 </td>
                </tr>
                '; ?>
                <?php }
        
            }


         ?> 
        
        </tbody>
      </table>
</body>
</html>
