-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 29, 2023 at 12:05 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `formdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `persons`
--

CREATE TABLE `persons` (
  `name` varchar(100) NOT NULL,
  `email` varchar(20) NOT NULL,
  `password` varchar(50) NOT NULL,
  `phone` int(20) NOT NULL,
  `time submited` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `comments` varchar(600) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `persons`
--

INSERT INTO `persons` (`name`, `email`, `password`, `phone`, `time submited`, `comments`) VALUES
('Nicole Angwenyi', 'nicolem@gmail.com', '$2y$10$kC1SxjoHiINP9QV7qZmu8u/BCeSp9QpWURPqFh7f6yw', 7247, '2023-09-29 08:30:25', 'hrees'),
('Edward Kurgat', 'eddy@gmail.com', '$2y$10$b9jMu4Ym2Kqbur7Fz0.ZEe.Ati1M/.c1gi.0h.0I34L', 721345678, '2023-09-29 08:46:05', 'I am amazing'),
('Fiona ', 'fioneyney@gmail.com', '$2y$10$AGU.nflNbCFEmGn6dd9uG.3NDX6VEswGFxgs3S5EW8R', 756465342, '2023-09-29 08:51:49', 'o'),
('Felix', 'felix@gmail.com', '$2y$10$7sfurAslg4I84O/K48d5sujfI2zwKNS0zspicMJXnKB', 7868574, '2023-09-29 08:56:35', 'sometimes I enjoy this'),
('Marry Wairimu', 'Marym@gmail.com', '$2y$10$F/4G6tKuZEGYZqydBszC3.IcuWsEJ9cLGBDhYblMsM.', 79843526, '2023-09-29 09:07:36', 'hello I\'m new here'),
('Tracy', 'tracy@gmail.com', '$2y$10$KcONfigGpq6ms29XUpCtO.QS.RbpcBNwdlfqwPG4KR7', 7536667, '2023-09-29 09:19:06', 'I\'m going home');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
