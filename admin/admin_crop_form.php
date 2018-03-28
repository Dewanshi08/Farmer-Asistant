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
   	<li><a href="admin_crop_form.html">home</a></li><label>/</label>
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
	<!--==========================
			REGISTRATION FORM
	============================-->
	
	<section style="padding-top: 3%;">
		<div class="container">
		<div class="row">
			<center><div id="h">Crop Entry Form</div></center>
			<div class="col-sm-8 col-sm-offset-2" style="background-color: #e6efef; padding-top: 2%;">
				
				<form action="../server-scripts/entry_submit.php" method="POST">
					<div class="form-group" style="padding-top:1%;">
						<fieldset>
			      			<legend>Crop Details:</legend>
			      			<div class="col-sm-12">
			      				<div class="row">
					      			<div class="col-sm-12">
							      		<div class="form-group">
							    			<label for="mobile">Crop Name<p id="s" style="display:inline">*</p></label>
							    			<div class="input-group">
							    				<span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
							      				<input type="text" class="form-control" id="cname" name="cname" placeholder="Enter crop name" required>
							      			</div>
							      		</div>
							      	</div>
							    </div>

					      		<div class="row">
					      			<div class="col-sm-6">
							      		<div class="form-group">
							    			<label for="cname">Crop Price<p id="s" style="display:inline">*</p></label>
							    			<div class="input-group">
							    				<span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
							      				<input type="text" class="form-control" id="price" name="price" placeholder="Enter Crop price" required>
							      			</div>
							      		</div>
							      	</div>

							      	<div class="col-sm-6">
							      		<div class="form-group">
							    			<label for="lname">Crop Type<p id="s" style="display:inline">*</p></label>
							    			<div class="input-group">
							    				<select class="btn btn-secondary" style="color: white;background-color: grey;" name="types">
							    					<option value="Veg" class="btn btn-secondary">Vegetable</option>
							    					<option value="Fruit" class="btn btn-secondary">Fruit</option>
							    					<option value="Cereal" class="btn btn-secondary">Cereal</option>
							    				</select>
							      			</div>
							      		</div>
							      	</div>
							    </div>

							 
				    			
			      		</fieldset>
			      	</div>

			    
			      		<fieldset>
			      		<legend></legend>
			      		<div class="col-xs-offset-2 col-xs-4">
							<div class="form group">
								<input type="reset" class="btn btn-reset" value="Reset" id="reset" style="width: 90%; background-color: #8bb6ba; color: black;">  
		                    </div>
		                </div>
		                <div class="col-xs-4">
							<div class="form group">
		                        <input type="submit" class="btn btn-submit" value="Submit" id="submit" style="width: 90%; background-color: #88b73c; color: white;">
		                    </div>
		                </div>
		                </fieldset>
		                <hr>
			      	</div>
		      	</form>
			</div>
			</fieldset>
		</div>
	</div>
	</section>

	<!--==========================
				FOOTER
	============================-->


</body>
</html>