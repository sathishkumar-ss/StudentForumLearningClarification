-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 21, 2021 at 04:58 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 7.4.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `discussion`
--

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

CREATE TABLE `messages` (
  `msg_id` int(11) NOT NULL,
  `incoming_msg_id` int(255) NOT NULL,
  `outgoing_msg_id` int(255) NOT NULL,
  `msg` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `messages`
--

INSERT INTO `messages` (`msg_id`, `incoming_msg_id`, `outgoing_msg_id`, `msg`) VALUES
(1, 704060207, 712051939, 'hi'),
(2, 712051939, 221167959, 'hi'),
(3, 221167959, 712051939, 'yes'),
(4, 4, 2, 'what are you doing'),
(5, 2, 4, 'hi'),
(6, 2, 4, 'hi'),
(7, 2, 4, 'hello'),
(8, 2, 4, 'yes'),
(9, 4, 2, 'hello'),
(10, 1, 4, 'hi'),
(11, 3, 4, 'hello'),
(12, 1, 5, 'hi sir i am mohana sundaram'),
(13, 4, 5, 'hi sir,iam mohana sundaram'),
(14, 4, 5, 'meena'),
(15, 4, 5, 'chatting'),
(16, 4, 5, 'how are you'),
(17, 5, 4, 'yes iam fine'),
(18, 9, 5, 'hi'),
(19, 5, 4, 'how are you'),
(20, 2, 5, 'hi there how are you'),
(21, 1, 7, 'helo');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `user_name` varchar(100) NOT NULL,
  `user_email` varchar(255) NOT NULL,
  `user_gender` text NOT NULL,
  `user_dept` text NOT NULL,
  `user_regno` int(100) NOT NULL,
  `user_upswd1` varchar(100) NOT NULL,
  `user_upswd2` varchar(100) NOT NULL,
  `user_profile` varchar(100) NOT NULL,
  `forgetten_answer` varchar(100) NOT NULL,
  `log_in` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `user_name`, `user_email`, `user_gender`, `user_dept`, `user_regno`, `user_upswd1`, `user_upswd2`, `user_profile`, `forgetten_answer`, `log_in`) VALUES
(1, 'Mechanical Engineering Department', 'mechanical44@gmail.com', 'Male', 'Mechanical Engineering', 3, 'pass1', 'mechanical44', 'department/2.png', '', 'Offline'),
(2, 'Electrical Engineering Department', 'electrical44@gmail.com', 'Male', 'Electronic and Electrical Engineering', 4, 'pass1', 'electrical44', 'department/1.png', '', 'Offline'),
(3, 'Civil Engineering Department', 'civil44@gmail.com', 'Male', 'Civil Engineering', 2, 'pass1', 'civil4488', 'department/3.png', '', 'Offline'),
(4, 'Computer Engineering Department', 'computer44@gmail.com', 'Male', 'Computer Engineering', 0, 'computer4444', 'computer4444', 'images/4.png.83', '', 'Online'),
(5, 'Plastic Engineering  Department', 'plastic44@gmail.com', 'Male', 'Plastic Engineering', 5, 'pass1', 'plastic4444', 'images/5.jpg.93', '', 'Offline'),
(6, 'Polimer Engineering Deparment', 'polimer44@gmail.com', 'Male', 'Polimer Engineering', 6, 'pass1', 'polimer4444', 'images/6.jpg.16', '', 'Offline'),
(7, 'Mohana sundaram', 'monishmadurai4@gmail.com', 'Male', 'Computer Engineering', 184127, 'moho864284', 'moho864284', '1.jpg', 'someone', 'Offline'),
(8, 'shakthi', 'shakthimadurai4@gmail.com', 'Male', 'Computer Engineering', 134567, 'pass1', 'meenameena', '4.jpg', '', 'Offline'),
(9, 'sivakumar', 'sivakumar4@gmail.com', 'Male', 'Computer Engineering', 184018, 'pass1', '1234567890', '2.jpg', '', 'Offline'),
(11, 'venkath', 'venkath4@gmail.com', 'Female', 'Computer Engineering', 178013, 'pass1', '987654321', '3.jpg', '', 'Offline'),
(23, 'jegan', 'jegan1234@gmail.com', 'Male', 'Computer Engineering', 184117, 'pass1', 'jegan4444', 'images/jegan.jpg.93', '', 'Offline'),
(24, 'thiru', 'thiru44@gmail.com', 'Male', 'Computer Engineering', 184138, 'pass1', 'thiru4444', 'images/thiru.jpg.21', '', 'Online');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`msg_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `messages`
--
ALTER TABLE `messages`
  MODIFY `msg_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
