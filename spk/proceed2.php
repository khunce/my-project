<?php
error_reporting(E_ERROR | E_PARSE);
include("/database/db.php");
include ("/function/function.php");
if(isset($_POST['process'])){
	$home=$_POST['id_rmh'];
	$kriteria_harga=$_POST['kriteria_harga'];
	$kriteria_jarak=$_POST['kriteria_jarak'];
	$kriteria_fasilitas=$_POST['kriteria_fasilitas'];
	$array_id_rmh=explode(',',$home);
	
	
	//$counterfasilitas=count($fasilitas);
}
	
	
?>
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if IE 9 ]><html class="ie ie9" lang="en"> <![endif]-->
<html lang="en">
<!--<![endif]-->
<head>

<!-- Basic Page Needs -->
<meta charset="utf-8" />
<title>Sistem Pendukung Keputusan Pemilihan Rumah Kos Mahasiswa UNPAR</title>
<meta name="description" content="" />
<meta name="author" content="Ansonika" />

<!-- Favicons-->
<link rel="shortcut icon" href="img/unpar-logo.png" type="image/x-icon" />
<link rel="apple-touch-icon" type="image/x-icon" href="img/apple-touch-icon-57x57-precomposed.png" />
<link rel="apple-touch-icon" type="image/x-icon" sizes="72x72" href="img/apple-touch-icon-72x72-precomposed.png" />
<link rel="apple-touch-icon" type="image/x-icon" sizes="114x114" href="img/apple-touch-icon-114x114-precomposed.png" />
<link rel="apple-touch-icon" type="image/x-icon" sizes="144x144" href="img/apple-touch-icon-144x144-precomposed.png" />

<!-- Mobile Specific Metas -->
<meta name="viewport" content="width=device-width, initial-scale=1.0" />

<!-- CSS -->
<link href="css/bootstrap.css" rel="stylesheet" />
<link href="css/style.css" rel="stylesheet" />
<link href="font-awesome/css/font-awesome.css" rel="stylesheet" />
<link href="css/socialize-bookmarks.css" rel="stylesheet" />
<link href="js/fancybox/source/jquery.fancybox.css?v=2.1.4" rel="stylesheet" />
<link href="check_radio/skins/square/aero.css" rel="stylesheet" />

<!-- Toggle Switch -->
<link rel="stylesheet" href="css/jquery.switch.css" />

<!-- Owl Carousel Assets -->
<link href="css/owl.carousel.css" rel="stylesheet" />
<link href="css/owl.theme.css" rel="stylesheet" />

<!-- Google web font -->
<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800,300' rel='stylesheet' type='text/css' />

<!--[if lt IE 9]>
<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->

<!-- Jquery -->
<script src="js/jquery-1.10.2.min.js"></script>


<script src="js/jquery-ui-1.8.12.min.js"></script>



<!-- Wizard-->
<script src="js/jquery.wizard.js"></script>



<!-- HTML5 and CSS3-in older browsers-->
<script src="js/modernizr.custom.17475.js"></script>

<!-- Support media queries for IE8 -->
<script src="js/respond.min.js"></script>
<script type="text/javascript">
	$(window).load(function() {
		$(".loader").delay(500).fadeOut("slow");
	});
</script>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
 
</head>

<body>
<div class="loader"></div>
<section id="top-area">
	<header>
         <div class="container">
            <div class="row">
        	<div class="col-md-4 col-xs-3" id="logo"><a href="index.php">Sistem Pendukung Keputusan Pemilihan Rumah Kos Mahasiswa UNPAR</a></div>
            
            <div class="btn-responsive-menu"> <span class="bar"></span> <span class="bar"></span> <span class="bar"></span> </div>

            <nav class="col-md-8 col-xs-9" id="top-nav">
            	<ul>
                    <li><a href="#" id="purchase">Admin Login</a></li>
               </ul>
            </nav><!-- End Nav -->
            
         </div><!-- End row -->
         </div><!-- End container -->
        </header> <!-- End header -->
        	
            <div class="container">
             <div class="row">
                 <div class="col-md-12 main-title">
                 <h1>FIND YOUR OWN DREAM OF BOARDING HOUSE</h1>
                <p>Sistem Pendukung Keputusan Pemilihan Rumah Kos untuk Mahasiswa UNPAR </p> <p>Membantu Mahasiswa Dalam Memilih Rumah Kos Impian </p> <br><br>
                </div>
       		</div>
            </div>
 </section>   

