-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 20, 2022 at 07:42 AM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.4.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_profiling`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_award`
--

CREATE TABLE `tbl_award` (
  `awardid` int(11) NOT NULL,
  `studID` varchar(15) DEFAULT NULL,
  `awarddesc` varchar(150) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_curriculum`
--

CREATE TABLE `tbl_curriculum` (
  `curriculumID` int(11) NOT NULL,
  `curriculum` varchar(50) NOT NULL,
  `schoolyear` varchar(15) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_curriculum`
--

INSERT INTO `tbl_curriculum` (`curriculumID`, `curriculum`, `schoolyear`) VALUES
(1, 'MIT S.Y. 2021-2022', 'SY 2021-2022');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_currperiod`
--

CREATE TABLE `tbl_currperiod` (
  `curID` int(11) NOT NULL,
  `curSem` varchar(45) NOT NULL,
  `curSy` varchar(45) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_currperiod`
--

INSERT INTO `tbl_currperiod` (`curID`, `curSem`, `curSy`) VALUES
(1, 'Second Semester', 'SY 2021-2022');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_educprofile`
--

CREATE TABLE `tbl_educprofile` (
  `educID` int(11) NOT NULL,
  `studID` varchar(15) NOT NULL,
  `schoolName` varchar(175) NOT NULL,
  `schoolAdd` varchar(175) NOT NULL,
  `major` varchar(100) NOT NULL,
  `degree` varchar(100) NOT NULL,
  `dateRec` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_egrade`
--

CREATE TABLE `tbl_egrade` (
  `gradeID` int(11) NOT NULL,
  `schoolYear` varchar(25) NOT NULL,
  `semester` varchar(25) NOT NULL,
  `studNo` varchar(15) NOT NULL,
  `studentName` varchar(175) NOT NULL,
  `subjCode` varchar(25) NOT NULL,
  `subjDesc` varchar(55) NOT NULL,
  `subjUnits` int(11) NOT NULL,
  `gradeCQ` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_egrade`
--

INSERT INTO `tbl_egrade` (`gradeID`, `schoolYear`, `semester`, `studNo`, `studentName`, `subjCode`, `subjDesc`, `subjUnits`, `gradeCQ`) VALUES
(1, 'Select School Year', 'All', '180720', 'Christian Chua', '', '', 0, 3);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_organization`
--

CREATE TABLE `tbl_organization` (
  `orgid` int(11) NOT NULL,
  `studID` varchar(15) DEFAULT NULL,
  `orgdesc` varchar(150) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_publication`
--

CREATE TABLE `tbl_publication` (
  `pubid` int(11) NOT NULL,
  `studID` varchar(15) DEFAULT NULL,
  `artTitle` text DEFAULT NULL,
  `pubTitle` text DEFAULT NULL,
  `pubYear` varchar(15) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_schoolyear`
--

CREATE TABLE `tbl_schoolyear` (
  `syID` int(11) NOT NULL,
  `schoolYear` varchar(45) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_schoolyear`
--

INSERT INTO `tbl_schoolyear` (`syID`, `schoolYear`) VALUES
(1, 'SY 2019-2020'),
(2, 'SY 2020-2021'),
(3, 'SY 2021-2022');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_semester`
--

CREATE TABLE `tbl_semester` (
  `semID` int(11) NOT NULL,
  `semester` varchar(45) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_semester`
--

INSERT INTO `tbl_semester` (`semID`, `semester`) VALUES
(1, 'First Semester'),
(2, 'Second Semester'),
(3, 'MidYear Term');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_stdprofile`
--

CREATE TABLE `tbl_stdprofile` (
  `recID` int(11) NOT NULL,
  `studID` varchar(15) NOT NULL,
  `lastName` varchar(75) NOT NULL,
  `firstName` varchar(75) NOT NULL,
  `middleName` varchar(75) NOT NULL,
  `extName` varchar(5) NOT NULL,
  `mailingAdd` text NOT NULL,
  `mzipcode` varchar(75) NOT NULL,
  `mcountry` varchar(75) NOT NULL,
  `mobileno` varchar(15) NOT NULL,
  `birthPlace` varchar(150) NOT NULL,
  `dateofBirth` date NOT NULL,
  `Citizenship` varchar(25) NOT NULL,
  `Sex` varchar(10) NOT NULL,
  `civilStatus` varchar(25) NOT NULL,
  `occupation` varchar(100) NOT NULL,
  `employer` varchar(150) NOT NULL,
  `empAdd` text NOT NULL,
  `empzip` varchar(75) NOT NULL,
  `empcountry` varchar(75) NOT NULL,
  `empmobile` varchar(15) NOT NULL,
  `semester` varchar(75) NOT NULL,
  `schoolyear` varchar(75) NOT NULL,
  `compplan` text NOT NULL,
  `curriculumID` int(11) NOT NULL,
  `emailAdd` varchar(150) NOT NULL,
  `piclink` varchar(150) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_stdprofile`
--

INSERT INTO `tbl_stdprofile` (`recID`, `studID`, `lastName`, `firstName`, `middleName`, `extName`, `mailingAdd`, `mzipcode`, `mcountry`, `mobileno`, `birthPlace`, `dateofBirth`, `Citizenship`, `Sex`, `civilStatus`, `occupation`, `employer`, `empAdd`, `empzip`, `empcountry`, `empmobile`, `semester`, `schoolyear`, `compplan`, `curriculumID`, `emailAdd`, `piclink`) VALUES
(3, '18-0720', 'Chua', 'Christian', '', '', 'Purok-2, Calaocan, Santiago City, Isabela', '3311', 'Philippines', '09612929686', 'Santiago City, Isabela', '1999-04-25', 'Filipino', 'Male', 'Single', '', 'Santiago City, Isabela', 'Purok-2, Calaocan, Santiago City, Isabela', '3311', 'Philippines', '', 'Second Semester', 'SY 2021-2022', '', 1, 'cchua2504@gmail.com', '18-0720.png');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_student`
--

CREATE TABLE `tbl_student` (
  `recID` int(11) NOT NULL,
  `studIDNo` varchar(15) NOT NULL,
  `fullName` varchar(150) NOT NULL,
  `userName` varchar(25) NOT NULL,
  `passWord` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_student`
--

INSERT INTO `tbl_student` (`recID`, `studIDNo`, `fullName`, `userName`, `passWord`) VALUES
(19, '18-0720', 'Christian Chua', 'isu_echague', '$2y$10$lqtw25wrdwGZ6pnzz/Ixo.H.7pcewi7sDw4CbJOCzEPH2oi62Sb.W'),
(21, '18-0089', 'Elmar Pascual', 'isu', '$2y$10$51dd9DcqINO354swHIESYe4Q536xox0XhFxxQEOBojjpGdTwTrR86');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_subject`
--

CREATE TABLE `tbl_subject` (
  `subjID` int(11) NOT NULL,
  `courseSem` varchar(25) NOT NULL,
  `yearLevel` varchar(15) NOT NULL,
  `courseCode` varchar(10) NOT NULL,
  `courseDesc` varchar(150) NOT NULL,
  `courseUnit` int(11) NOT NULL,
  `currID` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_subject`
--

INSERT INTO `tbl_subject` (`subjID`, `courseSem`, `yearLevel`, `courseCode`, `courseDesc`, `courseUnit`, `currID`) VALUES
(3, 'Midyear Semester', 'Second Year', 'MIT 102', 'Advanced Operating System and Networking ', 3, 2),
(4, 'First Semester', 'First Year', 'MIT 101', 'Advanced Operating System and Networking ', 3, 3),
(1, 'First Semester', 'First Year', 'MIT 101', 'Advanced Operating System and Networking ', 3, 2),
(5, 'First Semester', 'First Year', 'MIT 102', 'Advanced Database Systems ', 3, 1),
(6, 'First Semester', 'First Year', 'MIT 103', 'Advanced Systems Design and Implementation', 3, 1),
(7, 'First Semester', 'First Year', 'MIT 104', 'IT Project Management ', 3, 1),
(8, 'Second Semester', 'First Year', 'MIT 201', 'Web-based Application Development and Management ', 3, 1),
(9, 'Second Semester', 'First Year', 'MIT 202', 'Data Warehousing', 3, 1),
(10, 'Second Semester', 'First Year', 'MIT 203', 'Cloud Computing', 3, 1),
(11, 'Second Semester', 'First Year', 'MIT 204', 'Client/ Server Systems with Mobile Technology', 3, 1),
(12, 'Midyear Semester', 'First Year', 'MIT 205', 'Distributed Database System', 3, 1),
(13, 'Midyear Semester', 'First Year', 'MIT 206', 'Mobile Application System', 3, 1),
(14, 'First Semester', 'Second Year', 'MIT 207 ', 'Security Management in Information Systems', 3, 1),
(15, 'First Semester', 'Second Year', 'MIT 301', 'Capstone in Information Technology 1 ', 3, 1),
(16, 'Second Semester', 'Second Year', 'MIT 302', 'Capstone in Information Technology 2', 3, 1),
(17, 'First Semester', 'First Year', 'MIT 101', 'Advanced Operating System and Networking ', 3, 1),
(18, 'First Semester', 'First Year', 'IT ELEC', 'dderwer', 3, 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_subj_offered`
--

CREATE TABLE `tbl_subj_offered` (
  `recID` int(11) NOT NULL,
  `curID` int(11) NOT NULL,
  `subjID` int(11) NOT NULL,
  `semester` varchar(25) NOT NULL,
  `schoolyear` varchar(25) NOT NULL,
  `subjCode` varchar(10) NOT NULL,
  `subjDesc` varchar(75) NOT NULL,
  `subjUnit` varchar(5) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_subj_offered`
--

INSERT INTO `tbl_subj_offered` (`recID`, `curID`, `subjID`, `semester`, `schoolyear`, `subjCode`, `subjDesc`, `subjUnit`) VALUES
(7, 1, 8, 'First Semester', 'SY 2021-2022', 'MIT 201', 'Web-based Application Development and Management ', ''),
(8, 1, 9, 'First Semester', 'SY 2021-2022', 'MIT 202', 'Data Warehousing', ''),
(11, 1, 11, 'Second Semester', 'SY 2021-2022', 'MIT 204', 'Client/ Server Systems with Mobile Technology', '3'),
(12, 1, 10, 'Second Semester', 'SY 2021-2022', 'MIT 203', 'Cloud Computing', '3'),
(10, 1, 14, 'First Semester', 'SY 2021-2022', 'MIT 207 ', 'Security Management in Information Systems', '3'),
(5, 1, 6, 'First Semester', 'SY 2021-2022', 'MIT 103', 'Advanced Systems Design and Implementation', ''),
(9, 1, 17, 'First Semester', 'SY 2021-2022', 'MIT 101', 'Advanced Operating System and Networking ', '3');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_training`
--

CREATE TABLE `tbl_training` (
  `trainingid` int(11) NOT NULL,
  `studID` varchar(15) DEFAULT NULL,
  `trainingdesc` varchar(150) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_training`
--

INSERT INTO `tbl_training` (`trainingid`, `studID`, `trainingdesc`) VALUES
(1, '00', 'hjhjhj'),
(2, '5454', 'hfhf'),
(3, '00', 'dgd'),
(4, '00', 'gdg');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_unpub`
--

CREATE TABLE `tbl_unpub` (
  `unpubid` int(11) NOT NULL,
  `studID` varchar(15) DEFAULT NULL,
  `desc` varchar(150) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user`
--

CREATE TABLE `tbl_user` (
  `userID` int(11) NOT NULL,
  `fname` varchar(75) NOT NULL,
  `lname` varchar(75) NOT NULL,
  `userName` varchar(75) NOT NULL,
  `passWord` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_user`
--

INSERT INTO `tbl_user` (`userID`, `fname`, `lname`, `userName`, `passWord`) VALUES
(7, 'Admin', 'Administrator', 'admin', '$2y$10$Isa6R486akshVd7TdP.KPeHK1dnYWcnrSNUJnWj9XUm5jHOg1.eiy');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_year`
--

CREATE TABLE `tbl_year` (
  `yearID` int(11) NOT NULL,
  `yearLevel` varchar(15) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_year`
--

INSERT INTO `tbl_year` (`yearID`, `yearLevel`) VALUES
(1, 'First Year'),
(2, 'Second Year');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_award`
--
ALTER TABLE `tbl_award`
  ADD PRIMARY KEY (`awardid`);

--
-- Indexes for table `tbl_curriculum`
--
ALTER TABLE `tbl_curriculum`
  ADD PRIMARY KEY (`curriculumID`);

--
-- Indexes for table `tbl_currperiod`
--
ALTER TABLE `tbl_currperiod`
  ADD PRIMARY KEY (`curID`);

--
-- Indexes for table `tbl_educprofile`
--
ALTER TABLE `tbl_educprofile`
  ADD PRIMARY KEY (`educID`);

--
-- Indexes for table `tbl_egrade`
--
ALTER TABLE `tbl_egrade`
  ADD PRIMARY KEY (`gradeID`);

--
-- Indexes for table `tbl_organization`
--
ALTER TABLE `tbl_organization`
  ADD PRIMARY KEY (`orgid`);

--
-- Indexes for table `tbl_publication`
--
ALTER TABLE `tbl_publication`
  ADD PRIMARY KEY (`pubid`);

--
-- Indexes for table `tbl_schoolyear`
--
ALTER TABLE `tbl_schoolyear`
  ADD PRIMARY KEY (`syID`);

--
-- Indexes for table `tbl_semester`
--
ALTER TABLE `tbl_semester`
  ADD PRIMARY KEY (`semID`);

--
-- Indexes for table `tbl_stdprofile`
--
ALTER TABLE `tbl_stdprofile`
  ADD PRIMARY KEY (`recID`);

--
-- Indexes for table `tbl_student`
--
ALTER TABLE `tbl_student`
  ADD PRIMARY KEY (`recID`),
  ADD UNIQUE KEY `recID` (`recID`);

--
-- Indexes for table `tbl_subject`
--
ALTER TABLE `tbl_subject`
  ADD PRIMARY KEY (`subjID`);

--
-- Indexes for table `tbl_subj_offered`
--
ALTER TABLE `tbl_subj_offered`
  ADD PRIMARY KEY (`recID`);

--
-- Indexes for table `tbl_training`
--
ALTER TABLE `tbl_training`
  ADD PRIMARY KEY (`trainingid`);

--
-- Indexes for table `tbl_unpub`
--
ALTER TABLE `tbl_unpub`
  ADD PRIMARY KEY (`unpubid`);

--
-- Indexes for table `tbl_user`
--
ALTER TABLE `tbl_user`
  ADD PRIMARY KEY (`userID`);

--
-- Indexes for table `tbl_year`
--
ALTER TABLE `tbl_year`
  ADD PRIMARY KEY (`yearID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_award`
--
ALTER TABLE `tbl_award`
  MODIFY `awardid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tbl_curriculum`
--
ALTER TABLE `tbl_curriculum`
  MODIFY `curriculumID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_currperiod`
--
ALTER TABLE `tbl_currperiod`
  MODIFY `curID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_educprofile`
--
ALTER TABLE `tbl_educprofile`
  MODIFY `educID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `tbl_egrade`
--
ALTER TABLE `tbl_egrade`
  MODIFY `gradeID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_organization`
--
ALTER TABLE `tbl_organization`
  MODIFY `orgid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `tbl_publication`
--
ALTER TABLE `tbl_publication`
  MODIFY `pubid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `tbl_schoolyear`
--
ALTER TABLE `tbl_schoolyear`
  MODIFY `syID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tbl_semester`
--
ALTER TABLE `tbl_semester`
  MODIFY `semID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tbl_stdprofile`
--
ALTER TABLE `tbl_stdprofile`
  MODIFY `recID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tbl_student`
--
ALTER TABLE `tbl_student`
  MODIFY `recID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `tbl_subject`
--
ALTER TABLE `tbl_subject`
  MODIFY `subjID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `tbl_subj_offered`
--
ALTER TABLE `tbl_subj_offered`
  MODIFY `recID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `tbl_training`
--
ALTER TABLE `tbl_training`
  MODIFY `trainingid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tbl_unpub`
--
ALTER TABLE `tbl_unpub`
  MODIFY `unpubid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tbl_user`
--
ALTER TABLE `tbl_user`
  MODIFY `userID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `tbl_year`
--
ALTER TABLE `tbl_year`
  MODIFY `yearID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
