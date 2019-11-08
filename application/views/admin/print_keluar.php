

<link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>


<script>
$(document).ready(function(){
  window.print();
  });
</script>


  <?php  foreach ($data as $lihat): ?>

 <!-- print spt --> 
               
                 
              <div class="modal-body" style="font-family: arial, sans-serif;"> 
                    <div class="row">
                      <div class="col-lg-12" style="padding-left: 5%; padding-right: 5%">
                        <div class="row" style="background-color: blue;">
                          
                          <div class="col-lg-2 col-sm-2 col-md-2 col-xs-2 col-xl-2" style="text-align: center;">
                             <img src="<?php echo base_url() ?>logo_BMKG.png "
                             style="width: 80%; height: auto;">
                          </div>
                      
                          <div class="col-sm-10" style="text-align: center;">
                           <strong style="font-size: 16px;"> BADAN METEOROLOGI KLIMATOLOGI DAN GEOFISIKA <br>
                            STASIUN KLIMATOLOGI MLATI YOGYAKARTA</strong><br>
                            Jl. Kabupaten Km. 5,5 Duwet Sendangadi, Mlati, Sleman, D.I. Yogyakarta<br>
                            Telp : (0274) 2880152 ; Fax: (0247) 2880151 ; email: staklim.yogya@gmail.com
                            <br>
                            <hr width="100%" noshade style="border-top: 2px solid #000;">
                          </div>
                        </div> 
             
                      
                        <div class="row" style="text-align: center; font-size: 16px; "> 
                         SURAT PERINTAH TUGAS 
                         <div style="margin-top: -5px;">Nomor : <?php echo $lihat->no_surat; ?> 
                          <br></div>
                        </div>

                        <div class="row">

                           <div style="font-family:  arial, sans-serif; padding-left: 100px; font-size: 12px; text-align:justify;">
                            <br>
                            Yang bertanda tangan di bawah ini : <br>
                            Nama&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; : &nbsp; <?php echo $lihat->nama1; ?><br>
                            NIP&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; : &nbsp; <?php echo $lihat->nip1; ?><br>
                            Pangkat/Gol&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; : &nbsp; <?php echo $lihat->pangkat1; ?><br>
                            Jabatan&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; : &nbsp; <?php echo $lihat->jabatan1; ?><br>
                            Unit Organisasi&nbsp;&nbsp;&nbsp;&nbsp; : &nbsp; <?php echo $lihat->unit; ?><br><br>

                            Dengan ini memberikan tugas kepada : <br>

                            Nama&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; : &nbsp; <?php echo $lihat->nama2; ?><br>
                            NIP&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: &nbsp; <?php echo $lihat->nip2; ?><br>
                            Pangkat/Gol&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; : &nbsp; <?php echo $lihat->pangkat2; ?><br>
                            Jabatan&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; : &nbsp; <?php echo $lihat->jabatan2; ?><br> <br>


                             Untuk melaksanakan : <br>

                            Tugas&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; : &nbsp;  <div style="margin-left: 120px; margin-top: -18px;"> <?php echo $lihat->tugas; ?> </div><br>
                            Selama&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; : &nbsp; <?php echo $lihat->waktu; ?><br>
                            Lokasi&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; : &nbsp;  <div style="margin-left: 120px; margin-top: -18px;"> <?php echo $lihat->lokasi; ?> </div><br>
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