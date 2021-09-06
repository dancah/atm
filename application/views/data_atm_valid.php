<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <?php echo $this->load->view('common/title','',TRUE);?>

    <!-- Bootstrap -->
    <link href="<?php echo base_url();?>/assets/vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="<?php echo base_url();?>/assets/vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="<?php echo base_url();?>/assets/vendors/nprogress/nprogress.css" rel="stylesheet">
    <!-- iCheck -->
    <link href="<?php echo base_url();?>/assets/vendors/iCheck/skins/flat/green.css" rel="stylesheet">
    <!-- Datatables -->
    <link href="<?php echo base_url();?>/assets/vendors/datatables.net-bs/css/dataTables.bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo base_url();?>/assets/vendors/datatables.net-buttons-bs/css/buttons.bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo base_url();?>/assets/vendors/datatables.net-fixedheader-bs/css/fixedHeader.bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo base_url();?>/assets/vendors/datatables.net-responsive-bs/css/responsive.bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo base_url();?>/assets/vendors/datatables.net-scroller-bs/css/scroller.bootstrap.min.css" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="<?php echo base_url();?>/assets/build/css/custom.min.css" rel="stylesheet">

  <?php echo $this->load->view('common/logo','',TRUE);?>

  <body class="nav-md">
    <div class="container body">
      <div class="main_container">
        <div class="col-md-3 left_col">
          <div class="left_col scroll-view">
           
          <?php echo $this->load->view('common/menu','',TRUE);?>

<!--=============================================== TOP NAVIGATION ===============================================-->
        <div class="top_nav">
          <div class="nav_menu">
            <nav>
              <div class="nav toggle">
                <a id="menu_toggle"><i class="fa fa-bars"></i></a>
              </div>
            </nav>
          </div>
        </div>
<!--=================================== END TOP NAVIGATION ===================================-->

<!--========================================== VIEW ==========================================-->


 <div class="right_col" role="main">
       
              

<div class="form-group">
      <ul class=" navbar-right" >
      <a href="<?php echo base_url();?>tambah_atm" ><button class="btn btn-success btn-lg" type="button">  
      <i class="fa fa-plus"></i> Tambah Lokasi atm </button></a>
         
                        </ul> 
                      </div>                      
<br>

            <div class="clearfix"></div>
             <?php echo $this->session->flashdata('pesan');?>

        

            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Daftar Seluruh Lokasi atm<small></small></h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    
                    <table id="datatable" class="table table-striped table-bordered">
                      <thead>
                        <tr>
                         <th>NO</th>
						 <th>Status Data </th>
                          <th>Nama </th>
                          <th>Keterangan</th>
                          <th>Desa</th>
                          <th>Kecamatan</th>
                          <th>Kabupaten</th>
                         
						  <th>Tanggal Kejadian</th>
                          <!--th>Luas Tanah</th>
                          <th>Luas Bangunan</th>
                          <th>Estimasi Jamaah</th-->
                          <th>Action</th>
                          
                     
                        </tr>
                      </thead>
                      <tbody>
                <?php
                      $j=0;
                          foreach($data_atm_valid as $data){
                ?>
                        <tr>
                        <td><?php echo ++$j?></td>
						<td><?php echo $data->status; ?></td>
                        <td><?php echo $data->atm_name; ?></td>
                        <td><?php echo $data->keterangan; ?></td>
                        <td><?php echo $data->desa_name; ?></td>
                        <td><?php echo $data->kec_nama; ?></td>
                        <td><?php echo $data->kab_name; ?></td>
						
						<td><?php echo $data->created_at; ?></td>
                        <!--td><?php echo $data->atm_lt; ?></td>
                        <td><?php echo $data->atm_lb; ?></td>
                        <td><?php echo $data->atm_jamaah; ?></td-->
                          <td>
                           <a href="<?php echo base_url()?>edit_atm?id=<?php echo $data->atm_id?>"  ><button type="button" class="btn ink-reaction btn-info">Edit</button></a>
                        
                  <?php
                  echo"<a href='". base_url()."publik/proses_hapus_data_valid/".$data->atm_id."' onclick=\"return confirm('Apakah Anda Yakin Menghapus ?') \" title='Hapus'><button type='button' class='btn btn-danger'>Hapus</button></a>
                    ";
                  ?>   
				  
				  
				  
                          </td>
                        </tr>
                 <?php } ?>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>

 
               <br>
    

<!--=========================================== END VIEW =====================================-->              

    
              </div>
            </div>
          </div>
        </div>
        <!-- /page content -->

        <!-- footer content -->

        <?php echo $this->load->view('common/footer','',TRUE);?>
        
        <!-- /footer content -->
      </div>
    </div>

     <!-- jQuery -->
    <script src="<?php echo base_url();?>/assets/vendors/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap -->
    <script src="<?php echo base_url();?>/assets/vendors/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- FastClick -->
    <script src="<?php echo base_url();?>/assets/vendors/fastclick/lib/fastclick.js"></script>
    <!-- NProgress -->
    <script src="<?php echo base_url();?>/assets/vendors/nprogress/nprogress.js"></script>
    <!-- iCheck -->
    <script src="<?php echo base_url();?>/assets/vendors/iCheck/icheck.min.js"></script>
    <!-- Datatables -->
    <script src="<?php echo base_url();?>/assets/vendors/datatables.net/js/jquery.dataTables.min.js"></script>
    <script src="<?php echo base_url();?>/assets/vendors/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
    <script src="<?php echo base_url();?>/assets/vendors/datatables.net-buttons/js/dataTables.buttons.min.js"></script>
    <script src="<?php echo base_url();?>/assets/vendors/datatables.net-buttons-bs/js/buttons.bootstrap.min.js"></script>
    <script src="<?php echo base_url();?>/assets/vendors/datatables.net-buttons/js/buttons.flash.min.js"></script>
    <script src="<?php echo base_url();?>/assets/vendors/datatables.net-buttons/js/buttons.html5.min.js"></script>
    <script src="<?php echo base_url();?>/assets/vendors/datatables.net-buttons/js/buttons.print.min.js"></script>
    <script src="<?php echo base_url();?>/assets/vendors/datatables.net-fixedheader/js/dataTables.fixedHeader.min.js"></script>
    <script src="<?php echo base_url();?>/assets/vendors/datatables.net-keytable/js/dataTables.keyTable.min.js"></script>
    <script src="<?php echo base_url();?>/assets/vendors/datatables.net-responsive/js/dataTables.responsive.min.js"></script>
    <script src="<?php echo base_url();?>/assets/vendors/datatables.net-responsive-bs/js/responsive.bootstrap.js"></script>
    <script src="<?php echo base_url();?>/assets/vendors/datatables.net-scroller/js/dataTables.scroller.min.js"></script>
    <script src="<?php echo base_url();?>/assets/vendors/jszip/dist/jszip.min.js"></script>
    <script src="<?php echo base_url();?>/assets/vendors/pdfmake/build/pdfmake.min.js"></script>
    <script src="<?php echo base_url();?>/assets/vendors/pdfmake/build/vfs_fonts.js"></script>

    <!-- Custom Theme Scripts -->
    <script src="<?php echo base_url();?>/assets/build/js/custom.min.js"></script>
  
  </body>
</html>
