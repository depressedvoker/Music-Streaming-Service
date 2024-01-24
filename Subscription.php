<!-- subscription.php -->

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Subscription Form</title>
  <style>
    /* styles.css */

body {
  font-family: "Arial", sans-serif;
  margin: 0;
  padding: 0;
  display: flex;
  flex-direction: column;
  align-items: center;
  justify-content: center;
  height: 100vh;
  background: url("/DB/images/subscription.jpg") center/cover fixed;
    fixed;
  background-blend-mode: overlay;
  background-color: rgba(0, 0, 0, 0.5);
}

.form-container {
  background-color: #fff;
  border-radius: 8px;
  box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
  padding: 20px;
  margin-top: 20px;
  text-align: center;
}

h2 {
  color: #333;
}

label {
  display: block;
  margin-top: 10px;
  font-weight: bold;
}

select,
input {
  width: 100%;
  padding: 8px;
  margin-top: 5px;
  box-sizing: border-box;
}

button {
  background-color: #3498db;
  color: #fff;
  padding: 10px;
  margin-top: 15px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
  transition: background-color 0.3s ease, transform 0.3s ease,
    box-shadow 0.3s ease;
}

button:hover {
  background-color: #2980b9;
  transform: scale(1.05);
  box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
}

.card-container {
  display: flex;
  justify-content: center;
  margin-top: 20px;
}

.card {
  border-radius: 8px;
  box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
  padding: 20px;
  margin: 0 10px;
  text-align: center;
  transition: transform 0.3s ease-in-out, box-shadow 0.3s ease, background-color 0.3s ease;
}

.card:hover {
  transform: scale(1.05);
  box-shadow: 0 8px 16px rgba(0, 0, 0, 0.4);
  background-color: #f9f9f9;
}

.card h3 {
  color: #333;
}

/* Add specific styles for each card */
#freeCard {
  border: 3px solid #000;
  background-color: #cd853f; /* Lighter Bronze color */
  color: #000;
  background-image: linear-gradient(45deg, #cd853f 50%, #a86942 50%);
  background-size: 200% 100%;
  background-position: right bottom;
  transition: background-position 0.3s ease-in-out, box-shadow 0.3s ease;
  box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
}

#freeCard:hover {
  background-position: left bottom;
  box-shadow: 0 8px 16px rgba(0, 0, 0, 0.4);
}



#goldCard {
  border: 3px solid #000;
  background-color: #ffd700;
  color: #000;
  background-image: linear-gradient(45deg, #ffd700 50%, #ffeb3b 50%);
  background-size: 200% 100%;
  background-position: right bottom;
  transition: background-position 0.3s ease-in-out, box-shadow 0.3s ease;
  box-shadow: 0 4px 8px rgba(255, 223, 0, 0.2);
}

#goldCard:hover {
  background-position: left bottom;
  box-shadow: 0 8px 16px rgba(255, 223, 0, 0.4);
}


#platinumCard {
  border: 3px solid #000;
  background-color: #e5e4e2;
  color: #fff;
  background-image: linear-gradient(45deg, #e5e4e2 50%, #c0c0c0 50%);
  background-size: 200% 100%;
  background-position: right bottom;
  transition: background-position 0.3s ease-in-out, box-shadow 0.3s ease;
  box-shadow: 0 4px 8px rgba(229, 228, 226, 0.2);
}

#platinumCard:hover {
  background-position: left bottom;
  box-shadow: 0 8px 16px rgba(229, 228, 226, 0.4);
}

  </style>
</head>
<body>

  <div class="card-container">
    <div class="card" id="freeCard">
      <img src="free.jpg" alt="Free Subscription Image"width=400px height=300px>
      <h3>NS</h3>
      <p>Type: Free</p>
      <p>Starting : Today<span id="freeStartDate"></span></p>
      <p>Never Ending</p>
      <button onclick="subscribe('Free')">Subscribe</button>
    </div>

    <div class="card" id="goldCard">
      <img src="gold.jpeg" alt="Gold Subscription Image" width=400px height=300px>
      <h3>NS+</h3>
      <p>Type: Gold</p>
      <p>Starting : Today<span id="goldStartDate"></span></p>
      <p>Span : 1 Month<span id="goldEndDate"></span></p>
      <button onclick="subscribe('Gold')">Subscribe</button>
    </div>

    <div class="card" id="platinumCard">
      <img src="plat.jpg" alt="Platinum Subscription Image" width=400px height=300px>
      <h3>NS++</h3>
      <p>Type: Platinum</p>
      <p>Starting : Today<span id="platinumStartDate"></span></p>
      <p>Span : 3 Months<span id="platinumEndDate"></span></p>
      <button onclick="subscribe('Platinum')">Subscribe</button>
    </div>
  </div>

  <form id="subscriptionForm" style="display: none;">
    <label for="subscriptionId">Subscription ID:</label>
    <input type="text" id="subscriptionId" name="subscriptionId" readonly>

    <label for="type">Subscription Type:</label>
    <input type="text" id="type" name="type" readonly>

    <label for="startDate">Start Date:</label>
    <input type="date" id="startDate" name="startDate" readonly>

    <label for="endDate">End Date:</label>
    <input type="date" id="endDate" name="endDate" readonly>

    <button type="button" onclick="submitSubscription()">Subscribe</button>
  </form>

  <script>
  function subscribe(type) {
    var subscriptionId = Math.floor(Math.random() * 1000); // Unique ID generation
    var startDate = new Date().toISOString().split('T')[0];
    var endDate = calculateEndDate(type);

    document.getElementById("subscriptionId").value = subscriptionId;
    document.getElementById("type").value = type;
    document.getElementById("startDate").value = startDate;
    document.getElementById("endDate").value = endDate;

    // Submit the form directly without displaying it
    submitSubscription();
  }

  function calculateEndDate(type) {
    var endDate = new Date();
    if (type === "Gold") {
      endDate.setMonth(endDate.getMonth() + 1);
    } else if (type === "Platinum") {
      endDate.setMonth(endDate.getMonth() + 3);
    }
    return endDate.toISOString().split('T')[0];
  }

  function submitSubscription() {
    // Submit the subscription details to subscriptionProcess.php
    var form = document.getElementById("subscriptionForm");
    form.action = "subscriptionProcess.php";
    form.method = "post";
    form.submit();
  }
  </script>
</body>
</html>
