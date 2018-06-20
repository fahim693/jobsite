-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jul 30, 2016 at 12:10 AM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `job_site`
--

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE IF NOT EXISTS `category` (
  `cateoryId` int(11) NOT NULL AUTO_INCREMENT,
  `categoryName` text NOT NULL,
  PRIMARY KEY (`cateoryId`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`cateoryId`, `categoryName`) VALUES
(1, 'Accounting/Finance'),
(2, 'Garments/Textile'),
(3, 'Design/Creative'),
(4, 'IT/Telecommunication'),
(5, 'Marketing/Sales'),
(6, 'Media/Ad'),
(7, 'Medical/Pharma'),
(8, 'All');

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE IF NOT EXISTS `comments` (
  `commentId` int(11) NOT NULL AUTO_INCREMENT,
  `postId` int(11) NOT NULL,
  `comment` text NOT NULL,
  `commentUserId` text NOT NULL,
  `currentTime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`commentId`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=25 ;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`commentId`, `postId`, `comment`, `commentUserId`, `currentTime`) VALUES
(12, 5, 'lklkj', 'Fahim', '2016-07-25 20:23:10'),
(13, 5, 'aaa', 'Fahim Chowdhury', '2016-07-25 20:23:10'),
(14, 5, 'cvxc', 'Fahim Chowdhury', '2016-07-25 20:23:10'),
(15, 5, 'kk', 'Fahim Chowdhury', '2016-07-25 20:23:10'),
(16, 5, 'ok', 'Lushan', '2016-07-25 20:23:10'),
(17, 5, 'asd', 'Fahim Chowdhury', '2016-07-25 20:23:10'),
(18, 8, 'Working!!', 'Fahim Chowdhury', '2016-07-25 20:28:55'),
(19, 5, 'new comment', 'Fahim Chowdhury', '2016-07-26 03:50:31'),
(20, 5, 'I am lushan', 'Lushan', '2016-07-26 03:51:04'),
(21, 15, 'Korse', 'Lushan', '2016-07-28 12:42:11'),
(22, 9, 'wow', 'Fahim Chowdhury', '2016-07-28 18:34:28'),
(23, 6, 'sd', 'Fahim Chowdhury', '2016-07-29 19:37:48'),
(24, 13, 'asd', 'Fahim Chowdhury', '2016-07-29 21:47:01');

-- --------------------------------------------------------

--
-- Table structure for table `country`
--

CREATE TABLE IF NOT EXISTS `country` (
  `countryId` int(11) NOT NULL AUTO_INCREMENT,
  `countryName` text NOT NULL,
  PRIMARY KEY (`countryId`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `country`
--

INSERT INTO `country` (`countryId`, `countryName`) VALUES
(1, 'Bangladesh'),
(2, 'UK'),
(3, 'USA'),
(4, 'UAE'),
(5, 'Saudi Arab'),
(6, 'India');

-- --------------------------------------------------------

--
-- Table structure for table `jobapplication`
--

CREATE TABLE IF NOT EXISTS `jobapplication` (
  `applicationId` int(11) NOT NULL AUTO_INCREMENT,
  `applicantName` text NOT NULL,
  `applicantEmail` text NOT NULL,
  `appliedJobTitle` text NOT NULL,
  `appliedJobCompany` text NOT NULL,
  `appliedDate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`applicationId`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=32 ;

--
-- Dumping data for table `jobapplication`
--

INSERT INTO `jobapplication` (`applicationId`, `applicantName`, `applicantEmail`, `appliedJobTitle`, `appliedJobCompany`, `appliedDate`) VALUES
(11, 'Fahim Chowdhury', 'fahim@gmail.com', '\r\nTransport Officer', 'A Well Reputed 100% Export Oriented Garments Industry', '2016-07-28 13:50:20'),
(12, 'Fahim Chowdhury', 'fahim@gmail.com', '\r\nProgrammer\r\n', 'Flora Telecom Limited', '2016-07-28 13:50:37'),
(13, 'Mufad', 'mufad@gmail.com', '\r\nRegional Finance & Logistic Officer', 'FH Association', '2016-07-28 18:33:42'),
(17, 'Fahim Chowdhury', 'fahim@gmail.com', '\r\nIT Engineer\r\n', 'M/S KBS International', '2016-07-29 17:57:55'),
(18, 'Fahim Chowdhury', 'fahim@gmail.com', '\r\nIT Engineer\r\n', 'M/S KBS International', '2016-07-29 18:02:36'),
(19, 'Fahim Chowdhury', 'fahim@gmail.com', '\r\nIT Engineer\r\n', 'M/S KBS International', '2016-07-29 18:03:42'),
(20, 'Fahim Chowdhury', 'fahim@gmail.com', '\r\nProgrammer\r\n', 'Flora Telecom Limited', '2016-07-29 18:05:22'),
(21, 'Fahim Chowdhury', 'fahim@gmail.com', '\r\nProgrammer\r\n', 'Flora Telecom Limited', '2016-07-29 18:05:31'),
(22, 'Fahim Chowdhury', 'fahim@gmail.com', '\r\nProgrammer\r\n', 'Flora Telecom Limited', '2016-07-29 18:05:44'),
(23, 'Fahim Chowdhury', 'fahim@gmail.com', '\r\nProgrammer\r\n', 'Flora Telecom Limited', '2016-07-29 18:06:51'),
(24, 'Fahim Chowdhury', 'fahim@gmail.com', '\r\nProgrammer\r\n', 'Flora Telecom Limited', '2016-07-29 18:07:03'),
(25, 'Fahim Chowdhury', 'fahim@gmail.com', '\r\nProgrammer\r\n', 'Flora Telecom Limited', '2016-07-29 18:10:28'),
(26, 'Fahim Chowdhury', 'fahim@gmail.com', '\r\nProgrammer\r\n', 'Flora Telecom Limited', '2016-07-29 18:10:36'),
(27, 'Fahim Chowdhury', 'fahim@gmail.com', '\r\nRegional Finance & Logistic Officer', 'FH Association', '2016-07-29 18:54:20'),
(28, 'Fahim Chowdhury', 'fahim@gmail.com', '\r\nRegional Finance & Logistic Officer', 'FH Association', '2016-07-29 19:31:06'),
(29, 'Fahim Chowdhury', 'fahim@gmail.com', '\r\nRegional Finance & Logistic Officer', 'FH Association', '2016-07-29 19:32:41'),
(30, 'Fahim Chowdhury', 'fahim@gmail.com', '\r\nTransport Officer', 'A Well Reputed 100% Export Oriented Garments Industry', '2016-07-29 19:37:40'),
(31, 'Fahim Chowdhury', 'fahim@gmail.com', '\r\nTransport Officer', 'A Well Reputed 100% Export Oriented Garments Industry', '2016-07-29 21:46:10');

-- --------------------------------------------------------

--
-- Table structure for table `jobs`
--

CREATE TABLE IF NOT EXISTS `jobs` (
  `jobId` int(11) NOT NULL AUTO_INCREMENT,
  `jobTitle` text NOT NULL,
  `jobDescription` text NOT NULL,
  `jobCategory` text NOT NULL,
  `jobLocation` text NOT NULL,
  `jobCompany` text NOT NULL,
  PRIMARY KEY (`jobId`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=14 ;

--
-- Dumping data for table `jobs`
--

INSERT INTO `jobs` (`jobId`, `jobTitle`, `jobDescription`, `jobCategory`, `jobLocation`, `jobCompany`) VALUES
(4, '\r\nRegional Finance & Logistic Officer', '\r\nRegional Finance & Logistic Officer\r\nFH Association\r\nView all jobs of this company\r\nJob Description / Responsibility\r\n\r\n    Type of job: Regular\r\n    Location: Putuakhali & Bourgana (Kalapara), Rajshahi (Godagari & Tanore) and Dhaka (Dhamri)\r\n    FH Association, an international Christian relief & development NGO . FH is currently accepting qualified candidates to serve as a Regional Finance & Logistic Officer (RFLO). The RFL Officer is serves FH Bangladesh by being responsible for regional finance and logistic tasks and support. The RFL Officer is directly supervised by the Finance & Admin Director, with the technical support of the Finance Manager and in coordination with the Regional Program Coordinator.\r\n    A successful candidate should have experience managing regional level program finance and logistics of an interacted program with regular field visits. The position locations are as above and required to stay in based office location.\r\n   ', 'Accounting/Finance', 'Bangladesh', 'FH Association'),
(5, 'Manager - Accounts', '\r\n    He/ She incumbent should be capable of maintaining/ handling the entire accounts of the health center including banking functions independently.\r\n    Maintain & preparing all kinds of vouchers.\r\n    Enter transaction in to the accounting software.\r\n    Monthly/ annual accounts preparation.\r\n    Monthly/ annual financial report preparation.\r\n    Any other responsibility as and when assigned by the management\r\n', 'Accounting/Finance', 'Bangladesh', 'Medicare General Hospital'),
(6, '\r\nProgrammer\r\n', '\r\n    Banking Software Development.\r\n    Work in a Team\r\n    Development and Enhancement of NET Applications\r\n    Systems Requirements Analysis\r\n    Conduct Units Testing and UAT\r\n    System Design and Development\r\n    Preparation of Design Documents\r\n    Writing Complex Store procedure and PL SQL\r\n    ASP.Net & SQL server or Oracle database\r\n', 'IT/Telecommunication', 'India', 'Flora Telecom Limited'),
(7, '\r\nIT Engineer\r\n', '\r\n    Required Language : Linux, Network Skill\r\n    Other Language will be advantage : Ruby (on Rails) or Java / Apache / MySQL /\r\n    HTML / CSS / php/ Nginx\r\n    Capabilities : Server establishment, Performance tuning, Network establishment, VPN making,\r\n', 'IT/Telecommunication', 'UK', 'M/S KBS International'),
(8, 'Asst. Manager, Pre-Sales (Technology Sales Unit)', '\r\n    To Lead formal client/internal status meetings as well as informal day to day direction with project team throughout the implementation process including project initiation, requirements, development, testing, training, delivery, and transition to ongoing operations.\r\n    Residential and Commercial electrical wiring and load calculation.\r\n    Design and working with AutoCAD and Electrical CAD.\r\n    Capability of exploring new technology using only manual and online resources.\r\n    Candidates should have proven delivery experience with all phases of the systems development/implementation life cycle for the BMS industry, specifically in sales force management systems or other field based technology systems.\r\n    Able to recognize the potentials of a customer & generating sales volume from potential clients.\r\n    Strong strategic thinking and negotiation skills.\r\n    Develop creative sales technique and tactics to meet business goals.\r\n    Build positive working relationship with existing clients for repeat business.\r\n    Identify and contact potential customers for new business opportunities.\r\n    Able to independently design, configure and operate building control systems.\r\n    Able to tender and manage BMS, Home automation systems and Security and Sound system.\r\n    Able to provide detailed information and submittals to communicate design and operation to customers, consultants, companies'' and field installation team.\r\n    Able to act independently and coordinate with others to meet the intent of the project requirements.\r\n    Able to complete and manage the development of BMS software programs, commissioning and troubleshooting to ensure proper operations of the building control system.\r\n    Keeps management and customer informed of job progress and issues.\r\n    A good understanding of the programming and logic development process.\r\n    Keen interest for latest technology and dedication for research and development.\r\n    The applicants should have experience in Sales/Marketing.\r\n', 'Marketing/Sales', 'Saudi Arab', 'Ezzy Automations'),
(9, '\r\nTransport Officer', '\r\n    Making scheduled checks on vehicle and spare parts\r\n    Writing of vehicle damage repair estimates\r\n    Overhauling and replacing parts according to schedule.\r\n    Repairing broken or worn mechanical components\r\n    Maintaining repair and service records\r\n    Installing equipment, components and systems\r\n    Testing vehicles both before and after repair\r\n', 'Garments/Textile', 'UAE', 'A Well Reputed 100% Export Oriented Garments Industry'),
(10, '\r\nSenior Copywriter/Copy Supervisor(English)', '\r\n    The job is open for a Senior Copywriter / Copy Supervisor who is experienced in English, should have a solid advertising agency background. Should be able to develop concepts from brief, write TVCs, RDCs, Jingles and catchy headlines and relevant copy. Should be able to think out-of-the-box ideas to challenge the visual team.\r\n    Should believe in cutting edge advertising ideals and work as a good team member.\r\n', 'Media/Ad', 'USA', 'Advertising Agency'),
(11, '\r\n3D Graphics Designer\r\n', '\r\n    Create 3D photo realistic renderings of both exterior & interior and Digital Printing environments.\r\n    Multi-task and work on various projects at any given time, sometimes simultaneously.\r\n    Doing post production in Photoshop/Illustrator, 3D Max, Autocad, Maya etc.\r\n    Should be independent for creative the designs.\r\n', 'Media/Ad', 'Bangladesh', 'Super Sign Limited'),
(12, 'Graphic Designer\r\n', '\r\n    Organizing, Preparing, & modifying ad, flyer, brochures, stickers, label, banner, newsletter and other advertising material for marketing, graphical stickers & designing Brochures, leaflets, banners, festoons & occasion based pictures, etc\r\n    Prepare layout as per designers design and concept.\r\n', 'Design/Creative', 'Bangladesh', 'Nipun Crafts Ltd.'),
(13, 'Unani Consultant (Hakim) ', '\r\nJob Description / Responsibility\r\n\r\n    As stated by the department \r\n\r\nJob Nature\r\n\r\nFull-time\r\nEducational Requirements\r\n\r\n    Bachelor of Unani Medicine & Surgery (BUMS) \r\n\r\nExperience Requirements\r\n\r\n    3 to 5 year(s)\r\n    The applicants should have experience in the following area(s):\r\n    Medical Research, Pharmacist, Quality Controller /Assurance\r\n    The applicants should have experience in the following business area(s):\r\n    Pharmaceuticals\r\n\r\n', 'Medical/Pharma', 'India', 'Gramo Pharmaceuticals Ltd..');

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE IF NOT EXISTS `posts` (
  `postId` int(11) NOT NULL AUTO_INCREMENT,
  `postTitle` text NOT NULL,
  `postDescription` text NOT NULL,
  `postCategory` text NOT NULL,
  `postUserId` text NOT NULL,
  `postTime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `flag` int(11) NOT NULL,
  PRIMARY KEY (`postId`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=17 ;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`postId`, `postTitle`, `postDescription`, `postCategory`, `postUserId`, `postTime`, `flag`) VALUES
(6, 'Title 2', 'OOOO', 'Garments/Textile', '', '2016-07-25 20:25:02', 1),
(8, 'Title entry', 'sadasd', 'Media/Ad', 'Fahim Chowdhury', '2016-07-25 20:28:42', 1),
(9, 'New Post', 'Lets see if this still works', 'Design/Ceative', 'Fahim Chowdhury', '2016-07-28 10:00:15', 1),
(12, 'Reload', 'JJJJJJ', 'Design/Ceative', 'Lushan', '2016-07-28 11:28:41', 1),
(13, 'Dekhi', 'HHHHHHHHHHHHHHHHH', 'Garments/Textile', 'Lushan', '2016-07-28 12:30:51', 1),
(14, 'Hoilo na', 'sadad', 'Design/Ceative', 'Lushan', '2016-07-28 12:31:26', 1),
(15, 'Notun Last', 'Dekhi kaj kore ki na\r\n', 'IT/Telecommunication', 'Lushan', '2016-07-28 12:41:29', 1),
(16, 'NEEEEEEEEEEEEW', 'asdasda', 'Accounting/Finance', 'Fahim Chowdhury', '2016-07-29 19:38:07', 1);

-- --------------------------------------------------------

--
-- Table structure for table `resume`
--

CREATE TABLE IF NOT EXISTS `resume` (
  `resumeId` int(11) NOT NULL AUTO_INCREMENT,
  `name` text NOT NULL,
  `skill` text NOT NULL,
  `schoolName` text NOT NULL,
  `schoolGradYear` text NOT NULL,
  `schoolLocation` text NOT NULL,
  `collegeName` text NOT NULL,
  `collegeGradYear` text NOT NULL,
  `collegeLocation` text NOT NULL,
  `uniName` text NOT NULL,
  `uniGradYear` text NOT NULL,
  `uniLocation` text NOT NULL,
  `uniStudy` text NOT NULL,
  `career` text,
  `workHistory` text,
  `extraCurriculum` text,
  `userEmail` text NOT NULL,
  PRIMARY KEY (`resumeId`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `resume`
--

INSERT INTO `resume` (`resumeId`, `name`, `skill`, `schoolName`, `schoolGradYear`, `schoolLocation`, `collegeName`, `collegeGradYear`, `collegeLocation`, `uniName`, `uniGradYear`, `uniLocation`, `uniStudy`, `career`, `workHistory`, `extraCurriculum`, `userEmail`) VALUES
(2, 'Fahim Chowdhury', 'Excellent analytical skills, Cooperative team member, Outstanding interpersonal skills, Microsoft Office, Excel, PowerPoint proficiency, Energetic and organized', 'BES', '2011', 'CTG', 'MC', '2013', '', 'BRAC', '2018(Expected)', 'uniLocation', 'CSE', 'Sdfdsfs', 'value=value=value=Something,Something, Something, Something, Something, Something, Something,', 'value=value=value=Something,Something, Something, Something, Something, Something, Something,', 'fahim@gmail.com'),
(3, 'Mihodi Lushan', 'Computer proficient, Microsoft Office, Excel, PowerPoint proficiency, Strong verbal communication, Energetic and organized', 'X School', '2011', 'Dhaka', 'X College', '2013', 'Dhaka', 'BRAC', '2018(Expected)', 'Dhaka', 'CSE', 'FOCUS,FOCUS,FOCUS,FOCUS,FOCUS,FOCUS,FOCUS,FOCUS,FOCUS,FOCUS,', 'FOCUS,FOCUS,FOCUS,FOCUS,FOCUS,FOCUS,FOCUS,FOCUS,FOCUS,FOCUS,', 'FOCUS,FOCUS,FOCUS,FOCUS,FOCUS,FOCUS,FOCUS,FOCUS,FOCUS,FOCUS,', 'lushan@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `userId` int(11) NOT NULL AUTO_INCREMENT,
  `userName` text NOT NULL,
  `userEmail` text NOT NULL,
  `userPass` text NOT NULL,
  PRIMARY KEY (`userId`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`userId`, `userName`, `userEmail`, `userPass`) VALUES
(1, 'Fahim Chowdhury', 'fahim@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055'),
(2, 'Lushan', 'lushan@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
