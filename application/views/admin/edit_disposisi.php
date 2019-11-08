<link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
          <section class="content-header">
            <h1>
              Edit
              <small>Disposisi Gambar</small>
            </h1>
            <ol class="breadcrumb">
              <li><i class="fa fa-dashboard"></i> Home</a></li>
              <li><a href="<?php echo base_url(); ?>admin/jenis_surat">Disposisi Surat</a></li>
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
                <h3 class="box-title">Form Data Edit Disposisi</h3>
              </div>
              <div class="box-body">


    <div id="content-wrapper">

      <div class="container-fluid">

     

        <?php if ($this->session->flashdata('success')): ?>
        <div class="alert alert-success" role="alert">
          <?php echo $this->session->flashdata('success'); ?>
        </div>
        <?php endif; ?>

        <!-- Card  -->
        <div class="card mb-3">
          <div class="card-header">

          </div>
          <div class="card-body">

            <form action="<?php base_url(" admin/edit") ?>" method="post"
              enctype="multipart/form-data" >

              <input type="hidden" name="id" value="<?php echo $gambar->id_gambar?>" />

                 <div class="form-group">
                <label for="name">Nama</label>
                <input class="form-control <?php echo form_error('name') ? 'is-invalid':'' ?>"
                 type="text" name="nama" placeholder="nama" value="<?php echo $gambar->nama ?>" />
                <div class="invalid-feedback">
                  <?php echo form_error('name') ?>
                </div>
              </div>

               <div class="form-group">
                   <label for="exampleInputEmail1">Tanggal Surat</label>
                    <input type="text" class="form-control" name="tgl_surat" id="tgl_surat" data-date-format="yyyy-mm-dd" value="<?php echo $gambar->tgl_surat ?>"/>
               </div>

              <div class="form-group">
                <label for="name">Gambar</label>
                <input class="form-control-file <?php echo form_error('gambar') ? 'is-invalid':'' ?>"
                 type="file" name="gambar" />
                <input type="hidden" name="old_image" value="<?php echo $gambar->gambar ?>" />
                <div class="invalid-feedback">
                  <?php echo form_error('gambar') ?>
                </div>
              </div>
              
              <a href="<?php echo base_url(); ?>admin/disposisi" class="btn btn-warning"><i class="fa fa-arrow-left"></i> Batal</a>
              <input class="btn btn-success" type="submit" name="btn" value="Save" />
          </form>

          </div>

          <div class="card-footer small text-muted">
            * required fields
          </div>
    
      </div>
    </div>
      <!-- /.content-wrapper -->
    </div>
    <!-- /#wrapper -->
            
  </section><!-- /.content -->
</div>