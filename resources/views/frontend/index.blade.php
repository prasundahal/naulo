
@extends('frontend.layouts.app')

@section('content')

            <main class="no-main ps-home--dark">
                <div class="section-slide--default">
                    <div class="owl-carousel" data-owl-auto="false" data-owl-loop="true" data-owl-speed="10000" data-owl-gap="0" data-owl-nav="true" data-owl-dots="true" data-owl-item="1" data-owl-item-xs="1" data-owl-item-sm="1" data-owl-item-md="1" data-owl-item-lg="1" data-owl-duration="1000" data-owl-mousedrag="on">

                        @foreach (\App\Slider::where('published', 1)->get() as $key => $slider)
                        <div class="ps-banner"><img  src="{{ asset($slider->photo) }}" data-src="{{ asset($slider->photo) }}" alt="alt" />
                            <div class="ps-content">
                                <div class="container">
                                    <div class="ps-content-box">
                                        <div class="ps-node">MART FROM Naulo Bazar</div>
                                        <div class="ps-title">Welcome to <b class='text-success'>NauloBazar</b> Foods & Organic Online.</div>
                                        <div class="ps-subtitle">* Free delivery for your first order</div>
                                        <div class="ps-shopnow"> <a href="{{ $slider->link }}">Shop Now<i class="icon-chevron-right"></i></a></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>

        {{-- cat --}}
        @include('frontend.partials.home_categories_section')
                <section class="ps-component">
                    <div class="container">
                        <div class="component__header">
                            <h3 class="component__title">Top Greatest Offers</h3>
                            <a class="component__view" href="shop-categories.html">View All <i class="icon-chevron-right"></i></a>
                        </div>
                        <div class="component__content promotion__carousel">
                            <div class="owl-carousel" data-owl-auto="true" data-owl-loop="true" data-owl-speed="7000" data-owl-gap="0" data-owl-nav="true" data-owl-dots="true" data-owl-item="4" data-owl-item-xs="1" data-owl-item-sm="1" data-owl-item-md="2" data-owl-item-lg="4" data-owl-duration="1000" data-owl-mousedrag="on">
                                <div class="promotion__thumbnail"><a href="index.html"><img src="assets/img/promotion/promotion_01.jpg" alt></a></div>
                                <div class="promotion__thumbnail"><a href="index.html"><img src="assets/img/promotion/promotion_02.jpg" alt></a></div>
                                <div class="promotion__thumbnail"><a href="index.html"><img src="assets/img/promotion/promotion_03.jpg" alt></a></div>
                                <div class="promotion__thumbnail"><a href="index.html"><img src="assets/img/promotion/promotion_01.jpg" alt></a></div>
                            </div>
                        </div>
                    </div>
                </section>

                @include('frontend.partials.flashsell')

              {{-- best seller top vendors --}}
