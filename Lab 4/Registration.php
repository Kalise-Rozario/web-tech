<!DOCTYPE html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        #field1{
            width: 300px;
            height: 350px;
            text-align:center;
            margin-left: auto;
  margin-right: auto;
  
        }
       
    </style>
</head>
<body style= "background-color:powderblue">
<?php
  include 'header.php';
?>

<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
  <fieldset id = "field1">
    <legend><b>Registration Form</b></legend>
    <label for="name">Name:</label>
    <input type="text" id="name" name="name" required><br><br>
    
    <label for="username">Username:</label>
    <input type="text" id="username" name="username" required><br><br>
    
    <label for="password">Password:</label>
    <input type="password" id="password" name="password" required><br><br>
    
    <label for="gender">Gender:</label>
    <input type="radio" id="male" name="gender" value="male" required>
    <label for="male">Male</label>
    <input type="radio" id="female" name="gender" value="female">
    <label for="female">Female</label><br><br>

    <label for="bloodgroup">Blood Group:</label>
    <select id="bloodgroup" name="bloodgroup" required>
      <option value="">Select</option>
      <option value="A+">A+</option>
      <option value="A-">A-</option>
      <option value="B+">B+</option>
      <option value="B-">B-</option>
      <option value="O+">O+</option>
      <option value="O-">O-</option>
      <option value="AB+">AB+</option>
      <option value="AB-">AB-</option>
    </select><br><br>
    
    <label for="dob">Date of Birth:</label>
    <input type="date" id="dob" name="dob" required><br><br>
    
    <input type="submit" name="submit" value="Register">
    
  </fieldset>

</form>
    
    </body>
    </html>
    <?php
  include 'footer.php';
?>
<?php
		// Define variables and set to empty values
		$nameErr = $usernameErr = $passwordErr = $genderErr = $bloodgroupErr = $dobErr = "";
		$name = $username = $password = $gender = $bloodgroup = $dob = "";

		if ($_SERVER["REQUEST_METHOD"] == "POST") {
		  if (empty($_POST["name"])) {
		    $nameErr = "Name is required";
		  } else {
		    $name = test_input($_POST["name"]);
		    // check if name only contains letters and whitespace
		    if (!preg_match("/^[a-zA-Z ]*$/",$name)) {
		      $nameErr = "Only letters and white space allowed";
		    }
		  }

		  if (empty($_POST["username"])) {
		    $usernameErr = "Username is required";
		  } else {
		    $username = test_input($_POST["username"]);
		    // check if username only contains letters, numbers and underscores
		    if (!preg_match("/^[a-zA-Z0-9_]*$/",$username)) {
		      $usernameErr = "Only letters, numbers and underscores allowed";
		    }
		  }

		  if (empty($_POST["password"])) {
		    $passwordErr = "Password is required";
		  } else {
		    $password = test_input($_POST["password"]);
		    // check if password has at least 8 characters, 1 uppercase letter, 1 lowercase letter and 1 number
		    if (!preg_match("/^(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}$/",$password)) {
		      $passwordErr = "Password must contain at least 8 characters, 1 uppercase letter, 1 lowercase letter and 1 number";
		    }
		  }

		  if (empty($_POST["gender"])) {
		    $genderErr = "Gender is required";
		  } else {
		    $gender = test_input($_POST["gender"]);
		  }

		  if (empty($_POST["bloodgroup"])) {
		    $bloodgroupErr = "Blood group is required";
		  } else {
		    $bloodgroup = test_input($_POST["bloodgroup"]);
		  }

		  if (empty($_POST["dob"])) {
		    $dobErr = "Date of Birth is required";
		  } else {
		    $dob = test_input($_POST["dob"]);
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

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $data = array(
        'name' => $_POST['name'],
        'username' => $_POST['username'],
        'password' => $_POST['password'],
        'gender' => $_POST['gender'],
        'bloodgroup'=> $_POST['bloodgroup'],
        'dob' => $_POST['dob'],
    );

    $json_data = json_encode($data);
    file_put_contents('form.json', $json_data);
}

?>
    




