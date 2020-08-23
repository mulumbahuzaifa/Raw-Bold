<section class="related-product-section">
    <div class="container">
        <div class="section-title">
            <h2>RELATED PRODUCTS</h2>
        </div>
        <div class="product-slider owl-carousel">
            @foreach($mightAlsoLike as $product)
                <a href="{{ route('shop.show', $product->slug) }}">
                    <div class="product-item">
                        <div class="pi-pic">
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
                            <h6>{{ $product->price }}</h6>
                            <p>{{ $product->name }}</p>
                        </div>
                    </div>
                </a>
            @endforeach
        </div>
    </div>
</section>
