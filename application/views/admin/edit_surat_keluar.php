<link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
          <section class="content-header">
            <h1>
              Edit
              <small>Surat Keluar</small>
            </h1>
            <ol class="breadcrumb">
              <li><i class="fa fa-dashboard"></i> Home</a></li>
              <li><a href="<?php echo base_url(); ?>admin/surat_keluar">Surat Keluar</a></li>
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
                <h3 class="box-title">Form Data Edit Surat Keluar</h3>
              </div>
              <div class="box-body">
                <!-- form start -->
                <?php echo form_open_multipart('admin/update_surat_keluar'); ?>
                <?php  
                foreach ($editdata as $data):
                ?>
               

                  <div class="form-group">
                    <label for="exampleInputEmail1"> No Agenda </label>
                      <input type="text" class="form-control" name="no_agenda" value="<?php echo $data->no_agenda ?>"/>
                  </div>

                  <div class="form-group">
                    <label for="exampleInputEmail1">Tanggal Surat</label>
                      <input type="text" class="form-control" name="tgl_surat" id="tgl_surat" data-date-format="yyyy-mm-dd" value="<?php echo $data->tgl_surat ?>"/>
                  </div>
            
                  
                   <div class="form-group">
                    <label for="exampleInputEmail1">Kode Arsip </label>
                      <input type="text" class="form-control" name="kode_arsip" value="<?php echo $data->kode_arsip ?>"/>
                  </div>
                  
                  <div class="form-group">
                    <label for="exampleInputEmail1">No Surat</label>
                      <input type="text" class="form-control" name="no_surat" value="<?php echo $data->no_surat ?>"/>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Tujuan</label>
                      <input type="text" class="form-control" name="tujuan" value="<?php echo $data->tujuan ?>"/>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Perihal</label>
                      <input type="text" class="form-control" name="perihal" value="<?php echo $data->perihal ?>" />
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
                    <label for="exampleInputEmail1">Keterangan</label>
                    <textarea name="keterangan" class="form-control" cols="30" rows="10"> <?php echo $data->keterangan ?> </textarea>
                  </div>

                   <div class="form-group">
                    <label for="name">Gambar</label>
                    <input type="file" name="gambar" />
                 </div>   




                  <input type="hidden" name="id" value="<?php echo $data->surat_id ?>">
                  <a href="<?php echo base_url(); ?>admin/surat_keluar" class="btn btn-warning"><i class="fa fa-arrow-left"></i> Batal</a>
                  <button type="submit" name="simpan" class="btn btn-success"><i class="fa fa-save"></i> Simpan</button>
                <?php endforeach ?>
                <?php echo form_close(); ?>

                
              </div><!-- /.box-body -->
            </div><!-- /.box -->
          </section><!-- /.content -->
        </div>