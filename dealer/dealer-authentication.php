<?php
    $username = $_POST["u_id"];
    $password = $_POST["pass"];

    $conn = mysqli_connect("localhost", "root", "","farming asistant");
    if($conn -> connect_error)
    {
        die("Connection failed: " . $conn -> connect_error);
    }
    echo($username);
    echo($password);
    $query = "SELECT * FROM dealer_reg WHERE email='".$username."'and password='".$password."'";

    $result = $conn -> query($query);

    $num_rows = $result->num_rows;
    echo $num_rows;

    if($num_rows==1){
        $row = $result->fetch_assoc();
        session_start();
        $_SESSION["user_name"]=$row['first_name'];
        $_SESSION["user_id"]=$row['d_id'];
        header("Location: getdata.php");
    }
    else{
        echo("chkshkhkchwkenh");
        //header("Location: farMer_not_found.html");
    }
?>