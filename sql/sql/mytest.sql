-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 17, 2020 at 03:28 PM
-- Server version: 10.4.10-MariaDB
-- PHP Version: 7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mytest`
--

-- --------------------------------------------------------

--
-- Table structure for table `attendance`
--

CREATE TABLE `attendance` (
  `id` int(100) NOT NULL,
  `totalattendance` int(100) NOT NULL,
  `attendance` int(100) NOT NULL,
  `dates` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `attendance`
--

INSERT INTO `attendance` (`id`, `totalattendance`, `attendance`, `dates`) VALUES
(48, 30, 13, '01-03-2020'),
(48, 30, 13, '01-03-2020'),
(48, 29, 28, '02-03-2020'),
(52, 12, 2, '02-03-2020');

-- --------------------------------------------------------

--
-- Table structure for table `historytab`
--

CREATE TABLE `historytab` (
  `h_id` int(15) NOT NULL,
  `h_taskname` varchar(30) NOT NULL,
  `h_taskdesc` varchar(300) NOT NULL,
  `h_taskid` int(15) NOT NULL,
  `h_assigndate` date NOT NULL,
  `h_assigntime` time NOT NULL,
  `h_comdate` date NOT NULL,
  `h_comtime` time NOT NULL,
  `h_assignbyid` int(15) NOT NULL,
  `h_assignbyname` varchar(30) NOT NULL,
  `h_assigntoid` int(15) NOT NULL,
  `h_assigntoname` varchar(30) NOT NULL,
  `h_status` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `historytab`
--

INSERT INTO `historytab` (`h_id`, `h_taskname`, `h_taskdesc`, `h_taskid`, `h_assigndate`, `h_assigntime`, `h_comdate`, `h_comtime`, `h_assignbyid`, `h_assignbyname`, `h_assigntoid`, `h_assigntoname`, `h_status`) VALUES
(8, 'stack api develop', 'devloping the stack api', 27, '2020-03-05', '08:21:37', '2020-03-05', '08:35:48', 48, 'Shubh Patel', 53, 'chintu ', 'Completed'),
(9, 'stack api', 'creating project on stack api.', 19, '2020-03-05', '08:11:23', '2020-03-05', '08:37:34', 46, 'kenil', 48, 'Shubh Patel', 'Completed'),
(10, 'wing ftp', 'creating wing ftp', 20, '2020-03-05', '08:11:59', '2020-03-06', '19:35:37', 46, 'kenil', 49, 'Sanket Gondaliya', 'Completed'),
(11, 'stack api designning', 'Design the website for stack aip.', 25, '2020-03-05', '08:20:40', '2020-03-06', '20:10:39', 48, 'Shubh Patel', 52, 'monil shah', 'Completed');

-- --------------------------------------------------------

--
-- Table structure for table `leavetab`
--

CREATE TABLE `leavetab` (
  `l_id` int(15) NOT NULL,
  `l_desc` text NOT NULL,
  `l_startdate` date NOT NULL,
  `l_todate` date NOT NULL,
  `l_applyid` int(15) NOT NULL,
  `l_applyname` varchar(30) NOT NULL,
  `l_approveid` int(15) NOT NULL,
  `l_approvename` varchar(30) NOT NULL,
  `l_status` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `leavetab`
--

INSERT INTO `leavetab` (`l_id`, `l_desc`, `l_startdate`, `l_todate`, `l_applyid`, `l_applyname`, `l_approveid`, `l_approvename`, `l_status`) VALUES
(10, 'I have to go Vacation.', '2020-03-21', '2020-03-28', 48, 'Shubh Patel', 46, 'kenil', 'Approve'),
(11, 'I have to go wedding', '2020-03-12', '2020-03-14', 49, 'Sanket Gondaliya', 46, 'kenil', 'Approve'),
(12, 'casual Levae.', '2020-03-22', '2020-02-23', 52, 'monil shah', 48, 'Shubh Patel', 'Reject'),
(13, 'Madicale leave.', '2020-03-15', '2020-03-16', 53, 'chintu ', 48, 'Shubh Patel', 'Approve'),
(14, 'Casuale levae', '2020-03-30', '2020-03-31', 50, 'Jimmy Patel', 46, 'kenil', 'Reject'),
(15, 'For etting', '2020-03-20', '2020-03-22', 51, 'Kenish Patel', 46, 'kenil', 'Reject'),
(16, 'anything', '2020-03-31', '2020-04-01', 54, 'Vishal Fatani', 49, 'Sanket Gondaliya', 'Pending'),
(17, 'casuale', '2020-03-30', '2020-03-31', 55, 'zeel', 49, 'Sanket Gondaliya', 'Pending'),
(18, 'famillu', '2020-03-03', '2020-03-10', 56, 'aagam', 50, 'Jimmy Patel', 'Pending'),
(19, 'casuale', '2020-04-20', '2020-04-22', 57, 'mru', 50, 'Jimmy Patel', 'Pending'),
(20, 'acasuale', '2020-03-30', '2020-03-31', 58, 'keyur', 51, 'Kenish Patel', 'Pending'),
(21, 'fgammily', '2020-04-20', '2020-04-22', 59, 'manthan', 51, 'Kenish Patel', 'Pending');

-- --------------------------------------------------------

--
-- Table structure for table `prog_report`
--

CREATE TABLE `prog_report` (
  `p_id` int(15) NOT NULL,
  `p_report` text NOT NULL,
  `p_taskid` int(15) NOT NULL,
  `p_date` date NOT NULL,
  `p_time` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `prog_report`
--

INSERT INTO `prog_report` (`p_id`, `p_report`, `p_taskid`, `p_date`, `p_time`) VALUES
(25, 'we startup the plane.', 23, '2020-03-05', '08:22:23'),
(26, 'index page design', 23, '2020-03-05', '08:22:34'),
(27, 'designning completed', 23, '2020-03-05', '08:22:48'),
(28, 'start designning', 26, '2020-03-05', '08:30:52'),
(29, 'almost completed designning', 26, '2020-03-05', '08:31:03'),
(38, 'we start up the plane', 24, '2020-03-05', '08:40:16'),
(39, 'designning completed', 24, '2020-03-05', '08:40:32'),
(40, '50 % completed', 24, '2020-03-05', '08:40:43'),
(41, 'we start up the plane\r\n', 21, '2020-03-05', '08:44:23'),
(42, 'almost completed', 21, '2020-03-05', '08:44:30'),
(43, '10% completed developing', 21, '2020-03-05', '08:44:41'),
(44, 'we startup plane\r\n', 22, '2020-03-05', '08:52:14'),
(45, '20% completed', 22, '2020-03-05', '08:52:31'),
(46, '30% completed', 22, '2020-03-05', '08:52:43'),
(50, 'start the plane\r\n', 28, '2020-03-05', '08:57:47'),
(51, 'header bcompleted', 28, '2020-03-05', '08:58:00'),
(52, '10% completed', 28, '2020-03-05', '08:58:08'),
(53, 'start the project\r\n', 29, '2020-03-05', '08:58:55'),
(54, 'some start up completed', 29, '2020-03-05', '08:59:12'),
(55, 'start the project', 30, '2020-03-05', '08:59:25'),
(56, 'some thing leran', 30, '2020-03-05', '08:59:34'),
(57, 'start the plane', 31, '2020-03-05', '09:00:12'),
(58, 'some part compelete', 31, '2020-03-05', '09:00:19'),
(59, 'start the plamne\r\n', 33, '2020-03-05', '09:01:04'),
(60, 'almost completed', 33, '2020-03-05', '09:01:12'),
(61, 'start up the plame\r\n', 34, '2020-03-05', '09:01:50'),
(62, 'almost completed\r\n', 34, '2020-03-05', '09:01:56'),
(63, 'starrt up project', 35, '2020-03-05', '09:02:36'),
(64, 'almost completed', 35, '2020-03-05', '09:02:43'),
(65, 'start the plane', 36, '2020-03-05', '09:03:26'),
(66, '20% completed', 36, '2020-03-05', '09:03:34');

-- --------------------------------------------------------

--
-- Table structure for table `shifttab`
--

CREATE TABLE `shifttab` (
  `s_id` int(15) NOT NULL,
  `s_fromdate` date NOT NULL,
  `s_todate` date NOT NULL,
  `s_fromtime` time NOT NULL,
  `s_totime` time NOT NULL,
  `s_assignid` int(15) NOT NULL,
  `s_assignname` varchar(30) NOT NULL,
  `s_byid` int(15) NOT NULL,
  `s_byname` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `shifttab`
--

INSERT INTO `shifttab` (`s_id`, `s_fromdate`, `s_todate`, `s_fromtime`, `s_totime`, `s_assignid`, `s_assignname`, `s_byid`, `s_byname`) VALUES
(11, '2020-03-01', '2020-03-31', '08:00:00', '20:00:00', 48, 'Shubh Patel', 46, 'kenil'),
(12, '2020-03-01', '2020-03-31', '08:00:00', '19:00:00', 49, 'Sanket Gondaliya', 46, 'kenil'),
(13, '2020-03-01', '2020-03-31', '20:00:00', '07:00:00', 50, 'Jimmy Patel', 46, 'kenil'),
(14, '2020-03-01', '2020-03-31', '21:00:00', '08:00:00', 51, 'Kenish Patel', 46, 'kenil'),
(15, '2020-03-01', '2020-03-31', '08:00:00', '20:00:00', 52, 'monil shah', 48, 'Shubh Patel'),
(16, '2020-03-01', '2020-03-31', '08:00:00', '20:00:00', 53, 'chintu ', 48, 'Shubh Patel'),
(17, '2020-03-01', '2020-03-31', '08:00:00', '19:00:00', 54, 'Vishal Fatani', 49, 'Sanket Gondaliya'),
(18, '2020-03-01', '2020-03-31', '08:00:00', '19:00:00', 55, 'zeel', 49, 'Sanket Gondaliya'),
(19, '2020-03-01', '2020-03-31', '20:00:00', '08:00:00', 56, 'aagam', 50, 'Jimmy Patel'),
(20, '2020-03-01', '2020-03-31', '20:00:00', '07:00:00', 57, 'mru', 50, 'Jimmy Patel'),
(21, '2020-03-01', '2020-03-31', '20:00:00', '07:00:00', 58, 'keyur', 51, 'Kenish Patel'),
(22, '2020-03-01', '2020-03-31', '20:00:00', '07:00:00', 59, 'manthan', 51, 'Kenish Patel');

-- --------------------------------------------------------

--
-- Table structure for table `taskmana`
--

CREATE TABLE `taskmana` (
  `t_id` int(15) NOT NULL,
  `t_name` varchar(30) NOT NULL,
  `t_desc` text NOT NULL,
  `t_date` date NOT NULL,
  `t_time` time NOT NULL,
  `t_assign` int(15) NOT NULL,
  `t_assignname` varchar(30) NOT NULL,
  `t_emp` varchar(30) NOT NULL,
  `t_empid` int(15) NOT NULL,
  `t_status` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `taskmana`
--

INSERT INTO `taskmana` (`t_id`, `t_name`, `t_desc`, `t_date`, `t_time`, `t_assign`, `t_assignname`, `t_emp`, `t_empid`, `t_status`) VALUES
(21, 'ecompanny', 'creating e-comopanyy website', '2020-03-05', '08:12:24', 46, 'kenil', 'Jimmy Patel', 50, 'Pending'),
(22, 'e-kitchen', 'creating e-kitchen website', '2020-03-05', '08:13:07', 46, 'kenil', 'Kenish Patel', 51, 'Pending'),
(23, 'rest api', 'creatinfg rest api website', '2020-03-05', '08:13:42', 46, 'kenil', 'Shubh Patel', 48, 'Pending'),
(24, 'rest ftp', 'creating rest ftp wing type.', '2020-03-05', '08:14:43', 46, 'kenil', 'Sanket Gondaliya', 49, 'Pending'),
(26, 'rest api design', 'design the website for rest api.', '2020-03-05', '08:21:07', 48, 'Shubh Patel', 'monil shah', 52, 'Pending'),
(28, 'rest api', 'develop rest api', '2020-03-05', '08:22:00', 48, 'Shubh Patel', 'chintu ', 53, 'Pending'),
(29, 'Design wing ftp', 'Design full website for wing ftp', '2020-03-05', '08:28:20', 49, 'Sanket Gondaliya', 'Vishal Fatani', 54, 'Pending'),
(30, 'design rest ftp', 'dessign website for rest ftp.', '2020-03-05', '08:28:43', 49, 'Sanket Gondaliya', 'Vishal Fatani', 54, 'Pending'),
(31, 'devrlope wing ftp', 'develop wing ftp', '2020-03-05', '08:29:11', 49, 'Sanket Gondaliya', 'zeel', 55, 'Pending'),
(32, 'delelope ftp', 'delelope rest ftp', '2020-03-05', '08:29:36', 49, 'Sanket Gondaliya', 'zeel', 55, 'Pending'),
(33, 'designning', 'design ecompanny website', '2020-03-05', '08:45:02', 50, 'Jimmy Patel', 'aagam', 56, 'Pending'),
(34, 'develop', 'all backend work for ecompany', '2020-03-05', '08:45:23', 50, 'Jimmy Patel', 'mru', 57, 'Pending'),
(35, 'design', 'design anything', '2020-03-05', '08:53:05', 51, 'Kenish Patel', 'keyur', 58, 'Pending'),
(36, 'develop', 'develope anything', '2020-03-05', '08:53:19', 51, 'Kenish Patel', 'manthan', 59, 'Pending');

-- --------------------------------------------------------

--
-- Table structure for table `userss`
--

CREATE TABLE `userss` (
  `Id` int(15) NOT NULL,
  `Name` varchar(20) NOT NULL,
  `Email` varchar(30) NOT NULL,
  `Password` varchar(16) NOT NULL,
  `Post` varchar(20) NOT NULL,
  `BirthDate` date NOT NULL,
  `Sex` varchar(10) NOT NULL,
  `Address` varchar(100) NOT NULL,
  `Contact` varchar(15) NOT NULL,
  `Sub-Post` varchar(30) NOT NULL,
  `Add_By` int(15) NOT NULL,
  `token` varchar(100) NOT NULL,
  `verified` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `userss`
--

INSERT INTO `userss` (`Id`, `Name`, `Email`, `Password`, `Post`, `BirthDate`, `Sex`, `Address`, `Contact`, `Sub-Post`, `Add_By`, `token`, `verified`) VALUES
(46, 'kenil', 'keniljasani9@gmail.com', 'kenil123', 'CEO', '2004-02-29', 'Male', 'surat', '9898264213', '', 0, 'ff61f539930ede8b87e89457997c1cbeb89b3188b14c5bb0c18a2571c4ded9d99669ddf70eb96c60265e34b8a11e3827f40e', 1),
(48, 'Shubh Patel', 'shubh@gmail.com', '1234', 'Manager', '2001-10-26', 'Male', 'Maheshana', '8888888888', 'Graphics department', 46, 'b675600957d068d03a42ed3d472c9c5693937ba8694a0ea02255a1d65b2bd1adcd184bf0832b039ca55e871eaf7c5f6e9538', 1),
(49, 'Sanket Gondaliya', 'sanket@gmail.com', '1234', 'Manager', '2001-10-26', 'Male', 'Rajkot', '9999999999', 'Graphics department', 46, 'c51c1a080e6835c2ffe775bd243ae84dbb692035e4726526b973fab99b9286b577018ca2a485dd1ef98d1b8495600638b860', 1),
(50, 'Jimmy Patel', 'jimmy@gmail.com', '1234', 'Manager', '2002-11-20', 'Male', 'Chhotta udaipur', '7777777777', 'Graphics department', 46, '0fe498c5a63d34932ec34430024182756e7fe6e8d0643a1e3701cd117950bcfb297258331b1356fc3482ef53701fe231ca18', 1),
(51, 'Kenish Patel', 'kenish@gmail.com', '1234', 'Manager', '2020-10-20', 'Male', 'Maheshana', '5555555555', 'Graphics department', 46, 'c969b5c0247b1d52ee2068e5e8db8c30be898553e07058915167c318b2b57e869b0b57740cc94a8b850b4c196d82850ab071', 1),
(52, 'monil shah', 'monil@gmail.com', '1234', 'Employee', '2020-02-22', 'Male', 'div daman', '3333333333', 'Computer Engeener', 48, 'a3acba2e0144c7e5c5c97e0dbfcac45d1c1bd3b00c2dc7f39092ed72baaa55fcc48bce787015f6188c5ef5b3e0da376b8b86', 1),
(53, 'chintu ', 'chintu@gmail.com', '1234', 'Employee', '2020-02-22', 'Male', 'vadodara', '4444444444', 'Computer Engeener', 48, '667695b766d429ab9b55c4c959d6897ceaa4390d0bb22ac562e9682322cc6eeec55a2b8eec710809286fbd1198ff3233e0b7', 1),
(54, 'Vishal Fatani', 'vishal@gmail.com', '1234', 'Employee', '2020-02-20', 'Male', 'Vadodara', '4444444444', 'Computer Engeener', 49, '24accc773e474ba8ecf1fef088e9d7cf34708767c96313644b3452cab349b79e1f231c3d6c52b98368a987a6f12b9a216a57', 1),
(55, 'zeel', 'zeel@gmail.com', '1234', 'Employee', '2020-02-20', 'Male', 'vadodara', '5555555555', 'Computer Engeener', 49, '90287538b586a324bd6cd0b9adac89d8cd11c84388f2784b6c2859280aa03e8430a7ee8d794b0c380e9ce7fca7867dbc07d8', 1),
(56, 'aagam', 'aagam@gmail.com', '1234', 'Employee', '2020-03-20', 'Male', 'vadodara', '7777777777', 'Computer Engeener', 50, '63318a29ee21a488516d455f8b2d6337f0cfd38adffc6e172a3faa5305c83e24f417cb4b92487e3777473a5a235221d6c0d9', 1),
(57, 'mru', 'mru@gmail.com', '1234', 'Employee', '2020-02-22', 'Male', 'vaadodara', '5555555555', 'Computer Engeener', 50, '442b211c9b609431babd9834507531914bd3066ed3d60d78c4c10c1a08728e209530135c10cf61fa3791d8b147373c6dae8f', 1),
(58, 'keyur', 'keyur@gmail.com', '1234', 'Employee', '2020-02-22', 'Male', 'vadodara', '5555555555', 'Computer Engeener', 51, '7af4b09d7dd726b4c0e73e78917c149bb037b572a36cf03b0019ea834c77969d6b3248ec26eea241f9fe364b00c508a0764e', 1),
(59, 'manthan', 'manthan@gmail.com', '1234', 'Employee', '2020-02-02', 'Male', 'vadodara', '5555555555', 'Computer Engeener', 51, '4ff42ee94995f4daa6f8c146215bede097d2d8b7ed7350e2de564186fa9ff33352b68e191cde3fd3d55925ccdd9344381531', 1),
(60, 'kenil', 'kenil@gmaiul.com', '123456789', 'CEO', '0000-00-00', '', '', '111111111u', '', 0, '186e61029ee9f325f6843c1a1dfc7a7cbbaaeea84ee4c9f15189f610dc9365ca9eff4745c9d143515b5cf4dcdb8ea21c3686', 0),
(61, 'hdhe', 'gyuge@gfgyd.com', '1111111111', 'CEO', '0000-00-00', '', '', '1111111111', '', 0, '61b26f11040770177ce64f8ca68080d6c1aa776c063b9072eba2eca775d9f182e888f2df4675f446786166802a860aebacdb', 0),
(62, 'kenil', 'kenil@gmail.com', '1234567890', 'CEO', '0000-00-00', '', '', '1233333333', '', 0, '9852b31ea69581b5da1bab3d3ba51adc041be082390c1e3288732f13f9efb60359cb4434bcf95e481f72c8c63ba3ee31dda8', 0),
(63, 'cvgdy', 'homog39451@jalcemail.net', '1234567890', 'CEO', '0000-00-00', '', '', '6666666666', '', 0, '3a4ba2483b96a17b3a3461c00be25010c4f382e7f543f0316b62ab0dc4315cc7a91123c263393162e697e47af8d3da134749', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `historytab`
--
ALTER TABLE `historytab`
  ADD PRIMARY KEY (`h_id`);

--
-- Indexes for table `leavetab`
--
ALTER TABLE `leavetab`
  ADD PRIMARY KEY (`l_id`);

--
-- Indexes for table `prog_report`
--
ALTER TABLE `prog_report`
  ADD PRIMARY KEY (`p_id`);

--
-- Indexes for table `shifttab`
--
ALTER TABLE `shifttab`
  ADD PRIMARY KEY (`s_id`);

--
-- Indexes for table `taskmana`
--
ALTER TABLE `taskmana`
  ADD PRIMARY KEY (`t_id`);

--
-- Indexes for table `userss`
--
ALTER TABLE `userss`
  ADD PRIMARY KEY (`Id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `historytab`
--
ALTER TABLE `historytab`
  MODIFY `h_id` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `leavetab`
--
ALTER TABLE `leavetab`
  MODIFY `l_id` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `prog_report`
--
ALTER TABLE `prog_report`
  MODIFY `p_id` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=67;

--
-- AUTO_INCREMENT for table `shifttab`
--
ALTER TABLE `shifttab`
  MODIFY `s_id` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `taskmana`
--
ALTER TABLE `taskmana`
  MODIFY `t_id` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT for table `userss`
--
ALTER TABLE `userss`
  MODIFY `Id` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=64;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
