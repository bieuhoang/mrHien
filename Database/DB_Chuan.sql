-- phpMyAdmin SQL Dump
-- version 4.1.7
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Mar 17, 2014 at 02:27 AM
-- Server version: 10.0.8-MariaDB
-- PHP Version: 5.3.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `dichvuvanp_123`
--

-- --------------------------------------------------------

--
-- Table structure for table `AuthAssignment`
--

CREATE TABLE IF NOT EXISTS `AuthAssignment` (
  `itemname` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `userid` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `bizrule` text COLLATE utf8_unicode_ci,
  `data` text COLLATE utf8_unicode_ci
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `AuthAssignment`
--

INSERT INTO `AuthAssignment` (`itemname`, `userid`, `bizrule`, `data`) VALUES
('admin', '1', NULL, 'N;'),
('admin', '1', NULL, 'N;');

-- --------------------------------------------------------

--
-- Table structure for table `AuthItemChild`
--

CREATE TABLE IF NOT EXISTS `AuthItemChild` (
  `parent` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `child` varchar(200) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `AuthItemChild`
--

INSERT INTO `AuthItemChild` (`parent`, `child`) VALUES
('admin', 'account');

-- --------------------------------------------------------

--
-- Table structure for table `AuthUser`
--

CREATE TABLE IF NOT EXISTS `AuthUser` (
  `authId` int(11) NOT NULL AUTO_INCREMENT,
  `type` int(2) NOT NULL,
  `name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `title` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `description` text COLLATE utf8_unicode_ci,
  `bizrule` text COLLATE utf8_unicode_ci,
  `data` text COLLATE utf8_unicode_ci,
  `ordering` int(4) NOT NULL,
  `status` int(2) NOT NULL,
  PRIMARY KEY (`authId`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=2 ;

--
-- Dumping data for table `AuthUser`
--

INSERT INTO `AuthUser` (`authId`, `type`, `name`, `title`, `description`, `bizrule`, `data`, `ordering`, `status`) VALUES
(1, 1, 'admin', 'Administrator', NULL, NULL, NULL, 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `Object`
--

CREATE TABLE IF NOT EXISTS `Object` (
  `id` int(11) NOT NULL,
  `value` int(11) NOT NULL,
  `status` int(11) NOT NULL,
  `name` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `created` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `Object`
--

INSERT INTO `Object` (`id`, `value`, `status`, `name`, `created`) VALUES
(1, 1, 0, 'Loại Sản phẩm', '0000-00-00 00:00:00'),
(2, 2, 1, 'Nhóm sản phẩm', '2014-02-17 00:00:00'),
(3, 3, 1, 'Sản phẩm', '2014-02-17 00:00:00'),
(4, 4, 1, 'Banner', '2014-02-17 00:00:00'),
(5, 5, 1, 'backGroundAll', '2014-02-17 00:00:00'),
(6, 6, 1, 'backGroundBody', '2014-02-17 00:00:00'),
(7, 7, 1, 'Monu Top', '2014-02-05 00:00:00'),
(8, 8, 1, 'Dữ liệu ảnh', '2014-03-04 00:00:00'),
(9, 9, 1, 'Giới thiệu', '2014-03-12 00:00:00'),
(10, 10, 1, 'Liên hệ', '2014-03-06 00:00:00'),
(11, 11, 1, 'thongtin', '0000-00-00 00:00:00'),
(12, 12, 1, 'Tu khoa Google', '2014-03-03 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `Sanpham`
--

CREATE TABLE IF NOT EXISTS `Sanpham` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `gioithieu` int(11) NOT NULL,
  `lienhe` int(11) NOT NULL,
  `top` int(11) NOT NULL,
  `trai` int(11) NOT NULL,
  `phai` int(11) NOT NULL,
  `moi` int(11) NOT NULL,
  `thutu` int(11) NOT NULL,
  `tomtat` text COLLATE utf8_unicode_ci NOT NULL,
  `url` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  `type` int(11) NOT NULL,
  `parent` int(11) NOT NULL,
  `child` int(11) NOT NULL,
  `gia` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `name` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `tieude` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `noidung` text COLLATE utf8_unicode_ci NOT NULL,
  `status` int(11) NOT NULL,
  `image` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `created` datetime NOT NULL,
  `updated` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=14 ;

--
-- Dumping data for table `Sanpham`
--

INSERT INTO `Sanpham` (`id`, `gioithieu`, `lienhe`, `top`, `trai`, `phai`, `moi`, `thutu`, `tomtat`, `url`, `type`, `parent`, `child`, `gia`, `name`, `tieude`, `noidung`, `status`, `image`, `created`, `updated`) VALUES
(1, 0, 0, 0, 0, 0, 0, 0, 'Chuyên in ấn, Photocopy với giá cả cạnh tranh nhất thị trường', '', 1, 0, 0, '', 'PHOTOCOPY A0 - A4', '', '', 0, 'pho to kho A0-A4.jpg', '2014-03-14 06:24:41', '2014-03-14 06:27:57'),
(2, 0, 0, 0, 0, 0, 0, 0, 'Chúng tôi nhận In card với nhiều kích thước, định lượng loại giấy khác nhau, để được tư vấn và báo giá cụ thể theo yêu cầu của bạn. Vui lòng liên hệ với chúng tôi để được báo giá tốt nhất.\r\n \r\n- Nhận in card với lượng đối với các đơn vị, công ty in ấn quảng cáo,\r\n- Đảm bảo thời gian nhanh, giá cạnh tranh cho các đơn vị.\r\n ', '', 1, 0, 0, '', 'IN CARD', '', '', 0, '2023525095_In card 54 (1).jpg', '2014-03-14 06:27:09', '2014-03-14 06:27:09'),
(3, 0, 0, 0, 0, 0, 0, 0, 'Tiêu đề thư - Tieu de thu (Letter head) được sử dụng phổ biến trong các doanh nghiệp, nhằm mục đích ghi dấu ấn thương hiệu trên mỗi văn bản. Tiêu đề thư thường hiển thị logo, tên Cty và một số thông tin đặc biệt như website, hotline.\r\n \r\nVề mặt hình ảnh thương hiệu việc thể hiện những form mẫu - những giấy tờ liên quan đến việc giao dịch khách hàng bằng giấy tiêu đề thư giúp cho hình ảnh thương hiệu được thể hiện một cách chuyên nghiệp hơn.', '', 1, 0, 0, '', 'IN TIÊU ĐỀ THƯ', '', '', 0, 'in tieu de thu002.jpg', '2014-03-14 06:30:11', '2014-03-14 06:30:11'),
(4, 0, 0, 0, 0, 0, 0, 0, 'In phong bì | In phong bì:  Phong bì là sản phẩm quen thuộc đối với mọi người, dù là cá nhân hay doanh nghiệp ai cũng cần đến phong bì. Hiện nay các doanh nghiệp lớn, nhỏ đều có một chiếc phong bì theo phong cách riêng của mình. Ngoài các chức năng thông thường như chứa đựng giấy tờ, chứng từ, hóa đơn… phong bì cũng là phương tiện để quảng bá hình ảnh, thương hiệu của doanh nghiệp với đối tác.', '', 1, 0, 0, '', 'IN PHONG BÌ', '', '', 0, '162219465_phong bi.jpg', '2014-03-14 07:30:49', '2014-03-14 07:30:49'),
(5, 0, 0, 0, 0, 0, 0, 0, 'Hóa đơn không chỉ thể hiện những thông tin về đơn hàng và thanh toán mà in hóa đơn còn có thể trở thành một công cụ hữu hiệu để quảng bá cho hoạt động kinh doanh của công ty bạn. Bạn có thể tạo thêm các thông tin khác trên hóa đơn phục vụ cho hoạt động kinh doanh như : logo, hình ảnh trang trí hoặc quảng cáo v..v\r\n\r\nCửa hàng chúng tôi là công ty sản xuất uy tín, với nhiều năm kinh nghiệm, chuyên in hóa đơn biểu mẫu, hóa đơn bán hàng, in hóa đơn VAT với giá cạnh tranh, chất lượng tốt, đẹp mắt.', '', 1, 0, 0, '', 'IN HÓA ĐƠN, PHIẾU XUẤT', '', '<div><font face="Arial, Verdana" size="2">Hóa đơn không chỉ thể hiện những thông tin về đơn hàng và thanh toán mà in hóa đơn còn có thể trở thành một công cụ hữu hiệu để quảng bá cho hoạt động kinh doanh của công ty bạn. Bạn có thể tạo thêm các thông tin khác trên hóa đơn phục vụ cho hoạt động kinh doanh như : logo, hình ảnh trang trí hoặc quảng cáo v..v</font></div><div><font face="Arial, Verdana" size="2"><br></font></div><div><font face="Arial, Verdana" size="2">Cửa hàng chúng tôi là công ty sản xuất uy tín, với nhiều năm kinh nghiệm, chuyên in hóa đơn biểu mẫu, hóa đơn bán hàng, in hóa đơn VAT với giá cạnh tranh, chất lượng tốt, đẹp mắt.</font></div>', 0, '1355276281_InHoaDon01.jpg', '2014-03-14 07:42:04', '2014-03-14 07:49:10'),
(6, 0, 0, 0, 0, 0, 0, 0, 'In tờ rơi - Thiết kế tờ rơi, tờ bướm (Leaflet) là một trong những dịch vụ nổi bật của chúng tôi. Với dịch vụ Thiết kế và in tờ rơi, tờ bướm (Leaflet), chúng tôi sẽ giúp quý khách hàng đưa thông điệp quảng cáo đến khách hàng một cách sống động, giàu cảm xúc và hiệu quả cáo nhất.\r\n \r\nCửa hàng chúng tôi là nhà sản xuất trực tiếp chuyên in các sản phẩm trên chất liệu giấy - nhận thiết kế in tờ rơi, tờ gấp giá rẻ tại Hà Nội chất lượng đẹp, kích thước A6, A5, A4, A3 ...có cán mờ hoặc cán bóng 2 mặt tùy theo yêu cầu của quý khách. In tờ rơi trên các loại giấy offset, C...gấp bế thành phẩm trên công nghệ hiện đại, đảm bảo sẽ làm hài lòng quý khách.', '', 1, 0, 0, '', 'IN TỜ RƠI, TỜ GẤP', '', '<div>In tờ rơi - Thiết kế tờ rơi, tờ bướm (Leaflet) là một trong những dịch vụ nổi bật của chúng tôi. Với dịch vụ Thiết kế và in tờ rơi, tờ bướm (Leaflet), chúng tôi sẽ giúp quý khách hàng đưa thông điệp quảng cáo đến khách hàng một cách sống động, giàu cảm xúc và hiệu quả cáo nhất.</div><div>&nbsp;</div><div>Cửa hàng chúng tôi là nhà sản xuất trực tiếp chuyên in các sản phẩm trên chất liệu giấy - nhận thiết kế in tờ rơi, tờ gấp giá rẻ tại Hà Nội chất lượng đẹp, kích thước A6, A5, A4, A3 ...có cán mờ hoặc cán bóng 2 mặt tùy theo yêu cầu của quý khách. In tờ rơi trên các loại giấy offset, C...gấp bế thành phẩm trên công nghệ hiện đại, đảm bảo sẽ làm hài lòng quý khách.</div>', 0, '827300097_In to roi 02.jpg', '2014-03-14 07:44:48', '2014-03-14 07:44:48'),
(7, 0, 0, 0, 0, 0, 0, 0, 'Nhân dịp ra mắt bộ sưu tập mới cùng chào đón mùa cưới 2014, Chúng tôi có chương trình giảm giá đặc biệt cho khách hàng với mức giảm giá 20% cho khách hàng đặt thiệp cưới trực tiếp tại cửa hàng (Áp dụng với số lượng >300C).\r\nVới những mẫu thiết kế mới, lạ mắt và ý nghĩa cho mùa cưới năm nay, chắc chắn các bạn sẽ rất thích', '', 1, 0, 0, '', 'IN THIỆP CƯỚI', '', '<div>Nhân dịp ra mắt bộ sưu tập mới cùng chào đón mùa cưới 2014, Chúng tôi có chương trình giảm giá đặc biệt cho khách hàng với mức giảm giá 20% cho khách hàng đặt thiệp cưới trực tiếp tại cửa hàng (Áp dụng với số lượng &gt;300C).</div><div>Với những mẫu thiết kế mới, lạ mắt và ý nghĩa cho mùa cưới năm nay, chắc chắn các bạn sẽ rất thích</div>', 0, '1843021927_26.jpg', '2014-03-14 07:48:07', '2014-03-14 07:48:07'),
(8, 0, 0, 0, 1, 0, 0, 0, '', '#', 3, 0, 0, '', '#', '', '', 0, '2003127319_in-ky-yeu.gif', '2014-03-14 09:24:56', '2014-03-14 09:36:06'),
(9, 0, 0, 0, 1, 0, 0, 0, '', '#', 3, 0, 0, '', '#', '', '', 0, '1905156505_Untitled-1.gif', '2014-03-14 09:25:28', '2014-03-14 09:36:16'),
(10, 0, 0, 0, 0, 1, 0, 1, '', '#', 3, 0, 0, '', 'Photocopy', '', '', 0, 'RightAd.jpg', '2014-03-14 09:26:21', '2014-03-17 01:16:29'),
(11, 0, 0, 0, 0, 0, 0, 0, '', '#', 4, 0, 0, '', '', '', '', 0, 'bannnerYL.jpg', '2014-03-15 04:48:35', '2014-03-15 04:48:35'),
(12, 0, 0, 1, 0, 0, 0, 1, '', '', 1, 0, 0, '', 'In laser mau', '', '', 0, 'Top baner ofset.jpg', '2014-03-17 01:17:42', '2014-03-17 01:17:42'),
(13, 0, 0, 1, 0, 0, 0, 2, '', '', 1, 0, 0, '', 'Photocopy', '', '', 0, '5.jpg', '2014-03-17 01:19:30', '2014-03-17 01:19:30');

-- --------------------------------------------------------

--
-- Table structure for table `Users`
--

CREATE TABLE IF NOT EXISTS `Users` (
  `userId` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `status` int(2) NOT NULL,
  `lastLogin` datetime NOT NULL,
  `created` datetime NOT NULL,
  `updated` datetime NOT NULL,
  PRIMARY KEY (`userId`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=2 ;

--
-- Dumping data for table `Users`
--

INSERT INTO `Users` (`userId`, `email`, `password`, `status`, `lastLogin`, `created`, `updated`) VALUES
(1, 'admin@05032014', '311ce1c2ce5df5d0c6ac41536c362f15', 1, '2013-12-10 11:19:13', '2013-11-07 19:33:17', '2013-12-10 11:19:13');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
