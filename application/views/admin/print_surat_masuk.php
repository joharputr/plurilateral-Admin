<link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<script>
$(document).ready(function(){
  window.print();
  });
</script>


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
$query = mysqli_query($koneksi,"SELECT * FROM tb_jenis_surat ORDER BY surat_id DESC");
?>


<style>
  th, tr, td{
     border: 3px solid;
     text-align: center;
     padding: 5px;


} </style>



               <div class="modal-body" > 
                    <div class="row">
                      <div class="col-lg-12" style="padding-left: 5%; padding-right: 5%">
                        <div class="row">
                          <div class="col-lg-2 col-sm-2 col-md-2 col-xs-2 col-xl-2" style="text-align: center;">
                      <img src="<?php echo base_url() ?>logo_BMKG.png "
                            style="width: 80%; height: auto;">
                      </div>
                      
                          <div class="col-sm-10" style="text-align: center;">
                            BADAN METEOROLOGI KLIMATOLOGI DAN GEOFISIKA <br>
                            <strong style="font-size: 150%">STASIUN KLIMATOLOGI MLATI YOGYAKARTA</strong><br>
                            Jl. Kabupaten Km. 5,5 Duwet Sendangadi, Mlati, Sleman, D.I. Yogyakarta<br>
                            Telp : (0274) 2880152 ; Fax: (0247) 2880151 ; email: staklim.yogya@gmail.com
                            <br>
                            <hr width="100%" noshade style="border-top: 2px solid #000;">
                          </div>
                        </div> <br>

<form action="" method="post">
    <table table style="font-family: arial, sans-serif; border-collapse: collapse; width: 100%;">
        <tr >
           <th style="background-color: yellow;"> No Agenda  </th>
           <th style="background-color: #ADFF2F;"> Tanggal Diterima </th>
           <th style="background-color: yellow;"> Kode Arsip </th>
           <th style="background-color: #ADFF2F;"> No Surat </th>
           <th style="background-color: yellow;"> Tanggal Surat </th>
           <th style="background-color: #ADFF2F;"> Pengirim </th>
           <th style="background-color: yellow;">Perihal  </th>
        </tr>

  <?php 

    $data = mysqli_query($koneksi, "SELECT * from tb_surat_masuk");
    $no=1;
    foreach ($data as $lihat){
        echo "<tr>
           <td> ".$lihat['no_agenda']."</td>
           <td> ".tgl_indo($lihat['tgl_terima'])." </td>
           <td> ".$lihat['kode_arsip']." </td>
           <td>".$lihat['no_surat']."</td> 
           <td> ".tgl_indo($lihat['tgl_surat'])."  </td>
           <td>".$lihat['pengirim']." </td> 
           <td> ".$lihat['perihal']."  </td>
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