@include('frontend.partials.best_sellers_section')
                <section class="ps-component ps-component--selling">
                    <div class="container">
                        <div class="component__header">
                            <h3 class="component__title">Top Best Selling Items</h3>
                            <a class="component__view" href="shop-categories.html">View All <i class="icon-chevron-right"></i></a>
                        </div>
                        <div class="component__content">
                            <div class="owl-carousel" data-owl-auto="true" data-owl-loop="true" data-owl-speed="12000" data-owl-gap="0" data-owl-nav="true" data-owl-dots="true" data-owl-item="5" data-owl-item-xs="2" data-owl-item-sm="2" data-owl-item-md="3" data-owl-item-lg="5" data-owl-duration="1000" data-owl-mousedrag="on">
                                <div class="ps-sell__product">
                                    <div class="ps-product--standard"><a href="product_details.html"><img class="ps-product__thumbnail" src="assets/img/products/01-fresh/01_16a.jpg" alt="alt" /></a><a class="ps-product__expand" href="javascript:void(0);"><i class="icon-heart"></i></a><span class="ps-badge ps-product__offbadge">35% Off </span>
                                        <div class="ps-product__content">
                                            <p class="ps-product__type"><i class="icon-store"></i>Karery Store</p>
                                            <h5><a class="ps-product__name" href="product_details.html">Broccoli Crowns</a></h5>
                                            <p class="ps-product__unit">300g</p>
                                            <div class="ps-product__rating">
                                                <select class="rating-stars">
                                                    <option value="1">1</option>
                                                    <option value="2">2</option>
                                                    <option value="3">3</option>
                                                    <option value="4">4</option>
                                                    <option value="5" selected="selected">5</option>
                                                </select><span>(4)</span>
                                            </div>
                                            <p class="ps-product-price-block"><span class="ps-product__sale">Rs3.90</span><span class="ps-product__price">Rs9.99</span>
                                            </p>
                                        </div>
                                        <div class="ps-product__footer">
                                            <div class="def-number-input number-input safari_only">
                                                <button class="minus" onclick="this.parentNode.querySelector('input[type=number]').stepDown()"><i class="icon-minus"></i></button>
                                                <input class="quantity" min="0" name="quantity" value="1" type="number" />
                                                <button class="plus" onclick="this.parentNode.querySelector('input[type=number]').stepUp()"><i class="icon-plus"></i></button>
                                            </div>
                                            <div class="ps-product__total">Total: <span>Rs3.90</span>
                                            </div>
                                            <button class="ps-product__addcart" ><i class="icon-cart"></i>Add to cart</button>

                                        </div>
                                    </div>
                                </div>
                                <div class="ps-sell__product">
                                    <div class="ps-product--standard"><a href="product_details.html"><img class="ps-product__thumbnail" src="assets/img/products/01-fresh/01_22a.jpg" alt="alt" /></a><a class="ps-product__expand" href="javascript:void(0);"><i class="icon-heart"></i></a><span class="ps-badge ps-product__new">New </span>
                                        <div class="ps-product__content">
                                            <p class="ps-product__type"><i class="icon-store"></i>Shannan Yu</p>
                                            <h5><a class="ps-product__name" href="product_details.html">Bar S -Classic Bun Length Franks</a></h5>
                                            <p class="ps-product__unit">454g</p>
                                            <div class="ps-product__rating">
                                                <select class="rating-stars">
                                                    <option value="1">1</option>
                                                    <option value="2">2</option>
                                                    <option value="3">3</option>
                                                    <option value="4">4</option>
                                                    <option value="5">5</option>
                                                </select><span>(0)</span>
                                            </div>
                                            <p class="ps-product-price-block"><span class="ps-product__price-default">Rs14.99</span>
                                            </p>
                                        </div>
                                        <div class="ps-product__footer">
                                            <div class="def-number-input number-input safari_only">
                                                <button class="minus" onclick="this.parentNode.querySelector('input[type=number]').stepDown()"><i class="icon-minus"></i></button>
                                                <input class="quantity" min="0" name="quantity" value="1" type="number" />
                                                <button class="plus" onclick="this.parentNode.querySelector('input[type=number]').stepUp()"><i class="icon-plus"></i></button>
                                            </div>
                                            <div class="ps-product__total">Total: <span>Rs14.99</span>
                                            </div>
                                            <button class="ps-product__addcart" ><i class="icon-cart"></i>Add to cart</button>

                                        </div>
                                    </div>
                                </div>
                                <div class="ps-sell__product">
                                    <div class="ps-product--standard"><a href="product_details.html"><img class="ps-product__thumbnail" src="assets/img/products/01-fresh/01_21a.jpg" alt="alt" /></a><a class="ps-product__expand" href="javascript:void(0);"><i class="icon-heart"></i></a><span class="ps-badge ps-product__new">New </span>
                                        <div class="ps-product__content">
                                            <p class="ps-product__type"><i class="icon-store"></i>Shannan Yu</p>
                                            <h5><a class="ps-product__name" href="product_details.html">Bar S -Classic Bun Length Franks</a></h5>
                                            <p class="ps-product__unit">500ml</p>
                                            <div class="ps-product__rating">
                                                <select class="rating-stars">
                                                    <option value="1">1</option>
                                                    <option value="2">2</option>
                                                    <option value="3">3</option>
                                                    <option value="4">4</option>
                                                    <option value="5">5</option>
                                                </select><span>(0)</span>
                                            </div>
                                            <p class="ps-product-price-block"><span class="ps-product__price-default">Rs4.99</span>
                                            </p>
                                        </div>
                                        <div class="ps-product__footer">
                                            <div class="def-number-input number-input safari_only">
                                                <button class="minus" onclick="this.parentNode.querySelector('input[type=number]').stepDown()"><i class="icon-minus"></i></button>
                                                <input class="quantity" min="0" name="quantity" value="1" type="number" />
                                                <button class="plus" onclick="this.parentNode.querySelector('input[type=number]').stepUp()"><i class="icon-plus"></i></button>
                                            </div>
                                            <div class="ps-product__total">Total: <span>Rs4.99</span>
                                            </div>
                                            <button class="ps-product__addcart" ><i class="icon-cart"></i>Add to cart</button>

                                        </div>
                                    </div>
                                </div>
                                <div class="ps-sell__product">
                                    <div class="ps-product--standard"><a href="product_details.html"><img class="ps-product__thumbnail" src="assets/img/products/01-fresh/01_27a.jpg" alt="alt" /></a><a class="ps-product__expand" href="javascript:void(0);"><i class="icon-heart"></i></a><span class="ps-badge ps-product__stock">Out of stock </span>
                                        <div class="ps-product__content">
                                            <p class="ps-product__type"><i class="icon-store"></i>Shannan Yu</p>
                                            <h5><a class="ps-product__name" href="product_details.html">Fresh Organic Milk</a></h5>
                                            <p class="ps-product__unit">100g</p>
                                            <div class="ps-product__rating">
                                                <select class="rating-stars">
                                                    <option value="1">1</option>
                                                    <option value="2">2</option>
                                                    <option value="3" selected="selected">3</option>
                                                    <option value="4">4</option>
                                                    <option value="5">5</option>
                                                </select><span>(6)</span>
                                            </div>
                                            <p class="ps-product-price-block"><span class="ps-product__price-default">Rs5.99</span>
                                            </p>
                                        </div>
                                        <div class="ps-product__footer">
                                            <div class="def-number-input number-input safari_only">
                                                <button class="minus" onclick="this.parentNode.querySelector('input[type=number]').stepDown()"><i class="icon-minus"></i></button>
                                                <input class="quantity" min="0" name="quantity" value="1" type="number" />
                                                <button class="plus" onclick="this.parentNode.querySelector('input[type=number]').stepUp()"><i class="icon-plus"></i></button>
                                            </div>
                                            <div class="ps-product__total">Total: <span>Rs5.99</span>
                                            </div>
                                            <button class="ps-product__addcart" ><i class="icon-cart"></i>Add to cart</button>

                                        </div>
                                    </div>
                                </div>
                                <div class="ps-sell__product">
                                    <div class="ps-product--standard"><a href="product_details.html"><img class="ps-product__thumbnail" src="assets/img/products/01-fresh/01_6a.jpg" alt="alt" /></a><a class="ps-product__expand" href="javascript:void(0);"><i class="icon-heart"></i></a><span class="ps-badge ps-product__offbadge">25% Off </span>
                                        <div class="ps-product__content">
                                            <p class="ps-product__type"><i class="icon-store"></i>Shannan Yu</p>
                                            <h5><a class="ps-product__name" href="product_details.html">Honest Organic Still Lemonade</a></h5>
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
                                            <p class="ps-product-price-block"><span class="ps-product__sale">Rs6.99</span><span class="ps-product__price">Rs9.90</span>
                                            </p>
                                        </div>
                                        <div class="ps-product__footer">
                                            <div class="def-number-input number-input safari_only">
                                                <button class="minus" onclick="this.parentNode.querySelector('input[type=number]').stepDown()"><i class="icon-minus"></i></button>
                                                <input class="quantity" min="0" name="quantity" value="1" type="number" />
                                                <button class="plus" onclick="this.parentNode.querySelector('input[type=number]').stepUp()"><i class="icon-plus"></i></button>
                                            </div>
                                            <div class="ps-product__total">Total: <span>Rs6.99</span>
                                            </div>
                                            <button class="ps-product__addcart" ><i class="icon-cart"></i>Add to cart</button>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>

                <section class="section-recommendations--default">
                    <div class="container">
                        <div class="recommendations__header">
                            <h3 class="recommendations__title">Recommendations</h3>
                        </div>
                        <div class="recommendations__content">
                            <div class="owl-carousel" data-owl-auto="true" data-owl-loop="true" data-owl-speed="15000" data-owl-gap="0" data-owl-nav="true" data-owl-dots="true" data-owl-item="5" data-owl-item-xs="2" data-owl-item-sm="2" data-owl-item-md="3" data-owl-item-lg="5" data-owl-duration="1000" data-owl-mousedrag="on">
                                <div class="ps-recommendation__product">
                                    <div class="ps-product--standard"><a href="product_details.html"><img class="ps-product__thumbnail" src="assets/img/products/06-softdrinks-teacoffee/06_5a.jpg" alt="alt" /></a><a class="ps-product__expand" href="javascript:void(0);"><i class="icon-heart"></i></a><span class="ps-badge ps-product__offbadge">25% Off </span>
                                        <div class="ps-product__content">
                                            <p class="ps-product__type"><i class="icon-store"></i>Kinaraa Store</p>
                                            <h5><a class="ps-product__name" href="product_details.html">Michelob Ultra Cans</a></h5>
                                            <p class="ps-product__unit">250g</p>
                                            <div class="ps-product__rating">
                                                <select class="rating-stars">
                                                    <option value="1">1</option>
                                                    <option value="2">2</option>
                                                    <option value="3">3</option>
                                                    <option value="4" selected="selected">4</option>
                                                    <option value="5">5</option>
                                                </select><span>(2)</span>
                                            </div>
                                            <p class="ps-product-price-block"><span class="ps-product__sale">Rs15.99</span><span class="ps-product__price">Rs20.90</span>
                                            </p>
                                        </div>
                                        <div class="ps-product__footer">
                                            <div class="def-number-input number-input safari_only">
                                                <button class="minus" onclick="this.parentNode.querySelector('input[type=number]').stepDown()"><i class="icon-minus"></i></button>
                                                <input class="quantity" min="0" name="quantity" value="1" type="number" />
                                                <button class="plus" onclick="this.parentNode.querySelector('input[type=number]').stepUp()"><i class="icon-plus"></i></button>
                                            </div>
                                            <div class="ps-product__total">Total: <span>Rs15.99</span>
                                            </div>
                                            <button class="ps-product__addcart" ><i class="icon-cart"></i>Add to cart</button>

                                        </div>
                                    </div>
                                </div>
                                <div class="ps-recommendation__product">
                                    <div class="ps-product--standard"><a href="product_details.html"><img class="ps-product__thumbnail" src="assets/img/products/06-softdrinks-teacoffee/06_11a.jpg" alt="alt" /></a><a class="ps-product__expand" href="javascript:void(0);"><i class="icon-heart"></i></a><span class="ps-badge ps-product__offbadge">25% Off </span>
                                        <div class="ps-product__content">
                                            <p class="ps-product__type"><i class="icon-store"></i>Karery Store</p>
                                            <h5><a class="ps-product__name" href="product_details.html">Broccoli Crowns</a></h5>
                                            <p class="ps-product__unit">1 box</p>
                                            <div class="ps-product__rating">
                                                <select class="rating-stars">
                                                    <option value="1">1</option>
                                                    <option value="2">2</option>
                                                    <option value="3">3</option>
                                                    <option value="4" selected="selected">4</option>
                                                    <option value="5">5</option>
                                                </select><span>(4)</span>
                                            </div>
                                            <p class="ps-product-price-block"><span class="ps-product__sale">Rs9.99</span><span class="ps-product__price">Rs5.90</span>
                                            </p>
                                        </div>
                                        <div class="ps-product__footer">
                                            <div class="def-number-input number-input safari_only">
                                                <button class="minus" onclick="this.parentNode.querySelector('input[type=number]').stepDown()"><i class="icon-minus"></i></button>
                                                <input class="quantity" min="0" name="quantity" value="1" type="number" />
                                                <button class="plus" onclick="this.parentNode.querySelector('input[type=number]').stepUp()"><i class="icon-plus"></i></button>
                                            </div>
                                            <div class="ps-product__total">Total: <span>Rs9.99</span>
                                            </div>
                                            <button class="ps-product__addcart" ><i class="icon-cart"></i>Add to cart</button>

                                        </div>
                                    </div>
                                </div>
                                <div class="ps-recommendation__product">
                                    <div class="ps-product--standard"><a href="product_details.html"><img class="ps-product__thumbnail" src="assets/img/products/01-fresh/01_18a.jpg" alt="alt" /></a><a class="ps-product__expand" href="javascript:void(0);"><i class="icon-heart"></i></a><span class="ps-badge ps-product__stock">Out of stock </span>
                                        <div class="ps-product__content">
                                            <p class="ps-product__type"><i class="icon-store"></i>Sun Farm</p>
                                            <h5><a class="ps-product__name" href="product_details.html">Oniins, Green</a></h5>
                                            <p class="ps-product__unit">300g</p>
                                            <div class="ps-product__rating">
                                                <select class="rating-stars">
                                                    <option value="1">1</option>
                                                    <option value="2">2</option>
                                                    <option value="3">3</option>
                                                    <option value="4" selected="selected">4</option>
                                                    <option value="5">5</option>
                                                </select><span>(2)</span>
                                            </div>
                                            <p class="ps-product-price-block"><span class="ps-product__sale">Rs6.90</span><span class="ps-product__price">Rs9.99</span><span class="ps-product__off">35% Off</span>
                                            </p>
                                        </div>
                                        <div class="ps-product__footer">
                                            <div class="def-number-input number-input safari_only">
                                                <button class="minus" onclick="this.parentNode.querySelector('input[type=number]').stepDown()"><i class="icon-minus"></i></button>
                                                <input class="quantity" min="0" name="quantity" value="1" type="number" />
                                                <button class="plus" onclick="this.parentNode.querySelector('input[type=number]').stepUp()"><i class="icon-plus"></i></button>
                                            </div>
                                            <div class="ps-product__total">Total: <span>Rs6.90</span>
                                            </div>
                                            <button class="ps-product__addcart" ><i class="icon-cart"></i>Add to cart</button>

                                        </div>
                                    </div>
                                </div>
                                <div class="ps-recommendation__product">
                                    <div class="ps-product--standard"><a href="product_details.html"><img class="ps-product__thumbnail" src="assets/img/products/01-fresh/01_1a.jpg" alt="alt" /></a><a class="ps-product__expand" href="javascript:void(0);"><i class="icon-heart"></i></a><span class="ps-badge ps-product__new">New </span>
                                        <div class="ps-product__content">
                                            <p class="ps-product__type"><i class="icon-store"></i>NauloBazar</p>
                                            <h5><a class="ps-product__name" href="product_details.html">Corn, Yellow Sweet</a></h5>
                                            <p class="ps-product__unit">4 per pack</p>
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
                                        <div class="ps-product__footer">
                                            <div class="def-number-input number-input safari_only">
                                                <button class="minus" onclick="this.parentNode.querySelector('input[type=number]').stepDown()"><i class="icon-minus"></i></button>
                                                <input class="quantity" min="0" name="quantity" value="1" type="number" />
                                                <button class="plus" onclick="this.parentNode.querySelector('input[type=number]').stepUp()"><i class="icon-plus"></i></button>
                                            </div>
                                            <div class="ps-product__total">Total: <span>Rs4.49</span>
                                            </div>
                                            <button class="ps-product__addcart" ><i class="icon-cart"></i>Add to cart</button>

                                        </div>
                                    </div>
                                </div>
                                <div class="ps-recommendation__product">
                                    <div class="ps-product--standard"><a href="product_details.html"><img class="ps-product__thumbnail" src="assets/img/products/01-fresh/01_32a.jpg" alt="alt" /></a><a class="ps-product__expand" href="javascript:void(0);"><i class="icon-heart"></i></a>
                                        <div class="ps-product__content">
                                            <p class="ps-product__type"><i class="icon-store"></i>Shannan Yu</p>
                                            <h5><a class="ps-product__name" href="product_details.html">Large Green Bell Pepper</a></h5>
                                            <p class="ps-product__unit">250g</p>
                                            <div class="ps-product__rating">
                                                <select class="rating-stars">
                                                    <option value="1">1</option>
                                                    <option value="2">2</option>
                                                    <option value="3">3</option>
                                                    <option value="4" selected="selected">4</option>
                                                    <option value="5">5</option>
                                                </select><span>(2)</span>
                                            </div>
                                            <p class="ps-product-price-block"><span class="ps-product__price-default">Rs14.99</span>
                                            </p>
                                        </div>
                                        <div class="ps-product__footer">
                                            <div class="def-number-input number-input safari_only">
                                                <button class="minus" onclick="this.parentNode.querySelector('input[type=number]').stepDown()"><i class="icon-minus"></i></button>
                                                <input class="quantity" min="0" name="quantity" value="1" type="number" />
                                                <button class="plus" onclick="this.parentNode.querySelector('input[type=number]').stepUp()"><i class="icon-plus"></i></button>
                                            </div>
                                            <div class="ps-product__total">Total: <span>Rs14.99</span>
                                            </div>
                                            <button class="ps-product__addcart" ><i class="icon-cart"></i>Add to cart</button>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>

                <section class="ps-component ps-component--selling jfu-NauloBazar-sell">
                    <div class="container">
                        <div class="component__header">
                        <h3 class="component__title">Just For You</h3>
                    </div>
                        <div class="component__content">
                            <div class="row m-0">


