-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mar 27, 2022 at 11:12 AM
-- Server version: 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `db_profiling`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_award`
--

CREATE TABLE IF NOT EXISTS `tbl_award` (
`awardid` int(11) NOT NULL,
  `studID` varchar(15) DEFAULT NULL,
  `awarddesc` varchar(150) DEFAULT NULL
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_award`
--

INSERT INTO `tbl_award` (`awardid`, `studID`, `awarddesc`) VALUES
(2, '5454', 'hfh'),
(3, '00', 'uwugg');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_curriculum`
--

CREATE TABLE IF NOT EXISTS `tbl_curriculum` (
`curriculumID` int(11) NOT NULL,
  `curriculum` varchar(50) NOT NULL,
  `schoolyear` varchar(15) NOT NULL
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_curriculum`
--

INSERT INTO `tbl_curriculum` (`curriculumID`, `curriculum`, `schoolyear`) VALUES
(1, 'MIT S.Y. 2021-2022', 'SY 2021-2022');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_currperiod`
--

CREATE TABLE IF NOT EXISTS `tbl_currperiod` (
`curID` int(11) NOT NULL,
  `curSem` varchar(45) NOT NULL,
  `curSy` varchar(45) NOT NULL
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_currperiod`
--

INSERT INTO `tbl_currperiod` (`curID`, `curSem`, `curSy`) VALUES
(1, 'First Semester', 'SY 2021-2022');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_educprofile`
--

CREATE TABLE IF NOT EXISTS `tbl_educprofile` (
`educID` int(11) NOT NULL,
  `studID` varchar(15) NOT NULL,
  `schoolName` varchar(175) NOT NULL,
  `schoolAdd` varchar(175) NOT NULL,
  `major` varchar(100) NOT NULL,
  `degree` varchar(100) NOT NULL,
  `dateRec` varchar(50) NOT NULL
) ENGINE=MyISAM AUTO_INCREMENT=14 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_educprofile`
--

INSERT INTO `tbl_educprofile` (`educID`, `studID`, `schoolName`, `schoolAdd`, `major`, `degree`, `dateRec`) VALUES
(8, '00', 'St. Agustin High School', 'Santiago ', 'Software Development', 'Information Technology', '2019'),
(9, '00', 'asasas', 'sasas', 'da', 'ad', 'dad'),
(13, '00', 'ad', 'dad', 'da', 'dad', 'dad'),
(12, '00', 'dad', 'a', 'da', 'dd', 'da');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_egrade`
--

CREATE TABLE IF NOT EXISTS `tbl_egrade` (
`gradeID` int(11) NOT NULL,
  `schoolYear` varchar(25) NOT NULL,
  `semester` varchar(25) NOT NULL,
  `studNo` varchar(15) NOT NULL,
  `studentName` varchar(175) NOT NULL,
  `subjCode` varchar(25) NOT NULL,
  `subjDesc` varchar(55) NOT NULL,
  `subjUnits` int(11) NOT NULL,
  `gradeCQ` int(11) NOT NULL
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_egrade`
--

INSERT INTO `tbl_egrade` (`gradeID`, `schoolYear`, `semester`, `studNo`, `studentName`, `subjCode`, `subjDesc`, `subjUnits`, `gradeCQ`) VALUES
(1, '', '', '00', '', 'MIT 102', 'Advanced Database Systems', 3, 90);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_organization`
--

CREATE TABLE IF NOT EXISTS `tbl_organization` (
`orgid` int(11) NOT NULL,
  `studID` varchar(15) DEFAULT NULL,
  `orgdesc` varchar(150) DEFAULT NULL
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_organization`
--

INSERT INTO `tbl_organization` (`orgid`, `studID`, `orgdesc`) VALUES
(2, 'undefined', 'Philippine Computer Society'),
(3, '5454', 'Philippine Computer Society'),
(4, '00', 'Philippine Computer Societyasas'),
(5, '00', 'Philippine Computer Society'),
(6, '00', 'AJMP'),
(7, '00', 'WITS');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_publication`
--

CREATE TABLE IF NOT EXISTS `tbl_publication` (
`pubid` int(11) NOT NULL,
  `studID` varchar(15) DEFAULT NULL,
  `artTitle` text,
  `pubTitle` text,
  `pubYear` varchar(15) DEFAULT NULL
) ENGINE=MyISAM AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_publication`
--

