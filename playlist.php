<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Playlist Management</title>
    <script>
        function showSuccessPopup() {
            document.getElementById('successPopup').style.display = 'block';
        }

        function closePopup() {
            document.getElementById('successPopup').style.display = 'none';
            window.location.href = 'playlist.php'; // Redirect to the desired page after closing the popup
        }
    </script>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f5f5f5;
            background: url("/DB/images/playlist.jpg") center/cover fixed;
            margin: 0;
            padding: 0;
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100vh;
        }

        .container {
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        form {
            max-width: 400px;
            width: 100%;
            margin-bottom: 20px;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
            background-color: #fff;
        }

        label {
            display: block;
            margin: 10px 0 5px;
            font-weight: bold;
            color: #333;
        }

        select,
        input {
            width: 100%;
            padding: 10px;
            margin: 5px 0 15px;
            box-sizing: border-box;
            border: 1px solid #ddd;
            border-radius: 5px;
        }

        select:focus,
        input:focus {
            outline: none;
            border-color: #4caf50;
        }

        button {
            background-color: #4caf50;
            color: #fff;
            padding: 12px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            width: 100%;
            transition: background-color 0.3s;
        }

        button:hover {
            background-color: #45a049;
        }

        .popup {
            display: none;
            position: fixed;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            padding: 20px;
            background-color: #fff;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.2);
            border-radius: 8px;
            z-index: 1000;
        }

        .popup-content {
            text-align: center;
        }

        .close-btn {
            background-color: #4caf50;
            color: #fff;
            padding: 8px 16px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }
    </style>
</head>

<body>
    <div class="container">
        <form method="post" action="displayPlaylist.php">
            <button type="submit" value="d">Display Playlist</button>
        </form>
        <form method="post" action="playlistprocess.php" onsubmit="showSuccessPopup();">
            <label for="user_id">User ID:</label>
            <select id="user_id" name="user_id" required>
                <?php
                include('connection.php');
                $userQuery = "SELECT User_ID FROM user";
                $userResult = mysqli_query($conn, $userQuery);

                while ($row = mysqli_fetch_assoc($userResult)) {
                    echo "<option value='{$row['User_ID']}'>{$row['User_ID']}</option>";
                }

                mysqli_close($conn);
                ?>
            </select>

            <label for="playlist_name">Playlist Name:</label>
            <input type="text" id="playlist_name" name="playlist_name" required>

            <label for="ispublic">Is Public:</label>
            <select id="ispublic" name="ispublic" required>
                <option value="1">Yes</option>
                <option value="0">No</option>
            </select>

            <button type="submit">Create Playlist</button>
        </form>

        <div id="successPopup" class="popup">
            <div class="popup-content">
                <p>Playlist added successfully!</p>
                <button class="close-btn" onclick="closePopup()">Close</button>
            </div>
        </div>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const urlParams = new URLSearchParams(window.location.search);
            const successParam = urlParams.get('success');

            if (successParam === '1') {
                showSuccessPopup();
            }
        });
    </script>
</body>

</html>
