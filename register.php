<!-- register.php -->

<!DOCTYPE html>
<html lang="en">
<head>
  <script>
    function togglePassword() {
      var passwordInput = document.getElementById("password");
      var passwordToggle = document.getElementById("password-toggle");

      if (passwordInput.type === "password") {
        passwordInput.type = "text";
        passwordToggle.textContent = "Hide";
      } else {
        passwordInput.type = "password";
        passwordToggle.textContent = "Show";
      }
    }
  </script>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="register.css">
  <title>User Registration Form</title>
  <style>
    body {
  margin: 0;
  padding: 0;
  display: flex;
  justify-content: center;
  align-items: center;
  height: 100vh;
  background: url("/DB/images/register.jpg") center/cover fixed;
  background-size: cover;
  background-position: center;
}

.form-container {
  background-color: #34495e; /* Dark grayish-blue background */
  border-radius: 8px;
  box-shadow: 0 0 20px rgba(0, 0, 0, 0.4);
  padding: 20px;
  width: 300px;
  text-align: center;
  transition: transform 0.3s ease, box-shadow 0.3s ease;
}

.form-container:hover {
  transform: scale(1.02);
  box-shadow: 0 0 30px rgba(0, 0, 0, 0.6);
}

h2 {
  color: #ecf0f1; /* Light gray text */
  margin-bottom: 15px;
}

label {
  display: block;
  margin-top: 10px;
  font-weight: bold;
  color: #ecf0f1;
}

input {
  width: 100%;
  padding: 10px;
  margin-top: 5px;
  box-sizing: border-box;
  border: 1px solid #2ecc71; /* Green border */
  border-radius: 4px;
  transition: border-color 0.3s ease;
}

input:hover,
input:focus {
  border-color: #27ae60; /* Darker green on hover/focus */
}

.password-container {
  position: relative;
}

.password-input {
  width: calc(100% - 30px);
  padding: 10px;
  margin-top: 5px;
  box-sizing: border-box;
  border: 1px solid #2ecc71;
  border-radius: 4px;
  transition: border-color 0.3s ease;
}

.password-toggle {
  position: absolute;
  top: 50%;
  right: 5px;
  transform: translateY(-50%);
  cursor: pointer;
  color: #2ecc71; /* Green color for the eye icon */
}

button {
  background-color: #e74c3c; /* Red button */
  color: #fff;
  padding: 12px;
  margin-top: 15px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
  transition: background-color 0.3s ease;
}

button:hover {
  background-color: #c0392b; /* Darker red on hover */
}

  </style>
</head>
<body>

  <div class="form-container">
    <h2>User Registration</h2>
    <form id="registrationForm" onsubmit="return validateForm()" method="POST" action="registerProcess.php">
      <label for="userId">User ID:</label>
      <input type="text" id="userId" name="userId" required>

      <label for="subscriptionId">Subscription ID:</label>
      <!-- Automatically fill the subscription ID field from the query parameter -->
      <input type="text" id="subscriptionId" name="subscriptionId" value="<?php echo isset($_GET['subscriptionId']) ? $_GET['subscriptionId'] : ''; ?>" readonly>


      <label for="firstName">First Name:</label>
      <input type="text" id="firstName" name="firstName" required>

      <label for="lastName">Last Name:</label>
      <input type="text" id="lastName" name="lastName" required>

       <label for="password">Password:</label>
      <div class="password-container">
        <input type="password" id="password" name="password" required>
        <span id="password-toggle" class="password-toggle" onclick="togglePassword()">Show</span>
      </div>

      <label for="username">Username:</label>
      <input type="text" id="username" name="username" required>

      <button type="submit" name="save">Register</button>

    </form>
  </div>

</body>
</html>
