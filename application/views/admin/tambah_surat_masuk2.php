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
                      <input type="text" class="form-control" name="kode_arsip" id="tgl_terima" data-date-format="yyyy-mm-dd" placeholder="Tanggal Diterima"/>
                  </div>
                 
            
                  <div class="form-group">
                    <label for="exampleInputEmail1">Kode Arsip</label>
                      <input type="text" class="form-control" name="kode_arsip" placeholder="No Agenda"/>
                  </div
              
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
    

     
