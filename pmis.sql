-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Feb 12, 2017 at 02:17 PM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 5.5.37

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pmis`
--

-- --------------------------------------------------------

--
-- Table structure for table `children`
--

CREATE TABLE `children` (
  `id` int(1) NOT NULL,
  `employee_id` int(10) NOT NULL,
  `name` varchar(512) NOT NULL,
  `sex` enum('male','female','other') NOT NULL,
  `dob` date NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `children`
--

INSERT INTO `children` (`id`, `employee_id`, `name`, `sex`, `dob`) VALUES
(2, 2, 'ewew', 'male', '2017-01-20');

-- --------------------------------------------------------

--
-- Table structure for table `country`
--

CREATE TABLE `country` (
  `id` int(11) NOT NULL,
  `country` varchar(200) NOT NULL DEFAULT ''
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `country`
--

INSERT INTO `country` (`id`, `country`) VALUES
(1, 'Afghanistan'),
(2, 'Åland Islands'),
(3, 'Albania'),
(4, 'Algeria'),
(5, 'American Samoa'),
(6, 'Andorra'),
(7, 'Angola'),
(8, 'Anguilla'),
(9, 'Antarctica'),
(10, 'Antigua and Barbuda'),
(11, 'Argentina'),
(12, 'Armenia'),
(13, 'Aruba'),
(14, 'Australia'),
(15, 'Austria'),
(16, 'Azerbaijan'),
(17, 'Bahamas'),
(18, 'Bahrain'),
(19, 'Bangladesh'),
(20, 'Barbados'),
(21, 'Belarus'),
(22, 'Belgium'),
(23, 'Belize'),
(24, 'Benin'),
(25, 'Bermuda'),
(26, 'Bhutan'),
(27, 'Bolivia'),
(28, 'Bosnia and Herzegovina'),
(29, 'Botswana'),
(30, 'Bouvet Island'),
(31, 'Brazil'),
(32, 'British Indian Ocean Territory'),
(33, 'Brunei Darussalam'),
(34, 'Bulgaria'),
(35, 'Burkina Faso'),
(36, 'Burundi'),
(37, 'Cambodia'),
(38, 'Cameroon'),
(39, 'Canada'),
(40, 'Cape Verde'),
(41, 'Cayman Islands'),
(42, 'Central African Republic'),
(43, 'Chad'),
(44, 'Chile'),
(45, 'China'),
(46, 'Christmas Island'),
(47, 'Cocos (Keeling) Islands'),
(48, 'Colombia'),
(49, 'Comoros'),
(50, 'Congo'),
(51, 'Congo, The Democratic Republic of the'),
(52, 'Cook Islands'),
(53, 'Costa Rica'),
(54, 'Côte D''Ivoire'),
(55, 'Croatia'),
(56, 'Cuba'),
(57, 'Cyprus'),
(58, 'Czech Republic'),
(59, 'Denmark'),
(60, 'Djibouti'),
(61, 'Dominica'),
(62, 'Dominican Republic'),
(63, 'Ecuador'),
(64, 'Egypt'),
(65, 'El Salvador'),
(66, 'Equatorial Guinea'),
(67, 'Eritrea'),
(68, 'Estonia'),
(69, 'Ethiopia'),
(70, 'Falkland Islands (Malvinas)'),
(71, 'Faroe Islands'),
(72, 'Fiji'),
(73, 'Finland'),
(74, 'France'),
(75, 'French Guiana'),
(76, 'French Polynesia'),
(77, 'French Southern Territories'),
(78, 'Gabon'),
(79, 'Gambia'),
(80, 'Georgia'),
(81, 'Germany'),
(82, 'Ghana'),
(83, 'Gibraltar'),
(84, 'Greece'),
(85, 'Greenland'),
(86, 'Grenada'),
(87, 'Guadeloupe'),
(88, 'Guam'),
(89, 'Guatemala'),
(90, 'Guernsey'),
(91, 'Guinea'),
(92, 'Guinea-Bissau'),
(93, 'Guyana'),
(94, 'Haiti'),
(95, 'Heard Island and McDonald Islands'),
(96, 'Holy See (Vatican City State)'),
(97, 'Honduras'),
(98, 'Hong Kong'),
(99, 'Hungary'),
(100, 'Iceland'),
(101, 'India'),
(102, 'Indonesia'),
(103, 'Iran, Islamic Republic of'),
(104, 'Iraq'),
(105, 'Ireland'),
(106, 'Isle of Man'),
(107, 'Israel'),
(108, 'Italy'),
(109, 'Jamaica'),
(110, 'Japan'),
(111, 'Jersey'),
(112, 'Jordan'),
(113, 'Kazakhstan'),
(114, 'Kenya'),
(115, 'Kiribati'),
(116, 'Korea, Democratic People''s Republic of'),
(117, 'Korea, Republic of'),
(118, 'Kuwait'),
(119, 'Kyrgyzstan'),
(120, 'Lao People''s Democratic Republic'),
(121, 'Latvia'),
(122, 'Lebanon'),
(123, 'Lesotho'),
(124, 'Liberia'),
(125, 'Libyan Arab Jamahiriya'),
(126, 'Liechtenstein'),
(127, 'Lithuania'),
(128, 'Luxembourg'),
(129, 'Macao'),
(130, 'Macedonia, The Former Yugoslav Republic of'),
(131, 'Madagascar'),
(132, 'Malawi'),
(133, 'Malaysia'),
(134, 'Maldives'),
(135, 'Mali'),
(136, 'Malta'),
(137, 'Marshall Islands'),
(138, 'Martinique'),
(139, 'Mauritania'),
(140, 'Mauritius'),
(141, 'Mayotte'),
(142, 'Mexico'),
(143, 'Micronesia, Federated States of'),
(144, 'Moldova, Republic of'),
(145, 'Monaco'),
(146, 'Mongolia'),
(147, 'Montenegro'),
(148, 'Montserrat'),
(149, 'Morocco'),
(150, 'Mozambique'),
(151, 'Myanmar'),
(152, 'Namibia'),
(153, 'Nauru'),
(154, 'Nepal'),
(155, 'Netherlands'),
(156, 'Netherlands Antilles'),
(157, 'New Caledonia'),
(158, 'New Zealand'),
(159, 'Nicaragua'),
(160, 'Niger'),
(161, 'Nigeria'),
(162, 'Niue'),
(163, 'Norfolk Island'),
(164, 'Northern Mariana Islands'),
(165, 'Norway'),
(166, 'Oman'),
(167, 'Pakistan'),
(168, 'Palau'),
(169, 'Palestinian Territory, Occupied'),
(170, 'Panama'),
(171, 'Papua New Guinea'),
(172, 'Paraguay'),
(173, 'Peru'),
(174, 'Philippines'),
(175, 'Pitcairn'),
(176, 'Poland'),
(177, 'Portugal'),
(178, 'Puerto Rico'),
(179, 'Qatar'),
(180, 'Reunion'),
(181, 'Romania'),
(182, 'Russian Federation'),
(183, 'Rwanda'),
(184, 'Saint Barthélemy'),
(185, 'Saint Helena'),
(186, 'Saint Kitts and Nevis'),
(187, 'Saint Lucia'),
(188, 'Saint Martin'),
(189, 'Saint Pierre and Miquelon'),
(190, 'Saint Vincent and the Grenadines'),
(191, 'Samoa'),
(192, 'San Marino'),
(193, 'Sao Tome and Principe'),
(194, 'Saudi Arabia'),
(195, 'Senegal'),
(196, 'Serbia'),
(197, 'Seychelles'),
(198, 'Sierra Leone'),
(199, 'Singapore'),
(200, 'Slovakia'),
(201, 'Slovenia'),
(202, 'Solomon Islands'),
(203, 'Somalia'),
(204, 'South Africa'),
(205, 'South Georgia and the South Sandwich Islands'),
(206, 'Spain'),
(207, 'Sri Lanka'),
(208, 'Sudan'),
(209, 'Suriname'),
(210, 'Svalbard and Jan Mayen'),
(211, 'Swaziland'),
(212, 'Sweden'),
(213, 'Switzerland'),
(214, 'Syrian Arab Republic'),
(215, 'Taiwan, Province Of China'),
(216, 'Tajikistan'),
(217, 'Tanzania, United Republic of'),
(218, 'Thailand'),
(219, 'Timor-Leste'),
(220, 'Togo'),
(221, 'Tokelau'),
(222, 'Tonga'),
(223, 'Trinidad and Tobago'),
(224, 'Tunisia'),
(225, 'Turkey'),
(226, 'Turkmenistan'),
(227, 'Turks and Caicos Islands'),
(228, 'Tuvalu'),
(229, 'Uganda'),
(230, 'Ukraine'),
(231, 'United Arab Emirates'),
(232, 'United Kingdom'),
(233, 'United States'),
(234, 'United States Minor Outlying Islands'),
(235, 'Uruguay'),
(236, 'Uzbekistan'),
(237, 'Vanuatu'),
(238, 'Venezuela'),
(239, 'Viet Nam'),
(240, 'Virgin Islands, British'),
(241, 'Virgin Islands, U.S.'),
(242, 'Wallis And Futuna'),
(243, 'Western Sahara'),
(244, 'Yemen'),
(245, 'Zambia'),
(246, 'Zimbabwe');

-- --------------------------------------------------------

--
-- Table structure for table `disciplinary_action`
--

CREATE TABLE `disciplinary_action` (
  `id` int(10) NOT NULL,
  `employee_id` int(10) NOT NULL,
  `nature_offence` varchar(512) NOT NULL,
  `punishment` varchar(512) NOT NULL,
  `date` date NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `disciplinary_action`
--

INSERT INTO `disciplinary_action` (`id`, `employee_id`, `nature_offence`, `punishment`, `date`) VALUES
(5, 2, 'dfdfd', 'fdfdfdf', '2017-01-19');

-- --------------------------------------------------------

--
-- Table structure for table `district`
--

CREATE TABLE `district` (
  `id` int(10) NOT NULL,
  `name` varchar(127) NOT NULL,
  `status` enum('active','inactive') NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `district`
--

INSERT INTO `district` (`id`, `name`, `status`) VALUES
(1, 'Dhaka', 'active'),
(2, 'Rajshahi', 'active'),
(3, 'Gazipur', 'active'),
(4, 'Narsingdi', 'active'),
(5, 'Faridpur', 'active'),
(6, 'Munshiganj', 'active'),
(7, 'Manikganj', 'active'),
(8, 'Mymensingh', 'active'),
(9, 'Narayanganj ', 'active'),
(10, 'Tangail', 'active'),
(11, ' Bandarban', 'active'),
(12, ' Brahmanbaria', 'active'),
(13, 'Chandpur', 'active'),
(14, 'Chittagong', 'active'),
(15, 'Comilla', 'active'),
(16, 'Cox''s Bazar', 'active'),
(17, 'Feni', 'active'),
(18, 'Khagrachari', 'active'),
(19, 'Lakshmipur', 'active'),
(20, 'Noakhali', 'active'),
(21, 'Rangamati', 'active'),
(22, 'Barguna', 'active'),
(23, 'Barisal', 'active'),
(24, 'Bhola ', 'active'),
(25, 'Jhalokati', 'active'),
(26, ' Patuakhali', 'active'),
(27, 'Pirojpur', 'active'),
(28, 'Bogra', 'active'),
(29, 'Joypurhat', 'active'),
(30, 'Naogaon', 'active'),
(31, 'Natore', 'active'),
(32, 'Nawabganj', 'active'),
(33, 'Pabna', 'active'),
(35, 'Sirajganj', 'active'),
(36, 'Dinajpur', 'active'),
(37, 'Kurigram', 'active'),
(38, 'Lalmonirhat', 'active'),
(39, 'Nilphamari', 'active'),
(40, 'Panchagarh', 'active'),
(41, 'Rangpur', 'active'),
(42, 'Thakurgaon', 'active'),
(43, 'Habiganj', 'active'),
(44, 'Moulvibazar', 'active'),
(45, 'Sunamganj', 'active'),
(46, 'Sylhet', 'active'),
(47, 'Bagerhat', 'active'),
(48, 'Chuadanga', 'active'),
(49, 'Jessore', 'active'),
(50, 'Jhenaidah', 'active'),
(51, 'Khulna', 'active'),
(52, 'Kushtia', 'active'),
(53, 'Magura', 'active'),
(54, 'Meherpur', 'active'),
(55, 'Narail', 'active'),
(56, 'Satkhira', 'active'),
(59, 'Jamalpur', 'active'),
(60, 'Shariatpur', 'active'),
(61, 'Madaripur', 'active'),
(62, 'Gopalganj', 'active'),
(63, 'Rajbari', 'active'),
(64, 'Gaibandha', 'active'),
(65, 'Kishoreganj', 'active'),
(66, 'Chapai Nawabganj ', 'active'),
(67, 'Sherpur', 'active'),
(68, 'Chittagong Metro', 'active'),
(69, 'Others', 'active'),
(70, 'Netrokona', 'active');

-- --------------------------------------------------------

--
-- Table structure for table `education`
--

CREATE TABLE `education` (
  `id` int(25) NOT NULL,
  `employee_id` int(10) NOT NULL,
  `name_institution` varchar(255) NOT NULL,
  `principals_subject` varchar(255) NOT NULL,
  `degree` varchar(255) NOT NULL,
  `year` varchar(20) NOT NULL,
  `division` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `education`
--

INSERT INTO `education` (`id`, `employee_id`, `name_institution`, `principals_subject`, `degree`, `year`, `division`) VALUES
(3, 1, 'fsdf', '', '', '', ''),
(2, 2, 'trtertet', 'erteter', 'terter', 'terterter', 'tertet');

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

CREATE TABLE `employee` (
  `id` int(10) NOT NULL,
  `users_id` int(10) NOT NULL,
  `employee_name` varchar(127) NOT NULL,
  `fathers_name` varchar(127) NOT NULL,
  `mothers_name` varchar(127) NOT NULL,
  `home_district` varchar(127) NOT NULL,
  `dob` date NOT NULL,
  `sex` enum('male','female','other') NOT NULL,
  `is_freedomfighter` enum('Yes','No') NOT NULL,
  `mobile_phone` varchar(512) NOT NULL,
  `email` varchar(127) NOT NULL,
  `country_id` int(10) NOT NULL,
  `nationalid` varchar(127) NOT NULL,
  `blood_group` varchar(127) NOT NULL,
  `marital_status` varchar(127) NOT NULL,
  `name_spouse` varchar(127) NOT NULL,
  `spouse_occupation` varchar(127) NOT NULL,
  `spouse_district` varchar(127) NOT NULL,
  `religion` varchar(512) NOT NULL,
  `date_joining` date NOT NULL,
  `entry_designation` varchar(255) NOT NULL,
  `entry_scale` varchar(512) NOT NULL,
  `file_image` varchar(512) NOT NULL,
  `archive_status` enum('No','Yes') NOT NULL,
  `status` enum('active','inactive') NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `employee`
--

INSERT INTO `employee` (`id`, `users_id`, `employee_name`, `fathers_name`, `mothers_name`, `home_district`, `dob`, `sex`, `is_freedomfighter`, `mobile_phone`, `email`, `country_id`, `nationalid`, `blood_group`, `marital_status`, `name_spouse`, `spouse_occupation`, `spouse_district`, `religion`, `date_joining`, `entry_designation`, `entry_scale`, `file_image`, `archive_status`, `status`) VALUES
(1, 9, 'aqq', 'qqq', 'qq', 'qq', '2016-07-31', 'female', 'No', '4234234', '23424324', 243, '43424', '423432', '43432', '4343', '4343432', '4324234', '434', '0000-00-00', '434324', '24324324', 'employee_images/1_image_(19).jpg', 'No', 'active'),
(2, 9, 'hhfgh', 'fhfhfg', 'hfghfgh', 'fghfghfghfgh', '2016-07-31', 'male', 'No', 'ghfg', 'hgfhgfh', 232, 'hgf', 'hfghfg', 'hfghfgh', 'ghfgh', 'hgh', 'fghfghfgh', 'hghfgh', '2016-07-31', '534534', '45435', 'employee_images/2_3.png', 'No', 'active');

-- --------------------------------------------------------

--
-- Table structure for table `foreign_training`
--

CREATE TABLE `foreign_training` (
  `id` int(10) NOT NULL,
  `employee_id` int(10) NOT NULL,
  `title_training` varchar(512) NOT NULL,
  `institution` varchar(512) NOT NULL,
  `from_` date NOT NULL,
  `to_` date NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `foreign_training`
--

INSERT INTO `foreign_training` (`id`, `employee_id`, `title_training`, `institution`, `from_`, `to_`) VALUES
(1, 2, 'ff', 'dfdfd', '2016-07-31', '2016-07-24'),
(2, 2, 'gfgf', 'gfgfg', '2016-07-31', '2016-07-31');

-- --------------------------------------------------------

--
-- Table structure for table `languages`
--

CREATE TABLE `languages` (
  `id` int(10) NOT NULL,
  `employee_id` int(10) NOT NULL,
  `languages` varchar(127) NOT NULL,
  `read_` varchar(127) NOT NULL,
  `write_` varchar(127) NOT NULL,
  `speak` varchar(127) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `languages`
--

INSERT INTO `languages` (`id`, `employee_id`, `languages`, `read_`, `write_`, `speak`) VALUES
(2, 2, 'w', 'eertg', '55', '545');

-- --------------------------------------------------------

--
-- Table structure for table `local_training`
--

CREATE TABLE `local_training` (
  `id` int(10) NOT NULL,
  `employee_id` int(10) NOT NULL,
  `title_training` varchar(512) NOT NULL,
  `institition` varchar(512) NOT NULL,
  `from_` date NOT NULL,
  `to_` date NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `local_training`
--

INSERT INTO `local_training` (`id`, `employee_id`, `title_training`, `institition`, `from_`, `to_`) VALUES
(1, 2, '5454', '', '0000-00-00', '2016-10-02'),
(2, 2, '5454', '', '0000-00-00', '0000-00-00');

-- --------------------------------------------------------

--
-- Table structure for table `logo`
--

CREATE TABLE `logo` (
  `id` int(10) NOT NULL,
  `file_logo` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `logo`
--

INSERT INTO `logo` (`id`, `file_logo`) VALUES
(10, 'images/logo.png');

-- --------------------------------------------------------

--
-- Table structure for table `parmanent_address`
--

CREATE TABLE `parmanent_address` (
  `id` int(10) NOT NULL,
  `employee_id` int(10) NOT NULL,
  `road_village` varchar(512) NOT NULL,
  `postoffice` varchar(512) NOT NULL,
  `post_code` varchar(127) NOT NULL,
  `police_station_thana` varchar(127) NOT NULL,
  `phone_mobile` varchar(127) NOT NULL,
  `district_id` int(10) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `parmanent_address`
--

INSERT INTO `parmanent_address` (`id`, `employee_id`, `road_village`, `postoffice`, `post_code`, `police_station_thana`, `phone_mobile`, `district_id`) VALUES
(2, 2, '', '', '', '', '', 53),
(3, 2, 'Road Village	', 'Postoffice', 'Post Code	', 'Police Station Thana	', 'Phone Mobile	', 54);

-- --------------------------------------------------------

--
-- Table structure for table `present_address`
--

CREATE TABLE `present_address` (
  `id` int(10) NOT NULL DEFAULT '0',
  `employee_id` int(10) NOT NULL,
  `road_village` varchar(512) NOT NULL,
  `House_no` varchar(127) NOT NULL,
  `Flat_no` varchar(127) NOT NULL,
  `police_station_thana` varchar(127) NOT NULL,
  `district` varchar(127) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `present_address`
--

INSERT INTO `present_address` (`id`, `employee_id`, `road_village`, `House_no`, `Flat_no`, `police_station_thana`, `district`) VALUES
(0, 2, 'Road Village	', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `promotions`
--

CREATE TABLE `promotions` (
  `id` int(10) NOT NULL,
  `employee_id` int(10) NOT NULL,
  `date_promotion` date NOT NULL,
  `designation` varchar(127) NOT NULL,
  `pay_scale` varchar(127) NOT NULL,
  `nature_promotion` varchar(127) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `promotions`
--

INSERT INTO `promotions` (`id`, `employee_id`, `date_promotion`, `designation`, `pay_scale`, `nature_promotion`) VALUES
(1, 2, '2016-07-31', '', '', ''),
(2, 2, '0000-00-00', '', 'sfsdf', '');

-- --------------------------------------------------------

--
-- Table structure for table `rest_of_recreation`
--

CREATE TABLE `rest_of_recreation` (
  `id` int(10) NOT NULL,
  `employee_id` int(10) NOT NULL,
  `from_date` date NOT NULL,
  `to_date` date NOT NULL,
  `coming_date` date NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `rest_of_recreation`
--

INSERT INTO `rest_of_recreation` (`id`, `employee_id`, `from_date`, `to_date`, `coming_date`) VALUES
(1, 2, '2017-01-19', '2017-01-19', '2017-01-23'),
(2, 2, '2017-01-18', '2017-01-20', '2017-01-27');

-- --------------------------------------------------------

--
-- Table structure for table `retirement_year`
--

CREATE TABLE `retirement_year` (
  `id` int(10) NOT NULL,
  `employee_id` int(10) NOT NULL,
  `year` varchar(20) NOT NULL,
  `date` date NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `retirement_year`
--

INSERT INTO `retirement_year` (`id`, `employee_id`, `year`, `date`) VALUES
(3, 3, '2030', '2030-01-01'),
(2, 2, '33', '2017-01-11'),
(4, 4, '1970', '1970-01-01'),
(5, 5, '1970', '1970-01-01'),
(6, 6, '1970', '1970-01-01'),
(7, 7, '1970', '1970-01-01'),
(8, 8, '1970', '1970-01-01');

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` int(10) NOT NULL,
  `name` varchar(1227) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `name`) VALUES
