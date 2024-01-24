<?php
include('connection.php');
$error = "";

$userQuery = "SELECT User_ID FROM user";
$userResult = mysqli_query($conn, $userQuery);

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $user_id = mysqli_real_escape_string($conn, $_POST["user_id"]);
    $playlist_name = mysqli_real_escape_string($conn, $_POST["playlist_name"]);
    $ispublic = mysqli_real_escape_string($conn, $_POST["ispublic"]);

    // Check if playlist_name already exists for the given user
    $checkPlaylistQuery = "SELECT * FROM playlist WHERE User_ID = '$user_id' AND Playlist_Name = '$playlist_name'";
    $checkPlaylistResult = mysqli_query($conn, $checkPlaylistQuery);

    if (mysqli_num_rows($checkPlaylistResult) > 0) {
        header('location:duplicate.php');
    } else {
        // Insert new entry into the 'playlists' table
        $insertPlaylist = "INSERT INTO playlist (User_ID, Playlist_Name, isPublic) VALUES ('$user_id', '$playlist_name', '$ispublic')";

        if ($conn->query($insertPlaylist) === TRUE) {
            // Display success popup
echo "<script>window.location.href = 'playlist.php?success=1';</script>";
        } else {
            echo "Error: " . $insertPlaylist . "<br>" . $conn->error;
        }
    }
}

// Close the database connection
mysqli_close($conn);
?>
