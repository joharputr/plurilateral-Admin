<!-- Content Wrapper. Contains page content -->

      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
            Surat Masuk
            <small>Control panel</small>
          </h1>
          <ol class="breadcrumb">
            <li><a href="index"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">Surat Masuk</li>
          </ol>
        </section>



        <!-- Main content -->
        <section class="content">
          
          <div class="row">           
            <div class="col-xs-12">
              <div class="box">
                <div class="box-header">
                  <h3 class="box-title">
                    <a href="<?php echo base_url(); ?>admin/tambah_surat_masuk" class="btn btn-sm btn-primary btn-flat" data-target = "#example1"><i class="fa fa-plus"></i> Tambah</a>
                    <a href="<?php echo base_url(); ?>admin/tambah_surat_masuk2" class="btn btn-sm btn-primary btn-flat" data-target = "#example1"><i class="fa fa-plus"></i> Tambah(manual)</a>
                     <button class="btn btn-sm btn-light btn-flat" title="view" data-toggle="modal" data-target="#lihatlaporan12"><i class="fa fa-eye"></i> Lihat Data</button>
                     <a href="print_surat_masuk" target="_blank">
                     <button class="btn btn-sm btn-success btn-flat" ><i class="fa fa-print"></i> Print</button></a>
                     <a href="export_surat_masuk" target="_blank">
                     <button class="btn btn-sm btn-info btn-flat" ><i class="fa fa-print"></i> Export to Excel</button></a>
                     <a href="export_sql_surat_masuk" target="_blank">
                     <button class="btn btn-sm btn-warning btn-flat" ><i class="fa fa-print"></i> Backup SQL</button></a>
                      <a href="delete_all_surat_masuk" onclick="javascript: return confirm('Anda yakin akan menghapus semua data surat masuk ?')" class="btn btn-sm btn-danger btn-flat"><i class="fa fa-trash"></i> Hapus Semua Data </a>
                  </h3>


                </div><!-- /.box-header -->
                <div class="box-body table-responsive no-padding">
                
                  <table id="example1" class="table table-bordered table-hover dataTable">
                    <thead>
                      <tr>
                        <th>No</th>
                        <th>No. Agenda</th>
                        <th>Tanggal Diterima</th>
                        <th>Kode Arsip </th>
                  
                        <th>No Surat</th>
                        <th>Tanggal Surat</th>
                        <th>Pengirim</th>
                        <th>Perihal</th>
                        <th>Lampiran</th>
                        <th>Sifat Surat</th>
                        <th>Penjabat Pendisposisi</th>
                        <th>Disposisi</th>
                        <th>Surat Asli/copy</th>
                        <th>Informasi Disposisi</th>
                        <th>File Scan</th>
                        <th>Aksi</th> 

                      <!--   <th> No</th>
                        <th> Nama</th>
                        <th> Tanggal Surat</th>
                        <th> Gambar</th>
                        <th> Aksi</th> -->
                      
                     </tr>
                    </thead>
                      
                    <tbody>

                        <?php  
                        $no = 1; 
                        $id = 1;
                        foreach ($cek as $lihat):
                        ?>
                      <tr>

                        <td><?php echo $no++?></td>
                        <td> <div style="width: 100px;"><?php if ($id <= 9)
                            echo '00'.$id++;
                          else if($id > 9 && $id <= 99)
                            echo '0'.$id++;
                          else if ($id > 99)
                            echo $id++;?></td> 

                        <td>  <div style="width: 150px;"> <?php echo tgl_indo($lihat->tgl_terima) ?></td> </div>
                        <td> <div style="width: 100px;"><?php echo ucwords($lihat->kode_arsip) ?></td> 
                
                        <td>  <div style="width: 200px;"> <?php echo ucwords($lihat->no_surat) ?></td>
                        <td>  <div style="width: 150px;"> <?php echo tgl_indo($lihat->tgl_surat) ?></td> </div>
                        <td> <div style="width: 100px;"><?php echo ucfirst($lihat->pengirim) ?></td> 
                        <td> <div style="width: 400px;"> <?php echo ucfirst($lihat->perihal) ?></td>  </div>
                        <td> <div style="width: 100px;"><?php echo ucfirst($lihat->lampiran) ?></td> 
                        <td> <div style="width: 100px;"><?php echo ucfirst($lihat->sifat_surat) ?></td> 
                        <td> <div style="width: 200px;"><?php echo ucfirst($lihat->penjabat_disposisi) ?></td> 
                        <td> <div style="width: 200px;"><?php echo ucfirst($lihat->disposisi) ?></td> </div>
                        <td> <div style="width: 130px;"><?php echo ucwords($lihat->asli_copy) ?></td>  
                        <td> <div style="width: 350px;"> <?php echo ucwords($lihat->informasi_disposisi) ?></td> </div>
                        <td>  <a href="<?php echo base_url('upload/files/masuk/'.$lihat->gambar) ?>" width="64" > <?php echo base_url('upload/files/'.$lihat->gambar) ?> </a> </td> </div>
                       
                     
                        <td align="center">
                          <div class="btn-group" role="group" style="width: 350px;">
                            <a href="<?php echo base_url(); ?>admin/edit_surat_masuk/<?php echo $lihat->surat_id ?>" class="btn btn-sm btn-success btn-flat"><i class="fa fa-edit"></i> Edit</a>
                            <a href="<?php echo base_url(); ?>admin/hapus_surat_masuk/<?php echo $lihat->surat_id ?>" onclick="javascript: return confirm('Anda yakin akan menghapus data ini ?')" class="btn btn-sm btn-danger btn-flat"><i class="fa fa-trash"></i> Hapus</a>
                            <button class="btn btn-sm btn-primary btn-flat" title="view" data-toggle="modal" data-target="#lihatlaporan<?php echo $lihat->surat_id ?>"><i class="fa fa-eye"></i> Lihat Disposisi </button>
                            <a href="print_disposisi?surat_id=<?php  echo $lihat->surat_id; ?>" target="_blank">
                                <button class="btn btn-sm btn-light btn-flat" ><i class="fa fa-print"></i> Print</button></a>


