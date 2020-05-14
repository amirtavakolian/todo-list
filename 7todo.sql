-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 14, 2020 at 07:10 PM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `7todo`
--

-- --------------------------------------------------------

--
-- Table structure for table `folders`
--

CREATE TABLE `folders` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(128) NOT NULL,
  `user_id` int(11) NOT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `folders`
--

INSERT INTO `folders` (`id`, `name`, `user_id`, `created_at`) VALUES
(2, 'asd3', 3, '0000-00-00 00:00:00'),
(4, 'Family', 1, '0000-00-00 00:00:00'),
(5, 'Habbits', 1, '0000-00-00 00:00:00'),
(6, 'Sport', 1, '0000-00-00 00:00:00'),
(7, 'amir_sport', 2, '0000-00-00 00:00:00'),
(8, 'Amir_Family', 2, '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `tasks`
--

CREATE TABLE `tasks` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(512) NOT NULL,
  `user_id` int(11) UNSIGNED NOT NULL,
  `folder_id` int(11) UNSIGNED NOT NULL,
  `is_done` tinyint(1) UNSIGNED NOT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tasks`
--

INSERT INTO `tasks` (`id`, `title`, `user_id`, `folder_id`, `is_done`, `created_at`) VALUES
(5, 'salam', 3, 7, 0, '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(256) NOT NULL,
  `email` varchar(256) NOT NULL,
  `password` varchar(256) NOT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `created_at`) VALUES
(1, 'rezatva', 'rezatva@gmail.com', '$2y$10$ye/ld3NgYgBPuFXFkAJ0/OnOtZ2KremeOdLHyVPetNqDvWcbIJ/cS', '0000-00-00 00:00:00'),
(2, 'amir', 'amir@amir.com', '$2y$10$kLC9eSFJPPHV7TiIsALzde8RBXJ06gSIC9uuJe6UPgrVmUxHdw50m', '0000-00-00 00:00:00'),
(4, 'rezatva', 'rezatva1@gmail.com1', '$2y$10$ftBJNZGHqTGOKZvCQ/jWe.y1Lce56lVjVwW2hbfgEp9KZlMXkcVHG', '0000-00-00 00:00:00'),
(5, 'rezatva', 'rezatva123@gmail.com', '$2y$10$9Ygo7/1vDBSfzb9jTRgF7eMnl5QQ7FsKP2Cy8f0GK5vnKB6Cx9Xpa', '0000-00-00 00:00:00'),
(7, 'reza', 'reza@reza.com', '$2y$10$SQf4/6tb1kQcVjML.WYPTOCPfa/W19r8tl3ZsWPaGQjrooNC23fem', '0000-00-00 00:00:00'),
(8, 'aliar', 'aliar@aliar.com', 'aliar@aliar.com', '0000-00-00 00:00:00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `folders`
--
ALTER TABLE `folders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tasks`
--
ALTER TABLE `tasks`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `folders`
--
ALTER TABLE `folders`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `tasks`
--
ALTER TABLE `tasks`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
