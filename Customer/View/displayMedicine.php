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

<fieldset><br>
	<legend>Display Medicine</legend>
	<table border="1" cellpadding="5" cellspacing="3">
		<thead>
			<tr>
				<th>Medicine Name</th>
				<th>Price Per Piece</th>
				<th>Quantity</th>
				
			</tr>
		</thead>
		<tbody>
			<?php foreach ($medicines as $i => $medicines): ?>
				<tr>
					<td><a href="displaySingleMedicine.php?medicineId=<?php echo $medicines['medicineId'] ?>"><?php echo $medicines['medicineName'] ?></a></td>
					<td><?php echo $medicines['pricePerPiece'] ?></td>
					<td><?php echo $medicines['quantity'] ?></td>
					
				</tr>
			<?php endforeach; ?>
		</tbody>
	</table><br>
	
</fieldset>
</body>
</html>