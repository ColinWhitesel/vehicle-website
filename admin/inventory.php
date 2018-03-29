

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
             <?php include 'CustomerMenu.php'; ?>
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

    <h2>INVENTORY</h2>

<table class="table">
  <thead>

    <tr>
      <th>Vehicle Id</th>
      <th>Make</th>
      <th>Model</th>
      <th>Year</th>
	  <th>Price</th>
    </tr>
  </thead>
      <?php
    include 'config.php';
    $data=mysqli_query($conn,"select * from vehicle");
   
    while($row=mysqli_fetch_array($data))
    {
     ?>
 
 <thead>
 
   <td><?php echo $row['VehicleId']?></td>
     <td><?php echo $row['Make']; ?></td>
   <td><?php echo $row['Model']; ?></td>
     <td><?php echo $row['Year']; ?></td>
	 <td><?php echo $row['Price']; ?></td>
 </thead>
 <?php } ?>
</table>
<form action="delete.php" method="POST">
<input id="del" name="del" class="form-control input-md" required="required" type="text">
<button type="submit" value="insert" name="submit">Buy</button>
</form>
</div></div></div></div></div>
<?php
include 'footer.php';
?>
