<?php
$con=mysqli_connect("localhost", "root", "","vehicle_management")
    or die("Failed to connect mysql server" .mysqli_connect_error());
	if(isset($_POST['submit'])){
		$id=$_POST['del'];
		$query=mysqli_query($con,"delete from vehicle where VehicleId = '".$id."'");
		header('Location:inventory.php');
	}
	?>