<?php
  session_start();
  if(!isset($_SESSION["user_name"]))
  {
    header("Location: ../index.html");
  }
?>

<!DOCTYPE html>
<html>
<head>
	<title>Price List</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<script src="../js/form_validation.js"></script>
	<link rel="stylesheet" type="text/css" href="../css/style.css">
	<style type="text/css">
		#h{
			font-size: 30px;
			font-style: bold;
			text-align: center;
			color: #e6efef;
		}
		table {
    width: 100%;
    border-collapse: collapse;
}

table, td, th {
    border: 1px solid black;
    padding: 5px;
    background-color: #e6efef;
}

th,td {text-align: center;}
	</style>

</head>
<body>	

	  <div class="header" id="home">
		<div class="container">
		<div class="header-top">
		<div class="top-menu">
		<span class="menu"><img src="images/nav.png" alt=""/> </span>
		<ul>
   	<li><a href="../index.html">home</a></li><label>/</label>
    <li><a href="../index.html	#About Us">About</a></li><label>/</label>
   	<li><a href="../index.html	#contact">Contact</a></li>
    <li style="padding-left: 600px;">Welcome <?php echo $_SESSION['user_name'];?> !!!
          <li style="padding-left: 40px;"><a href="../logout.php">Log Out!</a></li>
    </ul>
     <!-- script for menu -->
				
		 <script>
		 $("span.menu").click(function(){
		 $(".top-menu ul").slideToggle("slow" , function(){
		 });
		 });
		 </script>
	<!-- //script for menu -->


     </div>
	

		<div class="clearfix"></div>
	
	</div>

		<div class="container">
			<p id="h"  style="margin-top: 5%;">Price List</p>
            <?php
            $crop_name=$_POST["cname"];
            $crop_type=$_POST["types"];

            $con = mysqli_connect("localhost", "root", "","farming asistant");
            if (!$con) {
                die('Could not connect: ' . mysqli_error($con));
            }

            $sql = "SELECT * FROM CROP_ENTRY WHERE TYPE='".$crop_type."' and CROP_NAME='".$crop_name."'";

            $result = mysqli_query($con,$sql);



            echo "<table> <tr> <th>Crop Name</th> <th>Crop Type</th><th>Original Price</th><th>Our Price</th><th>Approval</th></tr>";

         
            while($row = mysqli_fetch_array($result)) {
                echo "<form action='datatobuyer.php' method='POST'>";
                echo "<tr>";
                echo "<td>" . $row['crop_name'] . "</td>";
                $_SESSION['crop_name'] = $row['crop_name'];
                echo "<td>" . $row['type'] . "</td>";
                $_SESSION['type'] = $row['type'];
                echo "<td>" . $row['original_price'] . "</td>";
                $_SESSION['original_price'] = $row['original_price'];
                echo "<td>" . (($row['original_price']) + (0.02*$row['original_price'])) . "</td>";
                echo "<td><input type='submit' name='agree' value='agree' class='btn btn-primary'></td>";
                echo "</tr>";
                echo("</form>");
            }
            echo "</table>";

            mysqli_close($con);
            ?>
     </div>
</body>
</html>