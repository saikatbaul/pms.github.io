<?php 
require_once ('../Model/modelProceedOrders.php');
require_once ('../Model/modelStaffOfficer.php');
$orders = showAllOrder();
$name = showStaff($_SESSION['name']);

if (isset($_POST['submit'])) 
{
	foreach ($orders as $i => $orders) 
	{
		$data['orderId'] = $orders['orderId'];
		$data['staffName'] = $name['staffName'];
		$data['totalPrice'] = $orders['totalPrice'];
		$data['address'] = $orders['address'];
		$data['phoneNumber'] = $orders['phoneNumber'];
		$date['paymentDate']= $orders['paymentDate'];
	}
	addorder($data);
	deleteOrder($orders['orderId']);
} 
?>

<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="../Css/style.css">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>

<?php  
require_once ('../Model/modelProceedOrders.php');
//require_once ('../Controller/proceedorderinfo.php');

$orders = showAllOrder();
?>
	
	<form method="post">
		<?php include 'Head.php';?>
	
<fieldset><br>
	
	<legend>Pending Order</legend>
	<table border="1" cellpadding="5" cellspacing="3">
		<thead>
			<tr>
				<th>Order Id</th>
				<th>Total Price</th>
				<th>Address</th>
				<th>Phone Number</th>
				<th>Payment Date</th>
			</tr>
		</thead>
		<tbody>
			<?php foreach ($orders as $i => $orders): ?>
				<tr>
					<td><?php echo $orders['orderId'] ?></td>
					<td><?php echo $orders['totalPrice'] ?></td>
					<td><?php echo $orders['address'] ?></td>
					<td><?php echo $orders['phoneNumber'] ?></td>
					<td><?php echo $orders['paymentDate'] ?></td>
					
				</tr>
			<?php endforeach; ?>
		</tbody>
	</table><br>
	<input type="submit" name="submit" value="confirm">
	
</fieldset>
	</form>
</body>
</html>