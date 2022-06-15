<!DOCTYPE HTML>
<html>
<head>
<link rel="stylesheet" href="../Css/style.css">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
<style>
	.error {color: red;}
</style>
</head>
<body>
<fieldset><br>
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
			
			
						 function checkaddress()
			{
			if (document.getElementById("address").value == "")
			{
			document.getElementById("addressErr").innerHTML = "address";
			document.getElementById("addressErr").style.color = "red";
			document.getElementById("address").style.borderColor = "red";
			}
			else
			{
			document.getElementById("addressErr").innerHTML = "";
			document.getElementById("address").style.borderColor = "black";
			}
			}
			
			
						 function checkpostalCode()
			{
			if (document.getElementById("postalCode").value == "")
			{
			document.getElementById("postalCodeErr").innerHTML = "postalCode";
			document.getElementById("postalCodeErr").style.color = "red";
			document.getElementById("postalCode").style.borderColor = "red";
			}
			else
			{
			document.getElementById("postalCodeErr").innerHTML = "";
			document.getElementById("postalCode").style.borderColor = "black";
			}
			}
			
						 function checkdivision()
			{
			if (document.getElementById("division").value == "")
			{
			document.getElementById("divisionErr").innerHTML = "division";
			document.getElementById("divisionErr").style.color = "red";
			document.getElementById("division").style.borderColor = "red";
			}
			else
			{
			document.getElementById("divisionErr").innerHTML = "";
			document.getElementById("division").style.borderColor = "black";
			}
			}
			
						 function checkstate()
			{
			if (document.getElementById("state").value == "")
			{
			document.getElementById("stateErr").innerHTML = "state";
			document.getElementById("stateErr").style.color = "red";
			document.getElementById("state").style.borderColor = "red";
			}
			else
			{
			document.getElementById("stateErr").innerHTML = "";
			document.getElementById("state").style.borderColor = "black";
			}
			}	
</script>

