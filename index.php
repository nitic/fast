<?php session_start();?>
<?php require('fast_edit/fast_edit_login.php');
/* session start and login are REQUIRED at the very top of this file */
?>

<!DOCTYPE html>
<html lang="th">
<head>
<title>theringresidence.com :: เดอะริงค์เรสสิเด้นท์ หาดใหญ่</title>

<!-- Meta tag Keywords -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="the ring residence,hatyai hotel,โรงแรม หาดใหญ่,เดอะริงค์เรสสิเด้นท์, ที่พักหาดใหญ่"  />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
function hideURLbar(){ window.scrollTo(0,1); } </script>
<!--// Meta tag Keywords -->

<!-- css files -->
<link rel="stylesheet" href="css/bootstrap.min.css"> <!-- Bootstrap-Core-CSS -->
<link rel="stylesheet" href="css/style.css" type="text/css" media="all" /> <!-- Style-CSS -->
<link rel="stylesheet" href="css/font-awesome.min.css"> <!-- Font-Awesome-Icons-CSS -->

<link rel="stylesheet" href="fast_edit/styles/fast_edit.css" />

<!-- //css files -->




<!-- js -->
<script type="text/javascript" src="js/jquery-2.1.4.min.js"></script>
<script type="text/javascript" src="js/bootstrap.js"></script> <!-- Necessary-JavaScript-File-For-Bootstrap -->
<!-- //js -->
</head>
<body>

	<!-- start REQUIRED HTML for Admin Login -->
	<div class="admin-login">
		Admin Login: <img src="fast_edit/images/lock.png" alt="Admin Login" class="login">
		<div class="login-box">
			<form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>?action=login">
			Username:<br/><input type="text" name="name" size="15"/><br/>
			Password:<br/><input type="password" name="pass" size="15"/><br/>
			<input type="image" src="fast_edit/images/login.gif" name="submit_login" alt="Login" title="Login" class="login-submit"/>
			</form>
		</div>
	</div>
	<!-- end REQUIRED HTML for Admin Login -->


<!-- header -->
<div class="header">
	<div class="agile-top-header">
	<div class="banner-agile-top">
		<div class="number">
			<h3><i class="fa fa-phone" aria-hidden="true"></i> TEL. 074-801-344</h3>
		</div>
				<div class="clearfix"></div>
	</div>
		<div class="logo">
			<h1><a href="index.html">The Ring Residence<span>Hotel</span></a></h1>
		</div>
		<!-- navigation -->
		<div class="top-left">
			<div class="top-nav">
				<nav class="navbar navbar-default">
					<div class="navbar-header">
						<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
							<span class="sr-only">MENU</span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>

					</div>
					<!-- navbar-header -->
					<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
						 <nav class="linkEffects linkHoverEffect_2">
							<ul>
								<li><a href="index.html" data-link-alt="Home" class="active"><span>หน้าแรก</span></a></li>
								<li><a href="#services" data-link-alt="services" class="scroll"><span>บริการของเรา</span></a></li>
								<li><a href="#gallery" data-link-alt="Rooms" class="scroll"><span>ข้อมูลห้องพัก</span></a></li>
								<li><a href="#contact" data-link-alt="Contact Us" class="scroll"><span>ติดต่อสอบถาม</span></a></li>
							</ul>
						</nav>

					</div>
				</nav>
					<div class="clearfix"> </div>
				</div>

			</div>
			<div class="clearfix"> </div>
			<!-- //navigation -->
		</div>
	</div>
	<!--Slider-->
		<div class="slider">
			<div class="callbacks_container">
				<ul class="rslides" id="slider">
					<li>
						<div class="slider-info">
							   <div class="editable promotion">
									 	  <?php include($contentpage);?>
							   </div>
						</div>
					</li>
				</ul>
			</div>
			<div class="clearfix"></div>
</div>
		<!--//Slider-->

