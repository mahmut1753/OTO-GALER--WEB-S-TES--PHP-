-- phpMyAdmin SQL Dump
-- version 4.6.6
-- https://www.phpmyadmin.net/
--
-- Anamakine: localhost
-- Üretim Zamanı: 14 May 2019, 19:30:01
-- Sunucu sürümü: 5.7.17-log
-- PHP Sürümü: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Veritabanı: `otogaleri`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `admin`
--

CREATE TABLE `admin` (
  `admin_id` int(11) NOT NULL,
  `adminkul` varchar(16) COLLATE utf8_turkish_ci NOT NULL,
  `adminsifre` varchar(16) COLLATE utf8_turkish_ci NOT NULL,
  `adminadi` varchar(11) COLLATE utf8_turkish_ci NOT NULL,
  `resim` varchar(11) COLLATE utf8_turkish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `admin`
--

INSERT INTO `admin` (`admin_id`, `adminkul`, `adminsifre`, `adminadi`, `resim`) VALUES
(2, 'admin', '1753', 'Mahmut', 'img/12.jpg'),
(3, 'kamil', '12345', 'Kamil', 'img/m4.jpg');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `araclar`
--

CREATE TABLE `araclar` (
  `arac_id` int(11) NOT NULL,
  `marka` int(11) NOT NULL,
  `model` int(11) NOT NULL,
  `seri` int(11) NOT NULL,
  `kilometre` int(11) NOT NULL,
  `yakıt` int(11) NOT NULL,
  `vites` int(11) NOT NULL,
  `motorgücü` int(11) NOT NULL,
  `motorhacmi` int(11) NOT NULL,
  `renk` int(11) NOT NULL,
  `fiyat` int(11) NOT NULL,
  `yorum` int(11) DEFAULT NULL,
  `durumu` int(11) NOT NULL,
  `resim1` varchar(256) COLLATE utf8_turkish_ci DEFAULT NULL,
  `resim2` varchar(256) COLLATE utf8_turkish_ci DEFAULT NULL,
  `resim3` varchar(256) COLLATE utf8_turkish_ci DEFAULT NULL,
  `resim4` varchar(256) COLLATE utf8_turkish_ci DEFAULT NULL,
  `resim5` varchar(256) COLLATE utf8_turkish_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `araclar`
--

INSERT INTO `araclar` (`arac_id`, `marka`, `model`, `seri`, `kilometre`, `yakıt`, `vites`, `motorgücü`, `motorhacmi`, `renk`, `fiyat`, `yorum`, `durumu`, `resim1`, `resim2`, `resim3`, `resim4`, `resim5`) VALUES
(36, 13, 26, 8, 0, 2, 1, 7, 5, 14, 5000000, NULL, 1, 'araclar/33550173750x5_2118350807cj.jpg', 'araclar/33550173750x5_211835080p09.jpg', 'araclar/41027397400x5_2118350802ia.jpg', 'araclar/16681124661x5_211835080783.jpg', 'araclar/245954231015x5_211835080p1m.jpg'),
(37, 12, 25, 19, 1213, 4, 6, 5, 1, 14, 1000000, NULL, 1, 'araclar/88840177610x5_5206681454f7.jpg', 'araclar/88840177610x5_520668145gux.jpg', 'araclar/272854470806x5_5206681455z5.jpg', 'araclar/189905408890x5_520668145gro.jpg', 'araclar/117411117184x5_520668145bv8.jpg'),
(38, 11, 24, 19, 50000, 2, 2, 10, 4, 1, 500000, NULL, 1, 'araclar/22304473024x5_667250720w03.jpg', 'araclar/22304473024x5_667250720rbz.jpg', 'araclar/23890384873x5_66725072074u.jpg', 'araclar/219905146242x5_667250720eoj.jpg', 'araclar/263888224875x5_6672507201zi.jpg'),
(39, 10, 23, 17, 100000, 1, 4, 9, 6, 14, 200000, NULL, 1, 'araclar/8955476499x5_6925441480tw.jpg', 'araclar/8955476499x5_6925441488sn.jpg', 'araclar/102138234252x5_69254414884v.jpg', 'araclar/340530151789x5_692544148724.jpg', 'araclar/82624379360x5_692544148a2f.jpg'),
(40, 9, 22, 17, 5000, 2, 2, 9, 4, 1, 450000, NULL, 1, 'araclar/39680868794x5_692836487xg9.jpg', 'araclar/39680868794x5_692836487azj.jpg', 'araclar/37267383809x5_692836487581.jpg', 'araclar/275134423601x5_6928364871ni.jpg', 'araclar/164707479134x5_6928364871wk.jpg'),
(41, 8, 21, 10, 100000, 1, 1, 6, 1, 12, 250000, NULL, 1, 'araclar/201318477994x5_651043280ndm.jpg', 'araclar/201318477994x5_65104328082w.jpg', 'araclar/282475391124x5_651043280vhf.jpg', 'araclar/49193018079x5_6510432800ud.jpg', 'araclar/308189237140x5_651043280jor.jpg'),
(42, 3, 20, 19, 10000, 2, 1, 9, 1, 14, 150000, NULL, 1, 'araclar/383403366275x5_692068867r5r.jpg', 'araclar/383403366275x5_692068867rlf.jpg', 'araclar/90329199890x5_6920688671ws.jpg', 'araclar/182215395485x5_6920688679yz.jpg', 'araclar/414893125907x5_692068867xmm.jpg'),
(43, 2, 19, 16, 45000, 2, 1, 7, 5, 13, 700000, NULL, 1, 'araclar/48338252672x5_348381047e64.jpg', 'araclar/48338252672x5_34838104719v.jpg', 'araclar/490836459058x5_348381047sdo.jpg', 'araclar/380044163582x5_3483810470tu.jpg', 'araclar/309861434924x5_348381047ee4.jpg');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `banner`
--

CREATE TABLE `banner` (
  `banner_id` int(11) NOT NULL,
  `bannerfoto` varchar(200) COLLATE utf8_turkish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `bultenkayit`
--

CREATE TABLE `bultenkayit` (
  `bulten_id` int(11) NOT NULL,
  `isim` varchar(50) COLLATE utf8_turkish_ci NOT NULL,
  `email` varchar(50) COLLATE utf8_turkish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `bultenkayit`
--

INSERT INTO `bultenkayit` (`bulten_id`, `isim`, `email`) VALUES
(2, 'levon çapar', 'levoncapar1998@gmail.com'),
(3, 'mahmut is', 'mahmut1753313@gmail.com');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `iletisim`
--

CREATE TABLE `iletisim` (
  `iletisim_id` int(11) NOT NULL,
  `konu` varchar(11) COLLATE utf8_turkish_ci NOT NULL,
  `adsoyad` varchar(50) COLLATE utf8_turkish_ci NOT NULL,
  `email` varchar(35) COLLATE utf8_turkish_ci NOT NULL,
  `telefon` int(12) NOT NULL,
  `mesaj` varchar(999) COLLATE utf8_turkish_ci NOT NULL,
  `tarih` varchar(11) COLLATE utf8_turkish_ci NOT NULL,
  `saat` varchar(11) COLLATE utf8_turkish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `iletisim`
--

INSERT INTO `iletisim` (`iletisim_id`, `konu`, `adsoyad`, `email`, `telefon`, `mesaj`, `tarih`, `saat`) VALUES
(16, 'ÖNERİ', 'mahmut is', 'mahoagan1753@gmail.com', 1254862, 'merhaba galeriniz çok iyi', '23.04.2019 ', '08:43:29'),
(17, 'ÖNERİ', 'mahmut is', 'mahoagan1753@gmail.com', 1254862, 'merhaba galeriniz çok iyi', '23.04.2019 ', '09:00:16'),
(19, 'Not select', 'dscfsdcfds', 'dsfsd', 0, 'dfsdfsd', '29.04.2019 ', '19:14:53'),
(20, 'Not select', 'ssss', 'sss', 0, 'ss', '14.05.2019 ', '19:36:58');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `markalar`
--

CREATE TABLE `markalar` (
  `marka_id` int(11) NOT NULL,
  `marka` varchar(30) COLLATE utf8_turkish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `markalar`
--

INSERT INTO `markalar` (`marka_id`, `marka`) VALUES
(2, 'Bmw'),
(3, 'Volvo'),
(8, 'Maserati'),
(9, 'Mercedes'),
(10, 'Jeep'),
(11, 'Porhse'),
(12, 'Tesla'),
(13, 'Rolls Royce');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `model`
--

CREATE TABLE `model` (
  `model_id` int(11) NOT NULL,
  `modelad` varchar(50) COLLATE utf8_turkish_ci NOT NULL,
  `marka` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `model`
--

INSERT INTO `model` (`model_id`, `modelad`, `marka`) VALUES
(19, 'M4', 2),
(20, 'S-60', 3),
(21, 'GranTurismo ', 8),
(22, 'E-250 4-Matic', 9),
(23, 'Compass ', 10),
(24, 'Cayenne ', 11),
(25, 'Model X ', 12),
(26, 'Phantom', 13);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `motorgücü`
--

CREATE TABLE `motorgücü` (
  `motorgüc_id` int(11) NOT NULL,
  `motorgücü` varchar(30) COLLATE utf8_turkish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `motorgücü`
--

INSERT INTO `motorgücü` (`motorgüc_id`, `motorgücü`) VALUES
(1, '110 HP'),
(2, '115 HP'),
(3, '120 HP'),
(4, '130 HP'),
(5, '136 HP'),
(6, '150 HP'),
(7, '190 HP'),
(8, '160 HP'),
(9, '170 HP'),
(10, '180 HP');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `motorhacmi`
--

CREATE TABLE `motorhacmi` (
  `hacim_id` int(11) NOT NULL,
  `hacim` varchar(30) COLLATE utf8_turkish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `motorhacmi`
--

INSERT INTO `motorhacmi` (`hacim_id`, `hacim`) VALUES
(1, '2001-2500'),
(2, '1401-1600'),
(3, '1200'),
(4, '2501-3000'),
(5, '3001-3500'),
(6, '1601-1800');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `renk`
--

CREATE TABLE `renk` (
  `renk_id` int(11) NOT NULL,
  `renk` varchar(30) COLLATE utf8_turkish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `renk`
--

INSERT INTO `renk` (`renk_id`, `renk`) VALUES
(1, 'Beyaz'),
(2, 'Bej'),
(3, 'Bordo'),
(4, 'Füme'),
(5, 'Gri'),
(6, 'Gümüş Gri'),
(7, 'Kahverengi'),
(8, 'Kırmızı'),
(9, 'Lacivert'),
(10, 'Mavi'),
(11, 'Mor'),
(12, 'Pembe'),
(13, 'Sarı'),
(14, 'Siyah'),
(15, 'Turkuaz'),
(16, 'Turuncu'),
(17, 'Yeşil');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `seri`
--

CREATE TABLE `seri` (
  `seri_id` int(11) NOT NULL,
  `seriyıl` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `seri`
--

INSERT INTO `seri` (`seri_id`, `seriyıl`) VALUES
(1, 2000),
(2, 2001),
(3, 2002),
(4, 2003),
(5, 2004),
(6, 2005),
(7, 2006),
(8, 2007),
(9, 2008),
(10, 2009),
(11, 2010),
(12, 2011),
(13, 2012),
(14, 2013),
(15, 2014),
(16, 2015),
(17, 2016),
(18, 2017),
(19, 2018),
(20, 2019),
(21, 2020);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `slider`
--

CREATE TABLE `slider` (
  `slider_id` int(11) NOT NULL,
  `slideradi` varchar(11) COLLATE utf8_turkish_ci NOT NULL,
  `slideryolu` varchar(256) COLLATE utf8_turkish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `slider`
--

INSERT INTO `slider` (`slider_id`, `slideradi`, `slideryolu`) VALUES
(53, '2', 'slide/2862132539484.jpg'),
(54, 'asdasd', 'slide/27456326503anasayfa.png'),
(56, 'adasd', 'slide/112381214708ipad-pro-as-my-development-machine-1.jpg');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `vites`
--

CREATE TABLE `vites` (
  `vites_id` int(11) NOT NULL,
  `vitestürü` varchar(50) COLLATE utf8_turkish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `vites`
--

INSERT INTO `vites` (`vites_id`, `vitestürü`) VALUES
(1, 'Manuel'),
(2, 'Tam Otomatik'),
(3, 'Yarı Ototmatik'),
(4, 'Otomatikleştirilmiş Manuel'),
(5, 'Tiptronic'),
(6, 'DSG (Direct-Shift-Gearbox)'),
(7, 'DCT (Dual Clutch Transmission)'),
(8, 'CVT (Constantly Variable Transmission)');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `yakıt`
--

CREATE TABLE `yakıt` (
  `yakıt_id` int(11) NOT NULL,
  `yakıttürü` varchar(30) COLLATE utf8_turkish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `yakıt`
--

INSERT INTO `yakıt` (`yakıt_id`, `yakıttürü`) VALUES
(1, 'Dizel'),
(2, 'Benzin'),
(3, 'LPG (Liquified Petroleum Gas)'),
(4, 'Elektrik (hibrit)');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `yorumlar`
--

CREATE TABLE `yorumlar` (
  `yorum_id` int(11) NOT NULL,
  `arac_id` int(11) NOT NULL,
  `adsoyad` varchar(30) COLLATE utf8_turkish_ci NOT NULL,
  `email` varchar(30) COLLATE utf8_turkish_ci NOT NULL,
  `yorum` varchar(300) COLLATE utf8_turkish_ci NOT NULL,
  `tarih` varchar(11) COLLATE utf8_turkish_ci NOT NULL,
  `saat` varchar(11) COLLATE utf8_turkish_ci NOT NULL,
  `durumu` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `yorumlar`
--

INSERT INTO `yorumlar` (`yorum_id`, `arac_id`, `adsoyad`, `email`, `yorum`, `tarih`, `saat`, `durumu`) VALUES
(2, 28, 'mahmut is', 'mahmut1753313@gmail.com', 'Araç Çok ucuz bu fiyata kesin almak lazım', '27.04.2019 ', '17:35:35', 1),
(17, 28, 'mahmut is', 'mahmut1753313@gmail.com', 'asdasd', '28.04.2019 ', '01:26:10', 1),
(18, 28, 'mahmut is', 'mahmut1753313@gmail.com', '12312', '28.04.2019 ', '01:27:48', 1),
(26, 28, 'mahmut is', 'mahmut1753313@gmail.com', 'sDAFSVDSA', '28.04.2019 ', '02:13:44', 1),
(28, 28, 'levon çapar', 'levoncapar@gmail.com', 'Çok güzel araçlarınız mevcut', '29.04.2019 ', '19:08:55', 1),
(30, 29, 'mahmut is', 'mahmut1753313@gmail.com', 'asdfsf', '06.05.2019 ', '17:44:08', 1),
(31, 35, 'mahmut is', 'mahmut1753313@gmail.com', 'aDSFKJHGFDSA', '14.05.2019 ', '19:56:46', 1);

--
-- Dökümü yapılmış tablolar için indeksler
--

--
-- Tablo için indeksler `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Tablo için indeksler `araclar`
--
ALTER TABLE `araclar`
  ADD PRIMARY KEY (`arac_id`),
  ADD KEY `marka` (`marka`),
  ADD KEY `model` (`model`),
  ADD KEY `seri` (`seri`),
  ADD KEY `yakıt` (`yakıt`),
  ADD KEY `vites` (`vites`),
  ADD KEY `motorgücü` (`motorgücü`),
  ADD KEY `motorhacmi` (`motorhacmi`),
  ADD KEY `yorum` (`yorum`),
  ADD KEY `renk` (`renk`);

--
-- Tablo için indeksler `banner`
--
ALTER TABLE `banner`
  ADD PRIMARY KEY (`banner_id`);

--
-- Tablo için indeksler `bultenkayit`
--
ALTER TABLE `bultenkayit`
  ADD PRIMARY KEY (`bulten_id`);

--
-- Tablo için indeksler `iletisim`
--
ALTER TABLE `iletisim`
  ADD PRIMARY KEY (`iletisim_id`);

--
-- Tablo için indeksler `markalar`
--
ALTER TABLE `markalar`
  ADD PRIMARY KEY (`marka_id`);

--
-- Tablo için indeksler `model`
--
ALTER TABLE `model`
  ADD PRIMARY KEY (`model_id`),
  ADD KEY `marka` (`marka`);

--
-- Tablo için indeksler `motorgücü`
--
ALTER TABLE `motorgücü`
  ADD PRIMARY KEY (`motorgüc_id`);

--
-- Tablo için indeksler `motorhacmi`
--
ALTER TABLE `motorhacmi`
  ADD PRIMARY KEY (`hacim_id`);

--
-- Tablo için indeksler `renk`
--
ALTER TABLE `renk`
  ADD PRIMARY KEY (`renk_id`);

--
-- Tablo için indeksler `seri`
--
ALTER TABLE `seri`
  ADD PRIMARY KEY (`seri_id`);

--
-- Tablo için indeksler `slider`
--
ALTER TABLE `slider`
  ADD PRIMARY KEY (`slider_id`);

--
-- Tablo için indeksler `vites`
--
ALTER TABLE `vites`
  ADD PRIMARY KEY (`vites_id`);

--
-- Tablo için indeksler `yakıt`
--
ALTER TABLE `yakıt`
  ADD PRIMARY KEY (`yakıt_id`);

--
-- Tablo için indeksler `yorumlar`
--
ALTER TABLE `yorumlar`
  ADD PRIMARY KEY (`yorum_id`);

--
-- Dökümü yapılmış tablolar için AUTO_INCREMENT değeri
--

--
-- Tablo için AUTO_INCREMENT değeri `admin`
--
ALTER TABLE `admin`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- Tablo için AUTO_INCREMENT değeri `araclar`
--
ALTER TABLE `araclar`
  MODIFY `arac_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;
--
-- Tablo için AUTO_INCREMENT değeri `banner`
--
ALTER TABLE `banner`
  MODIFY `banner_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- Tablo için AUTO_INCREMENT değeri `bultenkayit`
--
ALTER TABLE `bultenkayit`
  MODIFY `bulten_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- Tablo için AUTO_INCREMENT değeri `iletisim`
--
ALTER TABLE `iletisim`
  MODIFY `iletisim_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
--
-- Tablo için AUTO_INCREMENT değeri `markalar`
--
ALTER TABLE `markalar`
  MODIFY `marka_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
--
-- Tablo için AUTO_INCREMENT değeri `model`
--
ALTER TABLE `model`
  MODIFY `model_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;
--
-- Tablo için AUTO_INCREMENT değeri `motorgücü`
--
ALTER TABLE `motorgücü`
  MODIFY `motorgüc_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- Tablo için AUTO_INCREMENT değeri `motorhacmi`
--
ALTER TABLE `motorhacmi`
  MODIFY `hacim_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- Tablo için AUTO_INCREMENT değeri `renk`
--
ALTER TABLE `renk`
  MODIFY `renk_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
--
-- Tablo için AUTO_INCREMENT değeri `seri`
--
ALTER TABLE `seri`
  MODIFY `seri_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
--
-- Tablo için AUTO_INCREMENT değeri `slider`
--
ALTER TABLE `slider`
  MODIFY `slider_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=58;
--
-- Tablo için AUTO_INCREMENT değeri `vites`
--
ALTER TABLE `vites`
  MODIFY `vites_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- Tablo için AUTO_INCREMENT değeri `yakıt`
--
ALTER TABLE `yakıt`
  MODIFY `yakıt_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- Tablo için AUTO_INCREMENT değeri `yorumlar`
--
ALTER TABLE `yorumlar`
  MODIFY `yorum_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;
--
-- Dökümü yapılmış tablolar için kısıtlamalar
--

--
-- Tablo kısıtlamaları `araclar`
--
ALTER TABLE `araclar`
  ADD CONSTRAINT `araclar_ibfk_1` FOREIGN KEY (`marka`) REFERENCES `markalar` (`marka_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `araclar_ibfk_10` FOREIGN KEY (`yorum`) REFERENCES `yorumlar` (`yorum_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `araclar_ibfk_2` FOREIGN KEY (`model`) REFERENCES `model` (`model_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `araclar_ibfk_3` FOREIGN KEY (`seri`) REFERENCES `seri` (`seri_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `araclar_ibfk_4` FOREIGN KEY (`yakıt`) REFERENCES `yakıt` (`yakıt_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `araclar_ibfk_5` FOREIGN KEY (`vites`) REFERENCES `vites` (`vites_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `araclar_ibfk_6` FOREIGN KEY (`motorgücü`) REFERENCES `motorgücü` (`motorgüc_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `araclar_ibfk_7` FOREIGN KEY (`motorhacmi`) REFERENCES `motorhacmi` (`hacim_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `araclar_ibfk_8` FOREIGN KEY (`renk`) REFERENCES `renk` (`renk_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Tablo kısıtlamaları `model`
--
ALTER TABLE `model`
  ADD CONSTRAINT `model_ibfk_1` FOREIGN KEY (`marka`) REFERENCES `markalar` (`marka_id`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
