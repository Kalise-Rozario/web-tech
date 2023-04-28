<!DOCTYPE html>
<html>
<head>
	<title>Add Student</title>
	<script>
		function validateForm() {
			var name = document.forms["addStudentForm"]["name"].value;
			var email = document.forms["addStudentForm"]["email"].value;
			var phone = document.forms["addStudentForm"]["phone"].value;
			if (name == "" || email == "" || phone == "") {
				alert("All fields are required");
				return false;
			}
			if (phone.length != 10) {
				alert("Phone number must be 10 digits");
				return false;
			}
			return true;
		}
	</script>
</head>
<body>
	<h1>Add Student</h1>
	<form name="addStudentForm" onsubmit="return validateForm()" method="post">
		<label for="name">Name:</label>
		<input type="text" id="name" name="name"><br><br>
		<label for="email">Email:</label>
		<input type="email" id="email" name="email"><br><br>
		<label for="phone">Phone:</label>
		<input type="tel" id="phone" name="phone"><br><br>
		<input type="submit" value="Submit">
	</form>
</body>
</html>
