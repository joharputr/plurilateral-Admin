-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 08 Nov 2019 pada 04.15
-- Versi server: 10.1.30-MariaDB
-- Versi PHP: 7.2.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `demo_surat`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `buat_surat`
--

CREATE TABLE `buat_surat` (
  `id` int(11) NOT NULL,
  `no_surat` varchar(255) NOT NULL,
  `nama1` varchar(255) NOT NULL,
  `nama2` varchar(255) NOT NULL,
  `nip1` varchar(255) NOT NULL,
  `nip2` varchar(255) NOT NULL,
  `pangkat1` varchar(255) NOT NULL,
  `jabatan1` varchar(255) NOT NULL,
  `pangkat2` varchar(255) NOT NULL,
  `jabatan2` varchar(255) NOT NULL,
  `tugas` varchar(255) NOT NULL,
  `unit` varchar(255) NOT NULL,
  `waktu` varchar(255) NOT NULL,
  `lokasi` varchar(255) NOT NULL,
  `tanggal` date NOT NULL,
  `plh` varchar(255) NOT NULL,
  `keterangan` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `buat_surat`
--

INSERT INTO `buat_surat` (`id`, `no_surat`, `nama1`, `nama2`, `nip1`, `nip2`, `pangkat1`, `jabatan1`, `pangkat2`, `jabatan2`, `tugas`, `unit`, `waktu`, `lokasi`, `tanggal`, `plh`, `keterangan`) VALUES
(15, 'PMSC-KSO-API-NYIA-MTG-0467', 'Agus Sudaryatno, S.Kom, MM', 'Indah Retno Wulan, SP', '196101201980031001', '198003152008012028', 'Pembina/IV.a', 'Kepala', 'Penata, III / c', 'PMG Pertama', 'Menghadiri Apel Penutupan Posko Angkutan Udara Natal 2018 dan Tahun Baru 2019', 'Stasiun Klimatologi Kelas IV Mlati', '08.00 WIB s.d. selesai', 'Lapangan NDB PT. Angkasa Pura I (Persero)', '2019-01-17', 'Kepala,', ''),
(16, 'KP.003/939/SMN/XII/2018', 'Giyarto, ST', 'Andriyas Aryo Prabowo, M.Si', '197606101998031001', '197906102001121001', 'Penata, III / c', 'PMG Pelaksana', 'Pembina/IV.ab', 'Peneliti Muda', 'Menghadiri Apel Penutupan Posko Angkutan Udara Natal 2018 dan Tahun Baru 2019', 'Stasiun Klimatologi Kelas IV Mlati', '08.00 WIB s.d. selesai', 'Lapangan NDB PT. Angkasa Pura I (Persero)', '2019-03-15', 'PLH. Kepala,', 'hahah'),
(17, 'PMSC-KSO-API-NYIA-MTG-0467', 'Sigit Hadi Prakosa, S.P.,M.Si', 'Agus Sudaryatno, S.Kom, MM', '197705252000121001', '196101201980031001', '', 'Kepala', 'Pembina/IV.a', 'PMG Muda', '', 'Stasiun Klimatologi Kelas IV Mlati', '', '', '0000-00-00', 'Kepala,', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `gambar`
--

CREATE TABLE `gambar` (
  `id_gambar` int(11) NOT NULL,
  `gambar` varchar(255) NOT NULL,
  `surat_id` int(10) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `tgl_surat` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `login`
--

CREATE TABLE `login` (
  `id_user` int(11) NOT NULL,
  `username` varchar(50) DEFAULT NULL,
  `password` varchar(50) DEFAULT NULL,
  `nama` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `login`
--

INSERT INTO `login` (`id_user`, `username`, `password`, `nama`) VALUES
(1, 'admin', '21232f297a57a5a743894a0e4a801fc3', 'Administrator'),
(15, 'bmkg', '123', 'bmkg'),
(16, 'haya', '123456', 'Hayabusa');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_surat_keluar`
--

CREATE TABLE `tb_surat_keluar` (
  `surat_id` int(11) NOT NULL,
  `no_agenda` varchar(255) NOT NULL,
  `kode_arsip` varchar(255) NOT NULL,
  `kode_arsip2` varchar(255) NOT NULL,
  `tgl_surat` date NOT NULL,
  `no_surat` varchar(255) NOT NULL,
  `tujuan` varchar(255) NOT NULL,
  `perihal` text NOT NULL,
  `asli_copy` varchar(255) NOT NULL,
  `keterangan` text NOT NULL,
  `gambar` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_surat_keluar`
--

INSERT INTO `tb_surat_keluar` (`surat_id`, `no_agenda`, `kode_arsip`, `kode_arsip2`, `tgl_surat`, `no_surat`, `tujuan`, `perihal`, `asli_copy`, `keterangan`, `gambar`) VALUES
(4, '001', 'PR.203', '', '2019-01-05', 'PMSC-KSO-API-NYIA-MTG-0467', 'Anang Ariane', 'Undangan Rapat Navigasi Penerbangan', 'surat copy', '', ''),
(5, '002', 'KP.013', '', '2019-02-15', 'KP.003/939/SMN/XII/2018', 'Anang Ariane', 'bimbingan', 'surat asli', '  ', '5.jpg'),
(6, '', '', '', '2019-01-05', '', '', '', 'surat asli', '', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_surat_masuk`
--

CREATE TABLE `tb_surat_masuk` (
  `surat_id` int(11) NOT NULL,
  `no_agenda` varchar(255) NOT NULL,
  `tgl_terima` date NOT NULL,
  `kode_arsip` varchar(255) NOT NULL,
  `no_surat` varchar(255) NOT NULL,
  `tgl_surat` date NOT NULL,
  `pengirim` text NOT NULL,
  `perihal` text NOT NULL,
  `lampiran` varchar(255) NOT NULL,
  `sifat_surat` varchar(255) NOT NULL,
  `penjabat_disposisi` varchar(255) NOT NULL,
  `disposisi` varchar(255) NOT NULL,
  `asli_copy` varchar(255) NOT NULL,
  `informasi_disposisi` text NOT NULL,
  `gambar` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_surat_masuk`
--

INSERT INTO `tb_surat_masuk` (`surat_id`, `no_agenda`, `tgl_terima`, `kode_arsip`, `no_surat`, `tgl_surat`, `pengirim`, `perihal`, `lampiran`, `sifat_surat`, `penjabat_disposisi`, `disposisi`, `asli_copy`, `informasi_disposisi`, `gambar`) VALUES
(106, '002', '2019-01-05', 'PR.203', 'KP.003/939/SMN/XII/2018', '2019-01-18', 'PMSC NYIA', 'Undangan Rapat Navigasi Penerbangan', '-', 'Sangat Penting', 'Kasklim Mlati', 'Bendahara Penerimaan', 'surat asli', '  ', '106.jpg'),
(107, '002', '2019-02-02', 'PR.103', 'PMSC-KSO-API-NYIA-MTG-0467', '2019-02-15', 'PMSC NYIA', 'Undangan Rapat Tahunan', '-', 'Biasa', 'Kasklim Mlati', '0', 'surat asli', '', ''),
(111, '003', '2019-03-15', 'PR.006', 'KP.003/939/SMN/XII/2018', '2019-03-29', 'PMSC NYIA', 'Undangan Rapat Navigasi Penerbangan', 'Satu bendel 2', 'Segera', 'Ketua BMKG', 'Kapok Datin, Kapok Obs', 'surat copy', 'segera disampaikan', '111.jpg');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `buat_surat`
--
ALTER TABLE `buat_surat`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `gambar`
--
ALTER TABLE `gambar`
  ADD PRIMARY KEY (`id_gambar`);

--
-- Indeks untuk tabel `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id_user`);

--
-- Indeks untuk tabel `tb_surat_keluar`
--
ALTER TABLE `tb_surat_keluar`
  ADD PRIMARY KEY (`surat_id`);

--
-- Indeks untuk tabel `tb_surat_masuk`
--
ALTER TABLE `tb_surat_masuk`
  ADD PRIMARY KEY (`surat_id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `buat_surat`
--
ALTER TABLE `buat_surat`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT untuk tabel `gambar`
--
ALTER TABLE `gambar`
  MODIFY `id_gambar` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `login`
--
ALTER TABLE `login`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT untuk tabel `tb_surat_keluar`
--
ALTER TABLE `tb_surat_keluar`
  MODIFY `surat_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `tb_surat_masuk`
--
ALTER TABLE `tb_surat_masuk`
  MODIFY `surat_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=112;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
