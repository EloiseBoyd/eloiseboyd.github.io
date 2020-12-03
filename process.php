<?php ob_start();



	if(isset($_POST['submit'])) {
		
	$to = "eloiseboyd@yahoo.co.uk";
	$subject = $_POST['subject'];
	$email = $_POST['email'];
	$txt = $_POST['message'];
	$headers = "From: " .$email . "\r\n" .
	
	mail($to,$subject,$txt,$headers);
	
	header("Location: contact.html");
	

		
	
	}




?>