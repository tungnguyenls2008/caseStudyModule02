-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: May 14, 2020 at 10:03 AM
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
  `cover` varchar(255) DEFAULT NULL,
  `description` varchar(255) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `books`
--

INSERT INTO `books` (`id`, `name`, `author`, `category`, `cover`, `description`, `status`) VALUES
(51, 'Bí kíp làm giàu của anh Huấn hoa hẹo', 'huấn rose', 'action-adventure', NULL, 'sách đéo gì cái loại này???', 1),
(52, 'kinh doanh online cùng anh huấn hoa hòe', '', '', '', '', 1),
(58, 'fhfgh', 'dfgdfg', 'crime-detective', '', 'sdfsgs', 1),
(59, 'nhyo ter shei string ', 'straia chay zheight ', '2', NULL, 'trya bring nguyen ting nghang gher nhang trieu ngyo her zhuyen nhung hieu bryo hai ', 1),
(62, '111', '111', 'comic-graphic', '', '111', 1),
(63, 'nghon chay nghai traia ', 'chyo thing whinh ', 'drama', NULL, 'sher tung tieu whyo whuyen hung nghang chon breight giaia thang nghang traia hai gheight ', 1),
(64, 'thai sher stron shon ', 'brung giung thuyen ', 'action-adventure', NULL, 'chay trung tyo chuyen thing hya giieu shang whyo gheight tai thay ghyo ngang whieu ', 1),
(65, 'strya whieu chei strya ', 'trinh whyo thinh ', 'comic-graphic', NULL, 'zhieu whya giya chei hinh nhon zhya whang whang brei zhaia nher straia zhei trya ', 1),
(66, 'nghinh hung nging ghyo ', 'thya trya giang ', 'classic', NULL, 'brer strung zhaia shinh strer chung tang bron hay giinh zhang tya nginh chei trai ', 1),
(67, 'shon hing thon brer ', 'shya whya whon ', 'classic', NULL, 'whing bring thya thay strer thai trieu gher cher nghaia ghang nhon ghon tya tray ', 1),
(68, 'cheight shay nhon tung ', 'tei giung struyen ', 'crime-detective', NULL, 'zhai zhei nhing stryo brer whya tang nghing shya shya nger nhya nhay cheight zhya ', 1),
(69, 'nher ghuyen ghai ghay ', 'ghay ghing whon ', 'crime-detective', NULL, 'zhay zher giai giaia ton strai shei whaia ngya nghai trinh ngher hung stron brya ', 1),
(70, 'whon whei giya ghieu ', 'thuyen tray hieu ', 'drama', NULL, 'hinh bron giuyen ghuyen gher haia stray shing ting bryo trya ghang giing nghei ther ', 1),
(71, 'struyen haia gier nhya ', 'stron giei tang ', 'classic', NULL, 'hung bring nher ting traia chay nghei huyen tay ngei trung taia giei nhay thuyen ', 1),
(72, 'zhay strai whang tya ', 'sher ngher nhyo ', 'crime-detective', NULL, 'nhieu nhung string theight strei her brieu hei ghing ghai giyo brer thinh stryo nghinh thung brung thay teight thei shinh ter tya thang shung ', 1),
(73, 'zhung gher thai tya ', 'tron shang ngheight ', 'action-adventure', NULL, 'giyo shung whieu nger hung chai nhung shieu ghang shai zhinh breight nhaia whieu straia tung giaia zhai chai gieight hieu height strer braia strung ', 1),
(74, 'shya whaia thai thinh ', 'ghai thieu stron ', 'fairy-tale', NULL, 'trieu nhei zheight gier strieu zher hang nginh tron hinh strai strang nhuyen theight ngeight tyo zher shaia zhing nhieu trinh traia bray brer gheight ', 1),
(75, 'zhon hieu wher stron ', 'bring chai hieu ', 'drama', NULL, 'zhei brang nhya wheight nhing tring ghya gher thay chinh nhaia brya nghing shieu zhinh zhon zhai nghay her nghya chaia hai ngyo hai struyen ', 1),
(76, 'thung ghay ghing nhing ', 'shei gheight whon ', 'action-adventure', NULL, 'nghieu zhaia thai brai whei bray brer nghinh theight chaia whung shay ghing hang zheight brung truyen nghai nhon gieight shay hung gieight straia teight ', 1),
(77, 'trer huyen shieu ngyo ', 'sher breight trieu ', 'classic', NULL, 'trang whinh zhuyen string ter thing thuyen tieu zhyo strung nheight hon stryo giing trieu thai nhai tung zhai nhon strer strung chuyen nging zhuyen ', 1),
(78, 'thieu zhing whon trinh ', 'strieu ghei whuyen ', 'crime-detective', NULL, 'tung hon shya zhung whieu ghay giya nhuyen gheight giung huyen ghay hang shieu gier hieu shing tray zhung nginh shai thaia whinh wheight brung ', 1),
(79, 'ngher shieu chung chay ', 'nhang stryo shung ', 'drama', NULL, 'nghung giuyen thaia zhuyen nhung thei ngei shang hya zhuyen nghya thay brya chay strya gier giang tyo nhung ghon trya tung ther ghya shieu ', 1),
(80, 'nhya tron taia trei ', 'ghaia giya nghay ', 'action-adventure', NULL, 'giyo chaia string nhinh stryo trang ghyo zhei shai ter brinh ghuyen tinh chai thieu nhung hang hing nghyo whai strei stray chei zhung nghing ', 1),
(81, 'whei ngher hung zhieu ', 'teight whieu string ', 'drama', NULL, 'ngung sher giung nher strieu nheight chon nhei hay whay tray whuyen tron nhya struyen sheight chai tryo thuyen ghung hei chang thon nghaia nhieu ', 1),
(82, 'ghinh nheight nhing strei ', 'ghei brieu tray ', 'fairy-tale', NULL, 'zhya nghon nguyen zhon tryo shang gher her giai shon ghai zhung giuyen nger chung ghang trai shay trang nghya tryo hyo whai ghang stron ', 1),
(83, 'hya thuyen ton trer ', 'gier tryo trei ', 'drama', NULL, 'nguyen ngon ngya whieu thieu shai nghon ngeight nghyo trang nhai brinh shaia stron trinh cheight zhya ghing shon cheight nhang nhieu ton chai nghya ', 1),
(84, 'shai ngai whay ghya ', 'zhung hing thing ', 'classic', NULL, 'chaia nghai ghaia thai shya whang bryo tya thinh ngang whuyen zhyo traia shei bring whai ngang nhinh sher thieu nghaia braia ngei giieu brang ', 1),
(85, 'hai ghung cheight trinh ', 'zhya nghaia ngaia ', 'crime-detective', NULL, 'nghaia ngher strya haia nghinh trya bray whuyen bryo nhyo nhung trer bray tryo shinh ghieu nghon whung nhai thinh giieu string string whyo chung ', 1),
(86, 'ter string thang nghai ', 'ngaia giieu nhinh ', 'action-adventure', NULL, 'trang traia nghyo shai bring nghung theight giung nhay shang trieu ngang strer tay nging nhang ghinh whya nheight tai truyen strieu trei tryo brya ', 1),
(87, 'bray whung stron ghyo ', 'ngai theight whuyen ', 'crime-detective', NULL, 'brer nghinh zhang chuyen zhyo ngei tei chung nging giuyen hung giung theight hay chung straia trya teight ngay ghinh ghang shuyen strer ghinh zhang ', 1),
(88, 'giing nghuyen shuyen treight ', 'ghay whuyen nger ', 'fairy-tale', NULL, 'nginh whuyen nghai bruyen ghyo ghya nhaia nhay whai nginh sher ngheight streight thuyen thang thang brieu chei height giaia nhaia gier shyo hei chon ', 1),
(89, 'strai nhinh chuyen zhinh ', 'shuyen stray strang ', 'fairy-tale', NULL, 'thaia tyo chyo zhung ting stryo wher nhaia zhay tang shon chang trer zheight tei ghuyen nhang brya chyo brya strinh whai chuyen gieight tung ', 1),
(90, 'hyo ngang hinh tryo ', 'thung nghya brinh ', 'action-adventure', NULL, 'haia stron ting ngher chay whaia thaia shing ngyo thinh straia thei hya gion trung thung huyen giaia hya nhieu nguyen nghuyen thung chieu shieu ', 1),
(91, 'brai hang nher treight ', 'hyo tryo nghung ', 'comic-graphic', NULL, 'brung zhieu straia nhung thaia shaia chung thung tray shang chung ghya hing nhung ghung giya chinh sheight bring brang zhei brieu ngaia thing ngung ', 1),
(92, 'trer struyen hya nhing ', 'trei whay brya ', 'crime-detective', NULL, 'chei zhya strer trya tang struyen ghyo nhing giay chya tung gieight nghang gion shieu giing ghyo sheight trer tron whai giei thung giing hung ', 1),
(93, 'hung nher stryo chang ', 'brai tay tang ', 'comic-graphic', NULL, 'whung cher hing traia zhai ghai zhaia chuyen shang brai bray whai zhyo ngei hieu ngyo whaia brya hieu bruyen brang trai strai nging theight ', 1),
(94, 'Case qúa đỉnh :))', 'AWESOME TEAM', 'action-adventure', NULL, 'tích cực quay tay vận may sẽ đến', 1);

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
(9, 154, 52, '2020-05-14 08:00:41'),
(10, 147, 72, '2020-05-14 08:00:41'),
(11, 161, 52, '2020-05-14 08:04:11'),
(12, 161, 52, '2020-05-14 08:06:55');

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
  `email` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `ticket_history` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `member`
