-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 31, 2023 at 03:13 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `quizweb`
--

-- --------------------------------------------------------

--
-- Table structure for table `answer`
--

CREATE TABLE `answer` (
  `aid` int(225) NOT NULL,
  `answer` varchar(225) NOT NULL,
  `ans_id` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `answer`
--

INSERT INTO `answer` (`aid`, `answer`, `ans_id`) VALUES
(1, '$GLOBALS', '1'),
(2, '$_POST', '1'),
(3, '$_GET', '1'),
(4, '$form_data', '1'),
(5, '.', '2'),
(6, 'string_concat()', '2'),
(7, 'str_concat()', '2'),
(8, 'str_combine()', '2'),
(9, 'To import CSS stylesheets', '3'),
(10, 'To include the content of another PHP file', '3'),
(11, 'To include external JavaScript files', '3'),
(12, 'To define and use functions', '3'),
(13, '$variable instanceof int', '4'),
(14, 'is_integer($variable)', '4'),
(15, 'is_numeric($variable)', '4'),
(16, 'intval($variable)', '4'),
(17, 'Establishes a WebSocket connection', '5'),
(18, 'Initiates a cURL session', '5'),
(19, 'Opens a file for reading', '5'),
(20, 'Connects to a MySQL database', '5');

-- --------------------------------------------------------

--
-- Table structure for table `question`
--

CREATE TABLE `question` (
  `id` int(225) NOT NULL,
  `question` varchar(225) NOT NULL,
  `aid` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `question`
--

INSERT INTO `question` (`id`, `question`, `aid`) VALUES
(1, 'Qno: 1 Which of the following variables is a superglobal in PHP and is used to retrieve data from forms?', '1'),
(2, 'Qno: 2 How do you concatenate two strings in PHP?', '5'),
(3, 'What is the purpose of the \"include\" statement in PHP?', '10'),
(4, 'In PHP, what is the correct way to check if a variable is an integer?', '15'),
(5, 'What does the \"mysqli_connect\" function do in PHP?', '20');

-- --------------------------------------------------------

--
-- Table structure for table `registration`
--

CREATE TABLE `registration` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `registration`
--

INSERT INTO `registration` (`id`, `name`, `email`, `password`) VALUES
(57, 'Hafiz Ahmed Ali Ansari', 'hafizahmedaliansari123@gmail.com', '12345'),
(58, 'ali', 'ali@gmail.com', '123'),
(59, 'gdfgdf', 'gdfgdfg', 'fdgfdg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `answer`
--
ALTER TABLE `answer`
  ADD PRIMARY KEY (`aid`);

--
-- Indexes for table `question`
--
ALTER TABLE `question`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `registration`
--
ALTER TABLE `registration`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `answer`
--
ALTER TABLE `answer`
  MODIFY `aid` int(225) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `question`
--
ALTER TABLE `question`
  MODIFY `id` int(225) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `registration`
--
ALTER TABLE `registration`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=60;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
