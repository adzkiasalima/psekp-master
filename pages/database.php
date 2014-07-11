<?php
  include_once "../moduls/db_connect.php";
  include_once "../moduls/authentic.php";
  error_reporting(0);
  
  
  session_start();
  $userna = $_SESSION['userna'];
  $ngaranna = $_SESSION['ngaranna'];
  
  ?>
  
<!doctype html>
<html><head>
    <meta charset="utf-8">
    <title>Database PSEKP</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
    <meta name="description" content="">
    <meta name="author" content="Carlos Alvarez - Alvarez.is">
	<meta name="developer" content="PSEKP">

    <!-- styles -->
    <link href="../css/bootstrap.css" rel="stylesheet">
    <link href="../css/main.css" rel="stylesheet">
    <link href="../css/font-style.css" rel="stylesheet">
    
    
    <style type="text/css">
      body {
        padding-top: 60px;
      }
    </style

  	><!-- Google Fonts call. Font Used Open Sans & Raleway -->
	<link href="http://fonts.googleapis.com/css?family=Raleway:400,300" rel="stylesheet" type="text/css">
  	<link href="http://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet" type="text/css">


  </head>
  <body>
  
  
  	<!-- MENU NAVIGASI -->
	

    <div class="navbar-nav navbar-inverse navbar-fixed-top">
        <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="db/index.html"><img src="../assets/img/psekp.png" alt=""> DATABASE PSEKP</a>
        </div> 
          <div class="navbar-collapse collapse">
            <ul class="nav navbar-nav navbar-right">
              <li class="active"><a href="db/index.html"><i class="icon-home icon-white"></i> Home</a></li>
			  <li> <p class="navbar-text navbar-right "> <font color="White"><?php echo "Sign in as, ".$ngaranna; ?> <strong></strong></font></p></li>
              <li><a href="../moduls/log/logout.php">Logout</a></li>
            </ul>
          </div><!--/.nav-collapse -->
        </div>
    </div>

    <div class="container">
    <div class="title" ><h1>Pilih jenis pencarian database</h1></div>
	  <!-- FIRST ROW OF BLOCKS -->     
      <div class="row">
      <!-- TANAMAN PANGAN -->
        <div class="col-sm-3 col-lg-3">
      		<div class="dash-unit">
	      		<dtitle>Tanaman Pangan</dtitle>
	      		<hr>
				<a href="http://google.com">
				<div class="thumbnail" href="google.com">
					<img src="../assets/img/sawah.jpg" alt="Tanaman Pangan" class="img-circle">
				</div><!-- /thumbnail --></a>
				<hr>
				<h3>Info produksi, luas lahan, produktivitas, dan harga tanaman pangan</h3>
				<br>
					
				</div>
        </div>

      <!-- HORTIKULTURA -->
        <div class="col-sm-3 col-lg-3">
      		<div class="dash-unit">
	      		<dtitle>Hortikultura</dtitle>
	      		<hr>
				<a href="http://google.com">
				<div class="thumbnail" href="google.com">
					<img src="../assets/img/hortikultur.jpg" alt="Hortikultura" class="img-circle">
				</div><!-- /thumbnail --></a>
				<hr>
				<h3>Info produksi, luas lahan, produktivitas, dan harga hortikultura</h3>
				<br>
					
				</div>
        </div>

      <!-- PETERNAKAN -->
        <div class="col-sm-3 col-lg-3">
      		<div class="dash-unit">
	      		<dtitle>Peternakan</dtitle>
	      		<hr>
				<a href="http://google.com">
				<div class="thumbnail" href="google.com">
					<img src="../assets/img/TERNAK.jpg" alt="Peternakan" class="img-circle">
				</div><!-- /thumbnail --></a>
				<hr>
				<h3>Info produksi, luas lahan, produktivitas, dan harga Peternakan</h3>
				<br>
					
				</div>
        </div>
		
		<!-- PERKEBUNAN -->
        <div class="col-sm-3 col-lg-3">
      		<div class="dash-unit">
	      		<dtitle>Perkebunan</dtitle>
	      		<hr>
				<a href="http://google.com">
				<div class="thumbnail" href="google.com">
					<img src="../assets/img/perkebunan.jpg" alt="Perkebunan" class="img-circle">
				</div><!-- /thumbnail --></a>
				<hr>
				<h3>Info produksi, luas lahan, produktivitas, dan harga Perkebunan</h3>
				<br>
					
				</div>
        </div>
		
     
      </div><!-- /row -->
      
      
	  <!-- SECOND ROW OF BLOCKS -->     
      <div class="row">
        
      <!-- INDIKATOR EKONOMI MAKRO -->
        <div class="col-sm-3 col-lg-3">
      		<div class="dash-unit">
	      		<dtitle>Indikator Ekonomi Makro</dtitle>
	      		<hr>
				<a href="http://google.com">
				<div class="thumbnail" href="google.com">
					<img src="../assets/img/indikator ekonomi.jpg" alt="Indikator Ekonomi Makro" class="img-circle">
				</div><!-- /thumbnail --></a>
				<hr>
			<h3>Nilai tukar rupiah, inflasi Indonesia, Indeks harga, PDB, NBM, Populasi,Kemiskinan</h3>
				<br>
					
				</div>
        </div>

	  <!-- INDIKATOR PERTANIAN -->
        <div class="col-sm-3 col-lg-3">
      		<div class="dash-unit">
	      		<dtitle>Indikator Pertanian</dtitle>
	      		<hr>
				<a href="http://google.com">
				<div class="thumbnail" href="google.com">
					<img src="../assets/img/indikator pertanian.jpg" alt="Indikator Pertanian" class="img-circle">
				</div><!-- /thumbnail --></a>
				<hr>
			<h3>Nilai tukar petani, Indeks dan Perubahan, Pupuk, Pestisida, Upah,Lahan,Irigasi</h3>
				<br>
					
				</div>
        </div>

	  <!-- EKSPOR-IMPOR-->
        <div class="col-sm-3 col-lg-3">
      		<div class="dash-unit">
	      		<dtitle>Ekspor-Impor</dtitle>
	      		<hr>
				<a href="http://google.com">
				<div class="thumbnail" href="google.com">
					<img src="../assets/img/ekspor.jpg" alt="Ekspor-Impor" class="img-circle">
				</div><!-- /thumbnail --></a>
				<hr>
			<h3>Ekspor dan Impor Pertanian</h3>
				<br>
					
				</div>
        </div>
        
	  <!-- KONSUMSI-->
        <div class="col-sm-3 col-lg-3">
      		<div class="dash-unit">
	      		<dtitle>Konsumsi</dtitle>
	      		<hr>
				<a href="http://google.com">
				<div class="thumbnail" href="google.com">
					<img src="../assets/img/konsumsi.jpg" alt="Konsumsi" class="img-circle">
				</div><!-- /thumbnail --></a>
				<hr>
			<h3>Konsumsi Hortikultura, tanaman pangan, dan peternakan</h3>
				<br>
					
				</div>
        </div>
      </div><!-- /row -->
           
	</div> <!-- /container -->
	<div id="footerwrap">
      	<footer class="clearfix"></footer>
      	<div class="container">
      		<div class="row" >
			    
			    <div class="col-sm-10 col-lg-4">
      			<h3>Kementrian Pertanian</h3>
				<h3>Badan Penelitian dan Pengembangan Pertanian</h3>
      			<h2>Pusat Sosial Ekonomi dan Kebijakan Pertanian</h2>
      			</div>
				
				
      			<div class="col-sm-10 col-lg-4" id="fsub2" >
      			<p><img src="../assets/img/pse.png" alt=""></p>
      			<p>Copyright 2014</p>
				
      			</div>
				
				<div class="col-sm-10 col-lg-4">
				<h5>Database ini dikumpulkan dari berbagai sumber seperti : </h5>
      			<h4>BPS, Bank Indonesia, Kementerian Pertanian dan sumber lainnya 
				dengan cara download dan Entry Data yang bertujuan untuk memfasilitasi 
				peneliti PSEKP dalam melakukan penelitiannya. Data ini disusun oleh tim Database PSEKP.</h4>
      			</div>  

      		</div><!-- /row -->
			
				
      	</div><!-- /container -->		
	</div><!-- /footerwrap -->

    <!-- javascript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script type="text/javascript" src="../assets/js/bootstrap.js"></script>
	
  
</body></html>