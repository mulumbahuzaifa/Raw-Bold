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
			<div class="">
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
                <h1>Search Results</h1>
                <br>
                <h4 style="color:darkorange">{{ $products->total() }} Result(s) for '{{ request()->input('query') }}'</h4>
                    <table class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>Name</th>
                                <th>Details</th>
                                <th>Description</th>
                                <th>Price</th>
                            </tr>
                        </thead>
                        <tbody>
                        @foreach($products as $product)
                            <tr>
                                <td><a href="{{ route('shop.show', $product->slug) }}">{{$product->name}}</a></td>
                                <td>{{$product->details}}</td>
                                <td>{{Str::limit($product->description, 80)}}</td>
                                <td>{{presentPrice($product->price)}}</td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                    {{ $products->appends(request()->input())->links() }}
			</div>
		</div>
	</section>
	<!-- product section end -->
	<!-- RELATED PRODUCTS section -->
@include('layouts.MightAlsoLike')
	<!-- RELATED PRODUCTS section end -->

	</body>
{{--<div class="up-item">--}}

{{--    @if (Route::has('login'))--}}
{{--        <div class="top-right links">--}}
{{--            @auth--}}
{{--                <a href="{{ url('/home') }}">Home</a>--}}
{{--            @else--}}

{{--                <a href="{{ route('login') }}" style="margin-right: 30px"><i class="fas fa-user"></i>Login</a>--}}

{{--                @if (Route::has('register'))--}}
{{--                    <a href="{{ route('register') }}" ><i class="fas fa-user-plus"></i>Register</a>--}}
{{--                @endif--}}
{{--            @endauth--}}
{{--        </div>--}}
{{--    @endif--}}
{{--</div>--}}

