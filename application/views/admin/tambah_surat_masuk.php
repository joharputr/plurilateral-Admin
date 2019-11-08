<link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
           <section class="content-header">
            <h1>
              Tambah
              <small>Surat Masuk</small>
            </h1>
            <ol class="breadcrumb">
              <li><i class="fa fa-dashboard"></i> Home</a></li>
              <li><a href="<?php echo base_url(); ?>admin/jenis_surat">Surat Masuk</a></li>
              <li class="active">Tambah</li>
              <!--
              <li><a href="#">Layout</a></li>
              <li class="active">Top Navigation</li>
              -->
            </ol>
          </section>

          <!-- Main content -->
          <section class="content">
            <div class="box box-info">
              <div class="box-header with-border">
                <h3 class="box-title">Form Data Tambah Surat Masuk</h3>
              </div>
              <div class="box-body">
                <!-- form start -->

              <?php echo form_open('admin/insert_surat_masuk'); ?>

              <div class="form-group">
                    <label for="exampleInputEmail1">No Agenda</label>
                      <input type="text" class="form-control" name="no_agenda" placeholder="No Agenda"/>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Tanggal Diterima</label>
                      <input type="text" class="form-control" name="tgl_terima" id="tgl_terima" data-date-format="yyyy-mm-dd" placeholder="Tanggal Diterima"/>
                  </div>
                     <div class="form-group">
             <label for="exampleInputEmail1">Kode Arsip (Otomatis)</label>
            

<form id="formname" name="formname" method="post" action="submitform.asp" >
<!-- <table width="50%" border="0" cellspacing="0" cellpadding="5"> -->
  <tr>
   
    <td >
      <select name="kode_arsip" id="category1" class="form-control">
        <option value="">Kategori</option>
        <option value="PR">PERENCANAAN (PR) </option>
        <option value="KP">KEPEGAWAIAN (KP) </option>
        <option value="KU">KEUANGAN (KU) </option>
        <option value="PL">PERLENGKAPAN (PL) </option>
        <option value="HK">HUKUM (HK) </option>
        <option value="KS">KERJASAMA LUAR NEGERI (KS) </option>
        <option value="UM">UMUM (UM) </option>
        <option value="PS">PENGAWASAN (PS) </option>
        <option value="DL">DIKLAT (DL) </option>
        <option value="GF">GEOFISIKA (GF) </option>
        <option value="KT">KLIMATOLOGI (KT) </option>
        <option value="ME">METEOROLOGI (ME) </option>
        <option value="IJ">INSTRUMENTASI KALIBRASI REKAYASA DAN JARINGAN KOMUNIKASI (IJ) </option>
      </select>
    </td>
  </tr>
  <tr>
  
    <td>
      <select disabled="disabled"  id="category2" name="kode_arsip" class="form-control">
        <option value>Kategori 2</option>
         <option value="PR.00">===============================================</option>
<!-- PERENCANAAN -->
        <optgroup data-rel="PR">
          <option value="PR.001">PENYUSUNAN RENCANA DAN PROGRAM (001.  PUSAT) </option>
          <option value="PR.002">PENYUSUNAN RENCANA DAN PROGRAM (002.  BB WIL 1)</option>
          <option value="PR.003">PENYUSUNAN RENCANA DAN PROGRAM (003.  BB WIL 2)</option>
          <option value="PR.004">PENYUSUNAN RENCANA DAN PROGRAM (004.  BB WIL 3)</option>
          <option value="PR.005">PENYUSUNAN RENCANA DAN PROGRAM (005.  BB WIL 4)</option>
          <option value="PR.006">PENYUSUNAN RENCANA DAN PROGRAM (006.  BB WIL 5)</option>
          <option value="PR.00">===============================================</option>
            <option value="PR.101">PENGENDALIAN DAN PELAPORAN PROGRAM (101.  PUSAT) </option>
            <option value="PR.102">PENGENDALIAN DAN PELAPORAN PROGRAM (102.  BB WIL 1)</option>
            <option value="PR.103">PENGENDALIAN DAN PELAPORAN PROGRAM (103.  BB WIL 2)</option>
            <option value="PR.104">PENGENDALIAN DAN PELAPORAN PROGRAM (104.  BB WIL 3)</option>
            <option value="PR.105">PENGENDALIAN DAN PELAPORAN PROGRAM (105.  BB WIL 4)</option>
            <option value="PR.106">PENGENDALIAN DAN PELAPORAN PROGRAM (106.  BB WIL 5)</option>
            <option value="PR.00">===============================================</option>
              <option value="PR.201">ANALISA DAN EVALUASI (201.  PUSAT) </option>
              <option value="PR.202">ANALISA DAN EVALUASI (202.  BB WIL 1)</option>
              <option value="PR.203">ANALISA DAN EVALUASI (203.  BB WIL 2)</option>
              <option value="PR.204">ANALISA DAN EVALUASI (204.  BB WIL 3)</option>
              <option value="PR.205">ANALISA DAN EVALUASI (205.  BB WIL 4)</option>
              <option value="PR.206">ANALISA DAN EVALUASI (206.  BB WIL 5)</option>
              <option value="PR.00">===============================================</option>
                <option value="PR.301">TARIF (301.  PUSAT) </option>
                <option value="PR.302">TARIF (302.  BB WIL 1)</option>
                <option value="PR.303">TARIF (303.  BB WIL 2)</option>
                <option value="PR.304">TARIF (304.  BB WIL 3)</option>
                <option value="PR.305">TARIF (305.  BB WIL 4)</option>
                <option value="PR.306">TARIF (306.  BB WIL 5)</option>
                <option value="PR.00">===============================================</option>
        </optgroup>

