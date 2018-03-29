<?php
$con=mysqli_connect("localhost", "root","","vehicle_management")
    or die("Failed to connect mysql server" .mysqli_connect_error());
$customerid = mysqli_real_escape_string($con,$_POST['customerid']);
$firstname = mysqli_real_escape_string($con,$_POST['firstname']);
$lastname = mysqli_real_escape_string($con,$_POST['lastname']);
$email = mysqli_real_escape_string($con,$_POST['email']);
$address = mysqli_real_escape_string($con,$_POST['address']);
$phone = mysqli_real_escape_string($con,$_POST['phone']);
$reason = mysqli_real_escape_string($con,$_POST['reason']);
$query =mysqli_query($con,"INSERT INTO customer(customerid,firstname,lastname,address,phonenum, email, reasonforvisit)
VALUES('$customerid', '$firstname','$lastname','$address','$phone','$email','$reason')");
?>

<h2> Customer Added!</h2>

                   
                        <a href="home.php">HOME 

                        </a>

          