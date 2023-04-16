-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 16, 2023 at 04:23 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `e_cart`
--

-- --------------------------------------------------------

--
-- Table structure for table `brands`
--

CREATE TABLE `brands` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `brands`
--

INSERT INTO `brands` (`id`, `category_id`, `name`, `slug`, `status`, `created_at`, `updated_at`) VALUES
(1, 1, 'ASUS', 'asus', 0, '2023-03-16 06:30:57', '2023-03-16 06:30:57'),
(2, 2, 'Samsung', 'samsung', 0, '2023-03-16 06:31:22', '2023-03-16 06:31:22'),
(3, 4, 'Apple', 'apple', 0, '2023-03-16 06:31:44', '2023-03-16 08:11:43'),
(4, 5, 'Samsung', 'samsung', 0, '2023-03-16 06:33:05', '2023-03-16 06:33:05'),
(5, 8, 'SanDisk', 'sandisk', 0, '2023-03-16 07:03:03', '2023-03-16 07:03:03'),
(6, 1, 'Lenovo', 'lenovo', 0, '2023-03-16 07:11:25', '2023-03-16 07:11:25'),
(7, 1, 'Apple', 'apple', 0, '2023-03-16 08:10:52', '2023-03-16 08:10:52'),
(8, 2, 'Apple', 'apple', 0, '2023-03-16 08:12:21', '2023-03-16 08:12:21'),
(9, 3, 'ASUS', 'asus', 0, '2023-03-16 08:13:26', '2023-03-16 08:13:26'),
(10, 9, 'Lenovo', 'lenovo', 0, '2023-03-16 08:14:24', '2023-03-16 08:14:24'),
(11, 7, 'IndoPrimo', 'indoprimo', 0, '2023-03-16 08:24:23', '2023-03-16 08:24:23'),
(12, 7, 'Lymio', 'lymio', 0, '2023-03-16 08:31:43', '2023-03-16 08:31:43'),
(13, 6, 'Symbol', 'symbol', 0, '2023-03-16 08:42:29', '2023-03-16 08:42:29');

-- --------------------------------------------------------

--
-- Table structure for table `carts`
--

CREATE TABLE `carts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `product_id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `product_color_id` bigint(20) UNSIGNED DEFAULT NULL,
  `quantity` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `description` mediumtext DEFAULT NULL,
  `meta_title` varchar(255) DEFAULT NULL,
  `meta_keyword` varchar(255) DEFAULT NULL,
  `meta_description` mediumtext DEFAULT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 0,
  `icon` varchar(255) DEFAULT 'fas fa-circle',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `slug`, `description`, `meta_title`, `meta_keyword`, `meta_description`, `status`, `icon`, `created_at`, `updated_at`) VALUES
(1, 'Laptop', 'laptop', NULL, NULL, NULL, NULL, 0, NULL, '2023-03-16 06:27:11', '2023-03-16 06:27:11'),
(2, 'Mobile', 'mobile', NULL, NULL, NULL, NULL, 0, NULL, '2023-03-16 06:27:25', '2023-03-16 06:27:25'),
(3, 'Motherboard', 'motherboard', NULL, NULL, NULL, NULL, 0, NULL, '2023-03-16 06:27:53', '2023-03-16 06:27:53'),
(4, 'Watch', 'watch', NULL, NULL, NULL, NULL, 0, NULL, '2023-03-16 06:28:11', '2023-03-16 06:28:11'),
(5, 'TV', 'tv', NULL, NULL, NULL, NULL, 0, NULL, '2023-03-16 06:28:52', '2023-03-16 06:28:52'),
(6, 'Pant', 'pant', NULL, NULL, NULL, NULL, 0, NULL, '2023-03-16 06:29:25', '2023-03-16 08:38:42'),
(7, 'Shirt', 'shirt', NULL, NULL, NULL, NULL, 0, NULL, '2023-03-16 06:29:41', '2023-03-16 08:25:40'),
(8, 'Pen Drive', 'pen-drive', NULL, NULL, NULL, NULL, 0, NULL, '2023-03-16 07:02:33', '2023-03-16 07:02:33'),
(9, 'Tablets', 'tablets', NULL, NULL, NULL, NULL, 0, NULL, '2023-03-16 08:00:20', '2023-03-16 08:00:20');

-- --------------------------------------------------------

--
-- Table structure for table `colors`
--

CREATE TABLE `colors` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `code` varchar(255) DEFAULT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `colors`
--