<!-- //header -->
<!-- /about -->
<div class="w3-aglile-about" id="about">
	<div class="w3-agile-about-grids">
		<div class="w3-aglie-about-grid1">
			<div class="col-md-6 w3-about-text-grid">
				<h3>เกี่ยวกับเรา</h3>
				<p>The Ring Residence ให้บริการที่พักในอำเภอหาดใหญ่ ที่พักให้บริการอินเทอร์เน็ตไร้สาย (WiFi) ฟรี ในทุกพื้นที่ของที่พัก มีพื้นที่จอดรถส่วนตัวฟรีในสถานที่ ห้องพักติดตั้งโทรทัศน์จอแบนระบบช่องรายการดาวเทียม มีกาต้มน้ำในห้องพัก ที่พักให้บริการเครื่องใช้ในห้องน้ำฟรีและเครื่องเป่าผมเพื่อความสะดวกสบายของผู้เข้าพัก </p>
				<h5>
						<i style="color:#8D8B8B" class="fa fa-wifi fa-3x" aria-hidden="true"></i>
						<i style="margin-left:25px;color:#8D8B8B" class="fa fa-television fa-3x" aria-hidden="true"></i>
						<i style="margin-left:25px;color:#8D8B8B" class="fa fa-car fa-3x" aria-hidden="true"></i>
				</h5>
			</div>
			<div class="col-md-6 w3-aglie-about-img-grid1">

			</div>
			<div class="clearfix"></div>
		</div>
		<div class="w3-aglie-about-grid2">
			<div class="col-md-4 w3-about-bg-text-grid">
			<div class="w3-about-bg-head">
			<h3>ภายในมีร้านสะดวกซื้อ</h3>
			</div>
			</div>

			<div class="col-md-4 w3-about-text1-grid">
			<div class="w3-about-text-heads">
				<h3>รีวิวจากผู้เข้าพักจริง</h3>
				<h4></h4>
				<p>"Very good value for money. Clean, modern, comfortable and quiet. Would highly recommend for a visitor to Hat Yai" -- Chris / www.agoda.com</p>
				<p>"Spacious modern rooms with all facilities needed. Great set up. Laundry facilities and groceries in house. Very helpful service and always available. Very friendly team." -- Philip / www.agoda.com</p>
				</div>
			</div>
			<div class="col-md-4 w3-about-img-grid">

			</div>
			<div class="clearfix"></div>
		</div>
		<div class="clearfix"></div>
	</div>
</div>
<!-- /about -->
<!-- /services -->
<div class="services" id="services">
	<div class="container">
	<div class="services-agile-head">
		<h3>บริการของเรา</h3>
	</div>
		<div class="w3-agile-grids">
			<div class="col-md-6 w3-agile-services-left">
				<div class="w3-services-text">
				<ul class="services-head">
					<li><h3>24 ชม.</h3></li>
				</ul>
					<p>มีแผนกต้อนรับเปิดตลอด 24 ชม. ณ ที่พัก เซ็นทรัลเฟสติวัลหาดใหญ่อยู่ห่างจาก The Ring Residence เป็นระยะทาง 4.1 กม. ในขณะที่ศูนย์การค้าหาดใหญ่พลาซ่าอยู่ห่างออกไปเป็นระยะทาง 1.6 กม. สนามบินนานาชาติหาดใหญ่อยู่ห่างจากที่พักเป็นระยะทาง 11 กม.</p>
				</div>
				<div class="col-md-4 services-icon1">
					<i class="fa fa-shopping-cart" aria-hidden="true"></i>
					<h4>เซ็นทรัลเฟสติวัลหาดใหญ่ 4.1 กม.</h4>
				</div>
				<div class="col-md-4 services-icon1">
					<i class="fa fa-shopping-bag" aria-hidden="true"></i>
					<h4>ศูนย์การค้าหาดใหญ่พลาซ่า 1.6 กม.</h4>
				</div>
				<div class="col-md-4 services-icon1">
						<i class="fa fa-plane" aria-hidden="true"></i>
					<h4>สนามบินนานาชาติหาดใหญ่ 11 กม.</h4>
				</div>

			</div>
			<div class="col-md-6 w3-agile-services-right">
				<img src="images/ab1.jpg" alt="services">
			</div>
			<div class="clearfix"></div>
		</div>
	</div>
</div>
<!-- //services-->
<!-- Gallery -->
<div id="gallery" class="gallery">
	<div class="container">
		<div class="agileits-gal-title">
			<h3>ข้อมูลห้องพัก</h3>
		</div>
		<div class="sap_tabs">
			<div id="horizontalTab">
				<ul class="resp-tabs-list">
					<li class="resp-tab-item"><span>ประเภทห้องพัก</span></li>
					<li class="resp-tab-item"><span>รูปภาพห้องพัก</span></li>
				</ul>
				<div class="clearfix"> </div>
				<div class="resp-tabs-container">
					<div class="tab-1 resp-tab-content">
						<div class="col-md-6 portfolio-grids">
								<div class="gallery-text-agile agile-offer1">
								<h3>เตียงคู่ (Double Bed)<span>950 บาท/ต่อคืน</span></h3>
								<p>Standard Double Room</p>
								<ul>
								<li>26 m²/280 ft²</li>
								<li>Balcony/terrace</li>
								<li>Size: 30m²</li>
								<li>Air conditioning ,Toiletries, Hair dryer, Kitchenette, Satellite/cable </li>
								<li>2 Beds</li>
								</ul>
								</div>
								</div>
								<div class="col-md-6 portfolio-grids offer-gal-images offer-gal-img1">
									<div class="offer-gallery-img1">
									</div>

								</div>
							<div class="clearfix"></div>
							<div class="col-md-6 portfolio-grids offer-gal-images offer-gal-img2">
								<div class="offer-gallery-img2">
									</div>
								</div>
								<div class="col-md-6 portfolio-grids">
								<div class="gallery-text-agile agile-offer1">
								<h3>เตียงเดี่ยว(Single Bed)<span>790 บาท/ต่อคืน</span></h3>
								<p>Standard Double Room</p>
								<ul>
									<li>26 m²/280 ft²</li>
									<li>Balcony/terrace</li>
									<li>Size: 30m²</li>
									<li>Air conditioning ,Toiletries, Hair dryer, Kitchenette, Satellite/cable </li>
									<li>1 king bed</li>
								</ul>
								</div>
								</div>
								<div class="clearfix"></div>
						</div>
					<div class="tab-2 resp-tab-content">
						<div class="col-md-6 portfolio-grids offer-gal-images offer-gal-img5">
									<div class="offer-gallery-img5">
									</div>
						</div>
						<div class="col-md-6 portfolio-grids offer-gal-images offer-gal-img5">
									<div class="offer-gallery-img3">
									</div>
						</div>

						<div class="clearfix"> </div>
						<div class="col-md-3 ice-cream-agile ice-cream-agile-img1 ">

						</div>
						<div class="col-md-3 ice-cream-agile ice-cream-agile-img2">

						</div>
						<div class="col-md-3 ice-cream-agile ice-cream-agile-img3">

						</div>
						<div class="col-md-3 ice-cream-agile ice-cream-agile-img4">

						</div>
						<div class="clearfix"> </div>
			     </div>
	</div>

