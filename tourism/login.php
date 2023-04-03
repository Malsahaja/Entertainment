<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>login page</title>
</head>
<body>
    <div class="container">
        <h2>Login</h2>
        <form method="post">
            <label for="username">Username:</label><br>
            <input type="text" id="username" name="username"><br>

            <label for="password">Password:</label><br>
            <input type="password" id="password" name="password"><br>

            <button type="submit">Login</button>
        </form>
        <div class="register">
            <p>Don't have an account? <a href="register.php">Register here</a></p>
        </div>
        <div class="home">
            <button onclick="window.location.href='index.php'">Back to Home</button>
        </div>
    </div>
</body>
</html>