-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 06 Jun 2022 pada 12.17
-- Versi server: 10.4.21-MariaDB
-- Versi PHP: 7.3.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `laravel-movies`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `movies`
--

CREATE TABLE `movies` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `rating_star` int(11) NOT NULL,
  `image` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `movies`
--

INSERT INTO `movies` (`id`, `title`, `description`, `rating_star`, `image`, `created_at`, `updated_at`) VALUES
(3, 'Avengers: Endgame', 'After Thanos, an intergalactic warlord, disintegrates half of the universe, the Avengers must reunite and assemble again to reinvigorate their trounced allies and restore balance.', 3, 'https://www.pembelajarhidup.com/wp-content/uploads/2019/04/Avengers-End-Game.jpg', '2022-06-06 02:48:33', '2022-06-06 02:48:33'),
(4, 'The Batman (2022)', 'Batman is called to intervene when the mayor of Gotham City is murdered. Soon, his investigation leads him to uncover a web of corruption, linked to his own dark past.', 4, 'https://img.alinea.id/img/content/2022/04/22/141351/ending-the-batman-dipastikan-berbeda-dari-film-dark-knight-lainnya-CBXeePzfJQ.jpg', '2022-06-06 03:07:20', '2022-06-06 03:07:20'),
(5, 'The Doll 3 (2022)', 'After an accident that killed both of Tara\'s parents, Tara now only has a younger brother named Gian as a member of her family. However, the accident traumatized Gian, so Gian chose to end his life.', 4, 'https://media.matamata.com/thumbs/2020/03/16/21104-film-the-doll-3/745x489-img-21104-film-the-doll-3.jpg', '2022-06-06 03:10:26', '2022-06-06 03:10:26'),
(6, 'Doctor Strange in the Multiverse of Madness (2022)', 'Doctor Strange teams up with a mysterious teenage girl from his dreams who can travel across multiverses, to battle multiple threats, including other-universe versions of himself, which threaten to wipe out millions across the multiverse', 5, 'https://media.suara.com/pictures/970x544/2022/05/05/18663-dr-strange-2-multiverse-of-madness-tayang-perdana-pada-kamis-552022.jpg', '2022-06-06 03:13:21', '2022-06-06 03:13:21'),
(7, 'Sonic the Hedgehog 2', 'When the manic Dr Robotnik returns to Earth with a new ally, Knuckles the Echidna, Sonic and his new friend Tails is all that stands in their way.', 4, 'https://asset.vg247.com/sonic_the_hedgehog_2_film_XeIju3E.jpg/BROK/thumbnail/1600x900/quality/100/sonic_the_hedgehog_2_film_XeIju3E.jpg', '2022-06-06 03:14:51', '2022-06-06 03:14:51');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `movies`
--
ALTER TABLE `movies`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `movies`
--
ALTER TABLE `movies`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
