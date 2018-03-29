<?php
$con=mysqli_connect("localhost", "root", "","vehicle_management")
    or die("Failed to connect mysql server" .mysqli_connect_error());

$serviceid = mysqli_real_escape_string($con,$_POST['serviceid']);
$customerid = mysqli_real_escape_string($con,$_POST['customerid']);
$vehicleid = mysqli_real_escape_string($con,$_POST['vehicleid']);
$mbefore = mysqli_real_escape_string($con,$_POST['mbefore']);
$mafter = mysqli_real_escape_string($con,$_POST['mafter']);
$billingid = mysqli_real_escape_string($con,$_POST['billingid']);
$dateofintake = mysqli_real_escape_string($con,$_POST['dateofintake']);
$dateofdep = mysqli_real_escape_string($con,$_POST['dateofdep']);
$estimatedcompdate = mysqli_real_escape_string($con,$_POST['estimatedcompdate']);
$dateofcustpickup = mysqli_real_escape_string($con,$_POST['dateofcustpickup']);

$query =mysqli_query($con,"INSERT INTO service(ServiceId,CustomerId,MileageBefore,MileageAfter,BilligId,DateOfIntake,DateOfDeparture,EstimatedCompletionDate,DateOfCustomerPickUp,Vehicle_Id)
VALUES('$serviceid','$customerid','$mbefore','$mafter','$billingid','$dateofintake','$dateofdep','$estimatedcompdate','$dateofcustpickup','$vehicleid')");
?>
<h2> Customer Added!</h2>

                   
                        <a href="home.php">HOME 

                        </a>


