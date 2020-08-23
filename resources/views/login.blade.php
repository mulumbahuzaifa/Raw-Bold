<!DOCTYPE html>
<html lang="en">
<head>
<title>TOP-STYLIST</title>
	<meta charset="UTF-8">
	<meta name="description" content=" TOP-STYLIST">
	<meta name="keywords" content="TOP-STYLIST, html">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
	<link rel="stylesheet" type="text/css" href="fonts/iconic/css/material-design-iconic-font.min.css">
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
	<link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
	<link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
	<link href="css/style.css?<?=filemtime("css/main.css")?>" rel="stylesheet" type="text/css" />
	<link href="css/style.css?<?=filemtime("css/style.css")?>" rel="stylesheet" type="text/css" />
	<link rel="stylesheet" href="css/bootstrap.min.css"/>
	<link rel="stylesheet" href="css/font-awesome.min.css"/>
	<link rel="stylesheet" href="css/flaticon.css"/>
	<link rel="stylesheet" href="css/slicknav.min.css"/>
	<link rel="stylesheet" href="css/jquery-ui.min.css"/>
	<link rel="stylesheet" href="css/owl.carousel.min.css"/>
	<link rel="stylesheet" href="css/animate.css"/>
	<link rel="stylesheet" href="css/style.css"/>
