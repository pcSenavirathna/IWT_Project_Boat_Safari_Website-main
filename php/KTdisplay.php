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
    <button class="view"><a href="../tour.php">back to tour page </a></button>


    <table class = "table">
        <th>
         <tr>
            <th scope="col">tourid</th>
            <th scope="col">date</th>
            <th scope="col">adults</th>
            <th scope="col">Children</th>
            <th scope="col">first name</th>
            <th scope="col">Last name</th>
         </tr></th>
         
         <tr>



         <?php
            $sql="Select * from `tourbooking`";
            $result=mysqli_query($con,$sql);
            if($result){
                while($row=mysqli_fetch_assoc($result)){
                $id=$row['tourID'];
                $datee=$row['date'];
                $adultsss=$row['adults'];
                $childrennn=$row['children'];
                $fnameee=$row['fname'];
                $lnameee=$row['lname'];
                echo '<tr>
                <th scope="row">'.$id.'</th>
                <td>'.$datee.'</td>
                <td>'.$adultsss.'</td> 
                <td>'.$childrennn.'</td>
                <td>'.$fnameee.'</td>
                <td>'.$lnameee.'</td>
                <td>
                <button class="view"><a href="KTupdate.php? updateid='.$id.'">Update</a></button>
                <button class="view"><a href="KTdelete.php? deleteid='.$id.'">Delete</a></button>
                 </td>
                </tr>
                '; ?>
                <?php }
        
            }


         ?> 
        
        </tr>
      </table>
</body>
</html>
