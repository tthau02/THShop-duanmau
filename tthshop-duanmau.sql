-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Aug 06, 2024 at 07:30 AM
-- Server version: 8.0.30
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tthshop-duanmau`
--

-- --------------------------------------------------------

--
-- Table structure for table `comment`
--

CREATE TABLE `comment` (
  `comment_id` int NOT NULL COMMENT 'Mã bình luận',
  `content` varchar(255) COLLATE utf8mb4_german2_ci NOT NULL COMMENT 'Nội dung',
  `product_id` int NOT NULL COMMENT 'mã hàng hóa',
  `customer_id` int NOT NULL COMMENT 'mà khách hàng',
  `comment_date` varchar(40) COLLATE utf8mb4_german2_ci NOT NULL COMMENT 'ngày bình luận'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_german2_ci;

--
-- Dumping data for table `comment`
--

INSERT INTO `comment` (`comment_id`, `content`, `product_id`, `customer_id`, `comment_date`) VALUES
(2267, 'Shop ơi cho e hỏi giá trên web có giống giá bán tại cửa hàng k ạ', 26, 3, '02:58:04pm 21/07/2024'),
(2268, 'mình là sinh viên muốn mua sản phẩm trả góp thì cần chuẩn bị giấy tờ gì ạ', 26, 3, '02:58:25pm 21/07/2024'),
(2269, 'Bên mình còn máy màu xanh lá ở địa chỉ cầu giấu không ạ.', 26, 3, '02:58:44pm 21/07/2024'),
(2270, 'Còn hàng không ạ', 26, 6, '2024-07-29 03:35:02'),
(2271, 'Máy có chơi game mượt không', 25, 6, '2024-07-29 03:36:10'),
(2272, 'Tôi muốn mua hàng ở mỹ đình', 3, 6, '2024-07-29 03:37:07'),
(2273, 'Chụp đêm có ok không shop?', 11, 6, '2024-07-29 03:37:51'),
(2274, 'hahahaah', 11, 6, '2024-07-29 07:15:10'),
(2275, 'Mỹ đình còn sẵn hàng khum ạ', 11, 8, '2024-07-29 14:16:49'),
(2276, 'Màu hơi sấu nhaaa', 3, 8, '2024-07-29 14:17:29'),
(2277, 'Đồng hồ này nữ đeo có nam tính khong shop ơi', 28, 8, '2024-07-29 14:18:31'),
(2278, 'đồng hồ đẹp quá à', 30, 3, '2024-08-01 06:33:39'),
(2279, 'còn sẵn hàng không shopp?\r\n', 34, 3, '2024-08-02 06:01:21'),
(2280, 'có iphone look không ạ', 40, 3, '2024-08-02 06:24:06'),
(2281, 'về hà nam thì bao lâu có hàng hả shop', 40, 3, '2024-08-02 06:24:45'),
(2282, 'Giá đã có tặng kèm phụ kiện chưaaa', 34, 2, '2024-08-02 15:09:21');

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `customer_id` int NOT NULL COMMENT 'Mã khách hàng',
  `password` varchar(255) COLLATE utf8mb4_german2_ci NOT NULL,
  `username` varchar(255) COLLATE utf8mb4_german2_ci NOT NULL,
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_german2_ci DEFAULT NULL,
  `phone` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_german2_ci NOT NULL,
  `image_user` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_german2_ci DEFAULT NULL,
  `role` tinyint NOT NULL DEFAULT '0',
  `address` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_german2_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_german2_ci;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`customer_id`, `password`, `username`, `email`, `phone`, `image_user`, `role`, `address`) VALUES
(2, 'tranhaaa', 'Trần Trung', 'hau@gmail.com', '0392257128', 'Screenshot 2024-07-30 130948.png', 0, '34 ngõ 123 phường xuần phương, nam từ liên, Hà Nội'),
(3, 'tranhau', 'tranhau02', 'haudj20122002@gmail.com', '0392257128', 'mono.jpg', 1, 'Vĩnh Hưng, Hoàng Mai, Hà Nội'),
(6, 'truong02', 'quangtruong12', 'truongngo@gmail.com', '0998844732', 'img2.jpg', 0, ''),
(8, 'dan2003', 'Thanhdan', 'thanhdan@gamil.com', '0987336412', 'IMG_20240427_210051_101.jpg', 1, 'đan phượng, hà nội');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `product_id` int NOT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_german2_ci NOT NULL COMMENT 'Tên sản phẩm',
  `price` float DEFAULT NULL COMMENT 'Giá bán',
  `discount` float DEFAULT '0' COMMENT 'giảm giá',
  `image_pro` varchar(255) COLLATE utf8mb4_german2_ci NOT NULL,
  `date_add` date NOT NULL COMMENT 'Ngày nhập hàng',
  `description` text CHARACTER SET utf8mb4 COLLATE utf8mb4_german2_ci NOT NULL COMMENT 'mô tả sản phẩm',
  `special` tinyint(1) NOT NULL COMMENT 'trạng thái đặc biệt',
  `views` int DEFAULT '0' COMMENT 'Số lượt xem',
  `type_product` int NOT NULL COMMENT 'Mã Loại'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_german2_ci;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`product_id`, `name`, `price`, `discount`, `image_pro`, `date_add`, `description`, `special`, `views`, `type_product`) VALUES
(3, 'iPhone 15 Pro Max 256GB', 34990000, 29590000, 'iphone-15-pro-max_3.webp', '2024-07-05', 'iPhone 15 Pro Max là chiếc iPhone cao cấp nhất với màn hình lớn nhất, thời lượng pin tốt nhất, cấu hình mạnh nhất và thiết kế khung Titan chuẩn hàng không vũ trụ siêu bền, siêu nhẹ. iPhone 15 Pro Max sở hữu những điểm vượt trội nhất nhà Apple.', 1, 41, 1),
(4, 'iPhone 14 Pro Max 128GB', 29990000, 25590000, 'anh1.png', '2024-07-11', 'Màn hình Dynamic Island - Sự biến mất của màn hình tai thỏ thay thế bằng thiết kế viên thuốc, OLED 6,7 inch, hỗ trợ always-on display\r\nCấu hình iPhone 14 Pro Max mạnh mẽ, hiệu năng cực khủng từ chipset A16 Bionic\r\nLàm chủ công nghệ nhiếp ảnh - Camera sau 48MP, cảm biến TOF sống động', 1, 28, 1),
(10, 'OPPO Reno8 T 5G 8GB 128GB ', 8490000, 6090000, 'anh3.png', '2024-07-11', 'SP thu lại từ khách có nhu cầu bán lại, thu cũ, ngoại hình đẹp như máy mới. Kèm: Cáp, củ sạc ', 0, 22, 1),
(11, 'Samsung Galaxy S24 Ultra', 33990000, 27990000, 's24-ultra-vang.webp', '2024-07-11', 'Trải nghiệm đỉnh cao với hiệu năng mạnh mẽ từ vi xử lý tân tiến, kết hợp cùng RAM 12GB cho khả năng đa nhiệm mượt mà. Lưu trữ thoải mái mọi ứng dụng, hình ảnh và video với bộ nhớ trong 256GB.', 1, 64, 1),
(12, 'Laptop Acer Aspire Lite  i5 1235U', 14990000, 13990000, '00909218_acer_aspire_lite_al16_51p_55n7_2d7003f055.png', '2024-07-11', 'Acer Aspire Lite AL16-51P-55N7 là chiếc laptop văn phòng thế hệ mới được Acer trình làng đầu năm 2024. Sở hữu cấu hình với sự góp mặt của chipset Intel Core i5 1235U, 16GB RAM, ổ cứng SSD 512GB và màn hình 16 inch siêu sắc nét, đây sẽ là lựa chọn lý tưởng hàng đầu cho những người đang tìm kiếm chiếc laptop mạnh mẽ ở phân khúc tầm trung.', 0, 6, 3),
(13, 'Laptop HP 245 G10 (A20TFPT)', 14790000, 13290000, '00908901_hp_245_g10_a20tfpt_9ce2c339f9.png', '2024-07-11', 'HP 245 G10 (A20TFPT) sở hữu thiết kế nhỏ gọn, thanh thoát với lớp vỏ bằng nhựa, giúp giảm trọng lượng tổng thể, chỉ còn 1.36kg, thuận tiện cho việc di chuyển và mang theo đến mọi nơi. Sản phẩm sẽ đồng hành cùng bạn đi làm mỗi ngày hoặc đến quán cafe, lên thư viện hoặc thậm chí lên những chuyến bay đi công tác.', 0, 3, 3),
(14, 'Macbook Air M3 15 2024', 38990000, 37990000, '2024_3_18_638463800902048060_macbook-air-m3-15-2024-bac-1.jpg', '2024-07-11', 'Macbook Air M3 15 2024 8CPU 10GPU/8GB/512GB', 1, 0, 3),
(15, 'iPad Pro 11 inch M4 2024 ', 28990000, 28490000, '2024_5_10_638509364496951753_ipad-pro-11-inch-m4-2024-den.jpg', '2024-07-11', 'iPad Pro 11 inch M4 2024 gây ấn tượng với thiết kế mỏng 5,3 mm siêu gọn gàng. Sản phẩm được trang bị màn hình Ultra Retina XDR với độ tương phản cực cao, đồng thời đánh dấu bước nhảy vọt về hiệu năng xử lý, sức mạnh đồ họa và hiệu suất AI khi sở hữu chip M4 thế hệ mới.', 1, 1, 4),
(16, 'iPad Air 10.9 2022 M1 Wi-Fi 64GB', 16990000, 13990000, '2022_12_5_638058461664392892_ipad-air-5-wf-tim-1.jpg', '2024-07-11', 'Sức mạnh hiệu năng của iPad Air 5 đánh dấu bước tiến mạnh mẽ với sự góp mặt của chip xử lý M1 xuất sắc do chính Apple phát triển. Sản phẩm phát huy phong cách thiết kế đầy tính thời trang của iPad Air series và đem đến những trải nghiệm mới mẻ khi video call nhờ camera trước góc siêu rộng.', 0, 1, 4),
(17, 'Xiaomi Redmi Pad SE 6GB', 5490000, 4840000, 'xiaomi-redmi-pad-se_1_3.webp', '2024-07-11', 'Xiaomi Redmi Pad SE, sạc, Cáp USB Type-C, Hướng dẫn sử dụng nhanh, Thẻ bảo hành', 0, 0, 4),
(18, 'Samsung Galaxy Tab S9', 13990000, 12990000, 'samsung-galaxy-tab-s9-fe-plus-wifi_1_.webp', '2024-07-11', 'Samsung Galaxy Tab S9 FE Plus Wifi sở hữu màn hình lớn với kích thước 12.4 inches siêu ấn tượng. Trang bị Chipset Exynos 1380 mạnh mẽ, hỗ trợ xử lý tác vụ mượt mà, kết hợp với bút S-pen thế hệ mới. Bộ nhớ trong 128GB với dung lượng RAM 8GB cho bạn thỏa sức lưu trữ. ', 1, 7, 4),
(19, 'Tai nghe Bluetooth Apple AirPods', 6190000, 5690000, 'apple-airpods-pro-2-usb-c_1_.webp', '2024-07-21', 'Airpods Pro 2 Type-C với công nghệ khử tiếng ồn chủ động mang lại khả năng khử ồn lên gấp 2 lần mang lại trải nghiệm nghe - gọi và trải nghiệm âm nhạc ấn tượng. Cùng với đó, điện thoại còn được trang bị công nghệ âm thanh không gian giúp trải nghiệm âm nhạc thêm phần sống động. Airpods Pro 2 Type-C với cổng sạc Type C tiện lợi cùng viên pin mang lại thời gian trải nghiệm lên đến 6 giờ tiện lợi.', 1, 12, 16),
(20, 'Sạc apple iphone 20w type-c', 890000, 490000, 'adapter-20w-apple-5_1_1_2.webp', '2024-07-21', 'Sở hữu thiết kế thanh lịch với tone màu trắng nhẹ nhàng\r\nTích hợp 2 cổng Type-C phù hợp với nhiều thiết bị Apple\r\nCông suất 20W và công nghệ PD vừa nhanh, vừa an toàn\r\nCủ sạc Apple chính hãng có độ bền vượt trội, lâu dài', 0, 0, 16),
(21, 'Cáp chuyển Lightning sang 3.5mm', 300000, 290000, '1_13_67_1.webp', '2024-07-21', 'Cáp chuyển đổi Apple lightning sang 3.5 mm MMX62ZA/A là một phụ kiện được Apple thiết kết với những điểm nhấn cơ bản là nhỏ gọn và bền bỉ. Sợi cáp có kích thước nhỏ nhắn, độ dài được cân chỉnh phù hợp để khi kết nối không làm tăng chiều dài tai nghe quá nhiều, tránh rườm rà, khó chịu cho người sử dụng.', 0, 0, 16),
(22, 'Chuột Gaming Logitech G304', 949000, 749000, 'group_78_1_.webp', '2024-07-21', 'Chuột gaming không dây Logitech G304 Lightspeed là sản phẩm đang làm mưa làm gió trên thị trường với nhiều tính năng đặc biệt nổi bật. Với nhiều công phá mới trong thiết kế cùng mức giá thành tương đối rẻ sản phẩm chuột Logitech đã sẵn sàng để mọi người dùng trải nghiệm.', 0, 1, 16),
(23, 'Bàn phím cơ có dây DAREU EK87', 699000, 490000, 'ban-phim-co-co-day-dareu-ek87-v2-multi-led-den-1.webp', '2024-07-21', 'Các phiên bản trước đó DareU chỉ trang bị đèn LED một màu đỏ thì bàn phím cơ có dây DareU EK87 V2 Multi LED đen lại được nâng cấp vượt trội. Hãng đã dùng đèn LED Rainbow với 7 màu chiếu sáng đều trên từng vùng khác nhau cùng độ sáng cao hơn.', 0, 0, 15),
(24, 'PC CPS Gaming G05 i3 12100F', 18690000, 14390000, 'pc-cps-gaming-g5-spa_1.webp', '2024-07-21', 'PC CPS Gaming G05 i3 12100F / 8GB - 256GB / RTX 3060\r\n- PC CPS Gaming G05 đem đến hiệu năng vượt trội, xử lý được mọi tựa game 3D. Bên cạnh đó PC gaming còn sở hữu thiết kế rất tinh tế, tạo nên vẻ đẹp riêng cho người dùng. ', 1, 7, 15),
(25, 'Laptop Gaming Acer Nitro 5 ', 28300000, 20990000, 'svfer.webp', '2024-07-21', 'Laptop Gaming Acer Nitro 5 Tiger AN515 58 52SP', 1, 16, 3),
(26, 'Apple MacBook Air M2', 32990000, 23290000, 'macbook_air_m2_1_1.webp', '2024-07-21', 'Apple MacBook Air M2 2022 8GB 256GB I Chính hãng Apple Việt Nam\r\n- Máy mới 100%, đầy đủ phụ kiện từ nhà sản xuất. Sản phẩm có mã SA/A (được Apple Việt Nam phân phối chính thức).\r\n\r\n\r\n', 1, 30, 3),
(27, 'DJI Pocket 3', 14490000, 13990000, 'may-quay-chong-rung-dji-osmo-pocket-3-advanced-4k_1.webp', '2024-07-29', 'Camera DJI Pocket 3 bacsic ấn tượng với cảm biến CMOS 1 inch cho khả năng chụp ảnh chất lượng cao và quay phim 4K sắc nét.', 1, 3, 19),
(28, 'Apple Watch Series 7 41mm (GPS)', 13990000, 12990000, 'a1.jpg', '2024-07-29', 'Ra mắt cùng thời diểm ra mắt iPhone 2021, đồng hồ thông minh Apple Watch Series 7 có nhiều thay đổi về thiết kế so với các dòng Apple Watch trước đó. Cụ thể so với Series 6, thế hệ Series 7 này có sự thay đổi về kích thước', 0, 3, 20),
(29, 'Xiaomi Mi Watch Lite', 1990000, 1090000, 'd.webp', '2024-07-29', 'Đồng hồ Xiaomi Mi Watch Lite - sang trọng, độc đáo, tính năng vượt trội Không chỉ nổi tiếng với những mẫu smartphone cao cấp mà Xiaomi còn khẳng định được tên tuổi cũng như vị thế của mình bởi những mẫu đồng hồ thông minh, hiện đại.', 0, 0, 20),
(30, 'Samsung Galaxy Watch Active 2 40mm', 9490000, 4490000, 'a6.jpg', '2024-07-29', 'Samsung Galaxy Watch Active 2 40mm Vỏ Thép đang có mức giá vô cùng tốt cùng nhiều ưu đãi hấp dẫn. Galaxy Watch Active 2 40mm vỏ thép thích hợp với người dùng tay nhỏ với thiết kế chắc chắn tạo cảm giác bám tay tốt.', 0, 3, 20),
(31, 'Samsung Galaxy Watch 4 40mm', 7090000, 6090000, 'a5.jpg', '2024-07-29', 'Samsung Galaxy Watch 4 40mm – Tinh tế trong từng chi tiết Nối tiếp sự thành công của thế hệ tiền nhiệm, đồng hồ thông minh tiếp theo của nhà Samsung được mong chờ hơn bao giờ hết. ', 0, 1, 20),
(32, 'Samsung Galaxy Watch 3', 9990000, 6990000, 'a8.jpg', '2024-07-29', 'Samsung Galaxy Watch 3 - Đồng hồ thông minh chống nước tiện lợi Bạn có bao giờ nghĩ rằng, trong cuộc sống bạn sẽ phải trải qua các quá trình lớn lên và già đi nhưng không bao giờ được ghi lại các số liệu tổng thể về thể chất của bạn hay không? ', 0, 2, 20),
(33, 'Samsung Galaxy Watch 3', 5490000, 3490000, 'a4.jpg', '2024-07-30', 'Đồng hồ Samsung Galaxy Watch 3 41mm - Sang trọng và tinh tế Một trong những món phụ kiện được phái nữ ưa chuộng chính là đồng hồ Samsung Galaxy Watch 3 41mm', 0, 2, 20),
(34, 'Samsung Galaxy Z Fold6', 45990000, 43990000, 'samsung-galaxy-z-fold-6-xanh_5_.webp', '2024-07-29', 'Samsung Z Fold 6 là siêu phẩm điện thoại gập được ra mắt ngày 10/7, hiệu năng dẫn đầu phân khúc với chip 8 nhân Snapdragon 8 Gen 3 for Galaxy, 12GB RAM cùng bộ nhớ trong từ 256GB đến 1TB.', 1, 8, 1),
(35, 'Samsung Galaxy M55 (12GB 256GB)', 12690000, 11690000, 'dien-thoai-samsung-galaxy-m55.webp', '2024-07-31', 'Điện thoại Samsung Galaxy M55 12GB 256GB với màn hình 6.7 inch Super AMOLED Plus cung cấp khả năng hiển thị Full HD+ siêu thực cùng tần số quét lên đến 120Hz.', 0, 2, 1),
(36, 'Laptop ASUS VivoBook 15', 20990000, 17490000, 'text_ng_n_1__1_120.webp', '2024-08-02', 'Laptop ASUS VivoBook 15 OLED A1505VA-L1114W\r\nLaptop Asus Vivobook 15 OLED A1505VA-L1114W mang đến những trải nghiệm làm việc và giải trí tuyệt vời khi sở hữu thông số cấu hình vô cùng ấn tượng.', 0, 0, 3),
(37, 'Pin sạc dự phòng Aukey PB-N83S ', 4800000, 4400000, '4h41_2.webp', '2024-08-02', 'Pin sạc dự phòng Aukey PB-N83S 20W PD 10.000mAh\r\nSản phẩm pin sạc sự phòng Aukey 10000mAH PD 20W & QC 3.0 hỗ trợ công nghệ sạc Power Delivery 20W và Quick Charge 3. Với công nghệ sạc nhanh này, người dùng không chỉ có thể nạp điện cho thiết bị điện tử một các nhanh chóng và cũng rút ngắn thời gian bổ sung dung lượng pin.', 0, 0, 16),
(38, 'Củ sạc Aukey PD 30W PA-Y30s', 550000, 290000, 'frame_49.webp', '2024-08-02', 'Củ sạc Aukey PD 30W PA-Y30s là phụ kiện không thể thiếu người thường xuyên sử dụng để nạp điện cho smartphone. Thói quen sử dụng nhiều thiết bị điện tử cùng lúc có ở rất nhiều người', 0, 2, 16),
(39, 'vivo Y36 8GB 128GB', 5190000, 4490000, 'vivo-y36.webp', '2024-08-02', 'vivo Y36 sở hữu khả năng xử lý ấn tượng thông qua chipset Snapdragon 680, cùng chất lượng hiển thị sắc nét tới từ tấm nền LCD 6.64 inch. Nhờ sở hữu cụm camera cao cấp với cảm biến lên tới 50MP, Y36 vivo giúp nâng tầm trải nghiệm quay chụp, bắt kịp mọi khách khắc đáng nhớ. ', 0, 1, 1),
(40, 'iPhone 11 64GB | Chính hãng VN/A', 11990000, 8890000, 'iphone-11.webp', '2024-08-02', 'iPhone 11 sở hữu hiệu năng khá mạnh mẽ, ổn định trong thời gian dài nhờ được trang bị chipset A13 Bionic. Màn hình LCD 6.1 inch sắc nét cùng chất lượng hiển thị Full HD của máy cho trải nghiệm hình ảnh mượt mà', 0, 3, 1),
(41, 'Samsung Galaxy A55 5G 8GB', 9990000, 9690000, 'sm-a556_galaxy_a55_awesome_lilac_ui.webp', '2024-08-02', 'Samsung Galaxy A55 thiết kế sang trọng, hiện đại với màn hình rộng 6.6 inch, tấm nền Super AMOLED cùng độ phân giải Full HD+ cho hình ảnh hiển thị mượt mà, sắc nét. Sở hữu con chip Exynos 1480, cùng tần số quét 120 Hz', 0, 0, 1),
(42, 'iPad Gen 10 10.9 inch 2022', 12990000, 9790000, 'ipad-10-9-inch-2022.webp', '2024-08-01', 'Sản phẩm được đón chờ nhất năm nay chính là chiếc iPad 10.9 inch, thế hệ máy tính bảng iPad gen 10 mới sở hữu vô số điểm mạnh nổi bật. Bạn có thể chơi game, xem phim, sử dụng bút Apple Pencil ', 0, 0, 4),
(43, 'iPad 10.2 2021 WiFi 256GB', 12990000, 10990000, 'ipad-10-2-inch-2021_2.webp', '2024-08-02', 'iPad 10.2 inch 2021 256GB với màn hình Liquid Retina cùng công nghệ hiển thị True Tone mang lại khả năng hiển thị hình ảnh chất lượng vượt trội.', 0, 0, 4),
(45, 'PC Mini Asus VIVID NUC 13Th', 15490000, 13690000, 'group_473_2__1.webp', '2024-08-04', 'Máy tính PC mini Asus Vivid NUC 13th Arena Canyon sử dụng bộ xử lý Intel Core i5-1340P thế hệ thứ 13 với 12 lõi, 16 luồng và turbo tối đa đến 4.60GHz. Sản phẩm PC mini này hỗ trợ lên đến 64GB RAM DDR4-3200 và 2 khe cắm SSD M.2 cho khả năng lưu trữ linh hoạt. Máy trang bị các đầu ra đồ họa HDMI 2.1 TMDS và DP 1.4a cùng khả năng hỗ trợ kết nối 4 màn hình cùng lúc.', 0, 0, 15),
(46, 'PC CPS Gaming G07 i5 12400F', 21790000, 19390000, 'pc-cps-gaming-g7-spa_1.webp', '2024-08-04', 'PC CPS Gaming G07 được trang bị cho mình CPU Intel Core i5-12400F mạnh mẽ. Với bộ vi xử lý này, PC đã có thể giúp các tác vụ cũng như ứng dụng được hoạt động mượt mà hơn. Bạn có thể sử dụng đa tác vụ một cách nhẹ nhàng, nâng cao hiệu suất làm việc.', 0, 0, 15),
(47, 'PC CPS văn phòng S03 R5 5600G', 9590000, 8290000, 'pc-cps-van-phong-s3-amd-spa.webp', '2024-08-04', 'PC CPS Văn Phòng S3 - AMD mang đến lối thiết kế đơn giản, độ hoàn thiện cao giúp không gian đặt để được tối ưu, gọn gàng. Nó còn được bao phủ bởi tông màu đen sang trọng từ chất liệu bền bỉ và chống ăn mòn lâu dài theo thời gian.', 0, 0, 15),
(48, 'Màn hình LG UltraWide 29WQ600 29 inch', 6490000, 4990000, 'group_258_5.webp', '2024-08-04', 'LG UltraWide 29WQ600 29 inch được trang bị tấm nền IPS mang lại màu sắc với độ chính xác cao. Bên cạnh đó, chiếc màn hình 100hz này còn sở hữu độ bao phủ màu lên tới 99% sRGB giúp mang lại trải nghiệm thị giác với hình ảnh rõ nét, màu sắc chân thực.', 0, 0, 15);

-- --------------------------------------------------------

--
-- Table structure for table `type_product`
--

CREATE TABLE `type_product` (
  `type_id` int NOT NULL,
  `type_name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_german2_ci NOT NULL COMMENT 'Tên loại hàng'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_german2_ci;