</head>
<body style="background-color: #999999;">
<!-- Page Preloder -->
<div id="preloder">
		<div class="loader"></div>
	</div>

	<!-- Header section -->
	<header class="header-section">
		<div class="header-top">
			<div class="">
				<div class="row">
					<div class="col-lg-2 text-center text-lg-left">
						<!-- logo -->
						<a href="./index.php" class="site-logo">
							<img src="img/logo.png" alt="">
						</a>
					</div>
					<div class="col-xl-6 col-lg-5">
						<form class="header-search-form">
							<input type="text" class="btn1" placeholder="Search on top-stylist ....">
							<button><i class="flaticon-search"></i></button>
						</form>
					</div>
					<div class="col-xl-4 col-lg-5">
						<div class="user-panel">
							<div class="up-item">
								<i class="flaticon-profile"></i>
								<a href="#">Sign</a> In or <a href="#">Create Account</a>
							</div>
							<div class="up-item">
								<div class="shopping-card">
									<i class="flaticon-bag"></i>
									<span>0</span>
								</div>
								<a href="#">Shopping Cart</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<nav class="main-navbar">
			<div class="container">
				<!-- menu -->
				<ul class="main-menu">
					<li><a href="./index.php">Home</a></li>
					<li><a href="women.blade.php">Women</a>
						<ul class="sub-menu">
							<li><a href="#">Midi Dresses </a></li>
							<li><a href="#">Maxi Dresses</a></li>
							<li><a href="#">Prom Dresses</a></li>
							<li><a href="#">Little Black Dresses </a></li>
							<li><a href="#">Mini Dresses</a></li>
						</ul></li>
					<li><a href="men.blade.php">Men</a>
						<ul class="sub-menu">
							<li><a href="#">jeans </a></li>
							<li><a href="#">Shirt</a></li>
							<li><a href="#">Sweater</a></li>
							<li><a href="#">shorts </a></li>
							<li><a href="#">suits</a></li>
							<li><a href="#">jumpers</a></li>
						</ul></li>
					<li><a href="jewelry.blade.php">Jewelry
						<span class="new">New</span>
					</a>
					<ul class="sub-menu">
						<li><a href="#">Watches </a></li>
						<li><a href="#">Glasses</a></li>
						<li><a href="#">neckleces</a></li>
						<li><a href="#">plastic-j </a></li>
						<li><a href="#">silver-j</a></li>
					</ul></li>
					<li><a href="shoes.blade.php" >Foot-wear</a>
						<ul class="sub-menu">
							<li><a href="#">Sneakers</a></li>
							<li><a href="#">Sandals</a></li>
							<li><a href="#">Formal Shoes</a></li>
							<li><a href="#">Boots</a></li>
							<li><a href="#">Flip Flops</a></li>
						</ul>
					</li>
					<li><a href="children.blade.php" class="active">Children
						<span class="new">New</span>
					</a>
					<ul class="sub-menu">
						<li><a href="#">girls </a></li>
						<li><a href="#">boys</a></li>
						<li><a href="#">baby-girl</a></li>
						<li><a href="#">baby-girl </a></li>
                    </ul></li>
					<li><a href="bags.blade.php">Bugs & Purse</a></li>
					<li><a href="contact.blade.php">ContactUs</a>
					</li>
					<li><a href="blog.blade.php">Blog</a></li>
				</ul>
			</div>
		</nav>
	</header>
	<!-- Header section end -->

	<div class="limiter">
		<div class="container-login100">
			<div class="login100-more" style="background-image: url('images/bg-01.jpg');"></div>

			<div class="wrap-login100 p-l-50 p-r-50 p-t-72 p-b-50">
				<form class="login100-form validate-form">
					<span class="login100-form-title p-b-59">
						Sign In
					</span>





					<div class="wrap-input100 validate-input" data-validate="Username is required">
						<span class="label-input100">Username</span>
						<input class="input100" type="text" name="username" placeholder="Username...">
						<span class="focus-input100"></span>
                    </div>
                    <div class="wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
						<span class="label-input100">Email</span>
						<input class="input100" type="text" name="email" placeholder="Email addess...">
						<span class="focus-input100"></span>
					</div>

					<div class="wrap-input100 validate-input" data-validate = "Password is required">
						<span class="label-input100">Password</span>
						<input class="input100" type="text" name="pass" placeholder="*************">
						<span class="focus-input100"></span>
					</div>



					<div class="container-login100-form-btn">
						<div class="wrap-login100-form-btn">
							<div class="login100-form-bgbtn"></div>
							<button class="login100-form-btn">
								Sign In
							</button>
						</div>

						<a href="signup.blade.php" class="dis-block txt3 hov1 p-r-30 p-t-10 p-b-10 p-l-30">
							Sign Up
							<i class="fa fa-long-arrow-right m-l-5"></i>
						</a>
					</div>
				</form>
			</div>
		</div>
	</div>
	<!-- Footer section -->
	<section class="footer-section">
		<div class="container">
			<div class="footer-logo text-center">
				<a href="index.html"><img src="./img/logo-light.png" alt=""></a>
			</div>
			<div class="row">
				<div class="col-lg-3 col-sm-6">
					<div class="footer-widget about-widget">
						<h2>About</h2>
						<p>Donec vitae purus nunc. Morbi faucibus erat sit amet congue mattis. Nullam frin-gilla faucibus urna, id dapibus erat iaculis ut. Integer ac sem.</p>
						<img src="img/cards.png" alt="">
					</div>
				</div>
				<div class="col-lg-3 col-sm-6">
					<div class="footer-widget about-widget">
						<h2>Questions</h2>
						<ul>
							<li><a href="">About Us</a></li>
							<li><a href="">Track Orders</a></li>
							<li><a href="">Returns</a></li>
							<li><a href="">Shipping</a></li>
							<li><a href="">Blog</a></li>
						</ul>
						<ul>
							<li><a href="">Partners</a></li>
							<li><a href="">FAQ</a></li>
							<li><a href="">Support</a></li>
							<li><a href="">Terms of Use</a></li>
							<li><a href="">Privacy</a></li>
						</ul>
					</div>
				</div>
				<div class="col-lg-3 col-sm-6">
					<div class="footer-widget about-widget">
						<h2>Questions</h2>
						<div class="fw-latest-post-widget">
							<div class="lp-item">
								<div class="lp-thumb set-bg" data-setbg="img/blog-thumbs/1.jpg"></div>
								<div class="lp-content">
									<h6>what shoes to wear</h6>
									<span>july 21, 2020</span>
									<a href="#" class="readmore">Read More</a>
								</div>
							</div>
							<div class="lp-item">
								<div class="lp-thumb set-bg" data-setbg="img/blog-thumbs/2.jpg"></div>
								<div class="lp-content">
									<h6>trends this year</h6>
									<span>july 21, 2020</span>
									<a href="#" class="readmore">Read More</a>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-lg-3 col-sm-6">
					<div class="footer-widget contact-widget">
						<h2>Questions</h2>
						<div class="con-info">
							<span>C.</span>
							<p>TOP-STYLIST BOUTIQUE</p>
						</div>
						<div class="con-info">
							<span>L.</span>
							<p>1481 kampala road,kamapla, P.O. BOX 68 </p>
						</div>
						<div class="con-info">
							<span>T.</span>
							<p>+256 704 880 439</p>
						</div>
						<div class="con-info">
							<span>E.</span>
							<p>topstylist@gmail.com</p>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="social-links-warp">
			<div class="container">
				<div class="social-links">
					<a href="" class="instagram"><i class="fa fa-instagram"></i><span>instagram</span></a>
					<a href="" class="google-plus"><i class="fa fa-google-plus"></i><span>g+plus</span></a>
					<a href="" class="pinterest"><i class="fa fa-pinterest"></i><span>pinterest</span></a>
					<a href="" class="facebook"><i class="fa fa-facebook"></i><span>facebook</span></a>
					<a href="" class="twitter"><i class="fa fa-twitter"></i><span>twitter</span></a>
					<a href="" class="youtube"><i class="fa fa-youtube"></i><span>youtube</span></a>
					<a href="" class="tumblr"><i class="fa fa-tumblr-square"></i><span>tumblr</span></a>
				</div>
			</div>
		</div>
	</section>
	<!-- Footer section end -->

	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
	<script src="vendor/animsition/js/animsition.min.js"></script>
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
	<script src="vendor/select2/select2.min.js"></script>
	<script src="vendor/daterangepicker/moment.min.js"></script>
	<script src="vendor/daterangepicker/daterangepicker.js"></script>
	<script src="vendor/countdowntime/countdowntime.js"></script>
	<script src="js/main.js"></script>

</body>
</html>
