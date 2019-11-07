-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Nov 07, 2019 at 08:53 AM
-- Server version: 5.7.19
-- PHP Version: 5.6.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `csesociety`
--

-- --------------------------------------------------------

--
-- Table structure for table `achievment`
--

DROP TABLE IF EXISTS `achievment`;
CREATE TABLE IF NOT EXISTS `achievment` (
  `achvid` int(11) NOT NULL AUTO_INCREMENT,
  `achvtitle` text NOT NULL,
  `achvstatus` text NOT NULL,
  `achwriter` text NOT NULL,
  `achvdate` date NOT NULL,
  `writerid` int(11) DEFAULT NULL,
  PRIMARY KEY (`achvid`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `achievment`
--

INSERT INTO `achievment` (`achvid`, `achvtitle`, `achvstatus`, `achwriter`, `achvdate`, `writerid`) VALUES
(1, 'Hackathon champion', 'we were the champion of hackathon', 'arman', '2018-08-14', 12),
(2, 'IUT IT business competition 2017', 'Wanderer is the champion of IUT IT business competition 2017 \r\nIt would not have been possible without the constant support of Forhad Rabbi sir \r\nThanks a lot sir, for the last couple of months you have shown more faith on our idea than we ourselves did\r\nAnd finally Raqibul Hasan Montaser Hamid , Tanvir Nihal You and darpan islam congrats on your brilliant success.\r\nHope we do more great works in the future.', 'hr emon', '2018-08-14', 11),
(3, 'test', 'this is a demo', 'hr emon', '2018-08-14', 11),
(5, 'test1 ', 'test2', 'arman', '2018-09-09', 12);

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

DROP TABLE IF EXISTS `admin`;
CREATE TABLE IF NOT EXISTS `admin` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(500) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `email`, `password`) VALUES
(1, 'emon', 'emon@mail.com', '1234');

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

DROP TABLE IF EXISTS `customers`;
CREATE TABLE IF NOT EXISTS `customers` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `first_name` varchar(50) NOT NULL,
  `last_name` varchar(50) NOT NULL,
  `user_name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `user_pass` varchar(256) NOT NULL,
  `user_prof` varchar(50) DEFAULT NULL,
  `user_vote` tinyint(1) DEFAULT '0',
  `logged_in` int(11) DEFAULT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`ID`, `first_name`, `last_name`, `user_name`, `email`, `user_pass`, `user_prof`, `user_vote`, `logged_in`) VALUES
(11, 'habibur', 'rahaman', 'hr emon', 'hremon331046@gmail.com', '$2y$10$Y..vZ9K5Xmkut4kXZ4nJjOlnEbjT79yDQdOaCA0tNPpS.T5fSenlO', 'Student', 1, 0),
(12, 'arman', 'ashik', 'arman', 'arman@gmail.com', '$2y$10$e99S63e70E1PrPTVccbvZe.vbJA1ptTBcu6lkZruOL3qa6L71kJl6', 'Student', 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `election`
--

DROP TABLE IF EXISTS `election`;
CREATE TABLE IF NOT EXISTS `election` (
  `publish` int(11) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `election`
--

INSERT INTO `election` (`publish`) VALUES
(1);

-- --------------------------------------------------------

--
-- Table structure for table `tableblogs`
--

DROP TABLE IF EXISTS `tableblogs`;
CREATE TABLE IF NOT EXISTS `tableblogs` (
  `regno` int(11) NOT NULL,
  `username` varchar(50) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `status` text,
  `date` date DEFAULT NULL,
  `postid` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`postid`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tableblogs`
--

INSERT INTO `tableblogs` (`regno`, `username`, `email`, `status`, `date`, `postid`) VALUES
(12, 'arman', 'Artificial intelligence', 'Artificial intelligence (AI), sometimes called machine intelligence, is intelligence demonstrated by machines, in contrast to the natural intelligence displayed by humans and other animals. In computer science AI research is defined as the study of \"intelligent agents\": any device that perceives its environment and takes actions that maximize its chance of successfully achieving its goals.[1] Colloquially, the term \"artificial intelligence\" is applied when a machine mimics \"cognitive\" functions that humans associate with other human minds, such as \"learning\" and \"problem solving\".[2] ', '2018-08-14', 1),
(11, 'hr emon', 'machine learning', 'The name machine learning was coined in 1959 by Arthur Samuel.[2] Evolved from the study of pattern recognition and computational learning theory in artificial intelligence,[3] machine learning explores the study and construction of algorithms that can learn from and make predictions on data[4] â€“ such algorithms overcome following strictly static program instructions by making data-driven predictions or decisions,[5]:2 through building a model from sample inputs. Machine learning is employed in a range of computing tasks where designing and programming explicit algorithms with good performance is difficult or infeasible; example applications include email filtering, detection of network intruders or malicious insiders working towards a data breach,[6] optical character recognition (OCR),[7] learning to rank, and computer vision. ', '2018-08-14', 2),
(12, 'arman', 'Data science', 'Data science is an interdisciplinary field that uses scientific methods, processes, algorithms and systems to extract knowledge and insights from data in various forms, both structured and unstructured,[1][2] similar to data mining.\r\n\r\nData science is a \"concept to unify statistics, data analysis, machine learning and their related methods\" in order to \"understand and analyze actual phenomena\" with data.[3] It employs techniques and theories drawn from many fields within the context of mathematics, statistics, information science, and computer science. ', '2018-08-14', 3),
(11, 'hr emon', 'test', 'this is a demo.', '2018-08-14', 4),
(12, 'arman', 'sad', 'sdadasdas', '2018-09-09', 6);

-- --------------------------------------------------------

--
-- Table structure for table `tablenews`
--

DROP TABLE IF EXISTS `tablenews`;
CREATE TABLE IF NOT EXISTS `tablenews` (
  `id` int(110) NOT NULL AUTO_INCREMENT,
  `headline` varchar(500) DEFAULT NULL,
  `story` text,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tablenews`
--

INSERT INTO `tablenews` (`id`, `headline`, `story`) VALUES
(1, 'Eid Vacation', 'The eid vacation will start from 15 august .it will end in 2nd september .and the regular class will start from 3rd september'),
(2, 'sfdf', '123'),
(3, 'sfdf', 'asdd'),
(4, 'sad', 'asd'),
(5, 'some test', 'test ok'),
(6, 'test', 'sagnhxaghxs');

-- --------------------------------------------------------

--
-- Table structure for table `voteforags`
--

DROP TABLE IF EXISTS `voteforags`;
CREATE TABLE IF NOT EXISTS `voteforags` (
  `ags_reg` int(11) NOT NULL,
  `ags_name` text NOT NULL,
  `ags_image` longblob,
  `vote_count_for_ags` int(11) NOT NULL,
  PRIMARY KEY (`ags_reg`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `voteforags`
--

INSERT INTO `voteforags` (`ags_reg`, `ags_name`, `ags_image`, `vote_count_for_ags`) VALUES
(2015331027, 'mahfuz rahaman', NULL, 11),
(2015331044, 'sheikh junayed', NULL, 21),
(2015331015, 'Anik anwar', NULL, 17);

-- --------------------------------------------------------

--
-- Table structure for table `voteforgs`
--

DROP TABLE IF EXISTS `voteforgs`;
CREATE TABLE IF NOT EXISTS `voteforgs` (
  `gs_reg` int(11) NOT NULL,
  `gs_name` text NOT NULL,
  `gs_image` longblob,
  `vote_count_for_gs` int(11) NOT NULL,
  PRIMARY KEY (`gs_reg`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `voteforgs`
--

INSERT INTO `voteforgs` (`gs_reg`, `gs_name`, `gs_image`, `vote_count_for_gs`) VALUES
(2015331032, 'monirul sohel', NULL, 14),
(2015331065, 'mahabub rishad', NULL, 11),
(2015331064, 'sumit singha', NULL, 7);

-- --------------------------------------------------------

--
-- Table structure for table `voteforpresident`
--

DROP TABLE IF EXISTS `voteforpresident`;
CREATE TABLE IF NOT EXISTS `voteforpresident` (
  `president_reg` varchar(15) NOT NULL,
  `president_name` varchar(50) NOT NULL,
  `president_image` longblob,
  `vote_count_for_president` int(11) NOT NULL,
  PRIMARY KEY (`president_reg`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `voteforpresident`
--

INSERT INTO `voteforpresident` (`president_reg`, `president_name`, `president_image`, `vote_count_for_president`) VALUES
('2015331046', 'habibur rahaman', NULL, 21),
('2015331055', 'Akash saha', NULL, 16),
('2015331060', 'Arman malik', NULL, 10);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
