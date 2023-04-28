<form id="profile-form" method="post" action="#">
  <label for="name">Name:</label>
  <input type="text" id="name" name="name" value="John Doe"><br><br>

  <label for="email">Email:</label>
  <input type="email" id="email" name="email" value="john.doe@example.com"><br><br>

  <label for="password">Password:</label>
  <input type="password" id="password" name="password" value=""><br><br>

  <button type="submit">Save Changes</button>
</form>

<script>
    const form = document.getElementById('profile-form');
const nameInput = document.getElementById('name');
const emailInput = document.getElementById('email');
const passwordInput = document.getElementById('password');

form.addEventListener('submit', function(event) {
  // Prevent the form from submitting
  event.preventDefault();

  // Validate the name field
  if (nameInput.value === '') {
    alert('Please enter your name.');
    nameInput.focus();
    return false;
  }

  // Validate the email field
  if (emailInput.value === '') {
    alert('Please enter your email address.');
    emailInput.focus();
    return false;
  } else if (!isValidEmail(emailInput.value)) {
    alert('Please enter a valid email address.');
    emailInput.focus();
    return false;
  }

  // Validate the password field
  if (passwordInput.value !== '' && passwordInput.value.length < 6) {
    alert('Password must be at least 6 characters long.');
    passwordInput.focus();
    return false;
  }

  // Submit the form if validation passes
  form.submit();
});

function isValidEmail(email) {
  const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
  return emailRegex.test(email);
}

</script>