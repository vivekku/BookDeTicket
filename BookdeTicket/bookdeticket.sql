-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 10, 2017 at 11:14 PM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 7.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bookdeticket`
--

-- --------------------------------------------------------

--
-- Table structure for table `mlist`
--

CREATE TABLE `mlist` (
  `mname` varchar(50) NOT NULL,
  `vpath` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mlist`
--

INSERT INTO `mlist` (`mname`, `vpath`) VALUES
('AIRLIFT', 'media/airlift.mp4'),
('X-MEN : APOCALYPSE', 'media/apocalypse.mp4'),
('AVATAR', 'media/avatar.mp4'),
('AVENGERS', 'media/avengers.mp4'),
('CAPTAIN AMERICA : THE WINTER SOLDIER', 'media/captain.mp4'),
('DEADPOOL', 'media/deadpool.mp4'),
('HOBBIT', 'media/hobbit.mp4'),
('LOGAN', 'media/logan.mp4'),
('FINDING NEMO', 'media/nemo.mp4'),
('PIRATES OF CARIBBEAN', 'media/poc.mp4'),
('HARRY POTTER AND THE ORDER OF PHOENIX', 'media/potter.mp4'),
('STAR WARS : THE FORCE AWAKENS', 'media/starwars.mp4'),
('THOR', 'media/thor.mp4'),
('THE ADVENTURES OF TINTIN', 'media/tintin.mp4'),
('X-MEN : THE WOLVERINE', 'media/wolverine.mp4');

-- --------------------------------------------------------

--
-- Table structure for table `movie`
--

CREATE TABLE `movie` (
  `name` varchar(50) NOT NULL,
  `path` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `movie`
--

INSERT INTO `movie` (`name`, `path`) VALUES
('AIRLIFT', 'media/airlift.mp4');

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE `register` (
  `name` varchar(20) DEFAULT NULL,
  `email` varchar(30) DEFAULT NULL,
  `dob` date DEFAULT NULL,
  `psw1` varchar(20) DEFAULT NULL,
  `psw2` varchar(20) DEFAULT NULL,
  `num` bigint(10) DEFAULT NULL,
  `gender` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`name`, `email`, `dob`, `psw1`, `psw2`, `num`, `gender`) VALUES
('Vivek Kumar', 'vickylucky1108@gmail.com', '1996-11-08', 'vjr', 'vjr', 9962849905, 'male'),
('Vivek Kumar', 'vivek.it.1108@gmail.com', '1996-11-08', '1234', '1234', 9962849905, 'male');

-- --------------------------------------------------------

--
-- Table structure for table `seats`
--

CREATE TABLE `seats` (
  `s1` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `seats`
--

INSERT INTO `seats` (`s1`) VALUES
('A1 A2 A3 ');

-- --------------------------------------------------------

--
-- Table structure for table `ticket`
--

CREATE TABLE `ticket` (
  `mname` varchar(50) NOT NULL,
  `tdate` date NOT NULL,
  `theatre` varchar(10) NOT NULL,
  `time` varchar(10) NOT NULL,
  `seats` int(2) NOT NULL,
  `mfare` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ticket`
--

INSERT INTO `ticket` (`mname`, `tdate`, `theatre`, `time`, `seats`, `mfare`) VALUES
('AIRLIFT', '2017-04-06', 'INOX', '4:00 PM', 3, 450);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