<section class="container" id="main">

<!-- Start Survey container -->
<div id="survey_container">
<form name="example-1" id="wrapped" action="index.php" method="POST" />
	<div id="middle-wizard">

			<h3> Rujukan Terakhir Rumah Kos Untuk Anda <br> (<?php echo getCounter2($kriteria_harga,$kriteria_jarak,$kriteria_fasilitas,$array_id_rmh); ?> kos ditemukan ) </h3>
			<div class="diy-slideshow">
				<?php 
					//for($i=0;$i<count($array_id_rmh);$i++){
						//echo $array_id_rmh[$i]." ";
					//}
					//echo "<br>xxx";
					doMGA($kriteria_harga,$kriteria_jarak,$kriteria_fasilitas,$array_id_rmh);
				?>
				<font size="2px" color="white">click << or >> to move to others</font><span class="prev">«</span><span class="next">»</span>
			
	</div>
	<div class="submit step" id="complete">
                    	<i class="icon-check"></i>
						<h3><?php echo $_POST['user']?>, are you satisfied with the result ?</h3>
						<button type="submit" name="process" class="submit">Back To Homepage</button>
	</div>
	</div>
	<form>
</div><!-- end Survey container -->

<div class="row">
	<div class="col-md-12">
		<h2>Thank you for using this site<span>We hope that you get what you want by using our site</span></h2>
	</div>
</div><!-- end row -->

<div class="divider"></div>

<div class="row">
	<div class="col-md-12">
		<h3>Question and answer<span>Getting to know our project through Q & A.</span></h3>
	</div>
</div><!-- end row -->

<div class="row">

	<div class="col-md-4">
		<div class="question_box">
			<h3>Untuk apa website ini dibuat?</h3>
			<p align="justify">
				Untuk memenuhi tugas mata kuliah Sistem Pendukung Keputusan serta membantu mahasiswa UNPAR memilih rumah kos sesuai keinginannya.
			</p>
		</div>
	</div>
    
	<div class="col-md-4">
		<div class="question_box">
			<h3>Kriteria apa saja yang dimasukkan untuk membangun SPK Pemilihan rumah Kos untuk Mahasiswa UNPAR ini?</h3>
			<p align="justify">
				Ada 4 kriteria yang dimasukkan yaitu kriteria sistem kontrak, harga rumah kos, jarak rumah kos ke kampus, serta fasilitas yang ditawaekan oleh rumah kos tersebut
			</p>
		</div>
	</div>
    
	<div class="col-md-4">
		<div class="question_box">
			<h3>Apa dasar dibuatnya SPK Pemilihan rumah Kos untuk Mahasiswa UNPAR ini?</h3>
			<p align="justify">
				Berdasarkan pengalaman kami sebagai mahasiswa serta berdasarkan pengalaman teman-teman mahasiswa kami yang lain saat ingin memilih rumah kos.
			</p>
		</div>
	</div>
    
</div><!-- end row -->



<div class="divider"></div>

<div class="row">
	<div class="col-md-12">
		<h3>Some screenshots<span>Here are some photos of boarding houses you can choose</span></h3>
	</div>
</div><!-- end row -->

