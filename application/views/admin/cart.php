
    
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
           GRAFIK
            <small>Control panel</small>

          </h1>
          <table style="margin: auto; font-weight: bold;">
         <tr>
            <td style="padding-right: 10px; " >
             <a style="" id="lnkHome" href="#" onclick="return ShowContent('divHome');" >SURAT KELUAR</a> 
            </td>
            <td style="padding-right: 10px;">
              <a id="lnkAbout" href="#" onclick="return ShowContent('divAbout');" >SURAT MASUK</a>
            </td>
          
          </tr>
          </table>
          <ol class="breadcrumb">
            <li><a href="index"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">GRAFIK</li>
          </ol>
        </section>
       

        <!-- Main content -->
        <section class="content">

          <div class="row">           
            <div class="col-xs-12">
              <div class="box">
                <div class="box-header">
                <!--  <div class="container"> -->
                    <h1>GRAFIK</h1>

     <script type="text/javascript">
         function ShowContent(content) {
             document.getElementById("divHome").style.display = 'none'
             document.getElementById("divAbout").style.display = 'none';
          
             document.getElementById(content).style.display = 'block';
        }
    </script>

  
        <div id="divAbout" style="display:none"></div>
      
          <div id="divHome" style="display:none"></div>
   


<?php
foreach ($cart as $key):
  $jumlah[]=$key->jumlah;
  $tanggal=$key->tanggal;
  $date = new DateTime($tanggal);
  $result = $date->format('d F Y');
  $result1[] = "'".$result."'";



endforeach;
?>


<?php
foreach ($cart3 as $key2):
  $jumlah2[]=$key2->jumlah2;
  $tanggal2=$key2->tanggal2;
  $date2 = new DateTime($tanggal2);
  $result2 = $date2->format('d F Y');
  $result3[] = "'".$result2."'";



endforeach;
?>

<script type="text/javascript">

Highcharts.chart('divHome', {
  chart: {
    type: 'line'
  },
  title: {
    text: 'Jumlah Surat keluar '
  },
  subtitle: {
    text: 'BMKG yogyakarta'
  },
  xAxis: {
    categories: [<?php echo join($result1, ',');?>]
  },
  yAxis: {
    title: {
      text: 'jumlah'
    }
  },
  plotOptions: {
    line: {
      dataLabels: {
        enabled: true
      },
      enableMouseTracking: false
    }
  },
  series: [ {
    name: 'surat keluar',
    data: [<?php echo join($jumlah, ",");?>]
  }]
});
</script>
 
<script type="text/javascript">

Highcharts.chart('divAbout', {
  chart: {
    type: 'line'
  },
  title: {
    text: 'Jumlah Surat Masuk '
  },
  subtitle: {
    text: 'BMKG yogyakarta'
  },
  xAxis: {

    categories: [<?php echo join($result3, ',');?>]
  },
  yAxis: {
    title: {
      text: 'jumlah'
    }
  },
  plotOptions: {
    line: {
      dataLabels: {
        enabled: true
      },
      enableMouseTracking: false
    }
  },
  series: [ {
    name: 'surat Masuk',
    data: [<?php echo join($jumlah2, ",");?>]
  }]
});
</script>
 

                   </div>

               </div>
              </div><!-- /.box-header -->
             <div class="box-body table-responsive no-padding">
           </div>
          </div>
        </div>
      </div>
    </section><!-- /.content -->
  </div><!-- /.content-wrapper -->

</script>
                   </div>
               </div>
              </div><!-- /.box-header -->
             <div class="box-body table-responsive no-padding">
           </div>
          </div>
        </div>
      </div>
    </section><!-- /.content -->
  </div><!-- /.content-wrapper -->
