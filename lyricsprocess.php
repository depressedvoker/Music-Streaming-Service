<?php
include('connection.php');

// Initialize variables for error messages
$error = "";

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Validate and sanitize user inputs (you may enhance this based on your requirements)
    $Song_ID = mysqli_real_escape_string($conn, $_POST["song_id"]);
    $Release_Date = mysqli_real_escape_string($conn, $_POST["release_date"]);
    $Song_Title = mysqli_real_escape_string($conn, $_POST["song_title"]);
    $Lyric_ID = mysqli_real_escape_string($conn, $_POST["lyric_id"]);
    $Language_1 = mysqli_real_escape_string($conn, $_POST["language_1"]);
    $Language_2 = mysqli_real_escape_string($conn, $_POST["language_2"]);
    $Language_3 = mysqli_real_escape_string($conn, $_POST["language_3"]);

    // Check if the song ID already exists in the 'songs' table
    $checkDuplicateSong = "SELECT * FROM songs WHERE song_id = '$Song_ID'";
    $resultDuplicateSong = $conn->query($checkDuplicateSong);

    if ($resultDuplicateSong->num_rows > 0) {
        header("location:error.php");
    } else {
        // Check if the lyric ID already exists in the 'lyrics' table
        $checkDuplicateLyric = "SELECT * FROM lyrics WHERE lyric_id = '$Lyric_ID'";
        $resultDuplicateLyric = $conn->query($checkDuplicateLyric);

        if ($resultDuplicateLyric->num_rows > 0) {
            header("location:error.php");
        } else {
            // Insert new entry into the 'lyrics' table
            $insertLyrics = "INSERT INTO lyriclanguage (lyric_id, language_1, language_2, language_3) VALUES ('$Lyric_ID', '$Language_1', '$Language_2', '$Language_3')";

            // Insert new entry into the 'songs' table
            $insertSongs = "INSERT INTO songs (song_id, Release_Date, song_title) VALUES ('$Song_ID', '$Release_Date', '$Song_Title')";

            if ($conn->query($insertSongs) === TRUE) {
                header("location:Subscription.php");
            } else {
                header("location:error.php");
            }
        }
    }

    // Close the database connection
    $conn->close();
}
?>
