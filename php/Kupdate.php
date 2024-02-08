<?php
	include 'connect.php';
	
    $id=$_GET['updateid'];
	$sql = "select * from `accommodationbooking` where AccID='$id'";
	$result = mysqli_query($con,$sql);
	$row =mysqli_fetch_assoc($result);
				$checkinnn=$row['checkin'];
                $checkouttt=$row['checkout'];
                $adultsss=$row['adults'];
                $childrennn=$row['children'];
                $nightsss=$row['nights'];
                $rtypeee=$row['rtype'];
                $rcounttt=$row['No_of_rooms'];
                $fnameee=$row['fname'];
                $lnameee=$row['lname'];

	if(isset($_POST['submitt'])){
		$checkinn=$_POST['CHECKIN'];
		$checkoutt=$_POST['CHECKOUT'];
		$adultss=$_POST['ADULTS'];
		$childrenn=$_POST['CHILDREN'];
		$nightss=$_POST['NIGHTS'];
		$rtypee=$_POST['rtype'];
		$rcountt=$_POST['No_of_rooms'];
		$fnamee=$_POST['fname'];
		$lnamee=$_POST['lname'];


		$sql="update `accommodationbooking` set AccID='$id',checkin='$checkinn',checkout='$checkoutt',adults='$adultss',children='$childrenn',nights='$nightss',rtype='$rtypee',No_of_rooms='$rcountt',fname='$fnamee',lname='$lnamee' where AccID='$id'";
		$result=mysqli_query($con,$sql);

		if($result=TRUE){
			//echo "success update";
			header('location:Kdisplay.php');
		}
		else{
			die(mysql_error($con));
		}
	}
?>
<!DOCTYPE html>
<html>
	<head>
	
		<meta charset="UTF-8"/>
		<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
		<link rel="stylesheet" type="text/css" href="../Css/payments.css"/>
		<link rel="stylesheet" type="text/css" href="css/style1.css"/>
		<link rel="preconnect" href="https://fonts.googleapis.com">
		<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
		<link href="https://fonts.googleapis.com/css2?family=Roboto+Slab&display=swap" rel="stylesheet">
		<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css"/>

		<title>Update</title>
	</head>
	<body>
		<br><br>	
	<div class="boxes">
			<div class="box1">
						
						<form action="" method="POST">

							<label for="birthday">CHECK-IN:</label>
							<input type="date" id="CHECKIN" name="CHECKIN" value=<?php echo $checkinnn;?>><br>
						<label for="birthday">CHECK-OUT:</label>
							<input type="date" id="CHECKOUT" name="CHECKOUT" value=<?php echo $checkouttt;?>><br>
					  <label for="ADULTS">ADULTS</label>
						  <select id="ADULTS" name="ADULTS" value=<?php echo $adultsss;?>>
							<option value="0">0</option>
							<option value="1">1</option>
							<option value="2">2</option>
							<option value="3">3</option>
							<option value="4">4</option>
							<option value="5">5</option>
							<option value="6">6</option>
						</select>	<br>

						  <label for="CHILDREN">CHILDREN</label>
						  <select id="CHILDREN" name="CHILDREN" value=<?php echo $childrennn;?>>
							<option value="0">0</option>
							<option value="1">1</option>
							<option value="2">2</option>
							<option value="3">3</option>
							<option value="4">4</option>
							<option value="5">5</option>
							<option value="6">6</option>
						  </select><br>

						  <label for="NIGHTS">NIGHTS</label>
						  <select id="NIGHTS" name="NIGHTS" value=<?php echo $nightsss;?>>
							<option value="0">0</option>
							<option value="1">1</option>
							<option value="2">2</option>
							<option value="3">3</option>
							<option value="4">4</option>
							<option value="5">5</option>
							<option value="6">6</option>
						  </select>
						<br>
						  <label for="rtype">SELECT ROOM TYPE</label>
						  <select id="rtype" name="rtype" value=<?php echo $rtypeee;?>>
							<option value="EXCLUSIVE ROOM">EXCLUSIVE ROOM</option>
							<option value="STANDARD ROOM">STANDARD ROOM</option>
							<option value="BASIC ROOM">BASIC ROOM</option>		
						  </select>	<br>

						  <label for="No_of_rooms">NO.OF ROOMS</label>
						  <select id="No_of_rooms" name="No_of_rooms" value=<?php echo $rcounttt;?>>
							
							<option value="1">1</option>
							<option value="2">2</option>
							<option value="3">3</option>
							<option value="4">4</option>
							
						  </select><br>

						  <label for="name">NAME</label>
							<input type="text" class="name" name="fname" value=<?php echo $fnameee;?>>
							<input type="text" class="name" name="lname" value=<?php echo $lnameee;?>><br><br>
							<input type="submit" class="view" value="Update" name="submitt">
							
							

					</form>
			</div>
		</div>	
	</body>
</html>