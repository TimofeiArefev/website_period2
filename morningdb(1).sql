-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: mysql
-- Generation Time: Jan 18, 2024 at 05:40 PM
-- Server version: 11.2.2-MariaDB-1:11.2.2+maria~ubu2204
-- PHP Version: 8.2.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `morningdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `announcments`
--

CREATE TABLE `announcments` (
  `an_id` int(11) NOT NULL,
  `title` text NOT NULL,
  `description` text NOT NULL,
  `date` text NOT NULL,
  `author` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `announcments`
--

INSERT INTO `announcments` (`an_id`, `title`, `description`, `date`, `author`) VALUES
(1, 'title', 'description', '01-18-24', 'author'),
(2, 'first announcment', 'first announcmentfirst announcment', '01-18-24', 'author'),
(3, 'test', 'test test test test test test test test ', '01-18-24', 'author'),
(4, 'tea', 'asffassf', '01-18-24', 'author'),
(5, '', '', '01-18-24', 'author'),
(6, '', '', '01-18-24', 'author'),
(7, '', '', '01-18-24', 'author'),
(8, '', '', '01-18-24', 'author'),
(9, '', '', '01-18-24', 'author'),
(10, '', '', '01-18-24', 'author'),
(11, '', '', '01-18-24', 'author'),
(12, '', '', '01-18-24', 'author'),
(13, '', '', '01-18-24', 'author'),
(14, '', '', '01-18-24', 'author'),
(15, 'івппів', 'півівп', '01-18-24', 'author'),
(16, '', '', '01-18-24', 'author'),
(17, '', '', '01-18-24', 'author'),
(18, '', '', '01-18-24', 'author'),
(19, 'asfasf', 'dasdsa', '01-18-24', 'author'),
(20, 'asfasf', 'dasdsa', '01-18-24', 'author'),
(21, 'повториттся', 'повториттся', '01-18-24', 'author'),
(22, 'повториттся', 'повториттся', '01-18-24', 'author'),
(23, 'повториттся', 'повториттся', '01-18-24', 'author'),
(24, 'echo \' <script type=\"text/javascript\"> location.reload(); </script>\';echo \' <script type=\"text/javascript\"> location.reload(); </script>\';', 'echo \'\r\n<script type=\"text/javascript\">\r\nlocation.reload();\r\n</script>\';echo \'\r\n<script type=\"text/javascript\">\r\nlocation.reload();\r\n</script>\';', '01-18-24', 'author'),
(25, 'echo \' <script type=\"text/javascript\"> location.reload(); </script>\';echo \' <script type=\"text/javascript\"> location.reload(); </script>\';', 'echo \'\r\n<script type=\"text/javascript\">\r\nlocation.reload();\r\n</script>\';echo \'\r\n<script type=\"text/javascript\">\r\nlocation.reload();\r\n</script>\';', '01-18-24', 'author'),
(26, 'echo \' <script type=\"text/javascript\"> location.reload(); </script>\';echo \' <script type=\"text/javascript\"> location.reload(); </script>\';', 'echo \'\r\n<script type=\"text/javascript\">\r\nlocation.reload();\r\n</script>\';echo \'\r\n<script type=\"text/javascript\">\r\nlocation.reload();\r\n</script>\';', '01-18-24', 'author'),
(27, 'gjdnа', 'афіаі', '01-18-24', 'author'),
(28, 'window.location=window.location;', 'window.location=window.location;\r\nwindow.location=window.location;\r\n', '01-18-24', 'author'),
(29, 'window.location=window.location;', 'window.location=window.location;\r\nwindow.location=window.location;\r\n', '01-18-24', 'author'),
(30, 'warwar', 'arwa', '01-18-24', 'author'),
(31, 'warwar', 'arwa', '01-18-24', 'author'),
(32, 'warwar', 'arwa', '01-18-24', 'author');

-- --------------------------------------------------------

--
-- Table structure for table `appointments`
--

CREATE TABLE `appointments` (
  `ap_id` int(11) NOT NULL,
  `title` text NOT NULL,
  `description` text NOT NULL,
  `author` text NOT NULL,
  `date` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `appointments`
--

INSERT INTO `appointments` (`ap_id`, `title`, `description`, `author`, `date`) VALUES
(1, 'title', 'description', 'author', '0000-00-00'),
(2, 'title', 'description', 'author', '2015-12-17'),
(3, 'asf', 'asf', 'author', '01-18-24'),
(4, 'asf', 'asf', 'author', '01-18-24'),
(5, 'fasafs', 'fas', 'author', '01-18-24'),
(6, 'fasafs', 'fas', 'author', '01-18-24');

-- --------------------------------------------------------

--
-- Table structure for table `loginInfo`
--

CREATE TABLE `loginInfo` (
  `user_id` int(11) NOT NULL,
  `login` text NOT NULL,
  `hashed_password` text NOT NULL,
  `role` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `loginInfo`
--

INSERT INTO `loginInfo` (`user_id`, `login`, `hashed_password`, `role`) VALUES
(1, 'user', '$2y$10$Bb2frphYCkL7YPJhEz7Pv.ackf0iZioDyU6REpFUaJE.O0uzqEEXO', 'teacher'),
(2, 'user', '$2y$10$1fkYBUc.au7jtu7B9jO6Tez1GTi3OvXdneegsJeVuu3tAbSwAGxP6', 'teacher'),
(3, 'user1', '$2y$10$Skqrwpr9xAqMGgafpARHKuLojknCsJSQyJX1CfUSfnYVDuAMNgvM.', 'teacher'),
(4, 'mahmoud', '$2y$10$fnDPF66n0onC5v8IJz050..72tBkpMQHX8pzI1drCCGVGfD3SmSPS', 'student'),
(5, 'mahmoud', '$2y$10$x4hJu8XleMU6XN6Tba9QxO1NbTsq5LLQuoS2fbVHKa6NhVzxMGodG', 'teacher');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `announcments`
--
ALTER TABLE `announcments`
  ADD PRIMARY KEY (`an_id`);

--
-- Indexes for table `appointments`
--
ALTER TABLE `appointments`
  ADD PRIMARY KEY (`ap_id`);

--
-- Indexes for table `loginInfo`
--
ALTER TABLE `loginInfo`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `announcments`
--
ALTER TABLE `announcments`
  MODIFY `an_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `appointments`
--
ALTER TABLE `appointments`
  MODIFY `ap_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `loginInfo`
--
ALTER TABLE `loginInfo`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
