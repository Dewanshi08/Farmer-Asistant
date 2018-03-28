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
  <!--<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  meta http-equiv="Refresh" content="4;url=G:\gujHackathon\guj_hack_yo\index.html"
  <link rel="stylesheet" type="text/css" href="../css/reset.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

  <link rel="stylesheet" href="../css/font-awesome.min.css">
    <link rel="stylesheet" href="../css/owl.theme.css">
    <link rel="stylesheet" href="../css/owl.carousel.css">
    Main css
    <link rel="stylesheet" href="../css/style.css">
    <link href='https://fonts.googleapis.com/css?family=Poppins:400,500,600' rel='stylesheet' type='text/css'>-->

    <title>Student Registration From</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

    <link href='https://fonts.googleapis.com/css?family=Poppins:400,500,600' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="../css/font-awesome.min.css">

    <!-- Main css -->
    <link rel="stylesheet" href="../css/style.css">

    <style>
        .form-control{
            background-color: #d7d8cb; 
        }
    </style>
</head>

<body style="background: linear-gradient(#2e6060,#99bbcc,#2e6060);">
<!-- =========================
     NAVIGATION LINKS     
============================== -->
    <div class="header" id="home">
      <div class="container">
        <div class="header-top">
          <div class="top-menu">
            <span class="menu"><img src="images/nav.png" alt=""/> </span>
            <ul>
              <li><a href="farmer_entry_form">home</a></li><label>/</label>

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

    <div class="container" style="margin-top: 20%; width: 55%;">
      <div class="row" style="padding-bottom: 10%; height: 50%;background-color: #e6efef; padding-top: 10%;margin-bottom:18%;">
        <center style="color: #1c3c70;">
            <div id="pay_checkmail"><h4>Your request has been sent!</h4></div>
        </center>
    </div>
</div>

<!-- =========================
    FOOTER SECTION   
============================== -->



</body>
</html>