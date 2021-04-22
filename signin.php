<?php
session_start();
if(isset($_SESSION["user_Email"])){
	echo "<script> window.location.assign('index.php') </script>";
}
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<title>RentAnything</title>
		<link rel="stylesheet" href="css/bootstrap.min.css"><!-- bootstrap-CSS -->
		<link rel="stylesheet" href="css/bootstrap-select.css"><!-- bootstrap-select-CSS -->
		<link href="css/style.css" rel="stylesheet" type="text/css" media="all" /><!-- style.css -->
		<link rel="stylesheet" href="css/flexslider.css" type="text/css" media="screen" /><!-- flexslider-CSS -->
		<link rel="stylesheet" href="css/font-awesome.min.css" /><!-- fontawesome-CSS -->
		<link rel="stylesheet" href="css/menu_sideslide.css" type="text/css" media="all"><!-- Navigation-CSS -->
		<!-- meta tags -->
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<meta name="keywords" content="Resale Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template,
		Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, Sony Ericsson, Motorola web design" />
		<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
		<!-- //meta tags -->
		<!--fonts-->
		<link href='//fonts.googleapis.com/css?family=Ubuntu+Condensed' rel='stylesheet' type='text/css'>
		<link href='//fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>
		<!--//fonts-->
		<!-- js -->
		<script type="text/javascript" src="js/jquery.min.js"></script>
		<!-- js -->
		<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
		<script src="js/bootstrap.js"></script>
		<script src="js/bootstrap-select.js"></script>
		<script>
		$(document).ready(function () {
		var mySelect = $('#first-disabled2');
		$('#special').on('click', function () {
		mySelect.find('option:selected').prop('disabled', true);
		mySelect.selectpicker('refresh');
		});
		$('#special2').on('click', function () {
		mySelect.find('option:disabled').prop('disabled', false);
		mySelect.selectpicker('refresh');
		});
		$('#basic2').selectpicker({
		liveSearch: true,
		maxOptions: 1
		});
		});
		</script>
		<!-- language-select -->
		<script type="text/javascript" src="js/jquery.leanModal.min.js"></script>
		<link href="css/jquery.uls.css" rel="stylesheet"/>
		<link href="css/jquery.uls.grid.css" rel="stylesheet"/>
		<link href="css/jquery.uls.lcd.css" rel="stylesheet"/>
		<!-- Source -->
		<script src="js/jquery.uls.data.js"></script>
		<script src="js/jquery.uls.data.utils.js"></script>
		<script src="js/jquery.uls.lcd.js"></script>
		<script src="js/jquery.uls.languagefilter.js"></script>
		<script src="js/jquery.uls.regionfilter.js"></script>
		<script src="js/jquery.uls.core.js"></script>
		<script>
					$( document ).ready( function() {
						$( '.uls-trigger' ).uls( {
							onSelect : function( language ) {
								var languageName = $.uls.data.getAutonym( language );
								$( '.uls-trigger' ).text( languageName );
							},
							quickList: ['en', 'hi', 'he', 'ml', 'ta', 'fr'] //FIXME
						} );
					} );
		</script>
		<!-- //language-select -->
	</head>
	<body>
		<!-- Navigation -->
		<div class="agiletopbar">
			<div class="wthreenavigation">
				<div class="menu-wrap">
					<nav class="menu">
						<div class="icon-list">
							<a href="mobiles.html"><i class="fa fa-fw fa-mobile"></i><span>Mobiles</span></a>
							<a href="electronics-appliances.html"><i class="fa fa-fw fa-laptop"></i><span>Electronics and appliances</span></a>
							<a href="cars.html"><i class="fa fa-fw fa-car"></i><span>Cars</span></a>
							<a href="bikes.html"><i class="fa fa-fw fa-motorcycle"></i><span>Bikes</span></a>
							<a href="furnitures.html"><i class="fa fa-fw fa-wheelchair"></i><span>Furnitures</span></a>
							<a href="pets.html"><i class="fa fa-fw fa-paw"></i><span>Pets</span></a>
							<a href="books-sports-hobbies.html"><i class="fa fa-fw fa-book"></i><span>Books, Sports & Hobbies</span></a>
							<a href="fashion.html"><i class="fa fa-fw fa-asterisk"></i><span>Fashion</span></a>
							<a href="kids.html"><i class="fa fa-fw fa-asterisk"></i><span>Kids</span></a>
							<a href="services.html"><i class="fa fa-fw fa-shield"></i><span>Services</span></a>
							<a href="jobs.html"><i class="fa fa-fw fa-at"></i><span>Jobs</span></a>
							<a href="real-estate.html"><i class="fa fa-fw fa-home"></i><span>Real Estate</span></a>
						</div>
					</nav>
					<button class="close-button" id="close-button">Close Menu</button>
				</div>
				<button class="menu-button" id="open-button"> </button>
			</div>
			<div class="clearfix"></div>
		</div>
		<!-- //Navigation -->
		<!-- header -->
		<header>
			<div class="w3ls-header"> <!--header-one-->
			<div class="w3ls-header-left">
				<p><a href="mobileapp.html"><i class="fa fa-download" aria-hidden="true"></i>Download Mobile App </a></p>
			</div>
			<div class="w3ls-header-right">
				<ul>
					<li class="dropdown head-dpdn">
						<a href="signin.php" aria-expanded="false"><i class="fa fa-user" aria-hidden="true"></i> Sign In</a>
					</li>
					<li class="dropdown head-dpdn">
						<a href="allAds.php" aria-expanded="false"><i class="fa fa-user" aria-hidden="true"></i> View All Ads</a>
					</li>
					<li class="dropdown head-dpdn">
						<a href="help.html"><i class="fa fa-question-circle" aria-hidden="true"></i> Help</a>
					</li>
					<li class="dropdown head-dpdn">
						<a href="#"><span class="active uls-trigger"><i class="fa fa-language" aria-hidden="true"></i>languages</span></a>
					</li>
					<li class="dropdown head-dpdn">
						<div class="header-right">
							<!-- Large modal -->
							<div class="selectregion">
								<button class="btn btn-primary" data-toggle="modal" data-target="#myModal">
								<i class="fa fa-globe" aria-hidden="true"></i>Select City</button>
								<div class="modal fade" id="myModal" tabindex="-1" role="dialog"
									aria-hidden="true">
									<div class="modal-dialog modal-lg">
										<div class="modal-content">
											<div class="modal-header">
												<button type="button" class="close" data-dismiss="modal" aria-hidden="true">
												&times;</button>
												<h4 class="modal-title" id="myModalLabel">
												Please Choose Your Location</h4>
											</div>
											<div class="modal-body">
												<form class="form-horizontal" action="#" method="get">
													<div class="form-group">
														<select id="basic2" class="show-tick form-control" multiple>
															<optgroup label="Popular Cities">
																<option selected style="display:none;color:#eee;">Select City</option>
																<option>Birmingham</option>
																<option>Anchorage</option>
																<option>Phoenix</option>
																<option>Little Rock</option>
																<option>Los Angeles</option>
																<option>Denver</option>
																<option>Bridgeport</option>
																<option>Wilmington</option>
																<option>Jacksonville</option>
																<option>Atlanta</option>
																<option>Honolulu</option>
																<option>Boise</option>
																<option>Chicago</option>
																<option>Indianapolis</option>
															</optgroup>
															<optgroup label="More Cities">
																<optgroup label="Alabama">
																	<option>Birmingham</option>
																	<option>Montgomery</option>
																	<option>Mobile</option>
																	<option>Huntsville</option>
																	<option>Tuscaloosa</option>
																</optgroup>
																<!--												--->
															</select>
														</div>
													</form>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</li>
					</ul>
				</div>
				<div class="clearfix"> </div>
			</div>
			<div class="container">
				<div class="agile-its-header">
					<div class="logo">
						<h1><a href="index.php"><span>Rent</span>Anything</a></h1>
					</div>
				
		</header>
		<!-- //header -->
		
		<!-- sign in form -->
		<section>
			<div id="agileits-sign-in-page" class="sign-in-wrapper">
				<div class="agileinfo_signin">
					<h3>Sign In</h3>
					<form action="#" method="POST">
						<input type="email" name="email" placeholder="Your Email" required="">
						<input type="password" name="Pass" placeholder="Password" required="">
						<input type="submit" value="SignIn" name="SignIn">
						<?php
						
						
						if(isset($_POST['SignIn'])){
						$conn = mysqli_connect("localhost","root","","rentanything")
						or die ("connection failed");
							$user = $_POST['email'];
											$pass = $_POST['Pass'];
										$sql= "SELECT  userEmail,userPassword FROM tbluser WHERE userEmail ='{$user}' AND userPassword= '{$pass}'";
										
													
						$result =mysqli_query($conn,$sql) or die ("Query failed.");
												
												if(mysqli_num_rows($result) > 0){
												while ($row = mysqli_fetch_assoc($result)){
													
													
						
													$_SESSION["user_Email"] =$row['userEmail'];
					
						
						 echo "<script> window.location.assign('index.php') </script>";
						}
}						
						else{
					echo '<div class ="alert alert-danger">Email and password are incorrect.</div';
					}
					}
					?>
					
					<div class="forgot-grid">
						<label class="checkbox"><input type="checkbox" name="checkbox">Remember me</label>
						<div class="forgot">
							<a href="#" data-toggle="modal" data-target="#myModal2">Forgot Password?</a>
						</div>
						<!-- Modal -->
						<div class="modal fade" id="myModal2" role="dialog">
							<div class="modal-dialog">
								<!-- Modal content-->
								<div class="modal-dialog modal-lg">
									<div class="modal-content">
										<div class="modal-header">
											<button type="button" class="close" data-dismiss="modal">&times;</button>
											<h3 class="w3ls-password">Get Password</h3>
											<p class="get-pw">Enter your email address below and we'll send you an email with instructions.</p>
							
											
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="clearfix"> </div>
					</div>
				</form>
				<h6> Not a Member Yet? <a href="signup.php">Sign Up Now</a> </h6>
			</div>
		</div>
	</section>
	<!-- //sign in form  END -->
	<!--footer section start-->
	<footer>
		<div class="w3-agileits-footer-top">
			<div class="container">
				<div class="wthree-foo-grids">
					<div class="col-md-3 wthree-footer-grid">
						<h4 class="footer-head">Who We Are</h4>
						<p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.</p>
						<p>The point of using Lorem Ipsum is that it has a more-or-less normal letters, as opposed to using 'Content here.</p>
					</div>
					<div class="col-md-3 wthree-footer-grid">
						<h4 class="footer-head">Help</h4>
						<ul>
							<li><a href="howitworks.html"><i class="fa fa-long-arrow-right" aria-hidden="true"></i>How it Works</a></li>
							<li><a href="sitemap.html"><i class="fa fa-long-arrow-right" aria-hidden="true"></i>Sitemap</a></li>
							<li><a href="faq.html"><i class="fa fa-long-arrow-right" aria-hidden="true"></i>Faq</a></li>
							<li><a href="feedback.html"><i class="fa fa-long-arrow-right" aria-hidden="true"></i>Feedback</a></li>
							<li><a href="contact.html"><i class="fa fa-long-arrow-right" aria-hidden="true"></i>Contact</a></li>
							<li><a href="typography.html"><i class="fa fa-long-arrow-right" aria-hidden="true"></i>Short codes</a></li>
							<li><a href="icons.html"><i class="fa fa-long-arrow-right" aria-hidden="true"></i>Icons Page</a></li>
						</ul>
					</div>
					<div class="col-md-3 wthree-footer-grid">
						<h4 class="footer-head">Information</h4>
						<ul>
							<li><a href="regions.html"><i class="fa fa-long-arrow-right" aria-hidden="true"></i>Locations Map</a></li>
							<li><a href="terms.html"><i class="fa fa-long-arrow-right" aria-hidden="true"></i>Terms of Use</a></li>
							<li><a href="popular-search.html"><i class="fa fa-long-arrow-right" aria-hidden="true"></i>Popular searches</a></li>
							<li><a href="privacy.html"><i class="fa fa-long-arrow-right" aria-hidden="true"></i>Privacy Policy</a></li>
						</ul>
					</div>
					<div class="col-md-3 wthree-footer-grid">
						<h4 class="footer-head">Contact Us</h4>
						<span class="hq">Our headquarters</span>
						<address>
							<ul class="location">
								<li><span class="glyphicon glyphicon-map-marker"></span></li>
								<li>CENTER FOR FINANCIAL ASSISTANCE TO DEPOSED Mirpurkhas</li>
							</ul>
							<div class="clearfix"> </div>
							<ul class="location">
								<li><span class="glyphicon glyphicon-earphone"></span></li>
								<li>+0 561 111 235</li>
							</ul>
							<div class="clearfix"> </div>
							<ul class="location">
								<li><span class="glyphicon glyphicon-envelope"></span></li>
								<li><a href="mailto:info@example.com">mail@example.com</a></li>
							</ul>
						</address>
					</div>
					<div class="clearfix"></div>
				</div>
			</div>
		</div>
		<div class="agileits-footer-bottom text-center">
			<div class="container">
				<div class="w3-footer-logo">
					<h1><a href="index.html"><span>Rent</span>Anything</a></h1>
				</div>
				<div class="w3-footer-social-icons">
					<ul>
						<li><a class="facebook" href="#"><i class="fa fa-facebook" aria-hidden="true"></i><span>Facebook</span></a></li>
						<li><a class="twitter" href="#"><i class="fa fa-twitter" aria-hidden="true"></i><span>Twitter</span></a></li>
						<li><a class="flickr" href="#"><i class="fa fa-flickr" aria-hidden="true"></i><span>Flickr</span></a></li>
						<li><a class="googleplus" href="#"><i class="fa fa-google-plus" aria-hidden="true"></i><span>Google+</span></a></li>
						<li><a class="dribbble" href="#"><i class="fa fa-dribbble" aria-hidden="true"></i><span>Dribbble</span></a></li>
					</ul>
				</div>
				<div class="copyrights">
					<p> © 2021 RentAnything. All Rights Reserved | Design by RentAnthing <a href="index.php"> RentAnything</a></p>
				</div>
				<div class="clearfix"></div>
			</div>
		</div>
	</footer>
	<!--footer section end-->
