-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Хост: localhost
-- Время создания: Окт 27 2021 г., 14:23
-- Версия сервера: 8.0.18
-- Версия PHP: 7.3.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `blog`
--

-- --------------------------------------------------------

--
-- Структура таблицы `posts`
--

CREATE TABLE `posts` (
  `id` int(11) NOT NULL,
  `title` varchar(60) NOT NULL,
  `description` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `posts`
--

INSERT INTO `posts` (`id`, `title`, `description`) VALUES
(1, 'Цитата 1', 'Хорошие друзья, хорошие книги и спящая совесть - вот идеальная жизнь.'),
(2, 'Цитата 2', 'Только то и приятно, что трудно достать.'),
(3, 'Цитата 3', 'Глупости получаются случайно, а потом становятся лучшими моментами в жизни.'),
(4, 'Цитата 4', 'Именно потому, что не было никакого запрета, все его греховные желания исчезли и потеряли свою привлекательность.'),
(6, 'Цитата 5', 'Самые дорогие галстуки носят те кому бы лучше подошла обычная веревка.'),
(7, 'Цитата 6', 'Чужого клеща каждый охаять может, а по мне и этот хорош.'),
(8, 'Цитата 7', 'Нет ничего проще чем бросить курить, я это делал тысячу раз.'),
(10, 'Цитата 8', 'Если хочешь, чтобы человек что-нибудь сделал, пусть даст зарок, что не станет делать этого во веки веков. Вернейший способ!'),
(13, 'ddd', 'gggg'),
(14, 'Цитата 9', 'Что приготовить в летнюю жару.'),
(17, 'ea inventore rerum', 'Ea repellat quo sed quasi. Reiciendis nam maxime nesciunt provident natus necessitatibus. Et nihil dolorem tempora atque. Harum maxime voluptatem aut.'),
(18, 'et repellat vero', 'Aut fugiat corporis in natus et. Sint alias voluptas quibusdam amet amet. Aut et architecto adipisci culpa.'),
(19, 'dignissimos iure dolorem', 'Deserunt placeat officiis vel iusto quam. Ut aliquam reiciendis impedit est perspiciatis reiciendis dolore.'),
(20, 'ratione possimus quia', 'Error rerum sed id eos vel molestias. Aliquam facere voluptatem aut officia quis. Non labore aut mollitia. Ut voluptates accusamus est perferendis corporis.'),
(21, 'et harum incidunt', 'Est consequuntur voluptatem esse nam qui veritatis non non. Velit aspernatur vel non minima molestias itaque natus. Qui ut rerum error. Repellat laborum corporis expedita fugiat in atque.'),
(22, 'est omnis et', 'Exercitationem voluptatem sit odio velit libero cupiditate inventore. Autem et porro est ullam. Consequatur aliquam nesciunt debitis iure corrupti voluptas architecto.'),
(23, 'maiores sapiente eum', 'Illo dolorem quo error ipsa quisquam exercitationem sit distinctio. Nam natus id aperiam dolores. Dolorem fugit unde qui et. Autem nam sit saepe expedita dolore rerum.'),
(24, 'architecto voluptatem dignissimos', 'Aperiam dolore dolores eius aspernatur aut. Nemo voluptates atque voluptatem totam aut. Culpa aut ex alias et. Eum libero libero dolores maiores ipsa est.'),
(25, 'eaque enim in', 'In voluptatem reiciendis sed totam. Qui ducimus sit libero et quo reprehenderit in. Corporis dolores voluptatem eaque illum porro voluptatem sed quisquam.'),
(26, 'voluptatem voluptates aperiam', 'Fugiat et qui non et distinctio necessitatibus. Et commodi molestiae quia doloremque.'),
(27, 'necessitatibus sint molestiae', 'Est itaque animi quae est delectus ullam sit. Doloribus labore unde necessitatibus. Neque rerum occaecati placeat exercitationem laboriosam natus.'),
(28, 'maiores quod dolorem', 'Voluptatem ab consequatur consequatur quia quo autem et. Quibusdam ipsum deleniti voluptate. Temporibus consequatur alias quia ut error pariatur. Et aut distinctio quidem.'),
(29, 'rerum ipsam quidem', 'Molestias aut quo voluptatem dolor. Quas pariatur quia aut qui voluptatum. Illum amet rem earum ab molestiae enim nisi occaecati. Dicta qui accusantium et sint.'),
(30, 'eius nisi sed', 'Ut necessitatibus ducimus eius. Nesciunt vel asperiores est inventore. Quaerat rerum quod cupiditate dolor consectetur. Quos error voluptates iste soluta fugit explicabo.'),
(31, 'quis autem nesciunt', 'Vel molestiae commodi molestiae animi consequatur. Et excepturi vero repellendus sunt. Eaque dolor consequatur sunt velit.'),
(32, 'sed blanditiis tempore', 'Iure non velit modi aliquam. Molestias impedit maxime modi voluptatem. Sunt nesciunt nostrum provident. Dolorem totam repellat aut ratione qui nulla aut nobis.'),
(33, 'pariatur quia quae', 'Ut exercitationem quo quo aspernatur neque. Voluptatem in et voluptates et qui eos. Assumenda voluptas voluptatibus qui sit ducimus ut nam. Aperiam non illum id hic.'),
(34, 'perspiciatis eius dicta', 'Laborum quisquam quia magnam architecto et. Possimus pariatur illo quis omnis consectetur qui sapiente sapiente. Veritatis corporis est iste dicta eum voluptates in.'),
(35, 'accusamus distinctio quae', 'Quis voluptatem sit ea eaque. Architecto est facere qui nesciunt quae repellendus magnam. Et et sunt doloribus molestias rem nobis ipsum. Aliquam natus ex itaque qui at.'),
(36, 'nihil et nesciunt', 'Ab accusantium ea distinctio architecto in et laborum. Molestiae culpa facere qui ad totam. Fugiat ut ipsam quos culpa cupiditate.'),
(37, 'autem deleniti qui', 'Quia qui dolores est tempora sint maiores. Non totam a et hic. Ab ipsum sed ut non commodi libero ut. Culpa eum ad aut distinctio.'),
(38, 'modi perspiciatis tenetur', 'Ipsam deleniti vel velit repellendus. Ut doloribus eligendi est nemo porro. Corporis suscipit sit ut voluptatibus.'),
(39, 'consectetur facilis ipsum', 'Quibusdam at et sed eos. Non consequuntur est velit ut incidunt at corporis. Debitis soluta ut sed amet qui dolorem molestiae.'),
(40, 'fugit assumenda nam', 'Quia quis quasi ad vel dolore. Magni quibusdam voluptatem eius corrupti praesentium a non. Qui ut rerum repellendus laudantium sed.'),
(41, 'ad accusamus esse', 'Sed aperiam doloribus soluta omnis qui sed. Ut et a aut aut earum assumenda. Quos ex id est quasi.'),
(42, 'voluptates saepe autem', 'Amet consequatur ut quam ipsa cupiditate sed. Rerum rerum voluptatem voluptas facere. Molestiae facilis sed totam.'),
(43, 'itaque odio eum', 'Optio reprehenderit quas corporis et dolorum nobis. Pariatur corrupti id ducimus omnis quis quas. Et ab ut molestias accusamus animi vel sunt.'),
(44, 'illo modi odio', 'Ad enim quidem itaque natus quis est. Sit illo eveniet vitae voluptas et aut sed.'),
(45, 'omnis ut dignissimos', 'Dolores autem ratione qui quae eum sequi non. Velit rerum aut ipsam ab quae distinctio sed. Id qui magni nihil illum distinctio repellendus.');

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `email` varchar(249) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) CHARACTER SET latin1 COLLATE latin1_general_cs NOT NULL,
  `username` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` tinyint(2) UNSIGNED NOT NULL DEFAULT '0',
  `verified` tinyint(1) UNSIGNED NOT NULL DEFAULT '0',
  `resettable` tinyint(1) UNSIGNED NOT NULL DEFAULT '1',
  `roles_mask` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `registered` int(10) UNSIGNED NOT NULL,
  `last_login` int(10) UNSIGNED DEFAULT NULL,
  `force_logout` mediumint(7) UNSIGNED NOT NULL DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `email`, `password`, `username`, `status`, `verified`, `resettable`, `roles_mask`, `registered`, `last_login`, `force_logout`) VALUES
(3, 'emiail@ss.r', '$2y$10$dl4fnYhM65/U1S7GD1GEmuT3C5NDCi6FyqsLc8o/d5tkefFXGiyde', 'Maria', 3, 0, 1, 0, 1629385195, NULL, 0),
(4, 'as@a.e', '$2y$10$muuGNmvArDvt37nEeTxPfuZ5DIfI6/GmWdwlsJvlVrnAvz.KUPN/e', 'Lana', 4, 0, 1, 1, 1629724254, NULL, 0),
(5, 'nmk@kk.ru', '$2y$10$vkf858RaSXvAYHAmN/YtYeikWVRhwwMeVEEr1HVdQ/dsMc40XnwMO', 'Ника Админ', 1, 1, 1, 1, 1633622926, 1635264188, 7),
(6, 'jjj@jj.com', '$2y$10$iCiPI0cg8SzZndDS9QIFa.9bc.5LFl80Sj0SARlnxVmva69kDLTUi', 'Джек', 2, 1, 1, 0, 1634566456, 1634913184, 9),
(7, 'zzz@z.com', '$2y$10$s4.m6zBSlUC3odEgW.JdrecB5wFjebc2GnUAH4i1AKFrqSVB81AYq', 'Иван', 6, 1, 1, 0, 1634662406, 1635161146, 3);

-- --------------------------------------------------------

--
-- Структура таблицы `users_confirmations`
--

CREATE TABLE `users_confirmations` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `email` varchar(249) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `selector` varchar(16) CHARACTER SET latin1 COLLATE latin1_general_cs NOT NULL,
  `token` varchar(255) CHARACTER SET latin1 COLLATE latin1_general_cs NOT NULL,
  `expires` int(10) UNSIGNED NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `users_confirmations`
--

INSERT INTO `users_confirmations` (`id`, `user_id`, `email`, `selector`, `token`, `expires`) VALUES
(1, 1, 'asd@sd.ru', 'P3GRKIOZZbgtg_48', '$2y$10$tk9Vd4LVbMrZKVrwTsBUa.KkvbNCX85lRcoroFSMhfwzluV/9kGFW', 1629454814),
(3, 3, 'email@ss.r', 'a4WstirMUb_tLnwf', '$2y$10$DMF52QhA1If92orngS9D8OJEeqrqptD8Rxak09Bow11krZ0pxtvIi', 1629471595),
(4, 4, 'as@a.e', 'WvkQQY0Va7xiV9Aw', '$2y$10$joIzz6n/O7DbQ9w6Yg5Gw.7BbIvUrEH4FgZPH46NFZRRvFvnjAWkG', 1629810655);

-- --------------------------------------------------------

--
-- Структура таблицы `users_remembered`
--

CREATE TABLE `users_remembered` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user` int(10) UNSIGNED NOT NULL,
  `selector` varchar(24) CHARACTER SET latin1 COLLATE latin1_general_cs NOT NULL,
  `token` varchar(255) CHARACTER SET latin1 COLLATE latin1_general_cs NOT NULL,
  `expires` int(10) UNSIGNED NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `users_resets`
