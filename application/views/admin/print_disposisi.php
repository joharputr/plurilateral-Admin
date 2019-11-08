

<link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>

<script>
$(document).ready(function(){
  window.print();
  });
</script>


  

  <?php  foreach ($data as $lihat): ?>

 <!-- lihat laporan --> 
               
                 
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
                                <th colspan="4" style="padding-left: 80px;"> Asal Surat &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; : &nbsp; <div style="margin-left: 180px; margin-top: -18px;"> <?php echo $lihat->pengirim; ?> </div></th> 
                          </tr>

                          <tr>
                                <th colspan="4" style="padding-left: 80px;"> Perihal &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; : &nbsp;<div style="margin-left: 180px; margin-top: -18px;"> <?php echo  $lihat->perihal; ?> </div> </th> 
                          </tr>
                          </script>

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
                               
                              </td>
                            </tr>
                         
                           <tr>
                              <th colspan="4" style="text-align: center">Disposisi: </th> 
                          </tr>

                            <tr>
                              <td  colspan="4"  align=left valign=top> 
                                  <input style="margin-left:150px ; width:30px" type="checkbox" value="KBSD" name="disposisi[]" >Tindak Lanjut (v)
                                  <input style="margin-left:100px ; width:30px" type="checkbox" value="KBPB" name="disposisi[]" >Diketahui (o)  </td>
                           </tr>
                          <tr>
                              <td height="50" colspan="4"  align=left valign=top> 
                                  <input style="width:30px" type="checkbox" value="Harap Mewakili" name="disposisi[]" >Harap Mewakili
                                  <input style="margin-left:180px; width:30px" type="checkbox" value="Untuk Diteruskan" name="disposisi[]"  > Untuk Diteruskan <br>
                                  
                                  <input style="width:30px" type="checkbox" value="Hadir Mendampingi" name="disposisi[]" >Hadir Mendampingi 
                                  <input style="margin-left:151px; width:30px" type="checkbox" value="Untuk Diselesaikan" name="disposisi[]"> Untuk Diselesaikan <br>
                                  
                                  <input style="width:30px"type="checkbox" value="Segera Ditindaklanjuti" name="disposisi[]" >Segera Ditindaklanjuti
                                  <input style="margin-left: 134px ; width:30px" type="checkbox" value="Untuk Dipelajari" name="disposisi[]" >Untuk Dipelajari <br>

                                  <input style="width:30px" type="checkbox" value="Mohon tanggapan/saran/masukan" name="disposisi[]" >Mohon tanggapan/saran/masukan
                                  <input style="margin-left:47px; width:30px" type="checkbox" value="Untuk Diketahui" name="disposisi[]"  > Untuk Diketahui <br> 
                                 
                                  <input style="width:30px" type="checkbox" value="Fasilitas Sesuai ketetapan berlaku" name="disposisi[]" >Fasilitas Sesuai ketetapan berlaku 
                                  <input style="margin-left:46px; width:30px" type="checkbox" value="Untuk Direkap" name="disposisi[]"> Untuk Direkap <br> 

                                  <input style="width:30px"type="checkbox" value="Segera Ditindaklanjuti" name="disposisi[]" >Dikonsultasikan Dengan
                                  <input style="margin-left: 117px ; width:30px" type="checkbox" value="Untuk Dimonitor" name="disposisi[]" >Untuk Dimonitor <br>

                                  <input style="width:30px" type="checkbox" value="Dibuat Surat Jawaban" name="disposisi[]" >Dibuat Surat Jawaban
                                  <input style="margin-left:132px ; width:30px" type="checkbox" value="Untuk dijadikan bahan masukan" name="disposisi[]" >Untuk dijadikan bahan masukan <br>

                                   <input style="width:30px"type="checkbox" value="Bahan Monitoring" name="disposisi[]" >Bahan Monitoring
                                  <input style="margin-left: 164px ; width:30px" type="checkbox" value="Untuk Didiskusikan dengan" name="disposisi[]" >Untuk Didiskusikan dengan <br>

                                  <input style="width:30px"type="checkbox" value="Buat Surat Edaran" name="disposisi[]" >Buat Surat Edaran
                                  <input style="margin-left: 158px ; width:30px" type="checkbox" value="Untuk Dikoordinasikan dengan" name="disposisi[]" >Untuk Dikoordinasikan dengan <br>

                                  <input style="width:30px" type="checkbox" value="Untuk dibuat surat jawaban" name="disposisi[]" >Untuk dibuat surat jawaban
                                  <input style="margin-left:96px; width:30px" type="checkbox" value="Untuk diarsipkan" name="disposisi[]" >Untuk diarsipkan
                                 
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