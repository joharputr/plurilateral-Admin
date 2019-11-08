<!--  -->
<!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
            Surat Keluar
            <small>Control panel</small>
          </h1>
          <ol class="breadcrumb">
            <li><a href="index"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">Surat Keluar</li>
          </ol>
        </section>

        <!-- Main content -->
        <section class="content">

          <div class="row">           
            <div class="col-xs-12">
              <div class="box">
                <div class="box-header">
                  <h3 class="box-title">
                    <a href="<?php echo base_url(); ?>admin/tambah_surat_keluar" class="btn btn-sm btn-primary btn-flat"><i class="fa fa-plus"></i> Tambah</a>
                    <a href="<?php echo base_url(); ?>admin/tambah_surat_keluar2" class="btn btn-sm btn-primary btn-flat"><i class="fa fa-plus"></i> Tambah(manual)</a>
                    <button class="btn btn-sm btn-light btn-flat" title="view" data-toggle="modal" data-target="#lihatlaporan2"><i class="fa fa-eye"></i> Lihat Data</button>
                 
                   <a href="print_surat_keluar" target="_blank">
                                <button class="btn btn-sm btn-success btn-flat" ><i class="fa fa-print"></i> Print</button></a>
                                <a href="export" target="_blank">
                                <button class="btn btn-sm btn-info btn-flat" ><i class="fa fa-print"></i> Export to Excel</button></a>
                                <a href="export_sql_surat_keluar" target="_blank">
                                <button class="btn btn-sm btn-warning btn-flat" ><i class="fa fa-print"></i> Export SQL </button></a>
                                
                                 <a href="delete_all_surat_keluar" onclick="javascript: return confirm('Anda yakin akan menghapus semua data surat keluar ?')" class="btn btn-sm btn-danger btn-flat"><i class="fa fa-trash"></i> Hapus Semua Data </a>
                               
             
            
            <!-- bagian print -->
                     <!--  <a href="./admin/print_surat_keluar.php?surat_id=<? ?>" target="_blank"><button class="btn btn-sm btn-warning btn-flat"><i class="fa fa-print"></i> Cetak Data Surat Keluar </button></a> -->
                     


                     </h3>
                  
                </div><!-- /.box-header -->
                <div class="box-body table-responsive no-padding">
                

                  <table id="example1" class="table table-bordered table-hover dataTable" >
                    <thead>
                      <tr>
                        <th>No</th>
                        <th>No. Agenda</th>
                        <th>Tanggal Surat</th>
                          <th>Kode Arsip </th>
                        
                        <th>No Surat</th>
                        <th>Tujuan</th>
                        <th>Perihal</th>
                        <th>Surat Asli/copy</th>
                        <th>Keterangan</th>
                        <th> Gambar</th>
                        <th>Aksi</th>
                    </thead>
                    <tbody>

                          <?php  
                        $no = 1; 
                        $id = 1;
                        foreach ($data as $lihat):
                        ?>
                      <tr>

                        <td><?php echo $no++?></td>
                        <td> <div style="width: 100px;"><?php if ($id <= 9)
                            echo '00'.$id++;
                          else if($id > 9 && $id <= 99)
                            echo '0'.$id++;
                          else if ($id > 99)
                            echo $id++;?></td> 
                            

                      <td>  <div style="width: 150px;"> <?php echo tgl_indo($lihat->tgl_surat) ?></td> </div>
                      <td><div style="width: 100px;"><?php echo ucwords($lihat->kode_arsip) ?></td> 
                  
                      <td><div style="width: 150px;"><?php echo ucwords($lihat->no_surat) ?></td> 
                      <td> <div style="width: 100px;">  <?php echo ucfirst($lihat->tujuan) ?></td> 
                      <td> <div style="width: 400px;"><?php echo ucfirst($lihat->perihal) ?></td> </div>
                      <td><div style="width: 150px;"><?php echo ucwords($lihat->asli_copy) ?></td>  
                      <td> <div style="width: 350px;"> <?php echo ucwords($lihat->keterangan) ?></td>  </div>
                        <td>  <a href="<?php echo base_url('upload/files/keluar/'.$lihat->gambar) ?>" width="64" > <?php echo base_url('upload/files/'.$lihat->gambar) ?> </a> </td>  </div>
                        <td  align="center">
                          <div class="btn-group" role="group" style="width: 200px;">
                            <a href="<?php echo base_url(); ?>admin/edit_surat_keluar/<?php echo $lihat->surat_id ?>" class="btn btn-sm btn-primary btn-flat"><i class="fa fa-edit"></i> Edit</a>
                            <a href="<?php echo base_url(); ?>admin/hapus_surat_keluar/<?php echo $lihat->surat_id ?>" onclick="javascript: return confirm('Anda yakin akan menghapus data ini ?')" class="btn btn-sm btn-danger btn-flat"><i class="fa fa-trash"></i> Hapus</a>
                            
                        </td>                     
                      </tr>
                      <?php endforeach ?>
                    </tbody>
                  </table>
                  
                </div><!-- /.box-body -->
                </div>
             </div>
          </div>
          
          <span>* jika ingin mengubah data(edit) dimohon mengisi kembali file scan dan kode arsip</span>


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
 

<?php
$query = mysqli_query($koneksi,"SELECT * FROM tb_surat_keluar ORDER BY surat_id DESC");
?>



<style>
  th, tr, td{
     border: 3px solid;
     text-align: left;
     padding: 5px;
} </style>


 <div id="lihatlaporan2" class="modal fade" role="dialog">
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
         <!--   <th style="background-color: yellow; text-align: center;" > No  </th> -->
           <th style="background-color: yellow; text-align: center;" > No Agenda  </th>
           <th style="background-color: yellow; text-align: center;"> Tanggal Surat </th>
           <th style="background-color: yellow; text-align: center;"> Kode Arsip (Otomatis) </th>
            <th style="background-color: yellow; text-align: center;"> Kode Arsip (Manual )</th>
           <th style="background-color: yellow; text-align: center;"> No Surat </th>
           <th style="background-color: yellow; text-align: center;"> Tujuan </th>
           <th style="background-color: yellow; text-align: center;">Perihal  </th>
        </tr>

  <?php 

    $data = mysqli_query($koneksi, "SELECT * from tb_surat_keluar");
    $no=1;
    foreach ($data as $lihat){
        echo "<tr>
         
           <td width=30px>".$lihat['no_agenda']."</td>
           <td > ".tgl_indo($lihat['tgl_surat'])."  </td>
           <td > ".$lihat['kode_arsip']."  </td>
         
           <td >".$lihat['no_surat']."</td> 
           <td >".$lihat['tujuan']." </td> 
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