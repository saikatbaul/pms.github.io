<!DOCTYPE HTML>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="../CSS/deliveryman.css">
</head>
<body>
	<div class="header">
		<?php include 'Head.php';?>
	</div>

	<form>
		<div class="row">
			<div class="col-3 menu">
				<?php include 'Account.php';?>
			</div>

			<div class="col-2 menu">
				<ul>
					<li><a href="DisplayPick.php">Pending Orders</a></li>
					<li><a href="Delivered.php">Delivery Details</a></li>
					
				</ul>
			</div>
		</div>
	</form>
	<div class="footer">
		<?php include 'Foot.php';?>
	</div>
</body>
</html> 