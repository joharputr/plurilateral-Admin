<!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
            Pembuatan Surat
            <small>Control panel</small>
          </h1>
          <ol class="breadcrumb">
            <li><a href="index"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">Buat Surat</li>
          </ol>
        </section>

        <!-- Main content -->
        <section class="content">
          
          <div class="row">           
            <div class="col-xs-12">
              <div class="box">
                <div class="box-header">
                  <h3 class="box-title">
                    <a href="<?php echo base_url(); ?>admin/tambah_buat" class="btn btn-sm btn-primary btn-flat" data-target = "#example1"><i class="fa fa-plus"></i> Tambah</a>
                   
                    <a href="export_buat_surat" target="_blank">
                     <button class="btn btn-sm btn-info btn-flat" ><i class="fa fa-print"></i> Export to Excel</button></a>
                     <a href="export_sql_buat" target="_blank">
                     <button class="btn btn-sm btn-warning btn-flat" ><i class="fa fa-print"></i> Backup SQL</button></a>
                      <a href="delete_all_surat_buat" onclick="javascript: return confirm('Anda yakin akan menghapus semua data buat surat keluar ?')" class="btn btn-sm btn-danger btn-flat"><i class="fa fa-trash"></i> Hapus Semua Data </a>
                  </h3>
             
                </div><!-- /.box-header -->
                <div class="box-body table-responsive no-padding">
                
                  <table id="example1" class="table table-bordered table-hover dataTable">
                    <thead>
                      <tr>
                        <th>No</th>
                        <th>No Surat</th>
                        <th>Nama Penanda Tangan  </th>
                        <th>NIP Penanda Tangan  </th>
                        <th>Pangkat / Golongan.ruang Penanda Tangan </th>
                        <th>Jabatan Penanda Tangan </th>
                        <th>Unit Organisasi</th>
                        <th>Nama Penerima </th>
                        <th>NIP Penerima</th>
                        <th>Pangkat / Golongan.ruang Penerima</th>
                        <th>Jabatan Penerima</th>
                        <th>Tugas</th>
                        <th>Selama</th>
                        <th>Lokasi</th>
                        <th>Tanggal</th>
                         <th>Kepala / PLH </th>
                        <th>Keterangan  (Khusus Surat Keterangan)</th>
              
                        <th>Aksi</th> 

                     </tr>
                    </thead>

                    <tbody>

                        <?php  
                        $no = 1; 
                        foreach ($data as $lihat):
                        ?>
                      <tr>
                          
                        <td><?php echo $no++ ?></td>
                        <td> <div style="width: 200px;"><?php echo $lihat->no_surat?></td>
                        <td> <div style="width: 200px;"><?php echo $lihat->nama1?></td>
                        <td>  <div style="width: 200px;"> <?php echo ucwords($lihat->nip1) ?></td>
                        <td> <div style="width: 200px;"><?php echo ucfirst($lihat->pangkat1) ?></td> 
                        <td> <div style="width: 200px;"><?php echo ucfirst($lihat->jabatan1) ?></td> 
                        <td> <div style="width: 200px;"><?php echo ucfirst($lihat->unit) ?></td> 
                        <td> <div style="width: 200px;"><?php echo ucwords($lihat->nama2) ?></td> 
                        <td>  <div style="width: 200px;"> <?php echo ucfirst($lihat->nip2) ?></td> </div>
                        <td> <div style="width: 200px;"> <?php echo ucfirst($lihat->pangkat2) ?></td>  </div>
                        <td> <div style="width: 200px;"><?php echo ucfirst($lihat->jabatan2) ?></td> 
                        <td> <div style="width: 300px;"><?php echo ucfirst($lihat->tugas) ?></td> </div>
                        <td> <div style="width: 200px;"><?php echo ucwords($lihat->waktu) ?></td> 
                        <td> <div style="width: 200px;"><?php echo ucwords($lihat->lokasi) ?></td>   
                        <td>  <div style="width: 150px;"> <?php echo tgl_indo($lihat->tanggal) ?></td> </div>
                         <td> <div style="width: 200px;"><?php echo ucwords($lihat->plh) ?></td>  
                         <td> <div style="width: 200px;"><?php echo ucwords($lihat->keterangan) ?></td>  



                        <td align="center">
                          <div class="btn-group" role="group" style="width: 450px;">
                             <a href="<?php echo base_url(); ?>admin/edit_buat/<?php echo $lihat->id ?>" class="btn btn-sm btn-success btn-flat"><i class="fa fa-edit"></i> Edit</a>
                             <a href="<?php echo base_url(); ?>admin/hapus_buat/<?php echo $lihat->id ?>" onclick="javascript: return confirm('Anda yakin akan menghapus data ini ?')" class="btn btn-sm btn-danger btn-flat"><i class="fa fa-trash"></i> Hapus</a>
                           <button class="btn btn-sm btn-primary btn-flat" title="view" data-toggle="modal" data-target="#lihatlaporan<?php echo $lihat->id ?>"><i class="fa fa-eye"></i> Lihat SK </button>
                             <button class="btn btn-sm btn-light btn-flat" title="view" data-toggle="modal" data-target="#lihatlaporan2<?php echo $lihat->id ?>"><i class="fa fa-eye"></i> Lihat SPT </button>
                              <a href="print_buat?id=<?php  echo $lihat->id; ?>" target="_blank">
                                <button class="btn btn-sm btn-info btn-flat" ><i class="fa fa-print"></i> Print SPT</button></a>
                                  <a href="print_buat2?id=<?php  echo $lihat->id; ?>" target="_blank">
                                <button class="btn btn-sm btn-warning btn-flat" ><i class="fa fa-print"></i> Print SK</button></a>
                     
                      

  <!-- modal lihat spt -->
            <div id="printThis<?php echo $lihat->id; ?>">
              <div id="lihatlaporan<?php echo $lihat->id; ?>" class="modal fade" role="dialog">
                <div class="modal-dialog" style="width: 80%">
                 
                 <!-- Modal content-->
                 <div class="modal-content">
                  <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                      </div> 

 <!-- lihat spt --> 
               
                    
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
                      
                       
                        <div class="row" style="text-align: center;  "> 
                         <h3 >SURAT KETERANGAN  </h3>
                           <div style="margin-top: -15px;"><h3 >Nomor : <?php echo $lihat->no_surat; ?>  </h3> 
                          <br></div>
                        </div>


                        <div class="row">

                           <div style="padding-left: 100px; padding-right: 30px; text-align: justify;  font-size: 130%">
                            <br>
                            Yang bertanda tangan di bawah ini : <br>
                            Nama &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; : &nbsp; <?php echo $lihat->nama1; ?><br>
                            NIP &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: &nbsp; <?php echo $lihat->nip1; ?><br>
                            Jabatan &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: &nbsp; <?php echo $lihat->jabatan1; ?><br> <br>

                            Dengan ini memberikan tugas kepada : <br>

                            Nama &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; : &nbsp; <?php echo $lihat->nama2; ?><br>
                            NIP &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: &nbsp; <?php echo $lihat->nip2; ?><br>
                            Pangkat/Gol &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: &nbsp; <?php echo $lihat->pangkat2; ?><br>
                            Jabatan&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: &nbsp; <?php echo $lihat->jabatan2; ?><br> <br>

                            <?php echo $lihat->keterangan; ?> <br> <br>
                           
                           
                           
                            Demikian Surat Keterangan ini dibuat dan dipergunakan sebagaimana mestinya.

                           <div  style="float: right;">
                              <br>
                                  Sleman, &nbsp;<?php
                                  date_default_timezone_set("Asia/Jakarta");
                                  echo "" . tgl_indo(date("Y-m-d"));
                                  ?> <br> <?php echo $lihat->plh; ?><br>
                                   <br><br><br>

                                <?php echo $lihat->nama1; ?><br>
                                
                      
                          </div>     
                            <br></div>
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
      </div>

