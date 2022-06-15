<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="../Css/style.css">	
</head>
<body>

<?php include 'Head.php';?>
<fieldset>
	
	<legend>Search For Medicine</legend>
	<form method="post">
		<input type="text" name="medicineName">
		<input type="submit" name="submit" value="Search">
	</form>
</fieldset>

<?php require '../Controller/searchMedicineValidation.php'?>
</body>
</html>
