<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Add and Display Songs</title>
  <link rel="stylesheet" href="songs.css">
  <style>
    body {
      font-family: "Arial", sans-serif;
      margin-top:600px;
      padding: 0;
      display: flex;
      align-items: center;
      justify-content: center;
      flex-direction: column;
      min-height: 100vh;
      background: url("/DB/images/songs.jpg") center/cover fixed;
    }

    .container {
      text-align: center;
      display: flex;
      flex-wrap: wrap;
      gap: 10px;
      justify-content: center;
      align-items: center;
      flex-direction: column;
    }

    .card {
      position: relative;
      background-color: rgba(255, 255, 255, 0.1);
      padding: 30px;
      border-radius: 10px;
      box-shadow: 0 0 20px rgba(0, 0, 0, 0.2);
      max-width: 450px;
      width: 100%;
      margin-bottom: 20px;
      transition: background-color 0.3s, transform 0.3s, box-shadow 0.3s;
    }

    .card:hover {
      background-color: #fff;
      transform: scale(1.02);
      box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
    }

    .carousel {
      width: 100%;
      max-width: 800px;
      overflow: hidden;
      margin-top: 30px;
      border-radius: 10px;
      box-shadow: 0 0 20px rgba(0, 0, 0, 0.5);
    }

    .carousel-inner {
      display: flex;
      transition: transform 0.5s ease-in-out;
    }

    .carousel-item {
      min-width: 100%;
      box-sizing: border-box;
      background-color: rgba(255, 255, 255, 0.9);
      padding: 20px;
      text-align: center;
      border-radius: 10px;
    }

    .carousel-item img {
      max-width: 100%;
      border-radius: 5px;
    }

    .carousel-button {
      cursor: pointer;
      background: none;
      border: none;
      outline: none;
      font-size: 24px;
      color: #333;
      margin-top: 20px;
    }

    .carousel-button:hover {
      color: #da1b60;
    }
  </style>
</head>
<body>

  <div class="container">
    <div class="card">
      <form method="post" action="songsProcess.php" class="song-form">
        <label for="release_date">Release Date:</label>
        <input type="date" name="release_date" required>
        <label for="song_title">Song Title:</label>
        <input type="text" name="song_title" required>
        <input type="submit" name="addButton" value="Add Song">
      </form>
    </div>

    <div class="card">
      <form method="get" action="displaySongs.php" class="display-form">
        <input type="submit" name="displayButton" value="Display Songs">
      </form>
    </div>

    <div class="card">
      <form method="post" action="songsProcess.php" class="main-form">
        <input type="submit" name="main" value="Main Menu">
      </form>
    </div>

    <div class="card">
      <form action="playlist.php">
        <input type="submit" name="playlist" value="Create Playlist">
      </form>
    </div>

    <!-- Carousel Section -->
    <div class="card carousel">
      <div class="carousel-inner">
        <!-- Trending Song Carousel Items -->
        <div class="carousel-item">
          <img src="tr1.jpeg" width="65%" height="65%" alt="Trending Song 1">
          <h3>Starboy</h3>
          <p>The Weekend</p>
        </div>
        <div class="carousel-item">
          <img src="tr2.jpeg" width="65%" height="65%" alt="Trending Song 2">
          <h3>MINA MINA</h3>
          <p>King Of Pirates</p>
        </div>
        <div class="carousel-item">
          <img src="tr3.jpeg" width="65%" height="65%"  alt="Trending Song 3">
          <h3>Husn</h3>
          <p>Anuv Jain</p>
        </div>
        <!-- Add more carousel items as needed -->
      </div>
      <!-- Carousel Navigation Buttons -->
      <button class="carousel-button" onclick="prevSlide()">❮</button>
      <button class="carousel-button" onclick="nextSlide()">❯</button>
    </div>
  </div>

  <script>
    let currentIndex = 0;
    const totalItems = document.querySelectorAll('.carousel-item').length;

    function nextSlide() {
      currentIndex = (currentIndex + 1) % totalItems;
      updateCarousel();
    }

    function prevSlide() {
      currentIndex = (currentIndex - 1 + totalItems) % totalItems;
      updateCarousel();
    }

    function updateCarousel() {
      const carouselInner = document.querySelector('.carousel-inner');
      const itemWidth = document.querySelector('.carousel-item').offsetWidth;
      carouselInner.style.transform = `translateX(${-currentIndex * itemWidth}px)`;
    }
  </script>
</body>
</html>
