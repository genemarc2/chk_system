-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 30, 2025 at 04:01 AM
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
-- Database: `chk_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `courses`
--

CREATE TABLE `courses` (
  `course_id` int(11) NOT NULL,
  `course_name` varchar(255) NOT NULL,
  `instructor_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `courses`
--

INSERT INTO `courses` (`course_id`, `course_name`, `instructor_name`) VALUES
(1, 'GE101', 'J. Hernandez'),
(2, 'GE102', 'D.L.Brinas'),
(3, 'GE103', 'J.Hernadez'),
(4, 'GE106', 'R.Capul'),
(5, 'GE107', 'K.Beligan'),
(6, 'EDUC1', 'L.G.Hernandez'),
(7, 'EDUC2', 'N.Dangue'),
(8, 'FIL1', 'O.Sumague'),
(9, 'PE1', 'JL.Ople'),
(10, 'GE108', 'J.Hernadez'),
(11, 'GE109', 'D.L.Brinas'),
(12, 'PE104', 'JM.Tangkeko'),
(13, 'PE105', 'G.Samson'),
(14, 'PE106', 'E.Jesusco'),
(15, 'EDUC5', 'N.M.Calabia'),
(16, 'EDUC6', 'N.M.Calabia'),
(17, 'PE3', 'G.Samson'),
(18, 'ELEC1', 'N.Dangue'),
(19, 'EDRES1', 'A.Comia'),
(20, 'PE110', 'G.Del Rosario'),
(21, 'PE112', 'O.Sumague'),
(22, 'PE113', 'JC.Gataso'),
(23, 'PE114', 'E.Jesusco'),
(24, 'PE115', 'D.Aguilar'),
(25, 'EDUC9', 'G.Del Rosario');

-- --------------------------------------------------------

--
-- Table structure for table `skills`
--

CREATE TABLE `skills` (
  `skill_id` int(11) NOT NULL,
  `skill_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `skills`
--

INSERT INTO `skills` (`skill_id`, `skill_name`) VALUES
(1, 'Dancing'),
(2, 'Singing'),
(3, 'Communication Skills'),
(4, 'Leadership Skill'),
(5, 'Physical Skills'),
(6, 'Playing Volleyball'),
(7, 'Playing Basketball'),
(8, 'Cognitive Skills');

-- --------------------------------------------------------

--
-- Table structure for table `stud_info`
--

CREATE TABLE `stud_info` (
  `id` int(100) NOT NULL,
  `student_no` varchar(100) NOT NULL,
  `last_name` varchar(100) NOT NULL,
  `first_name` varchar(100) NOT NULL,
  `gender` enum('male','female') NOT NULL,
  `age` varchar(100) NOT NULL,
  `contact_no` int(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `dept` varchar(100) NOT NULL,
  `major` varchar(100) NOT NULL,
  `year` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `stud_info`
--

INSERT INTO `stud_info` (`id`, `student_no`, `last_name`, `first_name`, `gender`, `age`, `contact_no`, `email`, `dept`, `major`, `year`) VALUES
(1, '22-04916', 'Maderazo', 'Jann Victor', 'male', '21', 2147483647, 'juliettvictormaderazo@gmail.com', 'College of Human Kinetics', 'Physical Education', '3rd Year'),
(3, '22-04951', 'Dela Cruz', 'Renzell', 'male', '22', 2147483647, 'rencelldec28@gmail.com', 'College of Human Kinetics', 'Physical Education', '3rd Year');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `user_name` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `user_name`, `password`, `name`) VALUES
(1, 'admin', 'password1', 'Admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `courses`
--
ALTER TABLE `courses`
  ADD PRIMARY KEY (`course_id`);

--
-- Indexes for table `skills`
--
ALTER TABLE `skills`
  ADD PRIMARY KEY (`skill_id`);

--
-- Indexes for table `stud_info`
--
ALTER TABLE `stud_info`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `courses`
--
ALTER TABLE `courses`
  MODIFY `course_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `skills`
--
ALTER TABLE `skills`
  MODIFY `skill_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `stud_info`
--
ALTER TABLE `stud_info`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
