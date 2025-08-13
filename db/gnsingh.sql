-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 05, 2024 at 11:08 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `gnsingh`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_about`
--

CREATE TABLE `tbl_about` (
  `id` int(11) NOT NULL,
  `about_title` text DEFAULT NULL,
  `about_des` text DEFAULT NULL,
  `about_image` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_about`
--

INSERT INTO `tbl_about` (`id`, `about_title`, `about_des`, `about_image`) VALUES
(1, 'About', '&lt;div class=&quot;about-main-area mb-70&quot;&gt;&lt;div class=&quot;container&quot;&gt;&lt;div class=&quot;row&quot;&gt;&lt;div class=&quot;&quot;&gt;&lt;div class=&quot;about-img&quot;&gt;&lt;div class=&quot;about-main-area mb-70&quot; style=&quot;flex-shrink: 0; width: 1134px; max-width: 100%; padding-right: calc(var(--bs-gutter-x) * .5); padding-left: calc(var(--bs-gutter-x) * .5); margin-top: var(--bs-gutter-y); margin-bottom: 70px; overflow: hidden;&quot;&gt;&lt;div class=&quot;container&quot; style=&quot;--bs-gutter-x: 1.5rem; --bs-gutter-y: 0; width: 1110px; padding-right: 15px; padding-left: 15px;&quot;&gt;&lt;div class=&quot;row&quot; style=&quot;--bs-gutter-x: 1.5rem; --bs-gutter-y: 0; margin-top: calc(-1 * var(--bs-gutter-y)); margin-right: calc(-.5 * var(--bs-gutter-x)); margin-left: calc(-.5 * var(--bs-gutter-x));&quot;&gt;&lt;div class=&quot;col-12&quot; style=&quot;width: 644px; padding-right: calc(var(--bs-gutter-x) * .5); padding-left: calc(var(--bs-gutter-x) * .5); margin-top: var(--bs-gutter-y);&quot;&gt;&lt;ol style=&quot;font-family: &amp;quot;Open Sans&amp;quot;, sans-serif; font-size: 14px;&quot;&gt;&lt;li style=&quot;overflow: hidden;&quot;&gt;&lt;span class=&quot;letter-space-2 text-uppercase&quot; style=&quot;color: rgb(128, 128, 128); letter-spacing: 2px; font-family: &amp;quot;open sans&amp;quot;, sans-serif; font-size: 15px;&quot;&gt;About Us&lt;/span&gt;&lt;h2 class=&quot;text-uppercase mt-0&quot; style=&quot;color: rgb(51, 51, 51); margin-bottom: 10px; font-weight: 600; line-height: 1.42857; font-size: 30px; font-family: &amp;quot;droid serif&amp;quot;, sans-serif;&quot;&gt;WELCOME TO&amp;nbsp;&lt;span class=&quot;text-theme-colored&quot; style=&quot;color: rgb(232, 0, 64) !important;&quot;&gt;G.N. Singh IAS Academy&lt;/span&gt;&lt;/h2&gt;&lt;h5 style=&quot;color: rgb(51, 51, 51); margin-top: 10px; margin-bottom: 10px; line-height: 1.42857; font-size: 14px; font-family: &amp;quot;droid serif&amp;quot;, sans-serif;&quot;&gt;&lt;p class=&quot;MsoNormal&quot;&gt;&lt;span style=&quot;font-family: &amp;quot;Times New Roman&amp;quot;, serif;&quot;&gt;&lt;b&gt;Test Namee&lt;/b&gt;&lt;br&gt;&lt;span style=&quot;font-weight: bolder;&quot;&gt;Founder&amp;nbsp; of G.N. Singh IAS Academy&lt;/span&gt;&lt;o:p&gt;&lt;/o:p&gt;&lt;/span&gt;&lt;/p&gt;&lt;/h5&gt;&lt;p class=&quot;MsoNormal&quot; style=&quot;color: rgb(102, 102, 102);&quot;&gt;G.N. Singh IAS Academy is dedicated to nurturing the next generation of civil servants through a comprehensive and innovative approach to education. With a team of experienced educators and a robust curriculum, the academy offers specialized coaching for aspirants preparing for the IAS exams. Emphasizing critical thinking, analytical skills, and a deep understanding of contemporary issues, G.N. Singh IAS Academy aims to empower students with the knowledge and confidence needed to excel in their journey toward becoming exemplary public servants. Through rigorous training, personalized mentorship, and a supportive learning environment, the academy stands as a beacon for aspiring leaders committed to serving the nation.&lt;br&gt;&lt;/p&gt;&lt;/li&gt;&lt;/ol&gt;&lt;/div&gt;&lt;div class=&quot;col-12&quot; style=&quot;width: 644px; padding-right: calc(var(--bs-gutter-x) * .5); padding-left: calc(var(--bs-gutter-x) * .5); margin-top: var(--bs-gutter-y);&quot;&gt;&lt;p style=&quot;font-family: &amp;quot;Open Sans&amp;quot;, sans-serif; font-size: 14px; color: rgb(102, 102, 102);&quot;&gt;&lt;/p&gt;&lt;/div&gt;&lt;/div&gt;&lt;/div&gt;&lt;/div&gt;&lt;/div&gt;&lt;/div&gt;&lt;/div&gt;&lt;/div&gt;&lt;/div&gt;', '1727231940_8646275.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_admin`
--

CREATE TABLE `tbl_admin` (
  `id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `username` varchar(255) DEFAULT NULL,
  `phone` text DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `state` int(11) NOT NULL,
  `city` varchar(255) DEFAULT NULL,
  `address` text DEFAULT NULL,
  `profile` varchar(255) DEFAULT NULL,
  `hospital_cir1` varchar(255) DEFAULT NULL,
  `hospital_cir2` varchar(255) DEFAULT NULL,
  `admin_type` int(1) NOT NULL DEFAULT 2,
  `status` int(1) NOT NULL DEFAULT 1,
  `verifiedEmail` int(11) NOT NULL,
  `token` varchar(255) DEFAULT NULL,
  `role` int(11) NOT NULL DEFAULT 0,
  `date` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_admin`
--

INSERT INTO `tbl_admin` (`id`, `name`, `username`, `phone`, `password`, `state`, `city`, `address`, `profile`, `hospital_cir1`, `hospital_cir2`, `admin_type`, `status`, `verifiedEmail`, `token`, `role`, `date`) VALUES
(1, 'Vedsar Pvt Ltd.', 'admin@gmail.com', '9234556789', '827ccb0eea8a706c4c34a16891f84e7b', 23, 'Allahabad', 'kareli', '1721267280_1524682.png', '', '', 1, 1, 0, '', 1, '2023-12-18'),
(31, 'Kapad Kaushal', 'karpadkaushal@gmail.com', '9234556789', '827ccb0eea8a706c4c34a16891f84e7b', 23, 'Allahabad', 'kareli', '1723102860_6103604.png', '', '', 1, 1, 0, '', 1, '2023-12-18');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_appoinment`
--

CREATE TABLE `tbl_appoinment` (
  `id` int(11) NOT NULL,
  `name` text DEFAULT NULL,
  `phone` text DEFAULT NULL,
  `subject` text DEFAULT NULL,
  `appoinment_date` text DEFAULT NULL,
  `message` text DEFAULT NULL,
  `create_at` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_banner`
--

CREATE TABLE `tbl_banner` (
  `id` int(11) NOT NULL,
  `title` text DEFAULT NULL,
  `image` text DEFAULT NULL,
  `status` int(1) NOT NULL DEFAULT 1,
  `date` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_banner`
--

INSERT INTO `tbl_banner` (`id`, `title`, `image`, `status`, `date`) VALUES
(9, 'test title', '1727229180_1916957.jpg', 1, '2024-09-25'),
(10, 'test title 2', '1727229240_784149.jpg', 1, '2024-09-25');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_cities`
--

CREATE TABLE `tbl_cities` (
  `id` int(11) NOT NULL,
  `city` varchar(255) NOT NULL,
  `state_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `tbl_cities`
--

INSERT INTO `tbl_cities` (`id`, `city`, `state_id`) VALUES
(1, 'North and Middle Andaman', 32),
(2, 'South Andaman', 32),
(3, 'Nicobar', 32),
(4, 'Adilabad', 1),
(5, 'Anantapur', 1),
(6, 'Chittoor', 1),
(7, 'East Godavari', 1),
(8, 'Guntur', 1),
(9, 'Hyderabad', 1),
(10, 'Kadapa', 1),
(11, 'Karimnagar', 1),
(12, 'Khammam', 1),
(13, 'Krishna', 1),
(14, 'Kurnool', 1),
(15, 'Mahbubnagar', 1),
(16, 'Medak', 1),
(17, 'Nalgonda', 1),
(18, 'Nellore', 1),
(19, 'Nizamabad', 1),
(20, 'Prakasam', 1),
(21, 'Rangareddi', 1),
(22, 'Srikakulam', 1),
(23, 'Vishakhapatnam', 1),
(24, 'Vizianagaram', 1),
(25, 'Warangal', 1),
(26, 'West Godavari', 1),
(27, 'Anjaw', 3),
(28, 'Changlang', 3),
(29, 'East Kameng', 3),
(30, 'Lohit', 3),
(31, 'Lower Subansiri', 3),
(32, 'Papum Pare', 3),
(33, 'Tirap', 3),
(34, 'Dibang Valley', 3),
(35, 'Upper Subansiri', 3),
(36, 'West Kameng', 3),
(37, 'Barpeta', 2),
(38, 'Bongaigaon', 2),
(39, 'Cachar', 2),
(40, 'Darrang', 2),
(41, 'Dhemaji', 2),
(42, 'Dhubri', 2),
(43, 'Dibrugarh', 2),
(44, 'Goalpara', 2),
(45, 'Golaghat', 2),
(46, 'Hailakandi', 2),
(47, 'Jorhat', 2),
(48, 'Karbi Anglong', 2),
(49, 'Karimganj', 2),
(50, 'Kokrajhar', 2),
(51, 'Lakhimpur', 2),
(52, 'Marigaon', 2),
(53, 'Nagaon', 2),
(54, 'Nalbari', 2),
(55, 'North Cachar Hills', 2),
(56, 'Sibsagar', 2),
(57, 'Sonitpur', 2),
(58, 'Tinsukia', 2),
(59, 'Araria', 4),
(60, 'Aurangabad', 4),
(61, 'Banka', 4),
(62, 'Begusarai', 4),
(63, 'Bhagalpur', 4),
(64, 'Bhojpur', 4),
(65, 'Buxar', 4),
(66, 'Darbhanga', 4),
(67, 'Purba Champaran', 4),
(68, 'Gaya', 4),
(69, 'Gopalganj', 4),
(70, 'Jamui', 4),
(71, 'Jehanabad', 4),
(72, 'Khagaria', 4),
(73, 'Kishanganj', 4),
(74, 'Kaimur', 4),
(75, 'Katihar', 4),
(76, 'Lakhisarai', 4),
(77, 'Madhubani', 4),
(78, 'Munger', 4),
(79, 'Madhepura', 4),
(80, 'Muzaffarpur', 4),
(81, 'Nalanda', 4),
(82, 'Nawada', 4),
(83, 'Patna', 4),
(84, 'Purnia', 4),
(85, 'Rohtas', 4),
(86, 'Saharsa', 4),
(87, 'Samastipur', 4),
(88, 'Sheohar', 4),
(89, 'Sheikhpura', 4),
(90, 'Saran', 4),
(91, 'Sitamarhi', 4),
(92, 'Supaul', 4),
(93, 'Siwan', 4),
(94, 'Vaishali', 4),
(95, 'Pashchim Champaran', 4),
(96, 'Bastar', 36),
(97, 'Bilaspur', 36),
(98, 'Dantewada', 36),
(99, 'Dhamtari', 36),
(100, 'Durg', 36),
(101, 'Jashpur', 36),
(102, 'Janjgir-Champa', 36),
(103, 'Korba', 36),
(104, 'Koriya', 36),
(105, 'Kanker', 36),
(106, 'Kawardha', 36),
(107, 'Mahasamund', 36),
(108, 'Raigarh', 36),
(109, 'Rajnandgaon', 36),
(110, 'Raipur', 36),
(111, 'Surguja', 36),
(112, 'Diu', 29),
(113, 'Daman', 29),
(114, 'Central Delhi', 25),
(115, 'East Delhi', 25),
(116, 'New Delhi', 25),
(117, 'North Delhi', 25),
(118, 'North East Delhi', 25),
(119, 'North West Delhi', 25),
(120, 'South Delhi', 25),
(121, 'South West Delhi', 25),
(122, 'West Delhi', 25),
(123, 'North Goa', 26),
(124, 'South Goa', 26),
(125, 'Ahmedabad', 5),
(126, 'Amreli District', 5),
(127, 'Anand', 5),
(128, 'Banaskantha', 5),
(129, 'Bharuch', 5),
(130, 'Bhavnagar', 5),
(131, 'Dahod', 5),
(132, 'The Dangs', 5),
(133, 'Gandhinagar', 5),
(134, 'Jamnagar', 5),
(135, 'Junagadh', 5),
(136, 'Kutch', 5),
(137, 'Kheda', 5),
(138, 'Mehsana', 5),
(139, 'Narmada', 5),
(140, 'Navsari', 5),
(141, 'Patan', 5),
(142, 'Panchmahal', 5),
(143, 'Porbandar', 5),
(144, 'Rajkot', 5),
(145, 'Sabarkantha', 5),
(146, 'Surendranagar', 5),
(147, 'Surat', 5),
(148, 'Vadodara', 5),
(149, 'Valsad', 5),
(150, 'Ambala', 6),
(151, 'Bhiwani', 6),
(152, 'Faridabad', 6),
(153, 'Fatehabad', 6),
(154, 'Gurgaon', 6),
(155, 'Hissar', 6),
(156, 'Jhajjar', 6),
(157, 'Jind', 6),
(158, 'Karnal', 6),
(159, 'Kaithal', 6),
(160, 'Kurukshetra', 6),
(161, 'Mahendragarh', 6),
(162, 'Mewat', 6),
(163, 'Panchkula', 6),
(164, 'Panipat', 6),
(165, 'Rewari', 6),
(166, 'Rohtak', 6),
(167, 'Sirsa', 6),
(168, 'Sonepat', 6),
(169, 'Yamuna Nagar', 6),
(170, 'Palwal', 6),
(171, 'Bilaspur', 7),
(172, 'Chamba', 7),
(173, 'Hamirpur', 7),
(174, 'Kangra', 7),
(175, 'Kinnaur', 7),
(176, 'Kulu', 7),
(177, 'Lahaul and Spiti', 7),
(178, 'Mandi', 7),
(179, 'Shimla', 7),
(180, 'Sirmaur', 7),
(181, 'Solan', 7),
(182, 'Una', 7),
(183, 'Anantnag', 8),
(184, 'Badgam', 8),
(185, 'Bandipore', 8),
(186, 'Baramula', 8),
(187, 'Doda', 8),
(188, 'Jammu', 8),
(189, 'Kargil', 8),
(190, 'Kathua', 8),
(191, 'Kupwara', 8),
(192, 'Leh', 8),
(193, 'Poonch', 8),
(194, 'Pulwama', 8),
(195, 'Rajauri', 8),
(196, 'Srinagar', 8),
(197, 'Samba', 8),
(198, 'Udhampur', 8),
(199, 'Bokaro', 34),
(200, 'Chatra', 34),
(201, 'Deoghar', 34),
(202, 'Dhanbad', 34),
(203, 'Dumka', 34),
(204, 'Purba Singhbhum', 34),
(205, 'Garhwa', 34),
(206, 'Giridih', 34),
(207, 'Godda', 34),
(208, 'Gumla', 34),
(209, 'Hazaribagh', 34),
(210, 'Koderma', 34),
(211, 'Lohardaga', 34),
(212, 'Pakur', 34),
(213, 'Palamu', 34),
(214, 'Ranchi', 34),
(215, 'Sahibganj', 34),
(216, 'Seraikela and Kharsawan', 34),
(217, 'Pashchim Singhbhum', 34),
(218, 'Ramgarh', 34),
(219, 'Bidar', 9),
(220, 'Belgaum', 9),
(221, 'Bijapur', 9),
(222, 'Bagalkot', 9),
(223, 'Bellary', 9),
(224, 'Bangalore Rural District', 9),
(225, 'Bangalore Urban District', 9),
(226, 'Chamarajnagar', 9),
(227, 'Chikmagalur', 9),
(228, 'Chitradurga', 9),
(229, 'Davanagere', 9),
(230, 'Dharwad', 9),
(231, 'Dakshina Kannada', 9),
(232, 'Gadag', 9),
(233, 'Gulbarga', 9),
(234, 'Hassan', 9),
(235, 'Haveri District', 9),
(236, 'Kodagu', 9),
(237, 'Kolar', 9),
(238, 'Koppal', 9),
(239, 'Mandya', 9),
(240, 'Mysore', 9),
(241, 'Raichur', 9),
(242, 'Shimoga', 9),
(243, 'Tumkur', 9),
(244, 'Udupi', 9),
(245, 'Uttara Kannada', 9),
(246, 'Ramanagara', 9),
(247, 'Chikballapur', 9),
(248, 'Yadagiri', 9),
(249, 'Alappuzha', 10),
(250, 'Ernakulam', 10),
(251, 'Idukki', 10),
(252, 'Kollam', 10),
(253, 'Kannur', 10),
(254, 'Kasaragod', 10),
(255, 'Kottayam', 10),
(256, 'Kozhikode', 10),
(257, 'Malappuram', 10),
(258, 'Palakkad', 10),
(259, 'Pathanamthitta', 10),
(260, 'Thrissur', 10),
(261, 'Thiruvananthapuram', 10),
(262, 'Wayanad', 10),
(263, 'Alirajpur', 11),
(264, 'Anuppur', 11),
(265, 'Ashok Nagar', 11),
(266, 'Balaghat', 11),
(267, 'Barwani', 11),
(268, 'Betul', 11),
(269, 'Bhind', 11),
(270, 'Bhopal', 11),
(271, 'Burhanpur', 11),
(272, 'Chhatarpur', 11),
(273, 'Chhindwara', 11),
(274, 'Damoh', 11),
(275, 'Datia', 11),
(276, 'Dewas', 11),
(277, 'Dhar', 11),
(278, 'Dindori', 11),
(279, 'Guna', 11),
(280, 'Gwalior', 11),
(281, 'Harda', 11),
(282, 'Hoshangabad', 11),
(283, 'Indore', 11),
(284, 'Jabalpur', 11),
(285, 'Jhabua', 11),
(286, 'Katni', 11),
(287, 'Khandwa', 11),
(288, 'Khargone', 11),
(289, 'Mandla', 11),
(290, 'Mandsaur', 11),
(291, 'Morena', 11),
(292, 'Narsinghpur', 11),
(293, 'Neemuch', 11),
(294, 'Panna', 11),
(295, 'Rewa', 11),
(296, 'Rajgarh', 11),
(297, 'Ratlam', 11),
(298, 'Raisen', 11),
(299, 'Sagar', 11),
(300, 'Satna', 11),
(301, 'Sehore', 11),
(302, 'Seoni', 11),
(303, 'Shahdol', 11),
(304, 'Shajapur', 11),
(305, 'Sheopur', 11),
(306, 'Shivpuri', 11),
(307, 'Sidhi', 11),
(308, 'Singrauli', 11),
(309, 'Tikamgarh', 11),
(310, 'Ujjain', 11),
(311, 'Umaria', 11),
(312, 'Vidisha', 11),
(313, 'Ahmednagar', 12),
(314, 'Akola', 12),
(315, 'Amrawati', 12),
(316, 'Aurangabad', 12),
(317, 'Bhandara', 12),
(318, 'Beed', 12),
(319, 'Buldhana', 12),
(320, 'Chandrapur', 12),
(321, 'Dhule', 12),
(322, 'Gadchiroli', 12),
(323, 'Gondiya', 12),
(324, 'Hingoli', 12),
(325, 'Jalgaon', 12),
(326, 'Jalna', 12),
(327, 'Kolhapur', 12),
(328, 'Latur', 12),
(329, 'Mumbai City', 12),
(330, 'Mumbai suburban', 12),
(331, 'Nandurbar', 12),
(332, 'Nanded', 12),
(333, 'Nagpur', 12),
(334, 'Nashik', 12),
(335, 'Osmanabad', 12),
(336, 'Parbhani', 12),
(337, 'Pune', 12),
(338, 'Raigad', 12),
(339, 'Ratnagiri', 12),
(340, 'Sindhudurg', 12),
(341, 'Sangli', 12),
(342, 'Solapur', 12),
(343, 'Satara', 12),
(344, 'Thane', 12),
(345, 'Wardha', 12),
(346, 'Washim', 12),
(347, 'Yavatmal', 12),
(348, 'Bishnupur', 13),
(349, 'Churachandpur', 13),
(350, 'Chandel', 13),
(351, 'Imphal East', 13),
(352, 'Senapati', 13),
(353, 'Tamenglong', 13),
(354, 'Thoubal', 13),
(355, 'Ukhrul', 13),
(356, 'Imphal West', 13),
(357, 'East Garo Hills', 14),
(358, 'East Khasi Hills', 14),
(359, 'Jaintia Hills', 14),
(360, 'Ri-Bhoi', 14),
(361, 'South Garo Hills', 14),
(362, 'West Garo Hills', 14),
(363, 'West Khasi Hills', 14),
(364, 'Aizawl', 15),
(365, 'Champhai', 15),
(366, 'Kolasib', 15),
(367, 'Lawngtlai', 15),
(368, 'Lunglei', 15),
(369, 'Mamit', 15),
(370, 'Saiha', 15),
(371, 'Serchhip', 15),
(372, 'Dimapur', 16),
(373, 'Kohima', 16),
(374, 'Mokokchung', 16),
(375, 'Mon', 16),
(376, 'Phek', 16),
(377, 'Tuensang', 16),
(378, 'Wokha', 16),
(379, 'Zunheboto', 16),
(380, 'Angul', 17),
(381, 'Boudh', 17),
(382, 'Bhadrak', 17),
(383, 'Bolangir', 17),
(384, 'Bargarh', 17),
(385, 'Baleswar', 17),
(386, 'Cuttack', 17),
(387, 'Debagarh', 17),
(388, 'Dhenkanal', 17),
(389, 'Ganjam', 17),
(390, 'Gajapati', 17),
(391, 'Jharsuguda', 17),
(392, 'Jajapur', 17),
(393, 'Jagatsinghpur', 17),
(394, 'Khordha', 17),
(395, 'Kendujhar', 17),
(396, 'Kalahandi', 17),
(397, 'Kandhamal', 17),
(398, 'Koraput', 17),
(399, 'Kendrapara', 17),
(400, 'Malkangiri', 17),
(401, 'Mayurbhanj', 17),
(402, 'Nabarangpur', 17),
(403, 'Nuapada', 17),
(404, 'Nayagarh', 17),
(405, 'Puri', 17),
(406, 'Rayagada', 17),
(407, 'Sambalpur', 17),
(408, 'Subarnapur', 17),
(409, 'Sundargarh', 17),
(410, 'Karaikal', 27),
(411, 'Mahe', 27),
(412, 'Puducherry', 27),
(413, 'Yanam', 27),
(414, 'Amritsar', 18),
(415, 'Bathinda', 18),
(416, 'Firozpur', 18),
(417, 'Faridkot', 18),
(418, 'Fatehgarh Sahib', 18),
(419, 'Gurdaspur', 18),
(420, 'Hoshiarpur', 18),
(421, 'Jalandhar', 18),
(422, 'Kapurthala', 18),
(423, 'Ludhiana', 18),
(424, 'Mansa', 18),
(425, 'Moga', 18),
(426, 'Mukatsar', 18),
(427, 'Nawan Shehar', 18),
(428, 'Patiala', 18),
(429, 'Rupnagar', 18),
(430, 'Sangrur', 18),
(431, 'Ajmer', 19),
(432, 'Alwar', 19),
(433, 'Bikaner', 19),
(434, 'Barmer', 19),
(435, 'Banswara', 19),
(436, 'Bharatpur', 19),
(437, 'Baran', 19),
(438, 'Bundi', 19),
(439, 'Bhilwara', 19),
(440, 'Churu', 19),
(441, 'Chittorgarh', 19),
(442, 'Dausa', 19),
(443, 'Dholpur', 19),
(444, 'Dungapur', 19),
(445, 'Ganganagar', 19),
(446, 'Hanumangarh', 19),
(447, 'Juhnjhunun', 19),
(448, 'Jalore', 19),
(449, 'Jodhpur', 19),
(450, 'Jaipur', 19),
(451, 'Jaisalmer', 19),
(452, 'Jhalawar', 19),
(453, 'Karauli', 19),
(454, 'Kota', 19),
(455, 'Nagaur', 19),
(456, 'Pali', 19),
(457, 'Pratapgarh', 19),
(458, 'Rajsamand', 19),
(459, 'Sikar', 19),
(460, 'Sawai Madhopur', 19),
(461, 'Sirohi', 19),
(462, 'Tonk', 19),
(463, 'Udaipur', 19),
(464, 'East Sikkim', 20),
(465, 'North Sikkim', 20),
(466, 'South Sikkim', 20),
(467, 'West Sikkim', 20),
(468, 'Ariyalur', 21),
(469, 'Chennai', 21),
(470, 'Coimbatore', 21),
(471, 'Cuddalore', 21),
(472, 'Dharmapuri', 21),
(473, 'Dindigul', 21),
(474, 'Erode', 21),
(475, 'Kanchipuram', 21),
(476, 'Kanyakumari', 21),
(477, 'Karur', 21),
(478, 'Madurai', 21),
(479, 'Nagapattinam', 21),
(480, 'The Nilgiris', 21),
(481, 'Namakkal', 21),
(482, 'Perambalur', 21),
(483, 'Pudukkottai', 21),
(484, 'Ramanathapuram', 21),
(485, 'Salem', 21),
(486, 'Sivagangai', 21),
(487, 'Tiruppur', 21),
(488, 'Tiruchirappalli', 21),
(489, 'Theni', 21),
(490, 'Tirunelveli', 21),
(491, 'Thanjavur', 21),
(492, 'Thoothukudi', 21),
(493, 'Thiruvallur', 21),
(494, 'Thiruvarur', 21),
(495, 'Tiruvannamalai', 21),
(496, 'Vellore', 21),
(497, 'Villupuram', 21),
(498, 'Dhalai', 22),
(499, 'North Tripura', 22),
(500, 'South Tripura', 22),
(501, 'West Tripura', 22),
(502, 'Almora', 33),
(503, 'Bageshwar', 33),
(504, 'Chamoli', 33),
(505, 'Champawat', 33),
(506, 'Dehradun', 33),
(507, 'Haridwar', 33),
(508, 'Nainital', 33),
(509, 'Pauri Garhwal', 33),
(510, 'Pithoragharh', 33),
(511, 'Rudraprayag', 33),
(512, 'Tehri Garhwal', 33),
(513, 'Udham Singh Nagar', 33),
(514, 'Uttarkashi', 33),
(515, 'Agra', 23),
(516, 'Allahabad', 23),
(517, 'Aligarh', 23),
(518, 'Ambedkar Nagar', 23),
(519, 'Auraiya', 23),
(520, 'Azamgarh', 23),
(521, 'Barabanki', 23),
(522, 'Badaun', 23),
(523, 'Bagpat', 23),
(524, 'Bahraich', 23),
(525, 'Bijnor', 23),
(526, 'Ballia', 23),
(527, 'Banda', 23),
(528, 'Balrampur', 23),
(529, 'Bareilly', 23),
(530, 'Basti', 23),
(531, 'Bulandshahr', 23),
(532, 'Chandauli', 23),
(533, 'Chitrakoot', 23),
(534, 'Deoria', 23),
(535, 'Etah', 23),
(536, 'Kanshiram Nagar', 23),
(537, 'Etawah', 23),
(538, 'Firozabad', 23),
(539, 'Farrukhabad', 23),
(540, 'Fatehpur', 23),
(541, 'Faizabad', 23),
(542, 'Gautam Buddha Nagar', 23),
(543, 'Gonda', 23),
(544, 'Ghazipur', 23),
(545, 'Gorkakhpur', 23),
(546, 'Ghaziabad', 23),
(547, 'Hamirpur', 23),
(548, 'Hardoi', 23),
(549, 'Mahamaya Nagar', 23),
(550, 'Jhansi', 23),
(551, 'Jalaun', 23),
(552, 'Jyotiba Phule Nagar', 23),
(553, 'Jaunpur District', 23),
(554, 'Kanpur Dehat', 23),
(555, 'Kannauj', 23),
(556, 'Kanpur Nagar', 23),
(557, 'Kaushambi', 23),
(558, 'Kushinagar', 23),
(559, 'Lalitpur', 23),
(560, 'Lakhimpur Kheri', 23),
(561, 'Lucknow', 23),
(562, 'Mau', 23),
(563, 'Meerut', 23),
(564, 'Maharajganj', 23),
(565, 'Mahoba', 23),
(566, 'Mirzapur', 23),
(567, 'Moradabad', 23),
(568, 'Mainpuri', 23),
(569, 'Mathura', 23),
(570, 'Muzaffarnagar', 23),
(571, 'Pilibhit', 23),
(572, 'Pratapgarh', 23),
(573, 'Rampur', 23),
(574, 'Rae Bareli', 23),
(575, 'Saharanpur', 23),
(576, 'Sitapur', 23),
(577, 'Shahjahanpur', 23),
(578, 'Sant Kabir Nagar', 23),
(579, 'Siddharthnagar', 23),
(580, 'Sonbhadra', 23),
(581, 'Sant Ravidas Nagar', 23),
(582, 'Sultanpur', 23),
(583, 'Shravasti', 23),
(584, 'Unnao', 23),
(585, 'Varanasi', 23),
(586, 'Birbhum', 24),
(587, 'Bankura', 24),
(588, 'Bardhaman', 24),
(589, 'Darjeeling', 24),
(590, 'Dakshin Dinajpur', 24),
(591, 'Hooghly', 24),
(592, 'Howrah', 24),
(593, 'Jalpaiguri', 24),
(594, 'Cooch Behar', 24),
(595, 'Kolkata', 24),
(596, 'Malda', 24),
(597, 'Midnapore', 24),
(598, 'Murshidabad', 24),
(599, 'Nadia', 24),
(600, 'North 24 Parganas', 24),
(601, 'South 24 Parganas', 24),
(602, 'Purulia', 24),
(603, 'Uttar Dinajpur', 24),
(604, 'Balod', 35),
(605, 'Baloda Bazar', 35),
(606, 'Balrampur', 35),
(607, 'Bastar', 35),
(608, 'Bemetara', 35),
(609, 'Bijapur', 35),
(610, 'Bilaspur', 35),
(611, 'Dantewada', 35),
(612, 'Dhamtari', 35),
(613, 'Durg', 35),
(614, 'Gariaband', 35),
(615, 'Janjgir-Champa', 35),
(616, 'Jashpur', 35),
(617, 'Kanker', 35),
(618, 'Kabirdham', 35),
(619, 'Korba', 35),
(620, 'Koriya', 35),
(621, 'Mahasamund', 35),
(622, 'Mungeli', 35),
(623, 'Narayanpur', 35),
(624, 'Raigarh', 35),
(625, 'Raipur', 35),
(626, 'Rajnandgaon', 35),
(627, 'Sukma', 35),
(628, 'Surajpur', 35),
(629, 'Surguja', 35);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_class`
--

CREATE TABLE `tbl_class` (
  `id` int(11) NOT NULL,
  `image` text DEFAULT NULL,
  `title` varchar(100) DEFAULT NULL,
  `class_fee` int(11) DEFAULT NULL,
  `start_date` date DEFAULT NULL,
  `end_date` date DEFAULT NULL,
  `start_time` time DEFAULT NULL,
  `end_time` time DEFAULT NULL,
  `student_capacity` int(6) DEFAULT NULL,
  `desc` text DEFAULT NULL,
  `status` int(1) NOT NULL DEFAULT 1,
  `created_at` datetime DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_class`
--

INSERT INTO `tbl_class` (`id`, `image`, `title`, `class_fee`, `start_date`, `end_date`, `start_time`, `end_time`, `student_capacity`, `desc`, `status`, `created_at`) VALUES
(1, '1727428260_2793680.jpg', 'à¤‡à¤¤à¤¿à¤¹à¤¾à¤¸ IAS/PCS/H.Ec/UGC/NET/PGT/LT...', 2700, '2024-09-25', '2024-10-10', '18:00:00', '19:00:00', 1000, 'lAS/PCS/H.Ec/NET/PGT/TGT/LT..', 1, '2024-09-25 07:19:38'),
(2, '1727428080_8906820.jpg', 'IAS/PCS/H.Ec/NET/PGT....', 7100, '2024-09-25', '2024-10-09', '19:00:00', '20:00:00', 1000, 'Best class for  PGT', 1, '2024-09-25 09:53:34'),
(3, '1727327460_2506607.jpg', 'à¤°à¤¾à¤œà¤¨à¥€à¤¤à¤¿ à¤µà¤¿à¤œà¥à¤žà¤¾à¤¨ TGT/LT Grade.....', 4100, '2024-09-25', '2024-10-10', '19:00:00', '20:00:00', 1000, 'à¤°à¤¾à¤œà¤¨à¥€à¤¤à¤¿ à¤µà¤¿à¤œà¥à¤žà¤¾à¤¨ TGT/LT Grade.....', 1, '2024-09-25 10:20:33');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_contact`
--

CREATE TABLE `tbl_contact` (
  `id` int(11) NOT NULL,
  `name` text DEFAULT NULL,
  `email` text DEFAULT NULL,
  `phone` text DEFAULT NULL,
  `subject` text DEFAULT NULL,
  `message` text DEFAULT NULL,
  `date` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_contact`
--

INSERT INTO `tbl_contact` (`id`, `name`, `email`, `phone`, `subject`, `message`, `date`) VALUES
(4, 'test', 'admin@gmail.com', '9875454565', 'class enquiry', 'when will the TGT Batch start', '2024-09-25 10:33:08');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_faq`
--

CREATE TABLE `tbl_faq` (
  `id` int(11) NOT NULL,
  `que` text DEFAULT NULL,
  `ans` text DEFAULT NULL,
  `status` int(1) NOT NULL DEFAULT 1,
  `create_at` date NOT NULL DEFAULT current_timestamp(),
  `create_by` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_faq`
--

INSERT INTO `tbl_faq` (`id`, `que`, `ans`, `status`, `create_at`, `create_by`) VALUES
(9, 'sample question', 'this is a sample question to demonstrate the answer to this sample question', 1, '2024-09-25', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_gallery`
--

CREATE TABLE `tbl_gallery` (
  `id` int(11) NOT NULL,
  `title` text DEFAULT NULL,
  `image` text DEFAULT NULL,
  `status` int(1) NOT NULL DEFAULT 1,
  `date` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_gallery`
--

INSERT INTO `tbl_gallery` (`id`, `title`, `image`, `status`, `date`) VALUES
(1, '#', '1722242640_6576065.jpg', 1, '2024-07-29'),
(2, '#', '1722242640_603253.jpg', 1, '2024-07-29'),
(3, '#', '1722242640_6610013.jpg', 1, '2024-07-29'),
(4, '#', '1722247560_6047240.jpg', 1, '2024-07-29');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_membership`
--

CREATE TABLE `tbl_membership` (
  `id` int(11) NOT NULL,
  `duration` int(11) NOT NULL,
  `price` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_membership`
--

INSERT INTO `tbl_membership` (`id`, `duration`, `price`) VALUES
(1, 12, 1999);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_notice`
--

CREATE TABLE `tbl_notice` (
  `id` int(11) NOT NULL,
  `title` text DEFAULT NULL,
  `des` text DEFAULT NULL,
  `notice_type` text DEFAULT NULL,
  `status` int(1) NOT NULL DEFAULT 1,
  `create_at` date NOT NULL DEFAULT current_timestamp(),
  `create_by` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_notice`
--

INSERT INTO `tbl_notice` (`id`, `title`, `des`, `notice_type`, `status`, `create_at`, `create_by`) VALUES
(1, 'Notice Title', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam interdum diam tortor, egestas varius.', 'All', 1, '2024-07-30', 0),
(2, 'Notice Title', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam interdum diam tortor, egestas varius.', 'Student', 1, '2024-07-30', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_privacy`
--

CREATE TABLE `tbl_privacy` (
  `id` int(11) NOT NULL,
  `privacy_policy` text DEFAULT NULL,
  `terms_condition` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_privacy`
--

INSERT INTO `tbl_privacy` (`id`, `privacy_policy`, `terms_condition`) VALUES
(1, '&lt;h1 style=&quot;color: rgb(34, 34, 34); font-family: Arial, Verdana, sans-serif;&quot;&gt;Privacy Policy&lt;/h1&gt;', '&lt;h1 style=&quot;color: rgb(34, 34, 34); font-family: Arial, Verdana, sans-serif;&quot;&gt;Terms and Conditions&lt;/h1&gt;&lt;ul style=&quot;padding-right: 40px; padding-left: 40px; color: rgb(34, 34, 34); font-family: Arial, Verdana, sans-serif; font-size: 12px;&quot;&gt;&lt;/ul&gt;');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_purchase`
--

CREATE TABLE `tbl_purchase` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL DEFAULT 0,
  `screeshot` text DEFAULT NULL,
  `status` int(1) NOT NULL DEFAULT 0,
  `create_at` datetime DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_states`
--

CREATE TABLE `tbl_states` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `tbl_states`
--

INSERT INTO `tbl_states` (`id`, `name`) VALUES
(1, 'ANDHRA PRADESH'),
(2, 'ASSAM'),
(3, 'ARUNACHAL PRADESH'),
(4, 'BIHAR'),
(5, 'GUJRAT'),
(6, 'HARYANA'),
(7, 'HIMACHAL PRADESH'),
(8, 'JAMMU & KASHMIR'),
(9, 'KARNATAKA'),
(10, 'KERALA'),
(11, 'MADHYA PRADESH'),
(12, 'MAHARASHTRA'),
(13, 'MANIPUR'),
(14, 'MEGHALAYA'),
(15, 'MIZORAM'),
(16, 'NAGALAND'),
(17, 'ORISSA'),
(18, 'PUNJAB'),
(19, 'RAJASTHAN'),
(20, 'SIKKIM'),
(21, 'TAMIL NADU'),
(22, 'TRIPURA'),
(23, 'UTTAR PRADESH'),
(24, 'WEST BENGAL'),
(25, 'DELHI'),
(26, 'GOA'),
(27, 'PONDICHERY'),
(28, 'LAKSHDWEEP'),
(29, 'DAMAN & DIU'),
(30, 'DADRA & NAGAR'),
(31, 'CHANDIGARH'),
(32, 'ANDAMAN & NICOBAR'),
(33, 'UTTARANCHAL'),
(34, 'JHARKHAND'),
(35, 'CHATTISGARH');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_trainer`
--

CREATE TABLE `tbl_trainer` (
  `id` int(11) NOT NULL,
  `profile` text DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `designation` text DEFAULT NULL,
  `phone` text DEFAULT NULL,
  `email` text DEFAULT NULL,
  `password` text DEFAULT NULL,
  `address` text DEFAULT NULL,
  `state_id` int(11) NOT NULL,
  `city_id` int(11) NOT NULL,
  `zip_code` int(11) NOT NULL DEFAULT 0,
  `status` int(1) NOT NULL DEFAULT 1,
  `create_at` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_trainer`
--

INSERT INTO `tbl_trainer` (`id`, `profile`, `name`, `designation`, `phone`, `email`, `password`, `address`, `state_id`, `city_id`, `zip_code`, `status`, `create_at`) VALUES
(1, '1722246720_365418.jpg', 'Kevin Martin', 'Master', '8844444444', 'test1@gmail.com', NULL, 'bbb', 23, 516, 211016, 1, '2024-07-27'),
(2, '1722246780_7066000.jpg', 'Martin Joy', 'Master', '7464444444', 'user1@gmail.com', NULL, 'bbbb', 23, 516, 211016, 1, '2024-07-29'),
(3, '1722246840_6435796.jpg', 'John Anderson', 'Master', '7464444444', 'user1@gmail.com', NULL, 'bbbb', 23, 516, 211016, 1, '2024-07-29'),
(4, '1722247260_2149839.jpg', 'Metrogyl', 'Master', '7464444444', 'user1@gmail.com', NULL, 'bbbb', 23, 516, 211016, 1, '2024-07-29');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_tutorial`
--

CREATE TABLE `tbl_tutorial` (
  `id` int(11) NOT NULL,
  `class_id` int(11) NOT NULL DEFAULT 0,
  `topic_type` int(2) DEFAULT NULL,
  `title` text DEFAULT NULL,
  `video` text DEFAULT NULL,
  `thumb` varchar(140) DEFAULT NULL,
  `video_id` varchar(100) DEFAULT NULL,
  `status` int(1) NOT NULL DEFAULT 1,
  `create_at` datetime NOT NULL DEFAULT current_timestamp(),
  `create_by` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_tutorial`
--

INSERT INTO `tbl_tutorial` (`id`, `class_id`, `topic_type`, `title`, `video`, `thumb`, `video_id`, `status`, `create_at`, `create_by`) VALUES
(3, 3, NULL, 'à¤°à¤¾à¤œà¤¨à¥€à¤¤à¤¿à¤• à¤¸à¤¿à¤¦à¥à¤§à¤¾à¤‚à¤¤//Demo//Class', 'https://www.youtube.com/embed/ivf8PEBwucI?si=f_iNVHwp7xpzZq0U', '1727485500_1726035.jpeg', 'ivf8PEBwucI', 1, '2024-09-26 11:48:44', 0),
(6, 2, NULL, 'à¤°à¤¾à¤œà¤¨à¥€à¤¤à¤¿à¤• à¤¸à¤¿à¤¦à¥à¤§à¤¾à¤‚à¤¤//Demo//Class.', 'www.youtube.com/embed/ivf8PEBwucI?si=VX3nu0fvoaslUE8O', '1727486220_6598371.jpeg', 'ivf8PEBwucI', 1, '2024-09-28 07:47:02', 0),
(7, 3, NULL, 'à¤°à¤¾à¤œà¤¨à¥€à¤¤à¤¿à¤• à¤¸à¤¿à¤¦à¥à¤§à¤¾à¤‚à¤¤// lecture-1//class-1', 'https://www.youtube.com/embed/a-zbKw_APB8?si=34IhNN-bAcgWadi9', '1727486460_1793464.jpeg', 'a-zbKw_APB8', 1, '2024-09-28 07:51:12', 0),
(8, 2, NULL, 'à¤°à¤¾à¤œà¤¨à¥€à¤¤à¤¿à¤• à¤¸à¤¿à¤¦à¥à¤§à¤¾à¤‚à¤¤// lecture-1//class-1', 'www.youtube.com/embed/a-zbKw_APB8?si=sR_edmRXS6A3JwWw', '1727486520_9601188.jpeg', 'a-zbKw_APB8', 1, '2024-09-28 07:52:48', 0),
(9, 3, NULL, 'à¤°à¤¾à¤œà¤¨à¥€à¤¤à¤¿à¤• à¤¸à¤¿à¤¦à¥à¤§à¤¾à¤‚à¤¤// lecture-2//class-2', 'https://www.youtube.com/embed/72Kq000rvII?si=tvsyRcqEFr70D7kj', '1727486700_5329122.jpeg', '72Kq000rvII', 1, '2024-09-28 07:55:15', 0),
(10, 2, NULL, 'à¤°à¤¾à¤œà¤¨à¥€à¤¤à¤¿à¤• à¤¸à¤¿à¤¦à¥à¤§à¤¾à¤‚à¤¤// lecture-2//class-2.', 'www.youtube.com/embed/72Kq000rvII?si=dknINkdbJBxZ0aR1', '1727486880_5670795.jpeg', '72Kq000rvII', 1, '2024-09-28 07:58:51', 0),
(11, 3, NULL, 'à¤°à¤¾à¤œà¤¨à¥€à¤¤à¤¿à¤• à¤¸à¤¿à¤¦à¥à¤§à¤¾à¤‚à¤¤// lecture-3//class-3', 'https://www.youtube.com/embed/UL4Fk9ojJM4?si=PqxZ-0JhiNeQI9Uu', '1727487180_5598511.jpeg', 'UL4Fk9ojJM4', 1, '2024-09-28 08:03:05', 0),
(12, 2, NULL, 'à¤°à¤¾à¤œà¤¨à¥€à¤¤à¤¿à¤• à¤¸à¤¿à¤¦à¥à¤§à¤¾à¤‚à¤¤// lecture-3//class-3', 'https://www.youtube.com/embed/UL4Fk9ojJM4?si=sZ4mu_YM8IGlPsDR', '1727487240_2105508.jpeg', 'UL4Fk9ojJM4', 1, '2024-09-28 08:04:41', 0),
(13, 3, NULL, 'à¤…à¤§à¥à¤¯à¤¾à¤¯ -1// lecture-2//class-4', 'https://www.youtube.com/embed/HqdT66sZzZc?si=yFGH7Ib1THnyl0m_', '1727487420_8295766.jpeg', 'HqdT66sZzZc', 1, '2024-09-28 08:07:30', 0),
(14, 2, NULL, 'à¤…à¤§à¥à¤¯à¤¾à¤¯ -1// lecture-2//class-4', 'https://www.youtube.com/embed/HqdT66sZzZc?si=-rzDi5nqLRWJK2jk', '1727487480_101410.jpeg', 'HqdT66sZzZc', 1, '2024-09-28 08:08:52', 0),
(15, 3, NULL, 'à¤…à¤§à¥à¤¯à¤¾à¤¯ -1// lecture-3//class-5', 'https://www.youtube.com/embed/3Ao7Z0wLfgc?si=R1k5P3ACfOXr9RCU', '1727487720_6470522.jpeg', '3Ao7Z0wLfgc', 1, '2024-09-28 08:12:04', 0),
(17, 2, NULL, 'à¤…à¤§à¥à¤¯à¤¾à¤¯ -1// lecture-3//class-5', 'https://www.youtube.com/embed/3Ao7Z0wLfgc?si=fS8npeQLR7CTkFja', '1727487900_9776341.jpeg', '3Ao7Z0wLfgc', 1, '2024-09-28 08:15:37', 0),
(18, 3, NULL, 'à¤…à¤§à¥à¤¯à¤¾à¤¯ -1// lecture-3//class-6', 'https://www.youtube.com/embed/BWWGbsbKYzQ?si=dwOKz_1BLVfb9sBG', '1727488020_9994145.jpeg', 'BWWGbsbKYzQ', 1, '2024-09-28 08:17:37', 0),
(19, 2, NULL, 'à¤…à¤§à¥à¤¯à¤¾à¤¯ -1// lecture-3//class-6', 'https://www.youtube.com/embed/BWWGbsbKYzQ?si=FmT_s5VLwoXR_1WD', '1727488140_7631931.jpeg', 'BWWGbsbKYzQ', 1, '2024-09-28 08:19:49', 0),
(20, 3, NULL, 'à¤…à¤§à¥à¤¯à¤¾à¤¯ -1// lecture-4//class-7', 'https://www.youtube.com/embed/9GqppVPTREQ?si=PDsHVClDV91JfgM5', '1727488440_6827433.jpeg', '9GqppVPTREQ', 1, '2024-09-28 08:24:50', 0),
(21, 2, NULL, 'à¤…à¤§à¥à¤¯à¤¾à¤¯ -1// lecture-4//class-7', 'https://www.youtube.com/embed/9GqppVPTREQ?si=GrQuCeP1dRoXIeSK', '1727488560_4329866.jpeg', '9GqppVPTREQ', 1, '2024-09-28 08:26:01', 0),
(22, 3, NULL, 'à¤…à¤§à¥à¤¯à¤¾à¤¯ -1// lecture-5//class-8', 'https://www.youtube.com/embed/Qqfgt009GRc?si=hQqHHJst2sKk3upI', '1727488680_3658250.jpeg', 'Qqfgt009GRc', 1, '2024-09-28 08:28:57', 0),
(23, 2, NULL, 'à¤…à¤§à¥à¤¯à¤¾à¤¯ -1// lecture-5//class-8', 'https://www.youtube.com/embed/Qqfgt009GRc?si=kN958Y09X8mMw2Cq', '1727488800_8109666.jpeg', 'Qqfgt009GRc', 1, '2024-09-28 08:30:08', 0),
(24, 3, NULL, 'à¤…à¤§à¥à¤¯à¤¾à¤¯ -3// lecture-1//class-9', 'https://www.youtube.com/embed/vM6fPSx6p1c?si=7gvNfs4cfgMeOjaK', '1727488920_8226012.jpeg', 'vM6fPSx6p1c', 1, '2024-09-28 08:32:22', 0),
(25, 2, NULL, 'à¤…à¤§à¥à¤¯à¤¾à¤¯ -3// lecture-1//class-9', 'https://www.youtube.com/embed/vM6fPSx6p1c?si=p4ePFxRbkcI2crSQ', '1727488980_9032301.jpeg', 'vM6fPSx6p1c', 1, '2024-09-28 08:33:33', 0),
(26, 3, NULL, 'à¤…à¤§à¥à¤¯à¤¾à¤¯ -3// lecture-2//class-10', 'https://www.youtube.com/embed/EcdX0IZEaBs?si=oCKKA9VO6m61iqzP', '1727489220_4324466.jpeg', 'EcdX0IZEaBs', 1, '2024-09-28 08:37:19', 0),
(27, 2, NULL, 'à¤…à¤§à¥à¤¯à¤¾à¤¯ -3// lecture-2//class-10', 'https://www.youtube.com/embed/EcdX0IZEaBs?si=Zqy0SN1Sx2IptLsn', '1727489280_2229557.jpeg', 'EcdX0IZEaBs', 1, '2024-09-28 08:38:14', 0),
(28, 3, NULL, 'à¤…à¤§à¥à¤¯à¤¾à¤¯ -4//à¤¸à¤‚à¤ªà¥à¤°à¤­à¥à¤¤à¤¾//lecture-1//class//11', 'https://www.youtube.com/embed/D9XOj_3xhnU?si=bhWjOT3veShW_Sv8', '1727489460_2288133.jpeg', 'D9XOj_3xhnU', 1, '2024-09-28 08:41:23', 0),
(29, 2, NULL, 'à¤…à¤§à¥à¤¯à¤¾à¤¯ -4//à¤¸à¤‚à¤ªà¥à¤°à¤­à¥à¤¤à¤¾//lecture-1//class//11', 'https://www.youtube.com/embed/D9XOj_3xhnU?si=rXgY_bInqp5usCA5', '1727489580_5128728.jpeg', 'D9XOj_3xhnU', 1, '2024-09-28 08:43:15', 0),
(31, 3, NULL, 'à¤…à¤§à¥à¤¯à¤¾à¤¯ -4//à¤¸à¤‚à¤ªà¥à¤°à¤­à¥à¤¤à¤¾//lecture-2//class//12', 'https://www.youtube.com/embed/qqJqIIRLnyw?si=qg4mgU5Ybzb2ohwc', '1727490060_9844672.jpeg', 'qqJqIIRLnyw', 1, '2024-09-28 08:51:17', 0),
(32, 2, NULL, 'à¤…à¤§à¥à¤¯à¤¾à¤¯ -4//à¤¸à¤‚à¤ªà¥à¤°à¤­à¥à¤¤à¤¾//lecture-2//class//12', 'https://www.youtube.com/embed/qqJqIIRLnyw?si=7Yp9e8MT_MkrgqCj', '1727490120_217141.jpeg', 'qqJqIIRLnyw', 1, '2024-09-28 08:52:21', 0),
(33, 3, NULL, 'à¤…à¤§à¥à¤¯à¤¾à¤¯ -4//à¤¸à¤‚à¤ªà¥à¤°à¤­à¥à¤¤à¤¾//lecture-4//class//14', 'https://www.youtube.com/embed/SwIQlaouBTQ?si=qikaoiTWQbgenlK1', '1727490540_9030799.jpeg', 'SwIQlaouBTQ', 1, '2024-09-28 08:59:04', 0),
(34, 2, NULL, 'à¤…à¤§à¥à¤¯à¤¾à¤¯ -4//à¤¸à¤‚à¤ªà¥à¤°à¤­à¥à¤¤à¤¾//lecture-4//class//14', 'https://www.youtube.com/embed/SwIQlaouBTQ?si=5xLVjsxU5trLGhe7', '1727490600_486938.jpeg', 'SwIQlaouBTQ', 1, '2024-09-28 09:00:06', 0),
(35, 3, NULL, 'à¤…à¤§à¥à¤¯à¤¾à¤¯ -4//à¤¸à¤‚à¤ªà¥à¤°à¤­à¥à¤¤à¤¾//lecture-5//class//15', 'https://www.youtube.com/embed/ZGJvDajjxEQ?si=8XlgUMIHHydNUyS7', '1727490720_8089329.jpeg', 'ZGJvDajjxEQ', 1, '2024-09-28 09:02:06', 0),
(36, 2, NULL, 'à¤…à¤§à¥à¤¯à¤¾à¤¯ -4//à¤¸à¤‚à¤ªà¥à¤°à¤­à¥à¤¤à¤¾//lecture-5//class//15', 'https://www.youtube.com/embed/ZGJvDajjxEQ?si=Q20x7l7gfZRetBPI', '1727490720_3312167.jpeg', 'ZGJvDajjxEQ', 1, '2024-09-28 09:02:59', 0),
(37, 3, NULL, 'à¤…à¤§à¥à¤¯à¤¾à¤¯ -5//à¤…à¤§à¤¿à¤•à¤¾à¤°//lecture-1//class//16', 'https://www.youtube.com/embed/y8RWkF7KufI?si=zSZBTwlQrzZu9AeK', '1727593680_6511926.jpeg', 'y8RWkF7KufI', 1, '2024-09-29 01:35:22', 0),
(39, 2, NULL, 'à¤…à¤§à¥à¤¯à¤¾à¤¯ -5//à¤…à¤§à¤¿à¤•à¤¾à¤°//lecture-1//class//16', 'https://www.youtube.com/embed/y8RWkF7KufI?si=sbnj5m6EM6RC87w9', 'https://img.youtube.com/vi/y8RWkF7KufI/hqdefault.jpg', 'y8RWkF7KufI', 1, '2024-09-29 01:36:30', 0),
(40, 3, NULL, 'à¤…à¤§à¥à¤¯à¤¾à¤¯ -5//à¤…à¤§à¤¿à¤•à¤¾à¤°//lecture-2//class//17', 'https://www.youtube.com/embed/RzRFQo45LWg?si=e8Pu7E3mTnygJEIn', '1727594040_9488738.jpeg', 'RzRFQo45LWg', 1, '2024-09-29 01:41:05', 0),
(41, 2, NULL, 'à¤…à¤§à¥à¤¯à¤¾à¤¯ -5//à¤…à¤§à¤¿à¤•à¤¾à¤°//lecture-2//class//17', 'https://www.youtube.com/embed/RzRFQo45LWg?si=hkK6UJs_inoLvtIP', '1727593920_5851236.jpeg', 'RzRFQo45LWg', 1, '2024-09-29 01:42:12', 0),
(42, 3, NULL, 'à¤…à¤§à¥à¤¯à¤¾à¤¯ -5//à¤…à¤§à¤¿à¤•à¤¾à¤°//lecture-3//class//18', 'https://www.youtube.com/embed/Sfq2OC-Xk8o?si=PIn8FHpaOUGqtQov', '1727594160_9389856.jpeg', 'Sfq2OC-Xk8o', 1, '2024-09-29 01:46:28', 0),
(43, 2, NULL, 'à¤…à¤§à¥à¤¯à¤¾à¤¯ -5//à¤…à¤§à¤¿à¤•à¤¾à¤°//lecture-3//class//18', 'https://www.youtube.com/embed/Sfq2OC-Xk8o?si=Wz9m0iA3ZzTKqWg2', '1727594220_3953979.jpeg', 'Sfq2OC-Xk8o', 1, '2024-09-29 01:47:51', 0),
(44, 3, NULL, 'à¤…à¤§à¥à¤¯à¤¾à¤¯ -5//à¤…à¤§à¤¿à¤•à¤¾à¤°//lecture-4//class//19', 'https://www.youtube.com/embed/MYuH61A7lQU?si=qheseA1sUCFww2g_', '1727594460_4054499.jpeg', 'MYuH61A7lQU', 1, '2024-09-29 01:51:33', 0),
(45, 2, NULL, 'à¤…à¤§à¥à¤¯à¤¾à¤¯ -5//à¤…à¤§à¤¿à¤•à¤¾à¤°//lecture-4//class//19', 'https://www.youtube.com/embed/MYuH61A7lQU?si=76x1rRUwLtbfnWHv', '1727594580_8238247.jpeg', 'MYuH61A7lQU', 1, '2024-09-29 01:53:04', 0),
(46, 3, NULL, 'à¤…à¤§à¥à¤¯à¤¾à¤¯ -6//à¤¸à¥à¤µà¤¤à¤‚à¤¤à¥à¤°à¤¤à¤¾ //lecture-1//class//20', 'https://www.youtube.com/embed/7X0-mcqXMLE?si=A2I_E6LKosSS5Agp', '1727594700_667973.jpeg', '7X0-mcqXMLE', 1, '2024-09-29 01:55:05', 0),
(47, 2, NULL, 'à¤…à¤§à¥à¤¯à¤¾à¤¯ -6//à¤¸à¥à¤µà¤¤à¤‚à¤¤à¥à¤°à¤¤à¤¾ //lecture-1//class//20', 'https://www.youtube.com/embed/7X0-mcqXMLE?si=9joXZktYDPNRvha9', '1727594760_1999762.jpeg', '7X0-mcqXMLE', 1, '2024-09-29 01:56:11', 0),
(48, 3, NULL, 'à¤…à¤§à¥à¤¯à¤¾à¤¯ -6//à¤¸à¥à¤µà¤¤à¤‚à¤¤à¥à¤°à¤¤à¤¾//lecture-2//class//21', 'https://www.youtube.com/embed/5GQjJqqd1EM?si=oJN8519VrFq6IrC3', '1727594940_171533.jpeg', '5GQjJqqd1EM', 1, '2024-09-29 01:59:02', 0),
(49, 2, NULL, 'à¤…à¤§à¥à¤¯à¤¾à¤¯ -6//à¤¸à¥à¤µà¤¤à¤‚à¤¤à¥à¤°à¤¤à¤¾//lecture-2//class//21', 'https://www.youtube.com/embed/5GQjJqqd1EM?si=4T1n1l6-X01bqk6I', '1727595000_8119348.jpeg', '5GQjJqqd1EM', 1, '2024-09-29 02:00:04', 0),
(50, 3, NULL, 'à¤…à¤§à¥à¤¯à¤¾à¤¯ -6//à¤¸à¥à¤µà¤¤à¤‚à¤¤à¥à¤°à¤¤à¤¾//lecture-3//class//22', 'https://www.youtube.com/embed/--rZ4SMvrEs?si=T93MspElqjonBwfb', '1727595060_3759425.jpeg', '--rZ4SMvrEs', 1, '2024-09-29 02:01:24', 0),
(51, 2, NULL, 'à¤…à¤§à¥à¤¯à¤¾à¤¯ -6//à¤¸à¥à¤µà¤¤à¤‚à¤¤à¥à¤°à¤¤à¤¾//lecture-3//class//22', 'https://www.youtube.com/embed/--rZ4SMvrEs?si=yqiMMYtu-h-2mmMu', '1727595120_2524901.jpeg', '--rZ4SMvrEs', 1, '2024-09-29 02:02:36', 0),
(52, 3, NULL, 'à¤…à¤§à¥à¤¯à¤¾à¤¯ -6//à¤¸à¥à¤µà¤¤à¤‚à¤¤à¥à¤°à¤¤à¤¾//lecture-4//class//23', 'https://www.youtube.com/embed/G6efW6TF2Ms?si=N24znfdeuuv66enF', '1727595240_2593566.jpeg', 'G6efW6TF2Ms', 1, '2024-09-29 02:04:39', 0),
(53, 2, NULL, 'à¤…à¤§à¥à¤¯à¤¾à¤¯ -6//à¤¸à¥à¤µà¤¤à¤‚à¤¤à¥à¤°à¤¤à¤¾//lecture-4//class//23', 'https://www.youtube.com/embed/G6efW6TF2Ms?si=DyKlH6PWDP9QAPDr', '1727595300_694549.jpeg', 'G6efW6TF2Ms', 1, '2024-09-29 02:05:38', 0),
(54, 3, NULL, 'à¤…à¤§à¥à¤¯à¤¾à¤¯ -7//à¤¸à¤®à¤¾à¤¨à¤¤à¤¾//lecture-1//class//24', 'https://www.youtube.com/embed/u98aWT1u5JE?si=8CgjlqA4NfTyksSs', '1727595420_3641937.jpeg', 'u98aWT1u5JE', 1, '2024-09-29 02:07:14', 0),
(55, 2, NULL, 'à¤…à¤§à¥à¤¯à¤¾à¤¯ -7//à¤¸à¤®à¤¾à¤¨à¤¤à¤¾//lecture-1//class//24', 'https://www.youtube.com/embed/u98aWT1u5JE?si=C_ED1IWgyGGAgTm4', '1727595480_5396663.jpeg', 'u98aWT1u5JE', 1, '2024-09-29 02:08:25', 0),
(56, 3, NULL, 'à¤…à¤§à¥à¤¯à¤¾à¤¯ -8//à¤¨à¥à¤¯à¤¾à¤¯//lecture-1//class//25', 'https://www.youtube.com/embed/IutgdDz4OAs?si=RuARyBxixFPAgqE5', '1727595780_7392153.jpeg', 'IutgdDz4OAs', 1, '2024-09-29 02:13:03', 0),
(57, 2, NULL, 'à¤…à¤§à¥à¤¯à¤¾à¤¯ -8//à¤¨à¥à¤¯à¤¾à¤¯//lecture-1//class//25', 'https://www.youtube.com/embed/IutgdDz4OAs?si=6OOihWCofb6LJO8X', '1727595840_4074412.jpeg', 'IutgdDz4OAs', 1, '2024-09-29 02:14:15', 0),
(58, 3, NULL, 'à¤…à¤§à¥à¤¯à¤¾à¤¯ -8//à¤¨à¥à¤¯à¤¾à¤¯//lecture-2//class//26', 'https://www.youtube.com/embed/OtPjDT39NFY?si=gJ0QUWJignDauklL', '1727595900_615317.jpeg', 'OtPjDT39NFY', 1, '2024-09-29 02:15:32', 0),
(59, 2, NULL, 'à¤…à¤§à¥à¤¯à¤¾à¤¯ -8//à¤¨à¥à¤¯à¤¾à¤¯//lecture-2//class//26', 'https://www.youtube.com/embed/OtPjDT39NFY?si=AA198gZ9HuZikWOx', '1727596020_301647.jpeg', 'OtPjDT39NFY', 1, '2024-09-29 02:17:09', 0),
(60, 3, NULL, 'à¤…à¤§à¥à¤¯à¤¾à¤¯ -9//à¤µà¤¿à¤§à¤¿ à¤à¤µà¤‚ à¤¦à¤‚à¤¡ à¤•à¤¾ à¤¸à¤¿à¤¦à¥à¤§à¤¾à¤‚à¤¤//lecture-1//class//27', 'https://www.youtube.com/embed/yuTpCyAUqbE?si=ADfrmEk33BOG0QPe', '1727605860_8445358.jpeg', 'yuTpCyAUqbE', 1, '2024-09-29 05:01:29', 0),
(61, 2, NULL, 'à¤…à¤§à¥à¤¯à¤¾à¤¯ -9//à¤µà¤¿à¤§à¤¿ à¤à¤µà¤‚ à¤¦à¤‚à¤¡ à¤•à¤¾ à¤¸à¤¿à¤¦à¥à¤§à¤¾à¤‚à¤¤//lecture-1//class//27', 'https://www.youtube.com/embed/yuTpCyAUqbE?si=Q0sTpfYCrZ_NglIU', '1727605920_1000970.jpeg', 'yuTpCyAUqbE', 1, '2024-09-29 05:02:33', 0),
(62, 3, NULL, 'à¤…à¤§à¥à¤¯à¤¾à¤¯ -10//à¤²à¥‹à¤•à¤¤à¤‚à¤¤à¥à¤° à¤à¤µà¤‚ à¤…à¤§à¤¿à¤¨à¤¾à¤¯à¤• à¤¤à¤‚à¤¤à¥à¤°//lecture-1//class//28', 'https://www.youtube.com/embed/MSRRerAbI4I?si=2XcpwAZ-cxUQkVMz', '1727606040_2321605.jpeg', 'MSRRerAbI4I', 1, '2024-09-29 05:04:02', 0),
(63, 2, NULL, 'à¤…à¤§à¥à¤¯à¤¾à¤¯ -10//à¤²à¥‹à¤•à¤¤à¤‚à¤¤à¥à¤° à¤à¤µà¤‚ à¤…à¤§à¤¿à¤¨à¤¾à¤¯à¤• à¤¤à¤‚à¤¤à¥à¤°//lecture-1//class//28', 'https://www.youtube.com/embed/MSRRerAbI4I?si=7xjSQIbPQIHVB-N7', '1727606100_7644537.jpeg', 'MSRRerAbI4I', 1, '2024-09-29 05:05:00', 0),
(64, 3, NULL, 'à¤…à¤§à¥à¤¯à¤¾à¤¯ -10//à¤²à¥‹à¤•à¤¤à¤‚à¤¤à¥à¤° à¤à¤µà¤‚ à¤…à¤§à¤¿à¤¨à¤¾à¤¯à¤• à¤¤à¤‚à¤¤à¥à¤°//lecture-2//class//29', 'https://www.youtube.com/embed/EtzkEra5irU?si=47aLts6knMXGnc9E', '1727606220_2793383.jpeg', 'EtzkEra5irU', 1, '2024-09-29 05:07:01', 0),
(65, 2, NULL, 'à¤…à¤§à¥à¤¯à¤¾à¤¯ -10//à¤²à¥‹à¤•à¤¤à¤‚à¤¤à¥à¤° à¤à¤µà¤‚ à¤…à¤§à¤¿à¤¨à¤¾à¤¯à¤• à¤¤à¤‚à¤¤à¥à¤°//lecture-2//class//29', 'https://www.youtube.com/embed/EtzkEra5irU?si=Fq-cq8i1FU2Vag8D', '1727606280_1958045.jpeg', 'EtzkEra5irU', 1, '2024-09-29 05:08:14', 0),
(66, 3, NULL, 'à¤…à¤§à¥à¤¯à¤¾à¤¯ -11/à¤¨à¤¾à¤—à¤°à¤¿à¤•à¤¤à¤¾//lecture-1//class//30', 'https://www.youtube.com/embed/fZENsPK2EIQ?si=csQeeS7CDyL0qrKL', '1727606460_7421119.jpeg', 'fZENsPK2EIQ', 1, '2024-09-29 05:11:00', 0),
(67, 2, NULL, 'à¤…à¤§à¥à¤¯à¤¾à¤¯ -11/à¤¨à¤¾à¤—à¤°à¤¿à¤•à¤¤à¤¾//lecture-1//class//30', 'https://www.youtube.com/embed/fZENsPK2EIQ?si=CoRtXjRzojjkWcKV', '1727606520_541656.jpeg', 'fZENsPK2EIQ', 1, '2024-09-29 05:12:15', 0),
(68, 3, NULL, 'à¤…à¤§à¥à¤¯à¤¾à¤¯ -12/à¤°à¤¾à¤œà¤¨à¥€à¤¤à¤¿ à¤µà¤¿à¤šà¤¾à¤°à¤§à¤¾à¤°à¤¾ (à¤‰à¤¦à¤¾à¤°à¤µà¤¾à¤¦)//lecture-1//class//31', 'https://www.youtube.com/embed/PHtUlDTinpI?si=CzzgFhQjtmClqHK8', '1727606640_9749589.jpeg', 'PHtUlDTinpI', 1, '2024-09-29 05:14:05', 0),
(69, 2, NULL, 'à¤…à¤§à¥à¤¯à¤¾à¤¯ -12/à¤°à¤¾à¤œà¤¨à¥€à¤¤à¤¿ à¤µà¤¿à¤šà¤¾à¤°à¤§à¤¾à¤°à¤¾ (à¤‰à¤¦à¤¾à¤°à¤µà¤¾à¤¦)//lecture-1//class//31', 'https://www.youtube.com/embed/PHtUlDTinpI?si=EBqD_9_J7WVvKcy_', '1727606700_2373201.jpeg', 'PHtUlDTinpI', 1, '2024-09-29 05:15:12', 0),
(70, 3, NULL, 'à¤…à¤§à¥à¤¯à¤¾à¤¯ -12/à¤°à¤¾à¤œà¤¨à¥€à¤¤à¤¿ à¤µà¤¿à¤šà¤¾à¤°à¤§à¤¾à¤°à¤¾ (à¤‰à¤¦à¤¾à¤°à¤µà¤¾à¤¦)//lecture-2//class//32', 'https://www.youtube.com/embed/uaEuBIu8Rgg?si=GWBuZKCSIdwn7Uxy', '1727606880_7385192.jpeg', 'uaEuBIu8Rgg', 1, '2024-09-29 05:18:29', 0),
(71, 2, NULL, 'à¤…à¤§à¥à¤¯à¤¾à¤¯ -12/à¤°à¤¾à¤œà¤¨à¥€à¤¤à¤¿ à¤µà¤¿à¤šà¤¾à¤°à¤§à¤¾à¤°à¤¾ (à¤‰à¤¦à¤¾à¤°à¤µà¤¾à¤¦)//lecture-2//class//32', 'https://www.youtube.com/embed/uaEuBIu8Rgg?si=FvjfcFTBuoIc7U-5', '1727606940_3326382.jpeg', 'uaEuBIu8Rgg', 1, '2024-09-29 05:19:43', 0),
(72, 3, NULL, 'à¤…à¤§à¥à¤¯à¤¾à¤¯ -12/à¤°à¤¾à¤œà¤¨à¥€à¤¤à¤¿ à¤µà¤¿à¤šà¤¾à¤°à¤§à¤¾à¤°à¤¾ (à¤‰à¤¦à¤¾à¤°à¤µà¤¾à¤¦)//lecture-3//class//33', 'https://www.youtube.com/embed/MgbsdqhvE60?si=H2Pj31NzTu7KnKkM', '1727607060_1210126.jpeg', 'MgbsdqhvE60', 1, '2024-09-29 05:21:30', 0),
(73, 2, NULL, 'à¤…à¤§à¥à¤¯à¤¾à¤¯ -12/à¤°à¤¾à¤œà¤¨à¥€à¤¤à¤¿ à¤µà¤¿à¤šà¤¾à¤°à¤§à¤¾à¤°à¤¾ (à¤‰à¤¦à¤¾à¤°à¤µà¤¾à¤¦)//lecture-3//class//33', 'https://www.youtube.com/embed/MgbsdqhvE60?si=hHMdrUf9DrKDAzoq', '1727607120_7055635.jpeg', 'MgbsdqhvE60', 1, '2024-09-29 05:22:28', 0),
(74, 3, NULL, 'à¤…à¤§à¥à¤¯à¤¾à¤¯ -12/à¤°à¤¾à¤œà¤¨à¥€à¤¤à¤¿ à¤µà¤¿à¤šà¤¾à¤°à¤§à¤¾à¤°à¤¾ (à¤‰à¤¦à¤¾à¤°à¤µà¤¾à¤¦)//lecture-4//class//34', 'https://www.youtube.com/embed/63wmX8C3LLQ?si=j6ky6Dz0c07UAnJ7', '1727607300_5891810.jpeg', '63wmX8C3LLQ', 1, '2024-09-29 05:25:46', 0),
(75, 2, NULL, 'à¤…à¤§à¥à¤¯à¤¾à¤¯ -12/à¤°à¤¾à¤œà¤¨à¥€à¤¤à¤¿ à¤µà¤¿à¤šà¤¾à¤°à¤§à¤¾à¤°à¤¾ (à¤‰à¤¦à¤¾à¤°à¤µà¤¾à¤¦)//lecture-4//class//34', 'https://www.youtube.com/embed/63wmX8C3LLQ?si=EdypZEygs0WFuZTk', '1727607360_2193089.jpeg', '63wmX8C3LLQ', 1, '2024-09-29 05:26:52', 0),
(76, 3, NULL, 'à¤…à¤§à¥à¤¯à¤¾à¤¯ -12/à¤°à¤¾à¤œà¤¨à¥€à¤¤à¤¿ à¤µà¤¿à¤šà¤¾à¤°à¤§à¤¾à¤°à¤¾ (à¤‰à¤¦à¤¾à¤°à¤µà¤¾à¤¦)//lecture-5//class//35', 'https://www.youtube.com/embed/fkwMeMSOTcg?si=Ky96WX7VSoRMs6cM', '1727607540_3483960.jpeg', 'fkwMeMSOTcg', 1, '2024-09-29 05:29:10', 0),
(77, 2, NULL, 'à¤…à¤§à¥à¤¯à¤¾à¤¯ -12/à¤°à¤¾à¤œà¤¨à¥€à¤¤à¤¿ à¤µà¤¿à¤šà¤¾à¤°à¤§à¤¾à¤°à¤¾ (à¤‰à¤¦à¤¾à¤°à¤µà¤¾à¤¦)//lecture-5//class//35', 'https://www.youtube.com/embed/fkwMeMSOTcg?si=VggCetYMYQE7Or1E', '1727607600_710170.jpeg', 'fkwMeMSOTcg', 1, '2024-09-29 05:30:04', 0),
(78, 3, NULL, 'à¤…à¤§à¥à¤¯à¤¾à¤¯ -13//à¤¸à¤®à¤¾à¤œà¤µà¤¾à¤¦/lecture-1//class//36', 'https://www.youtube.com/embed/H7_J8H5S_bQ?si=9XYViAKBiPv6RMz8', '1727607660_9018586.jpeg', 'H7_J8H5S_bQ', 1, '2024-09-29 05:31:34', 0),
(79, 2, NULL, 'à¤…à¤§à¥à¤¯à¤¾à¤¯ -13//à¤¸à¤®à¤¾à¤œà¤µà¤¾à¤¦/lecture-1//class//36', 'https://www.youtube.com/embed/H7_J8H5S_bQ?si=ehm9B34GY5kW-7zB', '1727607720_9797872.jpeg', 'H7_J8H5S_bQ', 1, '2024-09-29 05:32:38', 0),
(80, 3, NULL, 'à¤…à¤§à¥à¤¯à¤¾à¤¯ -13//à¤¸à¤®à¤¾à¤œà¤µà¤¾à¤¦/lecture-2//class//37', 'https://www.youtube.com/embed/KXiJxcDLRZY?si=iIQxNM3E0kF3uHzy', '1727607960_2248120.jpeg', 'KXiJxcDLRZY', 1, '2024-09-29 05:36:55', 0),
(81, 2, NULL, 'à¤…à¤§à¥à¤¯à¤¾à¤¯ -13//à¤¸à¤®à¤¾à¤œà¤µà¤¾à¤¦/lecture-2//class//37', 'https://www.youtube.com/embed/KXiJxcDLRZY?si=D4kmxSHfdbeyeMs2', '1727608140_9870457.jpeg', 'KXiJxcDLRZY', 1, '2024-09-29 05:39:03', 0),
(82, 3, NULL, 'à¤…à¤§à¥à¤¯à¤¾à¤¯ -13//à¤¸à¤®à¤¾à¤œà¤µà¤¾à¤¦/lecture-3//class//38', 'https://www.youtube.com/embed/jPlSL1c2tVs?si=GwbbG-aAwQj9kNTW', '1727608440_2617620.jpeg', 'jPlSL1c2tVs', 1, '2024-09-29 05:44:16', 0),
(83, 2, NULL, 'à¤…à¤§à¥à¤¯à¤¾à¤¯ -13//à¤¸à¤®à¤¾à¤œà¤µà¤¾à¤¦/lecture-3//class//38', 'https://www.youtube.com/embed/jPlSL1c2tVs?si=IrOF5vYrOmqoKt8R', '1727608500_7135360.jpeg', 'jPlSL1c2tVs', 1, '2024-09-29 05:45:15', 0),
(84, 3, NULL, 'à¤…à¤§à¥à¤¯à¤¾à¤¯ -13//à¤¸à¤®à¤¾à¤œà¤µà¤¾à¤¦/lecture-4//class//39', 'https://www.youtube.com/embed/xI1p-kUM1Rw?si=GqHKLv16crIQmk_W', '1727608560_9125442.jpeg', 'xI1p-kUM1Rw', 1, '2024-09-29 05:46:18', 0),
(85, 2, NULL, 'à¤…à¤§à¥à¤¯à¤¾à¤¯ -13//à¤¸à¤®à¤¾à¤œà¤µà¤¾à¤¦/lecture-4//class//39', 'https://www.youtube.com/embed/xI1p-kUM1Rw?si=ljpOjm_mXdPSWwb0', '1727608800_9372804.jpeg', 'xI1p-kUM1Rw', 1, '2024-09-29 05:50:38', 0),
(86, 3, NULL, 'à¤…à¤§à¥à¤¯à¤¾à¤¯ -13//à¤¸à¤®à¤¾à¤œà¤µà¤¾à¤¦/lecture-5//class//40', 'https://www.youtube.com/embed/yCE1gCD8Q3c?si=y-FLcJXgWyq7u7Xy', '1727608920_2369985.jpeg', 'yCE1gCD8Q3c', 1, '2024-09-29 05:52:39', 0),
(87, 2, NULL, 'à¤…à¤§à¥à¤¯à¤¾à¤¯ -13//à¤¸à¤®à¤¾à¤œà¤µà¤¾à¤¦/lecture-5//class//40', 'https://www.youtube.com/embed/yCE1gCD8Q3c?si=a-Kog0g7yX1miqrp', '1727609040_7598626.jpeg', 'yCE1gCD8Q3c', 1, '2024-09-29 05:54:04', 0),
(88, 3, NULL, 'à¤…à¤§à¥à¤¯à¤¾à¤¯ -13//à¤¸à¤®à¤¾à¤œà¤µà¤¾à¤¦/lecture-6//class//41', 'https://www.youtube.com/embed/d0O3LJjPF4E?si=1qtEPZH8nz_11JHm', '1727609100_2021972.jpeg', 'd0O3LJjPF4E', 1, '2024-09-29 05:55:20', 0),
(89, 2, NULL, 'à¤…à¤§à¥à¤¯à¤¾à¤¯ -13//à¤¸à¤®à¤¾à¤œà¤µà¤¾à¤¦/lecture-6//class//41', 'https://www.youtube.com/embed/d0O3LJjPF4E?si=dX0I9PLqazIop6dg', '1727609160_1913846.jpeg', 'd0O3LJjPF4E', 1, '2024-09-29 05:56:12', 0),
(90, 3, NULL, 'à¤…à¤§à¥à¤¯à¤¾à¤¯ -13//à¤¸à¤®à¤¾à¤œà¤µà¤¾à¤¦/lecture-7//class//42', 'https://www.youtube.com/embed/l21aN4IL4c0?si=TNMxRyZJBNexGlIF', '1727609220_158832.jpeg', 'l21aN4IL4c0', 1, '2024-09-29 05:57:34', 0),
(91, 2, NULL, 'à¤…à¤§à¥à¤¯à¤¾à¤¯ -13//à¤¸à¤®à¤¾à¤œà¤µà¤¾à¤¦/lecture-7//class//42', 'https://www.youtube.com/embed/l21aN4IL4c0?si=J4xXzgrjyP96DJ_f', '1727609400_3551076.jpeg', 'l21aN4IL4c0', 1, '2024-09-29 06:00:34', 0),
(92, 3, NULL, 'à¤…à¤§à¥à¤¯à¤¾à¤¯ -14//à¤¶à¥à¤°à¤®à¤¿à¤• à¤¸à¤‚à¤˜à¤µà¤¾à¤¦//à¤¶à¥à¤°à¥‡à¤£à¥€ à¤¸à¤®à¤¾à¤œà¤µà¤¾à¤¦//à¤…à¤°à¤¾à¤œà¤•à¤¤à¤¾à¤µà¤¾à¤¦/lecture-1//class//43', 'https://www.youtube.com/embed/PFOcMtGdWlg?si=D1mGXS83UV8gvjqh', '1727610180_4308374.jpeg', 'PFOcMtGdWlg', 1, '2024-09-29 06:13:24', 0),
(93, 2, NULL, 'à¤…à¤§à¥à¤¯à¤¾à¤¯ -14//à¤¶à¥à¤°à¤®à¤¿à¤• à¤¸à¤‚à¤˜à¤µà¤¾à¤¦//à¤¶à¥à¤°à¥‡à¤£à¥€ à¤¸à¤®à¤¾à¤œà¤µà¤¾à¤¦//à¤…à¤°à¤¾à¤œà¤•à¤¤à¤¾à¤µà¤¾à¤¦/lecture-1//class//43', 'https://www.youtube.com/embed/PFOcMtGdWlg?si=WUNfh0Z-TsEnJN2q', '1727610300_8541097.jpeg', 'PFOcMtGdWlg', 1, '2024-09-29 06:15:06', 0),
(94, 3, NULL, 'à¤…à¤§à¥à¤¯à¤¾à¤¯ -14//à¤¶à¥à¤°à¤®à¤¿à¤• à¤¸à¤‚à¤˜à¤µà¤¾à¤¦//à¤¶à¥à¤°à¥‡à¤£à¥€ à¤¸à¤®à¤¾à¤œà¤µà¤¾à¤¦//à¤…à¤°à¤¾à¤œà¤•à¤¤à¤¾à¤µà¤¾à¤¦/lecture-2//class//44', 'https://www.youtube.com/embed/QJT4Vf8ltio?si=yGeabFPHDl52AVUp', '1727575320_391370.jpeg', 'QJT4Vf8ltio', 1, '2024-09-29 08:32:05', 0),
(95, 2, NULL, 'à¤…à¤§à¥à¤¯à¤¾à¤¯ -14//à¤¶à¥à¤°à¤®à¤¿à¤• à¤¸à¤‚à¤˜à¤µà¤¾à¤¦//à¤¶à¥à¤°à¥‡à¤£à¥€ à¤¸à¤®à¤¾à¤œà¤µà¤¾à¤¦//à¤…à¤°à¤¾à¤œà¤•à¤¤à¤¾à¤µà¤¾à¤¦/lecture-2//class//44', 'https://www.youtube.com/embed/QJT4Vf8ltio?si=G_BqZ95mVrAA4bEl', '1727575380_5246740.jpeg', 'QJT4Vf8ltio', 1, '2024-09-29 08:33:13', 0),
(96, 3, NULL, 'à¤…à¤§à¥à¤¯à¤¾à¤¯ -14//à¤¶à¥à¤°à¤®à¤¿à¤• à¤¸à¤‚à¤˜à¤µà¤¾à¤¦//à¤¶à¥à¤°à¥‡à¤£à¥€ à¤¸à¤®à¤¾à¤œà¤µà¤¾à¤¦//à¤…à¤°à¤¾à¤œà¤•à¤¤à¤¾à¤µà¤¾à¤¦/lecture-3//class//45', 'https://www.youtube.com/embed/qtBeIafVxPw?si=IschrT8SHMIVl6yr', '1727575500_5101452.jpeg', 'qtBeIafVxPw', 1, '2024-09-29 08:35:08', 0),
(97, 2, NULL, 'à¤…à¤§à¥à¤¯à¤¾à¤¯ -14//à¤¶à¥à¤°à¤®à¤¿à¤• à¤¸à¤‚à¤˜à¤µà¤¾à¤¦//à¤¶à¥à¤°à¥‡à¤£à¥€ à¤¸à¤®à¤¾à¤œà¤µà¤¾à¤¦//à¤…à¤°à¤¾à¤œà¤•à¤¤à¤¾à¤µà¤¾à¤¦/lecture-3//class//45', 'https://www.youtube.com/embed/qtBeIafVxPw?si=7IHkANsalkQGsj_d', '1727575560_9717135.jpeg', 'qtBeIafVxPw', 1, '2024-09-29 08:36:04', 0),
(98, 3, NULL, 'à¤°à¤¾à¤œà¤¨à¥€à¤¤à¤¿à¤• à¤¸à¤¿à¤¦à¥à¤§à¤¾à¤‚à¤¤ à¤ªà¤° à¤†à¤§à¤¾à¤°à¤¿à¤¤ à¤•à¥à¤› à¤®à¤¹à¤¤à¥à¤µà¤ªà¥‚à¤°à¥à¤£ à¤ªà¥à¤°à¤¶à¥à¤¨/lecture-1//class//46', 'https://www.youtube.com/embed/uKT12YVwqc8?si=MVpQiwVZHzTCXw9G', '1727575680_9545788.jpeg', 'uKT12YVwqc8', 1, '2024-09-29 08:38:41', 0),
(99, 2, NULL, 'à¤°à¤¾à¤œà¤¨à¥€à¤¤à¤¿à¤• à¤¸à¤¿à¤¦à¥à¤§à¤¾à¤‚à¤¤ à¤ªà¤° à¤†à¤§à¤¾à¤°à¤¿à¤¤ à¤•à¥à¤› à¤®à¤¹à¤¤à¥à¤µà¤ªà¥‚à¤°à¥à¤£ à¤ªà¥à¤°à¤¶à¥à¤¨/lecture-1//class//46', '/www.youtube.com/embed/uKT12YVwqc8?si=JIikuOSi7vrsv74E', '1727575800_7295982.jpeg', 'uKT12YVwqc8', 1, '2024-09-29 08:39:59', 0),
(100, 3, NULL, 'à¤°à¤¾à¤œà¤¨à¥€à¤¤à¤¿à¤• à¤¸à¤¿à¤¦à¥à¤§à¤¾à¤‚à¤¤ à¤ªà¤° à¤†à¤§à¤¾à¤°à¤¿à¤¤ à¤•à¥à¤› à¤®à¤¹à¤¤à¥à¤µà¤ªà¥‚à¤°à¥à¤£ à¤ªà¥à¤°à¤¶à¥à¤¨/lecture-2//class//47', 'https://www.youtube.com/embed/MbF7pyVmEYU?si=Fg79KGjoScptlwhF', '1727576400_4343603.jpeg', 'MbF7pyVmEYU', 1, '2024-09-29 08:50:53', 0),
(101, 2, NULL, 'à¤°à¤¾à¤œà¤¨à¥€à¤¤à¤¿à¤• à¤¸à¤¿à¤¦à¥à¤§à¤¾à¤‚à¤¤ à¤ªà¤° à¤†à¤§à¤¾à¤°à¤¿à¤¤ à¤•à¥à¤› à¤®à¤¹à¤¤à¥à¤µà¤ªà¥‚à¤°à¥à¤£ à¤ªà¥à¤°à¤¶à¥à¤¨/lecture-2//class//47', 'https://www.youtube.com/embed/MbF7pyVmEYU?si=at06JdD7vXIRNRoR', '1727576580_3150109.jpeg', 'MbF7pyVmEYU', 1, '2024-09-29 08:53:08', 0),
(102, 3, NULL, 'à¤°à¤¾à¤œà¤¨à¥€à¤¤à¤¿à¤• à¤¸à¤¿à¤¦à¥à¤§à¤¾à¤‚à¤¤ à¤ªà¤° à¤†à¤§à¤¾à¤°à¤¿à¤¤ à¤•à¥à¤› à¤®à¤¹à¤¤à¥à¤µà¤ªà¥‚à¤°à¥à¤£ à¤ªà¥à¤°à¤¶à¥à¤¨/lecture-3//class//48', 'https://www.youtube.com/embed/ZFuLC8LSOzg?si=OPOulu4DzQkgq78N', '1727576700_5824277.jpeg', 'ZFuLC8LSOzg', 1, '2024-09-29 08:55:27', 0),
(103, 2, NULL, 'à¤°à¤¾à¤œà¤¨à¥€à¤¤à¤¿à¤• à¤¸à¤¿à¤¦à¥à¤§à¤¾à¤‚à¤¤ à¤ªà¤° à¤†à¤§à¤¾à¤°à¤¿à¤¤ à¤•à¥à¤› à¤®à¤¹à¤¤à¥à¤µà¤ªà¥‚à¤°à¥à¤£ à¤ªà¥à¤°à¤¶à¥à¤¨/lecture-3//class//48', 'https://www.youtube.com/embed/ZFuLC8LSOzg?si=C_ZUHxbXcwCDLPl7', '1727576940_297815.jpeg', 'ZFuLC8LSOzg', 1, '2024-09-29 08:59:11', 0),
(104, 3, NULL, 'à¤°à¤¾à¤œà¤¨à¥€à¤¤à¤¿à¤• à¤¸à¤¿à¤¦à¥à¤§à¤¾à¤‚à¤¤ à¤ªà¤° à¤†à¤§à¤¾à¤°à¤¿à¤¤ à¤•à¥à¤› à¤®à¤¹à¤¤à¥à¤µà¤ªà¥‚à¤°à¥à¤£ à¤ªà¥à¤°à¤¶à¥à¤¨/lecture-4//class//49', 'https://www.youtube.com/embed/-qnZdjdl97U?si=fOsG5uzXVjSNBxiV&quot; title=&quot;YouTube video player', '1727577000_5859238.jpeg', '-qnZdjdl97U', 1, '2024-09-29 09:00:30', 0),
(105, 2, NULL, 'à¤°à¤¾à¤œà¤¨à¥€à¤¤à¤¿à¤• à¤¸à¤¿à¤¦à¥à¤§à¤¾à¤‚à¤¤ à¤ªà¤° à¤†à¤§à¤¾à¤°à¤¿à¤¤ à¤•à¥à¤› à¤®à¤¹à¤¤à¥à¤µà¤ªà¥‚à¤°à¥à¤£ à¤ªà¥à¤°à¤¶à¥à¤¨/lecture-4//class//49', 'https://www.youtube.com/embed/-qnZdjdl97U?si=CsLUL6bMXWsKvi7m', '1727577060_9121052.jpeg', '-qnZdjdl97U', 1, '2024-09-29 09:01:59', 0),
(106, 3, NULL, 'à¤°à¤¾à¤œà¤¨à¥€à¤¤à¤¿à¤• à¤¸à¤¿à¤¦à¥à¤§à¤¾à¤‚à¤¤ à¤ªà¤° à¤†à¤§à¤¾à¤°à¤¿à¤¤ à¤•à¥à¤› à¤®à¤¹à¤¤à¥à¤µà¤ªà¥‚à¤°à¥à¤£ à¤ªà¥à¤°à¤¶à¥à¤¨/lecture-5//class//50', 'https://www.youtube.com/embed/mytCDpCzHfE?si=xqyylKyNTiGODwYj', '1727577720_7042760.jpeg', 'mytCDpCzHfE', 1, '2024-09-29 09:07:22', 0),
(107, 2, NULL, 'à¤°à¤¾à¤œà¤¨à¥€à¤¤à¤¿à¤• à¤¸à¤¿à¤¦à¥à¤§à¤¾à¤‚à¤¤ à¤ªà¤° à¤†à¤§à¤¾à¤°à¤¿à¤¤ à¤•à¥à¤› à¤®à¤¹à¤¤à¥à¤µà¤ªà¥‚à¤°à¥à¤£ à¤ªà¥à¤°à¤¶à¥à¤¨/lecture-5//class//50', 'https://www.youtube.com/embed/mytCDpCzHfE?si=9Wb5BehJRA0XNUuO', '1727578140_419618.jpeg', 'mytCDpCzHfE', 1, '2024-09-29 09:19:14', 0),
(108, 3, NULL, 'à¤…à¤§à¥à¤¯à¤¾à¤¯ -16//à¤¨à¤¾à¤°à¥€à¤µà¤¾à¤¦ /lecture-1//class//51', 'https://www.youtube.com/embed/Arbg-qCYKXY?si=djGj43RMVo9loOeR', '1727578260_8697477.jpeg', 'Arbg-qCYKXY', 1, '2024-09-29 09:21:14', 0),
(109, 2, NULL, 'à¤…à¤§à¥à¤¯à¤¾à¤¯ -16//à¤¨à¤¾à¤°à¥€à¤µà¤¾à¤¦ /lecture-1//class//51', 'https://www.youtube.com/embed/Arbg-qCYKXY?si=6lgEYZSODgcDDBk5', '1727578320_8751496.jpeg', 'Arbg-qCYKXY', 1, '2024-09-29 09:22:25', 0),
(110, 3, NULL, 'à¤…à¤§à¥à¤¯à¤¾à¤¯ -16// à¤ªà¤°à¥à¤¯à¤¾à¤µà¤°à¤£ à¤µà¤¾à¤¦ /lecture-1//class//52', 'https://www.youtube.com/embed/o0qOvNk00gQ?si=ArfDxNSS28GsYidW', '1727578500_5694489.jpeg', 'o0qOvNk00gQ', 1, '2024-09-29 09:25:59', 0),
(111, 2, NULL, 'à¤…à¤§à¥à¤¯à¤¾à¤¯ -16// à¤ªà¤°à¥à¤¯à¤¾à¤µà¤°à¤£ à¤µà¤¾à¤¦ /lecture-1//class//52', 'https://www.youtube.com/embed/o0qOvNk00gQ?si=CJcEGPy7Asv69dTF', '1727578620_2716324.jpeg', 'o0qOvNk00gQ', 1, '2024-09-29 09:27:29', 0),
(113, 3, NULL, 'à¤…à¤§à¥à¤¯à¤¾à¤¯ -16//à¤¸à¤®à¥à¤¦à¤¾à¤¯ à¤µà¤¾à¤¦//lecture-1//class//53', 'https://www.youtube.com/embed/4_bXFo15niw?si=Z9TqMw_K5qdMOLBX', '1727578980_7953266.jpeg', '4_bXFo15niw', 1, '2024-09-29 09:33:04', 0),
(114, 2, NULL, 'à¤…à¤§à¥à¤¯à¤¾à¤¯ -16//à¤¸à¤®à¥à¤¦à¤¾à¤¯ à¤µà¤¾à¤¦//lecture-1//class//53', 'https://www.youtube.com/embed/4_bXFo15niw?si=dtg_PCStXD48pS__', '1727579040_4282707.jpeg', '4_bXFo15niw', 1, '2024-09-29 09:34:38', 0),
(115, 3, NULL, 'à¤ªà¤¾à¤¶à¥à¤šà¤¾à¤¤à¥à¤¯ à¤°à¤¾à¤œà¤¨à¥€à¤¤à¤¿à¤• à¤šà¤¿à¤‚à¤¤à¤•à¥‹à¤‚ à¤•à¤¾ à¤‡à¤¤à¤¿à¤¹à¤¾à¤¸//lecture-1//class//54', 'https://www.youtube.com/embed/OVoikjluowg?si=7JkCQJD4s8GLeZkr', '1727579160_7434599.jpeg', 'OVoikjluowg', 1, '2024-09-29 09:36:44', 0),
(116, 2, NULL, 'à¤ªà¤¾à¤¶à¥à¤šà¤¾à¤¤à¥à¤¯ à¤°à¤¾à¤œà¤¨à¥€à¤¤à¤¿à¤• à¤šà¤¿à¤‚à¤¤à¤•à¥‹à¤‚ à¤•à¤¾ à¤‡à¤¤à¤¿à¤¹à¤¾à¤¸//lecture-1//class//54', 'https://www.youtube.com/embed/OVoikjluowg?si=wGY5UpLx9ToNaCDS', '1727579460_6458134.jpeg', 'OVoikjluowg', 1, '2024-09-29 09:37:59', 0),
(117, 3, NULL, 'à¤…à¤§à¥à¤¯à¤¾à¤¯ -18//à¤ªà¥à¤²à¥‡à¤Ÿà¥‹//lecture-1//class//55', 'https://www.youtube.com/embed/IAanRdhCieY?si=bOeJvluGTRxzwuwk', '1727579400_7471975.jpeg', 'IAanRdhCieY', 1, '2024-09-29 09:40:18', 0),
(118, 2, NULL, 'à¤…à¤§à¥à¤¯à¤¾à¤¯ -18//à¤ªà¥à¤²à¥‡à¤Ÿà¥‹//lecture-1//class//55', 'https://www.youtube.com/embed/IAanRdhCieY?si=ITL1aSBNtOIBidzE', '1727579460_2689113.jpeg', 'IAanRdhCieY', 1, '2024-09-29 09:41:08', 0),
(119, 3, NULL, 'à¤…à¤§à¥à¤¯à¤¾à¤¯ -18//à¤ªà¥à¤²à¥‡à¤Ÿà¥‹//lecture-2//class//56', 'https://www.youtube.com/embed/73afpA3z-ys?si=gTG234wsJM_uVtQi', '1727579640_1008734.jpeg', '73afpA3z-ys', 1, '2024-09-29 09:44:45', 0),
(120, 2, NULL, 'à¤…à¤§à¥à¤¯à¤¾à¤¯ -18//à¤ªà¥à¤²à¥‡à¤Ÿà¥‹//lecture-2//class//56', 'https://www.youtube.com/embed/73afpA3z-ys?si=kNoiW-O2F_6iLvMR', '1727579700_6651794.jpeg', '73afpA3z-ys', 1, '2024-09-29 09:45:34', 0),
(121, 3, NULL, 'à¤…à¤§à¥à¤¯à¤¾à¤¯ -18//à¤ªà¥à¤²à¥‡à¤Ÿà¥‹//lecture-3//class//57', 'https://www.youtube.com/embed/mcDFbdpPeZA?si=GaYXvBi9NaUNvUyt', '1727579760_1000695.jpeg', 'mcDFbdpPeZA', 1, '2024-09-29 09:46:56', 0),
(122, 2, NULL, 'à¤…à¤§à¥à¤¯à¤¾à¤¯ -18//à¤ªà¥à¤²à¥‡à¤Ÿà¥‹//lecture-3//class//57', 'https://www.youtube.com/embed/mcDFbdpPeZA?si=6T09grCCoJ5BX5kW', '1727579880_4093885.jpeg', 'mcDFbdpPeZA', 1, '2024-09-29 09:48:02', 0),
(123, 3, NULL, 'à¤…à¤°à¤¸à¥à¤¤à¥‚ lecture-1//class//58', 'https://www.youtube.com/embed/66u6auZy4pA?si=F4BQAYQHRa1LQVOi', '1727579940_4673922.jpeg', '66u6auZy4pA', 1, '2024-09-29 09:49:23', 0),
(124, 2, NULL, 'à¤…à¤°à¤¸à¥à¤¤à¥‚ lecture-1//class//58', 'https://www.youtube.com/embed/66u6auZy4pA?si=__vL7NjoO7ANDGsG', '1727580000_4702834.jpeg', '66u6auZy4pA', 1, '2024-09-29 09:50:31', 0),
(125, 3, NULL, 'à¤…à¤°à¤¸à¥à¤¤à¥‚ lecture-2//class//59', 'https://www.youtube.com/embed/0VNyAVH9sUw?si=NxSswskZvxb17Mbj', '1727580180_1255477.jpeg', '0VNyAVH9sUw', 1, '2024-09-29 09:53:13', 0),
(126, 2, NULL, 'à¤…à¤°à¤¸à¥à¤¤à¥‚ lecture-2//class//59', 'https://www.youtube.com/embed/0VNyAVH9sUw?si=mjlm0CNY5sGFgBSP', '1727580240_7864782.jpeg', '0VNyAVH9sUw', 1, '2024-09-29 09:54:08', 0),
(127, 3, NULL, 'à¤…à¤°à¤¸à¥à¤¤à¥‚ lecture-3//class//60', 'https://www.youtube.com/embed/sh3AqZ2LRM4?si=8mheKiGSzBFTMkKF', '1727580300_7656626.jpeg', 'sh3AqZ2LRM4', 1, '2024-09-29 09:55:28', 0),
(129, 2, NULL, 'à¤…à¤°à¤¸à¥à¤¤à¥‚ lecture-3//class//60', 'https://www.youtube.com/embed/sh3AqZ2LRM4?si=gMK4XbfT4TKcqo8s', '1727580540_2005316.jpeg', 'sh3AqZ2LRM4', 1, '2024-09-29 09:59:17', 0),
(130, 3, NULL, 'à¤…à¤°à¤¸à¥à¤¤à¥ à¤•à¥‡ à¤¬à¤¾à¤¦ à¤•à¤¾ à¤šà¤¿à¤‚à¤¤à¤¨ à¤à¤µà¤‚ à¤®à¤§à¥à¤¯ à¤•à¤¾à¤²lecture1-//class//61', 'https://www.youtube.com/embed/sLS1gTOuZvA?si=P8UpV2RFaW7KAlxf', '1727581080_5752935.jpeg', 'sLS1gTOuZvA', 1, '2024-09-29 10:08:02', 0),
(131, 2, NULL, 'à¤…à¤°à¤¸à¥à¤¤à¥ à¤•à¥‡ à¤¬à¤¾à¤¦ à¤•à¤¾ à¤šà¤¿à¤‚à¤¤à¤¨ à¤à¤µà¤‚ à¤®à¤§à¥à¤¯ à¤•à¤¾à¤²lecture1-//class//61', 'https://www.youtube.com/embed/sLS1gTOuZvA?si=X88zx6SB_-1Tj573', '1727581080_7763969.jpeg', 'sLS1gTOuZvA', 1, '2024-09-29 10:08:56', 0),
(132, 3, NULL, 'à¤®à¥ˆà¤•à¤¿à¤¯à¤¾à¤µà¥‡à¤²à¥€//lecture1-//class//62', 'https://www.youtube.com/embed/dMIkD-A9df4?si=SAOIit_ui1kybUn2', '1727581200_5381999.jpeg', 'dMIkD-A9df4', 1, '2024-09-29 10:10:30', 0),
(133, 2, NULL, 'à¤®à¥ˆà¤•à¤¿à¤¯à¤¾à¤µà¥‡à¤²à¥€//lecture1-//class//62', 'https://www.youtube.com/embed/dMIkD-A9df4?si=YaMt4A2U2PSPk8Xx', '1727581320_5256354.jpeg', 'dMIkD-A9df4', 1, '2024-09-29 10:12:12', 0),
(134, 3, NULL, 'à¤®à¥ˆà¤•à¤¿à¤¯à¤¾à¤µà¥‡à¤²à¥€//lecture2-//class//63', 'https://www.youtube.com/embed/nUWI59ZMtII?si=lMiJb7ghTkreShNg', '1727581380_598142.jpeg', 'nUWI59ZMtII', 1, '2024-09-29 10:13:10', 0),
(135, 2, NULL, 'à¤®à¥ˆà¤•à¤¿à¤¯à¤¾à¤µà¥‡à¤²à¥€//lecture2-//class//63', 'https://www.youtube.com/embed/nUWI59ZMtII?si=tpf0ZZTt98rrjssw', '1727581440_9179164.jpeg', 'nUWI59ZMtII', 1, '2024-09-29 10:14:00', 0),
(136, 3, NULL, 'à¤¹à¤¾à¤¬à¥à¤¸ //Lecture-1//class//64', 'https://www.youtube.com/embed/jOdfY8RkHKY?si=Ss0LUR_mmoPB8A0A', '1727581500_5095018.jpeg', 'jOdfY8RkHKY', 1, '2024-09-29 10:15:40', 0),
(137, 2, NULL, 'à¤¹à¤¾à¤¬à¥à¤¸ //Lecture-1//class//64', 'https://www.youtube.com/embed/jOdfY8RkHKY?si=DE-U4rXGBQokv5ri', '1727581620_5964466.jpeg', 'jOdfY8RkHKY', 1, '2024-09-29 10:17:09', 0),
(138, 3, NULL, 'à¤œà¥‰à¤¨ à¤²à¥‰à¤•// Lecture-1//class//65', 'https://www.youtube.com/embed/alKlxSHSUjc?si=6ZHE7O2d25L_O66u', '1727581740_9690633.jpeg', 'alKlxSHSUjc', 1, '2024-09-29 10:19:41', 0),
(139, 2, NULL, 'à¤œà¥‰à¤¨ à¤²à¥‰à¤•// Lecture-1//class//65', 'https://www.youtube.com/embed/alKlxSHSUjc?si=fL3dP08HpeTrr0pj', '1727581860_4452592.jpeg', 'alKlxSHSUjc', 1, '2024-09-29 10:21:29', 0),
(140, 3, NULL, 'à¤œà¥‰à¤¨ à¤²à¥‰à¤•// Lecture-2//class//66', 'https://www.youtube.com/embed/gNw-OecGX6M?si=yzLrIX0DzLhuDYqK', '1727581920_6518829.jpeg', 'gNw-OecGX6M', 1, '2024-09-29 10:22:39', 0),
(141, 2, NULL, 'à¤œà¥‰à¤¨ à¤²à¥‰à¤•// Lecture-2//class//66', 'https://www.youtube.com/embed/gNw-OecGX6M?si=WjgK7hfQgxJJcSav', '1727581980_4249245.jpeg', 'gNw-OecGX6M', 1, '2024-09-29 10:23:49', 0),
(142, 3, NULL, 'à¤œà¥€à¤¨ à¤œà¥ˆà¤•à¥à¤¸ à¤°à¥‚à¤¸à¥‹//lecture-1//class//67', 'https://www.youtube.com/embed/N0PuB57x-QM?si=n4Al4-OU3w-4UoHd', '1727698980_8644512.jpeg', 'N0PuB57x-QM', 1, '2024-09-30 06:53:41', 0),
(143, 2, NULL, 'à¤œà¥€à¤¨ à¤œà¥ˆà¤•à¥à¤¸ à¤°à¥‚à¤¸à¥‹//lecture-1//class//67', 'https://www.youtube.com/embed/N0PuB57x-QM?si=N6Ph6iUxtua2tut8', '1727699040_3735989.jpeg', 'N0PuB57x-QM', 1, '2024-09-30 06:54:39', 0),
(144, 3, NULL, 'à¤œà¥€à¤¨ à¤œà¥ˆà¤•à¥à¤¸ à¤°à¥‚à¤¸à¥‹//lecture-2//class//68', 'https://www.youtube.com/embed/fsxOBsirUE0?si=-_0A9o4-a0UcatAU', '1727699100_8964955.jpeg', 'fsxOBsirUE0', 1, '2024-09-30 06:55:53', 0),
(145, 2, NULL, 'à¤œà¥€à¤¨ à¤œà¥ˆà¤•à¥à¤¸ à¤°à¥‚à¤¸à¥‹//lecture-2//class//68', 'https://www.youtube.com/embed/fsxOBsirUE0?si=KG_yPHuwmZy53GQ8', '1727699160_9466888.jpeg', 'fsxOBsirUE0', 1, '2024-09-30 06:56:48', 0),
(146, 3, NULL, 'à¤œà¤°à¥à¤®à¥€ à¤¬à¥‡à¤‚à¤¥à¤®//Lecture-1//class//69', 'https://www.youtube.com/embed/B6fDudNaOro?si=0jXXwi0Lz6UhmWxj', '1727699280_2080006.jpeg', 'B6fDudNaOro', 1, '2024-09-30 06:58:02', 0),
(147, 2, NULL, 'à¤œà¤°à¥à¤®à¥€ à¤¬à¥‡à¤‚à¤¥à¤®//Lecture-1//class//69', 'https://www.youtube.com/embed/B6fDudNaOro?si=97i4vdtg0HgCXaRZ', '1727699280_1825046.jpeg', 'B6fDudNaOro', 1, '2024-09-30 06:58:57', 0),
(148, 3, NULL, 'à¤œà¤°à¥à¤®à¥€ à¤¬à¥‡à¤‚à¤¥à¤®//Lecture-2//class//70', 'https://www.youtube.com/embed/ltPdxg8OvxU?si=EKiNDbd_uu5c6KVK', '1727699400_2712513.jpeg', 'ltPdxg8OvxU', 1, '2024-09-30 07:00:11', 0),
(149, 2, NULL, 'à¤œà¤°à¥à¤®à¥€ à¤¬à¥‡à¤‚à¤¥à¤®//Lecture-2//class//70', 'https://www.youtube.com/embed/ltPdxg8OvxU?si=jm3kD5AzoraWa3oj', '1727699460_9943459.jpeg', 'ltPdxg8OvxU', 1, '2024-09-30 07:01:34', 0),
(150, 3, NULL, 'à¤œà¥‡ à¤à¤¸ à¤®à¤¿à¤²//lecturte-1//class//71', 'https://www.youtube.com/embed/P6HalNA5MQc?si=PG-EdPesE37836SF', '1727699700_9820690.jpeg', 'P6HalNA5MQc', 1, '2024-09-30 07:05:19', 0),
(151, 2, NULL, 'à¤œà¥‡ à¤à¤¸ à¤®à¤¿à¤²//lecturte-1//class//71', 'https://www.youtube.com/embed/P6HalNA5MQc?si=I4HbZqyLtvXIcc9K', '1727699820_6267169.jpeg', 'P6HalNA5MQc', 1, '2024-09-30 07:07:01', 0),
(152, 3, NULL, 'à¤œà¥‡ à¤à¤¸ à¤®à¤¿à¤²//lecturte-2//class//72', 'https://www.youtube.com/embed/fXlq39aSql0?si=xVWE2ApZaYREPBcf', '1727699880_543781.jpeg', 'fXlq39aSql0', 1, '2024-09-30 07:08:18', 0),
(153, 2, NULL, 'à¤œà¥‡ à¤à¤¸ à¤®à¤¿à¤²//lecturte-2//class//72', 'https://www.youtube.com/embed/fXlq39aSql0?si=u-XP6HF14vNihrKH', '1727700120_415209.jpeg', 'fXlq39aSql0', 1, '2024-09-30 07:12:13', 0),
(154, 3, NULL, 'à¤œà¥‡ à¤à¤¸ à¤®à¤¿à¤²//lecturte-3//class//73', 'https://www.youtube.com/embed/TzVk1bv_LQM?si=oPXiaFpyz-Ef2aI0', '1727700240_7323103.jpeg', 'TzVk1bv_LQM', 1, '2024-09-30 07:14:21', 0),
(155, 2, NULL, 'à¤œà¥‡ à¤à¤¸ à¤®à¤¿à¤²//lecturte-3//class//73', 'https://www.youtube.com/embed/TzVk1bv_LQM?si=d4j9N0tVDcWDHTxT', '1727700300_2983672.jpeg', 'TzVk1bv_LQM', 1, '2024-09-30 07:15:41', 0),
(156, 3, NULL, 'à¤†à¤¦à¤°à¥à¤¶à¤µà¤¾à¤¦//lecture-1//class//74', 'https://www.youtube.com/embed/_QGyKkKQxpc?si=d9P73tqg5TU2nHQa', '1727700360_4012161.jpeg', '_QGyKkKQxpc', 1, '2024-09-30 07:16:48', 0),
(157, 2, NULL, 'à¤†à¤¦à¤°à¥à¤¶à¤µà¤¾à¤¦//lecture-1//class//74', 'https://www.youtube.com/embed/_QGyKkKQxpc?si=gcmITQstlkjtpm6C', '1727700480_3652153.jpeg', '_QGyKkKQxpc', 1, '2024-09-30 07:18:03', 0),
(158, 3, NULL, 'à¤¹à¥€à¤—à¤²//lecture-1//class//75', 'https://www.youtube.com/embed/gw9k9Rb9gRc?si=lxc_6tTkJlnxmXiE', '1727700540_7786912.jpeg', 'gw9k9Rb9gRc', 1, '2024-09-30 07:19:48', 0),
(159, 2, NULL, 'à¤¹à¥€à¤—à¤²//lecture-1//class//75', 'https://www.youtube.com/embed/gw9k9Rb9gRc?si=0MvwPugj6lyHUCaq', '1727700600_8719105.jpeg', 'gw9k9Rb9gRc', 1, '2024-09-30 07:20:43', 0),
(160, 3, NULL, 'à¤¹à¥€à¤—à¤²//lecture-2//class//76', 'https://www.youtube.com/embed/6q30sW-g_xM?si=BtvOPGQ1OPV3vbM_', '1727700720_3399867.jpeg', '6q30sW-g_xM', 1, '2024-09-30 07:22:05', 0),
(161, 2, NULL, 'à¤¹à¥€à¤—à¤²//lecture-2//class//76', 'https://www.youtube.com/embed/6q30sW-g_xM?si=GJfe7ION7iJ8l1zb', '1727700780_1494380.jpeg', '6q30sW-g_xM', 1, '2024-09-30 07:23:02', 0),
(162, 3, NULL, 'à¤¥à¤¾à¥…à¤®à¤¸ à¤¹à¤¿à¤² à¤—à¥à¤°à¥€à¤¨//lecture-1//class//77', 'https://www.youtube.com/embed/zS1qeeSdRXc?si=-2VS_Vw2mdWcSxEg', '1727700840_3762563.jpeg', 'zS1qeeSdRXc', 1, '2024-09-30 07:24:44', 0),
(163, 2, NULL, 'à¤¥à¤¾à¥…à¤®à¤¸ à¤¹à¤¿à¤² à¤—à¥à¤°à¥€à¤¨//lecture-1//class//77', 'https://www.youtube.com/embed/zS1qeeSdRXc?si=3boGrGvVNKAo_a3E', '1727700960_542597.jpeg', 'zS1qeeSdRXc', 1, '2024-09-30 07:26:01', 0),
(164, 3, NULL, 'à¤¥à¤¾à¥…à¤®à¤¸ à¤¹à¤¿à¤² à¤—à¥à¤°à¥€à¤¨//lecture-2//class//78', 'https://www.youtube.com/embed/oCE4_2iGu0E?si=HfdGYG6S5ghy6WEJ', '1727701020_5496519.jpeg', 'oCE4_2iGu0E', 1, '2024-09-30 07:27:27', 0),
(165, 2, NULL, 'à¤¥à¤¾à¥…à¤®à¤¸ à¤¹à¤¿à¤² à¤—à¥à¤°à¥€à¤¨//lecture-2//class//78', 'https://www.youtube.com/embed/oCE4_2iGu0E?si=2pyQagYbmNMc2ZeY', '1727701080_9497294.jpeg', 'oCE4_2iGu0E', 1, '2024-09-30 07:28:30', 0),
(166, 3, NULL, 'à¤•à¤¾à¤°à¥à¤² à¤®à¤¾à¤°à¥à¤•à¥à¤¸//lecture-1//class//79', 'https://www.youtube.com/embed/iwMsk1NN65k?si=3yWXqR7N9aUd4gn-', '1727658120_8638061.jpeg', 'iwMsk1NN65k', 1, '2024-09-30 07:32:39', 0),
(167, 3, NULL, 'à¤•à¤¾à¤°à¥à¤² à¤®à¤¾à¤°à¥à¤•à¥à¤¸//lecture-1//class//79', 'https://www.youtube.com/embed/iwMsk1NN65k?si=3yWXqR7N9aUd4gn-', '1727658120_757029.jpeg', 'iwMsk1NN65k', 1, '2024-09-30 07:32:39', 0),
(168, 2, NULL, 'à¤•à¤¾à¤°à¥à¤² à¤®à¤¾à¤°à¥à¤•à¥à¤¸//lecture-1//class//79', 'https://www.youtube.com/embed/iwMsk1NN65k?si=fkf7EQayNcVm3c7b', '1727658180_8055962.jpeg', 'iwMsk1NN65k', 1, '2024-09-30 07:33:31', 0),
(169, 3, NULL, 'à¤•à¤¾à¤°à¥à¤² à¤®à¤¾à¤°à¥à¤•à¥à¤¸//lecture-2//class//80', 'https://www.youtube.com/embed/VJLHCk7Y1SQ?si=zJRSKcKDVwbICXEd', '1727658240_2970818.jpeg', 'VJLHCk7Y1SQ', 1, '2024-09-30 07:34:54', 0),
(170, 2, NULL, 'à¤•à¤¾à¤°à¥à¤² à¤®à¤¾à¤°à¥à¤•à¥à¤¸//lecture-2//class//80', 'https://www.youtube.com/embed/VJLHCk7Y1SQ?si=WNqDYuQcBYc008EN', '1727658360_9685836.jpeg', 'VJLHCk7Y1SQ', 1, '2024-09-30 07:36:55', 0),
(171, 3, NULL, 'à¤•à¤¾à¤°à¥à¤² à¤®à¤¾à¤°à¥à¤•à¥à¤¸//lecture-3//class//81', 'https://www.youtube.com/embed/wkoZuIZH1po?si=6zFlAh7xEUk1n0sB', '1727658480_4976619.jpeg', 'wkoZuIZH1po', 1, '2024-09-30 07:38:55', 0),
(172, 2, NULL, 'à¤•à¤¾à¤°à¥à¤² à¤®à¤¾à¤°à¥à¤•à¥à¤¸//lecture-3//class//81', 'https://www.youtube.com/embed/wkoZuIZH1po?si=OPZTA5bNKwc0Um23', '1727658660_9089673.jpeg', 'wkoZuIZH1po', 1, '2024-09-30 07:41:31', 0),
(173, 3, NULL, 'à¤•à¤¾à¤°à¥à¤² à¤®à¤¾à¤°à¥à¤•à¥à¤¸//lecture-4//class//82', 'https://www.youtube.com/embed/VtmwSNr0Gfk?si=XIa_ezMMBXbpLVM7', '1727659080_4851279.jpeg', 'VtmwSNr0Gfk', 1, '2024-09-30 07:48:41', 0),
(174, 2, NULL, 'à¤•à¤¾à¤°à¥à¤² à¤®à¤¾à¤°à¥à¤•à¥à¤¸//lecture-4//class//82', 'https://www.youtube.com/embed/VtmwSNr0Gfk?si=-mg1O8IM0Z6kXy1c', '1727659140_889795.jpeg', 'VtmwSNr0Gfk', 1, '2024-09-30 07:49:39', 0),
(175, 3, NULL, 'à¤•à¤¾à¤°à¥à¤² à¤®à¤¾à¤°à¥à¤•à¥à¤¸//lecture-5//class//83', 'https://www.youtube.com/embed/47SrlULVl9E?si=ScdxXykYaAp-eMNJ', '1727659500_7205444.jpeg', '47SrlULVl9E', 1, '2024-09-30 07:55:58', 0),
(176, 2, NULL, 'à¤•à¤¾à¤°à¥à¤² à¤®à¤¾à¤°à¥à¤•à¥à¤¸//lecture-5//class//83', 'https://www.youtube.com/embed/47SrlULVl9E?si=kL6Hm66QU4hZjLBt', '1727659620_7446072.jpeg', '47SrlULVl9E', 1, '2024-09-30 07:57:37', 0),
(178, 3, NULL, 'à¤²à¥‡à¤¨à¤¿à¤¨//lecture-1//class//84', 'https://www.youtube.com/embed/aFanbjoTHpI?si=Jh2b-3X7vS41zWXC', '1727659740_7540839.jpeg', 'aFanbjoTHpI', 1, '2024-09-30 07:59:26', 0),
(179, 2, NULL, 'à¤²à¥‡à¤¨à¤¿à¤¨//lecture-1//class//84', 'https://www.youtube.com/embed/aFanbjoTHpI?si=BbPCWGRtSsrcyIm1', '1727659800_4315356.jpeg', 'aFanbjoTHpI', 1, '2024-09-30 08:00:15', 0),
(180, 3, NULL, 'à¤œà¥‡à¤¦à¤¾à¤‚à¤— à¤®à¤¾à¤‰à¤¤à¥à¤¸à¥‡ à¤¤à¥à¤‚à¤—//lecture-1//class//85', 'https://www.youtube.com/embed/u5bcm6Qi13I?si=JZRqRE26XNbfETKX', '1727659920_6788305.jpeg', 'u5bcm6Qi13I', 1, '2024-09-30 08:02:21', 0),
(181, 2, NULL, 'à¤œà¥‡à¤¦à¤¾à¤‚à¤— à¤®à¤¾à¤‰à¤¤à¥à¤¸à¥‡ à¤¤à¥à¤‚à¤—//lecture-1//class//85', 'https://www.youtube.com/embed/u5bcm6Qi13I?si=kuipLr46t-mk1kxr', '1727659980_2322567.jpeg', 'u5bcm6Qi13I', 1, '2024-09-30 08:03:18', 0),
(182, 3, NULL, 'à¤•à¥à¤› à¤®à¤¹à¤¤à¥à¤µà¤ªà¥‚à¤°à¥à¤£ à¤ªà¥à¤°à¤¶à¥à¤¨//class//86', 'https://www.youtube.com/embed/fiC4yZxhI0I?si=-y914KjK-Bff32mP', '1727660040_5707325.jpeg', 'fiC4yZxhI0I', 1, '2024-09-30 08:04:51', 0),
(183, 2, NULL, 'à¤•à¥à¤› à¤®à¤¹à¤¤à¥à¤µà¤ªà¥‚à¤°à¥à¤£ à¤ªà¥à¤°à¤¶à¥à¤¨//class//86', 'https://www.youtube.com/embed/fiC4yZxhI0I?si=ldvlGEzyjGRJmSW_', '1727660100_7295515.jpeg', 'fiC4yZxhI0I', 1, '2024-09-30 08:05:40', 0),
(184, 3, NULL, 'à¤•à¥à¤› à¤®à¤¹à¤¤à¥à¤µà¤ªà¥‚à¤°à¥à¤£ à¤ªà¥à¤°à¤¶à¥à¤¨//class//87', 'https://www.youtube.com/embed/TCWR9seY6D4?si=gXpJQFmWhnNqn9CU', '1727660220_8963467.jpeg', 'TCWR9seY6D4', 1, '2024-09-30 08:07:40', 0),
(185, 2, NULL, 'à¤•à¥à¤› à¤®à¤¹à¤¤à¥à¤µà¤ªà¥‚à¤°à¥à¤£ à¤ªà¥à¤°à¤¶à¥à¤¨//class//87', 'https://www.youtube.com/embed/TCWR9seY6D4?si=ZQ8lz-3HD9pSahc4', '1727660340_7469695.jpeg', 'TCWR9seY6D4', 1, '2024-09-30 08:09:15', 0),
(186, 3, NULL, 'à¤­à¤¾à¤°à¤¤à¥€à¤¯ à¤°à¤¾à¤œà¤¨à¥€à¤¤à¤¿à¤• à¤šà¤¿à¤‚à¤¤à¤¨ à¤•à¥€ à¤µà¤¿à¤¶à¥‡à¤·à¤¤à¤¾à¤à¤‚//class//88', 'https://www.youtube.com/embed/rxKF_O41370?si=ZVHVU3z76n1T2jP1', '1727660460_3062205.jpeg', 'rxKF_O41370', 1, '2024-09-30 08:11:01', 0),
(187, 2, NULL, 'à¤­à¤¾à¤°à¤¤à¥€à¤¯ à¤°à¤¾à¤œà¤¨à¥€à¤¤à¤¿à¤• à¤šà¤¿à¤‚à¤¤à¤¨ à¤•à¥€ à¤µà¤¿à¤¶à¥‡à¤·à¤¤à¤¾à¤à¤‚//class//88', 'https://www.youtube.com/embed/rxKF_O41370?si=Gcy-3w0QQTUfXHIv', '1727660460_5104826.jpeg', 'rxKF_O41370', 1, '2024-09-30 08:11:58', 0),
(188, 3, NULL, 'à¤µà¥ˆà¤µà¤¸à¥à¤¤à¥ à¤®à¤¨à¥//lecture-1//class//89', 'https://www.youtube.com/embed/J_Ut3ajb1Aw?si=jbFIQDTEGKaR6OyQ', '1727660580_3239383.jpeg', 'J_Ut3ajb1Aw', 1, '2024-09-30 08:13:33', 0),
(189, 2, NULL, 'à¤µà¥ˆà¤µà¤¸à¥à¤¤à¥ à¤®à¤¨à¥//lecture-1//class//89', 'https://www.youtube.com/embed/J_Ut3ajb1Aw?si=bR-jjw06kjgqXfJ9', '1727660640_2175895.jpeg', 'J_Ut3ajb1Aw', 1, '2024-09-30 08:14:44', 0),
(190, 3, NULL, 'à¤•à¥Œà¤Ÿà¤¿à¤²à¥à¤¯//lecture-1////class//90', 'https://www.youtube.com/embed/sl1dvn_MQfY?si=4iFQjjoJC9eC1ey_', '1727660760_6475682.jpeg', 'sl1dvn_MQfY', 1, '2024-09-30 08:16:52', 0),
(191, 2, NULL, 'à¤•à¥Œà¤Ÿà¤¿à¤²à¥à¤¯//lecture-1//class//90', 'https://www.youtube.com/embed/sl1dvn_MQfY?si=6WauQbZcZc979mRv', '1727660880_241331.jpeg', 'sl1dvn_MQfY', 1, '2024-09-30 08:18:03', 0),
(192, 3, NULL, 'à¤•à¥Œà¤Ÿà¤¿à¤²à¥à¤¯//lecture-2//class//91', 'https://www.youtube.com/embed/JIRC9FF3L5Q?si=uQWRqz25ngzX-3yf', '1727660940_8435397.jpeg', 'JIRC9FF3L5Q', 1, '2024-09-30 08:19:12', 0),
(193, 2, NULL, 'à¤•à¥Œà¤Ÿà¤¿à¤²à¥à¤¯//lecture-2//class//91', 'https://www.youtube.com/embed/JIRC9FF3L5Q?si=Cfij56VcPVbK3f3K', '1727660940_6575464.jpeg', 'JIRC9FF3L5Q', 1, '2024-09-30 08:19:57', 0),
(194, 3, NULL, 'à¤®à¤¹à¤¾à¤¤à¥à¤®à¤¾ à¤—à¤¾à¤‚à¤§à¥€//lecture-1//class//92', 'https://www.youtube.com/embed/EVgIEMQHqAo?si=qC8jdHb1hZWHrnW2', '1727661060_2509671.jpeg', 'EVgIEMQHqAo', 1, '2024-09-30 08:21:20', 0),
(195, 2, NULL, 'à¤®à¤¹à¤¾à¤¤à¥à¤®à¤¾ à¤—à¤¾à¤‚à¤§à¥€//lecture-1//class//92', 'https://www.youtube.com/embed/EVgIEMQHqAo?si=-UfUfPwo97_03cot', '1727661180_1714867.jpeg', 'EVgIEMQHqAo', 1, '2024-09-30 08:23:03', 0),
(196, 3, NULL, 'à¤®à¤¹à¤¾à¤¤à¥à¤®à¤¾ à¤—à¤¾à¤‚à¤§à¥€//lecture-2//class//93', 'https://www.youtube.com/embed/Pj_dMWEKLho?si=cycSkVkaX6Qt--G7', '1727661240_9458922.jpeg', 'Pj_dMWEKLho', 1, '2024-09-30 08:24:12', 0),
(197, 2, NULL, 'à¤®à¤¹à¤¾à¤¤à¥à¤®à¤¾ à¤—à¤¾à¤‚à¤§à¥€//lecture-2//class//93', 'https://www.youtube.com/embed/Pj_dMWEKLho?si=g6Rs_7TWqWDSqfSO', '1727661300_1980882.jpeg', 'Pj_dMWEKLho', 1, '2024-09-30 08:25:10', 0),
(198, 3, NULL, 'à¤®à¤¹à¤¾à¤¤à¥à¤®à¤¾ à¤—à¤¾à¤‚à¤§à¥€//lecture-3//class//94', 'https://www.youtube.com/embed/m-iO2niHWEs?si=J1pXa6LAobMeotuu', '1727661360_7747893.jpeg', 'm-iO2niHWEs', 1, '2024-09-30 08:26:22', 0),
(199, 2, NULL, 'à¤®à¤¹à¤¾à¤¤à¥à¤®à¤¾ à¤—à¤¾à¤‚à¤§à¥€//lecture-3//class//94', 'https://www.youtube.com/embed/m-iO2niHWEs?si=JH3C3vnyBrpyEQK2', '1727661420_7010570.jpeg', 'm-iO2niHWEs', 1, '2024-09-30 08:27:21', 0),
(200, 3, NULL, 'à¤°à¤¾à¤œà¤¾à¤°à¤¾à¤® à¤®à¥‹à¤¹à¤¨à¤°à¤¾à¤¯ à¤”à¤° à¤¤à¤¿à¤²à¤•//lecture-1//class//95', 'https://www.youtube.com/embed/XBqJ5OABJjA?si=KEbE0W65JWSVUPqJ', '1727661660_413811.jpeg', 'XBqJ5OABJjA', 1, '2024-09-30 08:31:52', 0),
(201, 2, NULL, 'à¤°à¤¾à¤œà¤¾à¤°à¤¾à¤® à¤®à¥‹à¤¹à¤¨à¤°à¤¾à¤¯ à¤”à¤° à¤¤à¤¿à¤²à¤•//lecture-1//class//95', 'https://www.youtube.com/embed/XBqJ5OABJjA?si=fBHEcjS8FukLipWD', '1727661720_7932819.jpeg', 'XBqJ5OABJjA', 1, '2024-09-30 08:32:44', 0),
(202, 3, NULL, 'à¤—à¥‹à¤ªà¤¾à¤² à¤•à¥ƒà¤·à¥à¤£ à¤—à¥‹à¤–à¤²à¥‡ à¤”à¤° à¤…à¤°à¤µà¤¿à¤‚à¤¦ à¤˜à¥‹à¤·//lecture-1//class//96', 'https://www.youtube.com/embed/DrEYz5jAQY4?si=WR92ljKrcFVceuP8', '1727661840_5350830.jpeg', 'DrEYz5jAQY4', 1, '2024-09-30 08:34:27', 0),
(203, 2, NULL, 'à¤—à¥‹à¤ªà¤¾à¤² à¤•à¥ƒà¤·à¥à¤£ à¤—à¥‹à¤–à¤²à¥‡ à¤”à¤° à¤…à¤°à¤µà¤¿à¤‚à¤¦ à¤˜à¥‹à¤·//lecture-1//class//96', 'https://www.youtube.com/embed/DrEYz5jAQY4?si=LxD6U9JYto3eopiv', '1727661900_3007035.jpeg', 'DrEYz5jAQY4', 1, '2024-09-30 08:35:20', 0),
(204, 3, NULL, 'à¤¨à¥‡à¤¹à¤°à¥‚ à¤”à¤° à¤…à¤‚à¤¬à¥‡à¤¡à¤•à¤°//lecture-1//class//97', 'https://www.youtube.com/embed/V6Tajgmulu8?si=vRst5TSrfwVoBISI', '1727661960_207016.jpeg', 'V6Tajgmulu8', 1, '2024-09-30 08:36:45', 0),
(205, 2, NULL, 'à¤¨à¥‡à¤¹à¤°à¥‚ à¤”à¤° à¤…à¤‚à¤¬à¥‡à¤¡à¤•à¤°//lecture-1//class//97', 'https://www.youtube.com/embed/V6Tajgmulu8?si=6xtyzuNnPF30vpgp', '1727662020_1081858.jpeg', 'V6Tajgmulu8', 1, '2024-09-30 08:37:45', 0),
(206, 3, NULL, 'à¤¸à¤‚à¤µà¤¿à¤§à¤¾à¤¨//class//98', 'https://www.youtube.com/embed/q7Nvvv8usj0?si=C8guCygcPD3n88zh', '1727662500_8657485.jpeg', 'q7Nvvv8usj0', 1, '2024-09-30 08:45:42', 0),
(207, 2, NULL, 'à¤¸à¤‚à¤µà¤¿à¤§à¤¾à¤¨//class//98', 'https://www.youtube.com/embed/q7Nvvv8usj0?si=X8ebeXaXURTCQx_E', '1727662560_8281279.jpeg', 'q7Nvvv8usj0', 1, '2024-09-30 08:46:57', 0),
(208, 3, NULL, 'à¤¸à¤‚à¤µà¤¿à¤§à¤¾à¤¨//lecture-2//class//99', 'https://www.youtube.com/embed/kj7qH7yRpE0?si=-I_Mt85WUlnHKd2c', '1727662680_4109948.jpeg', 'kj7qH7yRpE0', 1, '2024-09-30 08:48:59', 0),
(209, 2, NULL, 'à¤¸à¤‚à¤µà¤¿à¤§à¤¾à¤¨//lecture-2//class//99', 'https://www.youtube.com/embed/kj7qH7yRpE0?si=zFevH8r0x3p9lg3g', '1727662740_7618579.jpeg', 'kj7qH7yRpE0', 1, '2024-09-30 08:49:55', 0),
(210, 3, NULL, 'à¤­à¤¾à¤°à¤¤ à¤•à¥‡ à¤¸à¤‚à¤µà¥ˆà¤§à¤¾à¤¨à¤¿à¤• à¤µà¤¿à¤•à¤¾à¤¸ à¤•à¤¾ à¤‡à¤¤à¤¿à¤¹à¤¾à¤¸//lecture-1//class//100', 'https://www.youtube.com/embed/MBIDw8Qc3Kk?si=w_Gses0_qyIw18BF', '1727662860_3511496.jpeg', 'MBIDw8Qc3Kk', 1, '2024-09-30 08:51:37', 0),
(211, 2, NULL, 'à¤­à¤¾à¤°à¤¤ à¤•à¥‡ à¤¸à¤‚à¤µà¥ˆà¤§à¤¾à¤¨à¤¿à¤• à¤µà¤¿à¤•à¤¾à¤¸ à¤•à¤¾ à¤‡à¤¤à¤¿à¤¹à¤¾à¤¸//lecture-1//class//100', 'https://www.youtube.com/embed/MBIDw8Qc3Kk?si=Oj4qzgKaqwxMLM4j', '1727662920_1249556.jpeg', 'MBIDw8Qc3Kk', 1, '2024-09-30 08:52:33', 0),
(212, 3, NULL, 'à¤­à¤¾à¤°à¤¤ à¤•à¥‡ à¤¸à¤‚à¤µà¥ˆà¤§à¤¾à¤¨à¤¿à¤• à¤µà¤¿à¤•à¤¾à¤¸ à¤•à¤¾ à¤‡à¤¤à¤¿à¤¹à¤¾à¤¸//lecture-2//class//101', 'https://www.youtube.com/embed/K7KRDwusLGg?si=Doxro4blGlpdo_QH', '1727663040_5782848.jpeg', 'K7KRDwusLGg', 1, '2024-09-30 08:54:06', 0),
(213, 2, NULL, 'à¤­à¤¾à¤°à¤¤ à¤•à¥‡ à¤¸à¤‚à¤µà¥ˆà¤§à¤¾à¤¨à¤¿à¤• à¤µà¤¿à¤•à¤¾à¤¸ à¤•à¤¾ à¤‡à¤¤à¤¿à¤¹à¤¾à¤¸//lecture-2//class//101', 'https://www.youtube.com/embed/K7KRDwusLGg?si=_4aMS8uB8HsXh7u5', '1727663040_4511698.jpeg', 'K7KRDwusLGg', 1, '2024-09-30 08:54:54', 0),
(214, 3, NULL, 'à¤­à¤¾à¤°à¤¤ à¤•à¥‡ à¤¸à¤‚à¤µà¥ˆà¤§à¤¾à¤¨à¤¿à¤• à¤µà¤¿à¤•à¤¾à¤¸ à¤•à¤¾ à¤‡à¤¤à¤¿à¤¹à¤¾à¤¸//lecture-3//class//102', 'https://www.youtube.com/embed/mVYYn19kRhA?si=yfE5CAvv5DqpqvpO', '1727663100_3814301.jpeg', 'mVYYn19kRhA', 1, '2024-09-30 08:55:56', 0),
(215, 2, NULL, 'à¤­à¤¾à¤°à¤¤ à¤•à¥‡ à¤¸à¤‚à¤µà¥ˆà¤§à¤¾à¤¨à¤¿à¤• à¤µà¤¿à¤•à¤¾à¤¸ à¤•à¤¾ à¤‡à¤¤à¤¿à¤¹à¤¾à¤¸//lecture-3//class//102', 'https://www.youtube.com/embed/mVYYn19kRhA?si=8H_6XEFg1f-FbUfY', '1727663220_3332090.jpeg', 'mVYYn19kRhA', 1, '2024-09-30 08:57:02', 0),
(216, 3, NULL, 'à¤­à¤¾à¤°à¤¤ à¤•à¥‡ à¤¸à¤‚à¤µà¥ˆà¤§à¤¾à¤¨à¤¿à¤• à¤µà¤¿à¤•à¤¾à¤¸ à¤•à¤¾ à¤‡à¤¤à¤¿à¤¹à¤¾à¤¸//lecture-4//class//103', 'https://www.youtube.com/embed/r1KKmpPKj14?si=3eWUc4qq8Qpponwn', '1727663340_3478960.jpeg', 'r1KKmpPKj14', 1, '2024-09-30 08:59:08', 0),
(217, 2, NULL, 'à¤­à¤¾à¤°à¤¤ à¤•à¥‡ à¤¸à¤‚à¤µà¥ˆà¤§à¤¾à¤¨à¤¿à¤• à¤µà¤¿à¤•à¤¾à¤¸ à¤•à¤¾ à¤‡à¤¤à¤¿à¤¹à¤¾à¤¸//lecture-4//class//103', 'https://www.youtube.com/embed/r1KKmpPKj14?si=RdI4UzCswIGPc69c', '1727663400_6357573.jpeg', 'r1KKmpPKj14', 1, '2024-09-30 09:00:42', 0),
(218, 3, NULL, 'à¤­à¤¾à¤°à¤¤ à¤•à¥‡ à¤¸à¤‚à¤µà¥ˆà¤§à¤¾à¤¨à¤¿à¤• à¤µà¤¿à¤•à¤¾à¤¸ à¤•à¤¾ à¤‡à¤¤à¤¿à¤¹à¤¾à¤¸//lecture-5//class//104', 'https://www.youtube.com/embed/aXM4FraO0Yg?si=qPlsDlPD2rzbCEoD', '1727663580_6145001.jpeg', 'aXM4FraO0Yg', 1, '2024-09-30 09:03:53', 0),
(219, 2, NULL, 'à¤­à¤¾à¤°à¤¤ à¤•à¥‡ à¤¸à¤‚à¤µà¥ˆà¤§à¤¾à¤¨à¤¿à¤• à¤µà¤¿à¤•à¤¾à¤¸ à¤•à¤¾ à¤‡à¤¤à¤¿à¤¹à¤¾à¤¸//lecture-5//class//104', 'https://www.youtube.com/embed/aXM4FraO0Yg?si=DmVsdmmPMUEqatU7', '1727663640_9535173.jpeg', 'aXM4FraO0Yg', 1, '2024-09-30 09:04:58', 0),
(220, 3, NULL, 'à¤¸à¤‚à¤µà¤¿à¤§à¤¾à¤¨ à¤¸à¤­à¤¾ à¤•à¤¾ à¤—à¤ à¤¨ /lecture-1//class//105', 'https://www.youtube.com/embed/j-f58whOKi8?si=tnhKYJUvG_Zsw94f', '1727663820_6394724.jpeg', 'j-f58whOKi8', 1, '2024-09-30 09:07:50', 0),
(221, 2, NULL, 'à¤¸à¤‚à¤µà¤¿à¤§à¤¾à¤¨ à¤¸à¤­à¤¾ à¤•à¤¾ à¤—à¤ à¤¨ /lecture-1//class//105', 'https://www.youtube.com/embed/j-f58whOKi8?si=iYjxSAQI-S3r4ZSZ', '1727663880_1358197.jpeg', 'j-f58whOKi8', 1, '2024-09-30 09:08:48', 0),
(222, 3, NULL, 'à¤…à¤¨à¥à¤¸à¥‚à¤šà¤¿à¤¯à¥‹à¤‚ à¤•à¤¾ à¤µà¤¿à¤µà¤°à¤£ à¤à¤µà¤‚ à¤ªà¥à¤°à¤¸à¥à¤¤à¤¾à¤µà¤¨à¤¾//lecture-1//class//106', 'https://www.youtube.com/embed/rSRcWkQZ4EQ?si=6HG28oYOJd_znpKO', '1727667720_7994220.jpeg', 'rSRcWkQZ4EQ', 1, '2024-09-30 10:12:05', 0),
(223, 2, NULL, 'à¤…à¤¨à¥à¤¸à¥‚à¤šà¤¿à¤¯à¥‹à¤‚ à¤•à¤¾ à¤µà¤¿à¤µà¤°à¤£ à¤à¤µà¤‚ à¤ªà¥à¤°à¤¸à¥à¤¤à¤¾à¤µà¤¨à¤¾//lecture-1//class//106', 'https://www.youtube.com/embed/rSRcWkQZ4EQ?si=l2DahYeX50SoRzxK', '1727667720_4964206.jpeg', 'rSRcWkQZ4EQ', 1, '2024-09-30 10:12:55', 0),
(224, 3, NULL, 'à¤¸à¤‚à¤˜ à¤à¤µà¤‚ à¤‰à¤¸à¤•à¥‡ à¤°à¤¾à¤œà¥à¤¯ à¤•à¥à¤·à¥‡à¤¤à¥à¤° à¤à¤µà¤‚ à¤¨à¤¾à¤—à¤°à¤¿à¤•à¤¤à¤¾//lecture-1//class//107', 'https://www.youtube.com/live/yuxcVeWtBNw?si=QzM2CKNh6JHei37A', '1727776560_8412065.jpeg', 'yuxcVeWtBNw', 1, '2024-10-01 04:26:33', 0),
(225, 2, NULL, 'à¤¸à¤‚à¤˜ à¤à¤µà¤‚ à¤‰à¤¸à¤•à¥‡ à¤°à¤¾à¤œà¥à¤¯ à¤•à¥à¤·à¥‡à¤¤à¥à¤° à¤à¤µà¤‚ à¤¨à¤¾à¤—à¤°à¤¿à¤•à¤¤à¤¾//lecture-1//class//107', 'https://www.youtube.com/embed/yuxcVeWtBNw?si=Cy2HtYP7X57n6MDR', '1727776620_1532665.jpeg', 'yuxcVeWtBNw', 1, '2024-10-01 04:27:30', 0),
(226, 3, NULL, 'à¤®à¥Œà¤²à¤¿à¤• à¤…à¤§à¤¿à¤•à¤¾à¤°//lecture-1//class//108', 'https://www.youtube.com/embed/qEksssY-e1o?si=h6L1ibVxPDXCm1PY', '1727776680_4578443.jpeg', 'qEksssY-e1o', 1, '2024-10-01 04:28:39', 0),
(227, 2, NULL, 'à¤®à¥Œà¤²à¤¿à¤• à¤…à¤§à¤¿à¤•à¤¾à¤°//lecture-1//class//108', 'https://www.youtube.com/embed/qEksssY-e1o?si=fW0By5EZdIy6MaZx', '1727776740_1947459.jpeg', 'qEksssY-e1o', 1, '2024-10-01 04:29:32', 0);
INSERT INTO `tbl_tutorial` (`id`, `class_id`, `topic_type`, `title`, `video`, `thumb`, `video_id`, `status`, `create_at`, `create_by`) VALUES
(228, 3, NULL, 'à¤®à¥Œà¤²à¤¿à¤• à¤…à¤§à¤¿à¤•à¤¾à¤°//lecture-2//class//109', 'https://www.youtube.com/embed/VdqGcYXK3dw?si=fzvs_Nz_VqolctDO', '1727776800_6045144.jpeg', 'VdqGcYXK3dw', 1, '2024-10-01 04:30:40', 0),
(229, 2, NULL, 'à¤®à¥Œà¤²à¤¿à¤• à¤…à¤§à¤¿à¤•à¤¾à¤°//lecture-2//class//109', 'https://www.youtube.com/embed/VdqGcYXK3dw?si=z9UPmeceX79Wl_IC', '1727776860_3117338.jpeg', 'VdqGcYXK3dw', 1, '2024-10-01 04:31:36', 0),
(230, 3, NULL, 'à¤®à¥Œà¤²à¤¿à¤• à¤…à¤§à¤¿à¤•à¤¾à¤°//lecture-3//class//110', 'https://www.youtube.com/embed/Cv3zUqI907Q?si=pJCWkqkxPRKxOq4M', '1727776980_9497654.jpeg', 'Cv3zUqI907Q', 1, '2024-10-01 04:33:12', 0),
(231, 2, NULL, 'à¤®à¥Œà¤²à¤¿à¤• à¤…à¤§à¤¿à¤•à¤¾à¤°//lecture-3//class//110', 'https://www.youtube.com/embed/Cv3zUqI907Q?si=lINkoOPQOCNtVNiZ', '1727777040_3209221.jpeg', 'Cv3zUqI907Q', 1, '2024-10-01 04:34:34', 0),
(232, 3, NULL, 'à¤®à¥Œà¤²à¤¿à¤• à¤…à¤§à¤¿à¤•à¤¾à¤°//lecture-4//class//111', 'https://www.youtube.com/embed/z_Qt2N0ayqg?si=wFr57MBIwkWamhLU', '1727777160_2282089.jpeg', 'z_Qt2N0ayqg', 1, '2024-10-01 04:36:51', 0),
(233, 2, NULL, 'à¤®à¥Œà¤²à¤¿à¤• à¤…à¤§à¤¿à¤•à¤¾à¤°//lecture-4//class//111', 'https://www.youtube.com/embed/z_Qt2N0ayqg?si=mMiIONAWEaH3S6ml', '1727777340_3129507.jpeg', 'z_Qt2N0ayqg', 1, '2024-10-01 04:39:06', 0),
(234, 3, NULL, 'à¤®à¥Œà¤²à¤¿à¤• à¤…à¤§à¤¿à¤•à¤¾à¤°//lecture-5//class//112', 'https://www.youtube.com/embed/Hk3YBf0_fHU?si=sSbUF9RYY0oZb8GD', '1727777400_5911931.jpeg', 'Hk3YBf0_fHU', 1, '2024-10-01 04:40:16', 0),
(235, 2, NULL, 'à¤®à¥Œà¤²à¤¿à¤• à¤…à¤§à¤¿à¤•à¤¾à¤°//lecture-5//class//112', 'https://www.youtube.com/embed/Hk3YBf0_fHU?si=svJ8WnS6yRDH6brQ', '1727777460_525090.jpeg', 'Hk3YBf0_fHU', 1, '2024-10-01 04:41:49', 0),
(236, 3, NULL, 'à¤®à¥Œà¤²à¤¿à¤• à¤…à¤§à¤¿à¤•à¤¾à¤°//lecture-6//class//113', 'https://www.youtube.com/embed/KKm0qKLRAN4?si=mjawUyvoXt-USxg4', '1727777580_9742807.jpeg', 'KKm0qKLRAN4', 1, '2024-10-01 04:43:24', 0),
(237, 2, NULL, 'à¤®à¥Œà¤²à¤¿à¤• à¤…à¤§à¤¿à¤•à¤¾à¤°//lecture-6//class//113', 'https://www.youtube.com/embed/KKm0qKLRAN4?si=UbmsfoMc-2Mz8rsK', '1727777640_1699857.jpeg', 'KKm0qKLRAN4', 1, '2024-10-01 04:44:49', 0),
(238, 3, NULL, 'à¤¨à¥€à¤¤à¤¿ à¤¨à¤¿à¤°à¥à¤¦à¥‡à¤¶à¤• à¤¤à¤¤à¥à¤µ//lecture-1//class//114', 'https://www.youtube.com/embed/jEPdDR9qS5g?si=MtcKGOHf6RCLNkRD', '1727777760_2433251.jpeg', 'jEPdDR9qS5g', 1, '2024-10-01 04:46:17', 0),
(239, 2, NULL, 'à¤¨à¥€à¤¤à¤¿ à¤¨à¤¿à¤°à¥à¤¦à¥‡à¤¶à¤• à¤¤à¤¤à¥à¤µ//lecture-1//class//114', 'https://www.youtube.com/embed/jEPdDR9qS5g?si=pfz9MqT07c9t_Y5C', '1727777820_1549292.jpeg', 'jEPdDR9qS5g', 1, '2024-10-01 04:47:34', 0),
(240, 3, NULL, 'à¤¨à¥€à¤¤à¤¿ à¤¨à¤¿à¤°à¥à¤¦à¥‡à¤¶à¤• à¤¤à¤¤à¥à¤µ//lecture-2//class//115', 'https://www.youtube.com/embed/iwZ_iYoiseM?si=iQuIT2xhfyyRxasd', '1727777940_1939765.jpeg', 'iwZ_iYoiseM', 1, '2024-10-01 04:49:37', 0),
(241, 2, NULL, 'à¤¨à¥€à¤¤à¤¿ à¤¨à¤¿à¤°à¥à¤¦à¥‡à¤¶à¤• à¤¤à¤¤à¥à¤µ//lecture-2//class//115', 'https://www.youtube.com/embed/iwZ_iYoiseM?si=60CwJbKTzQLU3NKD', '1727778060_6671054.jpeg', 'iwZ_iYoiseM', 1, '2024-10-01 04:51:26', 0),
(242, 3, NULL, 'à¤¨à¥€à¤¤à¤¿ à¤¨à¤¿à¤°à¥à¤¦à¥‡à¤¶à¤• à¤¤à¤¤à¥à¤µ//lecture-3//class//116', 'https://www.youtube.com/embed/XVEoBseYeHY?si=8KwHNJFRhSmMtHU9', '1727778240_7525925.jpeg', 'XVEoBseYeHY', 1, '2024-10-01 04:54:27', 0),
(243, 2, NULL, 'à¤¨à¥€à¤¤à¤¿ à¤¨à¤¿à¤°à¥à¤¦à¥‡à¤¶à¤• à¤¤à¤¤à¥à¤µ//lecture-3//class//116', 'https://www.youtube.com/embed/XVEoBseYeHY?si=Y10Ja7hDG8B8sXlL', '1727778300_1990301.jpeg', 'XVEoBseYeHY', 1, '2024-10-01 04:55:23', 0),
(244, 3, NULL, 'à¤¨à¥€à¤¤à¤¿ à¤¨à¤¿à¤°à¥à¤¦à¥‡à¤¶à¤• à¤¤à¤¤à¥à¤µ//lecture-4//class//117', 'https://www.youtube.com/embed/RdJZVqfwE-g?si=fg7FTMzi4hXstvTn', '1727778360_408500.jpeg', 'RdJZVqfwE-g', 1, '2024-10-01 04:56:31', 0),
(245, 2, NULL, 'à¤¨à¥€à¤¤à¤¿ à¤¨à¤¿à¤°à¥à¤¦à¥‡à¤¶à¤• à¤¤à¤¤à¥à¤µ//lecture-4//class//117', 'https://www.youtube.com/embed/RdJZVqfwE-g?si=l_cTxYy0tOBD8ChL', '1727778480_7222095.jpeg', 'RdJZVqfwE-g', 1, '2024-10-01 04:58:04', 0),
(246, 3, NULL, 'à¤®à¥Œà¤²à¤¿à¤• à¤•à¤°à¥à¤¤à¤µà¥à¤¯//lecture-1//class//118', 'https://www.youtube.com/embed/4wiUbUOENz8?si=CLe1ZTUYKtWRwB0u', '1727778540_7273442.jpeg', '4wiUbUOENz8', 1, '2024-10-01 04:59:05', 0),
(247, 2, NULL, 'à¤®à¥Œà¤²à¤¿à¤• à¤•à¤°à¥à¤¤à¤µà¥à¤¯//lecture-1//class//118', 'https://www.youtube.com/embed/4wiUbUOENz8?si=bWzfpNkwgl4xVKs8', '1727778540_6803175.jpeg', '4wiUbUOENz8', 1, '2024-10-01 04:59:53', 0),
(248, 3, NULL, 'à¤à¤•à¤¾à¤¤à¥à¤®à¤• à¤à¤µà¤‚ à¤¸à¤‚à¤˜à¤¾à¤¤à¥à¤®à¤• à¤µà¥à¤¯à¤µà¤¸à¥à¤¥à¤¾//lecture-1//class//119', 'https://www.youtube.com/embed/1KNCQKnKRJA?si=Lvu4ULyqMuSpYsdE', '1727778660_7949302.jpeg', '1KNCQKnKRJA', 1, '2024-10-01 05:01:50', 0),
(249, 2, NULL, 'à¤à¤•à¤¾à¤¤à¥à¤®à¤• à¤à¤µà¤‚ à¤¸à¤‚à¤˜à¤¾à¤¤à¥à¤®à¤• à¤µà¥à¤¯à¤µà¤¸à¥à¤¥à¤¾//lecture-1//class//119', 'https://www.youtube.com/embed/1KNCQKnKRJA?si=_2COfw0lvht0uZAj', '1727778780_9794298.jpeg', '1KNCQKnKRJA', 1, '2024-10-01 05:03:10', 0),
(250, 3, NULL, 'à¤¸à¤¦à¥€à¤¯ à¤à¤µà¤‚ à¤…à¤§à¥à¤¯à¤•à¥à¤·à¥€à¤¯ à¤¶à¤¾à¤¸à¤¨ à¤ªà¥à¤°à¤£à¤¾à¤²à¥€////lecture-1//class//120', 'https://www.youtube.com/embed/eaB3LsOsO68?si=3iuXln1zcA-cGr6j', '1727778960_1298614.jpeg', 'eaB3LsOsO68', 1, '2024-10-01 05:06:09', 0),
(251, 2, NULL, 'à¤¸à¤‚à¤¸à¤¦à¥€à¤¯ à¤à¤µà¤‚ à¤…à¤§à¥à¤¯à¤•à¥à¤·à¥€à¤¯ à¤¶à¤¾à¤¸à¤¨ à¤ªà¥à¤°à¤£à¤¾à¤²à¥€////lecture-1//class//120', 'https://www.youtube.com/embed/eaB3LsOsO68?si=-TQAJBucZaLCvP4R', '1727779020_3442637.jpeg', 'eaB3LsOsO68', 1, '2024-10-01 05:07:07', 0),
(252, 3, NULL, 'à¤¸à¤‚à¤˜; à¤•à¤¾à¤°à¥à¤¯à¤ªà¤¾à¤²à¤¿à¤•à¤¾//lecture-1//Class//121', 'https://www.youtube.com/embed/ufQPDBoecrg?si=tlzucUjJ3i36mTXJ', '1727779080_2974710.jpeg', 'ufQPDBoecrg', 1, '2024-10-01 05:08:15', 0),
(253, 2, NULL, 'à¤¸à¤‚à¤˜; à¤•à¤¾à¤°à¥à¤¯à¤ªà¤¾à¤²à¤¿à¤•à¤¾//lecture-1//Class//121', 'https://www.youtube.com/embed/ufQPDBoecrg?si=OjgPa9LmPdHeK9Pm', '1727779140_2227393.jpeg', 'ufQPDBoecrg', 1, '2024-10-01 05:09:32', 0),
(254, 3, NULL, 'à¤¸à¤‚à¤˜; à¤•à¤¾à¤°à¥à¤¯à¤ªà¤¾à¤²à¤¿à¤•à¤¾//lecture-2//Class//122', 'https://www.youtube.com/embed/-c--lskT3Us?si=kymaJHoOXixPF289', '1727779260_8074026.jpeg', '-c--lskT3Us', 1, '2024-10-01 05:11:12', 0),
(255, 2, NULL, 'à¤¸à¤‚à¤˜; à¤•à¤¾à¤°à¥à¤¯à¤ªà¤¾à¤²à¤¿à¤•à¤¾//lecture-2//Class//122', 'https://www.youtube.com/embed/-c--lskT3Us?si=LlF5vlaoVsW-Lcna', '1727779320_1845759.jpeg', '-c--lskT3Us', 1, '2024-10-01 05:12:51', 0),
(256, 3, NULL, 'à¤¸à¤‚à¤˜; à¤•à¤¾à¤°à¥à¤¯à¤ªà¤¾à¤²à¤¿à¤•à¤¾//lecture-3//Class//123', 'https://www.youtube.com/embed/q-sPMqvkaOw?si=Xv9FNqWkW1hBlXqk', '1727779440_9478298.jpeg', 'q-sPMqvkaOw', 1, '2024-10-01 05:14:21', 0),
(257, 2, NULL, 'à¤¸à¤‚à¤˜; à¤•à¤¾à¤°à¥à¤¯à¤ªà¤¾à¤²à¤¿à¤•à¤¾//lecture-3//Class//123', 'https://www.youtube.com/embed/q-sPMqvkaOw?si=IxMtvX43H1BTjFGl', '1727779500_2063850.jpeg', 'q-sPMqvkaOw', 1, '2024-10-01 05:15:51', 0),
(258, 3, NULL, 'à¤°à¤¾à¤œà¥à¤¯: à¤•à¤¾à¤°à¥à¤¯à¤ªà¤¾à¤²à¤¿à¤•à¤¾//lecture-4//Class//124', 'https://www.youtube.com/embed/mD36VT_98Qg?si=U6Imt2NR5hEfcYfw', '1727779620_2068639.jpeg', 'mD36VT_98Qg', 1, '2024-10-01 05:17:24', 0),
(259, 2, NULL, 'à¤°à¤¾à¤œà¥à¤¯: à¤•à¤¾à¤°à¥à¤¯à¤ªà¤¾à¤²à¤¿à¤•à¤¾//lecture-4//Class//124', 'https://www.youtube.com/embed/mD36VT_98Qg?si=xaQ6aYdGJCKmnLOI', '1727779680_3628045.jpeg', 'mD36VT_98Qg', 1, '2024-10-01 05:18:18', 0),
(260, 3, NULL, 'à¤¸à¤‚à¤˜: à¤µà¤¿à¤§à¤¾à¤¨ à¤®à¤‚à¤¡à¤²//lecture-1//Class//125', 'https://www.youtube.com/embed/IQDDHPkqxNE?si=oh7CXS-vHhgz7foP', '1727779800_2691478.jpeg', 'IQDDHPkqxNE', 1, '2024-10-01 05:20:49', 0),
(261, 2, NULL, 'à¤¸à¤‚à¤˜: à¤µà¤¿à¤§à¤¾à¤¨ à¤®à¤‚à¤¡à¤²//lecture-1//Class//125', 'https://www.youtube.com/embed/IQDDHPkqxNE?si=poNSbWjQGQQxdtoH', '1727779920_1248057.jpeg', 'IQDDHPkqxNE', 1, '2024-10-01 05:22:23', 0),
(262, 3, NULL, 'à¤¸à¤‚à¤˜: à¤µà¤¿à¤§à¤¾à¤¨ à¤®à¤‚à¤¡à¤²//lecture-2//Class//126', 'https://www.youtube.com/embed/FRweXBsQUUE?si=b4etT4ZDx6aV_v-J', '1727780100_5058291.jpeg', 'FRweXBsQUUE', 1, '2024-10-01 05:25:03', 0),
(263, 2, NULL, 'à¤¸à¤‚à¤˜: à¤µà¤¿à¤§à¤¾à¤¨ à¤®à¤‚à¤¡à¤²//lecture-2//Class//126', 'https://www.youtube.com/embed/FRweXBsQUUE?si=oeh8Nc9xEJZmreMs', '1727780100_8187634.jpeg', 'FRweXBsQUUE', 1, '2024-10-01 05:25:59', 0),
(264, 3, NULL, 'à¤¸à¤‚à¤˜: à¤µà¤¿à¤§à¤¾à¤¨ à¤®à¤‚à¤¡à¤²//lecture-3//Class//126', 'https://www.youtube.com/embed/5u4oazTJyXU?si=D1QAYF4s3b9pez51', '1727780340_9504224.jpeg', '5u4oazTJyXU', 1, '2024-10-01 05:29:43', 0),
(265, 2, 2, 'à¤¸à¤‚à¤˜: à¤µà¤¿à¤§à¤¾à¤¨ à¤®à¤‚à¤¡à¤²//lecture-3//Class//126', 'https://www.youtube.com/embed/5u4oazTJyXU?si=T-u1IinmB0b_nDWD', '1727780400_2472568.jpeg', '5u4oazTJyXU', 1, '2024-10-01 05:30:57', 0),
(266, 3, 2, 'à¤¸à¤‚à¤˜: à¤µà¤¿à¤§à¤¾à¤¨ à¤®à¤‚à¤¡à¤²//lecture-4//Class//127', 'https://www.youtube.com/embed/YFmTuyyozxY?si=FQ44TiXl-k4yrXuD', '1727780520_7297738.jpeg', 'YFmTuyyozxY', 1, '2024-10-01 05:32:50', 0),
(267, 2, 2, 'à¤¸à¤‚à¤˜: à¤µà¤¿à¤§à¤¾à¤¨ à¤®à¤‚à¤¡à¤²//lecture-4//Class//127', 'https://www.youtube.com/embed/YFmTuyyozxY?si=mftEalO3MwtBQBAs', '1727780700_8375208.jpeg', 'YFmTuyyozxY', 1, '2024-10-01 05:35:39', 0),
(268, 3, 2, 'à¤¸à¤‚à¤˜: à¤µà¤¿à¤§à¤¾à¤¨ à¤®à¤‚à¤¡à¤²//lecture-5//Class//128', 'https://www.youtube.com/embed/M6_whFPs_04?si=uzg_6tdv_CxpiW1j', '1727780880_5211822.jpeg', 'M6_whFPs_04', 1, '2024-10-01 05:38:33', 0),
(269, 2, 2, 'à¤¸à¤‚à¤˜: à¤µà¤¿à¤§à¤¾à¤¨ à¤®à¤‚à¤¡à¤²//lecture-5//Class//128', 'https://www.youtube.com/embed/M6_whFPs_04?si=-TCUJHTq8pa2cl-Q', '1727781000_6157137.jpeg', 'M6_whFPs_04', 1, '2024-10-01 05:40:42', 0),
(270, 3, 2, 'à¤¸à¤‚à¤˜: à¤µà¤¿à¤§à¤¾à¤¨ à¤®à¤‚à¤¡à¤²//lecture-6//Class//129', 'https://www.youtube.com/embed/DTqOZfViFKI?si=K8S9BC5Osl9dXbOR', '1727781120_9606886.jpeg', 'DTqOZfViFKI', 1, '2024-10-01 05:42:18', 0),
(271, 2, 2, 'à¤¸à¤‚à¤˜: à¤µà¤¿à¤§à¤¾à¤¨ à¤®à¤‚à¤¡à¤²//lecture-6//Class//129', 'https://www.youtube.com/embed/DTqOZfViFKI?si=K8S9BC5Osl9dXbOR', '1727781180_9400498.jpeg', 'DTqOZfViFKI', 1, '2024-10-01 05:42:19', 0),
(272, 3, 2, 'à¤°à¤¾à¤œà¥à¤¯ à¤µà¤¿à¤§à¤¾à¤¨à¤®à¤‚à¤¡à¤²//lecture-1////Class//130', 'https://www.youtube.com/embed/bQ8yfrPv2PE?si=dHfbqA_SzzlcC0yq', '1727781660_9689572.jpeg', 'bQ8yfrPv2PE', 1, '2024-10-01 05:51:35', 0),
(273, 2, 2, 'à¤°à¤¾à¤œà¥à¤¯ à¤µà¤¿à¤§à¤¾à¤¨à¤®à¤‚à¤¡à¤²//lecture-1////Class//130', 'https://www.youtube.com/embed/bQ8yfrPv2PE?si=-1BeKQe6rq1c0kGY', '1727781900_4470886.jpeg', 'bQ8yfrPv2PE', 1, '2024-10-01 05:55:38', 0),
(274, 3, 2, 'à¤¸à¤‚à¤˜: à¤¨à¥à¤¯à¤¾à¤¯à¤ªà¤¾à¤²à¤¿à¤•à¤¾//lecture-1//class//131', 'https://www.youtube.com/embed/r9pG135P3bQ?si=JCSdPXlbxqSism58', '1727782020_499871.jpeg', 'r9pG135P3bQ', 1, '2024-10-01 05:57:07', 0),
(275, 2, 2, 'à¤¸à¤‚à¤˜: à¤¨à¥à¤¯à¤¾à¤¯à¤ªà¤¾à¤²à¤¿à¤•à¤¾//lecture-1//class//131', 'https://www.youtube.com/embed/r9pG135P3bQ?si=O10LCbBfofb0Zz0e', '1727782080_1568429.jpeg', 'r9pG135P3bQ', 1, '2024-10-01 05:58:04', 0),
(276, 3, 2, 'à¤¸à¤‚à¤˜: à¤¨à¥à¤¯à¤¾à¤¯à¤ªà¤¾à¤²à¤¿à¤•à¤¾//lecture-2//class//132', 'https://www.youtube.com/embed/HZsG7vjBnxc?si=opoGtvKHLtFxYzp3', '1727782200_5191905.jpeg', 'HZsG7vjBnxc', 1, '2024-10-01 06:00:14', 0),
(277, 2, 2, 'à¤¸à¤‚à¤˜: à¤¨à¥à¤¯à¤¾à¤¯à¤ªà¤¾à¤²à¤¿à¤•à¤¾//lecture-2//class//132', 'https://www.youtube.com/embed/HZsG7vjBnxc?si=I93mI1Ta6-bUvnw4', '1727782260_5061148.jpeg', 'HZsG7vjBnxc', 1, '2024-10-01 06:01:16', 0),
(278, 3, 2, 'à¤°à¤¾à¤œ à¤¨à¥à¤¯à¤¾à¤¯à¤ªà¤¾à¤²à¤¿à¤•à¤¾//lecture-1//class//133', 'https://www.youtube.com/embed/0XLfnaobdSc?si=H-0wfCD6fKNFmYDP', '1727782740_1244494.jpeg', '0XLfnaobdSc', 1, '2024-10-01 06:09:50', 0),
(279, 2, 2, 'à¤°à¤¾à¤œ à¤¨à¥à¤¯à¤¾à¤¯à¤ªà¤¾à¤²à¤¿à¤•à¤¾//lecture-1//class//133', 'https://www.youtube.com/embed/0XLfnaobdSc?si=l6eAwxVbFbRfo7jF', '1727782800_2882135.jpeg', '0XLfnaobdSc', 1, '2024-10-01 06:10:59', 0),
(280, 3, 2, 'à¤¸à¤‚à¤˜ à¤°à¤¾à¤œà¥à¤¯ à¤¸à¤‚à¤¬à¤‚à¤§//lecture-1//class//134', 'https://www.youtube.com/embed/aT7L1KpqGk4?si=P6Vi5k-tqPmItw6a', '1727782920_129083.jpeg', 'aT7L1KpqGk4', 1, '2024-10-01 06:12:41', 0),
(281, 2, 2, 'à¤¸à¤‚à¤˜ à¤°à¤¾à¤œà¥à¤¯ à¤¸à¤‚à¤¬à¤‚à¤§//lecture-1//class//134', 'https://www.youtube.com/embed/aT7L1KpqGk4?si=va-91w1Zk6NkSBje', '1727782980_8607807.jpeg', 'aT7L1KpqGk4', 1, '2024-10-01 06:13:53', 0),
(282, 3, 2, 'à¤¸à¤‚à¤˜ à¤°à¤¾à¤œà¥à¤¯ à¤¸à¤‚à¤¬à¤‚à¤§//lecture-2//class//135', 'https://www.youtube.com/embed/xCCA55oUIno?si=pITQzO25kP3vNrHW', '1727783220_2141527.jpeg', 'xCCA55oUIno', 1, '2024-10-01 06:17:15', 0),
(283, 2, 2, 'à¤¸à¤‚à¤˜ à¤°à¤¾à¤œà¥à¤¯ à¤¸à¤‚à¤¬à¤‚à¤§//lecture-2//class//135', 'https://www.youtube.com/embed/xCCA55oUIno?si=8y0_nF9x5fMDbY-f', '1727783280_1534246.jpeg', 'xCCA55oUIno', 1, '2024-10-01 06:18:15', 0),
(284, 3, 2, 'à¤¸à¥à¤¥à¤¾à¤¨à¥€à¤¯ à¤¸à¥à¤µà¤¶à¤¾à¤¸à¤¨//Lecture-1//class//136', 'https://www.youtube.com/embed/Ovmm-hcBpF4?si=v6myksfSMFccyhqR', '1727783340_5778488.jpeg', 'Ovmm-hcBpF4', 1, '2024-10-01 06:19:30', 0),
(285, 2, 2, 'à¤¸à¥à¤¥à¤¾à¤¨à¥€à¤¯ à¤¸à¥à¤µà¤¶à¤¾à¤¸à¤¨//Lecture-1//class//136', 'https://www.youtube.com/embed/Ovmm-hcBpF4?si=Z5QjDD7gac5b0g55', '1727783400_964877.jpeg', 'Ovmm-hcBpF4', 1, '2024-10-01 06:20:20', 0),
(286, 3, 2, 'à¤¸à¥à¤¥à¤¾à¤¨à¥€à¤¯ à¤¸à¥à¤µà¤¶à¤¾à¤¸à¤¨//Lecture-2//class//137', 'https://www.youtube.com/embed/1RGjeov-7xY?si=OqoQH09AJ-x28eHG', '1727783460_1645136.jpeg', '1RGjeov-7xY', 1, '2024-10-01 06:21:26', 0),
(287, 2, 2, 'à¤¸à¥à¤¥à¤¾à¤¨à¥€à¤¯ à¤¸à¥à¤µà¤¶à¤¾à¤¸à¤¨//Lecture-2//class//137', 'https://www.youtube.com/embed/1RGjeov-7xY?si=YU0K0E4AB-7H40XS', '1727783520_2209635.jpeg', '1RGjeov-7xY', 1, '2024-10-01 06:22:42', 0),
(288, 3, 2, 'à¤¨à¤¿à¤°à¥à¤µà¤¾à¤šà¤¨ à¤†à¤¯à¥‹à¤—//lecture-1//class//138', 'https://www.youtube.com/embed/lC1Ycq0SRgA?si=iayMiHup9hNGakw7', '1727783640_8271575.jpeg', 'lC1Ycq0SRgA', 1, '2024-10-01 06:24:39', 0),
(289, 2, 2, 'à¤¨à¤¿à¤°à¥à¤µà¤¾à¤šà¤¨ à¤†à¤¯à¥‹à¤—//lecture-1//class//138', 'https://www.youtube.com/embed/lC1Ycq0SRgA?si=PmKTN097tVtU14ij', 'https://img.youtube.com/vi/lC1Ycq0SRgA/hqdefault.jpg', 'lC1Ycq0SRgA', 1, '2024-10-01 06:25:52', 0),
(290, 3, 2, 'à¤²à¥‹à¤• à¤¸à¥‡à¤µà¤¾ à¤†à¤¯à¥‹à¤— à¤à¤µà¤‚ à¤¸à¤‚à¤˜ à¤¶à¤¾à¤¸à¤¿à¤¤ à¤ªà¥à¤°à¤¦à¥‡à¤¶//lecture-1//class//139', 'https://www.youtube.com/embed/Z2nAOOD4PCo?si=sCLGMNr9Ctx3a8gx', '1727783820_5772159.jpeg', 'Z2nAOOD4PCo', 1, '2024-10-01 06:27:00', 0),
(291, 2, 2, 'à¤²à¥‹à¤• à¤¸à¥‡à¤µà¤¾ à¤†à¤¯à¥‹à¤— à¤à¤µà¤‚ à¤¸à¤‚à¤˜ à¤¶à¤¾à¤¸à¤¿à¤¤ à¤ªà¥à¤°à¤¦à¥‡à¤¶//lecture-1//class//139', 'https://www.youtube.com/embed/Z2nAOOD4PCo?si=S3E94Ict_Gbs5b8m', 'https://img.youtube.com/vi/Z2nAOOD4PCo/hqdefault.jpg', 'Z2nAOOD4PCo', 1, '2024-10-01 06:28:38', 0),
(292, 3, 2, 'à¤¸à¤‚à¤µà¤¿à¤§à¤¾à¤¨ à¤¨à¥‡à¤¤à¥à¤¤à¤° à¤¸à¤‚à¤¸à¥à¤¥à¤¾à¤à¤‚//lecture-1//class//140', 'https://www.youtube.com/embed/Za3tzurfWKw?si=1xG_5QI-OCPRfeCq', '1727784060_7644011.jpeg', 'Za3tzurfWKw', 1, '2024-10-01 06:31:38', 0),
(293, 2, 2, 'à¤¸à¤‚à¤µà¤¿à¤§à¤¾à¤¨ à¤¨à¥‡à¤¤à¥à¤¤à¤° à¤¸à¤‚à¤¸à¥à¤¥à¤¾à¤à¤‚//lecture-1//class//140', 'https://www.youtube.com/embed/Za3tzurfWKw?si=m-5Hdu2Sos6-tQXX', '1727784120_411351.jpeg', 'Za3tzurfWKw', 1, '2024-10-01 06:32:29', 0),
(294, 3, 2, 'à¤¸à¤‚à¤µà¤¿à¤§à¤¾à¤¨ à¤¨à¥‡à¤¤à¥à¤¤à¤° à¤¸à¤‚à¤¸à¥à¤¥à¤¾à¤à¤‚//lecture-2//class//141', 'https://www.youtube.com/embed/8cJhTBrl4co?si=zorzAhzEzMGyCbhD', '1727784480_8198455.jpeg', '8cJhTBrl4co', 1, '2024-10-01 06:38:37', 0),
(295, 2, 2, 'à¤¸à¤‚à¤µà¤¿à¤§à¤¾à¤¨ à¤¨à¥‡à¤¤à¥à¤¤à¤° à¤¸à¤‚à¤¸à¥à¤¥à¤¾à¤à¤‚//lecture-2//class//141', 'https://www.youtube.com/embed/8cJhTBrl4co?si=4V_B_JYm8iInUwe5', '1727784540_4379619.jpeg', '8cJhTBrl4co', 1, '2024-10-01 06:39:30', 0),
(296, 3, 2, 'à¤¸à¤‚à¤µà¤¿à¤§à¤¾à¤¨ à¤¨à¥‡à¤¤à¥à¤¤à¤° à¤¸à¤‚à¤¸à¥à¤¥à¤¾à¤à¤‚//lecture-3//class//142', 'https://www.youtube.com/embed/ZRlC4xFxNUw?si=gt7o3_LUZ1AAT-2j', '1727784600_7336463.jpeg', 'ZRlC4xFxNUw', 1, '2024-10-01 06:40:59', 0),
(297, 2, 2, 'à¤¸à¤‚à¤µà¤¿à¤§à¤¾à¤¨ à¤¨à¥‡à¤¤à¥à¤¤à¤° à¤¸à¤‚à¤¸à¥à¤¥à¤¾à¤à¤‚//lecture-3//class//142', 'https://www.youtube.com/embed/ZRlC4xFxNUw?si=FSZ7JZiSDIVumhPW', '1727784660_7089358.jpeg', 'ZRlC4xFxNUw', 1, '2024-10-01 06:41:54', 0),
(298, 3, 2, 'à¤­à¤¾à¤°à¤¤ à¤®à¥‡à¤‚ à¤¨à¥Œà¤•à¤°à¤¶à¤¾à¤¹à¥€//lecture-1//class//143', 'https://www.youtube.com/embed/PeFEpOGCjxc?si=1mldbvPUEepGQZU-', '1727784780_3016239.jpeg', 'PeFEpOGCjxc', 1, '2024-10-01 06:43:37', 0),
(299, 2, 2, 'à¤­à¤¾à¤°à¤¤ à¤®à¥‡à¤‚ à¤¨à¥Œà¤•à¤°à¤¶à¤¾à¤¹à¥€//lecture-1//class//143', 'https://www.youtube.com/embed/PeFEpOGCjxc?si=XGoru8ra8oZQaiJI', '1727784840_4456793.jpeg', 'PeFEpOGCjxc', 1, '2024-10-01 06:44:44', 0),
(300, 3, 2, 'à¤­à¤¾à¤°à¤¤ à¤®à¥‡à¤‚ à¤¨à¥Œà¤•à¤°à¤¶à¤¾à¤¹à¥€//lecture-2//class//144', 'https://www.youtube.com/embed/XjSEPFxCap4?si=b7YWdO8LJ7giTplh', '1727784960_8724251.jpeg', 'XjSEPFxCap4', 1, '2024-10-01 06:46:39', 0),
(301, 2, 2, 'à¤­à¤¾à¤°à¤¤ à¤®à¥‡à¤‚ à¤¨à¥Œà¤•à¤°à¤¶à¤¾à¤¹à¥€//lecture-2//class//144', 'https://www.youtube.com/embed/XjSEPFxCap4?si=05mjRX1Y4ItLEjXB', '1727785080_9529989.jpeg', 'XjSEPFxCap4', 1, '2024-10-01 06:48:05', 0),
(302, 3, 2, 'à¤­à¤¾à¤°à¤¤ à¤®à¥‡à¤‚ à¤¨à¥Œà¤•à¤°à¤¶à¤¾à¤¹à¥€//lecture-3//class//145', 'https://www.youtube.com/embed/K56KrfeDd28?si=QIa0ySYXlybDvZVY', '1727785440_2570466.jpeg', 'K56KrfeDd28', 1, '2024-10-01 06:54:23', 0),
(303, 2, 2, 'à¤­à¤¾à¤°à¤¤ à¤®à¥‡à¤‚ à¤¨à¥Œà¤•à¤°à¤¶à¤¾à¤¹à¥€//lecture-3//class//145', 'https://www.youtube.com/embed/K56KrfeDd28?si=dlctiTdCl3Cf2M2a', '1727785500_2191181.jpeg', 'K56KrfeDd28', 1, '2024-10-01 06:55:18', 0),
(304, 3, 2, 'à¤¸à¤‚à¤¯à¥à¤•à¥à¤¤ à¤°à¤¾à¤·à¥à¤Ÿà¥à¤° à¤¸à¤‚à¤˜//lecture-1//class//146', 'https://www.youtube.com/embed/88xwhEu3qi8?si=NQr1X-e2LVNn-jfE', '1727785620_9062545.jpeg', '88xwhEu3qi8', 1, '2024-10-01 06:57:44', 0),
(305, 2, 2, 'à¤¸à¤‚à¤¯à¥à¤•à¥à¤¤ à¤°à¤¾à¤·à¥à¤Ÿà¥à¤° à¤¸à¤‚à¤˜//lecture-1//class//146', 'https://www.youtube.com/embed/88xwhEu3qi8?si=TxvWT7HKecTA2B-T', 'https://img.youtube.com/vi/88xwhEu3qi8/hqdefault.jpg', '88xwhEu3qi8', 1, '2024-10-01 06:59:01', 0),
(306, 2, 2, 'à¤…à¤‚à¤¤à¤°à¤°à¤¾à¤·à¥à¤Ÿà¥à¤°à¥€à¤¯ à¤°à¤¾à¤œà¤¨à¥€à¤¤à¤¿ à¤•à¤¾ à¤…à¤°à¥à¤¥ à¤ªà¥à¤°à¤•à¥ƒà¤¤à¤¿, à¤•à¥à¤·à¥‡à¤¤à¥à¤°, à¤‰à¤ªà¤¾à¤—à¤®, à¤µà¤¿à¤•à¤¾à¤¸', 'https://www.youtube.com/embed/sl27dEussRE?si=ErZ3BAVGZ0BnLWQd', '1727867640_1386160.jpeg', 'sl27dEussRE', 1, '2024-10-02 05:44:08', 0),
(307, 2, 2, 'à¤…à¤‚à¤¤à¤°à¤°à¤¾à¤·à¥à¤Ÿà¥à¤°à¥€à¤¯ à¤°à¤¾à¤œà¤¨à¥€à¤¤à¤¿ à¤•à¤¾ à¤…à¤°à¥à¤¥ à¤ªà¥à¤°à¤•à¥ƒà¤¤à¤¿, à¤•à¥à¤·à¥‡à¤¤à¥à¤°, à¤‰à¤ªà¤¾à¤—à¤®, à¤µà¤¿à¤•à¤¾à¤¸//lecture-2/class//148', 'https://www.youtube.com/embed/RoeaLsR25_k?si=ejOWjs07g6ighNus', '1727867700_2843004.jpeg', 'RoeaLsR25_k', 1, '2024-10-02 05:45:14', 0),
(308, 2, 2, 'à¤…à¤‚à¤¤à¤°à¤°à¤¾à¤·à¥à¤Ÿà¥à¤°à¥€à¤¯ à¤°à¤¾à¤œà¤¨à¥€à¤¤à¤¿ à¤•à¤¾ à¤…à¤°à¥à¤¥ à¤ªà¥à¤°à¤•à¥ƒà¤¤à¤¿, à¤•à¥à¤·à¥‡à¤¤à¥à¤°, à¤‰à¤ªà¤¾à¤—à¤®, à¤µà¤¿à¤•à¤¾à¤¸//lecture-3/class//149', 'https://www.youtube.com/embed/88p9d2xkWoc?si=4CBmPJaewZtymenV', 'https://img.youtube.com/vi/88p9d2xkWoc/hqdefault.jpg', '88p9d2xkWoc', 1, '2024-10-02 05:46:06', 0),
(309, 2, 2, 'à¤¦à¥ƒà¤·à¥à¤Ÿà¤¿à¤•à¥‹à¤£ à¤•à¥€ à¤­à¤¿à¤¨à¥à¤¨à¤¤à¤¾//lecture-1//class//150', 'https://www.youtube.com/embed/jBqe0Uw6VHU?si=4vZHaq-MpyEftCWc', '1727867820_4655640.jpeg', 'jBqe0Uw6VHU', 1, '2024-10-02 05:47:10', 0),
(310, 2, 2, 'à¤¦à¥ƒà¤·à¥à¤Ÿà¤¿à¤•à¥‹à¤£ à¤•à¥€ à¤­à¤¿à¤¨à¥à¤¨à¤¤à¤¾//lecture-2//class//151', 'https://www.youtube.com/embed/VgcOT6ciET0?si=ojzMeaYZ9obyJjhx', '1727867880_119481.jpeg', 'VgcOT6ciET0', 1, '2024-10-02 05:48:36', 0),
(311, 2, 2, 'à¤®à¤¾à¤°à¤—à¥‡à¤¨à¥à¤¯à¤¾à¤Š à¤•à¤¾ à¤¯à¤¥à¤¾à¤°à¥à¤¥à¤µà¤¾à¤¦à¥€ à¤¸à¤¿à¤¦à¥à¤§à¤¾à¤‚à¤¤//lecture-1//class//152', 'https://www.youtube.com/embed/zEWfpHlx2BI?si=nCV5nxC9a7EsucyT', '1727867940_2844446.jpeg', 'zEWfpHlx2BI', 1, '2024-10-02 05:49:55', 0),
(312, 2, 2, 'à¤…à¤‚à¤¤à¤°à¤°à¤¾à¤·à¥à¤Ÿà¥à¤°à¥€à¤¯ à¤°à¤¾à¤œà¤¨à¥€à¤¤à¤¿ à¤•à¥‡ à¤†à¤‚à¤¶à¤¿à¤• à¤¸à¤¿à¤¦à¥à¤§à¤¾à¤‚à¤¤//lecture-1//class//153', 'https://www.youtube.com/embed/FsFamRSEHBQ?si=Qbz3t-mynrCp0bVq', '1727868060_8053322.jpeg', 'FsFamRSEHBQ', 1, '2024-10-02 05:51:36', 0),
(313, 2, 2, 'à¤…à¤‚à¤¤à¤°à¤°à¤¾à¤·à¥à¤Ÿà¥à¤°à¥€à¤¯ à¤°à¤¾à¤œà¤¨à¥€à¤¤à¤¿ à¤•à¤¾ à¤µà¥à¤¯à¤µà¤¸à¥à¤¥à¤¾ à¤¸à¤¿à¤¦à¥à¤§à¤¾à¤‚à¤¤//lecture-2//class//153', 'https://www.youtube.com/embed/-ts6g4GV9fI?si=zXJMqN_ZhBdUgcFM', '1727868180_2210893.jpeg', '-ts6g4GV9fI', 1, '2024-10-02 05:53:24', 0),
(314, 2, 2, 'à¤…à¤‚à¤¤à¤°à¤°à¤¾à¤·à¥à¤Ÿà¥à¤°à¥€à¤¯ à¤°à¤¾à¤œà¤¨à¥€à¤¤à¤¿ à¤•à¤¾ à¤¨à¤¿à¤°à¥à¤£à¤¯à¤¨ à¤¸à¤¿à¤¦à¥à¤§à¤¾à¤‚à¤¤//lecture-1//class//154', 'https://www.youtube.com/embed/pVdEVM-Tp0c?si=nQ0n3_oXRSTxu6Qz', '1727868240_2190596.jpeg', 'pVdEVM-Tp0c', 1, '2024-10-02 05:54:38', 0),
(315, 2, 2, 'à¤…à¤‚à¤¤à¤°à¤°à¤¾à¤·à¥à¤Ÿà¥à¤°à¥€à¤¯ à¤°à¤¾à¤œà¤¨à¥€à¤¤à¤¿ à¤•à¤¾ à¤–à¥‡à¤² à¤¸à¤¿à¤¦à¥à¤§à¤¾à¤‚à¤¤//lecture-1//class//155', 'https://www.youtube.com/embed/LpdQP6uzNFU?si=OJ2WXt7IjbxlXb9g', '1727868420_8233910.jpeg', 'LpdQP6uzNFU', 1, '2024-10-02 05:57:10', 0),
(316, 2, 2, 'à¤…à¤‚à¤¤à¤°à¤°à¤¾à¤·à¥à¤Ÿà¥à¤°à¥€à¤¯ à¤°à¤¾à¤œà¤¨à¥€à¤¤à¤¿ à¤•à¤¾ à¤¸à¥Œà¤¦à¥‡à¤¬à¤¾à¤œà¥€ à¤”à¤° à¤¸à¤‚à¤šà¤¾à¤° à¤¸à¤¿à¤¦à¥à¤§à¤¾à¤‚à¤¤ lecture-1//class//156', 'https://www.youtube.com/embed/PIMq4Q6U8mM?si=X1asImBLaIhFdSPo', '1727868480_9766225.jpeg', 'PIMq4Q6U8mM', 1, '2024-10-02 05:58:16', 0),
(317, 2, 2, 'à¤¤à¥ƒà¤¤à¥€à¤¯ à¤µà¤¿à¤¶à¥à¤µ lecture-1//class//157', 'https://www.youtube.com/embed/c8nSSxJgZ7U?si=HVmIM1FYx6llH1Fp', '1727868540_3807300.jpeg', 'c8nSSxJgZ7U', 1, '2024-10-02 05:59:32', 0),
(318, 2, 2, 'à¤¨à¤µ à¤¸à¤¾à¤®à¥à¤°à¤¾à¤œà¥à¤¯à¤µà¤¾à¤¦ à¤à¤µà¤‚ à¤•à¥‡à¤‚à¤¦à¥à¤° à¤ªà¤°à¤¿à¤§à¤¿ à¤®à¥‰à¤¡à¤²//lecture-1//class//158', 'https://www.youtube.com/embed/ZtFoUrU5kaQ?si=zSSeEDLGDR9SVJ1i', '1727868600_4709780.jpeg', 'ZtFoUrU5kaQ', 1, '2024-10-02 06:00:43', 0),
(319, 2, 2, 'à¤¶à¤•à¥à¤¤à¤¿ à¤µ à¤¶à¤•à¥à¤¤à¤¿ à¤•à¥‡ à¤¤à¤¤à¥à¤µ//lecture-1//class//159', 'https://www.youtube.com/embed/txYlnzYnLGI?si=1BxSEiDP1aBnJC07', '1727868720_7623283.jpeg', 'txYlnzYnLGI', 1, '2024-10-02 06:02:25', 0),
(320, 2, 2, 'à¤¶à¥€à¤¤ à¤¯à¥à¤¦à¥à¤§//lecture-1//class//160', 'https://www.youtube.com/embed/RGR8vQljgWg?si=mFHwGN5z139B2AP2', '1727868780_1474339.jpeg', 'RGR8vQljgWg', 1, '2024-10-02 06:03:58', 0),
(321, 2, 2, 'à¤¶à¥€à¤¤ à¤¯à¥à¤¦à¥à¤§//lecture-2//class//161', 'https://www.youtube.com/embed/SyD8RNPO63A?si=Kr2Al92WnjA6-3-6', '1727868840_2300485.jpeg', 'SyD8RNPO63A', 1, '2024-10-02 06:04:55', 0),
(322, 1, 2, 'à¤¨à¤¿à¤¶à¤¸à¥à¤¤à¥à¤°à¥€à¤•à¤°à¤£ à¤à¤µà¤‚ à¤¶à¤¸à¥à¤¤à¥à¤° à¤¨à¤¿à¤¯à¤‚à¤¤à¥à¤°à¤£//lecture-1//class//162', 'https://www.youtube.com/embed/daxD9-GsqBU?si=C_R7LqR2t2BhzfcR', '1727868900_6319524.jpeg', 'daxD9-GsqBU', 1, '2024-10-02 06:05:54', 0),
(323, 2, 2, 'à¤¶à¤•à¥à¤¤à¤¿ à¤¸à¤‚à¤¤à¥à¤²à¤¨//lecture-1//class//163', 'https://www.youtube.com/embed/ncTJHhu5Dmw?si=U7j8amE1PkwKnMRq', '1727868960_4682089.jpeg', 'ncTJHhu5Dmw', 1, '2024-10-02 06:06:48', 0),
(324, 2, 2, 'à¤¸à¤¾à¤®à¥‚à¤¹à¤¿à¤• à¤¦à¤¬à¤¾à¤µ à¤¸à¤®à¥‚à¤¹//lecture-1//class//164', 'https://www.youtube.com/embed/n4AZjOoSo4c?si=2vim4NzLO4E8wWTr', '1727869080_5604534.jpeg', 'n4AZjOoSo4c', 1, '2024-10-02 06:08:01', 0),
(325, 2, 2, 'à¤µà¤¿à¤¶à¥à¤µ à¤¸à¤®à¥‚à¤¹//lecture-1//class//165', 'https://www.youtube.com/embed/Rk9YZLIZC_U?si=QaFMbrhcJnrJ7yf-', '1727869140_8882340.jpeg', 'Rk9YZLIZC_U', 1, '2024-10-02 06:09:07', 0),
(326, 2, 2, 'à¤µà¤¿à¤¦à¥‡à¤¶ à¤¨à¥€à¤¤à¤¿//lecture-1//class//166', 'https://www.youtube.com/embed/55jffVyoTTg?si=OXV3PZGCK4_wCCGO', '1727869200_4815485.jpeg', '55jffVyoTTg', 1, '2024-10-02 06:10:26', 0),
(327, 2, 2, 'à¤•à¥‚à¤Ÿà¤¨à¥€à¤¤à¤¿//lecture-1//class//167', 'https://www.youtube.com/embed/NHWgiVKlQL4?si=kKImXmgDDryTnb6t', '1727869260_8675403.jpeg', 'NHWgiVKlQL4', 1, '2024-10-02 06:11:34', 0),
(328, 2, 2, 'à¤•à¥‚à¤Ÿà¤¨à¥€à¤¤à¤¿//lecture-1//class//167', 'https://www.youtube.com/embed/NHWgiVKlQL4?si=kKImXmgDDryTnb6t', '1727869260_583999.jpeg', 'NHWgiVKlQL4', 1, '2024-10-02 06:11:45', 0),
(329, 2, 2, 'à¤—à¥à¤Ÿà¤¨à¤¿à¤°à¤ªà¥‡à¤•à¥à¤· à¤†à¤‚à¤¦à¥‹à¤²à¤¨//lecture-1//class//168', 'https://www.youtube.com/embed/NrphqW_EUIk?si=f8TB3QcRCPqNU0sB', '1727869440_5245983.jpeg', 'NrphqW_EUIk', 1, '2024-10-02 06:14:11', 0),
(330, 2, 2, 'à¤—à¥à¤Ÿà¤¨à¤¿à¤°à¤ªà¥‡à¤•à¥à¤· à¤†à¤‚à¤¦à¥‹à¤²à¤¨//lecture-2//class//169', 'https://www.youtube.com/embed/2ZKxTgJGMVM?si=jJSN8OrW3tMj32jY', '1727869500_5158171.jpeg', '2ZKxTgJGMVM', 1, '2024-10-02 06:15:44', 0),
(331, 2, 2, 'à¤•à¥à¤·à¥‡à¤¤à¥à¤°à¥€à¤¯ à¤¸à¤‚à¤—à¤ à¤¨//lecture-1//class//170', 'https://www.youtube.com/embed/7MHbpFLLqT8?si=IC1dFfLZZiZnFAY-', '1727869620_9408632.jpeg', '7MHbpFLLqT8', 1, '2024-10-02 06:17:05', 0),
(332, 2, 2, 'à¤•à¥à¤·à¥‡à¤¤à¥à¤°à¥€à¤¯ à¤¸à¤‚à¤—à¤ à¤¨//lecture-2//class//171', 'https://www.youtube.com/embed/loevst7QyYw?si=_Oo3bA0NJxIfbxc-', '1727869680_6008867.jpeg', 'loevst7QyYw', 1, '2024-10-02 06:18:21', 0),
(333, 2, 2, 'à¤•à¥à¤·à¥‡à¤¤à¥à¤°à¥€à¤¯ à¤¸à¤‚à¤—à¤ à¤¨//lecture-3//class//172', 'https://www.youtube.com/embed/YTLn9BVX8Ak?si=9f2r-e-uGdXx8don', '1727870040_7635974.jpeg', 'YTLn9BVX8Ak', 1, '2024-10-02 06:24:11', 0),
(334, 2, 2, 'à¤•à¥à¤·à¥‡à¤¤à¥à¤°à¥€à¤¯ à¤¸à¤‚à¤—à¤ à¤¨//lecture-4//class//173', 'https://www.youtube.com/embed/GHRRhsA4smc?si=BgyH-7SCv7WO9dF5', '1727870100_5633668.jpeg', 'GHRRhsA4smc', 1, '2024-10-02 06:25:37', 0),
(335, 2, 2, 'à¤²à¥‹à¤• à¤ªà¥à¤°à¤¶à¤¾à¤¸à¤¨/lecture-1//class//174', 'https://www.youtube.com/embed/VBdFH8LEvyY?si=-oAOnica00CNm8XZ', '1727870220_3708467.jpeg', 'VBdFH8LEvyY', 1, '2024-10-02 06:27:01', 0),
(336, 2, 2, 'à¤²à¥‹à¤• à¤ªà¥à¤°à¤¶à¤¾à¤¸à¤¨/lecture-2//class//175', 'https://www.youtube.com/embed/X_hhAwsLFGw?si=liC8VH2bSJ_SdVzd', '1727870280_8775941.jpeg', 'X_hhAwsLFGw', 1, '2024-10-02 06:28:34', 0),
(337, 2, 2, 'à¤²à¥‹à¤• à¤ªà¥à¤°à¤¶à¤¾à¤¸à¤¨/lecture-3//class//176', 'https://www.youtube.com/embed/k0pkW-Iq6So?si=ubjjKWYalmFK5bdR', '1727870400_9042432.jpeg', 'k0pkW-Iq6So', 1, '2024-10-02 06:30:20', 0),
(338, 2, 2, 'à¤²à¥‹à¤• à¤ªà¥à¤°à¤¶à¤¾à¤¸à¤¨/lecture-4//class//177', 'https://www.youtube.com/embed/yfDhIX-som0?si=S7Xu3u8ZhTnu8XYo', '1727870460_3649902.jpeg', 'yfDhIX-som0', 1, '2024-10-02 06:31:39', 0),
(339, 2, 2, 'à¤²à¥‹à¤• à¤ªà¥à¤°à¤¶à¤¾à¤¸à¤¨/lecture-5//class//178', 'https://www.youtube.com/embed/DNRbPMKjnsc?si=_KCX4kAy60m76gYv', '1727870580_7552125.jpeg', 'DNRbPMKjnsc', 1, '2024-10-02 06:33:29', 0),
(340, 2, 2, 'à¤²à¥‹à¤• à¤ªà¥à¤°à¤¶à¤¾à¤¸à¤¨/lecture-6//class//179', 'https://www.youtube.com/embed/J8tKrLlYdmY?si=14-1f3uFSZnD9rj9', '1727870640_1332985.jpeg', 'J8tKrLlYdmY', 1, '2024-10-02 06:34:38', 0),
(341, 2, 2, 'à¤²à¥‹à¤• à¤ªà¥à¤°à¤¶à¤¾à¤¸à¤¨/lecture-7//class//180', 'https://www.youtube.com/embed/7NwycUU7aow?si=MmJTYBXefFXrrWqz', '1727870760_6205587.jpeg', '7NwycUU7aow', 1, '2024-10-02 06:36:47', 0),
(342, 2, 2, 'à¤²à¥‹à¤• à¤ªà¥à¤°à¤¶à¤¾à¤¸à¤¨/lecture-8//class//181', 'https://www.youtube.com/embed/a5WH71glatU?si=CbNopYS2KFd_X6dn', '1727870880_9257238.jpeg', 'a5WH71glatU', 1, '2024-10-02 06:38:16', 0),
(343, 2, 2, 'à¤²à¥‹à¤• à¤ªà¥à¤°à¤¶à¤¾à¤¸à¤¨/lecture-9//class//182', 'https://www.youtube.com/embed/w_nweCubNrk?si=QGWfNZmVttu09BsP', '1727870940_529536.jpeg', 'w_nweCubNrk', 1, '2024-10-02 06:39:33', 0),
(344, 2, 2, 'à¤²à¥‹à¤• à¤ªà¥à¤°à¤¶à¤¾à¤¸à¤¨/lecture-10//class//183', 'https://www.youtube.com/embed/1cdUv08mRbA?si=Lo_aT3RUyIjYErzH', '1727871000_5520241.jpeg', '1cdUv08mRbA', 1, '2024-10-02 06:40:36', 0),
(345, 2, 2, 'à¤²à¥‹à¤• à¤ªà¥à¤°à¤¶à¤¾à¤¸à¤¨/lecture-11//class//184', 'https://www.youtube.com/embed/N7kOJcY4_Z8?si=aCSB-UW6Js8ipbkg', '1727871060_8190761.jpeg', 'N7kOJcY4_Z8', 1, '2024-10-02 06:41:29', 0),
(346, 2, 2, 'à¤²à¥‹à¤• à¤ªà¥à¤°à¤¶à¤¾à¤¸à¤¨/lecture-12//class//185', 'https://www.youtube.com/embed/LZqTcC40_Nc?si=1vFjYxaBjfy3JB7t', '1727871120_1449150.jpeg', 'LZqTcC40_Nc', 1, '2024-10-02 06:42:31', 0),
(347, 2, 2, 'à¤²à¥‹à¤• à¤ªà¥à¤°à¤¶à¤¾à¤¸à¤¨/lecture-13//class//186', 'https://www.youtube.com/embed/QFjFrc5rEI0?si=oj3FACxuTDr0EiLP', '1727871180_7829161.jpeg', 'QFjFrc5rEI0', 1, '2024-10-02 06:43:53', 0),
(348, 2, 2, 'à¤²à¥‹à¤• à¤ªà¥à¤°à¤¶à¤¾à¤¸à¤¨/lecture-14//class//187', 'https://www.youtube.com/embed/dIJIJpMH2-A?si=GA216E9gDf5fHaV3', '1727871780_1613578.jpeg', 'dIJIJpMH2-A', 1, '2024-10-02 06:53:20', 0),
(349, 2, 2, 'à¤²à¥‹à¤• à¤ªà¥à¤°à¤¶à¤¾à¤¸à¤¨/lecture-15//class//188', 'https://www.youtube.com/embed/3KbVSOyKuhU?si=ygCyqCLeyGpVm1Zx', '1727871840_7866228.jpeg', '3KbVSOyKuhU', 1, '2024-10-02 06:54:33', 0),
(350, 2, 2, 'à¤²à¥‹à¤• à¤ªà¥à¤°à¤¶à¤¾à¤¸à¤¨/lecture-16//class//189', 'https://www.youtube.com/embed/DK21DX-ao-A?si=A2847Nh5vcuoXkWb', '1727830860_1967113.jpeg', 'DK21DX-ao-A', 1, '2024-10-02 07:31:34', 0),
(351, 2, 2, 'à¤²à¥‹à¤• à¤ªà¥à¤°à¤¶à¤¾à¤¸à¤¨/lecture-17//class//190', 'https://www.youtube.com/embed/6gmIl6_7a6I?si=ZeMoDK67IHjeblfV', '1727830920_704036.jpeg', '6gmIl6_7a6I', 1, '2024-10-02 07:32:55', 0),
(352, 2, 2, 'à¤²à¥‹à¤• à¤ªà¥à¤°à¤¶à¤¾à¤¸à¤¨/lecture-18//class//191', 'https://www.youtube.com/embed/v4Xbgwvd_G4?si=kL3pK2EPKUnq8naS', '1727831040_2877830.jpeg', 'v4Xbgwvd_G4', 1, '2024-10-02 07:34:32', 0),
(353, 2, 2, 'à¤²à¥‹à¤• à¤ªà¥à¤°à¤¶à¤¾à¤¸à¤¨/lecture-19//class//192', 'https://www.youtube.com/embed/oPAIHkQ0aFA?si=Hqf1eMA8GFyx7GuE', '1727831160_5061130.jpeg', 'oPAIHkQ0aFA', 1, '2024-10-02 07:36:02', 0),
(354, 2, 2, 'à¤²à¥‹à¤• à¤ªà¥à¤°à¤¶à¤¾à¤¸à¤¨/lecture-20//class//193', 'https://www.youtube.com/embed/eVL9pOKdV_c?si=eNvHQYq4ZkuLaMz8', '1727831280_3268836.jpeg', 'eVL9pOKdV_c', 1, '2024-10-02 07:38:07', 0),
(355, 2, 2, 'à¤²à¥‹à¤• à¤ªà¥à¤°à¤¶à¤¾à¤¸à¤¨/lecture-21//class//194', 'https://www.youtube.com/embed/18esYJtQSBg?si=6j9u0TyM3Ifwjy0e', '1727831340_1324787.jpeg', '18esYJtQSBg', 1, '2024-10-02 07:39:25', 0),
(356, 2, 2, 'à¤²à¥‹à¤• à¤ªà¥à¤°à¤¶à¤¾à¤¸à¤¨/lecture-22//class//195', 'https://www.youtube.com/embed/6PZOEdiQ38M?si=wp269pffbMCGg1FO', '1727831460_7960828.jpeg', '6PZOEdiQ38M', 1, '2024-10-02 07:41:11', 0),
(357, 2, 2, 'à¤²à¥‹à¤• à¤ªà¥à¤°à¤¶à¤¾à¤¸à¤¨/lecture-24//class//196', 'https://www.youtube.com/embed/BFQYgTppK7c?si=NqRjnThm5eKmCBXx', '1727831520_2511931.jpeg', 'BFQYgTppK7c', 1, '2024-10-02 07:42:20', 0),
(358, 2, 2, 'à¤²à¥‹à¤• à¤ªà¥à¤°à¤¶à¤¾à¤¸à¤¨/lecture-25//class//197', 'https://www.youtube.com/embed/7FbiOozvCpo?si=ZBlxPpdxgfS_Q2HA', '1727831580_4807945.jpeg', '7FbiOozvCpo', 1, '2024-10-02 07:43:50', 0),
(359, 2, 2, 'à¤¤à¥à¤²à¤¨à¤¾à¤¤à¥à¤®à¤• à¤°à¤¾à¤œà¤¨à¥€à¤¤à¤¿/lecture-1//class//198', 'https://www.youtube.com/embed/etYMRTbZJoU?si=aKYtJC3qI3ixvhzw', '1727831700_8824209.jpeg', 'etYMRTbZJoU', 1, '2024-10-02 07:45:37', 0),
(360, 2, 2, 'à¤¤à¥à¤²à¤¨à¤¾à¤¤à¥à¤®à¤• à¤°à¤¾à¤œà¤¨à¥€à¤¤à¤¿/lecture-2//class//199', 'https://www.youtube.com/embed/KH7XgTiLlQA?si=sXsF6Ru-aiSQHCAJ', '1727831760_3373381.jpeg', 'KH7XgTiLlQA', 1, '2024-10-02 07:46:49', 0),
(361, 2, 2, 'à¤¤à¥à¤²à¤¨à¤¾à¤¤à¥à¤®à¤• à¤°à¤¾à¤œà¤¨à¥€à¤¤à¤¿/lecture-3//class//200', 'https://www.youtube.com/embed/8ijACYxV7E0?si=Qvb5UdGvZHBpaufJ', '1727831880_9202829.jpeg', '8ijACYxV7E0', 1, '2024-10-02 07:48:09', 0),
(362, 2, 2, 'à¤¤à¥à¤²à¤¨à¤¾à¤¤à¥à¤®à¤• à¤°à¤¾à¤œà¤¨à¥€à¤¤à¤¿/lecture-4//class//201', 'https://www.youtube.com/embed/offIZ8LNhTA?si=JJTgc_Ia4wj5azcf', '1727832720_7228195.jpeg', 'offIZ8LNhTA', 1, '2024-10-02 08:02:39', 0),
(363, 2, 2, 'à¤¤à¥à¤²à¤¨à¤¾à¤¤à¥à¤®à¤• à¤°à¤¾à¤œà¤¨à¥€à¤¤à¤¿/lecture-5//class//202', 'https://www.youtube.com/embed/aFBYoKhbc1g?si=2u0OX4hLNnRQelEG', '1727832840_1409051.jpeg', 'aFBYoKhbc1g', 1, '2024-10-02 08:04:09', 0),
(364, 2, 2, 'à¤¤à¥à¤²à¤¨à¤¾à¤¤à¥à¤®à¤• à¤°à¤¾à¤œà¤¨à¥€à¤¤à¤¿/lecture-6//class//203', 'https://www.youtube.com/embed/ZzIyDhTrgu0?si=M43CAOzWAZMHd48o', '1727832960_6340356.jpeg', 'ZzIyDhTrgu0', 1, '2024-10-02 08:06:01', 0),
(365, 2, 2, 'à¤¤à¥à¤²à¤¨à¤¾à¤¤à¥à¤®à¤• à¤°à¤¾à¤œà¤¨à¥€à¤¤à¤¿/lecture-7//class//204', 'https://www.youtube.com/embed/-Rnd-ZqzouI?si=bEQjVA0m6_iyNtLe', '1727833020_600767.jpeg', '-Rnd-ZqzouI', 1, '2024-10-02 08:07:47', 0),
(366, 2, 2, 'à¤¤à¥à¤²à¤¨à¤¾à¤¤à¥à¤®à¤• à¤°à¤¾à¤œà¤¨à¥€à¤¤à¤¿/lecture-8//class//205', 'https://www.youtube.com/embed/BfDOhC4qL8U?si=gjWujjzsqOTMj8Cl', '1727833140_9259383.jpeg', 'BfDOhC4qL8U', 1, '2024-10-02 08:09:05', 0),
(367, 2, 2, 'à¤¤à¥à¤²à¤¨à¤¾à¤¤à¥à¤®à¤• à¤°à¤¾à¤œà¤¨à¥€à¤¤à¤¿/lecture-9//class//206', 'https://www.youtube.com/embed/P1cpOyWgrCo?si=j1gxLWBE7HYmQcSa', '1727833200_4755584.jpeg', 'P1cpOyWgrCo', 1, '2024-10-02 08:10:43', 0),
(368, 2, 2, 'à¤¤à¥à¤²à¤¨à¤¾à¤¤à¥à¤®à¤• à¤°à¤¾à¤œà¤¨à¥€à¤¤à¤¿/lecture-10//class//207', 'https://www.youtube.com/embed/3LoeyL15r6c?si=D1ThwJ-EOdxMTAGX', '1727833320_7775354.jpeg', '3LoeyL15r6c', 1, '2024-10-02 08:12:14', 0),
(369, 2, 2, 'à¤¤à¥à¤²à¤¨à¤¾à¤¤à¥à¤®à¤• à¤°à¤¾à¤œà¤¨à¥€à¤¤à¤¿/lecture-11//class//208', 'https://www.youtube.com/embed/p_f_fhGfN_0?si=f3nEy1ateG6YfPjq', '1727833380_1122429.jpeg', 'p_f_fhGfN_0', 1, '2024-10-02 08:13:28', 0),
(370, 2, 2, 'à¤¤à¥à¤²à¤¨à¤¾à¤¤à¥à¤®à¤• à¤°à¤¾à¤œà¤¨à¥€à¤¤à¤¿/lecture-12//class//209', 'https://www.youtube.com/embed/KGODTCY5OwI?si=Nsb8hBnneFXnLIu7', '1727833860_6175751.jpeg', 'KGODTCY5OwI', 1, '2024-10-02 08:21:02', 0),
(371, 2, 2, 'à¤¤à¥à¤²à¤¨à¤¾à¤¤à¥à¤®à¤• à¤°à¤¾à¤œà¤¨à¥€à¤¤à¤¿/lecture-13//class//210', 'https://www.youtube.com/embed/MT18rWBLA9o?si=ey-xnADn3AUNwdys', '1727833920_7491003.jpeg', 'MT18rWBLA9o', 1, '2024-10-02 08:22:40', 0),
(372, 2, 2, 'à¤¤à¥à¤²à¤¨à¤¾à¤¤à¥à¤®à¤• à¤°à¤¾à¤œà¤¨à¥€à¤¤à¤¿/lecture-14//class//211', 'https://www.youtube.com/embed/55wzvrhjY9w?si=jYKKTP_lfvL1NsdB', '1727834040_195062.jpeg', '55wzvrhjY9w', 1, '2024-10-02 08:24:18', 0),
(373, 2, 2, 'à¤¤à¥à¤²à¤¨à¤¾à¤¤à¥à¤®à¤• à¤°à¤¾à¤œà¤¨à¥€à¤¤à¤¿/lecture-15//class//212', 'https://www.youtube.com/embed/vZupSQ-qsEI?si=kh8KnHajmzuNhKlT', '1727834100_7707026.jpeg', 'vZupSQ-qsEI', 1, '2024-10-02 08:25:45', 0),
(374, 2, 2, 'à¤¤à¥à¤²à¤¨à¤¾à¤¤à¥à¤®à¤• à¤°à¤¾à¤œà¤¨à¥€à¤¤à¤¿/lecture-15//class//213', 'https://www.youtube.com/embed/vZupSQ-qsEI?si=kh8KnHajmzuNhKlT', '1727834100_2500691.jpeg', 'vZupSQ-qsEI', 1, '2024-10-02 08:25:45', 0),
(375, 2, 2, 'à¤¤à¥à¤²à¤¨à¤¾à¤¤à¥à¤®à¤• à¤°à¤¾à¤œà¤¨à¥€à¤¤à¤¿/lecture-16//class//214', 'https://www.youtube.com/embed/64oovZBGiJk?si=YcrgGwZpGp-0opAM', '1727834280_9446674.jpeg', '64oovZBGiJk', 1, '2024-10-02 08:28:31', 0);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_users`
--

CREATE TABLE `tbl_users` (
  `id` int(11) NOT NULL,
  `name` varchar(100) DEFAULT NULL,
  `profile` text DEFAULT NULL,
  `phone` varchar(12) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `gender` varchar(10) DEFAULT NULL,
  `dob` date DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `create_at` datetime NOT NULL DEFAULT current_timestamp(),
  `otp` varchar(10) DEFAULT NULL,
  `state` int(11) NOT NULL DEFAULT 0,
  `city` varchar(255) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `status` int(1) NOT NULL DEFAULT 1,
  `membership` int(1) NOT NULL DEFAULT 0,
  `activateDate` date DEFAULT NULL,
  `endDate` date DEFAULT NULL,
  `amount` varchar(255) DEFAULT NULL,
  `duration` int(5) DEFAULT 0,
  `appid` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_users`
--

INSERT INTO `tbl_users` (`id`, `name`, `profile`, `phone`, `email`, `gender`, `dob`, `password`, `create_at`, `otp`, `state`, `city`, `address`, `status`, `membership`, `activateDate`, `endDate`, `amount`, `duration`, `appid`) VALUES
(1, 'ssk', NULL, '8956452365', 'vd@gmail.com', 'male', '2024-09-11', 'e10adc3949ba59abbe56e057f20f883e', '2024-09-25 07:55:03', NULL, 0, NULL, NULL, 1, 1, '2024-09-25', '2025-09-25', '1999', 12, '1728115147997763'),
(2, 'prakash singh', NULL, '7071436807', 'prakashsingh.pbh@gmail.com', 'male', '2001-08-15', '$2y$10$M74nysVz6lHWlB/1hamwSe/Mczabw98T0cNoAOvWVqufN2S5Y0Aoi', '2024-09-25 09:44:36', '730307', 0, NULL, NULL, 1, 0, NULL, NULL, NULL, 0, NULL),
(3, 'ssk', NULL, '9875454587', 'sbmksh@gmail.com', 'male', '2024-09-11', 'e10adc3949ba59abbe56e057f20f883e', '2024-09-25 09:48:41', '537416', 0, NULL, NULL, 1, 1, '2024-09-25', '2025-09-25', '1999', 12, '1727944224476598'),
(4, 'prakash singh', '1727426220_9958919.jpg', '7070436807', 'nanchusingh0@gmail.com', 'male', '2001-08-15', 'd0970714757783e6cf17b26fb8e2298f', '2024-09-26 06:36:10', NULL, 23, 'Allahabad', 'Pbh', 1, 1, '2024-09-26', '2025-09-26', '1999', 12, '1728036458635830'),
(5, 'N b SINGH', NULL, '7310015238', 'prakash@gmail.com', 'male', '2024-09-29', 'e10adc3949ba59abbe56e057f20f883e', '2024-09-29 06:30:01', NULL, 0, NULL, NULL, 1, 0, NULL, NULL, NULL, 0, NULL),
(6, 'Amit yadav', NULL, '8765375265', 'ay2442435@gmail.com', 'male', '2000-07-10', 'f039eb446cc0bd7c5ad12b7a0e2a1dae', '2024-09-30 13:54:52', NULL, 0, NULL, NULL, 1, 0, NULL, NULL, NULL, 0, NULL),
(7, 'Ashish Singh', NULL, '9234512345', 'ashish@mail.com', 'male', '2024-10-01', '827ccb0eea8a706c4c34a16891f84e7b', '2024-10-01 07:56:25', NULL, 0, NULL, NULL, 1, 0, NULL, NULL, NULL, 0, '1727962234255668'),
(8, 'AKASH YADAV', NULL, '9696753171', 'ay406630@gmail.com', 'male', '2002-06-25', 'b62434a5864537e7a593a95a8bbedcd9', '2024-10-03 08:24:07', NULL, 0, NULL, NULL, 1, 0, NULL, NULL, NULL, 0, '1727943870430293'),
(9, 'Suraj singh ', NULL, '9621007106', 'singhmsuraj616@gmail.com', 'male', '2003-12-12', '13fb8c1f1ebf638cd6b847f8f9037bce', '2024-10-03 08:24:18', NULL, 0, NULL, NULL, 1, 0, NULL, NULL, NULL, 0, '1727944080647285'),
(10, 'Shivam yadav', NULL, '7393052323', 'shivamkumary3@gmail.com', 'male', '1999-11-24', '9899c2578a42792fed2838cf9c1e3f04', '2024-10-03 08:25:10', NULL, 0, NULL, NULL, 1, 0, NULL, NULL, NULL, 0, '1728021915544641'),
(11, 'UPENDRA kumar', NULL, '7055523609', 'upendrakurmi15@gmail.com', 'male', '1998-07-01', 'ceab81b6f054e350b6461fa498dc7f40', '2024-10-03 08:25:16', NULL, 0, NULL, NULL, 1, 0, NULL, NULL, NULL, 0, '1727943934107086'),
(12, 'Kuldeep maurya', NULL, '9889873885', 'gyant2020@gmail.com', 'male', '1998-08-23', '23ee46558870c61935c26994540abfae', '2024-10-03 08:26:53', NULL, 0, NULL, NULL, 1, 0, NULL, NULL, NULL, 0, '1727944143109137'),
(13, 'Ashutosh Yadav', NULL, '9984820600', 'ashutosh300yadav@gmail.com', 'male', '2000-01-05', '0700bcf4fde97c5d775732bd32a986fc', '2024-10-03 08:27:10', NULL, 0, NULL, NULL, 1, 0, NULL, NULL, NULL, 0, '1728039986374318'),
(14, 'Praveen Singh', NULL, '9453545936', 'ankits21799@gmail.com', 'male', '1999-06-12', '4bbbc5dd3b464b9c4fd226dfc4b9eda7', '2024-10-03 08:30:27', '500479', 0, NULL, NULL, 1, 0, NULL, NULL, NULL, 0, '1727944434731107'),
(15, 'AJAY KUMAR SINGH', NULL, '9794430052', 'ajaykoraon2023@gmail.com', 'male', '2000-05-02', 'da4c5d6d7942c61b0c2f8d1ed1628815', '2024-10-03 08:51:33', NULL, 0, NULL, NULL, 1, 0, NULL, NULL, NULL, 0, '1727945505296089'),
(16, 'Rohit kumar', NULL, '9956297030', 'rk68687@gmail.com', 'male', '1994-05-26', '24780214eac5297e08da75a44c5f0480', '2024-10-03 08:59:10', NULL, 0, NULL, NULL, 1, 0, NULL, NULL, NULL, 0, '1727945964928346'),
(17, 'SAURABH MISHRA', NULL, '8896632202', 'saurabh20mishra@gmail.com', 'male', '1988-07-06', '17054edd4ad1fbb85f5454086048ce16', '2024-10-03 09:07:02', NULL, 0, NULL, NULL, 1, 0, NULL, NULL, NULL, 0, '172794643897274'),
(18, 'Anuj bharti', NULL, '9170980188', 'anujbharti938@gmail.com', 'male', '1997-07-16', '03a87126bbdcd59cf04d39cf39435ccd', '2024-10-03 09:16:01', NULL, 0, NULL, NULL, 1, 0, NULL, NULL, NULL, 0, '1727968654968480'),
(19, 'Anil Chaudhary', NULL, '9721347841', 'anilkumar24071991@gmail.com', 'male', '1993-08-22', '96055f5b06bf9381ac43879351642cf5', '2024-10-03 09:19:50', NULL, 0, NULL, NULL, 1, 0, NULL, NULL, NULL, 0, '1728028108755921'),
(20, 'Vivek kumar maurya ', NULL, '9450843433', 'vivekrock1250@gmail.com', 'male', '2024-10-12', 'e10adc3949ba59abbe56e057f20f883e', '2024-10-03 09:35:45', NULL, 0, NULL, NULL, 1, 0, NULL, NULL, NULL, 0, '1727968508576037'),
(21, 'saurav kumar', NULL, '9327864486', 'tirbhawansaroj@gmail.com', 'male', '2001-07-01', 'be871fa13c33cbf1d4be080e230be313', '2024-10-03 09:52:57', NULL, 0, NULL, NULL, 1, 0, NULL, NULL, NULL, 0, '1727949202233699'),
(22, 'Shubham Yadav', NULL, '8840574064', 'yadavshubham8840@gmail.com', 'male', '1995-12-15', '5d91d872902435360aefcf5915521379', '2024-10-03 09:54:04', NULL, 0, NULL, NULL, 1, 0, NULL, NULL, NULL, 0, '172794925336933'),
(23, 'Sangam Kumar', NULL, '9839091001', 'sangamkumar22@gmail.com', 'male', '1995-11-19', 'b04ed3a4ad9b0c778b5e8f00bac87e06', '2024-10-03 10:01:50', NULL, 0, NULL, NULL, 1, 0, NULL, NULL, NULL, 0, '1728035876967672'),
(24, 'Rachna Rani', NULL, '8192034508', 'rachna2009rani@gmail.com', 'female', '1986-10-20', 'eece0c322054871fb433f1d81ad9c9bf', '2024-10-03 10:09:06', NULL, 0, NULL, NULL, 1, 0, NULL, NULL, NULL, 0, '1727950192891967'),
(25, 'Anoop Singh', NULL, '6306328496', 'singhanoop8416@gmail.com', 'male', '1995-07-05', 'fd5392d1c0d91a5422c0b3488c2dfb69', '2024-10-03 11:02:22', NULL, 0, NULL, NULL, 1, 0, NULL, NULL, NULL, 0, '1727953365918841'),
(26, 'Shiv prashad ', NULL, '9519672286', 'shivprasadmzp084@gmail.com', 'male', '2001-05-15', '0ecf8ac4f8a681b94b886d465d8afa6d', '2024-10-03 11:08:51', NULL, 0, NULL, NULL, 1, 0, NULL, NULL, NULL, 0, NULL),
(27, 'Hariom Kumar', NULL, '8787265390', 'hk6408901@gmail.com', 'male', '1996-06-08', '87ea665a076f7bdbbf4d78f30feaa804', '2024-10-03 11:09:54', NULL, 0, NULL, NULL, 1, 0, NULL, NULL, NULL, 0, '1728004226495773'),
(28, 'Satyanand Rai', NULL, '8081887700', 'satyanand483@gmail.com', 'male', '2004-07-28', 'f11c95fda5dfd6b5c29acbd94fb6d830', '2024-10-03 11:12:58', NULL, 0, NULL, NULL, 1, 0, NULL, NULL, NULL, 0, '1728016088509355'),
(29, 'Janvi Jayant ', NULL, '8630906804', 'janvijayant524@gmail.com', 'female', '1994-01-01', '35a12c43227f217207d4e06ffefe39d3', '2024-10-03 11:30:23', '866982', 0, NULL, NULL, 1, 0, NULL, NULL, NULL, 0, '1727956149114841'),
(30, 'Rekha', NULL, '9325979619', 'rishishing11088@gmail.com', 'female', '2024-10-01', '93279e3308bdbbeed946fc965017f67a', '2024-10-03 11:34:07', NULL, 0, NULL, NULL, 1, 0, NULL, NULL, NULL, 0, '1728007273103395'),
(31, 'Krishna Mishra', NULL, '6306605438', 'krishnam0216@gmail.com', 'male', '1995-10-12', '719d093a40f0bac303f3f5aff146d0ee', '2024-10-03 11:36:42', NULL, 0, NULL, NULL, 1, 0, NULL, NULL, NULL, 0, '1728029078223971'),
(32, 'Gyanendra Kumar', NULL, '9455550584', 'gyanendrakumar5181@gmail.com', 'male', '1889-05-20', 'c73a948beb82ca8e0dc77087b1eaa042', '2024-10-03 11:48:51', '435695', 0, NULL, NULL, 1, 0, NULL, NULL, NULL, 0, '1727966762865194'),
(33, ' Km Shobha', NULL, '6395074180', 'rahul9528singh@gmail.com', 'female', '1998-09-12', 'd0970714757783e6cf17b26fb8e2298f', '2024-10-03 11:59:09', NULL, 0, NULL, NULL, 1, 0, NULL, NULL, NULL, 0, '1727965585621031'),
(34, 'Pradeep Kumar ', NULL, '8268825739', 'simodkumar466@gmail.com', 'male', '1991-06-07', 'e10adc3949ba59abbe56e057f20f883e', '2024-10-03 12:45:45', NULL, 0, NULL, NULL, 1, 0, NULL, NULL, NULL, 0, '1727959650189350'),
(35, 'anil kumar Saroj', NULL, '7905489617', 'aanillmedia@gmail.com', 'male', '1984-08-18', 'adbb04975baa91da2b02caa8a1c7b717', '2024-10-03 13:02:07', NULL, 0, NULL, NULL, 1, 0, NULL, NULL, NULL, 0, '1727960536820135'),
(36, 'Ranjeet', NULL, '9026887760', 'shuklagi150799@gmail.com', 'male', '1999-10-15', '22a1ce10b909f7e462689544490f7ef7', '2024-10-03 13:03:26', NULL, 0, NULL, NULL, 1, 0, NULL, NULL, NULL, 0, '1727960619486034'),
(37, 'Rajan Chaudhary', NULL, '9027983826', 'chaudhary.rajanbest@gmail.com', 'male', '1996-06-21', 'ba89e4ae0b783456c6b25e50c1b309f4', '2024-10-03 13:03:27', NULL, 0, NULL, NULL, 1, 0, NULL, NULL, NULL, 0, '1727960623461867'),
(38, 'Dr. Amresh mishra', NULL, '9415082921', 'amreshh100@gmail.com', 'male', '2024-10-19', 'd2328b5f9f7d2b2fc9dec8dde328b1e1', '2024-10-03 13:03:32', NULL, 0, NULL, NULL, 1, 0, NULL, NULL, NULL, 0, '172797504011387'),
(39, 'Amaresh Kumar', NULL, '9598859009', 'aryan009j@gmail.com', 'male', '1992-02-02', 'bfc66e7f13adc52bbbf0f3e9f5b00850', '2024-10-03 13:03:46', NULL, 0, NULL, NULL, 1, 0, NULL, NULL, NULL, 0, '1727971831131907'),
(40, 'Dharam Pal Chauhan', NULL, '9807969407', 'chauhandps2014@gmail.com', 'male', '1992-07-03', 'd0970714757783e6cf17b26fb8e2298f', '2024-10-03 13:04:07', NULL, 0, NULL, NULL, 1, 0, NULL, NULL, NULL, 0, '1727960997570688'),
(41, 'ajay Yadav', NULL, '9169589120', 'ajayarun47@gmail.com', 'male', '1996-10-06', '4a7d1ed414474e4033ac29ccb8653d9b', '2024-10-03 13:05:56', NULL, 0, NULL, NULL, 1, 0, NULL, NULL, NULL, 0, '1727960984603732'),
(42, 'Pradeep Kumar ', NULL, '8115948890', 'pradeepk10892@gmail.com', 'male', '1998-08-25', '08ee1aedd33ebad1e2e7c86aa6c8d653', '2024-10-03 13:11:11', NULL, 0, NULL, NULL, 1, 0, NULL, NULL, NULL, 0, '1727989580261228'),
(43, 'Vikram kumar singh', NULL, '7985664504', 'vs1342916@gmail.com', 'male', '1990-10-19', '25d55ad283aa400af464c76d713c07ad', '2024-10-03 13:11:14', NULL, 0, NULL, NULL, 1, 0, NULL, NULL, NULL, 0, '1728031316439197'),
(44, 'Surbhi ', NULL, '8299879803', 'srivastavasurabhi105@gmail.com', 'female', '1994-06-10', '2260cfcceaa04dc9c2322603928789f7', '2024-10-03 13:11:31', NULL, 0, NULL, NULL, 1, 0, NULL, NULL, NULL, 0, '1727966279222291'),
(45, 'Rajendra singh', NULL, '8954093401', 'rajujyal123@gmail.com', 'male', '1988-10-13', '8f21f694c3fc578bb9edf42e016b12db', '2024-10-03 13:11:34', NULL, 0, NULL, NULL, 1, 0, NULL, NULL, NULL, 0, '1728028651266450'),
(46, 'Vinay ', NULL, '7607963220', 'vinaykumar.yadav197@gmail.com', 'male', '1993-06-15', '9a2eb03ecbde256f51476a72d83e67fa', '2024-10-03 13:12:29', NULL, 0, NULL, NULL, 1, 0, NULL, NULL, NULL, 0, '172796134164591'),
(47, 'RAMESH PATEL', NULL, '9794284971', 'rkpambedkernager@gmail.com', 'male', '2024-07-30', '5deea7667d33ba4294c05bcc1c3e6bf4', '2024-10-03 13:12:43', NULL, 0, NULL, NULL, 1, 0, NULL, NULL, NULL, 0, '172796123895495'),
(48, 'Raj Kumar', NULL, '9795082472', 'rajkumar07032@gmail.com', 'male', '1989-09-20', 'd6be9540f00d7554044cea9059cd9942', '2024-10-03 13:12:45', NULL, 0, NULL, NULL, 1, 0, NULL, NULL, NULL, 0, '1727961992197845'),
(49, 'subhash chandra', NULL, '9956486490', 'subhashchandra1021990@gmail.com', 'male', '1990-02-10', '8cd2ea04c1a42a4dac22569097153530', '2024-10-03 13:12:52', NULL, 0, NULL, NULL, 1, 0, NULL, NULL, NULL, 0, '1728038269406847'),
(50, 'Akram Hashmi', NULL, '8400002462', 'akram123hashmi@gmail.com', 'male', '1998-07-20', 'f5205f353a477f0378a12eb7c5da8682', '2024-10-03 13:13:29', NULL, 0, NULL, NULL, 1, 0, NULL, NULL, NULL, 0, '1727961487714006'),
(51, 'Vipin Kumar', NULL, '9984607564', 'seemachaudhary8948@gmail.com', 'male', '1990-05-10', 'b45e9c9b3e86996b0973a5074153a187', '2024-10-03 13:13:53', NULL, 0, NULL, NULL, 1, 0, NULL, NULL, NULL, 0, '1727961276737721'),
(52, 'GULAB CHANDRA ', NULL, '7905620511', 'gulab2291@gmail.com', 'male', '1991-02-02', '8d4ac024ae54dd467746f1c1fc0292ba', '2024-10-03 13:14:43', NULL, 0, NULL, NULL, 1, 0, NULL, NULL, NULL, 0, '1727961294232280'),
(53, 'Ankit dubey', NULL, '8318942306', 'ankitdubeykonch@gmail.com', 'male', '1994-08-05', 'ad4384504a0d82a5cf6d33ebb9af4b07', '2024-10-03 13:15:25', NULL, 0, NULL, NULL, 1, 0, NULL, NULL, NULL, 0, '1728013881758404'),
(54, 'Vipin kumar ', NULL, '8630758551', 'vipinkumarsavita2@gmail.com', 'male', '1991-07-02', 'f43be021625da36b8ea5145aa9ee955d', '2024-10-03 13:17:10', NULL, 0, NULL, NULL, 1, 0, NULL, NULL, NULL, 0, '1728040107284905'),
(55, 'FIROJ KHAN UP POLICE', NULL, '8299099688', 'firojkhanup100@gmail.com', 'male', '1990-07-15', 'a6c90d9f4bb082c0db085f341ddb5c56', '2024-10-03 13:17:33', '508151', 0, NULL, NULL, 1, 0, NULL, NULL, NULL, 0, '1727961523837518'),
(56, 'Shailendra yadav', NULL, '9506928245', 'shailendracert@gmail.com', 'male', '1989-11-03', '81dc9bdb52d04dc20036dbd8313ed055', '2024-10-03 13:17:40', NULL, 0, NULL, NULL, 1, 0, NULL, NULL, NULL, 0, '1727961614289208'),
(57, 'Rupesh Yadav', NULL, '7977383881', 'ry1335305@gmail.com', 'male', '2024-10-03', '4507ad1de82a2772dedf4885045dbae1', '2024-10-03 13:17:47', NULL, 0, NULL, NULL, 1, 0, NULL, NULL, NULL, 0, NULL),
(58, 'Arun Kumar yadav', NULL, '8726117288', 'arunyadav871985@gmail.com', 'male', '1985-07-08', 'e55b38d2364ee37c17cb2b061f601e7f', '2024-10-03 13:23:18', '344602', 0, NULL, NULL, 1, 0, NULL, NULL, NULL, 0, '1727963848854329'),
(59, 'Ram Awadh Pal', NULL, '8382989210', 'palramawadh5@gmail.com', 'male', '1995-07-04', 'd0970714757783e6cf17b26fb8e2298f', '2024-10-03 13:23:21', NULL, 0, NULL, NULL, 1, 0, NULL, NULL, NULL, 0, '172796185267169'),
(60, 'Neha Verma', NULL, '9559900799', 'nehav8208@gmail.com', 'female', '1999-11-26', 'b1272fc20281640f9d1d521eec20c7c6', '2024-10-03 13:24:08', NULL, 0, NULL, NULL, 1, 0, NULL, NULL, NULL, 0, '1727962032956756'),
(61, 'Anshul Yadav', NULL, '9026937454', 'anshulyadav2523@gmail.com', 'female', '2000-02-11', '5ec829debe54b19a5f78d9a65b900a39', '2024-10-03 13:25:55', NULL, 0, NULL, NULL, 1, 0, NULL, NULL, NULL, 0, '1727962087845249'),
(62, 'Vinay Kumar Gond', NULL, '7302861041', 'vk1278082@gmail.com', 'male', '1994-12-07', 'ba987d1478f83b9c4c0a7821a0fe525f', '2024-10-03 13:29:47', NULL, 0, NULL, NULL, 1, 0, NULL, NULL, NULL, 0, '1727962202269959'),
(63, 'SANJAY KUMAR MAURYA ', NULL, '9695260940', 'mauryasanjay100@gmail.com', 'male', '1981-07-10', '49d4d70c73cfeef7682565c9cc302297', '2024-10-03 13:34:50', NULL, 0, NULL, NULL, 1, 0, NULL, NULL, NULL, 0, '172796313989744'),
(64, 'ASHOK KUMAR', NULL, '8574553812', 'ashokcpj1987@gmail.com', 'male', '1987-01-03', '3b11ee8e9944aa45e07468e7243c09c3', '2024-10-03 13:35:55', '431176', 0, NULL, NULL, 1, 0, NULL, NULL, NULL, 0, '1728011519900793'),
(65, 'Anand Maurya', NULL, '9506182175', 'mauryaa689@gmail.com', 'male', '1995-03-27', 'd0970714757783e6cf17b26fb8e2298f', '2024-10-03 13:37:48', '428453', 0, NULL, NULL, 1, 0, NULL, NULL, NULL, 0, '1727962905559083'),
(66, 'SUBHASH singh', NULL, '7310208699', '01subham01@gmail.com', 'male', '1996-01-01', '1ecf70d94e60f445d2e326acb4396ae7', '2024-10-03 13:38:37', NULL, 0, NULL, NULL, 1, 0, NULL, NULL, NULL, 0, '1727962738542538'),
(67, 'VIVEK KUMAR', NULL, '7084943167', 'vivek10oct96@gmail.com', 'male', '1996-10-10', '443f79d2f45df53b4eaf535bde8952bd', '2024-10-03 13:39:06', NULL, 0, NULL, NULL, 1, 0, NULL, NULL, NULL, 0, '1727962881274267'),
(68, 'VIVEK KUMAR', NULL, '7800954745', 'vivek10oct896@gmail.com', 'male', '2024-10-10', '443f79d2f45df53b4eaf535bde8952bd', '2024-10-03 13:42:56', NULL, 0, NULL, NULL, 1, 0, NULL, NULL, NULL, 0, '172796298764354'),
(69, 'VINAY KUMAR MISHRA ', NULL, '9415856814', 'vinaymishra12283@gmail.com', 'male', '1983-02-12', 'dd937d44ce192157bec761306483dbf9', '2024-10-03 13:43:24', NULL, 0, NULL, NULL, 1, 0, NULL, NULL, NULL, 0, '1727963112412505'),
(70, 'Durgendra Bahadur Yadav ', NULL, '9415090582', 'durgendrakld@gmail.com', 'male', '1992-07-15', '522a84202680391f3aa211b42060e238', '2024-10-03 13:44:17', NULL, 0, NULL, NULL, 1, 0, NULL, NULL, NULL, 0, '1727963099544553'),
(71, 'Abhishek Kumar ', NULL, '9125984434', 'pankajkumar92368@gmail.com', 'male', '1995-07-06', 'af9e973e9e57a28ed19a29791c619954', '2024-10-03 13:46:14', NULL, 0, NULL, NULL, 1, 0, NULL, NULL, NULL, 0, '1728013437683578'),
(72, 'Sunil Kumar ', NULL, '9453806655', 'sunilyadav6655@gmail.com', 'male', '1997-06-15', '3838004ec070bbfd8ff9c3a76e75fad4', '2024-10-03 14:01:31', NULL, 0, NULL, NULL, 1, 0, NULL, NULL, NULL, 0, '1727964207131677'),
(73, 'Vishva nath soni', NULL, '8960288312', 'vishvanath.sky@gmail.com', 'male', '1990-07-21', '6e3913d47ea420c23ef8dbcd252aa144', '2024-10-03 14:06:09', NULL, 0, NULL, NULL, 1, 0, NULL, NULL, NULL, 0, '1727967955237425'),
(74, 'SUNEEL KUMAR ', NULL, '8127575396', 'smlkumar123@gmail.com', 'male', '1994-07-07', 'dc646273ab1069de04e7c38eb78e9c41', '2024-10-03 14:07:25', NULL, 0, NULL, NULL, 1, 0, NULL, NULL, NULL, 0, '1727964664624113'),
(75, 'Ravi ', NULL, '8182006557', 'ry737760@gmail.com', 'male', '1995-07-01', 'd0970714757783e6cf17b26fb8e2298f', '2024-10-03 14:09:44', NULL, 0, NULL, NULL, 1, 0, NULL, NULL, NULL, 0, NULL),
(76, 'Ajay Kumar Mishra ', NULL, '9335689973', 'ajaykumarmishra316@gmail.com', 'male', '1987-08-10', '83d8b0b00dac5307ab256bcb8baf1853', '2024-10-03 14:16:27', '881616', 0, NULL, NULL, 1, 0, NULL, NULL, NULL, 0, NULL),
(77, 'Arvind Kumar ', NULL, '6393108110', 'thearvindkumar0007@gmail.com', 'male', '1986-03-10', 'd0970714757783e6cf17b26fb8e2298f', '2024-10-03 14:23:04', NULL, 0, NULL, NULL, 1, 0, NULL, NULL, NULL, 0, NULL),
(78, 'yogesh kumat', NULL, '8218473443', 'yogeshtyagi270@gmail.com', 'male', '1979-03-01', 'a607d6f54c10fb241471e47b5455ece4', '2024-10-03 14:32:03', NULL, 0, NULL, NULL, 1, 0, NULL, NULL, NULL, 0, '172803663736908'),
(79, 'ATIN KUMAR', NULL, '7379511580', 'atinraj2015@gmail.com', 'male', '1991-04-03', 'd4400cb3d526cbf2e626e9f6a36dfbc8', '2024-10-03 14:38:49', NULL, 0, NULL, NULL, 1, 0, NULL, NULL, NULL, 0, '172796637069727'),
(80, 'SWATI SINGH RATHORE', NULL, '9473608485', 'urmirathore05@gmail.com', 'female', '2001-10-03', '827ccb0eea8a706c4c34a16891f84e7b', '2024-10-03 14:43:49', NULL, 0, NULL, NULL, 1, 0, NULL, NULL, NULL, 0, NULL),
(81, 'Arvind Dwivedi', NULL, '9541408736', 'arvinddwivedi129@gmail.com', 'male', '1981-09-02', '039ef0361f7c64b12bb9aa6c62ff4410', '2024-10-03 14:45:53', NULL, 0, NULL, NULL, 1, 0, NULL, NULL, NULL, 0, '1727967003254522'),
(82, 'SHADAB ALAM', NULL, '9450579705', 'shadabalam.84@gmail.com', 'male', '1984-09-15', 'ffaccd52bc553649f6cabaa6b2dfe466', '2024-10-03 14:46:50', NULL, 0, NULL, NULL, 1, 0, NULL, NULL, NULL, 0, '1727966829720904'),
(83, 'DURGESH YADAV ', NULL, '9415036461', 'ydurgesh79@gmail.com', 'male', '1990-12-08', '412fa0873b92e62e728bded90b5c86fa', '2024-10-03 14:47:11', NULL, 0, NULL, NULL, 1, 0, NULL, NULL, NULL, 0, '172796685031906'),
(84, 'ANAND KUMAR SINGH', NULL, '9307820978', 'anandsingh20081989@gmail.com', 'male', '1989-08-20', 'a3fc64a5263f8022c52282807f7ac83d', '2024-10-03 14:55:11', NULL, 0, NULL, NULL, 1, 0, NULL, NULL, NULL, 0, '1727967714642433'),
(85, 'Ashutosh Yadav', NULL, '8329826654', 'ay731015sh@gmail.com', 'male', '1995-02-01', 'fad1c9459b9bf6a851072745add65dd9', '2024-10-03 15:13:44', '115792', 0, NULL, NULL, 1, 0, NULL, NULL, NULL, 0, NULL),
(86, 'shivendra kumar', NULL, '8840332790', 'shivendrakumar2111@gmail.com', 'male', '1984-05-01', 'e10adc3949ba59abbe56e057f20f883e', '2024-10-03 15:20:18', NULL, 0, NULL, NULL, 1, 0, NULL, NULL, NULL, 0, '1727969613973675'),
(87, 'Vishal verma ', NULL, '9580097771', 'vishalv9580@gmail.com', 'male', '2002-08-05', 'e230be67abb46d0dee15e30d18db2b9f', '2024-10-03 15:21:30', NULL, 0, NULL, NULL, 1, 0, NULL, NULL, NULL, 0, '1727969178728627'),
(88, 'JANMEJAY SINGH', NULL, '8874539615', 'janmejaysing992@gmail.com', 'male', '1992-08-12', '4af90ab6d9b3ae17bfc899e889409308', '2024-10-03 15:27:43', NULL, 0, NULL, NULL, 1, 0, NULL, NULL, NULL, 0, '1727969464160205'),
(89, 'Vishal maurya', NULL, '7080933427', 'vishalmaurya961683@gmail.com', 'male', '1998-07-21', 'cddd1e78d63a8168d3727704a1523df1', '2024-10-03 15:40:20', NULL, 0, NULL, NULL, 1, 0, NULL, NULL, NULL, 0, '1728011944210528'),
(90, 'Shubham Yadav', NULL, '9897360677', 'shub.kumar2409@gmail.com', 'male', '1996-09-24', 'cf7cb549348ac6c659a96cd28fa1f714', '2024-10-03 15:42:59', NULL, 0, NULL, NULL, 1, 0, NULL, NULL, NULL, 0, '1728022671869487'),
(91, 'VIBHAV KUMAR SINGH', NULL, '6387276478', 'singh.vk2385@gmail.com', 'male', '1986-12-31', 'd0970714757783e6cf17b26fb8e2298f', '2024-10-03 15:50:11', NULL, 0, NULL, NULL, 1, 0, NULL, NULL, NULL, 0, '1727970624147665'),
(92, 'SUBASH KUMAR PAL', NULL, '9918316409', 'subashkumarpal16691@gmail.com', 'male', '1991-10-16', 'd0970714757783e6cf17b26fb8e2298f', '2024-10-03 15:50:28', NULL, 0, NULL, NULL, 1, 0, NULL, NULL, NULL, 0, '1728029578681409'),
(93, 'Ranvijay Mishra', NULL, '9599454267', 'mishraranvijay5@gmail.com', 'male', '1991-01-05', '2a091c886c0f7582f7df1725d8b69718', '2024-10-03 15:52:48', NULL, 0, NULL, NULL, 1, 0, NULL, NULL, NULL, 0, '172803971847455'),
(94, 'Sunaina', NULL, '9999246216', 'jumboodeepadventures@gmail.com', 'female', '1976-09-18', '891f9f8e9404c2cd7fab5febd61953ee', '2024-10-03 16:05:52', NULL, 0, NULL, NULL, 1, 0, NULL, NULL, NULL, 0, '1728026723843622'),
(95, 'Neha Yadav', NULL, '8178526121', 'ny48910@gmail.com', 'female', '2024-10-03', '74d36c0725346b3b3d0d30cbe0edd219', '2024-10-03 16:06:25', '752590', 0, NULL, NULL, 1, 0, NULL, NULL, NULL, 0, '1727972170647512'),
(96, 'mudrika prasad', NULL, '9005813413', 'mudrika.com@gmail.com', 'male', '2024-10-07', 'd0970714757783e6cf17b26fb8e2298f', '2024-10-03 16:16:23', NULL, 0, NULL, NULL, 1, 0, NULL, NULL, NULL, 0, '1728033423959293'),
(97, 'Vipin kumar', NULL, '9837645346', 'vipinkumarsavita2@gail.com', 'male', '1991-02-07', 'f43be021625da36b8ea5145aa9ee955d', '2024-10-03 16:33:44', NULL, 0, NULL, NULL, 1, 0, NULL, NULL, NULL, 0, '1727973240637140'),
(98, 'à¤¶à¥à¤°à¥€à¤°à¤¾à¤®à¤œà¥€', NULL, '7800281513', 'pv567659@gmail.com', 'male', '2024-09-24', 'b72df3451eaa254b4fe5f63af7a4ee57', '2024-10-03 16:52:17', NULL, 0, NULL, NULL, 1, 0, NULL, NULL, NULL, 0, '1728033191171258'),
(99, 'KISHAN KUMAR SWARNKAR', NULL, '9120394795', 'swarnkarrishabh851@gmail.com', 'male', '1994-07-12', '652c5a089bb9375398bd5f81560b3cf3', '2024-10-03 17:27:07', NULL, 0, NULL, NULL, 1, 0, NULL, NULL, NULL, 0, '1727976459504593'),
(100, 'Sushil Kumar Singh ', NULL, '9450176950', 'Sushil.singh578@gmail.com', 'male', '1983-05-20', 'd0970714757783e6cf17b26fb8e2298f', '2024-10-03 18:17:07', '791302', 0, NULL, NULL, 1, 0, NULL, NULL, NULL, 0, NULL),
(101, 'BANKAT RAMAN ', NULL, '6393277034', 'bankat855@gmail.com', 'male', '1993-07-01', 'd0970714757783e6cf17b26fb8e2298f', '2024-10-03 23:11:22', NULL, 0, NULL, NULL, 1, 0, NULL, NULL, NULL, 0, '1728012048555549'),
(102, 'krishna yadav', NULL, '6388637070', 'krishnamcmt2014@gmail.com', 'male', '1994-04-20', '75474389961a9a3b14b880b105c3d6bf', '2024-10-04 01:48:44', NULL, 0, NULL, NULL, 1, 0, NULL, NULL, NULL, 0, '1728006568115722'),
(103, 'AVINASH SINGH', NULL, '9598969057', 'savinash022@gmail.com', 'male', '1994-03-05', 'f241ea94f0f740ef26ea57d27d6f0bb8', '2024-10-04 02:40:46', NULL, 0, NULL, NULL, 1, 0, NULL, NULL, NULL, 0, '1728009756318637'),
(104, 'Pawan Kumar Bhartiy', NULL, '8052646937', 'pawankumarbhartiy75@gmail.com', 'male', '1996-03-16', '80ca891565e6a410f049a99f87fbacb2', '2024-10-04 02:49:07', NULL, 0, NULL, NULL, 1, 0, NULL, NULL, NULL, 0, '1728039370437180'),
(105, 'SUNDARAM ', NULL, '9454119500', 'sundaramtiwari007@gmail.com', 'male', '2000-01-01', '8d92ba36e61cf5701deab23c421e6595', '2024-10-04 03:12:37', NULL, 0, NULL, NULL, 1, 0, NULL, NULL, NULL, 0, '1728011587406617'),
(106, 'Ashutosh Yadav', NULL, '7310151819', 'ay731015sh1819@gmail.com', 'male', '1995-02-01', '24eda2a727ba1ef1304a6aaf067866bb', '2024-10-04 03:14:28', NULL, 0, NULL, NULL, 1, 0, NULL, NULL, NULL, 0, '1728012739493777'),
(107, 'ATUL KUMAR', NULL, '8172864375', 'yadav.atulkumar995@gmail.com', 'male', '1995-01-07', '1a100d2c0dab19c4430e7d73762b3423', '2024-10-04 03:14:57', NULL, 0, NULL, NULL, 1, 0, NULL, NULL, NULL, 0, '1728011709651223'),
(108, 'Pramod Kumar ', NULL, '8887608638', 'pramodkumargupta765@gmail.com', 'male', '2001-07-18', 'f036cec99039cddd6c9cf4004891501d', '2024-10-04 03:24:16', NULL, 0, NULL, NULL, 1, 0, NULL, NULL, NULL, 0, '1728012509815049'),
(109, 'Anuj Kumar', NULL, '7268902621', 'hthanuj8299@gmail.com', 'male', '1997-03-05', '7626c29fe2570bf1f0d1949801059598', '2024-10-04 04:45:58', NULL, 0, NULL, NULL, 1, 0, NULL, NULL, NULL, 0, '1728017219289717'),
(110, 'Eisha Srivastava', NULL, '8960167181', 'eisha7181@gmail.com', 'female', '2002-12-02', 'a2194d747896c45c292e00b86b5e682f', '2024-10-04 04:56:33', NULL, 0, NULL, NULL, 1, 0, NULL, NULL, NULL, 0, '1728017831323079'),
(111, 'ishtiyak ahmad', NULL, '7275326639', 'ahmadishtiyak307@gmail.com', 'male', '1994-12-23', 'a2a1cbcb7c4036059f5f79b0ae660daf', '2024-10-04 05:49:33', NULL, 0, NULL, NULL, 1, 0, NULL, NULL, NULL, 0, '1728024111237479'),
(112, 'Sarita Kumari ', NULL, '7307205370', 'saritavns023@gmail.com', 'female', '1993-12-06', 'e10adc3949ba59abbe56e057f20f883e', '2024-10-04 08:15:43', NULL, 0, NULL, NULL, 1, 0, NULL, NULL, NULL, 0, '1728029759586846'),
(113, 'Amit Kumar Shukla', NULL, '8975423757', 'amit8000355059@gmail.com', 'male', '1986-05-04', '6edec99126ecb7c200485d53114e6248', '2024-10-04 08:16:25', NULL, 0, NULL, NULL, 1, 0, NULL, NULL, NULL, 0, '1728033322274726'),
(114, 'BHARAT PAL', NULL, '9794804075', 'bharatpal966@gmail.com', 'male', '1995-10-01', 'efc9f268aa470f157a0ef58e6bb8bcb6', '2024-10-04 11:07:36', NULL, 0, NULL, NULL, 1, 0, NULL, NULL, NULL, 0, '172804007030839'),
(115, 'ATUL YADAV ', NULL, '7080721748', 'atuly7080@gmail.com', 'male', '1995-07-10', '685e4037467f13b5766c40fbeddff444', '2024-10-04 11:25:00', NULL, 0, NULL, NULL, 1, 0, NULL, NULL, NULL, 0, '1728041299549651');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_website_setting`
--

CREATE TABLE `tbl_website_setting` (
  `id` int(11) NOT NULL,
  `website_title` text DEFAULT NULL,
  `favicon` text DEFAULT NULL,
  `dark_logo` text DEFAULT NULL,
  `white_logo` text DEFAULT NULL,
  `contact` text DEFAULT NULL,
  `email` text DEFAULT NULL,
  `address` text DEFAULT NULL,
  `map_iframe` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_website_setting`
--

INSERT INTO `tbl_website_setting` (`id`, `website_title`, `favicon`, `dark_logo`, `white_logo`, `contact`, `email`, `address`, `map_iframe`) VALUES
(1, 'G. N. Singh IAS Academy', '1727229000_667749.jpg', '1727229000_8550080.jpg', '1727229000_8472798.jpg', '6546163254', 'gnsinghacademy@gmail.com', 'Your address', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3602.6664024499073!2d81.85939337445059!3d25.449414221440517!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x399acbada2a86685%3A0xa11c4b943331adfa!2sVedsar%20India%20Pvt.%20Ltd.%20%7C%20Software%20%26%20Website%20Development%20Company!5e0!3m2!1sen!2sin!4v1722514241681!5m2!1sen!2sin');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_youtube`
--

CREATE TABLE `tbl_youtube` (
  `id` int(11) NOT NULL,
  `class_id` int(11) NOT NULL DEFAULT 0,
  `title` text DEFAULT NULL,
  `video` text DEFAULT NULL,
  `thumb` varchar(140) DEFAULT NULL,
  `video_id` varchar(100) DEFAULT NULL,
  `status` int(1) NOT NULL DEFAULT 1,
  `start_date` date DEFAULT NULL,
  `start_time` varchar(255) DEFAULT NULL,
  `end_time` varchar(255) DEFAULT NULL,
  `create_at` datetime NOT NULL DEFAULT current_timestamp(),
  `create_by` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_youtube`
--

INSERT INTO `tbl_youtube` (`id`, `class_id`, `title`, `video`, `thumb`, `video_id`, `status`, `start_date`, `start_time`, `end_time`, `create_at`, `create_by`) VALUES
(1, 1, 'test title', 'https://www.youtube.com/embed/6idfm6riEsk?si=hyNbbQGKlhjWdqcw', 'https://img.youtube.com/vi/6idfm6riEsk/hqdefault.jpg', '6idfm6riEsk', 1, '2024-09-25', '14:53', '16:53', '2024-09-25 09:23:50', 0),
(2, 2, 'Test title', 'https://www.youtube.com/embed/GXQjgebZ8xA?si=23cCFVkykfbg0Ok1', 'https://img.youtube.com/vi/GXQjgebZ8xA/hqdefault.jpg', 'GXQjgebZ8xA', 1, '2024-09-25', '15:36', '17:36', '2024-09-25 10:06:48', 0);

-- --------------------------------------------------------

--
-- Table structure for table `zarud_batch`
--

CREATE TABLE `zarud_batch` (
  `id` int(11) NOT NULL,
  `userid` int(11) NOT NULL DEFAULT 0,
  `classid` int(11) NOT NULL DEFAULT 0,
  `status` int(1) NOT NULL DEFAULT 0,
  `purchase_price` int(11) DEFAULT NULL,
  `enrolledDate` datetime DEFAULT current_timestamp(),
  `validtill` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `zarud_batch`
--

INSERT INTO `zarud_batch` (`id`, `userid`, `classid`, `status`, `purchase_price`, `enrolledDate`, `validtill`) VALUES
(1, 1, 2, 0, NULL, '2024-09-25 14:51:53', NULL),
(2, 3, 2, 0, NULL, '2024-09-25 15:30:26', NULL),
(3, 4, 3, 0, NULL, '2024-09-26 17:15:37', NULL),
(4, 1, 1, 0, NULL, '2024-10-05 11:58:22', '2024-10-14');

-- --------------------------------------------------------

--
-- Table structure for table `zarud_membership_purchase`
--

CREATE TABLE `zarud_membership_purchase` (
  `id` int(11) NOT NULL,
  `userid` int(11) NOT NULL DEFAULT 0,
  `amount` float NOT NULL DEFAULT 0,
  `txnid` varchar(555) DEFAULT NULL,
  `status` int(1) NOT NULL DEFAULT 0,
  `file` text DEFAULT NULL,
  `duration` int(5) NOT NULL DEFAULT 0,
  `requestDate` date NOT NULL DEFAULT current_timestamp(),
  `approvedDate` date DEFAULT NULL,
  `remark` varchar(555) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `zarud_membership_purchase`
--

INSERT INTO `zarud_membership_purchase` (`id`, `userid`, `amount`, `txnid`, `status`, `file`, `duration`, `requestDate`, `approvedDate`, `remark`) VALUES
(1, 1, 1999, 'abc', 1, '2024092514503266f3d5e084bff4.76197217.jpg', 12, '2024-09-25', NULL, 'Approvedsdf'),
(2, 3, 1999, '4545sdfsfd', 1, '2024092515264066f3de58c85401.15674251.jpg', 12, '2024-09-25', NULL, 'Approved dsf'),
(3, 4, 1999, 'bhghjfgd', 1, '2024092612071766f5011de34078.23608149.jpeg', 12, '2024-09-26', NULL, 'Approvedok'),
(4, 5, 1999, 'sdafadga', 0, '2024092912010066f8f4246f59a9.21793338.jpeg', 12, '2024-09-29', NULL, NULL),
(5, 5, 1999, 'dzfgadga', 0, '2024092912023066f8f47e40afc4.97313521.jpeg', 12, '2024-09-29', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `zarud_plan_history`
--

CREATE TABLE `zarud_plan_history` (
  `id` int(11) NOT NULL,
  `userid` int(11) NOT NULL DEFAULT 0,
  `amount` varchar(255) DEFAULT NULL,
  `duration` varchar(255) DEFAULT NULL,
  `activateDate` date DEFAULT NULL,
  `endDate` date DEFAULT NULL,
  `expireAt` date DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_about`
--
ALTER TABLE `tbl_about`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_appoinment`
--
ALTER TABLE `tbl_appoinment`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_banner`
--
ALTER TABLE `tbl_banner`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_cities`
--
ALTER TABLE `tbl_cities`
  ADD PRIMARY KEY (`id`),
  ADD KEY `state_id` (`state_id`);

--
-- Indexes for table `tbl_class`
--
ALTER TABLE `tbl_class`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_contact`
--
ALTER TABLE `tbl_contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_faq`
--
ALTER TABLE `tbl_faq`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_gallery`
--
ALTER TABLE `tbl_gallery`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_membership`
--
ALTER TABLE `tbl_membership`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_notice`
--
ALTER TABLE `tbl_notice`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_privacy`
--
ALTER TABLE `tbl_privacy`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_purchase`
--
ALTER TABLE `tbl_purchase`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_states`
--
ALTER TABLE `tbl_states`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_trainer`
--
ALTER TABLE `tbl_trainer`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_tutorial`
--
ALTER TABLE `tbl_tutorial`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_users`
--
ALTER TABLE `tbl_users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_website_setting`
--
ALTER TABLE `tbl_website_setting`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_youtube`
--
ALTER TABLE `tbl_youtube`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `zarud_batch`
--
ALTER TABLE `zarud_batch`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `zarud_membership_purchase`
--
ALTER TABLE `zarud_membership_purchase`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `zarud_plan_history`
--
ALTER TABLE `zarud_plan_history`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_about`
--
ALTER TABLE `tbl_about`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `tbl_appoinment`
--
ALTER TABLE `tbl_appoinment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_banner`
--
ALTER TABLE `tbl_banner`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `tbl_cities`
--
ALTER TABLE `tbl_cities`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=630;

--
-- AUTO_INCREMENT for table `tbl_class`
--
ALTER TABLE `tbl_class`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tbl_contact`
--
ALTER TABLE `tbl_contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tbl_faq`
--
ALTER TABLE `tbl_faq`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `tbl_gallery`
--
ALTER TABLE `tbl_gallery`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tbl_membership`
--
ALTER TABLE `tbl_membership`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_notice`
--
ALTER TABLE `tbl_notice`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tbl_privacy`
--
ALTER TABLE `tbl_privacy`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_purchase`
--
ALTER TABLE `tbl_purchase`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_states`
--
ALTER TABLE `tbl_states`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT for table `tbl_trainer`
--
ALTER TABLE `tbl_trainer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tbl_tutorial`
--
ALTER TABLE `tbl_tutorial`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=376;

--
-- AUTO_INCREMENT for table `tbl_users`
--
ALTER TABLE `tbl_users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=116;

--
-- AUTO_INCREMENT for table `tbl_website_setting`
--
ALTER TABLE `tbl_website_setting`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_youtube`
--
ALTER TABLE `tbl_youtube`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `zarud_batch`
--
ALTER TABLE `zarud_batch`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `zarud_membership_purchase`
--
ALTER TABLE `zarud_membership_purchase`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `zarud_plan_history`
--
ALTER TABLE `zarud_plan_history`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
