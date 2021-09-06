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
                   <?php
                    foreach ($edit_atm as $edit) {
                      
                   ?> 
                  <?php echo $this->session->flashdata('pesan')?>
                  <?php
                      $id=$_GET['id'];
                      echo form_open_multipart("Redirect_controller/proses_edit_atm?id=$id"); 
                  ?>

                    <div  class="form-horizontal form-label-left">
                      <div class=" hidden ">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="atm_name">atm_Id<span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="hidden" id="atm_id" name="atm_id" value="<?php echo $edit->atm_id?>"  required="required" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>
                      <!--div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="atm_name">Nama <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" id="atm_name" name="atm_name" value="<?php echo $edit->atm_name?>"  required="required" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div-->

                       <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="mesjid_foto">Foto<span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <img src="<?php echo base_url()?>uploads/<?php echo $edit->atm_foto;?> " class="img-responsive" style="max-width: 200px;">
                          
						  <span class="help-block"> <input type="file" name="atm_foto" value="<?php echo $edit->atm_foto; ?>"></span></center>
                        </div>
                      </div>
							<div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="nama_atm">Nama ATM
                         
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" id="nama_atm" name="nama_atm" value="<?php echo $edit->nama_atm?>" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>
					  <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="cdm">Cash Deposit Machine
                         
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
						<select name="cdm" class="form-control" id="cdm">
                        <option value='Yes' <?php if ($edit->cdm=='Yes'){echo"SELECTED";}?>>Yes</option>
    					<option value='No' <?php if ($edit->cdm=='No'){echo"SELECTED";}?>>No</option>
							</select></div>
                      </div>
					  
					  
					 <div class="form-group">
      <label class="control-label col-md-3 col-sm-3 col-xs-12">Kecamatan</label>
        <div class="col-md-6 col-sm-6 col-xs-12">
        <select class="form-control" id="kec" required name="kec_nama">
       
        <option value="<?php echo $edit->kec_id?>"><?php echo $edit->kec_nama?></option>
            <?php
              foreach($data_kecamatan as $kec){
                      if($kec->kec_id!=$edit->kec_id){
            ?>
        <option value="<?php echo $kec->kec_id?>"><?php echo $kec->kec_nama?></option>  
            <?php }
            }
            ?>   
        </select>
        </div>
   </div>  

    <div class="form-group">
        <label class="control-label col-md-3 col-sm-3 col-xs-12">Desa</label>
           <div class="col-md-6 col-sm-6 col-xs-12">
             <select class="form-control" id="desa" required name="desa_nama">
             <option value="<?php echo $edit->desa_id?>"><?php echo $edit->desa_nama?></option>
             </select>
          </div>
    </div>

   


                    
                    
                    <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="atm_lat">Latitude <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" id="lat" name="atm_lat"value="<?php echo $edit->atm_lat?>"  required="required" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>

                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="atm_long">Longtitude <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" id="lng" name="atm_long" value="<?php echo $edit->atm_long?>" required="required" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>
						<div id="googleMap" style="width:100%;height:380px;"></div>
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
    center:new google.maps.LatLng(5.5577, 95.3222),
    zoom:14,
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
                                            <?php } ?>
                    <div class="ln_solid"></div>
                      <div class="form-group">
                        <div class="col-md-6 col-md-offset-3">
                          
                          <button  type="submit" class="btn btn-success">Save</button>'
						 <a type="back" class="btn btn-primary" href="<?php echo base_url();?>Redirect_controller/data_atm">Cancel</a>
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
 <script src="<?php echo base_url("js/jquery.min.js"); ?>" type="text/javascript"></script>
  
  <script>
  $(document).ready(function(){ // Ketika halaman sudah siap (sudah selesai di load)
    // Kita sembunyikan dulu untuk loadingnya
    $("#loading").hide();
    
    $("#kec").change(function(){ // Ketika user mengganti atau memilih data provinsi
      $("#desa").hide(); // Sembunyikan dulu combobox kota nya
      $("#loading").show(); // Tampilkan loadingnya
    
      $.ajax({
        type: "POST", // Method pengiriman data bisa dengan GET atau POST
        url: "<?php echo base_url("Redirect_controller/listDesa"); ?>", // Isi dengan url/path file php yang dituju
        data: {id_kec : $("#kec").val()}, // data yang akan dikirim ke file yang dituju
        dataType: "json",
        beforeSend: function(e) {
          if(e && e.overrideMimeType) {
            e.overrideMimeType("application/json;charset=UTF-8");
          }
        },
        success: function(response){ // Ketika proses pengiriman berhasil
          $("#loading").hide(); // Sembunyikan loadingnya
          // set isi dari combobox kota
          // lalu munculkan kembali combobox kotanya
          $("#desa").html(response.list_desa).show();
        },
        error: function (xhr, ajaxOptions, thrownError) { // Ketika ada error
          alert(xhr.status + "\n" + xhr.responseText + "\n" + thrownError); // Munculkan alert error
        }
      });
    });
  });
  </script>
  
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