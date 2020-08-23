@extends('layouts.static')

@extends('layouts.footer')
<body>
	<!-- Page Preloder -->
	<div id="preloder">
		<div class="loader"></div>
	</div>

	<!-- Header section -->
    @include('layouts.header')
		<!-- Header section end -->


	<!-- Page info -->
	<div class="page-top-info">
		<div class="container">
			<h4>JEWELRY PAGE</h4>
			<div class="site-pagination">
				<a href="/">Home</a> /
				<a href="#"> jewelries</a> /
			</div>
		</div>
	</div>
	<!-- Page info end -->


	<!-- Category section -->
	<section class="category-section spad">
		<div class="container">
			<div class="row">
				@include('layouts.filter')

				<div class="col-lg-9  order-1 order-lg-2 mb-5 mb-lg-0">
					<div class="row">
                        @foreach($jewelry as $jewelries)
                            <div class="col-lg-4 col-sm-6">
                                <div class="product-item">
                                    <a href="{{ route('shop.show', $jewelries->slug) }}">
                                        <div class="pi-pic">
                                            <div class="tag-sale">ON SALE</div>
                                            <img src="{{ asset('images/jewelry/'.$jewelries->slug.'.jpg') }}" alt="" class="product-image">
                                            <div class="pi-links">
                                                <form action="{{ route('WishlistController.store') }}" method="POST" class="form-in-line">
                                                    {{ csrf_field() }}
                                                    <input type="hidden" name="id" id="id" value="{{ $jewelries->id }}">
                                                    <input type="hidden" name="name" id="name" value="{{ $jewelries->name }}">
                                                    <input type="hidden" name="price" id="price" value="{{ $jewelries->price }}">
                                                    <button type="submit" class="wishlist-btn"><i class="far fa-heart"></i></button>
                                                </form>

                                                <form action="{{ route('ShoppingCart.store') }}" method="POST" class="form-in-line">
                                                    {{ csrf_field() }}
                                                    <input type="hidden" name="id" id="id" value="{{ $jewelries->id }}">
                                                    <input type="hidden" name="name" id="name" value="{{ $jewelries->name }}">
                                                    <input type="hidden" name="price" id="price" value="{{ $jewelries->price }}">
                                                    <button type="submit" class="add-card"><i class="fas fa-cart-plus"></i><span>ADD TO CART</span></button>
                                                </form>
                                                <a href="#" class="add-card"><i class="flaticon-bag"></i><span>ADD TO CART</span></a>
                                                <a href="#" class="wishlist-btn"><i class="flaticon-heart"></i></a>
                                            </div>
                                        </div>
                                        <div class="pi-text">
                                            <h6>{{ $jewelries->price }}</h6>
                                            <p>{{ $jewelries->name }}</p>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        @endforeach
						<div class="text-center w-100 pt-3">
							<button class="site-btn sb-line sb-dark">LOAD MORE</button>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- Category section end -->






    <script>
        $('.bt3').click(function(){
            $('.bt3').removeClass('active').removeAttr('style');
            $(this).addClass('active');
        })
    </script>


	</body>
