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
    <!-- bootstrap-daterangepicker -->
    <link href="<?php echo base_url();?>/assets/vendors/bootstrap-daterangepicker/daterangepicker.css" rel="stylesheet">
    
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

  <!--=============================== TOP NAVIGATION ============================================-->
        <div class="top_nav">
          <div class="nav_menu">
            <nav>
              <div class="nav toggle">
                <a id="menu_toggle"><i class="fa fa-bars"></i></a>
              </div>
            </nav>
          </div>
        </div>
    <!--================================ END TOP NAVIGATION ======================================-->


<!--=============================================== view ==============================================-->
  
         <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>Data Masjid</h3>
              </div>

              <div class="title_right">
                <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
                  <div class="input-group">
                    <input type="text" class="form-control" placeholder="Search for...">
                    <span class="input-group-btn">
                      <button class="btn btn-default" type="button">Go!</button>
                    </span>
                  </div>
                </div>
              </div>
            </div>
            
            <div class="clearfix"></div>

            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Detail Data Masjid <small>Activity report</small></h2>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <?php
    foreach($detail_atm as $data){
  ?>
                    <div class="col-md-3 col-sm-3 col-xs-12 profile_left">
                      <div class="profile_img">
                        <div id="crop-avatar">
                          <!-- Current avatar -->
                          <img class="img-responsive avatar-view" src="<?php echo base_url()?>uploads/<?php echo $data->atm_foto; ?>" class="img-responsive alt="Avatar" title="Change the avatar">
                        </div>
                      </div>
                      <h3> <strong><?php echo $data->atm_name;?></strong> </h3>


                      <br>
                      <ul class="list-unstyled user_data">
                        <h5> <strong> Alamat </strong></h5>
                        <li><i class="fa fa-map-marker user-profile-icon"></i> <?php echo $data->atm_alamat;?>
                        </li>

                        <li>
                          <h5> <strong> Luas Tanah </strong></h5>
                          <i class="fa fa-globe user-profile-icon"></i> <?php echo $data->atm_lt;?>
                        </li>

                          <li>
                            <h5> <strong> Luas Bangunan </strong></h5>
                          <i class="fa fa-university user-profile-icon"></i> <?php echo $data->atm_lb;?>
                        </li>

                          <li>
                              <h5> <strong> Estimasi Jamaah </strong></h5>
                          <i class="fa fa-users user-profile-icon"></i> <?php echo $data->atm_jamaah;?>
                        </li>

                          <li>
                            <h5> <strong> Tahun </strong></h5>
                          <i class="fa fa-calendar user-profile-icon"></i> <?php echo $data->atm_tahun;?>
                        </li>

                         <li>
                            <h5> <strong> Status </strong></h5>
                          <i class="fa fa-check-circle user-profile-icon"></i> <?php echo $data->atm_status;?>
                        </li>

                      </ul>

                      <br />


                    </div>
                    <div class="col-md-9 col-sm-9 col-xs-12">

                   
                      <!-- start of user-activity-graph -->
  <section class="bar background-white no-mb">
            <div class="container">
                    <div class="col-md-12">
                        <div class="heading text-center">
                    
                            
                            <html xmlns="http://www.w3.org/1999/xhtml" xmlns:v="urn:schemas-microsoft-com:vml">
                                  <head>
                                  
                                    <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAqiJC0pOla_sS6ZeTi2b61vBXaah-t5YU&callback=initMap"
                        type="text/javascript"></script>
                                    <title>Google Maps V3 API Sample</title>
                                       <script type="text/javascript">
    
                                var map;
                                var infoWindow;
                                var image
      
                                function initialize(lt,lg, atm_name, alamat) {
                                var mapDiv = document.getElementById('map-canvas');
                                map = new google.maps.Map(mapDiv, {
                                center: new google.maps.LatLng(lt,lg),
                                zoom: 16,
                                mapTypeId: google.maps.MapTypeId.ROADMAP
                                });
      
                                infoWindow = new google.maps.InfoWindow();
        
                                <?php foreach ($detail_atm  as $row) {?>
                
                                  var latview = '<?php echo $row->atm_lat ?>';
                                  var longview = '<?php echo $row->atm_long ?>';
                                  var atm_name = '<?php echo $row->atm_name?>';
                                  var atm_foto =  '<?php echo $row->atm_foto ?>';
                                  var icon = "http://maps.google.com/mapfiles/kml/paddle/red-circle.png ";
                                  createMarker(latview, longview, atm_name, atm_foto);
                                <?php } ?>

                                 }
        
      
                                function createMarker(lt,lg,atm_name,atm_foto,icon) {
                                 var latLng = new google.maps.LatLng(lt,lg);
                                 var marker = new google.maps.Marker({
                                 position: latLng,
                                 icon: icon,
                                 map: map
            
                               });
         
                                google.maps.event.addListener(marker, 'click', function() {
                                var myHtml = '<strong>'+ atm_name + '</strong> <br> <img src="uploads/'+ atm_foto + '" width="200px" height="auto">';
                                infoWindow.setContent(myHtml);
                                infoWindow.open(map, marker);
                                });
                                    }

                        </script>
                       <!--  <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAqiJC0pOla_sS6ZeTi2b61vBXaah-t5YU&callback=initMap"
                        type="text/javascript"></script> -->
                                  </head>
                                    <body style="font-family: Arial; border: 0 none;" onload="initialize(5.5577,95.3222)">
                                    <div id="map-canvas" style="width: 750px; height: 750px"></div>
                                  </body>
                                  
                                </html><br><br>
                           
                        </div>

                </div>
            </div>
        </section>
                      <!-- end of user-activity-graph -->
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>


<!--============================================ END VIEW ==========================================-->              

                <!-- end of weather widget -->
              </div>
            </div>
          </div>
        </div>
         <?php }?>
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
    <!-- morris.js -->
    <script src="<?php echo base_url();?>/assets/vendors/raphael/raphael.min.js"></script>
    <script src="<?php echo base_url();?>/assets/vendors/morris.js/morris.min.js"></script>
    <!-- bootstrap-progressbar -->
    <script src="<?php echo base_url();?>/assets/vendors/bootstrap-progressbar/bootstrap-progressbar.min.js"></script>
    <!-- bootstrap-daterangepicker -->
    <script src="<?php echo base_url();?>/assets/vendors/moment/min/moment.min.js"></script>
    <script src="<?php echo base_url();?>/assets/vendors/bootstrap-daterangepicker/daterangepicker.js"></script>
    
    <!-- Custom Theme Scripts -->
    <script src="<?php echo base_url();?>/assets/build/js/custom.min.js"></script>

  </body>
</html>