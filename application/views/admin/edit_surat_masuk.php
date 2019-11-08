<link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
          <section class="content-header">
            <h1>
              Edit
              <small>Surat Masuk</small>
            </h1>
            <ol class="breadcrumb">
              <li><i class="fa fa-dashboard"></i> Home</a></li>
              <li><a href="<?php echo base_url(); ?>admin/jenis_surat">Surat Masuk</a></li>
              <li class="active">Edit</li>
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
                <h3 class="box-title">Form Data Edit Surat Masuk</h3>
              </div>
              <div class="box-body">
                <!-- form start -->
                <?php echo form_open_multipart('admin/update_surat_masuk'); ?>
                <?php  
                foreach ($editdata as $data):
                ?>
                  
                   <div class="form-group">
                    <label for="exampleInputEmail1">No Agenda</label>
                      <input type="text" class="form-control" name="no_agenda" value="<?php echo $data->no_agenda ?>" />
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Tanggal Diterima</label>
                      <input type="text" class="form-control" name="tgl_terima" id="tgl_terima" data-date-format="yyyy-mm-dd" value="<?php echo $data->tgl_terima ?>"/>
                  </div>
            
               <div class="form-group">
                    <label for="exampleInputEmail1">Kode Arsip </label>
                      <input type="text" class="form-control" name="kode_arsip" value="<?php echo $data->kode_arsip?>"/>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">No Surat</label>
                      <input type="text" class="form-control" name="no_surat" value="<?php echo $data->no_surat ?>"/>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Tanggal Surat</label>
                      <input type="text" class="form-control" name="tgl_surat" id="tgl_surat" data-date-format="yyyy-mm-dd" value="<?php echo $data->tgl_surat ?>"/>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Pengirim</label>
                      <input type="text" class="form-control" name="pengirim" value="<?php echo $data->pengirim ?>"/>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Perihal</label>
                      <input type="text" class="form-control" name="perihal" value="<?php echo $data->perihal ?>" />
                  </div>
                   <div class="form-group">
                    <label for="exampleInputEmail1">Lampiran</label>
                      <input type="text" class="form-control" name="lampiran" value="<?php echo $data->lampiran ?>" />
                  </div>
                   <div class="form-group">
                    <label for="exampleInputEmail1">Sifat Surat</label>
                     <select name="sifat_surat" required="required" class="form-control col-md-8">
                              <?php if($data->sifat_surat == 'Biasa'): ?>
                                <option value="Biasa">Biasa</option>
                                <option value="Penting">Penting</option>
                                <option value="Segera">Segera</option>
                                <option value="Sangat Penting">Sangat Penting</option>
                                <option value="Rahasia">Rahasia</option>
                              <?php endif ?>
                               <?php if($data->sifat_surat == 'Penting'): ?>
                                <option value="Penting">Penting</option>
                                <option value="Biasa">Biasa</option>
                                <option value="Segera">Segera</option>
                                <option value="Sangat Penting">Sangat Penting</option>
                                <option value="Rahasia">Rahasia</option>
                              <?php endif ?>
                               <?php if($data->sifat_surat == 'Segera'): ?>
                                <option value="Segera">Segera</option>
                                <option value="Biasa">Biasa</option>
                                <option value="Penting">Penting</option>
                                <option value="Sangat Penting">Sangat Penting</option>
                                <option value="Rahasia">Rahasia</option>
                              <?php endif ?>
                               <?php if($data->sifat_surat == 'Sangat Penting'): ?>
                                <option value="Sangat Penting">Sangat Penting</option>
                                <option value="Biasa">Biasa</option>
                                <option value="Penting">Penting</option>
                                <option value="Segera">Segera</option>
                                <option value="Rahasia">Rahasia</option>
                              <?php endif ?>
                               <?php if($data->sifat_surat == 'Rahasia'): ?>
                                <option value="Rahasia">Rahasia</option>
                                <option value="Biasa">Biasa</option>
                                <option value="Penting">Penting</option>
                                <option value="Segera">Segera</option>
                                <option value="Sangat Penting">Sangat Penting</option>
                              <?php endif ?>
                          </select>
                  </div> <br> <br>
                   <div class="form-group">
                    <label for="exampleInputEmail1">Penjabat Pendisposisi</label>
                      <input type="text" class="form-control" name="penjabat_disposisi" value="<?php echo $data->penjabat_disposisi ?>" />
                  </div>
                  
                  <div class="form-group">
                    <label for="exampleInputEmail1" name="disposisi[]">Disposisi</label> <br>
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
                      
                        
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Surat Asli/Copy</label>
                      <select name="asli_copy" required="required" class="form-control">
                          
                          <?php if($data->asli_copy == 'surat copy'): ?>
                             <option value="surat copy">Surat Copy</option>
                             <option value="surat asli">Surat Asli</option>
                          <?php endif ?>
                          <?php if($data->asli_copy == 'surat asli'): ?>
                             <option value="surat asli">Surat Asli</option>
                             <option value="surat copy">Surat Copy</option>
                          <?php endif ?>

                          </select>
                             
                                                       
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Informasi Disposisi</label>
                    <textarea name="informasi_disposisi" class="form-control" cols="30" rows="10"> <?php echo $data->informasi_disposisi ?> </textarea>
                  </div>

                
                   <div class="form-group">
                    <label for="name">Gambar</label>
                    <input type="file" name="gambar" />
                 </div>   




                  <input type="hidden" name="id" value="<?php echo $data->surat_id ?>">
                  <a href="<?php echo base_url(); ?>admin/surat_masuk" class="btn btn-warning"><i class="fa fa-arrow-left"></i> Batal</a>
                  <button type="submit" name="simpan" class="btn btn-success"><i class="fa fa-save"></i> Simpan</button>
                <?php endforeach ?>
                <?php echo form_close(); ?>
              </div><!-- /.box-body -->
            </div><!-- /.box -->
          </section><!-- /.content -->
        </div>