-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 30, 2020 at 11:35 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `webtech`
--

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `name` text NOT NULL,
  `id` int(11) NOT NULL,
  `password` text NOT NULL,
  `gender` text NOT NULL,
  `email` text NOT NULL,
  `dob` date NOT NULL,
  `bg` text NOT NULL,
  `imagename` text NOT NULL,
  `usertype` text NOT NULL,
  `specialization` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`name`, `id`, `password`, `gender`, `email`, `dob`, `bg`, `imagename`, `usertype`, `specialization`) VALUES
('Maliha', 17, '123456', 'Female', 'm.maliha997@gmail.com', '1997-05-26', 'B+', 'Maliha', 'admin', 'operations'),
('Shohag', 852963, '123456', 'Male', 'shohag@gmail.com', '2020-03-09', 'B-', 'Shohag', 'patient', 'VIP'),
('Moshur', 741852, '123456', 'Male', 'moshiur@gmail.com', '2020-03-16', 'A-', 'Moshur', 'Staff', 'Reciptionist'),
('Tuhin', 987654, '123456', 'Male', 'tuhin@gmail.com', '2020-01-12', 'A-', 'Tuhin', 'doctor', 'Cardiologist'),
('Shefali', 852963, '123456', 'Female', 'shefali@yxz.com', '2020-03-01', 'B+', 'Shefali', 'admin', 'operations');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `uname` text NOT NULL,
  `upassword` text NOT NULL,
  `uemail` text NOT NULL,
  `utype` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`uname`, `upassword`, `uemail`, `utype`) VALUES
('admin', 'admin', 'admin@gmail.com', 'admin'),
('asbjas', 'jsdhbjd', 'askjcbkadcj', 'kdsjckd'),
('asbjas', 'jsdhbjd', 'askjcbkadcj', 'kdsjckd'),
('hascjh', 'djchaj', 'jdchajdc', 'jchjadc');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
