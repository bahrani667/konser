-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Nov 14, 2020 at 05:01 PM
-- Server version: 10.1.19-MariaDB
-- PHP Version: 5.6.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tiket`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_event`
--

CREATE TABLE `tbl_event` (
  `id_event` int(11) NOT NULL,
  `event_name` varchar(50) NOT NULL,
  `event_category` varchar(30) NOT NULL,
  `event_picture` blob NOT NULL,
  `event_description` text NOT NULL,
  `event_address` text NOT NULL,
  `event_ppn` varchar(15) NOT NULL,
  `event_date_start` date NOT NULL,
  `event_date_finish` date NOT NULL,
  `event_time_start` time NOT NULL,
  `event_time_start` time NOT NULL,
  `id_user` int(11) NOT NULL,
  `id_customer` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_tiket`
--

CREATE TABLE `tbl_tiket` (
  `id_tiket` int(11) NOT NULL,
  `tkt_category` varchar(30) NOT NULL,
  `tkt_qty` int(15) NOT NULL,
  `tkt_price` int(15) NOT NULL,
  `tkt_sales_name` varchar(30) NOT NULL,
  `tkt_sales_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user`
--

CREATE TABLE `tbl_user` (
  `id_user` int(11) NOT NULL,
  `user_name` varchar(50) NOT NULL,
  `user_pass` varchar(30) NOT NULL,
  `user_type` varchar(20) NOT NULL,
  `user_email` varchar(30) NOT NULL,
  `user_contact` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
