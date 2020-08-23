@extends('layouts.static')

@section('content')
	<!-- Page Preloder -->
	<div id="preloder">
		<div class="loader"></div>
	</div>

	<!-- Header section -->
	@include('layouts.header')


	<!-- Page info -->
	<div class="page-top-info">
		<div class="container">
			<h4>Your cart</h4>
			<div class="site-pagination">
				<a href="/">Home</a> /
				<a href="">Your cart</a>
                <br>
                <br>
                @if(session()->has('success_message'))
                    <div class="alert alert-success">
                        {{ session()->get('success_message') }}
                    </div>
                @endif
                @if(count($errors) > 0)
                    <div class="alert alert-danger">
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
				<div class="col-lg-8">
                    @if(Cart::count() > 0)
					<div class="cart-table">
						<h3>Your Cart</h3>
                        <br>
                        <h5>{{ Cart::count() }} item(s) in Shopping Cart</h5>
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
                            @foreach(Cart::content() as $item)
                                    <tbody>
                                    <tr>
                                        <td class="product-col">
                                            <a href="{{ route('shop.show',$item->model->slug) }}">
                                                <img src="{{ asset('storage/'.$item->model->image) }}" alt=""></a>

                                            <div class="pc-title">
                                                <a href="{{ route('shop.show',$item->model->slug) }}"><h5>{{ $item->model->name }}</h5></a>

                                                <form action="{{ route('ShoppingCart.destroy', $item->rowId) }}" method="POST">
                                                    {{ csrf_field() }}
                                                    {{ method_field('DELETE') }}

                                                    <button type="submit" class="cart-options">Remove</button>
                                                </form>
                                                <form action="{{ route('ShoppingCart.switchToSaveForLater', $item->rowId) }}" method="POST">
                                                    {{ csrf_field() }}

                                                    <button type="submit" class="cart-options">Save For Later</button>
                                                </form>
                                            </div>
                                        </td>
                                        <td class="quy-col">
                                            <div>
                                                <div class="pro-qty">
{{--                                                    <input class="quantity1" type="text" value="{{ $item->qty ==1 ? 'selected' : $item->qty }}" data-id="{{ $item->rowId }}">--}}
                                                    <select class="quantity" data-id="{{ $item->rowId }}" data-productQuantity="{{ $item->model->quantity }}">
                                                        @for($i = 1; $i < 20 + 1; $i++)
                                                            <option {{ $item->qty == $i ? 'selected' : $item->qty }}>{{ $i }}</option>
                                                        @endfor
                                                    </select>

                                                </div>
                                            </div>
                                        </td>
                                        <td class="size-col"><h4>Size M</h4></td>
                                        <td class="total-col"><h4>{{ presentPrice($item->subtotal) }}</h4></td>
                                    </tr>

                                    </tbody>
                                @endforeach
                                </table>
                        </div>
                        <div class="total-cost">
                            <h6>Sub-Total <span>{{ presentPrice(Cart::subtotal()) }}</span></h6>
                        </div>
                        @if(session()->has('coupon'))
                            <div class="total-cost">

                                <h6>Discount({{ session()->get('coupon')['name'] }}):
                                    <form action="{{ route('coupon.destroy') }}" method="POST" style="display: inline">
                                        {{csrf_field()}}
                                        {{ method_field('delete') }}
                                        <button type="submit">Remove</button>
                                    </form>
                                    <span>-{{ presentPrice($discount) }}</span></h6>
                                <hr>
                                <div class="total-cost">
                                    <h6>New Sub-Total<span>{{ presentPrice($newSubtotal) }}</span></h6>
                                </div>
                            </div>
                        @endif
                        <div class="total-cost">
                            <h6>Tax(13%)<span>{{ presentPrice($newTax) }}</span></h6>
                        </div>
                        <div class="total-cost">
                            <h6>Total <span>{{ presentPrice($newTotal) }}</span></h6>
                        </div>
					</div>

                    @else
                        <div class="alert alert-success">
                            <h3>No Items in Cart</h3>
                        </div>
                @endif
                </div>
                <div class="col-lg-4 card-right">
                    @if(! session()->has('coupon'))
                    <form class="promo-code-form" action="{{ route('coupon.store') }}" method="POST">
                        {{ csrf_field() }}
                        <input type="text" placeholder="Enter promo code" name="coupon_code" id="coupon_code">
                        <button>Submit</button>
                    </form>
                    @endif
                    <a href="{{ route('checkout.index') }}" class="site-btn">Proceed to checkout</a>
                    <a href="{{ route('shop.index') }}" class="site-btn sb-dark">Continue shopping</a>
                </div>
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
							<h6>{{ presentPrice($product->price) }}</h6>
							<p>{{ $product->name }}</p>
						</div>
					</div>
				</div>
                @endforeach

			</div>
		</div>
	</section>
	<!-- Related product section end -->
    @include('layouts.footer')

@endsection
@section('extra-jss')
    <script src="{{ asset('js/app.js') }}"></script>
    <script>
        (function () {
            const classname = document.querySelectorAll('.quantity')

            Array.from(classname).forEach( function(element){
                element.addEventListener('change', function (){
                    const id = element.getAttribute('data-id')
                    const productQuantity = element.getAttribute('data-productQuantity')
                    axios.patch(`/cart/${id}`, {
                        quantity: this.value,
                        productQuantity: productQuantity
                    })
                    .then(function (response) {
                        // console.log(response);
                        window.location.href = '{{ route('ShoppingCart.index') }}'
                    })
                    .catch(function (error) {
                        // console.log(error)
                        window.location.href = '{{ route('ShoppingCart.index') }}'
                    });
                });
            });
        })();
    </script>

@endsection
