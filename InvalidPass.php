<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Error Page</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100vh;
            background-color: #f8f8f8;
            margin: 0;
        }

        .error-container {
            text-align: center;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.2);
            background-color: #fff;
        }

        h1 {
            color: #e74c3c; /* Red color for the heading */
        }

        p {
            color: #333;
            margin-bottom: 20px;
        }

        a {
            color: #3498db; /* Blue color for the link */
            text-decoration: none;
            font-weight: bold;
        }

        a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>

    <div class="error-container">
        <h1>Error</h1>
        <p>Invalid Username\Password</p>
        <p><a href="login.php">Go back</a></p>
    </div>

</body>
</html>
