
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
                <ul class="nav navbar-nav navbar-right">

                    <li >
                        <a href="home.php">HOME 

                        </a>

                    </li>

                    <li >
                        <a href="logout.php">Logout
                        </a>

                    </li>
                </ul>
            </div>

        </div>
    </div>
  <div id="home" >
        <div class="overlay">
            <div class="container">
                <div class="row "><br><br>
    <div class="well"> 
    <div id="pre-div">
        <div id="loader">
        </div>
    </div>

    <h2>Sales Data</h2>

<table class="table">
  <thead>

    <tr>
      <th>Sales Id</th>
      <th>Vehicle Id</th>
      <th>DateSold</th>
      <th>Temporary Tag</th>
      <th>Customization Work</th>
	  <th>Customer Id</th>
	<th>Billing Id</th>
    </tr>
  </thead>
      <?php
    $con=mysqli_connect("localhost", "root", "","vehicle_management")
    or die("Failed to connect mysql server" .mysqli_connect_error());
	
    $data=mysqli_query($con,"select * from sales");
   
    while($row=mysqli_fetch_array($data))
    {
     ?>
 
 <thead>
   <td><?php echo $row['SalesId']; ?></td>
   <td><?php echo $row['VehicleIdNum']; ?></td>
     <td><?php echo $row['DateSold']; ?></td>
   <td><?php echo $row['TemporaryTag']; ?></td>
     <td><?php echo $row['CustomizationWork']; ?></td>
	 <td><?php echo $row['CustomerId']; ?></td>
	 <td><?php echo $row['BillingId']; ?></td>


 </thead>
 <?php } ?>
</table>
</div></div></div></div></div>
<?php
include 'footer.php';
?>