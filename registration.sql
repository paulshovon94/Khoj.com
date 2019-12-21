-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 07, 2018 at 07:24 AM
-- Server version: 10.1.34-MariaDB
-- PHP Version: 7.2.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `registration`
--

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `id` int(11) NOT NULL,
  `user` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `subject` varchar(100) NOT NULL,
  `message` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`id`, `user`, `email`, `subject`, `message`) VALUES
(1, 'Shovon Paul', ' paulshovon94@gmail.com', 'sa', 'as'),
(2, 'Shovon Paul', ' paulshovon94@gmail.com', 'food', 'not good\r\n'),
(3, 'Shovon Paul', ' paulshovon94@gmail.com', 'dsfsdfsdf', 'dfsdfsdf'),
(4, 'imtiaz', ' imtiaz@gmail.com', 'asdasda', 'asdasd'),
(5, 'imtiaz', ' paulshovon94@gmail.com', 'asdsa', 'asdasd'),
(6, 'imtiaz', ' sahaabir648@gmail.com', 'asdasd', 'dasdasd'),
(7, 'imtiaz', ' paulshovon94@gmail.com', 'dfsfsdf', 'fsdfsdf'),
(8, 'imtiaz', ' paulshovon94@gmail.com', 'asdasd', 'dasdas'),
(9, 'imtiaz', ' gfh@gmail.com', 'dsfsdf', 'dsfsdfsdfsdsdg'),
(10, 'Shovon Paul', ' paulshovon94@gmail.com', 'dsada', 'asdasd'),
(11, 'farabi', ' paulshovon94@gmail.com', 'sub', 'great');

-- --------------------------------------------------------

--
-- Table structure for table `restaurent`
--

