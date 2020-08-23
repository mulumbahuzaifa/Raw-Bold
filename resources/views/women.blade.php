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
			<h4>WOMEN_WEAR PAGE</h4>
			<div class="site-pagination">
				<a href="/">Home</a> /
				<a href="#">women wear</a> /
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
                        @foreach($women as $woman)
                            <div class="col-lg-4 col-sm-6">
                                <div class="product-item">
                                    <div class="pi-pic">
                                        <div class="tag-sale">ON SALE</div>
                                        <a href="{{ route('shop.show', $woman->slug) }}"><img src="{{ asset('images/women/'.$woman->slug.'.jpg') }}" alt="" class="product-image"></a>
                                        <div class="pi-links">
                                            <form action="{{ route('WishlistController.store') }}" method="POST" class="form-in-line">
                                                {{ csrf_field() }}
                                                <input type="hidden" name="id" id="id" value="{{ $woman->id }}">
                                                <input type="hidden" name="name" id="name" value="{{ $woman->name }}">
                                                <input type="hidden" name="price" id="price" value="{{ $woman->price }}">
                                                <button type="submit" class="wishlist-btn"><i class="far fa-heart"></i></button>
                                            </form>

                                            <form action="{{ route('ShoppingCart.store') }}" method="POST" class="form-in-line">
                                                {{ csrf_field() }}
                                                <input type="hidden" name="id" id="id" value="{{ $woman->id }}">
                                                <input type="hidden" name="name" id="name" value="{{ $woman->name }}">
                                                <input type="hidden" name="price" id="price" value="{{ $woman->price }}">
                                                <button type="submit" class="add-card"><i class="fas fa-cart-plus"></i><span>ADD TO CART</span></button>
                                            </form>

                                        </div>
                                    </div>
                                    <div class="pi-text">
                                        <a href="{{ route('shop.show', $woman->slug) }}">
                                            <h6>{{ $woman->price }}</h6>
                                            <p>{{ $woman->name }}</p>
                                        </a>
                                    </div>
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
