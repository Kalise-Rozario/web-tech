<!DOCTYPE html>
<html lang="en">
<head>
    <style>
        #field2{
            
            width: 300px;
            height: 200px;
            text-align:center;
            margin-left: auto;
            margin-right: auto;
  
        }
        
    </style>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>E-learning</title>

</head>
<body>
    <!-- login.php -->
    <?php
  include 'header.php';
?>
<form method="POST" action="authenticate.php">

    <fieldset id= "field2">
        <legend><b>Login form</b></legend>
    <label for="username">Username:</label>
  <input type="text" name="username" id="username">
  <br><br>
  <label for="password">Password:</label>
  <input type="password" name="password" id="password">
  <br><br>
  <input type="submit" value="Login">
</form>
    </fieldset>
    <?php
  include 'footer.php';
?>
  

  <?php
session_start();

// Load the user data from the JSON file
$jsonData = file_get_contents('form.json');
$data = json_decode($jsonData, true);

// Check if the login form was submitted
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  // Get the username and password from the form
  $username = $_POST['username'];
  $password = $_POST['password'];

  // Search for a user with the matching username and password
  foreach ($data['users'] as $user) {
    if ($user['username'] == $username && $user['password'] == $password) {
      // Login successful, store the user data in the session
      $_SESSION['user'] = $user;

      // Redirect to the home page or some other protected page
      header('Location: home.php');
      exit;
    }
  }

  // Login failed, show an error message
  $errorMessage = 'Invalid username or password';
}

?>
<?php if (isset($errorMessage)): ?>
  <p style="color: red;"><?php echo $errorMessage; ?></p>
<?php endif; ?>


</body>
</html>