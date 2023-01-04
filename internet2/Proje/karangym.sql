-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Anamakine: 127.0.0.1
-- Üretim Zamanı: 04 Oca 2023, 02:48:08
-- Sunucu sürümü: 10.4.27-MariaDB
-- PHP Sürümü: 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Veritabanı: `karangym`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `depremler`
--

CREATE TABLE `depremler` (
  `id` int(11) NOT NULL,
  `lokasyon` varchar(512) NOT NULL,
  `lat` varchar(128) NOT NULL,
  `lng` varchar(128) NOT NULL,
  `mag` varchar(128) NOT NULL,
  `depth` varchar(128) NOT NULL,
  `tarih` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `iletisim`
--

CREATE TABLE `iletisim` (
  `id` int(11) NOT NULL,
  `adsoyad` varchar(250) NOT NULL,
  `telefon` varchar(250) NOT NULL,
  `email` varchar(250) NOT NULL,
  `konu` varchar(250) NOT NULL,
  `mesaj` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Tablo döküm verisi `iletisim`
--

INSERT INTO `iletisim` (`id`, `adsoyad`, `telefon`, `email`, `konu`, `mesaj`) VALUES
(10, 'Ronaldogil', '68475932', 'messigil@gmail.com', 'Ronaldo skills', 'portekiz'),
(11, 'Ronaldo ', '07777777777', 'cr7@mail.com', 'CR7 Balıkesirde', 'Ronaldo Balıkesire Transfer oldu'),
(12, 'neymar jr', '123123', 'neymar10@gmail.com', 'neymar dursunbeyde', 'neymar dursunbeye transfer oldu'),
(13, 'qweqwe', '111', 'qwe@gmail.com', 'selam', 'test');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `kullanicilar`
--

CREATE TABLE `kullanicilar` (
  `id` int(11) NOT NULL,
  `kullanici_adi` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `parola` varchar(250) NOT NULL,
  `kayıt_tarihi` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Tablo döküm verisi `kullanicilar`
--

INSERT INTO `kullanicilar` (`id`, `kullanici_adi`, `email`, `parola`, `kayıt_tarihi`) VALUES
(50, 'teoman', 'teo@gmail.com', '$2y$10$9JYtFKY3wCtzmSHBPXy0PuJSMiJPYVnxTPMyehX6QkuV1imO3obe.', '2023-01-04 03:53:01'),
(51, 'mustafa', 'musti@gmail.com', '$2y$10$CG2.A5cwWCSCMyQSPZqrF.Nkr.7mik4s/GJ2uTVhlnrfM47HeqTky', '2023-01-04 03:53:30');

--
-- Dökümü yapılmış tablolar için indeksler
--

--
-- Tablo için indeksler `depremler`
--
ALTER TABLE `depremler`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `iletisim`
--
ALTER TABLE `iletisim`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `kullanicilar`
--
ALTER TABLE `kullanicilar`
  ADD PRIMARY KEY (`id`);

--
-- Dökümü yapılmış tablolar için AUTO_INCREMENT değeri
--

--
-- Tablo için AUTO_INCREMENT değeri `depremler`
--
ALTER TABLE `depremler`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- Tablo için AUTO_INCREMENT değeri `iletisim`
--
ALTER TABLE `iletisim`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- Tablo için AUTO_INCREMENT değeri `kullanicilar`
--
ALTER TABLE `kullanicilar`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
