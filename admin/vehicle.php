<!DOCTYPE html>
<html>
 <title>
            WELCOME TO A/S AUTO SALES
        </title>
    <head>
	<h1 style="text-align:center">ADMIN PAGE</h1>
       
    </head>
    <body>
	<a href="homepage.php">HOME</a>
        <form action="act-vehicle.php" method="post" name="form1" >
            <table>
                <tr>
                    <td>Model</td>
                    <td><input type="text" name="model" class="textinput"></td>
                </tr>
                <tr>
                    <td>Make</td>
                    <td><input type="text" name="make" class="textinput"></td>
                </tr>
				<tr>
                    <td>Color</td>
                    <td><input type="text" name="color" class="textinput"></td>
                </tr>
				<tr>
                    <td>Year</td>
                    <td><input type="text" name="year" class="textinput"></td>
                </tr>
                <tr>
                    <td>Price</td>
                    <td><input type="text" name="price" class="textinput"required></td>
                </tr>
                <tr>
                    <td>VIN</td>
                    <td><input type="text" name="vin" class="textinput"></td>
                </tr>
				<?php
				if (empty($_POST["vin"])) {
    $vinErr = "Email is required";
  } else {
    $vin = test_input($_POST["vin"]);
  }
  ?>
				<tr>
				<td><input type="submit" id="btn" value="Save"></td>
				</tr>
				</table>
				
				<?php
				if(isset($_GET['msg']))
				{
					$message=$_GET['msg'];
					if($message==1)
						echo"<span style='color:green'>vehicle entry success</span>";
					
				}
				?>
    </body>
</html>