(1, 'add'),
(2, 'edit'),
(3, 'delete'),
(4, 'LeftMenu-Logo'),
(5, 'LeftMenu-Country'),
(6, 'LeftMenu-District'),
(7, 'LeftMenu-Users'),
(8, 'LeftMenu-Roles'),
(9, 'LeftMenu-Employee'),
(11, 'archive'),
(12, 'live'),
(13, 'LeftMenu-Archive');

-- --------------------------------------------------------

--
-- Table structure for table `service_history`
--

CREATE TABLE `service_history` (
  `id` int(10) NOT NULL,
  `employee_id` int(10) NOT NULL,
  `designation` varchar(127) NOT NULL,
  `office_name` varchar(127) NOT NULL,
  `section` varchar(127) NOT NULL,
  `from_date` date NOT NULL,
  `to_date` date NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `service_history`
--

INSERT INTO `service_history` (`id`, `employee_id`, `designation`, `office_name`, `section`, `from_date`, `to_date`) VALUES
(1, 2, '434', '34343', '3434', '2017-01-19', '2017-01-19'),
(6, 2, 'fdfdf', 'dfdfdf', '', '2017-01-19', '0000-00-00'),
(5, 2, '33', '33', '33', '2017-01-19', '2017-01-19');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) NOT NULL,
  `email` varchar(127) NOT NULL,
  `password` varchar(127) NOT NULL,
  `title` varchar(127) NOT NULL,
  `first_name` varchar(127) NOT NULL,
  `last_name` varchar(127) NOT NULL,
  `company` varchar(127) NOT NULL,
  `address` varchar(127) NOT NULL,
  `city` varchar(127) NOT NULL,
  `state` varchar(127) NOT NULL,
  `zip` varchar(127) NOT NULL,
  `country_id` varchar(127) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  `type` enum('super','staff','client','visitor') NOT NULL,
  `roles` varchar(256) NOT NULL,
  `status` enum('active','inactive') NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `email`, `password`, `title`, `first_name`, `last_name`, `company`, `address`, `city`, `state`, `zip`, `country_id`, `created_at`, `updated_at`, `type`, `roles`, `status`) VALUES
