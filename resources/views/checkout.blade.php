@extends('layouts.static')

@extends('layouts.footer')

@section('extra-css')
<script src="https://js.stripe.com/v3/"></script>
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
				<a href="">Checkout page</a>/
			</div>
		</div>
	</div>
	<!-- Page info end -->


	<!-- checkout section  -->
	<section class="checkout-section spad">
		<div class="container">
			<div class="row">
				<div class="col-lg-8 order-2 order-lg-1">
					<form  action="{{ route('checkout.store') }}" class="checkout-form" id="payment-form" method="POST">
                        {{ csrf_field() }}
						<div class="cf-title">Billing Address</div>
						<div class="row">
                            @if(session()->has('success_message'))
                                <div class="alert alert-success">
                                    {{ session()->get('success_message') }}
                                </div>
                            @endif
                            @if(count($errors) > 0)
                                <div class="alert alert-danger">
                                    <ul>
                                        @foreach($errors->all() as $error)
                                            <li>{!!  $error !!}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif
							<div class="col-md-7">
								<p>*Billing Information</p>
							</div>
							<div class="col-md-5">
								<div class="cf-radio-btns address-rb">
									<div class="cfr-item">
										<input type="radio" name="pm" id="one">
										<label for="one">Use my regular address</label>
									</div>
									<div class="cfr-item">
										<input type="radio" name="pm" id="two">
										<label for="two">Use a different address</label>
									</div>
								</div>
							</div>
						</div>
						<div class="row address-inputs">
							<div class="col-md-12">
                                <div class="form-group">
                                    @if(auth()->user())
                                        <input type="text" placeholder="Email" id="email" name="email" value="{{ auth()->user()->email }}" readonly>
                                    @else
                                        <input type="text" placeholder="Email" id="email" name="email" value="{{ old('email') }}" required>
                                    @endif

                                </div>
                                <div class="form-group">
                                    <input type="text" placeholder="Name" id="name"  name="name" value="{{ old('name') }}" required>
                                </div>
                                <div class="form-group">
                                    <input type="text" placeholder="Address" id="address" name="address" value="{{ old('address') }}" required>
                                </div>
                                <div class="form-group">
                                    <input type="text" placeholder="Country" id="country"  name="country" value="{{ old('country') }}" required>
                                </div>
                                <div class="form-group">
                                    <input type="text" placeholder="city" id="city" name="city" value="{{ old('city') }}" required>
                                </div>
                                <div class="form-group">
                                    <input type="text" placeholder="province" id="province" name="province" value="{{ old('province') }}" required>
                                </div>


							</div>
							<div class="col-md-6">
								<input type="text" placeholder="Postal code" id="postalcode" name="postalcode" value="{{ old('postalcode') }}" required >
							</div>
							<div class="col-md-6 " >
								<input type="text" placeholder="Phone no." id="phone" name="phone" value="{{ old('phone') }}" required>
							</div>

						</div>
						<div class="cf-title">Delievery Info</div>
						<div class="row shipping-btns">
							<div class="col-6">
								<h4>Standard</h4>
							</div>
							<div class="col-6">
								<div class="cf-radio-btns">
									<div class="cfr-item">
										<input type="radio" name="shipping" id="ship-1">
										<label for="ship-1">Free</label>
									</div>
								</div>
							</div>
							<div class="col-6">
								<h4>Next day delievery  </h4>
							</div>
							<div class="col-6">
								<div class="cf-radio-btns">
									<div class="cfr-item">
										<input type="radio" name="shipping" id="ship-2">
										<label for="ship-2">$3.45</label>
									</div>
								</div>
							</div>
						</div>
						<div class="cf-title">Payment</div>
						<ul class="payment-list">
							<li>Paypal<a href="#"><img src="img/paypal.png" alt=""></a></li>
							<li>

                                    <div class="col-md-12 form-group">
                                        <label for="card-element">
                                            Credit / Debit card
                                            <img src="img/mastercart.png" alt="">
                                        </label>
                                        <div class="form-group">
                                            <input type="text" placeholder="Card Name" id="name_on_card"  name="name_on_card" value="{{ old('name_on_card') }}" required>
                                        </div>
                                        <div id="card-element">
                                            <!-- A Stripe Element will be inserted here. -->
                                        </div>

                                        <!-- Used to display form errors. -->
                                        <div id="card-errors" role="alert"></div>
                                    </div>
                            </li>
{{--							<li>Pay when you get the package</li>--}}
						</ul>
						<button type="submit" id="complete-order" class="site-btn submit-order-btn">Place Order</button>
					</form>
				</div>
				<div class="col-lg-4 order-1 order-lg-2">
					<div class="checkout-cart">
						<h3>Your Cart</h3>
						<ul class="product-list">
                            @foreach(Cart::content() as $item)
                            <li>
								<div class="pl-thumb">
                                    <img src="{{ asset('storage/'.$item->model->image) }}" alt="product-image">
                                </div>
								<h6>{{ $item->model->name }}</h6>
								<p>{{ presentPrice($item->model->price) }}</p>
								<p>{{ $item->qty }} item(s)</p>
							</li>
                            @endforeach
						</ul>
						<ul class="price-list">
							<li>Sub-total<span>{{ presentPrice($newSubtotal) }}</span></li>
							<li>tax<span>{{ presentPrice($newTax) }}</span></li>
							<li class="total">Total<span>{{ presentPrice($newTotal) }}</span></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- checkout section end -->


    <section>

    @section('extra-js')
	<!-- Footer section end -->

    <script>
        (function () {
            // Create a Stripe client.
            var stripe = Stripe('pk_test_51H6FTzL1Dh0zYTObncqGsDGVqk59mNIXx73PudivyLEeX7pqYGXwnZPhN4Y06flug4nRBarXX2QacGFxCVs3TjaO00Ie8jGuVy');

            // Create an instance of Elements.
            var elements = stripe.elements();

            // Custom styling can be passed to options when creating an Element.
            // (Note that this demo uses a wider set of styles than the guide below.)
            var style = {
                base: {
                    color: '#32325d',
                    fontFamily: '"Helvetica Neue", Helvetica, sans-serif',
                    fontSmoothing: 'antialiased',
                    fontSize: '16px',
                    '::placeholder': {
                        color: '#aab7c4'
                    }
                },
                invalid: {
                    color: '#fa755a',
                    iconColor: '#fa755a'
                }
            };

            // Create an instance of the card Element.
            var card = elements.create('card', {
                style: style,
                hidePostalCode: true,
            });

            // Add an instance of the card Element into the `card-element` <div>.
            card.mount('#card-element');

            // Handle real-time validation errors from the card Element.
            card.on('change', function(event) {
                var displayError = document.getElementById('card-errors');
                if (event.error) {
                    displayError.textContent = event.error.message;
                } else {
                    displayError.textContent = '';
                }
            });

            // Handle form submission.
            var form = document.getElementById('payment-form');
            form.addEventListener('submit', function(event) {
                event.preventDefault();

                //Disable the submit button to prevent repeated clicks
                document.getElementById('complete-order').disabled =true;

                var options = {
                    name: document.getElementById('name_on_card').value,
                    address_line1: document.getElementById('address').value,
                    address_city: document.getElementById('city').value,
                    address_state: document.getElementById('province').value,
                    address_zip: document.getElementById('postalcode').value
                }

                stripe.createToken(card, options).then(function(result) {
                    if (result.error) {
                        // Inform the user if there was an error.
                        var errorElement = document.getElementById('card-errors');
                        errorElement.textContent = result.error.message;
                        //Enable the submit button
                        document.getElementById('complete-order').disabled =true;
                    } else {
                        // Send the token to your server.
                        stripeTokenHandler(result.token);
                    }
                });
            });

            // Submit the form with the token ID.
            function stripeTokenHandler(token) {
                // Insert the token ID into the form so it gets submitted to the server
                var form = document.getElementById('payment-form');
                var hiddenInput = document.createElement('input');
                hiddenInput.setAttribute('type', 'hidden');
                hiddenInput.setAttribute('name', 'stripeToken');
                hiddenInput.setAttribute('value', token.id);
                form.appendChild(hiddenInput);

                // Submit the form
                form.submit();
            }
        })();
    </script>
        @endsection

	</body>