<!-- modal lihat disposisi -->
            <div id="printThis<?php echo $lihat->surat_id; ?>">
              <div id="lihatlaporan<?php echo $lihat->surat_id; ?>" class="modal fade" role="dialog">
                <div class="modal-dialog" style="width: 80%">
                 
                 <!-- Modal content-->
                 <div class="modal-content">
                  <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                      </div> 

 <!-- lihat disposisi --> 
               
                      
          <div class="modal-body" > 
              <div class="row">
                  <div class="col-lg-12" style="padding-left: 5%; padding-right: 5%">
                      <br>
                          <style>
                              tr, td{
                                border: 1px solid;
                               
                              }
                              th {
                                font-size: 16px;
                                
                              }
                          </style>

                         <table style="font-family: arial, sans-serif; border-collapse: collapse; width: 100%;">
                                
                          <tr>
                             <th colspan="4"  style="text-align: center"> <br>
                                <div class="col-lg-2 col-sm-2 col-md-2 col-xs-2 col-xl-2" ">
                                  <img src="<?php echo base_url() ?>logo_BMKG.png " style="width: 80%; height: auto;">
                                </div>
  
                                BADAN METEOROLOGI KLIMATOLOGI DAN GEOFISIKA <br>
                                STASIUN KLIMATOLOGI MLATI YOGYAKARTA<br>
                                <h5 style="margin-top: 0px"> Jl. Kabupaten Km. 5,5 Duwet Sendangadi, Mlati, Sleman, D.I. Yogyakarta<br>
                                Telp : (0274) 2880152 ; Fax: (0247) 2880151 ; email: staklim.yogya@gmail.com </h5><br>
                              </th>  
                          </tr>

                          <tr>
                                <th colspan="4" style="text-align: center">LEMBAR DISPOSISI </th> 
                          </tr>


                          <tr >
                                <th colspan="4" style="padding-left: 80px;" > Kode Arsip &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  : &nbsp;  <?php echo $lihat->kode_arsip; ?>   </th> 
                          </tr>

                           <tr >
                                <th colspan="4" style="padding-left: 80px;" > Nomor Agenda &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; : &nbsp;  <?php echo $lihat->no_agenda; ?>   </th> 
                          </tr>

                          <tr>
                                <th colspan="4" style="padding-left: 80px;"> Tingkat Keamanan &nbsp;&nbsp;&nbsp;&nbsp; : &nbsp; <?php echo $lihat->sifat_surat; ?> </th> 
                          </tr>

                          <tr>
                                <th colspan="4" style="padding-left: 80px;"> Tanggal Penerimaan &nbsp; : &nbsp; <?php echo tgl_indo($lihat->tgl_terima); ?>  </th> 
                          </tr>

                          <tr>
                                <th colspan="4" style="padding-left: 80px;"> Nomor Surat &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; : &nbsp; <?php echo $lihat->no_surat; ?> </th> 
                          </tr>

                          <tr>
                                <th colspan="4" style="padding-left: 80px;"> Tanggal Surat &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; : &nbsp; <?php echo tgl_indo($lihat->tgl_surat); ?> </th> 
                          </tr>

                          <tr>
                                <th colspan="4" style="padding-left: 80px;"> Asal Surat &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; : &nbsp; <div style="margin-left: 180px; margin-top: -18px;"> <?php echo $lihat->pengirim; ?> </th> 
                          </tr>

                          <tr>
                                <th colspan="4" style="padding-left: 80px;"> Perihal &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; : &nbsp; <div style="margin-left: 180px; margin-top: -18px;"> <?php echo $lihat->perihal; ?> </th> 
                          </tr>

                          <tr>
                              <th colspan="4" style="text-align: center"> Diteruskan Kepada Yth : </th> 
                          </tr>
                          
                          <tr>
                               <td height="50" colspan="4"  align=left valign=top> 
                                  <input style="width:30px" type="checkbox" value="Tata Usaha" name="disposisi[]" >Tata Usaha
                                  <input style="margin-left:130px; width:30px" type="checkbox" value="Kapok Datin" name="disposisi[]"  >Kapok Datin
                                  <input style="margin-left:100px ; width:30px" type="checkbox" value="Kapok Obs" name="disposisi[]" >Kapok Obs <br> <br>

                                  <input style="width:30px" type="checkbox" value="Kapok Forcaster" name="disposisi[]">Kapok Forcaster
                                  <input style="margin-left:94px; width:30px"type="checkbox" value="Kapok Teknisi" name="disposisi[]" >Kapok Teknisi
                                  <input style="margin-left: 89px ; width:30px" type="checkbox" value="PPK" name="disposisi[]" >PPK <br> <br>

                                  <input style="width:30px" type="checkbox" value="Bendahara Penerimaan" name="disposisi[]" >Bendahara Penerimaan
                                  <input style="margin-left:42px; width:30px" type="checkbox" value="Bendahara Pengeluaran" name="disposisi[]" >Bendahara Pengeluaran
                                  <input style="margin-left:14px; width:30px" type="checkbox" value="Pejabat ULP" name="disposisi[]" >Pejabat ULP <br> <br>

                                  <input style="width:30px" type="checkbox" value="PPABP" name="disposisi[]">PPABP
                                  <input style="margin-left:158px; width:30px" type="checkbox" value="Petugas SAIBA" name="disposisi[]" >Petugas SAIBA
                                  <input style="margin-left:79px; width:30px" type="checkbox" value="Petugas BMN" name="disposisi[]" >Petugas BMN
                              </td>
                            </tr>
                         
                           <tr>
                              <th colspan="4" style="text-align: center">Disposisi: </th> 
                          </tr>

                            <tr>
                              <td  colspan="4"  align=left valign=top> 
                                  <input style="margin-left:200px ; width:30px" type="checkbox" value="KBSD" name="disposisi[]" >Tindak Lanjut (v)
                                  <input style="margin-left:200px ; width:30px" type="checkbox" value="KBPB" name="disposisi[]" >Diketahui (o)  </td>
                           </tr>
                          <tr>
                              <td height="50" colspan="4"  align=left valign=top> 
                                  <input style="width:30px" type="checkbox" value="Harap Mewakili" name="disposisi[]" >Harap Mewakili
                                  <input style="margin-left:179px; width:30px" type="checkbox" value="Untuk Diteruskan" name="disposisi[]"  > Untuk Diteruskan <br>
                                  
                                  <input style="width:30px" type="checkbox" value="Hadir Mendampingi" name="disposisi[]" >Hadir Mendampingi 
                                  <input style="margin-left:152px; width:30px" type="checkbox" value="Untuk Diselesaikan" name="disposisi[]"> Untuk Diselesaikan <br>
                                  
                                  <input style="width:30px"type="checkbox" value="Segera Ditindaklanjuti" name="disposisi[]" >Segera Ditindaklanjuti
                                  <input style="margin-left: 137px ; width:30px" type="checkbox" value="Untuk Dipelajari" name="disposisi[]" >Untuk Dipelajari <br>

                                  <input style="width:30px" type="checkbox" value="Mohon tanggapan/saran/masukan" name="disposisi[]" >Mohon tanggapan/saran/masukan
                                  <input style="margin-left:60px; width:30px" type="checkbox" value="Untuk Diketahui" name="disposisi[]"  > Untuk Diketahui <br> 
                                 
                                  <input style="width:30px" type="checkbox" value="Fasilitas Sesuai ketetapan berlaku" name="disposisi[]" >Fasilitas Sesuai ketetapan berlaku 
                                  <input style="margin-left:58px; width:30px" type="checkbox" value="Untuk Direkap" name="disposisi[]"> Untuk Direkap <br> 

                                  <input style="width:30px"type="checkbox" value="Segera Ditindaklanjuti" name="disposisi[]" >Dikonsultasikan Dengan
                                  <input style="margin-left: 120px ; width:30px" type="checkbox" value="Untuk Dimonitor" name="disposisi[]" >Untuk Dimonitor <br>

                                  <input style="width:30px" type="checkbox" value="Dibuat Surat Jawaban" name="disposisi[]" >Dibuat Surat Jawaban
                                  <input style="margin-left:133px ; width:30px" type="checkbox" value="Untuk dijadikan bahan masukan" name="disposisi[]" >Untuk dijadikan bahan masukan <br>

                                   <input style="width:30px"type="checkbox" value="Bahan Monitoring" name="disposisi[]" >Bahan Monitoring
                                  <input style="margin-left: 162px ; width:30px" type="checkbox" value="Untuk Didiskusikan dengan" name="disposisi[]" >Untuk Didiskusikan dengan <br>

                                  <input style="width:30px"type="checkbox" value="Buat Surat Edaran" name="disposisi[]" >Buat Surat Edaran
                                  <input style="margin-left: 156px ; width:30px" type="checkbox" value="Untuk Dikoordinasikan dengan" name="disposisi[]" >Untuk Dikoordinasikan dengan <br>

                                  <input style="width:30px" type="checkbox" value="Untuk dibuat surat jawaban" name="disposisi[]" >Untuk dibuat surat jawaban
                                  <input style="margin-left:100px; width:30px" type="checkbox" value="Untuk diarsipkan" name="disposisi[]" >Untuk diarsipkan
                                 
                          </tr>  

                            <tr>
                              <th colspan="4">Catatan Khusus : </th> 
                          </tr>

                          <tr>
                              <td height="150" colspan="4" align=left valign=top><?php echo $lihat->informasi_disposisi; ?></td> 

                          </tr>  
                          

                          </table> <br>

                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
      </div>


                   <?php endforeach; ?>
          </table>
        </div>
      </div><!-- /.box-body -->
    </div>

  </div>
  <span>* jika ingin mengubah data(edit) dimohon mengisi kembali file scan, kode arsip dan disposisi</span>