INSERT INTO `tbl_publication` (`pubid`, `studID`, `artTitle`, `pubTitle`, `pubYear`) VALUES
(1, '00', 'ahklj', 'dad', 'fsfs'),
(2, '5454', 'hfh', 'hf', 'hf'),
(10, '00', 'dgd', 'gd', 'gdg');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_schoolyear`
--

CREATE TABLE IF NOT EXISTS `tbl_schoolyear` (
`syID` int(11) NOT NULL,
  `schoolYear` varchar(45) NOT NULL
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

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

CREATE TABLE IF NOT EXISTS `tbl_semester` (
`semID` int(11) NOT NULL,
  `semester` varchar(45) NOT NULL
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

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

CREATE TABLE IF NOT EXISTS `tbl_stdprofile` (
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
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_stdprofile`
--

INSERT INTO `tbl_stdprofile` (`recID`, `studID`, `lastName`, `firstName`, `middleName`, `extName`, `mailingAdd`, `mzipcode`, `mcountry`, `mobileno`, `birthPlace`, `dateofBirth`, `Citizenship`, `Sex`, `civilStatus`, `occupation`, `employer`, `empAdd`, `empzip`, `empcountry`, `empmobile`, `semester`, `schoolyear`, `compplan`, `curriculumID`, `emailAdd`, `piclink`) VALUES
(1, '00', 'Dela Cruz', 'Juan Manuel', 'Miguel', 'Jr', 'Santolan, Santiago City', '3314', 'Philippines', '09778788781', 'Tondo, Isabela', '2021-11-01', 'Filipino', '', '', 'Instructor', 'Tondo, Isabela', 'Diadi, Cordon, Isabela', '3312', 'Philippines', '0945566554', 'First Semester', 'SY 2021-2022', 'sfsfsfsfsf', 1, '00_00@yahoo.com', '00.png'),
(2, '77', 'gdg', 'dgg', 'gg', 'dgd', ', , , ', '', '', '', '', '0000-00-00', '', '', '', '', '', ', , , ', '', '', '', 'First Semester', 'SY 2021-2022', '', 1, '', ''),
(4, '5454', 'hfghfh', '', '', '', ', , , ', '', '', '', '', '0000-00-00', '', '', '', '', '', ', , , ', '', '', '', 'First Semester', 'SY 2019-2020', 'fhfh', 0, '', '5454.png'),
(6, '22', 'Dela Cruz', 'Juan Manuel', 'Miguel', 'Jr', 'Santolan, Santiago City', '3314', 'Philippines', '09778788781', 'Tondo, Isabela', '2021-11-01', 'Filipino', '', '', 'Instructor', 'Tondo, Isabela', 'Diadi, Cordon, Isabela', '3312', 'Philippines', '0945566554', 'Second Semester', 'SY 2021-2022', 'sfsfsfsfsf', 1, '00_00@yahoo.com', '00.png'),
(7, '77', 'Dela Cruz', 'Juan Manuel', 'Miguel', 'Jr', 'Santolan, Santiago City', '3314', 'Philippines', '09778788781', 'Tondo, Isabela', '2021-11-01', 'Filipino', '', '', 'Instructor', 'Tondo, Isabela', 'Diadi, Cordon, Isabela', '3312', 'Philippines', '0945566554', 'Second Semester', 'SY 2021-2022', 'sfsfsfsfsf', 1, '00_00@yahoo.com', '00.png');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_student`
--

CREATE TABLE IF NOT EXISTS `tbl_student` (
`recID` int(11) NOT NULL,
  `studIDNo` varchar(15) NOT NULL,
  `fullName` varchar(150) NOT NULL,
  `userName` varchar(25) NOT NULL,
  `passWord` varchar(25) NOT NULL
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_student`
--

INSERT INTO `tbl_student` (`recID`, `studIDNo`, `fullName`, `userName`, `passWord`) VALUES
(1, '00', '00', '00', '00'),
(2, '33', '33', '33', '33'),
(3, 'hhh', 'hhh', 'hhh', ''),
(4, 'df', 'ds', 'dsd', ''),
(5, 'yy', 'yy', 'yy', 'yy'),
(6, 'ytrt', 'khk', 'khk', ''),
(7, 'rrt', 'trt', 'rere', '');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_subject`
--

CREATE TABLE IF NOT EXISTS `tbl_subject` (
`subjID` int(11) NOT NULL,
  `courseSem` varchar(25) NOT NULL,
  `yearLevel` varchar(15) NOT NULL,
  `courseCode` varchar(10) NOT NULL,
  `courseDesc` varchar(150) NOT NULL,
  `courseUnit` int(11) NOT NULL,
  `currID` int(11) NOT NULL
) ENGINE=MyISAM AUTO_INCREMENT=18 DEFAULT CHARSET=latin1;

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
(16, 'Second Semester', 'Second Year', 'MIT 302', 'pstone in Information Technology 2', 3, 1),
(17, 'First Semester', 'First Year', 'MIT 101', 'Advanced Operating System and Networking ', 3, 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_subj_offered`
--

