	<?php
$con=mysqli_connect("localhost", "root", "","vehicle_management")
    or die("Failed to connect mysql server" .mysqli_connect_error());
$vehicleid = mysqli_real_escape_string($con,$_POST['vehicleid']);
$ownerid = mysqli_real_escape_string($con,$_POST['ownerid']);
$make = mysqli_real_escape_string($con,$_POST['make']);
$model = mysqli_real_escape_string($con,$_POST['model']);
$year = mysqli_real_escape_string($con,$_POST['year']);
$price= mysqli_real_escape_string($con,$_POST['price']);
$status = mysqli_real_escape_string($con,$_POST['status']);

$query =mysqli_query($con,"INSERT INTO vehicle(VehicleId,OwnerId,Make,Model,Year,Price,Status) 
VALUES('$vehicleid','$ownerid','$make','$model','$year','$price','$status')");

echo"Vehicle added succesfully";

?>