--

INSERT INTO `member` (`mem_id`, `role`, `status`, `firstname`, `lastname`, `username`, `password`, `email`, `address`, `phone`, `ticket_history`) VALUES
(147, 1, 0, 'overlord', '', 'admin', 'admin', '', '', '', ''),
(152, 0, 0, 'haia_thuyen_', 'chyo_nhing_', 'ngang_giei_', '123', 'lonelycount@gmail.com', '', '', ''),
(154, 0, 1, 'nghieu_nghinh_', 'ghuyen_nghing_', 'strei_ching_', '123', '', '', '', ''),
(155, 0, 0, 'gion_bron_', 'shuyen_nhing_', 'tring_ghon_', '123', '', '', '', ''),
(156, 0, 0, 'giai_streight_', 'whang_ghon_', 'giyo_truyen_', '123', '', '', '', ''),
(157, 0, 0, 'nhinh_whuyen_', 'brinh_trinh_', 'ieu_ton_', '123', '', '', '', ''),
(158, 0, 0, 'ei_brang_', 'bryo_ghieu_', 'uyen_treight_', '123', '', '', '', ''),
(159, 0, 0, 'nghei_zhang_', 'nghing_ei_', 'nhinh_shuyen_', '123', '', '', '', ''),
(160, 0, 1, 'sher_giieu_', 'zhay_whon_', 'treight_brya_', '123', '', '', '', ''),
(161, 0, 0, 'chieu_hya_', 'ngang_ghay_', 'brei_whai_', '123', '', '', '', ''),
(163, 0, 0, 'tron_ghya_', 'inh_brung_', 'shon_zhinh_', '123', '', '', '', ''),
(165, 0, 0, 'ngay_brer_', 'zhei_hinh_', 'height_giinh_', '123', '', '', '', ''),
(166, 0, 0, 'chaia_strinh_', 'ghon_chinh_', 'ching_giya_', '123', '', '', '', ''),
(167, 1, 0, 'a', 'a', 'a', 'a', '', '', '', ''),
(168, 0, 1, 'height_wher_', 'thinh_zhuyen_', 'giei_strieu_', '123', '', '', '', ''),
(169, 0, 0, 'tung', 'nguyen', 'tung', '123', '', '', '', ''),
(170, 0, 0, 'firstname', 'lastname', 'username', 'password', 'email', 'address', '123', NULL),
(171, 0, 1, 'xxx', 'xxx', 'xxx', 'xxx', 'xxx@gmail.com', 'xxx', 'xxx', NULL),
(172, 0, 0, 'shyo_zhung_', 'chaia_brieu_', 'thung_huyen_', '123', 'hinh_huyen_nher_@gmail.com', 'trei_nher_shon_giei_cheight_', '0985120096', NULL),
(173, 0, 0, 'thaia_trya_', 'nhaia_bruyen_', 'taia_giai_', '123', 'stron_ang_giyo_@gmail.com', 'chang_thang_ching_ngai_ngieu_her_zhinh_ing_whung_thinh_', '0982408637', NULL),
(174, 0, 0, 'ngei_whing_', 'brinh_whang_', 'thay_chuyen_', '123', 'thya_chinh_brinh_@gmail.com', 'brya_stray_ngheight_whyo_string_yo_strung_thai_nghang_ngheight_', '0987230713', NULL),
(175, 0, 0, 'nging_nhyo_', 'ghyo_aia_', 'strai_tai_', '123', 'ghyo_thyo_trinh_@gmail.com', 'nhuyen_chaia_giya_chyo_giieu_ngaia_hung_nhai_zhinh_zhung_', '0982540824', NULL),
(176, 0, 0, 'hinh_on_', 'nhei_strei_', 'trya_height_', '123', 'string_giing_tuyen_@gmail.com', 'ing_brinh_ang_stryo_aia_on_ter_shyo_nghang_shyo_', '0985813255', NULL),
(177, 0, 1, 'ngaia_nger_', 'nhung_nheight_', 'nhaia_ching_', '123', 'tuyen_tya_nher_@gmail.com', 'huyen_strai_shinh_strer_bray_shyo_giing_nhaia_ngeight_hung_', '0985102557', NULL);

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
(14, 161, 52, '2020-05-14 09:50:50');

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=95;

--
-- AUTO_INCREMENT for table `book_borrow`
--
ALTER TABLE `book_borrow`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `borrow`
--
ALTER TABLE `borrow`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `member`
--
ALTER TABLE `member`
  MODIFY `mem_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=178;

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
