-- phpMyAdmin SQL Dump
-- version 4.8.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 17, 2018 at 11:42 AM
-- Server version: 10.1.31-MariaDB
-- PHP Version: 7.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `project`
--
CREATE DATABASE IF NOT EXISTS `project` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_520_ci;
USE `project`;

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE IF NOT EXISTS `admins` (
  `adminid` int(15) NOT NULL,
  `adminfullname` varchar(100) COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `role` varchar(30) COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `phone` varchar(20) COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `email` varchar(100) COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `password` text COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `adminimg` longblob NOT NULL,
  PRIMARY KEY (`adminid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`adminid`, `adminfullname`, `role`, `phone`, `email`, `password`, `adminimg`) VALUES
(66, 'test', 'manager', '', '', '$2y$10$4961uCy6AXjUig991gkrNued6ZJvlmpTIBW.dSCb/RAGSSmQVrLt2', ''),
(456, 'aviv go', 'manager', '09-89757575', 'go@m.com', '1', 0x617669762e706e67),
(5453, 'pok', 'manager', 'pok', 'pok@wer', '$2y$10$InDjWOf3iCU6xnS6u1QkX.NiSxCGdzYMhXa7/rEfKMbbDIAFH0zpW', 0x706f6b2e6a7067),
(54745, 'dddfgg', 'manager', '08080', 'dddfggg', '$2y$10$qvMSDqzIe0BJ6rA/aaJCzOPV6NApIUwXw7xT.q/hEwI7EFWtyNihK', 0x61666767672e6a7067),
(12121212, 'hash nash', 'manager', '03-5656589', 'has@nash.com', '1', 0x686173682e6a7067),
(101010101, 'boss', 'owner', '1800-100-100', 'boss@king.com', '$2y$10$KRRDUhDFpACl9QMgABW19OIvOdm.LObbEJmsGIsDTE.ei.nv9yy7e', 0x616c626572742e6a7067),
(123456789, 'king kong', 'manager', '0899979', 'king@kong.com', '1', 0x6a2e706e67),
(159159159, 'pass word', 'manager', '09090909555', 'pass@word.com', '1', 0x706173732e6a7067),
(222222222, 'mani man', 'manager', '052-2222222', 'mani@man.com', '$2y$10$lwhyAOtWzJb4btG9nFlADuoaxb7dUqaxeX1FY1KyFBLqDWEg1E8U.', 0x68616972647564652e706e67),
(345563662, 'Malex mex', 'sales', '064-77488848', 'Malex@mex.com', '$2y$10$U7h2dlprMbo/VPhap3xg5OYwcf2coHW2qiKzrJ6bnKIH7DCAcky7u', 0x6d616c65782e6a7067),
(444444444, 'funky jim', 'manager', '09-9876543', 'fun@key.com', '1', 0x66756e6b795f6a696d2e706e67),
(543543543, 'chinga lee', 'sales', '5485y8934', 'r@yellowx.com', '1', 0x617369616e5f776f6d616e2e706e67),
(567658768, 'de mayo', 'manager', '09888', '', '1', 0x7072696e63652e6a7067),
(647383838, 'Baruch raichel', 'sales', '056-7373727', 'Baruch@raichel.com', '$2y$10$vfebyit4FiAx2bCw5nPzi.lw0p1Y5E531WYgNbNUgYp.Qc4OsV3bG', 0x6a2e706e67),
(678687878, 'hezi', 'manager', '', '', '1', 0x68657a692e706e67),
(2147483647, 'sall sol', 'sales', '0788876', 'sall@sol.com', '1', 0x6361745f776f6d616e2e706e67);

-- --------------------------------------------------------

--
-- Table structure for table `courses`
--

CREATE TABLE IF NOT EXISTS `courses` (
  `courseid` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `courseimg` text COLLATE utf8mb4_unicode_520_ci NOT NULL,
  PRIMARY KEY (`courseid`)
) ENGINE=InnoDB AUTO_INCREMENT=37 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;

--
-- Dumping data for table `courses`
--

INSERT INTO `courses` (`courseid`, `name`, `description`, `courseimg`) VALUES
(2, 'Math', '   psum is simply dummy text of the printing and typesetting industry. Lorem Ipsum. Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum.   Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum.              ', 'math.png'),
(3, 'Englishes', '        Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum. Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum.   Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum.              ', 'english.png'),
(6, 'Blacksmith', 'cool            Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum. Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum.   Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum.                               ', 'blacksmith.jpg'),
(7, 'Electricity', '    Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum. Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum.   Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum.      ', 'electricity.jpg'),
(8, 'System', '  Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum. Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum.   Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum.  ', 'system.jpg'),
(9, 'Security', '  Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum. Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum.   Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum.  ', 'security.jpg'),
(10, 'Cooking', '  Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum. Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum.   Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum.  ', 'cooking.jpg'),
(11, 'Pro cooking', '  Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum. Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum.   Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum.  ', 'procooking.png'),
(12, 'Mastercooking', '   eating many cookies  Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum. Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum.   Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum.      ', 'mastercooking.png'),
(19, 'Eating', '  eating and grepsing  Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum. Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum.   Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum.    ', 'eating.jpg'),
(20, 'pointing', ' hand rase and point    Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum. Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum.   Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum.', 'pointing.png'),
(21, 'fishing', ' extreme fishing   Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum. Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum.   Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum.', 'fishing.png'),
(22, 'horse riding', ' horse and stuff   Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum. Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum.   Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum.', 'horseriding.png'),
(23, 'machine ', ' machine  Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum. Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum.   Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum.', 'machine.png'),
(24, 'traindriver', ' train driving   Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum. Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum.   Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum.', 'traindriver.jpg'),
(26, 'plumbing', ' open whats close   Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum. Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum.   Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum.', 'plumbing.png'),
(27, 'gambling', ' batting  Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum. Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum.   Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum. ', 'gambling.png'),
(28, 'jQury', ' bvjsdvkbkjdsvbjSD V  Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum. Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum.   Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum. ', 'jquery.png'),
(32, 'Qa', '        Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum. Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum.   Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum.                    ', 'images (10).jpg'),
(34, 'Eat And Run', ' you Eat And then you Run  ', 'images (2).png'),
(35, 'Sleep Swimming', 'swim while you sleep swim while you sleepswim while you sleepswim while you sleepswim while you sleepswim while you sleepswim while you sleepswim while you sleepswim while you sleep', 'sleepSwim.jpg'),
(36, 'Chiken Grill', 'Grill Chiken Chiken Chiken Chiken Chiken Chiken Chiken Chiken ', 'grill.png');

-- --------------------------------------------------------

--
-- Table structure for table `studentcourses`
--

CREATE TABLE IF NOT EXISTS `studentcourses` (
  `id` int(15) NOT NULL,
  `courseid` int(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;

--
-- Dumping data for table `studentcourses`
--

INSERT INTO `studentcourses` (`id`, `courseid`) VALUES
(311753990, 32),
(66651027, 8),
(66651027, 9),
(58811035, 23),
(58811035, 24),
(58811035, 26),
(204628804, 22),
(204628804, 23),
(204628804, 28),
(324517028, 2),
(324517028, 3),
(324517028, 9),
(300789900, 11),
(300789900, 12),
(300789900, 19),
(300987654, 8),
(300987654, 9),
(657865433, 3),
(657865433, 6),
(747837748, 7),
(747837748, 8),
(0, 2),
(0, 3),
(0, 6),
(0, 7),
(0, 8),
(0, 9),
(0, 10),
(0, 11),
(66353814, 2),
(66353814, 3),
(31541733, 2),
(31541733, 3),
(31541733, 6),
(31541733, 7),
(31541733, 24),
(36164002, 3),
(36164002, 8),
(767575754, 7),
(49029788, 26),
(49029788, 27),
(49029788, 28),
(31830698, 2),
(31830698, 3),
(31830698, 6),
(31830698, 21),
(4444, 2),
(4444, 3),
(4444, 6),
(4444, 7),
(4444, 27),
(646464737, 22),
(646464737, 28),
(646464737, 32),
(646464737, 34),
(646464737, 35);

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE IF NOT EXISTS `students` (
  `id` int(11) NOT NULL,
  `fullname` varchar(100) COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `phone` varchar(20) COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `email` varchar(100) COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `img` longblob NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`id`, `fullname`, `phone`, `email`, `img`) VALUES
(4444, 'Ofer Teva', '067-5467231', 'Ofer@eva.com', 0x6f6665722e706e67),
(31541733, 'Mymon Yehezkel', '051-5362584', 'Mymon@Yehezkel.com', 0x736861756c2e6a7067),
(31830698, 'Rubin Amir', '053-6369565', 'Rubin@Ami.com', 0x696d6167657320283132292e6a7067),
(36164002, 'Levi Yonatand', '052-6362587', 'Levi@Yonatan.com', 0x6f76616479612e6a7067),
(49029788, 'Saloni yooda', '052-1245487', 'Saloni@yooda.com', 0x696d61676573202837292e6a7067),
(58811035, 'Kohavi Elyakim', '052-3125454', 'Kohavi@Elyakim.com', 0x736f6f6e2e6a7067),
(66353814, 'Haymov Moshe', '052-9636396', 'Haymov@Moshe.com', 0x656974616e2e6a7067),
(66651027, 'Avinu Yaniv', '053-6963214', 'Avinu@aniv.com', 0x6d697a726168692e6a7067),
(204628804, 'Siman-Tov Noam', '052-9632587', 'Siman-Tov@Noam.org.il', 0x6176697368692e706e67),
(300789900, 'Shlomi dekel', '0577896897', 'd@s.com', 0x616d69722e6a7067),
(300987654, 'Yaron Dahan', '0998997979', 'Yaro@Dahan.com', 0x656c697961686f6f2e706e67),
(311753990, 'varsilker sam', '050-2285658', 'varsilker@sam.com', 0x626f6e2e6a7067),
(324517028, 'shapurker zion', '053-9562658', 'shapurke@zion.com', 0x64617669642e6a7067),
(646464737, 'Elad jeraffi', '098-84848484', 'Elad@jeraffi.com', 0x656d70312e6a7067),
(657865433, 'Netanel biton', '09-0085858', 'Netanel@biton.com', 0x6e6168756d2e6a7067),
(747837748, 'Dani hadad', '058-7575747', 'Dani@hadad.com', 0x6d6f722e6a7067),
(767575754, 'Dardas saba', '011-22122111', 'Dardas@aba.com', 0x6461726461732e6a7067);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
