
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
    <h2>Daily Data</h2>
<div class="para">
 Please select the date for which you need the billing data </h3>
<form action="billresults.php" method="POST">

<input type="date" name="date" id="date">
<button type="submit" value="insert" name="submit">Submit</button>
</form>

</div>
</div></div></div></div></div>
</body>
</html>
<?php
include 'footer.php';
?>