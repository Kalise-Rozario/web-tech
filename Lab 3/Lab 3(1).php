<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        fieldset{
            width:300px;
            height:300px;
        }
    </style>
</head>
<body>
    <fieldset>
        <legend><B>Login</B></legend>
        <form method="Post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
  <label for="username">Username:</label>
  <input type="text" name="username" id="username">
  <br><br>
  <label for="password">Password:</label>
  
  <input type="password" name="password" id="password">
  <br><br>
  <hr>
  <input type="checkbox" id="c1" name="c1" value="c1">
  <label for="c1">Remember me</label>
  <br><br>
  <input type="submit" value="Submit">
</form>

    </fieldset>
</body>
</html>
<?php   //validation
$usernameErr = $passwordErr = " ";
$username = $password = " ";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["name"])) {  
    $nameErr = "Name is required";  
} else {  
   $name = input_data($_POST["name"]);  
       // check if name only contains letters and whitespace  
       if (!preg_match("/^[a-zA-Z ]*$/",$name)) {  
           $nameErr = "Only alphabets and white space are allowed";  
       }  
}  
}



  if(!empty($_POST["password"])) {
    $password = test_input($_POST["password"]);
    if (strlen($_POST["password"]) <= '8') {
        $passwordErr = "Your Password Must Contain At Least 8 Characters!";
    }
    elseif(!preg_match("@, #, $, %", $password)) {
        $passwordErr = "Your Password Must Contain At Least 1 Number!";
    }
    else {
        $passwordErr = "Please Check You've Entered Or Confirmed Your Password!";
    }

}
function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}

?>
<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  $username = $_POST['username'];
  $password = $_POST['password'];

  if (empty($username) || empty($password)) {
    echo 'Please enter both username and password.';
  } else {
    // Check if the username and password are correct
    // If correct, redirect the user to the appropriate page
    // If incorrect, display an error message
  }
}
?>
<?php  
    if(isset($_POST['submit'])) {  
    if($usernameErr = $passwordErr  = " ") {  
        echo "<h3 color = #FF0001> <b>You have sucessfully registered.</b> </h3>";  
        echo "<h2>Your Input:</h2>";  
        echo "Username: " .$name;  
        echo "<br>";  
        echo "Password: " .$password;
    }
  }
