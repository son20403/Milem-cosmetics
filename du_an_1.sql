-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th12 09, 2022 lúc 04:39 AM
-- Phiên bản máy phục vụ: 10.4.24-MariaDB
-- Phiên bản PHP: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `du_an_1`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `categorys`
--

CREATE TABLE `categorys` (
  `id` int(10) NOT NULL,
  `staff_id` int(20) NOT NULL COMMENT 'id nhân viên',
  `name_category` varchar(100) NOT NULL COMMENT 'tên thư mục',
  `image_category` varchar(200) NOT NULL COMMENT 'ảnh thư mục'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `categorys`
--

INSERT INTO `categorys` (`id`, `staff_id`, `name_category`, `image_category`) VALUES
(3, 1, 'bioderma', 'bioderma.png'),
(4, 1, 'fancl', 'fancl.png'),
(6, 1, 'lamer', 'lamerlogo.png'),
(7, 1, 'mediheal', 'mediheal.png'),
(13, 1, 'HUXLEY', 'huxley.png'),
(14, 1, 'DIOR', 'dior.png'),
(15, 1, 'SK-II', 'skii.png'),
(16, 1, 'MANIS', 'manis.png'),
(17, 1, 'KORRES', 'korres-logo-1.png'),
(18, 1, 'VALMONT', 'valmont.png');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `comments`
--

CREATE TABLE `comments` (
  `id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL COMMENT 'mã sản phẩm',
  `customer_id` int(11) NOT NULL COMMENT 'mã khách hàng',
  `title_comment` varchar(200) NOT NULL,
  `comment` varchar(2000) NOT NULL COMMENT 'nội dung bình luận',
  `comment_date` date DEFAULT NULL COMMENT 'ngày bình luận'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `comments`
--

INSERT INTO `comments` (`id`, `product_id`, `customer_id`, `title_comment`, `comment`, `comment_date`) VALUES
(26, 3, 3, 'Sản phẩm quá ok', 'ok', '2022-12-03');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `customers`
--

CREATE TABLE `customers` (
  `id` int(20) NOT NULL COMMENT 'id khách hàng',
  `user_name` varchar(50) NOT NULL COMMENT 'tên đăng nhập',
  `full_name` varchar(50) NOT NULL COMMENT 'tên khách hàng',
  `password` varchar(300) NOT NULL COMMENT 'mật khẩu',
  `email` varchar(50) NOT NULL COMMENT 'email khách hàng',
  `address` varchar(100) NOT NULL COMMENT 'địa chỉ',
  `phone` varchar(20) NOT NULL COMMENT 'số điện thoại'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `customers`
--

INSERT INTO `customers` (`id`, `user_name`, `full_name`, `password`, `email`, `address`, `phone`) VALUES
(1, 'chuong', 'Chương Nguyễn', '123', 'chuong@gmail.com', 'Đà Nẵng', '1234567876'),
(3, 'son', 'Nguyễn Trường Sơn', '123', 'sonntpd05961@fpt.edu.vn', 'Cầu Tam Kỳ', '0328846202'),
(4, 'admin', 'Nguyen Truong Son', '123', 'ntstruongson2k3@gmail.com', 'Cầu Tam Kỳ', '0328846202'),
(14, 'sonnt', 'Nguyen Truong Son', 'Nts20403', 'sonntpd05961@fpt.edu.vn', 'Cầu Tam Kỳ', '0328846202'),
(15, 'thule', 'le minh thu', '123', 'thule@gmail.com', 'ngu hanh son', '093729473'),
(16, 'son', 'Nguyen Truong Son', '123', 'sonntpd05961@fpt.edu.vn', 'Cầu Tam Kỳ', '0328846202'),
(17, 'user1', 'Nguyen Truong Son', '123', 'sonntpd05961@fpt.edu.vn', 'Cầu Tam Kỳ', '0328846202'),
(20, 'son123', 'Nguyen Truong Son', '123', 'sonntpd05961@fpt.edu.vn', 'Cầu Tam Kỳ', '0328846202'),
(21, 'user123', 'Nguyen Truong Son', '', 'sonntpd05961@fpt.edu.vn', '0328846202', 'Cầu Tam Kỳ'),
(22, 'son111', 'Nguyen Truong Son123', '$2y$10$v2AEIBDmboa.JAczD63ymekeNGX4c0yOlbff0Ko9kf.QvrL70HwGq', 'sonntpd05961@fpt.edu.vn', 'Cầu Tam Kỳ', '0328846202'),
(23, 'thu123', 'Nguyen Truong Son', '$2y$10$VX8d7W97444kj.PeZouOcutvotY0Vufe60NJ6Fc8SOc.xZKX6kxum', 'sonntpd05961@fpt.edu.vn', 'Cầu Tam Kỳ', '0328846202');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `news`
--

CREATE TABLE `news` (
  `id` int(20) NOT NULL,
  `staff_id` int(20) NOT NULL COMMENT 'id nhân viên',
  `title` varchar(200) NOT NULL COMMENT 'tiêu đề bài viết',
  `image_new` varchar(200) NOT NULL COMMENT 'ảnh sản phẩm',
  `content` text NOT NULL COMMENT 'nội dung bài viết',
  `news_date` varchar(200) NOT NULL COMMENT 'thời gian tạo',
  `view_news` int(20) NOT NULL COMMENT 'lượt xem'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `news`
--

INSERT INTO `news` (`id`, `staff_id`, `title`, `image_new`, `content`, `news_date`, `view_news`) VALUES
(4, 1, 'MILEM - THE SPA | SOFT OPENING', 'news1.jpg', '<p>Đ&aacute;p lại sự tin tưởng v&agrave; ủng hộ của Qu&yacute; Kh&aacute;ch H&agrave;ng d&agrave;nh cho cửa h&agrave;ng mỹ phẩm cao cấp MiLem trong gần 10 năm qua. Sau một thời gian d&agrave;i ấp ủ v&agrave; chờ đợi, MiLem - The Spa ch&iacute;nh thức đi v&agrave;o hoạt động.</p><p>SOFT OPENING bắt đầu từ ng&agrave;y 09.07.2022 - Giảm 15% to&agrave;n bộ dịch vụ Spa</p><p>MiLem - The Spa mang đến sự kết hợp ho&agrave;n hảo giữa kĩ thuật massage chuy&ecirc;n s&acirc;u v&agrave; sử dụng những sản phẩm cao cấp c&oacute; thương hiệu lớn, đặc biệt l&agrave; c&aacute;c liệu tr&igrave;nh chăm s&oacute;c da độc quyền từ VALMONT - thương hiệu mỹ phẩm &ldquo;qu&yacute; tộc&rdquo; từ Thuỵ Sỹ. K&iacute;ch hoạt to&agrave;n bộ gi&aacute;c quan nhằm hấp thụ tối đa những dưỡng chất qu&yacute; gi&aacute;. Mang đến cho cơ thể sự thoải m&aacute;i, t&acirc;m hồn được thư gi&atilde;n, v&agrave; l&agrave;n da được t&aacute;i tạo, phục hồi năng lượng v&agrave; sức sống.</p><p>Để phục vụ Qu&yacute; Kh&aacute;ch được tốt nhất, ch&uacute;ng t&ocirc;i chỉ nhận đặt chỗ trước<br>- Hotline: 0932 981 560<br>- Inbox Fanpage MiLem<br>- Website: https://www.milem.vn/vi-vn/the-spa.html</p>', '2022-12-01', 1),
(5, 1, 'LỊCH NGHỈ TẾT NGUYÊN ĐÁN NHÂM DẦN 2022', 'news2.jpg', '<p>K&iacute;nh gửi Qu&yacute; Kh&aacute;ch H&agrave;ng</p>\r\n<p>MiLem th&ocirc;ng b&aacute;o Lịch Nghỉ Tết Nguy&ecirc;n Đ&aacute;n năm Nh&acirc;m Dần 2022</p>\r\n<ol>\r\n<li>Cửa h&agrave;ng mở cửa đến hết ng&agrave;y: 28.01.2022 (nhằm m&ugrave;ng 26 &Acirc;L)</li>\r\n<li>Ng&agrave;y cuối nhận đơn Online:</li>\r\n</ol>\r\n<ul>\r\n<li>Gửi ch&agrave;nh xe: 29.01.2022 (nhằm m&ugrave;ng 27 &Acirc;L)</li>\r\n<li>TP. Hồ Ch&iacute; Minh: 30.01.2022 (nhằm m&ugrave;ng 28 &Acirc;L)</li>\r\n<li>C&aacute;c tỉnh th&agrave;nh c&ograve;n lại: 22.01.2022 (nhằm m&ugrave;ng 20 &Acirc;L)</li>\r\n</ul>\r\n<p><strong>MiLem khai trương lại v&agrave;o ng&agrave;y: 08.02.2022 (nhằm m&ugrave;ng 8 th&aacute;ng Gi&ecirc;ng &Acirc;L) với nhiều ưu đ&atilde;i cực hấp dẫn.</strong></p>\r\n<p>K&iacute;nh ch&uacute;c Qu&yacute; Kh&aacute;ch một năm mới nhiều sức khỏe, b&igrave;nh an, đại c&aacute;t đại lợi!</p>', '2022-12-01', 3),
(6, 1, 'ĐẶT NGAY - NHẬN NGAY', 'news3.jpg', '<p>S&agrave;i G&ograve;n th&acirc;n y&ecirc;u ơi đừng lo lắng v&igrave; đ&atilde; c&oacute; MiLem đ&acirc;y! ?</p>\r\n<p>Vẫn lu&ocirc;n lu&ocirc;n s&aacute;t c&aacute;nh c&ugrave;ng n&agrave;ng trong qu&atilde;ng thời gian kh&oacute; khăn n&agrave;y.</p>\r\n<p>?H&atilde;y inbox ngay cho MiLem để được tư vấn v&agrave; mua h&agrave;ng nhận ngay trong ng&agrave;y nh&eacute; ❤️</p>', '2022-12-01', 0),
(7, 1, 'MILEM | Khai Trương Năm Mới 2021', 'news4.jpg', '<p>K&iacute;nh gửi Qu&yacute; Kh&aacute;ch H&agrave;ng</p>\r\n<p>MiLem ch&iacute;nh thức quay trở lại phục vụ Qu&yacute; Kh&aacute;ch v&agrave;o Thứ Bảy, ng&agrave;y 20-02-2021&nbsp;(nhằm Mồng 09&nbsp;Th&aacute;ng Gi&ecirc;ng &Acirc;L).<br>Ch&uacute;ng t&ocirc;i rất h&aacute;o hức v&agrave; h&acirc;n hạnh được đ&oacute;n tiếp Qu&yacute; Kh&aacute;ch.<br>V&agrave; đừng qu&ecirc;n những Hồng bao l&igrave; x&igrave; &ldquo;si&ecirc;u to&rdquo; đang chờ đợi Qu&yacute; Kh&aacute;ch chỉ c&oacute; trong ng&agrave;y khai trương nh&eacute;!</p>\r\n<p>&Aacute;p dụng cho cả mua Online v&agrave; mua trực tiếp tại cửa h&agrave;ng ạ&nbsp;❤️</p>\r\n<p>Ch&uacute;c Qu&yacute; Kh&aacute;ch một năm đại c&aacute;t đại lợi!</p>\r\n<p>&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;<br>MILEM | Your Skincare Friend<br>- STORE: 461 T&ocirc; Hiến Th&agrave;nh, P.14, Q.10, HCM<br>- HOTLINE: 0932 981 560<br>- HOURS:<br>+ T2 - T7: 10:00 - 21:30<br>+ CN: 12:30 - 21:30<br>- WEBSITE:&nbsp;<a href=\"https://l.facebook.com/l.php?u=http%3A%2F%2Fwww.milem.vn%2F%3Ffbclid%3DIwAR20ByOqw6QDlgd5B3URdkqk-jmiUnkZFsCEIwCIKw41sp_gQdjcR1SEo6M&amp;h=AT0m-VZQND01E213vxXXlB_8uq5UqCpEhMfalJdEzzsTzSrBROfrNVGZQG_6kJX98NBfHHyyTNQ5XNcwKzqOyT4n4Y9-Xf0VUTWHO161enhL3SJq750T3CgLyqCwQ1N60j-wPCc5f_sMwbzD5GHiz4zK_fGIjsxbaxIxiccFVZwczDqKW3NjvBnbfEYmuW83y3zpjivp0xZaMkQoovZiXtD8nJva-wSZM1pmeJ-9POfoDW0rR2HJRt0pwhvysIlvRzPbywoCcaJDnk68lZ8_o1ChdBWqDKlZF7_ksN5KQGnLwDLhP1kYPsYA9SH-WyS4xSnMgaUkWHt4Qc46h04hEzP9p7KrY8XkGh0Ny3FiP-HIzl4be3JTzeE8lEwfwLBxd0_4cglfqyj8IETToLmeoivf2373sBA67MS2rUEMmuGN1PNxMM9E1yZH-ddn3ejwRd1YHuXmqRV2bFwBCZ0dsMIj9xm-1wHdk8y9s0OtaSA6YDGEvZPiAEc7TK6hdT9sJXBOnnMJAJctOoHa4DFHnVH5cMHKNripUG6BBbototzcmNraNvmx-hRD5CvOymlQWw4-e1g_8eCwHuxTjngL4eCRz5Ag5F1FAR-Wx0axOiotDdgdjPRq27pwQyjLl5mFcXoyBtw\" target=\"_blank\" rel=\"noopener nofollow\" data-ft=\"{\" data-lynx-mode=\"async\">www.milem.vn</a><br><a href=\"https://business.facebook.com/hashtag/milem?source=feed_text&amp;epa=HASHTAG&amp;__xts__%5B0%5D=68.ARC_gy7lCIF52C2cChqHsjILZ778YFor1A8XzqSWJVNAin0pGrOMPFTi4JTRcHO1EgVmTnCWLptEVDQv3JE9rSNMjhq2VBaaPgwescnnOb9RH-APV1l3XbRRlu6Ztq1lUNfisFfXGYvpRnX2rFmzUrUJAGfyylry6Khs2MQMWcQ7uEgswaDOLyXc7C4r0sIijv_-mFy1Nja7gUgcXtsme76MK4EecQZpW1YffM_6ZtquF6-QNPe7BqPBEYNU3r9kmA4sGjG0MW4KBmLW3L3gsVDMSiql4BlziafsR9Wm8Xefz4uPdOJCakVRTV3K-QmLmbcb0M949RSNav-yzvw-XfKm1w&amp;__tn__=%2ANK-R\" data-ft=\"{\">#Milem</a>&nbsp;<a href=\"https://business.facebook.com/hashtag/yourskincarefriend?source=feed_text&amp;epa=HASHTAG&amp;__xts__%5B0%5D=68.ARC_gy7lCIF52C2cChqHsjILZ778YFor1A8XzqSWJVNAin0pGrOMPFTi4JTRcHO1EgVmTnCWLptEVDQv3JE9rSNMjhq2VBaaPgwescnnOb9RH-APV1l3XbRRlu6Ztq1lUNfisFfXGYvpRnX2rFmzUrUJAGfyylry6Khs2MQMWcQ7uEgswaDOLyXc7C4r0sIijv_-mFy1Nja7gUgcXtsme76MK4EecQZpW1YffM_6ZtquF6-QNPe7BqPBEYNU3r9kmA4sGjG0MW4KBmLW3L3gsVDMSiql4BlziafsR9Wm8Xefz4uPdOJCakVRTV3K-QmLmbcb0M949RSNav-yzvw-XfKm1w&amp;__tn__=%2ANK-R\" data-ft=\"{\">#yourskincarefriend</a></p>', '2022-12-01', 0),
(8, 1, 'Kết quả Christmas Giveaway 2020', 'news5.jpg', '<p>Xin ch&uacute;c mừng bạn Van Phạm đ&atilde; trở th&agrave;nh chủ nh&acirc;n của giải thưởng Christmas Giveaway 2020 trị gi&aacute; 500$!</p>', '2022-12-01', 1),
(9, 1, 'LỊCH NGHỈ TẾT NGUYÊN ĐÁN TÂN SỬU 2021', 'news6.png', '<p>K&iacute;nh gửi Qu&yacute; Kh&aacute;ch H&agrave;ng,</p>\r\n<p>MiLem tr&acirc;n trọng th&ocirc;ng b&aacute;o lịch nghỉ tết Nguy&ecirc;n Đ&aacute;n T&acirc;n Sửu 2021:</p>\r\n<ol>\r\n<li>Showroom mở cửa&nbsp;đến hết ng&agrave;y 09.02.2021&nbsp;(tức ng&agrave;y 28 &Acirc;L).</li>\r\n<li>Đối với c&aacute;c đơn h&agrave;ng mua Online qua Facebook &amp; Website, xin Qu&yacute; Kh&aacute;ch lưu &yacute; ng&agrave;y cuối nhận đơn để đảm bảo nhận h&agrave;ng trước Tết:\r\n<ul>\r\n<li>Khu vực c&aacute;c tỉnh miền Bắc v&agrave; miền Trung: nhận đơn đến hết ng&agrave;y&nbsp;06.02.2021 (tức ng&agrave;y 25&nbsp;&Acirc;L).</li>\r\n<li>Khu vực TP.H&agrave; Nội &amp;&nbsp;TP.Đ&agrave; Nẵng: nhận đơn đến hết ng&agrave;y 07.02.2021&nbsp;(tức ng&agrave;y 26&nbsp;&Acirc;L).</li>\r\n<li>Khu vực ngoại th&agrave;nh TP.HCM v&agrave; c&aacute;c tỉnh miền Nam: nhận đơn đến hết ng&agrave;y&nbsp;08.02.2021 (tức ng&agrave;y 27&nbsp;&Acirc;L).</li>\r\n<li>Khu vực nội th&agrave;nh TP.HCM v&agrave; gửi bến xe: nhận đơn đến hết ng&agrave;y&nbsp;10.02.2021 (tức ng&agrave;y 29 &Acirc;L).&nbsp;</li>\r\n</ul>\r\n</li>\r\n</ol>\r\n<p><br><strong>Ng&agrave;y 20.02.2021&nbsp;(M&ugrave;ng 09&nbsp;th&aacute;ng Gi&ecirc;ng) MiLem hoạt động lại b&igrave;nh thường c&ugrave;ng nhiều ưu đ&atilde;i đầu năm.</strong></p>\r\n<p>Ch&uacute;c Qu&yacute; Kh&aacute;ch một năm mới an khang thịnh vượng, ngh&igrave;n sự như &yacute;, vạn sự như mơ, triệu sự bất ngờ, tỷ lần hạnh ph&uacute;c!!!</p>', '2022-12-01', 0),
(10, 1, 'Christmas GiveAway 2 - 20202', 'news7.jpg', '<h1><strong>Christmas GiveAway 2 - 2020</strong></h1><p>Phần thưởng Giveaway l&agrave; một chiếc hộp gồm 3 sản phẩm đến từ 3 thương hiệu mỹ phẩm cao cấp SK-II, La Mer v&agrave; Valmont trị gi&aacute; 12.000.000đ&nbsp;<br>- Kem dưỡng chống l&atilde;o h&oacute;a căng b&oacute;ng da SK-II 15g<br>- Nước c&acirc;n bằng t&aacute;i sinh l&agrave;n da&nbsp;Valmont 150ml</p><p><strong>Người tham gia phải thực hiện đủ 5 bước sau:&nbsp;</strong><br>- Bước 1<em>:</em>&nbsp;Like v&agrave; Share/Chia sẻ b&agrave;i post n&agrave;y ở chế độ Public<br>- Bước 2: Ấn &ldquo;Like/Th&iacute;ch&rdquo; 2 trang Fanpage&nbsp;<br>&nbsp;&nbsp;&nbsp;+ Lem by MiLem:&nbsp;</p>', '2022-12-01', 2),
(11, 1, 'MILEM | Khai Trương Năm Mới 2020', 'news8.webp', '<p>K&iacute;nh Gửi Qu&yacute; Kh&aacute;ch H&agrave;ng</p><p>&nbsp;</p><p>MiLem Ch&iacute;nh Thức Quay Trở Lại Phục Vụ Qu&yacute; Kh&aacute;ch V&agrave;o Thứ Hai, Ng&agrave;y 03-02-2020 (Nhằm Mồng 10 Th&aacute;ng Gi&ecirc;ng &Acirc;L).<br>Ch&uacute;ng T&ocirc;i Rất H&aacute;o Hức V&agrave; H&acirc;n Hạnh Được Đ&oacute;n Tiếp Qu&yacute; Kh&aacute;ch.<br>V&agrave; Đừng Qu&ecirc;n Những Hồng Bao L&igrave; X&igrave; &ldquo;Si&ecirc;u To Khổng Lồ&rdquo; Đang Chờ Đợi Qu&yacute; Kh&aacute;ch Chỉ C&oacute; Trong Ng&agrave;y Khai Trương Nh&eacute;!</p><p>&Aacute;p Dụng Cho Cả Mua Online V&agrave; Mua Trực Tiếp Tại Cửa H&agrave;ng Ạ&nbsp;❤️</p><p>Ch&uacute;c Qu&yacute; Kh&aacute;ch Một Năm Đại C&aacute;t Đại Lợi!</p><p>&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;<br>MILEM | Your Skincare Friend<br>- STORE: 461 T&ocirc; Hiến Th&agrave;nh, P.14, Q.10, HCM<br>- HOTLINE: 0932 981 560<br>- HOURS:<br>+ T2 - T7: 10:00 - 21:30<br>+ CN: 12:30 - 21:30<br><br></p>', '2022-12-01', 2),
(12, 1, '1st Anniversary of MiLem store', 'news9.webp', '<h1><strong>MỪNG 1 NĂM MILEM CH&Iacute;NH THỨC KHAI TRƯƠNG CỬA H&Agrave;NG ĐẦU TI&Ecirc;N!!!</strong></h1><p>Sự Tin Tưởng V&agrave; T&igrave;nh Cảm Của Qu&yacute; Kh&aacute;ch H&agrave;ng D&agrave;nh Cho Ch&uacute;ng T&ocirc;i Trong Suốt Thời Gian Qua L&agrave; V&ocirc; Gi&aacute; V&agrave; L&agrave; Yếu Tố Quan Trọng Nhất Để Ch&uacute;ng T&ocirc;i Ng&agrave;y Một Ph&aacute;t Triển Hơn.</p><p>Đ&acirc;y Cũng Ch&iacute;nh L&agrave; Dịp Để MILEM Gửi Lời Cảm Ơn Ch&acirc;n Th&agrave;nh V&agrave; B&agrave;y Tỏ Sự Tri &Acirc;n S&acirc;u Sắc Đến Qu&yacute; Kh&aacute;ch H&agrave;ng.<br>Từ Ng&agrave;y 23-07-2020 Đến Hết Ng&agrave;y 25-07-2020, H&atilde;y Đến Mua Sắm Tại MILEM V&agrave; Nhận Ngay Những Phần Qu&agrave; Tặng V&ocirc; C&ugrave;ng Hấp Dẫn.</p><p><strong><u><em>Tặng Ngay:</em></u></strong></p><ul><li>1 Sữa Dưỡng Thể Dưỡng Trắng V&agrave; Chống Nắng Hatomugi 65g Cho Ho&aacute; Đơn Từ 500.000đ.</li><li>1 Xịt Kho&aacute;ng Dưỡng Ẩm V&agrave; L&agrave;m Dịu Da Hyggee Cho H&oacute;a Đơn Từ 2.000.000đ.</li><li>1 Son Dưỡng Dior Addict Lip Glow Cho H&oacute;a Đơn Từ 4.000.000đ.</li></ul><p>*&Aacute;p Dụng Đồng Thời Cho Mua Online V&agrave; Mua Tại Cửa H&agrave;ng.<br>*Kh&ocirc;ng &Aacute;p Dụng Chung Với C&aacute;c Chương Tr&igrave;nh Khuyến M&atilde;i Kh&aacute;c.</p>', '2022-12-01', 0),
(13, 1, 'Christmas GiveAway 2020', 'news10.jpg', '<h1><strong>CHRISTMAS GIVEAWAY 2020</strong></h1><p>Phần Thưởng Giveaway L&agrave; Một Chiếc Hộp Gồm 3 Sản Phẩm Đến Từ 3 Thương Hiệu Mỹ Phẩm Cao Cấp SK-II, La Mer V&agrave; Valmont Trị Gi&aacute; 12.000.000đ&nbsp;<br>- Sữa Rửa Mặt SK-II 120g<br>- Kem Mắt La Mer 15ml<br>- Mặt Nạ Kem T&aacute;i Sinh L&agrave;n Da Valmont 50ml</p><p><strong>Người Tham Gia Phải Thực Hiện Đủ 5 Bước Sau:&nbsp;</strong><br>- Bước 1<em>:</em>&nbsp;Like V&agrave; Share/Chia Sẻ B&agrave;i Post N&agrave;y Ở Chế Độ Public<br>- Bước 2: Ấn &ldquo;Like/Th&iacute;ch&rdquo; 2 Trang Fanpage&nbsp;<br>&nbsp;&nbsp;&nbsp;+ Lem By MiLem:&nbsp;<br>&nbsp;&nbsp;&nbsp;+ MiLem:&nbsp;<br>- Bước 3: Ấn &ldquo;Follow/Theo D&otilde;i&rdquo; Facebook Lam Ho&agrave;ng:<br>- Bước 4: Comment V&agrave;o B&agrave;i Post N&agrave;y 1 Tấm Ảnh Chụp Bất K&igrave; Sản Phẩm Đ&atilde; Mua Tại MiLem K&egrave;m T&uacute;i Giấy MiLem&nbsp;<br>- Bước 5: K&ecirc;u Gọi Bạn B&egrave;, Người Th&acirc;n V&agrave;o&nbsp;#Likes&nbsp;Ảnh Của M&igrave;nh</p><p>Giải Thưởng Giveaway Sẽ Thuộc Về Chủ Nh&acirc;n Của Bức Ảnh C&oacute; Nhiều Likes Nhất V&agrave; Thực Hiện Đủ 5 Bước Tr&ecirc;n.&nbsp;</p><p><strong>Thời Gian Thực Hiện:</strong><br>- Từ Ng&agrave;y 15.12.2020 Đến Hết Ng&agrave;y 17.12.2020<br>- Kết Quả Sẽ Được C&ocirc;ng Bố Tại Website V&agrave; Facebook Fanpage MiLem V&agrave;o L&uacute;c 20:00 Ng&agrave;y 18.12.2020</p><p><strong>*Lưu &Yacute;:</strong><br>- Chương Tr&igrave;nh Chỉ D&agrave;nh Cho Kh&aacute;ch H&agrave;ng Đ&atilde; Từng Mua H&agrave;ng Tại MiLem Từ Năm 2018 Đến Nay.&nbsp;<br>- Trường Hợp C&oacute; Nhiều Người C&ugrave;ng Đạt Đủ Ti&ecirc;u Ch&iacute;, MiLem Sẽ Trao Phần Thưởng Cho Người C&oacute; Doanh Số Mua H&agrave;ng Cao Nhất Trong Năm 2020.&nbsp;<br>- Chương Tr&igrave;nh Kh&ocirc;ng D&agrave;nh Cho Nh&acirc;n Vi&ecirc;n MiLem V&agrave; C&aacute;c Đại L&yacute;.<br>- Phần Thưởng Kh&ocirc;ng C&oacute; Gi&aacute; Trị Quy Đổi Th&agrave;nh Tiền Mặt.</p>', '2022-12-01', 6);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `orders`
--

CREATE TABLE `orders` (
  `id` int(11) NOT NULL COMMENT 'id hóa đơn',
  `staff_id` int(20) DEFAULT NULL COMMENT 'id nhân viên',
  `customer_id` int(11) DEFAULT NULL COMMENT 'id khách hàng',
  `total_money` float NOT NULL COMMENT 'tổng tiền',
  `total_item` int(11) NOT NULL,
  `buying_date` varchar(20) NOT NULL COMMENT 'ngày mua',
  `full_name` varchar(50) NOT NULL,
  `address` varchar(200) NOT NULL,
  `phone` varchar(11) NOT NULL,
  `email` varchar(200) NOT NULL,
  `status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `orders`
--

INSERT INTO `orders` (`id`, `staff_id`, `customer_id`, `total_money`, `total_item`, `buying_date`, `full_name`, `address`, `phone`, `email`, `status`) VALUES
(63, NULL, NULL, 650000, 1, '2022-12-03', 'Nguyen Truong Son', 'Cầu Tam Kỳ', '0328846202', 'sonntpd05961@fpt.edu.vn', 'Chưa xử lý'),
(64, 1, NULL, 650000, 1, '2022-12-03', 'Nguyen Truong Son', 'Cầu Tam Kỳ', '0328846202', 'sonntpd05961@fpt.edu.vn', 'Chưa xử lý'),
(65, 23, 3, 5000000, 1, '2022-12-03', 'Nguyễn Trường Sơn', 'Cầu Tam Kỳ', '0328846202', 'sonntpd05961@fpt.edu.vn', 'Đã giao hàng thành công'),
(67, 1, NULL, 515000, 1, '2022-12-05', 'Nguyen Truong Son', 'Cầu Tam Kỳ', '0328846202', 'sonntpd05961@fpt.edu.vn', 'Chưa xử lý'),
(68, 23, NULL, 3515000, 7, '2022-12-05', 'Nguyen Truong Son', 'Cầu Tam Kỳ', '0328846202', 'sonntpd05961@fpt.edu.vn', 'Đã giao hàng thành công'),
(69, 23, NULL, 5000000, 1, '2022-12-05', 'Nguyen Truong Son', 'Cầu Tam Kỳ', '0328846202', 'sonntpd05961@fpt.edu.vn', 'Đã giao hàng thành công'),
(71, 23, 3, 5000000, 1, '2022-12-06', 'Nguyễn Trường Sơn', 'Cầu Tam Kỳ', '0328846202', 'sonntpd05961@fpt.edu.vn', 'Đang giao hàng'),
(73, 1, 3, 5000000, 1, '2022-12-06', 'Nguyen Truong Son', 'Cầu Tam Kỳ', '0328846202', 'sonntpd05961@fpt.edu.vn', 'Đã xử lý'),
(74, 23, 22, 1100000, 4, '2022-12-06', 'Nguyen Truong Son123', 'Cầu Tam Kỳ', '0328846202', 'sonntpd05961@fpt.edu.vn', 'Đã giao hàng thành công'),
(75, 23, 22, 1030000, 2, '2022-12-07', 'Nguyen Truong Son123', 'Cầu Tam Kỳ', '0328846202', 'sonntpd05961@fpt.edu.vn', 'Đã giao hàng thành công');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `order_details`
--

CREATE TABLE `order_details` (
  `id` int(11) NOT NULL COMMENT 'id hóa đơn chi tiet',
  `order_id` int(11) NOT NULL COMMENT 'id hóa đơn',
  `product_id` int(11) NOT NULL COMMENT 'id sản phẩm',
  `quantity` int(11) NOT NULL COMMENT 'số lượng',
  `price` float NOT NULL COMMENT 'giá sản phẩm'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `order_details`
--

INSERT INTO `order_details` (`id`, `order_id`, `product_id`, `quantity`, `price`) VALUES
(57, 63, 5, 1, 650000),
(58, 64, 5, 1, 650000),
(59, 65, 3, 1, 5000000),
(61, 67, 2, 1, 515000),
(62, 68, 5, 3, 650000),
(63, 68, 2, 3, 515000),
(64, 68, 6, 1, 20000),
(65, 69, 3, 1, 5000000),
(67, 71, 3, 1, 5000000),
(69, 73, 3, 1, 5000000),
(70, 74, 5, 1, 650000),
(71, 74, 33, 3, 150000),
(72, 75, 2, 2, 515000);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `staff_id` int(20) NOT NULL COMMENT 'id nhân viên',
  `name_product` varchar(100) NOT NULL COMMENT 'Tên sản phẩm',
  `image_product` varchar(100) NOT NULL COMMENT 'ảnh sản phẩm',
  `describe` text NOT NULL COMMENT 'mô tả sản phẩm',
  `price` float NOT NULL COMMENT 'giá sản phẩm',
  `category_id` int(10) NOT NULL COMMENT 'danh mục',
  `view` int(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `products`
--

INSERT INTO `products` (`id`, `staff_id`, `name_product`, `image_product`, `describe`, `price`, `category_id`, `view`) VALUES
(2, 1, 'BIODERMA Solution Micellaire Demaquillante - Nước tẩy trang (Da nhạy cảm) 500ml', 'bioderma-solution-micellaire-demaquillante-hong2800t.png', '<p>L&agrave; nước tẩy trang nổi tiếng được ưa chuộng nhất tr&ecirc;n Thế Giới, cứ mỗi 5 gi&acirc;y lại c&oacute; một chai được b&aacute;n ra</p><p>-&nbsp;C&aacute;c Acid b&eacute;o si&ecirc;u nhỏ kh&ocirc;ng chỉ gi&uacute;p l&agrave;m sạch da, m&agrave; c&ograve;n c&oacute; khả năng l&agrave;m dịu tổn thương, k&iacute;ch th&iacute;ch qu&aacute; tr&igrave;nh t&aacute;i tạo, l&agrave;m l&agrave;nh da.</p><p>- Chiết xuất từ dưa leo gi&uacute;p l&agrave;m dịu da.&nbsp;</p><p>-&nbsp;C&ocirc;ng thức Micelle dễ d&agrave;ng loại bỏ c&aacute;c lớp trang điểm, chống nắng, bụi bẩn ở cả v&ugrave;ng m&ocirc;i v&agrave; mắt m&agrave; kh&ocirc;ng g&acirc;y kh&ocirc; hay r&aacute;t da.</p><p>- Kh&ocirc;ng cần phải rửa lại với nước.&nbsp;</p><p>- Kh&ocirc;ng chứa cồn, kh&ocirc;ng chứa hương liệu.</p><p>Sản xuất tại Ph&aacute;p</p>', 515000, 3, 66),
(3, 1, 'BIODERMA Solution Micellaire Nettoyante Purifiante - Nước tẩy trang (Da dầu/mụn) 500ml', 'bioderma-xanhla.png', '<p>Nước tẩy trang d&agrave;nh cho những l&agrave;n da dầu mụn, da hỗn hợp, kh&ocirc;ng d&ugrave;ng để tẩy mắt v&agrave; m&ocirc;i&nbsp;</p><p>- Chứa chiết xuất từ l&aacute; bạch quả - Ginko Biloba v&agrave; kẽm - Zinc gi&uacute;p hỗ trợ kh&aacute;ng vi&ecirc;m v&agrave; kiểm so&aacute;t dầu thừa.</p><p>- C&ocirc;ng nghệ Fluidactiv c&oacute; khả năng l&agrave;m sạch c&aacute;c lớp trang điểm v&agrave; điều tiết b&atilde; nhờn.</p><p>- Độ l&agrave;m sạch kh&aacute; cao.&nbsp;</p><p>- Kh&ocirc;ng chứa chất tạo m&agrave;u. C&oacute; chứa hương liệu nhưng h&agrave;m lượng rất thấp.&nbsp;</p><p>Sản xuất tại Ph&aacute;p</p>', 5000000, 3, 237),
(5, 1, 'FANCL Mild Cleansing Oil - Dầu tẩy trang', 'fanclmildcleansingoildropshadowed.png', '<p>Dầu tẩy trang chứa hỗn hợp c&aacute;c loại dầu v&agrave; th&agrave;nh phần l&agrave;m sạch được tuyển chọn kĩ c&agrave;ng, kh&ocirc;ng lưu lại lớp dầu tr&ecirc;n da sau khi tẩy trang</p><p>- Dễ d&agrave;ng ho&agrave; tan v&agrave; tẩy sạch mọi lớp trang điểm d&ugrave; cứng đầu nhất như mascara, son m&ocirc;i, chống nắng v&agrave; bụi bẩn.</p><p>- Th&agrave;nh phần chủ yếu l&agrave; dầu Oliu chống oxy ho&aacute; v&agrave; Vitamin E dưỡng ẩm cho da lu&ocirc;n mềm mại, mịn m&agrave;ng v&agrave; tươi trẻ ngay sau khi sử dụng.</p><p>- L&agrave;m sạch s&acirc;u lỗ ch&acirc;n l&ocirc;ng, ngừa mụn ẩn, mụn đầu đen.</p><p>- Kh&ocirc;ng cay mắt, c&oacute; thể sử dụng cho cả v&ugrave;ng mắt v&agrave; m&ocirc;i.</p><p>- Nhiều năm liền đạt giải nhất bảng xếp hạng Cosme của Nhật.</p><p>- Kh&ocirc;ng hương liệu, kh&ocirc;ng chất bảo quản.</p><p>Ph&ugrave; hợp với mọi loại da, kh&ocirc;ng g&acirc;y k&iacute;ch ứng.</p><p>Sản xuất tại Nhật Bản</p>', 650000, 4, 79),
(6, 1, 'LA MER The Treatment Lotion Hydrating Mask - Mặt nạ tái tạo da', 'la-mer-the-treatment-lotion-hydrating-mask-cen.png', 'la-mer-the-treatment-lotion-hydrating-mask-cen', 20000, 6, 71),
(7, 1, 'LA MER The Lip Volumizer - Son dưỡng làm dày môi', 'lamerthelipvolumizer1.png', 'la-mer-the-treatment-lotion-hydrating-mask-cen', 20000, 6, 82),
(8, 1, 'LA MER The Lip Balm - Sáp dưỡng môi cao cấp', 'lamerthelipbalmcen.png', 'la-mer-the-treatment-lotion-hydrating-mask-cen', 20000, 6, 24),
(9, 1, 'LA MER The Treatment Lotion - Nước hoa hồng tái tạo da', 'center-new-version.png', 'la-mer-the-treatment-lotion-hydrating-mask-cen', 20000, 6, 25),
(10, 1, 'LA MER The Eye Concentrate - Kem dưỡng mắt tập trung', 'la-mer-eye-concentrate.jpg', 'la-mer-eye-concentrate', 3000000, 6, 23),
(21, 1, 'HUXLEY Oil & Essence Sample Set - Bộ tinh chất dùng thử', 'a.jpg', '<p>-&nbsp;HUXLEY Oil Essence; Essence-Like, Oil-Like 5ml - Tinh chất chống l&atilde;o ho&aacute;, t&aacute;i tạo v&agrave; phục hồi l&agrave;n da với sự kết hợp&nbsp;ho&agrave;n hảo giữa dầu dưỡng v&agrave; serum.</p><p>-&nbsp;HUXLEY Essence; Brightly Ever After 5ml - Tinh chất dưỡng s&aacute;ng,&nbsp;phục hồi vẻ rạng rỡ cho l&agrave;n da, tăng cường sức mạnh v&agrave; bảo vệ da&nbsp;khỏi c&aacute;c t&aacute;c nh&acirc;n b&ecirc;n ngo&agrave;i h&agrave;ng ng&agrave;y.</p><p>-&nbsp;HUXLEY Essence; Grab Water 5ml - Tinh chất dưỡng ẩm v&agrave;&nbsp;cấp nước s&acirc;u cho da, l&agrave;m dịu v&agrave; l&agrave;m m&aacute;t da m&agrave; kh&ocirc;ng g&acirc;y nhờn d&iacute;nh hay k&iacute;ch ứng.&nbsp;Mang lại l&agrave;n da ẩm mượt, căng tr&agrave;n sức sống.&nbsp;</p><p>-&nbsp;HUXLEY Oil; Light And More 5ml - Dầu dưỡng ẩm chống l&atilde;o ho&aacute;,&nbsp;phục hồi v&agrave;&nbsp;bảo vệ l&agrave;n da khỏi căng thẳng h&agrave;ng ng&agrave;y.</p><p>Ph&ugrave; hợp với mọi loại da.</p><p>Sản xuất tại H&agrave;n Quốc</p>', 960000, 13, 3),
(22, 1, 'HUXLEY Brightening Trio Set - Bộ dưỡng sáng, căng bóng', 'h.jpg', '<p>-&nbsp;HUXLEY Toner; Extract It - nước hoa hồng gi&agrave;u chất chống oxy ho&aacute;&nbsp;với hơn 90% chiếc xuất từ xương rồng &eacute;p tươi sau khi thu hoạch gi&uacute;p&nbsp;c&acirc;n bằng độ pH của da v&agrave; l&agrave;m ẩm da mang&nbsp;lại một&nbsp;l&agrave;n da&nbsp;tươi m&aacute;t, trong trẻo v&agrave; khoẻ mạnh.</p><p>-&nbsp;HUXLEY Essence; Brightly Ever After - tinh chất dưỡng s&aacute;ng, phục hồi vẻ rạng rỡ cho l&agrave;n da, tăng cường sức mạnh v&agrave; bảo vệ da&nbsp;khỏi c&aacute;c t&aacute;c nh&acirc;n b&ecirc;n ngo&agrave;i h&agrave;ng ng&agrave;y.</p><p>-&nbsp;HUXLEY Cream; Glow Awakening - kem dưỡng ẩm, dưỡng s&aacute;ng v&agrave; căng b&oacute;ng&nbsp;bảo vệ da khỏi c&aacute;c t&aacute;c động c&oacute; hại kh&aacute;c nhau của m&ocirc;i trường, đ&aacute;nh thức l&agrave;n da hồi sinh rạng rỡ v&agrave; mọng nước.</p><p>Ph&ugrave; hợp với mọi loại da.</p><p>Sản xuất tại H&agrave;n Quốc</p>', 550000, 13, 4),
(23, 1, 'HUXLEY Cleansing Oil; Deep Clean, Deep Moist - Dầu tẩy trang', 'd.jpg', '<p>Dầu tẩy trang Cleansing Oil; Deep Clean, Deep Moist l&agrave; sản phẩm l&agrave;m sạch đa năng v&agrave; l&agrave;nh t&iacute;nh mới nhất đến từ Huxley c&oacute; khả năng l&agrave;m sạch s&acirc;u to&agrave;n diện đồng thời vẫn dưỡng ẩm cho da</p><p>- C&ocirc;ng thức gi&agrave;u chiết xuất từ dầu hạt l&ecirc; gai Sahara chứa đầy c&aacute;c chất chống oxy ho&aacute; c&oacute; lợi, tạo th&agrave;nh một h&agrave;ng r&agrave;o dưỡng ẩm cho da, tr&aacute;nh t&igrave;nh trạng da kh&ocirc; sau khi l&agrave;m sạch s&acirc;u.</p><p>- Dầu hạt điều gi&uacute;p l&agrave;m sạch v&agrave; giảm thiếu k&iacute;ch ứng da.</p><p>- Tinh dầu hoa c&uacute;c bảo vệ v&agrave; l&agrave;m dịu da.</p><p>- Dầu c&acirc;y hắc mai biển dưỡng ẩm v&agrave; cải thiện tone da.</p><p>- Nhẹ nh&agrave;ng tẩy đi c&aacute;c lớp chống nắng, trang điểm v&agrave; bụi bẩn đồng thời mang lại một l&agrave;n da sạch s&acirc;u nhưng vẫn mềm mại, tho&aacute;ng m&aacute;t.</p><p>- Sử dụng được cho cả v&ugrave;ng mắt v&agrave; m&ocirc;i.</p><p>- Kết cấu dầu lỏng, dễ d&agrave;ng massage m&agrave; kh&ocirc;ng g&acirc;y b&iacute; tắc lỗ ch&acirc;n l&ocirc;ng, giảm thiểu nguy cơ k&iacute;ch ứng da.</p><p>Ph&ugrave; hợp với mọi loại da kể cả da nhạy cảm.</p><p>Sản xuất tại H&agrave;n Quốc</p>', 700000, 13, 9),
(24, 1, 'HUXLEY Cleansing Gel; Be Clean, Be Moist - Gel rửa mặt', 'e.jpg', '<p>Gel rửa mặt&nbsp;l&agrave;m sạch nhẹ nh&agrave;ng, c&acirc;n bằng độ PH v&agrave; nu&ocirc;i dưỡng l&agrave;n da</p><p>- L&agrave; sự kết hợp giữa sữa rửa mặt v&agrave; tẩy trang với kết cấu dạng lỏng trong suốt, nhẹ nh&agrave;ng, tinh tế l&agrave;m sạch c&aacute;c bụi bẩn, cặn trang điểm b&aacute;m l&acirc;u tr&ecirc;n&nbsp;da, dầu nhờn tận trong lỗ ch&acirc;n l&ocirc;ng, m&agrave; kh&ocirc;ng l&agrave;m kh&ocirc; da, kh&ocirc;ng g&acirc;y căng r&iacute;t hoặc k&iacute;ch ứng.</p><p>- Chứa tinh chất Aquacacteen qu&yacute; gi&aacute; từ hạt c&acirc;y xương rồng Organic &eacute;p lạnh, gi&uacute;p l&agrave;m dịu l&agrave;n da bị dị ứng mẩn đỏ, giảm vi&ecirc;m sưng do mụn v&agrave; tổn thương.</p><p>- Cung cấp độ ẩm tối ưu cho da khi l&agrave;m sạch với nước nhờ đặc t&iacute;nh dưỡng ẩm tuyệt vời c&oacute; chứa h&agrave;m lượng cao c&aacute;c hợp chất giữ nước để da lu&ocirc;n ẩm mượt đ&agrave;n hồi.</p><p>- C&ocirc;ng thức tối giản, kh&ocirc;ng Sulfate,kh&ocirc;ng chất bảo quản, kh&ocirc;ng hương liệu, kh&ocirc;ng chứa Paraben ph&ugrave; hợp với mọi loại da kể cả những l&agrave;n da si&ecirc;u nhạy cảm v&agrave; hay bị k&iacute;ch ứng.</p><p>- D&agrave;nh cho mọi loại da. Đặc biệt ph&ugrave; hợp cả cho da kh&ocirc;ng dung nạp, đang thương tổn, k&iacute;ch ứng v&agrave; dị ứng, l&agrave;nh t&iacute;nh cho cả mẹ bầu v&agrave; mẹ sau sinh.</p><p>Sản xuất tại H&agrave;n Quốc</p>', 550000, 13, 2),
(25, 1, 'HUXLEY Sleep Mask; Good Night - Mặt nạ ngủ', 'g.jpg', '<p>Mặt nạ ph&aacute;t huy t&aacute;c dụng khi ngủ&nbsp;gi&uacute;p hồi sinh l&agrave;n da trong đ&ecirc;m,&nbsp;l&agrave;m dịu l&agrave;n da bị vi&ecirc;m v&agrave; phục hồi l&agrave;n da xỉn m&agrave;u, thiếu chất dinh dưỡng, để lộ l&agrave;n da trẻ trung, dẻo dai v&agrave; rạng rỡ hơn.</p><p>- Chứa chiết xuất từ c&acirc;y xương rồng ở Sahara gi&agrave;u c&aacute;c chất chống oxy ho&aacute; c&oacute; lợi cho da&nbsp;như vitamin E v&agrave; Axit Linoleic c&oacute; t&aacute;c dụng dưỡng ẩm chuy&ecirc;n s&acirc;u v&agrave; phục hồi lại l&agrave;n da kh&ocirc; r&aacute;p, thiếu sức sống.</p><p>- Axit Hyaluronic cung cấp nước v&agrave; giữ nước cho da lu&ocirc;n mềm mượt v&agrave; căng mịn.</p><p>- Tinh chất rau m&aacute; l&agrave;m dịu, giảm vi&ecirc;m v&agrave; k&iacute;ch th&iacute;ch t&aacute;i tạo c&aacute;c tế b&agrave;o mới cho l&agrave;n da khoẻ mạnh, trẻ trung v&agrave; rạng rỡ hơn.&nbsp;</p><p>Ph&ugrave; hợp với mọi loại da, đặc biệt l&agrave; những loại da kh&ocirc; hoặc mất nước, da sần s&ugrave;i, mệt mỏi.</p><p>Kh&ocirc;ng c&oacute; paraben, thuốc nhuộm tổng hợp v&agrave;&nbsp;dầu kho&aacute;ng.</p><p>Sản xuất tại H&agrave;n Quốc</p>', 960000, 13, 2),
(26, 1, 'HUXLEY Cleansing Foam; Deep Clean, Deep Moist - Sữa rửa mặt', 'h.jpg', '<p>Với t&ecirc;n gọi Deep&nbsp;Clean, Deep&nbsp;Moist&nbsp;- nghĩa l&agrave;</p>', 960000, 13, 1),
(27, 1, 'VALMONT V-Firm Cream - Kem dưỡng làm đầy & săn chắc da', 'kem-duong-da-valmont-votre-visage-50ml-620f10bd5efe5-18022022102133.jpg', '<p>Kem dưỡng&nbsp;V-Firm Cream&nbsp;được thiết kế&nbsp;với squalane, một hỗn hợp c&aacute;c peptide, RNA liposomal của thương hiệu Thụy Sĩ - gi&uacute;p tăng cường vi tuần ho&agrave;n để gi&uacute;p lấy lại vẻ ngo&agrave;i tr&ocirc;ng khỏe mạnh - v&agrave; Triple DNA, một dạng DNA được ph&aacute;t triển độc quyền, hấp thụ nhanh gi&uacute;p&nbsp;thẩm thấu s&acirc;u v&agrave; phục hồi da.</p>\r\n<p>- Cải thiện độ săn chắc &amp; đ&agrave;n hồi của da</p>\r\n<p>- Giữ cho lớp hạ b&igrave; đầy đặn &amp; căng mọng</p>\r\n<p>- Chống l&atilde;o h&oacute;a, k&iacute;ch th&iacute;ch trẻ h&oacute;a tế b&agrave;o</p>\r\n<p>- Phục hồi c&aacute;c tế b&agrave;o bị tổn thương</p>\r\n<p>Ph&ugrave; hợp với mọi loại da</p>\r\n<p>Sản xuất tại Thụy Sĩ</p>', 700000, 18, NULL),
(28, 1, 'VALMONT Priming with A Hydrating Fluid - Xịt khoáng cấp ẩm căng bóng da', 'nuoc-can-bang-ho-tro-tre-hoa-da-valmont-vital-falls-150ml-611641b96b504-13082021165609.jpg', '<p>C&aacute;c hạt vi lượng lấp đầy da với nước v&agrave; chiết xuất thực vật, l&agrave;m mềm l&agrave;n da mất nước, để lộ l&agrave;n da tươi s&aacute;ng rạng rỡ hơn.</p>\r\n<p>- L&agrave;m dịu ngay tức th&igrave; cảm gi&aacute;c kh&ocirc; căng</p>\r\n<p>- C&acirc;n bằng lại lớp m&agrave;ng dưỡng ẩm tự nhi&ecirc;n</p>\r\n<p>- Chuẩn bị tốt nhất cho l&agrave;n da để hấp thụ những bước dưỡng sau</p>\r\n<p>- Giữ lớp trang điểm tươi tắn cả ng&agrave;y</p>\r\n<p>- Tăng độ đ&agrave;n hồi cho da</p>\r\n<p>D&agrave;nh cho mọi loại da kể cả da nhạy cảm, đặc biệt l&agrave;</p>\r\n<p>- Da c&oacute; nếp nhăn do thiếu nước</p>\r\n<p>- Da xỉn m&agrave;u v&agrave; thiếu sức sống</p>\r\n<p>- Da thường xuy&ecirc;n bị căng v&agrave; kh&ocirc; r&aacute;t</p>\r\n<p>Th&agrave;nh phần ch&iacute;nh</p>\r\n<p>- Hắc mai biển: loại bỏ tế b&agrave;o chết tr&ecirc;n bề mặt da v&agrave; tối ưu h&oacute;a hiệu quả của c&aacute;c bước dưỡng sau.</p>\r\n<p>- C&acirc;y phỉ: l&agrave;m dịu v&agrave; bảo vệ c&aacute;c mao mạch da.</p>\r\n<p>- Nha đam: hydrat h&oacute;a v&agrave; l&agrave;m mềm da.</p>\r\n<p>Tia phun sương v&ocirc; c&ugrave;ng mịn, nhẹ nh&agrave;ng v&agrave; c&oacute; hương thơm tinh tế.</p>\r\n<p>Sản xuất tại Thuỵ Sĩ.</p>', 350000, 18, 132),
(29, 1, 'VALMONT Bubble Falls - Sữa rửa mặt tạo bọt cân bằng da', 'serum-valmont-primary-serum-30ml-620ca85ea836a-16022022143142.jpg', '<p>Sữa rửa mặt Bubble Falls&nbsp;được l&agrave;m từ&nbsp;nguồn nước suối tinh khiết từ s&ocirc;ng băng&nbsp;tại&nbsp;Thụy Sĩ gi&uacute;p&nbsp;loại bỏ bụi bẩn&nbsp;v&agrave; tạp chất tr&ecirc;n da cho một&nbsp;l&agrave;n da sạch v&agrave;&nbsp;thoải m&aacute;i hơn.&nbsp;C&ocirc;ng thức kh&ocirc;ng c&oacute; Sunfat với&nbsp;kết cấu nhẹ v&agrave; mịn l&agrave;m sạch lớp biểu b&igrave; m&agrave; kh&ocirc;ng ảnh hưởng tới&nbsp;lớp m&agrave;ng bảo vệ tự nhi&ecirc;n của&nbsp;da.</p>\r\n<p>- Loại bỏ những lớp trang điểm v&agrave; chất bẩn ngay lập tức, l&agrave;m sạch da m&agrave; kh&ocirc;ng g&acirc;y kh&ocirc; r&aacute;t.</p>\r\n<p>- C&acirc;n bằng hệ&nbsp;sinh th&aacute;i da, th&uacute;c đẩy qu&aacute; tr&igrave;nh trao đổi chất qua da, tăng cường sự trao đổi giữa c&aacute;c tế b&agrave;o v&agrave; k&iacute;ch th&iacute;ch h&agrave;ng r&agrave;o bảo vệ tự nhi&ecirc;n của l&agrave;n da.</p>\r\n<p>- Kiểm so&aacute;t b&atilde; nhờn dư thừa cho một kết cấu tinh tế, rạng rỡ.</p>\r\n<p>Ph&ugrave; hợp cho mọi loại da đặc biệt hiệu quả tr&ecirc;n da hỗn hợp.</p>\r\n<p>Sản xuất tại Thụy Sĩ</p>', 550000, 18, 145),
(30, 1, 'VALMONT Aqua Falls - Nước tẩy trang', 'tinh-chat-duong-da-valmont-moisturizing-booster-20ml-61171df194030-14082021083545.jpg', '<p>Valmont Aqua Falls với c&ocirc;ng thức độc đ&aacute;o hấp thu c&aacute;c lớp trang điểm v&agrave; tạp chất chỉ trong v&agrave;i gi&acirc;y, gi&uacute;p l&agrave;n da tươi mới v&agrave; dễ chịu.&nbsp;</p>\r\n<p>- Glacial Spring Water - th&uacute;c đẩy trao đổi m&ocirc;, hồi sinh v&agrave; tăng cường hệ thống ph&ograve;ng thủ da.<br><br>- Prebiotic: nu&ocirc;i dưỡng microbiota chịu tr&aacute;ch nhiệm bảo vệ bề mặt da.<br><br>- Probiotic: l&agrave;m phong ph&uacute; hệ thực vật da.<br><br>- Loại bỏ lớp makeup tr&ecirc;n mọi loại da chỉ với 1 lần lau<br><br>- C&acirc;n bằng l&agrave;n da, loại bỏ dầu thừa c&ograve;n s&oacute;t lại<br><br>Ph&ugrave; hợp với mọi loại da kể cả da nhạy cảm.</p>\r\n<p>Sản xuất tại Thụy Sĩ</p>', 450000, 18, 39),
(32, 1, 'VALMONT Clarifying Surge - Kem dưỡng sáng da & mờ đốm nâu', 'kem-duong-da-valmont-clarifying-surge-lam-sach-va-sang-da-50ml-620ca818bc9dd-16022022143032.jpg', '<p>Valmont Clarifying Surge với kết cấu gi&agrave;u dưỡng chất l&agrave; sản phẩm l&yacute; tưởng để th&uacute;c đẩy việc l&agrave;m sạch, đồng m&agrave;u, v&agrave; l&agrave;m rạng rỡ l&agrave;n da suốt cả ng&agrave;y, hay đ&ecirc;m. Clarifying Surge t&aacute;c động l&ecirc;n tất cả c&aacute;c yếu tố li&ecirc;n quan đến sự rối loạn sắc tố da, v&agrave; để lại l&agrave;n da mềm mại v&agrave; c&oacute; độ đ&agrave;n hồi tốt.</p>\r\n<p>- Cung cấp c&aacute;c hoạt chất l&agrave;m s&aacute;ng gi&uacute;p ức chế sản xuất melanin, k&iacute;ch th&iacute;ch l&agrave;n da rạng rỡ tự nhi&ecirc;n v&agrave; đều m&agrave;u.</p>\r\n<p>- Chiết xuất c&acirc;y tơ tằm gi&uacute;p loại bỏ độc tố l&agrave;m sạm da.</p>\r\n<p>- Vitamin B3 - ức chế melanosome l&agrave;m ngừng sự đổi m&agrave;u da v&agrave; l&agrave;m giảm sự xuất hiện của c&aacute;c vết n&aacute;m. Ngo&agrave;i ra một th&agrave;nh phần chống l&atilde;o ho&aacute; của Vitamin B3 k&iacute;ch th&iacute;ch c&aacute;c tế b&agrave;o v&agrave; chống vi&ecirc;m.</p>\r\n<p>- Kẽm DNA - l&agrave;m dịu v&agrave; l&agrave;m s&aacute;ng da.</p>\r\n<p>Ph&ugrave; hợp cho da bị sạm hoặc xỉn m&agrave;u.</p>\r\n<p>Sản xuất tại Thụy Sĩ</p>', 350000, 18, 25),
(33, 1, 'VALMONT V-Line Lifting Eye Cream - Kem dưỡng chống nhăn & nâng cơ mắt', 'kem-duong-nang-co-mat-valmont-cosmetics-v-shape-filling-cream-cua-my-50ml.jpg', '<p>Kem dưỡng chống nhăn v&agrave; n&acirc;ng cơ mắt V-Line Lifting Eye Cream với phức hợp AWF5 sẽ hoạt động to&agrave;n diện tr&ecirc;n 5 yếu tố ch&iacute;nh để gi&uacute;p l&agrave;n da được trẻ trung:</p>\r\n<p>1. Bảo vệ da khỏi c&aacute;c gốc tự do g&acirc;y l&atilde;o ho&aacute;</p>\r\n<p>2. Thắt chặt c&aacute;c m&ocirc; để vẻ ngo&agrave;i săn chắc</p>\r\n<p>3. L&agrave;m đầy đặn l&agrave;n da cho &aacute;nh nh&igrave;n tươi trẻ hơn</p>\r\n<p>4. T&aacute;i tạo c&aacute;c m&ocirc;</p>\r\n<p>5. Giảm nếp nhăn l&acirc;u d&agrave;i</p>\r\n<p>- Hợp chất chống bọng mắt l&agrave; một peptide bao gồm 4 axit amin c&oacute; đặc t&iacute;nh chống ph&ugrave; nề</p>\r\n<p>- T&aacute;i cấu tr&uacute;c lớp hạ b&igrave;</p>\r\n<p>- M&iacute; mắt được n&acirc;ng l&ecirc;n r&otilde; rệt</p>\r\n<p>Ph&ugrave; hợp cho mọi loại da, đặc biệt d&agrave;nh cho đ&ocirc;i mắt bị nhăn.</p>\r\n<p>Sản xuất tại Thụy Sĩ</p>', 150000, 18, 49),
(34, 1, 'VALMONT Clarifying Infusion - Tinh chất làm sạch, dưỡng trắng & làm mờ đốm nâu', 'nuoc-can-bang-da-loai-bo-da-chet-valmont-illuminating-toner-150ml.jpg', '<p>Huyết thanh n&agrave;y&nbsp;hoạt động như 1 loại peel nhẹ nhưng v&ocirc; c&ugrave;ng l&agrave;nh t&iacute;nh, được b&agrave;o chế để ngăn chặn&nbsp;tất cả c&aacute;c yếu tố ảnh hưởng đến vẻ ngo&agrave;i rạng rỡ của l&agrave;n da, gi&uacute;p mang lại l&agrave;n da săn chắc ho&agrave;n hảo.</p><p>- Chứa phức hợp l&agrave;m sạch gi&uacute;p giảm sản sinh&nbsp;melanin, chống lại sự tăng sắc tố.</p><p>-&nbsp;L&agrave;m bong tr&oacute;c dần những vết sạm m&agrave;u để lộ l&agrave;n da s&aacute;ng, v&agrave; l&agrave;m đều m&agrave;u da.</p><p>- T&aacute;c động l&ecirc;n&nbsp;c&aacute;c đốm n&acirc;u nh&igrave;n thấy được&nbsp;v&agrave; những đốm c&ograve;n ẩn s&acirc;u b&ecirc;n trong.</p><p>- Axit glycolic điều trị đốm n&acirc;u v&agrave; tinh chỉnh kết cấu da.</p><p>- Da được dẻo dai v&agrave; mềm mại hơn, tăng độ đ&agrave;n hồi.</p><p>- Thấm thấu tức th&igrave; với kết cấu si&ecirc;u mịn.</p><p>Ph&ugrave;&nbsp;hợp cho mọi loại da c&oacute; đốm n&acirc;u, xỉn m&agrave;u hoặc thiếu độ s&aacute;ng.</p><p>Kh&ocirc;ng ph&ugrave; hợp cho da dễ k&iacute;ch ứng.</p><p>Sản xuất tại Thụy Sĩ.</p>', 960000, 18, 23),
(35, 1, 'Nước Hoa Nam Tính Lịch Lãm Cuốn Hút Dior Sauvage Lọ Chiết 10ml', 'c.png', '<p>Đ&acirc;y l&agrave; đối thủ đ&aacute;ng gờm của&nbsp;<strong>Chanel bleu,&nbsp;</strong><strong>Dior Sauvage</strong>&nbsp;hiện đ&atilde; l&agrave; m&ugrave;i hương nam được y&ecirc;u th&iacute;ch top đầu theo b&igrave;nh chọn của fan h&acirc;m mộ h&atilde;ng thời trang danh tiếng. Ứng cử vi&ecirc;n nh&agrave;&nbsp;<strong>Dior</strong>&nbsp;l&agrave;&nbsp;chai nước&nbsp;hoa kinh điển d&agrave;nh cho ph&aacute;i mạnh với độ phủ s&oacute;ng ấn tượng kể từ khi ra mắt năm 2015 cho tới nay, được c&ocirc;ng nhận l&agrave; m&ugrave;i hương nam t&iacute;nh, l&ocirc;i cuốn v&agrave; thu h&uacute;t phụ nữ rất mạnh</p>\r\n<p><strong>M&ocirc; tả m&ugrave;i hương</strong>: Cam chanh quyện ti&ecirc;u hồng, hổ ph&aacute;ch, ch&uacute;t gỗ tuyết t&ugrave;ng tr&ecirc;n c&aacute;nh đồng hoa oải hương rộng lớn ng&uacute;t ng&agrave;n</p>\r\n<p>&nbsp;</p>\r\n<p>Theo nghi&ecirc;n cứu của c&aacute;c nh&agrave; khoa học:, Trai đẹp m&agrave; hay đi du lịch ch&acirc;u &Acirc;u m&agrave; nh&agrave; gi&agrave;u gi&agrave;u thường hay x&agrave;i&nbsp;Sauvage. M&ugrave;i hương khắc hoa ch&acirc;n dung g&atilde; trai l&atilde;ng tử h&agrave;o hoa nước Ph&aacute;p nửa bụi bặm lại chỉn chu, nửa lạnh l&ugrave;ng lại đa t&igrave;nh. Điển trai, phi&ecirc;u bạt, sương gi&oacute;, đi tới đ&acirc;u cũng thu h&uacute;t, tới đ&acirc;u cũng thấy b&ecirc;n cạnh thấp tho&aacute;ng b&oacute;ng d&aacute;ng mỹ nh&acirc;n.</p>\r\n<p>Lịch l&atilde;m, h&agrave;o hoa, phủi bụi đi đến đ&acirc;u l&agrave; reo rắc &aacute;i t&igrave;nh đến đ&oacute;, khi th&igrave; ng&agrave;o ngạt ph&ocirc; trương, l&uacute;c lại dịu d&agrave;ng v&agrave; đưa đẩy khứu gi&aacute;c khiến cho ai cũng cảm thấy dễ chịu khi ở b&ecirc;n cạnh, l&agrave;m cho ai cũng muốn &ocirc;m v&agrave;o l&ograve;ng m&agrave; h&iacute;t h&agrave; m&atilde;i với combo cam chanh, oải hương, gỗ v&agrave; ambroxan cực kỳ nam t&iacute;nh, thu h&uacute;t</p>\r\n<p>&nbsp;</p>\r\n<p><strong>Lưu &yacute;:</strong></p>\r\n<p>- Thời gian lưu giữ hương thơm của nước hoa phụ thuộc v&agrave;o đặc t&iacute;nh l&agrave;n da của từng người, phụ thuộc thời tiết v&agrave; m&ocirc;i trường b&ecirc;n ngo&agrave;i</p>\r\n<p>- Bạn n&ecirc;n xịt nước hoa v&agrave;o sau g&aacute;y, trước ngực, cổ &aacute;o hoặc cổ tay. Nước hoa sẽ lưu hương được l&acirc;u hơn khi xịt v&agrave;o t&oacute;c hoặc quần &aacute;o.</p>\r\n<p>- Kh&ocirc;ng n&ecirc;n lắc nước hoa trước khi xịt hoặc ch&agrave; x&aacute;t nước hoa v&igrave; c&oacute; thể l&agrave;m thay đổi m&ugrave;i hương, n&ecirc;n để nước hoa kh&ocirc; tự nhi&ecirc;n tr&ecirc;n da.</p>\r\n<p>- Bảo quản: n&ecirc;n để nước hoa trong hộp, để nơi kh&ocirc; r&aacute;o, tho&aacute;ng m&aacute;t, tr&aacute;nh &aacute;nh nắng mặt trời trực tiếp.</p>', 5000000, 14, 115),
(36, 1, 'Son Dưỡng Dior Addict Lip Glow Màu 025 Seoul Scarlet New', 'f.jpg', '<h1>Son Dưỡng Dior Addict Lip Glow M&agrave;u 025 Seoul Scarlet ( new)</h1>\r\n<p>Son sỡng m&agrave;u l&agrave; đỏ &aacute;nh cam nhẹ gi&uacute;p đ&ocirc;i m&ocirc;i ph&aacute;i nữ trở n&ecirc;n xinh xắn v&agrave; ngọt ng&agrave;o hơn. l&agrave; d&ograve;ng dưỡng m&ocirc;i gi&uacute;p l&agrave;m bền v&agrave; tăng cường m&agrave;u sắc tự nhi&ecirc;n của đ&ocirc;i m&ocirc;i.</p>\r\n<p>&nbsp;</p>\r\n<p><strong><em>Thiết Kế Dior Addict Lip Glow 025 Seoul Scarlet ( new )</em></strong></p>\r\n<p>&nbsp;</p>\r\n<p>&nbsp;</p>\r\n<p><strong><em>M&agrave;u Son Dưỡng Dior Addict Lip Glow 025 Seoul Scarlet ( new )</em></strong></p>\r\n<p>&nbsp;</p>\r\n<p>&nbsp;</p>\r\n<p><strong>-&nbsp;</strong>Chất son dưỡng được kết cấu dạng mềm mịn, chứa c&aacute;c th&agrave;nh phần gi&agrave;u dưỡng chất gi&uacute;p l&agrave;n m&ocirc;i căng mọng, tr&agrave;n đầy sức sống, n&oacute;i kh&ocirc;ng với t&igrave;nh trạng th&acirc;m m&ocirc;i, kh&ocirc; m&ocirc;i v&agrave; nứt nẻ m&ocirc;i.</p>\r\n<ul>\r\n<li>Son dưỡng m&ocirc;i m&agrave;u tự nhi&ecirc;n, dưỡng ẩm v&agrave; chống kh&ocirc; nẻ cho l&agrave;n m&ocirc;i k&egrave;m chỉ số chống nắng SPF10.</li>\r\n<li>\r\n<p>Son sỡng m&agrave;u l&agrave; đỏ &aacute;nh cam nhẹ gi&uacute;p đ&ocirc;i m&ocirc;i ph&aacute;i nữ trở n&ecirc;n xinh xắn v&agrave; ngọt ng&agrave;o hơn. l&agrave; d&ograve;ng dưỡng m&ocirc;i gi&uacute;p l&agrave;m bền v&agrave; tăng cường m&agrave;u sắc tự nhi&ecirc;n của đ&ocirc;i m&ocirc;i.</p>\r\n<p>&nbsp;</p>\r\n<p><strong><em>Thiết Kế Dior Addict Lip Glow 025 Seoul Scarlet ( new )</em></strong></p>\r\n<p>&nbsp;</p>\r\n<p>&nbsp;</p>\r\n<p><strong><em>M&agrave;u Son Dưỡng Dior Addict Lip Glow 025 Seoul Scarlet ( new )</em></strong></p>\r\n<p>&nbsp;</p>\r\n<p>&nbsp;</p>\r\n<p><strong>-&nbsp;</strong>Chất son dưỡng được kết cấu dạng mềm mịn, chứa c&aacute;c th&agrave;nh phần gi&agrave;u dưỡng chất gi&uacute;p l&agrave;n m&ocirc;i căng mọng, tr&agrave;n đầy sức sống, n&oacute;i kh&ocirc;ng với t&igrave;nh trạng th&acirc;m m&ocirc;i, kh&ocirc; m&ocirc;i v&agrave; nứt nẻ m&ocirc;i.</p>\r\n<p>- Son dưỡng m&ocirc;i m&agrave;u tự nhi&ecirc;n, dưỡng ẩm v&agrave; chống kh&ocirc; nẻ cho l&agrave;n m&ocirc;i k&egrave;m chỉ số chống nắng SPF10.</p>\r\n<p>Son sỡng m&agrave;u l&agrave; đỏ &aacute;nh cam nhẹ gi&uacute;p đ&ocirc;i m&ocirc;i ph&aacute;i nữ trở n&ecirc;n xinh xắn v&agrave; ngọt ng&agrave;o hơn. l&agrave; d&ograve;ng dưỡng m&ocirc;i gi&uacute;p l&agrave;m bền v&agrave; tăng cường m&agrave;u sắc tự nhi&ecirc;n của đ&ocirc;i m&ocirc;i.</p>\r\n</li>\r\n</ul>', 1200000, 14, 101),
(37, 1, 'Mini 4gr Phấn Nước Cushion Dior Prestige SPF50/PA+++', 'd.jpg', '<p>Dầu tẩy trang Cleansing Oil; Deep Clean, Deep Moist l&agrave; sản phẩm l&agrave;m sạch đa năng v&agrave; l&agrave;nh t&iacute;nh mới nhất đến từ Huxley c&oacute; khả năng l&agrave;m sạch s&acirc;u to&agrave;n diện đồng thời vẫn dưỡng ẩm cho da</p><p>- C&ocirc;ng thức gi&agrave;u chiết xuất từ dầu hạt l&ecirc; gai Sahara chứa đầy c&aacute;c chất chống oxy ho&aacute; c&oacute; lợi, tạo th&agrave;nh một h&agrave;ng r&agrave;o dưỡng ẩm cho da, tr&aacute;nh t&igrave;nh trạng da kh&ocirc; sau khi l&agrave;m sạch s&acirc;u.</p><p>- Dầu hạt điều gi&uacute;p l&agrave;m sạch v&agrave; giảm thiếu k&iacute;ch ứng da.</p><p>- Tinh dầu hoa c&uacute;c bảo vệ v&agrave; l&agrave;m dịu da.</p><p>- Dầu c&acirc;y hắc mai biển dưỡng ẩm v&agrave; cải thiện tone da.</p><p>- Nhẹ nh&agrave;ng tẩy đi c&aacute;c lớp chống nắng, trang điểm v&agrave; bụi bẩn đồng thời mang lại một l&agrave;n da sạch s&acirc;u nhưng vẫn mềm mại, tho&aacute;ng m&aacute;t.</p><p>- Sử dụng được cho cả v&ugrave;ng mắt v&agrave; m&ocirc;i.</p><p>- Kết cấu dầu lỏng, dễ d&agrave;ng massage m&agrave; kh&ocirc;ng g&acirc;y b&iacute; tắc lỗ ch&acirc;n l&ocirc;ng, giảm thiểu nguy cơ k&iacute;ch ứng da.</p><p>Ph&ugrave; hợp với mọi loại da kể cả da nhạy cảm.</p><p>Sản xuất tại H&agrave;n Quốc</p>', 700000, 14, 3),
(38, 1, 'SK-II Facial Treatment Clear Lotion - Nước hoa hồng làm sạch', 'SK-II-Facial-Treatment-Clear-Lotion.jpg', '<p id=\"tw-target-text\" dir=\"ltr\" data-fulltext=\"\" data-placeholder=\"Translation\">Nước hoa hồng l&agrave; bước dưỡng&nbsp;ho&agrave;n th&agrave;nh nhiệm&nbsp;vụ&nbsp;l&agrave;m sạch cho da, gi&uacute;p loại bỏ c&aacute;c tạp chất cứng đầu để lộ vẻ rạng rỡ thực sự của l&agrave;n da v&agrave; chuẩn bị cho c&aacute;c bước dưỡng sau ph&aacute;t huy hiệu quả.</p>\r\n<p dir=\"ltr\" data-fulltext=\"\" data-placeholder=\"Translation\">- Sự kết hợp của AHA + Pitera gi&uacute;p l&agrave;m tr&oacute;c c&aacute;c tế b&agrave;o da chết, c&acirc;n bằng độ PH gi&uacute;p da sẵn s&agrave;ng thẩm thấu c&aacute;c bước dưỡng tiếp theo.<br>- Chứa Salicylic Acid, hoạt chất gi&uacute;p ngừa mụn, ngăn ngừa b&atilde; nhờn hiệu quả.<br>- Cải thiện l&agrave;n da xỉn v&agrave; kh&ocirc;ng đều m&agrave;u.<br>- C&ocirc;ng thức kh&ocirc;ng chứa cồn nhẹ nh&agrave;ng tẩy tế b&agrave;o chết trong khi dưỡng ẩm v&agrave; se kh&iacute;t lỗ ch&acirc;n l&ocirc;ng.<br>- Ph&ugrave; hợp mọi loại da.</p>\r\n<p><strong>*Tinh chất Pitera&trade; độc quyền của SK-II</strong>&nbsp;gi&agrave;u vitamin, kho&aacute;ng chất, axit hữu cơ, axit amin, hoạt động hỗ trợ lẫn nhau kh&ocirc;i phục lại độ tươi trẻ mịn m&agrave;ng cho l&agrave;n da.</p>\r\n<p>Sản xuất tại Nhật Bản</p>', 2150000, 15, 6),
(39, 1, 'SK-II LXP Ultimate Perfecting Eye Cream - Kem dưỡng mắt cao cấp', 'Kem-duong-mat-SK-II-LXP-Ultimate-Perfecting-Eye-Cream-800x800.jpg', '<p>Một loại kem mềm dễ d&agrave;ng hấp thụ v&agrave;o l&agrave;n da mỏng manh quanh mắt, l&agrave;m giảm sự xuất hiện của quầng th&acirc;m, đồng thời l&agrave;m mờ c&aacute;c r&atilde;nh v&agrave; nếp nhăn.</p>\r\n<p>- C&ocirc;ng thức với Pitera c&ocirc; đặc cao nhất ở dạng tinh khiết nhất, si&ecirc;u chống oxy ho&aacute; Hexapeptide chiết xuất từ vỏ vải thiều v&agrave; chiết xuất c&aacute;m gạo gi&uacute;p&nbsp;tăng cường nu&ocirc;i dưỡng v&agrave; l&agrave;m ẩm da, hứa hẹn đem lại kết quả trong một v&agrave;i ng&agrave;y.</p>\r\n<p>- Loại bỏ tế b&agrave;o da chết, th&uacute;c đẩy t&aacute;i tạo da, bảo vệ collagen của da v&agrave; phục hồi cơ chế sản sinh protein chỉ trong 3 ng&agrave;y.</p>\r\n<p>- Giảm v&agrave; l&agrave;m mờ quầng th&acirc;m, v&ugrave;ng xỉn m&agrave;u quanh mắt do t&aacute;c động của m&ocirc;i trường.</p>\r\n<p>- Cung cấp độ ẩm, cấp nước đầy đủ cho v&ugrave;ng da mắt lu&ocirc;n mịn m&agrave;ng, l&agrave;m mềm c&aacute;c r&atilde;nh v&agrave; nếp nhăn v&ugrave;ng mắt, tăng khả năng đ&agrave;n hồi, vết ch&acirc;n chim dần biến mất.</p>\r\n<p>- Mang đến cho bạn v&ugrave;ng da quanh mắt kh&ocirc;ng t&igrave; vết, săn chắc, đầy sức sống, đ&ocirc;i mắt trở n&ecirc;n trẻ trung, rạng ngời.</p>\r\n<p>Ph&ugrave; hợp với mọi loại da từ 30 tuổi trở l&ecirc;n.&nbsp;</p>\r\n<p>Sản xuất tại Nhật Bản</p>', 430000, 15, 4),
(40, 1, 'SK-II LXP Ultimate Perfecting Cream - Kem dưỡng da hoàn thiện', 'sk-ii-lxp-ultimate-perfecting-cream-1.jpg', '<p>C&ocirc;ng thức với Pitera&trade; c&ocirc; đặc cao nhất, ActiV t&aacute;i tạo da v&agrave; 9 th&agrave;nh phần dưỡng da kh&aacute;c gi&uacute;p tăng cường dưỡng ẩm cho da. Trong đ&oacute;:</p>\r\n<p>- Pitera c&ocirc; đặc - một th&agrave;nh phần sinh học tự nhi&ecirc;n chứa hơn 50 chất dinh dưỡng vi lượng như vitamin, kho&aacute;ng chất, axit amin v&agrave; axit hữu cơ để điều h&ograve;a c&aacute;c chức năng tự nhi&ecirc;n của da.</p>\r\n<p>- ActiV t&aacute;i tạo da - một phức hợp tinh tế của Pitera&trade; với Niacinamide v&agrave; ba loại peptide để cung cấp độ ẩm mạnh mẽ cho l&agrave;n da săn chắc v&agrave; s&aacute;ng rạng rỡ.</p>\r\n<p>-&nbsp;C&ograve;n được gọi l&agrave; một trong những phức hợp Vitamin B3, Niacinamide hoạt động tr&ecirc;n c&aacute;c chức năng cơ bản của da để cải thiện h&agrave;ng&nbsp;r&agrave;o bảo vệ&nbsp;tự nhi&ecirc;n v&agrave; tăng cường&nbsp;sự săn chắc cũng như l&agrave;m s&aacute;ng t&ocirc;ng m&agrave;u da.</p>\r\n<p>B&ecirc;n cạnh đ&oacute;, c&aacute;c nh&agrave; khoa học của SK-II đ&atilde; t&igrave;m ra Centella Asiatice được chiết xuất từ rau m&aacute; ở v&ugrave;ng nhiệt đới Trung Mỹ. Centella Asiatice c&ograve;n được gọi n&ocirc;m na l&agrave; &ldquo;Vitamin X trẻ h&oacute;a&rdquo; c&oacute; t&aacute;c dụng tiết ra chất l&agrave;m đầy, đều m&agrave;u da thậm ch&iacute; đến những vết sẹo li ti do mụn, th&acirc;m n&aacute;m hay do đốt lazer cũng dần được cải thiện.</p>\r\n<p>- Chiết xuất từ hoa hồng hoang d&atilde; được thu hoạch chỉ v&agrave;o th&aacute;ng năm ở v&ugrave;ng thảo nguy&ecirc;n nước Ph&aacute;p mang lại hương thơm thanh lịch v&agrave; dịu d&agrave;ng nhất tr&ecirc;n Thế Giới sẽ l&agrave;m cho người sử dụng cảm thấy thư gi&atilde;n t&acirc;m tr&iacute; v&agrave; cơ thể.</p>\r\n<p>- Được đặc chế từ 15 th&agrave;nh phần qu&yacute; với c&ocirc;ng thức phức hợp si&ecirc;u độc đ&aacute;o, tất cả phối hợp h&agrave;i h&ograve;a để mang lại một l&agrave;n da với kết cấu vững chắc, khỏe mạnh, căng b&oacute;ng, mịn m&agrave;ng v&agrave; trong suốt như pha l&ecirc;.</p>\r\n<p>- LXP c&oacute; thể mang đến sự biến đổi ở l&agrave;n da chỉ sau 3 ng&agrave;y sử dụng - mịn m&agrave;ng, săn chắc, căng b&oacute;ng, đầy đặn, rạng rỡ, trong suốt, mờ nếp nhăn.</p>\r\n<p>Ph&ugrave; hợp với mọi loại da từ 30 tuổi trở l&ecirc;n.</p>\r\n<p>Sản xuất tại Nhật Bản</p>', 7900000, 15, 9),
(41, 1, 'SK-II SkinPower Essence - Tinh chất chống lão hoá', 'sk-ii-skinpower-essence-1.jpg', '<p dir=\"ltr\" data-placeholder=\"Translation\">Huyết thanh chống l&atilde;o ho&aacute; SkinPower Essence được n&acirc;ng cấp với c&ocirc;ng nghệ sức mạnh v&ocirc; hạn đầu ti&ecirc;n v&agrave; mới nhất từ SKII - li&ecirc;n tục &ldquo;sạc&rdquo; lại vẻ đẹp cho l&agrave;n da.</p>\r\n<p id=\"tw-target-text\" dir=\"ltr\" data-placeholder=\"Translation\">C&ocirc;ng nghệ đột ph&aacute;&nbsp;InfinitPower - tăng cường l&agrave;n da&nbsp;để căng mọng từ b&ecirc;n trong th&ocirc;ng qua qu&aacute; tr&igrave;nh hydrat h&oacute;a ở lớp sừng. C&ugrave;ng với phức hợp th&agrave;nh phần mang t&iacute;nh c&aacute;ch mạng - Pitera -&nbsp;l&agrave;n da được ngậm nước s&acirc;u,&nbsp;chống lại những khoảnh khắc&nbsp;thiếu năng lượng do c&aacute;c t&aacute;c nh&acirc;n g&acirc;y căng thẳng h&agrave;ng ng&agrave;y g&acirc;y ra.</p>\r\n<p dir=\"ltr\" data-placeholder=\"Translation\">- Cải thiện v&agrave; ngăn ngừa sự l&atilde;o ho&aacute; da.</p>\r\n<p dir=\"ltr\" data-placeholder=\"Translation\">- Thu nhỏ lỗ ch&acirc;n l&ocirc;ng r&otilde; rệt, l&agrave;m mịn c&aacute;c vết sần s&ugrave;i, sửa chữa c&aacute;c khuyết điểm.</p>\r\n<p dir=\"ltr\" data-placeholder=\"Translation\">- Dưỡng ẩm s&acirc;u, li&ecirc;n tục tăng cường hydrat ho&aacute; v&agrave; bổ sung năng lượng cho da.</p>\r\n<p dir=\"ltr\" data-placeholder=\"Translation\">- Sửa chữa h&agrave;ng r&agrave;o bảo vệ da.</p>\r\n<p dir=\"ltr\" data-placeholder=\"Translation\">-<strong>&nbsp;</strong>Tăng cường sức sống cho l&agrave;n da của bạn. Da cảm thấy đ&agrave;n hồi v&agrave; mềm mại hơn.</p>\r\n<p id=\"tw-target-text\" dir=\"ltr\" data-placeholder=\"Translation\">-&nbsp;L&agrave;n da tươi s&aacute;ng với vẻ căng mọng v&agrave; đầy đủ độ ẩm. Giảm sự xuất hiện của sự xỉn m&agrave;u.</p>\r\n<p dir=\"ltr\" data-placeholder=\"Translation\">- Da tr&ocirc;ng mịn m&agrave;ng v&agrave; rạng rỡ hơn. C&aacute;c lỗ ch&acirc;n l&ocirc;ng v&agrave; c&aacute;c đường nhăn nhỏ &iacute;t nh&igrave;n thấy hơn.</p>\r\n<p dir=\"ltr\" data-placeholder=\"Translation\">Kết cấu trong suốt, c&ocirc; đặc nhưng nhẹ, nhanh ch&oacute;ng thẩm thấu v&agrave;o da v&agrave; cung cấp c&aacute;c chất dinh dưỡng nu&ocirc;i da từ c&aacute;c lớp biểu b&igrave; b&ecirc;n trong ra tới lớp sừng b&ecirc;n ngo&agrave;i.</p>\r\n<p dir=\"ltr\" data-placeholder=\"Translation\">Từ đ&oacute; tinh chỉnh kết cấu da để lại một l&agrave;n da ẩm mịn, căng b&oacute;ng v&agrave; săn chắc.</p>\r\n<p dir=\"ltr\" data-fulltext=\"\" data-placeholder=\"Translation\">Ph&ugrave; hợp với&nbsp;mọi loại da từ sau 24 tuổi.</p>\r\n<p dir=\"ltr\" data-fulltext=\"\" data-placeholder=\"Translation\">Sản xuất tại Nhật Bản</p>', 43500000, 15, 4);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `roles`
--

CREATE TABLE `roles` (
  `id_role` int(11) NOT NULL,
  `name_role` varchar(255) COLLATE utf8_vietnamese_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_vietnamese_ci;

--
-- Đang đổ dữ liệu cho bảng `roles`
--

INSERT INTO `roles` (`id_role`, `name_role`) VALUES
(1, 'ADMIN'),
(2, 'Quản lý đơn hàng'),
(3, 'Quản lý sản phẩm, loại hàng'),
(4, 'Quản lý bài viết'),
(5, 'Quản lý khách hàng');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `staffs`
--

CREATE TABLE `staffs` (
  `id` int(11) NOT NULL,
  `user_name` varchar(100) NOT NULL,
  `full_name` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `address` varchar(50) DEFAULT NULL,
  `phone` varchar(50) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `card` varchar(50) DEFAULT NULL,
  `day_activated` varchar(50) DEFAULT NULL,
  `role` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `staffs`
--

INSERT INTO `staffs` (`id`, `user_name`, `full_name`, `password`, `address`, `phone`, `email`, `card`, `day_activated`, `role`) VALUES
(1, 'son', 'Nguyen Truong Son', '$2y$10$sQqW0K.2N/FPFkevKX7ChOD25Vjoqz/z69G84OGg/KofY0UYDZCSy', 'Tam kỳ', '0328846202', 'ntruongson16@gmail.com', '123123123', '2022-11-20', 1),
(19, 'chuong', 'Nguyen Truong Son', '123', 'Cầu Tam Kỳ', '0328846202', 'sonntpd05961@fpt.edu.vn', '132123123', '2022-12-12', 3),
(20, 'thu', 'Nguyen Truong Son', '123', 'Cầu Tam Kỳ', '0328846202', 'sonntpd05961@fpt.edu.vn', '23123132132', '2022-12-12', 2),
(23, 'son123', 'Nguyen Truong Son', '$2y$10$UqIoEY1rgJIYwZIMno72.O5A5m6ojpBuBXzAcMPIUdnoUXvXIIpoq', 'Cầu Tam Kỳ', '0328846202', 'sonntpd05961@fpt.edu.vn', '123123123123123', '2012-12-12', 1);

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `categorys`
--
ALTER TABLE `categorys`
  ADD PRIMARY KEY (`id`),
  ADD KEY `FK_CategoryStaff` (`staff_id`);

--
-- Chỉ mục cho bảng `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`),
  ADD KEY `FK_ProductComment` (`product_id`),
  ADD KEY `FK_CustomerComment` (`customer_id`);

--
-- Chỉ mục cho bảng `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`),
  ADD KEY `FK_staffnews` (`staff_id`);

--
-- Chỉ mục cho bảng `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`),
  ADD KEY `FK_CustomersOrder` (`customer_id`),
  ADD KEY `FK_StaffOrders` (`staff_id`);

--
-- Chỉ mục cho bảng `order_details`
--
ALTER TABLE `order_details`
  ADD PRIMARY KEY (`id`),
  ADD KEY `FK_ProductOrderDetails` (`product_id`),
  ADD KEY `Fk_OrderDetails` (`order_id`);

--
-- Chỉ mục cho bảng `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`),
  ADD KEY `FK_StaffProduct` (`staff_id`),
  ADD KEY `FK_CategoryProduct` (`category_id`);

--
-- Chỉ mục cho bảng `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id_role`);

--
-- Chỉ mục cho bảng `staffs`
--
ALTER TABLE `staffs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `FK_STAFFS_ROLES` (`role`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `categorys`
--
ALTER TABLE `categorys`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT cho bảng `comments`
--
ALTER TABLE `comments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT cho bảng `customers`
--
ALTER TABLE `customers`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT COMMENT 'id khách hàng', AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT cho bảng `news`
--
ALTER TABLE `news`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT cho bảng `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'id hóa đơn', AUTO_INCREMENT=76;

--
-- AUTO_INCREMENT cho bảng `order_details`
--
ALTER TABLE `order_details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'id hóa đơn chi tiet', AUTO_INCREMENT=73;

--
-- AUTO_INCREMENT cho bảng `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;

--
-- AUTO_INCREMENT cho bảng `roles`
--
ALTER TABLE `roles`
  MODIFY `id_role` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT cho bảng `staffs`
--
ALTER TABLE `staffs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `categorys`
--
ALTER TABLE `categorys`
  ADD CONSTRAINT `FK_CategoryStaff` FOREIGN KEY (`staff_id`) REFERENCES `staffs` (`id`);

--
-- Các ràng buộc cho bảng `comments`
--
ALTER TABLE `comments`
  ADD CONSTRAINT `FK_CustomerComment` FOREIGN KEY (`customer_id`) REFERENCES `customers` (`id`),
  ADD CONSTRAINT `FK_ProductComment` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`);

--
-- Các ràng buộc cho bảng `news`
--
ALTER TABLE `news`
  ADD CONSTRAINT `FK_staffnews` FOREIGN KEY (`staff_id`) REFERENCES `staffs` (`id`);

--
-- Các ràng buộc cho bảng `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `FK_CustomersOrder` FOREIGN KEY (`customer_id`) REFERENCES `customers` (`id`),
  ADD CONSTRAINT `FK_StaffOrders` FOREIGN KEY (`staff_id`) REFERENCES `staffs` (`id`) ON UPDATE SET NULL;

--
-- Các ràng buộc cho bảng `order_details`
--
ALTER TABLE `order_details`
  ADD CONSTRAINT `FK_ProductOrderDetails` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`),
  ADD CONSTRAINT `Fk_OrderDetails` FOREIGN KEY (`order_id`) REFERENCES `orders` (`id`) ON DELETE CASCADE;

--
-- Các ràng buộc cho bảng `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `FK_CategoryProduct` FOREIGN KEY (`category_id`) REFERENCES `categorys` (`id`),
  ADD CONSTRAINT `FK_StaffProduct` FOREIGN KEY (`staff_id`) REFERENCES `staffs` (`id`);

--
-- Các ràng buộc cho bảng `staffs`
--
ALTER TABLE `staffs`
  ADD CONSTRAINT `FK_STAFFS_ROLES` FOREIGN KEY (`role`) REFERENCES `roles` (`id_role`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
