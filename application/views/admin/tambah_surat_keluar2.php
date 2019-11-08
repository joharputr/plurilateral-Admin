<link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
          <section class="content-header">
            <h1>
              Tambah
              <small>Surat Keluar</small>
            </h1>
            <ol class="breadcrumb">
              <li><i class="fa fa-dashboard"></i> Home</a></li>
              <li><a href="<?php echo base_url(); ?>admin/surat_keluar">Surat Keluar</a></li>
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
                <h3 class="box-title">Form Data Tambah Surat Keluar</h3>
              </div>
              <div class="box-body">
                <!-- form start -->
                <?php echo form_open('admin/insert_surat_keluar'); ?>
                  
                  <div class="form-group">
                    <label for="exampleInputEmail1">No Agenda</label>
                      <input type="text" class="form-control" name="no_agenda" placeholder="No Agenda"/>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Tanggal Surat</label>
                      <input type="text" class="form-control" name="tgl_surat" id="tgl_surat" data-date-format="yyyy-mm-dd" placeholder="Tanggal Surat"/>
                  </div>
             

                     <div class="form-group">
                    <label for="exampleInputEmail1">Kode Arsip  </label>
                      <input type="text" class="form-control" name="kode_arsip" placeholder="Kode Arsip "/>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">No Surat</label>
                      <input type="text" class="form-control" name="no_surat" placeholder="No Surat"/>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Tujuan</label>
                      <input type="text" class="form-control" name="tujuan" placeholder="Tujuan"/>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Perihal</label>
                      <input type="text" class="form-control" name="perihal" placeholder="Perihal"/>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Surat Asli/Copy</label>
                         <select name="asli_copy" required="required" class="form-control col-md-8">
                                <option value="surat asli">Surat Asli</option>
                                <option value="surat copy">Surat Copy</option>
                          </select>
                             
                  </div> <br> <br>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Keterangan</label>
                    <textarea name="keterangan" class="form-control" cols="30" rows="10"></textarea>
                  </div>
                  <a href="<?php echo base_url(); ?>admin/surat_keluar" class="btn btn-warning"><i class="fa fa-arrow-left"></i> Batal</a>
                  <button type="submit" name="simpan" class="btn btn-success"><i class="fa fa-save"></i> Simpan</button>
                <?php echo form_close(); ?>
                
              </div><!-- /.box-body -->
            </div><!-- /.box -->
          </section><!-- /.content -->
        </div>