-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1
-- Время создания: Май 26 2019 г., 21:26
-- Версия сервера: 8.0.15
-- Версия PHP: 7.1.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `photogallery`
--

-- --------------------------------------------------------

--
-- Структура таблицы `albums`
--

CREATE TABLE `albums` (
  `id` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `description` varchar(200) DEFAULT NULL,
  `created_at` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `albums`
--

INSERT INTO `albums` (`id`, `name`, `description`, `created_at`) VALUES
(1, 'Animals', 'Animals photos', '2019-05-26'),
(2, 'City', 'City', '2019-05-26'),
(3, 'Fashion', 'Fashion photos', '2019-05-26'),
(4, 'Nature', 'Nature photos\r\n', '2019-05-26'),
(5, 'Wedding', 'Wedding photos', '2019-05-26'),
(6, 'Macro\r\n', 'Macro photos', '2019-05-26'),
(7, 'People', 'People photos', '2019-05-26'),
(8, 'Retro', 'Retro photos', '2019-05-26'),
(9, 'Karl', 'Karl', NULL),
(10, 'Egypt', 'Egypt', NULL);

-- --------------------------------------------------------

--
-- Структура таблицы `maintexts`
--

CREATE TABLE `maintexts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `body` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `url` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `lang` enum('ru','en') CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'ru',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `maintexts`
--

INSERT INTO `maintexts` (`id`, `name`, `body`, `url`, `status`, `lang`, `created_at`, `updated_at`) VALUES
(1, 'Contact Me', 'Text', 'contact_me', '', 'ru', NULL, NULL),
(2, 'About Me', '', 'about_me', '', 'ru', NULL, NULL),
(3, 'Partners', '', 'partners', '', 'ru', NULL, NULL),
(4, 'Gallery', ' ', 'gallery', ' ', 'ru', NULL, NULL),
(5, 'Home', ' ', 'home', ' ', 'ru', NULL, NULL),
(6, 'Video', ' ', 'video', ' ', 'ru', NULL, NULL),
(7, 'Guest-Book', ' ', 'guest-book', ' ', 'ru', NULL, NULL);

-- --------------------------------------------------------

--
-- Структура таблицы `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_05_24_163221_test', 2),
(4, '2019_05_24_163443_create_maintexts_table', 2);

-- --------------------------------------------------------

--
-- Структура таблицы `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `password_resets`
--

INSERT INTO `password_resets` (`email`, `token`, `created_at`) VALUES
('vitaly-vitaly@outlook.com', '$2y$10$9p3Vq7iLujAk/WXPwnQgOem1d3/zc5zSZK1Fjicl.Vs.QVJC27II.', '2019-05-24 13:56:18');

-- --------------------------------------------------------

--
-- Структура таблицы `photos`
--

CREATE TABLE `photos` (
  `id` int(11) NOT NULL,
  `path` text,
  `album` int(11) NOT NULL,
  `description` text,
  `author` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `photos`
--

INSERT INTO `photos` (`id`, `path`, `album`, `description`, `author`) VALUES
(1, 'IMG067.jpg', 9, NULL, 'Karl'),
(2, 'IMG064.jpg', 9, NULL, 'Karl'),
(3, 'IMG065.jpg', 9, NULL, 'Karl'),
(4, 'IMG066.jpg', 9, NULL, 'Karl'),
(5, 'IMG067.jpg', 9, NULL, 'Karl'),
(6, 'IMG068.jpg', 9, NULL, 'Karl'),
(7, 'IMG069.jpg', 9, NULL, 'Karl'),
(8, 'IMG070.jpg', 9, NULL, 'Karl'),
(9, 'IMG071.jpg', 9, NULL, 'Karl'),
(10, 'IMG072.jpg', 9, NULL, 'Karl'),
(11, 'IMG073.jpg', 9, NULL, 'Karl'),
(12, 'IMG074.jpg', 9, NULL, 'Karl'),
(13, 'IMG075.jpg', 9, NULL, 'Karl'),
(14, 'IMG076.jpg', 9, NULL, 'Karl'),
(15, 'IMG077.jpg', 9, NULL, 'Karl'),
(16, 'IMG078.jpg', 9, NULL, 'Karl'),
(17, 'IMG079.jpg', 9, NULL, 'Karl'),
(18, 'IMG080.jpg', 9, NULL, 'Karl'),
(19, 'IMG081.jpg', 9, NULL, 'Karl'),
(20, 'IMG082.jpg', 9, NULL, 'Karl'),
(21, 'IMG083.jpg', 9, NULL, 'Karl'),
(22, 'IMG084.jpg', 9, NULL, 'Karl'),
(23, 'IMG085.jpg', 9, NULL, 'Karl'),
(24, 'IMG086.jpg', 9, NULL, 'Karl'),
(25, 'IMG087.jpg', 9, NULL, 'Karl'),
(26, 'IMG088.jpg', 9, NULL, 'Karl'),
(27, 'IMG089.jpg', 9, NULL, 'Karl'),
(28, 'IMG090.jpg', 9, NULL, 'Karl'),
(29, 'IMG091.jpg', 9, NULL, 'Karl'),
(30, 'IMG092.jpg', 9, NULL, 'Karl'),
(31, 'IMG093.jpg', 9, NULL, 'Karl'),
(32, 'IMG094.jpg', 9, NULL, 'Karl'),
(33, 'IMG095.jpg', 9, NULL, 'Karl'),
(34, 'IMG096.jpg', 9, NULL, 'Karl'),
(35, 'IMG097.jpg', 9, NULL, 'Karl'),
(36, 'IMG098.jpg', 9, NULL, 'Karl'),
(37, 'IMG099.jpg', 9, NULL, 'Karl'),
(38, 'IMG100.jpg', 9, NULL, 'Karl'),
(39, 'IMG101.jpg', 9, NULL, 'Karl'),
(40, 'IMG102.jpg', 9, NULL, 'Karl'),
(41, 'IMG103.jpg', 9, NULL, 'Karl'),
(42, 'photo01.jpg', 9, NULL, 'Karl'),
(43, 'photo02.jpg', 9, NULL, 'Karl'),
(44, 'photo03.jpg', 9, NULL, 'Karl'),
(45, 'photo04.jpg', 9, NULL, 'Karl'),
(46, 'IMG_20131210_085725.jpg', 10, NULL, 'Karl'),
(47, 'IMG_20131210_085737.jpg', 10, NULL, 'Karl'),
(48, 'IMG_20131210_090037.jpg', 10, NULL, 'Karl'),
(49, 'IMG_20131210_090532.jpg', 10, NULL, 'Karl'),
(50, 'IMG_20131210_090610.jpg', 10, NULL, 'Karl'),
(51, 'IMG_20131210_091029.jpg', 10, NULL, 'Karl'),
(52, 'IMG_20131210_091640.jpg', 10, NULL, 'Karl'),
(53, 'IMG_20131210_092823.jpg', 10, NULL, 'Karl'),
(54, 'IMG_20131210_093837.jpg', 10, NULL, 'Karl'),
(55, 'IMG_20131210_094813.jpg', 10, NULL, 'Karl'),
(56, 'IMG_20131210_094908.jpg', 10, NULL, 'Karl'),
(57, 'IMG_20131210_120919.jpg', 10, NULL, 'Karl'),
(58, 'IMG_20131210_123736.jpg', 10, NULL, 'Karl'),
(59, 'IMG_20131210_124037.jpg', 10, NULL, 'Karl'),
(60, 'IMG_20131210_124436.jpg', 10, NULL, 'Karl'),
(61, 'IMG_20131210_125044.jpg', 10, NULL, 'Karl'),
(62, 'IMG_20131210_125138.jpg', 10, NULL, 'Karl'),
(63, 'IMG_20131210_143445.jpg', 10, NULL, 'Karl'),
(64, 'IMG_20131210_154619.jpg', 10, NULL, 'Karl'),
(65, 'IMG_20131213_164102.jpg', 10, NULL, 'Karl');

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'vitaly', 'vitaly-vitaly@outlook.com', NULL, '$2y$10$WnfWoaV5O1jB8rUPUjRJ9eAbVBc/AUodqSsZZzjEANQeoU/bDkbTm', NULL, '2019-05-24 13:21:00', '2019-05-24 13:21:00'),
(2, 'vitaly', 'loopy_loop@mail.ru', NULL, '$2y$10$.442aNTIdrShHH6sP4rlBOma1oqA7rMR0VSPMoma7E2GOxGyHv8ny', 'fT51DG50VerVE5myVEul20pQ8wfWJI9GiFctg8dH1jzGonynlQMTQluAQyym', '2019-05-26 07:21:20', '2019-05-26 07:21:20');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `albums`
--
ALTER TABLE `albums`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `maintexts`
--
ALTER TABLE `maintexts`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Индексы таблицы `photos`
--
ALTER TABLE `photos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `albums_id` (`album`);

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
-- AUTO_INCREMENT для таблицы `albums`
--
ALTER TABLE `albums`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT для таблицы `maintexts`
--
ALTER TABLE `maintexts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT для таблицы `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT для таблицы `photos`
--
ALTER TABLE `photos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=66;

--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Ограничения внешнего ключа сохраненных таблиц
--

--
-- Ограничения внешнего ключа таблицы `photos`
--
ALTER TABLE `photos`
  ADD CONSTRAINT `albums_id` FOREIGN KEY (`album`) REFERENCES `albums` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
