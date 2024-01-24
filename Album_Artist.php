<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Artist and Album Display</title>
  <style>
    body {
  font-family: "Roboto", sans-serif;
  background: url("/DB/images/AlbumArtist.jpg") center/cover fixed;
  color: #ffffff;
  margin: 0;
  padding: 0;
}

.container {
  width: 80%;
  margin: 0 auto;
  padding: 20px;
  background-color: rgba(31, 31, 31, 0.8);
  box-shadow: 0 0 20px rgba(0, 0, 0, 0.3);
  border-radius: 10px;
  animation: fadeIn 1s ease-in-out;
}

@keyframes fadeIn {
  from {
    opacity: 0;
  }
  to {
    opacity: 1;
  }
}

h2 {
  text-align: center;
  color: #61dafb;
  animation: fadeIn 1s ease-in-out;
}

table {
  width: 100%;
  border-collapse: collapse;
  margin-top: 20px;
  border-radius: 10px;
  overflow: hidden;
  animation: fadeIn 1s ease-in-out;
}

th,
td {
  border: 1px solid #333;
  padding: 12px;
  text-align: left;
  transition: background-color 0.3s, color 0.3s, transform 0.3s;
}

th {
  background-color: #333;
  color: #61dafb;
}

tr {
  background-color: #2c2c2c;
  transition: background-color 0.3s;
}

tr:hover {
  background-color: #444;
  transform: scale(1.01);
}

@media screen and (max-width: 600px) {
  table {
    overflow-x: auto;
  }
}

  </style>
</head>
<body>

<div class="container">
    <h2>Artist and Album Display</h2>
    <?php include('Album_Artist_Display.php'); ?>
</div>
</body>
</html>
