
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
                    <p><strong><font color="white">Vehicle Service</font></strong></p>

                </a>
            </div>
            <!--<div class="navbar-collapse collapse move-me">
              <?php //include 'menu.php'; ?>
            </div>

        </div>
    </div>  -->
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
<form class="form-horizontal" enctype="multipart/form-data" action="addcustomerDB.php" method="post">
<fieldset>

<!-- Form Name -->
<legend>Add Customer</legend>

<!-- Text input-->


<!-- Text input-->

<div class="form-group">
  <label class="col-md-4 control-label" for="product_name">Customer Id</label>  
  <div class="col-md-4">
  <input id="customerid" name="customerid" placeholder="Customer Id" class="form-control input-md" required="required" type="text">
    
  </div>
</div>




<div class="form-group">
  <label class="col-md-4 control-label" for="product_name">Customer FirstName</label>  
  <div class="col-md-4">
  <input id="firstname" name="firstname" placeholder="FirstName" class="form-control input-md" required="required" type="text">
    
  </div>
</div>

<div class="form-group">
  <label class="col-md-4 control-label" for="product_name">Customer LastName</label>  
  <div class="col-md-4">
  <input id="lastname" name="lastname" placeholder="LastName" class="form-control input-md" required="required" type="text">
    
  </div>
</div>

<div class="form-group">
  <label class="col-md-4 control-label" for="product_name">Customer Email</label>  
  <div class="col-md-4">
  <input id="email" name="email" placeholder="Email" class="form-control input-md" required="required" type="text">
    
  </div>
</div>
<div class="form-group">
  <label class="col-md-4 control-label" for="product_name">Address</label>  
  <div class="col-md-4">
  <input id="address" name="address" placeholder="Address" class="form-control input-md" required="required" type="text">
    
  </div>
</div>
<div class="form-group">
  <label class="col-md-4 control-label" for="product_name">Mobile</label>  
  <div class="col-md-4">
  <input id="phone" name="phone" placeholder="mobile" class="form-control input-md" required="required" type="text">
    
  </div>
 </div>
<div class="form-group">
  <label class="col-md-4 control-label" for="product_name">Reason For Visit</label>  
  <div class="col-md-4">
  <input id="reason" name="reason" placeholder="Reason For Visit" class="form-control input-md" required="required" type="text">
    
  </div>
  
</div>

<!-- Button --> 
<div class="form-group">
  <div class="col-md-4">
    <button id="singlebutton" name="submit" class="btn btn-primary">Add Customer</button>
  </div>
  </div>

</fieldset>
</form>
</div></div></fieldset></form></div>
</div></div>
</div></div>

 <?php
    include 'footer.php'; ?>
