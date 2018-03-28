<?php
	$f_id='1';
	$pname=$_POST["pname"];
	$image=$_POST["input-file-preview"];
	$types=$_POST["types"];
	$quantity=$_POST["quantity"];
	$price=$_POST["price"];
	$pnego=$_POST["pnego"];
	$fromdate=$_POST["fromdate"];
	$expiredate=$_POST["expiredate"];
	$description=$_POST["description"];

	$conn = mysqli_connect("localhost", "root", "","farming asistant");
	if($conn -> connect_error)
	{
		die("Connection failed: " . $conn -> connect_error);
	}
	
	$query = "INSERT INTO post_add(post_id, f_id, product_name, product_img, vegetables, fruits, cereals, quantity, price, from_date, to_date, negotiable, product_description) VALUES('0','$f_id', '$pname', '$image', '$types' , '$quantity', '$price', '$fromdate', '$expiredate', '$pnego', '$description')";
	$conn -> query($query);
	echo "Done!!!!";
?>