INSERT INTO `colors` (`id`, `name`, `code`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Red', NULL, 0, '2023-03-16 06:57:12', '2023-03-16 06:57:12'),
(2, 'Green', NULL, 0, '2023-03-16 06:57:21', '2023-03-16 06:57:21'),
(3, 'Blue', NULL, 0, '2023-03-16 06:57:29', '2023-03-16 06:57:29'),
(4, 'Pink', NULL, 0, '2023-03-16 06:57:38', '2023-03-16 06:57:38'),
(5, 'Purple', NULL, 0, '2023-03-16 06:57:46', '2023-03-16 06:57:46'),
(6, 'Yellow', NULL, 0, '2023-03-16 06:57:53', '2023-03-16 06:57:53'),
(7, 'Gold', NULL, 0, '2023-03-16 06:58:05', '2023-03-16 06:58:05'),
(8, 'Orange', NULL, 0, '2023-03-16 06:58:17', '2023-03-16 06:58:17'),
(9, 'Black', NULL, 0, '2023-03-16 06:58:28', '2023-03-16 06:58:28'),
(10, 'White', NULL, 0, '2023-03-16 06:58:39', '2023-03-16 06:58:39'),
(11, 'Gray', NULL, 0, '2023-03-16 06:58:47', '2023-03-16 06:58:47'),
(12, 'Brown', NULL, 0, '2023-03-16 06:58:56', '2023-03-16 06:58:56'),
(13, 'Silver', NULL, 0, '2023-03-16 06:59:03', '2023-03-16 06:59:03'),
(14, 'Rainbow', NULL, 0, '2023-03-16 06:59:14', '2023-03-16 06:59:14');

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `subject` varchar(255) NOT NULL,
  `message` mediumtext NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(18, '2014_10_12_000000_create_users_table', 1),
(19, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(20, '2014_10_12_100000_create_password_resets_table', 1),
(21, '2019_08_19_000000_create_failed_jobs_table', 1),
(22, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(23, '2023_02_17_132301_create_categories_table', 1),
(24, '2023_02_18_101339_create_brands_table', 1),
(25, '2023_02_18_113926_create_products_table', 1),
(26, '2023_02_18_120854_create_product_images_table', 1),
(27, '2023_02_19_134639_create_colors_table', 1),
(28, '2023_02_19_152624_create_product_colors_table', 1),
(29, '2023_03_06_064437_create_wishlists_table', 1),
(30, '2023_03_06_164306_create_carts_table', 1),
(31, '2023_03_07_102246_create_orders_table', 1),
(32, '2023_03_07_103127_create_order_items_table', 1),
(33, '2023_03_12_103312_ctrate_contacts_table', 1),
(34, '2023_03_14_144947_craete_subscribers_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `fullname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `tracking_no` varchar(255) NOT NULL,
  `pincode` varchar(255) NOT NULL,
  `address` mediumtext NOT NULL,
  `status_message` varchar(255) NOT NULL,
  `payment_id` int(11) DEFAULT NULL,
  `payment_mode` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `order_items`
--

CREATE TABLE `order_items` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `order_id` bigint(20) UNSIGNED NOT NULL,
  `product_id` bigint(20) UNSIGNED NOT NULL,
  `product_color_id` bigint(20) UNSIGNED DEFAULT NULL,
  `quantity` int(11) NOT NULL,
  `price` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category_id` bigint(20) UNSIGNED NOT NULL,
  `brand_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `small_description` mediumtext DEFAULT NULL,
  `description` longtext DEFAULT NULL,
  `orignal_price` int(11) NOT NULL,
  `selling_price` int(11) NOT NULL,
  `quantity` int(11) NOT NULL,
  `trending` tinyint(4) NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 0,
  `meta_title` varchar(255) DEFAULT NULL,
  `meta_keyword` mediumtext DEFAULT NULL,
  `meta_description` mediumtext DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `category_id`, `brand_id`, `name`, `slug`, `small_description`, `description`, `orignal_price`, `selling_price`, `quantity`, `trending`, `status`, `meta_title`, `meta_keyword`, `meta_description`, `created_at`, `updated_at`) VALUES
(1, 1, 1, 'ASUS VivoBook 15', 'asus-vivobook-15', 'ASUS VivoBook 15, 15.6-inch (39.62 cms) FHD, Intel Core i3-1005G1 10th Gen, Thin and Light Laptop (8GB/512GB SSD/Windows 11/Office 2021/integrated Graphics/Fingerprint/Silver/1.8 kg), X515JA-EJ382WS', '<table id=\"productDetails_techSpec_section_1\" class=\"a-keyvalue prodDetTable\" role=\"presentation\">     <tbody><tr>  <th class=\"a-color-secondary a-size-base prodDetSectionEntry\"> Brand </th>   <td class=\"a-size-base prodDetAttrValue\">\r\n                &lrm;ASUS </td>  </tr>    <tr>  <th class=\"a-color-secondary a-size-base prodDetSectionEntry\"> Manufacturer </th>   <td class=\"a-size-base prodDetAttrValue\">\r\n                &lrm;INVENTEC (CHONGQING) CORPORATION, TECH FRONT ( CHONGQING) Computer Co. Ltd, NO 18 , Zongbao Road, Shapingba Dist,Chongquing, China </td>  </tr>    <tr>  <th class=\"a-color-secondary a-size-base prodDetSectionEntry\"> Series </th>   <td class=\"a-size-base prodDetAttrValue\">\r\n                &lrm;ASUS Vivobook X515JA-EJ382WS </td>  </tr>    <tr>  <th class=\"a-color-secondary a-size-base prodDetSectionEntry\"> Colour </th>   <td class=\"a-size-base prodDetAttrValue\">\r\n                &lrm;Transparent Silver </td>  </tr>    <tr>  <th class=\"a-color-secondary a-size-base prodDetSectionEntry\"> Form Factor </th>   <td class=\"a-size-base prodDetAttrValue\">\r\n                &lrm;Laptop </td>  </tr>    <tr>  <th class=\"a-color-secondary a-size-base prodDetSectionEntry\"> Item Height\r\n </th>   <td class=\"a-size-base prodDetAttrValue\">\r\n                &lrm;20 Millimeters </td>  </tr>    <tr>  <th class=\"a-color-secondary a-size-base prodDetSectionEntry\"> Item Width\r\n </th>   <td class=\"a-size-base prodDetAttrValue\">\r\n                &lrm;23.5 Centimeters </td>  </tr>    <tr>  <th class=\"a-color-secondary a-size-base prodDetSectionEntry\"> Standing screen display size </th>   <td class=\"a-size-base prodDetAttrValue\">\r\n                &lrm;15.6 Inches </td>  </tr>    <tr>  <th class=\"a-color-secondary a-size-base prodDetSectionEntry\"> Screen Resolution </th>   <td class=\"a-size-base prodDetAttrValue\">\r\n                &lrm;1920 x 1080 pixels </td>  </tr>    <tr>  <th class=\"a-color-secondary a-size-base prodDetSectionEntry\"> Resolution </th>   <td class=\"a-size-base prodDetAttrValue\">\r\n                &lrm;1920 x 1080 Pixels </td>  </tr>    <tr>  <th class=\"a-color-secondary a-size-base prodDetSectionEntry\"> Product Dimensions </th>   <td class=\"a-size-base prodDetAttrValue\">\r\n                &lrm;36.2 x 23.5 x 2 cm; 1.8 Kilograms </td>  </tr>    <tr>  <th class=\"a-color-secondary a-size-base prodDetSectionEntry\"> Batteries </th>   <td class=\"a-size-base prodDetAttrValue\">\r\n                &lrm;1 Lithium Ion batteries required. (included) </td>  </tr>    <tr>  <th class=\"a-color-secondary a-size-base prodDetSectionEntry\"> Item model number </th>   <td class=\"a-size-base prodDetAttrValue\">\r\n                &lrm;X515JA-EJ382WS </td>  </tr>    <tr>  <th class=\"a-color-secondary a-size-base prodDetSectionEntry\"> Processor Brand </th>   <td class=\"a-size-base prodDetAttrValue\">\r\n                &lrm;Intel </td>  </tr>    <tr>  <th class=\"a-color-secondary a-size-base prodDetSectionEntry\"> Processor Type </th>   <td class=\"a-size-base prodDetAttrValue\">\r\n                &lrm;Core i3-1005G1 </td>  </tr>    <tr>  <th class=\"a-color-secondary a-size-base prodDetSectionEntry\"> Processor Speed </th>   <td class=\"a-size-base prodDetAttrValue\">\r\n                &lrm;1.2 GHz </td>  </tr>    <tr>  <th class=\"a-color-secondary a-size-base prodDetSectionEntry\"> Processor Count </th>   <td class=\"a-size-base prodDetAttrValue\">\r\n                &lrm;2 </td>  </tr>    <tr>  <th class=\"a-color-secondary a-size-base prodDetSectionEntry\"> RAM Size </th>   <td class=\"a-size-base prodDetAttrValue\">\r\n                &lrm;8 GB </td>  </tr>    <tr>  <th class=\"a-color-secondary a-size-base prodDetSectionEntry\"> Memory Technology </th>   <td class=\"a-size-base prodDetAttrValue\">\r\n                &lrm;DDR4 </td>  </tr>    <tr>  <th class=\"a-color-secondary a-size-base prodDetSectionEntry\"> Maximum Memory Supported\r\n </th>   <td class=\"a-size-base prodDetAttrValue\">\r\n                &lrm;12 GB </td>  </tr>    <tr>  <th class=\"a-color-secondary a-size-base prodDetSectionEntry\"> Memory Clock Speed </th>   <td class=\"a-size-base prodDetAttrValue\">\r\n                &lrm;3200 MHz </td>  </tr>    <tr>  <th class=\"a-color-secondary a-size-base prodDetSectionEntry\"> Hard Drive Size </th>   <td class=\"a-size-base prodDetAttrValue\">\r\n                &lrm;512 GB </td>  </tr>    <tr>  <th class=\"a-color-secondary a-size-base prodDetSectionEntry\"> Hard Disk Description </th>   <td class=\"a-size-base prodDetAttrValue\">\r\n                &lrm;SSD </td>  </tr>    <tr>  <th class=\"a-color-secondary a-size-base prodDetSectionEntry\"> Audio Details\r\n </th>   <td class=\"a-size-base prodDetAttrValue\">\r\n                &lrm;Speakers </td>  </tr>    <tr>  <th class=\"a-color-secondary a-size-base prodDetSectionEntry\"> Graphics Coprocessor </th>   <td class=\"a-size-base prodDetAttrValue\">\r\n                &lrm;Intel </td>  </tr>    <tr>  <th class=\"a-color-secondary a-size-base prodDetSectionEntry\"> Graphics Chipset Brand\r\n </th>   <td class=\"a-size-base prodDetAttrValue\">\r\n                &lrm;Intel </td>  </tr>    <tr>  <th class=\"a-color-secondary a-size-base prodDetSectionEntry\"> Graphics Card Description </th>   <td class=\"a-size-base prodDetAttrValue\">\r\n                &lrm;Integrated </td>  </tr>    <tr>  <th class=\"a-color-secondary a-size-base prodDetSectionEntry\"> Graphics RAM Type </th>   <td class=\"a-size-base prodDetAttrValue\">\r\n                &lrm;DDR4 SDRAM </td>  </tr>    <tr>  <th class=\"a-color-secondary a-size-base prodDetSectionEntry\"> Graphics Card Interface </th>   <td class=\"a-size-base prodDetAttrValue\">\r\n                &lrm;Integrated </td>  </tr>    <tr>  <th class=\"a-color-secondary a-size-base prodDetSectionEntry\"> Connectivity Type\r\n </th>   <td class=\"a-size-base prodDetAttrValue\">\r\n                &lrm;Wi-Fi </td>  </tr>    <tr>  <th class=\"a-color-secondary a-size-base prodDetSectionEntry\"> Number of USB 2.0 Ports\r\n </th>   <td class=\"a-size-base prodDetAttrValue\">\r\n                &lrm;2 </td>  </tr>    <tr>  <th class=\"a-color-secondary a-size-base prodDetSectionEntry\"> Number of USB 3.0 Ports\r\n </th>   <td class=\"a-size-base prodDetAttrValue\">\r\n                &lrm;1 </td>  </tr>    <tr>  <th class=\"a-color-secondary a-size-base prodDetSectionEntry\"> Optical Drive Type </th>   <td class=\"a-size-base prodDetAttrValue\">\r\n                &lrm;No </td>  </tr>    <tr>  <th class=\"a-color-secondary a-size-base prodDetSectionEntry\"> Operating System </th>   <td class=\"a-size-base prodDetAttrValue\">\r\n                &lrm;Windows 11 </td>  </tr>    <tr>  <th class=\"a-color-secondary a-size-base prodDetSectionEntry\"> Are Batteries Included </th>   <td class=\"a-size-base prodDetAttrValue\">\r\n                &lrm;Yes </td>  </tr>    <tr>  <th class=\"a-color-secondary a-size-base prodDetSectionEntry\"> Number Of Lithium Ion Cells </th>   <td class=\"a-size-base prodDetAttrValue\">\r\n                &lrm;2 </td>  </tr>    <tr>  <th class=\"a-color-secondary a-size-base prodDetSectionEntry\"> Number of Lithium Metal Cells </th>   <td class=\"a-size-base prodDetAttrValue\">\r\n                &lrm;2 </td>  </tr>    <tr>  <th class=\"a-color-secondary a-size-base prodDetSectionEntry\"> Included Components </th>   <td class=\"a-size-base prodDetAttrValue\">\r\n                &lrm;Laptop, Adapter, User Guide Manual </td>  </tr>    <tr>  <th class=\"a-color-secondary a-size-base prodDetSectionEntry\"> Manufacturer </th>   <td class=\"a-size-base prodDetAttrValue\">\r\n                &lrm;INVENTEC (CHONGQING) CORPORATION </td>  </tr>    <tr>  <th class=\"a-color-secondary a-size-base prodDetSectionEntry\"> Country of Origin </th>   <td class=\"a-size-base prodDetAttrValue\">\r\n                &lrm;China </td>  </tr>    <tr>  <th class=\"a-color-secondary a-size-base prodDetSectionEntry\"> Item Weight </th>   <td class=\"a-size-base prodDetAttrValue\">\r\n                &lrm;1 kg 800 g </td>  </tr>    </tbody></table>', 45990, 33990, 25, 1, 0, NULL, NULL, NULL, '2023-03-16 07:07:31', '2023-03-16 07:07:31'),
(2, 1, 1, 'ASUS TUF Gaming F15', 'asus-tuf-gaming-f15', 'ASUS TUF Gaming F15 (2021), 15.6\" (39.62 cms) FHD 144Hz, Intel Core i5-10300H 10th Gen, GTX 1650 4GB Graphics, Gaming Laptop (8GB RAM/512GB NVMe SSD/Windows 11/Black/2.30 Kg), FX506LH-HN258W', '<table id=\"productDetails_techSpec_section_1\" class=\"a-keyvalue prodDetTable\" role=\"presentation\">     <tbody><tr>  <th class=\"a-color-secondary a-size-base prodDetSectionEntry\"> Brand </th>   <td class=\"a-size-base prodDetAttrValue\">\r\n                &lrm;ASUS </td>  </tr>    <tr>  <th class=\"a-color-secondary a-size-base prodDetSectionEntry\"> Manufacturer </th>   <td class=\"a-size-base prodDetAttrValue\">\r\n                &lrm;ASUS </td>  </tr>    <tr>  <th class=\"a-color-secondary a-size-base prodDetSectionEntry\"> Model Name </th>   <td class=\"a-size-base prodDetAttrValue\">\r\n                &lrm;TUF </td>  </tr>    <tr>  <th class=\"a-color-secondary a-size-base prodDetSectionEntry\"> RAM Size </th>   <td class=\"a-size-base prodDetAttrValue\">\r\n                &lrm;8 GB </td>  </tr>    <tr>  <th class=\"a-color-secondary a-size-base prodDetSectionEntry\"> Ram Memory Installed Size </th>   <td class=\"a-size-base prodDetAttrValue\">\r\n                &lrm;512 GB </td>  </tr>    <tr>  <th class=\"a-color-secondary a-size-base prodDetSectionEntry\"> Hard Drive Size </th>   <td class=\"a-size-base prodDetAttrValue\">\r\n                &lrm;512 GB </td>  </tr>    <tr>  <th class=\"a-color-secondary a-size-base prodDetSectionEntry\"> Hard Disk Description </th>   <td class=\"a-size-base prodDetAttrValue\">\r\n                &lrm;Solid State Hard Drive </td>  </tr>    <tr>  <th class=\"a-color-secondary a-size-base prodDetSectionEntry\"> Operating System </th>   <td class=\"a-size-base prodDetAttrValue\">\r\n                &lrm;Windows 8.1 </td>  </tr>    <tr>  <th class=\"a-color-secondary a-size-base prodDetSectionEntry\"> Processor Brand </th>   <td class=\"a-size-base prodDetAttrValue\">\r\n                &lrm;ARM </td>  </tr>    <tr>  <th class=\"a-color-secondary a-size-base prodDetSectionEntry\"> Processor Type </th>   <td class=\"a-size-base prodDetAttrValue\">\r\n                &lrm;Core i5 </td>  </tr>    <tr>  <th class=\"a-color-secondary a-size-base prodDetSectionEntry\"> Special Features </th>   <td class=\"a-size-base prodDetAttrValue\">\r\n                &lrm;Portable, Light Weight </td>  </tr>    <tr>  <th class=\"a-color-secondary a-size-base prodDetSectionEntry\"> Standing screen display size </th>   <td class=\"a-size-base prodDetAttrValue\">\r\n                &lrm;15.6 Inches </td>  </tr>    <tr>  <th class=\"a-color-secondary a-size-base prodDetSectionEntry\"> Audio Output Type </th>   <td class=\"a-size-base prodDetAttrValue\">\r\n                &lrm;Headphones </td>  </tr>    <tr>  <th class=\"a-color-secondary a-size-base prodDetSectionEntry\"> Connector Type </th>   <td class=\"a-size-base prodDetAttrValue\">\r\n                &lrm;Bluetooth, USB </td>  </tr>    <tr>  <th class=\"a-color-secondary a-size-base prodDetSectionEntry\">  Device interface - primary  </th>   <td class=\"a-size-base prodDetAttrValue\">\r\n                &lrm;Microphone, Mouse, Buttons </td>  </tr>    <tr>  <th class=\"a-color-secondary a-size-base prodDetSectionEntry\"> Form Factor </th>   <td class=\"a-size-base prodDetAttrValue\">\r\n                &lrm;Laptop </td>  </tr>    <tr>  <th class=\"a-color-secondary a-size-base prodDetSectionEntry\"> Device type </th>   <td class=\"a-size-base prodDetAttrValue\">\r\n                &lrm;Gaming Laptop </td>  </tr>    <tr>  <th class=\"a-color-secondary a-size-base prodDetSectionEntry\"> Manufacturer </th>   <td class=\"a-size-base prodDetAttrValue\">\r\n                &lrm;ASUS </td>  </tr>    </tbody></table>', 85380, 68480, 50, 0, 0, NULL, NULL, NULL, '2023-03-16 07:10:28', '2023-03-16 07:10:28'),
(3, 1, 6, 'Lenovo Ideapad 3', 'lenovo-ideapad-3', 'Lenovo Ideapad 3 AMD Ryzen 5 5500U 15.6\"(39.62cm) FHD T&L Laptop (8GB/512GB SSD/Win 11/MSO 2021/Backlit Keyboard/2Yr Warranty/1.65Kg),82KU017KIN, 5% Instant Off on APay ICICI CreditCard (Prime only)', '<table id=\"productDetails_techSpec_section_1\" class=\"a-keyvalue prodDetTable\" role=\"presentation\">     <tbody><tr>  <th class=\"a-color-secondary a-size-base prodDetSectionEntry\"> Brand </th>   <td class=\"a-size-base prodDetAttrValue\">\r\n                &lrm;Lenovo </td>  </tr>    <tr>  <th class=\"a-color-secondary a-size-base prodDetSectionEntry\"> Manufacturer </th>   <td class=\"a-size-base prodDetAttrValue\">\r\n                &lrm;Lenovo, One of the below: Hefei Bitland Information Technology Co.,Ltd - No.4088 Jiuxiu Road National Hefei economic &amp; technology development area Hefei Anhui China LCFC（Hefei) Electronics Technology Co., Ltd. - NO.1-3188,YUNGU ROAD, HEFEI EXPORT PROCESSING ZONE. ANHUI PROVINCE,CHINA&nbsp; Tech-Com(Shanghai) Computer Co Ltd - No.6 Ln.58,San-Zhuang Rd., Songjiang EPZ ShangHai, China Wistron InfoComm (Kunshan) Co.Ltd - 168# First Avenue, Kunshan Export Processing Zone, Kunshan, Jiangsu, China Compal information technology (kunshan) CO., LTD. - Address: No. 58, the 1st street, Kunshan Export Processing Zone, Jiangsu, P.R.O.C. CHINA Kunshan Hichain storage Co. Ltd - No. 88 Xinxiang Road&nbsp; Avenue Kunshan CBZ Wujiang Hichain warehousing LTD - No.2088 Pangjin road, Wujiang economic development area,&nbsp; Jiangsu, China </td>  </tr>    <tr>  <th class=\"a-color-secondary a-size-base prodDetSectionEntry\"> Model </th>   <td class=\"a-size-base prodDetAttrValue\">\r\n                &lrm;82KU017KIN </td>  </tr>    <tr>  <th class=\"a-color-secondary a-size-base prodDetSectionEntry\"> Model Name </th>   <td class=\"a-size-base prodDetAttrValue\">\r\n                &lrm;IdeaPad </td>  </tr>    <tr>  <th class=\"a-color-secondary a-size-base prodDetSectionEntry\"> Model Year </th>   <td class=\"a-size-base prodDetAttrValue\">\r\n                &lrm;2021 </td>  </tr>    <tr>  <th class=\"a-color-secondary a-size-base prodDetSectionEntry\"> Product Dimensions </th>   <td class=\"a-size-base prodDetAttrValue\">\r\n                &lrm;35.9 x 23.7 x 2 cm; 1.65 Kilograms </td>  </tr>    <tr>  <th class=\"a-color-secondary a-size-base prodDetSectionEntry\"> Batteries </th>   <td class=\"a-size-base prodDetAttrValue\">\r\n                &lrm;1 Lithium Polymer batteries required. (included) </td>  </tr>    <tr>  <th class=\"a-color-secondary a-size-base prodDetSectionEntry\"> Item model number </th>   <td class=\"a-size-base prodDetAttrValue\">\r\n                &lrm;82KU017KIN </td>  </tr>    <tr>  <th class=\"a-color-secondary a-size-base prodDetSectionEntry\"> RAM Size </th>   <td class=\"a-size-base prodDetAttrValue\">\r\n                &lrm;8 GB </td>  </tr>    <tr>  <th class=\"a-color-secondary a-size-base prodDetSectionEntry\"> Memory Storage Capacity </th>   <td class=\"a-size-base prodDetAttrValue\">\r\n                &lrm;512 GB </td>  </tr>    <tr>  <th class=\"a-color-secondary a-size-base prodDetSectionEntry\"> Memory Slots Available </th>   <td class=\"a-size-base prodDetAttrValue\">\r\n                &lrm;2 </td>  </tr>    <tr>  <th class=\"a-color-secondary a-size-base prodDetSectionEntry\"> Flash Memory Installed Size </th>   <td class=\"a-size-base prodDetAttrValue\">\r\n                &lrm;512 GB </td>  </tr>    <tr>  <th class=\"a-color-secondary a-size-base prodDetSectionEntry\"> Ram Memory Installed Size </th>   <td class=\"a-size-base prodDetAttrValue\">\r\n                &lrm;8 GB </td>  </tr>    <tr>  <th class=\"a-color-secondary a-size-base prodDetSectionEntry\"> RAM memory maximum size </th>   <td class=\"a-size-base prodDetAttrValue\">\r\n                &lrm;12 GB </td>  </tr>    <tr>  <th class=\"a-color-secondary a-size-base prodDetSectionEntry\"> Ram Memory Technology </th>   <td class=\"a-size-base prodDetAttrValue\">\r\n                &lrm;DDR4 </td>  </tr>    <tr>  <th class=\"a-color-secondary a-size-base prodDetSectionEntry\"> Computer Memory Type </th>   <td class=\"a-size-base prodDetAttrValue\">\r\n                &lrm;DDR4 SDRAM </td>  </tr>    <tr>  <th class=\"a-color-secondary a-size-base prodDetSectionEntry\"> Hard Drive Size </th>   <td class=\"a-size-base prodDetAttrValue\">\r\n                &lrm;512 GB </td>  </tr>    <tr>  <th class=\"a-color-secondary a-size-base prodDetSectionEntry\"> Hard Drive Interface </th>   <td class=\"a-size-base prodDetAttrValue\">\r\n                &lrm;USB 3.2 </td>  </tr>    <tr>  <th class=\"a-color-secondary a-size-base prodDetSectionEntry\"> Hard Disk Description </th>   <td class=\"a-size-base prodDetAttrValue\">\r\n                &lrm;SSD </td>  </tr>    <tr>  <th class=\"a-color-secondary a-size-base prodDetSectionEntry\"> Optical Drive Type </th>   <td class=\"a-size-base prodDetAttrValue\">\r\n                &lrm;No Optical Drive </td>  </tr>    <tr>  <th class=\"a-color-secondary a-size-base prodDetSectionEntry\"> Operating System </th>   <td class=\"a-size-base prodDetAttrValue\">\r\n                &lrm;Windows 11 Home </td>  </tr>    <tr>  <th class=\"a-color-secondary a-size-base prodDetSectionEntry\"> Processor Brand </th>   <td class=\"a-size-base prodDetAttrValue\">\r\n                &lrm;AMD </td>  </tr>    <tr>  <th class=\"a-color-secondary a-size-base prodDetSectionEntry\"> Processor Speed </th>   <td class=\"a-size-base prodDetAttrValue\">\r\n                &lrm;2.1 GHz </td>  </tr>    <tr>  <th class=\"a-color-secondary a-size-base prodDetSectionEntry\"> Processor Type </th>   <td class=\"a-size-base prodDetAttrValue\">\r\n                &lrm;Ryzen 5 </td>  </tr>    <tr>  <th class=\"a-color-secondary a-size-base prodDetSectionEntry\"> Processor Count </th>   <td class=\"a-size-base prodDetAttrValue\">\r\n                &lrm;6 </td>  </tr>    <tr>  <th class=\"a-color-secondary a-size-base prodDetSectionEntry\"> Processor model number </th>   <td class=\"a-size-base prodDetAttrValue\">\r\n                &lrm;5500U </td>  </tr>    <tr>  <th class=\"a-color-secondary a-size-base prodDetSectionEntry\"> Hardware Interface </th>   <td class=\"a-size-base prodDetAttrValue\">\r\n                &lrm;USB, HDMI, SDXC, SDHC, USB 2.0, Secure Digital Card </td>  </tr>    <tr>  <th class=\"a-color-secondary a-size-base prodDetSectionEntry\"> Graphics Card Description </th>   <td class=\"a-size-base prodDetAttrValue\">\r\n                &lrm;Integrated </td>  </tr>    <tr>  <th class=\"a-color-secondary a-size-base prodDetSectionEntry\"> Graphics RAM Type </th>   <td class=\"a-size-base prodDetAttrValue\">\r\n                &lrm;Shared </td>  </tr>    <tr>  <th class=\"a-color-secondary a-size-base prodDetSectionEntry\"> Graphics Card Interface </th>   <td class=\"a-size-base prodDetAttrValue\">\r\n                &lrm;Integrated </td>  </tr>    <tr>  <th class=\"a-color-secondary a-size-base prodDetSectionEntry\"> Graphics Coprocessor </th>   <td class=\"a-size-base prodDetAttrValue\">\r\n                &lrm;AMD Radeon Graphics </td>  </tr>    <tr>  <th class=\"a-color-secondary a-size-base prodDetSectionEntry\"> Resolution </th>   <td class=\"a-size-base prodDetAttrValue\">\r\n                &lrm;1080p </td>  </tr>    <tr>  <th class=\"a-color-secondary a-size-base prodDetSectionEntry\"> Special Features </th>   <td class=\"a-size-base prodDetAttrValue\">\r\n                &lrm;Built-in Microphone </td>  </tr>    <tr>  <th class=\"a-color-secondary a-size-base prodDetSectionEntry\"> Mounting Hardware </th>   <td class=\"a-size-base prodDetAttrValue\">\r\n                &lrm;Laptop, User Manual, Power Adapter </td>  </tr>    <tr>  <th class=\"a-color-secondary a-size-base prodDetSectionEntry\"> Number of items </th>   <td class=\"a-size-base prodDetAttrValue\">\r\n                &lrm;3 </td>  </tr>    <tr>  <th class=\"a-color-secondary a-size-base prodDetSectionEntry\"> Software included </th>   <td class=\"a-size-base prodDetAttrValue\">\r\n                &lrm;Pre-Installed: MS Office Home and Student 2019, Windows® 11 Home 64, English </td>  </tr>    <tr>  <th class=\"a-color-secondary a-size-base prodDetSectionEntry\"> Display Technology </th>   <td class=\"a-size-base prodDetAttrValue\">\r\n                &lrm;LED </td>  </tr>    <tr>  <th class=\"a-color-secondary a-size-base prodDetSectionEntry\"> Standing screen display size </th>   <td class=\"a-size-base prodDetAttrValue\">\r\n                &lrm;15.6 Inches </td>  </tr>    <tr>  <th class=\"a-color-secondary a-size-base prodDetSectionEntry\"> Display Type </th>   <td class=\"a-size-base prodDetAttrValue\">\r\n                &lrm;FHD </td>  </tr>    <tr>  <th class=\"a-color-secondary a-size-base prodDetSectionEntry\"> Resolution </th>   <td class=\"a-size-base prodDetAttrValue\">\r\n                &lrm;1920 X 1080 (FHD) Pixels </td>  </tr>    <tr>  <th class=\"a-color-secondary a-size-base prodDetSectionEntry\"> Audio Output Type </th>   <td class=\"a-size-base prodDetAttrValue\">\r\n                &lrm;Headphones, Speakers </td>  </tr>    <tr>  <th class=\"a-color-secondary a-size-base prodDetSectionEntry\"> Power Source </th>   <td class=\"a-size-base prodDetAttrValue\">\r\n                &lrm;Battery Powered </td>  </tr>    <tr>  <th class=\"a-color-secondary a-size-base prodDetSectionEntry\"> Battery Average Life </th>   <td class=\"a-size-base prodDetAttrValue\">\r\n                &lrm;7 Hours </td>  </tr>    <tr>  <th class=\"a-color-secondary a-size-base prodDetSectionEntry\"> Battery Average Life Standby </th>   <td class=\"a-size-base prodDetAttrValue\">\r\n                &lrm;7 Hours </td>  </tr>    <tr>  <th class=\"a-color-secondary a-size-base prodDetSectionEntry\"> Batteries Included </th>   <td class=\"a-size-base prodDetAttrValue\">\r\n                &lrm;Yes </td>  </tr>    <tr>  <th class=\"a-color-secondary a-size-base prodDetSectionEntry\"> Batteries Required </th>   <td class=\"a-size-base prodDetAttrValue\">\r\n                &lrm;Yes </td>  </tr>    <tr>  <th class=\"a-color-secondary a-size-base prodDetSectionEntry\"> Battery cell composition </th>   <td class=\"a-size-base prodDetAttrValue\">\r\n                &lrm;Polymer </td>  </tr>    <tr>  <th class=\"a-color-secondary a-size-base prodDetSectionEntry\"> Wireless Type </th>   <td class=\"a-size-base prodDetAttrValue\">\r\n                &lrm;Bluetooth </td>  </tr>    <tr>  <th class=\"a-color-secondary a-size-base prodDetSectionEntry\"> Refresh Rate	 </th>   <td class=\"a-size-base prodDetAttrValue\">\r\n                &lrm;4 GHz </td>  </tr>    <tr>  <th class=\"a-color-secondary a-size-base prodDetSectionEntry\"> Total USB ports </th>   <td class=\"a-size-base prodDetAttrValue\">\r\n                &lrm;3 </td>  </tr>    <tr>  <th class=\"a-color-secondary a-size-base prodDetSectionEntry\"> Keyboard Description </th>   <td class=\"a-size-base prodDetAttrValue\">\r\n                &lrm;Backlit </td>  </tr>    <tr>  <th class=\"a-color-secondary a-size-base prodDetSectionEntry\"> Connector Type </th>   <td class=\"a-size-base prodDetAttrValue\">\r\n                &lrm;Wi-Fi, USB, Ethernet, HDMI </td>  </tr>    <tr>  <th class=\"a-color-secondary a-size-base prodDetSectionEntry\">  Device interface - primary  </th>   <td class=\"a-size-base prodDetAttrValue\">\r\n                &lrm;Keyboard </td>  </tr>    <tr>  <th class=\"a-color-secondary a-size-base prodDetSectionEntry\"> Form Factor </th>   <td class=\"a-size-base prodDetAttrValue\">\r\n                &lrm;Ultra-Portable </td>  </tr>    <tr>  <th class=\"a-color-secondary a-size-base prodDetSectionEntry\"> Device type </th>   <td class=\"a-size-base prodDetAttrValue\">\r\n                &lrm;Ultrabook </td>  </tr>    <tr>  <th class=\"a-color-secondary a-size-base prodDetSectionEntry\"> Manufacturer </th>   <td class=\"a-size-base prodDetAttrValue\">\r\n                &lrm;Lenovo </td>  </tr>    <tr>  <th class=\"a-color-secondary a-size-base prodDetSectionEntry\"> Country of Origin </th>   <td class=\"a-size-base prodDetAttrValue\">\r\n                &lrm;China </td>  </tr>    <tr>  <th class=\"a-color-secondary a-size-base prodDetSectionEntry\"> Item Weight </th>   <td class=\"a-size-base prodDetAttrValue\">\r\n                &lrm;1 kg 650 g </td>  </tr>    </tbody></table>', 44235, 68490, 25, 0, 0, NULL, NULL, NULL, '2023-03-16 07:13:40', '2023-03-16 07:13:40'),
(4, 3, 1, 'ASUS ROG Strix', 'asus-rog-strix-b550-f', 'ASUS ROG Strix B550-F Gaming WiFi 6 AMD AM4 Socket for 3rd Gen AMD Ryzen ATX Gaming Motherboard with PCIe 4.0, teamed Power Stages, BIOS Flashback, Dual M.2 SATA 6 Gbps USB & Aura Sync (Ddr4)', '<table id=\"productDetails_techSpec_section_1\" class=\"a-keyvalue prodDetTable\" role=\"presentation\">     <tbody><tr>  <th class=\"a-color-secondary a-size-base prodDetSectionEntry\"> Brand </th>   <td class=\"a-size-base prodDetAttrValue\">\r\n                &lrm;ASUS </td>  </tr>    <tr>  <th class=\"a-color-secondary a-size-base prodDetSectionEntry\"> Manufacturer </th>   <td class=\"a-size-base prodDetAttrValue\">\r\n                &lrm;Asus Global PTE ltd, &lrm;Asus, Asus Global PTE ltd, Asus Global PTE ltd ,15A Changi Business Park central 1, #05-01 Eightrium,Singapore 486035 ,Tel - 1800 -2090-365 ,email : rc_india@asus.com </td>  </tr>    <tr>  <th class=\"a-color-secondary a-size-base prodDetSectionEntry\"> Item Height\r\n </th>   <td class=\"a-size-base prodDetAttrValue\">\r\n                &lrm;2.7 Inches </td>  </tr>    <tr>  <th class=\"a-color-secondary a-size-base prodDetSectionEntry\"> Item Width\r\n </th>   <td class=\"a-size-base prodDetAttrValue\">\r\n                &lrm;10.7 Inches </td>  </tr>    <tr>  <th class=\"a-color-secondary a-size-base prodDetSectionEntry\"> Product Dimensions </th>   <td class=\"a-size-base prodDetAttrValue\">\r\n                &lrm;33.78 x 27.18 x 6.86 cm; 1.08 Kilograms </td>  </tr>    <tr>  <th class=\"a-color-secondary a-size-base prodDetSectionEntry\"> Item model number </th>   <td class=\"a-size-base prodDetAttrValue\">\r\n                &lrm;ROG STRIX B550-F GAMING (WI-FI) </td>  </tr>    <tr>  <th class=\"a-color-secondary a-size-base prodDetSectionEntry\"> Processor Socket </th>   <td class=\"a-size-base prodDetAttrValue\">\r\n                &lrm;Socket AM4 </td>  </tr>    <tr>  <th class=\"a-color-secondary a-size-base prodDetSectionEntry\"> Memory Technology </th>   <td class=\"a-size-base prodDetAttrValue\">\r\n                &lrm;DDR4 </td>  </tr>    <tr>  <th class=\"a-color-secondary a-size-base prodDetSectionEntry\"> Memory Clock Speed </th>   <td class=\"a-size-base prodDetAttrValue\">\r\n                &lrm;4400 MHz </td>  </tr>    <tr>  <th class=\"a-color-secondary a-size-base prodDetSectionEntry\"> Graphics Card Interface </th>   <td class=\"a-size-base prodDetAttrValue\">\r\n                &lrm;PCI Express </td>  </tr>    <tr>  <th class=\"a-color-secondary a-size-base prodDetSectionEntry\"> Wireless Type </th>   <td class=\"a-size-base prodDetAttrValue\">\r\n                &lrm;802.11a/b/g/n/ac, 802.11ax </td>  </tr>    <tr>  <th class=\"a-color-secondary a-size-base prodDetSectionEntry\"> Number of HDMI Ports </th>   <td class=\"a-size-base prodDetAttrValue\">\r\n                &lrm;2 </td>  </tr>    <tr>  <th class=\"a-color-secondary a-size-base prodDetSectionEntry\"> Number of Ethernet Ports </th>   <td class=\"a-size-base prodDetAttrValue\">\r\n                &lrm;1 </td>  </tr>    <tr>  <th class=\"a-color-secondary a-size-base prodDetSectionEntry\"> Are Batteries Included </th>   <td class=\"a-size-base prodDetAttrValue\">\r\n                &lrm;No </td>  </tr>    <tr>  <th class=\"a-color-secondary a-size-base prodDetSectionEntry\"> Manufacturer </th>   <td class=\"a-size-base prodDetAttrValue\">\r\n                &lrm;Asus Global PTE ltd </td>  </tr>    <tr>  <th class=\"a-color-secondary a-size-base prodDetSectionEntry\"> Country of Origin </th>   <td class=\"a-size-base prodDetAttrValue\">\r\n                &lrm;China </td>  </tr>    <tr>  <th class=\"a-color-secondary a-size-base prodDetSectionEntry\"> Item Weight </th>   <td class=\"a-size-base prodDetAttrValue\">\r\n                &lrm;1 kg 80 g </td>  </tr>    </tbody></table>', 29100, 23720, 45, 0, 0, NULL, NULL, NULL, '2023-03-16 07:16:38', '2023-03-16 07:16:38'),
(5, 3, 1, 'ASUS TUF Gaming', 'asus-tuf-gaming-b450', 'ASUS TUF Gaming B450-PLUS II AMD AM4 (3rd/2nd/1st Gen Ryzen ATX Gaming Motherboard (DDR4 4400(O.C.), HDMI 2.0b/DVI, USB 3.2 Gen 2 Type-A & Type-C Ports, BIOS Flashback, 256Mb BIOS Flash ROM, AI NOI', '<table id=\"productDetails_techSpec_section_1\" class=\"a-keyvalue prodDetTable\" role=\"presentation\">     <tbody><tr>  <th class=\"a-color-secondary a-size-base prodDetSectionEntry\"> Brand </th>   <td class=\"a-size-base prodDetAttrValue\">\r\n                &lrm;ASUS </td>  </tr>    <tr>  <th class=\"a-color-secondary a-size-base prodDetSectionEntry\"> Manufacturer </th>   <td class=\"a-size-base prodDetAttrValue\">\r\n                &lrm;Asus </td>  </tr>    <tr>  <th class=\"a-color-secondary a-size-base prodDetSectionEntry\"> Model </th>   <td class=\"a-size-base prodDetAttrValue\">\r\n                &lrm;TUF GAMING B450-PLUS II </td>  </tr>    <tr>  <th class=\"a-color-secondary a-size-base prodDetSectionEntry\"> Model Year </th>   <td class=\"a-size-base prodDetAttrValue\">\r\n                &lrm;2020 </td>  </tr>    <tr>  <th class=\"a-color-secondary a-size-base prodDetSectionEntry\"> Product Dimensions </th>   <td class=\"a-size-base prodDetAttrValue\">\r\n                &lrm;30.48 x 24.38 x 5.08 cm; 1.45 Kilograms </td>  </tr>    <tr>  <th class=\"a-color-secondary a-size-base prodDetSectionEntry\"> Item model number </th>   <td class=\"a-size-base prodDetAttrValue\">\r\n                &lrm;TUF GAMING B450-PLUS II </td>  </tr>    <tr>  <th class=\"a-color-secondary a-size-base prodDetSectionEntry\"> Memory Storage Capacity </th>   <td class=\"a-size-base prodDetAttrValue\">\r\n                &lrm;128 GB </td>  </tr>    <tr>  <th class=\"a-color-secondary a-size-base prodDetSectionEntry\"> Memory Slots Available </th>   <td class=\"a-size-base prodDetAttrValue\">\r\n                &lrm;4 </td>  </tr>    <tr>  <th class=\"a-color-secondary a-size-base prodDetSectionEntry\"> Memory technology </th>   <td class=\"a-size-base prodDetAttrValue\">\r\n                &lrm;DDR4 </td>  </tr>    <tr>  <th class=\"a-color-secondary a-size-base prodDetSectionEntry\"> Ram Memory Installed Size </th>   <td class=\"a-size-base prodDetAttrValue\">\r\n                &lrm;128 GB </td>  </tr>    <tr>  <th class=\"a-color-secondary a-size-base prodDetSectionEntry\"> Ram Memory Technology </th>   <td class=\"a-size-base prodDetAttrValue\">\r\n                &lrm;DDR4 </td>  </tr>    <tr>  <th class=\"a-color-secondary a-size-base prodDetSectionEntry\"> Computer Memory Type </th>   <td class=\"a-size-base prodDetAttrValue\">\r\n                &lrm;DDR4 SDRAM </td>  </tr>    <tr>  <th class=\"a-color-secondary a-size-base prodDetSectionEntry\"> Processor Socket </th>   <td class=\"a-size-base prodDetAttrValue\">\r\n                &lrm;Socket AM4 </td>  </tr>    <tr>  <th class=\"a-color-secondary a-size-base prodDetSectionEntry\"> Compatible Processor Types </th>   <td class=\"a-size-base prodDetAttrValue\">\r\n                &lrm;AMD 1st Gerenration Ryzen </td>  </tr>    <tr>  <th class=\"a-color-secondary a-size-base prodDetSectionEntry\"> Compatible Devices </th>   <td class=\"a-size-base prodDetAttrValue\">\r\n                &lrm;Gaming Console </td>  </tr>    <tr>  <th class=\"a-color-secondary a-size-base prodDetSectionEntry\"> Chipset Type </th>   <td class=\"a-size-base prodDetAttrValue\">\r\n                &lrm;AMD B450 </td>  </tr>    <tr>  <th class=\"a-color-secondary a-size-base prodDetSectionEntry\"> Number of items </th>   <td class=\"a-size-base prodDetAttrValue\">\r\n                &lrm;1 </td>  </tr>    <tr>  <th class=\"a-color-secondary a-size-base prodDetSectionEntry\"> Batteries Included </th>   <td class=\"a-size-base prodDetAttrValue\">\r\n                &lrm;No </td>  </tr>    <tr>  <th class=\"a-color-secondary a-size-base prodDetSectionEntry\"> Batteries Required </th>   <td class=\"a-size-base prodDetAttrValue\">\r\n                &lrm;No </td>  </tr>    <tr>  <th class=\"a-color-secondary a-size-base prodDetSectionEntry\"> Total USB ports </th>   <td class=\"a-size-base prodDetAttrValue\">\r\n                &lrm;8 </td>  </tr>    <tr>  <th class=\"a-color-secondary a-size-base prodDetSectionEntry\"> Form Factor </th>   <td class=\"a-size-base prodDetAttrValue\">\r\n                &lrm;Atx </td>  </tr>    <tr>  <th class=\"a-color-secondary a-size-base prodDetSectionEntry\"> Manufacturer </th>   <td class=\"a-size-base prodDetAttrValue\">\r\n                &lrm;Asus </td>  </tr>    <tr>  <th class=\"a-color-secondary a-size-base prodDetSectionEntry\"> Country of Origin </th>   <td class=\"a-size-base prodDetAttrValue\">\r\n                &lrm;China </td>  </tr>    <tr>  <th class=\"a-color-secondary a-size-base prodDetSectionEntry\"> Item Weight </th>   <td class=\"a-size-base prodDetAttrValue\">\r\n                &lrm;1 kg 450 g </td>  </tr>    </tbody></table>', 17000, 13120, 36, 0, 0, NULL, NULL, NULL, '2023-03-16 07:19:09', '2023-03-16 07:19:09'),
(6, 4, 3, 'Apple Watch SE', 'apple-watch-se', 'Apple Watch SE (2nd Gen) GPS 44mm Starlight Aluminium Case with Starlight Sport Band - Regular', '<table class=\"a-bordered\">\r\n        \r\n            <tbody><tr>\r\n                \r\n                    \r\n                        \r\n                        \r\n                        \r\n                            <td style=\"width:120px;\">\r\n                                <p><strong>Case Size</strong></p>\r\n\r\n                            </td>\r\n                        \r\n                    \r\n                \r\n                    \r\n                        \r\n                        \r\n                        \r\n                            <td>\r\n                                <p>41mm, 45mm</p>\r\n\r\n                            </td>\r\n                        \r\n                    \r\n                \r\n            </tr>\r\n        \r\n            <tr>\r\n                \r\n                    \r\n                        \r\n                        \r\n                        \r\n                            <td style=\"width:120px;\">\r\n                                <p><strong>Whats in the box</strong></p>\r\n\r\n                            </td>\r\n                        \r\n                    \r\n                \r\n                    \r\n                        \r\n                        \r\n                        \r\n                            <td>\r\n                                <p>Case, Band, 1m Magnetic Charging Cable</p>\r\n\r\n                            </td>\r\n                        \r\n                    \r\n                \r\n            </tr>\r\n        \r\n            <tr>\r\n                \r\n                    \r\n                        \r\n                        \r\n                        \r\n                            <td style=\"width:120px;\">\r\n                                <p><strong>Connectivity</strong></p>\r\n\r\n                            </td>\r\n                        \r\n                    \r\n                \r\n                    \r\n                        \r\n                        \r\n                        \r\n                            <td>\r\n                                <p>LTE and UMTS,Wi-Fi 802.11b/g/n 2.4GHz, Bluetooth 5.0</p>\r\n\r\n                            </td>\r\n                        \r\n                    \r\n                \r\n            </tr>\r\n        \r\n            <tr>\r\n                \r\n                    \r\n                        \r\n                        \r\n                        \r\n                            <td style=\"width:120px;\">\r\n                                <p><strong>Power</strong></p>\r\n\r\n                            </td>\r\n                        \r\n                    \r\n                \r\n                    \r\n                        \r\n                        \r\n                        \r\n                            <td>\r\n                                <p>Up to 18 hours of battery life</p>\r\n\r\n                            </td>\r\n                        \r\n                    \r\n                \r\n            </tr>\r\n        \r\n            <tr>\r\n                \r\n                    \r\n                        \r\n                        \r\n                        \r\n                            <td style=\"width:120px;\">\r\n                                <p><strong>Additional Features</strong></p>\r\n\r\n                            </td>\r\n                        \r\n                    \r\n                \r\n                    \r\n                        \r\n                        \r\n                        \r\n                            <td>\r\n                                <p>LTE and UTMS, Built-in GPS/GNSS/GLONASS/BeiDou, S8 with 64-bit dual-core processor, W3 Apple wireless chip, U1 chip (Ultra Wideband), Always-on altimeter, Capacity 32GB, Blood oxygen sensor, Third-generation optical heart sensor, Electrical heart sensor, Certified IP6X dust resistant, High-g accelerometer, High-dynamic-range gyroscope, Ambient light sensor, Always-On Retina LTPO OLED display with Force Touch (1000 nits), Digital Crown with haptic feedback, Second-generation speaker and mic, Aluminum models have Ion-X front glass, Stainless steel and titanium models have sapphire front crystals, Sapphire crystal and ceramic back, Wi-Fi 802.11b/g/n 2.4GHz, Bluetooth 5.0, Built-in rechargeable lithium-ion battery, Up to 18 hours of battery life, Water resistant 50 meters, Swimproof</p>\r\n\r\n                            </td>\r\n                        \r\n                    \r\n                \r\n            </tr>\r\n        \r\n    </tbody></table>', 32900, 29400, 12, 0, 0, NULL, NULL, NULL, '2023-03-16 07:23:34', '2023-03-16 07:23:34'),
(7, 5, 2, 'Samsung Smart LED TV', 'samsung-smart-led-tv', 'Samsung 108 cm (43 inches) Crystal 4K Series Ultra HD Smart LED TV UA43AUE60AKLXL (Black)', '<table id=\"productDetails_techSpec_section_1\" class=\"a-keyvalue prodDetTable\" role=\"presentation\">     <tbody><tr>  <th class=\"a-color-secondary a-size-base prodDetSectionEntry\"> Brand </th>   <td class=\"a-size-base prodDetAttrValue\">\r\n                &lrm;Samsung </td>  </tr>    <tr>  <th class=\"a-color-secondary a-size-base prodDetSectionEntry\"> Manufacturer </th>   <td class=\"a-size-base prodDetAttrValue\">\r\n                &lrm;Samsung India Pvt Ltd, Samsung India Pvt Ltd, 180040 7267864 , 1800 5 7267864 </td>  </tr>    <tr>  <th class=\"a-color-secondary a-size-base prodDetSectionEntry\"> Model </th>   <td class=\"a-size-base prodDetAttrValue\">\r\n                &lrm;UA43AUE60AKLXL </td>  </tr>    <tr>  <th class=\"a-color-secondary a-size-base prodDetSectionEntry\"> Model Name </th>   <td class=\"a-size-base prodDetAttrValue\">\r\n                &lrm;UA43AUE60AKLXL </td>  </tr>    <tr>  <th class=\"a-color-secondary a-size-base prodDetSectionEntry\"> Model Year </th>   <td class=\"a-size-base prodDetAttrValue\">\r\n                &lrm;2021 </td>  </tr>    <tr>  <th class=\"a-color-secondary a-size-base prodDetSectionEntry\"> Product Dimensions </th>   <td class=\"a-size-base prodDetAttrValue\">\r\n                &lrm;19.3 x 96.4 x 62.8 cm; 8.3 Kilograms </td>  </tr>    <tr>  <th class=\"a-color-secondary a-size-base prodDetSectionEntry\"> Item model number </th>   <td class=\"a-size-base prodDetAttrValue\">\r\n                &lrm;UA43AUE60AKLXL </td>  </tr>    <tr>  <th class=\"a-color-secondary a-size-base prodDetSectionEntry\"> Memory Storage Capacity </th>   <td class=\"a-size-base prodDetAttrValue\">\r\n                &lrm;8 GB </td>  </tr>    <tr>  <th class=\"a-color-secondary a-size-base prodDetSectionEntry\"> Ram Memory Installed Size </th>   <td class=\"a-size-base prodDetAttrValue\">\r\n                &lrm;1.5 GB </td>  </tr>    <tr>  <th class=\"a-color-secondary a-size-base prodDetSectionEntry\"> Operating System </th>   <td class=\"a-size-base prodDetAttrValue\">\r\n                &lrm;Tizen </td>  </tr>    <tr>  <th class=\"a-color-secondary a-size-base prodDetSectionEntry\"> Hardware Interface </th>   <td class=\"a-size-base prodDetAttrValue\">\r\n                &lrm;USB, HDMI </td>  </tr>    <tr>  <th class=\"a-color-secondary a-size-base prodDetSectionEntry\"> Graphics Coprocessor </th>   <td class=\"a-size-base prodDetAttrValue\">\r\n                &lrm;Pur Color </td>  </tr>    <tr>  <th class=\"a-color-secondary a-size-base prodDetSectionEntry\"> Tuner Technology </th>   <td class=\"a-size-base prodDetAttrValue\">\r\n                &lrm;DVB-T2 </td>  </tr>    <tr>  <th class=\"a-color-secondary a-size-base prodDetSectionEntry\"> Resolution </th>   <td class=\"a-size-base prodDetAttrValue\">\r\n                &lrm;4K </td>  </tr>    <tr>  <th class=\"a-color-secondary a-size-base prodDetSectionEntry\"> Special Features </th>   <td class=\"a-size-base prodDetAttrValue\">\r\n                &lrm;Smart Remote | Universal Guide | PC Mode | Screen Mirroring | Tap View | Crystal Processor 4K | Tizen | Supported Applications : Netflix, Amazon Prime, Sony Liv, Zee5, Youtube </td>  </tr>    <tr>  <th class=\"a-color-secondary a-size-base prodDetSectionEntry\"> Mounting Hardware </th>   <td class=\"a-size-base prodDetAttrValue\">\r\n                &lrm;1 LED TV, 2 Table Stand Base, 1 User Manual, 1 Warranty Card, 1 Remote Control </td>  </tr>    <tr>  <th class=\"a-color-secondary a-size-base prodDetSectionEntry\"> Number of items </th>   <td class=\"a-size-base prodDetAttrValue\">\r\n                &lrm;1 </td>  </tr>    <tr>  <th class=\"a-color-secondary a-size-base prodDetSectionEntry\"> Remote Control Description </th>   <td class=\"a-size-base prodDetAttrValue\">\r\n                &lrm;Smart Remote with Hot Keys | Netflix, Prime and Samsung TV Plus </td>  </tr>    <tr>  <th class=\"a-color-secondary a-size-base prodDetSectionEntry\"> 	Remote control technology </th>   <td class=\"a-size-base prodDetAttrValue\">\r\n                &lrm;Bluetooth </td>  </tr>    <tr>  <th class=\"a-color-secondary a-size-base prodDetSectionEntry\"> Display Technology </th>   <td class=\"a-size-base prodDetAttrValue\">\r\n                &lrm;LED </td>  </tr>    <tr>  <th class=\"a-color-secondary a-size-base prodDetSectionEntry\"> Standing screen display size </th>   <td class=\"a-size-base prodDetAttrValue\">\r\n                &lrm;43 Inches </td>  </tr>    <tr>  <th class=\"a-color-secondary a-size-base prodDetSectionEntry\"> Display Type </th>   <td class=\"a-size-base prodDetAttrValue\">\r\n                &lrm;HDR10+ </td>  </tr>    <tr>  <th class=\"a-color-secondary a-size-base prodDetSectionEntry\"> Viewing Angle </th>   <td class=\"a-size-base prodDetAttrValue\">\r\n                &lrm;178 Degrees </td>  </tr>    <tr>  <th class=\"a-color-secondary a-size-base prodDetSectionEntry\"> Image Aspect Ratio </th>   <td class=\"a-size-base prodDetAttrValue\">\r\n                &lrm;16:09 </td>  </tr>    <tr>  <th class=\"a-color-secondary a-size-base prodDetSectionEntry\"> Image brightness </th>   <td class=\"a-size-base prodDetAttrValue\">\r\n                &lrm;Mega Contrast </td>  </tr>    <tr>  <th class=\"a-color-secondary a-size-base prodDetSectionEntry\"> Supported image types </th>   <td class=\"a-size-base prodDetAttrValue\">\r\n                &lrm;JPEG </td>  </tr>    <tr>  <th class=\"a-color-secondary a-size-base prodDetSectionEntry\"> Screen Resolution </th>   <td class=\"a-size-base prodDetAttrValue\">\r\n                &lrm;3840 x 2160 pixels </td>  </tr>    <tr>  <th class=\"a-color-secondary a-size-base prodDetSectionEntry\"> Resolution </th>   <td class=\"a-size-base prodDetAttrValue\">\r\n                &lrm;3840x2160 Pixels </td>  </tr>    <tr>  <th class=\"a-color-secondary a-size-base prodDetSectionEntry\"> Audio output mode </th>   <td class=\"a-size-base prodDetAttrValue\">\r\n                &lrm;Surround </td>  </tr>    <tr>  <th class=\"a-color-secondary a-size-base prodDetSectionEntry\"> Supported audio formats </th>   <td class=\"a-size-base prodDetAttrValue\">\r\n                &lrm;Mp3_audio, Wma </td>  </tr>    <tr>  <th class=\"a-color-secondary a-size-base prodDetSectionEntry\"> Speaker Surround Sound Channel Configuration </th>   <td class=\"a-size-base prodDetAttrValue\">\r\n                &lrm;Dolby Digital Plus </td>  </tr>    <tr>  <th class=\"a-color-secondary a-size-base prodDetSectionEntry\"> Audio Wattage </th>   <td class=\"a-size-base prodDetAttrValue\">\r\n                &lrm;20 Watts </td>  </tr>    <tr>  <th class=\"a-color-secondary a-size-base prodDetSectionEntry\"> Wattage </th>   <td class=\"a-size-base prodDetAttrValue\">\r\n                &lrm;20.00 </td>  </tr>    <tr>  <th class=\"a-color-secondary a-size-base prodDetSectionEntry\"> Power Source </th>   <td class=\"a-size-base prodDetAttrValue\">\r\n                &lrm;AC </td>  </tr>    <tr>  <th class=\"a-color-secondary a-size-base prodDetSectionEntry\"> Batteries Required </th>   <td class=\"a-size-base prodDetAttrValue\">\r\n                &lrm;No </td>  </tr>    <tr>  <th class=\"a-color-secondary a-size-base prodDetSectionEntry\"> Refresh Rate	 </th>   <td class=\"a-size-base prodDetAttrValue\">\r\n                &lrm;60 Hz </td>  </tr>    <tr>  <th class=\"a-color-secondary a-size-base prodDetSectionEntry\"> Total USB ports </th>   <td class=\"a-size-base prodDetAttrValue\">\r\n                &lrm;1 </td>  </tr>    <tr>  <th class=\"a-color-secondary a-size-base prodDetSectionEntry\"> Connector Type </th>   <td class=\"a-size-base prodDetAttrValue\">\r\n                &lrm;Wi-Fi, USB, Ethernet, HDMI </td>  </tr>    <tr>  <th class=\"a-color-secondary a-size-base prodDetSectionEntry\"> Maximum Operating Distance </th>   <td class=\"a-size-base prodDetAttrValue\">\r\n                &lrm;9 Feet </td>  </tr>    <tr>  <th class=\"a-color-secondary a-size-base prodDetSectionEntry\"> Mounting Type	 </th>   <td class=\"a-size-base prodDetAttrValue\">\r\n                &lrm;Wall Mount &amp; Table Mount </td>  </tr>    <tr>  <th class=\"a-color-secondary a-size-base prodDetSectionEntry\"> Media Format </th>   <td class=\"a-size-base prodDetAttrValue\">\r\n                &lrm;AVI </td>  </tr>    <tr>  <th class=\"a-color-secondary a-size-base prodDetSectionEntry\"> Includes remote </th>   <td class=\"a-size-base prodDetAttrValue\">\r\n                &lrm;Yes </td>  </tr>    <tr>  <th class=\"a-color-secondary a-size-base prodDetSectionEntry\"> Supports Bluetooth Technology </th>   <td class=\"a-size-base prodDetAttrValue\">\r\n                &lrm;Yes </td>  </tr>    <tr>  <th class=\"a-color-secondary a-size-base prodDetSectionEntry\"> Manufacturer </th>   <td class=\"a-size-base prodDetAttrValue\">\r\n                &lrm;Samsung India Pvt Ltd </td>  </tr>    <tr>  <th class=\"a-color-secondary a-size-base prodDetSectionEntry\"> Country of Origin </th>   <td class=\"a-size-base prodDetAttrValue\">\r\n                &lrm;India </td>  </tr>    <tr>  <th class=\"a-color-secondary a-size-base prodDetSectionEntry\"> Item Weight </th>   <td class=\"a-size-base prodDetAttrValue\">\r\n                &lrm;8 kg 300 g </td>  </tr>    </tbody></table>', 52900, 38990, 8, 1, 0, NULL, NULL, NULL, '2023-03-16 07:27:53', '2023-03-16 07:27:53');
INSERT INTO `products` (`id`, `category_id`, `brand_id`, `name`, `slug`, `small_description`, `description`, `orignal_price`, `selling_price`, `quantity`, `trending`, `status`, `meta_title`, `meta_keyword`, `meta_description`, `created_at`, `updated_at`) VALUES
(8, 2, 1, 'Asus Zenfone Max Pro M1', 'asus-zenfone-max-pro-m1', 'Asus Zenfone Max Pro M1 (Black, 3GB RAM, 32GB Storage)', '<table id=\"productDetails_techSpec_section_1\" class=\"a-keyvalue prodDetTable\" role=\"presentation\">     <tbody><tr>  <th class=\"a-color-secondary a-size-base prodDetSectionEntry\">  OS  </th>   <td class=\"a-size-base prodDetAttrValue\">\r\n                &lrm;Android 8.1 </td>  </tr>    <tr>  <th class=\"a-color-secondary a-size-base prodDetSectionEntry\">  RAM  </th>   <td class=\"a-size-base prodDetAttrValue\">\r\n                &lrm;3 GB </td>  </tr>    <tr>  <th class=\"a-color-secondary a-size-base prodDetSectionEntry\"> Product Dimensions </th>   <td class=\"a-size-base prodDetAttrValue\">\r\n                &lrm;15.9 x 0.8 x 7.6 cm; 180 Grams </td>  </tr>    <tr>  <th class=\"a-color-secondary a-size-base prodDetSectionEntry\"> Batteries </th>   <td class=\"a-size-base prodDetAttrValue\">\r\n                &lrm;1 A batteries required. (included) </td>  </tr>    <tr>  <th class=\"a-color-secondary a-size-base prodDetSectionEntry\"> Item model number </th>   <td class=\"a-size-base prodDetAttrValue\">\r\n                &lrm;Zenfone Max Pro M1 </td>  </tr>    <tr>  <th class=\"a-color-secondary a-size-base prodDetSectionEntry\">  Wireless communication technologies  </th>   <td class=\"a-size-base prodDetAttrValue\">\r\n                &lrm;Bluetooth, Wi-Fi </td>  </tr>    <tr>  <th class=\"a-color-secondary a-size-base prodDetSectionEntry\">  Connectivity technologies  </th>   <td class=\"a-size-base prodDetAttrValue\">\r\n                &lrm;LTE;TDD;FDD;WCDMA;GPRS;GSM;4G;VOLTE;3G;2G </td>  </tr>    <tr>  <th class=\"a-color-secondary a-size-base prodDetSectionEntry\">  Special features  </th>   <td class=\"a-size-base prodDetAttrValue\">\r\n                &lrm;Accelerometer sensor, Dual SIM, Gyroscope sensor, Rear fingerprint sensor, Ambient light sensor, GPS, E-Compass, Video Player, Music Player, Proximity sensor </td>  </tr>    <tr>  <th class=\"a-color-secondary a-size-base prodDetSectionEntry\">  Other display features  </th>   <td class=\"a-size-base prodDetAttrValue\">\r\n                &lrm;Wireless </td>  </tr>    <tr>  <th class=\"a-color-secondary a-size-base prodDetSectionEntry\">  Device interface - primary  </th>   <td class=\"a-size-base prodDetAttrValue\">\r\n                &lrm;Touchscreen </td>  </tr>    <tr>  <th class=\"a-color-secondary a-size-base prodDetSectionEntry\">  Other camera features  </th>   <td class=\"a-size-base prodDetAttrValue\">\r\n                &lrm;16MP </td>  </tr>    <tr>  <th class=\"a-color-secondary a-size-base prodDetSectionEntry\">  Form factor </th>   <td class=\"a-size-base prodDetAttrValue\">\r\n                &lrm;Touchscreen Phone </td>  </tr>    <tr>  <th class=\"a-color-secondary a-size-base prodDetSectionEntry\">  Colour  </th>   <td class=\"a-size-base prodDetAttrValue\">\r\n                &lrm;Black </td>  </tr>    <tr>  <th class=\"a-color-secondary a-size-base prodDetSectionEntry\">  Battery Power Rating  </th>   <td class=\"a-size-base prodDetAttrValue\">\r\n                &lrm;5000 </td>  </tr>    <tr>  <th class=\"a-color-secondary a-size-base prodDetSectionEntry\">  Whats in the box  </th>   <td class=\"a-size-base prodDetAttrValue\">\r\n                &lrm;Handset, Micro-USB Cable, Ejector Pin (SIM Tray Needle), USB Power Adapter and Documentation (User Guide, Warranty Card) </td>  </tr>    <tr>  <th class=\"a-color-secondary a-size-base prodDetSectionEntry\"> Manufacturer </th>   <td class=\"a-size-base prodDetAttrValue\">\r\n                &lrm;Asus </td>  </tr>    <tr>  <th class=\"a-color-secondary a-size-base prodDetSectionEntry\"> Country of Origin </th>   <td class=\"a-size-base prodDetAttrValue\">\r\n                &lrm;India </td>  </tr>    <tr>  <th class=\"a-color-secondary a-size-base prodDetSectionEntry\"> Item Weight </th>   <td class=\"a-size-base prodDetAttrValue\">\r\n                &lrm;180 g </td>  </tr>    </tbody></table>', 13199, 8499, 55, 0, 0, NULL, NULL, NULL, '2023-03-16 07:30:57', '2023-03-16 07:30:57'),
(9, 2, 1, 'ASUS ROG Phone 2', 'asus-rog-phone-2', 'ASUS ROG Phone 2 (ZS660KL) Smartphone 8GB RAM 128GB ROM Snapdragon 855 Plus 6000 mAh (Black)', '<table id=\"productDetails_techSpec_section_1\" class=\"a-keyvalue prodDetTable\" role=\"presentation\">     <tbody><tr>  <th class=\"a-color-secondary a-size-base prodDetSectionEntry\">  OS  </th>   <td class=\"a-size-base prodDetAttrValue\">\r\n                &lrm;Android 10.0 </td>  </tr>    <tr>  <th class=\"a-color-secondary a-size-base prodDetSectionEntry\">  RAM  </th>   <td class=\"a-size-base prodDetAttrValue\">\r\n                &lrm;8 GB </td>  </tr>    <tr>  <th class=\"a-color-secondary a-size-base prodDetSectionEntry\"> Package Dimensions </th>   <td class=\"a-size-base prodDetAttrValue\">\r\n                &lrm;19 x 9.6 x 6.7 cm; 560 Grams </td>  </tr>    <tr>  <th class=\"a-color-secondary a-size-base prodDetSectionEntry\">  Wireless communication technologies  </th>   <td class=\"a-size-base prodDetAttrValue\">\r\n                &lrm;Cellular </td>  </tr>    <tr>  <th class=\"a-color-secondary a-size-base prodDetSectionEntry\">  Connectivity technologies  </th>   <td class=\"a-size-base prodDetAttrValue\">\r\n                &lrm;Cellular </td>  </tr>    <tr>  <th class=\"a-color-secondary a-size-base prodDetSectionEntry\">  GPS  </th>   <td class=\"a-size-base prodDetAttrValue\">\r\n                &lrm;AGPS </td>  </tr>    <tr>  <th class=\"a-color-secondary a-size-base prodDetSectionEntry\">  Special features  </th>   <td class=\"a-size-base prodDetAttrValue\">\r\n                &lrm;Dual_Sim, Gorilla Glass </td>  </tr>    <tr>  <th class=\"a-color-secondary a-size-base prodDetSectionEntry\">  Display technology  </th>   <td class=\"a-size-base prodDetAttrValue\">\r\n                &lrm;AMOLED </td>  </tr>    <tr>  <th class=\"a-color-secondary a-size-base prodDetSectionEntry\">  Other display features  </th>   <td class=\"a-size-base prodDetAttrValue\">\r\n                &lrm;Wireless </td>  </tr>    <tr>  <th class=\"a-color-secondary a-size-base prodDetSectionEntry\">  Form factor </th>   <td class=\"a-size-base prodDetAttrValue\">\r\n                &lrm;Solid </td>  </tr>    <tr>  <th class=\"a-color-secondary a-size-base prodDetSectionEntry\">  Colour  </th>   <td class=\"a-size-base prodDetAttrValue\">\r\n                &lrm;Black </td>  </tr>    <tr>  <th class=\"a-color-secondary a-size-base prodDetSectionEntry\">  Battery Power Rating  </th>   <td class=\"a-size-base prodDetAttrValue\">\r\n                &lrm;6000 Milliamp Hours </td>  </tr>    <tr>  <th class=\"a-color-secondary a-size-base prodDetSectionEntry\">  Whats in the box  </th>   <td class=\"a-size-base prodDetAttrValue\">\r\n                &lrm;1 Mobile Handset, Charger and data cable </td>  </tr>    <tr>  <th class=\"a-color-secondary a-size-base prodDetSectionEntry\"> Manufacturer </th>   <td class=\"a-size-base prodDetAttrValue\">\r\n                &lrm;ASUS India </td>  </tr>    <tr>  <th class=\"a-color-secondary a-size-base prodDetSectionEntry\"> Country of Origin </th>   <td class=\"a-size-base prodDetAttrValue\">\r\n                &lrm;Taiwan </td>  </tr>    <tr>  <th class=\"a-color-secondary a-size-base prodDetSectionEntry\"> Item Weight </th>   <td class=\"a-size-base prodDetAttrValue\">\r\n                &lrm;560 g </td>  </tr>    </tbody></table>', 39999, 21999, 15, 1, 0, NULL, NULL, NULL, '2023-03-16 07:54:33', '2023-03-16 07:54:33'),
(10, 2, 4, 'Samsung Galaxy M13', 'samsung-galaxy-m13', 'Samsung Galaxy M13 (Aqua Green, 6GB, 128GB Storage) | 6000mAh Battery | Upto 12GB RAM with RAM Plus', '<table id=\"productDetails_techSpec_section_1\" class=\"a-keyvalue prodDetTable\" role=\"presentation\">     <tbody><tr>  <th class=\"a-color-secondary a-size-base prodDetSectionEntry\">  OS  </th>   <td class=\"a-size-base prodDetAttrValue\">\r\n                &lrm;Android 12.0 </td>  </tr>    <tr>  <th class=\"a-color-secondary a-size-base prodDetSectionEntry\">  RAM  </th>   <td class=\"a-size-base prodDetAttrValue\">\r\n                &lrm;6 GB </td>  </tr>    <tr>  <th class=\"a-color-secondary a-size-base prodDetSectionEntry\"> Product Dimensions </th>   <td class=\"a-size-base prodDetAttrValue\">\r\n                &lrm;0.9 x 7.7 x 16.5 cm; 207 Grams </td>  </tr>    <tr>  <th class=\"a-color-secondary a-size-base prodDetSectionEntry\"> Batteries </th>   <td class=\"a-size-base prodDetAttrValue\">\r\n                &lrm;1 Lithium Ion batteries required. (included) </td>  </tr>    <tr>  <th class=\"a-color-secondary a-size-base prodDetSectionEntry\"> Item model number </th>   <td class=\"a-size-base prodDetAttrValue\">\r\n                &lrm;SM-M135FLGQINS </td>  </tr>    <tr>  <th class=\"a-color-secondary a-size-base prodDetSectionEntry\">  Wireless communication technologies  </th>   <td class=\"a-size-base prodDetAttrValue\">\r\n                &lrm;Bluetooth, Wi-Fi </td>  </tr>    <tr>  <th class=\"a-color-secondary a-size-base prodDetSectionEntry\">  Connectivity technologies  </th>   <td class=\"a-size-base prodDetAttrValue\">\r\n                &lrm;Bluetooth, Wi-Fi, USB </td>  </tr>    <tr>  <th class=\"a-color-secondary a-size-base prodDetSectionEntry\">  GPS  </th>   <td class=\"a-size-base prodDetAttrValue\">\r\n                &lrm;GPS,Glonass,Beidou,Galileo </td>  </tr>    <tr>  <th class=\"a-color-secondary a-size-base prodDetSectionEntry\">  Special features  </th>   <td class=\"a-size-base prodDetAttrValue\">\r\n                &lrm;Auto Data Switching, Upto 12GB RAM with RAM Plus, Octa Core Processor, Fingerprint Sensor </td>  </tr>    <tr>  <th class=\"a-color-secondary a-size-base prodDetSectionEntry\">  Colours displayed  </th>   <td class=\"a-size-base prodDetAttrValue\">\r\n                &lrm;401 PPI with 16M Color </td>  </tr>    <tr>  <th class=\"a-color-secondary a-size-base prodDetSectionEntry\">  Other display features  </th>   <td class=\"a-size-base prodDetAttrValue\">\r\n                &lrm;Wireless </td>  </tr>    <tr>  <th class=\"a-color-secondary a-size-base prodDetSectionEntry\">  Other camera features  </th>   <td class=\"a-size-base prodDetAttrValue\">\r\n                &lrm;Triple Camera (50MP+5MP+2MP) | 8MP Front Camera </td>  </tr>    <tr>  <th class=\"a-color-secondary a-size-base prodDetSectionEntry\">  Audio Jack  </th>   <td class=\"a-size-base prodDetAttrValue\">\r\n                &lrm;3.5 mm </td>  </tr>    <tr>  <th class=\"a-color-secondary a-size-base prodDetSectionEntry\">  Colour  </th>   <td class=\"a-size-base prodDetAttrValue\">\r\n                &lrm;Light Green </td>  </tr>    <tr>  <th class=\"a-color-secondary a-size-base prodDetSectionEntry\">  Battery Power Rating  </th>   <td class=\"a-size-base prodDetAttrValue\">\r\n                &lrm;6000 </td>  </tr>    <tr>  <th class=\"a-color-secondary a-size-base prodDetSectionEntry\">  Whats in the box  </th>   <td class=\"a-size-base prodDetAttrValue\">\r\n                &lrm;Handset,Sim Ejection Pin, User Guide,Adapter, Type A to C Cable </td>  </tr>    <tr>  <th class=\"a-color-secondary a-size-base prodDetSectionEntry\"> Manufacturer </th>   <td class=\"a-size-base prodDetAttrValue\">\r\n                &lrm;Samsung </td>  </tr>    <tr>  <th class=\"a-color-secondary a-size-base prodDetSectionEntry\"> Country of Origin </th>   <td class=\"a-size-base prodDetAttrValue\">\r\n                &lrm;India </td>  </tr>    <tr>  <th class=\"a-color-secondary a-size-base prodDetSectionEntry\"> Item Weight </th>   <td class=\"a-size-base prodDetAttrValue\">\r\n                &lrm;207 g </td>  </tr>    </tbody></table>', 17999, 12999, 25, 0, 0, NULL, NULL, NULL, '2023-03-16 07:58:15', '2023-03-16 07:58:15'),
(11, 9, 6, 'Lenovo Tab M10', 'lenovo-tab-m10', 'Lenovo Tab M10 FHD Plus (3rd Gen) (10.61 inch (26.94 cm), 6 GB, 128 GB, Wi-Fi+LTE, Calling), Storm Grey with Qualcomm Snapdragon Processor, 7700 mAH Battery and Quad Speakers with Dolby Atmos', '<table id=\"productDetails_techSpec_section_1\" class=\"a-keyvalue prodDetTable\" role=\"presentation\">     <tbody><tr>  <th class=\"a-color-secondary a-size-base prodDetSectionEntry\"> Brand </th>   <td class=\"a-size-base prodDetAttrValue\">\r\n                &lrm;Lenovo </td>  </tr>    <tr>  <th class=\"a-color-secondary a-size-base prodDetSectionEntry\"> Manufacturer </th>   <td class=\"a-size-base prodDetAttrValue\">\r\n                &lrm;Lenovo, MOTOROLA (WUHAN) MOBILITY TECHNOLOGIES COMMUNICATION CO. LTD. 19 GAOXIN 4TH RD, EAST LAKE HIGH TECH ZONE, WUHAN HUBEI CHINA </td>  </tr>    <tr>  <th class=\"a-color-secondary a-size-base prodDetSectionEntry\"> Model </th>   <td class=\"a-size-base prodDetAttrValue\">\r\n                &lrm;ZAAN0193IN </td>  </tr>    <tr>  <th class=\"a-color-secondary a-size-base prodDetSectionEntry\"> Model Name </th>   <td class=\"a-size-base prodDetAttrValue\">\r\n                &lrm;Lenovo Tab M10 </td>  </tr>    <tr>  <th class=\"a-color-secondary a-size-base prodDetSectionEntry\"> Model Year </th>   <td class=\"a-size-base prodDetAttrValue\">\r\n                &lrm;2022 </td>  </tr>    <tr>  <th class=\"a-color-secondary a-size-base prodDetSectionEntry\"> Product Dimensions </th>   <td class=\"a-size-base prodDetAttrValue\">\r\n                &lrm;25.1 x 15.9 x 0.7 cm; 465 Grams </td>  </tr>    <tr>  <th class=\"a-color-secondary a-size-base prodDetSectionEntry\"> Batteries </th>   <td class=\"a-size-base prodDetAttrValue\">\r\n                &lrm;1 Lithium Polymer batteries required. (included) </td>  </tr>    <tr>  <th class=\"a-color-secondary a-size-base prodDetSectionEntry\"> Item model number </th>   <td class=\"a-size-base prodDetAttrValue\">\r\n                &lrm;ZAAN0193IN </td>  </tr>    <tr>  <th class=\"a-color-secondary a-size-base prodDetSectionEntry\"> RAM Size </th>   <td class=\"a-size-base prodDetAttrValue\">\r\n                &lrm;6 GB </td>  </tr>    <tr>  <th class=\"a-color-secondary a-size-base prodDetSectionEntry\"> Memory Slots Available </th>   <td class=\"a-size-base prodDetAttrValue\">\r\n                &lrm;1 </td>  </tr>    <tr>  <th class=\"a-color-secondary a-size-base prodDetSectionEntry\"> Flash Memory Installed Size </th>   <td class=\"a-size-base prodDetAttrValue\">\r\n                &lrm;128 GB </td>  </tr>    <tr>  <th class=\"a-color-secondary a-size-base prodDetSectionEntry\"> Ram Memory Installed Size </th>   <td class=\"a-size-base prodDetAttrValue\">\r\n                &lrm;6 GB </td>  </tr>    <tr>  <th class=\"a-color-secondary a-size-base prodDetSectionEntry\"> Operating System </th>   <td class=\"a-size-base prodDetAttrValue\">\r\n                &lrm;Android 12 </td>  </tr>    <tr>  <th class=\"a-color-secondary a-size-base prodDetSectionEntry\"> Processor Brand </th>   <td class=\"a-size-base prodDetAttrValue\">\r\n                &lrm;Qualcomm </td>  </tr>    <tr>  <th class=\"a-color-secondary a-size-base prodDetSectionEntry\"> Hardware Interface </th>   <td class=\"a-size-base prodDetAttrValue\">\r\n                &lrm;USB </td>  </tr>    <tr>  <th class=\"a-color-secondary a-size-base prodDetSectionEntry\"> Graphics Card Description </th>   <td class=\"a-size-base prodDetAttrValue\">\r\n                &lrm;Integrated </td>  </tr>    <tr>  <th class=\"a-color-secondary a-size-base prodDetSectionEntry\"> Graphics Coprocessor </th>   <td class=\"a-size-base prodDetAttrValue\">\r\n                &lrm;Qualcomm Adreno 610 GPU </td>  </tr>    <tr>  <th class=\"a-color-secondary a-size-base prodDetSectionEntry\"> Resolution </th>   <td class=\"a-size-base prodDetAttrValue\">\r\n                &lrm;FHD - 1.78:1 - 16:9 </td>  </tr>    <tr>  <th class=\"a-color-secondary a-size-base prodDetSectionEntry\"> Mounting Hardware </th>   <td class=\"a-size-base prodDetAttrValue\">\r\n                &lrm;Lenovo Tab M10 FHD Plus, Sim Tray PIN , USB </td>  </tr>    <tr>  <th class=\"a-color-secondary a-size-base prodDetSectionEntry\"> Number of items </th>   <td class=\"a-size-base prodDetAttrValue\">\r\n                &lrm;1 </td>  </tr>    <tr>  <th class=\"a-color-secondary a-size-base prodDetSectionEntry\"> Standing screen display size </th>   <td class=\"a-size-base prodDetAttrValue\">\r\n                &lrm;10.61 Inches </td>  </tr>    <tr>  <th class=\"a-color-secondary a-size-base prodDetSectionEntry\"> Display Type </th>   <td class=\"a-size-base prodDetAttrValue\">\r\n                &lrm;LCD </td>  </tr>    <tr>  <th class=\"a-color-secondary a-size-base prodDetSectionEntry\"> Aspect Ratio </th>   <td class=\"a-size-base prodDetAttrValue\">\r\n                &lrm;16:10 </td>  </tr>    <tr>  <th class=\"a-color-secondary a-size-base prodDetSectionEntry\"> Screen Resolution </th>   <td class=\"a-size-base prodDetAttrValue\">\r\n                &lrm;2000 x 1200 </td>  </tr>    <tr>  <th class=\"a-color-secondary a-size-base prodDetSectionEntry\"> Resolution </th>   <td class=\"a-size-base prodDetAttrValue\">\r\n                &lrm;2000 x 1200 </td>  </tr>    <tr>  <th class=\"a-color-secondary a-size-base prodDetSectionEntry\"> Batteries Included </th>   <td class=\"a-size-base prodDetAttrValue\">\r\n                &lrm;Yes </td>  </tr>    <tr>  <th class=\"a-color-secondary a-size-base prodDetSectionEntry\"> Batteries Required </th>   <td class=\"a-size-base prodDetAttrValue\">\r\n                &lrm;Yes </td>  </tr>    <tr>  <th class=\"a-color-secondary a-size-base prodDetSectionEntry\"> Battery cell composition </th>   <td class=\"a-size-base prodDetAttrValue\">\r\n                &lrm;Lithium Ion </td>  </tr>    <tr>  <th class=\"a-color-secondary a-size-base prodDetSectionEntry\"> Cellular technology </th>   <td class=\"a-size-base prodDetAttrValue\">\r\n                &lrm;4G </td>  </tr>    <tr>  <th class=\"a-color-secondary a-size-base prodDetSectionEntry\"> Total USB ports </th>   <td class=\"a-size-base prodDetAttrValue\">\r\n                &lrm;1 </td>  </tr>    <tr>  <th class=\"a-color-secondary a-size-base prodDetSectionEntry\"> Connector Type </th>   <td class=\"a-size-base prodDetAttrValue\">\r\n                &lrm;Wi-Fi </td>  </tr>    <tr>  <th class=\"a-color-secondary a-size-base prodDetSectionEntry\">  Device interface - primary  </th>   <td class=\"a-size-base prodDetAttrValue\">\r\n                &lrm;Touchscreen </td>  </tr>    <tr>  <th class=\"a-color-secondary a-size-base prodDetSectionEntry\"> Manufacturer </th>   <td class=\"a-size-base prodDetAttrValue\">\r\n                &lrm;Lenovo </td>  </tr>    <tr>  <th class=\"a-color-secondary a-size-base prodDetSectionEntry\"> Country of Origin </th>   <td class=\"a-size-base prodDetAttrValue\">\r\n                &lrm;China </td>  </tr>    <tr>  <th class=\"a-color-secondary a-size-base prodDetSectionEntry\"> Item Weight </th>   <td class=\"a-size-base prodDetAttrValue\">\r\n                &lrm;465 g </td>  </tr>    </tbody></table>', 34000, 19999, 15, 0, 0, NULL, NULL, NULL, '2023-03-16 08:02:50', '2023-03-16 08:02:50'),
(12, 1, 3, 'Apple 2023 MacBook Pro', 'apple-2023-macbook-pro', 'Apple 2023 MacBook Pro Laptop M2 Pro chip with 12‑core CPU and 19‑core GPU: 33.74 cm (16.2-inch), 16GB Unified Memory, 1TB SSD Storage. Works with iPhone/iPad; Space Grey', '<table class=\"a-bordered\">\r\n        \r\n            <tbody><tr>\r\n                \r\n                    \r\n                        \r\n                        \r\n                        \r\n                            <td style=\"width:120px;\">\r\n                                <p><strong>Display</strong></p>\r\n\r\n                            </td>\r\n                        \r\n                    \r\n                \r\n                    \r\n                        \r\n                        \r\n                        \r\n                            <td>\r\n                                <p>16.2-inch (diagonal) mini-LED backlit Liquid Retina XDR display, 3456 by 2234 pixels with ProMotion technology for adaptive refresh rates up to 120Hz, and up to 1000 nits sustained (full-screen) brightness, 1600 nits peak brightness, True Tone technology, ProMotion technology for adaptive refresh rates up to 120Hz</p>\r\n\r\n                            </td>\r\n                        \r\n                    \r\n                \r\n            </tr>\r\n        \r\n            <tr>\r\n                \r\n                    \r\n                        \r\n                        \r\n                        \r\n                            <td style=\"width:120px;\">\r\n                                <p><strong>Processor</strong></p>\r\n\r\n                            </td>\r\n                        \r\n                    \r\n                \r\n                    \r\n                        \r\n                        \r\n                        \r\n                            <td>\r\n                                <p>System on Chip (SoC) Apple M2 Pro or M2 Max chip 12-core CPU with 8 performance cores and 4 efficiency cores Up to 38-core GPU 16-core Neural Engine Up to 400GB/s memory bandwidth</p>\r\n\r\n                            </td>\r\n                        \r\n                    \r\n                \r\n            </tr>\r\n        \r\n            <tr>\r\n                \r\n                    \r\n                        \r\n                        \r\n                        \r\n                            <td style=\"width:120px;\">\r\n                                <p><strong>Graphics and Video Support</strong></p>\r\n\r\n                            </td>\r\n                        \r\n                    \r\n                \r\n                    \r\n                        \r\n                        \r\n                        \r\n                            <td>\r\n                                <p>Apple 19-core GPU or Apple 38-core GPU</p>\r\n\r\n                            </td>\r\n                        \r\n                    \r\n                \r\n            </tr>\r\n        \r\n            <tr>\r\n                \r\n                    \r\n                        \r\n                        \r\n                        \r\n                            <td style=\"width:120px;\">\r\n                                <p><strong>Charging and Expansion</strong></p>\r\n\r\n                            </td>\r\n                        \r\n                    \r\n                \r\n                    \r\n                        \r\n                        \r\n                        \r\n                            <td>\r\n                                <p>Three Thunderbolt 4 (USB-C) ports with support for: Charging, DisplayPort, Thunderbolt 4 (up to 40Gb/s), USB 4 (up to 40Gb/s); SDXC card slot, HDMI port, 3.5 mm headphone jack, MagSafe 3 port</p>\r\n\r\n                            </td>\r\n                        \r\n                    \r\n                \r\n            </tr>\r\n        \r\n            <tr>\r\n                \r\n                    \r\n                        \r\n                        \r\n                        \r\n                            <td style=\"width:120px;\">\r\n                                <p><strong>Wireless</strong></p>\r\n\r\n                            </td>\r\n                        \r\n                    \r\n                \r\n                    \r\n                        \r\n                        \r\n                        \r\n                            <td>\r\n                                <p>Wi-Fi 6E (802.11ax), Bluetooth 5.3</p>\r\n\r\n                            </td>\r\n                        \r\n                    \r\n                \r\n            </tr>\r\n        \r\n            <tr>\r\n                \r\n                    \r\n                        \r\n                        \r\n                        \r\n                            <td style=\"width:120px;\">\r\n                                <p><strong>In the Box</strong></p>\r\n\r\n                            </td>\r\n                        \r\n                    \r\n                \r\n                    \r\n                        \r\n                        \r\n                        \r\n                            <td>\r\n                                <p>16-inch MacBook Pro, USB-C to MagSafe 3 Cable (2 m), 140W USB-C Power Adapter</p>\r\n\r\n                            </td>\r\n                        \r\n                    \r\n                \r\n            </tr>\r\n        \r\n            <tr>\r\n                \r\n                    \r\n                        \r\n                        \r\n                        \r\n                            <td style=\"width:120px;\">\r\n                                <p>*<em>Height </em>*</p>\r\n\r\n                            </td>\r\n                        \r\n                    \r\n                \r\n                    \r\n                        \r\n                        \r\n                        \r\n                            <td>\r\n                                <p>0.66 inch (1.68 cm)</p>\r\n\r\n                            </td>\r\n                        \r\n                    \r\n                \r\n            </tr>\r\n        \r\n    </tbody></table>', 269900, 269900, 15, 0, 0, NULL, NULL, NULL, '2023-03-16 08:08:34', '2023-03-16 08:08:34'),
(13, 2, 3, 'Apple iPhone 14 Pro Max', 'apple-iphone-14-pro-max', 'Apple iPhone 14 Pro Max (256 GB) - Space Black', '<table class=\"a-bordered\">\r\n        \r\n            <tbody><tr>\r\n                \r\n                    \r\n                        \r\n                        \r\n                        \r\n                            <td style=\"width:120px;\">\r\n                                <p><strong>Display</strong></p>\r\n\r\n                            </td>\r\n                        \r\n                    \r\n                \r\n                    \r\n                        \r\n                        \r\n                        \r\n                            <td>\r\n                                <p>6.7-inch Super Retina XDR display with ProMotion</p>\r\n\r\n                            </td>\r\n                        \r\n                    \r\n                \r\n            </tr>\r\n        \r\n            <tr>\r\n                \r\n                    \r\n                        \r\n                        \r\n                        \r\n                            <td style=\"width:120px;\">\r\n                                <p><strong>Capacity</strong></p>\r\n\r\n                            </td>\r\n                        \r\n                    \r\n                \r\n                    \r\n                        \r\n                        \r\n                        \r\n                            <td>\r\n                                <p>128GB, 256GB, 512GB, 1TB</p>\r\n\r\n                            </td>\r\n                        \r\n                    \r\n                \r\n            </tr>\r\n        \r\n            <tr>\r\n                \r\n                    \r\n                        \r\n                        \r\n                        \r\n                            <td style=\"width:120px;\">\r\n                                <p><strong>Splash, Water, and Dust Resistant</strong></p>\r\n\r\n                            </td>\r\n                        \r\n                    \r\n                \r\n                    \r\n                        \r\n                        \r\n                        \r\n                            <td>\r\n                                <p>Ceramic Shield front, textured matte glass back and stainless steel design, water and dust resistant (rated IP68 - maximum depth of 6 meters up to 30 minutes)</p>\r\n\r\n                            </td>\r\n                        \r\n                    \r\n                \r\n            </tr>\r\n        \r\n            <tr>\r\n                \r\n                    \r\n                        \r\n                        \r\n                        \r\n                            <td style=\"width:120px;\">\r\n                                <p><strong>Camera and Video</strong></p>\r\n\r\n                            </td>\r\n                        \r\n                    \r\n                \r\n                    \r\n                        \r\n                        \r\n                        \r\n                            <td>\r\n                                <p>Pro camera system: 48MP Main, 12MP Ultrawide, and 12MP 2x Telephoto with Portrait mode, Depth Control, Portrait Lighting, Smart HDR 4, and 4K Dolby Vision HDR video up to 60 fps</p>\r\n\r\n                            </td>\r\n                        \r\n                    \r\n                \r\n            </tr>\r\n        \r\n            <tr>\r\n                \r\n                    \r\n                        \r\n                        \r\n                        \r\n                            <td style=\"width:120px;\">\r\n                                <p><strong>Front Camera</strong></p>\r\n\r\n                            </td>\r\n                        \r\n                    \r\n                \r\n                    \r\n                        \r\n                        \r\n                        \r\n                            <td>\r\n                                <p>12MP TrueDepth front camera with Portrait mode, Depth Control, Portrait Lighting, and Smart HDR 4</p>\r\n\r\n                            </td>\r\n                        \r\n                    \r\n                \r\n            </tr>\r\n        \r\n            <tr>\r\n                \r\n                    \r\n                        \r\n                        \r\n                        \r\n                            <td style=\"width:120px;\">\r\n                                <p><strong>Power and Battery</strong></p>\r\n\r\n                            </td>\r\n                        \r\n                    \r\n                \r\n                    \r\n                        \r\n                        \r\n                        \r\n                            <td>\r\n                                <p>Video playback: Up to 29 hours Video playback (streamed): Up to 25 hours Audio playback: Up to 95 hours 20W adapter or higher (sold separately) Fast-charge capable: Up to 50% charge in around 30 minutes with 20W adapter or higher (available separately)</p>\r\n\r\n                            </td>\r\n                        \r\n                    \r\n                \r\n            </tr>\r\n        \r\n            <tr>\r\n                \r\n                    \r\n                        \r\n                        \r\n                        \r\n                            <td style=\"width:120px;\">\r\n                                <p><strong>In the Box</strong></p>\r\n\r\n                            </td>\r\n                        \r\n                    \r\n                \r\n                    \r\n                        \r\n                        \r\n                        \r\n                            <td>\r\n                                <p>iPhone with iOS 16, USB-C to Lightning Cable,  Documentation</p>\r\n\r\n                            </td>\r\n                        \r\n                    \r\n                \r\n            </tr>\r\n        \r\n            <tr>\r\n                \r\n                    \r\n                        \r\n                        \r\n                        \r\n                            <td style=\"width:120px;\">\r\n                                <p><strong>Warranty</strong></p>\r\n\r\n                            </td>\r\n                        \r\n                    \r\n                \r\n                    \r\n                        \r\n                        \r\n                        \r\n                            <td>\r\n                                <p>Apple-branded hardware product and accessories contained in the original packaging (“Apple Product”) come with a One-Year Limited Warranty. See&nbsp;apple.com/in/legal/warranty&nbsp;for more information.</p>\r\n\r\n                            </td>\r\n                        \r\n                    \r\n                \r\n            </tr>\r\n        \r\n            <tr>\r\n                \r\n                    \r\n                        \r\n                        \r\n                        \r\n                            <td style=\"width:120px;\">\r\n                                <p><strong>Height</strong></p>\r\n\r\n                            </td>\r\n                        \r\n                    \r\n                \r\n                    \r\n                        \r\n                        \r\n                        \r\n                            <td>\r\n                                <p>6.33 inches (160.7 mm)</p>\r\n\r\n                            </td>\r\n                        \r\n                    \r\n                \r\n            </tr>\r\n        \r\n    </tbody></table>', 149900, 149900, 15, 0, 0, NULL, NULL, NULL, '2023-03-16 08:20:21', '2023-03-16 08:20:21'),
(14, 7, 11, 'Men\'s  Checkered Shirt', 'mens-checkered-shirt', 'IndoPrimo Men\'s Cotton Casual Checkered Shirt for Men Full Sleeves', '<div id=\"detailBullets_feature_div\">\r\n             <ul class=\"a-unordered-list a-nostyle a-vertical a-spacing-none detail-bullet-list\">        <li><span class=\"a-list-item\"> <span class=\"a-text-bold\">Package Dimensions\r\n                                    &rlm;\r\n                                        :\r\n                                    &lrm;\r\n                                </span> <span>28.6 x 22 x 3 cm; 230 Grams</span> </span></li>          <li><span class=\"a-list-item\"> <span class=\"a-text-bold\">Date First Available\r\n                                    &rlm;\r\n                                        :\r\n                                    &lrm;\r\n                                </span> <span>30 November 2022</span> </span></li>                                  <li><span class=\"a-list-item\"> <span class=\"a-text-bold\">Manufacturer\r\n                                    &rlm;\r\n                                        :\r\n                                    &lrm;\r\n                                </span> <span>IndoPrimo</span> </span></li>                       <li><span class=\"a-list-item\"> <span class=\"a-text-bold\">ASIN\r\n                                    &rlm;\r\n                                        :\r\n                                    &lrm;\r\n                                </span> <span>B0BNMZP5CH</span> </span></li>          <li><span class=\"a-list-item\"> <span class=\"a-text-bold\">Item model number\r\n                                    &rlm;\r\n                                        :\r\n                                    &lrm;\r\n                                </span> <span>ddd1</span> </span></li>          <li><span class=\"a-list-item\"> <span class=\"a-text-bold\">Country of Origin\r\n                                    &rlm;\r\n                                        :\r\n                                    &lrm;\r\n                                </span> <span>India</span> </span></li>          <li><span class=\"a-list-item\"> <span class=\"a-text-bold\">Department\r\n                                    &rlm;\r\n                                        :\r\n                                    &lrm;\r\n                                </span> <span>Men</span> </span></li>          <li><span class=\"a-list-item\"> <span class=\"a-text-bold\">Manufacturer\r\n                                    &rlm;\r\n                                        :\r\n                                    &lrm;\r\n                                </span> <span>IndoPrimo, IndoPrimo, India</span> </span></li>          <li><span class=\"a-list-item\"> <span class=\"a-text-bold\">Packer\r\n                                    &rlm;\r\n                                        :\r\n                                    &lrm;\r\n                                </span> <span>IndoPrimo</span> </span></li>          <li><span class=\"a-list-item\"> <span class=\"a-text-bold\">Item Weight\r\n                                    &rlm;\r\n                                        :\r\n                                    &lrm;\r\n                                </span> <span>230 g</span> </span></li>          <li><span class=\"a-list-item\"> <span class=\"a-text-bold\">Net Quantity\r\n                                    &rlm;\r\n                                        :\r\n                                    &lrm;\r\n                                </span> <span>1.00 count</span> </span></li>          <li><span class=\"a-list-item\"> <span class=\"a-text-bold\">Generic Name\r\n                                    &rlm;\r\n                                        :\r\n                                    &lrm;\r\n                                </span> <span>Shirt</span> </span></li>        </ul>   </div>', 1999, 499, 15, 0, 0, NULL, NULL, NULL, '2023-03-16 08:28:50', '2023-03-16 08:28:50'),
(15, 7, 12, 'Lymio Casual Shirt for Men', 'lymio-casual-shirt-for-men', 'Lymio Casual Shirt for Men|| Shirt for Men|| Men Stylish Shirt || Men Printed Shirt (Patta)', '<ul class=\"a-unordered-list a-nostyle a-vertical a-spacing-none detail-bullet-list\">        <li><span class=\"a-list-item\"> <span class=\"a-text-bold\">Product Dimensions\r\n                                    &rlm;\r\n                                        :\r\n                                    &lrm;\r\n                                </span> <span>10 x 2 x 11 cm; 199 Grams</span> </span></li>          <li><span class=\"a-list-item\"> <span class=\"a-text-bold\">Date First Available\r\n                                    &rlm;\r\n                                        :\r\n                                    &lrm;\r\n                                </span> <span>3 January 2023</span> </span></li>                                  <li><span class=\"a-list-item\"> <span class=\"a-text-bold\">Manufacturer\r\n                                    &rlm;\r\n                                        :\r\n                                    &lrm;\r\n                                </span> <span>Lymio</span> </span></li>                       <li><span class=\"a-list-item\"> <span class=\"a-text-bold\">ASIN\r\n                                    &rlm;\r\n                                        :\r\n                                    &lrm;\r\n                                </span> <span>B0BRKJKQZ4</span> </span></li>          <li><span class=\"a-list-item\"> <span class=\"a-text-bold\">Item model number\r\n                                    &rlm;\r\n                                        :\r\n                                    &lrm;\r\n                                </span> <span>Patta-Blue-2XL</span> </span></li>          <li><span class=\"a-list-item\"> <span class=\"a-text-bold\">Country of Origin\r\n                                    &rlm;\r\n                                        :\r\n                                    &lrm;\r\n                                </span> <span>India</span> </span></li>          <li><span class=\"a-list-item\"> <span class=\"a-text-bold\">Department\r\n                                    &rlm;\r\n                                        :\r\n                                    &lrm;\r\n                                </span> <span>Men</span> </span></li>          <li><span class=\"a-list-item\"> <span class=\"a-text-bold\">Manufacturer\r\n                                    &rlm;\r\n                                        :\r\n                                    &lrm;\r\n                                </span> <span>Lymio, Lymio_6351481593_katargam</span> </span></li>          <li><span class=\"a-list-item\"> <span class=\"a-text-bold\">Packer\r\n                                    &rlm;\r\n                                        :\r\n                                    &lrm;\r\n                                </span> <span>Lymio_6351481593_katargam</span> </span></li>          <li><span class=\"a-list-item\"> <span class=\"a-text-bold\">Importer\r\n                                    &rlm;\r\n                                        :\r\n                                    &lrm;\r\n                                </span> <span>Lymio_6351481593_katargam</span> </span></li>          <li><span class=\"a-list-item\"> <span class=\"a-text-bold\">Item Weight\r\n                                    &rlm;\r\n                                        :\r\n                                    &lrm;\r\n                                </span> <span>199 g</span> </span></li>          <li><span class=\"a-list-item\"> <span class=\"a-text-bold\">Item Dimensions LxWxH\r\n                                    &rlm;\r\n                                        :\r\n                                    &lrm;\r\n                                </span> <span>10 x 2 x 11 Centimeters</span> </span></li>          <li><span class=\"a-list-item\"> <span class=\"a-text-bold\">Generic Name\r\n                                    &rlm;\r\n                                        :\r\n                                    &lrm;\r\n                                </span> <span>Men casual shirt</span> </span></li>        </ul>', 4999, 349, 17, 0, 0, NULL, NULL, NULL, '2023-03-16 08:33:45', '2023-03-16 08:33:45'),
(16, 6, 13, 'Regular Casual Pants', 'regular-casual-pants', 'Amazon Brand - Symbol Men\'s Flexi Waist Regular Casual Pants', '<ul class=\"a-unordered-list a-nostyle a-vertical a-spacing-none detail-bullet-list\">        <li><span class=\"a-list-item\"> <span class=\"a-text-bold\">Product Dimensions\r\n                                    &rlm;\r\n                                        :\r\n                                    &lrm;\r\n                                </span> <span>10 x 5 x 10 cm; 50 Grams</span> </span></li>          <li><span class=\"a-list-item\"> <span class=\"a-text-bold\">Date First Available\r\n                                    &rlm;\r\n                                        :\r\n                                    &lrm;\r\n                                </span> <span>6 June 2022</span> </span></li>                                  <li><span class=\"a-list-item\"> <span class=\"a-text-bold\">Manufacturer\r\n                                    &rlm;\r\n                                        :\r\n                                    &lrm;\r\n                                </span> <span>Amazon Brand - Symbol</span> </span></li>                       <li><span class=\"a-list-item\"> <span class=\"a-text-bold\">ASIN\r\n                                    &rlm;\r\n                                        :\r\n                                    &lrm;\r\n                                </span> <span>B0B396LRNK</span> </span></li>          <li><span class=\"a-list-item\"> <span class=\"a-text-bold\">Item model number\r\n                                    &rlm;\r\n                                        :\r\n                                    &lrm;\r\n                                </span> <span>A22-SYM-RG-CT-100</span> </span></li>          <li><span class=\"a-list-item\"> <span class=\"a-text-bold\">Country of Origin\r\n                                    &rlm;\r\n                                        :\r\n                                    &lrm;\r\n                                </span> <span>India</span> </span></li>          <li><span class=\"a-list-item\"> <span class=\"a-text-bold\">Department\r\n                                    &rlm;\r\n                                        :\r\n                                    &lrm;\r\n                                </span> <span>Men</span> </span></li>          <li><span class=\"a-list-item\"> <span class=\"a-text-bold\">Manufacturer\r\n                                    &rlm;\r\n                                        :\r\n                                    &lrm;\r\n                                </span> <span>Amazon Brand - Symbol, NISHA DESIGNS,No. 86 D - 1 ,2nd stage, Industrial Suburb ,Yeshwanthpur, Bangalore-560022</span> </span></li>          <li><span class=\"a-list-item\"> <span class=\"a-text-bold\">Packer\r\n                                    &rlm;\r\n                                        :\r\n                                    &lrm;\r\n                                </span> <span>NISHA DESIGNS,No. 86 D - 1 ,2nd stage, Industrial Suburb ,Yeshwanthpur, Bangalore-560022</span> </span></li>          <li><span class=\"a-list-item\"> <span class=\"a-text-bold\">Item Weight\r\n                                    &rlm;\r\n                                        :\r\n                                    &lrm;\r\n                                </span> <span>50 g</span> </span></li>          <li><span class=\"a-list-item\"> <span class=\"a-text-bold\">Item Dimensions LxWxH\r\n                                    &rlm;\r\n                                        :\r\n                                    &lrm;\r\n                                </span> <span>10 x 5 x 10 Centimeters</span> </span></li>          <li><span class=\"a-list-item\"> <span class=\"a-text-bold\">Generic Name\r\n                                    &rlm;\r\n                                        :\r\n                                    &lrm;\r\n                                </span> <span>Casual Pants</span> </span></li>        </ul>', 2699, 879, 4, 0, 0, NULL, NULL, NULL, '2023-03-16 08:44:47', '2023-03-16 08:44:47');

-- --------------------------------------------------------

--
-- Table structure for table `product_colors`
--

CREATE TABLE `product_colors` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `product_id` bigint(20) UNSIGNED NOT NULL,
  `color_id` bigint(20) UNSIGNED DEFAULT NULL,
  `color_quantity` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `product_colors`
--

INSERT INTO `product_colors` (`id`, `product_id`, `color_id`, `color_quantity`, `created_at`, `updated_at`) VALUES
(1, 1, 13, 15, '2023-03-16 07:07:31', '2023-03-16 07:07:31'),
(2, 2, 9, 15, '2023-03-16 07:10:28', '2023-03-16 07:10:28'),
(3, 3, 11, 13, '2023-03-16 07:13:40', '2023-03-16 07:13:40'),
(4, 4, 9, 34, '2023-03-16 07:16:38', '2023-03-16 07:16:38'),
(5, 5, 9, 13, '2023-03-16 07:19:09', '2023-03-16 07:19:09'),
(6, 6, 10, 5, '2023-03-16 07:23:34', '2023-03-16 07:23:34'),
(7, 6, 11, 11, '2023-03-16 07:23:34', '2023-03-16 07:23:34'),
(8, 7, 9, 7, '2023-03-16 07:27:53', '2023-03-16 07:27:53'),
(9, 9, 9, 8, '2023-03-16 07:54:33', '2023-03-16 07:54:33'),
(10, 10, 2, 15, '2023-03-16 07:58:15', '2023-03-16 07:58:15'),
(11, 12, 11, 15, '2023-03-16 08:08:34', '2023-03-16 08:08:34'),
(12, 13, 5, 3, '2023-03-16 08:20:21', '2023-03-16 08:20:21'),
(13, 13, 7, 6, '2023-03-16 08:20:21', '2023-03-16 08:20:21'),
(14, 13, 9, 7, '2023-03-16 08:20:21', '2023-03-16 08:20:21'),
(15, 13, 13, 3, '2023-03-16 08:20:21', '2023-03-16 08:20:21'),
(16, 14, 2, 7, '2023-03-16 08:28:50', '2023-03-16 08:28:50'),
(17, 15, 1, 3, '2023-03-16 08:33:45', '2023-03-16 08:33:45'),
(18, 15, 3, 3, '2023-03-16 08:33:45', '2023-03-16 08:33:45'),
(19, 15, 9, 3, '2023-03-16 08:33:45', '2023-03-16 08:33:45'),
(20, 15, 10, 3, '2023-03-16 08:33:45', '2023-03-16 08:33:45'),
(21, 16, 2, 1, '2023-03-16 08:44:47', '2023-03-16 08:44:47'),
(22, 16, 11, 3, '2023-03-16 08:44:47', '2023-03-16 08:44:47');

-- --------------------------------------------------------

--
-- Table structure for table `product_images`
--

CREATE TABLE `product_images` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `product_id` bigint(20) UNSIGNED NOT NULL,
  `image` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `product_images`
--

INSERT INTO `product_images` (`id`, `product_id`, `image`, `created_at`, `updated_at`) VALUES
(1, 1, 'uploads/products/cover/16789702511.jpg', '2023-03-16 07:07:31', '2023-03-16 07:07:31'),
(2, 1, 'uploads/products/16789702511.jpg', NULL, NULL),
(3, 1, 'uploads/products/16789702512.jpg', NULL, NULL),
(4, 1, 'uploads/products/16789702513.jpg', NULL, NULL),
(5, 1, 'uploads/products/16789702514.jpg', NULL, NULL),
(6, 2, 'uploads/products/cover/16789704281.jpg', '2023-03-16 07:10:28', '2023-03-16 07:10:28'),
(7, 2, 'uploads/products/16789704281.jpg', NULL, NULL),
(8, 2, 'uploads/products/16789704282.jpg', NULL, NULL),
(9, 2, 'uploads/products/16789704283.jpg', NULL, NULL),
(10, 2, 'uploads/products/16789704284.jpg', NULL, NULL),
(11, 3, 'uploads/products/cover/16789706201.jpg', '2023-03-16 07:13:40', '2023-03-16 07:13:40'),
(12, 3, 'uploads/products/16789706201.jpg', NULL, NULL),
(13, 3, 'uploads/products/16789706202.jpg', NULL, NULL),
(14, 3, 'uploads/products/16789706203.jpg', NULL, NULL),
(15, 4, 'uploads/products/cover/16789707981.jpg', '2023-03-16 07:16:38', '2023-03-16 07:16:38'),
(16, 4, 'uploads/products/16789707981.jpg', NULL, NULL),
(17, 4, 'uploads/products/16789707982.jpg', NULL, NULL),
(18, 4, 'uploads/products/16789707983.jpg', NULL, NULL),
(19, 5, 'uploads/products/cover/16789709491.jpg', '2023-03-16 07:19:09', '2023-03-16 07:19:09'),
(20, 5, 'uploads/products/16789709491.jpg', NULL, NULL),
(21, 5, 'uploads/products/16789709492.jpg', NULL, NULL),
(22, 5, 'uploads/products/16789709493.jpg', NULL, NULL),
(23, 6, 'uploads/products/cover/16789712141.jpg', '2023-03-16 07:23:34', '2023-03-16 07:23:34'),
(24, 6, 'uploads/products/16789712141.jpg', NULL, NULL),
(25, 6, 'uploads/products/16789712142.jpg', NULL, NULL),
(26, 7, 'uploads/products/cover/16789714731.jpg', '2023-03-16 07:27:53', '2023-03-16 07:27:53'),
(27, 7, 'uploads/products/16789714731.jpg', NULL, NULL),
(28, 7, 'uploads/products/16789714732.jpg', NULL, NULL),
(29, 8, 'uploads/products/cover/16789716571.jpg', '2023-03-16 07:30:57', '2023-03-16 07:30:57'),
(30, 8, 'uploads/products/16789716571.jpg', NULL, NULL),
(31, 8, 'uploads/products/16789716572.jpg', NULL, NULL),
(32, 8, 'uploads/products/16789716573.jpg', NULL, NULL),
(33, 9, 'uploads/products/cover/16789730731.jpg', '2023-03-16 07:54:33', '2023-03-16 07:54:33'),
(34, 9, 'uploads/products/16789730731.jpg', NULL, NULL),
(35, 9, 'uploads/products/16789730732.jpg', NULL, NULL),
(36, 10, 'uploads/products/cover/16789732951.jpg', '2023-03-16 07:58:15', '2023-03-16 07:58:15'),
(37, 10, 'uploads/products/16789732951.jpg', NULL, NULL),
(38, 10, 'uploads/products/16789732952.jpg', NULL, NULL),
(39, 10, 'uploads/products/16789732953.jpg', NULL, NULL),
(40, 11, 'uploads/products/cover/16789735701.jpg', '2023-03-16 08:02:50', '2023-03-16 08:02:50'),
(41, 11, 'uploads/products/16789735701.jpg', NULL, NULL),
(42, 11, 'uploads/products/16789735702.jpg', NULL, NULL),
(43, 11, 'uploads/products/16789735703.jpg', NULL, NULL),
(44, 11, 'uploads/products/16789735704.jpg', NULL, NULL),
(45, 12, 'uploads/products/cover/16789739141.jpg', '2023-03-16 08:08:34', '2023-03-16 08:08:34'),
(46, 12, 'uploads/products/16789739141.jpg', NULL, NULL),
(47, 12, 'uploads/products/16789739142.jpg', NULL, NULL),
(48, 12, 'uploads/products/16789739143.jpg', NULL, NULL),
(49, 13, 'uploads/products/cover/16789746211.jpg', '2023-03-16 08:20:21', '2023-03-16 08:20:21'),
(50, 13, 'uploads/products/16789746211.jpg', NULL, NULL),
(51, 13, 'uploads/products/16789746212.jpg', NULL, NULL),
(52, 13, 'uploads/products/16789746213.jpg', NULL, NULL),
(53, 14, 'uploads/products/cover/16789751301.jpg', '2023-03-16 08:28:50', '2023-03-16 08:28:50'),
(54, 14, 'uploads/products/16789751301.jpg', NULL, NULL),
(55, 15, 'uploads/products/cover/16789754251.jpg', '2023-03-16 08:33:45', '2023-03-16 08:33:45'),
(56, 15, 'uploads/products/16789754251.jpg', NULL, NULL),
(57, 15, 'uploads/products/16789754252.jpg', NULL, NULL),
(58, 16, 'uploads/products/cover/16789760871.jpg', '2023-03-16 08:44:47', '2023-03-16 08:44:47'),
(59, 16, 'uploads/products/16789760871.jpg', NULL, NULL),
(60, 16, 'uploads/products/16789760872.jpg', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `subscribers`
--

CREATE TABLE `subscribers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `email` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `role` tinyint(4) NOT NULL DEFAULT 0,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `role`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Admin', 1, 'cmdsofts@gmail.com', '2023-03-16 09:07:48', '$2y$10$HF5rC68zc737YuNMH0htfuJF7.K/S4PNm80x5IdjW6EV6lIIm7Oq6', NULL, '2023-03-16 06:09:40', '2023-03-16 09:07:48'),
(2, 'Ashutosh', 0, 'ashutoshpuri2000@gmail.com', '2023-03-16 09:16:47', '$2y$10$HVavYAUUz89fYcy/S3YWS.bS0R0jG7FlPAeFgU8Ot18ok39CEnhF2', NULL, '2023-03-16 09:02:47', '2023-03-16 09:16:47');

-- --------------------------------------------------------

--
-- Table structure for table `wishlists`
--

CREATE TABLE `wishlists` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `product_id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `brands`
--
ALTER TABLE `brands`
  ADD PRIMARY KEY (`id`),
  ADD KEY `brands_category_id_foreign` (`category_id`),
  ADD KEY `brands_id_index` (`id`);

--
-- Indexes for table `carts`
--
ALTER TABLE `carts`
  ADD PRIMARY KEY (`id`),
  ADD KEY `carts_product_id_foreign` (`product_id`),
  ADD KEY `carts_user_id_foreign` (`user_id`),
  ADD KEY `carts_product_color_id_foreign` (`product_color_id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`),
  ADD KEY `categories_id_index` (`id`);

--
-- Indexes for table `colors`
--
ALTER TABLE `colors`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`),
  ADD KEY `orders_user_id_foreign` (`user_id`);

--
-- Indexes for table `order_items`
--
ALTER TABLE `order_items`
  ADD PRIMARY KEY (`id`),
  ADD KEY `order_items_order_id_foreign` (`order_id`),
  ADD KEY `order_items_product_id_foreign` (`product_id`),
  ADD KEY `order_items_product_color_id_foreign` (`product_color_id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`),
  ADD KEY `products_category_id_foreign` (`category_id`),
  ADD KEY `products_brand_id_foreign` (`brand_id`);

--
-- Indexes for table `product_colors`
--
ALTER TABLE `product_colors`
  ADD PRIMARY KEY (`id`),
  ADD KEY `product_colors_product_id_foreign` (`product_id`),
  ADD KEY `product_colors_color_id_foreign` (`color_id`);

--
-- Indexes for table `product_images`
--
ALTER TABLE `product_images`
  ADD PRIMARY KEY (`id`),
  ADD KEY `product_images_product_id_foreign` (`product_id`);

--
-- Indexes for table `subscribers`
--
ALTER TABLE `subscribers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `wishlists`
--
ALTER TABLE `wishlists`
  ADD PRIMARY KEY (`id`),
  ADD KEY `wishlists_product_id_foreign` (`product_id`),
  ADD KEY `wishlists_user_id_foreign` (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `brands`
--
ALTER TABLE `brands`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `carts`
--
ALTER TABLE `carts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `colors`
--
ALTER TABLE `colors`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `order_items`
--
ALTER TABLE `order_items`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `product_colors`
--
ALTER TABLE `product_colors`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `product_images`
--
ALTER TABLE `product_images`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=61;

--
-- AUTO_INCREMENT for table `subscribers`
--
ALTER TABLE `subscribers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `wishlists`
--
ALTER TABLE `wishlists`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `brands`
--
ALTER TABLE `brands`
  ADD CONSTRAINT `brands_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `carts`
--
ALTER TABLE `carts`
  ADD CONSTRAINT `carts_product_color_id_foreign` FOREIGN KEY (`product_color_id`) REFERENCES `product_colors` (`id`) ON DELETE SET NULL,
  ADD CONSTRAINT `carts_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `carts_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `orders_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `order_items`
--
ALTER TABLE `order_items`
  ADD CONSTRAINT `order_items_order_id_foreign` FOREIGN KEY (`order_id`) REFERENCES `orders` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `order_items_product_color_id_foreign` FOREIGN KEY (`product_color_id`) REFERENCES `product_colors` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `order_items_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `products_brand_id_foreign` FOREIGN KEY (`brand_id`) REFERENCES `brands` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `products_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `product_colors`
--
ALTER TABLE `product_colors`
  ADD CONSTRAINT `product_colors_color_id_foreign` FOREIGN KEY (`color_id`) REFERENCES `colors` (`id`) ON DELETE SET NULL,
  ADD CONSTRAINT `product_colors_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `product_images`
--
ALTER TABLE `product_images`
  ADD CONSTRAINT `product_images_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `wishlists`
--
ALTER TABLE `wishlists`
  ADD CONSTRAINT `wishlists_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `wishlists_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
