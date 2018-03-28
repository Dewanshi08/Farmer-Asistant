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
    $query = "INSERT INTO payment_pending(f_id, d_name, crop_name, type) VALUES ('$f_id','$f_name','$crop_name','$type')";
            $conn -> query($query);

            echo $f_id;
          $query = "DELETE FROM data_buyer where f_id='".$f_id."' and crop_name='".$crop_name."' and original_price='".$original_price."'";
          $conn -> query($query);
            header("Location: ../dealer/dealer_acknowledgment.html");
   }
?>