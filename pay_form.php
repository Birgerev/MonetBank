<!DOCTYPE html>
<html>
	<head>
		<link rel="stylesheet" type="text/css" href="/style.css">
		<title>MonetBank</title>
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
					<H2>Pay! Tiny Transaction Fees For You!</H2>
					<form action="/pay.php">
						  <h4>Recievers Account ID:</h4>
						  <input type="text" name="recieverid" value="">
						  <h4>Amount (In Monets):</h4>
						  <?php
								include 'functions.php';

								$pass = $_GET['pass'];

								$balance = getBalanceById(getIdByPass($pass));

								echo "<h6>($balance Monets)</h6>";
								echo '<input type="text" name="amount" value="">';
								echo '<input type="hidden" name="senderpass" value="'.$pass.'" />';
						  
						?>
						  <input type="submit" value="Pay!">
					</form>
				</div>
			</div>
			
			<div id="footer">
				<h5>Mord Och Utpressning AB&copy; 2019</h5>
			</div>
			
		</div>
	</body>

</html>