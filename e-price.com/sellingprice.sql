-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 15, 2018 at 09:19 PM
-- Server version: 5.7.14
-- PHP Version: 5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sellingprice`
--

-- --------------------------------------------------------

--
-- Table structure for table `company`
--

CREATE TABLE `company` (
  `id` int(100) NOT NULL,
  `registration_no` varchar(255) NOT NULL,
  `company_name` varchar(50) NOT NULL,
  `owner_name` varchar(50) NOT NULL,
  `no_of_emply` varchar(100) NOT NULL,
  `type_of_com` varchar(255) NOT NULL,
  `about` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `pincode` varchar(10) NOT NULL,
  `state` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `company`
--

INSERT INTO `company` (`id`, `registration_no`, `company_name`, `owner_name`, `no_of_emply`, `type_of_com`, `about`, `address`, `pincode`, `state`) VALUES
(30, 'HP03142018143000000020', 'HP', 'Mr. jeetendra sahu', '1000', 'Laptop', 'The Hewlett-Packard Company or shortened to Hewlett-Packard was an American multinational information technology company headquartered in Palo Alto', 'gwalior', '474009', 'madhya pradesh'),
(28, 'sam03142018141200000017', 'samsung', 'Mr. jeetendra sahu', '1000', 'mobile ', 'Samsung is a South Korean multinational conglomerate headquartered in Samsung Town', 'gwalior', '474009', 'madhya pradesh'),
(29, 'Del03142018142500000021', 'Dell ', 'Mr. jeetendra sahu', '1000', 'Laptop', 'Samsung is a South Korean Samsung is a South Korean Samsung is a South Korean Samsung is a South Korean Samsung is a South Korean Samsung is a South Korean ', 'gwalior', '474009', 'madhya pradesh'),
(31, 'Mi03142018143300000026', 'Micromax', 'Mr. jeetendra sahu', '1000', 'mobile ', 'Micromax is an Indian Consumer Electronics\' company headquartered in Gurgaon, Haryana. The company was established as an IT Software company operating in', 'gwalior', '474009', 'madhya pradesh'),
(32, 'so03142018144500000034', 'sony', 'Mr. jeetendra sahu', '1000', 'mobile ', 'Sony Corporation is a Japanese multinational conglomerate corporation headquartered in KÅnan, Minato, Tokyo. Its diversified business', 'gwalior', '474009', 'madhya pradesh'),
(33, 'No03142018144700000026', 'Nokia', 'Mr. jeetendra sahu', '1000', 'mobile ', 'Nokia is a Finnish multinational communications, information technology and consumer electronics company, founded in 1865. Nokia\'s headquarters are in Espoo,', 'gwalior', '474009', 'madhya pradesh'),
(34, 'ac03142018145000000043', 'acer', 'Mr. jeetendra sahu', '1000', 'mobile ', 'Acer Inc is a Taiwanese multinational hardware and electronics corporation specializing in advanced electronics technology and is headquartered in ', 'gwalior', '474009', 'madhya pradesh'),
(35, 'as03142018145200000020', 'asus', 'Mr. jeetendra sahu', '1000', 'Laptop', 'AsusTek Computer Inc is a Taiwanese multinational computer and phone hardware and electronics company headquartered in Beitou District, Taipei, Taiwan. Its products include', 'gwalior', '474009', 'madhya pradesh');

-- --------------------------------------------------------

--
-- Table structure for table `product_detail`
--

CREATE TABLE `product_detail` (
  `id` int(255) NOT NULL,
  `product_id` varchar(255) NOT NULL,
  `co_reg_no` varchar(255) NOT NULL,
  `full_name` varchar(255) NOT NULL,
  `product_company` varchar(255) NOT NULL,
  `Product_type` varchar(255) NOT NULL,
  `classification` varchar(255) NOT NULL,
  `features` varchar(255) NOT NULL,
  `image_name` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product_detail`
--

