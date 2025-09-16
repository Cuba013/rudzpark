-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1
-- Время создания: Сен 16 2025 г., 07:52
-- Версия сервера: 10.4.32-MariaDB
-- Версия PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `store`
--

-- --------------------------------------------------------

--
-- Структура таблицы `cache`
--

CREATE TABLE `cache` (
  `key` varchar(255) NOT NULL,
  `value` mediumtext NOT NULL,
  `expiration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `cache_locks`
--

CREATE TABLE `cache_locks` (
  `key` varchar(255) NOT NULL,
  `owner` varchar(255) NOT NULL,
  `expiration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `parent_id` bigint(20) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `description` text DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `categories`
--

INSERT INTO `categories` (`id`, `title`, `parent_id`, `created_at`, `updated_at`, `deleted_at`, `description`, `image`) VALUES
(7, 'Ноутбуки', NULL, '2025-09-13 02:27:30', '2025-09-13 08:48:15', NULL, 'Краткое описание категории \"Ноутбуки\"', 'images/categories/6jq1bF84pqQRpGKw5G5CKcuwxUucN2SsryNCVrPk.jpg'),
(8, 'Планшеты', NULL, '2025-09-13 02:28:06', '2025-09-13 09:11:25', NULL, 'Краткое описание категории \"Планшеты\"', 'images/categories/cSkyslVnUnT5sA0YgXf5hiW7YJu8lRq1rQlecPZG.jpg'),
(9, 'Смартфоны', NULL, '2025-09-13 02:28:17', '2025-09-13 09:19:04', NULL, 'Краткое описание категории \"Смартфоны\"', 'images/categories/XTatuFaogWcPIKQRvB6DGk6orB3rxmIQvHSvtESd.jpg'),
(10, 'Наушники', NULL, '2025-09-13 02:28:30', '2025-09-13 09:22:49', NULL, 'Краткое описание категории \"Наушники\"', 'images/categories/J3tTLNnsrwhKhmRxyf2fuE4ZwqnZXq1Mzmya7f24.jpg'),
(11, 'Телевизоры', NULL, '2025-09-13 02:28:40', '2025-09-13 09:31:03', NULL, 'Краткое описание категории \"Телевизоры\"', 'images/categories/lQHAw4qUDgGb2lFV8dLwpfif4FnkVXJruyv7acMq.jpg'),
(12, 'Аксессуары', NULL, '2025-09-13 02:28:50', '2025-09-13 09:31:52', NULL, 'Краткое описание категории \"Аксессуары\"', 'images/categories/TWQpUP4ryKH9rPSiQs4R6dj9ZnxC3GdCpG0QcwVF.jpg'),
(13, 'Xiaomi', 9, '2025-09-13 02:29:07', '2025-09-13 02:29:07', NULL, NULL, NULL),
(14, 'Asus', 33, '2025-09-13 02:59:50', '2025-09-15 13:51:34', NULL, NULL, NULL),
(15, 'Samsung', 11, '2025-09-13 03:00:07', '2025-09-13 03:00:15', NULL, NULL, NULL),
(16, 'Тест', NULL, '2025-09-13 07:57:08', '2025-09-13 07:58:55', '2025-09-13 07:58:55', 'Тест2', NULL),
(17, 'test', NULL, '2025-09-13 08:17:22', '2025-09-13 09:03:20', '2025-09-13 09:03:20', 'тест', 'images/categories/iWv4nafdF5db3gtbVeUpBGGo95lxQo22WYQ4skEN.png'),
(18, 'Apple', 34, '2025-09-15 13:39:18', '2025-09-15 13:52:42', NULL, NULL, NULL),
(19, 'HONOR', 34, '2025-09-15 13:44:05', '2025-09-15 13:52:54', NULL, NULL, NULL),
(20, 'MSI', 33, '2025-09-15 13:44:13', '2025-09-15 13:51:49', NULL, NULL, NULL),
(21, 'Xiaomi', 35, '2025-09-15 13:45:02', '2025-09-15 13:52:22', NULL, NULL, NULL),
(22, 'HP', 33, '2025-09-15 13:45:15', '2025-09-15 13:53:40', NULL, NULL, NULL),
(23, 'HONOR', 8, '2025-09-15 13:45:51', '2025-09-15 13:45:51', NULL, NULL, NULL),
(24, 'Xiaomi', 8, '2025-09-15 13:46:05', '2025-09-15 13:46:05', NULL, NULL, NULL),
(25, 'Huawei', 8, '2025-09-15 13:46:28', '2025-09-15 13:46:28', NULL, NULL, NULL),
(26, 'LG', 11, '2025-09-15 13:47:00', '2025-09-15 13:47:00', NULL, NULL, NULL),
(27, 'Xiaomi', 11, '2025-09-15 13:47:16', '2025-09-15 13:47:16', NULL, NULL, NULL),
(28, 'HONOR', 10, '2025-09-15 13:47:33', '2025-09-15 13:47:33', NULL, NULL, NULL),
(29, 'Xiaomi', 10, '2025-09-15 13:48:00', '2025-09-15 13:48:00', NULL, NULL, NULL),
(30, 'Poco', 9, '2025-09-15 13:48:11', '2025-09-15 13:48:11', NULL, NULL, NULL),
(31, 'Samsung', 9, '2025-09-15 13:48:28', '2025-09-15 13:48:28', NULL, NULL, NULL),
(32, 'HONOR', 9, '2025-09-15 13:49:00', '2025-09-15 13:49:00', NULL, NULL, NULL),
(33, 'Игровой', 7, '2025-09-15 13:49:45', '2025-09-15 13:49:45', NULL, NULL, NULL),
(34, 'Ультрабук', 7, '2025-09-15 13:50:22', '2025-09-15 13:53:14', NULL, NULL, NULL),
(35, 'Для работы', 7, '2025-09-15 13:50:45', '2025-09-15 13:50:45', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Структура таблицы `category_product`
--

CREATE TABLE `category_product` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category_id` bigint(20) UNSIGNED NOT NULL,
  `product_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `category_product`
--

INSERT INTO `category_product` (`id`, `category_id`, `product_id`, `created_at`, `updated_at`) VALUES
(4, 9, 10, NULL, NULL),
(5, 30, 10, NULL, NULL),
(6, 9, 11, NULL, NULL),
(7, 9, 12, NULL, NULL),
(8, 21, 12, NULL, NULL),
(9, 9, 13, NULL, NULL),
(10, 9, 14, NULL, NULL),
(11, 28, 14, NULL, NULL);

-- --------------------------------------------------------

--
-- Структура таблицы `failed_jobs`
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
-- Структура таблицы `jobs`
--

CREATE TABLE `jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `queue` varchar(255) NOT NULL,
  `payload` longtext NOT NULL,
  `attempts` tinyint(3) UNSIGNED NOT NULL,
  `reserved_at` int(10) UNSIGNED DEFAULT NULL,
  `available_at` int(10) UNSIGNED NOT NULL,
  `created_at` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `job_batches`
--

CREATE TABLE `job_batches` (
  `id` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `total_jobs` int(11) NOT NULL,
  `pending_jobs` int(11) NOT NULL,
  `failed_jobs` int(11) NOT NULL,
  `failed_job_ids` longtext NOT NULL,
  `options` mediumtext DEFAULT NULL,
  `cancelled_at` int(11) DEFAULT NULL,
  `created_at` int(11) NOT NULL,
  `finished_at` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '0001_01_01_000000_create_users_table', 1),
(2, '0001_01_01_000001_create_cache_table', 1),
(3, '0001_01_01_000002_create_jobs_table', 1),
(5, '2025_09_12_165802_create_categories_table', 2),
(10, '2025_09_12_174620_add_deleted_at_to_categories_table', 3),
(12, '2025_09_13_101929_add_description_to_categories_table', 4),
(14, '2025_09_13_110130_add_image_to_categories_table', 5),
(20, '2025_09_14_191429_create_products_table', 6),
(21, '2025_09_14_200454_add_deleted_products_table', 6),
(23, '2025_09_15_073131_create_category_product_table', 7);

-- --------------------------------------------------------

--
-- Структура таблицы `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `products`
--

CREATE TABLE `products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  `price` decimal(10,2) NOT NULL,
  `rating` decimal(2,1) NOT NULL,
  `available` tinyint(1) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `products`
--

INSERT INTO `products` (`id`, `title`, `image`, `price`, `rating`, `available`, `created_at`, `updated_at`, `deleted_at`) VALUES
(10, 'Смартфон POCO M4 PRO 5G 4GB/64GB Yellow EU', 'images/products/KHFztu8PfWiXI7jlk5U9D4I3hgbFHfFTrnHigQ4j.png', 489.00, 4.0, 1, '2025-09-15 15:07:35', '2025-09-15 15:07:35', NULL),
(11, 'Смартфон Apple iPhone 15 Pro Max 256GB Blue Titanium (MU6T3J/A)', 'images/products/9L6Ad95qNbBzIzKqcc40rGtxvpnS6BUumEnt0ncB.png', 5999.00, 5.0, 1, '2025-09-15 15:10:14', '2025-09-15 15:25:39', NULL),
(12, 'Смартфон Xiaomi Redmi Note 12 8GB/256GB without NFC Ice Blue EU', 'images/products/w1pV9DHsXOl6reqFTfz7iJNE6poCJjA2Tn1tdl9m.png', 799.00, 3.0, 0, '2025-09-15 15:40:23', '2025-09-15 15:40:23', NULL),
(13, 'Смартфон Samsung Galaxy A34 5G SM-A346 6GB/128GB (серебристый)', 'images/products/taI5zBOyUKRmdD9yB6RwI9Apgd5BjufOYrsVct6y.png', 899.00, 1.0, 1, '2025-09-15 15:43:14', '2025-09-15 15:43:14', NULL),
(14, 'Honor 400 Lite (ABR-NX1) 8GB/256GB Velvet Grey', 'images/products/oKtoTNvuTBQqJBVJulMpeYhmGUtFsZeSq5FeYPr4.png', 999.00, 0.0, 1, '2025-09-15 15:48:07', '2025-09-15 15:50:47', NULL);

-- --------------------------------------------------------

--
-- Структура таблицы `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(255) NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) DEFAULT NULL,
  `user_agent` text DEFAULT NULL,
  `payload` longtext NOT NULL,
  `last_activity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('BNsLPBtlkZddsa10Go0Ahuvpfk6dHtwGf2s8gZW5', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:142.0) Gecko/20100101 Firefox/142.0', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiMDRhYUk2YWdjcjVWYksyZDU5aTRwVGcxQ3dIUUxlNkc3eWNOSVZNUSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjE6Imh0dHA6Ly9sb2NhbGhvc3Q6ODAwMCI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1758001861),
('P8bkuTkAvYcyebLg5LKX1N2E8PDBcvueWTcWYMjN', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:142.0) Gecko/20100101 Firefox/142.0', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiZVlBa0tMUHpqQW5zVTRFOWVVOTVkUUZYU2p1SFY2OUh4OVI1STNmVyI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjE6Imh0dHA6Ly9sb2NhbGhvc3Q6ODAwMCI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1757967284);

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `cache`
--
ALTER TABLE `cache`
  ADD PRIMARY KEY (`key`);

--
-- Индексы таблицы `cache_locks`
--
ALTER TABLE `cache_locks`
  ADD PRIMARY KEY (`key`);

--
-- Индексы таблицы `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`),
  ADD KEY `categories_parent_id_foreign` (`parent_id`);

--
-- Индексы таблицы `category_product`
--
ALTER TABLE `category_product`
  ADD PRIMARY KEY (`id`),
  ADD KEY `category_product_category_id_foreign` (`category_id`),
  ADD KEY `category_product_product_id_foreign` (`product_id`);

--
-- Индексы таблицы `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Индексы таблицы `jobs`
--
ALTER TABLE `jobs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `jobs_queue_index` (`queue`);

--
-- Индексы таблицы `job_batches`
--
ALTER TABLE `job_batches`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Индексы таблицы `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

--
-- Индексы таблицы `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT для таблицы `category_product`
--
ALTER TABLE `category_product`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT для таблицы `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `jobs`
--
ALTER TABLE `jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT для таблицы `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- Ограничения внешнего ключа сохраненных таблиц
--

--
-- Ограничения внешнего ключа таблицы `categories`
--
ALTER TABLE `categories`
  ADD CONSTRAINT `categories_parent_id_foreign` FOREIGN KEY (`parent_id`) REFERENCES `categories` (`id`) ON DELETE CASCADE;

--
-- Ограничения внешнего ключа таблицы `category_product`
--
ALTER TABLE `category_product`
  ADD CONSTRAINT `category_product_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `category_product_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
