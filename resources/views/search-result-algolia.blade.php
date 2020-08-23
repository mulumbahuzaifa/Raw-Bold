@extends('layouts.static')
@extends('layouts.footer')
@section('extra-css')
    <link href="{{ asset('css/algolia.css') }}" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/instantsearch.js@2.10.4/dist/instantsearch.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/instantsearch.js@2.10.4/dist/instantsearch-theme-algolia.min.css">
@endsection

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
			<div >
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

                    <div id="search-box">
                        <!-- SearchBox widget will appear here -->
                    </div>

                    <div id="hits">
                        <!-- Hits widget will appear here -->
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
    <script src="https://cdn.jsdelivr.net/npm/instantsearch.js@2.10.4"></script>
    <script src="{{ asset('js/algolia-instantsearch.js') }}"></script>
    <script>

    </script>

@endsection

