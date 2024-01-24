<?php
include('connection.php');

if (isset($_POST['addButton'])) {
    $release_date = $_POST['release_date'];
    $song_title = $_POST['song_title'];

    // Check if the song title already exists
    $checkQuery = "SELECT 1 FROM songs WHERE song_title = ? LIMIT 1";
    $checkStatement = $conn->prepare($checkQuery);
    $checkStatement->bind_param("s", $song_title);
    $checkStatement->execute();
    $checkStatement->store_result();

    if ($checkStatement->num_rows === 0) {
        // Song title doesn't exist, proceed with insertion
        $insertQuery = "INSERT INTO songs (release_date, song_title) VALUES (?, ?)";
        $insertStatement = $conn->prepare($insertQuery);
        $insertStatement->bind_param("ss", $release_date, $song_title);

        if ($insertStatement->execute()) {
            sleep(1);
            echo "<script>window.location.href='displaySongs.php';</script>";
        } else {
            echo "<p>Error: " . $insertStatement->error . "</p>";
        }
        $insertStatement->close();
    } else {
        echo "<p>Song with the same title already exists!</p>";
    }

    $checkStatement->close();
}

if (isset($_POST['main'])){
    header("Location: main.php");
}
$conn->close();
?>
