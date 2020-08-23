@extends('layouts.static')
@extends('layouts.footer')

<body  style="background-color: #999999;">
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
                <div class="card-header">{{ __('Register') }}</div>
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
                            <h3>Create account</h3>
                            <hr>
                            <div class="spacer"></div>
                            &nbsp;<form method="POST" action="{{ route('register') }}">
                                @csrf


                                        <div>
                                            <input id="name" type="text" placeholder="Name" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                            @error('name')
                                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                            @enderror
                                        </div>


                                        <div>
                                            <input id="email" placeholder="Email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                            @error('email')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </div>


                                        <div>
                                            <input id="password" placeholder="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                            @error('password')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </div>

                                        <div >
                                            <input id="password-confirm" placeholder="Repeat-password" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                                        </div>



                                <div class="login-container">
                                    <button type="submit" class="auth-btn">
                                        {{ __('Register') }}
                                    </button>

                                    <div>
                                        <p>Already have an accont</p>
                                        <a href="{{ route('login') }}"  class="float-right">Login</a>
                                    </div>
                                </div>


                            </form>
                        </div>
                        <div class="auth-right">
                            <h3>Benefits</h3>
                            <div class="spacer"></div>
                            <p><strong>Save time now.</strong></p>
                            <p>
                                Creating an account will allow you to checkout faster in the future, have easy access to order history and customize your experience to suit your preferences
                            </p>
                            <div class="spacer"></div>
                            &nbsp;
                            <p><strong>Loyalty Program.</strong></p>
                            <p>Create account for fast checkout and easy access to order history</p>
                            <div class="spacer"></div>

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

