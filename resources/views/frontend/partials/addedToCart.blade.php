<div id="popupAddToCart" class="modal-body p-4 added-to-cart">
    <div class="text-center text-success">
        <i class="fa fa-check"></i>
        <h3>{{__('Item added to your cart!')}}</h3>
    </div>
    <div class="product-box">
        <div class="block">
            <div class="block-image">
                <img src="{{ asset('frontend/images/placeholder.jpg') }}" data-src="{{ asset($product->thumbnail_img) }}" class="lazyload" alt="Product Image">
            </div>
            <div class="block-body">
                <h6 class="strong-600">
                    {{ __($product->name) }}
                </h6>
                <div class="row align-items-center no-gutters mt-2 mb-2">
                    <div class="col-sm-2">
                        <div>{{__('Price')}}:</div>
                    </div>
                    <div class="col-sm-10">
                        <div class="heading-6 text-danger">
                            <strong>
                                {{ single_price(($data['price']+$data['tax'])*$data['quantity']) }}
                            </strong>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="text-center">
        <button class="btn btn-styled btn-base-1 btn-outline mb-3 mb-sm-0" data-dismiss="modal">{{__('Back to shopping')}}</button>
        <a href="{{ route('cart') }}" class="btn btn-styled btn-base-1 mb-3 mb-sm-0">{{__('Proceed to Checkout')}}</a>
    </div>
</div>




{{-- <div class="modal fade" id="popupAddToCart" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-xl ps-addcart">
        <div class="modal-content">
            <div class="modal-header">
                <button class="close" type="button" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            </div>
            <div class="modal-body">
                <div class="container-fluid">
                    <div class="alert__success"><i class="icon-checkmark-circle"></i> "Morrisons The Best Beef Topside" successfully added to you cart. <a href="shopping-cart.html">View cart(3)</a></div>
                    <hr>
                    <h3 class="cart__title">CUSTOMERS WHO BOUGHT THIS ALSO BOUGHT:</h3>
                    <div class="cart__content">
                        <div class="owl-carousel" data-owl-auto="true" data-owl-loop="true" data-owl-speed="5000" data-owl-gap="0" data-owl-nav="false" data-owl-dots="true" data-owl-item="4" data-owl-item-xs="2" data-owl-item-sm="2" data-owl-item-md="2" data-owl-item-lg="4" data-owl-item-xl="4" data-owl-duration="1000" data-owl-mousedrag="on">
                            <div class="cart-item">
                                <div class="ps-product--standard"><a href="product_details.html"><img class="ps-product__thumbnail" src="assets/img/products/07-beer-winespirits/07_10a.jpg" alt="alt" /></a>
                                    <div class="ps-product__content">
                                        <p class="ps-product__type"><i class="icon-store"></i>NauloBazarMart</p><a href="product_details.html">
                                            <h5 class="ps-product__name">Extreme Budweiser Light Can</h5>
                                        </a>
                                        <p class="ps-product__unit">500g</p>
                                        <div class="ps-product__rating">
                                            <select class="rating-stars">
                                                <option value="1">1</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                                <option value="4" selected="selected">4</option>
                                                <option value="5">5</option>
                                            </select><span>(4)</span>
                                        </div>
                                        <p class="ps-product-price-block"><span class="ps-product__sale">Rs8.90</span><span class="ps-product__price">Rs9.90</span><span class="ps-product__off">15% Off</span>
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="cart-item">
                                <div class="ps-product--standard"><a href="product_details.html"><img class="ps-product__thumbnail" src="assets/img/products/01-fresh/01_16a.jpg" alt="alt" /></a>
                                    <div class="ps-product__content">
                                        <p class="ps-product__type"><i class="icon-store"></i>Karery Store</p><a href="product_details.html">
                                            <h5 class="ps-product__name">Honest Organic Still Lemonade</h5>
                                        </a>
                                        <p class="ps-product__unit">100g</p>
                                        <div class="ps-product__rating">
                                            <select class="rating-stars">
                                                <option value="1">1</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                                <option value="4">4</option>
                                                <option value="5" selected="selected">5</option>
                                            </select><span>(14)</span>
                                        </div>
                                        <p class="ps-product-price-block"><span class="ps-product__price-default">Rs1.99</span>
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="cart-item">
                                <div class="ps-product--standard"><a href="product_details.html"><img class="ps-product__thumbnail" src="assets/img/products/07-beer-winespirits/07_10a.jpg" alt="alt" /></a>
                                    <div class="ps-product__content">
                                        <p class="ps-product__type"><i class="icon-store"></i>Ganesh Farm</p><a href="product_details.html">
                                            <h5 class="ps-product__name">Natures Own 100% Wheat</h5>
                                        </a>
                                        <p class="ps-product__unit">100g</p>
                                        <div class="ps-product__rating">
                                            <select class="rating-stars">
                                                <option value="1">1</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                                <option value="4">4</option>
                                                <option value="5">5</option>
                                            </select><span>(0)</span>
                                        </div>
                                        <p class="ps-product-price-block"><span class="ps-product__price-default">Rs4.49</span>
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="cart-item">
                                <div class="ps-product--standard"><a href="product_details.html"><img class="ps-product__thumbnail" src="assets/img/products/01-fresh/01_15a.jpg" alt="alt" /></a>
                                    <div class="ps-product__content">
                                        <p class="ps-product__type"><i class="icon-store"></i>Naulo Mart</p><a href="product_details.html">
                                            <h5 class="ps-product__name">Avocado, Hass Large</h5>
                                        </a>
                                        <p class="ps-product__unit">300g</p>
                                        <div class="ps-product__rating">
                                            <select class="rating-stars">
                                                <option value="1">1</option>
                                                <option value="2">2</option>
                                                <option value="3" selected="selected">3</option>
                                                <option value="4">4</option>
                                                <option value="5">5</option>
                                            </select><span>(6)</span>
                                        </div>
                                        <p class="ps-product-price-block"><span class="ps-product__sale">Rs6.99</span><span class="ps-product__price">Rs9.90</span><span class="ps-product__off">25% Off</span>
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="cart-item">
                                <div class="ps-product--standard"><a href="product_details.html"><img class="ps-product__thumbnail" src="assets/img/products/07-beer-winespirits/07_10a.jpg" alt="alt" /></a>
                                    <div class="ps-product__content">
                                        <p class="ps-product__type"><i class="icon-store"></i>Sun Farm</p><a href="product_details.html">
                                            <h5 class="ps-product__name">Kevita Kom Ginger</h5>
                                        </a>
                                        <p class="ps-product__unit">200g</p>
                                        <div class="ps-product__rating">
                                            <select class="rating-stars">
                                                <option value="1">1</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                                <option value="4" selected="selected">4</option>
                                                <option value="5">5</option>
                                            </select><span>(6)</span>
                                        </div>
                                        <p class="ps-product-price-block"><span class="ps-product__sale">Rs4.90</span><span class="ps-product__price">Rs3.99</span><span class="ps-product__off">15% Off</span>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div> --}}
