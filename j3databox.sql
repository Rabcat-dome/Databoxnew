-- phpMyAdmin SQL Dump
-- version 4.4.12
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Dec 30, 2015 at 04:25 AM
-- Server version: 5.6.25
-- PHP Version: 5.5.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `j3databox`
--

-- --------------------------------------------------------

--
-- Table structure for table `authorization`
--

CREATE TABLE IF NOT EXISTS `authorization` (
  `id` int(3) NOT NULL,
  `user_upload` varchar(50) NOT NULL,
  `user_name` varchar(200) NOT NULL,
  `divisId` int(10) NOT NULL,
  `authority` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `databox_upload`
--

CREATE TABLE IF NOT EXISTS `databox_upload` (
  `databox_id` int(11) NOT NULL,
  `subject` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `databox_search` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `databox_detail` text COLLATE utf8_unicode_ci NOT NULL,
  `uploaded_url` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `upload_urlpdf` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `group_Id` int(11) NOT NULL,
  `date_upload` date NOT NULL,
  `user_id` int(3) NOT NULL,
  `secrets_id` int(1) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=896 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `databox_upload`
--

INSERT INTO `databox_upload` (`databox_id`, `subject`, `databox_search`, `databox_detail`, `uploaded_url`, `upload_urlpdf`, `group_Id`, `date_upload`, `user_id`, `secrets_id`) VALUES
(1, 'ยุทธศาสตร์ทหารด้านสงครามไซเบอร์ ทท. พ.ศ. 2558', '', '', '', '', 21, '2015-12-25', 0, 0),
(2, 'แนวทางการดำเนินงานด้านสงครามไซเบอร์ (Cyber Warfare)', '', '', '', '', 21, '2015-12-25', 0, 0),
(3, 'แผนที่แนวทางการปฏิบัติงาน (Roadmap) ของ กสค. สปก.ยก.ทหาร ๑0 ปี (๕๘-๖๗)', '', '', '', '', 21, '2015-12-25', 0, 0),
(4, 'การฝึกตามหน้าที่และหลักพื้นฐานการปฏิบัติการสงครามไซเบอร์', '', '', '', '', 21, '2015-12-25', 0, 1),
(6, 'โครงการแผนพัฒนาขีดความสามารถการปฎิบัติการรองรับภัยคุกคามด้านไซบอร์', '', '', '', '', 21, '2015-12-21', 0, 0),
(7, 'โครงการพัฒนาระบบควบคุมบังคับบัญชา C4I (การรักษาความปลอดภัยเครือข่าย)', '', '', '', '', 21, '2015-12-25', 0, 4),
(8, 'การปฏิบัติการพิเศษร่วม', '', '', '', '', 22, '2015-12-25', 0, 0),
(9, 'การปฎิบัติการข่าวสาร', '', '', '', '', 22, '2015-12-25', 0, 0),
(10, 'การต่อต้านการก่อการร้ายสากล', '', '', '', '', 22, '2015-12-25', 0, 0),
(11, 'การแก้ปัญกา จขต', '', '', '', '', 22, '2015-12-25', 0, 0),
(12, 'การรักษความสงบเรียบร้อยภายในประเทศ', '', '', '', '', 22, '2015-12-25', 0, 0),
(13, 'การป้องกันและสกัดกั้นแรงงานต่างด้าวหลบหนีเข้าเมือง', '', '', '', '', 13, '2015-12-25', 0, 0),
(14, 'การปฏิบัติการทุ่งระเบิดเพื่อมนุษยธรรมของประเทศไทย', '', '', '', '', 13, '2015-12-25', 0, 0),
(15, 'คำพิพากษาคดีดีความ ๆ ปราสาทพระวิหารปี 05 และแนวทางดำเนินงานหลังศาลโลกมีคำตัดสิน ๆ', '', '', '', '', 13, '2015-12-25', 0, 0),
(16, 'ยุทธศาสตร์การพัฒนาเพื่อเสริมความมั่นคงของชาติ (พ.ศ.2556 2560)', '', '', '', '', 13, '2015-12-25', 0, 0),
(17, 'กองอำนวยการปฎิบัตินโยบายขายแดนไทยกับประเทศเพื่อนบ้าน (กอ นชท)', '', '', '', '', 13, '2015-12-25', 0, 0),
(18, 'การสำรวจและจัดทำหลักเขตแดนกับประเทศเพื่อบ้านและการปฏิบัติตามนโยบายเพื่อความมั่นคงของไทยต่อประเทศเพื่อนบ้าน', '', '', '', '', 13, '2015-12-25', 0, 0),
(19, 'คณะกรรมการร่วมมือเพื่อความมั่นคงขายแดนไทยกับประเทศเพื่อนบ้าน', '', '', '', '', 13, '2015-12-25', 0, 0),
(20, 'กลไลในการแก้ไขปัญหาชายแดน ไทย - พม่า', '', '', '', '', 13, '2015-12-25', 0, 0),
(21, 'กลไลในการแก้ไขปัญหาชายแดน ไทย - ลาว', '', '', '', '', 13, '2015-12-25', 0, 0),
(22, 'กลไลในการแก้ไขปัญหาชายแดน ไทย - มาเลเชีย', '', '', '', '', 13, '2015-12-25', 0, 0),
(23, 'คณะกรรมการหารือทางทหารระดับสูงไทย - อินโดนีเชีย', '', '', '', '', 13, '2015-12-25', 0, 0),
(24, 'การจัดและวางกำลังเพื่อป้องกันและรักษาผลประโนชน์แห่งชาติ', '', '', '', '', 38, '2015-12-25', 0, 0),
(25, 'การขยายผลการดำเนินโครงการนำร่องการป้องชายแดน', '', '', '', '', 38, '2015-12-25', 0, 0),
(26, 'การจัดบรรยายสรุปด้านยุทธการให้กับคณะบุคคลต่าง ๆ', '', '', '', '', 38, '2015-12-21', 0, 0),
(27, 'การขออนุมัติให้เรือและอากาศยานออกนอกราชอาณาจักร', '', '', '', '', 38, '2015-12-25', 0, 0),
(28, 'การควบคุมบังคับบัญชา นขตทท', '', '', '', '', 38, '2015-12-25', 0, 0),
(29, 'ยก สัมพันธ์', '', '', '', '', 38, '2015-12-25', 0, 0),
(30, 'การค้ามนุษย์', '', '', '', '', 13, '2015-12-25', 0, 0),
(31, 'การมอบอำนาจสั่งการและทำการแทนในนาม จก.ยก.ทหาร', '', '', '', '', 13, '2015-12-25', 0, 0),
(32, 'การฝึกการป้องกันและการเจาะระบบเครือข่าย การปฏิบัติงานสงครามเครือข่ายแบบเป็นหน่วย', '', '', '', '', 13, '2015-12-21', 0, 0),
(33, 'สรุปสั่งการของประธานในการประชุม นขต.ยก.ทหาร/ฝยก.ศบท.ฯ ครั้งที่ ๕/๒๕๕๖ เมื่อ ๓ ก.ค.๕๖', '', '', '', '', 13, '0000-00-00', 0, 0),
(34, 'แนวทางการให้สัมภาษณ์ของ รมว.กห.', '', '', '', '', 13, '0000-00-00', 0, 0),
(35, 'เอกสารประกอบการยืมเงินและผัดส่งใบสำคัญ', '', '', '', '', 13, '0000-00-00', 0, 0),
(36, 'หลักฐานประกอบการเบิกจ่าย"ค่าใช้จ่ายในการเดินทางไปราชการ"', '', '', '', '', 13, '0000-00-00', 0, 0),
(37, 'หลักฐานประกอบการเบิกจ่าย"ค่าใช้จ่ายในฝึกอบรม/สัมมนา"', '', '', '', '', 13, '0000-00-00', 0, 0),
(38, 'รายงานการประชุม นขต.ยก.ทหาร/ฝยก.ศบท.ฯ ครั้งที่ ๕/๒๕๕๖ เมื่อ ๓ ก.ค.๕๖', '', '', '', '', 13, '0000-00-00', 0, 0),
(39, 'สรุปสั่งการของประธานในการประชุม นขต.ยก.ทหาร/ฝยก.ศบท. ครั้งที่ ๖/๒๕๕๖', '', '', '', '', 13, '0000-00-00', 0, 0),
(40, 'รายงานการประชุม นขต.ยก.ทหาร/ฝยก.ศบท.ฯ ครั้งที่ ๖/๒๕๕๖ เมื่อ ๑ ส.ค.๕๖', '', '', '', '', 13, '0000-00-00', 0, 0),
(797, 'ขั้นตอนการเสนอคำของบประมาณ โครงการ ปี 58', '', '', '', '', 1, '0000-00-00', 0, 0),
(880, 'ยุทธศาสตร์ทหารด้านการปฏิบัติการเพื่อสันติภาพและมนุษยธรรม ประจำปี ๒๕๕๗  ๒๕๖๑', '', '', '', '', 12, '0000-00-00', 0, 0),
(881, 'การสัมมนาเชิงปฏิบัติการการทบทวนนโยบายและยุทธศาสตร์ ด้านการปฏิบัติการเพื่อสันติภาพ', '', '', '', '', 12, '0000-00-00', 0, 0),
(882, 'การประชุมการจัดตั้งเครือข่ายศูนย์ปฏิบัติการรักษาสันติภาพของอาเซียน (The Meeting of Establishment of ASEAN Peacekeeping Centres Network)', '', '', '', '', 12, '0000-00-00', 0, 0),
(883, 'ความร่วมมือด้านการปฏิบัติการรักษาสันติภาพของกองทัพไทยกับประเทศในกลุ่มอาเซียน การประชุมแลกเปลี่ยนการเยือนระหว่างศูนย์ปฏิบัติการเพื่อสันติภาพ ไทย  อซ.', '', '', '', '', 4, '0000-00-00', 0, 0),
(884, 'ความร่วมมือไทย-สหรัฐฯ ในด้านการปฏิบัติการเพื่อสันติภาพ', '', '', '', '', 2, '0000-00-00', 0, 0),
(885, 'การประชุมคณะทำงานผู้เชี่ยวชาญเฉพาะด้านการปฏิบัติการรักษาสันติภาพ  (Experts Working Group on Peacekeeping Operations : EWG on PKO)', '', '', '', '', 3, '0000-00-00', 0, 0),
(886, 'การประชุมอาเซียนว่าด้วยความร่วมมือด้านการเมืองและความมั่นคงในภูมิภาคเอเชีย - แปซิฟิก (ASEAN Regional Forum : ARF) ด้านการรักษาสันติภาพ', '', '', '', '', 6, '0000-00-00', 0, 0),
(887, 'การประชุมสมาชิกสมาคมศูนย์ฝึกอบรมการรักษาสันติภาพภูมิภาคเอเชีย  แปซิฟิก  (Association of Asia  Pacific Peace Operations Training Centers: AAPTC)', '', '', '', '', 8, '0000-00-00', 0, 0),
(888, 'การประชุมสมาชิกสมาคมศูนย์ฝึกอบรมการรักษาสันติภาพนานาชาติ  (International Association of Peacekeeping Training Centers: IAPTC)', '', '', '', '', 7, '0000-00-00', 0, 0),
(889, 'การประชุมแลกเปลี่ยนการเยือนระหว่างศูนย์ปฏิบัติการเพื่อสันติภาพ ไทย  สหพันธ์สาธารณรัฐเยอรมนี (ยม.) (The United Nations Training)', '', '', '', '', 15, '0000-00-00', 0, 0),
(891, 'แผนปฏิบัติงาน (Roadmap) ด้านการปฏิบัติการเพื่อสันติภาพ ปี ๕๘  ๖๒ ', '', '', '', '', 20, '0000-00-00', 0, 0),
(892, 'แผนปฏิบัติราชการ ๔ ปี กองทัพไทย', '', '', '', '', 39, '0000-00-00', 0, 0),
(893, 'แผนดำเนินงาน ๕ ปี ของ ทท.๕๘-๖๒ (Roadmap 2015-2019)', '', '', '', '', 39, '0000-00-00', 0, 0),
(894, '', '', '', '2015-12-28--ผธก.', '2015-12-28--ผธก.pdf', 32, '2015-12-28', 0, 1),
(895, '', '', '', '2015-12-28--ผธก.', '2015-12-28--ผธก.pdf', 15, '2015-12-28', 0, 1);

-- --------------------------------------------------------

--
-- Table structure for table `data_group`
--

CREATE TABLE IF NOT EXISTS `data_group` (
  `group_Id` int(11) NOT NULL,
  `groupname` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `divisId` int(11) NOT NULL DEFAULT '0',
  `dataId` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB AUTO_INCREMENT=49 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `data_group`
--

INSERT INTO `data_group` (`group_Id`, `groupname`, `divisId`, `dataId`) VALUES
(1, 'กองกลาง', 1, 0),
(2, 'ทัวไป', 0, 5),
(3, 'ทัวไป', 1, 0),
(6, 'ทัวไป', 3, 0),
(7, 'ทัวไป', 3, 0),
(8, 'ทัวไป', 4, 0),
(9, 'ทัวไป', 4, 0),
(10, 'ทัวไป', 10, 0),
(11, 'ทัวไป', 12, 0),
(12, 'ทัวไป', 12, 0),
(13, 'บทสรุปผู้บริหาร', 10, 0),
(14, 'ทัวไป', 14, 100),
(15, 'ทัวไป', 0, 1),
(16, 'ทัวไป', 16, 100),
(17, 'ทัวไป', 17, 100),
(18, 'ทัวไปtww', 0, 4),
(19, 'ทัวไป', 19, 100),
(20, 'ทัวไป', 2, 100),
(21, 'บทสรุปผู้บริหาร', 8, 0),
(22, 'บทสรุปผู้บริหาร', 9, 0),
(23, 'ทัวไป', 23, 0),
(24, 'ทัวไป', 2, 0),
(25, 'ทัวไป', 2, 0),
(30, 'ทั่วไปhgg', 0, 3),
(31, 'ทั่วไปtee', 0, 0),
(32, 'ทั่วไป', 0, 2),
(35, 'การปฏิบัติการข่าวสาร', 0, 0),
(36, 'การแก้ปัญหา จขต', 0, 3),
(37, 'การต่อต้านการก่อการร้ายสากล', 0, 0),
(38, 'บทสรุปผู้บริหาร', 8, 0),
(39, 'ทั่วไป', 0, 0),
(40, 'sssss', 0, 3),
(41, 'การปฎิบัติการพิเศษร่วม', 0, 0),
(42, 'ทดสอบ', 0, 0),
(43, 'ทั่วไป', 0, 3),
(44, 'มมมม', 0, 3),
(45, 'ทัวไป', 1, 0),
(46, 'ทดสอบ', 5, 0),
(47, 'บทสรุปผู้บริหาร', 6, 0),
(48, 'ทดสอบ 47', 6, 0);

-- --------------------------------------------------------

--
-- Table structure for table `data_group_main`
--

CREATE TABLE IF NOT EXISTS `data_group_main` (
  `id` int(10) NOT NULL,
  `fk_id` int(10) NOT NULL,
  `name` varchar(100) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `data_group_main`
--

INSERT INTO `data_group_main` (`id`, `fk_id`, `name`) VALUES
(2, 10, 'บทสรุปผู้บริหาร'),
(8, 2, 'งานด้านงบประมาณ'),
(12, 10, 'งานด้าน ธุรการ');

-- --------------------------------------------------------

--
-- Table structure for table `data_type`
--

CREATE TABLE IF NOT EXISTS `data_type` (
  `type_id` int(11) NOT NULL,
  `type_name` varchar(100) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `data_type`
--

INSERT INTO `data_type` (`type_id`, `type_name`) VALUES
(1, 'บทสรุปผู้บริหาร'),
(2, 'สรุปงานสำคัญประจำวัน'),
(3, 'คู่มือการปฏิบัติงาน(Work Manual)'),
(4, 'ข้อควรรู้ด้านยุทธการ'),
(5, 'วิดิทัศน์');

-- --------------------------------------------------------

--
-- Table structure for table `division`
--

CREATE TABLE IF NOT EXISTS `division` (
  `divisid` int(11) NOT NULL,
  `group_Id` int(3) NOT NULL,
  `divisname` varchar(250) NOT NULL,
  `short_division` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `division`
--

INSERT INTO `division` (`divisid`, `group_Id`, `divisname`, `short_division`) VALUES
(1, 1, 'สนผ.​ กองความร่วมมือระหว่างประเทศ', 'กรป.สนผ.'),
(2, 1, 'สนผ. กองการจัด', 'กกจ.สนผ.'),
(3, 1, 'สนผ. กองแผนร่วม', 'กผร.สนผ.'),
(4, 1, 'สนผ. กองแผนและโครงการ', 'กผค.สนผ.'),
(5, 1, 'สนผ. กองนโยบายและยุทธศาสตร์', 'กนย.สนผ.'),
(6, 1, 'สนผ. แผนกธุรการ', 'ผธก.สนผ.'),
(7, 2, 'สปก. กอง Cyber Warfare Division', 'กสค.สปก.'),
(8, 2, 'สปก. กองยุทธการ', 'กยก.สปก.'),
(9, 2, 'สปก. กองปฏิบัติการพิเศษ', 'กปษ.สปก.'),
(10, 2, 'สปก. กองปฏิบัติการทางทหารที่มิใช้สงคราม', 'กมส.สปก.'),
(11, 2, 'สปก. แผนกธุรการ', 'ผธก.สปก.'),
(12, 2, 'ฝ่ายยุทธการ ศูนย์บัญชาการทางทหาร', 'ฝยก ศบท.'),
(13, 3, 'สวฝ. กองสนับสนุน', 'กสน.สวฝ.'),
(14, 3, 'สวฝ. กองพัฒนาหลักนิยมและประเมินผล', 'กพป.สวฝ.'),
(15, 3, 'สวฝ. กองนโยบายและแผนการฝึก', 'กนผ.สวฝ.'),
(16, 3, 'สวฝ. กองควบคุมการฝึก', 'กคฝ.สวฝ.'),
(17, 3, 'สวฝ. แผนกกรรมวิธีข้อมูล', 'ผกม.สวฝ.'),
(18, 3, 'สวฝ. กองฝึกร่วมและผสม', 'กฝร.สวฝ'),
(19, 3, 'สวฝ. แผนกธุรการ', 'ผธก.สวฝ.'),
(20, 4, 'ศสภ. กองการฝึกและศึกษา ศูนย์ปฏิบัติการเพื่อสันติภาพ', 'กฝศ.ศสภ.'),
(21, 4, 'ศสภ. กองปฏิบัติการ ศูนย์ปฏิบัติการเพื่อสันติภาพ', 'กผค.ศสภ.'),
(22, 4, 'ศสภ. กองแผนและโครงการ ศูนย์ปฏิบัติการเพื่อสันติภาพ', 'กผค.ศสภ.'),
(23, 4, 'ศสภ. แผนกธุรการ', 'ผธก.ศสภ.'),
(24, 5, 'กกม. กองกรรมวิธีข้อมูล', 'กกม.'),
(25, 5, 'กกม. กองแผนและงบประมาณ', 'กผง.'),
(26, 5, 'กกม. กองกลาง', 'กกล.'),
(27, 5, 'กกม. กองการเงิน', 'กกง.');

-- --------------------------------------------------------

--
-- Table structure for table `division_group`
--

CREATE TABLE IF NOT EXISTS `division_group` (
  `group_Id` int(3) NOT NULL,
  `group_title` varchar(100) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `division_group`
--

INSERT INTO `division_group` (`group_Id`, `group_title`) VALUES
(1, 'สำนักนโยบายและแผน'),
(2, 'สำนักปฏิบัติการ'),
(3, 'สำนักวางแผนฝึกร่วมและผสม'),
(4, 'ศูนย์ปฏิบัติการสันติภาพ'),
(5, 'นขต. ยก.ทหาร');

-- --------------------------------------------------------

--
-- Table structure for table `secrets`
--

CREATE TABLE IF NOT EXISTS `secrets` (
  `id` int(1) NOT NULL,
  `sname` varchar(20) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `secrets`
--

INSERT INTO `secrets` (`id`, `sname`) VALUES
(1, 'ปกติ'),
(2, 'ลับ'),
(3, 'ลับมาก'),
(4, 'ลับที่สุด');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `authorization`
--
ALTER TABLE `authorization`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `databox_upload`
--
ALTER TABLE `databox_upload`
  ADD PRIMARY KEY (`databox_id`);

--
-- Indexes for table `data_group`
--
ALTER TABLE `data_group`
  ADD PRIMARY KEY (`group_Id`);

--
-- Indexes for table `data_group_main`
--
ALTER TABLE `data_group_main`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `data_type`
--
ALTER TABLE `data_type`
  ADD PRIMARY KEY (`type_id`);

--
-- Indexes for table `division`
--
ALTER TABLE `division`
  ADD PRIMARY KEY (`divisid`);

--
-- Indexes for table `division_group`
--
ALTER TABLE `division_group`
  ADD PRIMARY KEY (`group_Id`);

--
-- Indexes for table `secrets`
--
ALTER TABLE `secrets`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `authorization`
--
ALTER TABLE `authorization`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `databox_upload`
--
ALTER TABLE `databox_upload`
  MODIFY `databox_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=896;
--
-- AUTO_INCREMENT for table `data_group`
--
ALTER TABLE `data_group`
  MODIFY `group_Id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=49;
--
-- AUTO_INCREMENT for table `data_group_main`
--
ALTER TABLE `data_group_main`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `data_type`
--
ALTER TABLE `data_type`
  MODIFY `type_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `division_group`
--
ALTER TABLE `division_group`
  MODIFY `group_Id` int(3) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
