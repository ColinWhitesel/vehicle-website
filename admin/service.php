
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
             <?php include 'MechanicMenu.php'; ?>
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

    <h2>Service Request</h2>

<table class="table">
  <thead>

    <tr>
      <th>Service Id</th>
      <th>Customer Id</th>
	  <th>Vehicle Id</th>
      <th>Mileage Before</th>
      <th>Mileage After</th>
      <th>Billing Id</th>
	  <th>Date Of Intake</th>
	  <th>Date Of Departure</th>
	  <th>Estimated Completion Date</th>
	  <th>Date Of Customer Pick Up</th>
    </tr>
  </thead>
      <?php
    include 'config.php';
    $data=mysqli_query($conn,"select * from service");
   
    while($row=mysqli_fetch_array($data))
    {
     ?>
 
 <thead>
   <td><?php echo $row['ServiceId']; ?></td>
   <td><?php echo $row['CustomerId']; ?></td>
   <td><?php echo $row['Vehicle_Id']; ?></td>
   <td><?php echo $row['MileageBefore']; ?></td>
     <td><?php echo $row['MileageAfter']; ?></td>
   <td><?php echo $row['BillingId']; ?></td>
     <td><?php echo $row['DateOfIntake']; ?></td>
	 <td><?php echo $row['DateOfDeparture']; ?></td>
	 <td><?php echo $row['EstimatedCompletionDate']; ?></td>
	 <td><?php echo $row['DateOfCustomerPickUp']; ?></td>
 </thead>
 <?php } ?>
</table>
</div></div></div></div></div>
<?php
include 'footer.php';
?>