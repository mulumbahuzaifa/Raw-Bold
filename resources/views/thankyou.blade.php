@extends('layouts.static')

@extends('layouts.footer')

@section('extra-css')
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
			<h4>Checkout page</h4>
			<div class="site-pagination">
				<a href="/">Home</a> /
				<a href="">Comfirmation page</a>/
			</div>
		</div>
	</div>
	<!-- Page info end -->


	<!-- checkout section  -->
	<section class="checkout-section spad">
		<div class="container">
			<div class="row">

			</div>
		</div>
	</section>
	<!-- checkout section end -->




	</body>
