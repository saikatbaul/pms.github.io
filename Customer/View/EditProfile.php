<!DOCTYPE html>  
<html> 
<head>
     <link rel="stylesheet" href="../Css/style.css">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head> 

<style>
     .error {color: red;}
</style>
</head>

<body>
<fieldset><br>
<?php 
include 'Head.php';
require '../Controller/EditProfileValidation.php'
?> <br>

<form method="post">
<fieldset>
<table>
     <tr>
          <td><?php require 'Account.php';?></td>
          <td>
               <fieldset>
               <legend>EDIT PROFILE</legend>
               <table>  
               <tr>  
                    <td align="left">Name </td>
                    <td>: </td>
                    <td><input type="text" name="name" value="<?php require '../Controller/ViewName.php';?>"><span class="error"><?php echo $nameErr;?></span></td>  
               </tr>  

               <tr>
                    <td align="left">E-mail </td>
                    <td>: </td> 
                    <td><input type="text" name="email" value="<?php require '../Controller/ViewEmail.php';?>"><span class="error"><?php echo $emailErr;?></span></td>
               </tr> 

               <tr>
                    <td align="left">Gender </td>
                    <td>: </td>
                    <td> <?php require '../Controller/EditGender.php';?>
                         <input type="radio" name="gender" <?php if ($g=="Female") echo "checked";?> value="Female">Female
                         <input type="radio" name="gender" <?php if ($g=="Male") echo "checked";?> value="Male">Male
                         <input type="radio" name="gender" <?php if ($g=="Other") echo "checked";?> value="Other">Other
                         <span class="error"><?php echo $genderErr;?></span></td>   
               </tr> 

               <tr>
                    <td align="left">Phone number </td>
                    <td>: </td> 
                    <td><input type="text" name="phoneNumber" value="<?php require '../Controller/ViewpNumber.php';?>"><span class="error"><?php echo $phoneNumberErr;?></span></td>
               </tr> 

               <tr>  
                    <td align="left">Date of birth </td>
                    <td>: </td> 
                    <td><input type="date" name="dob" value="<?php require '../Controller/ViewDob.php';?>"><span class="error"><?php echo $dobErr;?></span></td>
               </tr>
			   
			   
               <tr>  
               <td align="left">Address </td>
               <td>: </td> 
               <td><textarea name="address" rows="3" cols="30" value="<?php require '../Controller/ViewAddress.php';?>"></textarea><span class="error"><?php echo $addressErr;?></span></td>
               </tr>


               <tr>  
               <td align="left">PostalCode </td>
               <td>: </td> 
               <td><input type="text" name="postalCode" value="<?php require '../Controller/ViewpostalCode.php';?>"><span class="error"><?php echo $postalCodeErr;?></span></td>
               </tr>

               <tr>  
               <td align="left">Division </td>
               <td>: </td> 
               <td>
                    <select id="division" name="division">
                    <option value="sad" selected="" disabled="">Select a division</option>
                    <option value="<?php require '../Controller/Viewdivision.php';?>" selected=""> <?php require '../Controller/Viewdivision.php';?> </option>
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
               </td>
               </tr>

               <tr>  
               <td align="left">State </td>
               <td>: </td> 
               <td>
                    <select id="state" name="state">
                    <option value="sas" selected="" disabled="">Select a state</option>
                    <option value="<?php require '../Controller/Viewstate.php';?>" selected=""> <?php require '../Controller/Viewstate.php';?> </option>
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
               </td>
               </tr>

               <tr>
                    <td> <span class="error"><?php echo $error;?></span></td>
               </tr>
			   

               <tr>
                    <td colspan="4"><input type="submit" name="submit" value="Submit"></td>
               </tr>
               </table>
               </fieldset>
          </td>
     </tr>
</table>
</fieldset>
</form><br>
 
<?php include 'Foot.php';?> <br>
</fieldset>
</body>
</html>
