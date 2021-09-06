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
    <!-- bootstrap-wysiwyg -->
    <link href="<?php echo base_url();?>/assets/vendors/google-code-prettify/bin/prettify.min.css" rel="stylesheet">
    <!-- Select2 -->
    <link href="<?php echo base_url();?>/assets/vendors/select2/dist/css/select2.min.css" rel="stylesheet">
    <!-- Switchery -->
    <link href="<?php echo base_url();?>/assets/vendors/switchery/dist/switchery.min.css" rel="stylesheet">
    <!-- starrr -->
    <link href="<?php echo base_url();?>/assets/vendors/starrr/dist/starrr.css" rel="stylesheet">
    <!-- bootstrap-daterangepicker -->
    <link href="<?php echo base_url();?>/assets/vendors/bootstrap-daterangepicker/daterangepicker.css" rel="stylesheet">
    <script type="text/javascript" src="<?php echo base_url();?>/assets/ckeditor/ckeditor.js"></script>
    <script src="//cdn.ckeditor.com/4.10.0/standard/ckeditor.js"></script>

      <script src="<?php base_url()?>assets/ckeditor/ckeditor.js"></script>
  <script src="<?php base_url()?>assets/ckeditor/js/sample.js"></script>
    <!-- Custom Theme Style -->
    <link href="<?php echo base_url();?>/assets/build/css/custom.min.css" rel="stylesheet">
  </head>

   <?php echo $this->load->view('common/logo','',TRUE);?>

  <body class="nav-md">
    <div class="container body">
      <div class="main_container">
        <div class="col-md-3 left_col">
          <div class="left_col scroll-view">
            
          <?php echo $this->load->view('common/menu','',TRUE);?>

<!--===================================== TOP NAVIGATION =============================================-->
       <div class="right_col" role="main">
  <div class="">
    <div class="row">
      <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="x_panel">
          <div class="x_title">
            <h2><i class="glyphicon glyphicon-plus-sign"></i> Tambah Artikel</h2>
            <div class="clearfix"></div>
          </div>
             
<!--==================================== END TOP NAVIGATION =====================================-->
 <div class="col-md-12 col-sm-12 col-xs-12">
              <div class="x_panel">
                
                <div class="x_content">
                  <div id="alerts"></div>
                  <div class="btn-toolbar editor" data-role="editor-toolbar" data-target="#editor-one">
                   
                   <?php echo $this->session->flashdata('pesan');?>
              

            <?php
              $id=$_GET['id'];
              echo form_open_multipart("Redirect_controller/proses_edit_artikel?id=$id");    
            ?>
                         <?php
                      foreach($edit_artikel as $edit){
                      ?>  

                <textarea class="ckeditor" id="ckedtor" name="artikel">
                  <?php echo $edit->artikel?>";
                </textarea>

                  <div class="ln_solid"></div>

                  <div class="form-group">
                    <label class="control-label col-md-3 col-sm-3 col-xs-12">Judul </label>
                         <input type="text" class="form-control" id="judul" name="judul" value="<?php echo $edit->judul?>" required>
                   
                  </div>

                  <div class="form-group">
                    <label for="firstname">Foto Utama Artikel </label>
                    <img src="<?php echo base_url()."uploads/".$edit->foto?>" width="30%"><br><br>
                          <input type="file" name="gambar" id="fileToUpload" required>
                  </div>
                    
                    <div class="form-group">

                </div>
              </div>
            </div>
 <?php } ?>
        <div class="col-sm-12 text-center">
            <button  type="submit" class="btn btn-success">Save</button>
        </div>
 <?php form_close(); ?>
    

 <!--===================================== END ===============================================-->


       
        <!-- /page content -->
<br>
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
    <script src="/vendors/fastclick/lib/fastclick.js"></script>
    <!-- NProgress -->
    <script src="<?php echo base_url();?>/assets/vendors/nprogress/nprogress.js"></script>
    <!-- bootstrap-progressbar -->
    <script src="<?php echo base_url();?>/assets/vendors/bootstrap-progressbar/bootstrap-progressbar.min.js"></script>
    <!-- iCheck -->
    <script src="<?php echo base_url();?>/assets/vendors/iCheck/icheck.min.js"></script>
    <!-- bootstrap-daterangepicker -->
    <script src="<?php echo base_url();?>/assets/vendors/moment/min/moment.min.js"></script>
    <script src="<?php echo base_url();?>/assets/vendors/bootstrap-daterangepicker/daterangepicker.js"></script>
    <!-- bootstrap-wysiwyg -->
    <script src="<?php echo base_url();?>/assets/vendors/bootstrap-wysiwyg/js/bootstrap-wysiwyg.min.js"></script>
    <script src="<?php echo base_url();?>/assets/vendors/jquery.hotkeys/jquery.hotkeys.js"></script>
    <script src="<?php echo base_url();?>/assets/vendors/google-code-prettify/src/prettify.js"></script>
    <!-- jQuery Tags Input -->
    <script src="<?php echo base_url();?>/assets/vendors/jquery.tagsinput/src/jquery.tagsinput.js"></script>
    <!-- Switchery -->
    <script src="<?php echo base_url();?>/assets/vendors/switchery/dist/switchery.min.js"></script>
    <!-- Select2 -->
    <script src="<?php echo base_url();?>/assets/vendors/select2/dist/js/select2.full.min.js"></script>
    <!-- Parsley -->
    <script src="<?php echo base_url();?>/assets/vendors/parsleyjs/dist/parsley.min.js"></script>
    <!-- Autosize -->
    <script src="<?php echo base_url();?>/assets/vendors/autosize/dist/autosize.min.js"></script>
    <!-- jQuery autocomplete -->
    <script src="<?php echo base_url();?>/assets/vendors/devbridge-autocomplete/dist/jquery.autocomplete.min.js"></script>
    <!-- starrr -->
    <script src="<?php echo base_url();?>/assets/vendors/starrr/dist/starrr.js"></script>
    <!-- Custom Theme Scripts -->
    <script src="<?php echo base_url();?>/assets/build/js/custom.min.js"></script>
    
  </body>
</html>