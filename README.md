# Documentation for Pharmacy Management System

This is the client side of the PMS site.

## Registration Page

<img src="SS/StoreOfficer_Registration.jpg" width="500" height="700">

| Parameter           | Input Type  | Description  |
| ------------------- | ----------- | ------------ |
| Name                | text        | It is a mandatory field. Must be 2 words and only A-Z, a-z, Dash(-) and Period( ) are allowed. |
| Email               | text        | It is a mandatory field. Must be a valid email and user cannot use same email to open different account. |
| User_Name           | text        | It is a mandatory field. Only a-z, 0-9, Dash(-) and Period( ) are allowed and user cannot use same username to open different account. |
| Password            | password    | It is a mandatory field. Password  must contain atleast 8 charecters. |
| Confirm_Password    | password    | It is a mandatory field. Password and confirm passward need to be same.  |
| Gender              | radio       | It is a mandatory field. |
| Phone_Number        | text        | It is a mandatory field. Only 0-9 is allowed and length must be exact 11. |
| Date_of_Birth       | date        | It is a mandatory field. |

## Login Page

<img src="SS/StoreOfficer_Login.jpg" width="400" height="350">

| Parameter           | Input Type  | Description  |
| ------------------- | ----------- | ------------ |
| User_Name           | text        | It is a mandatory field. |
| Password            | password    | It is a mandatory field. |

## Forget Password Page

<img src="SS/Forget_Password.jpg" width="300" height="250">

| Parameter           | Input Type  | Description  |
| ------------------- | ----------- | ------------ |
| Email               | text        | It is a mandatory field. It need to match with any email in database. |

## Change Profile Picture Page

<img src="SS/Change_PP.jpg" width="450" height="350">

| Parameter           | Input Type  | Description  |
| ------------------- | ----------- | ------------ |
| Profile_Picture     | file        | It is a mandatory field. Image size must be less than 4mb and only JPG, JPEG & PNG files are allowed. |

# Change Password Page

<img src="SS/Change_Password.jpg" width="450" height="450" align="middle">

| Parameter           | Input Type  | Description  |
| ------------------- | ----------- | ------------ |
| Current_Password    | password    | It is a mandatory field. It need to match with the password stored in database.|
| New_Password        | password    | It is a mandatory field. Password  must contain atleast 8 charecters.|
| Retype_New_Password | password    | It is a mandatory field. New password and retype new passward need to be same |