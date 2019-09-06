<!DOCTYPE html>
<html>
	<head>
		<title>MonetBank</title>
		<link rel="stylesheet" type="text/css" href="style.css" />
		<meta name="description" content="description">
	</head>

	<body>
		<div id="container">
			<div id="header">
				<h1>MonetBank</h1>
				<h5>Monetize your monets!</h5>
			</div>
			<div id="content">
				<div id="page">
					<H2>Login</H2>
					<form action="/login.php">
					  <h4>Nickname:</h4>
					  <input type="text" name="name" value="">
					  <br>
					  <h4>Password:</h4>
					  <input type="text" name="pass" value="">
					  <input type="submit" value="Login">
					  <br>

					  </form>
					  <br>
						<H2>Register</H2>
						<form action="/register.php">
						  <h4>Nickname:</h4>
					  <input type="text" name="name" value="">
					  <br>
					  <h4>Password:</h4>
					  <input type="text" name="pass" value="">
						  <input type="submit" value="Register">
					</form> 
				</div>
			</div>
			
			<div id="footer">
				<h5>Mord Och Utpressning AB&copy; 2019</h5>
			</div>
			
		</div>
	</body>

</html>