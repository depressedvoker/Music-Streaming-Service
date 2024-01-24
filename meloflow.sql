-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 24, 2024 at 10:24 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `meloflow`
--

-- --------------------------------------------------------

--
-- Table structure for table `album`
--

CREATE TABLE `album` (
  `album_id` int(11) NOT NULL,
  `Album_Name` varchar(255) DEFAULT NULL,
  `Album_ReleaseDate` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `album`
--

INSERT INTO `album` (`album_id`, `Album_Name`, `Album_ReleaseDate`) VALUES
(1, 'Ocean', '2018-06-08'),
(2, 'After Hours', '2020-03-20'),
(3, 'Scorpion', '2018-06-29'),
(4, 'When We All Fall Asleep, Where Do We Go?', '2019-03-29'),
(5, 'Baarishein', '2019-03-01'),
(6, 'Starboy', '2016-11-25'),
(7, 'Views', '2016-04-29'),
(8, 'Happier Than Ever', '2021-07-30'),
(9, 'Maula', '2020-01-23'),
(10, 'Beauty Behind the Madness', '2015-08-28'),
(11, 'Take Care', '2011-11-15'),
(12, 'Don\'t Smile at Me', '2017-08-11'),
(13, 'Baatein', '2018-03-01'),
(14, 'My Dear Melancholy', '2018-03-30'),
(15, 'Nothing Was the Same', '2013-09-24'),
(16, 'When We All Fall Asleep, Where Do We Go? (Deluxe Edition)', '2019-03-29'),
(17, 'Yaara', '2019-10-14'),
(18, 'Kiss Land', '2013-09-10'),
(19, 'If You\'re Reading This It\'s Too Late', '2015-02-13'),
(20, 'Don\'t Smile at Me (Expanded Edition)', '2017-11-24');

-- --------------------------------------------------------

--
-- Table structure for table `albumartist`
--

CREATE TABLE `albumartist` (
  `Album_ID` int(10) NOT NULL,
  `Artist_ID` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `artist`
--

CREATE TABLE `artist` (
  `Artist_ID` int(10) NOT NULL,
  `Artist_Name` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `artist`
--

INSERT INTO `artist` (`Artist_ID`, `Artist_Name`) VALUES
(1, 'Anuv Jain'),
(2, 'The Weeknd'),
(3, 'Drake'),
(4, 'Billie Eilish'),
(5, 'Anuv Jain'),
(6, 'The Weeknd'),
(7, 'Drake'),
(8, 'Billie Eilish'),
(9, 'Anuv Jain'),
(10, 'The Weeknd'),
(11, 'Drake'),
(12, 'Billie Eilish'),
(13, 'Anuv Jain'),
(14, 'The Weeknd'),
(15, 'Drake'),
(16, 'Billie Eilish'),
(17, 'Anuv Jain'),
(18, 'The Weeknd'),
(19, 'Drake'),
(20, 'Billie Eilish');

-- --------------------------------------------------------

--
-- Table structure for table `artistgenre`
--

CREATE TABLE `artistgenre` (
  `Artist_ID` int(10) NOT NULL,
  `Genre_ID` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `genre`
--

CREATE TABLE `genre` (
  `Genre_ID` int(10) NOT NULL,
  `Genre_Description` varchar(255) DEFAULT NULL,
  `Genre_Name` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `genre`
--

INSERT INTO `genre` (`Genre_ID`, `Genre_Description`, `Genre_Name`) VALUES
(1, 'A genre characterized by guitars and strong rhythms', 'Rock'),
(2, 'Popular music with catchy melodies and broad appeal', 'Pop'),
(3, 'A genre featuring rhythmic and rhyming speech', 'Hip-Hop'),
(4, 'Music produced using electronic technology', 'Electronic'),
(5, 'Improvisational and expressive musical style', 'Jazz'),
(6, 'Rooted in traditional folk and Western music', 'Country'),
(7, 'Rhythm and Blues with soulful vocals', 'R&B'),
(8, 'Originating from Jamaica with a distinctive rhythm', 'Reggae'),
(9, 'Formal and structured compositions', 'Classical'),
(10, 'Characterized by aggressive and heavy sound', 'Metal'),
(11, 'Expressive musical form originating from African-American communities', 'Blues'),
(12, 'Groovy and danceable music with a strong rhythm', 'Funk'),
(13, 'Emotional and powerful vocal performances', 'Soul'),
(14, 'Independent and non-mainstream music', 'Indie'),
(15, 'Diverse and experimental musical styles', 'Alternative'),
(16, 'A fusion of Latin and Caribbean styles', 'Reggaeton'),
(17, 'Popular music originating from South Korea', 'K-Pop'),
(18, 'Dance-oriented music with a steady beat', 'Disco'),
(19, 'Music with religious and spiritual themes', 'Gospel'),
(20, 'Incorporating elements from various global cultures', 'World');

-- --------------------------------------------------------

--
-- Table structure for table `lryiclanguage`
--

CREATE TABLE `lryiclanguage` (
  `Lyric_ID` int(10) NOT NULL,
  `Language_1` varchar(10) DEFAULT NULL,
  `Language_2` varchar(10) DEFAULT NULL,
  `Language_3` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `lyrics`
--

CREATE TABLE `lyrics` (
  `Lyric_ID` int(10) NOT NULL,
  `Song_ID` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `playlist`
--

CREATE TABLE `playlist` (
  `Playlist_ID` int(11) NOT NULL,
  `User_ID` int(10) NOT NULL,
  `Playlist_Name` varchar(255) DEFAULT NULL,
  `isPublic` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `playlist`
--

INSERT INTO `playlist` (`Playlist_ID`, `User_ID`, `Playlist_Name`, `isPublic`) VALUES
(26, 23, '123', 1);

-- --------------------------------------------------------

--
-- Table structure for table `playlistsongs`
--

CREATE TABLE `playlistsongs` (
  `Playlist_ID` int(10) NOT NULL,
  `Song_ID` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `songgenre`
--

CREATE TABLE `songgenre` (
  `Song_ID` int(10) NOT NULL,
  `Genre_ID` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `songs`
--

CREATE TABLE `songs` (
  `Song_ID` int(11) NOT NULL,
  `Release_Date` date DEFAULT NULL,
  `Song_title` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `songs`
--

INSERT INTO `songs` (`Song_ID`, `Release_Date`, `Song_title`) VALUES
(1, '2023-01-01', 'Dancing in the Moonlight'),
(2, '2023-02-15', 'Sweet Melody'),
(3, '2023-03-10', 'Rhythm of the Night'),
(4, '2023-04-05', 'Electric Dreams'),
(5, '2023-05-20', 'City Lights'),
(6, '2023-06-12', 'Sunset Serenade'),
(7, '2023-07-08', 'Midnight Groove'),
(8, '2023-08-25', 'Summer Breeze'),
(9, '2023-09-18', 'Eternal Echoes'),
(10, '2023-10-03', 'Starry Nights'),
(11, '2023-11-19', 'Ocean Waves'),
(12, '2023-12-24', 'Winter Wonderland'),
(13, '2024-01-08', 'Crystal Dreams'),
(14, '2024-02-14', 'Love Ballad'),
(15, '2024-03-22', 'Enchanted Forest'),
(16, '2024-04-30', 'Celestial Harmony'),
(17, '2024-05-15', 'Golden Memories'),
(18, '2024-06-07', 'Silent Serenity'),
(19, '2024-07-12', 'Mystic Whispers'),
(20, '2024-08-28', 'Infinite Horizons'),
(675, '2024-01-17', '123');

-- --------------------------------------------------------

--
-- Table structure for table `subscription`
--

CREATE TABLE `subscription` (
  `Subscription_ID` int(10) NOT NULL,
  `Type` varchar(50) DEFAULT NULL,
  `End_Date` date DEFAULT NULL,
  `Start_Date` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `subscription`
--

INSERT INTO `subscription` (`Subscription_ID`, `Type`, `End_Date`, `Start_Date`) VALUES
(422, 'Free', '2024-01-19', '2024-01-19'),
(568, 'Platinum', '2024-04-19', '2024-01-19'),
(809, 'Free', '2024-01-19', '2024-01-19'),
(911, 'Free', '2024-01-19', '2024-01-19');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `User_ID` int(10) NOT NULL,
  `Subscription_ID` int(10) DEFAULT NULL,
  `First_Name` varchar(255) DEFAULT NULL,
  `Last_Name` varchar(255) DEFAULT NULL,
  `Password` varchar(55) DEFAULT NULL,
  `Username` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`User_ID`, `Subscription_ID`, `First_Name`, `Last_Name`, `Password`, `Username`) VALUES
(23, 911, 'umer', 'faroq', '123', 'um3r'),
(122, 422, 'ja', 'wad', '1122', 'jawd');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `album`
--
ALTER TABLE `album`
  ADD PRIMARY KEY (`album_id`);

--
-- Indexes for table `albumartist`
--
ALTER TABLE `albumartist`
  ADD PRIMARY KEY (`Album_ID`,`Artist_ID`),
  ADD KEY `Artist_ID` (`Artist_ID`);

--
-- Indexes for table `artist`
--
ALTER TABLE `artist`
  ADD PRIMARY KEY (`Artist_ID`);

--
-- Indexes for table `artistgenre`
--
ALTER TABLE `artistgenre`
  ADD PRIMARY KEY (`Artist_ID`,`Genre_ID`),
  ADD KEY `Genre_ID` (`Genre_ID`);

--
-- Indexes for table `genre`
--
ALTER TABLE `genre`
  ADD PRIMARY KEY (`Genre_ID`);

--
-- Indexes for table `lryiclanguage`
--
ALTER TABLE `lryiclanguage`
  ADD PRIMARY KEY (`Lyric_ID`);

--
-- Indexes for table `lyrics`
--
ALTER TABLE `lyrics`
  ADD PRIMARY KEY (`Lyric_ID`,`Song_ID`),
  ADD KEY `fk_Lyrics_SongID` (`Song_ID`);

--
-- Indexes for table `playlist`
--
ALTER TABLE `playlist`
  ADD PRIMARY KEY (`Playlist_ID`,`User_ID`),
  ADD KEY `User_ID` (`User_ID`);

--
-- Indexes for table `playlistsongs`
--
ALTER TABLE `playlistsongs`
  ADD PRIMARY KEY (`Playlist_ID`,`Song_ID`),
  ADD KEY `fk_PlaylistSongs_SongID` (`Song_ID`);

--
-- Indexes for table `songgenre`
--
ALTER TABLE `songgenre`
  ADD PRIMARY KEY (`Song_ID`,`Genre_ID`),
  ADD KEY `Genre_ID` (`Genre_ID`);

--
-- Indexes for table `songs`
--
ALTER TABLE `songs`
  ADD PRIMARY KEY (`Song_ID`);

--
-- Indexes for table `subscription`
--
ALTER TABLE `subscription`
  ADD PRIMARY KEY (`Subscription_ID`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`User_ID`),
  ADD KEY `Subscription_ID` (`Subscription_ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `album`
--
ALTER TABLE `album`
  MODIFY `album_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `playlist`
--
ALTER TABLE `playlist`
  MODIFY `Playlist_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `songs`
--
ALTER TABLE `songs`
  MODIFY `Song_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=677;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `albumartist`
--
ALTER TABLE `albumartist`
  ADD CONSTRAINT `albumartist_ibfk_2` FOREIGN KEY (`Artist_ID`) REFERENCES `artist` (`Artist_ID`),
  ADD CONSTRAINT `your_foreign_key_name` FOREIGN KEY (`Album_ID`) REFERENCES `album` (`album_id`);

--
-- Constraints for table `artistgenre`
--
ALTER TABLE `artistgenre`
  ADD CONSTRAINT `artistgenre_ibfk_1` FOREIGN KEY (`Artist_ID`) REFERENCES `artist` (`Artist_ID`),
  ADD CONSTRAINT `artistgenre_ibfk_2` FOREIGN KEY (`Genre_ID`) REFERENCES `genre` (`Genre_ID`);

--
-- Constraints for table `lryiclanguage`
--
ALTER TABLE `lryiclanguage`
  ADD CONSTRAINT `lryiclanguage_ibfk_1` FOREIGN KEY (`Lyric_ID`) REFERENCES `lyrics` (`Lyric_ID`);

--
-- Constraints for table `lyrics`
--
ALTER TABLE `lyrics`
  ADD CONSTRAINT `fk_Lyrics_SongID` FOREIGN KEY (`Song_ID`) REFERENCES `songs` (`Song_ID`);

--
-- Constraints for table `playlist`
--
ALTER TABLE `playlist`
  ADD CONSTRAINT `playlist_ibfk_1` FOREIGN KEY (`User_ID`) REFERENCES `user` (`User_ID`);

--
-- Constraints for table `playlistsongs`
--
ALTER TABLE `playlistsongs`
  ADD CONSTRAINT `fk_PlaylistSongs_SongID` FOREIGN KEY (`Song_ID`) REFERENCES `songs` (`Song_ID`);

--
-- Constraints for table `songgenre`
--
ALTER TABLE `songgenre`
  ADD CONSTRAINT `fk_SongGenre_SongID` FOREIGN KEY (`Song_ID`) REFERENCES `songs` (`Song_ID`),
  ADD CONSTRAINT `songgenre_ibfk_2` FOREIGN KEY (`Genre_ID`) REFERENCES `genre` (`Genre_ID`);

--
-- Constraints for table `user`
--
ALTER TABLE `user`
  ADD CONSTRAINT `user_ibfk_1` FOREIGN KEY (`Subscription_ID`) REFERENCES `subscription` (`Subscription_ID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
