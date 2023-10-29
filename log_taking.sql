-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Окт 04 2023 г., 22:27
-- Версия сервера: 8.0.30
-- Версия PHP: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `php_NAPYLOVA`
--

-- --------------------------------------------------------

--
-- Структура таблицы `log_taking`
--

CREATE TABLE `log_taking` (
  `id` int NOT NULL,
  `reader_id` int NOT NULL,
  `book_id` int NOT NULL,
  `taken_at` date NOT NULL,
  `returned_at` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Дамп данных таблицы `log_taking`
--

INSERT INTO `log_taking` (`id`, `reader_id`, `book_id`, `taken_at`, `returned_at`) VALUES
(1, 1, 1, '2023-08-23', '2023-10-18'),
(2, 1, 1, '2023-08-23', '2023-10-05'),
(3, 1, 2, '2023-08-23', '2023-10-07'),
(4, 2, 3, '2023-08-23', NULL),
(5, 5, 5, '2013-10-02', NULL),
(6, 3, 3, '2023-08-07', '2023-10-05'),
(7, 2, 2, '2023-07-13', NULL),
(8, 2, 1, '2023-10-01', '2023-10-02'),
(9, 4, 2, '2023-05-24', '2023-07-03'),
(10, 1, 3, '2021-05-02', '2023-10-01'),
(11, 1, 4, '2022-08-23', '2023-03-05'),
(12, 2, 4, '2021-08-23', '2021-10-07'),
(13, 2, 5, '2022-08-23', NULL),
(14, 2, 5, '2016-10-04', '2016-11-04'),
(15, 3, 1, '2022-08-08', '2023-01-05'),
(16, 3, 2, '2021-03-13', '2022-10-05'),
(17, 4, 1, '2017-10-11', '2018-10-01'),
(18, 4, 5, '2021-05-21', '2022-07-01'),
(19, 5, 1, '2023-08-23', '2023-10-05'),
(20, 5, 3, '2021-08-23', '2023-10-03'),
(21, 5, 3, '2023-08-07', '2023-09-11'),
(22, 1, 3, '2021-02-11', '2023-10-01'),
(23, 2, 4, '2022-08-23', '2022-12-07'),
(24, 2, 5, '2016-12-04', '2018-11-04'),
(25, 4, 1, '2017-10-11', '2018-11-11');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `log_taking`
--
ALTER TABLE `log_taking`
  ADD PRIMARY KEY (`id`),
  ADD KEY `book_id` (`book_id`),
  ADD KEY `reader_id` (`reader_id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `log_taking`
--
ALTER TABLE `log_taking`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- Ограничения внешнего ключа сохраненных таблиц
--

--
-- Ограничения внешнего ключа таблицы `log_taking`
--
ALTER TABLE `log_taking`
  ADD CONSTRAINT `log_taking_ibfk_1` FOREIGN KEY (`book_id`) REFERENCES `books` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT,
  ADD CONSTRAINT `log_taking_ibfk_2` FOREIGN KEY (`reader_id`) REFERENCES `readers` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
