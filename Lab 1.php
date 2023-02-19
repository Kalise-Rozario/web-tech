<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lab task 2</title>
</head>
<body>
<form method="Post" action="<?php echo $_SERVER['PHP_SELF']; ?>">

       <level for = "fname"><b>First Name:</b></level>
        <input type="text" name="fname" id="fname"><br><br>

        <level for = "lname"><b>Last Name:</b></level>
        <input type="text" name="lname" id="lname" ><br><br>

        <level><b>Gender:</b></level>
        <input type ="radio" name="gender" id="male">
        <level for = "male">Male</level>
        <input type = "radio" name="gender" id="female">
        <level for = "female">Female</level><br><br>

        <level for = "bod"><b>Date of birth:</b></level>
        <input type = "date" id="dob" name="dob"><br><br>

        <level for = "degree"><b>Degree:</b></level>
        <input type = "checkbox" name="degree" id="d1" value="ssc">SSC 
        <input type ="checkbox" name = "degree" id="d2" value="hsc">HSC 
        <input type = "checkbox" name="degree" id="d3" value="bsc">BSC
        <br><br>

        <level for = "univarcity"><b>Univarcity</b></level>
        <select name="univarcity">
            <option value = "aiub"><b>AIUB</b></option>
            <option value = "nse"><b>NSU</b></option>
            <option value = "iub"><b>IUB</b></option>
        </select><br><br>

        <level for = "quantity"><b>Credit completed:</b></level>
        <input type = "number" name="quantity" id="quantiyt" min="1" max="148"><br><br>

        <input type = "submit" value="submit">
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") { //firstname
    // collect value of input field
    $name = $_POST['fname'];
    if (empty($name)) {
        echo "Name is empty";
    } else {
        echo $name;
    }
}
?><br>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") { //Lastname
    // collect value of input field
    $name = $_POST['lname'];
    if (empty($name)) {
        echo "Name is empty";
    } else {
        echo $name;
    }
}
?><br>
<?php
  if ($_SERVER["REQUEST_METHOD"] == "POST") {         //gender
    $name = $_POST['gender'];
    if ($name =="Male"){
      echo "This person is male";
    } 
    else if($name =="Female")
     {
      echo "This person is female";
    }
    else{
      echo"Not selected";
    }
  }
  ?><br>
  <?php
  if ($_SERVER["REQUEST_METHOD"] == "POST") {        //birthday
   
    $name = $_POST['dob'];
    if (empty($name)) {
      echo "Birthday is empty";
    } 
    else {
      echo $name;
    }
  }
  ?><br>
  <?php
if ($_SERVER["REQUEST_METHOD"] == "POST") //gender
$name = $_GET['degree'];

foreach ($name as $degree){ 
    echo $gender."<br />";
}

?><br>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {        //univarcity
  $bg = $_POST['univercity'];

if (!isset($bg)) {
  echo  "not selected";
}
else{
  echo $bg;
}
  echo $bg;
}
?>
  
</body>
</html>