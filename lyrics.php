<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Song Lyrics Table</title>
    <link rel="stylesheet" href="lyricscss.css">
</head>
<body>

    <h1>Song Lyrics Table</h1>

    <h2>Add New Entry</h2>
    <form action="lyricsprocess.php" method="post">
        <label for="song_id">Song ID:</label>
        <input type="text" name="song_id" required>

        <label for="release_date">Release Date:</label>
        <input type="text" name="release_date" required>

        <label for="song_title">Song Title:</label>
        <input type="text" name="song_title" required>

        <label for="lyric_id">Lyric ID:</label>
        <input type="text" name="lyric_id" required>

        <label for="language_1">Language 1:</label>
        <input type="text" name="language_1" required>

        <label for="language_2">Language 2:</label>
        <input type="text" name="language_2" required>

        <label for="language_3">Language 3:</label>
        <input type="text" name="language_3" required>

        <input type="submit" value="Add Entry">
    </form>

    <h2>Display Songs</h2>
    <form action="displaysongs.php" method="post">
        <input type="hidden" name="display_songs" value="true">
        <input type="submit" value="Display Songs">
    </form>

</body>
</html>
