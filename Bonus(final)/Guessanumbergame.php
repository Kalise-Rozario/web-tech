<!DOCTYPE html>
<html>
<head>
	<title>Guess the Number Game</title>
	<style>
		h2{
			color: rgb(0, 110, 255);
		}
		p{
			color:	rgb(255, 0, 64);
		}
	</style>
</head>
<body>
	<h2>Guess the Number Game</h2>
	<p><b>Guess a number between 1 and 100.</b></p>
	<input type="text" id="guessInput">
	<button onclick="guessNumber()">Guess</button>
	<p id="output"></p>

	<script>
		var randomNumber = Math.floor(Math.random() * 100) + 1;

		function guessNumber() {
			var guess = parseInt(document.getElementById("guessInput").value);
			var output = document.getElementById("output");

			if (isNaN(guess) || guess < 1 || guess > 100) {
				output.innerHTML = "Not correct, Please enter a valid number.";
			} else if (guess === randomNumber) {
				output.innerHTML = "Congratulations! You guessed the number.";
			} else if (guess < randomNumber) {
				output.innerHTML = "The number is higher than " + guess + ". Try again.";
			} else if (guess > randomNumber) {
				output.innerHTML = "The number is lower than " + guess + ". Try again.";
			}
		}
	</script>
</body>
</html>