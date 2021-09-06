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
  
    <!-- bootstrap-progressbar -->
    <link href="<?php echo base_url();?>/assets/vendors/bootstrap-progressbar/css/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet">
    <!-- JQVMap -->
    <link href="<?php echo base_url();?>/assets/vendors/jqvmap/dist/jqvmap.min.css" rel="stylesheet"/>
    <!-- bootstrap-daterangepicker -->
    <link href="<?php echo base_url();?>/assets/vendors/bootstrap-daterangepicker/daterangepicker.css" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="<?php echo base_url();?>/assets/build/css/custom.min.css" rel="stylesheet">

    <?php echo $this->load->view('common/logo','',TRUE);?>

  <body class="nav-md">
    <div class="container body">
      <div class="main_container">
        <div class="col-md-3 left_col">
          <div class="left_col scroll-view">
          
          <?php echo $this->load->view('common2/menu','',TRUE);?>

  <!--=============================== TOP NAVIGATION ============================================-->
        
    <!--================================ END TOP NAVIGATION ======================================-->

        <!-- page content -->
        <div class="right_col" role="main">

<!--=============================================== view ==============================================-->
  
  <section class="bar background-white no-mb">
            <div class="container">
                    <div class="col-md-12">
                        <div class="heading text-center">
                            <h1><font color="black">Peta Lokasi ATM</font></h1>
                            
                            <html xmlns="http://www.w3.org/1999/xhtml" xmlns:v="urn:schemas-microsoft-com:vml">
                                  <head>
                                  
                                    <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAqiJC0pOla_sS6ZeTi2b61vBXaah-t5YU&callback=initMap"
                        type="text/javascript"></script>
                                       <script type="text/javascript">
									   
									
										
                                var map;
                                var infoWindow;
                                var image
      
                                function initialize(lt,lg, atm_nama, atm_id, alamat,cdm, ) {
                                var mapDiv = document.getElementById('map-canvas');
																							
                                map = new google.maps.Map(mapDiv, {
                                center: new google.maps.LatLng(lt,lg),
                                zoom: 12,
                                mapTypeId: google.maps.MapTypeId.ROADMAP
                                });
								
									 var ctaLayer = new google.maps.KmlLayer({
                             		 		   		  		     			  
	
									zoom:12,
										map: map
								});
      
                                infoWindow = new google.maps.InfoWindow();
        
                                <?php foreach ($data_atm  as $row) {?>
								  var atm_id = '<?php echo $row->atm_id ?>';
                                  var latview = '<?php echo $row->atm_lat ?>';
                                  var longview = '<?php echo $row->atm_long ?>';
                                  var nama_atm =  '<?php echo $row->nama_atm ?>';
								  var atm_foto =  '<?php echo $row->atm_foto ?>';
								  var desa_nama =  '<?php echo $row->desa_nama ?>';
								  var cdm =  '<?php echo $row->cdm ?>';
                                 
                                  createMarker(latview, longview, nama_atm, atm_foto,cdm,desa_nama,atm_id);
                                <?php } ?>

                                 }
        
      
                                function createMarker(lt, lg, nama_atm, atm_foto,cdm,desa_nama,atm_id, icon) {
                                 var latLng = new google.maps.LatLng(lt,lg);
                                 var marker = new google.maps.Marker
								 ({
                                 position: latLng,
								 // logo marker
                                 icon: "http://maps.google.com/mapfiles/ms/micons/ltblue-dot.png",
                                 map: map,
								 // animasi marker
								 animation: google.maps.Animation.BOUNCE
								 
            
                               });
         
                                google.maps.event.addListener(marker, 'click', function() {
                                var myHtml = ' <font color="black"> <strong>1. '+ nama_atm + '</strong> <br><strong> Cash Deposit Machine = '+ cdm + '</strong> <br> <strong> <img src="<?php echo base_url()?>uploads/'+ atm_foto +'" width="200px" height="auto"> <br> <strong> '+ desa_nama + '</strong> <br> <a href="<?php echo base_url()?>Publik/detail_atm_publik?id='+ atm_id +'">Detail</a>';
                                infoWindow.setContent(myHtml);
                                infoWindow.open(map, marker);
								
                                });
                                    }

                        </script>
                                  </head>
                                    <body style="font-family: Arial; border: 0 none;" onload="initialize(5.5577, 95.3222)">
                                    <div id="map-canvas" style="width: 1050px; height: 550px"></div>
									
                                  </body>
                                  
                                </html>
								 <!-- footer content -->
                     
						   <!-- /footer content -->
                           
                        </div>

                </div>
            </div>
        </section>


<!--============================================ END VIEW ==========================================-->              

                <!-- end of weather widget -->
              </div>
            </div>
          </div>
        </div>
        </div>
        <!-- /page content -->

 
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
    <!-- Chart.js -->
    <script src="<?php echo base_url();?>/assets/vendors/Chart.js/dist/Chart.min.js"></script>
    <!-- gauge.js -->
    <script src="<?php echo base_url();?>/assets/vendors/gauge.js/dist/gauge.min.js"></script>
    <!-- bootstrap-progressbar -->
    <script src="<?php echo base_url();?>/assets/vendors/bootstrap-progressbar/bootstrap-progressbar.min.js"></script>
    <!-- iCheck -->
    <script src="<?php echo base_url();?>/assets/vendors/iCheck/icheck.min.js"></script>
    <!-- Skycons -->
    <script src="<?php echo base_url();?>/assets/vendors/skycons/skycons.js"></script>
    <!-- Flot -->
    <script src="<?php echo base_url();?>/assets/vendors/Flot/jquery.flot.js"></script>
    <script src="<?php echo base_url();?>/assets/vendors/Flot/jquery.flot.pie.js"></script>
    <script src="<?php echo base_url();?>/assets/vendors/Flot/jquery.flot.time.js"></script>
    <script src="<?php echo base_url();?>/assets/vendors/Flot/jquery.flot.stack.js"></script>
    <script src="<?php echo base_url();?>/assets/vendors/Flot/jquery.flot.resize.js"></script>
    <!-- Flot plugins -->
    <script src="<?php echo base_url();?>/assets/vendors/flot.orderbars/js/jquery.flot.orderBars.js"></script>
    <script src="<?php echo base_url();?>/assets/vendors/flot-spline/js/jquery.flot.spline.min.js"></script>
    <script src="<?php echo base_url();?>/assets/vendors/flot.curvedlines/curvedLines.js"></script>
    <!-- DateJS -->
    <script src="<?php echo base_url();?>/assets/vendors/DateJS/build/date.js"></script>
    <!-- JQVMap -->
    <script src="<?php echo base_url();?>/assets/vendors/jqvmap/dist/jquery.vmap.js"></script>
    <script src="<?php echo base_url();?>/assets/vendors/jqvmap/dist/maps/jquery.vmap.world.js"></script>
    <script src="<?php echo base_url();?>/assets/vendors/jqvmap/examples/js/jquery.vmap.sampledata.js"></script>
    <!-- bootstrap-daterangepicker -->
    <script src="<?php echo base_url();?>/assets/vendors/moment/min/moment.min.js"></script>
    <script src="<?php echo base_url();?>/assets/vendors/bootstrap-daterangepicker/daterangepicker.js"></script>

    <!-- Custom Theme Scripts -->
    <script src="<?php echo base_url();?>/assets/build/js/custom.min.js"></script>
  
  </body>
</html>
