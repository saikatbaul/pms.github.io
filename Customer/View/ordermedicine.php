<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="../Css/style.css">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>

<?php  
require_once '../Controller/medicineInfo.php';
$medicines = fetchAllMedicine();
?>
	<?php include 'Head.php';?>
<fieldset><br>
	
	<legend>Order Medicine</legend>
	<table border="1" cellpadding="5" cellspacing="3">
		<thead>
			<tr>
				<th>Medicine Name</th>
				<th>Price Per Piece</th>
				<th>Quantity</th>
				<th>Action</th>
			</tr>
		</thead>
		<tbody>
			<?php foreach ($medicines as $i => $medicines): ?>
				<tr>
					<td><?php echo $medicines['medicineName'] ?></td>
					<td><?php echo $medicines['pricePerPiece'] ?></td>
					<td>
						<input type="text" name="Quantity">
					</td>
						<td>
						<a href="addMedicine.php?medicineId=<?php echo $medicines['medicineId'] ?>">Add</a></td>
					
				</tr>
			<?php endforeach; ?>
		</tbody>
	</table><br>
	
	<a href="confirmMedicine.php">confirm Medicine</a>
</fieldset>
</body>
</html>