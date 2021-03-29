SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";
--
-- Database: `portofolio`
CREATE DATABASE portofolio;
--
-- Struktur dari tabel `about`
CREATE TABLE `about` (
  `id` int(11) NOT NULL,
  `about` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
--
-- Dumping data untuk tabel `about`
INSERT INTO `about` (`id`, `about`) VALUES
(1, 'Saya berumur 16 tahun, sekolah di SMK Taruna Bhakti jurusan Rekayasa Perangkat Lunak. Saya mudah beradaptasi, dapat bekerja keras, teliti, bekerja sama dalam tim, mudah berkomunikasi dengan orang lain serta senang mempelajari hal baru.');
-- 
--Struktur dari tabel `contact`
CREATE TABLE `contact` (
  `id` int(11) NOT NULL,
  `nama` text NOT NULL,
  `email` text NOT NULL,
  `komentar` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
--
-- Dumping data untuk tabel `contact`
INSERT INTO `contact` (`id`, `nama`, `email`, `komentar`) VALUES
(1, 'Adrian', 'adriariski@gmail.com', 'Mantap Bro'),
(4, 'Ari', 'ariansyahcha@gmail.com', 'Keren bgt');
--
-- Struktur dari tabel `gallery`
CREATE TABLE `gallery` (
  `id` int(11) NOT NULL,
  `judul` varchar(100) NOT NULL,
  `isi` text NOT NULL,
  `gambar` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
--
-- Dumping data untuk tabel `gallery`
INSERT INTO `gallery` (`id`, `judul`, `isi`, `gambar`) VALUES
(1, 'Point of Sale', 'lorem ipsum', 'https://blog.tripcetera.com/id/wp-content/uploads/2020/10/pulau-padar.jpg'),
(6, 'Uji Level', 'ini adalah projek uji level saya', 'https://www.gotravelly.com/blog/wp-content/uploads/2019/10/Gunung-Fuji-Jepang-1024x640.jpg'),
(7, 'Portofolio', 'Projek portofolio saya', 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRDB2r48mBdbFKIaAm98f0ex5kiR-yXw89Haw&usqp=CAU');
--
-- Struktur dari tabel `profil`
CREATE TABLE `profil` (
  `id` int(11) NOT NULL,
  `nama` varchar(55) NOT NULL,
  `gambar` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
--
-- Dumping data untuk tabel `profil`
INSERT INTO `profil` (`id`, `nama`, `gambar`) VALUES
(1, 'Rafi Damara', 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRuaOoqxG3YF7z-uzQX-hdwH2Fo9c709T0AHw&usqp=CAU');
--
-- Indeks untuk tabel `about`
ALTER TABLE `about`
  ADD PRIMARY KEY (`id`);
--
-- Indeks untuk tabel `contact`
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);
--
-- Indeks untuk tabel `gallery`
ALTER TABLE `gallery`
  ADD PRIMARY KEY (`id`);
--
-- Indeks untuk tabel `profil`
ALTER TABLE `profil`
  ADD PRIMARY KEY (`id`);
--
-- AUTO_INCREMENT untuk tabel `about`
ALTER TABLE `about`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT untuk tabel `contact`
ALTER TABLE `contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT untuk tabel `gallery`
ALTER TABLE `gallery`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT untuk tabel `profil`
ALTER TABLE `profil`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;