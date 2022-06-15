<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="../Css/style.css">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

</head>
<body>


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