<div class="row">
	<div class="col-md-12">
    
		<div id="owl-demo">
			<div class="item">
				<a href="img/Photo/BJ44.jpg" class="fancybox"><img src="img/Photo/BJ44.jpg" alt="BJ44" /></a>
			</div>
			<div class="item">
				<a href="img/Photo/BukitIndahVillage.jpg" class="fancybox"><img src="img/Photo/BukitIndahVillage.jpg" alt="Bukit Indah Village" /></a>
			</div>
			<div class="item">
				<a href="img/Photo/BukitResikIndah.jpg" class="fancybox"><img src="img/Photo/BukitResikIndah.jpg" alt="Bukit Resik Indah" /></a>
			</div>
			<div class="item">
				<a href="img/Photo/BukitResikVillage.jpg" class="fancybox"><img src="img/Photo/BukitResikVillage.jpg" alt="Bukit Resik Village" /></a>
			</div>
			<div class="item">
				<a href="img/Photo/GandogKost.jpg" class="fancybox"><img src="img/Photo/GandogKost.jpg" alt="Gandog Kos" /></a>
			</div>
			<div class="item">
				<a href="img/Photo/GanesaKost.jpg" class="fancybox"><img src="img/Photo/GanesaKost.jpg" alt="Ganesa Kos" /></a>
			</div>
		</div>
        
	</div><!-- end col-md-12 -->
</div><!-- end row -->

<div class="divider"></div>

<div class="row">
	<div class="col-md-12">
		<h3>About us<span>Getting to know about us</span></h3>
	</div>
</div><!-- end row -->

<div class="row">

	<div class="col-md-6">
		<h4>Our History</h4>
		<p align="justify" >
			 Kami merupakan kelompok tugas mata kuliah Sistem Pendukung Keputusan dan terbentuk saat tugas ini diberikan. Kami adalah mahasiswa UNPAR jurusan Teknik Informatika angkatan 2011.
		</p>
		<h4>Our Vision</h4>
		<p>
			 Segera menyelesaikan kuliah dan lulus dengan nilai yang memuaskan dan segera bekerja di perusahaan besar setelah lulus
		</p>
	</div>
    
	<div class="col-md-3">
		<div class="thumbnail">
			<div class="project-item-image-container"><img src="img/sudar.jpg" alt="Sudarsono" /></div>
			<div class="caption">
				<div class="transit-to-top">
					<h4 class="p-title">Sudarsono Sihotang <small>Koordinator Kelompok</small></h4>
						<div class="widget_nav_menu">
							<ul class="social-bookmarks team">
								<li class="facebook"><a href="#">facebook</a></li>
								<li class="googleplus"><a href="#">googleplus</a></li>
								<li class="twitter"><a href="#">twitter</a></li>
								<li class="delicious"><a href="#">delicious</a></li>
								<li class="paypal"><a href="#">paypal</a></li>
							</ul>
							<div class="phone-info"><i class="icon-phone-sign"></i> 0821166079705</div>
					</div><!-- transition top -->
				</div><!-- caption -->
			</div>
		</div>
	</div><!-- team  item -->
    
	<div class="col-md-3">
		<div class="thumbnail">
			<div class="project-item-image-container">
				<img src="img/robby.jpg" alt="Robby" />
			</div>
			<div class="caption">
				<div class="transit-to-top">
					<h4 class="p-title">Robby Khrisna <small>Programmer</small></h4>
						<div class="widget_nav_menu">
							<ul class="social-bookmarks team">
								<li class="facebook"><a href="#">facebook</a></li>
								<li class="googleplus"><a href="#">googleplus</a></li>
								<li class="twitter"><a href="#">twitter</a></li>
								<li class="linkedin"><a href="#">linkedin</a></li>
							</ul>
							<div class="phone-info">
								<i class="icon-phone-sign"></i> 082126861695
							</div>
					</div><!-- transition top -->
				</div><!-- caption -->
			</div>
		</div>
	</div><!-- team  item -->
    
</div><!-- end row -->
</section><!-- end section main container -->
       
