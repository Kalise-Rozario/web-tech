<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
         #field1{
            width: 300px;
            height: 500px;
            text-align:center;
            
        }
        #field2{
            width: 300px;
            height: 30px;
            text-align:center;
            
        }

       
    </style>
</head>
<body>
<form method="post" action="Lab3(4).php">
    <fieldset id="field1">
    <legend>REGISTRATION</legend><br>
    <label for="name">Name:</label>
		<input type="text" id="name" name="name" required><br><hr>

		<label for="email">Email:</label>
		<input type="email" id="email" name="email" required><br><hr>

        <label for="uname">User Name:</label>
		<input type="text" id="uname" name="uname" required><br><hr>

        <label for="password"> Password:</label>
  
  <input type="password" name="password" id="password"><br><hr>

  <label for="password">Confirm Password:</label>
  
  <input type="cpassword" name="cpassword" id="cpassword"><br><hr>
  
  <fieldset id="field2">
    <legend>Gender</legend>
    <input type="radio" name="gender" value="female">Female
<input type="radio" name="gender" value="male">Male
<input type="radio" name="gender" value="other">Other<br>
		
  </fieldset><hr>

  <fieldset id="field3">
    <legend>Date of birth</legend>
    <label for="birthday"></label>
  <input type="date" id="birthday" name="birthday">
		
  </fieldset><hr>

  <input type="submit" value="Submit">
  <input type="reset">



    </fieldset>
    
</form>
</body>
</html>

<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $data = array(
        'name' => $_POST['name'],
        'email' => $_POST['email'],
        'uname' => $_POST['uname'],
        'password' => $_POST['password'],
        'cpassword' => $_POST['cpassword'],
        'gender' => $_POST['gender'],
        'birthday' => $_POST['birthday'],
    );

    $json_data = json_encode($data);
    file_put_contents('data.json', $json_data);
}
else
{
    echo ("Somthing Wrong");
}
?>






