-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: May 15, 2020 at 01:26 PM
-- Server version: 10.3.22-MariaDB-1
-- PHP Version: 7.3.15-3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_login`
--

-- --------------------------------------------------------

--
-- Table structure for table `books`
--

CREATE TABLE `books` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `author` varchar(255) NOT NULL,
  `category` varchar(255) NOT NULL,
  `cover` varchar(255) NOT NULL DEFAULT 'default.jpg',
  `description` varchar(255) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `books`
--

INSERT INTO `books` (`id`, `name`, `author`, `category`, `cover`, `description`, `status`) VALUES
(120, 'chaia chai stryo ghyo ', 'gheight ghang chyo ', 'fairy-tale', 'default.jpg', 'hing whuyen thung chang zher whei nhai trei gier brer zher ngeight brieu chinh giyo nghang ngai giai zhinh shay gher stron ngher strung gher ', 1),
(121, 'Bí kíp làm giàu của anh Huấn hoa hẹo', 'huấn rose', 'crime-detective', 'index.jpeg', 'wtf', 1),
(122, 'sher nhang giuyen nging ', 'gieight ngang thaia ', 'action-adventure', 'default.jpg', 'hon shuyen ghieu shay ther nghinh nghung ngya chang hieu nghung giang giyo gieight giai chuyen ghyo chaia brei ghung tray nghuyen chai nhai trieu ', 1),
(123, 'tya whon ther zhung ', 'shung hyo sheight ', 'classic', 'default.jpg', 'hai cheight brung trai brei brer tuyen trya string ghon teight breight zhai shya ngheight thieu ting strya thieu hang ghinh hung hing taia bring ', 1),
(124, 'height zhinh straia gieight ', 'tei giaia giieu ', 'comic-graphic', 'default.jpg', 'nhieu whai gion zhung traia chon theight struyen wher ghei hinh shuyen shai brieu traia strei gieight ngung shai ghay whieu nheight zhai tray chang ', 1),
(125, 'her nhang giing tring ', 'ghon ngung teight ', 'classic', 'default.jpg', 'nhai nghinh stryo breight tuyen ther whai whai brer gieight giieu ngeight tya nghinh string wher zhon trung zher brieu tryo strang ghya hieu streight ', 1),
(126, 'whyo zhaia shang brai ', 'zhinh ghei ngya ', 'drama', 'default.jpg', 'nghang thei shyo nghya nginh zhaia shaia nhieu nghyo wheight nhyo ngheight trei stray nghieu gion brinh hang nhieu gieight nginh wheight chieu ton gher ', 1),
(127, 'strang ngya shei whinh ', 'chung giei thay ', 'classic', 'default.jpg', 'tron tray shaia ghon nghaia hing nhyo zher nghai tyo tring nginh traia ngher nghon whing ngai thieu zhaia tray her thon strai treight trer ', 1),
(128, 'thon hon trung string ', 'nghaia nging nghuyen ', 'comic-graphic', 'default.jpg', 'strai thung ngaia ching tyo thay nghon nghang ghai shuyen trya giuyen hang hay traia shon nhya ngeight traia zher ghieu nguyen brei hang stray ', 1),
(129, 'shya ngon giieu tron ', 'zhinh haia chuyen ', 'comic-graphic', 'default.jpg', 'ching giung giinh shuyen thya ngher chon ngya nghaia strya giai ngieu nhyo ghang bray hya giinh truyen hya sheight strinh thang hang shang whay ', 1),
(130, 'ghay whaia tei gieight ', 'nhang hing trer ', 'comic-graphic', 'default.jpg', 'whyo nghei thyo huyen stron thuyen chinh chei wher tyo trang thang shyo zhei nhei ngon nhieu brai thieu gion strinh strai zhinh ngei nghya ', 1),
(131, 'tieu trieu shieu giung ', 'tang her ngieu ', 'action-adventure', 'default.jpg', 'zhya brung nguyen strieu ngeight hyo hei thuyen whaia tei shei shung chaia ngang zhang thang treight ghon shya chya strei shya zhieu zhing gher ', 1),
(132, 'thyo zhya zhei zhing ', 'nhyo wher chinh ', 'action-adventure', 'default.jpg', 'trieu string giing bryo ngyo whung thyo height nghaia nhieu stray hay sheight hya trang strya giinh nhaia whuyen nginh ghon ngai nhyo whai zhay ', 1),
(133, 'strieu zhya trai nhung ', 'ghung zhang bring ', 'fairy-tale', 'default.jpg', 'ter wher strei wher huyen whinh tring giai giaia nhinh giuyen nging taia stron shon her ngya shei treight ngher chon giyo strai ngieu giing ', 1),
(134, 'treight nhai whaia zhay ', 'ngei thai brer ', 'fairy-tale', 'default.jpg', 'chai trung hon nghing brang thing cheight chieu tieu nher brinh brinh nghinh breight thang nger whang chuyen nghung tring nhieu tinh zhai chya hei ', 1),
(135, 'nguyen ngaia nghinh string ', 'whyo bray truyen ', 'comic-graphic', 'default.jpg', 'straia whyo brer nghung hung ghay giaia tay struyen shing whuyen ngher zhai tray ghyo whuyen taia taia ngaia ngya chon chei hing brer nhai ', 1),
(136, 'ghuyen cheight zhay tring ', 'tray trei ngei ', 'comic-graphic', 'default.jpg', 'ngay ngay nhuyen ngei shay gheight traia zhaia gion tring zhon whei whei tray chang thaia nghay thei nging tyo ton ngung giing ghung thang ', 1),
(137, 'nghei ngya ngei streight ', 'gier straia strung ', 'classic', 'default.jpg', 'ngaia strei tay trang shya nhieu truyen thei zhung breight brai tay nhai hieu ther strieu giyo nginh whai zhyo gier shinh bring zhing nghay ', 1),
(138, 'hang ngang nheight nhinh ', 'brieu thay thay ', 'action-adventure', 'default.jpg', 'strai ching gion zhieu thay nguyen ghei tuyen nhuyen nging strinh ghang hieu nghuyen taia tung giyo shang hay height shay hon trai haia thai ', 1),
(139, 'bring strinh ghinh thuyen ', 'zheight traia height ', 'action-adventure', 'default.jpg', 'giang whaia nger whaia zhei nhai huyen whay ngyo nhieu brung chyo ton stryo nhei zhung chai nghei ghya shya brieu trer cher thaia zhya ', 1),
(140, 'bruyen ngheight nghang zhyo ', 'ton zhieu ngieu ', 'action-adventure', 'default.jpg', 'strya ngher ghung giyo zhei chyo bray giinh zhaia nghay whon whieu brinh wher gier thieu shieu wheight zher bron zhai stryo nghang ngay zhyo ', 1),
(141, 'nhai brinh zheight nhang ', 'ghinh nghai tung ', 'drama', 'default.jpg', 'zhuyen thinh ghyo giing thaia teight shei nghung giya gieight nhung trung string zhang nghaia whai ting ngher bray shieu hai whung zhang tei nghon ', 1);

-- --------------------------------------------------------

--
-- Table structure for table `books_borrow`
--

CREATE TABLE `books_borrow` (
  `id` int(11) NOT NULL,
  `mem_id` int(11) NOT NULL,
  `book_ids` varchar(255) NOT NULL,
  `time_of_borrow` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `books_borrow`
--

INSERT INTO `books_borrow` (`id`, `mem_id`, `book_ids`, `time_of_borrow`) VALUES
(1, 161, 'Array', '2020-05-14 14:17:10'),
(2, 161, '70,81', '2020-05-14 14:37:11');

-- --------------------------------------------------------

--
-- Table structure for table `book_borrow`
--

CREATE TABLE `book_borrow` (
  `id` int(11) NOT NULL,
  `mem_id` int(11) NOT NULL,
  `book_id` int(11) NOT NULL,
  `time_of_borrow` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `book_borrow`
--

INSERT INTO `book_borrow` (`id`, `mem_id`, `book_id`, `time_of_borrow`) VALUES
(26, 195, 121, '2020-05-15 11:29:03');

-- --------------------------------------------------------

--
-- Table structure for table `borrow`
--

CREATE TABLE `borrow` (
  `id` int(255) NOT NULL,
  `mem_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `member`
