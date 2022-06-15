
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	
	<link rel="stylesheet" href="../CSS/deliveryman.css">
</head>
<body>
	<div class="header">
		<?php include 'Head.php';?>
	</div>

	<?php  
	require_once ('../Model/modelTransaction.php');
	
	$dms = showAllPicks();
	?>
	
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


		<div class="col-6">
			<form method="post">
				<div class="inset">
					<h1>Pick Orders List</h1>
					<table border="1" cellpadding="5" cellspacing="3"  width="100%">
						<thead>
							<tr>
								<th>OrderId</th>
								<th>Staff Name</th>
								<th>Total Price</th>
								<th>Payment Date</th>
							</tr>
						</thead>
						<tbody>
							<?php foreach ($dms as $i => $dms): ?>
								<tr>
									<td align="middle"><?php echo $dms['orderId'] ?></td>
									<td align="middle"><?php echo $dms['staffName'] ?></td>
									<td align="middle"><?php echo $dms['totalPrice'] ?></td>
									<td align="middle"><?php echo $dms['paymentDate'] ?></td>	
								</tr>
							<?php endforeach; ?>
						</tbody>
					</table>
				</div>
			</form>
		</div>
	</div>
	<div class="footer">
		<?php include 'Foot.php';?>
	</div>
</body>
</html>