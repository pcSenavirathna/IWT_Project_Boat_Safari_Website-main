<?php
	include 'connect.php';
    $id=$_GET['updateid'];
	$sql = "select * from `tourbooking` where tourID='$id'";
	$result = mysqli_query($con,$sql);
	$row =mysqli_fetch_assoc($result);
	
                $dateee=$row['date'];
                $adultsss=$row['adults'];
                $childrennn=$row['children'];
                $fnameee=$row['fname'];
                $lnameee=$row['lname'];

	if(isset($_POST['submit'])){
		$datee=$_POST['DATE'];
		$adults=$_POST['ADULTS'];
		$children=$_POST['CHILDREN'];
		$firstname=$_POST['fname'];
		$lastname=$_POST['lname'];


		$sql="update `tourbooking` set tourID='$id',date='$datee',adults='$adults',children='$childrenn',fname='$firstname',lname='$lastname' where tourID='$id'";
		$result=mysqli_query($con,$sql);

		if($result=TRUE){
			//echo "success update";
			header('location:KTdisplay.php');
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
				
				
						<center>
						<form action="" method="POST"  >

							<label for="DATE">DATE:</label>
							<input type="date" id="DATE" name="DATE"><br>
							
						  <label for="ADULTS">ADULTS</label>
						  <select id="ADULTS" name="ADULTS">
							<option value="0">0</option>
							<option value="1">1</option>
							<option value="2">2</option>
							<option value="3">3</option>
							<option value="4">4</option>
							<option value="5">5</option>
							<option value="6">6</option>
						</select>	<br>

						  <label for="CHILDREN">CHILDREN</label>
						  <select id="CHILDREN" name="CHILDREN">
							<option value="0">0</option>
							<option value="1">1</option>
							<option value="2">2</option>
							<option value="3">3</option>
							<option value="4">4</option>
							<option value="5">5</option>
							<option value="6">6</option>
						  </select>		<br>
						  
						 			 <label for="fname">FIRST NAME</label>
                                    <input type="text" class="fname" name="fname" placeholder="First name..">
                                    <label for="lname">LAST NAME</label>
                                    <input type="text" class="lname" name="lname" placeholder="Last name.."><br>
                                  
								  
								<input type="submit" class="view" value="update" name="submit" href="KTdisplay.php"><br>

								<button class="view"><a href="php/KTdisplay.php">View <a></button>
						</form></center>

			</div>
		</div>
	</body>
</html>