<!DOCTYPE html>
<html>
<head>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="../Css/style.css">

</head>
<body>

<fieldset><br>
	
	<legend>Searched Medicine</legend>
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
					<td><?php echo $medicines['medicineName'] ?></td>
					<td><?php echo $medicines['pricePerPiece'] ?></td>
					<td><?php echo $medicines['quantity'] ?></td>

				</tr>
			<?php endforeach; ?>
		</tbody>
	</table><br>
	
</fieldset>
</body>
</html>