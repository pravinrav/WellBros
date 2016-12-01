-- phpMyAdmin SQL Dump
-- version 3.4.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Nov 27, 2016 at 08:03 PM
-- Server version: 5.5.36
-- PHP Version: 5.4.27

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `playground16`
--

-- --------------------------------------------------------

--
-- Table structure for table `pams_account_information`
--

CREATE TABLE IF NOT EXISTS `pams_account_information` (
  `user_id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(50) NOT NULL,
  `password` varchar(256) NOT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=50 ;

--
-- Dumping data for table `pams_account_information`
--

INSERT INTO `pams_account_information` (`user_id`, `username`, `password`) VALUES
(1, 'pravin_r', 'myhealth'),
(2, 'seanco', 'baseballyoos'),
(3, 'baseballyoo', 'baseballyoo'),
(4, 'matt_cortese', 'dingleberry'),
(6, 'seanco', 'costplus'),
(7, 'pravin', '$1$.b5qtsKs$OBc2aERbSlZM1XYPobvKq1'),
(9, 'test1', '$1$e9LYxGlc$bYOmXIJ3cT7yXjh/hpIeT/'),
(10, 'ljklsdfjlskdjf', '$1$mwDyWCyq$BephvRkUhJ5auFXs/k2Qo/'),
(11, 'dingdong', '$1$kVFaAhar$OF2HCgdFBbU9a6JwnV5bW.'),
(12, 'din', '$1$nYDxI1tQ$PPP8oHYjRnTUqN1lx8oku.'),
(13, ' ', 'chLIJ4LoTM5Pc'),
(14, 'matt', 'chd245KvzSstE'),
(15, 'ding', 'ch4.Jp2s2sbqw'),
(16, 'lindy', 'chwa71ad8YqOk'),
(33, 'yomama', 'chI4bgPlwLZss'),
(34, 'tester', 'chx.8mWdSkyRM'),
(35, '1234', 'chA76QOi.f5VQ'),
(36, 'lindyanimal', 'chDtbE86MDQTY'),
(37, 'playground_user', 'chZu1Mpq0SWzc'),
(38, 'joe', 'chIe5sLKnEltw'),
(39, 'santycruze', 'chXrAPtXxqz8Y'),
(40, 'a', 'chDiSyR/mGRiE'),
(41, 'lzw_algorithm', 'ch0djivShD/7.'),
(43, 'minimum_spanning_tree', 'chesmO0jUGahU'),
(44, 'USERNAME', 'chymm2OaF1Zek'),
(45, 'radix_sort', 'chF0qcsUqD5P.'),
(46, 'Binary_Search', 'chntOBgrhSQdk'),
(47, 'bad', 'cht17I7IiA9dc'),
(48, 'joystick', 'ch6soMNfpOjbg'),
(49, 'bind', 'chYw.xHYSejTc');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;


-- phpMyAdmin SQL Dump
-- version 3.4.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Nov 27, 2016 at 08:03 PM
-- Server version: 5.5.36
-- PHP Version: 5.4.27

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `playground16`
--

-- --------------------------------------------------------

--
-- Table structure for table `pams_survey_attempts`
--

CREATE TABLE IF NOT EXISTS `pams_survey_attempts` (
  `survey_attempt_id` int(11) NOT NULL AUTO_INCREMENT,
  `survey_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  PRIMARY KEY (`survey_attempt_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=61 ;

--
-- Dumping data for table `pams_survey_attempts`
--

INSERT INTO `pams_survey_attempts` (`survey_attempt_id`, `survey_id`, `user_id`) VALUES
(1, 1, 1),
(2, 2, 4),
(3, 4, 4),
(4, 5, 4),
(5, 6, 2),
(6, 8, 2),
(7, 9, 3),
(8, 10, 3),
(9, 11, 2),
(10, 12, 14),
(11, 13, 14),
(12, 14, 14),
(13, 15, 14),
(14, 16, 14),
(15, 17, 15),
(16, 18, 15),
(17, 19, 15),
(18, 20, 15),
(19, 21, 15),
(20, 22, 17),
(21, 23, 17),
(22, 24, 18),
(23, 25, 18),
(24, 26, 17),
(25, 27, 17),
(26, 28, 17),
(27, 29, 17),
(28, 30, 17),
(29, 31, 17),
(30, 32, 17),
(31, 33, 26),
(32, 34, 26),
(33, 35, 27),
(34, 36, 27),
(35, 37, 27),
(36, 38, 27),
(37, 39, 29),
(38, 40, 29),
(39, 41, 36),
(40, 42, 17),
(41, 43, 39),
(42, 44, 39),
(43, 45, 40),
(44, 46, 40),
(45, 47, 41),
(46, 48, 41),
(47, 49, 41),
(48, 50, 41),
(49, 51, 41),
(50, 52, 41),
(51, 53, 43),
(52, 55, 41),
(53, 56, 41),
(54, 57, 41),
(55, 58, 41),
(56, 59, 44),
(57, 60, 47),
(58, 61, 48),
(59, 62, 48),
(60, 63, 48);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;


-- phpMyAdmin SQL Dump
-- version 3.4.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Nov 27, 2016 at 08:02 PM
-- Server version: 5.5.36
-- PHP Version: 5.4.27

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `playground16`
--

-- --------------------------------------------------------

--
-- Table structure for table `pams_surveys`
--

CREATE TABLE IF NOT EXISTS `pams_surveys` (
  `survey_id` int(11) NOT NULL AUTO_INCREMENT,
  `date_added` date NOT NULL,
  `time_added` time NOT NULL,
  `mood` int(11) NOT NULL,
  `stress` int(11) NOT NULL,
  `energy` int(11) NOT NULL,
  `hours_slept` int(11) NOT NULL,
  `minutes_exercise` int(11) NOT NULL,
  `why_feel` text NOT NULL,
  `why_stressed` text NOT NULL,
  `diet` text NOT NULL,
  PRIMARY KEY (`survey_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=64 ;

--
-- Dumping data for table `pams_surveys`
--

INSERT INTO `pams_surveys` (`survey_id`, `date_added`, `time_added`, `mood`, `stress`, `energy`, `hours_slept`, `minutes_exercise`, `why_feel`, `why_stressed`, `diet`) VALUES
(1, '2016-10-13', '13:38:08', 10, 1, 10, 9, 30, 'I feel so great.', 'I am not stressed.', 'I ate bananas. '),
(2, '2016-10-14', '12:45:51', 2, 3, 4, 4, 2, 'lief is awsome', 'sckoll', 'cheitos'),
(5, '2016-10-14', '12:51:41', 8, 5, 6, 3, 45, 'i want to be a doctor but i am homeless', 'my dog has cancer', 'i ate my cat'),
(6, '2016-10-14', '12:54:22', 1, 1, 1, 0, 1, 'i have been awake for 10 days straight', 'i have to stay awake for 19 more days to break the world record', 'i eat nothing but toenails bc it''s a world record'),
(7, '2016-10-14', '12:55:48', 7, 3, 9, 12, 360, 'i am Mr. Universe winner Arnold Schwarzenegger ', 'not stressed - life is great', 'i eat nothing but workout supplement powder'),
(8, '2016-10-14', '12:57:26', 4, 9, 2, 234, 0, 'i just woke up from a 10 day sleep', 'i got fired for missing 10 days of work', 'i haven''t eaten anything in 10 days'),
(9, '2016-10-14', '12:59:48', 10, 1, 10, 1, 0, 'I''m a guy who LOVES getting no sleep or exercise', 'I am not stressed', 'I''ve been eating cheetos'),
(10, '2010-08-13', '11:11:11', 6, 9, 4, 25, 69, 'I chugged 20 red bulls.', 'I dont know what red bull is made of.', 'Only red bull.'),
(11, '2016-11-10', '12:57:15', 6, 5, 5, 6, 30, 'slept too little', 'slept too little', 'nothing'),
(12, '2016-11-15', '09:16:10', 7, 10, 4, 18, 170, 'sdfsdf', '', ''),
(13, '2016-11-15', '09:17:03', 7, 10, 4, 18, 170, 'sdfsdf', '', ''),
(14, '2016-11-15', '09:18:57', 4, 10, 4, 18, 170, 'sdfsdf', '', ''),
(15, '2016-11-15', '09:19:03', 10, 10, 4, 18, 170, 'sdfsdf', '', ''),
(16, '2016-11-15', '09:19:12', 1, 10, 4, 18, 170, 'sdfsdf', '', ''),
(17, '2016-11-15', '09:20:36', 10, 1, 1, 0, 0, '', '', ''),
(18, '2016-11-15', '09:20:43', 1, 1, 1, 0, 0, '', '', ''),
(19, '2016-11-15', '09:20:59', 9, 1, 1, 0, 0, '', '', ''),
(20, '2016-11-15', '09:27:29', 1, 1, 1, 0, 0, '', '', ''),
(21, '2016-11-15', '09:27:39', 7, 1, 1, 0, 0, '', '', ''),
(22, '2016-11-16', '11:28:53', 1, 1, 1, 0, 0, '', '', ''),
(23, '2016-11-16', '11:29:03', 10, 1, 1, 0, 0, '', '', ''),
(24, '2016-11-16', '11:30:51', 10, 1, 1, 19, 240, 'Because i feel great.', 'not stressed', ' Celery. '),
(25, '2016-11-16', '11:31:14', 8, 1, 1, 0, 0, 'asdf', 'asdfs', 'asdfas'),
(26, '2016-11-16', '11:44:06', 10, 10, 2, 3, 0, 'just gota  new puppuy', 'the new uppuupy has tumours', 'brocli'),
(27, '2016-11-16', '11:45:37', 4, 10, 2, 3, 0, 'just gota  new puppuy', 'the new uppuupy has tumours', 'brocli'),
(28, '2016-11-16', '11:45:48', 9, 1, 1, 0, 0, '', '', ''),
(29, '2016-11-16', '11:45:59', 4, 1, 1, 0, 0, '', '', ''),
(30, '2016-11-17', '13:10:38', 1, 1, 1, 0, 0, '', '', ''),
(31, '2016-11-17', '13:25:54', 1, 1, 1, 0, 0, '', '', 'poo'),
(32, '2016-11-17', '13:26:03', 7, 1, 1, 0, 0, '', '', ''),
(33, '2016-11-17', '13:26:44', 7, 1, 1, 0, 0, 'asdf', 'asdf', 'asdfasd'),
(34, '2016-11-17', '13:33:34', 1, 1, 1, 0, 0, '', '', ''),
(35, '2016-11-17', '14:50:44', 8, 8, 8, 0, 240, 'Ok', 'hehe', 'Celery'),
(36, '2016-11-17', '14:51:16', 4, 1, 1, 0, 0, '', '', ''),
(37, '2016-11-17', '14:53:35', 10, 1, 1, 0, 0, '', '', ''),
(38, '2016-11-17', '14:58:41', 1, 1, 1, 0, 0, '', '', ''),
(39, '2016-11-17', '20:53:49', 5, 8, 3, 6, 30, 'because of Thadian', 'because of Poocha', 'rasam'),
(40, '2016-11-17', '20:54:26', 10, 1, 1, 0, 0, '', '', ''),
(41, '2016-11-18', '12:48:27', 7, 10, 5, 9, 170, 'because of matt', 'not much', 'Hello'),
(42, '2016-11-22', '12:03:52', 1, 1, 1, 0, 0, '', '', ''),
(43, '2016-11-24', '08:32:29', 9, 4, 9, 8, 140, 'cause  i am talking to my bro', 'cause i have exams tommorow', 'chappathis'),
(44, '2016-11-24', '08:34:06', 10, 1, 9, 8, 140, 'i dont know', 'exams', 'chappathis'),
(45, '2016-11-27', '17:35:42', 1, 1, 1, 0, 0, '', '', ''),
(46, '2016-11-27', '18:00:20', 7, 1, 1, 0, 0, '', '', ''),
(47, '2016-11-27', '18:08:41', 7, 10, 5, 0, 0, '', '', ''),
(48, '2016-11-27', '18:09:02', 10, 1, 3, 0, 0, '', '', ''),
(49, '2016-11-27', '18:35:53', 5, 2, 9, 7, 150, '', '', ''),
(50, '2016-11-27', '18:43:31', 1, 1, 1, 0, 0, '', '', ''),
(51, '2016-11-27', '18:45:28', 1, 1, 1, 12, 140, '', '', ''),
(52, '2016-11-27', '18:57:52', 10, 10, 10, 24, 240, '', '', ''),
(53, '2016-11-27', '19:13:42', 1, 1, 1, 0, 0, '', '', ''),
(54, '2016-11-27', '19:15:19', 1, 1, 1, 0, 0, '', '', ''),
(55, '2016-11-27', '19:20:47', 1, 1, 1, 0, 0, '', '', ''),
(56, '2016-11-27', '19:23:27', 7, 7, 7, 15, 20, '', '', ''),
(57, '2016-11-27', '19:23:59', 1, 1, 1, 0, 0, '', '', ''),
(58, '2016-11-27', '19:24:07', 1, 1, 1, 0, 0, '', '', ''),
(59, '2016-11-27', '19:33:36', 1, 1, 1, 0, 0, '', '', ''),
(60, '2016-11-27', '19:46:52', 1, 1, 1, 0, 0, '', '', ''),
(61, '2016-11-27', '19:53:11', 1, 1, 1, 0, 0, '', '', ''),
(62, '2016-11-27', '19:55:17', 1, 1, 1, 0, 0, '', '', ''),
(63, '2016-11-27', '19:56:49', 1, 1, 1, 0, 0, '', '', '');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
