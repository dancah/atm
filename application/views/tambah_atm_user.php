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
            
          <?php echo $this->load->view('common/menu_user','',TRUE);?>

<!--===================================== TOP NAVIGATION =============================================-->
       <div class="right_col" role="main">
  <div class="">
    <div class="row">
      <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="x_panel">
          <div class="x_title">
            <h2><i class="glyphicon glyphicon-plus-sign"></i> Tambah Data Lokasi atm</h2>
            <div class="clearfix"></div>
          </div>
<!--==================================== END TOP NAVIGATION =====================================-->

       <?php echo $this->session->flashdata('pesan');?>

    <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Form Data Lokasi atm</h2>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">

                  <?php echo form_open_multipart('publik/proses_tambah_atm_user'); ?>

                    <div  class="form-horizontal form-label-left">
                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="atm_name">Nama  <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" id="atm_name" name="atm_name"  required="required" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>

					  <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="keterangan"> Keterangan <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" id="keterangan" name="keterangan"  required="" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>
					  
                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="atm_tahun">Tanggal Kejadian
                         <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="date" id="atm_tahun" name="atm_tahun"  required="required" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>
                      

                      

    <div class="form-group">
     <label class="control-label col-md-3 col-sm-3 col-xs-12">Desa</label>
        <div class="col-md-6 col-sm-6 col-xs-12">
        <select class="form-control" id="state" name="desa_name">
        <center><option value="">Pilih Desa</option></center>
        <?php 
            foreach ($data_desa as $data) {
        ?>
            <option value="<?php echo $data->desa_id?>"><?php echo $data->desa_name?> 
            </option>
        <?php
              }
        ?>

        </select>
        </div>
    </div>

    <div class="form-group">
     <label class="control-label col-md-3 col-sm-3 col-xs-12">Kecamatan</label>
        <div class="col-md-6 col-sm-6 col-xs-12">
        <select class="form-control" id="state" name="kec_nama">
        <center><option value="">Pilih Kecamatan</option></center>
        <?php 
            foreach ($data_kecamatan as $data) {
        ?>
            <option value="<?php echo $data->kec_id?>"><?php echo $data->kec_nama?> </option>
        <?php
              }
        ?>

        </select>
        </div>
    </div> 

    <div class="form-group">
     <label class="control-label col-md-3 col-sm-3 col-xs-12">Kabupaten</label>
        <div class="col-md-6 col-sm-6 col-xs-12">
        <select class="form-control" id="state" name="kab_name">
        <center><option value="">Pilih Kabupaten</option></center>
        <?php 
            foreach ($data_kabupaten as $data) {
        ?>
            <option value="<?php echo $data->kab_id?>"><?php echo $data->kab_name?> </option>
        <?php
              }
        ?>

        </select>
        </div>
    </div>

    <div class="form-group">
     <label class="control-label col-md-3 col-sm-3 col-xs-12">Provinsi</label>
        <div class="col-md-6 col-sm-6 col-xs-12">
        <select class="form-control" id="state" name="prov_name">
        <center><option value="">Pilih Provinsi</option></center>
        <?php 
            foreach ($data_provinsi as $data) {
        ?>
            <option value="<?php echo $data->prov_id?>"><?php echo $data->prov_name?> </option>
        <?php
              }
        ?>

        </select>
        </div>
    </div>
                     <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="no_hp">Nomor HP
                         <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" id="no_hp" name="no_hp"  required="required" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>

                     

                    <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="email">Email
                         <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" id="email" name="email"  required="required" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>

                    <!--div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="atm_lb">Luas Bangunan
                         <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" id="atm_lb" name="atm_lb"  required="required" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div-->

                    
					  
					  <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="firstname">Foto<span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="file" id="fileToUpload" name="atm_foto"  required="" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>

                       <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="atm_lat">Latitude <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" id="lat" name="atm_lat"  required="required" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>

                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="atm_long">Longtitude <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" id="lng" name="atm_long"  required="required" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>


                   <center> <div id="googleMap" style="width:80%;height:380px;"></div> </center>
                      <script src="http://maps.googleapis.com/maps/api/js"></script>
  

<script>
// variabel global marker
var marker;

  
function taruhMarker(peta, posisiTitik){
    
    if( marker ){
      // pindahkan marker
      marker.setPosition(posisiTitik);
    } else {
      // buat marker baru
      marker = new google.maps.Marker({
        position: posisiTitik,
        map: peta
      });
    }
  
     // isi nilai koordinat ke form
    document.getElementById("lat").value = posisiTitik.lat();
    document.getElementById("lng").value = posisiTitik.lng();
    
}

  
function initialize() {
  var propertiPeta = {
    center:new google.maps.LatLng(3.995520,97.341334),
    zoom:15,
    mapTypeId:google.maps.MapTypeId.ROADMAP
  };


  
  var peta = new google.maps.Map(document.getElementById("googleMap"), propertiPeta);
  
  // even listner ketika peta diklik
  google.maps.event.addListener(peta, 'click', function(event) {
    taruhMarker(this, event.latLng);
  });

}


// event jendela di-load  
google.maps.event.addDomListener(window, 'load', initialize);
  

</script>
<script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAqiJC0pOla_sS6ZeTi2b61vBXaah-t5YU&callback=initMap"
                        type="text/javascript"></script>
                    <div class="ln_solid"></div>
                      <div class="form-group">
                        <div class="col-md-6 col-md-offset-3">
						
						 <center> <a href="<?php echo site_url('login/keluar');?>"><i class="btn btn-primary"> Cancel </i><span class=""></span></a>
              
						
                          
                          <button  type="submit" class="btn btn-success">Save</button> </center>
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