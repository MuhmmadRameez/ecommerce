-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Dec 08, 2021 at 11:58 AM
-- Server version: 5.7.31
-- PHP Version: 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `online_store`
--

-- --------------------------------------------------------

--
-- Table structure for table `store_information`
--

DROP TABLE IF EXISTS `store_information`;
CREATE TABLE IF NOT EXISTS `store_information` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `store_id` int(11) NOT NULL,
  `cnic` varchar(50) NOT NULL,
  `bank_account_no` varchar(50) NOT NULL,
  `delivery_mode` varchar(10) NOT NULL,
  `cash_policy` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_email_verification`
--

DROP TABLE IF EXISTS `tbl_email_verification`;
CREATE TABLE IF NOT EXISTS `tbl_email_verification` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `code` varchar(10) NOT NULL,
  `sending_time` varchar(20) NOT NULL,
  `status` int(1) NOT NULL DEFAULT '0',
  `created_at` timestamp NOT NULL,
  `updated_at` timestamp NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_email_verification`
--

INSERT INTO `tbl_email_verification` (`id`, `user_id`, `code`, `sending_time`, `status`, `created_at`, `updated_at`) VALUES
(1, 1, '8979', '09:13:09', 1, '2021-12-07 04:13:09', '2021-12-07 04:13:09');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_store`
--

DROP TABLE IF EXISTS `tbl_store`;
CREATE TABLE IF NOT EXISTS `tbl_store` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `store_name` varchar(150) NOT NULL,
  `contact` varchar(20) NOT NULL,
  `address` varchar(150) NOT NULL,
  `email` varchar(150) NOT NULL,
  `password` varchar(150) NOT NULL,
  `verify_email` int(1) NOT NULL DEFAULT '0',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_store`
--

INSERT INTO `tbl_store` (`id`, `store_name`, `contact`, `address`, `email`, `password`, `verify_email`, `created_at`, `updated_at`) VALUES
(1, 'Bismillah gernal store', '03312191682', 'Russian Market Steel town bin qasim karachi', 'rameezyousuf135@gmail.com', '$2y$10$hoTluvWDRdUy4kXQRQZ.fuL/QWLaKi/s4zIFuCWUE2k1hCsOxFbXK', 1, '2021-12-08 06:43:36', '2021-12-08 06:43:36');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(150) NOT NULL,
  `lastname` varchar(150) NOT NULL,
  `email` varchar(150) NOT NULL,
  `password` varchar(300) NOT NULL,
  `email_verify` int(1) DEFAULT '0',
  `status` int(1) NOT NULL DEFAULT '1',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `lastname`, `email`, `password`, `email_verify`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Rameez', 'Yousuf', 'rameezyousuf135@gmail.com', '$2y$10$72GAgXFeL/rzpF0WIcrdW.IANrRJZmfuQfVS1OqMZc0HjzBQbPVOG', 1, 1, '2021-12-07 04:13:09', '2021-12-07 04:13:09');

-- --------------------------------------------------------

--
-- Table structure for table `user_billing_info`
--

DROP TABLE IF EXISTS `user_billing_info`;
CREATE TABLE IF NOT EXISTS `user_billing_info` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `billing_address` varchar(250) NOT NULL,
  `person_name` varchar(50) NOT NULL,
  `contact` varchar(50) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_billing_info`
--

INSERT INTO `user_billing_info` (`id`, `user_id`, `billing_address`, `person_name`, `contact`, `created_at`, `updated_at`) VALUES
(1, 1, 'Steel town', 'Muhammad Rameez', '03312191682', '2021-12-08 00:47:14', '2021-12-08 00:47:14');

-- --------------------------------------------------------

--
-- Table structure for table `user_contact_infor`
--

DROP TABLE IF EXISTS `user_contact_infor`;
CREATE TABLE IF NOT EXISTS `user_contact_infor` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `mobile` varchar(30) NOT NULL,
  `seconadary_mobile` varchar(30) NOT NULL,
  `address` varchar(250) NOT NULL,
  `created_at` timestamp NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_contact_infor`
--

INSERT INTO `user_contact_infor` (`id`, `user_id`, `mobile`, `seconadary_mobile`, `address`, `created_at`, `updated_at`) VALUES
(1, 1, '03312191682', '03312191682', 'Steel town', '2021-12-08 00:47:14', '2021-12-08 00:47:14');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