</div>
</section><!-- /.content -->

</div><!-- /.content-wrapper -->



<?php
// konfigurasi database
$host       =   "localhost";
$user       =   "root";
$password   =   "";
$database   =   "demo_surat";
// perintah php untuk akses ke database
$koneksi = mysqli_connect($host, $user, $password, $database);
?>
 

 <style>
  th, tr, td{
     border: 3px solid;
     text-align: left;
     padding: 5px;
} </style>


<?php
$query = mysqli_query($koneksi,"SELECT * FROM tb_surat_masuk ORDER BY surat_id DESC");
?>
 <div id="lihatlaporan12" class="modal fade" role="dialog">
     <div class="modal-dialog" style="width: 80%">
                 <!-- Modal content-->
       <div class="modal-content">
          <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal">&times;</button>
           </div> 
               <div class="modal-body" > 
                 <div class="row">
                   <div class="col-lg-12" style="padding-left: 10%; padding-right: 10%">
                     <div class="row">
                       <div class="col-sm-2" style="text-align: center;">
                         <img src="<?php echo base_url() ?>logo_BMKG.png" style="width: 60%; height: auto;">
                       </div>
                          <div class="col-sm-10" style="text-align: center;">
                            BADAN METEOROLOGI KLIMATOLOGI DAN GEOFISIKA <br>
                            <strong style="font-size: 150%">STASIUN KLIMATOLOGI MLATI YOGYAKARTA</strong><br>
                            Jl. Kabupaten Km. 5,5 Duwet Sendangadi, Mlati, Sleman, D.I. Yogyakarta<br>
                            Telp : (0274) 2880152 ; Fax: (0247) 2880151 ; email: staklim.yogya@gmail.com
                            <br><br>
                          </div>
                        </div>
                        <div class="row" style="background-color: black; height: 4px;"></div> <br> <br>
                        
