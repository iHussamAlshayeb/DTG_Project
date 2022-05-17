-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Host: eu-cdbr-west-02.cleardb.net
-- Generation Time: May 16, 2022 at 11:32 PM
-- Server version: 5.6.50-log
-- PHP Version: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `heroku_2266886d1613149`
--
CREATE DATABASE IF NOT EXISTS `heroku_2266886d1613149` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `heroku_2266886d1613149`;

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `student_ID` int(11) UNSIGNED NOT NULL,
  `student_name` varchar(255) DEFAULT NULL,
  `student_email` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`student_ID`, `student_name`, `student_email`) VALUES
(216015368, 'حسام', 'test1@hotmail.com'),
(216015588, 'زهراء', 'test2@hotmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) UNSIGNED NOT NULL,
  `username` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `type` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `password`, `type`) VALUES
(1, 'student', '123', 'student'),
(2, 'teacher', '123', 'teacher');

-- --------------------------------------------------------

--
-- Table structure for table `violations`
--

CREATE TABLE `violations` (
  `violation_id` int(11) UNSIGNED NOT NULL,
  `student_ID` int(11) UNSIGNED NOT NULL,
  `violation_type_id` int(11) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `violations`
--

INSERT INTO `violations` (`violation_id`, `student_ID`, `violation_type_id`) VALUES
(1, 216015368, 1),
(2, 216015368, 1),
(3, 216015588, 2),
(11, 216015368, 1),
(21, 216015588, 1),
(31, 216015368, 1),
(41, 216015368, 21);

-- --------------------------------------------------------

--
-- Table structure for table `violations_type`
--

CREATE TABLE `violations_type` (
  `violation_type_id` int(11) UNSIGNED NOT NULL,
  `violation_name` varchar(255) DEFAULT NULL,
  `violation_description` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `violations_type`
--

INSERT INTO `violations_type` (`violation_type_id`, `violation_name`, `violation_description`) VALUES
(1, 'جوال', 'حمل جوال بالفصل'),
(2, 'ازعاج', 'ازعاج بالفصل'),
(11, 'المظهر او الهيئة المخالفة', 'ادخال التعليقات الغريبة الدخيلة على المجتمع وغير المقبوله على اللبس، الأظافر ،الشعر ،الوجه،البدن.'),
(21, 'الزي الرسمي\r\n', 'هو اللباس المعتمد من المؤسسة للمتدربين والمتدربات 		'),
(31, 'تزوير الوثائق او تقليد الأختام الرسمية او انتحال الشخصية', 'قيام المتدرب بالتوقيع عن شخص اخر على الأوراق الرسمية ، مثل الشهادات،واشعارات الغياب وغيرها				'),
(41, 'التشبه او الأنتماء الى جماعة منافية للدين', 'الاأنضمام للجماعات التي تدعو الى تصرفات غريبة وغير مألوفة في الفكر والسلوك ومنافية للدين الأسلامي				'),
(51, 'التشبه بالجنس الأخر ', 'تقمص الشخصية الذكرية بالنسبة للأناث ،أو الأنوثية بالنسبة للذكور بالهيئة او اللبس او التصرفات				'),
(61, 'التنمر', 'استهداف المتدرب او مجموعة من المتدربين لمتدرب معين او متدربين معينين بصورة متكرره وباستخدام أساليب غير مرغوبة ذات طبيعة او بدنية تلحق الأذى بالمتدرب'),
(71, 'التحرش الجنسي', 'أي قول او فعل يحمل دلالات جنسية صريحة او رمزية،تصدر باللفظ او الكتابة او اللمس او الاحتكاك البدني او النظر او الغمز بالعين او الايماء او اظهار او استعراض أجزاء حساسه من الجسم او غيره 		'),
(81, 'الممارسات الجنسية المحرمه', 'الشروع في الممارسات الجنسية المحرمة ومقدماته		'),
(91, 'المخالفات المعلوماتية ', 'أي فعل يرتكب من المتدرب متضمنا استخدام الحاسب الالي او الشبكة المعلوماتية بالمخالفة لاحكام نظام مكافحة الجرائم المعلوماتية بما يتعلق بالمنشأه التدريبيه او منسوبيها بغرض الأساءه اليهم			');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`student_ID`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `violations`
--
ALTER TABLE `violations`
  ADD PRIMARY KEY (`violation_id`),
  ADD KEY `violations_ibfk_1` (`student_ID`),
  ADD KEY `violation_typefk` (`violation_type_id`);

--
-- Indexes for table `violations_type`
--
ALTER TABLE `violations_type`
  ADD PRIMARY KEY (`violation_type_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `violations`
--
ALTER TABLE `violations`
  MODIFY `violation_id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;

--
-- AUTO_INCREMENT for table `violations_type`
--
ALTER TABLE `violations_type`
  MODIFY `violation_type_id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=101;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `violations`
--
ALTER TABLE `violations`
  ADD CONSTRAINT `violation_typefk` FOREIGN KEY (`violation_type_id`) REFERENCES `violations_type` (`violation_type_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `violations_ibfk_1` FOREIGN KEY (`student_ID`) REFERENCES `students` (`student_ID`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
