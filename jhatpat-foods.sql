-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 16, 2020 at 09:07 PM
-- Server version: 10.4.8-MariaDB
-- PHP Version: 7.3.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `foodie-moodie`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `username` varchar(11) NOT NULL,
  `password` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`) VALUES
(1, 'admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `menu`
--

CREATE TABLE `menu` (
  `id` int(11) NOT NULL,
  `item_no` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `type` varchar(50) NOT NULL,
  `detail` varchar(500) NOT NULL,
  `price` varchar(50) NOT NULL,
  `image` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `menu`
--

INSERT INTO `menu` (`id`, `item_no`, `name`, `type`, `detail`, `price`, `image`) VALUES
(3, 2, 'Samosa', 'Veg', 'Samosa is a fried or baked pastry with a savoury filling, such as spiced potatoes, onions, peas, cheese, meat, or lentils.', '15', 'samosa.jpg'),
(5, 3, 'Jalebi', 'Veg', 'Jalebi is made by deep-frying maida flour batter in pretzel or circular shapes, which are then soaked in sugar syrup.', '49', 'jalebi.jpg'),
(6, 4, 'Naan', 'Veg', 'Naan is a leavened, oven-baked flatbread.', '12', 'naan.jpg'),
(7, 5, 'Paneer Bhurji', 'Veg', 'Scrambled Indian cottage cheese with onion, tomatoes and spices.', '50', 'paneer-bhurji.jpg'),
(8, 6, 'Pulav', 'Veg', 'Vegetable Pulao (Veg Pulav) is a spicy rice dish prepared by cooking rice with various vegetables and spices.', '60', 'pulav.jpg'),
(9, 7, 'Biryani', 'Non Veg', 'Chicken Biryani is a delicious savory rice dish loaded with spicy marinated chicken, caramelized onions, and flavorful saffron rice.', '100', 'biryani.jpg'),
(10, 8, 'Fish', 'Non Veg', 'Fish fry is a meal containing battered or breaded fried fish.', '100', 'fish.jpg'),
(11, 9, 'Butter Chicken', 'Non Veg', 'Butter chicken or makhan murg is a dish, originating in the Indian subcontinent, of chicken in a mildly spiced tomato sauce.', '99', 'Butter-Chicken.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `order`
--

CREATE TABLE `order` (
  `Id` int(11) NOT NULL,
  `orderId` int(11) NOT NULL,
  `userId` int(11) NOT NULL,
  `itemName` varchar(50) NOT NULL,
  `price` varchar(100) NOT NULL,
  `qty` int(11) NOT NULL,
  `total` varchar(100) NOT NULL,
  `name` varchar(50) NOT NULL,
  `address` varchar(100) NOT NULL,
  `email` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `order`
--

INSERT INTO `order` (`Id`, `orderId`, `userId`, `itemName`, `price`, `qty`, `total`, `name`, `address`, `email`) VALUES
(18, 2, 2, 'Jalebi', '49', 1, '49', 'abcd', 'Shankar Ngr, Tilak Rd, ABC(east) eee\r\nMumbai 400001', 'aaa@g.c'),
(19, 2, 2, 'Samosa', '15', 1, '15', 'abcd', 'Shankar Ngr, Tilak Rd, ABC(east) eee\r\nMumbai 400001', 'aaa@g.c'),
(20, 1, 1, 'Samosa', '15', 2, '79', 'Nitish Nagar', 'Shivaji Road, Thane(W), Thane - 400601', 'nitish@gmail.com'),
(21, 1, 1, 'Jalebi', '49', 1, '79', 'Nitish Nagar', 'Shivaji Road, Thane(W), Thane - 400601', 'nitish@gmail.com'),
(22, 13, 13, 'Samosa', '15', 1, '126', 'Jethalal Gada', 'Flat No. 100, B wing Gokuldhan Soceity, Powder Gully, Goregoan Mumbai, 400005', 'jethiya@gmail.com'),
(23, 13, 13, 'Jalebi', '49', 1, '126', 'Jethalal Gada', 'Flat No. 100, B wing Gokuldhan Soceity, Powder Gully, Goregoan Mumbai, 400005', 'jethiya@gmail.com'),
(24, 13, 13, 'Naan', '12', 1, '126', 'Jethalal Gada', 'Flat No. 100, B wing Gokuldhan Soceity, Powder Gully, Goregoan Mumbai, 400005', 'jethiya@gmail.com'),
(25, 13, 13, 'Paneer Bhurji', '50', 1, '126', 'Jethalal Gada', 'Flat No. 100, B wing Gokuldhan Soceity, Powder Gully, Goregoan Mumbai, 400005', 'jethiya@gmail.com'),
(26, 13, 13, 'Samosa', '15', 1, '27', 'Jethalal Gada', 'Flat No. 100, B wing Gokuldhan Soceity, Powder Gully, Goregoan Mumbai, 400005', 'jethiya@gmail.com'),
(27, 13, 13, 'Naan', '12', 1, '27', 'Jethalal Gada', 'Flat No. 100, B wing Gokuldhan Soceity, Powder Gully, Goregoan Mumbai, 400005', 'jethiya@gmail.com'),
(28, 13, 13, 'Samosa', '15', 1, '127', 'Jethalal Gada', 'Flat No. 100, B wing Gokuldhan Soceity, Powder Gully, Goregoan Mumbai, 400005', 'jethiya@gmail.com'),
(29, 13, 13, 'Naan', '12', 1, '127', 'Jethalal Gada', 'Flat No. 100, B wing Gokuldhan Soceity, Powder Gully, Goregoan Mumbai, 400005', 'jethiya@gmail.com'),
(30, 13, 13, 'Biryani', '100', 1, '127', 'Jethalal Gada', 'Flat No. 100, B wing Gokuldhan Soceity, Powder Gully, Goregoan Mumbai, 400005', 'jethiya@gmail.com'),
(31, 13, 13, 'Jalebi', '49', 1, '349', 'Jethalal Gada', 'Flat No. 100, B wing Gokuldhan Soceity, Powder Gully, Goregoan Mumbai, 400005', 'jethiya@gmail.com'),
(32, 13, 13, 'Biryani', '100', 3, '349', 'Jethalal Gada', 'Flat No. 100, B wing Gokuldhan Soceity, Powder Gully, Goregoan Mumbai, 400005', 'jethiya@gmail.com'),
(33, 13, 13, 'Jalebi', '49', 1, '349', 'Jethalal Gada', 'Flat No. 100, B wing Gokuldhan Soceity, Powder Gully, Goregoan Mumbai, 400005', 'jethiya@gmail.com'),
(34, 13, 13, 'Biryani', '100', 3, '349', 'Jethalal Gada', 'Flat No. 100, B wing Gokuldhan Soceity, Powder Gully, Goregoan Mumbai, 400005', 'jethiya@gmail.com'),
(35, 13, 13, 'Jalebi', '49', 1, '349', 'Jethalal Gada', 'Flat No. 100, B wing Gokuldhan Soceity, Powder Gully, Goregoan Mumbai, 400005', 'jethiya@gmail.com'),
(36, 13, 13, 'Biryani', '100', 3, '349', 'Jethalal Gada', 'Flat No. 100, B wing Gokuldhan Soceity, Powder Gully, Goregoan Mumbai, 400005', 'jethiya@gmail.com'),
(37, 13, 13, 'Jalebi', '49', 1, '349', 'Jethalal Gada', 'Flat No. 100, B wing Gokuldhan Soceity, Powder Gully, Goregoan Mumbai, 400005', 'jethiya@gmail.com'),
(38, 13, 13, 'Biryani', '100', 3, '349', 'Jethalal Gada', 'Flat No. 100, B wing Gokuldhan Soceity, Powder Gully, Goregoan Mumbai, 400005', 'jethiya@gmail.com'),
(39, 13, 13, 'Jalebi', '49', 1, '349', 'Jethalal Gada', 'Flat No. 100, B wing Gokuldhan Soceity, Powder Gully, Goregoan Mumbai, 400005', 'jethiya@gmail.com'),
(40, 13, 13, 'Biryani', '100', 3, '349', 'Jethalal Gada', 'Flat No. 100, B wing Gokuldhan Soceity, Powder Gully, Goregoan Mumbai, 400005', 'jethiya@gmail.com'),
(41, 13, 13, 'Jalebi', '49', 1, '349', 'Jethalal Gada', 'Flat No. 100, B wing Gokuldhan Soceity, Powder Gully, Goregoan Mumbai, 400005', 'jethiya@gmail.com'),
(42, 13, 13, 'Biryani', '100', 3, '349', 'Jethalal Gada', 'Flat No. 100, B wing Gokuldhan Soceity, Powder Gully, Goregoan Mumbai, 400005', 'jethiya@gmail.com'),
(43, 13, 13, 'Samosa', '15', 1, '162', 'Jethalal Gada', 'Flat No. 100, B wing Gokuldhan Soceity, Powder Gully, Goregoan Mumbai, 400005', 'jethiya@gmail.com'),
(44, 13, 13, 'Jalebi', '49', 3, '162', 'Jethalal Gada', 'Flat No. 100, B wing Gokuldhan Soceity, Powder Gully, Goregoan Mumbai, 400005', 'jethiya@gmail.com'),
(45, 13, 13, 'Jalebi', '49', 2, '122', 'Jethalal Gada', 'Flat No. 100, B wing Gokuldhan Soceity, Powder Gully, Goregoan Mumbai, 400005', 'jethiya@gmail.com'),
(46, 13, 13, 'Naan', '12', 2, '122', 'Jethalal Gada', 'Flat No. 100, B wing Gokuldhan Soceity, Powder Gully, Goregoan Mumbai, 400005', 'jethiya@gmail.com'),
(47, 13, 13, 'Jalebi', '49', 2, '122', 'Jethalal Gada', 'Flat No. 100, B wing Gokuldhan Soceity, Powder Gully, Goregoan Mumbai, 400005', 'jethiya@gmail.com'),
(48, 13, 13, 'Naan', '12', 2, '122', 'Jethalal Gada', 'Flat No. 100, B wing Gokuldhan Soceity, Powder Gully, Goregoan Mumbai, 400005', 'jethiya@gmail.com'),
(49, 13, 13, 'Samosa', '15', 4, '109', 'Jethalal Gada', 'Flat No. 100, B wing Gokuldhan Soceity, Powder Gully, Goregoan Mumbai, 400005', 'jethiya@gmail.com'),
(50, 13, 13, 'Jalebi', '49', 1, '109', 'Jethalal Gada', 'Flat No. 100, B wing Gokuldhan Soceity, Powder Gully, Goregoan Mumbai, 400005', 'jethiya@gmail.com'),
(51, 13, 13, 'Samosa', '15', 4, '109', 'Jethalal Gada', 'Flat No. 100, B wing Gokuldhan Soceity, Powder Gully, Goregoan Mumbai, 400005', 'jethiya@gmail.com'),
(52, 13, 13, 'Jalebi', '49', 1, '109', 'Jethalal Gada', 'Flat No. 100, B wing Gokuldhan Soceity, Powder Gully, Goregoan Mumbai, 400005', 'jethiya@gmail.com'),
(53, 13, 13, 'Samosa', '15', 4, '109', 'Jethalal Gada', 'Flat No. 100, B wing Gokuldhan Soceity, Powder Gully, Goregoan Mumbai, 400005', 'jethiya@gmail.com'),
(54, 13, 13, 'Jalebi', '49', 1, '109', 'Jethalal Gada', 'Flat No. 100, B wing Gokuldhan Soceity, Powder Gully, Goregoan Mumbai, 400005', 'jethiya@gmail.com'),
(55, 13, 13, 'Samosa', '15', 4, '109', 'Jethalal Gada', 'Flat No. 100, B wing Gokuldhan Soceity, Powder Gully, Goregoan Mumbai, 400005', 'jethiya@gmail.com'),
(56, 13, 13, 'Jalebi', '49', 1, '109', 'Jethalal Gada', 'Flat No. 100, B wing Gokuldhan Soceity, Powder Gully, Goregoan Mumbai, 400005', 'jethiya@gmail.com'),
(57, 13, 13, 'Naan', '12', 1, '12', 'Jethalal Gada', 'Flat No. 100, B wing Gokuldhan Soceity, Powder Gully, Goregoan Mumbai, 400005', 'jethiya@gmail.com'),
(58, 13, 13, 'Naan', '12', 1, '12', 'Jethalal Gada', 'Flat No. 100, B wing Gokuldhan Soceity, Powder Gully, Goregoan Mumbai, 400005', 'jethiya@gmail.com'),
(59, 13, 13, 'Naan', '12', 1, '12', 'Jethalal Gada', 'Flat No. 100, B wing Gokuldhan Soceity, Powder Gully, Goregoan Mumbai, 400005', 'jethiya@gmail.com'),
(60, 13, 13, 'Naan', '12', 1, '12', 'Jethalal Gada', 'Flat No. 100, B wing Gokuldhan Soceity, Powder Gully, Goregoan Mumbai, 400005', 'jethiya@gmail.com'),
(61, 13, 13, 'Naan', '12', 1, '12', 'Jethalal Gada', 'Flat No. 100, B wing Gokuldhan Soceity, Powder Gully, Goregoan Mumbai, 400005', 'jethiya@gmail.com'),
(62, 13, 13, 'Jalebi', '49', 3, '973', 'Jethalal Gada', 'Flat No. 100, B wing Gokuldhan Soceity, Powder Gully, Goregoan Mumbai, 400005', 'jethiya@gmail.com'),
(63, 13, 13, 'Samosa', '15', 2, '973', 'Jethalal Gada', 'Flat No. 100, B wing Gokuldhan Soceity, Powder Gully, Goregoan Mumbai, 400005', 'jethiya@gmail.com'),
(64, 13, 13, 'Biryani', '100', 4, '973', 'Jethalal Gada', 'Flat No. 100, B wing Gokuldhan Soceity, Powder Gully, Goregoan Mumbai, 400005', 'jethiya@gmail.com'),
(65, 13, 13, 'Butter Chicken', '99', 4, '973', 'Jethalal Gada', 'Flat No. 100, B wing Gokuldhan Soceity, Powder Gully, Goregoan Mumbai, 400005', 'jethiya@gmail.com'),
(66, 13, 13, 'Samosa', '15', 1, '76', 'Jethalal Gada', 'Flat No. 100, B wing Gokuldhan Soceity, Powder Gully, Goregoan Mumbai, 400005', 'jethiya@gmail.com'),
(67, 13, 13, 'Jalebi', '49', 1, '76', 'Jethalal Gada', 'Flat No. 100, B wing Gokuldhan Soceity, Powder Gully, Goregoan Mumbai, 400005', 'jethiya@gmail.com'),
(68, 13, 13, 'Naan', '12', 1, '76', 'Jethalal Gada', 'Flat No. 100, B wing Gokuldhan Soceity, Powder Gully, Goregoan Mumbai, 400005', 'jethiya@gmail.com'),
(69, 13, 13, 'Samosa', '15', 1, '15', 'Jethalal Gada', 'Flat No. 100, B wing Gokuldhan Soceity, Powder Gully, Goregoan Mumbai, 400005', 'jethiya@gmail.com'),
(70, 13, 13, 'Jalebi', '49', 1, '49', 'Jethalal Gada', 'Flat No. 100, B wing Gokuldhan Soceity, Powder Gully, Goregoan Mumbai, 400005', 'jethiya@gmail.com'),
(71, 13, 13, 'Jalebi', '49', 1, '49', 'Jethalal Gada', 'Flat No. 100, B wing Gokuldhan Soceity, Powder Gully, Goregoan Mumbai, 400005', 'jethiya@gmail.com'),
(72, 13, 13, 'Naan', '12', 1, '12', 'Jethalal Gada', 'Flat No. 100, B wing Gokuldhan Soceity, Powder Gully, Goregoan Mumbai, 400005', 'jethiya@gmail.com'),
(73, 13, 13, 'Naan', '12', 1, '12', 'Jethalal Gada', 'Flat No. 100, B wing Gokuldhan Soceity, Powder Gully, Goregoan Mumbai, 400005', 'jethiya@gmail.com'),
(74, 13, 13, 'Samosa', '15', 3, '217', 'Jethalal Gada', 'Flat No. 100, B wing Gokuldhan Soceity, Powder Gully, Goregoan Mumbai, 400005', 'jethiya@gmail.com'),
(75, 13, 13, 'Jalebi', '49', 2, '217', 'Jethalal Gada', 'Flat No. 100, B wing Gokuldhan Soceity, Powder Gully, Goregoan Mumbai, 400005', 'jethiya@gmail.com'),
(76, 13, 13, 'Naan', '12', 2, '217', 'Jethalal Gada', 'Flat No. 100, B wing Gokuldhan Soceity, Powder Gully, Goregoan Mumbai, 400005', 'jethiya@gmail.com'),
(77, 13, 13, 'Paneer Bhurji', '50', 1, '217', 'Jethalal Gada', 'Flat No. 100, B wing Gokuldhan Soceity, Powder Gully, Goregoan Mumbai, 400005', 'jethiya@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `mobile` varchar(200) NOT NULL,
  `address` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL,
  `cpassword` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `name`, `mobile`, `address`, `email`, `password`, `cpassword`) VALUES
(1, 'Nitish Nagar', '9874651230', 'Shivaji Road, Thane(W), Thane - 400601', 'nitish@gmail.com', 'nitishfood@123', 'nitishfood@123'),
(2, 'Nilesh Kawar', '9988776655', 'Plot-15, Sector-4, Sanpada, Navi Mumbai - 400028', 'nilesh@gmail.com', 'nileshfood-456', 'nileshfood-456'),
(3, 'Gajodhar Singh', '9988776543', 'No Chill Nagar, Plot No. 20, Ghodbunder Rd, Thane(W)-400069', 'gajodhar@gmail.com', 'gajju@42069', 'gajju@42069'),
(4, 'Bheem', '1213141516', 'Dholakpur Housing Society, Kasarvadavli, Thane(W)-400036', 'bheem@gmail.com', 'bheem_000', 'bheem_000'),
(5, 'Sherlock Holmes', '9988554433', '221-B, Baker Street, Navi Mumbai - 400078', 'sherlock@yahoo.com', 'sherlock-221', 'sherlock-221'),
(6, 'Ganesh Gaitonde', '9988770420', 'Plot no.6, Gopalmath, Panvel, Navi Mumbai - 400110', 'kukkoo@gmail.com', 'bhagwan@123', 'bhagwan@123'),
(12, 'Nil', '9988776540', 'rgaraea ragre', 'aaa@g.c', '123', '123'),
(13, 'Jethalal Gada', '987456321', 'Flat No. 100, B wing Gokuldhan Soceity, Powder Gully, Goregoan Mumbai, 400005', 'jethiya@gmail.com', 'jethiya@123', 'jethiya@123'),
(14, 'Jethalal Gada', '987456321', 'Flat No. 100, B wing Gokuldhan Soceity, Powder Gully, Goregoan Mumbai, 400005', 'jethiya1@gmail.com', 'jethiya@123', 'jethiya@123');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `menu`
--
ALTER TABLE `menu`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `item_no` (`item_no`);

--
-- Indexes for table `order`
--
ALTER TABLE `order`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `menu`
--
ALTER TABLE `menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `order`
--
ALTER TABLE `order`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=78;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
