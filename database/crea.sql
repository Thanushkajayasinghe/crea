-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Mar 07, 2020 at 02:32 PM
-- Server version: 5.7.26
-- PHP Version: 7.2.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `crea`
--

-- --------------------------------------------------------

--
-- Table structure for table `icon_gallery`
--

DROP TABLE IF EXISTS `icon_gallery`;
CREATE TABLE IF NOT EXISTS `icon_gallery` (
  `icon_gallery_id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `icon` varchar(150) NOT NULL,
  PRIMARY KEY (`icon_gallery_id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `icon_gallery`
--

INSERT INTO `icon_gallery` (`icon_gallery_id`, `name`, `icon`) VALUES
(1, 'size', 'icon-select-an-objecto-tool'),
(2, 'bathrooms', 'icon-safety-shower'),
(3, 'tv_lounge', 'icon-old-television'),
(4, 'garage', 'icon-garage'),
(5, 'bedrooms', 'icon-bed');

-- --------------------------------------------------------

--
-- Table structure for table `property_features`
--

DROP TABLE IF EXISTS `property_features`;
CREATE TABLE IF NOT EXISTS `property_features` (
  `serial` int(11) NOT NULL AUTO_INCREMENT,
  `property_serial` int(11) NOT NULL,
  `features` varchar(150) NOT NULL,
  PRIMARY KEY (`serial`)
) ENGINE=MyISAM AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `property_features`
--

INSERT INTO `property_features` (`serial`, `property_serial`, `features`) VALUES
(1, 1, 'Air Conditioning'),
(2, 1, 'Microwave'),
(3, 1, 'Quiet Neighbourhood'),
(4, 1, 'Barbeque'),
(5, 1, 'Outdoor Shower'),
(6, 1, 'TV Cable & WIFI'),
(7, 1, 'Dryer'),
(8, 1, 'Refrigerator'),
(9, 1, 'Window Coverings'),
(10, 1, 'Laundry'),
(11, 1, 'Swimming Pool');

-- --------------------------------------------------------

--
-- Table structure for table `property_ico_and_description`
--

DROP TABLE IF EXISTS `property_ico_and_description`;
CREATE TABLE IF NOT EXISTS `property_ico_and_description` (
  `serial` int(11) NOT NULL AUTO_INCREMENT,
  `property_serial` int(11) NOT NULL,
  `icon_gallery_id` int(11) NOT NULL,
  `description` varchar(150) NOT NULL,
  PRIMARY KEY (`serial`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `property_ico_and_description`
--

INSERT INTO `property_ico_and_description` (`serial`, `property_serial`, `icon_gallery_id`, `description`) VALUES
(1, 1, 1, '4800 sq ft'),
(2, 1, 2, '2 Bathrooms'),
(3, 1, 3, 'TV Lounge'),
(4, 1, 4, '1 Garage'),
(5, 2, 5, '2 Bedrooms');

-- --------------------------------------------------------

--
-- Table structure for table `property_images`
--

DROP TABLE IF EXISTS `property_images`;
CREATE TABLE IF NOT EXISTS `property_images` (
  `serial` int(11) NOT NULL AUTO_INCREMENT,
  `property_serial` int(11) NOT NULL,
  `property_image` varchar(250) NOT NULL,
  PRIMARY KEY (`serial`)
) ENGINE=MyISAM AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `property_images`
--

INSERT INTO `property_images` (`serial`, `property_serial`, `property_image`) VALUES
(1, 1, '000001Image1'),
(2, 1, '000001Image2'),
(3, 1, '000003Image1'),
(4, 1, 'latest3'),
(5, 1, 'latest5'),
(6, 6, 'grid2'),
(7, 7, 'latest4'),
(8, 8, 'listing7'),
(9, 9, 'listing8'),
(10, 10, 'listing6');

-- --------------------------------------------------------

--
-- Table structure for table `property_main`
--

DROP TABLE IF EXISTS `property_main`;
CREATE TABLE IF NOT EXISTS `property_main` (
  `property_serial` int(11) NOT NULL AUTO_INCREMENT,
  `property_id` varchar(30) NOT NULL,
  `property_name` varchar(150) NOT NULL,
  `property_address` varchar(200) NOT NULL,
  `property_description_1` varchar(500) NOT NULL,
  `property_description_2` varchar(500) NOT NULL,
  `property_type` varchar(50) NOT NULL,
  `property_contract_type` varchar(30) NOT NULL,
  `property_location` varchar(80) NOT NULL,
  `property_price` decimal(15,0) NOT NULL,
  `property_price_often` varchar(50) NOT NULL,
  `property_size` varchar(30) NOT NULL,
  `property_bedrooms` int(11) NOT NULL,
  `property_bathrooms` int(11) NOT NULL,
  `property_x_coordinate` varchar(30) NOT NULL,
  `property_y_coordinate` varchar(30) NOT NULL,
  `mainImage` varchar(100) DEFAULT NULL,
  `best_deal` tinyint(1) NOT NULL DEFAULT '0',
  `featured_properties` tinyint(1) NOT NULL DEFAULT '0',
  `created_date` datetime DEFAULT NULL,
  `property_sold` tinyint(1) NOT NULL DEFAULT '0',
  `property_province` varchar(70) NOT NULL,
  `property_district` varchar(100) NOT NULL,
  PRIMARY KEY (`property_serial`)
) ENGINE=MyISAM AUTO_INCREMENT=11 DEFAULT CHARSET=latin1 COMMENT='Main Table for property details';

--
-- Dumping data for table `property_main`
--

INSERT INTO `property_main` (`property_serial`, `property_id`, `property_name`, `property_address`, `property_description_1`, `property_description_2`, `property_type`, `property_contract_type`, `property_location`, `property_price`, `property_price_often`, `property_size`, `property_bedrooms`, `property_bathrooms`, `property_x_coordinate`, `property_y_coordinate`, `mainImage`, `best_deal`, `featured_properties`, `created_date`, `property_sold`, `property_province`, `property_district`) VALUES
(1, '000001', '987 Cantebury Drive', '45 Regent Street, London, UK', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras et dui vestibulum, bibendum purus sit amet, vulputate mauris. Ut adipiscing gravida tincidunt. Duis euismod placerat rhoncus. Phasellus mollis imperdiet placerat. Sed ac turpis nisl. Mauris at ante mauris. Aliquam posuere fermentum lorem, a aliquam mauris rutrum a. Curabitur sit amet pretium lectus, nec consequat orci.', 'Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Duis et metus in libero sollicitudin venenatis eu sed enim. Nam felis lorem, suscipit ac nisl ac, iaculis dapibus tellus. Cras ante justo, aliquet quis placerat nec, molestie id turpis. ', 'Apartments', 'Rent', 'Bentota', '8600', 'Per Month', '5,500 ft2', 5, 3, '6.055271', '80.183507', '000001Image1', 1, 1, '2019-11-20 07:30:20', 0, 'Southern Province', 'Galle'),
(2, '000002', 'Historic Town House', '45 Regent Street, London, UK', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras et dui vestibulum, bibendum purus sit amet, vulputate mauris. Ut adipiscing gravida tincidunt. Duis euismod placerat rhoncus. Phasellus mollis imperdiet placerat. Sed ac turpis nisl. Mauris at ante mauris. Aliquam posuere fermentum lorem, a aliquam mauris rutrum a. Curabitur sit amet pretium lectus, nec consequat orci.', 'Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Duis et metus in libero sollicitudin venenatis eu sed enim. Nam felis lorem, suscipit ac nisl ac, iaculis dapibus tellus. Cras ante justo, aliquet quis placerat nec, molestie id turpis. ', 'Villa', 'Sale', 'Moratuwa', '10200', 'Per Year', '8,500 ft2', 3, 4, '6.502691', '80.214683', '000001Image2', 1, 1, '2019-11-17 07:30:20', 0, 'Southern Province', 'Galle'),
(3, '000003', 'Park Ave Villa 1', '45 Regent Street, London, UK', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras et dui vestibulum, bibendum purus sit amet, vulputate mauris. Ut adipiscing gravida tincidunt. Duis euismod placerat rhoncus. Phasellus mollis imperdiet placerat. Sed ac turpis nisl. Mauris at ante mauris. Aliquam posuere fermentum lorem, a aliquam mauris rutrum a. Curabitur sit amet pretium lectus, nec consequat orci.', 'Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Duis et metus in libero sollicitudin venenatis eu sed enim. Nam felis lorem, suscipit ac nisl ac, iaculis dapibus tellus. Cras ante justo, aliquet quis placerat nec, molestie id turpis. ', 'House', 'Sale', 'Rathnapura', '5600', '', '5,200 ft2', 5, 2, '', '', '000003Image1', 0, 0, '2019-11-18 07:30:20', 0, '', ''),
(4, '000004', 'Park Ave Villa 2', '45 Regent Street, London, UK', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras et dui vestibulum, bibendum purus sit amet, vulputate mauris. Ut adipiscing gravida tincidunt. Duis euismod placerat rhoncus. Phasellus mollis imperdiet placerat. Sed ac turpis nisl. Mauris at ante mauris. Aliquam posuere fermentum lorem, a aliquam mauris rutrum a. Curabitur sit amet pretium lectus, nec consequat orci.', 'Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Duis et metus in libero sollicitudin venenatis eu sed enim. Nam felis lorem, suscipit ac nisl ac, iaculis dapibus tellus. Cras ante justo, aliquet quis placerat nec, molestie id turpis. ', 'House', 'Rent', 'Negambo', '2600', '', '5,200 ft2', 5, 2, '', '', 'latest3', 0, 1, '2019-11-21 07:30:20', 0, '', ''),
(5, '000005', 'Park Ave Villa 3', '45 Regent Street, London, UK', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras et dui vestibulum, bibendum purus sit amet, vulputate mauris. Ut adipiscing gravida tincidunt. Duis euismod placerat rhoncus. Phasellus mollis imperdiet placerat. Sed ac turpis nisl. Mauris at ante mauris. Aliquam posuere fermentum lorem, a aliquam mauris rutrum a. Curabitur sit amet pretium lectus, nec consequat orci.', 'Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Duis et metus in libero sollicitudin venenatis eu sed enim. Nam felis lorem, suscipit ac nisl ac, iaculis dapibus tellus. Cras ante justo, aliquet quis placerat nec, molestie id turpis. ', 'House', 'Rent', 'Kandy', '5100', '', '5,200 ft2', 2, 2, '', '', 'latest5', 1, 1, '2019-11-15 07:30:20', 0, '', ''),
(6, '000006', 'Park Ave Villa 4', '45 Regent Street, London, UK', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras et dui vestibulum, bibendum purus sit amet, vulputate mauris. Ut adipiscing gravida tincidunt. Duis euismod placerat rhoncus. Phasellus mollis imperdiet placerat. Sed ac turpis nisl. Mauris at ante mauris. Aliquam posuere fermentum lorem, a aliquam mauris rutrum a. Curabitur sit amet pretium lectus, nec consequat orci.', 'Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Duis et metus in libero sollicitudin venenatis eu sed enim. Nam felis lorem, suscipit ac nisl ac, iaculis dapibus tellus. Cras ante justo, aliquet quis placerat nec, molestie id turpis. ', 'House', 'Sale', 'Galle', '8000', '', '5,200 ft2', 2, 2, '', '', 'grid2', 0, 0, '2019-11-16 07:30:20', 0, 'Southern Province', 'Matara'),
(7, '000007', 'Park Ave Villa 5', '45 Regent Street, London, UK', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras et dui vestibulum, bibendum purus sit amet, vulputate mauris. Ut adipiscing gravida tincidunt. Duis euismod placerat rhoncus. Phasellus mollis imperdiet placerat. Sed ac turpis nisl. Mauris at ante mauris. Aliquam posuere fermentum lorem, a aliquam mauris rutrum a. Curabitur sit amet pretium lectus, nec consequat orci.', 'Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Duis et metus in libero sollicitudin venenatis eu sed enim. Nam felis lorem, suscipit ac nisl ac, iaculis dapibus tellus. Cras ante justo, aliquet quis placerat nec, molestie id turpis. ', 'House', 'Sale', 'Matara', '7600', '', '5,200 ft2', 1, 2, '', '', 'latest4', 1, 0, '2019-11-18 07:30:20', 0, '', ''),
(8, '000008', 'Park Ave Villa 6', '45 Regent Street, London, UK', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras et dui vestibulum, bibendum purus sit amet, vulputate mauris. Ut adipiscing gravida tincidunt. Duis euismod placerat rhoncus. Phasellus mollis imperdiet placerat. Sed ac turpis nisl. Mauris at ante mauris. Aliquam posuere fermentum lorem, a aliquam mauris rutrum a. Curabitur sit amet pretium lectus, nec consequat orci.', 'Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Duis et metus in libero sollicitudin venenatis eu sed enim. Nam felis lorem, suscipit ac nisl ac, iaculis dapibus tellus. Cras ante justo, aliquet quis placerat nec, molestie id turpis. ', 'House', 'Rent', 'Dambulla', '3300', '', '5,200 ft2', 3, 2, '', '', 'listing7', 0, 1, '2019-11-17 07:30:20', 0, '', ''),
(9, '000009', 'Park Ave Villa 7', '45 Regent Street, London, UK', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras et dui vestibulum, bibendum purus sit amet, vulputate mauris. Ut adipiscing gravida tincidunt. Duis euismod placerat rhoncus. Phasellus mollis imperdiet placerat. Sed ac turpis nisl. Mauris at ante mauris. Aliquam posuere fermentum lorem, a aliquam mauris rutrum a. Curabitur sit amet pretium lectus, nec consequat orci.', 'Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Duis et metus in libero sollicitudin venenatis eu sed enim. Nam felis lorem, suscipit ac nisl ac, iaculis dapibus tellus. Cras ante justo, aliquet quis placerat nec, molestie id turpis. ', 'House', 'Sale', 'Badulla', '4400', '', '5,200 ft2', 1, 2, '', '', 'listing8', 0, 0, '2019-11-25 07:30:20', 0, '', ''),
(10, '000010', 'Park Ave Villa 8', '45 Regent Street, London, UK', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras et dui vestibulum, bibendum purus sit amet, vulputate mauris. Ut adipiscing gravida tincidunt. Duis euismod placerat rhoncus. Phasellus mollis imperdiet placerat. Sed ac turpis nisl. Mauris at ante mauris. Aliquam posuere fermentum lorem, a aliquam mauris rutrum a. Curabitur sit amet pretium lectus, nec consequat orci.', 'Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Duis et metus in libero sollicitudin venenatis eu sed enim. Nam felis lorem, suscipit ac nisl ac, iaculis dapibus tellus. Cras ante justo, aliquet quis placerat nec, molestie id turpis. ', 'House', 'Rent', 'Kalutara', '8200', '', '5,200 ft2', 5, 2, '', '', 'listing6', 0, 1, '2019-11-17 07:30:20', 0, '', '');

-- --------------------------------------------------------

--
-- Table structure for table `property_quick_summary`
--

DROP TABLE IF EXISTS `property_quick_summary`;
CREATE TABLE IF NOT EXISTS `property_quick_summary` (
  `sum_id` int(11) NOT NULL AUTO_INCREMENT,
  `property_serial` int(11) NOT NULL,
  `quick_summary` varchar(100) NOT NULL,
  `quick_summary_value` varchar(100) NOT NULL,
  PRIMARY KEY (`sum_id`)
) ENGINE=MyISAM AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `property_quick_summary`
--

INSERT INTO `property_quick_summary` (`sum_id`, `property_serial`, `quick_summary`, `quick_summary_value`) VALUES
(1, 1, 'Property Id', '000001'),
(2, 1, 'Price', '$8,600 / month'),
(3, 1, 'Property Size', '5,500 ft2'),
(4, 1, 'Bedrooms', '5'),
(5, 1, 'Bathrooms', '3'),
(6, 1, 'Available From', '2019-11-05'),
(7, 1, 'Status', 'Rent'),
(8, 1, 'Year Built', '1991'),
(9, 1, 'Garages', '1'),
(10, 1, 'Cross Streets', 'Nordoff'),
(11, 1, 'Floors', 'Carpet - Ceramic Tile'),
(12, 1, 'Plumbing', 'Full Copper Plumbing');

-- --------------------------------------------------------

--
-- Table structure for table `subscrptions`
--

DROP TABLE IF EXISTS `subscrptions`;
CREATE TABLE IF NOT EXISTS `subscrptions` (
  `subid` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(200) NOT NULL,
  `createddate` datetime NOT NULL,
  `stat` varchar(50) NOT NULL,
  PRIMARY KEY (`subid`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
