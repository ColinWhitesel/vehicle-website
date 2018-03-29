<?php
$con=mysqli_connect("localhost", "root", "","vehicle_management")
    or die("Failed to connect mysql server" .mysqli_connect_error());
	$firstname = $_POST['firstname'];
	$lastname = $_POST['lastname'];
	$email = $_POST['email'];
	$address = $_POST['address'];
	$phone = $_POST['phone'];
	$uname = $_POST['uname'];
	$password = $_POST['password'];

$query = mysqli_query($con,"insert into customer(CustomerId, firstname, lastname, address, phonenum, email) values ('12345','$firstname','$lastname','$address','$phone','$email',NULL)");
$query = mysqli_query($con,"insert into login(Username,Password,Job) values ('$uname','$password',NULL)");
?>

<h2> Customer Added!</h2>

                   
                        <a href="home.php">HOME 

                        </a>