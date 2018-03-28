<?php
  session_start();
  if(!isset($_SESSION["user_name"]))
  {
    header("Location: ../index.html");
  }
   if(isset($_POST['agree']))
   {
   		$f_id = $_SESSION['user_id'];
   		$f_name = $_SESSION['user_name'];
   		$crop_name = $_SESSION['crop_name'];
   		$type = $_SESSION['type'];
   		$original_price = $_SESSION['original_price'];

   			$conn = mysqli_connect("localhost", "root", "","farming asistant");
	if($conn -> connect_error)
	{
		die("Connection failed: " . $conn -> connect_error);

	}
	$query = "INSERT INTO data_buyer(f_id, f_name, crop_name, type, original_price) VALUES ('$f_id','$f_name','$crop_name','$type','$original_price')";
		 	$conn -> query($query);
		 	header("Location: ../farmer/farmer-ack-about-request.php");
   }
?>