CREATE TABLE IF NOT EXISTS `tbl_subj_offered` (
`recID` int(11) NOT NULL,
  `curID` int(11) NOT NULL,
  `subjID` int(11) NOT NULL,
  `semester` varchar(25) NOT NULL,
  `schoolyear` varchar(25) NOT NULL,
  `subjCode` varchar(10) NOT NULL,
  `subjDesc` varchar(75) NOT NULL,
  `subjUnit` varchar(5) NOT NULL
) ENGINE=MyISAM AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_subj_offered`
--

INSERT INTO `tbl_subj_offered` (`recID`, `curID`, `subjID`, `semester`, `schoolyear`, `subjCode`, `subjDesc`, `subjUnit`) VALUES
(10, 1, 14, 'First Semester', 'SY 2021-2022', 'MIT 207 ', 'Security Management in Information Systems', '3'),
(5, 1, 6, 'First Semester', 'SY 2021-2022', 'MIT 103', 'Advanced Systems Design and Implementation', ''),
(9, 1, 17, 'First Semester', 'SY 2021-2022', 'MIT 101', 'Advanced Operating System and Networking ', '3'),
(7, 1, 8, 'First Semester', 'SY 2021-2022', 'MIT 201', 'Web-based Application Development and Management ', ''),
(8, 1, 9, 'First Semester', 'SY 2021-2022', 'MIT 202', 'Data Warehousing', '');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_training`
--

CREATE TABLE IF NOT EXISTS `tbl_training` (
`trainingid` int(11) NOT NULL,
  `studID` varchar(15) DEFAULT NULL,
  `trainingdesc` varchar(150) DEFAULT NULL
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

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

CREATE TABLE IF NOT EXISTS `tbl_unpub` (
`unpubid` int(11) NOT NULL,
  `studID` varchar(15) DEFAULT NULL,
  `desc` varchar(150) DEFAULT NULL
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_unpub`
--

INSERT INTO `tbl_unpub` (`unpubid`, `studID`, `desc`) VALUES
(1, '00', 'asasaszczc'),
(2, '5454', 'h'),
(3, '00', 'gfggsasa');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user`
--

CREATE TABLE IF NOT EXISTS `tbl_user` (
`userID` int(11) NOT NULL,
  `fname` varchar(75) NOT NULL,
  `lname` varchar(75) NOT NULL,
  `userName` varchar(75) NOT NULL,
  `passWord` varchar(75) NOT NULL
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_user`
--

INSERT INTO `tbl_user` (`userID`, `fname`, `lname`, `userName`, `passWord`) VALUES
(1, 'Admin', 'Administrator', 'admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_year`
--

CREATE TABLE IF NOT EXISTS `tbl_year` (
`yearID` int(11) NOT NULL,
  `yearLevel` varchar(15) NOT NULL
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

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
 ADD PRIMARY KEY (`recID`), ADD UNIQUE KEY `recID` (`recID`);

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
MODIFY `awardid` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `tbl_curriculum`
--
ALTER TABLE `tbl_curriculum`
MODIFY `curriculumID` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `tbl_currperiod`
--
ALTER TABLE `tbl_currperiod`
MODIFY `curID` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `tbl_educprofile`
--
ALTER TABLE `tbl_educprofile`
MODIFY `educID` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT for table `tbl_egrade`
--
ALTER TABLE `tbl_egrade`
MODIFY `gradeID` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `tbl_organization`
--
ALTER TABLE `tbl_organization`
MODIFY `orgid` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `tbl_publication`
--
ALTER TABLE `tbl_publication`
MODIFY `pubid` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `tbl_schoolyear`
--
ALTER TABLE `tbl_schoolyear`
MODIFY `syID` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `tbl_semester`
--
ALTER TABLE `tbl_semester`
MODIFY `semID` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `tbl_stdprofile`
--
ALTER TABLE `tbl_stdprofile`
MODIFY `recID` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `tbl_student`
--
ALTER TABLE `tbl_student`
MODIFY `recID` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `tbl_subject`
--
ALTER TABLE `tbl_subject`
MODIFY `subjID` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=18;
--
-- AUTO_INCREMENT for table `tbl_subj_offered`
--
ALTER TABLE `tbl_subj_offered`
MODIFY `recID` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `tbl_training`
--
ALTER TABLE `tbl_training`
MODIFY `trainingid` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `tbl_unpub`
--
ALTER TABLE `tbl_unpub`
MODIFY `unpubid` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `tbl_user`
--
ALTER TABLE `tbl_user`
MODIFY `userID` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `tbl_year`
--
ALTER TABLE `tbl_year`
MODIFY `yearID` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