<!-- KEPEGAWAIAN -->
        <optgroup data-rel="KP">
          <option value="KP.001">TATA MUTASI KEPEGAWAIAN (001.  Data Perorangan Pegawai/Data Base)</option>
          <option value="KP.002">TATA MUTASI KEPEGAWAIAN (002.  NIP / Kartu Pegawai)</option>
          <option value="KP.003">TATA MUTASI KEPEGAWAIAN (003.  Penugasan / Surat Perintah Tugas (SPT) / Lakhar)</option>
          <option value="KP.004">TATA MUTASI KEPEGAWAIAN (004.  Serah Terima Jabatan)</option>
          <option value="KP.005">TATA MUTASI KEPEGAWAIAN (005.  Penghargaan)</option>
          <option value="KP.006">TATA MUTASI KEPEGAWAIAN (006.  Sumpah Pegawai)</option>
          <option value="KP.007">TATA MUTASI KEPEGAWAIAN (007.  Specimen Tanda Tangan)</option>
          <option value="KP.008">TATA MUTASI KEPEGAWAIAN (008.  Statistik / Sensus)</option>
          <option value="KP.009">TATA MUTASI KEPEGAWAIAN (009.  Daftar Urut Kepangkatan)</option>
          <option value="KP.010">TATA MUTASI KEPEGAWAIAN (010.  Pasport / Exit Permit)</option>
          <option value="KP.011">TATA MUTASI KEPEGAWAIAN (011.  Sertifikat)</option>
          <option value="KP.012">TATA MUTASI KEPEGAWAIAN (012.  LP2P)</option>
          <option value="KP.013">TATA MUTASI KEPEGAWAIAN (013.  Cuti)</option>
          <option value="KP.014">TATA MUTASI KEPEGAWAIAN (014.  Perceraian/Perkawinan)</option>
          <option value="KP.015">TATA MUTASI KEPEGAWAIAN (015.  Surat Kuasa / Pernyataan / Keterangan)</option>
          <option value="KP.018">TATA MUTASI KEPEGAWAIAN (018.  Absensi / Daftar Hadir)</option>
          <option value="KP.019">TATA MUTASI KEPEGAWAIAN (019.  Pengangkatan)</option>
          <option value="KP.020">TATA MUTASI KEPEGAWAIAN (020.  Kenaikan Pangkat)</option>
          <option value="KP.021">TATA MUTASI KEPEGAWAIAN (021.  Pengangkatan Dalam Jabatan / DUPAK Jabatan Fungsional)</option>
          <option value="KP.022">TATA MUTASI KEPEGAWAIAN (022.  Pemindahan / Pindah Pegawai)</option>
          <option value="KP.023">TATA MUTASI KEPEGAWAIAN (023.  Peninjauan Masa Jabatan / Masa Kerja)</option>
          <option value="KP.024">TATA MUTASI KEPEGAWAIAN (024.  Pembantuan / Kekaryaan)</option>
          <option value="KP.025">TATA MUTASI KEPEGAWAIAN (025.  Impasing / Penyesuaian Ijazah)</option>
          <option value="KP.026">TATA MUTASI KEPEGAWAIAN (026.  SPMT / SPTMJ / SPMMJ)</option>
          <option value="KP.00">==================================================================================</option>
            <option value="KP.101">PERENCANAAN KEPEGAWAIAN (101.  Formasi Pegawai)</option>
            <option value="KP.102">PERENCANAAN KEPEGAWAIAN (102.  Daftar Nominatif Pegawai)</option>
            <option value="KP.103">PERENCANAAN KEPEGAWAIAN (103.  Pengendalian Kepangkatan / Jabatan)</option>
            <option value="KP.104">PERENCANAAN KEPEGAWAIAN (104.  Tenaga Kerja)</option>
            <option value="KP.105">PERENCANAAN KEPEGAWAIAN (105.  Analisis Jabatan)</option>
            <option value="KP.106">PERENCANAAN KEPEGAWAIAN (106.  Ikatan Dinas)</option>
            <option value="KP.00">================================================================================</option>
              <option value="KP.201">PENGGAJIAN PEGAWAI (201.  Lamaran)</option>
              <option value="KP.202">PENGGAJIAN PEGAWAI (202.  Pendaftaran Keluarga / Karis / Karsu)</option>
              <option value="KP.203">PENGGAJIAN PEGAWAI (203.  Praktek Kerja Lapangan)</option>
              <option value="KP.204">PENGGAJIAN PEGAWAI (204.  Seleksi)</option>
              <option value="KP.205">PENGGAJIAN PEGAWAI (205.  Penguji Kesehatan)</option>
              <option value="KP.206">PENGGAJIAN PEGAWAI (206.  Penempatan)</option>
              <option value="KP.207">PENGGAJIAN PEGAWAI (207.  Calon Pegawai Negeri Sipil)</option>
              <option value="KP.208">PENGGAJIAN PEGAWAI (208.  Penggajian / KGB / Tunjangan Jabatan / KP4)</option>
              <option value="KP.209">PENGGAJIAN PEGAWAI (209.  Insentif / Honor)</option>
              <option value="KP.00">================================================================================</option>
                <option value="KP.301">PENILAIAN (301.  Ujian Dinas)</option>
                <option value="KP.302">PENILAIAN (302.  Hukuman Disiplin / Peringatan / Penundaan Gaji / Pangkat)</option> 
                <option value="KP.303">PENILAIAN (303.  Skorsing / Hukuman Jabatan)</option> 
                <option value="KP.304">PENILAIAN (304.  Rehabilitasi)</option> 
                <option value="KP.305">PENILAIAN (305.  Ijazah)</option> 
                <option value="KP.306">PENILAIAN (306.  Jam Kerja)</option> 
                <option value="KP.307">PENILAIAN (307.  DP3)</option>
                <option value="KP.00">================================================================================</option> 
                  <option value="KP.401">KESEJAHTERAAN PEGAWAI (401.  Kesehatan Pegawai)</option>
                  <option value="KP.402">KESEJAHTERAAN PEGAWAI (402.  Koperasi Pegawai)</option> 
                  <option value="KP.403">KESEJAHTERAAN PEGAWAI (403.  Asuransi / Taspen / Taperum)</option> 
                  <option value="KP.404">KESEJAHTERAAN PEGAWAI (404.  Bantuan Pegawai / Dana Pegawai)</option> 
                  <option value="KP.405">KESEJAHTERAAN PEGAWAI (405.  Tabungan Pegawai)</option> 
                  <option value="KP.406">KESEJAHTERAAN PEGAWAI (406.  Olahraga / Kesenian)</option> 
                  <option value="KP.407">KESEJAHTERAAN PEGAWAI (407.  Pembinaan Mental / Rohani)</option>     
                  <option value="KP.00">================================================================================</option>
                    <option value="KP.501">PEMBERHENTIAN DAN PENSIUN (501.  Pemberhentian dengan Hormat) </option>
                    <option value="KP.502">PEMBERHENTIAN DAN PENSIUN (502.  Pemberhentian Tidak dengan Hormat)</option>
                    <option value="KP.503">PEMBERHENTIAN DAN PENSIUN (503.  Pemberhentian Sementara )</option> 
                    <option value="KP.504">PEMBERHENTIAN DAN PENSIUN (504.  Penerapan Uang Tunggu)</option> 
                    <option value="KP.505">PEMBERHENTIAN DAN PENSIUN (505.  MPP)</option> 
                    <option value="KP.506">PEMBERHENTIAN DAN PENSIUN (506.  Pensiun)</option> 
                    <option value="KP.507">PEMBERHENTIAN DAN PENSIUN (507.  Pensiun Janda / Duda)</option> 
                    <option value="KP.508">PEMBERHENTIAN DAN PENSIUN (508.  Nominatif Pensiun)</option>
                    <option value="KP.509">PEMBERHENTIAN DAN PENSIUN (509.  Pensiun Meninggal Dunia)</option>
                    <option value="KP.510">PEMBERHENTIAN DAN PENSIUN (510.  Pensiun Dini)</option>
                    <option value="KP.00">================================================================================</option>
                      <option value="KP.601">PERKUMPULAN PEGAWAI / NON PEGAWAI (601.  KORPRI) </option>
                      <option value="KP.602">PERKUMPULAN PEGAWAI / NON PEGAWAI (602.  Dharma Wanita)</option>
         </optgroup>

  <!-- KEUANGAN -->
        <optgroup data-rel="KU">
          <option value="KU.001">ANGGARAN (001. RAPBN / APBN) </option>
          <option value="KU.002">ANGGARAN (002. DUK / DIK (Konsep, Persetujuan, ABT, Pergeseran / Perubahan DIK, dll))</option>
          <option value="KU.003">ANGGARAN (003. Tender (Berita Acara, Kontrak SPK, Penunjukan Langsung, Pekerjaan Langsung, dll))</option>
          <option value="KU.004">ANGGARAN (004. Permintaan, Pencairan (Dana, Gaji, dll))</option>
          <option value="KU.005">ANGGARAN (005. SPP / SPPR, Belanja Pegawai (Beban Tetap, Sementara, Gaji))</option>
          <option value="KU.006">ANGGARAN (006. SPMU (Beban Tetap, Sementara, Gaji, Realisasi Anggaran Belanja Rutin, dll))</option>
          <option value="KU.007">ANGGARAN (007. Uang Lembur)</option>
          <option value="KU.008">ANGGARAN (008. SPJR, LKKA / LKKR, UYHD, Laporan Keuangan)</option>
          <option value="KU.00">===============================================</option>
            <option value="KU.101">ANGGARAN PEMBANGUNAN (101. RAPBN / APBN)</option>
            <option value="KU.102">ANGGARAN PEMBANGUNAN (102. DUP / DIPA (Plafon Anggaran, Revisi DIP / PO, dll))</option>
            <option value="KU.103">ANGGARAN PEMBANGUNAN (103. Tender (Berita Acara, Kontrak SPK, Penunjukan Langsung, Pekerjaan Lanjutan, dll))</option>
            <option value="KU.104">ANGGARAN PEMBANGUNAN (104. SPP (Beban Tetap, Sementara, Siap, dll))</option>
            <option value="KU.105">ANGGARAN PEMBANGUNAN (105. SPMU (Beban Tetap, Sementara, Siap, dll))</option>
            <option value="KU.106">ANGGARAN PEMBANGUNAN (106. SPJ)</option>
            <option value="KU.107">ANGGARAN PEMBANGUNAN (107. Laporan (Mingguan, Berkala, Bulanan Proyek, Fisik, dll), LAKIP)</option>
            <option value="KU.00">===============================================</option>
              <option value="KU.201">ANGGARAN PEMBANGUNAN BANTUAN LUAR NEGERI (201. Naskah Perjanjian Luar Negeri)</option>
              <option value="KU.202">ANGGARAN PEMBANGUNAN BANTUAN LUAR NEGERI (202. Kontrak Jual Beli)</option>
              <option value="KU.203">ANGGARAN PEMBANGUNAN BANTUAN LUAR NEGERI (203. SPP)</option>
              <option value="KU.204">ANGGARAN PEMBANGUNAN BANTUAN LUAR NEGERI (204. SPM)</option>
              <option value="KU.205">ANGGARAN PEMBANGUNAN BANTUAN LUAR NEGERI (205. Pembukuan LC)</option>
              <option value="KU.206">ANGGARAN PEMBANGUNAN BANTUAN LUAR NEGERI (206. Badan Pembari Bantuan)</option>
              <option value="KU.00">===============================================</option>
                <option value="KU.301">PENDAPATAN / PENERIMAAN (301. Pajak-pajak) </option>
                <option value="KU.302">PENDAPATAN / PENERIMAAN (302. Pendapatan Negara Bukan Pajak (PNPB), dll) </option>
                <option value="KU.303">PENDAPATAN / PENERIMAAN (303. Sewa Rumah Dinas) </option>
                <option value="KU.304">PENDAPATAN / PENERIMAAN (304. Royalti) </option>
                <option value="KU.305">PENDAPATAN / PENERIMAAN (305. Ipeda) </option>
                <option value="KU.00">===============================================</option>
                  <option value="KU.401">PERBENDAHARAAN / PEMBUKUAN / VERIFIKASI (401. Perhitungan Anggaran) </option>
                  <option value="KU.402">PERBENDAHARAAN / PEMBUKUAN / VERIFIKASI (402. Perbendaharaan (Tuntutan Ganti Rugi)) </option>
                  <option value="KU.403">PERBENDAHARAAN / PEMBUKUAN / VERIFIKASI (403. Bendaharawan / Kuasa Pengguna Anggaran / PPK / Pimpro, dll) </option>
                  <option value="KU.00">===============================================</option>
                    <option value="KU.501">UMUM (501. Tagihan Dinas (Listrik, Telepon)) </option>
                    <option value="KU.502">UMUM (502. Tagihan) </option>
        </optgroup>




