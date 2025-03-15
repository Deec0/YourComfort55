-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Дек 07 2022 г., 09:07
-- Версия сервера: 8.0.24
-- Версия PHP: 7.4.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `your_comfort55`
--

-- --------------------------------------------------------

--
-- Структура таблицы `review`
--

CREATE TABLE `review` (
  `id` int NOT NULL,
  `status` int NOT NULL DEFAULT '0',
  `image` varchar(255) DEFAULT NULL,
  `comment` text NOT NULL,
  `user_id` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Дамп данных таблицы `review`
--

INSERT INTO `review` (`id`, `status`, `image`, `comment`, `user_id`) VALUES
(2, 1, NULL, '123', 1),
(11, 0, 'Скриншот 05.12.22_05.27.30.png', '4234', 7);

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `id` int NOT NULL,
  `username` varchar(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `username`, `name`, `password`) VALUES
(1, '1', '1', '$2y$10$wjj5RkPsFrg4bxLNU8Dk4.CYHonmujX/kFoybRJlgJPrUy88vv5aC'),
(2, '2', '2', '$2y$10$dYcwaUM7M.8EjiJZQQiF2eqEbaal8tTaQaWQKhey1pKhVMKG4kCiy'),
(3, '3', '3', '$2y$10$reb8xC5YdgP/fwHi6Q5LMeFNQ2y0L2gq1wR2MH/LZt1R./2SBtW66'),
(4, '4', '4', '$2y$10$uw01s4S6LEJWCzofASm8/Omp701v2RgdbK9881ODFTcXdH2vGepvC'),
(5, '22', '22', '$2y$10$zHc2lbzyT/09SICyTmUGyOWxJ9mxbBFVWkq4MJf7zEJB7F44mT9wG'),
(7, 'oleg2', 'Олег', '$2y$10$Hr6vJ/QQcMMHgHFHTUqYeORGPXRmR9WK6yjRTdODCqDycg6Py1FOK');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `review`
--
ALTER TABLE `review`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`),
  ADD KEY `id_2` (`id`),
  ADD KEY `user_id` (`user_id`);

--
-- Индексы таблицы `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `review`
--
ALTER TABLE `review`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- Ограничения внешнего ключа сохраненных таблиц
--

--
-- Ограничения внешнего ключа таблицы `review`
--
ALTER TABLE `review`
  ADD CONSTRAINT `review_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
