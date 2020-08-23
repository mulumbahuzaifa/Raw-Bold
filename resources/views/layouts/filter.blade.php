<div class="col-lg-3 order-2 order-lg-1">
    <div class="filter-widget">
        <div class="site-pagination">
            <h2 class="fw-title">Categories</h2>
            <h2 class="alert alert-success">{{$categoryName}}</h2>
        </div>

        <ul class="category-menu">


                @forelse($categories as $category)
                    @if($category->children->count() > 0)
                    <li><a href="{{ route('shop.index', ['category'=>$category->slug]) }}" class="{{ request()->category == $category->slug ? 'active' : '' }} bt3">{{ $category->name }}<span>({{ $category->children->count() }})</span></a>
                        <ul class="sub-menu">
                            @foreach($category->children as $subMenu)
                            <li><a href="{{ route('shop.index', ['category'=>$subMenu->slug]) }}" class="{{ request()->subMenu == $subMenu->slug ? 'active' : '' }} bt3">{{ $subMenu->name }}
                                    <span>({{ $products->count() }})</span>
                                </a></li>
                            @endforeach
                        </ul>
                    </li>
                @else
                    <li><a href="{{ route('shop.index', ['category'=>$category->slug]) }}" class="{{ request()->category == $category->slug ? 'active' : '' }} bt3">{{ $category->name }}</a>

                    </li>
                @endif
                @empty
                <div><h3>No Items Found</h3></div>
                @endforelse

{{--                <li><a href="#" class="active bt3">women</a>--}}
{{--                    <ul class="sub-menu">--}}
{{--                        <li><a href="#">Midi Dresses <span>(2)</span></a></li>--}}
{{--                        <li><a href="#">Maxi Dresses<span>(56)</span></a></li>--}}
{{--                        <li><a href="#">Prom Dresses<span>(36)</span></a></li>--}}
{{--                        <li><a href="#">Little Black Dresses <span>(27)</span></a></li>--}}
{{--                        <li><a href="#">Mini Dresses<span>(19)</span></a></li>--}}
{{--                    </ul>--}}
{{--                </li>--}}

