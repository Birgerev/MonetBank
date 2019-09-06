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
				<div id="nav">
					<ul>
						<?php
							include 'functions.php';

							if(isset($_GET['pass'])){

								$pass = $_GET['pass'];
								$id = getIdByPass($pass);
								$name = getNameById($id);

								if($name == "")
								{
									endNoAccount();
								}else{
									endWithAccount($id, $pass);
								}
							}else 
								endNoAccount();

							function endNoAccount() {
								echo '<li>
								<a href="\login_form.php" class="link_button">Login</a>
								</li>
								';
							}
						
							function endWithAccount($id, $pass) {
								$balance = getBalanceById($id);
								$name = getNameById($id);

								echo "<li><h4>Welcome back $name!</h4>";
								echo "<li><h6>$balance Monets </h6> <h6>Account ID: $id</h6> </li>";
								echo '<li><a href="\pay_form.php\?pass=' . $pass . '" class="link_button">Pay</a></li>';
								echo '<li><form action="">
									<input type="submit" value="Loguot" class="link_button" />
									</form></li>';
							}

						?>
						<li></li>
					</ul>
				</div>

				<div id="page">
					<H2>The most stable currency in the world!</H2>
					<p>
					Since there only can be 3333 monets (500 SEK) in <br>
					fluxuation at any time the currency is unable to <br> 
					be printed as to cheat the market.
					</p>


					<H2>Happy Customers! Happy Faces!</H2>

					<p>Since no one uses this worthless currency,<br />
					it's practicly useless.<br />
					due to the low fluxuation rates the<br /> currency is very stable; stuck at 0%<br />
					Invest in monets today, tiny price for you!</p>

					<img src="emil.jpeg" alt="Italian Trulli" style="width:500px;height:350px;">
					<p>picture portraying a satisfied stock gambler</p>
				</div>
			</div>
			
			<div id="footer">
				<h5>Mord Och Utpressning AB&copy; 2019</h5>
			</div>
			
		</div>
	</body>

</html>