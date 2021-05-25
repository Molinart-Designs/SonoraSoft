<div class="container">

    <div class="wrap-breadcrumb">
        <ul>
            <li class="item-link"><a href="{{ url('/') }}" class="link">home</a></li>
            <li class="item-link"><span>Cart</span></li>
        </ul>
    </div>
    <div>
        @if(Session::has('success_message'))
            <div class="alert alert-success">
                <stong>Success</stong> {{ Session::get('success_message') }}
            </div>
        @endif
        @if(Cart::count() > 0)
            <div class="wrap-iten-in-cart">
                <h3 class="box-title">Products Name</h3>
                <ul class="products-cart">
                    @foreach(Cart::content() as $product)
                    <li class="pr-cart-item">
                        <div class="product-image">
                            <figure><img src="{{ asset('assets/images/products/' . $product->model->img) }}" alt=""></figure>
                        </div>
                        <div class="product-name">
                            <a class="link-to-product" href="{{ url('product/' . $product->model->slug) }}">{{ $product->model->name }}</a>
                        </div>
                        <div class="price-field produtc-price"><p class="price">${{ $product->model->regular_price }}</p></div>
                        <div class="quantity">
                            <div class="quantity-input">
                                <input type="text" name="product-quatity" value="{{ $product->qty }}" data-max="{{ $product->model->stock }}" pattern="[0-9]*" >
                                <a class="btn btn-increase" href="#" wire:click.prevent="increaseQuantity('{{ $product->rowId }}')"></a>
                                <a class="btn btn-reduce" href="#" wire:click.prevent="decreaseQuantity('{{ $product->rowId }}')"></a>
                            </div>
                        </div>
                        <div class="price-field sub-total"><p class="price">${{ $product->subtotal }}</p></div>
                        <div class="delete">
                            <a href="#" class="btn btn-delete" title="" wire:click.prevent="removeFromCart('{{ $product->rowId }}')">
                                <span>Delete from your cart</span>
                                <i class="fa fa-times-circle" aria-hidden="true"></i>
                            </a>
                        </div>
                    </li>
                    @endforeach
                </ul>
            </div>

            <div class="summary">
                <div class="order-summary">
                    <h4 class="title-box">Order Summary</h4>
                    <p class="summary-info"><span class="title">Subtotal</span><b class="index">${{ Cart::subtotal() }}</b></p>
                    <p class="summary-info"><span class="title">Tax</span><b class="index">${{ Cart::tax() }}</b></p>
                    <p class="summary-info"><span class="title">Shipping</span><b class="index">Free Shipping</b></p>
                    <p class="summary-info total-info "><span class="title">Total</span><b class="index">${{ Cart::total() }}</b></p>
                </div>
                <div class="checkout-info">
                    <label class="checkbox-field">
                        <input class="frm-input " name="have-code" id="have-code" value="" type="checkbox"><span>I have promo code</span>
                    </label>
                    <a class="btn btn-checkout" href="#" wire:click.prevent="checkout">Check out</a>
                    <a class="link-to-shop" href="{{ url('/') }}">Continue Shopping <i class="fa fa-arrow-circle-right" aria-hidden="true"></i></a>
                </div>
            </div>
        @else
            <p>No items in cart</p>
            <a class="link-to-shop" href="{{ url('/') }}">Continue Shopping <i class="fa fa-arrow-circle-right" aria-hidden="true"></i></a>
        @endif

        <div class="single-advance-box col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="wrap-show-advance-info-box style-1 box-in-site">
                <h3 class="title-box">Featured Products</h3>
                <div class="wrap-products">
                    <div class="products slide-carousel owl-carousel style-nav-1 equal-container" data-items="5" data-loop="false" data-nav="true" data-dots="false" data-responsive='{"0":{"items":"1"},"480":{"items":"2"},"768":{"items":"3"},"992":{"items":"3"},"1200":{"items":"5"}}' >

                        @foreach($featured as $i)
                            <div class="product product-style-2 equal-elem ">
                                <div class="product-thumnail">
                                    <a href="{{ url('/product/' . $i->slug) }}" title="{{ $i->name }}">
                                        <figure><img src="{{ asset('assets/images/products/' . $i->img) }}" width="214" height="214" alt="{{ $i->name }}"></figure>
                                    </a>
                                    <div class="group-flash">
                                        <span class="flash-item new-label">featured</span>
                                    </div>
                                    <div class="wrap-btn">
                                        <a href="{{ url('/product/' . $i->slug) }}" class="function-link">See more</a>
                                    </div>
                                </div>
                                <div class="product-info">
                                    <a href="{{ url('/product/' . $i->slug) }}" class="product-name"><span>{{ $i->name }}</span></a>
                                    <div class="wrap-price"><span class="product-price">{{ $i->regular_price }}</span></div>
                                </div>
                            </div>
                        @endforeach

                    </div>
                </div><!--End wrap-products-->
            </div>
        </div>

    </div><!--end row-->

    </div><!--end main content area-->
</div><!--end container-->