</body>
<!-- Navigation-JavaScript -->
<script src="js/classie.js"></script>
<script src="js/main.js"></script>
<!-- //Navigation-JavaScript -->
<!-- start of js slider -->
<script type="text/javascript" src="js/jquery.flexisel.js"></script><!-- flexisel-js -->
<script type="text/javascript">
	$(window).load(function() {
		$("#flexiselDemo3").flexisel({
			visibleItems:1,
			animationSpeed: 1000,
			autoPlay: true,
					autoPlaySpeed: 5000,
			pauseOnHover: true,
			enableResponsiveBreakpoints: true,
			responsiveBreakpoints: {
				portrait: {
					changePoint:480,
					visibleItems:1
				},
				landscape: {
					changePoint:640,
					visibleItems:1
				},
				tablet: {
					changePoint:768,
					visibleItems:1
				}
			}
		});
		
	});
</script>
<!-- Slider-JavaScript -->
<script src="js/responsiveslides.min.js"></script>
<script>
	$(function () {
$("#slider").responsiveSlides({
	auto: true,
	pager: false,
	nav: true,
	speed: 500,
	maxwidth: 800,
	namespace: "large-btns"
});
});
</script>
<!-- //Slider-JavaScript --> <!-- end of slider js -->
<!-- here stars scrolling icon -->
<script type="text/javascript">
	$(document).ready(function() {
		/*
			var defaults = {
			containerID: 'toTop', // fading element id
			containerHoverID: 'toTopHover', // fading element hover id
			scrollSpeed: 1200,
			easingType: 'linear'
			};
		*/
							
		$().UItoTop({ easingType: 'easeOutQuart' });
							
		});
</script>
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
<!-- //here ends scrolling icon -->
</html>
