<!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
            Dashboard
            <small>Control panel</small>
          </h1>
          <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">Dashboard</li>
          </ol>
        </section>

        <!-- Main content -->
        <section class="content" style="background-image: url(../logo_BMKG.png);  background-repeat: no-repeat; background-position: center;background-attachment: fixed; padding-bottom: 500px;">
      
            
            <div class="col-lg-3 col-xs-6">
              <!-- small box -->
              <div class="small-box bg-red">
                <div class="inner">
                  <h3><?php echo $surat_masuk; ?></h3>
                  <p>Surat Masuk</p>
                </div>
                <div class="icon">
                  <i class="fa fa-inbox"></i>
                </div>
                <a href="<?php echo base_url(); ?>admin/surat_masuk" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
              </div>
            </div><!-- ./col -->

            
            <div class="col-lg-3 col-xs-6">
              <!-- small box -->
              <div class="small-box bg-maroon">
                <div class="inner">
                  <h3><?php echo $surat_keluar ?></h3>
                  <p>Surat Keluar</p>
                </div>
                <div class="icon">
                  <i class="fa fa-envelope"></i>
                </div>
                <a href="<?php echo base_url(); ?>admin/surat_keluar" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
              </div>
            </div><!-- ./col -->
       

          <div class="col-lg-3 col-xs-6">
              <!-- small box -->
              <div class="small-box bg-green"  >
                <div class="inner">
                  <h3><?php echo $manage_user; ?></h3>
                  <p>User</p>
                </div>
                <div class="icon">
                  <i class="fa fa-user"></i>
                </div>
                <a href="<?php echo base_url(); ?>admin/manage_user" class="small-box-footer"  >More info <i class="fa fa-arrow-circle-right"></i></a>
              </div>
            </div><!-- ./col -->

         
                 <div class="col-lg-3 col-xs-6">
              <!-- small box -->
              <div class="small-box bg-blue">
                <div class="inner">
                  <h3><?php echo $disposisi; ?></h3>
                  <p> Image</p>
                </div>
                <div class="icon">
                  <i class="fa fa-image"></i>
                </div>
                <a href="<?php echo base_url(); ?>admin/disposisi" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
              </div>

            </div><!-- ./col -->
              <div class="col-lg-3 col-xs-6">
              <!-- small box -->
                <div class="small-box bg-aqua" style="height: 130px; margin-right: -10px;">
                  <div class="inner">
                  <p> Email</p>
                </div>
                <div class="icon">
                  <i class="fa fa-paper-plane-o"></i>
                </div>
                <a href="<?php echo base_url(); ?>admin/email" class="small-box-footer" style="margin-top: 52px;">More info <i class="fa fa-arrow-circle-right" ></i></a>
              </div>

                </div><!-- ./col -->
             <div class="col-lg-3 col-xs-6">
              <!-- small box -->
                <div class="small-box bg-purple" style="height: 130px; margin-right: -10px;">
                  <div class="inner">
                  <p> Buat Surat </p>
                </div>
                <div class="icon">
                  <i class="fa fa-pencil"></i>
                </div>
                <a href="<?php echo base_url(); ?>admin/buat_surat" class="small-box-footer" style="margin-top: 52px;">More info <i class="fa fa-arrow-circle-right" ></i></a>
              </div>



            </div><!-- ./col -->
             <div class="col-lg-3 col-xs-6">
              <!-- small box -->
                <div class="small-box bg-purple" style="height: 130px; margin-right: -10px;">
                  <div class="inner">
                  <p> Cart </p>
                </div>
                <div class="icon">
                  <i class="fa fa-pencil"></i>
                </div>
                <a href="<?php echo base_url(); ?>admin/cart" class="small-box-footer" style="margin-top: 52px;">More info <i class="fa fa-arrow-circle-right" ></i></a>
              </div>

   </div><!-- ./col -->

            </div><!-- ./col -->
        </section><!-- /.content -->
      </div><!-- /.content-wrapper -->