CREATE TABLE `restaurent` (
  `id` int(11) NOT NULL,
  `restaurent_name` varchar(100) NOT NULL,
  `menu` varchar(500) NOT NULL,
  `area_name` varchar(100) NOT NULL,
  `trade_mark_dish` varchar(100) NOT NULL,
  `rating` varchar(100) NOT NULL,
  `phone_No` varchar(100) NOT NULL,
  `address` varchar(200) NOT NULL,
  `map` varchar(500) NOT NULL,
  `post_code` varchar(100) NOT NULL,
  `review` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `restaurent`
--

INSERT INTO `restaurent` (`id`, `restaurent_name`, `menu`, `area_name`, `trade_mark_dish`, `rating`, `phone_No`, `address`, `map`, `post_code`, `review`) VALUES
(1, 'Tradition Bd', 'https://www.facebook.com/TraditionBd.Dhaka.khilgaon/photos/pm.2048865152020377/2048865158687043/?type=1&theater', 'Khilgaon', 'Bangladeshi cuisine', '4.9', '01723-684068', '568/A, Block - C, 4th Floor of cafe Appeliano Building, Lift-3, Khilgaon Taltola, Dhaka 1219', 'https://wego.here.com/directions/mix//Tradition-Bd,-Khilgaon-Taltola,-1219-Dhaka:e-eyJuYW1lIjoiVHJhZGl0aW9uIEJkIiwiYWRkcmVzcyI6IktoaWxnYW9uIFRhbHRvbGEsIERoYWthLCBCYW5nbGFkZXNoIiwibGF0aXR1ZGUiOjIzLjc1MjEyNDU3NDY2NywibG9uZ2l0dWRlIjo5MC40MjEzMjAwMTMzMzMsInByb3ZpZGVyTmFtZSI6ImZhY2Vib29rIiwicHJvdmlkZXJJZCI6MTczMDYwMTE5Mzg0Njc3Nn0=?map=23.75212,90.42132,15,normal&fb_locale=en_US', '1219', 'https://www.facebook.com/pg/TraditionBd.Dhaka.khilgaon/reviews/?ref=page_internal'),
(2, 'Cafe Cherry Drops', 'https://www.facebook.com/cafecherrydrops/photos/pm.438147039699383/907763869404362/?type=1&theater', 'Khilgaon', 'Beef Questadilla', '4.7', '01710513742', '572/A, Block C Sahid Baki Road, Khilgaon, Dhaka, Bangladesh', 'https://wego.here.com/directions/mix//Cafe-Cherry-Drops,-khilgaon,-Taltola,-1219-Dhaka:e-eyJuYW1lIjoiQ2FmZSBDaGVycnkgRHJvcHMiLCJhZGRyZXNzIjoia2hpbGdhb24sIFRhbHRvbGEsIERoYWthLCBCYW5nbGFkZXNoIiwibGF0aXR1ZGUiOjIzLjc1MjMwNzIwNTc5MywibG9uZ2l0dWRlIjo5MC40MjA2NDI4MzQzMDcsInByb3ZpZGVyTmFtZSI6ImZhY2Vib29rIiwicHJvdmlkZXJJZCI6MjA1MzU1OTU2MzExODI3fQ==?map=23.75231,90.42064,15,normal&fb_locale=en_US', '1219', 'https://www.facebook.com/pg/cafecherrydrops/reviews/?ref=page_internal'),
(3, 'Al Fresco', '', 'Khilgaon', 'Chicken Wrap', '4.5', '01913-634966', '566/A, Block-C,Shahid Baki Rd, Khilgaon Taltola Dhaka', 'https://wego.here.com/directions/mix//Alfresco,-Shahid-Baki-Road,-1219-Dhaka:e-eyJuYW1lIjoiQWxmcmVzY28iLCJhZGRyZXNzIjoiU2hhaGlkIEJha2kgUm9hZCwgMTIxOSBEaGFrYSwgQmFuZ2xhZGVzaCIsImxhdGl0dWRlIjoyMy43NTE4NTA1NTQ4ODIsImxvbmdpdHVkZSI6OTAuNDIyMTA0OTU0NzE5LCJwcm92aWRlck5hbWUiOiJmYWNlYm9vayIsInByb3ZpZGVySWQiOjcyNDQ0MjY0MDkzNjg2N30=?map=23.75185,90.4221,15,normal&fb_locale=en_US', '1219', 'https://www.facebook.com/pg/Alfrescorooftop/reviews/?ref=page_internal'),
(4, 'Grind House', '', 'Khilgaon', 'Beef Taco', '3.2', '01961-190183', '566/A(2nd floor), Block-C, Khilgaon Taltola, 1219 Dhaka, Bangladesh', 'https://wego.here.com/directions/mix/mylocation/e-eyJuYW1lIjoiR1JJTkQgSE9VU0UiLCJhZGRyZXNzIjoiNTY2XC9BKDJuZCBmbG9vciksIEJsb2NrLUMsIEtoaWxnYW9uIFRhbHRvbGEsIDEyMTkgRGhha2EsIEJhbmdsYWRlc2giLCJsYXRpdHVkZSI6MjMuNzQ5NzM5MjE5MDEsImxvbmdpdHVkZSI6OTAuNDIxODYzNTU1OTA4LCJwcm92aWRlck5hbWUiOiJmYWNlYm9vayIsInByb3ZpZGVySWQiOjU1NDQ0OTg0NDY1NzA2MX0=?map=23.74973921901,90.421863555908,15,normal&fb_locale=en_US', '1219', 'https://www.facebook.com/groups/foodbloggersbd/search/?query=Grind%20House'),
(5, 'Veni Vidi Vici', '', 'Uttara', 'Tortini Di Ciocolato Con Gelato Di Vanillia', '4.8', '8801705737888', 'House-48, Road-4, Sector-03, Uttara Dhaka, Bangladesh', '', '1230', 'https://www.facebook.com/groups/foodbloggersbd/search/?query=Veni%20Vidi%20Vici'),
(6, 'KABAB FACTORY', 'https://lookaside.fbsbx.com/file/Takeaway%20Menu_Kabab%20Factory.pdf?token=AWz_D97cIxzGbZKUdIxM4qS9J2bfm8VDEZZjArsCm0-iymgZ9QxxfKqHOS_-s2ZEpZmI-mPzsskbLBAR7hIyD3kkL6_KlomZFpNkqDaU9Yh46xOYIHR7qUIGbF6EuUCx8BbB38mvwVZHhX9UAZkpIs3t-9Vn--zUXyHX5ezY1BogjA', 'Uttara', 'Behari Kabab', '4.8', ' 01754244455', 'House-2 Lake Drive Road Rabindra Sharoni Sector-7 Uttara Dhaka, Bangladesh', '', '1230', 'https://www.facebook.com/pg/kababfactory/reviews/?ref=page_internal'),
(7, 'Lake Terrace', '', 'Uttara', 'Roasted Short Rib', '4.8', '01618-377223', '25/e, Lake Drive Road, Sector-7, Uttara, Dhaka, Bangladesh', 'https://wego.here.com/directions/mylocation/e-eyJuYW1lIjoiTGFrZSBUZXJyYWNlIiwiYWRkcmVzcyI6IjI1XC9lLCBMYWtlIERyaXZlIFJvYWQsIFNlY3Rvci03LCBVdHRhcmEsIERoYWthLCBEaGFrYSwgQmFuZ2xhZGVzaCIsImxhdGl0dWRlIjoyMy44Njk3NjI5ODkyLCJsb25naXR1ZGUiOjkwLjM5MzM4MDg4LCJwcm92aWRlck5hbWUiOiJmYWNlYm9vayIsInByb3ZpZGVySWQiOjQ4NjYzMjgwNDcwMTQ4Nn0=?map=23.8697629892,90.39338088,15,normal&ref=facebook&link=directions&fb_locale=en_US', '1230', 'https://www.facebook.com/pg/laketerrace/reviews/?ref=page_internal'),
(8, 'Georges Cafe', '', 'Uttara', 'German Chicken', '4.9', '01784-436743', 'House-2, Road-10, Sector-1, Uttara Dhaka, Bangladesh', 'https://wego.here.com/directions/mylocation/e-eyJuYW1lIjoiR2VvcmdlJ3MgQ2FmZSIsImFkZHJlc3MiOiJIb3VzZSAyMywgUm9hZCAxMCwgQmxvY2sgRSwgQmFuYW5pLCBEaGFrYSwgQmFuZ2xhZGVzaCIsImxhdGl0dWRlIjoyMy43OTIxNTU1NTkzMjYsImxvbmdpdHVkZSI6OTAuNDA2NDUxMjI1MjgxLCJwcm92aWRlck5hbWUiOiJmYWNlYm9vayIsInByb3ZpZGVySWQiOjI5OTcyMTkzMzY5Njg3N30=?map=23.792155559326,90.406451225281,15,normal&ref=facebook&link=directions&fb_locale=en_US', '1230', 'https://www.facebook.com/pg/GCBanani/reviews/?ref=page_internal'),
(9, 'Coopers', '', 'Uttara', 'Red Velvet Cake', '3.9', '01730357889', 'Mascot Plaza (Ground Floor), Sector 7, Sonargoan Janapath, Uttara, Dhaka, Bangladesh', '', '1230', 'https://www.facebook.com/groups/foodbloggersbd/search/?query=Coopers'),
(10, 'Thai Emerald', 'https://www.facebook.com/thaiemeraldgulshan/photos/pm.2072244813041345/2072245373041289/?type=1&theater', 'Uttara', 'Fish Cake', '4', '01776-234517', 'House 54, Road 2, Sector 3, Uttara, 1230 Dhaka, Bangladesh ', 'https://wego.here.com/directions/mylocation/e-eyJuYW1lIjoiVGhhaSBFbWVyYWxkIEd1bHNoYW4iLCJhZGRyZXNzIjoiSG91c2UgMjQsIFJvYWQgMiwgR3Vsc2hhbiAxIFx1MDBiNyBEaGFrYSwsIERoYWthLCBCYW5nbGFkZXNoIiwibGF0aXR1ZGUiOjIzLjc4NjEzMDksImxvbmdpdHVkZSI6OTAuNDAwMzUyNSwicHJvdmlkZXJOYW1lIjoiZmFjZWJvb2siLCJwcm92aWRlcklkIjoxNjI0MjA3OTExMTc4MzczfQ==?map=23.7861309,90.4003525,15,normal&ref=facebook&link=directions&fb_locale=en_US', '1230', 'https://www.facebook.com/pg/thai.emerald.bd/reviews/?ref=page_internal'),
(11, 'Pizza Inn', '', 'Uttara', 'Maxican Pizza', '4.3', '01716-268837', 'RAK Tower 4th level Plot#1/A Jashimuddin Avenue Sector # 3 Uttara, Dhaka, Bangladesh ', '', '1230', 'https://www.facebook.com/pizzainnbangladesh/reviews/'),
(12, 'BFC (Best Fried Chicken)', 'https://www.facebook.com/ILOVEBFC/photos/pm.747592362011043/899672393469705/?type=1&theater', 'Uttara', 'Crispy Fried Chicken', '4.2', '01613232011', 'Uttara Tower, 1 No- Jashim Uddin Avenue, Sector-3, Uttara, Dhaka, Bangladesh ', 'https://wego.here.com/directions/mylocation/e-eyJuYW1lIjoiQkZDIChCZXN0IEZyaWVkIENoaWNrZW4pIiwiYWRkcmVzcyI6IlV0dGFyIEJhZGRhLCBEaGFrYSwgQmFuZ2xhZGVzaCIsImxhdGl0dWRlIjoyMy43OTQyMjk0NjEzNjYsImxvbmdpdHVkZSI6OTAuNDE0NDE5ODgxOTg0LCJwcm92aWRlck5hbWUiOiJmYWNlYm9vayIsInByb3ZpZGVySWQiOjE0NjQ2MzMwNTQ1NzI4OH0=?map=23.794229461366,90.414419881984,15,normal&ref=facebook&link=directions&fb_locale=en_US', '1230', 'https://www.facebook.com/pg/ILOVEBFC/reviews/?ref=page_internal'),
(14, 'THE MESQUITE GRILL', '', 'Uttara', 'Buffalo Wings', '4.9', ' 01919-174992', ' House-4 Road-5 Sector-1 Uttara Dhaka, Bangladesh ', 'https://wego.here.com/directions/mylocation/e-eyJuYW1lIjoiVGhlIE1lc3F1aXRlIEdyaWxsIiwiYWRkcmVzcyI6IjI1IFJhYmluZHJhIFNhcmFuaSBSb2FkICgzcmQgRmxvb3IpLCBTZWN0b3ItMywgVXR0YXJhIE1vZGVsIFRvd24sIERoYWthLCBCYW5nbGFkZXNoIiwibGF0aXR1ZGUiOjIzLjg2NzYwOTUyMDAwMywibG9uZ2l0dWRlIjo5MC4zOTcwMzEzMDcyMiwicHJvdmlkZXJOYW1lIjoiZmFjZWJvb2siLCJwcm92aWRlcklkIjoxMzQyMDU3MDY2MTM1NjB9?map=23.867609520003,90.39703130722,15,normal&ref=facebook&link=directions&fb_locale=en_US', '1230', 'https://www.facebook.com/pg/TheMesquiteGrill/reviews/?ref=page_internal'),
(15, 'Comic Cafe', '', 'Khilgaon', 'Fried Masala', '4.6', ' 01732-051334', 'House - 566/A, Block - C, Khilgaon Taaltola(5th Floor), Dhaka , Bangladesh', 'https://wego.here.com/directions/mix//Comic-Cafe,-566A5th-floor,-Block-C,-Khilgaon-Taltola,-1219-Dhaka,-Bangladesh:e-eyJuYW1lIjoiQ29taWMgQ2FmZSIsImFkZHJlc3MiOiI1NjZcL0EoNXRoIGZsb29yKSwgQmxvY2stQywgS2hpbGdhb24gVGFsdG9sYSwgMTIxOSBEaGFrYSwgQmFuZ2xhZGVzaCwgRGhha2EsIEJhbmdsYWRlc2giLCJsYXRpdHVkZSI6MjMuNzUyMDE5NzQwNTI5LCJsb25naXR1ZGUiOjkwLjQyMTc5MzQ2MDg0NiwicHJvdmlkZXJOYW1lIjoiZmFjZWJvb2siLCJwcm92aWRlcklkIjozMjUzNTc1MTQzMzY3MDF9?map=23.75202,90.42179,15,normal&fb_locale=en_US', '1219', 'https://www.facebook.com/pg/comic.cafe.bd/reviews/?ref=page_internal'),
(16, 'Tune & Bite Music Cafe', 'https://www.facebook.com/tuneandbite/photos/pm.1609799035944863/1747071108884321/?type=1&theater', 'Khilgaon', 'Rice + Chicken vegetable+ red curry Beef/Chicken+ fried Chicken', '3', ' 01711-100290', '566/A(3rd Floor), Block-C, Sahar Khilgaon, Dhaka, Bangladesh', 'https://wego.here.com/directions/mylocation/e-eyJuYW1lIjoiVHVuZSAmIEJpdGUgTXVzaWMgQ2FmZSBLaGlsZ2FvbiIsImFkZHJlc3MiOiI1NjZcL0EsIEJsb2NrLUMsIERoYWthLCBCYW5nbGFkZXNoIiwibGF0aXR1ZGUiOjIzLjc1MTk1NDM4MTg1NiwibG9uZ2l0dWRlIjo5MC40MjE3OTgzNzY1MjcsInByb3ZpZGVyTmFtZSI6ImZhY2Vib29rIiwicHJvdmlkZXJJZCI6MTUyMTk5MTgxODA1ODkxOX0=?map=23.751954381856,90.421798376527,15,normal&ref=facebook&link=directions&fb_locale=en_US', '1219', 'https://www.facebook.com/pg/tuneandbite/reviews/?ref=page_internal'),
(17, 'Basilico', 'https://lookaside.fbsbx.com/file/convert-jpg-to-pdf.net_2016-01-06_09-46-38.pdf?token=AWyfOKGMElnI175Vjzi9ggRKO0jTd89GgJBRydDPf3ZdYLB2i3amD5prsRxh8qe3ZYv3XSIhamxMwQPPr0WViGb1NEXZ4beA-YaDKTBm6oLkaGqiwzhXr2cJxWvQeVnAL-0FoUBopsCSgeg76-aAwZ5-EOh39sSx5kwHLTpiLAg-wQ', 'Khilgaon', ' red curry Beef/Chicken', '3.8', '  01673567471', '399/B, Shahid Baki Road, Khilgaon, Dhaka', 'https://wego.here.com/directions/mylocation/e-eyJuYW1lIjoiQmFzaWxpY28iLCJhZGRyZXNzIjoiS2hpbGdhb24tIDM5OVwvQiwgRGhha2EsIEJhbmdsYWRlc2gsIERoYWthLCBCYW5nbGFkZXNoIiwibGF0aXR1ZGUiOjIzLjc1MjU3NDU3MzU1NSwibG9uZ2l0dWRlIjo5MC40MTc3NDA2NDMwMjQsInByb3ZpZGVyTmFtZSI6ImZhY2Vib29rIiwicHJvdmlkZXJJZCI6OTAxNTI0NjgzMjQ4MTE2fQ==?map=23.752574573555,90.417740643024,15,normal&ref=facebook&link=directions&fb_locale=en_US', '1219', 'https://www.facebook.com/pg/basilicobd/reviews/?ref=page_internal'),
(18, 'Popeyes', '', 'Khilgaon', 'Regular Hot Coffee', '4.8', '01799-646400', '379/B - Khilgaon Taltola , Dhaka', 'https://wego.here.com/directions/mylocation/e-eyJuYW1lIjoiUG9wZXllcyBDb2xkIENvZmZlZSIsImFkZHJlc3MiOiJzaGFoaWQgYmFraSByb2FkLCBEaGFrYSwgQmFuZ2xhZGVzaCIsImxhdGl0dWRlIjoyMy43NTIxMTIyNzk2OSwibG9uZ2l0dWRlIjo5MC40MjE0NzAxMDE5MzEsInByb3ZpZGVyTmFtZSI6ImZhY2Vib29rIiwicHJvdmlkZXJJZCI6NTA3OTU2NDAyNjgyNjQ1fQ==?map=23.75211227969,90.421470101931,15,normal&ref=facebook&link=directions&fb_locale=en_US', '1219', 'https://www.facebook.com/pg/Popeyes-Cold-Coffee-507956402682645/reviews/?ref=page_internal'),
(19, 'Aangan', 'https://www.facebook.com/aanganbd/photos/pm.1648697871910469/1648697878577135/?type=1&theater', 'Khilgaon', 'Murg-E-Akbar', '4.3', '01677-999444', '1st floor, 401/1A Khilgaon Chow Rasta,Dhaka', 'https://wego.here.com/directions/mylocation/e-eyJuYW1lIjoiQWFuZ2FuIE1hbGliYWdoIEJyYW5jaCIsImFkZHJlc3MiOiIzOTdcL0IgU2hhaGlkIEJha2kgUm9hZCwgTWFsaWJhZ2ggQ2hvdWRodXJ5IFBhcmEsIERoYWthLCBCYW5nbGFkZXNoIiwibGF0aXR1ZGUiOjIzLjc1MjA1LCJsb25naXR1ZGUiOjkwLjQyMTY4LCJwcm92aWRlck5hbWUiOiJmYWNlYm9vayIsInByb3ZpZGVySWQiOjg5NDc0Mjk0Mzk3MjYzNn0=?map=23.75205,90.42168,15,normal&ref=facebook&link=directions&fb_locale=en_US', '1219', 'https://www.facebook.com/groups/foodbloggersbd/search/?query=Aangan'),
(20, 'Apon Coffee House', 'https://lookaside.fbsbx.com/file/apon%20coffee%20house%20menu.pdf?token=AWyOPJ7poC2jTm8Sak5OdMQ7fnoyWYJK27ypHe_JSKUwgPaG7MxJzmUsf0GpBwLMy-V5xVHMhW89K0UeVKsZZb-uuB-AyLZwyA_3uWDTpg4voapa9Q00GKZp4gVR-7j5zs52tmUZeC5RPW3I9xDmiXqKCwOLfsefaWQ4A7KmneuzFw', 'Khilgaon', 'Dark Chocolate Coffee, Milk Chocolate Coffee, Cold coffee', '5', ' 01717611339', '381/B Khilgaon Dhaka', 'https://wego.here.com/directions/mylocation/e-eyJuYW1lIjoiQXBvbiBDb2ZmZWUgSG91c2UiLCJhZGRyZXNzIjoia2hpbGdhb24sIERoYWthLCBCYW5nbGFkZXNoIiwibGF0aXR1ZGUiOjIzLjc0ODcyMDE1MzY5OCwibG9uZ2l0dWRlIjo5MC40MjY1ODEyMDM5MzgsInByb3ZpZGVyTmFtZSI6ImZhY2Vib29rIiwicHJvdmlkZXJJZCI6Mjk0NTcyMTY0MDU1Mjg1fQ==?map=23.748720153698,90.426581203938,15,normal&ref=facebook&link=directions&fb_locale=en_US', '1219', 'https://www.facebook.com/pg/apon.coffee.house/reviews/?ref=page_internal'),
(21, 'Star Hotel & Kabab', '', 'Dhanmondi', 'Pudding, Kachchi Biriyani with Egg (half)', '4.9', ' +88-9676904', 'House-22 Road-02 Bir Uttam MA Rob Sharak Dhanmondi Dhaka, Bangladesh', 'https://wego.here.com/directions/mylocation/e-eyJuYW1lIjoiU3RhciBIb3RlbCAmIEthYmFiIiwiYWRkcmVzcyI6IlJvYWQjIDJcL0EsIERoYW5tb25kaSBSXC9BLCBEaGFrYSwgQmFuZ2xhZGVzaCIsImxhdGl0dWRlIjoyMy43MzkxNDY3OTcxNzgsImxvbmdpdHVkZSI6OTAuMzgxMTkzMDg2NTAyLCJwcm92aWRlck5hbWUiOiJmYWNlYm9vayIsInByb3ZpZGVySWQiOjE1Nzg1NjQ4MTU2ODg3OTh9?map=23.739146797178,90.381193086502,15,normal&ref=facebook&link=directions&fb_locale=en_US', '1209', 'https://www.facebook.com/pg/Star-Hotel-Kabab-1578564815688798/reviews/?ref=page_internal'),
(22, 'Bread and Beyond', 'https://www.facebook.com/breadnbeyond.dhaka/photos/pm.1132347633467392/1777462552289227/?type=1&theater', 'Dhanmondi', 'Pudding, Cake', '4.2', ' 01913-598731', 'H # 56, Rd # 3/A, Dhanmondi North of Japan BD Friendship Hospital, Dhaka, Bangladesh', 'https://wego.here.com/directions/mylocation/e-eyJuYW1lIjoiQnJlYWQgJiBCZXlvbmQiLCJhZGRyZXNzIjoiSG91c2UjIDA4LCBSb2FkICMgMDMsIEJsb2NrICMgSiwgQmFyaWRoYXJhLCwgRGhha2EsIEJhbmdsYWRlc2giLCJsYXRpdHVkZSI6MjMuNzk4ODEzNzk5NDc3LCJsb25naXR1ZGUiOjkwLjQyMzUzMTUzMjI4OCwicHJvdmlkZXJOYW1lIjoiZmFjZWJvb2siLCJwcm92aWRlcklkIjo2MjU5ODc3NjA3NzAwNTF9?map=23.798813799477,90.423531532288,15,normal&ref=facebook&link=directions&fb_locale=en_US', '1209', 'https://www.facebook.com/pg/breadnbeyond.dhaka/reviews/?ref=page_internal'),
(23, 'TakeOut', '', 'Dhanmondi', 'French Fries, BBQ Chicken Burger', '4.9', '01912-293510', '736 Rangs KB Square, Level - 3, Road - 9/a, Satmosjid Road, Dhanmondi, Bangladesh', 'https://wego.here.com/directions/mix//Satmasjid-Road,-Dhaka,-Bangladesh:23.74446,90.37227?map=23.74356,90.37329,18,normal&fb_locale=en_US', '1209', 'https://www.facebook.com/pg/bdtakeout/reviews/?ref=page_internal'),
(24, 'Oregano', 'https://www.facebook.com/oreganobd/photos/pm.945539248873082/1659831870777146/?type=1&theater', 'Dhanmondi', 'Crabs', '4.7', '01728-213171', 'Level 6, House 74, Bikalpa Tower, Road 5A, Dhanmondi,Dhaka', 'https://wego.here.com/directions/mylocation/e-eyJuYW1lIjoiT3JlZ2FubyBSZXN0YXVyYW50IiwiYWRkcmVzcyI6IkxldmVsIDYsIEhvdXNlIDc0LCBCaWthbHBhIFRvd2VyLCBSb2FkIDVBLCBEaGFubW9uZGksIERoYWthLCBCYW5nbGFkZXNoIiwibGF0aXR1ZGUiOjIzLjc0MTUyMTY1Nzc2OSwibG9uZ2l0dWRlIjo5MC4zNzQxMjUyNDIyMzMsInByb3ZpZGVyTmFtZSI6ImZhY2Vib29rIiwicHJvdmlkZXJJZCI6MjEzMjk0OTU1NDMwODUyfQ==?map=23.741521657769,90.374125242233,15,normal&ref=facebook&link=directions&fb_locale=en_US', '1209', 'https://www.facebook.com/groups/foodbloggersbd/search/?query=Oregano'),
(25, 'Boomers Cafe', '', 'Dhanmondi', 'Any 2 Items', '4.4', '01944724681', 'Anam Rangs Plaza (3rd Floor) House No:61, Rd No:6/A Dhanmondi,Dhaka', 'https://wego.here.com/directions/mylocation/e-eyJuYW1lIjoiQm9vbWVycyBDYWZlIiwiYWRkcmVzcyI6IkJhaWx5IFJvYWQsRGhha2EsIERoYWthLCBCYW5nbGFkZXNoIiwibGF0aXR1ZGUiOjIzLjc0MjIzMzczNDU4NCwibG9uZ2l0dWRlIjo5MC4zNzQxOTQ1MTUzNzYsInByb3ZpZGVyTmFtZSI6ImZhY2Vib29rIiwicHJvdmlkZXJJZCI6OTk5OTU5MDEzNDA0Njk0fQ==?map=23.742233734584,90.374194515376,15,normal&ref=facebook&link=directions&fb_locale=en_US', '1209', 'https://www.facebook.com/pg/boomerscafe.official/reviews/?ref=page_internal'),
(26, 'Fakruddin Biryani & Restaurant', '', 'Banasree', 'Biriyani', '2.9', ' 01740000004', 'H - 08, Block - E, Main Road, Banasree, Rampura, Dhaka', 'https://wego.here.com/directions/mylocation/e-eyJuYW1lIjoiRmFrcnVkZGluIEJpcnlhbmkiLCJhZGRyZXNzIjoiMzcgU291dGggR2h1bHNoYW4gMSwgRGhha2EsIEJhbmdsYWRlc2giLCJsYXRpdHVkZSI6MjMuNzgwNzQyNzQzNTI5LCJsb25naXR1ZGUiOjkwLjQxNzQxODc3Nzk0MywicHJvdmlkZXJOYW1lIjoiZmFjZWJvb2siLCJwcm92aWRlcklkIjoyMzQ4ODQwODMzMzAzODF9?map=23.780742743529,90.417418777943,15,normal&ref=facebook&link=directions&fb_locale=en_US', '1229', 'https://www.facebook.com/pg/FakruddinBiryaniBD/reviews/?ref=page_internal'),
(27, 'fajitas', '', 'Banasree', 'Tacos', '2.5', '01764069766', 'House#1,Road#5,Block#F,Banasree, Dhaka', '', '1229', 'https://www.facebook.com/pg/fajitas.bd/reviews/?ref=page_internal'),
(28, 'Mithus Tea stall', '', 'Rampura', 'Tea, Biscuit', '5', '017640697**', 'A/2, Jahurul Islam Avenue Jahurul Islam City, Aftabnagar, Dhaka', 'https://www.google.com/maps/place/Bot+Tola/@23.7687545,90.426187,21z/data=!4m8!1m2!2m1!1seast+west+university+bd!3m4!1s0x3755c78eac8b7e77:0xb1f1d81a1a8d74e8!8m2!3d23.768811!4d90.4262982', '1212', 'https://www.facebook.com/Tea-Stall-757102097675697/');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`) VALUES
(1, 'Shovon Paul', 'paulshovon94@gmail.com', 'b53477c2821c1bf0da5d40e57b870d35'),
(2, 'sharif', 'sharif@gamai.com', '81dc9bdb52d04dc20036dbd8313ed055'),
(3, 'komola', 'komola@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055'),
(4, 'imtiaz', 'imtiaz@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055'),
(5, 'swapna', 'swapna@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055'),
(6, 'farabi', 'farabikhan02@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055'),
(7, 'rit', 'rit@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `restaurent`
--
ALTER TABLE `restaurent`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `restaurent`
--
ALTER TABLE `restaurent`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
