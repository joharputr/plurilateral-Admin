<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Pengarsipan Surat BMKG</title>
     <link rel="shortcut icon" type="image/x-icon" href="<?php echo base_url() ?>logo_BMKG.png "/>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.5 -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/bootstrap/css/bootstrap.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/plugins/font-awesome/css/font-awesome.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/plugins/ionicons/css/ionicons.min.css">
    <!-- DataTables -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/plugins/datatables/dataTables.bootstrap.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/dist/css/AdminLTE.min.css">
    <!-- AdminLTE Skins. Choose a skin from the css/skins
         folder instead of downloading all of them to reduce the load. -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/dist/css/skins/_all-skins.min.css">
    <!-- Date Picker -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/plugins/datepicker/datepicker3.css">
  
    

<!-- Content Wrapper. Contains page content -->  <script type="text/javascript" src="assets/highcart/highcart.js"></script>
<script type="text/javascript" src="http://code.jquery.com/jquery-1.11.3.min.js"></script>
   <script type="text/javascript" src="assets/highcart/highcart-3d.js"></script>
<script src="https://code.highcharts.com/highcharts.js"></script>
<script src="https://code.highcharts.com/modules/series-label.js"></script>
<script src="https://code.highcharts.com/modules/exporting.js"></script>
<script src="https://code.highcharts.com/modules/export-data.js"></script>

<div id="container"></div>

  
  
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body class="hold-transition skin-purple sidebar-mini">
    <div class="wrapper">

      <header class="main-header">
        <!-- Logo -->
        <a href="index" class="logo">
          <!-- mini logo for sidebar mini 50x50 pixels -->
          <span class="logo-mini"><b>ASB</b></span>
          <!-- logo for regular state and mobile devices -->
          <span class="logo-lg">Arsip Surat BMKG</span>
        </a>
        <!-- Header Navbar: style can be found in header.less -->
        <nav class="navbar navbar-static-top" role="navigation"> <!-- membuat garis atas -->
          <!-- Sidebar toggle button-->
          <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
            <span class="sr-only">Toggle navigation</span> <!-- menampilkan tiga garis -->
          </a>
          <div class="navbar-custom-menu">
            <ul class="nav navbar-nav">             
              <!-- User Account: style can be found in dropdown.less -->
              <li class="dropdown">
        			  <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Selamat Datang, <?php echo ucwords($this->session->userdata ('nama')); ?> <span class="caret"> </span></a>

          			  <ul class="dropdown-menu" role="menu">
          				<li><a href="<?php echo base_url(). 'login/logout'; ?>"> Logout </a></li>
        			  </ul>
      			  </li>              
            </ul>
          </div>
        </nav>
      </header>
      <!-- Left side column. contains the logo and sidebar -->
      <aside class="main-sidebar">
     <!--  //  sidebar: style can be found in sidebar.less -->
        <section class="sidebar">
          <!-- sidebar menu: : style can be found in sidebar.less -->
          <ul class="sidebar-menu">
            <li class="header">MAIN NAVIGATION</li>
            <li class="<?php if($page == 'home'){echo 'active';} ?>">
              <a href="<?php echo base_url(); ?>admin/index">
                <i class="fa fa-dashboard"></i> <span>Dashboard</span> 
              </a>
            </li>            
            <li class="<?php if($page == 'jenis_surat'){echo 'active';} ?>">
              <a href="<?php echo base_url(); ?>admin/surat_masuk">
                <i class="fa fa-inbox"></i> <span>Surat Masuk</span>
              </a>
            </li>           
            <li class="<?php if($page == 'surat_keluar'){echo 'active';} ?>">
              <a href="<?php echo base_url(); ?>admin/surat_keluar">
                <i class="fa fa-envelope"></i> <span>Surat Keluar</span> 
              </a>
            </li>
             <li class="<?php if($page == 'manage_user'){echo 'active';} ?>">
              <a href="<?php echo base_url(); ?>admin/manage_user">
                <i class="fa fa-user"></i> <span>User</span> 
              </a>
            </li>

             </li>
              <li class="<?php if($page == 'disposisi'){echo 'active';} ?>">
              <a href="<?php echo base_url(); ?>admin/disposisi">
                <i class="fa fa-image"></i> <span>Image</span> 
              </a>
            </li>
              <li class="<?php if($page == 'email'){echo 'active';} ?>">
              <a href="<?php echo base_url(); ?>admin/email">
                <i class="fa fa-paper-plane-o"></i> <span>Email</span> 
              </a>
            </li>

             <li class="<?php if($page == 'buat_surat'){echo 'active';} ?>">
              <a href="<?php echo base_url(); ?>admin/buat_surat">
                <i class="fa fa-pencil"></i> <span>Buat Surat</span> 
              </a>
            </li>
            
             <li class="<?php if($page == 'cart'){echo 'active';} ?>">
              <a href="<?php echo base_url(); ?>admin/cart">
                <i class="glyphicon glyphicon-stats"></i> <span>Cart</span> 
              </a>
            </li>
           
           
          </ul>
        </section>
        <!-- /.sidebar -->
      </aside>

      <?php $this->load->view('admin/'.$page); ?>
    </div><!-- ./wrapper -->


      <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
   
    
     <script src="<?php echo base_url(); ?>assets/plugins/jQuery/jQuery-2.1.4.min.js"></script>

    <script>
      $(function () {
        $("#example1").DataTable({          
          "language": {
            "url": "<?php echo base_url(); ?>assets/plugins/datatables/indonesian.json",
            
        }
        });
      });
      $(function() {
          $( "#tgl_surat" ).datepicker({ 
            autoclose: true 
          });
        });
      $(function() {
          $( "#tgl_terima" ).datepicker({ 
            autoclose: true 
          });
        });
    </script>
    <!-- Bootstrap 3.3.5 -->
    <script src="<?php echo base_url(); ?>assets/bootstrap/js/bootstrap.min.js"></script>
    <!-- DataTables -->
    <script src="<?php echo base_url(); ?>assets/plugins/datatables/jquery.dataTables.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/plugins/datatables/dataTables.bootstrap.min.js"></script>
    <!-- datepicker -->
    <script src="<?php echo base_url(); ?>assets/plugins/datepicker/bootstrap-datepicker.js"></script>
    <!-- AdminLTE App -->
    <script src="<?php echo base_url(); ?>assets/dist/js/app.min.js"></script>
    <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
    <script src="<?php echo base_url(); ?>assets/dist/js/pages/dashboard.js"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="<?php echo base_url(); ?>assets/dist/js/demo.js"></script>
  </body>
</html>


 