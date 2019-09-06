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

		$id = getIdByPass($pass);
		if($id == ""){
			die($id . $name . $pass);	
		}else{
			header('Location: /?pass='.$pass);		
		}
	?>

</html>