@php
   if(Session::has('locale')){
       $locale = Session::get('locale', Config::get('app.locale'));
   }
   else{
       $locale = 'en';
   }
   $total = 0
@endphp
@php
$generalsetting = \App\GeneralSetting::first();
@endphp
  <header class="header ps-header--dark">
                <div class="ps-top-bar">
                    <div class="container">
                        <div class="top-bar">
                            <div class="top-bar__left">
                                <ul class="nav-top-dark">
                                    <li class="nav-top-item"> <a href="javascript:void(0);"><i class='icon-map-marker'></i> {{ $generalsetting->address }}</a>
                                    </li>
                                    <li class="nav-top-item"> <a href="javascript:void(0);"><i class='icon-telephone'></i>  {{ $generalsetting->phone }}</a>
                                    </li>
                                </ul>
                            </div>
                            <div class="top-bar__right">
                                <ul class="nav-top">
                                    <li class="nav-top-item"><a class="nav-top-link" href="vendor-registration.html">Sell on NauloBazar</a></li>
                                    <li class="nav-top-item"><a class="nav-top-link" href="{{ route('orders.track') }}">Order Tracking</a></li>
                                    <li class="nav-top-item languages"><a class="nav-top-link" href="javascript:void(0);"> <span class="current-languages">English</span><i class="icon-chevron-down"></i></a>
                                        <div class="select--dropdown">


                                            <ul class="select-languages">
                                                @foreach (\App\Language::all() as $key => $language)
                                                <li class="active language-item" @if($locale == $language) active @endif" data-value="{{ $language->code }}"><a href="javascript:void(0);">{{ $language->name }}</a></li>

                                                @endforeach
                                            </ul>
                                        </div>
                                    </li>
                                    @auth
                                    <li class="nav-top-item account"><a class="nav-top-link" href="javascript:void(0);"> <i class="icon-user"></i>Hi! <span class="font-bold">{{Auth::user()->name}}</span></a>
                                        <div class="account--dropdown">
                                            <div class="account-anchor">
                                                <div class="triangle"></div>
                                            </div>
                                            <div class="account__content">

                                                <ul class="account-list">

                                                    <li class="title-item">My Account
                                                    </li>
                                                    <li> <a href="{{ route('dashboard') }}">
                                                    <i class="icon-menu-circle">&nbsp;</i> Dasdboard</a>
                                                    </li>
                                                    <li> <a href="my_profile.html">
                                                    <i class="icon-users2">&nbsp;</i> My Profile</a>
                                                    </li>
                                                    <li> <a href="my_address.html">
                                                    <i class="icon-map-marker-user">&nbsp;</i> My Address Book</a>
                                                    </li>
                                                    <li> <a href="my_order.html">
                                                        <i class="icon-cart-add">&nbsp;</i> My Orders</a>
                                                    </li>
                                                    <li> <a href="my_returns.html">
                                                    <i class="icon-cart-remove">&nbsp;</i> My Returns</a>
                                                    </li>
                                                    <li> <a href="my_cancel.html"> <i class="icon-stream-error">&nbsp;</i> My Cancellations</a>
                                                    </li>
                                                    <li> <a href="{{ route('wishlists.index') }}">
                                                    <i class="icon-heart">&nbsp;</i> My Wishlist</a>
                                                    </li>
                                                    <li> <a href="my_reviews.html">
                                                    <i class="icon-star">&nbsp;</i> My Reviews</a>
                                                    </li>
                                                    <li> <a href="change_password.html">
                                                    <i class="icon-eye">&nbsp;</i> Change Password</a>
                                                    </li>
                                                </ul>
                                                <a class="account-logout" href="{{ route('logout') }}"><i class="icon-exit-left"></i>Log Out</a>
                                            </div>
                                        </div>
                                    </li>
                                    @else
                                    <li class="nav-top-item account"><a class="nav-top-link" href="{{ route('user.login') }}"> <i class="icon-key"></i>Login</a>

                                    </li>
                                    <li class="nav-top-item account"><a class="nav-top-link" href="{{ route('user.registration') }}"> <i class="icon-user"></i>Register</a>

                                    </li>
                                    @endauth









                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="ps-header--center header--mobile">
                    <div class="container">
                        <div class="header-inner">
                            <div class="header-inner__left">
                                <button class="navbar-toggler"><i class="icon-menu"></i></button>
                            </div>
                            <div class="header-inner__center"><a class="logo open" href="/">Naulo<span class="text-black"> Bazar</span></a></div>
                            <div class="header-inner__right">
                                <button class="button-icon icon-sm search-mobile"><i class="icon-magnifier"></i></button>
                            </div>
                        </div>
                    </div>
                </div>
                <section class="ps-header--center header-desktop">
                    <div class="container">
                        <div class="header-inner">
                            <div class="header-inner__left"><a class="logo" href="/">Naulo<b class="text-white"> Bazar</b></a>
                                <button class="category-toggler"><i class="icon-menu"></i></button>
                            </div>
                            <div class="header-inner__center">
                                <form action="{{ route('search') }}" method="GET">
                                <div class="input-group">
                                    {{-- <div class="input-group-prepend">
                                        <div class="header-search-select"><span class="current">All<i class="icon-chevron-down"></i></span>
                                            <ul class="list">
                                                <li class="category-option active" data-value="option"><a href="javascript:void(0);">All</a></li>
                                                @foreach (\App\Category::all() as $key => $category)
                                                <li class="category-option"><a>Fresh</a><span class="sub-toggle"><i class="icon-chevron-down"></i></span>
                                                    <ul>
                                                        <li> <a href="#">Meat & Poultry</a>
                                                        </li>

                                                    </ul>
                                                </li>
                                                @endforeach
                                            </ul>
                                        </div><i class="icon-magnifier search"></i>
                                    </div> --}}
                                    <input class="form-control input-search" id="search" name="q" placeholder="I'm searchching for...">
                                    <div class="input-group-append">
                                        <button class="btn" type="submit">Search</button>
                                    </div>
                                </div>
                            </form>
                            </div>
                            <div class="header-inner__right">
                                <a class="button-icon icon-md" href="{{ route('wishlists.index') }}">
                                    <i class="icon-heart text-white"></i>
                                    @if(Auth::check())
                                    <span class="badge bg-warning">{{ count(Auth::user()->wishlists)}}</span>
                                    @else
                                    <span class="badge bg-warning">0</span>
                                    @endif
                                </a>


                                <div class="button-icon btn-cart-header">
                                    <i class="icon-cart icon-shop5 text-white">
                                        @if(Session::has('cart'))
                                        </i><span class="badge bg-warning">{{ count(Session::get('cart'))}}</span>
                                        @else
                                    </i><span class="badge bg-warning">0</span>
                                    @endif
                                    <div class="mini-cart">
                                        <div class="mini-cart--content">
                                            <div class="mini-cart--overlay"></div>
                                            <div class="mini-cart--slidebar cart--box">
                                                <div class="mini-cart__header">
                                                    <div class="cart-header-title">

                                                        <h5>Shopping Cart(3)</h5><a class="close-cart" href="{{ route('cart') }}"><i class="icon-arrow-right"></i></a>
                                                    </div>
                                                </div>
                                                @if(Session::has('cart'))
                                                @if(count($cart = Session::get('cart')) > 0)
                                                <div class="mini-cart__products">
                                                    <div class="out-box-cart">
                                                        <div class="triangle-box">
                                                            <div class="triangle"></div>
                                                        </div>
                                                    </div>
                                                    <ul class="list-cart">
                                                        @php
                                                        $total = 0;
                                                    @endphp
                                                    @foreach($cart as $key => $cartItem)
                                                        @php
                                                            $product = \App\Product::find($cartItem['id']);
                                                            $total = $total + $cartItem['price']*$cartItem['quantity'];
                                                        @endphp

                                                        <li class="cart-item">
                                                            <div class="ps-product--mini-cart"><a href="{ route('product', $product->slug) }}"><img class="ps-product__thumbnail"  src="{{ asset('frontend/images/placeholder.jpg') }}" data-src="{{ asset($product->thumbnail_img) }}" class="img-fluid lazyload" alt="{{ __($product->name) }}" /></a>
                                                                <div class="ps-product__content"><a class="ps-product__name" href="{{ route('product', $product->slug) }}">{{ __($product->name) }}</a>
                                                                    <p class="ps-product__unit">{{ $cartItem['quantity'] }}</p>
                                                                    <p class="ps-product__meta"> <span class="ps-product__price">Rs{{ single_price($cartItem['price']*$cartItem['quantity']) }}</span><span class="ps-product__quantity">(x{{ $cartItem['quantity'] }})</span>
                                                                    </p>
                                                                </div>
                                                                <button onclick="removeFromCart({{ $key }})"><div class="ps-product__remove"><i class="icon-trash2"></i></div>  </button>
                                                            </div>
                                                        </li>
                                                        @endforeach
                                                    </ul>

                                                </div>
                                                <div class="mini-cart__footer row">
                                                    <div class="col-6 title">TOTAL</div>
                                                    <div class="col-6 text-right total">Rs{{ single_price($total) }}</div>
                                                    <div class="col-12 d-flex"><a class="view-cart" href="{{ route('cart') }}">View cart</a>
                                                        @if (Auth::check())
                                                        <a class="checkout" href="{{ route('checkout.shipping_info') }}">Checkout</a></div>
                                                        @endif
                                                </div>
                                                @else
                                                <div class="col-6 title">Your Cart Is empty</div>
                                                @endif
                                                  @else
                                                <div class="col-6 title">Your Cart Is empty</div>
                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="ps-top__total">Shopping Cart<b>{{$total}} </b></div>
                            </div>
                        </div>
                    </div>
                </section>
                <nav class="navigation">
                    <div class="container">
                        <ul class="menu menu-dark">
                           <li class="menu-item-has-children has-mega-menu"><a class="nav-link" href="javascript:void(0);"> <i class="icon-text-align-left text-white mr-3"></i>Categories </a><span class="sub-toggle"><i class="icon-chevron-down"></i></span>
                                <div class="mega-menu mega-menu-category">
                                    <ul class="menu--mobile">
                                        <li class="daily-deals category-item"> <a href="flash-sale.html">Daily Deals</a>
                                        </li>
                                        <li class="category-item"> <a href="shop-categories.html">Top Promotions</a>
                                        </li>
                                        <li class="category-item"> <a href="shop-categories.html">New Arrivals</a>
                                        </li>
                                        @foreach (\App\Category::all()->take(11) as $key => $category)
                                        @php
                                            $brands = array();
                                        @endphp
                                        <li class="menu-item-has-children category-item"><a href="{{ route('products.category', $category->slug) }}">{{ __($category->name) }}</a><span class="sub-toggle"><i class="icon-chevron-down"></i></span>

                                            <ul class="sub-menu">
                                                @foreach ($category->subCategories as $subcat )
                                                <li>
                                               <a href="{{route('products.category',$subcat->slug)}}"> {{$subcat->name}}</a>
                                                </li>
                                                @endforeach
                                            </ul>
                                        </li>
                                        @endforeach
                                        <li class="menu-item-has-children category-item"><a href="shop-categories.html">Food Cupboard</a><span class="sub-toggle"><i class="icon-chevron-down"></i></span>
                                            <ul class="sub-menu">
                                                <li> <a href="index.html">Crisps, Snacks & Nuts</a>
                                                </li>
                                                <li> <a href="index.html">Breakfast Cereals</a>
                                                </li>
                                                <li> <a href="index.html">Tins & Cans</a>
                                                </li>
                                                <li> <a href="index.html">Chocolate & Sweets</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li class="category-item"> <a href="shop-categories.html">Bakery</a>
                                        </li>
                                        <li class="category-item"> <a href="shop-categories.html">Frozen Foods</a>
                                        </li>
                                        <li class="menu-item-has-children category-item"><a href="shop-categories.html">Ready Meals</a><span class="sub-toggle"><i class="icon-chevron-down"></i></span>
                                            <ul class="sub-menu">
                                                <li> <a href="index.html">Traditional British</a>
                                                </li>
                                                <li> <a href="index.html">Indian</a>
                                                </li>
                                                <li> <a href="index.html">Italian</a>
                                                </li>
                                                <li> <a href="index.html">Chinese</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li class="menu-item-has-children category-item"><a href="shop-categories.html">Drinks, Tea &amp; Coffee</a><span class="sub-toggle"><i class="icon-chevron-down"></i></span>
                                            <ul class="sub-menu">
                                                <li> <a href="index.html">Tea & Coffee</a>
                                                </li>
                                                <li> <a href="index.html">Hot Drinks</a>
                                                </li>
                                                <li> <a href="index.html">Fizzy Drinks</a>
                                                </li>
                                                <li> <a href="index.html">Water</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li class="category-item"> <a href="shop-categories.html">Beer, Wine & Spirits</a>
                                        </li>
                                        <li class="category-item"> <a href="shop-categories.html">Baby & Child</a>
                                        </li>
                                        <li class="category-item"> <a href="shop-categories.html">Kitchen & Dining</a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                        </ul>
                        <ul class="menu">
                            <li class="menu-item-has-children has-mega-menu active"><a class="nav-link active" href="index.html">NauloMall</a>
                            </li>
                            <li class="menu-item-has-children has-mega-menu"><a class="nav-link" href="javascript:void(0);">NauloMart</a>
                            </li>
                            <li class="menu-item-has-children has-mega-menu"><a class="nav-link" href="javascript:void(0);">Naulo Bazar</a>
                            </li>
                            <li class="menu-item-has-children has-mega-menu"> <a class="nav-link" href="flash-sale.html">Flash Sale</a>
                            </li>
                            <li class="menu-item-has-children has-mega-menu menu-item-branch"><a class="nav-link" href="javascript:void(0);">Our Top Venders</a>
                                <span class="sub-toggle"><i class="icon-chevron-down"></i></span>
                                <div class="mega-menu mega-brand">
                                    <div class="mega-anchor"></div>
                                    <div class="brand-box">
                                        <div class="brand__title">FEATURED VENDERS</div>
                                        <div class="row">
                                            <div class="col-4"><a href="index.html"><img src="assets/img/brand/brand_themeforest.jpg" alt="alt" /></a></div>
                                            <div class="col-4"><a href="index.html"><img src="assets/img/brand/brand_envato.jpg" alt="alt" /></a></div>
                                            <div class="col-4"><a href="index.html"><img src="assets/img/brand/brand_codecanyon.jpg" alt="alt" /></a></div>
                                            <div class="col-4"><a href="index.html"><img src="assets/img/brand/brand_cudicjungle.jpg" alt="alt" /></a></div>
                                            <div class="col-4"><a href="index.html"><img src="assets/img/brand/brand_videohive.jpg" alt="alt" /></a></div>
                                            <div class="col-4"><a href="index.html"><img src="assets/img/brand/brand_photodune.jpg" alt="alt" /></a></div>
                                            <div class="col-4"><a href="index.html"><img src="assets/img/brand/brand_evatotuts.jpg" alt="alt" /></a></div>
                                            <div class="col-4"><a href="index.html"><img src="assets/img/brand/brand_3docean.jpg" alt="alt" /></a></div>
                                            <div class="col-4"><a href="index.html"><img src="assets/img/brand/microlancer.jpg" alt="alt" /></a></div>
                                        </div><a class="brand__link" href="vendor-list.html">See all Venders<i class="icon-chevron-right"></i></a>
                                    </div>
                                    <div class="brand__promotion"><a href="flash-sale.html"><img src="assets/img/brand/brand_01.jpg" alt="alt" /></a></div>
                                    <div class="brand__promotion"><a href="flash-sale.html"><img src="assets/img/brand/brand_02.jpg" alt="alt" /></a></div>
                                </div>
                            </li>
                        </ul>
                        <div class="navigation-text">
                            <ul class="menu">
                                <li class="menu-item-has-children has-mega-menu"><a class="nav-link" href="{{ route('becomea.vendor')  }}">Become A Vendor</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </nav>
                <div class="mobile-search--slidebar">
                    <div class="mobile-search--content">
                        <div class="mobile-search__header">
                            <div class="mobile-search-box">
                                <div class="input-group">
                                    <input class="form-control" placeholder="I'm shopping for..." id="inputSearchMobile">
                                    <div class="input-group-append">
                                        <button class="btn"> <i class="icon-magnifier"></i></button>
                                    </div>
                                </div>
                                <button class="cancel-search"><i class="icon-cross"></i></button>
                            </div>
                          </div>
                    </div>
                </div>
            </header>
