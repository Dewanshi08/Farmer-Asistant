<?php
        session_start();
        if(!isset($_SESSION["user_name"]))
        {
          header("Location: ../index.html");
        }
        $user_name = $_SESSION["user_name"];
        $user_id = $_SESSION["user_id"];
?>
<!DOCTYPE html>
<html>
<head>
  <title>Crop Entry Form</title>
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
    }


  </style>
</head>
<body>

  <!--==========================
        NAVBAR
  ============================-->

<div class="header" id="home">
    <div class="container">
    <div class="header-top">
    <div class="top-menu">
    <span class="menu"><img src="images/nav.png" alt=""/> </span>
    <ul>
    <li><a href="admin_crop_form.php">home</a></li><label>/</label>
    <li style="margin-right: 0px;padding-right: 0px;padding-left: 550px;">Welcome <?php echo $user_name; ?>!!!</li>
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
<body style="background: linear-gradient(#2e6060,#99bbcc,#2e6060);">
<!-- =========================
     NAVIGATION LINKS     
============================== -->

    <div class="container" style="margin-top: 20%; width: 55%;">
      <div class="row" style="padding-bottom: 10%; height: 50%;background-color: #e6efef; padding-top: 10%;margin-bottom:18%;">
        <center style="color: #1c3c70;">
            <div id="pay_checkmail"><h4>Data has successfully entered in database.</h4></div>
        </center>
    </div>
</div>

<!-- =========================
    FOOTER SECTION   
============================== -->



</body>
</html>