<!-- PERLENGKAPAN -->
        <optgroup data-rel="PL">
          <option value="PL.001">ANALISA KEBUTUHAN (001. Analisa Data) </option>
          <option value="PL.002">ANALISA KEBUTUHAN (002. Klasifikasi Data)</option>
          <option value="PL.003">ANALISA KEBUTUHAN (003. Rencana Kebutuhan)</option>
          <option value="PL.004">ANALISA KEBUTUHAN (004. Perijinan)</option>
          <option value="PL.00">===============================================</option>
            <option value="PL.101">PENGADAAN (101. Tender dan Kontrak / Pra Kualifikasi) </option>
            <option value="PL.102">PENGADAAN (102. Rekanan / Penawaran) </option>
            <option value="PL.103">PENGADAAN (103. Harga dan Mutu) </option>
            <option value="PL.104">PENGADAAN (104. Pengadaan / Pembelian Kendaraan Dinas, dll) </option>
            <option value="PL.105">PENGADAAN (105. Pembinaan) </option>
            <option value="PL.106">PENGADAAN (106. Penggunaan) </option>
            <option value="PL.107">PENGADAAN (107. Berita Acara Prestasi Pekerjaan) </option>
            <option value="PL.108">PENGADAAN (108. Tanah / Bangunan) </option>
            <option value="PL.00">===============================================</option>
              <option value="PL.201">PEMBINAAN / PEMELIHARAAN (201. Distribusi) </option>
              <option value="PL.202">PEMBINAAN / PEMELIHARAAN (202. Pemeliharaan) </option>
              <option value="PL.203">PEMBINAAN / PEMELIHARAAN (203. Rehabilitasi) </option>
              <option value="PL.204">PEMBINAAN / PEMELIHARAAN (204. Pergudangan) </option>
              <option value="PL.00">===============================================</option>
                <option value="PL.301">INVENTARISASI (301. Inventarisasi BMN / Umum) </option>
                <option value="PL.302">INVENTARISASI (302. Barang-barang Bergerak) </option>
                <option value="PL.303">INVENTARISASI (303. Barang-barang Tidak Bergerak) </option>
                <option value="PL.00">===============================================</option>
                  <option value="PL.401">PENGHAPUSAN (401. Persiapan / Panitia Penghapusan) </option>
                  <option value="PL.402">PENGHAPUSAN (402. Usul Penghapusan) </option>
                  <option value="PL.403">PENGHAPUSAN (403. Penilaian) </option>
                  <option value="PL.404">PENGHAPUSAN (404. Izin Penghapusan) </option>
                  <option value="PL.405">PENGHAPUSAN (405. Penetapan Penghapusan) </option>
                  <option value="PL.406">PENGHAPUSAN (406. Pelelangan) </option>
                  <option value="PL.407">PENGHAPUSAN (407. Penjualan) </option>
                  <option value="PL.408">PENGHAPUSAN (408. Penghibahan) </option>
                  <option value="PL.409">PENGHAPUSAN (409. Tukar Menukar / Ruislag) </option>
             </optgroup>

