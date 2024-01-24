<?php
include('connection.php');

$sql = "SELECT a.Artist_id, a.Artist_Name, b.Album_id, b.Album_name
        FROM artist a
        INNER JOIN album b ON a.Artist_id = b.Album_id";
$result = $conn->query($sql);

if ($result === false) {
    // Check for SQL query execution error
    echo "Error: " . $conn->error;
} else {
    if ($result->num_rows > 0) {
        echo "<table>";
        echo "<tr><th>No.</th><th>Artist Name</th><th>Album Name</th></tr>";

        while ($row = $result->fetch_assoc()) {
            echo "<tr>";
            echo "<td>" . $row['Artist_id'] . "</td>";
            echo "<td>" . $row['Artist_Name'] . "</td>";
            //echo "<td>" . $row['Album_id'] . "</td>";
            echo "<td>" . $row['Album_name'] . "</td>";
            echo "</tr>";
        }
        echo "</table>";
    } else {
        echo "No records found";
    }
}

$conn->close();
?>