<!-- modal lihat spt -->
            <div id="printThis<?php echo $lihat->id; ?>">
              <div id="lihatlaporan2<?php echo $lihat->id; ?>" class="modal fade" role="dialog">
                <div class="modal-dialog" style="width: 80%">
                 
                 <!-- Modal content-->
                 <div class="modal-content">
                  <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                      </div> 

 <div class="modal-body" > 
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
                      
                         <div class="row" style="text-align: center;  "> 
                          <h3>SURAT PERINTAH TUGAS  </h3>
                         <div style="margin-top: -15px;"><h3 >Nomor : <?php echo $lihat->no_surat; ?>  </h3> 
                          <br></div>
                        </div>


                        <div class="row">

                           <div style="padding-left: 100px; padding-right: 30px; text-align: justify;  font-size: 130%">
                            <br>
                            Yang bertanda tangan di bawah ini : <br>
                            Nama &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; : &nbsp; <?php echo $lihat->nama1; ?><br>
                            NIP &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: &nbsp; <?php echo $lihat->nip1; ?><br>
                            Pangkat/Gol &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: &nbsp; <?php echo $lihat->pangkat1; ?><br>
                            Jabatan  &nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: &nbsp; <?php echo $lihat->jabatan1; ?><br>
                            Unit Organisasi &nbsp;&nbsp;&nbsp; : &nbsp; <?php echo $lihat->unit; ?><br><br>

                            Dengan ini memberikan tugas kepada : <br>

                            Nama &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; : &nbsp; <?php echo $lihat->nama2; ?><br>
                            NIP &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: &nbsp; <?php echo $lihat->nip2; ?><br>
                            Pangkat/Gol &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: &nbsp; <?php echo $lihat->pangkat2; ?><br>
                            Jabatan &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: &nbsp; <?php echo $lihat->jabatan2; ?><br> <br>

                                 Untuk melaksanakan : <br>

                            Tugas&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; : &nbsp;  <div style="margin-left: 150px; margin-top: -25px;"> <?php echo $lihat->tugas; ?> </div><br>
                            Selama&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; : &nbsp; <?php echo $lihat->waktu; ?><br>
                            Lokasi&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; : &nbsp;  <div style="margin-left: 150px; margin-top: -25px;"> <?php echo $lihat->lokasi; ?> </div><br>
                            Tanggal&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; : &nbsp; <?php echo $lihat->tanggal; ?><br>                           
                           
                           
                           
                            Demikian, untuk dilaksanakan sebagaimana mestinya. 
                            <div  style="float: right;">
                              <br>
                                  Sleman, &nbsp;<?php
                                  date_default_timezone_set("Asia/Jakarta");
                                  echo "" . tgl_indo(date("Y-m-d"));
                                  ?> <br> <?php echo $lihat->plh; ?><br>
                                   <br><br><br>

                                <?php echo $lihat->nama1; ?><br>
                                
                      
                          </div>     
                            <br></div>
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
      </div>

                   <?php endforeach; ?>
            </tbody>
          </table>
        </div>
      </div><!-- /.box-body -->
    </div>

  </div>
 
</div>
</section><!-- /.content -->

</div><!-- /.content-wrapper -->






