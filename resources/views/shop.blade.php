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
			<h4>Category Page</h4>
			<div class="site-pagination">
				<a href="/">Home</a> /
				<a href="">Shop</a> /
			</div>
		</div>
	</div>
	<!-- Page info end -->


	<!-- Category section -->
	<section class="category-section spad">
		<div class="container">
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
				@include('layouts.filter')
				<div class="col-lg-9  order-1 order-lg-2 mb-5 mb-lg-0">
					<div class="row">
                        @forelse($products as $product1)
                            <div class="col-lg-4 col-sm-6">
                                <div class="product-item bg-green-600 border rounded-lg overflow-hidden ">
                                    <div class="pi-pic">
                                        <div class="tag-sale">ON SALE</div>
                                        <a href="{{ route('shop.show', $product1->slug) }}">
                                            <img src="{{ asset('storage/'.$product1->image) }}" id="pr-image" alt="product" class="w-full " style="min-height: 300px;"></a>
                                        <div class="pi-links">
                                            <form action="{{ route('WishlistController.store') }}" method="POST" class="form-in-line">
                                                {{ csrf_field() }}
                                                <input type="hidden" name="id" id="id" value="{{ $product1->id }}">
                                                <input type="hidden" name="name" id="name" value="{{ $product1->name }}">
                                                <input type="hidden" name="price" id="price" value="{{ $product1->price }}">
                                                <button type="submit" class="wishlist-btn"><i class="far fa-heart"></i></button>
                                            </form>

                                            <form action="{{ route('ShoppingCart.store') }}" method="POST" class="form-in-line">
                                                {{ csrf_field() }}
                                                <input type="hidden" name="id" id="id" value="{{ $product1->id }}">
                                                <input type="hidden" name="name" id="name" value="{{ $product1->name }}">
                                                <input type="hidden" name="price" id="price" value="{{ $product1->price }}">
                                                <button type="submit" class="add-card"><i class="fas fa-cart-plus"></i><span>ADD TO CART</span></button>
                                            </form>

                                        </div>
                                    </div>
                                    <div class="pi-text">
                                        <a href="{{ route('shop.show', $product1->slug) }}">
                                            <h6>{{ presentPrice($product1->price) }}</h6>
                                            <p>{{ $product1->name }}</p>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        @empty
                            <h2 class="m-auto justify-center font-bold font- text-lg p-3 leading-tight truncate text-capitalize badge-warning">No items Found</h2>
                        @endforelse


						<div class="text-center w-100 pt-3">
{{--                            {{ $products->links() }}--}}
                                {{ $products->appends(request()->input())->links() }}
{{--                            <button class="site-btn sb-line sb-dark">LOAD MORE</button>--}}
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

