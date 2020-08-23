@extends('layouts.static')

<body>
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
                            <input type="text" class="btn1" placeholder="Search on Raw & Bold ....">
                            <button><i class="fas fa-search"></i></button>
                        </form>
                    </div>
                    <div class="col-xl-4 col-lg-5">
                        <div class="user-panel">
                            <div class="up-item">

                                @if (Route::has('login'))
                                    <div class="top-right links">
                                        @auth
                                            <a href="{{ url('/home') }}">Home</a>
                                        @else

                                            <a href="{{ route('login') }}" style="margin-right: 30px"><i class="fas fa-user"></i>Login</a>

                                            @if (Route::has('register'))
                                                <a href="{{ route('register') }}" ><i class="fas fa-user-plus"></i>Register</a>
                                            @endif
                                        @endauth
                                    </div>
                                @endif
                            </div>
                            <div class="up-item">
                                <div class="shopping-card">
                                    <a href="#" id="heart" style="margin-right: 30px;">
                                        <i class="fas fa-heart heart"></i>
                                        <span>0</span>
                                    </a>
                                    <a href="cart.blade.php" id="cart">
                                        <i class="fas fa-cart-plus cart"></i>
                                        <span>0</span>
                                    </a>
                                </div>
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


	<!-- Page info -->
	<div class="page-top-info">
		<div class="container">
			<h4>children wear PAGE</h4>
			<div class="site-pagination">
				<a href="./index.php">Home</a> /
				<a href=""> children wear</a> /
			</div>
		</div>
	</div>
	<!-- Page info end -->


	<!-- Category section -->
	<section class="category-section spad">
		<div class="container">
			<div class="row">
				<div class="col-lg-3 order-2 order-lg-1">
					<div class="filter-widget">
						<h2 class="fw-title">Categories</h2>
						<ul class="category-menu">

							<li><a href="./women.html">Woman wear</a>
								<ul class="sub-menu">
									<li><a href="#">Midi Dresses <span>(2)</span></a></li>
									<li><a href="">Maxi Dresses<span>(56)</span></a></li>
									<li><a href="">Prom Dresses<span>(36)</span></a></li>
									<li><a href="">Little Black Dresses <span>(27)</span></a></li>
									<li><a href="">Mini Dresses<span>(19)</span></a></li>
								</ul>
							</li>
							<li><a href="./men.html" >Man Wear</a>
								<ul class="sub-menu">
									<li><a href="" >jeans<span>(56)</span></a></li>
                                    <li><a href="" >Shirt<span>(36)</span></a></li>
									<li><a href="" >Sweater <span>(2)</span></a></li>
                                    <li><a href="" >suits<span>(36)</span></a></li>
                                    <li><a href="" >jumpers<span>(36)</span></a></li>
								</ul></li>
                            <li><a href="./children.html" class="active">Children</a>
                                <ul class="sub-menu">
									<li><a href="" class="bt3">boys<span>(56)</span></a></li>
                                    <li><a href="" class="bt3">girls<span>(36)</span></a></li>
									<li><a href="" class="bt3">baby-girl <span>(2)</span></a></li>
                                    <li><a href="" class="bt3">baby-boy<span>(36)</span></a></li>
                                </ul></li>
                                <li><a href="./shoes.html" >Footwear</a>
                                    <ul class="sub-menu">
                                        <li><a href="" >Sneakers<span>(56)</span></a></li>
                                        <li><a href="" >Sandals<span>(36)</span></a></li>
                                        <li><a href="" >Formal Shoes <span>(2)</span></a></li>
                                        <li><a href="" >Boots<span>(36)</span></a></li>
                                        <li><a href="" >Flip Flops<span>(36)</span></a></li>
                                    </ul></li>
							<li><a href="./bags.html">Bags & Purses</a></li>
                            <li><a href="./jewelry.html" >Jewelry</a>
                                <ul class="sub-menu">
									<li><a href="" >Watches<span>(56)</span></a></li>
                                    <li><a href="" >glasses<span>(36)</span></a></li>
									<li><a href="" >neckleces <span>(2)</span></a></li>
                                    <li><a href="" >ankleleces<span>(36)</span></a></li>
                                    <li><a href="" >silver-j<span>(36)</span></a></li>
								</ul></li>
						</ul>
					</div>
					<div class="filter-widget mb-0">
						<h2 class="fw-title">refine by</h2>
						<div class="price-range-wrap">
							<h4>Price</h4>
                            <div class="price-range ui-slider ui-corner-all ui-slider-horizontal ui-widget ui-widget-content" data-min="10" data-max="270">
								<div class="ui-slider-range ui-corner-all ui-widget-header" style="left: 0%; width: 100%;"></div>
								<span tabindex="0" class="ui-slider-handle ui-corner-all ui-state-default" style="left: 0%;">
								</span>
								<span tabindex="0" class="ui-slider-handle ui-corner-all ui-state-default" style="left: 100%;">
								</span>
							</div>
							<div class="range-slider">
                                <div class="price-input">
                                    <input type="text" id="minamount">
                                    <input type="text" id="maxamount">
                                </div>
                            </div>
                        </div>
					</div>
					<div class="filter-widget mb-0">
						<h2 class="fw-title">color by</h2>
						<div class="fw-color-choose">
							<div class="cs-item">
								<input type="radio" name="cs" id="gray-color">
								<label class="cs-gray" for="gray-color">
									<span>(3)</span>
								</label>
							</div>
							<div class="cs-item">
								<input type="radio" name="cs" id="orange-color">
								<label class="cs-orange" for="orange-color">
									<span>(25)</span>
								</label>
							</div>
							<div class="cs-item">
								<input type="radio" name="cs" id="yollow-color">
								<label class="cs-yollow" for="yollow-color">
									<span>(112)</span>
								</label>
							</div>
							<div class="cs-item">
								<input type="radio" name="cs" id="green-color">
								<label class="cs-green" for="green-color">
									<span>(75)</span>
								</label>
							</div>
							<div class="cs-item">
								<input type="radio" name="cs" id="purple-color">
								<label class="cs-purple" for="purple-color">
									<span>(9)</span>
								</label>
							</div>
							<div class="cs-item">
								<input type="radio" name="cs" id="blue-color" checked="">
								<label class="cs-blue" for="blue-color">
									<span>(29)</span>
								</label>
							</div>
						</div>
					</div>
					<div class="filter-widget mb-0">
						<h2 class="fw-title">Size</h2>
						<div class="fw-size-choose">
							<div class="sc-item">
								<input type="radio" name="sc" id="xs-size">
								<label for="xs-size">XS</label>
							</div>
							<div class="sc-item">
								<input type="radio" name="sc" id="s-size">
								<label for="s-size">S</label>
							</div>
							<div class="sc-item">
								<input type="radio" name="sc" id="m-size"  checked="">
								<label for="m-size">M</label>
							</div>
							<div class="sc-item">
								<input type="radio" name="sc" id="l-size">
								<label for="l-size">L</label>
							</div>
							<div class="sc-item">
								<input type="radio" name="sc" id="xl-size">
								<label for="xl-size">XL</label>
							</div>
							<div class="sc-item">
								<input type="radio" name="sc" id="xxl-size">
								<label for="xxl-size">XXL</label>
							</div>
						</div>
					</div>
					<div class="filter-widget">
						<h2 class="fw-title">Brand</h2>
						<ul class="category-menu">
							<li><a href="#" class="bt3">Abercrombie & Fitch <span>(2)</span></a></li>
							<li><a href="#" class="bt3">Asos<span>(56)</span></a></li>
							<li><a href="#" class="bt3">Bershka<span>(36)</span></a></li>
							<li><a href="#" class="bt3">Missguided<span>(27)</span></a></li>
							<li><a href="#" class="bt3">Zara<span>(19)</span></a></li>
						</ul>
					</div>
				</div>

				<div class="col-lg-9  order-1 order-lg-2 mb-5 mb-lg-0">
					<div class="row">
						<div class="col-lg-4 col-sm-6">
							<div class="product-item">
								<div class="pi-pic">
									<div class="tag-sale">ON SALE</div>
									<img src="./img/product/6.jpg" alt="">
									<div class="pi-links">
										<a href="#" class="add-card"><i class="flaticon-bag"></i><span>ADD TO CART</span></a>
										<a href="#" class="wishlist-btn"><i class="flaticon-heart"></i></a>
									</div>
								</div>
								<div class="pi-text">
									<h6>$35,00</h6>
									<p>Black and White Stripes Dress</p>
								</div>
							</div>
						</div>
						<div class="col-lg-4 col-sm-6">
							<div class="product-item">
								<div class="pi-pic">
									<img src="./img/product/7.jpg" alt="">
									<div class="pi-links">
										<a href="#" class="add-card"><i class="flaticon-bag"></i><span>ADD TO CART</span></a>
										<a href="#" class="wishlist-btn"><i class="flaticon-heart"></i></a>
									</div>
								</div>
								<div class="pi-text">
									<h6>$35,00</h6>
									<p>Flamboyant Pink Top</p>
								</div>
							</div>
						</div>
						<div class="col-lg-4 col-sm-6">
							<div class="product-item">
								<div class="pi-pic">
									<img src="./img/product/8.jpg" alt="">
									<div class="pi-links">
										<a href="#" class="add-card"><i class="flaticon-bag"></i><span>ADD TO CART</span></a>
										<a href="#" class="wishlist-btn"><i class="flaticon-heart"></i></a>
									</div>
								</div>
								<div class="pi-text">
									<h6>$35,00</h6>
									<p>Flamboyant Pink Top </p>
								</div>
							</div>
						</div>
						<div class="col-lg-4 col-sm-6">
							<div class="product-item">
								<div class="pi-pic">
									<img src="./img/product/10.jpg" alt="">
									<div class="pi-links">
										<a href="#" class="add-card"><i class="flaticon-bag"></i><span>ADD TO CART</span></a>
										<a href="#" class="wishlist-btn"><i class="flaticon-heart"></i></a>
									</div>
								</div>
								<div class="pi-text">
									<h6>$35,00</h6>
									<p>Black and White Stripes Dress</p>
								</div>
							</div>
						</div>
						<div class="col-lg-4 col-sm-6">
							<div class="product-item">
								<div class="pi-pic">
									<img src="./img/product/11.jpg" alt="">
									<div class="pi-links">
										<a href="#" class="add-card"><i class="flaticon-bag"></i><span>ADD TO CART</span></a>
										<a href="#" class="wishlist-btn"><i class="flaticon-heart"></i></a>
									</div>
								</div>
								<div class="pi-text">
									<h6>$35,00</h6>
									<p>Flamboyant Pink Top</p>
								</div>
							</div>
						</div>
						<div class="col-lg-4 col-sm-6">
							<div class="product-item">
								<div class="pi-pic">
									<img src="./img/product/12.jpg" alt="">
									<div class="pi-links">
										<a href="#" class="add-card"><i class="flaticon-bag"></i><span>ADD TO CART</span></a>
										<a href="#" class="wishlist-btn"><i class="flaticon-heart"></i></a>
									</div>
								</div>
								<div class="pi-text">
									<h6>$35,00</h6>
									<p>Flamboyant Pink Top </p>
								</div>
							</div>
						</div>
						<div class="col-lg-4 col-sm-6">
							<div class="product-item">
								<div class="pi-pic">
									<img src="./img/product/5.jpg" alt="">
									<div class="pi-links">
										<a href="#" class="add-card"><i class="flaticon-bag"></i><span>ADD TO CART</span></a>
										<a href="#" class="wishlist-btn"><i class="flaticon-heart"></i></a>
									</div>
								</div>
								<div class="pi-text">
									<h6>$35,00</h6>
									<p>Flamboyant Pink Top</p>
								</div>
							</div>
						</div>
						<div class="col-lg-4 col-sm-6">
							<div class="product-item">
								<div class="pi-pic">
									<img src="./img/product/9.jpg" alt="">
									<div class="pi-links">
										<a href="#" class="add-card"><i class="flaticon-bag"></i><span>ADD TO CART</span></a>
										<a href="#" class="wishlist-btn"><i class="flaticon-heart"></i></a>
									</div>
								</div>
								<div class="pi-text">
									<h6>$35,00</h6>
									<p>Flamboyant Pink Top</p>
								</div>
							</div>
						</div>
						<div class="col-lg-4 col-sm-6">
							<div class="product-item">
								<div class="pi-pic">
									<img src="./img/product/1.jpg" alt="">
									<div class="pi-links">
										<a href="#" class="add-card"><i class="flaticon-bag"></i><span>ADD TO CART</span></a>
										<a href="#" class="wishlist-btn"><i class="flaticon-heart"></i></a>
									</div>
								</div>
								<div class="pi-text">
									<h6>$35,00</h6>
									<p>Flamboyant Pink Top </p>
								</div>
							</div>
						</div>
						<div class="col-lg-4 col-sm-6">
							<div class="product-item">
								<div class="pi-pic">
									<div class="tag-new">new</div>
									<img src="./img/product/2.jpg" alt="">
									<div class="pi-links">
										<a href="#" class="add-card"><i class="flaticon-bag"></i><span>ADD TO CART</span></a>
										<a href="#" class="wishlist-btn"><i class="flaticon-heart"></i></a>
									</div>
								</div>
								<div class="pi-text">
									<h6>$35,00</h6>
									<p>Black and White Stripes Dress</p>
								</div>
							</div>
						</div>
						<div class="col-lg-4 col-sm-6">
							<div class="product-item">
								<div class="pi-pic">
									<img src="./img/product/3.jpg" alt="">
									<div class="pi-links">
										<a href="#" class="add-card"><i class="flaticon-bag"></i><span>ADD TO CART</span></a>
										<a href="#" class="wishlist-btn"><i class="flaticon-heart"></i></a>
									</div>
								</div>
								<div class="pi-text">
									<h6>$35,00</h6>
									<p>Flamboyant Pink Top </p>
								</div>
							</div>
						</div>
						<div class="col-lg-4 col-sm-6">
							<div class="product-item">
								<div class="pi-pic">
									<img src="./img/product/4.jpg" alt="">
									<div class="pi-links">
										<a href="#" class="add-card"><i class="flaticon-bag"></i><span>ADD TO CART</span></a>
										<a href="#" class="wishlist-btn"><i class="flaticon-heart"></i></a>
									</div>
								</div>
								<div class="pi-text">
									<h6>$35,00</h6>
									<p>Flamboyant Pink Top </p>
								</div>
							</div>
						</div>
						<div class="text-center w-100 pt-3">
							<button class="site-btn sb-line sb-dark">LOAD MORE</button>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- Category section end -->




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



	<!--====== Javascripts & Jquery ======-->
	<script src="js/jquery-3.2.1.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/jquery.slicknav.min.js"></script>
	<script src="js/owl.carousel.min.js"></script>
	<script src="js/jquery.nicescroll.min.js"></script>
	<script src="js/jquery.zoom.min.js"></script>
	<script src="js/jquery-ui.min.js"></script>
    <script src="js/main.js"></script>
    <script>
        $('.bt3').click(function(){
            $('.bt3').removeClass('active').removeAttr('style');
            $(this).addClass('active');
        })
    </script>


	</body>
