-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 21, 2021 at 01:16 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
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
  `event_id` varchar(20) NOT NULL,
  `event_name` varchar(50) NOT NULL,
  `event_category` varchar(50) NOT NULL,
  `event_picture` varchar(50) NOT NULL,
  `event_description` text NOT NULL,
  `event_location` text NOT NULL,
  `event_date_start` date NOT NULL,
  `event_date_finish` date NOT NULL,
  `event_time_start` time NOT NULL,
  `event_time_finish` time NOT NULL,
  `event_status` varchar(20) NOT NULL,
  `user_id` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_event`
--

INSERT INTO `tbl_event` (`event_id`, `event_name`, `event_category`, `event_picture`, `event_description`, `event_location`, `event_date_start`, `event_date_finish`, `event_time_start`, `event_time_finish`, `event_status`, `user_id`) VALUES
('EVN001', 'Lomba Makan Kerupuk', 'Music', 'mobil.jpeg', 'dddddddddddd', 'JAKARTA', '2020-11-16', '2020-11-23', '03:59:00', '23:00:00', 'NOT ACTIVE', 'USR003');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_pay`
--

CREATE TABLE `tbl_pay` (
  `id_pay` int(11) NOT NULL,
  `pay_item` varchar(30) NOT NULL,
  `pay_order_id` varchar(50) NOT NULL,
  `pay_metod` varchar(20) NOT NULL,
  `pay_total` int(15) NOT NULL,
  `pay_ppn` int(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_pembeli`
--

CREATE TABLE `tbl_pembeli` (
  `pmb_id` varchar(20) NOT NULL,
  `pmb_nama` varchar(50) NOT NULL,
  `pmb_identitas` varchar(20) NOT NULL,
  `pmb_ktp` varchar(20) NOT NULL,
  `pmb_email` varchar(50) NOT NULL,
  `pmb_tlp` varchar(20) NOT NULL,
  `tkt_id` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_pembeli`
--

INSERT INTO `tbl_pembeli` (`pmb_id`, `pmb_nama`, `pmb_identitas`, `pmb_ktp`, `pmb_email`, `pmb_tlp`, `tkt_id`) VALUES
('PMB001', 'Muhammad Hamdani', '', '0855662', 'DHanii', '5151615', ''),
('PMB002', 'Hamdani', 'KTP ', '084551151', 'dahain', '151515', ''),
('PMB003', 'dfdsfds', 'SIM ', '8512121', 'dasdhasdsa@gmail.com', '081151', ''),
('PMB004', 'Harris', 'KTP ', '325000001', 'admin@gmail.com', '089594', '');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_period`
--

CREATE TABLE `tbl_period` (
  `period_id` varchar(20) NOT NULL,
  `period_name` varchar(50) NOT NULL,
  `period_date` date NOT NULL,
  `period_status` varchar(20) NOT NULL,
  `event_id` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_period`
--

INSERT INTO `tbl_period` (`period_id`, `period_name`, `period_date`, `period_status`, `event_id`) VALUES
('PRD001', 'Periode 1', '2020-12-08', '', 'EVN001');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_seat`
--

CREATE TABLE `tbl_seat` (
  `seat_id` varchar(20) NOT NULL,
  `seat_no` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_ticket`
--

CREATE TABLE `tbl_ticket` (
  `tkt_id` varchar(20) NOT NULL,
  `tkt_category` varchar(30) NOT NULL,
  `tkt_item` varchar(50) NOT NULL,
  `tkt_size` varchar(10) NOT NULL,
  `tkt_qty_in` int(15) NOT NULL,
  `tkt_qty_out` int(15) NOT NULL,
  `tkt_price` int(15) NOT NULL,
  `tkt_ppn` varchar(20) NOT NULL,
  `period_id` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_ticket`
--

INSERT INTO `tbl_ticket` (`tkt_id`, `tkt_category`, `tkt_item`, `tkt_size`, `tkt_qty_in`, `tkt_qty_out`, `tkt_price`, `tkt_ppn`, `period_id`) VALUES
('TKT001', 'GOLD', 'CELANA', 'XL', 4, 0, 50000, '0', 'PRD001'),
('TKT002', 'PLATINUM', 'BAJU', 'XL', 4, 0, 200000, '0', 'PRD001');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_transaction`
--

CREATE TABLE `tbl_transaction` (
  `trans_id` varchar(20) NOT NULL,
  `trans_event` varchar(50) NOT NULL,
  `trans_period` varchar(20) NOT NULL,
  `trans_category` varchar(50) NOT NULL,
  `trans_qty` int(15) NOT NULL,
  `trans_price` int(15) NOT NULL,
  `trans_customer` varchar(50) NOT NULL,
  `trans_total` int(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user`
--

CREATE TABLE `tbl_user` (
  `user_id` varchar(20) NOT NULL,
  `user_email` varchar(35) NOT NULL,
  `user_password` varchar(35) NOT NULL,
  `user_nmlengkap` varchar(50) NOT NULL,
  `user_notelp` varchar(50) NOT NULL,
  `user_level` varchar(35) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_user`
--

INSERT INTO `tbl_user` (`user_id`, `user_email`, `user_password`, `user_nmlengkap`, `user_notelp`, `user_level`) VALUES
('USR001', 'admin@artatix.com', 'ee11cbb19052e40b07aac0ca060c23ee', 'artatix', '0852225446885', 'admin'),
('USR002', 'user', 'ee11cbb19052e40b07aac0ca060c23ee', 'artatix member', '08963362831363', 'member'),
('USR003', 'member@artatix.com', 'aa08769cdcb26674c6706093503ff0a3', 'Artatix Member', '085711573435', 'member');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user_vl`
--

CREATE TABLE `tbl_user_vl` (
  `uservl_id` varchar(20) NOT NULL,
  `user_id` varchar(20) NOT NULL,
  `uservl_img_identity1` varchar(50) NOT NULL,
  `uservl_number_identity1` varchar(30) NOT NULL,
  `uservl_name_identity1` varchar(30) NOT NULL,
  `uservl_address_identity1` varchar(50) NOT NULL,
  `uservl_img_identity2` varchar(50) NOT NULL,
  `uservl_number_identity2` varchar(30) NOT NULL,
  `uservl_name_identity2` varchar(30) NOT NULL,
  `uservl_address_identity2` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_user_vl`
--

INSERT INTO `tbl_user_vl` (`uservl_id`, `user_id`, `uservl_img_identity1`, `uservl_number_identity1`, `uservl_name_identity1`, `uservl_address_identity1`, `uservl_img_identity2`, `uservl_number_identity2`, `uservl_name_identity2`, `uservl_address_identity2`) VALUES
('USRVL001', 'USR002', 'KTP.jpg', '3514221308950001', 'Muhammad Hamdani', 'Pasuruan Jawa Timur', 'KTM.jpg', '5150411453', 'Muhammad Hamdani', 'Yogyakarta');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_event`
--
ALTER TABLE `tbl_event`
  ADD PRIMARY KEY (`event_id`);

--
-- Indexes for table `tbl_pay`
--
ALTER TABLE `tbl_pay`
  ADD PRIMARY KEY (`id_pay`);

--
-- Indexes for table `tbl_pembeli`
--
ALTER TABLE `tbl_pembeli`
  ADD PRIMARY KEY (`pmb_id`);

--
-- Indexes for table `tbl_period`
--
ALTER TABLE `tbl_period`
  ADD PRIMARY KEY (`period_id`),
  ADD KEY `event_id` (`event_id`);

--
-- Indexes for table `tbl_seat`
--
ALTER TABLE `tbl_seat`
  ADD PRIMARY KEY (`seat_id`);

--
-- Indexes for table `tbl_ticket`
--
ALTER TABLE `tbl_ticket`
  ADD PRIMARY KEY (`tkt_id`),
  ADD KEY `period_id` (`period_id`) USING BTREE;

--
-- Indexes for table `tbl_user`
--
ALTER TABLE `tbl_user`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `tbl_user_vl`
--
ALTER TABLE `tbl_user_vl`
  ADD PRIMARY KEY (`uservl_id`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tbl_period`
--
ALTER TABLE `tbl_period`
  ADD CONSTRAINT `tbl_period_ibfk_1` FOREIGN KEY (`event_id`) REFERENCES `tbl_event` (`event_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tbl_ticket`
--
ALTER TABLE `tbl_ticket`
  ADD CONSTRAINT `tbl_ticket_ibfk_1` FOREIGN KEY (`period_id`) REFERENCES `tbl_period` (`period_id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
