<form action="login.php" method="post" onsubmit="return validateLoginForm();">
  <label for="username">Username:</label>
  <input type="text" id="username" name="username" required>
  <br><br>

  <label for="password">Password:</label>
  <input type="password" id="password" name="password">

  <br><br>

  <input type="submit" value="Log In">
</form>

<script>
  function validateLoginForm() {
  // Get the values from the input fields
  var username = document.getElementById("username").value;
  var password = document.getElementById("password").value;

  // Check if the username and password are not empty
  if (username.trim() == "") {
    alert("Please enter your username.");
    return false;
  }
  if (password.trim() == "") {
    alert("Please enter your password.");
    return false;
  }

  // If everything is valid, return true to submit the form
  return true;
}
</script>


