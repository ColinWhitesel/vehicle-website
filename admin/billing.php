
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
              <?php include 'BillingMenu.php'; ?>
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
<form class="form-horizontal" enctype="multipart/form-data" action="" method="post">
<fieldset>

<!-- Form Name -->
<legend>Billing Data</legend>

<!-- Text input-->


<!-- Text input-->

<div class="form-group">
  <label class="col-md-4 control-label" for="product_name">Billing Id</label>  
  <div class="col-md-4">
  <input id="billingid" name="billingid" placeholder="Billing ID" class="form-control input-md" required="" type="text">
    
  </div>
</div>
<div class="form-group">
  <label class="col-md-4 control-label" for="product_name">Payment Method</label>  
  <div class="col-md-4">
  <input id="payment" name="payment" placeholder="Payment Method" class="form-control input-md" required="" type="text">
    
  </div>
</div>

<div class="form-group">
  <label class="col-md-4 control-label" for="product_name">Date Of Sale</label>  
  <div class="col-md-4">
   <input id="dateofsale" name="dateofsale" placeholder="MM/DD/YYYY" class="form-control input-md" required="" type="date">
    
  </div>
</div>



<div class="form-group">
  <label class="col-md-4 control-label" for="product_name">Customer Id</label>  
  <div class="col-md-4">
  <input id="customerid" name="customerid" placeholder="Customer ID" class="form-control input-md" required="" type="text">
    
  </div>
</div>
<div class="form-group">
  <label class="col-md-4 control-label" for="product_name">Vehicle Id</label>  
  <div class="col-md-4">
  <input id="vehicleid" name="vehicleid" placeholder="Vehicle Id" class="form-control input-md" required="" type="text">
    
  </div>
</div>
<div class="form-group">
  <label class="col-md-4 control-label" for="product_name">Items Purchased</label>  
  <div class="col-md-4">
  <input id="items" name="items" placeholder="Items Purchased" class="form-control input-md" required="" type="text">
    
  </div>
</div>


<!-- Button -->
<div class="form-group">
  
  <div class="col-md-4">
    <button id="singlebutton" name="submit" class="btn btn-primary">Add Bill</button>
  </div>
  </div>

</fieldset>
</form>
</div></div></fieldset></form></div>
</div></div>
</div></div>
<?php
    include 'footer.php'; ?>

<?php
$con=mysqli_connect("localhost", "root","","vehicle_management")
    or die("Failed to connect mysql server" .mysqli_connect_error());
$billingid = mysqli_real_escape_string($con,$_POST['billingid']);
$payment = mysqli_real_escape_string($con,$_POST['payment']);
$dateofsale = mysqli_real_escape_string($con,$_POST['dateofsale']);
$customerid = mysqli_real_escape_string($con,$_POST['customerid']);
$vehicleid = mysqli_real_escape_string($con,$_POST['vehicleid']);
$items = mysqli_real_escape_string($con,$_POST['items']);
$query =mysqli_query($con,"insert into billing(Billing_Id,PaymentMethod,DateOfSale,CustomerId,VehicleId,ItemsPurchased)
            values('$billingid','$payment','$dateofsale','$customerid','$vehicleid','$items')");
			
			
if($query)
{
		 echo "<script>alert('Data Inserted');</script>";
}
else
{
	 echo "<script>alert('Data Not Inserted');</script>";
}
?>
						
						