--
-- Dumping data for table `type_product`
--

INSERT INTO `type_product` (`type_id`, `type_name`) VALUES
(1, 'Điện thoại'),
(3, 'Laptop'),
(4, 'Máy tính bảng'),
(15, 'PC - Linh kiện'),
(16, 'Phụ kiện'),
(17, 'Điện máy gia dụng'),
(18, 'Máy cũ giá rẻ'),
(19, 'Camera'),
(20, 'Đồng hồ thông minh');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `comment`
--
ALTER TABLE `comment`
  ADD PRIMARY KEY (`comment_id`),
  ADD KEY `product_id` (`product_id`),
  ADD KEY `customer_id` (`customer_id`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`customer_id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`product_id`),
  ADD KEY `type_product` (`type_product`);

--
-- Indexes for table `type_product`
--
ALTER TABLE `type_product`
  ADD PRIMARY KEY (`type_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `comment`
--
ALTER TABLE `comment`
  MODIFY `comment_id` int NOT NULL AUTO_INCREMENT COMMENT 'Mã bình luận', AUTO_INCREMENT=2283;

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `customer_id` int NOT NULL AUTO_INCREMENT COMMENT 'Mã khách hàng', AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `product_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;

--
-- AUTO_INCREMENT for table `type_product`
--
ALTER TABLE `type_product`
  MODIFY `type_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `comment`
--
ALTER TABLE `comment`
  ADD CONSTRAINT `comment_ibfk_1` FOREIGN KEY (`product_id`) REFERENCES `product` (`product_id`) ON DELETE RESTRICT ON UPDATE RESTRICT,
  ADD CONSTRAINT `comment_ibfk_2` FOREIGN KEY (`customer_id`) REFERENCES `customer` (`customer_id`) ON DELETE RESTRICT ON UPDATE RESTRICT;

--
-- Constraints for table `product`
--
ALTER TABLE `product`
  ADD CONSTRAINT `product_ibfk_1` FOREIGN KEY (`type_product`) REFERENCES `type_product` (`type_id`) ON DELETE RESTRICT ON UPDATE RESTRICT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