(9, 'xx', 'xx', 'Mr.', 'Anil', 'kumar', '', '', '', '', '', '231', '2011-10-19 00:00:00', '2011-10-19 00:00:00', 'super', 'add, archive, delete, edit, LeftMenu-Archive, LeftMenu-Country, LeftMenu-District, LeftMenu-Employee, LeftMenu-Logo, LeftMenu-Roles, LeftMenu-Users, live', 'active');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `children`
--
ALTER TABLE `children`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `country`
--
ALTER TABLE `country`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `disciplinary_action`
--
ALTER TABLE `disciplinary_action`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `district`
--
ALTER TABLE `district`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `education`
--
ALTER TABLE `education`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `employee`
--
ALTER TABLE `employee`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `foreign_training`
--
ALTER TABLE `foreign_training`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id` (`id`);

--
-- Indexes for table `languages`
--
ALTER TABLE `languages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `local_training`
--
ALTER TABLE `local_training`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `logo`
--
ALTER TABLE `logo`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `parmanent_address`
--
ALTER TABLE `parmanent_address`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `present_address`
--
ALTER TABLE `present_address`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `promotions`
--
ALTER TABLE `promotions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `rest_of_recreation`
--
ALTER TABLE `rest_of_recreation`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `retirement_year`
--
ALTER TABLE `retirement_year`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `service_history`
--
ALTER TABLE `service_history`
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
-- AUTO_INCREMENT for table `children`
--
ALTER TABLE `children`
  MODIFY `id` int(1) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `country`
--
ALTER TABLE `country`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=247;
--
-- AUTO_INCREMENT for table `disciplinary_action`
--
ALTER TABLE `disciplinary_action`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `district`
--
ALTER TABLE `district`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=71;
--
-- AUTO_INCREMENT for table `education`
--
ALTER TABLE `education`
  MODIFY `id` int(25) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `employee`
--
ALTER TABLE `employee`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `foreign_training`
--
ALTER TABLE `foreign_training`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `languages`
--
ALTER TABLE `languages`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `local_training`
--
ALTER TABLE `local_training`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `logo`
--
ALTER TABLE `logo`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `parmanent_address`
--
ALTER TABLE `parmanent_address`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `promotions`
--
ALTER TABLE `promotions`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `rest_of_recreation`
--
ALTER TABLE `rest_of_recreation`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `retirement_year`
--
ALTER TABLE `retirement_year`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT for table `service_history`
--
ALTER TABLE `service_history`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
