-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Anamakine: 127.0.0.1
-- Üretim Zamanı: 14 May 2023, 20:53:34
-- Sunucu sürümü: 10.4.28-MariaDB
-- PHP Sürümü: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Veritabanı: `arackiralama`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `araclar`
--

CREATE TABLE `araclar` (
  `arac_id` int(11) NOT NULL,
  `marka` varchar(250) NOT NULL,
  `model` varchar(250) NOT NULL,
  `yil` int(11) NOT NULL,
  `renk` varchar(250) NOT NULL,
  `gunluk_kiralama_fiyati` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `araclar`
--

INSERT INTO `araclar` (`arac_id`, `marka`, `model`, `yil`, `renk`, `gunluk_kiralama_fiyati`) VALUES
(1, 'Skoda', 'Superb', 2018, 'Metalik Gri', 1150),
(2, 'Dacia', 'Sandero', 2023, 'Arsenik Gri', 850),
(3, 'Fiat', 'Egea', 2018, 'beyaz', 600),
(4, 'Toyota', 'Corolla', 2022, 'beyaz', 800),
(5, 'Volkswagen ', 'Polo', 2017, 'Mercan Kırmızı', 500),
(6, 'Mercedes-Benz', '230 S', 1966, 'kahverengi', 2000),
(7, 'Audi ', 'A4', 2020, 'siyah', 1500);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `kiralama`
--

CREATE TABLE `kiralama` (
  `kiralama_id` int(11) NOT NULL,
  `kullanici_id` int(11) NOT NULL,
  `arac_id` int(11) NOT NULL,
  `kiralama_tarihi` date DEFAULT NULL,
  `teslim_tarihi` date DEFAULT NULL,
  `toplam_ucret` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `kiralama`
--

INSERT INTO `kiralama` (`kiralama_id`, `kullanici_id`, `arac_id`, `kiralama_tarihi`, `teslim_tarihi`, `toplam_ucret`) VALUES
(2, 1, 4, '2023-05-19', '2023-05-20', 800),
(3, 4, 2, '2023-05-29', '2023-05-31', 1700),
(4, 2, 7, '2023-06-11', '2023-06-17', 9000),
(5, 5, 6, '2023-07-09', '2023-07-12', 6000),
(6, 7, 5, '2023-06-04', '2023-06-05', 500),
(7, 3, 3, '2023-04-17', '2023-04-21', 2400),
(8, 6, 1, '2023-05-18', '2023-05-20', 2300);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `kullanicilar`
--

CREATE TABLE `kullanicilar` (
  `kullanici_id` int(11) NOT NULL,
  `kullanici_adi` varchar(250) NOT NULL,
  `eposta` varchar(250) NOT NULL,
  `sifre` varchar(250) NOT NULL,
  `ad` varchar(250) NOT NULL,
  `soyad` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `kullanicilar`
--

INSERT INTO `kullanicilar` (`kullanici_id`, `kullanici_adi`, `eposta`, `sifre`, `ad`, `soyad`) VALUES
(1, 'huseyin_demirtas', 'huseyindemirtas2@gmail.com', '12345.', 'Hüseyin', 'Demirtaş'),
(2, 'atahanadnr', 'atahan_adanir@gmail.com', 'atahan123', 'Atahan ', 'Adanır'),
(3, 'emineakay_', 'emineakaay@gmail.com', 'emine.24', 'Emine', 'Akay'),
(4, 'eliftugce', 'eliftbasar@gmail.com', '1992', 'Elif Tuğçe', 'Başar'),
(5, 'aysegulblt', 'aysegul1996@gmail.com', 'balta123', 'Ayşegül', 'Balta'),
(6, 'erol-bayram', 'erol1907@gmail.com', 'fener1907', 'Erol', 'Bayram'),
(7, 'akgun.duymaz', 'akgunduymaz35@gmail.com', '3535', 'Akgün', 'Duymaz');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `odeme`
--

CREATE TABLE `odeme` (
  `odeme_id` int(11) NOT NULL,
  `kiralama_id` int(11) NOT NULL,
  `odeme_tarihi` date DEFAULT NULL,
  `kart_no` varchar(255) DEFAULT NULL,
  `tutar` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `odeme`
--

INSERT INTO `odeme` (`odeme_id`, `kiralama_id`, `odeme_tarihi`, `kart_no`, `tutar`) VALUES
(1, 2, '2023-05-19', '1234 5678 9876 5432', 800),
(2, 3, '2023-05-29', '5588 4856 3244 0021', 1700),
(3, 4, '2023-06-11', '5346 7248 2113 5346', 9000),
(4, 5, '2023-07-09', '4677 8967 4534 4654', 6000),
(5, 6, '2023-06-04', '5347 6543 8792 4547', 500),
(6, 7, '2023-04-17', '5346 7890 5340 6754', 2400),
(7, 8, '2023-05-18', '5678 4567 4544 3452', 2300);

--
-- Dökümü yapılmış tablolar için indeksler
--

--
-- Tablo için indeksler `araclar`
--
ALTER TABLE `araclar`
  ADD PRIMARY KEY (`arac_id`);

--
-- Tablo için indeksler `kiralama`
--
ALTER TABLE `kiralama`
  ADD PRIMARY KEY (`kiralama_id`),
  ADD KEY `kullanici_id` (`kullanici_id`),
  ADD KEY `arac_id` (`arac_id`);

--
-- Tablo için indeksler `kullanicilar`
--
ALTER TABLE `kullanicilar`
  ADD PRIMARY KEY (`kullanici_id`);

--
-- Tablo için indeksler `odeme`
--
ALTER TABLE `odeme`
  ADD PRIMARY KEY (`odeme_id`),
  ADD KEY `kiralama_id` (`kiralama_id`);

--
-- Dökümü yapılmış tablolar için AUTO_INCREMENT değeri
--

--
-- Tablo için AUTO_INCREMENT değeri `araclar`
--
ALTER TABLE `araclar`
  MODIFY `arac_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- Tablo için AUTO_INCREMENT değeri `kiralama`
--
ALTER TABLE `kiralama`
  MODIFY `kiralama_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- Tablo için AUTO_INCREMENT değeri `kullanicilar`
--
ALTER TABLE `kullanicilar`
  MODIFY `kullanici_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- Tablo için AUTO_INCREMENT değeri `odeme`
--
ALTER TABLE `odeme`
  MODIFY `odeme_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- Dökümü yapılmış tablolar için kısıtlamalar
--

--
-- Tablo kısıtlamaları `kiralama`
--
ALTER TABLE `kiralama`
  ADD CONSTRAINT `kiralama_ibfk_1` FOREIGN KEY (`kullanici_id`) REFERENCES `kullanicilar` (`kullanici_id`),
  ADD CONSTRAINT `kiralama_ibfk_2` FOREIGN KEY (`arac_id`) REFERENCES `araclar` (`arac_id`) ON DELETE CASCADE;

--
-- Tablo kısıtlamaları `odeme`
--
ALTER TABLE `odeme`
  ADD CONSTRAINT `odeme_ibfk_1` FOREIGN KEY (`kiralama_id`) REFERENCES `kiralama` (`kiralama_id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
