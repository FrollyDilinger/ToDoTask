-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Хост: localhost
-- Время создания: Июл 07 2021 г., 17:12
-- Версия сервера: 8.0.23
-- Версия PHP: 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `todo`
--

-- --------------------------------------------------------

--
-- Структура таблицы `tasks`
--

CREATE TABLE `tasks` (
  `id` int NOT NULL,
  `issued_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `admin_id` varchar(45) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `user_id` varchar(45) DEFAULT NULL,
  `content` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `tasks`
--

INSERT INTO `tasks` (`id`, `issued_at`, `admin_id`, `user_id`, `content`) VALUES
(4, '2021-07-06 10:20:03', '4', NULL, 'fdgfdsgfsd gfgfdsgfds g'),
(5, '2021-07-06 10:33:24', '4', NULL, 'фывфывфыв'),
(9, '2021-07-06 13:06:25', '6', NULL, 'ывыфв ысмма аиавысчыа'),
(13, '2021-07-06 15:10:34', '5', NULL, 'gdhgp[f mjgiohjg fo ihjg ohgfmh gghdggfdfjhgfh'),
(15, '2021-07-06 18:39:53', '8', NULL, 'asdsa  bvcbcv'),
(16, '2021-07-07 14:28:57', '9', NULL, 'sads ddftr tr'),
(17, '2021-07-07 14:29:07', '9', NULL, 'sdfdsf dsfsdfsda'),
(18, '2021-07-07 14:38:53', '9', '10', 'выавыа выа'),
(19, '2021-07-07 14:57:24', '9', '10', 'jfbhbsjfhf ghfdjgfdvfdv'),
(20, '2021-07-07 16:49:33', '9', '15', 'safddfdsf rgf d gfdg');

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `id` int NOT NULL,
  `username` varchar(45) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `login` varchar(45) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `password` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `email` varchar(255) NOT NULL,
  `status` enum('admin','user') CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `username`, `login`, `password`, `email`, `status`) VALUES
(9, 'Арт', 'admin1', '827ccb0eea8a706c4c34a16891f84e7b', '', 'admin'),
(10, 'Артём', 'user1', '827ccb0eea8a706c4c34a16891f84e7b', '', 'user'),
(13, 'finn', 'Kik', '202cb962ac59075b964b07152d234b70', 'asdsa@mail.ru', 'user'),
(14, 'Артём', 'OlegA', '81dc9bdb52d04dc20036dbd8313ed055', 'gogogo@gmail.com', 'user'),
(15, 'asdsadsa', 'qwe1', '202cb962ac59075b964b07152d234b70', 'sasdsa@mail.ru', 'user');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `tasks`
--
ALTER TABLE `tasks`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `tasks`
--
ALTER TABLE `tasks`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
