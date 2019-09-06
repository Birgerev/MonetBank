<!DOCTYPE html>
<html>
	<head>
		<title>Redirecting</title>
		<link rel="stylesheet" type="text/css" href="style.css" />
		<meta name="description" content="description">
	</head>
	
	<?php
		include 'functions.php';

		$name = $_GET['name'];
		$pass = $_GET['pass'];
		$id = random_number(4);

		createAccount($id, $pass, $name);
		
		header('Location: /?pass='.$pass);
	?>

</html>