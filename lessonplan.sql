-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 01, 2021 at 03:46 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `lessonplan`
--

-- --------------------------------------------------------

--
-- Table structure for table `lesson_plan`
--

CREATE TABLE `lesson_plan` (
  `id` int(11) NOT NULL,
  `grade` varchar(100) NOT NULL,
  `subject` varchar(100) NOT NULL,
  `topic` varchar(255) NOT NULL,
  `brief_description` varchar(255) NOT NULL,
  `image_path` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `lesson_plan`
--

INSERT INTO `lesson_plan` (`id`, `grade`, `subject`, `topic`, `brief_description`, `image_path`) VALUES
(1, 'Kindergarten', 'Science', 'My Body', 'The simple plan will help your students gain understanding of different body parts', 'Uploads/myBody.webp'),
(3, 'Preschool', 'Science', 'Identify Living and Nonliving Things', 'Teach your students about living and nonliving things with this interactive lesson that keep your classes engaged', 'Uploads/living.jpg'),
(4, '1st grade', 'science', 'Parts of a Plant', 'Root, stem, flower, leaf! In this hands-on science lesson, your students will create their own plants to help them identify ', 'Uploads/plant.png'),
(7, '1st grade', 'Math', 'Fraction of a whole', 'Ready, set, fractions! In this hands-on lesson, your students will familiarize themselves with common fraction operations', 'Uploads/fractions.webp'),
(8, '4th grade', 'Reading & Writing', 'Verb Tenses: Past, Present, Future', 'Help your English language learners master effective communication with this lesson, which covers the past, present and future', 'Uploads/tenses.png'),
(9, 'Preschool', 'Math', 'Number Recognition 1-10', 'Kids love to count. Help your students gain a greater understanding of what each number represents', 'Uploads/numbers.jpg'),
(10, 'kindergarten', 'Science', 'My Five Senses', 'Learning the five senses helps children better explore the world around them. This fun-filled lesson helps the students get an easy grasp of the subject', 'Uploads/senses.png'),
(11, '2nd grade ', 'Science', 'States of Matter: Identify Solids, Liquids, Air', 'Use this lesson to show your students the different types of solids, liquids, and gasses. Show them how a solid turns into a liquids ', 'Uploads/matter.jpg'),
(12, '2nd grade ', 'Science', 'States of Matter: Identify Solids, Liquids, Air', 'Use this lesson to show your students the different types of solids, liquids, and gasses. Show them how a solid turns into a liquids ', 'Uploads/matter.jpg'),
(13, 'Kindergarten', 'Science', 'My Body', 'The simple plan will help your students gain understanding of different body parts', 'Uploads/myBody.webp'),
(14, 'Preschool', 'Science', 'Identify Living and Nonliving Things', 'Teach your students about living and nonliving things with this interactive lesson that keep your classes engaged', 'Uploads/living.jpg'),
(15, '1st grade', 'science', 'Parts of a Plant', 'Root, stem, flower, leaf! In this hands-on science lesson, your students will create their own plants to help them identify ', 'Uploads/plant.png'),
(16, '1st grade', 'Math', 'Fraction of a whole', 'Ready, set, fractions! In this hands-on lesson, your students will familiarize themselves with common fraction operations', 'Uploads/fractions.webp'),
(17, '4th grade', 'Reading & Writing', 'Verb Tenses: Past, Present, Future', 'Help your English language learners master effective communication with this lesson, which covers the past, present and future', 'Uploads/tenses.png'),
(18, 'Preschool', 'Math', 'Number Recognition 1-10', 'Kids love to count. Help your students gain a greater understanding of what each number represents', 'Uploads/numbers.jpg'),
(19, 'kindergarten', 'Science', 'My Five Senses', 'Learning the five senses helps children better explore the world around them. This fun-filled lesson helps the students get an easy grasp of the subject', 'Uploads/senses.png'),
(20, 'Kindergarten', 'Science', 'My Body', 'The simple plan will help your students gain understanding of different body parts', 'Uploads/myBody.webp'),
(21, 'Preschool', 'Science', 'Identify Living and Nonliving Things', 'Teach your students about living and nonliving things with this interactive lesson that keep your classes engaged', 'Uploads/living.jpg'),
(22, '1st grade', 'science', 'Parts of a Plant', 'Root, stem, flower, leaf! In this hands-on science lesson, your students will create their own plants to help them identify ', 'Uploads/plant.png'),
(23, '1st grade', 'Math', 'Fraction of a whole', 'Ready, set, fractions! In this hands-on lesson, your students will familiarize themselves with common fraction operations', 'Uploads/fractions.webp'),
(24, '4th grade', 'Reading & Writing', 'Verb Tenses: Past, Present, Future', 'Help your English language learners master effective communication with this lesson, which covers the past, present and future', 'Uploads/tenses.png'),
(25, 'Preschool', 'Math', 'Number Recognition 1-10', 'Kids love to count. Help your students gain a greater understanding of what each number represents', 'Uploads/numbers.jpg'),
(26, 'kindergarten', 'Science', 'My Five Senses', 'Learning the five senses helps children better explore the world around them. This fun-filled lesson helps the students get an easy grasp of the subject', 'Uploads/senses.png'),
(27, '2nd grade ', 'Science', 'States of Matter: Identify Solids, Liquids, Air', 'Use this lesson to show your students the different types of solids, liquids, and gasses. Show them how a solid turns into a liquids ', 'Uploads/matter.jpg'),
(28, '2nd grade ', 'Science', 'States of Matter: Identify Solids, Liquids, Air', 'Use this lesson to show your students the different types of solids, liquids, and gasses. Show them how a solid turns into a liquids ', 'Uploads/matter.jpg'),
(29, 'Kindergarten', 'Science', 'My Body', 'The simple plan will help your students gain understanding of different body parts', 'Uploads/myBody.webp'),
(30, 'Preschool', 'Science', 'Identify Living and Nonliving Things', 'Teach your students about living and nonliving things with this interactive lesson that keep your classes engaged', 'Uploads/living.jpg'),
(31, '1st grade', 'science', 'Parts of a Plant', 'Root, stem, flower, leaf! In this hands-on science lesson, your students will create their own plants to help them identify ', 'Uploads/plant.png'),
(32, '1st grade', 'Math', 'Fraction of a whole', 'Ready, set, fractions! In this hands-on lesson, your students will familiarize themselves with common fraction operations', 'Uploads/fractions.webp'),
(33, '4th grade', 'Reading & Writing', 'Verb Tenses: Past, Present, Future', 'Help your English language learners master effective communication with this lesson, which covers the past, present and future', 'Uploads/tenses.png'),
(34, 'Preschool', 'Math', 'Number Recognition 1-10', 'Kids love to count. Help your students gain a greater understanding of what each number represents', 'Uploads/numbers.jpg'),
(35, 'kindergarten', 'Science', 'My Five Senses', 'Learning the five senses helps children better explore the world around them. This fun-filled lesson helps the students get an easy grasp of the subject', 'Uploads/senses.png');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `lesson_plan`
--
ALTER TABLE `lesson_plan`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `lesson_plan`
--
ALTER TABLE `lesson_plan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
