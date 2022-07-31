-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 31, 2022 at 08:41 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 7.3.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `getfile`
--

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--
CREATE Database getfile;

CREATE TABLE `cart` (
  `ID` int(11) NOT NULL,
  `getfileID` int(4) NOT NULL,
  `productName` varchar(255) NOT NULL,
  `productPrice` varchar(255) NOT NULL,
  `getImage` varchar(255) NOT NULL,
  `size` varchar(255) NOT NULL,
  `category` varchar(255) NOT NULL,
  `color` varchar(255) NOT NULL,
  `quantity` int(4) NOT NULL,
  `IDLogin` varchar(255) NOT NULL,
  `checkout` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`ID`, `getfileID`, `productName`, `productPrice`, `getImage`, `size`, `category`, `color`, `quantity`, `IDLogin`, `checkout`) VALUES
(83, 108, 'jeans woman', '50', 'jeans woman1.jpg', 'M ', 'Pants', 'Blue ', 1, 'ali.zaitoun1999@gmail.com', 'checkout'),
(85, 92, 'Shirts', '30', 'shirts6.jpg', 'M L XL ', 'Shirts', 'Red ', 3, 'ali.zaitoun1999@gmail.com', 'checkout'),
(86, 118, 'Kids Shirt1', '50', 'kids shirt1.jpg', 'M ', 'Shirts', 'LightBlue ', 3, 'ali.zaitoun1999@gmail.com', 'checkout'),
(87, 130, 'Qifeng Kids', '100', 'shoe kids2.jpg', '30 ', 'Shoes', 'Blue ', 3, 'ali.zaitoun1999@gmail.com', 'checkout'),
(88, 74, 'Lacoste ', '75', 'clockhandMan2.jpg', '4 ', 'Accessories', 'Black ', 10, 'ali.zaitoun1999@gmail.com', 'checkout'),
(90, 81, 'Nike', '75', 'AJ6844-004_sivasdescalzo-nike-W_NIKE_JOYRIDE_OPTIK-1565703447-1.jpg', '41 ', 'Shoes', 'Black ', 3, 'ali.zaitoun1999@gmail.com', 'checkout'),
(91, 122, 'Kids Pants1', '50', 'pants kids2.jpg', 'L ', 'Pants', 'Yellow ', 2, 'ali.zaitoun1999@gmail.com', '');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `cat` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`cat`) VALUES
('Accessories'),
('Pants'),
('Shirts'),
('Shoes');

-- --------------------------------------------------------

--
-- Table structure for table `checkout`
--

