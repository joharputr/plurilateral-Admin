
<!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
            Upload Gambar
            <small>Control panel</small>
          </h1>
          <ol class="breadcrumb">
            <li><a href="index"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">Disposisi</li>
          </ol>
        </section>

        <!-- Main content -->
        <section class="content">

          <div class="row">           
            <div class="col-xs-12">
              <div class="box">
                <div class="box-header">
                  <h3 class="box-title">
                  <a href="<?php echo base_url(); ?>admin/add" class="btn btn-sm btn-primary btn-flat" data-target = "#example1"><i class="fa fa-plus"></i> Tambah</a>

                     </h3>
                  
                </div><!-- /.box-header -->
                <div class="box-body table-responsive no-padding">
                

                  <table id="example1" class="table table-bordered table-hover dataTable" >
                    <thead>
                      <tr>
                       <th> No</th>
                        <th> Nama</th>
                        <th> Tanggal</th>
                        <th> Gambar</th>
                        <th> Aksi</th>
                    </thead>
                      <tbody>
                          <?php  
                          $no = 1;
                          foreach ($gambar as $lihat):
                          ?>
                        <tr>
                          <td><?php echo $no++ ?></td>
                            <td> <div style="width: 100px;"><?php echo $lihat->nama?></td>
                            <td> <div style="width: 100px;"><?php echo tgl_indo($lihat->tgl_surat)?></td>
                      
                          <td>  <img src="<?php echo base_url('upload/files/'.$lihat->gambar) ?>" width="64" ></td> </div>

                        <td  align="center">
                        <div class="btn-group" role="group">
                           <a href="<?php echo base_url(); ?>admin/delete/<?php echo $lihat->id_gambar ?>" onclick="javascript: return confirm('Anda yakin akan menghapus data ini ?')" class="btn btn-sm btn-danger btn-flat"><i class="fa fa-trash"></i> Hapus</a>
                           <a href="<?php echo base_url(); ?>admin/edit/<?php echo $lihat->id_gambar ?>" class="btn btn-sm btn-success btn-flat"><i class="fa fa-edit"></i> Edit</a>
                        </td>                     
                      </tr>
                      <?php endforeach ?>
                    </tbody>
                  </table>
                </div><!-- /.box-body -->
                </div>
             </div>
          </div>
        </section><!-- /.content -->
      </div><!-- /.content-wrapper -->
  </div>