--

CREATE TABLE `member` (
  `mem_id` int(11) NOT NULL,
  `role` int(11) NOT NULL,
  `status` int(11) NOT NULL DEFAULT 0,
  `firstname` varchar(50) NOT NULL,
  `lastname` varchar(50) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(12) NOT NULL,
  `avatar` varchar(255) NOT NULL DEFAULT 'default.png',
  `email` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `ticket_history` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `member`
--

INSERT INTO `member` (`mem_id`, `role`, `status`, `firstname`, `lastname`, `username`, `password`, `avatar`, `email`, `address`, `phone`, `ticket_history`) VALUES
(194, 1, 0, 'Overlord', '', 'admin', 'admin', 'default.png', '', '', '', NULL),
(195, 0, 0, 'tung_ghuyen_', 'ghuyen_bray_', 'chyo_chung_', '123', 'default.png', 'chya_ing_shuyen_@gmail.com', 'nhinh_braia_gion_chyo_strai_ting_yo_huyen_tring_strinh_', '0989076492', NULL),
(196, 0, 1, 'nhya_hang_', 'nhung_strai_', 'nghung_tay_', '123', 'default.png', 'hay_haia_ngei_@gmail.com', 'nhya_whaia_ai_sher_nhon_cheight_tring_truyen_yo_cheight_', '0989572445', NULL),
(197, 0, 0, 'haia_giieu_', 'ngang_strai_', 'chang_nhing_', '123', 'default.png', 'thing_ghai_whay_@gmail.com', 'giei_theight_gher_streight_tay_ay_shyo_tai_shing_ghung_', '0988822031', NULL),
(198, 0, 0, 'ngieu_whing_', 'trer_nghon_', 'shang_ghon_', '123', 'default.png', 'ghaia_taia_chung_@gmail.com', 'strung_tung_nhaia_thon_tei_nhei_chieu_nghei_ngay_zhung_', '0984380039', NULL),
(199, 0, 0, 'shyo_zhang_', 'haia_nhai_', 'whieu_thieu_', '123', 'default.png', 'strei_shay_whaia_@gmail.com', 'shaia_thyo_tron_shyo_ngeight_ching_wher_wheight_nher_hang_', '0981155121', NULL),
(200, 0, 0, 'hei_taia_', 'zhay_whai_', 'strer_zhieu_', '123', 'default.png', 'ghang_tring_whei_@gmail.com', 'chya_truyen_nghay_shang_thieu_giya_thung_taia_ngieu_brung_', '0984559839', NULL),
(201, 0, 0, 'ay_ngung_', 'ghinh_thieu_', 'strer_ghay_', '123', 'default.png', 'nghon_ghay_thyo_@gmail.com', 'whaia_shei_shay_tung_nghuyen_ngher_wheight_nhay_nher_whei_', '0988726152', NULL),
(202, 0, 0, 'whuyen_whaia_', 'theight_ghinh_', 'nhay_trai_', '123', 'default.png', 'hay_brei_chinh_@gmail.com', 'thay_thang_thyo_er_zhei_hing_shaia_strer_shyo_strei_', '0980700850', NULL),
(203, 0, 0, 'ther_tinh_', 'hai_trung_', 'zhei_thai_', '123', 'default.png', 'nghay_braia_strer_@gmail.com', 'strieu_thieu_trer_shuyen_nhuyen_ngieu_ter_zhon_zhung_straia_', '0983418426', NULL),
(204, 0, 1, 'xxx', 'xxx', 'xxx', 'xxx', 'index.jpeg', 'xxx@gmail.com', 'xxx', 'xxx', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `ticket`
--

CREATE TABLE `ticket` (
  `id` int(11) NOT NULL,
  `mem_id` int(11) NOT NULL,
  `book_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Stand-in structure for view `ticket_details`
-- (See below for the actual view)
--
CREATE TABLE `ticket_details` (
`id` int(11)
,`borrow_time` datetime
,`book_status` int(11)
,`book_name` varchar(255)
,`book_id` int(11)
,`username` varchar(30)
,`user_id` int(11)
,`member_status` int(11)
,`member_role` int(11)
);

-- --------------------------------------------------------

--
-- Table structure for table `ticket_dump`
--

CREATE TABLE `ticket_dump` (
  `id` int(11) NOT NULL,
  `mem_id` int(11) NOT NULL,
  `book_id` int(11) NOT NULL,
  `time_of_borrow` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `ticket_dump`
--

INSERT INTO `ticket_dump` (`id`, `mem_id`, `book_id`, `time_of_borrow`) VALUES
(7, 167, 51, '2020-05-14 08:00:41'),
(8, 168, 52, '2020-05-14 08:00:41'),
(13, 161, 60, '2020-05-14 08:08:37'),
(15, 161, 51, '2020-05-14 09:51:42'),
(14, 161, 52, '2020-05-14 09:50:50'),
(12, 161, 52, '2020-05-14 08:06:55'),
(16, 161, 51, '2020-05-14 14:42:44'),
(11, 161, 52, '2020-05-14 08:04:11'),
(17, 161, 93, '2020-05-14 15:02:56'),
(25, 195, 121, '2020-05-15 11:21:11');

-- --------------------------------------------------------

--
-- Structure for view `ticket_details`
--
DROP TABLE IF EXISTS `ticket_details`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `ticket_details`  AS  select `book_borrow`.`id` AS `id`,`book_borrow`.`time_of_borrow` AS `borrow_time`,`books`.`status` AS `book_status`,`books`.`name` AS `book_name`,`books`.`id` AS `book_id`,`member`.`username` AS `username`,`member`.`mem_id` AS `user_id`,`member`.`status` AS `member_status`,`member`.`role` AS `member_role` from ((`book_borrow` join `books` on(`book_borrow`.`book_id` = `books`.`id`)) join `member` on(`book_borrow`.`mem_id` = `member`.`mem_id`)) ;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `books`
--
ALTER TABLE `books`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `books_borrow`
--
ALTER TABLE `books_borrow`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `book_borrow`
--
ALTER TABLE `book_borrow`
  ADD PRIMARY KEY (`id`),
  ADD KEY `mem_id` (`mem_id`),
  ADD KEY `book_id` (`book_id`);

--
-- Indexes for table `borrow`
--
ALTER TABLE `borrow`
  ADD PRIMARY KEY (`id`),
  ADD KEY `mem_id` (`mem_id`);

--
-- Indexes for table `member`
--
ALTER TABLE `member`
  ADD PRIMARY KEY (`mem_id`);

--
-- Indexes for table `ticket`
--
ALTER TABLE `ticket`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `books`
--
ALTER TABLE `books`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=142;

--
-- AUTO_INCREMENT for table `books_borrow`
--
ALTER TABLE `books_borrow`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `book_borrow`
--
ALTER TABLE `book_borrow`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `borrow`
--
ALTER TABLE `borrow`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `member`
--
ALTER TABLE `member`
  MODIFY `mem_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=205;

--
-- AUTO_INCREMENT for table `ticket`
--
ALTER TABLE `ticket`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `book_borrow`
--
ALTER TABLE `book_borrow`
  ADD CONSTRAINT `book_borrow_ibfk_1` FOREIGN KEY (`mem_id`) REFERENCES `member` (`mem_id`),
  ADD CONSTRAINT `book_borrow_ibfk_2` FOREIGN KEY (`book_id`) REFERENCES `books` (`id`);

--
-- Constraints for table `borrow`
--
ALTER TABLE `borrow`
  ADD CONSTRAINT `borrow_ibfk_1` FOREIGN KEY (`mem_id`) REFERENCES `member` (`mem_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
