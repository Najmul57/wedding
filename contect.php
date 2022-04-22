<?php
	$name = $_POST['name'];
	$phone = $_POST['phone'];
	$email = $_POST['email'];
	$bname = $_POST['bname'];
	$gname = $_POST['gname'];
	$decoration = $_POST['decoration'];
	$culture = $_POST['culture'];
	$event = $_POST['event'];
	$accommodation = $_POST['accommodation'];
	$dinning = $_POST['dinning'];
	$budget = $_POST['budget'];
	$additionDecoration = $_POST['additionDecoration'];

	// Database connection
	$conn = new mysqli('localhost','root','','login_register_pure_coding');
	if($conn->connect_error){
		echo "$conn->connect_error";
		die("Connection Failed : ". $conn->connect_error);
	} else {
		$stmt = $conn->prepare("insert into contect(name, phone, email, bname, gname, decoration,culture,event,accommodation,dinning,budget,additionDecoration) values(?,?,?,?,?,?,?,?,?,?,?,?)");
		$stmt->bind_param("sissssssssis", $name, $phone, $email, $bname, $gname,$decoration,$culture,$event,$accommodation,$dinning,$budget,$additionDecoration);
		$execval = $stmt->execute();
		echo $execval;
		// echo "Registration successfully...";
        header('location:index.php');
		$stmt->close();
		$conn->close();
	}
?>