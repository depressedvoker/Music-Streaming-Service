<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        table {
  width: 100%;
  border-collapse: collapse;
  margin-top: 20px;
  box-shadow: 0 0 20px rgba(0, 0, 0, 0.2);
  overflow: hidden;
  border-radius: 10px;
  overflow: hidden;
  border: 1px solid #ddd;
}
body
{
  background-color: #fff;
}
th,
td {
  padding: 12px;
  text-align: left;
  border-bottom: 1px solid #ddd;
}

th {
  background-color: #4caf50;
  color: #fff;
  font-weight: bold;
  position: relative;
}

th:hover {
  background-color: #45a049;
}

/* Alternate row background color */
tr:nth-child(even) {
  background-color: #f5f5f5;
}

/* Hover effect on table rows */
tr:hover {
  background-color: #ddd;
  transform: scale(1.01);
  box-shadow: 0 0 20px rgba(0, 0, 0, 0.5);
  transition: background-color 0.3s, transform 0.3s, box-shadow 0.3s;
}

/* Animation for table header */
@keyframes thBlink {
  0%,
  100% {
    opacity: 0.8;
  }
  50% {
    opacity: 0;
  }
}

th:hover::before {
  content: "";
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  background: linear-gradient(to right, #00ffff, #ffff00);
  animation: thBlink 1s infinite alternate;
  z-index: -1;
}
    </style>
</head>
<body>
    <?php
include('connection.php');
$sql = "SELECT * FROM songs";
$result = $conn->query($sql);
if(isset($_GET['del']))
{
  $song_id=$_GET['del'];
  mysqli_query($conn,"delete from songs where song_id='$song_id'");
  header('displaySongs.php');
}
if ($result === false) {
    // Check for SQL query execution error
    echo "Error: " . $conn->error;
} else {
    if ($result->num_rows > 0) {
    echo "<table>";
    echo "<tr><th>Song ID</th><th>Release Date</th><th>Song Title</th><th>Action</th></tr>";

    while ($row = $result->fetch_assoc()) {
        echo "<tr>";
        echo "<td>" . $row['Song_ID'] . "</td>";
        echo "<td>" . $row['Release_Date'] . "</td>";
        echo "<td>" . $row['Song_title'] . "</td>";
        echo "<td><a href='displaySongs.php?del=" . $row['Song_ID'] . "'>Delete</a></td>";
        echo "</tr>";
    }
    echo "</table>";
} else {
    echo "No songs found";
}
}

$conn->close();
?>

</body>
</html>