<!-- HUKUM -->
        <optgroup data-rel="HK">
          <option value="HK.001">PRODUK PERUNDANG-UNDANGAN (001. Undang-Undang Pemerintah) </option>
          <option value="HK.002">PRODUK PERUNDANG-UNDANGAN (002. Ketetapan MPR)</option>
          <option value="HK.003">PRODUK PERUNDANG-UNDANGAN (003. Undang-Undang)</option>
          <option value="HK.004">PRODUK PERUNDANG-UNDANGAN (004. Peraturan Pemerintah)</option>
          <option value="HK.005">PRODUK PERUNDANG-UNDANGAN (005. Keputusan Presiden)</option>
          <option value="HK.006">PRODUK PERUNDANG-UNDANGAN (006. Peraturan Presiden)</option>
          <option value="HK.007">PRODUK PERUNDANG-UNDANGAN (007. Instruksi Presiden)</option>
          <option value="HK.00">===============================================</option>
            <option value="HK.101">PRODUK NON BADAN METEOROLOGI, KLIMATOLOGI, DAN GEOFISIKA (101. Keputusan Bersama Menteri) </option>
            <option value="HK.102">PRODUK NON BADAN METEOROLOGI, KLIMATOLOGI, DAN GEOFISIKA (102. Peraturan Menteri) </option>
            <option value="HK.103">PRODUK NON BADAN METEOROLOGI, KLIMATOLOGI, DAN GEOFISIKA (103. Keputusan Menteri)</option>
            <option value="HK.104">PRODUK NON BADAN METEOROLOGI, KLIMATOLOGI, DAN GEOFISIKA (104. Instruksi Menteri)</option>
            <option value="HK.00">===============================================</option>
              <option value="HK.201">PRODUK BADAN METEOROLOGI, KLIMATOLOGI, DAN GEOFISIKA (201. Undang-Undang) </option>
              <option value="HK.202">PRODUK BADAN METEOROLOGI, KLIMATOLOGI, DAN GEOFISIKA (202. Peraturan / Keputusan Kepala BMKG) </option>
              <option value="HK.203">PRODUK BADAN METEOROLOGI, KLIMATOLOGI, DAN GEOFISIKA (203. Surat Edaran Kepala BMKG) </option>
              <option value="HK.00">===============================================</option>
                <option value="HK.301">BANTUAN HUKUM (301. Perdata) </option>
                <option value="HK.302">BANTUAN HUKUM (302. Pidana) </option>
                <option value="HK.303">BANTUAN HUKUM (303. TUN) </option>
                <option value="HK.00">===============================================</option>
                  <option value="HK.401">PERIZINAN (401. Izin Belajar / Tugas Belajar) </option>
                  <option value="HK.402">PERIZINAN (402. Rekomendasi) </option>
                  <option value="HK.403">PERIZINAN (403. Izin / Persetujuan / Registrasi Meteorologi, Klimatologi, dan Geofisika) </option>
                  <option value="HK.00">===============================================</option>
                    <option value="HK.501">ORGANISASI DAN TATA LAKSANA (501. Organisasi dan Tata Kerja) </option>
                    <option value="HK.502">ORGANISASI DAN TATA LAKSANA (502. Tata Laksana (Evaluasi, Rencana, Penetapan)) </option>
                    <option value="HK.503">ORGANISASI DAN TATA LAKSANA (503. Standard Operating Procesures (SOP)) </option>
                 </optgroup>


<!-- KERJASAMA LUAR NEGERI -->
        <optgroup data-rel="KS">
          <option value="KS.001">BILATERAL (001. Asia) </option>
          <option value="KS.002">BILATERAL (002. Australia) </option>
          <option value="KS.003">BILATERAL (003. Afrika)</option>
          <option value="KS.004">BILATERAL (004. Amerika)</option>
          <option value="KS.005">BILATERAL (005. Eropa)</option>
          <option value="KS.00">===============================================</option>
            <option value="KS.101">MULTILATERAL (101. Asia) </option>
            <option value="KS.102">MULTILATERAL (102. Australia) </option>
            <option value="KS.103">MULTILATERAL (103. Afrika) </option>
            <option value="KS.104">MULTILATERAL (104. Amerika) </option>
            <option value="KS.105">MULTILATERAL (105. Eropa) </option>
            <option value="KS.106">MULTILATERAL (106. Lintas Benua) </option>
            <option value="KS.00">===============================================</option>
              <option value="KS.201">ORGANISASI INTERNASIONAL (201. ACOSOC (Accoustical Society of America)) </option>
              <option value="KS.202">ORGANISASI INTERNASIONAL (202. UNCTAD (United Nations Conference on Trade And Development)) </option>
              <option value="KS.203">ORGANISASI INTERNASIONAL (203. IMO (International Maritime Organization)) </option>
              <option value="KS.204">ORGANISASI INTERNASIONAL (204. UNDP (United Nations Development Programme)) </option>
              <option value="KS.205">ORGANISASI INTERNASIONAL (205. ICAO (International Civil Aviation Organization)) </option>
              <option value="KS.206">ORGANISASI INTERNASIONAL (206. WHO (World Health Organization)) </option>
              <option value="KS.207">ORGANISASI INTERNASIONAL (207. WMO (World Meteorological Organization)) </option>
              <option value="KS.208">ORGANISASI INTERNASIONAL (208. UNESCO (United Nations Educational, Scientific, and Cultural Organization)) </option>
              <option value="KS.209">ORGANISASI INTERNASIONAL (209. JICA (Japan International Cooperation Agency)) </option>
              <option value="KS.210">ORGANISASI INTERNASIONAL (210. FAO (Food and Agriculture Organization)) </option>
              <option value="KS.211">ORGANISASI INTERNASIONAL (211. IAEA (International Atomic Energy Agency)) </option>
              <option value="KS.212">ORGANISASI INTERNASIONAL (212. CTBTO (Comprehension Nuclear-Test-Ban Treaty Organization)) </option>
              <option value="KS.213">ORGANISASI INTERNASIONAL (213. ASEAN (Association of Southeast Asian Nations)) </option>
              <option value="KS.214">ORGANISASI INTERNASIONAL (214. COLOMBO PLAN) </option>
              <option value="KS.215">ORGANISASI INTERNASIONAL (215. IBRD (International Bank of Reconstruction and Development)) </option>
              <option value="KS.216">ORGANISASI INTERNASIONAL (216. UN-ESCAP (United Nations and Social Commision for Asia and the Pacific)) </option>
              <option value="KS.217">ORGANISASI INTERNASIONAL (217. OPEC (Organization of the Petroleum Exporting Countries)) </option>
              <option value="KS.218">ORGANISASI INTERNASIONAL (218. OKI (Organisasi Konferensi Islam) )</option>
              <option value="KS.219">ORGANISASI INTERNASIONAL (219. GIZ (Deutsche Gesellschaft für Internationale Zusammernarbeit)) </option>
              <option value="KS.220">ORGANISASI INTERNASIONAL (220. RTSP (Regional Tsunami Service Providers)) </option>
              <option value="KS.221">ORGANISASI INTERNASIONAL (221. AEIC (Alaska Earthquake Information Center)) </option>
              <option value="KS.00">===============================================</option>
                <option value="KS.301">KERJASAMA DALAM NEGERI (301. Kementrian/Lembaga) </option>
                <option value="KS.302">KERJASAMA DALAM NEGERI (302. Pemerintah Daerah) </option>
                <option value="KS.303">KERJASAMA DALAM NEGERI (303. BUMN/BUMD) </option>
                <option value="KS.304">KERJASAMA DALAM NEGERI (304. Perguruan Tinggi) </option>
                <option value="KS.305">KERJASAMA DALAM NEGERI (305. Organisasi Kemasyarakatan) </option>
                <option value="KS.306">KERJASAMA DALAM NEGERI (306. Swasta) </option>
                <option value="KS.307">KERJASAMA DALAM NEGERI (307. Media Massa) </option>
        </optgroup>
                

