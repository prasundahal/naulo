@extends('frontend.layouts.app')

@section('meta_title'){{ $shop->meta_title }}@stop

@section('meta_description'){{ $shop->meta_description }}@stop

@section('meta')
    <!-- Schema.org markup for Google+ -->
    <meta itemprop="name" content="{{ $shop->meta_title }}">
    <meta itemprop="description" content="{{ $shop->meta_description }}">
    <meta itemprop="image" content="{{ asset($shop->logo) }}">

    <!-- Twitter Card data -->
    <meta name="twitter:card" content="product">
    <meta name="twitter:site" content="@publisher_handle">
    <meta name="twitter:title" content="{{ $shop->meta_title }}">
    <meta name="twitter:description" content="{{ $shop->meta_description }}">
    <meta name="twitter:creator" content="@author_handle">
    <meta name="twitter:image" content="{{ asset($shop->meta_img) }}">

    <!-- Open Graph data -->
    <meta property="og:title" content="{{ $shop->meta_title }}" />
    <meta property="og:type" content="Shop" />
    <meta property="og:url" content="{{ route('shop.visit', $shop->slug) }}" />
    <meta property="og:image" content="{{ asset($shop->logo) }}" />
    <meta property="og:description" content="{{ $shop->meta_description }}" />
    <meta property="og:site_name" content="{{ $shop->name }}" />
@endsection

@section('content')
    <!-- <section>
        <img loading="lazy"  src="https://via.placeholder.com/2000x300.jpg" alt="" class="img-fluid">
    </section> -->

    @php
        $total = 0;
        $rating = 0;
        foreach ($shop->user->products as $key => $seller_product) {
            $total += $seller_product->reviews->count();
            $rating += $seller_product->reviews->sum('rating');
        }
    @endphp
  <main class="no-main">
    <div class="ps-breadcrumb">
        <div class="container">
            <ul class="ps-breadcrumb__list">
                <li class="active"><a href="index.html">Home</a></li>
                <li class="active"><a href="vendor-list.html">Store List</a></li>
                <li><a href="javascript:void(0);">Sangita Ymart</a></li>
            </ul>
        </div>
    </div>

