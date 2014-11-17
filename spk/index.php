<?php
error_reporting(E_ERROR | E_PARSE);
include("/database/db.php");
include ("/function/function.php");
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

	<div id="top-wizard">
		<strong>Progress <span id="location"></span></strong>
		<div id="progressbar"></div>
		<div class="shadow"></div>
	</div><!-- end top-wizard -->
    
	<form name="example-1" id="wrapped" action="proceed1.php" method="POST" />
		<div id="middle-wizard">
		<?php	
				$stat=$_GET['stat'];
				if($stat!=''){
					if($stat=='sistemkontrak'){
						echo"<div id='error'> Anda belum memilih sistem kontrak! </div>";
					}
					else if($stat=='sistembulan'){
						echo"<div id='error'> Anda belum memilih biaya sistem kontrak per bulan! </div>";
					}
					else if($stat=='sistemsmt'){
						echo"<div id='error'> Anda belum memilih biaya sistem kontrak per semester!</div>";
					}
					else if($stat=='sistemthn'){
						echo"<div id='error'> Anda belum memilih biaya sistem kontrak per tahun! </div>";
					}
					else if($stat=='jarak'){
						echo"<div id='error'> Anda belum memilih jarak dari rumah kos ke kampus! </div>";
					}
					else if($stat=='sistemterms'){
						echo"<div id='error'> Anda harus menyetujui terms and condition terlebih dahulu </div>";
					}
					else if($stat=='sistemnama'){
						echo"<div id='error'> Anda harus mengisikan nama anda terlebih dahulu</div>";
					}
					else if($stat=='sistemcourse'){
						echo"<div id='error'> Anda harus mengisikan jurusan anda terlebih dahulu</div>";
					}
					else if($stat=='sistememail'){
						echo"<div id='error'> Anda harus mengisikan email anda terlebih dahulu</div>";
					}
					else if($stat=='sistemjk'){
						echo"<div id='error'> Jenis kelamin harus diisi terlebih dahulu</div>";
					}
				}
				?>
				<br>
			<div class="step">
				<div class="row">
					<h3 class="col-md-10">Enter your personal info</h3>
					<div class="col-md-6">
						<ul class="data-list">
							<li><input type="text" name="firstname" class="required form-control" placeholder="First name" /></li>
							<li><input type="text" name="lastname" class="required form-control" placeholder="Last name" /></li>
							<li><input type="email" name="email" class="required form-control" placeholder="Your Email" /></li>
						</ul>
					</div><!-- end col-md-6 -->
                    
					<div class="col-md-6">
                    
						
                      
						<ul class="data-list bottom clearfix">
							<li id="age"><input type="text" name="age" class="required form-control" placeholder="Age" style="width:90px"/></li>
							<li id="age"><input type="text" name="course" class="required form-control" placeholder="Course" style="width:270px"/></li>
							<li><input name="jk" type="radio"  value="M" class="css-checkbox" id="radio1"/><label for="radio1" class="css-label radGroup1"> Male</label>
							</li>
							<li><input name="jk" type="radio"  value="F" class="css-checkbox" id="radio2"/><label for="radio2" class="css-label radGroup1"> Female</label>
							</li>
						</ul>
                        
					</div><!-- end col-md-6 -->
				</div><!-- end row -->
                
				<div class="row">
					<div class="col-md-4 col-md-offset-4">
						<ul class="data-list" id="terms">
							<li>
                            <strong>Do you accept <a href="#" data-toggle="modal" data-target="#terms-txt">terms and conditions</a> ?</strong>
							<div style="position:relative">
								<select class=" example-1 required" name="terms">
									<option value="" />No
									<option value="Accepted" />Yes
								</select>
							</div>
							</li>
						</ul>
					</div>
				</div>
                
			</div><!-- end step-->
            
			<div class="step row">
				<div class="col-md-10" id="a">
					<h3>Sistem kontrak seperti apa yang anda inginkan saat menyewa rumah kost?</h3>
					<ul class="data-list-2">
						<li><input name="kontrak" type="radio"  value="bulanan" class="css-checkbox" id="radio3"/><label for="radio3" class="css-label radGroup1"> Per Bulan </label></li>
						<li><input name="kontrak" type="radio"  value="smt" class="css-checkbox" id="radio4"/><label for="radio4" class="css-label radGroup1">Per Semester</label></li>
						<li><input name="kontrak" type="radio"  value="thn" class="css-checkbox" id="radio5"/><label for="radio5" class="css-label radGroup1">Per Tahun</label></li>
					</ul>
				</div>
			</div>
			
			<div class="step row">
				<div id="biayabulan" class="col-md-10" >
					<h3>Berapa biaya maksimal yang anda inginkan per bulan untuk menyewa rumah kost?</h3>
					<ul class="data-list-2">
						<li><input name="bulan" type="radio"  value="100-500" class="css-checkbox" id="radio6"/><label for="radio6" class="css-label radGroup1">< Rp.500.000</label></li>
						<li><input name="bulan" type="radio"  value="501-1000" class="css-checkbox" id="radio7"/><label for="radio7" class="css-label radGroup1">Rp 500.000 - Rp.1.000.000</label></li>
						<li><input name="bulan" type="radio"  value=">1000" class="css-checkbox" id="radio8"/><label for="radio8" class="css-label radGroup1">> Rp.1.000.000</label></li>
					</ul>
				</div>
				<div id="biayasmt" class="col-md-10" >
					<h3>Berapa biaya maksimal yang anda inginkan per semester untuk menyewa rumah kost?</h3>
					<ul class="data-list-2">
						<li><input name="smt" type="radio"  value="<3000" class="css-checkbox"="required" id="radio9"/><label for="radio9" class="css-label radGroup1">< Rp.3.000.000</label></li>
						<li><input name="smt" type="radio"  value="3000-6000" class="css-checkbox" id="radio10"/><label for="radio10" class="css-label radGroup1">Rp 3.000.000 - Rp 6.000.000</label></li>
						<li><input name="smt" type="radio"  value=">6000" class="css-checkbox" id="radio11"/><label for="radio11" class="css-label radGroup1">> Rp.6.000.000</label></li>
					</ul>
				</div>
				<div id="biayathn" class="col-md-10" >
					<h3>Berapa biaya maksimal yang anda inginkan per tahun untuk menyewa rumah kost?</h3>
					<ul class="data-list-2">
						<li><input name="thn" type="radio"  value="<5000" class="css-checkbox"id="radio12"/><label for="radio12" class="css-label radGroup1"> < Rp.5.000.000</label></li>
						<li><input name="thn" type="radio" value="5000-10000" class="css-checkbox"id="radio13"/><label for="radio13" class="css-label radGroup1"> Rp 5.000.000 - Rp 10.000.000</label></li>
						<li><input name="thn" type="radio" value=">10000" class="css-checkbox" id="radio14"/><label for="radio14" class="css-label radGroup1">> Rp.10.000.000</label></li>
					</ul>
				</div>
		      </div><!-- end step -->
			  
            
			<div class="step row">
				<div class="col-md-10">
					<h3>Berapa jarak ideal dari kos ke kampus yang anda inginkan ?</h3>
					<ul class="data-list-2">
					<!-- Squared TWO -->
						<li><input name="jarak" type="radio"  value="<0.5" class="css-checkbox" id="radio15"/><label for="radio15" class="css-label radGroup1"> < 500 m</label></li>
						<li><input name="jarak" type="radio"  value="0.5-1" class="css-checkbox" id="radio16"/><label for="radio16" class="css-label radGroup1">500 - 1 km</label></li>
						<li><input name="jarak" type="radio"  value="1-1.5" class="css-checkbox" id="radio17"/><label for="radio17" class="css-label radGroup1">1 - 1.5 km</label></li>
						<li><input name="jarak" type="radio"  value="1-1.5" class="css-checkbox" id="radio18"/><label for="radio18" class="css-label radGroup1">1.5 - 2 km</label></li>
						<li><input name="jarak" type="radio"  value="1-1.5" class="css-checkbox" id="radio19"/><label for="radio19" class="css-label radGroup1">> 2 km</label></li>
					</ul>
				</div>
			</div><!-- end step -->
            
			<div class="step row">
				<div class="col-md-10">
					<h3>Fasilitas apa saja yang anda inginkan pada rumah kos?</h3>
					<ul class="data-list-2 clearfix">
						<li><input name="question_2[]" type="checkbox" class="required" value="tempat tidur" /><font size="3px"> &nbsp Tempat Tidur</font></li>
						<li><input name="question_2[]" type="checkbox" class="required" value="lemari pakaian" /><font size="3px"> &nbsp Lemari Pakaian </font> </li>
						<li><input name="question_2[]" type="checkbox" class="required" value="meja belajar" /><font size="3px"> &nbsp Meja Belajar </font></li>
						<li><input name="question_2[]" type="checkbox" class="required" value="kamar mandi luar" /><font size="3px"> &nbsp Kamar Mandi Luar</font></li>
						<li><input name="question_2[]" type="checkbox" class="required" value="kamar mandi dalam" /><font size="3px"> &nbsp Kamar Mandi Dalam</font></li>
						<li><input name="question_3[]" type="checkbox" class="required" value="internet" /><font size="3px">&nbsp Internet </font></li>
						<li><input name="question_3[]" type="checkbox" class="required" value="cucian" /><font size="3px">&nbsp Cucian </font></li>
						<li><input name="question_3[]" type="checkbox" class="required" value="dapur" /><font size="3px">&nbsp Dapur </font></li>
						<li><input name="question_3[]" type="checkbox" class="required" value="air panas" /><font size="3px">&nbsp Air Panas</font></li>
						<li><input name="question_3[]" type="checkbox" class="required" value="ruang tamu" /><font size="3px">&nbsp Ruang Tamu</font></li>
					</ul>
				</div>
			</div><!-- end step -->
            
			<div class="submit step" id="complete">
                    	<i class="icon-check"></i>
						<h3>You've answered all the questions needed</h3>
						<button type="submit" name="process" class="submit">Proceed and got your boarding house</button>
			</div><!-- end submit step -->
            
		</div><!-- end middle-wizard -->
        
		<div id="bottom-wizard">
			<button type="button" name="backward" class="backward">Backward</button>
			<button type="button" name="forward" class="forward">Forward </button>
		</div><!-- end bottom-wizard -->
	</form>
    
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
		<p align="justify">
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