<!-- UMUM -->
        <optgroup data-rel="UM">
          <option value="UM.001">UMUM (001. Surat Menyurat)</option>
          <option value="UM.002">UMUM (002. Kearsipan)</option>
          <option value="UM.003">UMUM (003. Pengetikan dan Penggandaan)</option>
          <option value="UM.004">UMUM (004. Sistem Tata Naskah)</option>
          <option value="UM.005">UMUM (005. Pengiriman/Alamat/Stempel)</option>
          <option value="UM.006">UMUM (006. Risalah dan Reproduksi repim)</option>
          <option value="UM.007">UMUM (007. Laporan bulanan umum)</option>
          <option value="UM.008">UMUM (008. Laporan Dewan Stabilitas Ekonomi)</option>
          <option value="UM.009">UMUM (009. Laporan EKUIN)</option>
          <option value="UM.010">UMUM (010. Laporan Sub Distribusi)</option>
          <option value="UM.011">UMUM (011. Laporan Raker)</option>
          <option value="UM.012">UMUM (012. Laporan Tahunan)</option>
          <option value="UM.00">==================================================================================</option>
            <option value="UM.101">KERUMAHTANGGAAN (101. Ketertiban dan Keamanan)</option>
            <option value="UM.102">KERUMAHTANGGAAN (102. Ijin Peminjaman (Alat-alat, Ruangan, Lapangan, dll))</option>
            <option value="UM.103">KERUMAHTANGGAAN (103. Perjalanan Dinas)</option>
            <option value="UM.104">KERUMAHTANGGAAN (104. Perumahan Dinas)</option>
            <option value="UM.105">KERUMAHTANGGAAN (105. Cleaning Services)</option>
            <option value="UM.106">KERUMAHTANGGAAN (106. Pembangunan Gedung/Perkantoran)</option>
            <option value="UM.107">KERUMAHTANGGAAN (107. Jatah Beras)</option>
            <option value="UM.108">KERUMAHTANGGAAN (108. Pakaian Dinas)</option>
            <option value="UM.00">================================================================================</option>
              <option value="UM.201">KEPROTOKOLAN (201. Narasumber/penyuluh)</option>
              <option value="UM.202">KEPROTOKOLAN (202 Kunjungan/Undangan)</option>
              <option value="UM.203">KEPROTOKOLAN (203. Pelantikan)</option>
              <option value="UM.204">KEPROTOKOLAN (204. Upacara Kenegaraan)</option>
              <option value="UM.205">KEPROTOKOLAN (205. Upacara Kedinasan)</option>
              <option value="UM.206">KEPROTOKOLAN (206. Rapat Kerja/Rapat Koordinasi/Dinas)</option>
              <option value="UM.207">KEPROTOKOLAN (207. Ucapan Terima Kasih/Duka Cita)</option>
              <option value="UM.208">KEPROTOKOLAN (208. Seminar, Lokakarya, dll)</option>
              <option value="UM.00">================================================================================</option>
                <option value="UM.301">BANTUAN DINAS (301. Bencana Alam/Musibah) </option>
                <option value="UM.302">BANTUAN DINAS (302. Angkutan) </option> 
                <option value="UM.303">BANTUAN DINAS (303. Sumbangan/Donatur) </option> 
                <option value="UM.00">================================================================================</option> 
                  <option value="UM.401">PERPUSTAKAAN DAN DOKUMENTASI (401. Bibiolotik/Bahan Pustaka)</option>
                  <option value="UM.402">PERPUSTAKAAN DAN DOKUMENTASI (402. Pelayanan Keanggotaan)</option> 
                  <option value="UM.403">PERPUSTAKAAN DAN DOKUMENTASI (403. Laporan Perpustakaan)</option> 
                  <option value="UM.00">================================================================================</option>
                    <option value="UM.501">HUBUNGAN MASYARAKAT (501. Bahan Informasi Sektor BMKG) </option>
                    <option value="UM.502">HUBUNGAN MASYARAKAT (502. Bahan Informasi Non BMKG) </option>
                    <option value="UM.503">HUBUNGAN MASYARAKAT (503. Surat Kabar/Guntingan Berita) </option> 
                    <option value="UM.504">HUBUNGAN MASYARAKAT (504. Kehumasan/Bakohumas) </option> 
                    <option value="UM.505">HUBUNGAN MASYARAKAT (505. Siaran Berita/Siaran Pers/Jumpa Pers) </option> 
                    <option value="UM.506">HUBUNGAN MASYARAKAT (506. Kewartawanan/Kunjungan ke Daerah/Peliputan) </option>
                    <option value="UM.507">HUBUNGAN MASYARAKAT (507. Radio dan Televisi) </option>
                    <option value="UM.508">HUBUNGAN MASYARAKAT (508. Penerbitan/Iklan Display) </option> 
                    <option value="UM.509">HUBUNGAN MASYARAKAT (509. Film, Slide, Foto) </option> 
                    <option value="UM.510">HUBUNGAN MASYARAKAT (510. Pameran dan Sayembara Penulisan) </option> 
                 </optgroup>


