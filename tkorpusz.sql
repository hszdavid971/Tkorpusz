-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Gép: 127.0.0.1
-- Létrehozás ideje: 2024. Jan 22. 09:44
-- Kiszolgáló verziója: 10.4.28-MariaDB
-- PHP verzió: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Adatbázis: `tkorpusz`
--

-- --------------------------------------------------------

--
-- Tábla szerkezet ehhez a táblához `referenciak`
--

CREATE TABLE `referenciak` (
  `id` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `mainImg` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_hungarian_ci;

--
-- A tábla adatainak kiíratása `referenciak`
--

INSERT INTO `referenciak` (`id`, `name`, `mainImg`) VALUES
(1, 'Élzárás', 'https://i.ibb.co/qdj0jjQ/asztalosmunkak.jpg'),
(2, 'Konyha bútorok', 'https://i.ibb.co/Kbhn5Rq/beepitettszekreny.jpg'),
(3, 'Parkettázás', 'https://i.ibb.co/cTk8K0Y/furdoszobaszekreny.jpg');

-- --------------------------------------------------------

--
-- Tábla szerkezet ehhez a táblához `refphotos`
--

CREATE TABLE `refphotos` (
  `id` int(11) NOT NULL,
  `refid` int(11) NOT NULL,
  `image` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_hungarian_ci;

--
-- A tábla adatainak kiíratása `refphotos`
--

INSERT INTO `refphotos` (`id`, `refid`, `image`) VALUES
(13, 1, 'https://i.ibb.co/DkxYQ7N/kep3.jpg'),
(14, 1, 'https://i.ibb.co/jb7yGkg/konyha.jpg'),
(15, 1, 'https://i.ibb.co/Bryrr7H/parkettazas.jpg'),
(16, 2, 'https://i.ibb.co/cTk8K0Y/furdoszobaszekreny.jpg'),
(17, 2, 'https://i.ibb.co/gvBQNKM/bemutatkozaskep.jpg'),
(18, 2, 'https://i.ibb.co/V2HbwJr/01.jpg'),
(19, 3, 'https://i.ibb.co/rMLRQds/02.jpg'),
(20, 3, 'https://i.ibb.co/mb6X3cv/03.jpg'),
(21, 3, 'https://i.ibb.co/CmnC3kc/04.jpg');

--
-- Indexek a kiírt táblákhoz
--

--
-- A tábla indexei `referenciak`
--
ALTER TABLE `referenciak`
  ADD PRIMARY KEY (`id`);

--
-- A tábla indexei `refphotos`
--
ALTER TABLE `refphotos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `refid` (`refid`);

--
-- A kiírt táblák AUTO_INCREMENT értéke
--

--
-- AUTO_INCREMENT a táblához `referenciak`
--
ALTER TABLE `referenciak`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT a táblához `refphotos`
--
ALTER TABLE `refphotos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- Megkötések a kiírt táblákhoz
--

--
-- Megkötések a táblához `refphotos`
--
ALTER TABLE `refphotos`
  ADD CONSTRAINT `refphotos_ibfk_1` FOREIGN KEY (`refid`) REFERENCES `referenciak` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
