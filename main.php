<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Home</title>
    <style>
      @font-face {
        font-family: "besttia-brush";
        src: url("besttia-brush.ttf") format("truetype");
      }

      body {
        margin: 0;
        padding: 0;
        display: flex;
        flex-direction: column;
        align-items: center;
        height: 100vh;
        background: url("/DB/images/mainBackground.jpg") center/cover fixed;
        background-blend-mode: overlay;
        background-color: rgba(0, 0, 0, 0.5);
        font-family: "Arial", sans-serif; /* Fallback font */
      }

      #branding {
        text-align: center;
        color: #fff;
        margin-bottom: 10px; /* Adjusted margin */
      }

      #branding h1 {
        font-size: 9em;
        margin-bottom: -40px; /* Adjusted margin */
        font-family: "besttia-brush", sans-serif;
        color: #fff;
        text-shadow: 3px 3px 5px rgba(0, 0, 0, 0.5);
      }

      #branding p {
        font-size: 2.1em;
        font-style: italic;
        text-shadow: 2px 2px 3px rgba(0, 0, 0, 0.3);
        margin: 0;
        color: #fff; /* Gold color for the subtitle */
        font-family: "besttia-brush", sans-serif; /* Apply the custom font */
      }

      .button-container {
        text-align: center;
      }

      button {
        background-color: #3498db;
        color: #fff;
        padding: 15px 30px;
        border: none;
        border-radius: 10px;
        margin: 0 10px;
        cursor: pointer;
        font-size: 20px;
        text-decoration: none;
        transition: background-color 0.3s ease, transform 0.3s ease,
          box-shadow 0.3s ease, color 0.3s ease;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
        outline: none;
        position: relative;
        overflow: hidden;
      }

      button:hover {
        background-color: #2980b9;
        transform: scale(1.05);
        box-shadow: 0 8px 16px rgba(0, 0, 0, 0.4);
        color: #fff;
      }

      a {
        color: inherit;
        text-decoration: none;
      }

      .login-button {
        background-color: #2ecc71;
      }

      .login-button:hover {
        background-color: #27ae60;
      }

      .register-button {
        background-color: #e74c3c;
      }

      .register-button:hover {
        background-color: #c0392b;
      }

      .display-button {
        background: linear-gradient(45deg, #f39c12, #e74c3c);
        transition: background 0.3s ease, transform 0.3s ease,
          box-shadow 0.3s ease;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
      }

      .display-button:hover {
        background: linear-gradient(45deg, #d35400, #c0392b);
        transform: scale(1.05);
        box-shadow: 0 8px 16px rgba(0, 0, 0, 0.4);
      }
    </style>
  </head>
  <body>
    <div id="branding">
      <h1>MELOFLOW</h1>
      <p>Where Your Music Finds Its Rhythm</p>
    </div>

    <p style="color: #fff; font-size: 1.2em; margin-bottom: 10px">
      Discover the world of MeloFlow:
    </p>

    <div class="button-container">
      <button class="login-button">
        <a href="login.php">Login</a>
      </button>
      <button class="register-button">
        <a href="Subscription.php">Register</a>
      </button>
      <button class="display-button">
        <a href="Album_Artist.php">Artist Album Display</a>
      </button>
    </div>
  </body>
</html>