<form action="" method="post">
    <table table style="font-family: arial, sans-serif; border-collapse: collapse; width: 100%;">
        

        <tr >
          <!--  <th style="background-color: yellow; text-align: center;" > No  </th> -->
           <th style="background-color: yellow; text-align: center;" > No Agenda  </th>
           <th style="background-color: #ADFF2F; text-align: center;"> Tanggal Diterima </th>
          
            <th style="background-color: yellow; text-align: center;"> Kode Arsip </th>
           <th style="background-color: #ADFF2F; text-align: center;"> No Surat </th>
           <th style="background-color: yellow; text-align: center;"> Tanggal Surat </th>
           <th style="background-color: #ADFF2F; text-align: center;"> Pengirim </th>
           <th style="background-color: yellow; text-align: center;">Perihal  </th>
        </tr>

  <?php 

    $cek = mysqli_query($koneksi, "SELECT * from tb_surat_masuk");
    $no=1;
    foreach ($cek as $lihat){
        echo "<tr>
          
           <td > ".$lihat['no_agenda']."</td>
           <td> ".tgl_indo($lihat['tgl_terima'])." </td>
           <td > ".$lihat['kode_arsip']." </td>
      
           <td >".$lihat['no_surat']."</td> 
           <td> ".tgl_indo($lihat['tgl_surat'])."  </td>
           <td>".$lihat['pengirim']." </td> 
           <td > ".$lihat['perihal']."  </td>
         </tr> " ;
        $no++;
    }
    ?>
    </table>
</form>
       </div>
      </div>
    </div>
  </div>
  </div>
  </div>
</div>



