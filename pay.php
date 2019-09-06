<!DOCTYPE html>
<html>
	<head>
		<title>Redirecting</title>
		<link rel="stylesheet" type="text/css" href="style.css" />
		<meta name="description" content="description">
	</head>
	
	<?php
		include 'functions.php';

		$recieverid = $_GET['recieverid'];
		$amount = $_GET['amount'];
		$sender_pass = $_GET['senderpass'];

		if(pay($recieverid, $sender_pass, $amount))
			header('Location: /?pass='.$sender_pass);
		else{
			die("insufficient funds!");	
		}

	?>

</html>