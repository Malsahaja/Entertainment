<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Register page</title>
</head>
<body>
    <div class="container">
		<h2>Register</h2>
		<form method="post">
			<label for="username">Username:</label><br>
			<input type="text" id="username" name="username"><br>

            <label for="fname">Full Name:</label><br>
			<input type="text" id="fname" name="fname"><br>

			<label for="email">Email:</label><br>
			<input type="text" id="email" name="email"><br>

			<label for="password">Password:</label><br>
			<input type="password" id="password" name="password"><br>

			<label for="confirm_password">Confirm Password:</label><br>
			<input type="password" id="confirm_password" name="confirm_password"><br>

			<button type="submit">Register</button>
		</form>
		<div class="login">
			<p>Already have an account? <a href="login.php">Login here</a></p>
		</div>
		<div class="home">
			<button onclick="window.location.href='index.php'">Back to Home</button>
		</div>
	</div>
</body>
</html>