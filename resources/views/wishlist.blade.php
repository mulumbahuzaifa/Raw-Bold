@extends('layouts.static')

@extends('layouts.footer')
<body>
	<!-- Page Preloder -->
	<div id="preloder">
		<div class="loader"></div>
	</div>

	<!-- Header section -->
	@include('layouts.header')


	<!-- Page info -->
	<div class="page-top-info">
		<div class="container">
			<h4>Your Wishlist</h4>
			<div class="site-pagination">
				<a href="/">Home</a> /
				<a href="">Your wishlist</a>
                <br>
                <br>
                @if(session()->has('success_message'))
                    <div class="alert alert-success">
                        {{ session()->get('success_message') }}
                    </div>
                @endif
                @if(count($errors) > 0)
                    <div class="alert alert-success">
                        <ul>
                            @foreach($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
			</div>
		</div>
	</div>
	<!-- Page info end -->

	<!-- cart section end -->
	<section class="cart-section spad">
		<div class="container">
            <div class="row">
                @if(Cart::instance('SaveForLater')->count() > 0)
                <div class="col-lg-8">
                    <div class="cart-table">
                        <h3>Saved For Later</h3>
                        <br>
                        <h5>{{ Cart::instance('SaveForLater')->count() }} item(s) saved for later</h5>
                        <div class="cart-table-warp">
                                <table>
                                    <thead>
                                    <tr>
                                        <th class="product-th">Product</th>
                                        <th class="quy-th">Quantity</th>
                                        <th class="size-th">Size</th>
                                        <th class="total-th">Price</th>
                                    </tr>
                                    </thead>
                                    @foreach(Cart::instance('SaveForLater')->content() as $item)
                                    <tbody>
                                    <tr>
                                        <td class="product-col">
                                            <a href="{{ route('shop.show', $item->model->slug) }}">
                                                <img src="{{ asset('storage/'.$item->model->image) }}" alt="product-image"></a>

                                            <div class="pc-title">
                                                <a href="{{ route('shop.show', $item->model->slug) }}"><h4>{{ $item->model->name }}</h4></a>

                                                <form action="{{ route('SaveForLater.destroy', $item->rowId) }}" method="POST">
                                                    {{ csrf_field() }}
                                                    {{ method_field('DELETE') }}

                                                    <button type="submit" class="cart-options">Remove</button>
                                                </form>
                                                <form action="{{ route('SaveForLater.switchToCart', $item->rowId) }}" method="POST">
                                                    {{ csrf_field() }}

                                                    <button type="submit" class="cart-options">Add to cart</button>
                                                </form>
                                            </div>
                                        </td>
                                        <td class="quy-col">
                                            <div class="quantity">
                                                <div class="pro-qty">
                                                    <input type="text" value="1">
                                                </div>
                                            </div>
                                        </td>
                                        <td class="size-col"><h4>Size M</h4></td>
                                        <td class="total-col"><h4>{{ $item->model->price }}k</h4></td>
                                    </tr>

                                    </tbody>
                                    @endforeach
                                </table>
                            </div>
                        <div class="total-cost">
                            <h6>Sub-Total <span>{{ Cart::subtotal() }}k</span></h6>
                        </div>
                        <div class="total-cost">
                            <h6>Tax(21%)<span>{{ Cart::tax() }}k</span></h6>
                        </div>
                        <div class="total-cost">
                            <h6>Total <span>{{ Cart::total() }}k</span></h6>
                        </div>
                        </div>
                    </div>
                @else
                <div class="alert alert-success">
                    <h4>You have no items Saved For later</h4>
                </div>
                @endif
		    </div>
		</div>
	</section>
	<!-- cart section end -->

	<!-- Related product section -->
	<section class="related-product-section">
		<div class="container">
			<div class="section-title text-uppercase">
				<h2>Continue Shopping</h2>
			</div>
			<div class="row">
                @foreach($mightAlsoLike as $product)
				<div class="col-lg-3 col-sm-6">
					<div class="product-item">
						<div class="pi-pic">
							<div class="tag-new">New</div>
							<img src="{{ asset('storage/'.$product->image) }}" alt="" class="product-image">
							<div class="pi-links">
                                <form action="{{ route('WishlistController.store') }}" method="POST" class="form-in-line">
                                    {{ csrf_field() }}
                                    <input type="hidden" name="id" id="id" value="{{ $product->id }}">
                                    <input type="hidden" name="name" id="name" value="{{ $product->name }}">
                                    <input type="hidden" name="price" id="price" value="{{ $product->price }}">
                                    <button type="submit" class="wishlist-btn"><i class="far fa-heart"></i></button>
                                </form>

                                <form action="{{ route('ShoppingCart.store') }}" method="POST" class="form-in-line">
                                    {{ csrf_field() }}
                                    <input type="hidden" name="id" id="id" value="{{ $product->id }}">
                                    <input type="hidden" name="name" id="name" value="{{ $product->name }}">
                                    <input type="hidden" name="price" id="price" value="{{ $product->price }}">
                                    <button type="submit" class="add-card"><i class="fas fa-cart-plus"></i><span>ADD TO CART</span></button>
                                </form>

							</div>
						</div>
						<div class="pi-text">
							<h6>{{ $product->price }}</h6>
							<p>{{ $product->name }}</p>
						</div>
					</div>
				</div>
                @endforeach

			</div>
		</div>
	</section>
	<!-- Related product section end -->




	</body>
