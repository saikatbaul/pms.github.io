# Documentation For Pharmacy Management System

<p align="center"> **This is the client side of the Pharmachy Management System site.** </p>

# Registration Page

<p align="center"> 
    <img src="SS/StoreOfficer_Registration.jpg" width="500" height="700">
</p>

```html
<!DOCTYPE HTML>
<html>
<body>
	<form method="post">
		<h1>Register here</h1>
		<div class="inset">
			<p>
				<label for="name">NAME</label>
				<input type="text" name="name" id="name" onkeyup="checkName()" onblur="checkName()" value="<?php echo $name;?>">
			</p>
			<span id="nameErr"></span><span class="error"><?php echo $nameErr;?></span>


			<p>
				<label for="email">EMAIL</label>
				<input type="text" name="email" id="email" onkeyup="checkEmail()" onblur="checkEmail()" value="<?php echo $email;?>">
			</p>
			<span id="emailErr"></span><span class="error"><?php echo $emailErr;?></span>

			<p>
				<label for="uname">USER NAME</label>
				<input type="text" name="uname" id="uname" onkeyup="checkUserName()" onblur="checkUserName()" value="<?php echo $uname;?>">
			</p>
			<span id="unameErr"></span><span class="error"><?php echo $unameErr;?></span>

			<p>
		    	<label for="password">PASSWORD</label>
				<input type="password" name="password" id="password" onkeyup="checkPassword()" onblur="checkPassword()" value="<?php echo $password;?>">
			</p>
			<span id="passwordErr"></span><span class="error"><?php echo $passwordErr;?></span>

			<p>
		    	<label for="cpassword">CONFIRM PASSWORD</label>
				<input type="password" name="cpassword" id="cpassword" onkeyup="checkConfirmPassword()" onblur="checkConfirmPassword()" value="<?php echo $cpassword;?>">
			</p>
			<span id="cpasswordErr"></span><span class="error"><?php echo $cpasswordErr;?></span>

			<p>
		    	<label for="gender">GENDER</label>
				<input type="radio" name="gender" <?php if (isset($gender) && $gender=="female") echo "checked";?> value="Female">Female
				<input type="radio" name="gender" <?php if (isset($gender) && $gender=="male") echo "checked";?> value="Male">Male
				<input type="radio" name="gender" <?php if (isset($gender) && $gender=="other") echo "checked";?> value="Other">Other
			</p>
			<span class="error"><?php echo $genderErr;?></span>

			<p>
		    	<label for="phoneNumber">PHONE NUMBER</label>
				<input type="text" name="phoneNumber" id="phoneNumber" onkeyup="checkPhoneNumber()" onblur="checkPhoneNumber()" value="<?php echo $phoneNumber;?>">
			</p>
			<span id="phoneNumberErr"></span><span class="error"><?php echo $phoneNumberErr;?></span>

			<p>
		    	<label for="dob">DATE OF BIRTH</label>
				<input type="date" name="dob" id="dob" onkeyup="checkDateOfBirth()" onblur="checkDateOfBirth()" value="<?php echo $dob;?>">
			</p>
			<span id="dobErr"></span><span class="error"><?php echo $dobErr;?></span>

			<span class="error"><?php echo $error;?></span><br>
		</div>

		<p class="p-container">
			<input type="submit" name="submit" value="Submit">
		</p>
</form>
</body>
</html>
```

| Parameter           | Input_Type  | Description  |
| ------------------- | ----------- | ------------ |
| Name                | text        | It is a mandatory field. Must be 2 words and only A-Z, a-z, Dash(-) and Period( ) are allowed. |
| Email               | text        | It is a mandatory field. Must be a valid email and user cannot use same email to open different account. |
| User_Name           | text        | It is a mandatory field. Only a-z, 0-9, Dash(-) and Period( ) are allowed and user cannot use same username to open different account. |
| Password            | password    | It is a mandatory field. Password  must contain atleast 8 charecters. |
| Confirm_Password    | password    | It is a mandatory field. Password and confirm passward need to be same.  |
| Gender              | radio       | It is a mandatory field. |
| Phone_Number        | text        | It is a mandatory field. Only 0-9 is allowed and length must be exact 11. |
| Date_of_Birth       | date        | It is a mandatory field. |

# Login Page

<p align="center">  
    <img src="SS/StoreOfficer_Login.jpg" width="400" height="350">
</p>

| Parameter           | Input_Type  | Description  |
| ------------------- | ----------- | ------------ |
| User_Name           | text        | It is a mandatory field. It need to match with any user name in the database. |
| Password            | password    | It is a mandatory field. It need to match with that user name's password in the database.|

# Forget Password Page

<p align="center">
    <img src="SS/Forget_Password.jpg" width="300" height="250">
</p>

| Parameter           | Input_Type  | Description  |
| ------------------- | ----------- | ------------ |
| Email               | text        | It is a mandatory field. It need to match with any email in the database. |

# Edit Profile Page

<p align="center"> 
    <img src="SS/Edit_Profile.jpg" width="500" height="550">
</p>

| Parameter           | Input_Type  | Description  |
| ------------------- | ----------- | ------------ |
| Name                | text        | It is a mandatory field. Must be 2 words and only A-Z, a-z, Dash(-) and Period( ) are allowed. |
| Email               | text        | It is a mandatory field. Must be a valid email and user cannot use same email to open different account. |
| Gender              | radio       | It is a mandatory field. |
| Phone_Number        | text        | It is a mandatory field. Only 0-9 is allowed and length must be exact 11. |
| Date_of_Birth       | date        | It is a mandatory field. |

# Change Profile Picture Page

<p align="center">
    <img src="SS/Change_PP.jpg" width="450" height="350">
</p>

| Parameter           | Input_Type  | Description  |
| ------------------- | ----------- | ------------ |
| Profile_Picture     | file        | It is a mandatory field. Image size must be less than 4mb and only JPG, JPEG & PNG files are allowed. |

# Change Password Page

<p align="center">
    <img src="SS/Change_Password.jpg" width="450" height="450">
</p>

| Parameter           | Input_Type  | Description  |
| ------------------- | ----------- | ------------ |
| Current_Password    | password    | It is a mandatory field. It need to match with the password stored in database.|
| New_Password        | password    | It is a mandatory field. Password  must contain atleast 8 charecters.|
| Retype_New_Password | password    | It is a mandatory field. New password and retype new passward need to be same |

# Add New Medicine Page

<p align="center"> 
    <img src="SS/Add_Med.jpg" width="450" height="450">
</p>

| Parameter           | Input_Type  | Description  |
| ------------------- | ----------- | ------------ |
| Medicine_Name       | text        | It is a mandatory field. Only A-Z, a-z, 0-9, +, *, Dash(-) and Period( ) are allowed. |
| Price_Per_Piece     | text        | It is a mandatory field. Only 0-9 is allowed. |
| Quantity            | text        | It is a mandatory field. Only 0-9 is allowed. |

# Edit Medicine Page

<p align="center"> 
    <img src="SS/Edit_Medicine.jpg" width="450" height="450">
</p>

| Parameter           | Input_Type  | Description  |
| ------------------- | ----------- | ------------ |
| Medicine_Name       | text        | It is a mandatory field. Only A-Z, a-z, 0-9, +, *, Dash(-) and Period( ) are allowed. |
| Price_Per_Piece     | text        | It is a mandatory field. Only 0-9 is allowed. |
| Quantity            | text        | It is a mandatory field. Only 0-9 is allowed. |