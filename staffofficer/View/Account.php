<html>
<head>
	<link rel="stylesheet" href="../Css/style.css">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>

<form>


<?php require '../Controller/searchMedicineValidation.php'?>
<fieldset>
	
<h3>Account</h3>

<table>
	
	<tr>
		<td><a href="Dashboard.php">Dashboard</a></td>
	</tr>

	<tr>
		<td><a href="ViewProfile.php">View Profile</a></td>
	</tr>

	<tr>
		<td><a href="EditProfile.php">Edit Profile</a></td>
	</tr>

	<tr>
		<td><a href="ChangeProfilePicture.php">Change Profile Picture</a></td>
	</tr>

	<tr>
		<td><a href="ChangePassword.php">Change Password</a></td>
	</tr>
	<tr>
		<td><a href="searchMedicine.php">Search Medicine</a></td>
	</tr>
	<tr>
		<td><a href="displayMedicine.php">Show All Medicines</a></td>
	</tr>
	<tr>
		<td><a href="pendingorder.php">Pending Order</a></td>
	</tr>
	<tr>
		<td><a href="proceedorder.php">Proceed Order</a></td>
	</tr>
	<tr>
		<td><a href="../Controller/Logout.php">Logout</a></td>
	</tr>
</table>

</fieldset>

</form>
</body>
</html> 