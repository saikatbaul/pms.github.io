## Documentation for Pharmacy Management System

This is the client side of the PMS site where customers can view and order medicine.

### Registration Page (Store Officer)

<img src="SS/StoreOfficer_Registration.jpg" width="900" height="700">

<!-- Tables -->
| Parameter          | Input Type  | Description  |
| ------------------ | ----------- | ------------ |
| Name               | text        | It is a mandatory field. Must be 2 words and only A-Z, a-z, Dash(-) and Period( ) are allowed. |
| Email              | text        | It is a mandatory field. Must be a valid email and user cannot use same email to open different account. |
| User Name          | text        | It is a mandatory field. Only a-z, 0-9, Dash(-) and Period( ) are allowed and user cannot use same username to open different account. |
| Password           | password    | It is a mandatory field. Password  must contain atleast 8 charecters and length must be atleast 8. |
| Confirm Password   | password    | It is a mandatory field. Password and confirm passward need to be same  |
| Gender             | radio       | It is a mandatory field. |
| Phone Number       | text        | It is a mandatory field. Only 0-9 is allowed and length must be exact 11. |
| Date of Birth      | date        | It is a mandatory field. |

- Store Officer can register to the system by providing these information.
- After successful registration store officer can login using provided UserName and Password.
- Store officer will be able to update those information.
