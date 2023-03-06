<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        fieldset{
            width: 300px;
            height: 300px;
            text-align:center;
            
        }
    </style>
</head>
<body>
<form method="Post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
<fieldset>
    <legend><B >Change Password</B></legend>
    <label for="cpassword">Current Password:</label>
  
  <input type="password" name="cpassword" id="cpassword">
  <br><br>
  <label for="npassword">New Password: </label>
  <input type="password" name="npassword" id="npassword">
  <br><br>
  <label for="rpassword">Re-type Password:</label>
   <input type="password" name="rpassword" id="rpassword">
  <br><br><hr>
  <input type = "submit" value = "submit">

</fieldset>
</form>
</body>
</html>