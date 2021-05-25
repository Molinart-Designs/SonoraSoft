<div class="container">

    <div class="wrap-breadcrumb">
        <ul>
            <li class="item-link"><a href="{{ url('/') }}" class="link">home</a></li>
            <li class="item-link"><span>{{ $product->name }}</span></li>
        </ul>
    </div>
    <div class="row">

        <div class="col-lg-12 main-content-area">
            <div class="wrap-product-detail">
                <div class="detail-media">
                    <div class="product-gallery">
                        <ul class="slides">

                            <li data-thumb="{{ asset('assets/images/products/' . $product->img) }}">
                                <img src="{{ asset('assets/images/products/' . $product->img) }}" alt="product thumbnail" />
                            </li>

                        </ul>
                    </div>
                </div>
                <div class="detail-info">
                    <div class="product-rating">
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <a href="#" class="count-review">(0 reviews)</a>
                    </div>
                    <h2 class="product-name">{{ $product->name }}</h2>
                    <div class="short-desc">
                        <p>{{ $product->short_description }}</p>
                    </div>
                    <div class="wrap-price"><span class="product-price">$250.00</span></div>
                    <div class="stock-info in-stock">
                        <p class="availability">Availability: <b> {{ $product->stock ? 'In Stock' : 'Out of Stock' }} ({{ $product->stock }})</b></p>
                    </div>
                    <div class="quantity">
                        <span>Quantity:</span>
                        <div class="quantity-input">
                            <input type="text" name="product-quatity" value="1" data-max="{{ $product->stock }}" pattern="[0-9]*" >

                            <a class="btn btn-reduce" href="#"></a>
                            <a class="btn btn-increase" href="#"></a>
                        </div>
                    </div>
                    <div class="wrap-butons">
                        <a href="#" class="btn add-to-cart" wire:click.prevent="store({{ $product->id }}, '{{ $product->name }}', {{ $product->regular_price }})">Add to Cart</a>
                    </div>
                </div>

                <div class="advance-info">
                    <div class="tab-control normal">
                        <a href="#description" class="tab-control-item active">description</a>
                        <a href="#add_infomation" class="tab-control-item">Addtional Infomation</a>
                    </div>
                    <div class="tab-contents">
                        <div class="tab-content-item active" id="description">
                            {{ $product->description }}
                        </div>
                        <div class="tab-content-item " id="add_infomation">
                            <table class="shop_attributes">
                                <tbody>
                                <tr>
                                    <th>Weight</th><td class="product_weight">1 kg</td>
                                </tr>
                                <tr>
                                    <th>Dimensions</th><td class="product_dimensions">12 x 15 x 23 cm</td>
                                </tr>
                                <tr>
                                    <th>Color</th><td><p>Black, Blue, Grey, Violet, Yellow</p></td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div><!--end main products area-->

        <div class="single-advance-box col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="wrap-show-advance-info-box style-1 box-in-site">
                <h3 class="title-box">Featured Products</h3>
                <div class="wrap-products">
                    <div class="products slide-carousel owl-carousel style-nav-1 equal-container" data-items="5" data-loop="false" data-nav="true" data-dots="false" data-responsive='{"0":{"items":"1"},"480":{"items":"2"},"768":{"items":"3"},"992":{"items":"3"},"1200":{"items":"5"}}' >

                        @foreach($featured as $item)
                        <div class="product product-style-2 equal-elem ">
                            <div class="product-thumnail">
                                <a href="{{ url('/product/' . $item->slug) }}" title="{{ $item->name }}">
                                    <figure><img src="{{ asset('assets/images/products/' . $item->img) }}" width="214" height="214" alt="{{ $item->name }}"></figure>
                                </a>
                                <div class="group-flash">
                                    <span class="flash-item new-label">featured</span>
                                </div>
                                <div class="wrap-btn">
                                    <a href="{{ url('/product/' . $item->slug) }}" class="function-link">See more</a>
                                </div>
                            </div>
                            <div class="product-info">
                                <a href="{{ url('/product/' . $item->slug) }}" class="product-name"><span>{{ $item->name }}</span></a>
                                <div class="wrap-price"><span class="product-price">{{ $item->regular_price }}</span></div>
                            </div>
                        </div>
                        @endforeach

                    </div>
                </div><!--End wrap-products-->
            </div>
        </div>

    </div><!--end row-->

</div><!--end container-->
