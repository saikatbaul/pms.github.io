<!DOCTYPE HTML>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../CSS/storeOfficerLogin.css">
    <link rel="stylesheet" href="../CSS/storeOfficer.css">
</head>
<body>
	<div class="header">
		<?php 
		include 'Head.php';
		require '../Controller/LoginValidation.php';
		?>
	</div>
	<form method="post">
		<h1>Please login</h1>
		<div class="inset menu">
			<ul>
				<li><a href="Login.php">Store Officer Login</a></li>
				<li><a href="../staffofficer/View/Login.php">Staff Login</a></li>
				<li><a href="../Customer/View/Login.php">Customer Login</a></li>
				<li><a href="../Deliveryman/View/Login.php">Delivery Man Login</a></li>
			</ul>
		</div>
	</form>

	<div class="footer">
		<?php include 'Foot.php';?><br>
	</div>
</body>
</html>