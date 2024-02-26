-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Gép: 127.0.0.1
-- Létrehozás ideje: 2024. Feb 23. 12:49
-- Kiszolgáló verziója: 10.4.6-MariaDB
-- PHP verzió: 7.3.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
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
-- Tábla szerkezet ehhez a táblához `referenciak_butorok`
--

CREATE TABLE `referenciak_butorok` (
  `id` int(11) NOT NULL,
  `name` varchar(200) COLLATE utf8mb4_hungarian_ci NOT NULL,
  `image` varchar(200) COLLATE utf8mb4_hungarian_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_hungarian_ci;

--
-- A tábla adatainak kiíratása `referenciak_butorok`
--

INSERT INTO `referenciak_butorok` (`id`, `name`, `image`) VALUES
(1, 'Bútor', 'https://i.ibb.co/mRLnvYL/kep-1.jpg'),
(2, 'Bútor', 'https://i.ibb.co/KsPyQvN/kep-2.jpg'),
(3, 'Bútor', 'https://i.ibb.co/j56S28N/kep-3.jpg'),
(4, 'Bútor', 'https://i.ibb.co/mFPCt2v/kep-4.jpg'),
(5, 'Bútor', 'https://i.ibb.co/p406fy2/kep-5.jpg'),
(6, 'Bútor', 'https://i.ibb.co/NN81v77/kep-6.jpg'),
(7, 'Bútor', 'https://i.ibb.co/rs0DZ1q/kep-7.jpg'),
(8, 'Bútor', 'https://i.ibb.co/9sw5vqy/kep-8.jpg'),
(9, 'Bútor', 'https://i.ibb.co/dtF3F8c/kep-9.jpg'),
(10, 'Bútor', 'https://i.ibb.co/V3x7HGJ/kep-10.jpg'),
(11, 'Bútor', 'https://i.ibb.co/0XL0mn4/kep-11.jpg'),
(12, 'Bútor', 'https://i.ibb.co/TvDx3mW/kep-12.jpg'),
(13, 'Bútor', 'https://i.ibb.co/HBV5hv6/kep-13.jpg'),
(14, 'Bútor', 'https://i.ibb.co/C7NPYBW/kep-14.jpg'),
(15, 'Bútor', 'https://i.ibb.co/5jCCdKb/kep-15.jpg'),
(16, 'Bútor', 'https://i.ibb.co/hfk1CWh/kep-16.jpg'),
(17, 'Bútor', 'https://i.ibb.co/JnVHZXt/kep-17.jpg'),
(18, 'Bútor', 'https://i.ibb.co/RYV0KQL/kep-18.jpg'),
(19, 'Bútor', 'https://i.ibb.co/59BJSQn/kep-19.jpg'),
(20, 'Bútor', 'https://i.ibb.co/t3FPLKR/kep-20.jpg'),
(21, 'Bútor', 'https://i.ibb.co/yRq2tKS/kep-21.jpg'),
(22, 'Bútor', 'https://i.ibb.co/QdwJ47F/kep-22.jpg'),
(23, 'Bútor', 'https://i.ibb.co/8KnQnft/kep-23.jpg'),
(24, 'Bútor', 'https://i.ibb.co/SmycX02/kep-24.jpg'),
(25, 'Bútor', 'https://i.ibb.co/d44jkhR/kep-25.jpg'),
(26, 'Bútor', 'https://i.ibb.co/58DX8nG/kep-26.jpg'),
(27, 'Bútor', 'https://i.ibb.co/BTyS75S/kep-27.jpg'),
(28, 'Bútor', 'https://i.ibb.co/Yp61f8w/kep-28.jpg'),
(29, 'Bútor', 'https://i.ibb.co/7QDzQMd/kep-29.jpg'),
(30, 'Bútor', 'https://i.ibb.co/c20nNCt/kep-30.jpg'),
(31, 'Bútor', 'https://i.ibb.co/mHKG1Th/kep-31.jpg'),
(32, 'Bútor', 'https://i.ibb.co/jHbdmxt/kep-32.jpg'),
(33, 'Bútor', 'https://i.ibb.co/YZPz4mL/kep-33.jpg'),
(34, 'Bútor', 'https://i.ibb.co/fFZYmMX/kep-34.jpg'),
(35, 'Bútor', 'https://i.ibb.co/FDRvbXb/kep-35.jpg'),
(36, 'Bútor', 'https://i.ibb.co/4P2Xdzk/kep-36.jpg'),
(37, 'Bútor', 'https://i.ibb.co/CVfmxWj/kep-37.jpg'),
(38, 'Bútor', 'https://i.ibb.co/27p6BT4/kep-38.jpg'),
(39, 'Bútor', 'https://i.ibb.co/7NjqjF1/kep-39.jpg'),
(40, 'Bútor', 'https://i.ibb.co/tQsMRLN/kep-40.jpg'),
(41, 'Bútor', 'https://i.ibb.co/88WXkrZ/kep-41.jpg'),
(42, 'Bútor', 'https://i.ibb.co/Z2b2DJB/kep-42.jpg'),
(43, 'Bútor', 'https://i.ibb.co/16bhc2x/kep-43.jpg'),
(44, 'Bútor', 'https://i.ibb.co/2FRxXvB/kep-44.jpg'),
(45, 'Bútor', 'https://i.ibb.co/Bs0y5FB/kep-45.jpg'),
(46, 'Bútor', 'https://i.ibb.co/Db8ccYf/kep-46.jpg'),
(47, 'Bútor', 'https://i.ibb.co/rGTCpZ3/kep-47.jpg'),
(48, 'Bútor', 'https://i.ibb.co/xm5nFZw/kep-48.jpg'),
(49, 'Bútor', 'https://i.ibb.co/TWv6Rq6/kep-49.jpg'),
(50, 'Bútor', 'https://i.ibb.co/N7tKwf9/kep-50.jpg'),
(51, 'Bútor', 'https://i.ibb.co/G7YRyCs/kep-51.jpg'),
(52, 'Bútor', 'https://i.ibb.co/dmM3Try/kep-52.jpg'),
(53, 'Bútor', 'https://i.ibb.co/Vm609Wt/kep-53.jpg'),
(54, 'Bútor', 'https://i.ibb.co/16g5zmx/kep-54.jpg'),
(55, 'Bútor', 'https://i.ibb.co/DkK1rf3/kep-55.jpg'),
(56, 'Bútor', 'https://i.ibb.co/1qqGmHR/kep-56.jpg'),
(57, 'Bútor', 'https://i.ibb.co/vmJD1Tw/kep-57.jpg'),
(58, 'Bútor', 'https://i.ibb.co/pR4vNg2/kep-58.jpg'),
(59, 'Bútor', 'https://i.ibb.co/V92wq1Q/kep-59.jpg'),
(60, 'Bútor', 'https://i.ibb.co/T0QZQbB/kep-60.jpg'),
(61, 'Bútor', 'https://i.ibb.co/dJXTRXD/kep-61.jpg'),
(62, 'Bútor', 'https://i.ibb.co/n3qdVGs/kep-62.jpg'),
(63, 'Bútor', 'https://i.ibb.co/YB28wKw/kep-63.jpg'),
(64, 'Bútor', 'https://i.ibb.co/pZF65km/kep-64.jpg'),
(65, 'Bútor', 'https://i.ibb.co/KWBF1Td/kep-65.jpg'),
(66, 'Bútor', 'https://i.ibb.co/V2q838S/kep-66.jpg'),
(67, 'Bútor', 'https://i.ibb.co/HTJKnG6/kep-67.jpg'),
(68, 'Bútor', 'https://i.ibb.co/hRzCFS8/kep-68.jpg'),
(69, 'Bútor', 'https://i.ibb.co/bB33zBc/kep-69.jpg'),
(70, 'Bútor', 'https://i.ibb.co/Bzzwcwg/kep-70.jpg'),
(71, 'Bútor', 'https://i.ibb.co/6PM5bNz/kep-71.jpg'),
(72, 'Bútor', 'https://i.ibb.co/Rj4p5z3/kep-72.jpg'),
(73, 'Bútor', 'https://i.ibb.co/wQRmSWY/kep-73.jpg'),
(74, 'Bútor', 'https://i.ibb.co/tPLcnfv/kep-74.jpg'),
(75, 'Bútor', 'https://i.ibb.co/VgZbF7W/kep-75.jpg'),
(76, 'Bútor', 'https://i.ibb.co/xC5Zbmw/kep-76.jpg'),
(77, 'Bútor', 'https://i.ibb.co/LtspVCb/kep-77.jpg'),
(78, 'Bútor', 'https://i.ibb.co/FzFRJ95/kep-78.jpg'),
(79, 'Bútor', 'https://i.ibb.co/VVxbDBN/kep-79.jpg'),
(80, 'Bútor', 'https://i.ibb.co/3BmRZbT/kep-80.jpg'),
(81, 'Bútor', 'https://i.ibb.co/5M9yg0h/kep-81.jpg'),
(82, 'Bútor', 'https://i.ibb.co/cQkqyWR/kep-82.jpg'),
(83, 'Bútor', 'https://i.ibb.co/cJ7R1yQ/kep-83.jpg'),
(84, 'Bútor', 'https://i.ibb.co/kqjdb3P/kep-84.jpg'),
(85, 'Bútor', 'https://i.ibb.co/TRN0ZgS/kep-85.jpg'),
(86, 'Bútor', 'https://i.ibb.co/Tc18vDP/kep-86.jpg'),
(87, 'Bútor', 'https://i.ibb.co/YtNnKfg/kep-87.jpg'),
(88, 'Bútor', 'https://i.ibb.co/TPm6thg/kep-88.jpg'),
(89, 'Bútor', 'https://i.ibb.co/Dwq3nKf/kep-89.jpg'),
(90, 'Bútor', 'https://i.ibb.co/gtrTJs6/kep-90.jpg'),
(91, 'Bútor', 'https://i.ibb.co/RHddQVW/kep-91.jpg'),
(92, 'Bútor', 'https://i.ibb.co/8b26V1k/kep-92.jpg'),
(93, 'Bútor', 'https://i.ibb.co/5hv02vM/kep-93.jpg'),
(94, 'Bútor', 'https://i.ibb.co/gt8h13M/kep-94.jpg');

-- --------------------------------------------------------

--
-- Tábla szerkezet ehhez a táblához `referenciak_egyeb`
--

CREATE TABLE `referenciak_egyeb` (
  `id` int(11) NOT NULL,
  `name` int(200) NOT NULL,
  `image` int(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_hungarian_ci;

-- --------------------------------------------------------

--
-- Tábla szerkezet ehhez a táblához `referenciak_elzaras`
--

CREATE TABLE `referenciak_elzaras` (
  `id` int(11) NOT NULL,
  `name` varchar(200) COLLATE utf8_hungarian_ci NOT NULL,
  `image` varchar(200) COLLATE utf8_hungarian_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_hungarian_ci;

--
-- Indexek a kiírt táblákhoz
--

--
-- A tábla indexei `referenciak_butorok`
--
ALTER TABLE `referenciak_butorok`
  ADD PRIMARY KEY (`id`);

--
-- A tábla indexei `referenciak_egyeb`
--
ALTER TABLE `referenciak_egyeb`
  ADD PRIMARY KEY (`id`);

--
-- A tábla indexei `referenciak_elzaras`
--
ALTER TABLE `referenciak_elzaras`
  ADD PRIMARY KEY (`id`);

--
-- A kiírt táblák AUTO_INCREMENT értéke
--

--
-- AUTO_INCREMENT a táblához `referenciak_butorok`
--
ALTER TABLE `referenciak_butorok`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=140;

--
-- AUTO_INCREMENT a táblához `referenciak_egyeb`
--
ALTER TABLE `referenciak_egyeb`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT a táblához `referenciak_elzaras`
--
ALTER TABLE `referenciak_elzaras`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
