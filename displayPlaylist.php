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
$playlist_id="";
include('connection.php');
$sql = "SELECT * FROM Playlist";
$result = $conn->query($sql);
if(isset($_GET['del']))
{
  $playlist_id=$_GET['del'];
  mysqli_query($conn,"delete from playlist where Playlist_ID='$playlist_id'");
  header('displayPlaylist.php');
}if ($result === false) {
    // Check for SQL query execution error
    echo "Error: " . $conn->error;
  } else {
  $iconSize = 'width="20" height="20"';
    if ($result->num_rows > 0) {
        echo "<table>";
        echo "<tr><th>Playlist Name</th><th>Public</th><th>Action</th></tr>";
        while ($row = $result->fetch_assoc()) {
            echo "<tr>";
            echo "<td>" . $row['Playlist_Name'] . "</td>";

                echo "<td>";

if ($row['isPublic'] == 1) {
    // Playlist is public, display public icon
    echo "<svg xmlns='http://www.w3.org/2000/svg' fill='none' viewBox='0 0 24 24' stroke-width='1.5' stroke='currentColor' class='w-6 h-6' $iconSize>
              <path stroke-linecap='round' stroke-linejoin='round' d='M13.5 10.5V6.75a4.5 4.5 0 1 1 9 0v3.75M3.75 21.75h10.5a2.25 2.25 0 0 0 2.25-2.25v-6.75a2.25 2.25 0 0 0-2.25-2.25H3.75a2.25 2.25 0 0 0-2.25 2.25v6.75a2.25 2.25 0 0 0 2.25 2.25Z' />
            </svg>";
} else {
    // Playlist is private, display private icon
    echo "<svg xmlns='http://www.w3.org/2000/svg' fill='none' viewBox='0 0 24 24' stroke-width='1.5' stroke='currentColor' class='w-6 h-6' $iconSize>
              <path stroke-linecap='round' stroke-linejoin='round' d='M16.5 10.5V6.75a4.5 4.5 0 1 0-9 0v3.75m-.75 11.25h10.5a2.25 2.25 0 0 0 2.25-2.25v-6.75a2.25 2.25 0 0 0-2.25-2.25H6.75a2.25 2.25 0 0 0-2.25 2.25v6.75a2.25 2.25 0 0 0 2.25 2.25Z' />
            </svg>";
}

echo "</td>";
            echo "<td><a href='displayPlaylist.php?del=" . $row['Playlist_ID'] . "'>Delete</a></td>";
            echo "</tr>";
        }
        echo "</table>";
    } else {
        header('Location: noplaylist.php');
    }
}


$conn->close();
?>

</body>
</html>