<form name="registrationForm" onsubmit="return validateForm()" method="post">
  <label for="username">Username:</label>
  <input type="text" id="username" name="username"><br><br>

  <label for="email">Email:</label>
  <input type="email" id="email" name="email"><br><br>

  <label for="password">Password:</label>
  <input type="password" id="password" name="password"><br><br>

  <input type="submit" value="Register">
</form>

<script>
    function validateForm() {
  // Get form inputs
  var username = document.forms["registrationForm"]["username"].value;
  var email = document.forms["registrationForm"]["email"].value;
  var password = document.forms["registrationForm"]["password"].value;

  // Check if inputs are not empty
  if (username == "" || email == "" || password == "") {
    alert("Please fill out all fields");
    return false;
  }

  // Check if email is valid
  var emailRegex = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
  if (!emailRegex.test(email)) {
    alert("Please enter a valid email address");
    return false;
  }

  // Check if password is at least 8 characters long
  if (password.length < 8) {
    alert("Password must be at least 8 characters long");
    return false;
  }

  // All inputs are valid
  return true;
}

</script>