</div>

</div>
</div>
</div>
<!-- //Gallery -->

	<!-- contact -->
<div class="contact" id="contact">
	<div class="contact-agileits-title">
		<h3>ติดต่อสอบถาม</h3>
	</div>
		<div class="map">

			<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d989.9858551887495!2d100.45428442919983!3d7.01593669968326!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x304d2863b4be5ce1%3A0x17e232918206ed7a!2sThering+Ressident!5e0!3m2!1sth!2s!4v1508231487098"></iframe>

			<div class="container">
				<div class="agileinfo_map_color">
					<div class="agileinfo_map_color_grid">
						<div class="col-md-6 contact-up">
							<div class="agileinfo_map_color_grid_left">
								<h4><i class="fa fa-home" aria-hidden="true"></i> สถานที่ตั้ง</h4>
							<p>17 ซอย 25/1 ถนนราษฎร์อุทิศ <span>อำเภอหาดใหญ่ จังหวัดสงขลา 90110</span></p>
							<p>+(66) 74-801-344</p>

							</div>
						</div>
						<div class="col-md-6 contact-up1">
							<div class="agileinfo_map_color_grid_left" style="background-color:#5a5e5c">
								<h4><i class="fa fa-envelope-o" aria-hidden="true"></i> Mail us</h4>
								<p><a href="mailto:support@theringresidence.com"> support@theringresidence.com</a></p>
								<h4>Ask Me on</h4>
								<ul class="map-top-icon">
								<li><i class="fa fa-facebook" aria-hidden="true"></i></li>
								</ul>
							</div>
						</div>
						<div class="clearfix"> </div>
					</div>
				</div>
			</div>
		</div>

</div>
<!-- //contact -->
<!--footer-->
<div class="footer-w3">
	<p>&copy; 2017 The Ring Residence Hotel. All rights reserved | Design by <a href="https://www.facebook.com/hatyaihousing/">HatyaiHousing</a></p>
</div>
<!--//footer-->

		<script src="js/easyResponsiveTabs.js" type="text/javascript"></script>
		<script type="text/javascript">
			$(document).ready(function () {
				$('#horizontalTab').easyResponsiveTabs({
					type: 'default', //Types: default, vertical, accordion
					width: 'auto', //auto or any width like 600px
					fit: true   // 100% fit in a container
				});
			});
		</script>
		<!-- //script for portfolio -->
	<!-- //For-Gallery-js -->

		 <!-- start-smoth-scrolling -->
				<script type="text/javascript" src="js/move-top.js"></script>
				<script type="text/javascript" src="js/easing.js"></script>
				<script type="text/javascript">
					jQuery(document).ready(function($) {
						$(".scroll").click(function(event){
							event.preventDefault();
							$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
						});
					});
				</script>
		<!-- start-smoth-scrolling -->
		<!-- smooth scrolling-bottom-to-top -->
				<script type="text/javascript">
					$(document).ready(function() {
					$().UItoTop({ easingType: 'easeOutQuart' });
					});
				</script>
				<a href="#" id="toTop" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>
				<script src="js/SmoothScroll.min.js"></script>


<!-- start REQUIRED fast edit include -->
		<?php include('fast_edit/fast_edit.php');?>
<!-- end REQUIRED fast edit include -->

				<!-- start REQUIRED scripts -->
<script src="fast_edit/js/jquery.cookie.js"></script>
<?php if (isset($_SESSION['username'])) { ?>
<script src="fast_edit/tinymce/tinymce/jscripts/tiny_mce/tiny_mce.js"></script>
<script src="fast_edit/js/fast_edit_toolbar.js"></script>
<?php } ?>
<script src="fast_edit/js/fast_edit_functions.js"></script>
<!-- end REQUIRED scripts -->

</body>
</html>