INSERT INTO `product_detail` (`id`, `product_id`, `co_reg_no`, `full_name`, `product_company`, `Product_type`, `classification`, `features`, `image_name`) VALUES
(1, '03102018164941', '', 'Samsung Galaxy J2', 'samsung', 'Laptop', '8GB RAM , 1TB HARD DRIVE , CORE i7 7th GENERATION PROCESSOR', 'THIS IS THE VERY GOOD AND SMOOTHLY TOUCHABLE PRODUCT AND WILL VERY EXTRA FACILITY PRODUCT ', 'wifi2_03102018164941.PNG'),
(2, '03102018170431', '', 'Samsung Galaxy J2', 'samsung', 'Tablet', '8GB RAM , 1TB HARD DRIVE , CORE i7 7th GENERATION ', 'THIS IS THE VERY GOOD AND SMOOTHLY TOUCHABLE PRODUCT AND WILL VERY EXTRA FACILITY PRODUCT ', 'flipkart_replace_03102018170431.PNG'),
(3, '03102018170854', '', 'Samsung Galaxy J2', 'samsung', 'Tablet', '8GB RAM , 1TB HARD DRIVE , CORE i7 7th GENERATION ', 'THIS IS THE VERY GOOD AND SMOOTHLY TOUCHABLE PRODUCT AND WILL VERY EXTRA FACILITY PRODUCT ', 'pay_bill_16-11-2017_03102018170854.PNG'),
(4, '03102018171021', '', 'Samsung Galaxy J2', 'samsung', 'Tablet', '8GB RAM , 1TB HARD DRIVE , CORE i7 7th GENERATION ', 'THIS IS THE VERY GOOD AND SMOOTHLY TOUCHABLE PRODUCT AND WILL VERY EXTRA FACILITY PRODUCT ', 'airtel_7_dec_03102018171021.PNG'),
(8, '03132018203354', '', 'Samsung Galaxy j7 max', 'samsung', 'Mobile', 'Gold, 4GB RAM + 64GB Memory', 'This is a wider card with supporting text below as a natural lead in to additional content. This content is a little bit longer', '3m_03132018203354.jpg'),
(6, '03132018200359', '', 'Micromax Spark 4G VOLTE', 'micromax', 'Mobile', '(12.7cm) 5 inch Android Mobile Phone, Black', 'This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer', '6m_03132018200359.jpg'),
(7, '03132018201653', '', 'Samsung Galaxy On7 Prime ', 'samsung', 'Mobile', '(Gold, 4GB RAM + 64GB Memory)', 'Something short and leading about the collection beloits contents, the creator, etc. Make it short and sweet, but not too short so folks dont simply skip over it entirely.', '4m_03132018201653.jpg'),
(9, '03132018203529', '', 'Samsung Galaxy j2 max ', 'samsung', 'Mobile', 'Gold, 4GB RAM + 64GB Memory', 'Gold, 4GB RAM + 64GB Memory', '2m_03132018203529.jpg'),
(10, '03132018203948', '', 'Dell Vostro 3468 ', 'Dell', 'Laptop', '7th Gen Core i3 - 7100U/4GB/1TB/Ubuntu 14.04/Integrated Graphics', 'This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer', '1l_03132018203948.jpg'),
(11, '03152018193127', 'HP03142018143000000020', 'HP 15-bs145tu', 'Hp', 'Mobile', '5.6-inch FHD Laptop (8th Gen Intel Core i5-8250U/8GB/1TB/Free DOS/Integrated Graphics), Sparkling Black', 'orem Ipsum is simply dummy text of orem Ipsum is simply dummy text of orem Ipsum is simply dummy text of orem Ipsum is simply dummy ', '3l_03152018193127.jpg'),
(12, '03152018194046', 'HP03142018143000000020', 'HP 15-bs135fr', 'Hp', 'Laptop', '15.6-inch FHD Laptop (8th Gen Intel Core i5-8250U/8GB/1TB/Free DOS/Integrated Graphics), Sparkling Black', 'this this this this this this this this this this this this this this this this this this this this this this this this ', '4l_03152018194046.JPG'),
(13, '03152018194820', 'ac03142018145000000043', 'Acer Aspire ES', 'acer', 'Laptop', '15 15.6-inch Laptop (E1-7010/4GB/1TB/Linux/Integrated Graphics), Midnight Black', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry ', '6l_03152018194820.png');

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE `register` (
  `id` int(100) NOT NULL,
  `name` varchar(255) NOT NULL,
  `mobile` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`id`, `name`, `mobile`, `email`, `password`) VALUES
(1, 'jeetendra sahu', '9644993531', 'rjpdgeekspoints@gmail.com', 'hello');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `company`
--
ALTER TABLE `company`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `company_name` (`company_name`),
  ADD UNIQUE KEY `id` (`id`);

--
-- Indexes for table `product_detail`
--
ALTER TABLE `product_detail`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `product_id` (`product_id`),
  ADD KEY `co_reg_no` (`co_reg_no`);

--
-- Indexes for table `register`
--
ALTER TABLE `register`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `company`
--
ALTER TABLE `company`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;
--
-- AUTO_INCREMENT for table `product_detail`
--
ALTER TABLE `product_detail`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT for table `register`
--
ALTER TABLE `register`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
