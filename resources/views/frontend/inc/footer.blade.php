@php
$generalsetting = \App\GeneralSetting::first();
@endphp
<footer class="ps-footer">
                <div class="container">
                    <div class="ps-footer--contact">
                        <div class="row">
                            <div class="col-12 col-lg-4">
                                <p class="contact__title">Contact Us</p>
                                <p><b><i class="icon-telephone"> </i>Hotline: </b><span>(7:00 - 21:30)</span></p>
                                <p class="telephone">+977-9810099062<br>{{ $generalsetting->phone }}</p>
                                <p> <b>Head office: </b>{{ $generalsetting->address }}</p>
                                <p> <b>Email us: </b><a href="index.html" class="">{{ $generalsetting->email  }}</a></p>
                            </div>
                            <div class="col-12 col-lg-4">
                                <div class="row">
                                    <div class="col-12 col-lg-6">
                                        <p class="contact__title">Help & Info<span class="footer-toggle"><i class="icon-chevron-down"></i></span></p>
                                        <ul class="footer-list">
                                            <li> <a href="#">About Us</a>
                                            </li>
                                            <li> <a href="#">Contact</a>
                                            </li>
                                            <li> <a href="#">Store Locations</a>
                                            </li>
                                            <li> <a href="{{ route('terms') }}">Terms of Use</a>
                                            </li>
                                            <li> <a href="{{ route('privacypolicy') }}">Privacy Policy</a>
                                            </li>
                                            <li> <a href="#">FAQs / Help</a>
                                            </li>
                                        </ul>
                                        <hr>
                                    </div>
                                    <div class="col-12 col-lg-6">
                                        <p class="contact__title">Corporate<span class="footer-toggle"><i class="icon-chevron-down"></i></span></p>
                                        <ul class="footer-list">
                                            @if (\App\BusinessSetting::where('type', 'vendor_system_activation')->first()->value == 1)
                                            <li> <a href="{{ route('shops.create') }}">Become a Vendor</a>
                                            </li>
                                            @endif
                                            @foreach (\App\Link::all() as $key => $link)
                                            <li> <a href="{{ $link->url }}">{{ $link->name }}</a>
                                            </li>
                                            @endforeach
                                            {{-- <li> <a href="#">Store Business</a>
                                            </li>
                                            <li> <a href="#">Careers</a>
                                            </li>
                                            <li> <a href="#">Our Suppliers</a>
                                            </li>
                                            <li> <a href="#">Accessibility</a>
                                            </li> --}}
                                        </ul>
                                        <hr>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-lg-4">
                                <p class="contact__title">Newsletter Subscription</p>
                                <p>{{ $generalsetting->description }}</b></p>
                                <form method="POST" action="{{ route('subscribers.store') }}">
                                <div class="input-group">
                                    <div class="input-group-prepend"><i class="icon-envelope"></i></div>
                                    <input class="form-control" type="email" name="email" placeholder="Enter your email..." required>
                                    <div class="input-group-append">
                                        <button type="submit" class="btn">Subscribe</button>
                                    </div>
                                </div>
                            </form>
                            </div>
                        </div>
                    </div>
                    <div class="ps-footer--service">
                        <div class="row">
                            <div class="col-12 col-lg-4">
                                <div class="service__payment">
        							<img src="assets/img/promotion/payment_paypal.jpg" alt>
        							<img src="assets/img/promotion/payment_visa.jpg" alt>
        							<img src="assets/img/promotion/payment_esewa.jpg" alt>
        							<img src="assets/img/promotion/payment_imepay.png" alt>
        						</div>
                                <p class="service__app">Get NauloBazar App to <span class="text-success">get Rs15 coupon</span></p>
                                <div class="service__download"><a href="index.html"><img src="assets/img/promotion/appstore.jpg" alt></a><a href="index.html"><img src="assets/img/promotion/googleplay.jpg" alt></a></div>
                            </div>
                            <div class="col-12 col-lg-4">
                                <table class="table table-bordered">
                                    <tr>
                                        <td><a href="index.html"><img src="assets/img/promotion/badges_01.jpg" alt></a></td>
                                        <td><a href="index.html"><img src="assets/img/promotion/badges_02.jpg" alt></a></td>
                                        <td><a href="index.html"><img src="assets/img/promotion/badges_03.jpg" alt></a></td>
                                    </tr>
                                    <tr>
                                        <td><a href="index.html"><img src="assets/img/promotion/badges_04.jpg" alt></a></td>
                                        <td><a href="index.html"><img src="assets/img/promotion/badges_05.jpg" alt></a></td>
                                        <td><a href="index.html"><img src="assets/img/promotion/badges_06.jpg" alt></a></td>
                                    </tr>
                                </table>
                            </div>
                            <div class="col-12 col-lg-4">
                                <div class="service--block">
                                    <p class="service__item"> <i class="icon-speed-fast"></i><span> <b>Fast Delivery </b>& Shipping</span></p>
                                    <p class="service__item"> <i class="icon-color-sampler"></i><span>Top <b>Offers</b></span></p>
                                    <p class="service__item"> <i class="icon-wallet"></i><span>Money <b>Cashback</b></span></p>
                                    <p class="service__item"> <i class="icon-bubble-user"></i><span>Friendly <b>Support 24/7</b></span></p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="ps-footer--categories">
                        <div class="categories__list"><b>Fresh: </b>
                            <ul class="menu--vertical">
                                <li class="menu-item"> <a href="shop-categories.html">Meat & Poultry</a>
                                </li>
                                <li class="menu-item"> <a href="shop-categories.html">Fruit</a>
                                </li>
                                <li class="menu-item"> <a href="shop-categories.html">Vegetables</a>
                                </li>
                                <li class="menu-item"> <a href="shop-categories.html">Salad & Herbs</a>
                                </li>
                                <li class="menu-item"> <a href="shop-categories.html">Yoghurts</a>
                                </li>
                                <li class="menu-item"> <a href="shop-categories.html">Milk, Butter & Eggs</a>
                                </li>
                                <li class="menu-item"> <a href="shop-categories.html">Ham, Deli & Dips</a>
                                </li>
                                <li class="menu-item"> <a href="shop-categories.html">Cheese</a>
                                </li>
                                <li class="menu-item"> <a href="shop-categories.html">Fish</a>
                                </li>
                                <li class="menu-item"> <a href="shop-categories.html">Pizza & Garlic Bread</a>
                                </li>
                            </ul>
                        </div>
                        <div class="categories__list"><b>Food Cupboard: </b>
                            <ul class="menu--vertical">
                                <li class="menu-item"> <a href="shop-categories.html">Crisps, Snacks & Nuts</a>
                                </li>
                                <li class="menu-item"> <a href="shop-categories.html">Breakfast Cereals</a>
                                </li>
                                <li class="menu-item"> <a href="shop-categories.html">Tins & Cans</a>
                                </li>
                                <li class="menu-item"> <a href="shop-categories.html">Chocolate & Sweets</a>
                                </li>
                                <li class="menu-item"> <a href="shop-categories.html">Biscuits</a>
                                </li>
                                <li class="menu-item"> <a href="shop-categories.html">Rice, Pasta & Pulses</a>
                                </li>
                                <li class="menu-item"> <a href="shop-categories.html">Cooking Ingredients</a>
                                </li>
                            </ul>
                        </div>
                        <div class="categories__list"><b>Bakery: </b>
                            <ul class="menu--vertical">
                                <li class="menu-item"> <a href="shop-categories.html">Bread</a>
                                </li>
                                <li class="menu-item"> <a href="shop-categories.html">Rolls, Bagels & Thins</a>
                                </li>
                                <li class="menu-item"> <a href="shop-categories.html">Cakes & Treats</a>
                                </li>
                                <li class="menu-item"> <a href="shop-categories.html">Wraps, Pitta & Naan Bread</a>
                                </li>
                                <li class="menu-item"> <a href="shop-categories.html">Crumpets, Muffins & Pancakes</a>
                                </li>
                                <li class="menu-item"> <a href="shop-categories.html">Croissants & Brioche</a>
                                </li>
                            </ul>
                        </div>
                        <div class="categories__list"><b>Frozen Foods: </b>
                            <ul class="menu--vertical">
                                <li class="menu-item"> <a href="shop-categories.html">Ice Cream</a>
                                </li>
                                <li class="menu-item"> <a href="shop-categories.html">Fruit, Vegetables & Herbs</a>
                                </li>
                                <li class="menu-item"> <a href="shop-categories.html">Chips, Potatoes & Rice</a>
                                </li>
                                <li class="menu-item"> <a href="shop-categories.html">Fish</a>
                                </li>
                                <li class="menu-item"> <a href="shop-categories.html">Vegetarian</a>
                                </li>
                                <li class="menu-item"> <a href="shop-categories.html">Meat & Poultry</a>
                                </li>
                                <li class="menu-item"> <a href="shop-categories.html">Ready Meals & Party Food</a>
                                </li>
                            </ul>
                        </div>
                        <div class="categories__list"><b>Ready Meals: </b>
                            <ul class="menu--vertical">
                                <li class="menu-item"> <a href="shop-categories.html">Meals for 1</a>
                                </li>
                                <li class="menu-item"> <a href="shop-categories.html">Indian</a>
                                </li>
                                <li class="menu-item"> <a href="shop-categories.html">Italian</a>
                                </li>
                                <li class="menu-item"> <a href="shop-categories.html">Chinese</a>
                                </li>
                                <li class="menu-item"> <a href="shop-categories.html">Traditional British</a>
                                </li>
                                <li class="menu-item"> <a href="shop-categories.html">Thai & Oriental</a>
                                </li>
                                <li class="menu-item"> <a href="shop-categories.html">Mediterranean & Moroccan</a>
                                </li>
                                <li class="menu-item"> <a href="shop-categories.html">Mexican & Caribbean</a>
                                </li>
                                <li class="menu-item"> <a href="shop-categories.html">Kids' Meals</a>
                                </li>
                            </ul>
                        </div>
                        <div class="categories__list"><b>Soft Drinks, Tea & Coffee: </b>
                            <ul class="menu--vertical">
                                <li class="menu-item"> <a href="shop-categories.html">Fizzy Drinks</a>
                                </li>
                                <li class="menu-item"> <a href="shop-categories.html">Water</a>
                                </li>
                                <li class="menu-item"> <a href="shop-categories.html">Tea, Coffee & Hot Drinks</a>
                                </li>
                                <li class="menu-item"> <a href="shop-categories.html">Squash</a>
                                </li>
                                <li class="menu-item"> <a href="shop-categories.html">Juices</a>
                                </li>
                                <li class="menu-item"> <a href="shop-categories.html">Mixers</a>
                                </li>
                                <li class="menu-item"> <a href="shop-categories.html">Diet & No Added Sugar</a>
                                </li>
                                <li class="menu-item"> <a href="shop-categories.html">Still & Sparkling</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="row ps-footer__copyright">
                        <div class="col-12 col-lg-6 ps-footer__text">&copy; 2021 Naulo Bazar Marhetplace. All Rights Reversed.</div>
                        <div class="col-12 col-lg-6 ps-footer__social">

                            @if ($generalsetting->facebook != null)
                            <a class="icon_social facebook" href="{{ $generalsetting->facebook }}"><i class="fa fa-facebook-f"></i></a>
                            @endif
                            @if ($generalsetting->twitter != null)
                            <a class="icon_social twitter" href="{{ $generalsetting->twitter }}"><i class="fa fa-twitter"></i></a>
                            @endif
                            @if ($generalsetting->instagram != null)
                            <a class="icon_social google" href="{{ $generalsetting->instagram }}"><i class="fa fa-instagram"></i></a>
                            @endif
                            @if ($generalsetting->youtube != null)
                            <a class="icon_social youtube" href="{{ $generalsetting->youtube }}"><i class="fa fa-youtube"></i></a>
                            @endif
                            {{-- <a class="icon_social wifi" href="#"><i class="fa fa-wifi"></i></a></div> --}}
                    </div>
                </div>
            </footer>
            {{-- <div class="ps-footer-mobile">
                <div class="menu__content">
                    <ul class="menu--footer">
                        <li class="nav-item"><a class="nav-link" href="index.html"><i class="icon-home3"></i><span>Home</span></a></li>
                        <li class="nav-item"><a class="nav-link footer-category" href="javascript:void(0);"><i class="icon-list"></i><span>Category</span></a></li>
                        <li class="nav-item"><a class="nav-link footer-cart" href="shopping-cart.html"><i class="icon-cart"></i><span class="badge bg-warning">3</span><span>Cart</span></a></li>
                        <li class="nav-item"><a class="nav-link" href="wishlist.html"><i class="icon-heart"></i><span>Wishlist</span></a></li>
                        <li class="nav-item"><a class="nav-link" href="index.html"><i class="icon-user"></i><span>Account</span></a></li>
                    </ul>
                </div>
            </div>
            <button class="btn scroll-top"><i class="icon-chevron-up"></i></button>
            <div class="ps-preloader" id="preloader">
                <div class="ps-preloader-section ps-preloader-left"></div>
                <div class="ps-preloader-section ps-preloader-right"></div>
            </div>
            <div class="ps-category--mobile">
                <div class="category__header">
                    <div class="category__title">All Category</div><span class="category__close"><i class="icon-cross"></i></span>
                </div>
                <div class="category__content">
                    <ul class="menu--mobile">
                        <li class="daily-deals category-item"> <a href="flash-sale.html">Daily Deals</a>
                        </li>
                        <li class="category-item"> <a href="shop-categories.html">Top Promotions</a>
                        </li>
                        <li class="category-item"> <a href="shop-categories.html">New Arrivals</a>
                        </li>
                        <li class="menu-item-has-children category-item"><a href="shop-categories.html">Fresh</a><span class="sub-toggle"><i class="icon-chevron-down"></i></span>
                            <ul class="sub-menu">
                                <li> <a href="index.html">Meat & Poultry</a>
                                </li>
                                <li> <a href="index.html">Fruit</a>
                                </li>
                                <li> <a href="index.html">Vegetables</a>
                                </li>
                                <li> <a href="index.html">Milks, Butter & Eggs</a>
                                </li>
                                <li> <a href="index.html">Fish</a>
                                </li>
                                <li> <a href="index.html">Frozen</a>
                                </li>
                                <li> <a href="index.html">Cheese</a>
                                </li>
                                <li> <a href="index.html">Pasta & Sauce</a>
                                </li>
                            </ul>
                        </li>
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
            </div>
            <nav class="navigation--mobile">
                <div class="navigation__header">
                    <div class="navigation__select">
                        <div class="languages"><a class="nav-top-link" href="javascript:void(0);"> <span class="current-languages">English</span><i class="icon-chevron-down"></i></a>
                            <div class="select--dropdown">
                                <ul class="select-languages">
                                    <li class="active language-item" data-value="English"><a href="javascript:void(0);">English</a></li>
                                    <li class="language-item" data-value="Nepali"><a href="javascript:void(0);">Nepali</a></li>
                                    <li class="language-item" data-value="Hindi"><a href="javascript:void(0);">Hindi</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="navigation-title">
                        <button class="close-navbar-slide"><i class="icon-arrow-left"></i></button>
                        <div><span> <i class="icon-user"></i>Hi, </span><span class="account">Bikash Bhandari</span><a class="dropdown-user" href="#" id="dropdownAccount" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="icon-chevron-down"></i></a>
                            <div class="dropdown-menu" aria-labelledby="dropdownAccount">
        						<a class="dropdown-item" href="user-profile.html"><b>My Account</b></a>
        						<a class="dropdown-item" href="dashboard.html">Dashboard</a>
        						<a class="dropdown-item" href="#">Account Setting</a>
        						<a class="dropdown-item" href="shopping-cart.html">Orders</a>
        						<a class="dropdown-item" href="wishlist.html">Wishlist</a>
        						<a class="dropdown-item" href="#">Shipping Address</a>
        						<a class="dropdown-divider"></a>
        						<a class="dropdown-item" href="index.html">
        						<i class="icon-exit-left"></i>Log out</a>
        					</div>
                        </div>
                    </div>
                </div>
                <div class="navigation__content">
                    <ul class="menu--mobile">
                        <li class="menu-item-has-children"><a href="shop-categories.html">NauloMall</a>
                        </li>
                        <li class="menu-item-has-children"><a href="shop-categories.html">NauloMart</a>
                        </li>
                        <li class="menu-item-has-children"><a href="shop-categories.html">eStore</a>
                        </li>
                        <li class="menu-item-has-children"><a href="flash-sale.html">Flash Sale</a>
                        </li>
                        <li class="menu-item-has-children"> <a href="vendor-list.html">Brand</a>
                        </li>
                        <li class="menu-item-has-children"> <a href="vendor-list.html">oUR Top Venders</a>
                        </li>
                    </ul>
                    <ul class="menu--mobile">
                        <li class="daily-deals"><a>Sell On Naulo Bazar</a></li>
                    </ul>
                </div>
                <div class="navigation__footer">
                    <ul class="menu--icon">
                        <li class="footer-item"><a class="footer-link" href="#"><i class="icon-history2"></i><span>Recent viewed product</span></a></li>
                        <li class="footer-item"><a class="footer-link" href="#"><i class="icon-cube"></i><span>Become a vendor</span></a></li>
                        <li class="footer-item"><a class="footer-link" href="#"><i class="icon-question-circle"></i><span>Help & Contact</span></a></li>
                        <li class="footer-item"><a class="footer-link" href="#"><i class="icon-telephone"></i><span>HOTLINE: <span class='text-success'>(+977) 9810099062 </span> (Free)</span></a></li>
                    </ul>
                </div>
            </nav> --}}
