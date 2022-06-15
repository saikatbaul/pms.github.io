<!DOCTYPE HTML>
<html>
<head>
    <link rel="stylesheet" href="../Css/style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
<fieldset class="fieldsetlogin"><br>
<?php 
    include 'Head.php';
    require '../Controller/LoginValidation.php';
?><br>

<form method="post">

<fieldset class="">
    <legend>Staff LOGIN</legend>
    <table class="">
    	<tr>
    		<td>
                User Name 
            </td>
    		<td>:</td>
    		<td>
                    <input type="text" name="uname" value="<?php if(isset($_COOKIE["uname"])){ echo $_COOKIE["uname"];} ?>">
               
            </td>
    	</tr>

    	<tr>
    		<td>
                Password 
            </td>
    		<td>:</td>
    		<td>
                    <input type="password" name="password" value="<?php if(isset($_COOKIE["password"])){ echo $_COOKIE["password"];} ?>">
                
            </td>
    	</tr>

    	<tr>
    		<td  colspan="3">
                <span class="error">
                    <?php
                         echo $error;
                    ?>
                </span>
                <span class="success">
                        <?php 
                            echo $success;
                        ?>
                            
                </span>
            </td>
    	</tr>

    	<tr>
    		<td colspan="3">
                <input type="checkbox" name="remindMe" 
                <?php 
                    if(isset($remindMe) && $remindMe=="Remind Me") echo "checked";
                ?> 
                value="Remember me for 30 days">
                    Remember me for 30 days
            </td>
    	</tr>

		<tr>
			<td colspan="3">
                <input type="submit" name="submit" value="Submit" > <a href="ForgetPassword.php">Forget Password?</a>
            </td>
		</tr>
    </table>
</fieldset><br>
</form>

<?php include 'Foot.php';?><br>
</fieldset>
</body>
</html>