-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 05, 2019 at 09:58 AM
-- Server version: 10.3.16-MariaDB
-- PHP Version: 7.1.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `event`
--

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

CREATE TABLE `events` (
  `event_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `event_name` varchar(250) NOT NULL,
  `event_date` date NOT NULL,
  `event_location` varchar(50) NOT NULL,
  `event_description` text NOT NULL,
  `create_on` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `events`
--

INSERT INTO `events` (`event_id`, `user_id`, `event_name`, `event_date`, `event_location`, `event_description`, `create_on`) VALUES
(1, 1, 'event_description', '2019-07-19', ' event_description', ' event_description', '2019-07-04 19:49:32'),
(2, 14, 'event_description', '2019-07-26', ' event_description', ' events', '2019-07-04 19:57:03'),
(3, 14, 'event_description', '2019-07-26', ' event_description', ' events', '2019-07-04 19:57:39'),
(4, 14, 'event_description', '2019-07-26', ' event_description', ' events', '2019-07-04 19:58:14'),
(5, 14, 'event_description', '2019-07-26', ' event_description', ' events', '2019-07-04 19:58:26'),
(6, 15, 'event_description', '2019-07-12', ' event_description', ' Description - Optional', '2019-07-04 20:34:14'),
(7, 18, 'event_description', '2019-07-19', ' event_description', ' event_description', '2019-07-05 07:41:51'),
(8, 18, 'event_description', '2019-07-19', ' event_description', ' event_description', '2019-07-05 07:42:04'),
(9, 17, 'event_description', '2019-07-19', ' event_description', ' event_description', '2019-07-05 07:43:14');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(225) NOT NULL,
  `email` varchar(225) NOT NULL,
  `password` varchar(1020) NOT NULL,
  `is_active` int(11) NOT NULL DEFAULT 0,
  `register_on` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `is_active`, `register_on`) VALUES
(17, 'Rajesh Kumar', 'rk43apce@gmail.com', '123', 0, '2019-07-05 07:31:06'),
(18, 'Varun', 'varun@gmail.com', '1234', 0, '2019-07-05 07:36:39');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `events`
--
ALTER TABLE `events`
  ADD PRIMARY KEY (`event_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `events`
--
ALTER TABLE `events`
  MODIFY `event_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
