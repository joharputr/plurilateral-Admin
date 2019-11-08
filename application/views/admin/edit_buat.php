<link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
          <section class="content-header">
            <h1>
              Edit
              <small>Jenis Surat</small>
            </h1>
            <ol class="breadcrumb">
              <li><i class="fa fa-dashboard"></i> Home</a></li>
              <li><a href="<?php echo base_url(); ?>admin/jenis_surat">Jenis Surat</a></li>
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
                <h3 class="box-title">Form Data Edit Jenis Surat</h3>
              </div>
              <div class="box-body">
                <!-- form start -->
                <?php echo form_open('admin/update_buat'); ?>
                <?php  
                foreach ($editdata as $data):
                ?>
                  
                  <div class="form-group">
                    <label for="exampleInputEmail1">No Surat</label>
                      <input type="text" class="form-control" name="no_surat" value="<?php echo $data->no_surat ?>"/>
                  </div>
                   <div class="form-group">
                    <label for="exampleInputEmail1">Nama</label>
                      <input type="text" class="form-control" name="nama1" value="<?php echo $data->nama1 ?>" />
                  </div>
                   <div class="form-group">
                    <label for="exampleInputEmail1">NIP</label>
                      <input type="text" class="form-control" name="nip1" value="<?php echo $data->nip1 ?>" />
                  </div>
                   <div class="form-group">
                    <label for="exampleInputEmail1">Pangkat/Gol.ruang</label>
                      <input type="text" class="form-control" name="pangkat1" value="<?php echo $data->pangkat1 ?>" />
                  </div>
                   <div class="form-group">
                    <label for="exampleInputEmail1">Jabatan</label>
                      <input type="text" class="form-control" name="jabatan1" value="<?php echo $data->jabatan1 ?>" />
                  </div>
                   <div class="form-group">
                    <label for="exampleInputEmail1">Unit Organisasi</label>
                      <input type="text" class="form-control" name="unit" value="<?php echo $data->unit ?>" />
                  </div>
                   <div class="form-group">
                    <label for="exampleInputEmail1">Nama</label>
                      <input type="text" class="form-control" name="nama2" value="<?php echo $data->nama2 ?>" />
                  </div>
                   <div class="form-group">
                    <label for="exampleInputEmail1">NIP</label>
                      <input type="text" class="form-control" name="nip2" value="<?php echo $data->nip2 ?>" />
                  </div>
                   <div class="form-group">
                    <label for="exampleInputEmail1">Pangkat/Gol.ruang</label>
                      <input type="text" class="form-control" name="pangkat2" value="<?php echo $data->pangkat2 ?>" />
                  </div>
                   <div class="form-group">
                    <label for="exampleInputEmail1">Jabatan</label>
                      <input type="text" class="form-control" name="jabatan2" value="<?php echo $data->jabatan2 ?>" />
                  </div>
                   <div class="form-group">
                    <label for="exampleInputEmail1">Tugas</label>
                      <input type="text" class="form-control" name="tugas" value="<?php echo $data->tugas ?>" />
                  </div>
                   <div class="form-group">
                    <label for="exampleInputEmail1">Selama</label>
                      <input type="text" class="form-control" name="waktu" value="<?php echo $data->waktu ?>" />
                  </div>
                   <div class="form-group">
                    <label for="exampleInputEmail1">Lokasi</label>
                      <input type="text" class="form-control" name="lokasi" value="<?php echo $data->lokasi ?>" />
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Tanggal </label>
                      <input type="text" class="form-control" name="tanggal" id="tgl_terima" data-date-format="yyyy-mm-dd" value="<?php echo $data->tanggal ?>"/>
                  </div>

                  <div class="form-group">
                    <label for="exampleInputEmail1">Kepala / PLH</label>
                      <select name="plh" required="required" class="form-control">
                          
                          <?php if($data->plh == 'Kepala,'): ?>
                             <option value="Kepala,">Kepala</option>
                             <option value="PLH. Kepala,">PLH. Kepala</option>
                          <?php endif ?>
                          <?php if($data->plh == 'PLH. Kepala,'): ?>
                             <option value="PLH. Kepala,">PLH. Kepala</option>
                             <option value="Kepala,">Kepala</option>
                          <?php endif ?>

                          </select>
                             
                                                       
                  </div>

                  <div class="form-group">
                     <label for="exampleInputEmail1">Keterangan (Khusus Surat Keterangan)</label>
                    <textarea name="keterangan" class="form-control" cols="30" rows="10" value="<?php echo $data->keterangan ?>"></textarea>
                  </div>
                   
              


                  <input type="hidden" name="id" value="<?php echo $data->id ?>">
                  <a href="<?php echo base_url(); ?>admin/buat_surat" class="btn btn-warning"><i class="fa fa-arrow-left"></i> Batal</a>
                  <button type="submit" name="simpan" class="btn btn-success"><i class="fa fa-save"></i> Simpan</button>
                <?php endforeach ?>
                <?php echo form_close(); ?>
              </div><!-- /.box-body -->
            </div><!-- /.box -->
          </section><!-- /.content -->
        </div>