<!-- PENGAWASAN-->
        <optgroup data-rel="PS">
          <option value="PS.001">PENGAWASAN (001. Audit)</option>
          <option value="PS.002">PENGAWASAN (002. Review)</option>
          <option value="PS.003">PENGAWASAN (003. Evaluasi)</option>
          <option value="PS.004">PENGAWASAN (004. Pemantauan Tindak Lanjut)</option>
          <option value="PS.005">PENGAWASAN (005. Pengawasan Lainnya)</option>
      </optgroup>


<!-- DIKLAT-->
        <optgroup data-rel="DL">
          <option value="DL.001">BINA PROGRAM (001. Diklat BMKG)</option>
          <option value="DL.002">BINA PROGRAM (002. Diklat Umum)</option>
          <option value="UM.00">================================================================================</option>
            <option value="DL.101">DIKLAT DALAM NEGERI (101. Lemhanas)</option>
            <option value="DL.102">DIKLAT DALAM NEGERI (102. Diklat Pimpinan I)</option>
            <option value="DL.103">DIKLAT DALAM NEGERI (103. Diklat Pimpinan II)</option>
            <option value="DL.104">DIKLAT DALAM NEGERI (104. Diklat Pimpinan III)</option>
            <option value="DL.105">DIKLAT DALAM NEGERI (105. Diklat Pimpinan IV)</option>
            <option value="DL.106">DIKLAT DALAM NEGERI (106. Penataran/Training)</option>
            <option value="DL.107">DIKLAT DALAM NEGERI (107. Kursus)</option>
            <option value="DL.108">DIKLAT DALAM NEGERI (108. Orientasi/Prajabatan)</option>
            <option value="DL.109">DIKLAT DALAM NEGERI (109. Seminar, Lokakarya)</option>
            <option value="DL.110">DIKLAT DALAM NEGERI (110. Beasiswa)</option>
            <option value="DL.00">================================================================================</option>
              <option value="DL.201">DIKLAT LUAR NEGERI (201. Seminar, Lokakarya, Kongres)</option>
              <option value="DL.202">DIKLAT LUAR NEGERI (202. Beasiswa)</option>
              <option value="DL.203">DIKLAT LUAR NEGERI (203. Diklat dengan substansi M/K/G)</option>
              <option value="DL.204">DIKLAT LUAR NEGERI (204. Diklat dengan substansi kesekretariatan)</option>
              <option value="DL.00">================================================================================</option>
                <option value="DL.301">UMUM (301. Laporan dan Evaluasi)</option>
                <option value="DL.302">UMUM (302. Wisuda)</option>
      </optgroup>



