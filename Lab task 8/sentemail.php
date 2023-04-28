<form id="myForm" action="send-email.php" method="post">
  <label for="email">Email:</label>
  <input type="email" id="email" name="email">
  <button type="submit">Submit</button>
</form>

<script>
    const form = document.getElementById('myForm');
const emailInput = document.getElementById('email');

form.addEventListener('submit', function(event) {
  event.preventDefault(); // prevent the form from submitting

  const emailValue = emailInput.value;
  const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/; // regular expression for email validation

  if (!emailRegex.test(emailValue)) {
    alert('Please enter a valid email address.');
    emailInput.focus();
  } else {
    form.submit(); // submit the form if email is valid
  }
});

</script>