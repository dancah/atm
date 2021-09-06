
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <?php echo $this->load->view('common2/title','',TRUE);?>

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
	

	<link href="<?php base_url()?>assets/css/owl.carousel.css" rel="stylesheet">
    <link href="<?php base_url()?>assets/css/owl.theme.css" rel="stylesheet">
	 <link href="<?php base_url()?>assets/home/css/styles.css" rel="stylesheet"> 

    <?php echo $this->load->view('common2/logo','',TRUE);?>
	
	

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
                <!--a id="menu_toggle"><i class="fa fa-bars"></i></a-->
              </div>
            </nav>
          </div>
        </div>
    <!--================================ END TOP NAVIGATION ======================================-->

        <!-- page content -->
        <div class="right_col" role="main">

	              <?php echo $this->load->view('common/head', '', TRUE);?>
<!--=============================================== view ==============================================-->
  
  <section>
 <div class="home-carousel">

                <div class="dark-mask"></div>

                <div class="container">
                    <div class="homepage owl-carousel">
                        <div class="item">
                            <div class="row">
                                <div class="col-sm-2">
                                    <p>
                                       <img src="<?php base_url()?>assets/common/images/1.jpg" width="1097px" height="250px">  
                                    </p>
                                    
                                </div>
                                <div class="col-sm-7">
                                  
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="row">
                                <div class="col-sm-2 ">
                                  <img src="<?php base_url()?>assets/common/images/2.jpg" width="1097px" height="250px"> 
                                </div>
                                <div class="col-sm-7">
                                    
                                </div>
                            </div>
                        </div>
						
						 <div class="item">
                            <div class="row">
                                <div class="col-sm-2 ">
                                  <img src="<?php base_url()?>assets/common/images/3.jpg" width="1097px" height="250px"> 
                                </div>
                                <div class="col-sm-7">
                                    
                                </div>
                            </div>
                        </div>
                        
                    </div>
                    <!-- /.project owl-slider -->
                </div>
            </div>

            <!-- *** HOMEPAGE CAROUSEL END *** -->
        </section>
		<br>
		 <center><h3> <font color="black"> ATM  </h3>
		 <p>ATM dalam bahasa Indonesia Anjungan Tunai Mandiri atau dalam bahasa Inggris: Automated Teller Machine atau Automatic Teller Machine
		 adalah sebuah alat elektronik yang melayani nasabah bank untuk mengambil uang dan mengecek rekening tabungan mereka tanpa perlu dilayani 
		 oleh seorang "teller" manusia. Banyak ATM juga melayani penyimpanan uang atau cek, transfer uang atau bahkan membeli pulsa telepon seluler.
		 ATM sering ditempatkan di lokasi-lokasi strategis, seperti restoran, pusat perbelanjaan, bandar udara, stasiun kereta api, terminal bus, 
		 pasar swalayan, dan kantor-kantor bank itu sendiri.ATM merupakan sebuah fasilitas transaksi yang diberikan oleh bank untuk semua nasabah bank 
		 sehingga dapat melakukan transaksi melalui mesin komputer yang telah diprogram. Untuk bisa mengakses komputer ATM dibutuhkan sebuah kartu 
		 khusus yang biasa kita sebut dengan kartu ATM.
		 </p>
		 <br>
		 
		 </br>
		 <br> </br>
		 </center>

		 
		  <section><center>
		  <div class="col-sm-13 ">
                 
					<h1> SISTEM INFORMASI GEOGRAFIS ATM DI BANDA ACEH, NAD </h1>

		  </div></center>

             
                

                </section> <!-- footer content -->
                           <?php echo $this->load->view('common2/footer','',TRUE);?>
						   <!-- /footer content -->
                        

               
           
        </div>
 </div> </div>

<!--============================================ END VIEW ==========================================-->              

                <!-- end of weather widget -->
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
	
	 <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <script>
        window.jQuery || document.write('<script src="js/jquery-1.11.0.min.js"><\/script>')
    </script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>
	


    <script src="<?php base_url()?>assets/js/jquery.cookie.js"></script>
    <script src="<?php base_url()?>assets/js/waypoints.min.js"></script>
    <script src="<?php base_url()?>assets/js/jquery.counterup.min.js"></script>
    <script src="<?php base_url()?>assets/js/jquery.parallax-1.1.3.js"></script>
    <script src="<?php base_url()?>assets/js/front.js"></script>
    <!-- owl carousel -->
    <script src="<?php base_url()?>assets/js/owl.carousel.min.js"></script>
	<script src="<?php base_url()?>assets/main.js"></script>


    <script src="<?php base_url()?>assets/home/js/wow.min.js"></script>
    <script src="<?php base_url()?>assets/home/js/custom-scripts.js"></script>
  
  </body>
</html>
