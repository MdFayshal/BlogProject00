-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jan 10, 2022 at 10:11 AM
-- Server version: 8.0.27
-- PHP Version: 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `blogproject`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_info`
--

DROP TABLE IF EXISTS `admin_info`;
CREATE TABLE IF NOT EXISTS `admin_info` (
  `id` int NOT NULL AUTO_INCREMENT,
  `admin_name` varchar(60) NOT NULL,
  `admin_email` varchar(60) NOT NULL,
  `admin_pass` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `admin_info`
--

INSERT INTO `admin_info` (`id`, `admin_name`, `admin_email`, `admin_pass`) VALUES
(2, 'admin', 'admin@gmail.com', '21232f297a57a5a743894a0e4a801fc3');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

DROP TABLE IF EXISTS `category`;
CREATE TABLE IF NOT EXISTS `category` (
  `cat_id` int NOT NULL AUTO_INCREMENT,
  `cat_name` varchar(255) NOT NULL,
  `cat_des` varchar(255) NOT NULL,
  PRIMARY KEY (`cat_id`)
) ENGINE=MyISAM AUTO_INCREMENT=23 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`cat_id`, `cat_name`, `cat_des`) VALUES
(19, 'Nature', 'this is a cat for nature\r\n'),
(15, 'Games', 'This catagory contain games'),
(21, 'Dress', 'this is dresses                ');

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

DROP TABLE IF EXISTS `posts`;
CREATE TABLE IF NOT EXISTS `posts` (
  `post_id` int NOT NULL AUTO_INCREMENT,
  `post_title` varchar(150) NOT NULL,
  `post_content` longtext NOT NULL,
  `post_img` varchar(255) NOT NULL,
  `post_ctg` int NOT NULL,
  `post_author` varchar(60) NOT NULL,
  `post_date` date NOT NULL,
  `post_comment_count` int NOT NULL,
  `post_summery` varchar(200) NOT NULL,
  `post_tag` varchar(255) NOT NULL,
  `post_status` tinyint NOT NULL,
  PRIMARY KEY (`post_id`)
) ENGINE=MyISAM AUTO_INCREMENT=39 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`post_id`, `post_title`, `post_content`, `post_img`, `post_ctg`, `post_author`, `post_date`, `post_comment_count`, `post_summery`, `post_tag`, `post_status`) VALUES
(36, 'Donec Tincidunt Leo', 'Donec Tincidunt LeoDonec Tincidunt LeoDonec Tincidunt LeoDonec Tincidunt LeoDonec Tincidunt LeoDonec Tincidunt LeoDonec Tincidunt LeoDonec Tincidunt LeoDonec Tincidunt LeoDonec Tincidunt LeoDonec Tincidunt LeoDonec Tincidunt LeoDonec Tincidunt LeoDonec Tincidunt LeoDonec Tincidunt LeoDonec Tincidunt LeoDonec Tincidunt LeoDonec Tincidunt LeoDonec Tincidunt LeoDonec Tincidunt LeoDonec Tincidunt LeoDonec Tincidunt Leo', 'banner-item-05.jpg', 21, 'Admin', '2022-01-10', 3, 'Post summer for test', 'Mauris Ac Dolor OrnareMauris Ac Dolor Ornare', 1),
(37, 'Suspendisse Et Metus', 'Suspendisse Et MetusSuspendisse Et MetusSuspendisse Et MetusSuspendisse Et MetusSuspendisse Et MetusSuspendisse Et MetusSuspendisse Et MetusSuspendisse Et MetusSuspendisse Et MetusSuspendisse Et MetusSuspendisse Et MetusSuspendisse Et MetusSuspendisse Et MetusSuspendisse Et MetusSuspendisse Et MetusSuspendisse Et MetusSuspendisse Et MetusSuspendisse Et MetusSuspendisse Et MetusSuspendisse Et MetusSuspendisse Et MetusSuspendisse Et MetusSuspendisse Et Metus', 'banner-item-06.jpg', 21, 'Admin', '2022-01-10', 3, ' Ipsa ipsum commodi facere, distinctio placeat accusantium aperiam deserunt aspernatur sequi vel dolor? Reprehenderit deserunt quasi explicabo voluptatem quo maxime minima aliquid, nesciunt aperiam at', 'games goods play online', 1),
(38, 'Thist is a blog post test', 'You can browse different tags such as multi-page, resume, video, etc. to see more CSS templates. Sed hendrerit rutrum arcu, non malesuada nisi. Sed id facilisis turpis. Donec justo elit, dapibus vel ultricies in, molestie sit amet risus. In nunc augue, rhoncus sed libero et, tincidunt tempor nisl. Donec egestas, quam eu rutrum ultrices, sapien ante posuere nisl, ac eleifend eros orci vel ante. Pellentesque vitae eleifend velit. Etiam blandit felis sollicitudin vestibulum feugiat.\r\n\r\nDonec tincidunt leo nec magna gravida varius. Suspendisse felis orci, egestas ac sodales quis, venenatis et neque. Vivamus facilisis dignissim arcu et blandit. Maecenas finibus dui non pulvinar lacinia. Ut lacinia finibus lorem vel porttitor. Suspendisse et metus nec libero ultrices varius eget in risus. Cras id nibh at erat pulvinar malesuada et non ipsum. Suspendisse id ipsum leo.', 'banner-item-03.jpg', 15, 'Admin', '2022-01-10', 3, 'Nullam at quam ut lacus aliquam tempor vel sed ipsum. Donec pellentesque tincidunt imperdiet. Mauris sit amet justo vulputate, cursus massa congue, vestibulum odio. Aenean elit nunc, gravida in erat s', 'games goods play online', 1),
(34, 'Donec Tincidunt Leo', 'Nullam nibh mi, tincidunt sed sapien ut, rutrum hendrerit velit. Integer auctor a mauris sit amet eleifend.Nullam nibh mi, tincidunt sed sapien ut, rutrum hendrerit velit. Integer auctor a mauris sit amet eleifend.Nullam nibh mi, tincidunt sed sapien ut, rutrum hendrerit velit. Integer auctor a mauris sit amet eleifend.Nullam nibh mi, tincidunt sed sapien ut, rutrum hendrerit velit. Integer auctor a mauris sit amet eleifend.Nullam nibh mi, tincidunt sed sapien ut, rutrum hendrerit velit. Integer auctor a mauris sit amet eleifend.', 'banner-item-03.jpg', 15, 'Admin', '2022-01-10', 3, ' Ipsa ipsum commodi facere, distinctio placeat accusantium aperiam deserunt aspernatur sequi vel dolor? Reprehenderit deserunt quasi explicabo voluptatem quo maxime minima aliquid, nesciunt aperiam at', 'games goods play online', 1),
(35, 'Mauris Ac Dolor Ornare', 'Mauris Ac Dolor OrnareMauris Ac Dolor OrnareMauris Ac Dolor OrnareMauris Ac Dolor OrnareMauris Ac Dolor OrnareMauris Ac Dolor OrnareMauris Ac Dolor OrnareMauris Ac Dolor OrnareMauris Ac Dolor OrnareMauris Ac Dolor OrnareMauris Ac Dolor OrnareMauris Ac Dolor OrnareMauris Ac Dolor OrnareMauris Ac Dolor OrnareMauris Ac Dolor OrnareMauris Ac Dolor OrnareMauris Ac Dolor OrnareMauris Ac Dolor OrnareMauris Ac Dolor OrnareMauris Ac Dolor Ornare', 'banner-item-04.jpg', 15, 'Admin', '2022-01-10', 3, ' Ipsa ipsum commodi facere, distinctio placeat accusantium aperiam deserunt aspernatur sequi vel dolor? Reprehenderit deserunt quasi explicabo voluptatem quo maxime minima aliquid, nesciunt aperiam at', 'games goods play online', 1),
(32, 'Donec Tincidunt Leo', 'Donec Tincidunt LeoDonec Tincidunt LeoDonec Tincidunt LeoDonec Tincidunt LeoDonec Tincidunt LeoDonec Tincidunt LeoDonec Tincidunt LeoDonec Tincidunt LeoDonec Tincidunt LeoDonec Tincidunt LeoDonec Tincidunt LeoDonec Tincidunt LeoDonec Tincidunt LeoDonec Tincidunt LeoDonec Tincidunt LeoDonec Tincidunt LeoDonec Tincidunt LeoDonec Tincidunt LeoDonec Tincidunt LeoDonec Tincidunt Leo', 'banner-item-01.jpg', 19, 'Admin', '2022-01-10', 3, ' Ipsa ipsum commodi facere, distinctio placeat accusantium aperiam deserunt aspernatur sequi vel dolor? Reprehenderit deserunt quasi explicabo voluptatem quo maxime minima aliquid, nesciunt aperiam at', 'games goods play online', 1),
(33, 'Suspendisse Et Metus', 'Suspendisse Et MetusSuspendisse Et MetusSuspendisse Et MetusSuspendisse Et MetusSuspendisse Et MetusSuspendisse Et MetusSuspendisse Et MetusSuspendisse Et MetusSuspendisse Et MetusSuspendisse Et MetusSuspendisse Et MetusSuspendisse Et MetusSuspendisse Et MetusSuspendisse Et MetusSuspendisse Et MetusSuspendisse Et MetusSuspendisse Et MetusSuspendisse Et MetusSuspendisse Et MetusSuspendisse Et MetusSuspendisse Et MetusSuspendisse Et MetusSuspendisse Et MetusSuspendisse Et Metus', 'banner-item-02.jpg', 19, 'Admin', '2022-01-10', 3, 'this is a short summery', 'games goods play online', 1);

-- --------------------------------------------------------

--
-- Stand-in structure for view `post_with_ctg`
-- (See below for the actual view)
--
DROP VIEW IF EXISTS `post_with_ctg`;
CREATE TABLE IF NOT EXISTS `post_with_ctg` (
`cat_id` int
,`cat_name` varchar(255)
,`post_author` varchar(60)
,`post_comment_count` int
,`post_content` longtext
,`post_date` date
,`post_id` int
,`post_img` varchar(255)
,`post_status` tinyint
,`post_summery` varchar(200)
,`post_tag` varchar(255)
,`post_title` varchar(150)
);

-- --------------------------------------------------------

--
-- Structure for view `post_with_ctg`
--
DROP TABLE IF EXISTS `post_with_ctg`;

DROP VIEW IF EXISTS `post_with_ctg`;
CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `post_with_ctg`  AS SELECT `posts`.`post_id` AS `post_id`, `posts`.`post_title` AS `post_title`, `posts`.`post_content` AS `post_content`, `posts`.`post_img` AS `post_img`, `posts`.`post_author` AS `post_author`, `posts`.`post_date` AS `post_date`, `posts`.`post_comment_count` AS `post_comment_count`, `posts`.`post_summery` AS `post_summery`, `posts`.`post_tag` AS `post_tag`, `posts`.`post_status` AS `post_status`, `category`.`cat_id` AS `cat_id`, `category`.`cat_name` AS `cat_name` FROM (`posts` join `category` on((`posts`.`post_ctg` = `category`.`cat_id`))) ;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
