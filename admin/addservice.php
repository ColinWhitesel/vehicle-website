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
<form class="form-horizontal" enctype="multipart/form-data" action="addserviceDB.php" method="post">
<fieldset>

<!-- Form Name -->
<legend>Add service</legend>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="name">Service Id</label>  
  <div class="col-md-4">
  <input id="serviceid" name="serviceid" placeholder="ServiceId" class="form-control input-md" required="" type="text">
    
  </div>
</div>
<div class="form-group">
  <label class="col-md-4 control-label" for="name">Customer Id</label>  
  <div class="col-md-4">
  <input id="customerid" name="customerid" placeholder="Customer Id" class="form-control input-md" required="" type="text">
    
  </div>
</div>
<div class="form-group">
  <label class="col-md-4 control-label" for="name">Vehicle Id</label>  
  <div class="col-md-4">
  <input id="vehicleid" name="vehicleid" placeholder="Vehicle Id" class="form-control input-md" required="" type="text">
    
  </div>
</div>
<div class="form-group">
  <label class="col-md-4 control-label" for="name">Mileage Before</label>  
  <div class="col-md-4">
  <input id="mbefore" name="mbefore" placeholder="Mileage Before" class="form-control input-md" required="" type="text">
    
  </div>
</div>
<div class="form-group">
  <label class="col-md-4 control-label" for="name">Mileage After</label>  
  <div class="col-md-4">
  <input id="mafter" name="mafter" placeholder="Mileage After" class="form-control input-md" required="" type="text">
    
  </div>
</div>
<div class="form-group">
  <label class="col-md-4 control-label" for="name">Billing Id</label>  
  <div class="col-md-4">
  <input id="billingid" name="billingid" placeholder="Billing Id" class="form-control input-md" required="" type="text">
    
  </div>
</div>
<div class="form-group">
  <label class="col-md-4 control-label" for="name">Date Of Intake</label>  
  <div class="col-md-4">
 
    
  </div>
</div>
<div class="form-group">
  <label class="col-md-4 control-label" for="name">Date Of Departure</label>  
  <div class="col-md-4">
  <input id="dateofdep" name="dateofdep" placeholder="Date Of Departure" class="form-control input-md" required="" type="date">
    
  </div>
</div>
<div class="form-group">
  <label class="col-md-4 control-label" for="name">Estimated Completion Date</label>  
  <div class="col-md-4">
  <input id="estimatedcompdate" name="estimatedcompdate" placeholder="Estimated Completion Date" class="form-control input-md" required="" type="date">
    
  </div>
</div>
<div class="form-group">
  <label class="col-md-4 control-label" for="name">Date of Customer Pick Up</label>  
  <div class="col-md-4">
  <input id="dateofcustpickup" name="dateofcustpickup" placeholder="Date of Customer Pick Up" class="form-control input-md" required="" type="date">
    
  </div>
</div>


<div class="form-group">
  <div class="col-md-4">
    <button id="singlebutton" name="submit" class="btn btn-primary">Add Service</button>
  </div>
  </div>

</fieldset>
</form>
</div></div></fieldset></form></div>
</div></div>
</div></div>
 <?php
    include 'footer.php'; ?>
	
