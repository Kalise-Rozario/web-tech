<!DOCTYPE html>
<html lang="en">
<head>
<style>
.error {color: #0000FF;}
</style>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
// define variables and set to empty values
$nameErr = $emailErr = $genderErr = $degreeErr = $bloodgroupErr= "";
$name = $email = $gender = $degree = $bloodgroup = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["name"])) {
    $nameErr = "Cannot be empty";
  } else {
    $name = test_input($_POST["name"]);
  }
  
  if (empty($_POST["email"])) {
    $emailErr = "Cannot be empty";
  } else {
    $email = test_input($_POST["email"]);
  }
    
  if (empty($_POST["gender"])) {
    $genderErr = "At least one of them must be selected";
  } else {
    $gender = test_input($_POST["gender"]);
  }

  if (empty($_POST["degree"])) {
    $degreeErr = "At least two of them must be selected
    ";
  } else {
    $degree = test_input($_POST["degree"]);
  }

  if (empty($_POST["bloodgroup"])) {
    $bloodgroupErr = "Must be selected";
  } else {
    $bloodgroup = test_input($_POST["bloodgroup"]);
  }
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">

Name: <input type="text" name="name">
<span class="error">* <?php echo $nameErr;?></span>
<br><br>
E-mail:
<input type="text" name="email">
<span class="error">* <?php echo $emailErr;?></span>
<br><br>
Gender:
<input type="radio" name="gender" value="female">Female
<input type="radio" name="gender" value="male">Male
<input type="radio" name="gender" value="other">Other
<span class="error">* <?php echo $genderErr;?></span>
<br><br>
Degree:
<input type ="checkbox" name="d1" value="ssc">SSC
<input type ="checkbox" name="d2" value="hsc">HSC
<input type ="checkbox" name="d3" value="bsc">BSC
<input type ="checkbox" name="d4" value="msc">MSC
<span class="error">* <?php echo $degreeErr;?></span>
<br><br>
Blood group:
<select name="blood group">
    <option value = "A+">A+</option>
    <option value = "A-">A-</option>
    <option value = "B+">B+</option>
    <option value = "AB">AB</option>
</select>
<span class="error">* <?php echo $bloodgroupErr;?></span>
<br><br>
<input type="submit" name="submit" value="Submit">
</body>
</html>