<?php
include("connection.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="login.css">
</head>
<body>
    <div id="form">
        <h1>Login To Meloflow</h1>
        <form name="form" action="loginProcess.php" onsubmit="return isValid()" method="POST">
            <label>Username: </label>
            <input type="text" id="user" name="user" required><br><br>
            <label>Password: </label>
            <input type="password" id="pass" name="pass" required><br><br>
            <input type="submit" id="btn" value="Login" name="submit">
            <img src="meloflow.jpeg" alt="Square Image" class="square-image">
        </form>
    </div>
    <script src="script.js"></script>
</body>
</html>
