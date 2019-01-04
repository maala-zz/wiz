-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 04, 2019 at 06:14 PM
-- Server version: 10.1.32-MariaDB
-- PHP Version: 7.2.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ven`
--

-- --------------------------------------------------------

--
-- Table structure for table `deliver`
--

CREATE TABLE `deliver` (
  `recipe_id` int(11) NOT NULL,
  `resturant_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `meal`
--

CREATE TABLE `meal` (
  `id` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `category` varchar(20) NOT NULL,
  `instruction` text NOT NULL,
  `image` varchar(80) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `meal`
--

INSERT INTO `meal` (`id`, `name`, `category`, `instruction`, `image`) VALUES
(1, 'Egg Drop Soup', 'Vegetarian', 'In a wok add chicken broth and wait for it to boil. Next add salt, sugar, white pepper, sesame seed oil. When the chicken broth is boiling add the vegetables to the wok.', 'https://www.themealdb.com//images//media//meals//1529446137.jpg'),
(2, 'Hot and Sour Soup', 'Pork', 'MAKING THE SOUP in a wok add chicken broth and wait for it to boil. Next add salt, sugar, sesame seed oil, white pepper, hot pepper sauce, vinegar and soy sauce and stir for few seconds.', 'https://www.themealdb.com/images/media/meals/1529445893.jpg'),
(3, 'Chicken Congee', 'Chicken', 'MARINATING THE CHICKEN In a bowl, add chicken, salt, white pepper, ginger juice and then mix it together well.', 'https://www.themealdb.com//images//media//meals//1529446352.jpg'),
(4, 'Beef Lo Mein', 'Beef', 'STEP 1 - MARINATING THE BEEF In a bowl, add the beef, salt, 1 pinch white pepper, 1 Teaspoon sesame seed oil, 1-2 egg, corn starch,1 Tablespoon of oil and mix together. STEP 2 - BOILING THE THE NOODLES In a 6 qt pot add your noodles to boiling water until the noodles are submerged and boil on high heat for 10 seconds. After your noodles is done boiling strain and cool with cold water.', 'https://www.themealdb.com/images/media/meals/1529444830.jpg'),
(5, 'Shrimp Chow Fun', 'Seafood', 'STEP 1 - SOAK THE RICE NOODLES Soak the rice noodles overnight until they are soft STEP 2 - BOIL THE RICE NOODLES Boil the noodles for 10-15 minutes and then rinse with cold water to stop the cooking process of the noodles. STEP 3 -MARINATING THE SHRIMP In a bowl add the shrimp, egg, 1 pinch of white pepper', 'https://www.themealdb.com/images/media/meals/1529445434.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `resturant_info`
--

CREATE TABLE `resturant_info` (
  `id` int(11) NOT NULL,
  `name` varchar(30) DEFAULT NULL,
  `complaint_phone` varchar(30) DEFAULT NULL,
  `website` varchar(30) DEFAULT NULL,
  `password` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `resturant_info`
--

INSERT INTO `resturant_info` (`id`, `name`, `complaint_phone`, `website`, `password`) VALUES
(1, 'Res', '+9639555816', 'www.me.com', 'password');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `meal`
--
ALTER TABLE `meal`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `resturant_info`
--
ALTER TABLE `resturant_info`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `meal`
--
ALTER TABLE `meal`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `resturant_info`
--
ALTER TABLE `resturant_info`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=68;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