<form method="post">
<fieldset>

	<legend>REGISTRATION</legend>

	<fieldset>
	    <legend>NAME</legend>
		<input type="text" name="name" value="<?php echo $name;?>">
		<span class="error"><?php echo $nameErr; ?></span>
	</fieldset><br>

	<fieldset>
    	<legend>EMAIL</legend>
		<input type="text" name="email" value="<?php echo $email;?>">
		<span class="error"><?php echo $emailErr; ?></span>
	</fieldset><br>

	<fieldset>
	    <legend>USER NAME</legend>
		<input type="text" name="uname" value="<?php echo $uname;?>">
		<span class="error"><?phpecho $unameErr; ?></span>
	</fieldset><br>

	<fieldset>
    	<legend>PASSWORD</legend>
		<input type="password" name="password" value="<?php echo $password;?>">
		<span class="error"><?php echo $passwordErr; ?></span>
	</fieldset><br>

	<fieldset>
    	<legend>CONFIRM PASSWORD</legend>
		<input type="password" name="cpassword" value="<?php echo $cpassword;?>">
		<span class="error"><?php echo $cpasswordErr;?></span>
	</fieldset><br>

	<fieldset>
    	<legend>GENDER</legend>
		<input type="radio" name="gender" <?php if (isset($gender) && $gender=="female") echo "checked";?> value="Female">Female
		<input type="radio" name="gender" <?php if (isset($gender) && $gender=="male") echo "checked";?> value="Male">Male
		<input type="radio" name="gender" <?php if (isset($gender) && $gender=="other") echo "checked";?> value="Other">Other
		<span class="error"><?php echo $genderErr; ?></span>
	</fieldset><br>

	<fieldset>
	    <legend>Phone Number</legend>
		<input type="text" name="phoneNumber" value="<?php echo $phoneNumber;?>">
		<span class="error"><?php echo $phoneNumberErr; ?></span>
	</fieldset><br>

	<fieldset>
    	<legend>DATE OF BIRTH</legend>
		<input type="date" name="dob" value="<?php echo $dob;?>">
		<span class="error"><?php echo $dobErr; ?></span>
	</fieldset><br>
	
	<fieldset>
	    <legend>ADDRESS</legend>
		<textarea name="address" rows="3" cols="30" value="<?php echo $address;?>"></textarea>
		<span class="error"><?php echo $addressErr;?></span>
	</fieldset><br>
	
	<fieldset>
	    <legend>POSTAL CODE</legend>
		<input type="text" name="postalCode" value="<?php echo $postalCode;?>">
		<span class="error"><?php echo $postalCodeErr; ?></span>
	</fieldset><br>
	
	
	<fieldset>
	    <legend>DIVISION</legend>
		<select id="division" name="division">
		<option value="sad" selected="" disabled="">Select a division</option>
		<option value="Barisal">Barisal</option>
		<option value="Chittagong">Chittagong</option>
		<option value="Dhaka">Dhaka</option>
		<option value="Khulna">Khulna</option>
		<option value="Mymensingh">Mymensingh</option>
		<option value="Rajshahi">Rajshahi</option>
		<option value="Rangpur">Rangpur</option>
		<option value="Sylhet">Sylhet</option>
		<option value="Jessore ">Jessore </option>
		<option value="Dinajpur">Dinajpur</option>
		<option value="Comilla">Comilla</option>
		<option value="Faridpur">Faridpur</option>
		<option value="Bogra">Bogra</option>
		<option value="Pabna ">Pabna </option>
		<option value="Rangamati">Rangamati</option>
		<option value="Kushtia">Kushtia</option>
		<option value="sylhet">Noakhali</option>
		<option value="Tangail ">Tangail </option>
		<option value="Panchagarh">Panchagarh</option>
		<option value="Bhola">Bhola</option>
		<option value="Bandarban">Bandarban</option>
		<option value="Chandpur">Chandpur</option>
		<option value="Habiganj">Habiganj </option>
		<option value="Lakshmipur">Lakshmipur</option>
		<option value="Barguna">Barguna</option>
		<option value="Jhalokati">Jhalokati</option>
		<option value="Pirojpur">Pirojpur</option>
		<option value="Patuakhali">Patuakhali</option>
		<option value="Jhenaidah">Jhenaidah</option>
		<option value="Narail ">Narail </option>
		<option value="Magura ">Magura </option>
		<option value="Lalmonirhat">Lalmonirhat</option>
		<option value="Kurigram">Kurigram</option>
		<option value="Nilphamari">Nilphamari</option>
		<option value="Gaibandha">Gaibandha</option>
		<option value="Thakurgaon">Thakurgaon</option>
		<option value="Satkhira">Satkhira</option>
		<option value="Bagerhat ">Bagerhat </option>
		<option value="Chuadanga">Chuadanga</option>
		<option value="Meherpur">Meherpur</option>
		<option value="Sirajganj ">Sirajganj </option>
		<option value="Joypurhat">Joypurhat</option>
		<option value="Natore">Natore</option>
		<option value="Naogaon">Naogaon</option>
		<option value="Nawabganj">Nawabganj</option>
		<option value="Khagrachhari">Khagrachhari</option>
		<option value="Feni ">Feni </option>
		<option value="Brahmanbaria">Brahmanbaria</option>
		<option value="Sunamganj ">Sunamganj</option>
		<option value="Cox's Bazar">Cox's Bazar</option>
		<option value="Moulvibazar">Moulvibazar</option>
		<option value="Gopalganj">Gopalganj</option>
		<option value="Shariatpur">Shariatpur</option>
		<option value="Madaripur">Madaripur</option>
		<option value="Rajbari  ">Rajbari </option>
		<option value="Gazipur">Gazipur</option>
		<option value="Kishoreganj ">Kishoreganj</option>
		<option value="Jamalpur">Jamalpur</option>
		<option value="Sherpu">Sherpu</option>
		<option value="Netrakona">Netrakona</option>
		<option value="Munshiganj">Munshiganj</option>
		<option value="Narsingdi">Narsingdi</option>
		<option value="Narayanganj ">Narayanganj </option>
		<option value="Manikganj">Manikganj</option>
		</select>
		<span class="error"><?php echo $divisionErr; ?></span>
	</fieldset><br>
	
	<fieldset>
	    <legend>STATE</legend>
		<select id="state" name="state">
		<option value="sas" selected="" disabled="">Select a state</option>
		<option value="Barisal">Barisal</option>
		<option value="Chittagong">Chittagong</option>
		<option value="Dhaka">Dhaka</option>
		<option value="Khulna">Khulna</option>
		<option value="Mymensingh">Mymensingh</option>
		<option value="Rajshahi">Rajshahi</option>
		<option value="Rangpur">Rangpur</option>
		<option value="Sylhet">Sylhet</option>
		</select>
		<span class="error"><?php echo $stateErr;?></span>
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