<!-- GEOFISISKA -->
        <optgroup data-rel="GF">
          <option value="GF.001">KEBUTUHAN FASILITAS (001. Pembangunan Fasilitas) </option>
          <option value="GF.002">KEBUTUHAN FASILITAS (002. Rehabilitasi/Perawatan) </option>
          <option value="GF.003">KEBUTUHAN FASILITAS (003. Pengembangan Fasilitas) </option>
          <option value="GF.004">KEBUTUHAN FASILITAS (004. Seismic vault/Peer) </option>
          <option value="GF.005">KEBUTUHAN FASILITAS (005. Peralatan Gempa bumi dan Tsunami) </option>
          <option value="GF.006">KEBUTUHAN FASILITAS (006. Peralatan Seismologi Teknik) </option>
          <option value="GF.007">KEBUTUHAN FASILITAS (007. Peralatan Geofisika Potensial dan Tanda Waktu) </option>
          <option value="GF.008">KEBUTUHAN FASILITAS (008. Operasional Pendukung (UPS, Genset, dsb)) </option>
          <option value="GF.00">================================================================================</option>
            <option value="GF.101">PENGAMATAN (101. Survey) </option>
            <option value="GF.102">PENGAMATAN (102. Pengamatan Gempa bumi) </option>
            <option value="GF.103">PENGAMATAN (103. Pengamatan Tsunami) </option>
            <option value="GF.104">PENGAMATAN (104. Pengamatan Seismologi Teknik) </option>
            <option value="GF.105">PENGAMATAN (105. Pengamatan Geopotensial dan Tanda Waktu) </option>
            <option value="GF.106">PENGAMATAN (106. Pengamatan Unsur Geofisika lainnya (termasuk Prekursor) </option>
            <option value="GF.00">================================================================================</option>
              <option value="GF.201">PENGELOLAAN (201. Pengumpulan, Penyimpanan, dan Pengaksesan Data Gempa bumi) </option>
              <option value="GF.202">PENGELOLAAN (202. Pengolahan, dan Analisis Data Gempa bumi) </option>
              <option value="GF.203">PENGELOLAAN (203. Pengumpulan, Penyimpanan, dan Pengaksesan Data Tsunami) </option>
              <option value="GF.204">PENGELOLAAN (204. Pengumpulan, dan Analisis Data Tsunami) </option>
              <option value="GF.205">PENGELOLAAN (205. Pengumpulan, Penyimpanan, dan Pengaksesan Data Seismologi Teknik) </option>
              <option value="GF.206">PENGELOLAAN (206. Pengolahan, dan Analisis Data Seismologi Teknik) </option>
              <option value="GF.207">PENGELOLAAN (207. Pengumpulan, Timpaan, dan Pengaksesan Data Geofisika Potensial dan Tanda WaktuPengolahan dan Analisis) </option>
              <option value="GF.208">PENGELOLAAN (208. Pengolahan dan Analisis) </option>
              <option value="GF.209">PENGELOLAAN (209 Pengelolaan Unsur Geofisika lainnya (termasuk Prekursor)) </option>
              <option value="GF.210">PENGELOLAAN (210. Pengelolaan Terbatas Meteorologi/Klimatologi/Kualitas Udara) </option>
              <option value="GF.00">================================================================================</option>
                <option value="GF.301">PELAYANAN (301. Publik) </option>
                <option value="GF.302">PELAYANAN (302. Khusus) </option>
                <option value="GF.00">================================================================================</option>
                  <option value="GF.401">KOMUNIKASI (401. Gempa bumi dan Tsunami) </option>
                  <option value="GF.402">KOMUNIKASI (402. Seismologi Teknik) </option>
                  <option value="GF.403">KOMUNIKASI (403. Geofisika Potensial) </option>
                  <option value="GF.00">================================================================================</option>
                    <option value="GF.501">MONITORING DAN EVALUASI (501. Tes Komunikasi Desiminasi (Sirine, DVB, WRS, dsb)) </option>
                    <option value="GF.502">MONITORING DAN EVALUASI (502. Laporan Rutin (Harian, Dekade, Bulanan, Tahunan)) </option>
      </optgroup>

<!-- KLIMATOLOGI -->
        <optgroup data-rel="KT">
          <option value="KT.001">KLIMATOLOGI DAN KUALITAS UDARA (001. Pembangunan Fasilitas)</option>
          <option value="KT.002">KLIMATOLOGI DAN KUALITAS UDARA (002. Rehabilitasi/Perawatan)</option>
          <option value="KT.003">KLIMATOLOGI DAN KUALITAS UDARA (003. Pengembangan Fasilitas)</option>
          <option value="KT.004">KLIMATOLOGI DAN KUALITAS UDARA (004. Operasional)</option>
          <option value="KT.00">================================================================================</option>
            <option value="KT.101">PENGAMATAN (101. Survey) </option>
            <option value="KT.102">PENGAMATAN (102. Permukaan Darat) </option>
            <option value="KT.103">PENGAMATAN (103. Permukaan Laut) </option>
            <option value="KT.104">PENGAMATAN (104. Permukaan Udara) </option>
            <option value="KT.105">PENGAMATAN (105. Operasional) </option>
            <option value="KT.00">================================================================================</option>
              <option value="KT.201">ANALISA (201. Data permukaan) </option>
              <option value="KT.202">ANALISA (202. Udara Atas) </option>
              <option value="KT.203">ANALISA (203. Khusus) </option>
              <option value="KT.00">================================================================================</option>
                <option value="KT.301">PRAKIRAAN (301. Iklim Jangka Pendek) </option>
                <option value="KT.302">PRAKIRAAN (302. Iklim Jangka Sedang) </option>
                <option value="KT.303">PRAKIRAAN (303. Iklim Jangka Panjang) </option>
                <option value="KT.304">PRAKIRAAN (304. Musim (hujan dan kemarau)) </option>
                <option value="KT.305">PRAKIRAAN (305. Khusus (Pertanian, Industri, dll)) </option>
                <option value="KT.306">PRAKIRAAN (306. Verifikasi/Evaluasi/Buletin) </option>
                <option value="KT.00">================================================================================</option>
                  <option value="KT.401">PELAYANAN JASA DAN INFORMASI (401. Iklim/Data Klimatologi) </option>
                  <option value="KT.402">PELAYANAN JASA DAN INFORMASI (402. Konsultasi) </option>
                  <option value="KT.403">PELAYANAN JASA DAN INFORMASI (403. Khusus) </option>
      </optgroup>

<!-- METEOROLOGI -->
        <optgroup data-rel="ME">
          <option value="ME.001">KEBUTUHAN FASILITAS (001. Pembangunan Fasilitas)</option>
          <option value="ME.002">KEBUTUHAN FASILITAS (002. Rehabilitasi/Perawatan)</option>
          <option value="ME.003">KEBUTUHAN FASILITAS (003. Pengembangan Fasilitas)</option>
          <option value="ME.004">KEBUTUHAN FASILITAS (004. Operasional)</option>
          <option value="ME.00">===============================================</option>
            <option value="ME.101">PENGAMATAN (101. Survey) </option>
            <option value="ME.102">PENGAMATAN (102. Permukaan Darat) </option>
            <option value="ME.103">PENGAMATAN (103. Permukaan Laut) </option>
            <option value="ME.104">PENGAMATAN (104. Permukaan Udara) </option>
            <option value="ME.00">===============================================</option>
              <option value="ME.201">ANALISA (201. Data Permukaan) </option>
              <option value="ME.202">ANALISA (202. Udara Atas) </option>
              <option value="ME.203">ANALISA (203. Pragnosa) </option>
              <option value="ME.204">ANALISA (204. Khusus) </option>
              <option value="ME.00">===============================================</option>
                <option value="ME.301">PRAKIRAAN (301. Cuaca) </option>
                <option value="ME.302">PRAKIRAAN (302. Iklim Jangka Sedang ) </option>
                <option value="ME.303">PRAKIRAAN (303. Iklim Jangka Panjang) </option>
                <option value="ME.304">PRAKIRAAN (304. Khusus) </option>
                <option value="ME.305">PRAKIRAAN (305. Verifikasi/Evaluasi/Buletin) </option>
                <option value="ME.00">===============================================</option>
                  <option value="ME.401">PELAYANAN JASA DAN INFORMASI (401. Cuaca) </option>
                  <option value="ME.402">PELAYANAN JASA DAN INFORMASI (402. Konsultasi) </option>
                  <option value="ME.403">PELAYANAN JASA DAN INFORMASI (403. Khusus) </option>
                 </optgroup>

<!-- INSTRUMENTASI KALIBRASI REKAYASA DAN JARINGAN KOMUNIKASI -->
        <optgroup data-rel="IJ">
          <option value="IJ.001">KEBUTUHAN FASILITAS (001. Instrumentasi, Rekayasa dan Kalibrasi Peralatan Meteorologi)</option>
          <option value="IJ.002">KEBUTUHAN FASILITAS (002. Instrumentasi, Rekayasa dan Kalibrasi Peralatan Klimatologi dan Kualitas Udara)</option>
          <option value="IJ.003">KEBUTUHAN FASILITAS (003. Instrumentasi, Rekayasa dan Kalibrasi Peralatan Geofisika)</option>
          <option value="IJ.004">KEBUTUHAN FASILITAS (004. Sistem Operasi Jaringan Komunikasi dan Internet)</option>
          <option value="IJ.005">KEBUTUHAN FASILITAS (005. Database)</option>
          <option value="IJ.00">===============================================</option>
            <option value="IJ.101">PENGELOLAAN (101. Manajemen Jaringan)</option>
            <option value="IJ.102">PENGELOLAAN (102. Manajemen Database)</option>
            <option value="IJ.103">PENGELOLAAN (103. Pengembangan Database)</option>
            <option value="IJ.104">PENGELOLAAN (104. Pemeliharaan Instrumentasi, Rekayasa, dan Kalibrasi Peralatan Meteorologi, Klimatologi, Kualitas Udara, dan Geofisika)</option>
            <option value="IJ.105">PENGELOLAAN (105. Pemeliharaan Jaringan Komunikasi dan Internet)</option>
            <option value="IJ.106">PENGELOLAAN (106. Pemeliharaan Database)</option>
            <option value="IJ.00">===============================================</option>
              <option value="IJ.201">PELAYANAN (201. Instrumentasi, Rekayasa, dan Kalibrasi Peralatan Meteorologi)</option>
              <option value="IJ.202">PELAYANAN (202. Instrumentasi, Rekayasa, dan Kalibrasi Peralatan Klimatologi, dan Kualitas Udara)</option>
              <option value="IJ.203">PELAYANAN (203. Instrumentasi, Rekayasa, dan Kalibrasi Peralatan Geofisika)</option>
              <option value="IJ.204">PELAYANAN (204. Sistem Operasi Jaringan Komunikasi dan Internet)</option>
              <option value="IJ.205">PELAYANAN (205. Database)</option>
              <option value="IJ.00">===============================================</option>
                <option value="IJ.301">MONITORING DAN EVALUASI (301. Instrumentasi, Rekayasa, dan Kalibrasi Peralatan Meteorologi)</option>
                <option value="IJ.302">MONITORING DAN EVALUASI (302. Instrumentasi, Rekayasa, dan Kalibrasi Peralatan Klimatologi, dan Kualitas Udara)</option>
                <option value="IJ.303">MONITORING DAN EVALUASI (303. Instrumentasi, Rekayasa, dan Kalibrasi Peralatan Geofisika)</option>
                <option value="IJ.304">MONITORING DAN EVALUASI (304. Sistem Operasi Jaringan Komunikasi dan Internet)</option>
                <option value="IJ.305">MONITORING DAN EVALUASI (305. Database)</option>
          </optgroup>


      </select>
    </td>
  </tr>

</table>

</div>
<script type="text/javascript">
 var $cat = $("#category1"),
    $subcat = $("#category2");

var optgroups = {};

$subcat.each(function(i,v){
  var $e = $(v);
  var _id = $e.attr("id");
  optgroups[_id] = {};
  $e.find("optgroup").each(function(){
    var _r = $(this).data("rel");
    $(this).find("option").addClass("is-dyn");
    optgroups[_id][_r] = $(this).html();
  });
});
$subcat.find("optgroup").remove();

var _lastRel;
$cat.on("change",function(){
    var _rel = $(this).val();
    if(_lastRel === _rel) return true;
    _lastRel = _rel;
    $subcat.find("option").attr("style","");
    $subcat.val("");
    $subcat.find(".is-dyn").remove();
    if(!_rel) return $subcat.prop("disabled",true);
    $subcat.each(function(){
      var $el = $(this);
      var _id = $el.attr("id");
      $el.append(optgroups[_id][_rel]);
    });
    $subcat.prop("disabled",false);
});
</script>

              
                  <div class="form-group">
                    <label for="exampleInputEmail1">No Surat</label>
                      <input type="text" class="form-control" name="no_surat" placeholder="No Surat"/>
                  </div>
                  <div class="form-group">
                    <label for="surat">Tanggal Surat</label>
                      <input type="text" class="form-control" name="tgl_surat" id="tgl_surat" data-date-format="yyyy-mm-dd" placeholder="Tanggal Surat"/>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Pengirim</label>
                      <input type="text" class="form-control" name="pengirim" placeholder="Pengirim"/>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Perihal</label>
                      <input type="text" class="form-control" name="perihal" placeholder="Perihal"/>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Lampiran</label>
                      <input type="text" class="form-control" name="lampiran" placeholder="Lampiran"/>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Sifat Surat</label>
                         <select name="sifat_surat" required="required" class="form-control col-md-8">
                                <option value="Biasa">Biasa</option>
                                <option value="Penting">Penting</option>
                                <option value="Segera">Segera</option>
                                <option value="Sangat Penting">Sangat Penting</option>
                                <option value="Rahasia">Rahasia</option>
                          </select>
                    </div> <br> <br>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Penjabat Pendisposisi</label>
                      <input type="text" class="form-control" name="penjabat_disposisi" placeholder="Penjabat Pendisposisi"/>
                  </div>
                 <!--  <div class="form-group">
                    <label for="exampleInputEmail1">Disposisi</label> <br> <br>
                
                      <input type="checkbox" value="Tata Usaha" name="disposisi[]" >Tata Usaha
                      <input type="checkbox" value="Kapok Datin" name="disposisi[]" class="checkbox-inline" >Kapok Datin
                      <input type="checkbox" value="Kapok Obs" name="disposisi[]" class="checkbox-inline">Kapok Obs
                      <input type="checkbox" value="Kapok Forcaster" name="disposisi[]" class="checkbox-inline">Kapok Forcaster
                      <input type="checkbox" value="Kapok Teknisi" name="disposisi[]" class="checkbox-inline">Kapok Teknisi
                      <input type="checkbox" value="PPK" name="disposisi[]" class="checkbox-inline">PPK <br> <br>
                      <input type="checkbox" value="Bendahara Penerimaan" name="disposisi[]" class="checkbox-inline">Bendahara Penerimaan
                      <input type="checkbox" value="Bendahara Pengeluaran" name="disposisi[]" class="checkbox-inline">Bendahara Pengeluaran
                      <input type="checkbox" value="Pejabat ULP" name="disposisi[]" class="checkbox-inline">Pejabat ULP
                      <input type="checkbox" value="PPABP" name="disposisi[]" class="checkbox-inline">PPABP
                      <input type="checkbox" value="Petugas SAIBA" name="disposisi[]" class="checkbox-inline">Petugas SAIBA
                      <input type="checkbox" value="Petugas BMN" name="disposisi[]" class="checkbox-inline">Petugas BMN
                      
                 </div> -->
                     <!--  <select name="disposisi" required="required" class="form-control col-md-8">
                                <option value="Tata Usaha">TU</option>
                                <option value="Kapok Datin">Kapok Datin</option>
                                <option value="Kapok Obs">Kapok Obs</option>
                                <option value="Kapok Forcaster">Kapok Forcaster</option>
                                <option value="Kapok Teknisi">Kapok Teknisi</option>
                                <option value="PPK">PPK</option>
                                <option value="Bendahara Penerimaan">Bendahara Penerimaan</option>
                                <option value="Bendahara Pengeluaran">Bendahara Pengeluaran</option>
                                <option value="Penjabat ULP">Penjabat ULP</option>
                                <option value="PPABP">PPABP</option>
                                <option value="Petugas SAIBA">Petugas SAIBA</option>
                                <option value="Petugas BMN">Petugas BMN</option>
                          </select>
                              -->
                  
                  <div class="form-group">
                       <label for="exampleInputEmail1">Surat Asli/Copy</label>
                         <select name="asli_copy" required="required" class="form-control col-md-8">
                                <option value="surat asli">Surat Asli</option>
                                <option value="surat copy">Surat Copy</option>
                          </select>
                             
                  </div> <br> <br>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Informasi Disposisi</label>
                    <textarea name="informasi_disposisi" class="form-control" cols="30" rows="10"></textarea>
                  </div>
                  <a href="<?php echo base_url(); ?>admin/surat_masuk" class="btn btn-warning"><i class="fa fa-arrow-left"></i> Batal</a>
                  <button type="submit" name="simpan" class="btn btn-success"><i class="fa fa-save"></i> Simpan</button>
                <?php echo form_close(); ?>
                
              </div><!-- /.box-body -->
            </div><!-- /.box -->
          </section><!-- /.content -->
    

     
