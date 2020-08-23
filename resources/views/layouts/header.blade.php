@section('extra-css')
    <link href="{{ asset('css/algolia.css') }}" rel="stylesheet">
@endsection
<header class="header-section">
    <div class="header-top">
        <div class="container">
            <div class="row">
                <div class="col-lg-2 text-center text-lg-left">
                    <!-- logo -->
                    <a href="/" class="site-logo">
                        <img src="{{ asset('images/logo/RAW-AND-BOLD-13.png') }}" alt="logo" style="height: 50px; width: 100px">
                    </a>
                </div>
                @if(! (request()->is('checkout') || request()->is('guestCheckout')))
                <div class="col-xl-6 col-lg-5">
                    <div class="aa-input-container" id="aa-input-container">
                        <input type="search" id="aa-search-input" class="aa-input-search"
                               placeholder="Search on Raw & Bold with algolia..." name="search" autocomplete="off" />

                        <svg class="aa-input-icon" viewBox="654 -372 1664 1664">
                            <path d="M1806,332c0-123.3-43.8-228.8-131.5-316.5C1586.8-72.2,1481.3-116,1358-116s-228.8,43.8-316.5,131.5  C953.8,103.2,910,208.7,910,332s43.8,228.8,131.5,316.5C1129.2,736.2,1234.7,780,1358,780s228.8-43.8,316.5-131.5  C1762.2,560.8,1806,455.3,1806,332z M2318,1164c0,34.7-12.7,64.7-38,90s-55.3,38-90,38c-36,0-66-12.7-90-38l-343-342  c-119.3,82.7-252.3,124-399,124c-95.3,0-186.5-18.5-273.5-55.5s-162-87-225-150s-113-138-150-225S654,427.3,654,332  s18.5-186.5,55.5-273.5s87-162,150-225s138-113,225-150S1262.7-372,1358-372s186.5,18.5,273.5,55.5s162,87,225,150s113,138,150,225  S2062,236.7,2062,332c0,146.7-41.3,279.7-124,399l343,343C2305.7,1098.7,2318,1128.7,2318,1164z" />
                        </svg>
                    </div>
{{--                    <form class="header-search-form" method="GET" action="{{ route('search') }}">--}}
{{--                        <input type="text" class="btn1" name="query" id="query" value="{{ request()->input('query') }}" placeholder="Search on Raw & Bold ....">--}}
{{--                        <button><i class="fas fa-search"></i></button>--}}
{{--                    </form>--}}
                </div>
                <div class="col-xl-4 col-lg-5">
                    <div class="user-panel">
                        <div class="up-item">
                            <div class="top-right links">
{{--                                    @auth--}}
{{--                                        <a href="{{ url('/home') }}">Home</a>--}}

{{--                                    @else--}}

{{--                                        <a href="{{ route('login') }}" style="margin-right: 30px"><i class="fas fa-user"></i>Login</a>--}}

{{--                                        @if (Route::has('register'))--}}
{{--                                            <a href="{{ route('register') }}" ><i class="fas fa-user-plus"></i>Register</a>--}}
{{--                                        @endif--}}
{{--                                    @endauth--}}
                                        <ul class="navbar-nav d-inline-block" >
                                            <!-- Authentication Links -->
                                            @guest
                                                <li class="nav-item mr-10">
                                                    <a href="{{ route('login') }}"><i class="fas fa-user"></i>Login</a>
                                                </li>
                                                @if (Route::has('register'))
                                                    <li class="nav-item">
                                                        <a href="{{ route('register') }}" ><i class="fas fa-user-plus"></i>Register</a>
                                                    </li>
                                                @endif
                                            @else
                                                <li class="nav-item dropdown">
                                                    <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                                        {{ Auth::user()->name }} <span class="caret"></span>
                                                    </a>

                                                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                                        <a class="dropdown-item" href="{{ route('logout') }}"
                                                           onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                                            {{ __('Logout') }}
                                                        </a>

                                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                                            @csrf
                                                        </form>
                                                    </div>
                                                </li>
                                            @endguest
                                        </ul>

                                </div>
                        </div>
                        <div class="up-item float-right">
                            <div class="shopping-card">
                                <a href="{{ route('ShoppingCart.index') }}" id="heart" style="margin-right: 30px;">
                                    <i class="fas fa-heart fa-5x heart"></i>
                                    <span>{{ Cart::instance('SaveForLater')->count() }}</span>
                                </a>
                                <a href="{{ route('ShoppingCart.index') }}" id="cart">
                                    <i class="fas fa-cart-plus fa-5x cart"></i>
                                    <span>{{ Cart::instance('default')->count() }}</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                @endif
            </div>
        </div>
    </div>
    <nav class="main-navbar">
        <div class="container">
            <!-- menu -->
            @if(! (request()->is('checkout') || request()->is('guestCheckout')))
            <ul class="main-menu">
                <li><a href="/" class="active">Home</a></li>
                <li><a href="{{ route('shop.index') }}">All
                        <span class="new">New</span>
                    </a>
                    <ul class="sub-menu">
                        @foreach($categories as $category)
                            <li><a href="{{ route('shop.index', ['category'=>$category->slug]) }}" class="{{ request()->category == $category->slug ? 'active' : '' }} bt3">{{ $category->name }}</a></li>
                        @endforeach
                    </ul>
                </li>
                @foreach($categories as $category)
                    @if($category->children->count() > 0)
                        <li><a href="{{ route('shop.index', ['category'=>$category->slug]) }}" class="{{ request()->category == $category->slug ? 'active' : '' }} bt3">{{ $category->name }}</a>
                            <ul class="sub-menu">
                                @foreach($category->children as $subMenu)
                                    <li><a href="{{ route('shop.index', ['category'=>$subMenu->slug]) }}" class="{{ request()->category == $category->slug ? 'active' : '' }} bt3">{{ $subMenu->name }}
                                        </a>
                                    </li>
                                @endforeach
                            </ul>
                        </li>
                    @else
                        <li><a href="{{ route('shop.index', ['category'=>$category->slug]) }}" class="{{ request()->category == $category->slug ? 'active' : '' }} bt3">{{ $category->name }}</a>

                        </li>
                    @endif

                @endforeach

                <li><a href="contact.blade.php">ContactUs</a>
                </li>
                <li><a href="blog.blade.php">Blog</a></li>
            </ul>
            @endif
        </div>
    </nav>
</header>
@section('extra-js')
    <!-- Include AlgoliaSearch JS Client v3 and autocomplete.js library -->
    <script src="https://cdn.jsdelivr.net/npm/algoliasearch@3/dist/algoliasearchLite.min.js"></script>
    <script src="https://cdn.jsdelivr.net/autocomplete.js/0/autocomplete.min.js"></script>
    <script src="{{ asset('js/algolia.js') }}"></script>
@endsection