<footer>
	<section class="container">
	<div class="row">
    	<div class="col-md-4">
        	<h3>About us</h3>
            <p align="justify">Kami merupakan kelompok tugas mata kuliah Sistem Pendukung Keputusan. Kami adalah mahasiswa UNPAR jurusan Teknik Informatika angkatan 2011. Website ini dibangun untuk menyelesaikan tugas besar mata kuliah Sistem Pendukung Keputusan</p>
        </div>
        
        <div class="col-md-4" id="contact">
        	<h3>Contact info</h3>
            <p>Kalian bisa menghubungi kami melalui :  </p> 
                <ul>
                        <li><i class="icon-home"></i> Gedung 9 UNPAR Lantai 1</li>
                        <li><i class="icon-phone"></i> Telephone: 0821166079705 </li>
                        <li><i class="icon-envelope"></i> Email: <a href="#">khrisnarobby@gmail.com </a></li>
                        <li><i class="icon-skype"></i> Skype name: robbykhrisna</li>
                    </ul>    
        </div>
        
        <div class="col-md-4">
        	<h3>Latest tweet</h3>
            <div id="tweets"></div>
        </div>
        
    </div><!-- end row -->
  	</section>
    
    <section id="footer_2">
    <div class="container">
    <div class="row">
    	<div class="col-md-6">
                <ul id="footer-nav">
                	<li>Copyright©2014 robby-sudar-anton-yose </li>
                    <li><a href="#">Terms of Use</a></li>
                    <li><a href="#">Privacy</a></li>
                </ul>              
        </div>
            <div class="col-md-6" style="text-align:center">
                <ul class="social-bookmarks clearfix">
                    <li class="facebook"><a href="#">facebook</a></li>
                    <li class="googleplus"><a href="#">googleplus</a></li>
                    <li class="twitter"><a href="#">twitter</a></li>
                    <li class="delicious"><a href="#">delicious</a></li>
                    <li class="paypal"><a href="#">paypal</a></li>
                </ul>
            </div>
        </div>
		</div>
    </section>

</footer> 
 
 <div id="toTop">Back to Top</div>  

<!-- Modal About -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h4 class="modal-title" id="myModalLabel">About us</h4>
      </div>
      <div class="modal-body">
        <p>Lorem ipsum dolor sit amet, in porro albucius qui, in nec quod novum accumsan, mei ludus tamquam dolores id. No sit debitis meliore postulant, per ex prompta alterum 
sanctus, pro ne quod dicunt sensibus.</p>
<p>Lorem ipsum dolor sit amet, in porro albucius qui, in nec quod novum accumsan, mei ludus tamquam dolores id. No sit debitis meliore postulant, per ex prompta alterum 
sanctus, pro ne quod dicunt sensibus. Lorem ipsum dolor sit amet, in porro albucius qui, in nec quod novum accumsan, mei ludus tamquam dolores id. No sit debitis meliore postulant, per ex prompta alterum 
sanctus, pro ne quod dicunt sensibus.</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->

<!-- Modal About -->
<div class="modal fade" id="terms-txt" tabindex="-1" role="dialog" aria-labelledby="termsLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h4 class="modal-title" id="termsLabel">Terms and conditions</h4>
      </div>
      <div class="modal-body">
        <p align="justify">Gunakan website ini sesuka kalian. Tapi ingat masukkan data diri kalian terlebih dahulu sebagai masukan untuk kami. Trims!!!</p>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->


<!-- OTHER JS --> 
<script src="js/jquery.validate.js"></script>
<script src="js/jquery.placeholder.js"></script>
<script src="js/jquery.tweetable.min.js"></script> 
<script src="js/jquery.switch.min.js"></script>
<script src="js/quantity-bt.js"></script>
<script src="js/bootstrap.js"></script>
<script src="js/retina.js"></script>
<script src="js/owl.carousel.min.js"></script>
<script src="js/functions.js"></script>

<!-- FANCYBOX -->
<script src="js/fancybox/source/jquery.fancybox.pack.js?v=2.1.4" type="text/javascript"></script> 
<script src="js/fancybox/source/helpers/jquery.fancybox-media.js?v=1.0.5" type="text/javascript"></script> 
<script src="js/fancy_func.js" type="text/javascript"></script> 
</body>
</html>