CREATE TABLE `checkout` (
  `ID` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `state` varchar(255) NOT NULL,
  `typecheckout` varchar(255) NOT NULL,
  `nameoncard` varchar(255) NOT NULL,
  `cardnumber` varchar(255) NOT NULL,
  `IDLogin` varchar(255) NOT NULL,
  `products` varchar(255) NOT NULL,
  `totalprice` varchar(255) NOT NULL,
  `IDSproduct` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `checkout`
--

INSERT INTO `checkout` (`ID`, `name`, `email`, `address`, `state`, `typecheckout`, `nameoncard`, `cardnumber`, `IDLogin`, `products`, `totalprice`, `IDSproduct`) VALUES
(29, 'ali zaitoun', 'ali.zaitoun1999@gmail.com', 'west bekaa sawiri', 'Hermel', 'Paypal', 'ali zaitoun', 'xxxx-xxxx-xxxx', 'ali.zaitoun1999@gmail.com', 'jeans woman', '50', '108'),
(31, 'ali zaitoun', 'ali.zaitoun1999@gmail.com', 'west bekaa sawiri', 'Bekaa', 'Paypal', 'ali zaitoun', 'xxxx-xxxx-xxxx', 'ali.zaitoun1999@gmail.com', 'Shirts', '90', '92'),
(32, 'ali zaitoun', 'ali.zaitoun1999@gmail.com', 'west bekaa sawiri', 'Bekaa', 'Debit card', 'ali zaitoun', 'xxxx-xxxx-xxxx', 'ali.zaitoun1999@gmail.com', 'Lacoste ', '750', '74'),
(34, 'ali zaitoun', 'ali.zaitoun1999@gmail.com', 'west bekaa sawiri', 'Bekaa', 'Debit card', 'ali zaitoun', 'xxxx-xxxx-xxxx', 'ali.zaitoun1999@gmail.com', 'Kids Shirt1,Qifeng Kids,Nike', '675', '118,130,81'),
(35, 'ali zaitoun', '21830424@students.liu.edu.lb', 'west bekaa sawiri', 'Bekaa', 'Paypal', 'ali zaitoun', 'xxxx-xxxx-xxxx', '21830424@students.liu.edu.lb', 'Pants Woman', '330', '102'),
(36, 'ali zaitoun', '21830424@students.liu.edu.lb', 'west bekaa sawiri', 'Hermel', 'Debit card', ';askcm', 'kcnas', '21830424@students.liu.edu.lb', 'Woman Shoes4', '600', '117'),
(37, 'ak', '21830424@students.liu.edu.lb', 'west bekaa sawiri', 'Bekaa', 'Paypal', 'hxgxxgxgxh', 'gdggjgj', '21830424@students.liu.edu.lb', 'Shirts', '90', '92');

-- --------------------------------------------------------

--
-- Table structure for table `contactus`
--

CREATE TABLE `contactus` (
  `ID` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `massage` varchar(255) NOT NULL,
  `subject` varchar(255) NOT NULL,
  `answer` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contactus`
--

INSERT INTO `contactus` (`ID`, `name`, `email`, `massage`, `subject`, `answer`) VALUES
(5, 'ali zaitoun', '21830424@students.liu.edu.lb', 'debbaging', 'error', 'aaa');

-- --------------------------------------------------------

--
-- Table structure for table `country`
--

CREATE TABLE `country` (
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `country`
--

INSERT INTO `country` (`name`) VALUES
('Akkar'),
('Baalbeck'),
('Beirut'),
('Bekaa'),
('Hermel'),
('Mount Lebanon'),
('Nabatiyeh'),
('North Lebanon'),
('South Lebanon');

-- --------------------------------------------------------

--
-- Table structure for table `getfile`
--

CREATE TABLE `getfile` (
  `ID` int(4) NOT NULL,
  `imageName` varchar(255) NOT NULL,
  `imageTmpName` varchar(255) NOT NULL,
  `price` varchar(255) NOT NULL,
  `brand` varchar(50) NOT NULL,
  `image2Name` varchar(255) NOT NULL,
  `image2TmpName` varchar(255) NOT NULL,
  `image3Name` varchar(255) NOT NULL,
  `image3TmpName` varchar(255) NOT NULL,
  `size1` varchar(10) NOT NULL,
  `size2` varchar(10) NOT NULL,
  `size3` varchar(10) NOT NULL,
  `color1` varchar(20) NOT NULL,
  `color2` varchar(20) NOT NULL,
  `color3` varchar(20) NOT NULL,
  `categoryCat` varchar(30) NOT NULL,
  `personName` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `getfile`
--

INSERT INTO `getfile` (`ID`, `imageName`, `imageTmpName`, `price`, `brand`, `image2Name`, `image2TmpName`, `image3Name`, `image3TmpName`, `size1`, `size2`, `size3`, `color1`, `color2`, `color3`, `categoryCat`, `personName`) VALUES
(67, 'bag9.jpg', 'C:\\xampp\\tmp\\php80A0.tmp', '30', 'Bag', 'bag10.jpg', 'C:\\xampp\\tmp\\php80B1.tmp', 'bag11.jpg', 'C:\\xampp\\tmp\\php80B2.tmp', '20', '21', '22', 'Gray', 'Blue', 'Orange', 'Accessories', 'Men'),
(68, 'bag5.jpg', 'C:\\xampp\\tmp\\php9621.tmp', '25', 'Travel Bag', 'bag8.jpg', 'C:\\xampp\\tmp\\php9622.tmp', 'bag12.jpg', 'C:\\xampp\\tmp\\php9623.tmp', '15', '16', '17', 'Gray', 'Beige', 'red', 'Accessories', 'Men'),
(69, 'caps4.jpg', 'C:\\xampp\\tmp\\php7222.tmp', '15', 'Cap Man', 'caps3.jpg', 'C:\\xampp\\tmp\\php7223.tmp', 'caps5.jpg', 'C:\\xampp\\tmp\\php7234.tmp', '7', '8', '9', 'Colored', 'Black', 'Gold', 'Accessories', 'Men'),
(70, 'caps6.jpg', 'C:\\xampp\\tmp\\php8689.tmp', '8', 'Summer Caps', 'CapsMan1.png', 'C:\\xampp\\tmp\\php868A.tmp', 'CapsMan.png', 'C:\\xampp\\tmp\\php868B.tmp', '4', '5', '6', 'Black', 'Gray', 'White', 'Accessories', 'Men'),
(71, 'jewllery7.jpg', 'C:\\xampp\\tmp\\phpFB0D.tmp', '150', 'Neck Collar', 'jewllery9.jpg', 'C:\\xampp\\tmp\\phpFB1E.tmp', 'jewllery10.jpg', 'C:\\xampp\\tmp\\phpFB1F.tmp', 'Hand', 'Neck', 'finger', 'Gold', 'Salver', 'Black', 'Accessories', 'Men'),
(73, 'handClock1.jpg', 'C:\\xampp\\tmp\\php4224.tmp', '85', 'Geneva', 'handClock2.jpg', 'C:\\xampp\\tmp\\php4225.tmp', 'handClock3.jpg', 'C:\\xampp\\tmp\\php4226.tmp', '3.5', '4', '4.5', 'Gold', 'DarkBlue', 'Brown', 'Accessories', 'Men'),
(74, 'clockhandMan2.jpg', 'C:\\xampp\\tmp\\php4243.tmp', '75', 'Lacoste ', 'clockhandMan.jpg', 'C:\\xampp\\tmp\\php4244.tmp', 'clockhandMan1.jpg', 'C:\\xampp\\tmp\\php4245.tmp', '3.5', '4', '4.5', 'Black', 'Red', 'Salver', 'Accessories', 'Men'),
(75, 'Men\'s sunglasses1.jpg', 'C:\\xampp\\tmp\\phpBD8E.tmp', '190', 'RILIXES', 'Men\'s sunglasses2.jpg', 'C:\\xampp\\tmp\\phpBD8F.tmp', 'Men\'s sunglasses3.jpg', 'C:\\xampp\\tmp\\phpBD90.tmp', 'Small', 'Medium', 'Large', 'Black', 'Blue', 'Brown', 'Accessories', 'Men'),
(76, 'pants3.jpg', 'C:\\xampp\\tmp\\phpB0DC.tmp', '30', 'Pants', 'pants4.jpg', 'C:\\xampp\\tmp\\phpB0ED.tmp', 'pants5.jpg', 'C:\\xampp\\tmp\\phpB0EE.tmp', 'M', 'L', 'XL', 'Gray', 'Black', 'Red', 'Pants', 'Men'),
(77, 'pants6.jpg', 'C:\\xampp\\tmp\\phpCAFA.tmp', '75', 'Jeans', 'pants10.jpg', 'C:\\xampp\\tmp\\phpCAFB.tmp', 'pants1.jpg', 'C:\\xampp\\tmp\\phpCAFC.tmp', 'M', 'L', 'XL', 'LightBlue', 'DarkBlue', 'Green', 'Pants', 'Men'),
(78, 'pants8.jpg', 'C:\\xampp\\tmp\\php302A.tmp', '105', 'Jeans', 'pexels-karolina-grabowska-4210866.jpg', 'C:\\xampp\\tmp\\php302B.tmp', 'pants2.jpg', 'C:\\xampp\\tmp\\php304C.tmp', 'M', 'L', 'XL', 'Blue', 'White', 'Gray', 'Pants', 'Men'),
(79, 'shorts1.jpg', 'C:\\xampp\\tmp\\phpB036.tmp', '175', 'Short', 'shorts2.jpg', 'C:\\xampp\\tmp\\phpB037.tmp', 'shorts3.jpg', 'C:\\xampp\\tmp\\phpB038.tmp', 'M', 'L', 'XL', 'Green', 'Black', 'Colored', 'Pants', 'Men'),
(80, 'shorts4.jpg', 'C:\\xampp\\tmp\\php2B11.tmp', '200', 'Short', 'shorts5.jpg', 'C:\\xampp\\tmp\\php2B12.tmp', 'shorts6.jpg', 'C:\\xampp\\tmp\\php2B23.tmp', 'M', 'L', 'XL', 'Orange', 'Yellow', 'Red', 'Pants', 'Men'),
(81, 'AJ6844-004_sivasdescalzo-nike-W_NIKE_JOYRIDE_OPTIK-1565703447-1.jpg', 'C:\\xampp\\tmp\\php87DC.tmp', '75', 'Nike', 'andres-jasso-PqbL_mxmaUE-unsplash.jpg', 'C:\\xampp\\tmp\\php87DD.tmp', 'AT6395-600_sivasdescalzo-nike-JOYRIDE_CC3_SETTER-1565703234-1.jpg', 'C:\\xampp\\tmp\\php87FD.tmp', '40', '41', '42', 'Orange', 'Black', 'Rose', 'Shoes', 'Men'),
(82, 'awcgvayo4rwf4ovoz64m.webp', 'C:\\xampp\\tmp\\php8096.tmp', '80', 'Nike', 'azmihba3pidhx72i7div.webp', 'C:\\xampp\\tmp\\php80A7.tmp', 'btupe4zlwoxniikhqveb.webp', 'C:\\xampp\\tmp\\php80A8.tmp', '41', '42', '43', 'Orange', 'White', 'Black', 'Shoes', 'Men'),
(83, 'c8zzavpobt59okvkazw2.webp', 'C:\\xampp\\tmp\\php8141.tmp', '40', 'Nike', 'color_1.webp', 'C:\\xampp\\tmp\\php8142.tmp', 'color_2.webp', 'C:\\xampp\\tmp\\php8143.tmp', '41', '42', '43', 'Colored', 'Black', 'Blue', 'Shoes', 'Men'),
(84, 'color_3.webp', 'C:\\xampp\\tmp\\php7B4A.tmp', '90', 'Nike', 'color_4.webp', 'C:\\xampp\\tmp\\php7B4B.tmp', 'display_1.webp', 'C:\\xampp\\tmp\\php7B4C.tmp', '40', '41', '42', 'Blue', 'Red', 'LightBlue', 'Shoes', 'Men'),
(85, 'display_4.webp', 'C:\\xampp\\tmp\\php3BFE.tmp', '105', 'Nike', 'display_3.webp', 'C:\\xampp\\tmp\\php3BFF.tmp', 'ubhdapuchmwv3nr602x8.webp', 'C:\\xampp\\tmp\\php3C10.tmp', '40', '41', '42', 'Orange', 'White', 'Green', 'Shoes', 'Men'),
(86, 'ezgif.com-resize (1).jpg', 'C:\\xampp\\tmp\\php722F.tmp', '110', 'Nike', 'ezgif.com-resize (2).jpg', 'C:\\xampp\\tmp\\php7230.tmp', 'ezgif.com-resize (3).jpg', 'C:\\xampp\\tmp\\php7231.tmp', '40', '41', '42', 'Brown', 'Orange', 'White', 'Shoes', 'Men'),
(87, 'ezgif.com-resize.jpg', 'C:\\xampp\\tmp\\php9D16.tmp', '200', 'NiKe', 'gorfwjchoasrrzr1fggt.webp', 'C:\\xampp\\tmp\\php9D17.tmp', 'guhuebkkiaman8qve79t.webp', 'C:\\xampp\\tmp\\php9D18.tmp', '40', '41', '42', 'Red', 'Black', 'Green', 'Shoes', 'Men'),
(88, 'jj-shev-O4s1zA5LJeo-unsplash.jpg', 'C:\\xampp\\tmp\\phpB417.tmp', '60', 'Nike', 'jxsxecnorxm5ictph0ou.webp', 'C:\\xampp\\tmp\\phpB437.tmp', 'jxsxecnorxm5ictph0ou.webp', 'C:\\xampp\\tmp\\phpB438.tmp', '40', '41', '42', 'Colored', 'Blue', 'Black', 'Shoes', 'Men'),
(89, 'nike.png', 'C:\\xampp\\tmp\\phpB127.tmp', '30', 'Nike', 'nike-basketball.png', 'C:\\xampp\\tmp\\phpB128.tmp', 'Nike-Running.png', 'C:\\xampp\\tmp\\phpB129.tmp', '40', '41', '42', 'Red', 'Blue', 'Gray', 'Shoes', 'Men'),
(90, 'nike-training.png', 'C:\\xampp\\tmp\\phpC857.tmp', '180', 'Nike', 'nex5fgeecvdhjrmbiiyl.webp', 'C:\\xampp\\tmp\\phpC858.tmp', 'oyhemtbkghuegy9gpo0i.webp', 'C:\\xampp\\tmp\\phpC859.tmp', '40', '41', '42', 'Gray', 'Yellow', 'Black', 'Shoes', 'Men'),
(91, 'pexels-terje-sollie-298863.jpg', 'C:\\xampp\\tmp\\php932A.tmp', '180', 'Lacost ', 'pexels-terje-sollie-298864.jpg', 'C:\\xampp\\tmp\\php933A.tmp', 'pexels-mnz-1670770.jpg', 'C:\\xampp\\tmp\\php933B.tmp', '43', '44', '45', 'Brown', 'White', 'DarkBrown', 'Shoes', 'Men'),
(92, 'shirts6.jpg', 'C:\\xampp\\tmp\\php699.tmp', '30', 'Shirts', 'shirts7.jpg', 'C:\\xampp\\tmp\\php69A.tmp', 'shirts5.jpg', 'C:\\xampp\\tmp\\php69B.tmp', 'M', 'L', 'XL', 'Red', 'Gray', 'Rose', 'Shirts', 'Men'),
(95, 'baju3.jpg', 'C:\\xampp\\tmp\\phpA9A0.tmp', '200', 'T-Shirt', 'baju3back.jpg', 'C:\\xampp\\tmp\\phpA9A1.tmp', 'baju5.jpg', 'C:\\xampp\\tmp\\phpA9B2.tmp', 'M', 'L', 'XL', 'red', 'black', 'white', 'Shirts', 'Men'),
(97, 'tshirts1.jpg', 'C:\\xampp\\tmp\\phpD54A.tmp', '180', 'T-Shirt', 'tshirts2.jpg', 'C:\\xampp\\tmp\\phpD54B.tmp', 'tshirts4.jpg', 'C:\\xampp\\tmp\\phpD54C.tmp', 'M', 'L', 'XL', 'Red', 'Yellow', 'Black', 'Shirts', 'Men'),
(98, 'shirts1.jpg', 'C:\\xampp\\tmp\\php64D2.tmp', '150', 'T-Shirt', 'shirts2 - Copy.jpg', 'C:\\xampp\\tmp\\php64D3.tmp', 'shirts4.jpg', 'C:\\xampp\\tmp\\php64E3.tmp', 'M', 'L', 'XL', 'Red', 'White', 'Beige', 'Shirts', 'Men'),
(99, 'women-jewelry-silverbracelet1.jpg', 'C:\\xampp\\tmp\\phpDF9E.tmp', '180', 'Bracelet woman', 'women-jewelry-bracelet1.jpg', 'C:\\xampp\\tmp\\phpDF9F.tmp', 'women-Sterling-Silver-Necklace-owl1.jpg', 'C:\\xampp\\tmp\\phpDFAF.tmp', 'hand', 'neck', 'ear', 'Gold', 'Salver', 'Black', 'Accessories', 'Women'),
(100, 'Autumn-Chiffon-Blouse1.jpg', 'C:\\xampp\\tmp\\php1D8B.tmp', '49', 'Shirt Woman', 'Elegant-Drawstring-Sweet1.jpg', 'C:\\xampp\\tmp\\php1D8C.tmp', 'grey-Oversize-Hooded1.jpg', 'C:\\xampp\\tmp\\php1D9C.tmp', 'M', 'L', 'XL', 'White', 'Black', 'Red', 'Shirts', 'Women'),
(101, 'Vangull-Leather-Jacket1.jpg', 'C:\\xampp\\tmp\\phpF5C8.tmp', '90', 'Jacket', 'red-autumn-hoodie1.jpg', 'C:\\xampp\\tmp\\phpF5D9.tmp', 'women-winter-jacket1.jpg', 'C:\\xampp\\tmp\\phpF5DA.tmp', 'M', 'L', 'XL', 'red', 'black', 'white', 'Shirts', 'Women'),
(102, 'Gothic-Pants-Plaid1.jpg', 'C:\\xampp\\tmp\\php926F.tmp', '110', 'Pants Woman', 'Harajuku-Ladies-Joggers1.jpg', 'C:\\xampp\\tmp\\php9270.tmp', 'Ladies-Office-Work-Pants1.jpg', 'C:\\xampp\\tmp\\php9271.tmp', 'M', 'L', 'XL', 'Black', 'Gray', 'Rose', 'Pants', 'Women'),
(104, 'Office-Lady-Blouse1.jpg', 'C:\\xampp\\tmp\\php84F0.tmp', '170', 'Shirt', 'women-top1.jpg', 'C:\\xampp\\tmp\\php84F1.tmp', 'hooded-Coats-Casual1.jpg', 'C:\\xampp\\tmp\\php84F2.tmp', 'M', 'L', 'XL', 'White', 'Brown', 'Black', 'Shirts', 'Women'),
(105, 'blue-sweatshirt1.jpg', 'C:\\xampp\\tmp\\php408.tmp', '44', 'T-Shirt Man', 'black-top1.jpg', 'C:\\xampp\\tmp\\php409.tmp', 'dark-blue-sweatshirt1.jpg', 'C:\\xampp\\tmp\\php40A.tmp', 'M', 'L', 'XL', 'LightBlue', 'Black', 'DarkRed', 'Shirts', 'Men'),
(108, 'jeans woman1.jpg', 'C:\\xampp\\tmp\\phpDAB6.tmp', '50', 'jeans woman', 'jeans woman2.jpg', 'C:\\xampp\\tmp\\phpDAB7.tmp', 'jeans woman3.jpg', 'C:\\xampp\\tmp\\phpDAC8.tmp', 'M', 'L', 'XL', 'Gray', 'Blue', 'LightBlue', 'Pants', 'Women'),
(109, 'woman pants1.jpg', 'C:\\xampp\\tmp\\php5AEC.tmp', '150', 'pants woman2', 'woman pants2.jpg', 'C:\\xampp\\tmp\\php5AED.tmp', 'woman pants3.jpg', 'C:\\xampp\\tmp\\php5AFD.tmp', 'M', 'L', 'XL', 'White', 'Black', 'Gray', 'Pants', 'Women'),
(110, 'bag1.jpg', 'C:\\xampp\\tmp\\php3E31.tmp', '50', 'bag woman1', 'bag2.jpg', 'C:\\xampp\\tmp\\php3E32.tmp', 'bag3.jpg', 'C:\\xampp\\tmp\\php3E33.tmp', 'M', 'L', 'XL', 'red', 'black', 'white', 'Accessories', 'Women'),
(111, 'bag4.jpg', 'C:\\xampp\\tmp\\phpEF5E.tmp', '100', 'Bag woman2', 'bag6.jpg', 'C:\\xampp\\tmp\\phpEF5F.tmp', 'bag access woman.jpg', 'C:\\xampp\\tmp\\phpEF60.tmp', 'M', 'L', 'XL', 'Gold', 'Black', 'White', 'Accessories', 'Women'),
(112, 'jewllery4.jpg', 'C:\\xampp\\tmp\\php583F.tmp', '200', 'ring woman', 'jewllery5.jpg', 'C:\\xampp\\tmp\\php584F.tmp', 'ring woman.jpg', 'C:\\xampp\\tmp\\php5850.tmp', 'verySmall', 'Small', 'Large', 'Gold', 'Salver', 'Diamond', 'Accessories', 'Women'),
(113, 'pexels-sunsetoned-6624862.jpg', 'C:\\xampp\\tmp\\phpE06A.tmp', '100', 'Necklace woman', 'pexels-artem-beliaikin-994524.jpg', 'C:\\xampp\\tmp\\phpE07A.tmp', 'necklace woman.jpg', 'C:\\xampp\\tmp\\phpE09A.tmp', 'Small', 'VerySmall', 'Large', 'Gold', 'Salver', 'Diamond', 'Accessories', 'Women'),
(114, 'shoes woman.jpg', 'C:\\xampp\\tmp\\php1A99.tmp', '50', 'Woman Shoes1', 'shoes woman1.jpg', 'C:\\xampp\\tmp\\php1A9A.tmp', 'shoes woman2.jpg', 'C:\\xampp\\tmp\\php1A9B.tmp', '35', '37', '39', 'White', 'Rose', 'Black', 'Shoes', 'Women'),
(115, 'shoes wom3.jpg', 'C:\\xampp\\tmp\\php4A9B.tmp', '100', 'Woman Shoes2', 'shoes wom1.jpg', 'C:\\xampp\\tmp\\php4A9C.tmp', 'shoes wom2.jpg', 'C:\\xampp\\tmp\\php4A9D.tmp', '38', '39', '40', 'Rose', 'Brown', 'Salver', 'Shoes', 'Women'),
(116, 'shoes wo1.jpg', 'C:\\xampp\\tmp\\php7761.tmp', '150', 'Woman Shoes3', 'shoes wo2.jpg', 'C:\\xampp\\tmp\\php7762.tmp', 'shoes wo3.jpg', 'C:\\xampp\\tmp\\php7773.tmp', '40', '41', '42', 'Red', 'White', 'Brown', 'Shoes', 'Women'),
(117, 'shoes w1.jpg', 'C:\\xampp\\tmp\\php9E5B.tmp', '200', 'Woman Shoes4', 'shoes w2.jpg', 'C:\\xampp\\tmp\\php9E5C.tmp', 'shoes w3.jpg', 'C:\\xampp\\tmp\\php9E5D.tmp', '35', '37', '39', 'Red', 'White', 'Black', 'Shoes', 'Women'),
(118, 'kids shirt1.jpg', 'C:\\xampp\\tmp\\php75.tmp', '50', 'Kids Shirt1', 'shirt kids2.jpg', 'C:\\xampp\\tmp\\php76.tmp', 'shirt Kids3.jpg', 'C:\\xampp\\tmp\\php77.tmp', 'M', 'L', 'XL', 'Blue', 'LightBlue', 'Red', 'Shirts', 'Kids'),
(119, 'shirt kid2.jpg', 'C:\\xampp\\tmp\\phpFF26.tmp', '100', 'Kids Shirt2', 'shirt kid1.jpg', 'C:\\xampp\\tmp\\phpFF37.tmp', 'shirt kid3.jpg', 'C:\\xampp\\tmp\\phpFF38.tmp', 'M', 'L', 'XL', 'Blue', 'Blue&White', 'Green', 'Shirts', 'Kids'),
(120, 'shirt girl1.jpg', 'C:\\xampp\\tmp\\php54F0.tmp', '150', 'Girl shirt', 'shirt girl2.jpg', 'C:\\xampp\\tmp\\php54F1.tmp', 'shirt girl3.jpg', 'C:\\xampp\\tmp\\php54F2.tmp', 'M', 'L', 'XL', 'Rose', 'Yellow', 'Red', 'Shirts', 'Kids'),
(121, 'girl dress1.jpg', 'C:\\xampp\\tmp\\phpEAA2.tmp', '200', 'Baby Dress', 'girl dress2.jpg', 'C:\\xampp\\tmp\\phpEAB3.tmp', 'girl dress3.jpg', 'C:\\xampp\\tmp\\phpEAB4.tmp', 'M', 'L', 'XL', 'Rose', 'White', 'Blue', 'Shirts', 'Kids'),
(122, 'pants kids2.jpg', 'C:\\xampp\\tmp\\php502C.tmp', '50', 'Kids Pants1', 'pants kids1.jpg', 'C:\\xampp\\tmp\\php502D.tmp', 'pants kids3.jpg', 'C:\\xampp\\tmp\\php502E.tmp', 'M', 'L', 'XL', 'Red', 'Yellow', 'Blue', 'Pants', 'Kids'),
(123, 'pijama kids1.jpg', 'C:\\xampp\\tmp\\php1994.tmp', '100', 'Kids Pajama', 'pijama kids2.jpg', 'C:\\xampp\\tmp\\php1995.tmp', 'pijama kids3.jpg', 'C:\\xampp\\tmp\\php1996.tmp', 'M', 'L', 'XL', 'Blue', 'Gray', 'Green', 'Pants', 'Kids'),
(124, 'jeans Kids2.jpg', 'C:\\xampp\\tmp\\phpA008.tmp', '150', 'Kids Jeans', 'jeans Kids3.jpg', 'C:\\xampp\\tmp\\phpA009.tmp', 'jeans Kids1.jpg', 'C:\\xampp\\tmp\\phpA00A.tmp', 'M', 'L', 'XL', 'Blue', 'Green', 'Brown', 'Pants', 'Kids'),
(125, 'short kids2.jpg', 'C:\\xampp\\tmp\\phpBDD6.tmp', '200', 'Short Kids', 'short kids1.jpg', 'C:\\xampp\\tmp\\phpBDD7.tmp', 'short kids3.jpg', 'C:\\xampp\\tmp\\phpBDD8.tmp', 'M', 'L', 'XL', 'Gray', 'blue', 'Brown', 'Pants', 'Kids'),
(126, 'accessories kids3.jpg', 'C:\\xampp\\tmp\\php219C.tmp', '50', 'Cheap Kids', 'accessories kids1.jpg', 'C:\\xampp\\tmp\\php219D.tmp', 'accessories kids2.jpg', 'C:\\xampp\\tmp\\php219E.tmp', 'Hand', 'Head', 'Wrist', 'Rose', 'Red', 'White', 'Accessories', 'Kids'),
(127, 'caps kid2.jpg', 'C:\\xampp\\tmp\\php741A.tmp', '100', 'Kids Caps', 'caps kid1.jpg', 'C:\\xampp\\tmp\\php741B.tmp', 'caps kid3.jpg', 'C:\\xampp\\tmp\\php741C.tmp', 'S', 'M', 'L', 'Black', 'Yellow', 'Black&Yellow', 'Accessories', 'Kids'),
(128, 'access kids1.jpg', 'C:\\xampp\\tmp\\php51D1.tmp', '150', 'Accessories Kids', 'access kids2.jpeg', 'C:\\xampp\\tmp\\php51D2.tmp', 'access kids3.jpg', 'C:\\xampp\\tmp\\php51D3.tmp', 'Neck', 'Hand', 'Eyes', 'Rose', 'Red', 'White', 'Accessories', 'Kids'),
(129, 'shoes kids2.jpg', 'C:\\xampp\\tmp\\php591E.tmp', '50', 'Kids Shoes', 'shoes kids3.jpg', 'C:\\xampp\\tmp\\php591F.tmp', 'shoes Kids1.jpg', 'C:\\xampp\\tmp\\php592F.tmp', '30', '31', '32', 'Gray', 'Blue', 'Orange', 'Shoes', 'Kids'),
(130, 'shoe kids2.jpg', 'C:\\xampp\\tmp\\phpF46D.tmp', '100', 'Qifeng Kids', 'shoe kids1.jpg', 'C:\\xampp\\tmp\\phpF46E.tmp', 'shoe kids3.jpg', 'C:\\xampp\\tmp\\phpF46F.tmp', '30', '31', '32', 'Rose', 'White', 'Blue', 'Shoes', 'Kids'),
(131, 'shoe kid1.jpg', 'C:\\xampp\\tmp\\php7515.tmp', '150', 'Shoes Kids1', 'shoe kid2.jpg', 'C:\\xampp\\tmp\\php7516.tmp', 'shoe kid3.jpg', 'C:\\xampp\\tmp\\php7517.tmp', '30', '31', '32', 'White', 'Red', 'Rose', 'Shoes', 'Kids');

-- --------------------------------------------------------

--
-- Table structure for table `loginpage`
--

CREATE TABLE `loginpage` (
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `typeofuser` varchar(255) NOT NULL,
  `activated` tinyint(1) NOT NULL,
  `security_cod` text NOT NULL,
  `fileName` varchar(255) NOT NULL,
  `fileSize` double NOT NULL,
  `fileLocation` varchar(255) NOT NULL,
  `fileType` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `loginpage`
--

INSERT INTO `loginpage` (`name`, `email`, `password`, `typeofuser`, `activated`, `security_cod`, `fileName`, `fileSize`, `fileLocation`, `fileType`) VALUES
('aki', '21830424@students.liu.edu.lb', '123', 'user', 1, '36c412896acf7f84d3d00b35a3bcb4e2', 'aki.png', 220684, 'C:\\xampp\\tmp\\php87.tmp', 'image/png'),
('abdelkarim hamed', 'abdelkarimhamd@gmail.com', 'abdelkarim1998', 'user', 1, 'e2575a437fecabba59a0485cb936ba06', 'abdelkarim hamed.jpeg', 186808, 'C:\\xampp\\tmp\\php380B.tmp', 'image/jpeg'),
('a', 'ali.zaiton2005@gmail.com', '123', 'admin', 1, '2a3b3f76313e40046da1f94069d63c37', 'a.jpeg', 186808, 'C:\\xampp\\tmp\\phpE78F.tmp', 'image/jpeg'),
('ahmad', 'ali.zaitoun1999@gmail.com', '78956551', 'user', 1, '60b8181211c1801aef8ee8b987baa572', 'caps kid2.jpg', 4938, 'C:\\xampp\\tmp\\php9EC1.tmp', 'image/jpeg');

-- --------------------------------------------------------

--
-- Table structure for table `person`
--

CREATE TABLE `person` (
  `person` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `person`
--

INSERT INTO `person` (`person`) VALUES
('Kids'),
('Men'),
('Women');

-- --------------------------------------------------------

--
-- Table structure for table `wishlist`
--

CREATE TABLE `wishlist` (
  `ID` int(11) NOT NULL,
  `brand` varchar(255) NOT NULL,
  `price` varchar(255) NOT NULL,
  `imageName` varchar(255) NOT NULL,
  `IDLogin` varchar(255) NOT NULL,
  `IDproduct` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `wishlist`
--

INSERT INTO `wishlist` (`ID`, `brand`, `price`, `imageName`, `IDLogin`, `IDproduct`) VALUES
(24, 'Woman Shoes4', '200', 'shoes w1.jpg', 'ali.zaitoun1999@gmail.com', 117),
(25, 'Shoes Kids1', '150', 'shoe kid1.jpg', 'ali.zaitoun1999@gmail.com', 131);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `cart_ibfk_1` (`IDLogin`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`cat`);

--
-- Indexes for table `checkout`
--
ALTER TABLE `checkout`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `contactus`
--
ALTER TABLE `contactus`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `country`
--
ALTER TABLE `country`
  ADD PRIMARY KEY (`name`);

--
-- Indexes for table `getfile`
--
ALTER TABLE `getfile`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `categoryCat` (`categoryCat`),
  ADD KEY `personName` (`personName`);

--
-- Indexes for table `loginpage`
--
ALTER TABLE `loginpage`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `person`
--
ALTER TABLE `person`
  ADD PRIMARY KEY (`person`);

--
-- Indexes for table `wishlist`
--
ALTER TABLE `wishlist`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `IDLogin` (`IDLogin`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=96;

--
-- AUTO_INCREMENT for table `checkout`
--
ALTER TABLE `checkout`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT for table `contactus`
--
ALTER TABLE `contactus`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `getfile`
--
ALTER TABLE `getfile`
  MODIFY `ID` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=133;

--
-- AUTO_INCREMENT for table `wishlist`
--
ALTER TABLE `wishlist`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `cart`
--
ALTER TABLE `cart`
  ADD CONSTRAINT `cart_ibfk_1` FOREIGN KEY (`IDLogin`) REFERENCES `loginpage` (`email`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `getfile`
--
ALTER TABLE `getfile`
  ADD CONSTRAINT `getfile_ibfk_1` FOREIGN KEY (`categoryCat`) REFERENCES `category` (`cat`),
  ADD CONSTRAINT `getfile_ibfk_2` FOREIGN KEY (`personName`) REFERENCES `person` (`person`);

--
-- Constraints for table `wishlist`
--
ALTER TABLE `wishlist`
  ADD CONSTRAINT `wishlist_ibfk_1` FOREIGN KEY (`IDLogin`) REFERENCES `loginpage` (`email`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
