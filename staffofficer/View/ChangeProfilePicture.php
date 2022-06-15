<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="../Css/style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
<fieldset><br>
<?php include 'Head.php';?><br>
<fieldset>
<table>
  <tr>
    <td><?php require 'Account.php';?></td>
    <td>
      <form action="CPP.php" method="post" enctype="multipart/form-data">
      <fieldset>
        <legend>PROFILE PICTURE</legend>
        <img src="../Picture/pp.jpg" alt="PP" style="width:130px;height:130px;"><br>
        <input type="file" name="fileToUpload" id="fileToUpload"><br><br>
        <input type="submit" value="Submit" name="submit">
      </fieldset>
      </form>
    </td>
  </tr>
</table>
</fieldset><br>

<?php include 'Foot.php';?><br>
</fieldset>
</body>
</html>