@foreach($allproducts as $product)
<div class="col-6 col-md-4 col-lg-3 col-xl-2 p-0">
    <div class="ps-sell__product">
        <div class="ps-product--standard"><a href="{{ route('product', $product->slug) }}"><img class="ps-product__thumbnail" src="{{ $product->thumbnail_img }}" alt="alt" /></a><a class="ps-product__expand" href="javascript:void(0);"><i class="icon-heart"></i></a><span class="ps-badge ps-product__new">New </span>
            <div class="ps-product__content">
                <p class="ps-product__type"><i class="icon-store"></i>shop - {{ $product->user->name }}</p>
                <h5><a class="ps-product__name" href="product_details.html">{{ $product->name }}</a></h5>
                <p class="ps-product__unit">454g</p>
                <div class="ps-product__rating">
                    <select class="rating-stars">
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                    </select><span>(0)</span>
                </div>
                <p class="ps-product-price-block"><span class="ps-product__price-default">Rs14.99</span>
                </p>
            </div>
            <div class="ps-product__footer">
                <div class="def-number-input number-input safari_only">
                    <button class="minus" onclick="this.parentNode.querySelector('input[type=number]').stepDown()"><i class="icon-minus"></i></button>
                    <input class="quantity" min="0" name="quantity" value="1" type="number" />
                    <button class="plus" onclick="this.parentNode.querySelector('input[type=number]').stepUp()"><i class="icon-plus"></i></button>
                </div>
                <div class="ps-product__total">Total: <span>Rs14.99</span>
                </div>
                <button class="ps-product__addcart" onclick="showAddToCartModal({{ $product->id }})"><i class="icon-cart"></i>Add to cart</button>

            </div>
        </div>
    </div>
