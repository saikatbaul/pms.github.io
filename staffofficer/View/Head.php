<html>
<head>
	<link rel="stylesheet" href="../Css/style.css">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
<?php
session_start();

	if (isset($_SESSION['uname']))
	{
		require 'Head_1.php';
	}
	else 
	{
		require 'Head_2.php';
	}

?>


</body>
</html>