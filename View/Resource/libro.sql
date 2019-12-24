-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th10 28, 2019 lúc 02:54 PM
-- Phiên bản máy phục vụ: 10.4.6-MariaDB
-- Phiên bản PHP: 7.3.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `libro`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `orders`
--

CREATE TABLE `orders` (
  `userName` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` bit(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `order_content`
--

CREATE TABLE `ordercontent` (
  `userName` varchar(255) NOT NULL,
  `productId` bigint(10) NOT NULL,
  `amount` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `products`
--

CREATE TABLE `products` (
  `id` bigint(10) NOT NULL,
  `name` varchar(500) COLLATE utf8mb4_unicode_ci NOT NULL,
  `category` bigint(10) NOT NULL,
  `price` int(11) NOT NULL,
  `sale` float NOT NULL,
  `imageLink` varchar(500) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `productcategories`
--

CREATE TABLE `productcategories` (
  `id` bigint(10) NOT NULL,
  `name` varchar(500) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `shippinginfo`
--

CREATE TABLE `shippinginfo` (
  `id` bigint(10) NOT NULL,

  `userName` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
status varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL	
  ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

CREATE TABLE `shippinginfocontent` (
  `idShip` bigint(10) NOT NULL,

  `productId` bigint(10), 
amount int(11) 	
  ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;


--
-- Cấu trúc bảng cho bảng `users`
--

CREATE TABLE `users` (
  `userName` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pass` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `province` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(500) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phoneNumber` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`userName`),
  
--
-- Chỉ mục cho bảng `order_content`
--
ALTER TABLE `ordercontent`
  ADD PRIMARY KEY (`userName`,`productId`),
  ADD KEY `order_content_fk1` (`productId`);

--
-- Chỉ mục cho bảng `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `name` (`name`),
  ADD KEY `products_fk0` (`category`);

--
-- Chỉ mục cho bảng `productcategories`
--
ALTER TABLE `productcategories`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `name` (`name`);

--
-- Chỉ mục cho bảng `shippinginfo`
--
ALTER TABLE `shippinginfo`
  ADD PRIMARY KEY (`id`);

ALTER TABLE `shippinginfocontent`
  ADD PRIMARY KEY (`idShip`);


--
-- Chỉ mục cho bảng `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`userName`),
  ADD UNIQUE KEY `userName` (`uesrName`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `orders`
--
  --
-- AUTO_INCREMENT cho bảng `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `product_categories`
--
ALTER TABLE `productcategories`
  MODIFY `id` bigint(10) NOT NULL AUTO_INCREMENT;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `orders_fk0` FOREIGN KEY (`userName`) REFERENCES `users` (`userName`);

--
-- Các ràng buộc cho bảng `order_content`
--
ALTER TABLE `ordercontent`
  ADD CONSTRAINT `order_content_fk0` FOREIGN KEY (`userName`) REFERENCES `orders` (`userName`),
  ADD CONSTRAINT `order_content_fk1` FOREIGN KEY (`productId`) REFERENCES `products` (`id`);

--
-- Các ràng buộc cho bảng `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `products_fk0` FOREIGN KEY (`category`) REFERENCES `productcategories` (`id`);

--
-- Các ràng buộc cho bảng `shipping_info`
--
ALTER TABLE `shippinginfo`
  ADD CONSTRAINT `shipping_info_fk0` FOREIGN KEY (`userName`) REFERENCES `users` (`userName`);
COMMIT;

ALTER TABLE `shippinginfocontent`
  ADD CONSTRAINT `shipping_info_content_fk0` FOREIGN KEY (`idShip`) REFERENCES `shippinginfo` (`id`);

ALTER TABLE `products` ADD `selledAmount` INT NOT NULL AFTER `imageLink`, ADD `ViewedAmount` BIGINT NOT NULL AFTER `selledAmount`;

ALTER TABLE `products` CHANGE `ViewedAmount` `viewedAmount` BIGINT NOT NULL;


/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
