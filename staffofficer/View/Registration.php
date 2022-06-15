<!DOCTYPE HTML>
<html>
<head>
	<link rel="stylesheet" href="../Css/style.css">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
<?php 
include 'Head.php';
require '../Controller/RegistrationValidation.php';
?><br>	
<script type="text/javascript">
			function validateform(){  
			var name=document.myform.name.value;
			var email=document.myform.email.value;
			var uname=document.myform.uname.value;
			var password=document.myform.password.value;
			var cpassword=document.myform.cpassword.value;
			var phoneNumber=document.myform.phoneNumber.value;
			var dob=document.myform.dob.value;    
			  
			if (name==null || name==""){  
			  alert("Name can't be blank");  
			  return false;  
			}
			else if (email==null || email==""){  
			  alert("Email can't be blank");  
			  return false;   
			} 
			else if (uname==null || uname==""){  
			  alert("Uname can't be blank");  
			  return false;   
			}
			else if(password.length<6){  
			  alert("Password must be at least 6 characters long.");  
			  return false;  
			}  
			else if (cpassword==null || cpassword==""){  
			  alert("Confirm password can't be blank");  
			  return false;   
			}  
			else if (phoneNumber==null || phoneNumber==""){  
			  alert("Phone number can't be blank");  
			  return false;   
			} 
			else if (dob==null || dob==""){  
			  alert("DOB can't be blank");  
			  return false;   
			} 
			function checkEmpty() {
		  	if (document.myform.name.value = "") {
		  		alert("Name can't be blank");
		        return false;  
		  	}
		  	} 
			function checkName()
			{
			if (document.getElementById("name").value == "")
			{
			document.getElementById("nameErr").innerHTML = "Name can't be blank";
			document.getElementById("nameErr").style.color = "red";
			document.getElementById("name").style.borderColor = "red";
			}
			else
			{
			document.getElementById("nameErr").innerHTML = "";
			document.getElementById("name").style.borderColor = "black";
			}
			}

			 function checkEmail()
			{
			if (document.getElementById("email").value == "")
			{
			document.getElementById("emailErr").innerHTML = "Email can't be blank";
			document.getElementById("emailErr").style.color = "red";
			document.getElementById("email").style.borderColor = "red";
			}
			else
			{
			document.getElementById("emailErr").innerHTML = "";
			document.getElementById("email").style.borderColor = "black";
			}
			}

			 function checkUserName()
			{
			if (document.getElementById("uname").value == "")
			{
			document.getElementById("unameErr").innerHTML = "User name can't be blank";
			document.getElementById("unameErr").style.color = "red";
			document.getElementById("uname").style.borderColor = "red";
			}
			else
			{
			document.getElementById("unameErr").innerHTML = "";
			document.getElementById("uname").style.borderColor = "black";
			}
			}

			 function checkPassword()
			{
			if (document.getElementById("password").value == "")
			{
			document.getElementById("passwordErr").innerHTML = "Password can't be blank";
			document.getElementById("passwordErr").style.color = "red";
			document.getElementById("password").style.borderColor = "red";
			document.getElementById("cpassword").disabled = true;
			}
			else
			{
			document.getElementById("passwordErr").innerHTML = "";
			document.getElementById("password").style.borderColor = "black";
			document.getElementById("cpassword").disabled = false;
			}
			}

			 function checkConfirmPassword()
			{
			if (document.getElementById("cpassword").value == "")
			{
			document.getElementById("cpasswordErr").innerHTML = "Confirm assword can't be blank";
			document.getElementById("cpasswordErr").style.color = "red";
			document.getElementById("cpassword").style.borderColor = "red";
			}
			else
			{
			document.getElementById("cpasswordErr").innerHTML = "";
			document.getElementById("cpassword").style.borderColor = "black";
			}
			}

			 function checkPhoneNumber()
			{
			if (document.getElementById("phoneNumber").value == "")
			{
			document.getElementById("phoneNumberErr").innerHTML = "Phone number can't be blank";
			document.getElementById("phoneNumberErr").style.color = "red";
			document.getElementById("phoneNumber").style.borderColor = "red";
			}
			else
			{
			document.getElementById("phoneNumberErr").innerHTML = "";
			document.getElementById("phoneNumber").style.borderColor = "black";
			}
			}

			 function checkDateOfBirth()
			{
			if (document.getElementById("dob").value == "")
			{
			document.getElementById("dobErr").innerHTML = "Date of birth can't be blank";
			document.getElementById("dobErr").style.color = "red";
			document.getElementById("dob").style.borderColor = "red";
			}
			else
			{
			document.getElementById("dobErr").innerHTML = "";
			document.getElementById("dob").style.borderColor = "black";
			}
			}
</script>

</head>
<body>
<fieldset><br>


<form name="myform" action="" onsubmit="return validateForm()" method="post">
<fieldset>

	<legend>REGISTRATION</legend>

	<fieldset>
	    <legend>NAME</legend>
		<input type="text" name="name" id="name" onblur="checkName()">
		<span class="error">
			<?php 
				echo $nameErr;
			?>
				
		</span>
	</fieldset><br>

	<fieldset>
    	<legend>EMAIL</legend>
		<input type="text" name="email" id="email" value="<?php echo $email;?>">
		<span class="error">
			<?php 
				echo $emailErr;
			?>
				
		</span>
	</fieldset><br>

	<fieldset>
	    <legend>USER NAME</legend>
		<input type="text" name="uname" id="uname" value="<?php echo $uname;?>">
		<span class="error">
			<?php
				echo $unameErr;
			?>
				
		</span>
	</fieldset><br>

	<fieldset>
    	<legend>PASSWORD</legend>
		<input type="password" name="password" id="password" value="<?php echo $password;?>">
		<span class="error">
			<?php 
				echo $passwordErr;
			?>
				
		</span>
	</fieldset><br>

	<fieldset>
    	<legend>CONFIRM PASSWORD</legend>
		<input type="password" name="cpassword" id="cpassword" value="<?php echo $cpassword;?>">
		<span class="error">
			<?php 
				echo $cpasswordErr;
			?>
				
		</span>
	</fieldset><br>

	<fieldset>
    	<legend>GENDER</legend>
		<input type="radio" name="gender" id="gender" <?php if (isset($gender) && $gender=="female") echo "checked";?> value="Female">Female
		<input type="radio" name="gender" id="gender" <?php if (isset($gender) && $gender=="male") echo "checked";?> value="Male">Male
		<input type="radio" name="gender" id="gender" <?php if (isset($gender) && $gender=="other") echo "checked";?> value="Other">Other
		<span class="error">
			<?php 
				echo $genderErr;
			?>
				
		</span>
	</fieldset><br>

	<fieldset>
	    <legend>Phone Number</legend>
		<input type="text" name="phoneNumber" id="phoneNumber" value="<?php echo $phoneNumber;?>">
		<span class="error">
			<?php 
				echo $phoneNumberErr;
			?>
				
		</span>
	</fieldset><br>

	<fieldset>
    	<legend>DATE OF BIRTH</legend>
		<input type="date" name="dob" id="dob" value="<?php echo $dob;?>">
		<span class="error">
			<?php 
				echo $dobErr;
			?>
				
		</span>
	</fieldset><br>

	<span class="error">
		<?php 
			echo $error;
		?>
			
	</span><br>


	<input type="submit" name="submit" value="Submit" style="width: 10%;
	margin-left: 0px;
	background: #742e08;
	color: white;
	border: none;
	padding: 10px;
	border-radius: 25px;">
	<input type="reset" name="Reset" style="width: 10%;
	margin-left: 0px;
	background: #742e08;
	color: white;
	border: none;
	padding: 10px;
	border-radius: 25px;">

</fieldset><br>
</form>

<?php include 'Foot.php';?><br>
</fieldset>
</body>
</html>