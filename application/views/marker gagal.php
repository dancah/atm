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
        <div class="top_nav">
          <div class="nav_menu">
            <nav>
              <div class="nav toggle">
                <a id="><i class="fa fa-bars"></i></a>
              </div>
            </nav>
          </div>
        </div>
    <!--================================ END TOP NAVIGATION ======================================-->

        <!-- page content -->
        <div class="right_col" role="main">

<!--=============================================== view ==============================================-->
  
  <section class="bar background-white no-mb">
            <div class="container">
                    <div class="col-md-12">
                        <div class="heading text-center">
                            <h1><font color="black">Peta Lokasi atm</font></h1>
                            
                            <html xmlns="http://www.w3.org/1999/xhtml" xmlns:v="urn:schemas-microsoft-com:vml">
                                  <head>
                                  
                                    <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAqiJC0pOla_sS6ZeTi2b61vBXaah-t5YU&callback=initMap"
                        type="text/javascript"></script>
                                    <title>Google Maps V3 API Sample</title>
                                       <script type="text/javascript">
									   
									
										
                                 var map;
                                var infoWindow;
                                var image;
								var koorDinas;
		var array = [];
		var lastOpenedInfoWindow;
        var iconBase = '/assets/build/images/';
		var customLabelandIcon = {
		    'atman Tebing':{
                name: 'atman Tebing',
                icon: iconBase + 'atman Tebing.png'
            },
			atman Badan Jalan: {
                name: 'atman Badan Jalan',
                icon: iconBase + 'atman Badan Jalan.png'
			},
			atman Bahu Jalan: {
                name: 'atman Bahu Jalan',
                icon: iconBase + 'atman Bahu Jalan.png'
			},
			'-': {
                name: 'Tidak ada tipe',
			 	icon: iconBase + 'tidakAdaTipe.png'
			}
		};
		
		window.initMap = function() {
		    koorDinas = new google.maps.LatLng(5.562626,95.324298);
            var map = new google.maps.Map(document.getElementById('map'), {
				center: {lat: 5.5566183, lng: 95.3224493},
				zoom: 9,
                disableDefaultUI: true,
                mapTypeId:'satellite',
                mapTypeControl: true,
                mapTypeControlOptions: {
                    mapTypeId: ['satellite','roadmap'],
                    style: google.maps.MapTypeControlStyle.DEFAULT,
                    position:google.maps.ControlPosition.LEFT_BOTTOM
                }
				});
				
				 //marker for dinas pendidikan
            var markerDinas = new google.maps.Marker({
                map: map,
                position: koorDinas
//                label: label.label,
//                icon: icon.icon
				});	
				
				var contentString =
                '<div style="position: relative;top: 10px;"><table>'+
                '<h3 style="font-weight: bold">Dayah '+data['nama']+'<h3>'+
                '<p> Desa '+data['desa']+' Kecamatan '+data['kecamatan']+' Kabupaten '+data['kabupaten']+'</p>'+
                '<a href="http://localhost/laravel/mapdayah/home/pictures/'+ data['id']+ '">'+'<img src="' + data['gambarDayah'] + '" style="margin-right: 10px" width="150" height="150"/>'+'</a>'+
                '<a href="http://localhost/laravel/mapdayah/home/pictures/'+ data['id']+ '">'+'<img src="' + data['gambarPimpinan'] + '" width="150" height="150"/>'+'</a>'+
                '<tr>'+'<td>Tipe</td>'+'<td>' +data['tipe']+'</td>'+'</tr>'+
                '<tr>'+'<td>Jumlah Santri</td>'+'<td>' +data['jumlahSantri']+'</td>'+'</tr>'+
                '<tr>'+'<td>Jumlah Ustad</td>'+'<td>' +data['jumlahUstad']+'</td>'+'</tr>'+
                '<tr>'+'<td>Keterangan Dayah</td>'+'<td>' +data['keteranganDayah']+'</td>'+'</tr>'+
                '<tr>'+'<td>Pimpinan Dayah</td>'+'<td>' +data['pimpinan']+'</td>'+'</tr>'+
                '</table>'+
                '<a href="http://localhost/laravel/mapdayah/home/profil/'+ data['id']+ '"class="btn btn-success" style="margin-right: 10px">Profil Dayah'+'</a>'+
                '<a href="https://en.wikipedia.org/w/index.php?title=Uluru&oldid=297882194" class="btn btn-danger"> Video Dayah'+ '</a>'+
                '</div>';
            marker.content = contentString;
            var infowindow = new google.maps.InfoWindow({
                maxWidth:500
               // pixelOffset: new google.maps.Size(0,35)
            });
				
				var contentString1 = '<div>'+'<p>Dinas Pendidikan</p>'+'</div>'+
                                 '<div>'+'<p>Jl. Pelangi Mulia, Kuta Alam,Banda Aceh,Aceh 24415</p>'+'</div>';
            markerDinas.content = contentString1;
            var infowindow1 = new google.maps.InfoWindow({
                maxWidth:200
            });
			
			google.maps.event.addListener(markerDinas, 'click', function () {
                closeinfowindows();
                infowindow1.setContent(contentString1);
                infowindow1.open(this.getMap(), this);
                lastOpenedInfoWindow = infowindow1;
            });
            google.maps.event.addListener(map, 'click', function () {
                closeinfowindows();
            });
            new google.maps.event.trigger( markerDinas, 'click' );
            function closeinfowindows() {
                if (lastOpenedInfoWindow) {
                    lastOpenedInfoWindow.close();
                }
            }
			
			//end marker for dinas pendidikan
			@foreach($ddata_atm as $data)
				var id = "{{ $data->id }}";
				array[id] = [];
                array[id]['id'] = id;
				array[id]['jenis_atm'] = "{{ $data->jenis_atm }}";
				array[id]['status_atm'] = "{{ $data->status_atm }}";
				array[id]['desa_name'] = "{{ $data->desa_name }}";
                array[id]['kec_nama'] = "{{ $data->kec_nama }}";
				array[id]['kab_name'] = "{{ $data->kab_name }}";
                array[id]['tgl_atm'] = "{{ $data->tgl_atm }}";
				array[id]['lt']    = "{{ $data->atm_lat }}";
				array[id]['lg']    = "{{ $data->atm_long }}";
				setMarker(map, array[id]);
			@endforeach
			var legend = document.getElementById('legend');
            for (var key in customLabelandIcon) {
                var type = customLabelandIcon[key];
                var name = type.name;
                var icon = type.icon;
                var div = document.createElement('div');
                div.innerHTML = '<img src="' + icon + '"> ' + name;
                legend.appendChild(div);
            }
				function setMarker(map, data) {
            point = new google.maps.LatLng(data['lt'], data['lg']);
            var label = customLabelandIcon[data['tipe']] || {};
            var icon = customLabelandIcon[data['tipe']] || {};
            var marker = new google.maps.Marker({
                map: map,
                position: point,
                label: label.label,
                icon: icon.icon
            });
      
	  
			google.maps.event.addListener(marker, 'click', function () {
                closeLastOpenedInfoWindow();
                infowindow.setContent(this.content);
                infowindow.open(this.getMap(), this);
                lastOpenedInfoWindow = infowindow;
            });
            google.maps.event.addListener(map, 'click', function () {
                closeLastOpenedInfoWindow();
            });
            data['marker'] = marker;
            }
        function closeLastOpenedInfoWindow() {
            if (lastOpenedInfoWindow) {
                lastOpenedInfoWindow.close();
            }
        }
		
		function geocodeLatLng(geocoder, map) {
            var id = document.getElementById('atm-selector').value;
            var latlng = {lat: parseFloat(array[id]['lt']), lng: parseFloat(array[id]['lg'])};
            geocoder.geocode({'location': latlng}, function (results, status) {
                if (status === 'OK') {
                    if (results[1]) {
                        map.setZoom(10);
                        map.setCenter({lat: parseFloat(array[id]['lt']), lng: parseFloat(array[id]['lg'])});
                        new google.maps.event.trigger( array[id]['marker'], 'click' );
                    } else {
                        window.alert('No results found');
                    }
                } else {
                    window.alert('Geocoder failed due to: ' + status);
                }
            });
        }
        $(document).ready(function() {
            $('#dayah-selector').select2({
                placeholder: 'Cari Dayah',
                width: '350px'
            }).on("change", function() {
                var geocoder = new google.maps.Geocoder;
                geocodeLatLng(geocoder, map);
            });
        });
		};
	  
                               
                        </script>
                       <!--  <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAqiJC0pOla_sS6ZeTi2b61vBXaah-t5YU&callback=initMap"
                        type="text/javascript"></script> -->
                                  </head>
                                    <body style="font-family: Arial; border: 0 none;" onload="initialize(3.995520,97.341334)">
                                    <div id="map-canvas" style="width: 1050px; height: 550px"></div>
									
                                  </body>
                                  
                                </html>
								 <!-- footer content -->
                           <?php echo $this->load->view('common2/footer','',TRUE);?>
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