{{--            <li><a href="#" class="bt3" >Man Wear</a>--}}
{{--                <ul class="sub-menu">--}}
{{--                    <li><a href="#" class="bt3">jeans<span>(56)</span></a></li>--}}
{{--                    <li><a href="#" class="bt3">Shirt<span>(36)</span></a></li>--}}
{{--                    <li><a href="#" class="bt3">Sweater <span>(2)</span></a></li>--}}
{{--                    <li><a href="#" class="bt3">suits<span>(36)</span></a></li>--}}
{{--                    <li><a href="#" class="bt3">jumpers<span>(36)</span></a></li>--}}
{{--                </ul></li>--}}
{{--            <li><a href="#" class="bt3">Children</a>--}}
{{--                <ul class="sub-menu">--}}
{{--                    <li><a href="#">boys<span>(56)</span></a></li>--}}
{{--                    <li><a href="#">girls<span>(36)</span></a></li>--}}
{{--                    <li><a href="#">baby-girl <span>(2)</span></a></li>--}}
{{--                    <li><a href="#">baby-boy<span>(36)</span></a></li>--}}
{{--                </ul></li>--}}
{{--            <li><a href="#" class="bt3" >Footwear</a>--}}
{{--                <ul class="sub-menu">--}}
{{--                    <li><a href="#" >Sneakers<span>(56)</span></a></li>--}}
{{--                    <li><a href="#" >Sandals<span>(36)</span></a></li>--}}
{{--                    <li><a href="#" >Formal Shoes <span>(2)</span></a></li>--}}
{{--                    <li><a href="#" >Boots<span>(36)</span></a></li>--}}
{{--                    <li><a href="#" >Flip Flops<span>(36)</span></a></li>--}}
{{--                </ul></li>--}}
{{--            <li><a href="#" class="bt3">Bags & Purses</a></li>--}}
{{--            <li><a href="#" class="bt3">Jewelry</a>--}}
{{--                <ul class="sub-menu">--}}
{{--                    <li><a href="#">Watches<span>(56)</span></a></li>--}}
{{--                    <li><a href="#">glasses<span>(36)</span></a></li>--}}
{{--                    <li><a href="#">neckleces <span>(2)</span></a></li>--}}
{{--                    <li><a href="#">ankleleces<span>(36)</span></a></li>--}}
{{--                    <li><a href="#">silver-j<span>(36)</span></a></li>--}}
{{--                </ul></li>--}}
        </ul>
    </div>
    <div class="filter-widget mb-0">
        <h2 class="fw-title">refine by</h2>
        <div class="price-range-wrap">
            <div style="display: flex; justify-content: space-between" >
                <h4>Price:</h4>
                <h4><a href="{{ route('shop.index', ['category'=>request()->category,'brand'=>request()->brand, 'sort' =>'low_high']) }}">Low to High</a></h4><h4>|</h4>
                <h4><a href="{{ route('shop.index', ['category'=>request()->category,'brand'=>request()->brand, 'sort' =>'high_low']) }}">High to Low</a></h4>
            </div>
            <div class="spacer"></div>
            <div class="price-range ui-slider ui-corner-all ui-slider-horizontal ui-widget ui-widget-content" data-min="10" data-max="270">
                <div class="ui-slider-range ui-corner-all ui-widget-header" style="left: 0%; width: 100%;"></div>
                <span tabindex="0" class="ui-slider-handle ui-corner-all ui-state-default" style="left: 0%;">
								</span>
                <span tabindex="0" class="ui-slider-handle ui-corner-all ui-state-default" style="left: 100%;">
								</span>
            </div>
            <div class="range-slider">

                <div class="price-input">
                    <input type="text" id="minamount" name="min_price">
                    <input type="text" id="maxamount" name="max_price">
                </div>
            </div>
        </div>
    </div>
    <div class="filter-widget mb-0">
        <h2 class="fw-title">color by</h2>
        <div class="fw-color-choose">
            <div class="cs-item">
                <input type="radio" name="cs" id="gray-color">
                <label class="cs-gray" for="gray-color">
                    <span>(3)</span>
                </label>
            </div>
            <div class="cs-item">
                <input type="radio" name="cs" id="orange-color">
                <label class="cs-orange" for="orange-color">
                    <span>(25)</span>
                </label>
            </div>
            <div class="cs-item">
                <input type="radio" name="cs" id="yollow-color">
                <label class="cs-yollow" for="yollow-color">
                    <span>(112)</span>
                </label>
            </div>
            <div class="cs-item">
                <input type="radio" name="cs" id="green-color">
                <label class="cs-green" for="green-color">
                    <span>(75)</span>
                </label>
            </div>
            <div class="cs-item">
                <input type="radio" name="cs" id="purple-color">
                <label class="cs-purple" for="purple-color">
                    <span>(9)</span>
                </label>
            </div>
            <div class="cs-item">
                <input type="radio" name="cs" id="blue-color" checked="">
                <label class="cs-blue" for="blue-color">
                    <span>(29)</span>
                </label>
            </div>
        </div>
    </div>
    <div class="filter-widget mb-0">
        <h2 class="fw-title">Size</h2>
        <div class="fw-size-choose">
            @foreach($sizes as $size)
                <div class="sc-item">
                    <input type="radio" name="sc" id="{{asset($size->slug.'-size')}}"

                    >
                    <label for="{{asset($size->slug.'-size')}}">{{ $size->name }}</label>
                </div>
            @endforeach

        </div>
    </div>
    <div class="filter-widget">
        <h2 class="fw-title">Brand</h2>
        <ul class="category-menu">
            @foreach($brands as $brand)
                <li><a href="{{ route('shop.index', ['category'=>request()->category, 'brand'=>$brand->slug]) }}" class="{{ request()->brand == $brand->slug ? 'active' : '' }}">{{ $brand->name }}<span>(2)</span></a></li>
            @endforeach
        </ul>
    </div>
</div>
@section('extra-jss')
    <script>
        (function () {
            const classname = document.querySelectorAll('.sc-item')

            Array.from(classname).forEach( function(element){
                element.addEventListener('click', function (){
                    window.location.href = '{{ route('shop.index', ['category'=>request()->category, 'size'=>$size->slug]) }}'
                });
            });
        })();
    </script>

@endsection
