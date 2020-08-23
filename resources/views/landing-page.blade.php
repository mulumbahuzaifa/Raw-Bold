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

    <!-- Hero section -->
    <section class="hero-section">
        <div class="hero-slider owl-carousel">
            @foreach($product2s as $product2)
                <div class="hs-item set-bg" data-setbg="{{ asset('images/welcome/'.$product2->slug.'.jpg') }}">
{{--                    <img src="{{ asset('storage/'.$product2->image) }}"/>--}}
                    <div class="container">
                        <div class="row">
                            <div class="col-xl-6 col-lg-7 text-white">
                                <span>New Arrivals</span>
                                <h2>{{ $product2->name }}</h2>
                                <p>{!! $product2->description !!}</p>
                                <form action="{{ route('ShoppingCart.store') }}" method="POST">
                                    {{ csrf_field() }}
                                    <a href="{{ route('shop.index') }}" class="site-btn sb-line">DISCOVER</a>
                                    <input type="hidden" name="id" id="id" value="{{ $product2->id }}">
                                    <input type="hidden" name="name" id="name" value="{{ $product2->name }}">
                                    <input type="hidden" name="price" id="price" value="{{ $product2->price }}">
                                    <button type="submit" class="site-btn sb-white">ADD TO CART</button>
                                </form>
                                <a href="#" class=""></a>
                            </div>
                        </div>
                        <div class="offer-card text-white">
                            <span>from</span>
                            <h2>{{ presentPrice($product2->prevPrice) }}</h2>
                            <a href="{{ route('shop.show', $product2->slug) }}">SHOP NOW</a>
                        </div>
                    </div>
                </div>
            @endforeach

        </div>
        <div class="container">
            <div class="slide-num-holder" id="snh-1"></div>
        </div>
    </section>
    <!-- Hero section end -->
    <!-- Features section -->
    <section class="features-section">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-4 p-0 feature">
                    <div class="feature-inner">
                        <div class="feature-icon">
                            <img src="img/icons/1.png" alt="#">
                        </div>
                        <h2>Fast Secure Payments</h2>
                    </div>
                </div>
                <div class="col-md-4 p-0 feature">
                    <div class="feature-inner">
                        <div class="feature-icon">
                            <img src="img/icons/2.png" alt="#">
                        </div>
                        <h2>Premium Products</h2>
                    </div>
                </div>
                <div class="col-md-4 p-0 feature">
                    <div class="feature-inner">
                        <div class="feature-icon">
                            <img src="img/icons/3.png" alt="#">
                        </div>
                        <h2>Free & fast Delivery</h2>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Features section end -->


    <!-- letest product section -->
    <section class="top-letest-product-section">
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
            <div class="section-title">
                <h2>LATEST PRODUCTS</h2>
            </div>
            <div class="product-slider owl-carousel">
                @foreach ($products1 as $product)
                    <div class="product-item">
                        <div class="pi-pic">
                            <div class="tag-new">{{ $product->stock }}</div>
                            <a href="{{ route('shop.show', $product->slug) }}">
                                <img src="{{ asset('storage/'.$product->image) }}" alt="product" id="latest-product">
                            </a>
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
                            <a href="{{ route('shop.show', $product->slug) }}">
{{--                                <h6><s class="text-secondary">{{ presentPrice($product->prevPrice) }}</s></h6>--}}
                                <h6>{{ presentPrice($product->price) }}</h6>
                                {{ $product->name }}
                            </a>
                        </div>
                    </div>
                @endforeach
            </div>
            <div class="text-center pt-5">
                <a href="{{ route('new.index') }}"><button class="site-btn sb-line sb-dark">LOAD MORE</button></a>
            </div>
        </div>
    </section>
    <!-- letest product section end -->



    <!-- Product filter section -->
    <section class="product-filter-section">
        <div class="container">
            <div class="section-title">
                <h2>BROWSE TOP SELLING PRODUCTS</h2>
            </div>
            <ul class="product-filter-menu">
                <li><a href="/">ALL</a></li>
            @foreach($categories as $category)
                @if($category->children->count() > 0)
                    @foreach($category->children as $subMenu)
                        <li><a href="{{ route('landingpage.index', ['category'=>$subMenu->slug]) }}" class="{{ request()->category == $category->slug ? 'active' : '' }}" >{{ $subMenu->name }}
                            </a>
                         </li>
                    @endforeach
                @endif
                @endforeach

            </ul>
            <div class="row">
                @foreach($products as $product1)
                    <div class="col-lg-3 col-sm-6">
                        <div class="product-item bg-white border rounded-lg overflow-hidden" >
                            <div class="pi-pic ">
                                <a href="{{ route('shop.show', $product1->slug) }}">
{{--                                    <img src="{{ asset('storage/'.$product1->image) }}" alt="product" style="min-height: 150px" >--}}
                                    <img src="{{ asset('images/products/'.$product1->slug.'.jpg') }}" alt="product" id="pr-image"  class="w-full " style="min-height: 300px;">
                                </a>
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
                                    <h4 class="mt-1 font-semibold text-lg leading-tight truncate">{{ $product1->name }}</h4>
                                </a>
                                <P>{{ $product1->details }}</P>
                            </div>

                        </div>
                    </div>
                @endforeach
            </div>
            <div class="text-center pt-5">
                <a href="{{ route('shop.index') }}">
                    <button class="site-btn sb-line sb-dark">LOAD MORE</button>
                </a>
            </div>
        </div>
    </section>
    <!-- Product filter section end -->


    <!-- Banner section -->
    <section class="banner-section">
        <div class="container">
            <div class="banner set-bg" data-setbg="{{ asset('images/welcome/banner-bg.jpg') }}">
                <div class="tag-new">NEW</div>
                <span>New Arrivals</span>
                <h2>STRIPED SHIRTS</h2>
                <a href="{{ route('new.index') }}" class="site-btn">SHOP NOW</a>
            </div>
        </div>
    </section>
    <!-- Banner section end  -->


    </body>