--

CREATE TABLE `users_resets` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user` int(10) UNSIGNED NOT NULL,
  `selector` varchar(20) CHARACTER SET latin1 COLLATE latin1_general_cs NOT NULL,
  `token` varchar(255) CHARACTER SET latin1 COLLATE latin1_general_cs NOT NULL,
  `expires` int(10) UNSIGNED NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `users_throttling`
--

CREATE TABLE `users_throttling` (
  `bucket` varchar(44) CHARACTER SET latin1 COLLATE latin1_general_cs NOT NULL,
  `tokens` float UNSIGNED NOT NULL,
  `replenished_at` int(10) UNSIGNED NOT NULL,
  `expires_at` int(10) UNSIGNED NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `users_throttling`
--

INSERT INTO `users_throttling` (`bucket`, `tokens`, `replenished_at`, `expires_at`) VALUES
('ejWtPDKvxt-q7LZ3mFjzUoIWKJYzu47igC8Jd9mffFk', 74, 1635264188, 1635804188),
('CUeQSH1MUnRpuE3Wqv_fI3nADvMpK_cg6VpYK37vgIw', 4, 1634662406, 1635094406),
('sZYXdcyzJCIQjhLWDhxqtQgKYyGMgsFMjHNxwbpWOAE', 33.864, 1634662457, 1634734457),
('DM2D_vD0QQX5yAuh5AVJy-D4Pnu7IHgJ_wj0g9gLMCs', 29, 1629369538, 1629441538),
('RyMNBp4UKUeenWotaiEuo-JXJnfAME7yvW4JchS36Bk', 29, 1629369538, 1629441538),
('Jjl8HEbTSJpZBWoyXOajJXqciuUdngUbah061jwhliE', 18.2056, 1634662949, 1634698949),
('CqRaSb7zP0SfcwlyP-UKuCL74nP19D0GyX2cC1r-OBE', 499, 1633604047, 1633776847),
('CClC0NjGCVsSs2M90zy5Nzn73Ofod799OFk20qficPA', 29, 1633623494, 1633695494),
('pUtkfm55HO1U_OE0n-mSkMwTkoIkOQ1vtG9GvI31dZ4', 29, 1633623494, 1633695494),
('DMkhlAcJdASpPCJqbqxhraT2huLGZ5dhqfP0wapHFBA', 14.1575, 1634662265, 1634734265),
('1nTF1ZOTT8wx0jmmzME6K2HtRbdipOxVfabC4yEE2Dw', 14.1575, 1634662265, 1634734265),
('Zud4Jn5CJlOKVVcDn9JAZEuaFU6_X_XjqXqcE5Q43cE', 28.0017, 1634662458, 1634734458),
('kwzZB-2_QpTEclcqtlUUAFugCjmqCnqDm2wsHENX7pE', 28.0017, 1634662458, 1634734458),
('DTvVMuqR9vBs15_4KSVT6xvZKlRbK05kRU2dO1Z_95k', 499, 1634662949, 1634835749),
('2X063fuVjbUg4UeSmRXAC530SCE_QUW5Djet1KqnKMg', 8.08503, 1634920718, 1634949517);

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Индексы таблицы `users_confirmations`
--
ALTER TABLE `users_confirmations`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `selector` (`selector`),
  ADD KEY `email_expires` (`email`,`expires`),
  ADD KEY `user_id` (`user_id`);

--
-- Индексы таблицы `users_remembered`
--
ALTER TABLE `users_remembered`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `selector` (`selector`),
  ADD KEY `user` (`user`);

--
-- Индексы таблицы `users_resets`
--
ALTER TABLE `users_resets`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `selector` (`selector`),
  ADD KEY `user_expires` (`user`,`expires`);

--
-- Индексы таблицы `users_throttling`
--
ALTER TABLE `users_throttling`
  ADD PRIMARY KEY (`bucket`),
  ADD KEY `expires_at` (`expires_at`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;

--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT для таблицы `users_confirmations`
--
ALTER TABLE `users_confirmations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT для таблицы `users_remembered`
--
ALTER TABLE `users_remembered`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT для таблицы `users_resets`
--
ALTER TABLE `users_resets`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
