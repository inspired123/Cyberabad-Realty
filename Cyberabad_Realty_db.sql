-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jan 30, 2021 at 11:56 AM
-- Server version: 10.3.25-MariaDB-cll-lve
-- PHP Version: 7.3.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `travelsa_Cyberabad_Realty`
--

-- --------------------------------------------------------

--
-- Table structure for table `addbuillderform`
--

CREATE TABLE `addbuillderform` (
  `id` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `name` varchar(250) DEFAULT NULL,
  `phone` varchar(250) DEFAULT NULL,
  `email` varchar(250) DEFAULT NULL,
  `construction_name` varchar(250) DEFAULT NULL,
  `project_name` varchar(100) DEFAULT NULL,
  `address` varchar(250) DEFAULT NULL,
  `country` varchar(250) DEFAULT NULL,
  `state` varchar(250) DEFAULT NULL,
  `city` varchar(250) DEFAULT NULL,
  `area` varchar(250) DEFAULT NULL,
  `pincode` varchar(250) DEFAULT NULL,
  `about` text DEFAULT NULL,
  `about_project` varchar(250) DEFAULT NULL,
  `project_type` varchar(250) DEFAULT NULL,
  `brochure` varchar(250) DEFAULT NULL,
  `layout` varchar(250) DEFAULT NULL,
  `location` varchar(250) DEFAULT NULL,
  `property_images` varchar(250) DEFAULT NULL,
  `possession_date` datetime DEFAULT NULL,
  `updated_at` datetime NOT NULL DEFAULT current_timestamp(),
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `status` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` int(11) NOT NULL,
  `name` text DEFAULT NULL,
  `email` text DEFAULT NULL,
  `password` text DEFAULT NULL,
  `company_name` text DEFAULT NULL,
  `address` text DEFAULT NULL,
  `location` text DEFAULT NULL,
  `mobile_no` text DEFAULT NULL,
  `image_file` text DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `name`, `email`, `password`, `company_name`, `address`, `location`, `mobile_no`, `image_file`, `updated_at`) VALUES
(1, 'NRIEVENTS', 'kmlalnehru9@gmail.com', '$2y$12$oLlw6VWa/iJ8T0Z2uDzQtOSKcb/MLTIjehAKaJvw/8gG1Vx2Nriv.', 'Cyberabad Realty', 'Hyderabad', 'Hyderabad', '8886165746', 'uploads/profile/1591339745.png', '2020-06-05 00:19:05');

-- --------------------------------------------------------

--
-- Table structure for table `advertise`
--

CREATE TABLE `advertise` (
  `id` int(11) NOT NULL,
  `name` varchar(100) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `phone` varchar(250) DEFAULT NULL,
  `state` varchar(250) DEFAULT NULL,
  `city` varchar(250) DEFAULT NULL,
  `country` varchar(250) DEFAULT NULL,
  `postal_code` varchar(250) DEFAULT NULL,
  `address` varchar(250) DEFAULT NULL,
  `full` text DEFAULT NULL,
  `updated_at` datetime NOT NULL DEFAULT current_timestamp(),
  `created_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `advertise`
--

INSERT INTO `advertise` (`id`, `name`, `email`, `phone`, `state`, `city`, `country`, `postal_code`, `address`, `full`, `updated_at`, `created_at`) VALUES
(1, 'venkat', 'knarasimha615@gmail.com', '6281213452', 'Ap', 'sdfghm,', 'India', '500082', 'image hospital', NULL, '2020-11-04 19:05:59', '2020-11-04 19:05:59'),
(2, 'venkat', 'knarasimha615@gmail.com', '6281213452', 'Ap', 'sdfghm,', 'India', '500082', 'image hospital', NULL, '2020-11-04 19:07:14', '2020-11-04 19:07:14'),
(3, 'venkat', 'knarasimha615@gmail.com', '6281213452', 'Ap', 'sdfghm,', 'India', '500082', 'image hospital', NULL, '2020-11-05 19:22:49', '2020-11-05 19:22:49');

-- --------------------------------------------------------

--
-- Table structure for table `blog`
--

CREATE TABLE `blog` (
  `id` int(11) NOT NULL,
  `name` varchar(250) DEFAULT NULL,
  `title` varchar(250) DEFAULT NULL,
  `logo` varchar(500) DEFAULT NULL,
  `description` text DEFAULT NULL,
  `updated_at` datetime NOT NULL DEFAULT current_timestamp(),
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `status` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `blog`
--

INSERT INTO `blog` (`id`, `name`, `title`, `logo`, `description`, `updated_at`, `created_at`, `status`) VALUES
(19, 'Ravali', 'Blog', 'uploads/1604464209.jpeg', NULL, '2020-12-04 07:38:39', '2020-11-04 04:30:09', '1'),
(20, 'mahesh', 'Farmhouse', 'uploads/1604465636.jpeg', NULL, '2020-12-04 07:38:37', '2020-11-04 04:53:56', '1'),
(22, 'bhargav', 'test title', 'uploads/1604473975.jpeg', NULL, '2020-12-04 07:38:35', '2020-11-04 07:12:55', '1'),
(23, 'bhargav1', 'test tiltle 1', 'uploads/1604474464.jpeg', NULL, '2020-12-04 07:38:33', '2020-11-04 07:21:05', '1');

-- --------------------------------------------------------

--
-- Table structure for table `blogform`
--

CREATE TABLE `blogform` (
  `id` int(11) NOT NULL,
  `name` varchar(250) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `message` text DEFAULT NULL,
  `created_at` datetime DEFAULT current_timestamp(),
  `updated_at` datetime DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `blogform`
--

INSERT INTO `blogform` (`id`, `name`, `email`, `message`, `created_at`, `updated_at`) VALUES
(1, 'ravali', 'kmlalnehru9@gmail.com', 'hi', '2020-11-03 11:56:00', '2020-11-03 11:56:00'),
(2, 'ravali', 'kmlalnehru9@gmail.com', 'hii', '2020-11-03 12:17:43', '2020-11-03 12:17:43'),
(3, 'ravali', 'kmlalnehru9@gmail.com', 'hi', '2020-11-03 12:20:11', '2020-11-03 12:20:11'),
(4, 'ravali', 'bhargavgamidi@gmail.com', 'message', '2020-11-04 12:56:06', '2020-11-04 12:56:06'),
(5, 'ravali', 'bhargavgamidi@gmail.com', 'message', '2020-11-04 12:56:12', '2020-11-04 12:56:12');

-- --------------------------------------------------------

--
-- Table structure for table `contactform`
--

CREATE TABLE `contactform` (
  `id` int(11) NOT NULL,
  `name` varchar(250) DEFAULT NULL,
  `email` varchar(250) DEFAULT NULL,
  `phone` varchar(250) NOT NULL,
  `subject` varchar(250) NOT NULL,
  `message` varchar(250) DEFAULT NULL,
  `updated_at` varchar(50) DEFAULT NULL,
  `created_at` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contactform`
--

INSERT INTO `contactform` (`id`, `name`, `email`, `phone`, `subject`, `message`, `updated_at`, `created_at`) VALUES
(1, 'venkat', 'knarasimha615@gmail.com', '6281213452', 'hello', 'hii testing', '2020-10-17 12:37:28', '2020-10-17 12:37:28'),
(2, 'venkat', 'testadmin@gmail.com', '345676654e3', 'jhgfdfg', 'Hii Testing', '2020-10-17 13:41:39', '2020-10-17 13:41:39'),
(3, 'venkat', 'knarasimha615@gmail.com', '234534567654', 'dfghgfd', 'sdgsg', '2020-10-17 17:28:46', '2020-10-17 17:28:46'),
(4, 'mo', 'kmlalnehru9@gmail.com', '345678765432', 'dfghgfd', '123', '2020-10-17 19:50:45', '2020-10-17 19:50:45'),
(5, 'venkat', 'knarasimha615@gmail.com', '3616534645646', 'sgxgsdgs', 'dfghjkl;', '2020-10-20 16:41:43', '2020-10-20 16:41:43');

-- --------------------------------------------------------

--
-- Table structure for table `enquiry`
--

CREATE TABLE `enquiry` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL,
  `email` text NOT NULL,
  `question` text NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `Enquiry_form`
--

CREATE TABLE `Enquiry_form` (
  `id` int(11) NOT NULL,
  `name` varchar(250) DEFAULT NULL,
  `email` varchar(250) DEFAULT NULL,
  `phone` varchar(100) DEFAULT NULL,
  `PropertyLocation` varchar(250) DEFAULT NULL,
  `PropertyType` varchar(250) DEFAULT NULL,
  `PropertyPurpose` varchar(250) NOT NULL,
  `Agent` varchar(250) DEFAULT NULL,
  `MinBeds` varchar(250) DEFAULT NULL,
  `MinBathrooms` varchar(250) DEFAULT NULL,
  `MinPrice` varchar(250) DEFAULT NULL,
  `MaxPrice` varchar(250) DEFAULT NULL,
  `MinArea` varchar(250) DEFAULT NULL,
  `MaxArea` varchar(250) DEFAULT NULL,
  `PropertyID` varchar(250) DEFAULT NULL,
  `AdditionalDetails` varchar(250) DEFAULT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `Enquiry_form`
--

INSERT INTO `Enquiry_form` (`id`, `name`, `email`, `phone`, `PropertyLocation`, `PropertyType`, `PropertyPurpose`, `Agent`, `MinBeds`, `MinBathrooms`, `MinPrice`, `MaxPrice`, `MinArea`, `MaxArea`, `PropertyID`, `AdditionalDetails`, `created_at`, `updated_at`) VALUES
(1, 'venkat', 'knarasimha615@gmail.com', '6281213452', 'zsdcfvg', 'apartment', 'Rent', 'sdfg', '2', '3', '12', '12', '12', '23', 'zxv', 'sdfghjkl', '2020-11-02 12:05:31', '2020-11-02 12:05:31'),
(2, 'manoj', 'thatikondamanoj310@gmail.com', '9441702222', 'nhbvc', 'office', 'Rent', 'gfdcx', '1', '1', '1', '1', '1', '1', '1', 'jhgvfcd', '2020-11-02 12:09:36', '2020-11-02 12:09:36'),
(3, 'venkat', 'knarasimha615@gmail.com', '6281213452', 'zsdcfvg', 'plot', 'Buy', 'sdfg', '2', '3', '12', '12', '12', '23', 'zxv', 'gghcfth', '2020-11-02 12:12:54', '2020-11-02 12:12:54'),
(4, 'venkat', 'knarasimha615@gmail.com', '6281213452', 'zsdcfvg', 'independent house', 'Rent', 'sdfg', '2', '3', '12', '12', '12', '23', 'zxv', 'sdfghjm,', '2020-11-02 12:19:45', '2020-11-02 12:19:45'),
(5, 'bhargav1', 'bhargavgamidi@gmail.com', '7287805505', 'hyderabad', 'villa', 'Sale', '565', '2', '2', '100000', '1000000', '1250', '1150', '12365489', 'add', '2020-11-02 12:55:26', '2020-11-02 12:55:26'),
(6, 'bhargav1', 'bhargavgamidi@gmail.com', '7287805505', 'hyderabad', 'villa', 'Sale', '565', '2', '2', '100000', '1000000', '1250', '1150', '12365489', 'add', '2020-11-02 12:55:26', '2020-11-02 12:55:26');

-- --------------------------------------------------------

--
-- Table structure for table `farmlandslides`
--

CREATE TABLE `farmlandslides` (
  `id` int(11) NOT NULL,
  `title` varchar(250) DEFAULT NULL,
  `logo` text DEFAULT NULL,
  `status` int(11) DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `farmlandslides`
--

INSERT INTO `farmlandslides` (`id`, `title`, `logo`, `status`, `updated_at`, `created_at`) VALUES
(2, 'Farmlands', 'uploads/1603947272.jpeg', 1, '2020-10-29 04:54:32', '2020-10-29 04:54:32'),
(3, 'Farmlands', 'uploads/1603947376.jpeg', 1, '2020-10-29 04:56:16', '2020-10-29 04:56:16');

-- --------------------------------------------------------

--
-- Table structure for table `furniture`
--

CREATE TABLE `furniture` (
  `id` int(11) NOT NULL,
  `name` varchar(250) DEFAULT NULL,
  `enterprise_name` varchar(250) DEFAULT NULL,
  `phone` varchar(100) DEFAULT NULL,
  `mail` varchar(200) DEFAULT NULL,
  `about` text DEFAULT NULL,
  `licence_document` text DEFAULT NULL,
  `chart_price` text DEFAULT NULL,
  `service` varchar(250) DEFAULT NULL,
  `logo` varchar(500) DEFAULT NULL,
  `address` text DEFAULT NULL,
  `branch` text DEFAULT NULL,
  `year` varchar(10) DEFAULT NULL,
  `websitelink` varchar(250) DEFAULT NULL,
  `status` int(11) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `interior_service`
--

CREATE TABLE `interior_service` (
  `id` int(11) NOT NULL,
  `name` varchar(250) DEFAULT NULL,
  `enterprise_name` varchar(250) DEFAULT NULL,
  `phone` varchar(100) DEFAULT NULL,
  `mail` varchar(250) DEFAULT NULL,
  `about` text DEFAULT NULL,
  `logo` varchar(250) DEFAULT NULL,
  `address` text NOT NULL,
  `service` varchar(250) DEFAULT NULL,
  `year` varchar(10) DEFAULT NULL,
  `websitelink` varchar(200) DEFAULT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `interior_service`
--

INSERT INTO `interior_service` (`id`, `name`, `enterprise_name`, `phone`, `mail`, `about`, `logo`, `address`, `service`, `year`, `websitelink`, `created_at`, `updated_at`) VALUES
(1, 'mahesh', 'sowmya', '7702177125', 'edha.ravalio@gmail.com', NULL, '/tmp/phpKPUWPU', 'hyd', NULL, '2019', 'itremotejob.com', '2020-11-04 10:47:16', '2020-11-04 10:47:16');

-- --------------------------------------------------------

--
-- Table structure for table `locations`
--

CREATE TABLE `locations` (
  `id` int(11) NOT NULL,
  `name` text DEFAULT NULL,
  `image` text DEFAULT NULL,
  `status` int(11) DEFAULT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `locations`
--

INSERT INTO `locations` (`id`, `name`, `image`, `status`, `created_at`, `updated_at`) VALUES
(2, 'Kukatpally', 'uploads/1604409723.png', 1, '2020-11-03 14:26:51', '2020-11-03 14:26:51'),
(3, 'Durgam cheruvu', 'uploads/1604409723.png', 1, '2020-11-13 14:39:10', '2020-11-20 14:39:10'),
(4, 'venkat', 'uploads/1604409723.png', 1, '2020-11-03 13:22:03', '2020-11-03 13:22:03'),
(5, 'Miyapur', 'uploads/1604411630.png', 1, '2020-11-03 13:53:51', '2020-11-03 13:53:51'),
(15, 'Miyapur123', 'uploads/1604472494.jpeg', 1, '2020-11-04 06:48:14', '2020-11-04 06:48:14'),
(16, 'Miyapur1232', 'uploads/1604476093.jpeg', 1, '2020-11-04 07:48:13', '2020-11-04 07:48:13'),
(17, 'Miyapur123e6et', 'uploads/1604476235.jpeg', 1, '2020-11-04 07:50:35', '2020-11-04 07:50:35');

-- --------------------------------------------------------

--
-- Table structure for table `profiles`
--

CREATE TABLE `profiles` (
  `id` int(11) NOT NULL,
  `username` varchar(100) DEFAULT NULL,
  `firstname` varchar(100) DEFAULT NULL,
  `lastname` varchar(100) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `pwd` varchar(100) DEFAULT NULL,
  `profile` text DEFAULT NULL,
  `address` text DEFAULT NULL,
  `city` varchar(100) DEFAULT NULL,
  `country` varchar(100) NOT NULL,
  `postal` varchar(100) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `profiles`
--

INSERT INTO `profiles` (`id`, `username`, `firstname`, `lastname`, `email`, `pwd`, `profile`, `address`, `city`, `country`, `postal`, `created_at`, `updated_at`) VALUES
(1, 'mahesh', 'mahesh', 'Jesse', 'emahesh989@gmail.com', 'mahesh', '/home/inspcemp/public_html/cyber/Cyberabad-Realty/public/uploads/1603126073.jpeg', 'hyderabad', 'Thihariyass', '523105', '523105', '2020-10-19 16:47:53', '2020-10-19 16:47:53'),
(2, 'emahesh96', 'mahesh', 'Jesse', 'emahesh989@gmail.com', 'mahesh', '/home/inspcemp/public_html/cyber/Cyberabad-Realty/public/uploads/1603128848.png', 'hyderabad', 'Thihariyass', '523105', '523105', '2020-10-19 17:34:08', '2020-10-19 17:34:08'),
(3, 'emahesh96', 'mahesh', 'Jesse', 'emahesh989@gmail.com', 'mahesh', '/home/inspcemp/public_html/cyber/Cyberabad-Realty/public/uploads/1603128860.png', 'hyderabad', 'Thihariyass', '523105', '523105', '2020-10-19 17:34:20', '2020-10-19 17:34:20'),
(4, 'sreedhar', 'sreedhar', 'Jesse', 'sreedhar@gmail.com', 'sreedhar', '/home/inspcemp/public_html/cyber/Cyberabad-Realty/public/uploads/1603342604.jpeg', 'hyd', 'hyd', 'india', '50072', '2020-10-22 04:56:44', '2020-10-22 04:56:44'),
(5, 'sreekanth.bat@gmail.com', 'gfdf', 'Jessefg', 'kmlalnehru9@gmail.com', '123', '/home/travelsa/public_html/caasaservice.com/Cyberabad-Realty/public/uploads/1603360095.jpeg', 'sdf', 'sdf', 'sdf', '655555', '2020-10-22 09:48:15', '2020-10-22 09:48:15'),
(6, 'emahesh96', 'mahesh', 'Jesse', 'maheshc@gmail.com', 'mahesh', '/home/travelsa/public_html/caasaservice.com/Cyberabad-Realty/public/uploads/1603363831.jpeg', 'hyderabad', 'Thihariyass', '523105', '523105', '2020-10-22 10:50:31', '2020-10-22 10:50:31'),
(7, 'emahesh96', 'mahesh', 'Jesse', 'maheshc@gmail.com', 'mahesh', '/home/travelsa/public_html/caasaservice.com/Cyberabad-Realty/public/uploads/1603363924.jpeg', 'hyderabad', 'Thihariyass', '523105', '523105', '2020-10-22 10:52:04', '2020-10-22 10:52:04'),
(8, 'emahesh96', 'mahesh', 'Jesse', 'emahesh989@gmail.com', 'mahesh', '/home/travelsa/public_html/caasaservice.com/Cyberabad-Realty/public/uploads/1603364018.jpeg', 'hyderabad', 'Thihariyass', '523105', '523105', '2020-10-22 10:53:38', '2020-10-22 10:53:38');

-- --------------------------------------------------------

--
-- Table structure for table `property`
--

CREATE TABLE `property` (
  `id` int(11) NOT NULL,
  `image` text DEFAULT NULL,
  `bedrooms` int(11) DEFAULT NULL,
  `bathrooms` int(11) DEFAULT NULL,
  `posted_by` varchar(250) DEFAULT NULL,
  `property_type` varchar(250) DEFAULT NULL,
  `property_for` int(11) DEFAULT NULL,
  `balconies` int(11) DEFAULT NULL,
  `total_area` int(11) DEFAULT NULL,
  `total_area_measurement` varchar(250) DEFAULT NULL,
  `carpet_area` int(11) DEFAULT NULL,
  `carpet_area_measurement` int(11) DEFAULT NULL,
  `buildup_area` int(11) DEFAULT NULL,
  `buildup_area_measurement` int(11) DEFAULT NULL,
  `additional_rooms` text DEFAULT NULL,
  `sale_price` varchar(250) DEFAULT NULL,
  `sale_price_measurement` text DEFAULT NULL,
  `sale_negotiatible` int(11) DEFAULT NULL,
  `sale_booking_amount` varchar(250) DEFAULT NULL,
  `rent_price` varchar(250) DEFAULT NULL,
  `rent_price_measurement` varchar(250) DEFAULT NULL,
  `rent_negotiatible` int(11) DEFAULT NULL,
  `rent_booking_amount` varchar(250) DEFAULT NULL,
  `rent_monthly_maintenance` varchar(250) DEFAULT NULL,
  `available_from` text DEFAULT NULL,
  `include_price` text DEFAULT NULL,
  `property_status` varchar(250) DEFAULT NULL,
  `age` int(11) DEFAULT NULL,
  `rm_transaction_type` varchar(250) DEFAULT NULL,
  `possession_date` text DEFAULT NULL,
  `uc_transaction_type` varchar(250) DEFAULT NULL,
  `description` text DEFAULT NULL,
  `furnishing_status` text DEFAULT NULL,
  `bed_no` int(11) DEFAULT NULL,
  `tvs` int(11) DEFAULT NULL,
  `greesar` int(11) DEFAULT NULL,
  `acs` int(11) DEFAULT NULL,
  `additional_furnishing` text DEFAULT NULL,
  `amenities` text DEFAULT NULL,
  `parking_covered` int(11) DEFAULT NULL,
  `parking_opened` int(11) DEFAULT NULL,
  `floor_no` int(11) DEFAULT NULL,
  `total_floor` int(11) DEFAULT NULL,
  `open_side` int(11) DEFAULT NULL,
  `facing` varchar(250) DEFAULT NULL,
  `over_looking` text DEFAULT NULL,
  `owner_type` text DEFAULT NULL,
  `living_room_flooring` text DEFAULT NULL,
  `kitchen_flooring` text DEFAULT NULL,
  `bathroom_flooring` text DEFAULT NULL,
  `bed_room_flooring` text DEFAULT NULL,
  `balcony_flooring` text DEFAULT NULL,
  `other_flooring` text DEFAULT NULL,
  `multi_images` text DEFAULT NULL,
  `image_file` text DEFAULT NULL,
  `city` varchar(250) DEFAULT NULL,
  `state` varchar(250) DEFAULT NULL,
  `country` varchar(250) DEFAULT NULL,
  `address` text DEFAULT NULL,
  `landmark` text DEFAULT NULL,
  `area` text DEFAULT NULL,
  `pincode` text DEFAULT NULL,
  `land_area` int(11) DEFAULT NULL,
  `land_area_measurement` int(11) DEFAULT NULL,
  `length_area` int(11) DEFAULT NULL,
  `length_area_measurement` int(11) DEFAULT NULL,
  `soil_typeselect` varchar(250) DEFAULT NULL,
  `Water_resources` text DEFAULT NULL,
  `floor_allowed` int(11) DEFAULT NULL,
  `boundary_typeselect` int(11) DEFAULT NULL,
  `possession_date1` datetime DEFAULT NULL,
  `sale_price1` int(11) DEFAULT NULL,
  `sale_price_measurement1` int(11) DEFAULT NULL,
  `sale_negotiatible1` int(11) DEFAULT NULL,
  `sale_booking_amount1` int(11) DEFAULT NULL,
  `rent_monthly1` int(11) DEFAULT NULL,
  `rent_price_measurement1` int(11) DEFAULT NULL,
  `rent_negotiatible1` int(11) DEFAULT NULL,
  `rent_booking_amount1` int(11) DEFAULT NULL,
  `rent_monthly_maintenance1` int(11) DEFAULT NULL,
  `available_from1` datetime DEFAULT NULL,
  `lease_in_years1` int(11) DEFAULT NULL,
  `amenities1` text DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `status` int(11) DEFAULT NULL,
  `location` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `property`
--

INSERT INTO `property` (`id`, `image`, `bedrooms`, `bathrooms`, `posted_by`, `property_type`, `property_for`, `balconies`, `total_area`, `total_area_measurement`, `carpet_area`, `carpet_area_measurement`, `buildup_area`, `buildup_area_measurement`, `additional_rooms`, `sale_price`, `sale_price_measurement`, `sale_negotiatible`, `sale_booking_amount`, `rent_price`, `rent_price_measurement`, `rent_negotiatible`, `rent_booking_amount`, `rent_monthly_maintenance`, `available_from`, `include_price`, `property_status`, `age`, `rm_transaction_type`, `possession_date`, `uc_transaction_type`, `description`, `furnishing_status`, `bed_no`, `tvs`, `greesar`, `acs`, `additional_furnishing`, `amenities`, `parking_covered`, `parking_opened`, `floor_no`, `total_floor`, `open_side`, `facing`, `over_looking`, `owner_type`, `living_room_flooring`, `kitchen_flooring`, `bathroom_flooring`, `bed_room_flooring`, `balcony_flooring`, `other_flooring`, `multi_images`, `image_file`, `city`, `state`, `country`, `address`, `landmark`, `area`, `pincode`, `land_area`, `land_area_measurement`, `length_area`, `length_area_measurement`, `soil_typeselect`, `Water_resources`, `floor_allowed`, `boundary_typeselect`, `possession_date1`, `sale_price1`, `sale_price_measurement1`, `sale_negotiatible1`, `sale_booking_amount1`, `rent_monthly1`, `rent_price_measurement1`, `rent_negotiatible1`, `rent_booking_amount1`, `rent_monthly_maintenance1`, `available_from1`, `lease_in_years1`, `amenities1`, `created_at`, `updated_at`, `status`, `location`) VALUES
(84, NULL, 4, 3, '1', 'villa', 2, 3, 1, '1', 1, 1, 1, 1, '1,2,3,4', '1', '1', 1, '1', '1', '1', 1, '1', '1', '2020-10-08', '0,1,2', '1', 3, '2', '2020-10-21', '2', '1', '0', 2, 2, 5, 2, '0,1,2,3,4,5', '0,1,2,3,4,5,6', 5, 3, 3, 1, 2, '2', '0,1,2', '0,1,2', '3', '3', '3', '3', '1', '4', '1079747880.jpg,1094354750.jpg,1122519841.png,1156919249.gif,665023146.jpg,59835989.jpg,578074875.jpg,1979553758.jpg', 'uploads/1603538836.jpg', '1', '1', 'ID', '1', '1', '1', '1', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2020-11-02 05:24:08', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, '2020-11-02 05:24:08', NULL, NULL, '2020-10-24 11:27:16', '2020-10-24 11:27:16', 1, '1'),
(85, NULL, 2, 2, '1', 'villa', 2, 3, 1, '1', 1, 1, 1, 1, '1', '1', '1', 1, '1', '1', '1', 1, '1', '1', '2020-10-02', '0', '1', 3, '2', '2020-10-16', '2', '1', '0', 2, 2, 3, 2, '0,4', '0,1,2,4,5,6', 2, 2, 2, 2, 2, '2', '0', '0,1', '3', '2', '2', '3', '4', '2', '28158154.jpg,1291015476.jpg,611719923.jpg,251465096.jpg,5193438.jpg,1617984482.jpg,2088609450.jpg,170950398.jpg', 'uploads/1603539841.jpeg', '1', '1', 'AZ', '1', '1', '1', '1', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2020-11-02 05:24:08', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, '2020-11-02 05:24:08', NULL, NULL, '2020-10-24 11:44:01', '2020-10-24 11:44:01', 1, '1'),
(86, NULL, 1, 2, '1', 'apartment', 2, 1, 15000, '1', 1500, 1, 1500, 1, '1', '5000', '1', 1, '5000', NULL, '1', 1, NULL, NULL, NULL, '0', '1', 2, '2', NULL, NULL, '<p>test</p>', '1', 3, 1, 2, 1, '0,1,2,3,4,5', '0,1,2,3,4,5,6', 1, 2, 2, 2, 1, '1', '0,1', '0', '1', '2', '1', '1', '1', '1', '517886792.png,1392584816.png,74111433.jpg,88567311.jpg,1218515457.jpg,2073477916.webp,1865202100.png,1505782414.png', 'uploads/farmhouse1.jpg', 'Thihariyass', 'Kandyd', 'GA', 'hyderabad', 'FSDFSD', 'Madhapure', '523105', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2020-11-02 05:24:08', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, '2020-11-02 05:24:08', NULL, NULL, '2020-10-27 09:49:26', '2020-10-27 09:49:26', 1, '1'),
(87, NULL, 1, 2, '1', 'farmhouse', 2, 1, 15000, '1', 1500, 1, 1500, 1, '1', '5000', '1', 1, '5000', NULL, '1', 1, NULL, NULL, NULL, '0', '1', 2, '2', NULL, NULL, '<p>test</p>', '1', 3, 1, 2, 1, '0,1,2,3,4,5', '0,1,2,3,4,5,6', 1, 2, 2, 2, 1, '1', '0,1', '0', '1', '2', '1', '1', '1', '1', '19097785.png,858202721.png,79852739.jpg,1681968813.jpg,434946550.jpg,1197542165.webp,124314916.png,919224748.png', 'uploads/1603792168.jpeg', 'Thihariyass', 'Kandyd', 'GA', 'hyderabad', 'FSDFSD', 'Madhapure', '523105', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2020-11-02 05:24:08', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, '2020-11-02 05:24:08', NULL, NULL, '2020-10-27 09:49:28', '2020-10-27 09:49:28', 1, '1'),
(88, NULL, 4, 3, '1', 'farmhouse', 2, 3, 1, '1', 1, 1, 1, 1, '1,2,3,4', '1', '1', 1, '1', '1', '1', 1, '1', '1', '2020-10-08', '0,1,2', '1', 3, '2', '2020-10-21', '2', '1', '0', 2, 2, 5, 2, '0,1,2,3,4,5', '0,1,2,3,4,5,6', 5, 3, 3, 1, 2, '2', '0,1,2', '0,1,2', '3', '3', '3', '3', '1', '4', '144310754.jpg,1660671627.jpg,1136706843.jpg,1791178290.jpg,665023146.jpg,59835989.jpg,578074875.jpg,1979553758.jpg', 'uploads/farmhouse2.jpg', '1', '1', 'ID', '1', '1', '1', '1', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2020-11-02 05:24:08', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, '2020-11-02 05:24:08', NULL, NULL, '2020-10-24 11:27:16', '2020-10-24 11:27:16', 1, '1'),
(89, NULL, 4, 3, '1', 'farmhouse', 2, 3, 1, '1', 1, 1, 1, 1, '1,2,3,4', '1', '1', 1, '1', '1', '1', 1, '1', '1', '2020-10-08', '0,1,2', '1', 3, '2', '2020-10-21', '2', '1', '0', 2, 2, 5, 2, '0,1,2,3,4,5', '0,1,2,3,4,5,6', 5, 3, 3, 1, 2, '2', '0,1,2', '0,1,2', '3', '3', '3', '3', '1', '4', '144310754.jpg,1660671627.jpg,1136706843.jpg,1791178290.jpg,665023146.jpg,59835989.jpg,578074875.jpg,1979553758.jpg', 'uploads/farmhouse3.jpg', '1', '1', 'ID', '1', '1', '1', '1', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2020-11-02 05:24:08', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, '2020-11-02 05:24:08', NULL, NULL, '2020-10-24 11:27:16', '2020-10-24 11:27:16', 1, '1'),
(90, NULL, 4, 3, '1', 'farmhouse', 2, 3, 1, '1', 1, 1, 1, 1, '1,2,3,4', '1', '1', 1, '1', '1', '1', 1, '1', '1', '2020-10-08', '0,1,2', '1', 3, '2', '2020-10-21', '2', '1', '0', 2, 2, 5, 2, '0,1,2,3,4,5', '0,1,2,3,4,5,6', 5, 3, 3, 1, 2, '2', '0,1,2', '0,1,2', '3', '3', '3', '3', '1', '4', '144310754.jpg,1660671627.jpg,1136706843.jpg,1791178290.jpg,665023146.jpg,59835989.jpg,578074875.jpg,1979553758.jpg', 'uploads/farmhouse1.jpg', '1', '1', 'ID', '1', '1', '1', '1', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2020-11-02 05:24:08', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, '2020-11-02 05:24:08', NULL, NULL, '2020-10-24 11:27:16', '2020-10-24 11:27:16', 1, '1'),
(91, NULL, 2, 2, '1', 'apartment', 2, 3, 1, '1', 1, 1, 1, 1, '1', '1', '1', 1, '1', '1', '1', 1, '1', '1', '2020-10-02', '0', '1', 3, '2', '2020-10-16', '2', '1', '0', 2, 2, 3, 2, '0,4', '0,1,2,4,5,6', 2, 2, 2, 2, 2, '2', '0', '0,1', '3', '2', '2', '3', '4', '2', '28158154.jpg,1291015476.jpg,611719923.jpg,251465096.jpg,5193438.jpg,1617984482.jpg,2088609450.jpg,170950398.jpg', 'uploads/1603539841.jpeg', '1', '1', 'AZ', '1', '1', '1', '1', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2020-11-02 05:24:08', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, '2020-11-02 05:24:08', NULL, NULL, '2020-10-24 11:44:01', '2020-10-24 11:44:01', 1, '1'),
(92, NULL, 1, 2, '1', 'apartment', 2, 1, 15000, '1', 1500, 1, 1500, 1, '1', '5000', '1', 1, '5000', NULL, '1', 1, NULL, NULL, NULL, '0', '1', 2, '2', NULL, NULL, '<p>test</p>', '1', 3, 1, 2, 1, '0,1,2,3,4,5', '0,1,2,3,4,5,6', 1, 2, 2, 2, 1, '1', '0,1', '0', '1', '2', '1', '1', '1', '1', '517886792.png,1392584816.png,74111433.jpg,88567311.jpg,1218515457.jpg,2073477916.webp,1865202100.png,1505782414.png', 'uploads/1603792166.jpeg', 'Thihariyass', 'Kandyd', 'GA', 'hyderabad', 'FSDFSD', 'Madhapure', '523105', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2020-11-02 05:24:08', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, '2020-11-02 05:24:08', NULL, NULL, '2020-10-27 09:49:26', '2020-10-27 09:49:26', 1, '1'),
(93, NULL, 1, 2, '1', 'independent', 2, 1, 15000, '1', 1500, 1, 1500, 1, '1', '5000', '1', 1, '5000', NULL, '1', 1, NULL, NULL, NULL, '0', '1', 2, '2', NULL, NULL, '<p>test</p>', '1', 3, 1, 2, 1, '0,1,2,3,4,5', '0,1,2,3,4,5,6', 1, 2, 2, 2, 1, '1', '0,1', '0', '1', '2', '1', '1', '1', '1', '19097785.png,858202721.png,79852739.jpg,1681968813.jpg,434946550.jpg,1197542165.webp,124314916.png,919224748.png', 'uploads/1603792168.jpeg', 'Thihariyass', 'Kandyd', 'GA', 'hyderabad', 'FSDFSD', 'Madhapure', '523105', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2020-11-02 05:24:08', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, '2020-11-02 05:24:08', NULL, NULL, '2020-10-27 09:49:28', '2020-10-27 09:49:28', 1, '1'),
(94, NULL, 2, 2, '1', 'independent', 2, 1, 15000, '1', 1500, 1, 1500, 1, '1', NULL, '1', 1, NULL, NULL, 'Rs/Sqyard', 1, NULL, NULL, NULL, '0', '1', 2, '2', NULL, NULL, '<p>sdf</p>', '1', 2, 1, 1, 2, '0,4', '0,4', 1, 2, 2, 2, 1, '1', '0', '0', '2', '2', '1', '2', '2', '3', '1461211251.png,1693400998.png,1412981338.jpg,1402527871.jpg,912605260.jpg,563934442.webp,863810388.png,1256732888.png,1122519841.png,1330877894.jpg,1156919249.gif,241888420.png', 'uploads/1603883841.png', 'Thihariyass', 'Kandyd', 'DE', 'hyderabad', 'asacx', 'Madhapure', '523105', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2020-11-02 05:24:08', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, '2020-11-02 05:24:08', NULL, NULL, '2020-10-28 11:17:21', '2020-10-28 11:17:21', 1, '1'),
(98, NULL, 1, 2, '1', 'apartment', 2, 1, 15000, '1', 1500, 1, 1500, 1, '1', '5000', '1', 1, '5000', NULL, '1', 1, NULL, NULL, NULL, '0', '1', 2, '2', NULL, NULL, '<p>test</p>', '1', 3, 1, 2, 1, '0,1,2,3,4,5', '0,1,2,3,4,5,6', 1, 2, 2, 2, 1, '1', '0,1', '0', '1', '2', '1', '1', '1', '1', '19097785.png,858202721.png,79852739.jpg,1681968813.jpg,434946550.jpg,1197542165.webp,124314916.png,919224748.png', 'uploads/1603792168.jpeg', 'Thihariyass', 'Kandyd', 'GA', 'hyderabad', 'FSDFSD', 'Madhapure', '523105', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2020-11-02 05:24:08', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, '2020-11-02 05:24:08', NULL, NULL, '2020-10-27 09:49:28', '2020-10-27 09:49:28', 1, '1'),
(99, NULL, 2, 2, '1', 'apartment', 2, 1, 15000, '1', 1500, 1, 1500, 1, '1', NULL, '1', 1, NULL, NULL, 'Rs/Sqyard', 1, NULL, NULL, NULL, '0', '1', 2, '2', NULL, NULL, '<p>sdf</p>', '1', 2, 1, 1, 2, '0,4', '0,4', 1, 2, 2, 2, 1, '1', '0', '0', '2', '2', '1', '2', '2', '3', '1461211251.png,1693400998.png,1412981338.jpg,1402527871.jpg,912605260.jpg,563934442.webp,863810388.png,1256732888.png,1122519841.png,1330877894.jpg,1156919249.gif,241888420.png', 'uploads/1603883841.png', 'Thihariyass', 'Kandyd', 'DE', 'hyderabad', 'asacx', 'Madhapure', '523105', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2020-11-02 05:24:08', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, '2020-11-02 05:24:08', NULL, NULL, '2020-10-28 11:17:21', '2020-10-28 11:17:21', 1, '1'),
(100, NULL, 2, 2, '1', 'apartment', 2, 1, 180, '1', 20, 1, 32, 1, '4', '67,00,700', '1', 1, '1,00,000', NULL, '1', 1, NULL, NULL, NULL, '0', '1', 1, '2', NULL, NULL, '<p><span style=\"color: rgb(34, 34, 34);\">Palmcove is Situated at Uppal,Hyderabad, Uppal Kalan is a neighbourhood of Hyderabad in the Medchal district of the Indian state of Telangana. It is the mandal headquarters of Uppal mandal in Keesara revenue division. It was a municipality prior to its merger into the Greater Hyderabad Municipal Corporation.</span></p>', '1', 2, 2, 1, 2, '1,5', '1,5', 1, 1, 2, 1, 2, '1', '1', '0', '5', '3', '3', '5', '1', '7', '144310754.jpg,1660671627.jpg,1136706843.jpg,1791178290.jpg,665023146.jpg,59835989.jpg,578074875.jpg,1979553758.jpg', 'uploads/1604139238.jpeg', 'hyderabad', 'Telengana', 'IN', 'Hyderabd', 'Uppal', 'Uppal', '500088', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2020-11-02 05:24:08', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, '2020-11-02 05:24:08', NULL, NULL, '2020-10-31 10:13:58', '2020-10-31 10:13:58', 1, '1'),
(101, NULL, NULL, NULL, NULL, 'farmlands', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 5000, 1, 5000, 1, '1', '1,2,3', 12, 1, '2020-11-18 11:27:14', 1, 1, 1, 1500, 1, 1, 1, 1, 1, '2020-11-19 11:27:14', 1, '1,2,3', '2020-11-19 11:27:14', '2020-11-19 11:27:14', 1, '1'),
(102, NULL, NULL, NULL, '1', 'farmlands', 2, NULL, NULL, '1', NULL, 1, NULL, 1, '', NULL, '1', 1, NULL, NULL, '1', 1, NULL, NULL, NULL, '', '1', NULL, NULL, NULL, NULL, NULL, '0', NULL, NULL, NULL, NULL, '', '', NULL, NULL, NULL, NULL, NULL, NULL, '0,1', '0,1', '1', '2', '3', '3', '2', '0', '560669182.jpg,131785471.jpg,1903724752.jpg,600933965.jpg,713471980.jpg,890441736.jpg,1964954516.jpg,819518052.jpg', 'uploads/1604326703.jpeg', '1', '1', 'ID', '1', '1', '1', '1', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2020-11-02 14:18:25', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2020-11-02 14:18:25', NULL, NULL, '2020-11-02 14:18:25', '2020-11-02 14:18:25', 1, '1'),
(103, NULL, NULL, NULL, '1', 'farmlands', 2, NULL, NULL, '1', NULL, 1, NULL, 1, '', NULL, '1', 1, NULL, NULL, '1', 1, NULL, NULL, NULL, '', '1', NULL, NULL, NULL, NULL, NULL, '0', NULL, NULL, NULL, NULL, '', '', NULL, NULL, NULL, NULL, NULL, NULL, '0,1', '0,2', '2', '1', '3', '2', '2', '4', '1050090389.jpg,1226617118.jpg,664388938.jpg,2076491831.jpg,356320290.jpg,1086618621.jpg,1780152835.jpg,52538792.jpg', 'uploads/1604326965.jpeg', '1', '1', 'MT', '1', '1', '1', '1', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2020-11-02 14:22:47', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2020-11-02 14:22:47', NULL, NULL, '2020-11-02 14:22:47', '2020-11-02 14:22:47', 1, '1'),
(104, NULL, NULL, NULL, '1', 'farmlands', 2, NULL, NULL, '1', NULL, 1, NULL, 1, '', NULL, '1', 1, NULL, NULL, '1', 1, NULL, NULL, NULL, '', '1', NULL, NULL, NULL, NULL, NULL, '0', NULL, NULL, NULL, NULL, '', '', NULL, NULL, NULL, NULL, NULL, NULL, '0', '0,2', '2', '1', '3', '1', '5', '1', '1778730497.webp,1725698763.png,826932557.png', 'uploads/1604382470.jpeg', 'Thihariyass', 'Kandyd', 'IN', 'hyderabad', 'FSDFSD', 'Madhapure', '523105', 1, 1, 1, 1, '2', NULL, 1, 0, '2020-11-12 00:00:00', 1, 1, 1, 1, 1, NULL, 1, 1, 1, '2020-11-20 00:00:00', 1, NULL, '2020-11-03 05:47:50', '2020-11-03 05:47:50', 1, '1'),
(105, NULL, 1, 1, '1', 'farmlands', 2, 2, 15000, '1', 1500, 1, 1500, 1, '1,3', '5000', '1', 1, '5000', NULL, '1', 1, NULL, NULL, NULL, '0,2', '1', 2, '1', NULL, NULL, NULL, '0', 2, 1, 1, 0, '0,2', '0,2', 1, 1, 1, 1, 2, '2', '0,2', '0,2', '4', '1', '0', '2', '0', '0', '381472301.jpg,908530971.webp,2116479069.png', 'uploads/1604389939.jpeg', 'Thihariyass', 'Kandyd', 'MD', 'hyderabad', 'asacx', 'mahehs', '523105', 12312, 1, 123, 1, '2', NULL, 1, 0, '2020-11-19 00:00:00', 1231123, 1, 1, 123, 123, NULL, 1, 123, 123, '2020-11-13 00:00:00', 1, NULL, '2020-11-03 07:52:19', '2020-11-03 07:52:19', 1, '1'),
(106, NULL, 2, 1, '25', 'apartment', 2, 1, 15000, '1', 1500, 1, 124, 1, '1,3', '5000', '1', 1, '5000', NULL, '1', 1, NULL, NULL, NULL, '2', '1', 0, '2', NULL, NULL, '<p>mahesh</p>', '0', 0, 1, 2, 1, '0,2,4', '0,4', 2, 1, 2, 1, 2, '2', '0,2', '0,2,2', '0', '0', '0', '0', '0', '0', '247720137.jpg,948757215.webp,562765960.png', 'uploads/1604507668.jpeg', 'Thihariyass', 'Kandyd', 'NE', 'hyderabad', 'asacx', 'Madhapure', '523105', NULL, 1, NULL, 1, NULL, NULL, NULL, 0, NULL, NULL, 1, 1, NULL, NULL, NULL, 1, NULL, NULL, NULL, 1, NULL, '2020-11-04 16:34:28', '2020-11-04 16:34:28', 1, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `propertyenquiry`
--

CREATE TABLE `propertyenquiry` (
  `id` int(11) NOT NULL,
  `name` varchar(100) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `question` varchar(100) DEFAULT NULL,
  `property_id` int(11) DEFAULT NULL,
  `reply` text DEFAULT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `propertyenquiry`
--

INSERT INTO `propertyenquiry` (`id`, `name`, `email`, `question`, `property_id`, `reply`, `created_at`, `updated_at`) VALUES
(2, 'ashok', 'maheshc@gmail.com', 'mahesh', NULL, 'test', '2020-10-20 13:06:17', '2020-10-20 13:06:17'),
(3, 'ashok', 'maheshc@gmail.com', 'mahesh', NULL, NULL, '2020-10-20 13:06:19', '2020-10-20 13:06:19'),
(14, 'teja', 'emahesh989@gmail.com', 'test', NULL, NULL, '2020-10-27 12:29:49', '2020-10-27 12:29:49'),
(15, NULL, NULL, NULL, NULL, NULL, '2020-10-31 10:57:44', '2020-10-31 10:57:44'),
(16, NULL, NULL, NULL, NULL, NULL, '2020-10-31 10:57:47', '2020-10-31 10:57:47'),
(17, NULL, NULL, NULL, NULL, NULL, '2020-10-31 10:57:55', '2020-10-31 10:57:55'),
(18, NULL, NULL, NULL, NULL, NULL, '2020-10-31 10:58:02', '2020-10-31 10:58:02'),
(19, 'mahesh', 'emahesh989@gmail.com', 'scz', NULL, NULL, '2020-10-31 10:58:11', '2020-10-31 10:58:11'),
(20, NULL, NULL, NULL, NULL, NULL, '2020-10-31 10:59:27', '2020-10-31 10:59:27'),
(21, NULL, NULL, NULL, NULL, NULL, '2020-10-31 11:01:07', '2020-10-31 11:01:07'),
(22, NULL, NULL, NULL, NULL, NULL, '2020-10-31 13:13:39', '2020-10-31 13:13:39'),
(23, 'mahesh', 'emahesh989@gmail.com', 'test', 84, NULL, '2020-10-31 13:19:35', '2020-10-31 13:19:35'),
(24, 'bathalapalli', 'sreekanth.bat@gmail.com', 'test', 105, NULL, '2020-11-30 14:21:48', '2020-11-30 14:21:48'),
(25, 'bathalapalli', 'sreekanth.bat@gmail.com', 'test', 105, NULL, '2020-11-30 14:21:50', '2020-11-30 14:21:50'),
(26, 'bathalapalli', 'sreekanth.bat@gmail.com', 'test', 105, NULL, '2020-11-30 14:21:55', '2020-11-30 14:21:55'),
(27, 'bathalapalli', 'sreekanth.bat@gmail.com', 'test', 105, NULL, '2020-11-30 14:22:00', '2020-11-30 14:22:00'),
(28, 'bathalapalli', 'sreekanth.bat@gmail.com', 'test', 105, NULL, '2020-11-30 14:22:02', '2020-11-30 14:22:02'),
(29, 'bathalapalli', 'sreekanth.bat@gmail.com', 'test', 105, NULL, '2020-11-30 14:22:02', '2020-11-30 14:22:02'),
(30, 'bathalapalli', 'sreekanth.bat@gmail.com', 'test', 105, NULL, '2020-11-30 14:22:03', '2020-11-30 14:22:03'),
(31, 'bathalapalli', 'sreekanth.bat@gmail.com', 'test', 105, NULL, '2020-11-30 14:22:05', '2020-11-30 14:22:05'),
(32, 'bathalapalli', 'sreekanth.bat@gmail.com', 'test', 105, NULL, '2020-11-30 14:22:05', '2020-11-30 14:22:05'),
(33, 'bathalapalli', 'sreekanth.bat@gmail.com', 'test', 105, NULL, '2020-11-30 14:22:05', '2020-11-30 14:22:05');

-- --------------------------------------------------------

--
-- Table structure for table `sales`
--

CREATE TABLE `sales` (
  `id` int(11) NOT NULL,
  `name` varchar(250) DEFAULT NULL,
  `enterprise_name` varchar(250) DEFAULT NULL,
  `phone` varchar(100) DEFAULT NULL,
  `mail` varchar(250) DEFAULT NULL,
  `about` text DEFAULT NULL,
  `licence_document` text DEFAULT NULL,
  `material_rate_chart` text DEFAULT NULL,
  `exp` int(11) DEFAULT NULL,
  `service` varchar(250) DEFAULT NULL,
  `logo` varchar(500) DEFAULT NULL,
  `address` text DEFAULT NULL,
  `branch` text DEFAULT NULL,
  `year` varchar(10) DEFAULT NULL,
  `websitelink` varchar(250) DEFAULT NULL,
  `status` int(11) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sales`
--

INSERT INTO `sales` (`id`, `name`, `enterprise_name`, `phone`, `mail`, `about`, `licence_document`, `material_rate_chart`, `exp`, `service`, `logo`, `address`, `branch`, `year`, `websitelink`, `status`, `created_at`, `updated_at`) VALUES
(1, 'ravali', 'ravali', '9876543210', 'edha.ravali@gmail.com', NULL, 'C:\\xampp\\tmp\\phpAEA9.tmp', 'C:\\xampp\\tmp\\phpAEAA.tmp', 2, NULL, 'C:\\xampp\\tmp\\phpAEAB.tmp', 'hyd', 'hyd', NULL, 'itremotejob.com', 1, '2020-10-19 07:43:07', '2020-10-19 07:43:07'),
(2, 'ravali', 'ravali', '9876543210', 'edha.ravali@gmail.com', NULL, 'C:\\xampp\\tmp\\php5792.tmp', 'C:\\xampp\\tmp\\php5793.tmp', 2, NULL, 'C:\\xampp\\tmp\\php57A6.tmp', 'hyd', 'hyd', '2015', 'itremotejob.com', 1, '2020-10-19 10:29:50', '2020-10-19 10:29:50'),
(3, 'ravali', 'sow', '9876543210', 'edha.ravali@gmail.com', NULL, 'C:\\xampp\\tmp\\php9F0B.tmp', NULL, 2, 'hyd', 'C:\\xampp\\tmp\\php9F0C.tmp', 'hyd', NULL, '2015', 'itremotejob.com', 1, '2020-10-19 10:38:52', '2020-10-19 10:38:52'),
(4, 'ravali', 'ravali', '9876543210', 'eddfs@gmail.com', NULL, 'C:\\xampp\\tmp\\phpF8D0.tmp', 'C:\\xampp\\tmp\\phpF8E0.tmp', 2, NULL, 'C:\\xampp\\tmp\\phpF8E2.tmp', 'hyd', 'hyd', '2016', 'itremotejob.com', 1, '2020-10-19 10:40:21', '2020-10-19 10:40:21'),
(7, 'ravali', 'sowmya123456789', '7702177125', 'edha.ravalio@gmail.com', NULL, 'sample.pdf', 'sample.pdf', NULL, NULL, 'Hydrangeas.jpg', 'hyd', 'hyd', '2016', 'itremotejob.com', 1, '2020-10-28 06:51:49', '2020-10-28 06:51:49'),
(8, 'ravali', 'sowmya', '7702177125', 'edha.ravalio@gmail.com', NULL, '/tmp/phpVaeUJr', '/tmp/phpxC651I', NULL, NULL, '/tmp/php3lzik0', 'hyd', 'hyd', '2018', 'itremotejob.com', NULL, '2020-10-31 12:57:02', '2020-10-31 12:57:02'),
(9, 'ravali', 'sowmya', '7702177125', 'edha.ravalio@gmail.com', NULL, '/tmp/phpNQ3Nqo', '/tmp/php9vuC31', NULL, NULL, '/tmp/phpQaxrGF', 'hyd', 'hyd', '2018', 'itremotejob.com', NULL, '2020-10-31 12:57:07', '2020-10-31 12:57:07'),
(10, 'mahesh', 'mahesh', '7702177125', 'edha.ravali@gmail.com', NULL, '/tmp/phpx3hosn', NULL, 9, 'hyd', '/tmp/phpX46hbb', 'hyd', NULL, '2019', 'itremotejob.com', 1, '2020-11-02 11:13:32', '2020-11-02 11:13:32');

-- --------------------------------------------------------

--
-- Table structure for table `servicecontact`
--

CREATE TABLE `servicecontact` (
  `id` int(11) NOT NULL,
  `name` varchar(250) DEFAULT NULL,
  `email` varchar(250) DEFAULT NULL,
  `question` varchar(250) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `slides`
--

CREATE TABLE `slides` (
  `id` int(11) NOT NULL,
  `title` varchar(250) NOT NULL,
  `logo` text DEFAULT NULL,
  `status` int(11) DEFAULT NULL,
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `slides`
--

INSERT INTO `slides` (`id`, `title`, `logo`, `status`, `updated_at`, `created_at`) VALUES
(18, 'Cyberabad Reality', 'uploads/1603881454.png', 1, '2020-10-28 10:37:34', '2020-10-28 10:37:34'),
(19, 'Cyberabad Realty', 'uploads/1603881484.png', 1, '2020-10-28 10:38:05', '2020-10-28 10:38:05');

-- --------------------------------------------------------

--
-- Table structure for table `subscribe`
--

CREATE TABLE `subscribe` (
  `id` int(11) NOT NULL,
  `subscribe_email` text NOT NULL,
  `status` int(11) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `subscribe`
--

INSERT INTO `subscribe` (`id`, `subscribe_email`, `status`, `created_at`, `updated_at`) VALUES
(6, 'knarasimha615@gmail.com', 1, '2020-10-30 15:03:36', '2020-10-30 15:03:36'),
(7, 'knarasimha615@gmail.com', 1, '2020-10-30 15:03:48', '2020-10-30 15:03:48'),
(8, 'knarasimha615@gmail.com', 1, '2020-10-30 15:03:50', '2020-10-30 15:03:50'),
(9, 'knarasimha615@gmail.com', 1, '2020-10-30 15:03:51', '2020-10-30 15:03:51'),
(10, 'knarasimha615@gmail.com', 1, '2020-10-30 15:03:58', '2020-10-30 15:03:58'),
(11, 'edha.ravali@gmail.com', 1, '2020-10-30 15:05:31', '2020-10-30 15:05:31'),
(12, 'edha.ravali@gmail.com', 0, '2020-10-30 15:05:49', '2020-10-30 15:05:49'),
(13, 'edha.ravali@gmail.com', 1, '2020-10-30 15:10:13', '2020-10-30 15:10:13'),
(27, 'kmlalnehru9@gmail.com', 0, '2020-11-03 18:01:10', '2020-11-03 18:54:06');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `first` varchar(50) DEFAULT NULL,
  `last` varchar(50) DEFAULT NULL,
  `email` varchar(250) DEFAULT NULL,
  `Mobileno` varchar(250) DEFAULT NULL,
  `password` varchar(250) DEFAULT NULL,
  `profile_pic` text DEFAULT NULL,
  `address` text DEFAULT NULL,
  `city` varchar(100) DEFAULT NULL,
  `country` varchar(100) DEFAULT NULL,
  `postal_code` varchar(100) DEFAULT NULL,
  `description` text DEFAULT NULL,
  `ip` varchar(250) DEFAULT NULL,
  `browser` varchar(250) DEFAULT NULL,
  `device` varchar(250) DEFAULT NULL,
  `os` varchar(250) DEFAULT NULL,
  `role` varchar(10) DEFAULT NULL,
  `otp` text DEFAULT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `first`, `last`, `email`, `Mobileno`, `password`, `profile_pic`, `address`, `city`, `country`, `postal_code`, `description`, `ip`, `browser`, `device`, `os`, `role`, `otp`, `created_at`, `updated_at`) VALUES
(13, 'lol444', 'sdgfd', 'kmlalnehru9@gmail.com', '8886165746', '$2y$10$/d8cumx/cKgT1Mp6H0DjpOBtbbPrQ7gGtQjxkFhKAO1Zv6qulpSX.', 'uploads/1603717687.jpeg', '1', '1', '1', NULL, NULL, '49.37.152.79', 'Chrome', 'Computer', 'Windows 7', NULL, NULL, '2020-10-24 13:57:22', '2020-10-31 10:24:55'),
(15, 'bhargav', 'gamidi', 'bhargavgamidi@gmail.com', '9640680076', '$2y$10$BhVHNyd5sYrwnFBIBdSiw.EbCwLAidoPLympUUFSt6pgEnT/0Wvya', 'uploads/1603717687.jpeg', NULL, NULL, NULL, NULL, NULL, '49.37.152.79', 'Chrome', 'Computer', 'Windows 10', 'Builder', NULL, '2020-10-26 06:24:09', '2020-10-26 06:24:09'),
(25, 'MAHESH', 'babu', 'emahesh989@gmail.com', '8185061595', '$2y$10$753/rLOeaU.sMFv7iHaPDetVBFyi9oeX7nsRfFQg3irbUEs7EvrJK', 'uploads/1604469770.jpeg', NULL, NULL, NULL, NULL, '<p>k</p>', '49.37.155.82', 'Chrome', 'Computer', 'Windows 10', 'Agent', NULL, '2020-11-03 06:41:18', '2020-12-07 07:07:15'),
(27, 'manoj', 'manoj', 'thatikondamanoj310@gmail.com', '9963039171', '$2y$10$kW9FqD6n2b2uEQsHredQiunhxsspbmzc7i0DR7PJA/cEPwNiwdFxK', 'uploads/1604469770.jpeg', NULL, NULL, NULL, NULL, NULL, '49.37.155.82', 'Chrome', 'Computer', 'Windows 7', 'Agent', NULL, '2020-11-04 07:20:08', '2020-11-04 07:20:58'),
(28, 'k', 'venkat', 'knarasimha615@gmail.com', '6281213452', '$2y$10$44p4zZfIW3ucGGZTgseP3.1V.JR1jBMgXzRDGtz.SRYdgazIRSvJy', 'uploads/1603717687.jpeg', NULL, NULL, NULL, NULL, NULL, '49.37.171.25', 'Chrome', 'Computer', 'Windows 10', 'Owner', NULL, '2020-11-06 05:59:17', '2020-11-06 05:59:17'),
(29, 'ravali', 'edha', 'edha.ravali@gmail.com', '7702177125', '$2y$10$7hnlfm26mIu7nTwLwxRPcuNfuIsUtmKPlLQ.1BZVX.ldvdtYYWv1y', 'uploads/1603717687.jpeg', NULL, NULL, NULL, NULL, NULL, '49.37.153.3', 'Chrome', 'Computer', 'Windows 7', 'Builder', NULL, '2020-11-17 05:42:02', '2020-11-17 05:42:55'),
(31, 'sree', 'k', 'ksreedhar15@gmail.com', '7799677339', '$2y$10$RgsF1U6rKh2F2m.uJmy2wOja7JmkvzRlXl03RV97JF/RFkyHx1Nny', NULL, NULL, NULL, NULL, NULL, NULL, '49.37.154.65', 'Chrome', 'Computer', 'Windows 7', 'Owner', NULL, '2020-12-07 12:37:26', '2020-12-07 12:38:02');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `addbuillderform`
--
ALTER TABLE `addbuillderform`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `advertise`
--
ALTER TABLE `advertise`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `blog`
--
ALTER TABLE `blog`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `blogform`
--
ALTER TABLE `blogform`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contactform`
--
ALTER TABLE `contactform`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `enquiry`
--
ALTER TABLE `enquiry`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `Enquiry_form`
--
ALTER TABLE `Enquiry_form`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `farmlandslides`
--
ALTER TABLE `farmlandslides`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `furniture`
--
ALTER TABLE `furniture`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `interior_service`
--
ALTER TABLE `interior_service`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `locations`
--
ALTER TABLE `locations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `profiles`
--
ALTER TABLE `profiles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `property`
--
ALTER TABLE `property`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `propertyenquiry`
--
ALTER TABLE `propertyenquiry`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sales`
--
ALTER TABLE `sales`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `servicecontact`
--
ALTER TABLE `servicecontact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `slides`
--
ALTER TABLE `slides`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `subscribe`
--
ALTER TABLE `subscribe`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `addbuillderform`
--
ALTER TABLE `addbuillderform`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=64;

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `advertise`
--
ALTER TABLE `advertise`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `blog`
--
ALTER TABLE `blog`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `blogform`
--
ALTER TABLE `blogform`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `contactform`
--
ALTER TABLE `contactform`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=241;

--
-- AUTO_INCREMENT for table `enquiry`
--
ALTER TABLE `enquiry`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `Enquiry_form`
--
ALTER TABLE `Enquiry_form`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=55;

--
-- AUTO_INCREMENT for table `farmlandslides`
--
ALTER TABLE `farmlandslides`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `furniture`
--
ALTER TABLE `furniture`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `interior_service`
--
ALTER TABLE `interior_service`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `locations`
--
ALTER TABLE `locations`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `profiles`
--
ALTER TABLE `profiles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `property`
--
ALTER TABLE `property`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=107;

--
-- AUTO_INCREMENT for table `propertyenquiry`
--
ALTER TABLE `propertyenquiry`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `sales`
--
ALTER TABLE `sales`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `servicecontact`
--
ALTER TABLE `servicecontact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `slides`
--
ALTER TABLE `slides`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `subscribe`
--
ALTER TABLE `subscribe`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
