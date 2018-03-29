
<?php
session_start();
if(empty($_SESSION["uname"]) and empty($_SESSION["upass"]))
{
//header("location:index.php");
}
?>
<?php 

include_once 'header.php';
?>
<html>
<style>
.para{
	color : Black;
}

</style>
<body>
<div class="navbar navbar-default navbar-fixed-top move-me ">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>

                <a class="navbar-brand" href="#">
                    <p><strong><font color="white">Vehicle Services</font></strong></p>

                </a>
            </div>
            <div class="navbar-collapse collapse move-me">
               <?php include 'menu.php'; ?>
            </div>

        </div>
    </div>
    <!--./ NAV BAR END -->
    <div id="home" >
        <div class="overlay">
            <div class="container">
                <div class="row "><br><br>
    <div class="well"> 
    <div id="pre-div">
        <div id="loader">
        </div>
    </div>
    <?php

$servername = "localhost";
$dbusername = "root";
$dbpassword = "";
$dbname = "vehicle_management";
echo" </html>";

// Create connection
$conn =  mysqli_connect($servername, $dbusername, $dbpassword, $dbname);
echo"<table class='table'>";
	echo"<thead>";

   echo" <tr>";
      echo"<th>Id</th>";
      echo"<th>Payment</th>";
      echo"<th>DateOfSale</th>";
      echo"<th>CustomerId</th>";
	  echo"<th>VehicleId</th>";
	  echo"<th>ItemsPurchased</th>";
	  echo "</tr>";
	  echo"</thead>";
if(isset($_POST['submit']))
{
	$date = $_POST['date'];
	$query = mysqli_query($conn, "Select * from billing where DateOfSale='".$date."'");
	while($row = mysqli_fetch_row($query)){
	
	
	  
    
      echo"	<thead>";
     echo "<td>"; echo $row[0]; echo"</td>";
     echo"<td> $row[1]</td>";
     echo"<td> $row[2]</td>";
     echo"<td> $row[3]</td>";
     echo"<td>$row[4]</td>";
	 echo"<td>$row[5]</td>";

	 
	 
	
	}
	
	
}
?>
</div>
</div></div></div></div></div>
</body>
 <script src="assets/js/jquery-1.10.2.js"></script>
    <!--  Core Bootstrap Script -->
    <script src="assets/js/bootstrap.js"></script>
     <!--  WOW Script -->
    <script src="assets/js/wow.min.js"></script>
    <!--  Scrolling Script -->
    <script src="assets/js/jquery.easing.min.js"></script>
    <!--  PrettyPhoto Script -->
    <script src="assets/js/jquery.prettyPhoto.js"></script>
    <!--  Custom Scripts -->
    <script src="assets/js/custom.js"></script>
   
</html>

