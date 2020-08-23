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
			<h4>Shopping Page</h4>
			<div class="site-pagination">
				<a href="/">Home</a> /
				<a href="{{ route('shop.index') }}">Shop</a>/
                <a href="">{{ $product->name }}</a>/
			</div>
		</div>
	</div>
	<!-- Page info end -->


	<!-- product section -->
	<section class="product-section">
		<div class="container">

			<div class="back-link">
				<a href="shop.blade.php"> &lt;&lt; Back to Category</a>
			</div>
            @if(session()->has('success_message'))
                <div class="alert alert-success">
                    {{ session()->get('success_message') }}
                </div>
            @endif
            @if(count($errors) > 0)
                <div class="alert alert-danger">
                    <ul style="list-style: none;">
                        @foreach($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
			<div class="row">
				<div class="col-lg-6">
					<div class="product-pic-zoom">
						<img class="product-big-img" id="currentImage" src="{{ asset('storage/'.$product->image) }}" alt="product">
					</div>
					<div class="product-thumbs" tabindex="1" style="overflow: hidden; outline: none; width: auto">
						<div class="product-thumbs-track">
{{--							<div class="pt active products-thumbnails" ><img src="{{ asset('images/products/'.$product->slug.'.jpg') }}" alt=""></div>--}}
{{--							<div class="pt products-thumbnails" ><img src="{{ asset('images/products/'.$product->slug.'.jpg') }}" alt=""></div>--}}
{{--							<div class="pt products-thumbnails" ><img src="{{ asset('images/products/'.$product->slug.'.jpg') }}" alt=""></div>--}}
{{--							<div class="pt products-thumbnails" ><img src="{{ asset('images/products/'.$product->slug.'.jpg') }}" alt=""></div>--}}
                            <div class="pt active products-thumbnails" data-imgbigurl="img/single-product/4.jpg">
                                <img src="{{ asset('storage/'.$product->image) }}" alt="product">
                            </div>
                            @if($product->images)
                                @foreach(json_decode($product->images, true) as $image)
                                    <div class="pt products-thumbnails" data-imgbigurl="img/single-product/4.jpg">
                                            <img src="{{ asset('storage/'.$image) }}" alt="product">
                                    </div>
                                @endforeach
                            @endif
                        </div>
					</div>
				</div>
				<div class="col-lg-6 product-details">
					<h2 class="p-title">{{ $product->name }}</h2>
					<h3 class="p-price">{{ presentPrice($product->price) }}</h3>
					<h4 class="p-stock">Available: <span>{!! $stockLevel !!}</span>
                    </h4>
                        <h5 >{{ $product->quantity }} items left</h5>
					<div class="p-rating">
						<i class="fa fa-star-o"></i>
						<i class="fa fa-star-o"></i>
						<i class="fa fa-star-o"></i>
						<i class="fa fa-star-o"></i>
						<i class="fa fa-star-o fa-fade"></i>
					</div>
					<div class="p-review">
						<a href="">3 reviews</a>|<a href="">Add your review</a>
					</div>
					<div class="fw-size-choose">
						<p>Size</p>
						<div class="sc-item">
							<input type="radio" name="sc" id="xs-size">
							<label for="xs-size">32</label>
						</div>
						<div class="sc-item">
							<input type="radio" name="sc" id="s-size">
							<label for="s-size">34</label>
						</div>
						<div class="sc-item">
							<input type="radio" name="sc" id="m-size" checked="">
							<label for="m-size">36</label>
						</div>
						<div class="sc-item">
							<input type="radio" name="sc" id="l-size">
							<label for="l-size">38</label>
						</div>
						<div class="sc-item disable">
							<input type="radio" name="sc" id="xl-size" disabled>
							<label for="xl-size">40</label>
						</div>
						<div class="sc-item">
							<input type="radio" name="sc" id="xxl-size">
							<label for="xxl-size">42</label>
						</div>
					</div>
{{--					<div class="quantity">--}}
{{--						<p>Quantity</p>--}}
{{--                        <div class="pro-qty">--}}
{{--                            <input type="text" value="1">--}}
{{--                            <select class="quantity" data-id="{{ $product1->rowId }}">--}}
{{--                                @for($i = 1; $i < 100 + 1; $i++)--}}
{{--                                    <option {{ $product1->qty == $i ? 'selected' : $product1->qty }}>{{ $i }}</option>--}}
{{--                                @endfor--}}
{{--                            </select>--}}
{{--                        </div>--}}
{{--                    </div>--}}
                    @if($product->quantity > 0)
                    <form action="{{ route('ShoppingCart.store') }}" method="POST">
                        {{ csrf_field() }}
                        <input type="hidden" name="id" value="{{ $product->id }}">
                        <input type="hidden" name="name" value="{{ $product->name }}">
                        <input type="hidden" name="price" value="{{ $product->price }}">
                        <button type="submit" class="site-btn">ADD TO CART</button>
                    </form>
                    @endif
					<div id="accordion" class="accordion-area">
						<div class="panel">
							<div class="panel-header" id="headingOne">
								<button class="panel-link active" data-toggle="collapse" data-target="#collapse1" aria-expanded="true" aria-controls="collapse1">information</button>
							</div>
							<div id="collapse1" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
								<div class="panel-body">
									<p>{!! $product->description !!}  </p>
									<p>Approx length 66cm/26" (Based on a UK size 8 sample)</p>
									<p>{{ $product->details }}</p>
									<p>The Model wears a UK size 8/ EU size 36/ US size 4 and her height is 5'8"</p>
								</div>
							</div>
						</div>
						<div class="panel">
							<div class="panel-header" id="headingTwo">
								<button class="panel-link" data-toggle="collapse" data-target="#collapse2" aria-expanded="false" aria-controls="collapse2">care details </button>
							</div>
							<div id="collapse2" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
								<div class="panel-body">
									<img src="./img/cards.png" alt="">
									<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin pharetra tempor so dales. Phasellus sagittis auctor gravida. Integer bibendum sodales arcu id te mpus. Ut consectetur lacus leo, non scelerisque nulla euismod nec.</p>
								</div>
							</div>
						</div>
						<div class="panel">
							<div class="panel-header" id="headingThree">
								<button class="panel-link" data-toggle="collapse" data-target="#collapse3" aria-expanded="false" aria-controls="collapse3">shipping & Returns</button>
							</div>
							<div id="collapse3" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
								<div class="panel-body">
									<h4>7 Days Returns</h4>
									<p>Cash on Delivery Available<br>Home Delivery <span>3 - 4 days</span></p>
									<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin pharetra tempor so dales. Phasellus sagittis auctor gravida. Integer bibendum sodales arcu id te mpus. Ut consectetur lacus leo, non scelerisque nulla euismod nec.</p>
								</div>
							</div>
						</div>
					</div>
					<div class="social-sharing">
						<a href=""><i class="fa fa-google-plus"></i></a>
						<a href=""><i class="fa fa-pinterest"></i></a>
						<a href=""><i class="fa fa-facebook"></i></a>
						<a href=""><i class="fa fa-twitter"></i></a>
						<a href=""><i class="fa fa-youtube"></i></a>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- product section end -->
	<!-- RELATED PRODUCTS section -->
@include('layouts.MightAlsoLike')
	<!-- RELATED PRODUCTS section end -->

	</body>
@section('extra-js')
    <script>
        (function () {
            const currentImage = document.querySelector('#currentImage');
            const images = document.querySelectorAll('.products-thumbnails');

            images.forEach((element) => element.addEventListener('click', thumbnailClick));

            function thumbnailClick(e) {
                currentImage.src = this.querySelector('img').src;
            }
        })();
    </script>

@endsection
