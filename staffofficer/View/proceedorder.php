<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="../Css/style.css">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>

<?php  
require_once ('../Model/modelProceedOrders.php');

$orders = showAllOrders();
?>
	<?php include 'Head.php';?>
<fieldset><br>
	
	<legend>Proceed Order</legend>
	<table border="1" cellpadding="5" cellspacing="3">
		<thead>
			<tr>
				<th>Order Id</th>
				<th>Staff Name</th>
				<th>Total Price</th>
				<th>Address</th>
				<th>Phone Number</th>
				<th>Paymemnt Date</th>
			</tr>
		</thead>
		<tbody>
			<?php foreach ($orders as $i => $orders): ?>
				<tr>
					<td><?php echo $orders['orderId'] ?></td>
					<td><?php echo $orders['staffName'] ?></td>
					<td><?php echo $orders['totalPrice'] ?></td>
					<td><?php echo $orders['address'] ?></td>
					<td><?php echo $orders['phoneNumber'] ?></td>
					<td><?php echo $orders['paymentDate'] ?></td>
					
				</tr>
			<?php endforeach; ?>
		</tbody>
	</table><br>

	
</fieldset>
</body>
</html>