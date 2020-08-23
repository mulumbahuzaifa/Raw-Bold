@extends('layouts.static')
@extends('layouts.footer')


<body style="background-color: #999999;">
<!-- Page Preloder -->
<div id="preloder">
    <div class="loader"></div>
</div>

<!-- Header section -->
@include('layouts.header')
<!-- Header section end -->

<div class="limiter">
    <div class="container">

        <div class="wrap-login100 p-l-50 p-r-50 p-t-72 p-b-50">

            <div class="card">
                <div class="card-header">{{ __('Login') }}</div>

                <div class="card-body">
                    <div class="auth-pages">
                        <div class="auth-left">
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
                            <h3>Returning Customers</h3>
                            <hr>
                            <div class="spacer"></div>
                                &nbsp;
                            <form method="POST" action="{{ route('login') }}">
                                @csrf


                            <div>
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>


                            <div>
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>


                                <div class="login-container">
                                    <button type="submit" class="auth-btn">
                                        {{ __('Login') }}
                                    </button>

                                    <label class="form-check-label" for="remember">
                                        <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                                <div class="spacer"></div>
                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif

                    </form>
                        </div>
                        <div class="auth-right">
                            <h3>New customer</h3>
                            <div class="spacer"></div>
                            <p><strong>Save time now.</strong></p>
                            <p>You don't need an account to checkout.</p>
                            <div class="spacer"></div>
                            <div class="auth-button-hullow"><a href="{{ route('guestCheckout.index') }}" >Continue as Guest</a></div>
                            <div class="spacer"></div>
                            &nbsp;
                            <div class="spacer"></div>
                            <p><strong>Save time later.</strong></p>
                            <p>Create account for fast checkout and easy access to order history</p>
                            <div class="spacer"></div>
                            <div class="auth-button-hullow">
                                <a href="{{ route('register') }}" >Create Account</a>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
<!-- Footer section -->
<!-- Footer section end -->

</body>

