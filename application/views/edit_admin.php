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


    <!-- Custom Theme Style -->
    <link href="<?php echo base_url();?>/assets/build/css/custom.min.css" rel="stylesheet">

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
            <h2><i class="glyphicon glyphicon-plus-sign"></i> Edit Admin</h2>
            <div class="clearfix"></div>
          </div>
<!--==================================== END TOP NAVIGATION =====================================-->

       <?php echo $this->session->flashdata('pesan');?>

    <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Form Data Admin</h2>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                   <?php
                    foreach ($edit_admin as $edit) {
                      ?>
                      
            <?php echo $this->session->flashdata('pesan')?>
            <?php
                      $id=$_GET['id'];
					echo form_open_multipart("Redirect_controller/proses_edit_admin?id=$id"); 
                   
              ?>

					<div  class="form-horizontal form-label-left">
                      <div class=" hidden ">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="user_id">user_Id<span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="hidden" id="user_id" name="user_id" value="<?php echo $edit->user_id?> class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>
                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="username">Username <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" id="username" name="username" value="<?php echo $edit->username?>"  required="required" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>

                       

                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="password"> password <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" id="password" name="password" value="<?php echo $edit->password?>"  required="required" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>
					  
					  <!--div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="level"> level <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" id="level" name="level" value="<?php echo $edit->level?>"  required="required" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div-->
					  
					  <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="nama"> nama <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" id="nama" name="nama" value="<?php echo $edit->nama?>"  required="required" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>
					  
					  <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="no_hp"> No hp <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" id="no_hp" name="no_hp" value="<?php echo $edit->no_hp?>"  required="required" class="form-control col-md-7 col-xs-12">
                        </div>
						
                      </div>
					  <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="email"> Email <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" id="email" name="email" value="<?php echo $edit->email?>"  required="required" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>

              
                     
                      



                                            <?php } ?>
                    
                      <div class="form-group">
                        <div class="col-md-6 col-md-offset-3">
                          <button  type="submit" class="btn btn-success">Save</button>'
						   <a type="back" class="btn btn-primary" href="<?php echo base_url();?>Redirect_controller/data_admin">Cancel</a>                      
                        </div>
                      </div>

        

                  </div>
                </div>
              </div>
       <?php form_close(); ?>

 <!--===================================== END ===============================================-->


       
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
    <!-- jQuery Smart Wizard -->
    <script src="<?php echo base_url();?>/assets/vendors/jQuery-Smart-Wizard/js/jquery.smartWizard.js"></script>
    <!-- Custom Theme Scripts -->
    <script src="<?php echo base_url();?>/assets/build/js/custom.min.js"></script>

    
  </body>
</html>