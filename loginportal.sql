-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Gegenereerd op: 14 apr 2021 om 15:38
-- Serverversie: 10.4.11-MariaDB
-- PHP-versie: 7.4.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `loginportal`
--

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `banners`
--

CREATE TABLE `banners` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` char(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `url` char(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `width` enum('1/3','2/3','3/3') COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image_nl` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `price` char(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` char(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Gegevens worden geëxporteerd voor tabel `banners`
--

INSERT INTO `banners` (`id`, `title`, `url`, `width`, `image_nl`, `price`, `description`) VALUES
(71, 'Markarius', 'http://yacht1.com', '2/3', 'phpDEF.tmp.jpg', '€4269', 'Dit is de Markarius'),
(73, 'Noahrius', 'http://yacht2.com', '2/3', 'php9FCC.tmp.jpg', '€6942', 'Dit is de Noahrius'),
(74, 'Dyvlanarius', 'http://yacht3.com', '2/3', 'phpC79.tmp.jpg', '€4200', 'Dit is de Dyvlanarius'),
(76, 'Sjorsanus', 'http://yachtanus.nl', '3/3', 'php5239.tmp.jpg', '€420069420690', 'Dit is de Sjors ANUS'),
(79, 'wraawrar', 'http://google.nl', '1/3', 'php8A5B.tmp.jpg', '1213', 'afsfaf'),
(80, 'testttt', 'http://google.nl', '3/3', 'php9EE4.tmp.png', 'test', 'test'),
(81, 'test123', 'http://google.nl', NULL, 'php12C9.tmp.png', '1', 'test');

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `environments`
--

CREATE TABLE `environments` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` char(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `url` char(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `category` char(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` char(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `order` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `importantdates`
--

CREATE TABLE `importantdates` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` char(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `link` char(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pubdate` char(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `category` char(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Gegevens worden geëxporteerd voor tabel `importantdates`
--

INSERT INTO `importantdates` (`id`, `title`, `link`, `pubdate`, `category`, `description`) VALUES
(1, 'Ondertekenen en iDIN bank authenticatie', 'https://www.validsign.nl/digitaal-ondertekenen-en-idin-bank-authenticatie/', '', 'Webinar8', '<p>16 maart 2021 10:00 – 10:30 uur iDIN is een Nederlands online identificatiemiddel. De integratie tussen ValidSign en iDIN maakt het mogelijk voor ondertekenaars om zich te laten identificeren op basis van zijn of haar bankgegevens. Deze twee-factor authenticatie wordt zowel ingezet voor het ondertekenen van documenten met een lichte- als zware bewijslast. Wil je [&#8230;]</p>\n<p>The post <a rel=\"nofollow\" href=\"https://www.validsign.nl/digitaal-ondertekenen-en-idin-bank-authenticatie/\">Ondertekenen en iDIN bank authenticatie</a> appeared first on <a rel=\"nofollow\" href=\"https://www.validsign.nl\">ValidSign digitale handtekening</a>.</p>\n'),
(2, 'Het HR proces volledig gedigitalilseerd', 'https://www.validsign.nl/het-hr-proces-volledig-gedigitalilseerd/', '', 'Webinar6', '<p>The post <a rel=\"nofollow\" href=\"https://www.validsign.nl/het-hr-proces-volledig-gedigitalilseerd/\">Het HR proces volledig gedigitalilseerd</a> appeared first on <a rel=\"nofollow\" href=\"https://www.validsign.nl\">ValidSign digitale handtekening</a>.</p>\n'),
(3, 'Besluiten digitaal ondertekenen met iBabs', 'https://www.validsign.nl/webinar7/', '', 'Webinar7', '<p>The post <a rel=\"nofollow\" href=\"https://www.validsign.nl/webinar7/\">Besluiten digitaal ondertekenen met iBabs</a> appeared first on <a rel=\"nofollow\" href=\"https://www.validsign.nl\">ValidSign digitale handtekening</a>.</p>\n'),
(4, 'Het nieuwe digitaal ondertekenen vanuit AuditCase', 'https://www.validsign.nl/webinar1/', '', 'Webinar1', '<p>18 februari 2021 10:00 – 10:30 uur AuditCase is een CRM en document managementsysteem (DMS) van CaseWare. Deze software stelt de accountant in staat om het grootste gedeelte van zijn werkzaamheden gestroomlijnd uit te voeren. Om het gehele proces van een accountantskantoor te digitaliseren was er nog maar één ding nodig. Een koppeling tussen AuditCase [&#8230;]</p>\n<p>The post <a rel=\"nofollow\" href=\"https://www.validsign.nl/webinar1/\">Het nieuwe digitaal ondertekenen vanuit AuditCase</a> appeared first on <a rel=\"nofollow\" href=\"https://www.validsign.nl\">ValidSign digitale handtekening</a>.</p>\n'),
(5, 'Digitaal ondertekenen vanuit AFAS', 'https://www.validsign.nl/webinar3/', '', 'Webinar3', '<p>The post <a rel=\"nofollow\" href=\"https://www.validsign.nl/webinar3/\">Digitaal ondertekenen vanuit AFAS</a> appeared first on <a rel=\"nofollow\" href=\"https://www.validsign.nl\">ValidSign digitale handtekening</a>.</p>\n');

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Gegevens worden geëxporteerd voor tabel `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2020_10_06_111639_create_customers_table', 1),
(4, '2020_10_07_090907_create_companies_table', 1),
(5, '2020_11_17_142346_create_environments_table', 2),
(6, '2020_12_18_125758_create_banners_table', 3),
(7, '2020_12_18_131541_create_banners_table', 4),
(8, '2020_12_22_141946_add_width_to_banners_table', 5),
(9, '2020_12_23_143828_news_items_table', 6),
(10, '2020_12_23_143843_important_dates_table', 6),
(11, '2021_01_12_155710_add_localebanner_to_users_table', 7),
(12, '2021_01_26_150006_environments_add_english_desc_to_table', 8),
(13, '2021_04_06_121425_create_yachts_table', 9),
(14, '2021_04_06_124017_banner_yacht_table', 10),
(15, '2021_04_07_135100_for_pages_table', 11),
(16, '2021_04_14_114054_create_yachtusers_table', 12),
(17, '2021_04_14_125559_create_orders_table', 13);

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `newsitems`
--

CREATE TABLE `newsitems` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` char(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `link` char(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pubdate` char(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `category` char(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Gegevens worden geëxporteerd voor tabel `newsitems`
--

INSERT INTO `newsitems` (`id`, `title`, `link`, `pubdate`, `category`, `description`) VALUES
(1, 'Veiliger 2020 afsluiten? Waardevolle AddOns voor 2021!', 'https://www.validsign.nl/veiliger-2020-afsluiten-waardevolle-addons-voor-2020/', '', 'Nieuwsitems', '<p>The post <a rel=\"nofollow\" href=\"https://www.validsign.nl/veiliger-2020-afsluiten-waardevolle-addons-voor-2020/\">Veiliger 2020 afsluiten? Waardevolle AddOns voor 2021!</a> appeared first on <a rel=\"nofollow\" href=\"https://www.validsign.nl\">ValidSign digitale handtekening</a>.</p>\n'),
(2, 'Radar Software: De nieuwste ValidSign koppeling', 'https://www.validsign.nl/radar-software-de-nieuwste-validsign-koppeling/', '', 'Artikelen over digitaal ondertekenen', '<p>The post <a rel=\"nofollow\" href=\"https://www.validsign.nl/radar-software-de-nieuwste-validsign-koppeling/\">Radar Software: De nieuwste ValidSign koppeling</a> appeared first on <a rel=\"nofollow\" href=\"https://www.validsign.nl\">ValidSign digitale handtekening</a>.</p>\n'),
(3, 'De geheel vernieuwde iBabs integratie beschikbaar!', 'https://www.validsign.nl/de-geheel-vernieuwde-ibabs-integratie-met-validsign-is-vanaf-nu-beschikbaar/', '', 'Artikelen over digitaal ondertekenen', '<p>Digitaal vergaderen in overheidsland? Dan is de kans groot dat je iBabs gebruikt. Met het platform voor digitaal vergaderen is het makkelijker om meetings voor te bereiden, efficiënter te laten verlopen en concrete afspraken te maken. Daarmee is&#160;iBabs&#160;niet alleen prettig voor bestuursleden en de gemeenteraad, maar ook voor de griffie.&#160;Ontdek daarom snel de vernieuwde iBabs [&#8230;]</p>\n<p>The post <a rel=\"nofollow\" href=\"https://www.validsign.nl/de-geheel-vernieuwde-ibabs-integratie-met-validsign-is-vanaf-nu-beschikbaar/\">De geheel vernieuwde iBabs integratie beschikbaar!</a> appeared first on <a rel=\"nofollow\" href=\"https://www.validsign.nl\">ValidSign digitale handtekening</a>.</p>\n'),
(4, 'De nieuwe AFAS connector is nu beschikbaar!', 'https://www.validsign.nl/de-nieuwe-afas-connector-is-nu-beschikbaar/', '', 'Artikelen over digitaal ondertekenen', '<p>De AFAS connector van ValidSign is nu beschikbaar! Sinds maart van dit jaar kunnen klanten digitaal ondertekenen vanuit AFAS met ValidSign. De koppeling stelt gebruikers in staat om documenten ter ondertekening aan te bieden in AFAS. Ieder proces waarvoor ondertekening vereist is, is van A tot Z te monitoren in het systeem. Direct na het [&#8230;]</p>\n<p>The post <a rel=\"nofollow\" href=\"https://www.validsign.nl/de-nieuwe-afas-connector-is-nu-beschikbaar/\">De nieuwe AFAS connector is nu beschikbaar!</a> appeared first on <a rel=\"nofollow\" href=\"https://www.validsign.nl\">ValidSign digitale handtekening</a>.</p>\n'),
(5, 'Rotterdam kiest voor ValidSign', 'https://www.validsign.nl/rotterdam-kiest-voor-validsign/', '', 'Artikelen over digitaal ondertekenen', '<p>Gemeente Rotterdam heeft voor ValidSign gekozen als Enterprise eSigning oplossing. Na een marktverkenningsfase en uitvoerig onderzoek is de gemeente Rotterdam een Europese aanbesteding gestart. Uit de vele inschrijvingen is ValidSign als beste uit de bus gekomen. De gemeente Rotterdam ondertekent jaarlijks enorm veel documenten. Het is dan ook van groot belang dat de documentenstroom zo [&#8230;]</p>\n<p>The post <a rel=\"nofollow\" href=\"https://www.validsign.nl/rotterdam-kiest-voor-validsign/\">Rotterdam kiest voor ValidSign</a> appeared first on <a rel=\"nofollow\" href=\"https://www.validsign.nl\">ValidSign digitale handtekening</a>.</p>\n');

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `orders`
--

CREATE TABLE `orders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `username` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `yacht` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Gegevens worden geëxporteerd voor tabel `password_resets`
--

INSERT INTO `password_resets` (`email`, `token`, `created_at`) VALUES
('mike-essen@hotmail.com', '$2y$10$Ed01ZunbyZ6FkiFww2ogoukyPHVD6qcQtVSFc/NKOyhb4am5xtyju', '2021-01-27 08:34:21');

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Gegevens worden geëxporteerd voor tabel `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Mike van Essen', 'mike-essen@hotmail.com', NULL, '$2y$10$Wtexh7e6.YmwHCt2QoMTz.4dVauuB.FYwpS3e5Q4rVilCVyEpSSP.', '8JfWuIr867iusofGJ6r1kQsQK93capg37BmQCT0yk1lA7i4yIGSy5rl0SYYN', '2020-11-10 13:34:30', '2020-11-10 13:34:30'),
(2, 'test', 'test@test.com', NULL, '$2y$10$AHS0XRdIP9GdWlxt8e9OxOzwn/WsUfRj9DsuamSFy22zaqcIr3w9W', NULL, '2021-04-14 10:08:29', '2021-04-14 10:08:29'),
(3, 'anne frank', 'gaskamer@jood.de', NULL, '$2y$10$DagVIKZ2Flond/ObiHuHSOuPCF25JbrZvLlKeAvIbDuSoUOq0Bz.u', NULL, '2021-04-14 10:24:47', '2021-04-14 10:24:47');

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `yachtusers`
--

CREATE TABLE `yachtusers` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexen voor geëxporteerde tabellen
--

--
-- Indexen voor tabel `banners`
--
ALTER TABLE `banners`
  ADD PRIMARY KEY (`id`);

--
-- Indexen voor tabel `environments`
--
ALTER TABLE `environments`
  ADD PRIMARY KEY (`id`);

--
-- Indexen voor tabel `importantdates`
--
ALTER TABLE `importantdates`
  ADD PRIMARY KEY (`id`);

--
-- Indexen voor tabel `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexen voor tabel `newsitems`
--
ALTER TABLE `newsitems`
  ADD PRIMARY KEY (`id`);

--
-- Indexen voor tabel `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexen voor tabel `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexen voor tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexen voor tabel `yachtusers`
--
ALTER TABLE `yachtusers`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `yachtusers_email_unique` (`email`);

--
-- AUTO_INCREMENT voor geëxporteerde tabellen
--

--
-- AUTO_INCREMENT voor een tabel `banners`
--
ALTER TABLE `banners`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=82;

--
-- AUTO_INCREMENT voor een tabel `environments`
--
ALTER TABLE `environments`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=76;

--
-- AUTO_INCREMENT voor een tabel `importantdates`
--
ALTER TABLE `importantdates`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT voor een tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT voor een tabel `newsitems`
--
ALTER TABLE `newsitems`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT voor een tabel `orders`
--
ALTER TABLE `orders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT voor een tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT voor een tabel `yachtusers`
--
ALTER TABLE `yachtusers`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
