-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 24, 2019 at 12:11 PM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.3.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `receiving`
--

-- --------------------------------------------------------

--
-- Table structure for table `0_transfer_details`
--

CREATE TABLE `0_transfer_details` (
  `id` int(11) NOT NULL,
  `transfer_id` int(11) NOT NULL,
  `stock_id` int(11) NOT NULL,
  `stock_id_2` int(11) NOT NULL,
  `description` text NOT NULL,
  `barcode` int(11) NOT NULL,
  `uom` int(11) NOT NULL,
  `cost` int(11) NOT NULL,
  `qty` int(11) NOT NULL,
  `extended` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `0_transfer_details`
--

INSERT INTO `0_transfer_details` (`id`, `transfer_id`, `stock_id`, `stock_id_2`, `description`, `barcode`, `uom`, `cost`, `qty`, `extended`) VALUES
(1, 1, 12, 12, 'pancit cantron extra hot', 2, 1, 1, 10, 5),
(2, 2, 6, 6, 'safeguard', 2, 1, 1, 10, 5),
(3, 2, 6, 6, 'head and shoulder shampoo', 22, 1, 1, 10, 5),
(4, 2, 12, 11, 'surf', 23, 1, 1, 10, 5),
(5, 2, 6, 6, 'downy', 14, 1, 1, 10, 5);

-- --------------------------------------------------------

--
-- Table structure for table `0_transfer_details_items`
--

CREATE TABLE `0_transfer_details_items` (
  `id` int(11) NOT NULL,
  `transfer_details_id` int(11) NOT NULL,
  `transfer_id` int(11) NOT NULL,
  `aria_type` int(11) NOT NULL,
  `aria_trans_no_in` int(11) NOT NULL,
  `name_in` varchar(255) NOT NULL,
  `m_code_in` varchar(255) NOT NULL,
  `m_id` varchar(255) NOT NULL,
  `m_no` varchar(255) NOT NULL,
  `actual_qty` int(11) NOT NULL,
  `transfer_date` date NOT NULL,
  `delivered_by` varchar(255) NOT NULL,
  `checked_by` varchar(255) NOT NULL,
  `requested` varchar(255) NOT NULL,
  `memo_` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `0_transfer_details_items`
--

INSERT INTO `0_transfer_details_items` (`id`, `transfer_details_id`, `transfer_id`, `aria_type`, `aria_trans_no_in`, `name_in`, `m_code_in`, `m_id`, `m_no`, `actual_qty`, `transfer_date`, `delivered_by`, `checked_by`, `requested`, `memo_`) VALUES
(1, 1, 1, 70, 1, 'jade', 'STO\r\n', 'M001\r\n', 'MT001\r\n', 4, '2019-09-27', 'simeon\r\n', 'ado\r\n', 'rhan\r\n', 'transferred\r\n'),
(2, 2, 2, 70, 1, 'jade', 'STO\r\n', 'M001\r\n', 'MT001\r\n', 4, '2019-09-27', 'simeon\r\n', 'ado\r\n', 'rhan\r\n', 'transferred\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `0_transfer_header`
--

CREATE TABLE `0_transfer_header` (
  `id` int(11) NOT NULL,
  `date_created` datetime NOT NULL DEFAULT current_timestamp(),
  `delivery_date` date NOT NULL,
  `br_code_out` varchar(255) NOT NULL,
  `br_code_in` varchar(255) NOT NULL,
  `inactive` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `0_transfer_header`
--

INSERT INTO `0_transfer_header` (`id`, `date_created`, `delivery_date`, `br_code_out`, `br_code_in`, `inactive`) VALUES
(1, '2019-09-24 10:47:32', '2019-10-17', 'srsn', 'val\r\n', 0),
(2, '2019-09-24 10:47:32', '2019-09-19', 'srsn', 'val', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `0_transfer_details`
--
ALTER TABLE `0_transfer_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `0_transfer_details_items`
--
ALTER TABLE `0_transfer_details_items`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `0_transfer_header`
--
ALTER TABLE `0_transfer_header`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `0_transfer_details`
--
ALTER TABLE `0_transfer_details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `0_transfer_details_items`
--
ALTER TABLE `0_transfer_details_items`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `0_transfer_header`
--
ALTER TABLE `0_transfer_header`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