<section class="section--vendorStore">
<div class="container">
    <div class="row">
        <div class="col-12 col-lg-3">
            <div class="widget--block">
                <h5 class="widget__title">ALL CATEGORIES</h5>
                <ul class="menu--mobile widget__list">

                    <li class="category-item"> <a href="shop-categories.html">Beer, Wine & Spirits</a>
                    </li>
                    <li class="category-item"> <a href="shop-categories.html">Bakery</a>
                    </li>
                    <li class="category-item"> <a href="shop-categories.html">Frozen Foods</a>
                    </li>
                    <li class="category-item"> <a href="shop-categories.html">Drinks, Tea & Coffee</a>
                    </li>
                    <li class="category-item"> <a href="shop-categories.html">Beer, Wine & Spirits</a>
                    </li>
                    <li class="category-item"> <a href="shop-categories.html">Bakery</a>
                    </li>
                    <li class="category-item"> <a href="shop-categories.html">Frozen Foods</a>
                    </li>
                    <li class="category-item"> <a href="shop-categories.html">Drinks, Tea & Coffee</a>
                    </li>
                    <li class="category-item"> <a href="shop-categories.html">Beer, Wine & Spirits</a>
                    </li>
                    <li class="category-item"> <a href="shop-categories.html">Baby & Child</a>
                    </li>
                    <li class="category-item"> <a href="shop-categories.html">Kitchen & Dining</a>
                    </li>
                    <li class="menu-item-has-children category-item"><a href="shop-categories.html">Ready Meals</a><span class="sub-toggle"><i class="icon-chevron-down"></i></span>
                        <ul class="sub-menu">
                            <li> <a href="shop-view-grid.html">Traditional British</a>
                            </li>
                            <li> <a href="shop-view-grid.html">Indian</a>
                            </li>
                            <li> <a href="shop-view-grid.html">Italian</a>
                            </li>
                            <li> <a href="shop-view-grid.html">Chinese</a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
            <div class="store__location">
                <h5 class="widget__title">STORE LOCATIONS</h5>
                <iframe src="https://maps.google.com/maps?q=One%20Store%20One%20Store%20Boudhanath%20Sadak,%20Kathmandu%2044600&t=&z=15&ie=UTF8&iwloc=&output=embed" width="600" height="450" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
            </div>
            <div class="contact__vendor">
                <h5 class="widget__title">CONTACT VENDOR</h5>
                <form>
                    <div class="form-row">
                        <div class="col-12 form-group--block">
                            <input class="form-control" type="text" placeholder="Your Name">
                        </div>
                        <div class="col-12 form-group--block">
                            <input class="form-control" type="text" placeholder="you@example.com">
                        </div>
                        <div class="col-12 form-group--block">
                            <textarea class="form-control" placeholder="Type your message..."></textarea>
                        </div>
                        <div class="col-12 form-group--block">
                            <button class="btn ps-button">Send Message</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>

        <div class="col-12 col-lg-9">
            <div class="store__header">
                <div class="row m-0">
                    <div class="col-12 col-lg-4 p-0">
                        <div class="store__avatar"><img src="assets/img/vendor_store_avatar.jpg" alt></div>
                    </div>
                    <div class="col-12 col-lg-8 p-0">
                        <div class="store__detail">
                            <h3 class="store__name">Sangita Ymart</h3>
                            <p class="store__address">Budhanilkantha Municipality-14 Kapan, 44600 Kathmandu Nepal</p>
                            <p class="store__phone">(+977) 9810099062</p>
                            <p class="store__email"><a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="7b081a16080e151c241c1a0f131e093b1c161a121755181416">[email&#160;protected]</a></p>
                            <div class="store__rating">
                                <select class="rating-stars">
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4" selected="selected">4</option>
                                    <option value="5">5</option>
                                </select><span>(43 ratings)</span>
                            </div>
                            <div class="store__social"><a class="icon_social facebook" href="#"><i class="fa fa-facebook-f"></i></a><a class="icon_social twitter" href="#"><i class="fa fa-twitter"></i></a><a class="icon_social google" href="#"><i class="fa fa-google-plus"></i></a><a class="icon_social youtube" href="#"><i class="fa fa-youtube"></i></a><a class="icon_social wifi" href="#"><i class="fa fa-wifi"></i></a></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="store__perpage">
                <p class="result"> <span>60</span>Products Found</p>
                <p class="text-right">page
                    <input type="text" value="1">of 3
                </p>
            </div>
            <div class="viewtype--block">
                <div class="viewtype__sortby">
                    <div class="select">
                        <select class="single-select2" name="state">
                            <option value="popularity">Sort by popularity</option>
                            <option value="price">Sort by price</option>
                            <option value="sale">Sort by sale of</option>
                        </select>
                    </div>
                </div>
                <div class="viewtype__select"> <span class="text">View: </span>
                    <div class="select">
                        <select class="single-select2" name="state">
                            <option value="25">20 per page</option>
                            <option value="12">12 per page</option>
                            <option value="5">5 per page</option>
                        </select>
                    </div>
                    <div class="type">
                        <span class="active"><i class="icon-icons"></i></span>
                        <!-- <span><i class="icon-icons2"></i></span> -->
                        <span><i class="icon-list4"></i></span>
                    </div>
                </div>
            </div>
        <div class="store__product">
            <div class="row m-0">

{{  $products = \App\Product::where('user_id', $shop->user->id)->where('published', 1)->paginate(24) }}
                @foreach ($products as $key => $product)
                <div class="col-6 col-md-4 col-lg-3 p-0">
                    <div class="ps-product--standard"><a href="product_details.html"><img class="ps-product__thumbnail" src="{{ asset($product->thumbnail_img) }}" data-src="{{ asset($product->thumbnail_img) }}" alt="{{ __($product->name) }}" /></a><a class="ps-product__expand" href="javascript:void(0);"><i class="icon-heart"></i></a><span class="ps-badge ps-product__offbadge">32% Off </span>
                        <div class="ps-product__content">
                            {{-- <p class="ps-product__type"><i class="icon-store"></i>NauloMart</p> --}}
                            <h5><a class="ps-product__name" href="{{ route('product', $product->slug) }}">{{ __($product->name) }}</a></h5>
                            <p class="ps-product__unit">300g</p>
                            <div class="ps-product__rating">
                                <select class="rating-stars">
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                    <option value="5" selected="selected">5</option>
                                </select><span>(14)</span>
                            </div>
                            <p class="ps-product-price-block"><span class="ps-product__sale">Rs100.00</span><span class="ps-product__price">Rs112.00</span>
                            </p>
                        </div>
                        <div class="ps-product__footer">
                            <div class="def-number-input number-input safari_only">
                                <button class="minus" onclick="this.parentNode.querySelector('input[type=number]').stepDown()"><i class="icon-minus"></i></button>
                                <input class="quantity" min="0" name="quantity" value="1" type="number" />
                                <button class="plus" onclick="this.parentNode.querySelector('input[type=number]').stepUp()"><i class="icon-plus"></i></button>
                            </div>
                            <div class="ps-product__total">Total: <span>Rs100.00</span>
                            </div>
                            <button class="ps-product__addcart" onclick="showAddToCartModal({{ $product->id }})"><i class="icon-cart"></i>Add to cart</button>

                        </div>
                    </div>
                </div>
                @endforeach

            </div>
        </div>
        <div class="ps-pagination blog--pagination">
            <ul class="pagination">
                <li class="chevron"><a href="#"><i class="icon-chevron-left"></i></a></li>
                {{ $products->links() }}
                <li class="chevron"><a href="#"><i class="icon-chevron-right"></i></a></li>
            </ul>
        </div>
        </div>

    </div>
</div>
</section>

</main>







@endsection
