
<?php
error_reporting(1);
include 'header.php';
$catid=$_GET['cat_id'];
$cat_nm=$_GET['cat_name'];
?>

    <div id="home" >
        <div class="overlay">
            <div class="container">
                <div class="row "><br><br>
    <div class="well"> 
    <div id="pre-div">
        <div id="loader">
        </div>
    </div>
    <!--/. PRELOADER END -->
    <div class="navbar navbar-default navbar-fixed-top move-me ">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>

                <a class="navbar-brand" href="#">
                    <img src="assets/img/logo1.png" class="navbar-brand-logo " alt="" />

                </a>
            </div>
            <div class="navbar-collapse collapse move-me">
                
            </div>

        </div>
    </div>
    <!--./ NAV BAR END -->
    </div>
    <!--./ HOME SECTION END -->
   <div class="container">
        <div class="row centered-form">
        <div class="col-xs-12 col-sm-8 col-md-8">
            <div class="panel panel-default">
                <div class="panel-heading">
                        <h3 class="panel-title"><font color="black"> Please sign in </font></h3>                        </div>
                        <div class="panel-body">
                        <form role="form" action="" method="post">
                            <div class="row">
                            <div class="col-xs-6 col-sm-6 col-md-6">

                            <div class="form-group">
                                <input type="email" name="u" id="email" class="form-control input-sm" placeholder="Email Address">
                            </div></div>
 <div class="col-xs-6 col-sm-6 col-md-6">
                                
                                    <div class="form-group">
                                        <input type="password" name="p" id="password" class="form-control " placeholder="Password">
                                    </div></div>
                             
                              
                            </div>
							 <div class="col-xs-6 col-sm-6 col-md-6">
                                
                                    <div class="form-group">
                                        <input type="text" name="r" id="r" class="form-control " placeholder="Job Role">
                                    </div></div>			
                            <input type="submit" value="Login" name="login" class="btn btn-info btn-block">
                            <a href="register.php"><font color="black">Register Here</font></a>
                        
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--./ CONTACT SECTION END -->
  <?php include 'footer.php'; ?>
 <?php
session_start();
if(isset($_POST["login"]))
{
include 'config.php';
$_SESSION["uname"]=$_POST["u"];
$_SESSION["upass"]=$_POST["p"];
$_SESSION["role"]=$_POST["r"];
$q=mysqli_query($conn,"select * from login where username='$_POST[u]' and password='$_POST[p]' and job='$_POST[r]'");

$c=mysqli_num_rows($q);
if(($c!=0) && ($_POST[r]=='Admin' ))
{
    ?>
<script>
    window.location = 'http://localhost/admin/home.php';
</script>
<?php
}
else if(($c!=0) && ($_POST[r]=='Customer' ))
{
    ?>
<script>
    window.location = 'http://localhost/admin/CustomerHome.php';
</script>
<?php
}
else if(($c!=0) && ($_POST[r]=='Mechanic' ))
{
    ?>
<script>
    window.location = 'http://localhost/admin/MechanicHome.php';
</script>
<?php
}
else if(($c!=0) && ($_POST[r]=='Salesperson' ))
{
    ?>
<script>
    window.location = 'http://localhost/admin/SalesPersonHome.php';
</script>
<?php
}
else if(($c!=0) && ($_POST[r]=='Billing Personnel' ))
{
    ?>
<script>
    window.location = 'http://localhost/admin/BillingHome.php';
</script>
<?php
}
else
{
echo 'Your login details were incorrect. Please try again';
}
}
?>