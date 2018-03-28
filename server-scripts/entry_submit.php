<?php
        session_start();
        if(!isset($_SESSION["user_name"]))
        {
        	header("Location: ../index.html");
        }
        $user_name = $_SESSION["user_name"];
        $user_id = $_SESSION["user_id"];
?>


<?php	

	$price=$_POST["price"];
	$cname=$_POST["cname"];
	$types=$_POST["types"];
	$conn = mysqli_connect("localhost", "root", "","farming asistant");
	if($conn -> connect_error)
	{
		die("Connection failed: " . $conn -> connect_error);
	}
	$query = "INSERT INTO crop_entry (crop_id,crop_name,type,original_price) VALUES('0','$cname','$types','$price')";
	$conn -> query($query);
	header("Location: ../admin/registration-farmer-ack.php");	
?>