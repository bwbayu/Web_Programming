-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 11 Bulan Mei 2022 pada 18.49
-- Versi server: 10.4.22-MariaDB
-- Versi PHP: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_universitas`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `dosen`
--

CREATE TABLE `dosen` (
  `kode_dosen` int(11) NOT NULL,
  `nip_dosen` bigint(30) NOT NULL,
  `nama_dosen` varchar(100) NOT NULL,
  `email_dosen` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `dosen`
--

INSERT INTO `dosen` (`kode_dosen`, `nip_dosen`, `nama_dosen`, `email_dosen`) VALUES
(1, 1234567890001, 'Ceara Beaumont', 'Ceara@byebye.edu'),
(2, 1234567890002, 'Christine Winters', 'Christine@byebye.edu'),
(3, 1234567890003, 'Cherie Carrillo', 'Cherie@byebye.edu'),
(4, 1234567890004, 'Everly Weston', 'Everly@byebye.edu'),
(5, 1234567890005, 'Nikola Fenton', 'Nikola@byebye.edu'),
(6, 1234567890006, 'Mohammed Sykes', 'Mohammed@byebye.edu'),
(7, 1234567890007, 'Thelma Orr', 'Thelma@byebye.edu'),
(8, 1234567890008, 'Aviana Haworth', 'Aviana@byebye.edu'),
(9, 1234567890009, 'Thomas Wells', 'Thomas@byebye.edu'),
(10, 1234567890010, 'Aairah Goddard', 'Aairah@byebye.edu'),
(11, 1234567890011, 'Jett Guthrie', 'Jett@byebye.edu'),
(12, 1234567890012, 'Vlad Mcintyre', 'Vlad@byebye.edu'),
(13, 1234567890013, 'Duke Lutz', 'Duke@byebye.edu'),
(14, 1234567890014, 'Juliet Robinson', 'Juliet@byebye.edu'),
(15, 1234567890015, 'Gregory Hines', 'Gregory@byebye.edu'),
(16, 1234567890016, 'Harriette Robbins', 'Harriette@byebye.edu'),
(17, 1234567890017, 'Huda Feeney', 'Huda@byebye.edu'),
(18, 1234567890018, 'Ismaeel Parkes', 'Ismaeel@byebye.edu'),
(19, 1234567890019, 'Zahara Austin', 'Zahara@byebye.edu'),
(20, 1234567890020, 'Bradleigh Barker', 'Bradleigh@byebye.edu');

-- --------------------------------------------------------

--
-- Struktur dari tabel `file_download`
--

CREATE TABLE `file_download` (
  `id` int(11) NOT NULL,
  `nama_file` varchar(100) NOT NULL,
  `judul` varchar(100) NOT NULL,
  `deskripsi` varchar(255) NOT NULL,
  `tgl_upload` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `file_download`
--

INSERT INTO `file_download` (`id`, `nama_file`, `judul`, `deskripsi`, `tgl_upload`) VALUES
(1, 'pedoman_pendidikan.pdf', 'Educational Guidelines', 'To all students, the following is an annex of the educational guidelines applicable at this university. Thank you.', '2022-05-08'),
(2, 'kalender_akademik.pdf', 'Academic Calendar 2021-2022', 'To all students, the following is an attachment to the academic calendar at the university for the year 2021-2022. Thank you.', '2022-05-08'),
(3, 'kurikulum.pdf', 'Curriculum', 'To all students, the following is an attachment to the curriculum and a list of courses for the year 2021-2022. Thank you.', '2022-05-08');

-- --------------------------------------------------------

--
-- Struktur dari tabel `krs`
--

CREATE TABLE `krs` (
  `id` int(11) NOT NULL,
  `nim_mhs` int(11) NOT NULL,
  `kode_matkul` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `krs`
--

INSERT INTO `krs` (`id`, `nim_mhs`, `kode_matkul`) VALUES
(2, 0, 2),
(3, 0, 3),
(4, 0, 4),
(5, 0, 5),
(6, 0, 6),
(7, 0, 7),
(15, 2106836, 1),
(16, 2106836, 20),
(17, 2106836, 2),
(19, 2106836, 5),
(20, 2106836, 6),
(21, 2106836, 13),
(23, 0, 18);

-- --------------------------------------------------------

--
-- Struktur dari tabel `mahasiswa`
--

CREATE TABLE `mahasiswa` (
  `nim_mhs` int(11) NOT NULL,
  `nama_mhs` varchar(100) NOT NULL,
  `password_mhs` varchar(100) NOT NULL,
  `c_password_mhs` varchar(100) NOT NULL,
  `email_mhs` varchar(100) NOT NULL,
  `fakultas_mhs` varchar(100) NOT NULL,
  `prodi_mhs` varchar(100) NOT NULL,
  `notelp_mhs` varchar(100) NOT NULL,
  `tgllahir_mhs` date NOT NULL,
  `gender_mhs` varchar(20) NOT NULL,
  `alamat_mhs` varchar(255) NOT NULL,
  `kodepos_mhs` varchar(100) NOT NULL,
  `kartu_mhs` varchar(255) NOT NULL,
  `foto_mhs` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `mahasiswa`
--

INSERT INTO `mahasiswa` (`nim_mhs`, `nama_mhs`, `password_mhs`, `c_password_mhs`, `email_mhs`, `fakultas_mhs`, `prodi_mhs`, `notelp_mhs`, `tgllahir_mhs`, `gender_mhs`, `alamat_mhs`, `kodepos_mhs`, `kartu_mhs`, `foto_mhs`) VALUES
(0, 'admin', '21232f297a57a5a743894a0e4a801fc3', '21232f297a57a5a743894a0e4a801fc3', 'admin@mail.com', 'none', 'none', '00000', '2001-01-01', 'Male', 'admin', '00000', 'wendyrv1.jpg', 'wendyrv1.jpg'),
(2106666, 'andrev', '1c71faa655df6f39e5101df4d19ae8ad', '1c71faa655df6f39e5101df4d19ae8ad', 'andrev@mail.com', 'FPMIPA', 'Ilmu Komputer', '11111111111', '2022-05-06', 'Male', 'jalan kenari', '40514', 'iu.jpg', 'wendyrv1.jpg'),
(2106671, 'test', '202cb962ac59075b964b07152d234b70', '202cb962ac59075b964b07152d234b70', 'test@mail.com', 'FPMIPA', 'Ilmu Komputer', '1510309', '2022-05-06', 'Male', 'test street', '40514', 'WhatsApp Image 2022-03-28 at 10.11.04.jpeg', 'WhatsApp Image 2022-03-28 at 10.11.04.jpeg'),
(2106672, 'test', '202cb962ac59075b964b07152d234b70', '202cb962ac59075b964b07152d234b70', 'test@mail.com', 'FPMIPA', 'Ilmu Komputer', '1510309', '2022-05-06', 'Female', 'test street', '40514', 'seulgi.jpg', 'seulgi.jpg'),
(2106680, 'test1', '0df279210d6c6ad270d400d147f8304d', '0df279210d6c6ad270d400d147f8304d', 'test@mail.com', 'FPMIPA', 'Ilmu Komputer', '1510309', '2022-05-04', 'Female', 'test street', '40514', 'lia.jpg', 'lia.jpg'),
(2106836, 'bayu wicaksono', '8a4b1473310cd9aa5978aa7496516f27', '8a4b1473310cd9aa5978aa7496516f27', 'bwbayuuu@mail.com', 'FPMIPA', 'Ilmu Komputer', '08811599433', '2022-05-04', 'Male', 'jalan gunung batu', '40514', 'shuhua.jpg', 'shuhua.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `mata_kuliah`
--

CREATE TABLE `mata_kuliah` (
  `kode_matkul` int(11) NOT NULL,
  `nama_matkul` varchar(100) NOT NULL,
  `kode_dosen` int(11) NOT NULL,
  `sks` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `mata_kuliah`
--

INSERT INTO `mata_kuliah` (`kode_matkul`, `nama_matkul`, `kode_dosen`, `sks`) VALUES
(1, 'Computer network', 1, 3),
(2, 'Business Statistics', 2, 3),
(3, 'Internal Medicine', 3, 3),
(4, 'Surgery', 4, 3),
(5, 'Reproduction', 5, 3),
(6, 'Cardiovascular', 6, 3),
(7, 'Metabolism & Energy', 7, 3),
(8, 'Genetics', 8, 3),
(9, 'Cell Biology', 9, 3),
(10, 'Anatomy', 10, 3),
(11, 'Law and Technology', 11, 3),
(12, 'Algorithms and Programming', 12, 3),
(13, 'Informatics Logic', 13, 3),
(14, 'Statistics', 14, 3),
(15, 'Discrete mathematics', 15, 3),
(16, 'Linear Algebra & Matrix', 16, 3),
(17, 'Data Structure', 17, 3),
(18, 'Computer Organization', 18, 3),
(19, 'Food Science', 19, 3),
(20, 'Food Microbiology', 20, 3);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `dosen`
--
ALTER TABLE `dosen`
  ADD PRIMARY KEY (`kode_dosen`);

--
-- Indeks untuk tabel `file_download`
--
ALTER TABLE `file_download`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `krs`
--
ALTER TABLE `krs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `nim_mhs` (`nim_mhs`),
  ADD KEY `kode_matkul` (`kode_matkul`);

--
-- Indeks untuk tabel `mahasiswa`
--
ALTER TABLE `mahasiswa`
  ADD PRIMARY KEY (`nim_mhs`);

--
-- Indeks untuk tabel `mata_kuliah`
--
ALTER TABLE `mata_kuliah`
  ADD PRIMARY KEY (`kode_matkul`),
  ADD KEY `kode_dosen` (`kode_dosen`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `file_download`
--
ALTER TABLE `file_download`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `krs`
--
ALTER TABLE `krs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `krs`
--
ALTER TABLE `krs`
  ADD CONSTRAINT `krs_ibfk_1` FOREIGN KEY (`nim_mhs`) REFERENCES `mahasiswa` (`nim_mhs`),
  ADD CONSTRAINT `krs_ibfk_2` FOREIGN KEY (`kode_matkul`) REFERENCES `mata_kuliah` (`kode_matkul`);

--
-- Ketidakleluasaan untuk tabel `mata_kuliah`
--
ALTER TABLE `mata_kuliah`
  ADD CONSTRAINT `mata_kuliah_ibfk_1` FOREIGN KEY (`kode_dosen`) REFERENCES `dosen` (`kode_dosen`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
