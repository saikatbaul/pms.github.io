<?php

$nameErr = $emailErr = $unameErr = $dobErr = $genderErr = $phoneNumberErr = $passwordErr = $cpasswordErr  = $postalCodeErr = $addressErr = $stateErr = $divisionErr = "";
$name = $email = $uname = $dob = $gender = $phoneNumber = $password = $pass = $cpassword = $postalCode = $address = $state = $division = $error = "";

if (isset($_POST['submit'])) 	
{
	if (empty($_POST["name"])) 
	{
		$nameErr = "Name is required";
	} 
	else 
	{
		$name = $_POST["name"];
		if (preg_match("/^[a-zA-Z -]*$/",$name)) 
		{
			if (str_word_count($name) >= 2) 
			{
			}
			else
			{
				$nameErr = "Atleast two word needed";
				$name = "";
			}
		}
		else
		{
			$nameErr = "Only A-Z, a-z, Dash(-) and Period( ) are allowed";
			$name = "";
		}
	}

	if (empty($_POST["email"])) 
	{
		$emailErr = "Email is required";
	} 
	else 
	{
		$email = $_POST["email"];
		if (!filter_var($email, FILTER_VALIDATE_EMAIL)) 
		{
			$emailErr = "Invalid email format";
			$email ="";
		}
		else
		{
			require_once '../Model/connectionDb.php';
			$conn = db_conn();
			$selectQuery = "SELECT * FROM customer WHERE email = :email";
			try
		    {
		        $stmt = $conn->prepare($selectQuery);
		        $stmt->execute([':email' => $email]);
		    }
		    catch(PDOException $e)
		    {
		        echo $e->getMessage();
		    }
		    $count = $stmt->rowCount();
		    if($count == 1)
			{
				$emailErr = "Email already exists";
				$email = "";
			}
		}
	}

	if (empty($_POST["uname"])) 
	{
		$unameErr = "Username is required";
	} 
	else 
	{
		$uname = $_POST["uname"];
		if (preg_match("/^[a-z-_0-9]*$/",$uname)) 
		{
			if(strlen($uname) >= 2)
			{
				require_once '../Model/connectionDb.php';
				$conn = db_conn();
				$selectQuery = "SELECT * FROM customer WHERE uname = :uname";
				try
			    {
			        $stmt = $conn->prepare($selectQuery);
			        $stmt->execute([':uname' => $uname]);
			    }
			    catch(PDOException $e)
			    {
			        echo $e->getMessage();
			    }
			    $count = $stmt->rowCount();
			    if($count == 1)
				{
					$unameErr = "Username already exists";
					$uname = "";
				}
			}
			else
			{
				$unameErr = "Username must contain atleast 2 charecters";
				$uname = "";
			}
		}
		else
		{
			$unameErr = "Only a-z, 0-9, Dash(-) and Underscore(_) are allowed";
			$uname = "";
		}
	}

	if (empty($_POST["password"])) 
	{
		$passwordErr = "Password is required";
	} 
	else 
	{
		$pass = $_POST["password"];
		if (strlen($pass) >= 8) 
		{
			$password = $_POST['password'];
		}
		else
		{
			$passwordErr = "Password  must contain atleast 8 charecters";
			$password = $pass = "";
		}
	}

	if (empty($_POST["cpassword"])) 
	{
		$cpasswordErr = "Confirm password is required";
	} 
	else 
	{
		$cpassword = $_POST["cpassword"];
		if ($cpassword == $pass) 
		{
		}
		else
		{
			$cpasswordErr = "Password and confirm passward did not match";
			$password = $pass = "";
			$cpassword = "";
		}
	}

	if (empty($_POST["gender"])) 
	{
		$genderErr = "Gender is required";
	} 
	else 
	{
		$gender = $_POST["gender"];
	}

	if (empty($_POST["phoneNumber"])) 
	{
		$phoneNumberErr = "Phone number is required";
	} 
	else 
	{
		$phoneNumber = $_POST["phoneNumber"];
		if (preg_match("/^[0-9]*$/",$phoneNumber)) 
		{
			if (strlen($phoneNumber) == 11) 
			{
			}
			else
			{
				$phoneNumberErr = "Phone number is exact 11 digit";
				$phoneNumber = "";
			}
		}
		else
		{
			$phoneNumberErr = "Only 0-9 is allowed";
			$phoneNumber = "";
		}
	}
	
	if (empty($_POST["dob"])) 
     {
          $dobErr = "Date of birth is required";
     } 
     else 
     {
          $dob = $_POST["dob"];
     }
	 
	if (empty($_POST["address"])) 
	{
		$addressErr = "Address is required";
	} 
	else 
	{
		$address = $_POST["address"];
	}

	if (empty($_POST["postalCode"])) 
	{
		$postalCodeErr = "Postal code is required";
	} 
	else 
	{
		$postalCode = $_POST["postalCode"];
		if (preg_match("/^[0-9]*$/",$postalCode)) 
		{
			if (strlen($postalCode) == 4) 
			{
			}
			else
			{
				$postalCodeErr = "Postal code is exact 4 digit";
				$postalCode = "";
			}
		}
		else
		{
			$postalCodeErr = "Only 0-9 is allowed";
			$postalCode = "";
		}
	}

	if (empty($_POST["division"])) 
     {
          $divisionErr = "division is required";
     } 
     else 
     {
          $division = $_POST["division"];
     }
	 
	if (empty($_POST["state"])) 
     {
          $stateErr = "state is required";
     } 
     else 
     {
          $state = $_POST["state"];
     }


	if(empty($name) || empty($email) || empty($uname) || empty($password) || empty($cpassword) || empty($gender) || empty($phoneNumber) || empty($dob) || empty($address) || empty($postalCode) || empty($division) || empty($state))
	{
		$error = "Input Error!!"; 
	}
    else  
	{  
		require_once '../Model/modelcustomer.php';

		$data['name'] = $name;
		$data['email'] = $email;
		$data['uname'] = $uname;
		$data['password'] = $password;
		$data['gender'] = $gender;
		$data['phoneNumber'] = $phoneNumber;
		$data['dob'] = $dob;
		$data['address'] = $address;
		$data['postalCode'] = $postalCode;
		$data['division'] = $division;
		$data['state'] = $state;


		if (addcustomer($data)) 
		{
			header('Location: ../View/Login.php');
		} 
	}
}
?>
