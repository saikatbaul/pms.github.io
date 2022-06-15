<!DOCTYPE HTML>
<html>
<head>
	<link rel="stylesheet" href="../Css/style.css">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>

<?php 
require '../Controller/deleteMedicineValidation.php'; 
require_once '../Controller/medicineInfo.php';
$medicines = fetchMedicine($_GET['medicineId']);
?>

<form method="post">
<fieldset>
	<?php include 'Head.php';?>

	<legend>Delete Medicine</legend>

	<fieldset>
	    <legend>Medicine Name</legend>
		<?php echo $medicines['medicineName'];?>
	</fieldset><br>

	<fieldset>
    	<legend>Price Per Piece</legend>
		<?php echo $medicines['pricePerPiece']; ?>
	</fieldset><br>

	<fieldset>
	    <legend>Quantity</legend>
	    <?php echo $medicines['quantity']; ?>
	</fieldset><br>


	<input type="submit" name="submit" value="Delete">
</fieldset>
</form>
</body>
</html>