</div>
@endforeach




                            </div>
                        </div>
                        <div class="flashSale__loading">
                            <p>LOADING...</p>
                        </div>
                    </div>
                </section>
                @if(\App\BusinessSetting::where('type', 'classified_product')->first()->value == 1)
                @php
                    $customer_products = \App\CustomerProduct::where('status', '1')->where('published', '1')->take(10)->get();
                @endphp
               @if (count($customer_products) > 0)
                    <section class="ps-promotion--default">
                        <div class="container">
                            <div class="row m-0">
                                @foreach ($customer_products as $key => $customer_product)
                                <div class="col-6 col-lg-3"><a href="{{ route('customer.product', $customer_product->slug) }}"><img src="{{ asset($customer_product->thumbnail_img) }}" data-src="{{ asset($customer_product->thumbnail_img) }}" alt="{{ __($customer_product->name) }}"></a></div>
                                @endforeach
                                {{-- <div class="col-6 col-lg-3"><a href="shop-view-grid.html"><img src="assets/img/promotion/home-dark-promo-02.jpg" alt="alt"></a></div>
                                <div class="col-6 col-lg-3"><a href="shop-view-grid.html"><img src="assets/img/promotion/home-dark-promo-03.jpg" alt="alt"></a></div>
                                <div class="col-6 col-lg-3"><a href="shop-view-grid.html"><img src="assets/img/promotion/home-dark-promo-04.jpg" alt="alt"></a></div> --}}
                            </div>
                        </div>
                    </section>

                    @endif
                    @endif

                    <!-- <section class="ps-component ps-component--customer">
                        <div class="container">
                            <div class="component__header">
                                <h3 class="component__title">Our Happy customers</h3>
                            </div>
                            <div class="component__content">
                                <div class="owl-carousel" data-owl-auto="true" data-owl-loop="true" data-owl-speed="10000" data-owl-gap="0" data-owl-nav="true" data-owl-dots="true" data-owl-item="2" data-owl-item-xs="1" data-owl-item-sm="1" data-owl-item-md="2" data-owl-item-lg="2" data-owl-item-xl="2" data-owl-duration="1000" data-owl-mousedrag="on">
                                    <div class="ps-customer--block">
                                        <div class="ps-customer__thumbnail"><img src="assets/img/blogs/customer-01.png" alt></div>
                                        <div class="ps-customer__content"><i class="ps-customer__icon icon-quote-open"></i>
                                            <h4 class="ps-customer__name">Bikash Bhandari / <span class="ps-customer__position">MD at Tejobindu Solutions.</span></h4>
                                            <p class="ps-customer__des">“You won't regret it. It's really wonderful. I made back the purchase price in just 48 hours! Your company is truly upstanding and is behind its product 100%.“</p>
                                        </div>
                                    </div>
                                    <div class="ps-customer--block">
                                        <div class="ps-customer__thumbnail"><img src="assets/img/blogs/customer-02.png" alt></div>
                                        <div class="ps-customer__content"><i class="ps-customer__icon icon-quote-open"></i>
                                            <h4 class="ps-customer__name">Sangita Dhital / <span class="ps-customer__position">Housewife</span></h4>
                                            <p class="ps-customer__des">“It's really wonderful. I'd be lost without NauloBazar. I love NauloBazar. I am completely blown away.“</p>
                                        </div>
                                    </div>
                                    <div class="ps-customer--block">
                                        <div class="ps-customer__thumbnail"><img src="assets/img/blogs/post_auth.png" alt></div>
                                        <div class="ps-customer__content"><i class="ps-customer__icon icon-quote-open"></i>
                                            <h4 class="ps-customer__name">Bipin Dhakal / <span class="ps-customer__position">CEO at Tejobindu Solutions.</span></h4>
                                            <p class="ps-customer__des">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section> -->

                    <section class="ps-home--block">
                        <div class="container">
                            <div class="ps-block--promo"><a href="shop-view-grid.html"><img class="desktop-only" src="assets/img/promotion/promo-03.jpg" alt=""></a><a href="shop-view-grid.html"><img class="mobile-only" src="assets/img/promotion/promo-03-mobile.jpg" alt=""></a></div>
                        </div>
                    </section>

                    <section class="ps-component--register">
                        <div class="container">
                            <h3 class="component__title">Get started to Naulo Bazar! Your first delivery is free</h3>
                            <p>Join other shoppers in your area, and try naulobazar.com today.</p><a class="ps-button" href="index.html">Register An Account</a>
                        </div>
                    </section>
                <div class="modal fade" id="popupQuickview" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered modal-xl ps-quickview">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button class="close" type="button" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                            </div>
                            <div class="modal-body">
                                <div class="container-fluid quickview-body">
                                    <div class="row">
                                        <div class="col-12 col-lg-5">
                                            <div class="owl-carousel" data-owl-auto="true" data-owl-loop="true" data-owl-speed="5000" data-owl-gap="0" data-owl-nav="true" data-owl-dots="true" data-owl-item="1" data-owl-item-xs="1" data-owl-item-sm="1" data-owl-item-md="1" data-owl-item-lg="1" data-owl-item-xl="1" data-owl-duration="1000" data-owl-mousedrag="on">
                                                <div class="quickview-carousel"><img class="carousel__thumbnail" src="assets/img/products/01-fresh/01_1a.jpg" alt="alt" /></div>
                                                <div class="quickview-carousel"><img class="carousel__thumbnail" src="assets/img/products/01-fresh/01_2a.jpg" alt="alt" /></div>
                                                <div class="quickview-carousel"><img class="carousel__thumbnail" src="assets/img/products/01-fresh/01_4a.jpg" alt="alt" /></div>
                                                <div class="quickview-carousel"><img class="carousel__thumbnail" src="assets/img/products/01-fresh/01_9a.jpg" alt="alt" /></div>
                                            </div>
                                        </div>
                                        <div class="col-12 col-lg-7">
                                            <div class="quickview__product">
                                                <div class="product__header">
                                                    <div class="product__title">Hovis Farmhouse Soft White Bread</div>
                                                    <div class="product__meta">
                                                        <div class="product__rating">
                                                            <select class="rating-stars">
                                                                <option value="1">1</option>
                                                                <option value="2">2</option>
                                                                <option value="3">3</option>
                                                                <option value="4" selected="selected">4</option>
                                                                <option value="5">5</option>
                                                            </select><span>4 customer reviews</span>
                                                        </div>
                                                        <div class="product__code"><span>SKU: </span>#VEG20938</div>
                                                    </div>
                                                </div>
                                                <div class="product__content">
                                                    <div class="product__price"><span class="sale">Rs5.49</span><span class="price">Rs6.90</span><span class="off">25% Off</span></div>
                                                    <p class="product__unit">300g</p>
                                                    <div class="alert__success">Availability: <span>34 in stock</span></div>
                                                    <ul>
                                                        <li>Type: Organic</li>
                                                        <li>MFG: Jun 4, 2020</li>
                                                        <li>LIFE: 365 days</li>
                                                    </ul>
                                                </div>
                                                <div class="product__action">
                                                    <label>Quantity: </label>
                                                    <div class="def-number-input number-input safari_only">
                                                        <button class="minus" onclick="this.parentNode.querySelector('input[type=number]').stepDown()"><i class="icon-minus"></i></button>
                                                        <input class="quantity" min="0" name="quantity" value="1" type="number">
                                                        <button class="plus" onclick="this.parentNode.querySelector('input[type=number]').stepUp()"><i class="icon-plus"></i></button>
                                                    </div>
                                                    <button class="btn product__addcart"> <i class="icon-cart"></i>Add to cart</button>
                                                    <button class="btn button-icon icon-md"><i class="icon-heart"></i></button>
                                                </div>
                                                <div class="product__footer">
                                                    <div class="ps-social--share"><a class="ps-social__icon facebook" href="#"><i class="fa fa-thumbs-up"></i><span>Like</span><span class="ps-social__number">0</span></a><a class="ps-social__icon facebook" href="#"><i class="fa fa-facebook-square"></i><span>Like</span><span class="ps-social__number">0</span></a><a class="ps-social__icon twitter" href="#"><i class="fa fa-twitter"></i><span>Like</span></a><a class="ps-social__icon" href="#"><i class="fa fa-plus-square"></i><span>Like</span></a></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="modal fade" id="popupAddToCart" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-hidden="true">
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
                </div>
            </main>


            @endsection
            @section('script')
    <script>
        $(document).ready(function(){
            $.post('{{ route('home.section.featured') }}', {_token:'{{ csrf_token() }}'}, function(data){
                $('#section_featured').html(data);
                slickInit();
            });

            $.post('{{ route('home.section.best_selling') }}', {_token:'{{ csrf_token() }}'}, function(data){
                $('#section_best_selling').html(data);
                slickInit();
            });

            $.post('{{ route('home.section.home_categories') }}', {_token:'{{ csrf_token() }}'}, function(data){
                $('#section_home_categories').html(data);
                slickInit();
            });

            $.post('{{ route('home.section.best_sellers') }}', {_token:'{{ csrf_token() }}'}, function(data){
                $('#section_best_sellers').html(data);
                slickInit();
            });
        });
    </script>
@endsection
