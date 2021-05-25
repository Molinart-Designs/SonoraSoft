<div class="container">
    <div class="row">

        <div class="col-lg-12 main-content-area">

            @if(Session::has('message'))
                <div class="alert alert-success" role="alert">
                    {{ Session::get('message') }}
                </div>
            @endif

            <div class="row">

                <ul class="product-list grid-products equal-container">

                    @foreach($products as $product)
                    <li class="col-lg-3 col-md-3 col-sm-6 col-xs-6 ">
                        <div class="product product-style-3 equal-elem ">
                            <div class="product-thumnail">
                                <a href="{{ url('/product/' . $product->slug) }}" title="{{ $product->name }}">
                                    <figure><img src="{{ asset('assets/images/products/' . $product->img) }}" alt="{{ $product->name }}"></figure>
                                </a>
                            </div>
                            <div class="product-info">
                                <a href="#" class="product-name"><span>{{ $product->name }}</span></a>
                                <div class="wrap-price"><span class="product-price">${{ $product->regular_price }}</span></div>
                                <a href="#" class="btn add-to-cart" wire:click.prevent="store({{ $product->id }}, '{{ $product->name }}', {{ $product->regular_price }})">Add To Cart</a>
                            </div>
                        </div>
                    </li>
                    @endforeach

                </ul>

            </div>

            <div class="wrap-pagination-info">
                {{ $products->links() }}
            </div>
        </div><!--end main products area-->

    </div><!--end row-->

</div><!--end container-->
