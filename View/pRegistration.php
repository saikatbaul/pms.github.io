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
		<h1>Please Register Here</h1>
		<div class="inset menu">
			<ul>
				<li><a href="Registration.php">Store Officer Registration</a></li>
				<li><a href="../staffofficer/View/Registration.php">Staff Registration</a></li>
				<li><a href="../Customer/View/Registration.php">Customer Registration</a></li>
				<li><a href="../Deliveryman/View/Registration.php">Delivery Man Registration</a></li>
			</ul>
		</div>
	</form>

	<div class="footer">
		<?php include 'Foot.php';?><br>
	</div>
</body>
</html>