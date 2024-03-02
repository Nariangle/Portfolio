-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 02, 2024 at 04:49 PM
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
-- Database: `eliportcms`
--

-- --------------------------------------------------------

--
-- Table structure for table `education`
--

CREATE TABLE `education` (
  `id` int(10) UNSIGNED NOT NULL,
  `schoolName` varchar(100) DEFAULT NULL,
  `course` varchar(100) DEFAULT NULL,
  `year` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `education`
--

INSERT INTO `education` (`id`, `schoolName`, `course`, `year`) VALUES
(10, 'Western Mindanao State University', 'Elementary', '2005-2011'),
(11, 'Western Mindanao State University', 'High School', '20011-2015'),
(13, 'Western Mindanao State University', 'BS Geodetic Engineering', '2015-2020 Discontinued'),
(14, 'Western Mindanao State University', 'BS Information Technology', '2020-Current');

-- --------------------------------------------------------

--
-- Table structure for table `portfolio`
--

CREATE TABLE `portfolio` (
  `id` int(11) NOT NULL,
  `title` varchar(300) DEFAULT NULL,
  `descript` longtext DEFAULT NULL,
  `img` varchar(300) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `portfolio`
--

INSERT INTO `portfolio` (`id`, `title`, `descript`, `img`) VALUES
(18, 'IT ELECTIVE 4 Completion Project', 'Improving existing website design using photoshop', 'MIDTERM.jpg'),
(19, 'IT ELECTIVE 4 Completion Project', 'Making personal portfolio using photoshop', 'webpage.jpg'),
(20, 'Software Engineering Completion Project', 'Creating and Developing SERDAC website ', 'SERDAC.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `skills`
--

CREATE TABLE `skills` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(100) DEFAULT NULL,
  `content` varchar(200) DEFAULT NULL,
  `perc` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `skills`
--

INSERT INTO `skills` (`id`, `title`, `content`, `perc`) VALUES
(10, 'Web Development', 'Creating and Developing Web Applications', 80),
(11, 'UX/UI Design', 'Designing UX/UI Content', 80),
(12, 'Programming Languages', 'Proficient in JavaScript,HTML/CSS, Python', 70),
(13, 'Database Management', 'Good in SQL', 50),
(14, 'Continuous Learning and Adaptability', 'Willingness to learn new technologies and adapt to evolving industry trends. ', 100),
(15, 'Communication and Collaboration', 'Strong communication skills and ability to collaborate effectively with cross-functional teams, stakeholders, and clients. ', 100);

-- --------------------------------------------------------

--
-- Table structure for table `userinfo`
--

CREATE TABLE `userinfo` (
  `me` longtext DEFAULT NULL,
  `address` varchar(300) DEFAULT NULL,
  `birthday` varchar(200) DEFAULT NULL,
  `contact` varchar(200) DEFAULT NULL,
  `email` varchar(200) DEFAULT NULL,
  `experience` longtext DEFAULT NULL,
  `firstName` varchar(100) DEFAULT NULL,
  `lastName` varchar(100) DEFAULT NULL,
  `occupancy` varchar(200) DEFAULT NULL,
  `socials` varchar(200) DEFAULT NULL,
  `id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `userinfo`
--

INSERT INTO `userinfo` (`me`, `address`, `birthday`, `contact`, `email`, `experience`, `firstName`, `lastName`, `occupancy`, `socials`, `id`) VALUES
('Hey there! I m Anthony Elizalde, and I m about to graduate with a degree in Information Technology from Western Mindanao State University. On top of that, I m also a member of the Jambangan Cultural Dance Troupe.', 'Elapso compound, Canelar Moret, Zamboanga City', 'June 13, 1999', '0906 754 6208', 'anthonyelizalde6@gmail.com', 'I have hands-on experience in UX/UI design, software engineering, and web development, having actively contributed to projects in each of these areas throughout my academic and professional journey. I also have hands-on experience in handling hardware.', 'Anthony', 'Elizalde', 'IT Specialist ', 'https://github.com/Nariangle.com', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `education`
--
ALTER TABLE `education`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `portfolio`
--
ALTER TABLE `portfolio`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `skills`
--
ALTER TABLE `skills`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `userinfo`
--
ALTER TABLE `userinfo`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `education`
--
ALTER TABLE `education`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `portfolio`
--
ALTER TABLE `portfolio`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `skills`
--
ALTER TABLE `skills`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `userinfo`
--
ALTER TABLE `userinfo`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
