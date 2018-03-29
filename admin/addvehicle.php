
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
<form class="form-horizontal" enctype="multipart/form-data" action="addvehicleDB.php" method="POST">
<fieldset>

<!-- Text input-->


<!-- Text input-->

<div class="form-group">
  <label class="col-md-4 control-label" for="product_name">Vehicle Id</label>  
  <div class="col-md-4">
  <input id="vehicleid" name="vehicleid" placeholder="Vehicle Id" class="form-control input-md" required="required" type="text">
    
  </div>
</div>
<div class="form-group">
  <label class="col-md-4 control-label" for="product_name">Owner Id</label>  
  <div class="col-md-4">
  <input id="ownerid" name="ownerid" placeholder="Owner Id" class="form-control input-md" required="required" type="text">
    
  </div>
</div>


<div class="form-group">
  <label class="col-md-4 control-label" for="product_name">Make</label>  
  <div class="col-md-4">
  <input id="make" name="make" placeholder="Make" class="form-control input-md" required="required" type="text">
    
  </div>
</div>

<!-- Select Basic -->
<div class="form-group">
  <label class="col-md-4 control-label" for="product_categorie">Model </label>
  <div class="col-md-4">
  <input id="model" name="model" placeholder="Enter Model No." class="form-control input-md" required="required" type="text">
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="available_quantity">Year</label>  
  <div class="col-md-4">
  <input id="year" name="year" placeholder="Enter year" class="form-control input-md" required="" type="text">
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="product_weight">Price</label>  
  <div class="col-md-4">
  <input id="price" name="price" placeholder="Price" class="form-control input-md" required="required" type="text">
    
  </div>
</div>

<div class="form-group">
  <label class="col-md-4 control-label" for="product_weight">Status</label>  
  <div class="col-md-4">
  <input id="status" name="status" placeholder="New Vehicle arrived or older one for service" class="form-control input-md" required="required" type="text">
    
  </div>
</div>

<!-- Button -->
<div class="form-group">
  <div class="col-md-4">
    <button id="submit" name="submit" value="insert" class="btn btn-primary">Add Vehicle</button>
  </div>
  </div>

</fieldset>
</form>
</div></div></fieldset></form></div>
</div></div>
</div></div>

 <?php
    include 'footer.php'; ?>

