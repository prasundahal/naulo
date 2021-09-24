@extends('frontend.layouts.app')

@section('meta_title'){{ $detailedProduct->meta_title }}@stop

@section('meta_description'){{ $detailedProduct->meta_description }}@stop

@section('meta_keywords'){{ $detailedProduct->tags }}@stop

@section('meta')
    <!-- Schema.org markup for Google+ -->
    <meta itemprop="name" content="{{ $detailedProduct->meta_title }}">
    <meta itemprop="description" content="{{ $detailedProduct->meta_description }}">
    <meta itemprop="image" content="{{ asset($detailedProduct->meta_img) }}">

    <!-- Twitter Card data -->
    <meta name="twitter:card" content="product">
    <meta name="twitter:site" content="@publisher_handle">
    <meta name="twitter:title" content="{{ $detailedProduct->meta_title }}">
    <meta name="twitter:description" content="{{ $detailedProduct->meta_description }}">
    <meta name="twitter:creator" content="@author_handle">
    <meta name="twitter:image" content="{{ asset($detailedProduct->meta_img) }}">
    <meta name="twitter:data1" content="{{ single_price($detailedProduct->unit_price) }}">
    <meta name="twitter:label1" content="Price">

    <!-- Open Graph data -->
    <meta property="og:title" content="{{ $detailedProduct->meta_title }}" />
    <meta property="og:type" content="product" />
    <meta property="og:url" content="{{ route('product', $detailedProduct->slug) }}" />
    <meta property="og:image" content="{{ asset($detailedProduct->meta_img) }}" />
    <meta property="og:description" content="{{ $detailedProduct->meta_description }}" />
    <meta property="og:site_name" content="{{ env('APP_NAME') }}" />
    <meta property="og:price:amount" content="{{ single_price($detailedProduct->unit_price) }}" />
@endsection

@section('content')
<main class="no-main">
    <div class="ps-breadcrumb">
        <div class="container">
            <ul class="ps-breadcrumb__list">
                <li class="active"><a href="/">Home</a></li>
                <li class="active"><a href="">Product</a></li>
                {{-- <li class="active"><a href="shop.html">Drinks</a></li> --}}
        <li><a href="javascript:void(0);">{{  $detailedProduct->slug }}</a></li>
            </ul>
        </div>
    </div>
    <section class="section--product-type">
        <div class="container">
            <div class="product__detail">
                <div class="row">
                    <div class="col-12 col-lg-9">
                        <div class="ps-product--detail">
                            <div class="row">
                                <div class="col-12 col-lg-6">
                                    <div class="ps-product__variants">
                                        <div class="ps-product__gallery">
                                            {{-- <div class="ps-gallery__item active"><img src="{{ asset(json_decode($detailedProduct->photos)[0]) }}" data-src="{{ asset(json_decode($detailedProduct->photos)[0]) }}" xoriginal="{{ asset(json_decode($detailedProduct->photos)[0]) }}" /></div> --}}
                                            @foreach (json_decode($detailedProduct->photos) as $key => $photo)

                                            <div class="ps-gallery__item"><img src="{{ asset($photo) }}" data-src="{{ asset($photo) }}"  @if($key == 0) xpreview="{{ asset($photo) }}" @endif /></div>

                                            @endforeach
                                        </div>
                                        <div class="ps-product__thumbnail">
                                            <div class="ps-product__zoom"><img id="ps-product-zoom" src="{{ asset(json_decode($detailedProduct->photos)[0]) }}" data-src="{{ asset(json_decode($detailedProduct->photos)[0]) }}" xoriginal="{{ asset(json_decode($detailedProduct->photos)[0]) }}" />
                                                <ul class="ps-gallery--poster" id="ps-lightgallery-videos" data-video-url="#">
                                                    <li data-html="#video-play"><span></span><i class="fa fa-play-circle"></i></li>
                                                </ul>
                                            </div>
                                            <div style="display:none;" id="video-play">
                                                <video class="lg-video-object lg-html5" controls preload="none">
                                                    <source src="#" type="video/mp4" />Your browser does not support HTML5 video.
                                                </video>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 col-lg-6">

            <div class="product__header">
                <h3 class="product__name">{{ __($detailedProduct->name) }}</h3>
                <div class="row">
                    <div class="col-12 col-lg-12 product__code">
                        <select class="rating-stars">
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4" selected="selected">4</option>
                            <option value="5">5</option>
                        </select>
                        @php
                        $total = 0;
                        $total += $detailedProduct->reviews->count();
                    @endphp
                        <span class="product__review">{{ $total }}  Customer {{__('Reviews')}}</span>
                        {{-- <span class="product__id">SKU: <span>#VEG20938</span> --}}
                    </span>
                    </div>

                </div>
            </div>


                                    <div class="ps-product__sale">
                                        <span class="price-sale">{{ home_discounted_price($detailedProduct->id) }}</span>
                                        <span class="price"> {{ home_price($detailedProduct->id) }}</span>

                                        @if(($detailedProduct->discount_type) === 'amount')
                                        <span class="ps-product__off">Rs.{{ $detailedProduct->discount }} Off</span>
                                        @elseif (($detailedProduct->discount_type) === 'percent')
                                        <span class="ps-product__off">{{ $detailedProduct->discount }} % Off</span>
                                        @endif


                                    </div>
                                    <div class="ps-product__unit">225L</div>
                                    @if(($detailedProduct->current_stock) > 1)

                                    <div class="ps-product__avai alert__success">Availability: <span>{{ __($detailedProduct->current_stock) }} in stock</span>
                                        @else
                                        <div class="ps-product__avai alert__error">    Out Of Stock <span></span>
                                            @endif
                                    </div>
                                    <div class="ps-product__info">
                                        <ul class="ps-list--rectangle">
                                            @if ($detailedProduct->added_by == 'seller' && \App\BusinessSetting::where('type', 'vendor_system_activation')->first()->value == 1)
                                            <li> <span><i class="icon-store"></i></span>Sold By:<a href="{{ route('shop.visit', $detailedProduct->user->shop->slug) }}"><b> {{ $detailedProduct->user->shop->name }}</b></a></li>
                                            @else
                                            <li> <span><i class="icon-store"></i></span><a href=""><b>  {{ __('Inhouse product') }}</b></a></li>
                                            @endif
                                        </ul>
                                    </div>
                                    @php
                                    $qty = 0;
                                    if($detailedProduct->variant_product){
                                        foreach ($detailedProduct->stocks as $key => $stock) {
                                            $qty += $stock->qty;
                                        }
                                    }
                                    else{
                                        $qty = 0 ;
                                    }
                                @endphp

                                    <div class="ps-product__shopping">
                                        <form id="option-choice-form">
                                            @csrf
                                            <input type="hidden" name="id" value="{{ $detailedProduct->id }}">

                                            @if ($detailedProduct->choice_options != null)
                                                @foreach (json_decode($detailedProduct->choice_options) as $key => $choice)

                                                <div class="row no-gutters">
                                                    <div class="col-2">
                                                        <div class="product-description-label mt-2 ">{{ \App\Attribute::find($choice->attribute_id)->name }}:</div>
                                                    </div>
                                                    <div class="col-10">
                                                        <ul class="list-inline checkbox-alphanumeric checkbox-alphanumeric--style-1 mb-2">
                                                            @foreach ($choice->values as $key => $value)
                                                                <li>
                                                                    <input type="radio" id="{{ $choice->attribute_id }}-{{ $value }}" name="attribute_id_{{ $choice->attribute_id }}" value="{{ $value }}" @if($key == 0) checked @endif>
                                                                    <label for="{{ $choice->attribute_id }}-{{ $value }}">{{ $value }}</label>
                                                                </li>
                                                            @endforeach
                                                        </ul>
                                                    </div>
                                                </div>

                                                @endforeach
                                            @endif

                                            @if (count(json_decode($detailedProduct->colors)) > 0)
                                                <div class="row no-gutters">
                                                    <div class="col-2">
                                                        <div class="product-description-label mt-2">{{__('Color')}}:</div>
                                                    </div>
                                                    <div class="col-10">
                                                        <ul class="list-inline checkbox-color mb-1">
                                                            @foreach (json_decode($detailedProduct->colors) as $key => $color)
                                                                <li>
                                                                    <input type="radio" id="{{ $detailedProduct->id }}-color-{{ $key }}" name="color" value="{{ $color }}" @if($key == 0) checked @endif>
                                                                    <label style="background: {{ $color }};" for="{{ $detailedProduct->id }}-color-{{ $key }}" data-toggle="tooltip"></label>
                                                                </li>
                                                            @endforeach
                                                        </ul>
                                                    </div>
                                                </div>

                                                <hr>
                                            @endif

                                            <!-- Quantity + Add to cart -->
                                            <div class="row no-gutters">
                                                <div class="col-2">
                                                    <div class="product-description-label mt-2">{{__('Quantity')}}:</div>
                                                </div>
                                                <div class="col-10">
                                                    <div class="product-quantity d-flex align-items-center">
                                                        <div class="input-group input-group--style-2 pr-3" style="width: 160px;">
                                                            <span class="input-group-btn">
                                                                <button class="btn btn-number" type="button" data-type="minus" data-field="quantity" disabled="disabled">
                                                                    <i class="la la-minus"></i>
                                                                </button>
                                                            </span>
                                                            <input type="text" name="quantity" class="form-control input-number text-center" placeholder="1" value="1" min="1" max="10">
                                                            <span class="input-group-btn">
                                                                <button class="btn btn-number" type="button" data-type="plus" data-field="quantity">
                                                                    <i class="la la-plus"></i>
                                                                </button>
                                                            </span>
                                                        </div>
                                                        <div class="avialable-amount">
                                                            <a class="ps-product__icon" href="" onclick="addToWishList({{ $detailedProduct->id }})" title="Add to Wishlist"><i class="icon-heart"></i></a>
                                                            <a class="ps-product__icon" title="Share Product"><i class="icon-share"></i></a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <hr>

                                            <div class="row no-gutters pb-3 d-none" id="chosen_price_div">
                                                <div class="col-2">
                                                    <div class="product-description-label">{{__('Total Price')}}:</div>
                                                </div>
                                                <div class="col-10">
                                                    <div class="product-price">
                                                        <strong id="chosen_price">

                                                        </strong>
                                                    </div>
                                                </div>
                                            </div>

                                        </form>


                                        {{-- <div class="ps-product__quantity">
                                            <label>Quantity: </label>
                                            <div class="def-number-input number-input safari_only">
                                                <button class="minus" onclick="this.parentNode.querySelector('input[type=number]').stepDown()"><i class="icon-minus"></i></button>
                                                <input class="quantity" min="0" name="quantity" value="1" type="number" />
                                                <button class="plus" onclick="this.parentNode.querySelector('input[type=number]').stepUp()"><i class="icon-plus"></i></button>
                                        </div>



                                        </div> --}}

                                        <div class="button-sec">
                                            @if ( $detailedProduct->current_stock > 0)
                                            <a class="ps-product__addcart btn-success" onclick=buyNow()><i class="icon-bag2" ></i>Buy Now</a>
                                            <a class="ps-product__addcart ps-button" onclick="addToCart()"><i class="icon-cart"></i>Add to cart</a>
                                            @else
                                            <a class="ps-product__addcart ps-button"><i class="icon-cart"></i>Out Of Stock</a>
                                            @endif
                                        </div>
                                    </div>

                                    <div class="ps-product__footer"><a class="ps-product__shop" href="shop-view-grid.html"><i class="icon-store"></i><span>Store</span></a><a class="ps-product__addcart ps-button"><i class="icon-cart"></i>Add to cart</a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-lg-3">
                        <div class="ps-product--extention">
                            <div class="extention__block">
                                <div class="extention__item">
                                    <div class="extention__icon"><i class="icon-truck"></i></div>
                                    <div class="extention__content"> <b class="text-black">Free Shipping </b>apply to all orders over <span class="text-success">Rs1000</span></div>
                                </div>
                            </div>
                            <div class="extention__block">
                                <div class="extention__item">
                                    <div class="extention__icon"><i class="icon-leaf"></i></div>
                                    <div class="extention__content">Guranteed <b class="text-black">100% Organic </b>from natural farmas </div>
                                </div>
                            </div>
                            <div class="extention__block">
                                <div class="extention__item border-none">
                                    <div class="extention__icon"><i class="icon-repeat-one2"></i></div>
                                    <div class="extention__content"> <b class="text-black">1 Day Returns </b>if you change your mind</div>
                                </div>
                            </div>
                            <div class="extention__block extention__contact">
                                <p> <span class="text-black">Hotline Order: </span>Free 7:00-21:30</p>
                                <h4 class="extention__phone">+977-9810099062</h4>
                                <h4 class="extention__phone">+977-01-4800733</h4>
                            </div>
                            <p class="extention__footer">Become a Vendor? <a href="register.html">Register now</a></p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="product__content">
                <ul class="nav nav-pills" role="tablist" id="productTabDetail">
                    <li class="nav-item"><a class="nav-link active" id="description-tab" data-toggle="tab" href="#description-content" role="tab" aria-controls="description-content" aria-selected="true">Description</a></li>
                    <li class="nav-item"><a class="nav-link" id="nutrition-tab" data-toggle="tab" href="#nutrition-content" role="tab" aria-controls="nutrition-content" aria-selected="false">Nutrition</a></li>
                    <li class="nav-item"><a class="nav-link" id="reviews-tab" data-toggle="tab" href="#reviews-content" role="tab" aria-controls="reviews-content" aria-selected="false">Reviews(4)</a></li>
                    <li class="nav-item"><a class="nav-link" id="qa-tab" data-toggle="tab" href="#qa-content" role="tab" aria-controls="qa-content" aria-selected="false">Q&A</a></li>
                    <li class="nav-item"><a class="nav-link" id="vendor-tab" data-toggle="tab" href="#vendor-content" role="tab" aria-controls="vendor-content" aria-selected="false">Vendor Info</a></li>
                </ul>
                <div class="tab-content">
                    <div class="tab-pane fade show active" id="description-content" role="tabpanel" aria-labelledby="description-tab">
                        <p class="block-content">Raised without antibiotics and full of flavor, this beef is the base of big, juicy burgers, savory meat loaf and rich Bolognese sauce. You can enjoy this delicious local ground beef for your meatloaf, burgers, meatballs, shepherd's pie, spicy taco meat and so much more.</p>
                        <p class="block-content">As one of Naulobazar's premium beef suppliers, <b class='text-black'>Local Angus</b> works with a coalition of small family farms throughout the Mid-Atlantic region *who feed theri cattle a diet of primarily grass, supplemented by grain throughout the finishing months. Every farm in this program is independently audited for animal welfare practices to ensure the best standards of care.</p>
                        <div class="heading-1">Preparation and Usage</div>
                        <p class="block-content">For perfectly cooked beef, our head chef recommends:</p>
                        <div class="heading-2">Storage</div>
                        <p class="block-content">Keep refrigerated 0-5<sup>o</sup>C. Consume within the use by date. Once pack is opened use on the same day. Suitable for free zing on day of purchase. Use within one month. Defrost fully before use. Do not re-freeze once defrosted.</p>
                        <div class="heading-2">Pan Fry</div>
                        <p class="block-content">Pour a little oil into a frying pan and cook for 4-6 minutes until browned. If preferred, drain off excess fat. Add a good beef stock, seasonal vegetables and a sprinkling of sea salt and freshly ground black pepper. Bring to the boil and reduce heat to simmer for 20 minutes until the meat is thoroughly cooked and your kitchen smells delicious. Wash hands, knives and surfaxes thoroughly before and after preparing raw meat.</p>
                        <div class="heading-2">Return To Address</div>
                        <p class="block-content"><span class='text-success'>Daylesford near Kingham, Gloucestershire GL56 OYG</span></p>
                        <p class="block-content">We choose British breeds who thrive in their native landscape and encourage healthy biodiversity on our farm. We avoid waste of any kind, so manure and kitchen waste compost are returned to the soil as rich natural fertilisers. We have built our own abattoir to ensure the highest animal welfare and reduced food miles, which results in better tasting meat, and we spread our message far beyond the boundaries of our own fields.</p>
                        <p class="block-content">Each step of our journey is made with a conscience, and a love for food.</p>
                    </div>
                    <div class="tab-pane fade" id="nutrition-content" role="tabpanel" aria-labelledby="nutrition-tab">
                        <div class="heading-2">Ingredients </div>
                        <p class="block-content">Allergy Advice: For allergens see highlighted ingredients</p>
                        <p class="block-content">Beef, Preservatives (Potassium Lactate, Sodium Acetates, Sodium Nitrite, Potassium Nitrite), Salt, Sugar, Maize Starch, Spices, Caramelised Sugar Powder, Smoked Paprika, Garlic Powder, Onion Powder, Rapeseed Oil, Thyme, Parsley, Prepared with 109g of Beef per 100g of finished product.</p>
                        <div class="heading-2">Dietary Information </div>
                        <p class="block-content">May Contain Celery, May Contain Cereals Containing Gluten, May Contain Eggs, May Contain Fish, May Contain Milk, May Contain Mustard, May Contain Soya.</p>
                        <table class="table">
                            <thead class="thead-light">
                                <tr>
                                    <th><b class="text-black">Typical Values(*)</b></th>
                                    <th><b class="text-black">per 100g</b></th>
                                    <th><b class="text-black">per slice (20g)</b></th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Energy</td>
                                    <td>536kj</td>
                                    <td>107kj</td>
                                </tr>
                                <tr>
                                    <td>Fat</td>
                                    <td>127kcal</td>
                                    <td>25kcal</td>
                                </tr>
                                <tr>
                                    <td>Of which saturates</td>
                                    <td>0.9g</td>
                                    <td>0.2g</td>
                                </tr>
                                <tr>
                                    <td>Carbohydrate</td>
                                    <td>0.7g</td>
                                    <td>0.1g</td>
                                </tr>
                                <tr>
                                    <td>Of which sugars</td>
                                    <td>0.5g</td>
                                    <td>0.1g</td>
                                </tr>
                                <tr>
                                    <td>Fibre</td>
                                    <td>0.5g</td>
                                    <td>0.1g</td>
                                </tr>
                                <tr>
                                    <td>Protein</td>
                                    <td>24.2g</td>
                                    <td>4.8g</td>
                                </tr>
                                <tr>
                                    <td>Salt</td>
                                    <td>1.82g</td>
                                    <td>0.36g</td>
                                </tr>
                            </tbody>
                        </table>
                        <p class="text-center pb-4"><i>* Based on a 2,000 calorie diet. Your daily values may be higher or lower depending on your calorie needs:</i></p>
                    </div>
                    <div class="tab-pane fade" id="reviews-content" role="tabpanel" aria-labelledby="reviews-tab">
                        <div class="ps-product--reviews">
                            <div class="row">
                                <div class="col-12 col-lg-5">
                                    <div class="review__box">
                                        <div class="product__rate">4.5</div>
                                        <select class="rating-stars">
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4" selected="selected">4</option>
                                            <option value="5">5</option>
                                        </select>
                                        <p>Avg. Star Rating: <b class="text-black">(4 reviews)</b></p>
                                        <div class="review__progress">
                                            <div class="progress-item"><span class="star">5 Stars</span>
                                                <div class="progress">
                                                    <div class="progress-bar bg-warning" role="progressbar" style="width: 80%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div><span class="percent">80%</span>
                                            </div>
                                            <div class="progress-item"><span class="star">4 Stars</span>
                                                <div class="progress">
                                                    <div class="progress-bar bg-warning" role="progressbar" style="width: 20%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div><span class="percent">20%</span>
                                            </div>
                                            <div class="progress-item"><span class="star">3 Stars</span>
                                                <div class="progress">
                                                    <div class="progress-bar bg-warning" role="progressbar" style="width: 0%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div><span class="percent">0%</span>
                                            </div>
                                            <div class="progress-item"><span class="star">2 Stars</span>
                                                <div class="progress">
                                                    <div class="progress-bar bg-warning" role="progressbar" style="width: 0%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div><span class="percent">0%</span>
                                            </div>
                                            <div class="progress-item"><span class="star">1 Stars</span>
                                                <div class="progress">
                                                    <div class="progress-bar bg-warning" role="progressbar" style="width: 0%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div><span class="percent">0%</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 col-lg-7">
                                    <div class="review__title">Add A Review</div>
                                    <p class="mb-0">Your email will not be published. Required fields are marked <span class="text-danger">*</span></p>
                                    <form>
                                        <div class="form-row">
                                            <div class="col-12 form-group--block">
                                                <div class="input__rating">
                                                    <label>Your rating: <span>*</span></label>
                                                    <select class="rating-stars">
                                                        <option value="1">1</option>
                                                        <option value="2">2</option>
                                                        <option value="3">3</option>
                                                        <option value="4" selected="selected">4</option>
                                                        <option value="5">5</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-12 form-group--block">
                                                <label>Review: <span>*</span></label>
                                                <textarea class="form-control"></textarea>
                                            </div>
                                            <div class="col-12 col-lg-6 form-group--block">
                                                <label>Name: <span>*</span></label>
                                                <input class="form-control" type="text" required>
                                            </div>
                                            <div class="col-12 col-lg-6 form-group--block">
                                                <label>Email:</label>
                                                <input class="form-control" type="email">
                                            </div>
                                            <div class="col-12 form-group--block">
                                                <button class="btn ps-button ps-btn-submit">Submit Review</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <div class="ps--comments">
                                <h5 class="comment__title">4 Comments</h5>
                                <ul class="comment__list">
                                    <li class="comment__item">
                                        <div class="item__avatar"><img src="assets/img/blogs/comment_avatar1.png" alt="alt" /></div>
                                        <div class="item__content">
                                            <div class="item__name">Sundar N.</div>
                                            <div class="item__date">- June 14, 2020</div>
                                            <div class="item__check"> <i class="icon-checkmark-circle"></i>Verified Purchase</div>
                                            <div class="item__rate">
                                                <select class="rating-stars">
                                                    <option value="1">1</option>
                                                    <option value="2">2</option>
                                                    <option value="3">3</option>
                                                    <option value="4" selected="selected">4</option>
                                                    <option value="5">5</option>
                                                </select>
                                            </div>
                                            <p class="item__des">Naulobazar is great. Naulobazar is the most valuable business resource we have EVER purchased. I have gotten at least 50 times the value from Naulobazar. I just can't get enough of Naulobazar. I want to get a T-Shirt with Naulobazar on it so I can show it off to everyone.</p>
                                        </div>
                                    </li>
                                    <li class="comment__item">
                                        <div class="item__avatar"><img src="assets/img/blogs/comment_avatar2.png" alt="alt" /></div>
                                        <div class="item__content">
                                            <div class="item__name">Bipin D.</div>
                                            <div class="item__date">- June 14, 2020</div>
                                            <div class="item__check"> <i class="icon-checkmark-circle"></i>Verified Purchase</div>
                                            <div class="item__rate">
                                                <select class="rating-stars">
                                                    <option value="1">1</option>
                                                    <option value="2">2</option>
                                                    <option value="3">3</option>
                                                    <option value="4" selected="selected">4</option>
                                                    <option value="5">5</option>
                                                </select>
                                            </div>
                                            <p class="item__des">Naulobazar is great. Naulobazar is the most valuable business resource we have EVER purchased. I have gotten at least 50 times the value from Naulobazar. I just can't get enough of Naulobazar. I want to get a T-Shirt with Naulobazar on it so I can show it off to everyone.</p>
                                        </div>
                                    </li>
                                    <li class="comment__item">
                                        <div class="item__avatar"><img src="assets/img/blogs/comment_no_avatar.png" alt="alt" /></div>
                                        <div class="item__content">
                                            <div class="item__name">Ganesh K.</div>
                                            <div class="item__date">- June 13, 2020</div>
                                            <div class="item__check"> <i class="icon-checkmark-circle"></i>Verified Purchase</div>
                                            <div class="item__rate">
                                                <select class="rating-stars">
                                                    <option value="1">1</option>
                                                    <option value="2">2</option>
                                                    <option value="3">3</option>
                                                    <option value="4">4</option>
                                                    <option value="5" selected="selected">5</option>
                                                </select>
                                            </div>
                                            <p class="item__des">Naulobazar is great. Naulobazar is the most valuable business resource we have EVER purchased. I have gotten at least 50 times the value from Naulobazar. I just can't get enough of Naulobazar. I want to get a T-Shirt with Naulobazar on it so I can show it off to everyone.</p>
                                        </div>
                                    </li>
                                    <li class="comment__item">
                                        <div class="item__avatar"><img src="assets/img/blogs/comment_no_avatar.png" alt="alt" /></div>
                                        <div class="item__content">
                                            <div class="item__name">Bikash B.</div>
                                            <div class="item__date">- June 05, 2020</div>
                                            <div class="item__check"> <i class="icon-checkmark-circle"></i>Verified Purchase</div>
                                            <div class="item__rate">
                                                <select class="rating-stars">
                                                    <option value="1">1</option>
                                                    <option value="2">2</option>
                                                    <option value="3">3</option>
                                                    <option value="4">4</option>
                                                    <option value="5" selected="selected">5</option>
                                                </select>
                                            </div>
                                            <p class="item__des">Naulobazar is great. Naulobazar is the most valuable business resource we have EVER purchased. I have gotten at least 50 times the value from Naulobazar. I just can't get enough of Naulobazar. I want to get a T-Shirt with Naulobazar on it so I can show it off to everyone.</p>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="qa-content" role="tabpanel" aria-labelledby="qa-tab">Q&A</div>
                    <div class="tab-pane fade" id="vendor-content" role="tabpanel" aria-labelledby="vendor-tab">
                        <div class="ps-product__category">
                            <ul>
                                <li>Brand: <a href='shop-all-brands.html' class='text-success'>COCACOLA</a></li>
                                <li>Vendor: <a href='shop-all-brands.html' class='text-success'>Naulo Bazar Market</a></li>
                                <li>Categories: <a href='shop-all-brands.html' class='text-success'>Fresh</a>, <a href='shop-all-brands.html' class='text-success'>Vegetales</a>, <a href='shop-all-brands.html' class='text-success'>Olives & Selection Platters</a></li>
                                <li>Tags: <a href='shop-all-brands.html' class='text-primary'>meat organic food</a>, <a href='shop-all-brands.html' class='text-success'>beet</a>, <a href='shop-all-brands.html' class='text-success'>healthy</a>, <a href='shop-all-brands.html' class='text-success'>foody</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>

<section class="section--product-type related-product-block">
    <div class="container">
          <div class="product__related" id="productTabDetailContent">
                <h3 class="product__name">Related Products</h3>
                <div class="owl-carousel" data-owl-auto="true" data-owl-loop="true" data-owl-speed="5000" data-owl-gap="0" data-owl-nav="true" data-owl-dots="true" data-owl-item="5" data-owl-item-xs="2" data-owl-item-sm="2" data-owl-item-md="3" data-owl-item-lg="5" data-owl-item-xl="5" data-owl-duration="1000" data-owl-mousedrag="on">
                    <div class="ps-post--product">
                        <div class="ps-product--standard"><a href="product-default.html"><img class="ps-product__thumbnail" src="assets/img/products/01-fresh/01_25a.jpg" alt="alt" /></a><a class="ps-product__expand" href="javascript:void(0);"><i class="icon-heart"></i></a>
                            <div class="ps-product__content">
                                <p class="ps-product__type"><i class="icon-store"></i>Naulomart</p>
                                <h5><a class="ps-product__name" href="product-default.html">Michelob Ultra Cans</a></h5>
                                <p class="ps-product__unit">1.5L</p>
                                <div class="ps-product__rating">
                                    <select class="rating-stars">
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4" selected="selected">4</option>
                                        <option value="5">5</option>
                                    </select><span>(2)</span>
                                </div>
                                <p class="ps-product-price-block"><span class="ps-product__sale">Rs15.90</span><span class="ps-product__price">Rs20.00</span><span class="ps-product__off">23% Off</span>
                                </p>
                            </div>
                            <div class="ps-product__footer">
                                <div class="def-number-input number-input safari_only">
                                    <button class="minus" onclick="this.parentNode.querySelector('input[type=number]').stepDown()"><i class="icon-minus"></i></button>
                                    <input class="quantity" min="0" name="quantity" value="1" type="number" />
                                    <button class="plus" onclick="this.parentNode.querySelector('input[type=number]').stepUp()"><i class="icon-plus"></i></button>
                                </div>
                                <div class="ps-product__total">Total: <span>Rs15.90</span>
                                </div>
                                <button class="ps-product__addcart" ><i class="icon-cart"></i>Add to cart</button>
                            </div>
                        </div>
                    </div>
                    <div class="ps-post--product">
                        <div class="ps-product--standard"><a href="product-default.html"><img class="ps-product__thumbnail" src="assets/img/products/01-fresh/01_22a.jpg" alt="alt" /></a><a class="ps-product__expand" href="javascript:void(0);"><i class="icon-heart"></i></a>
                            <div class="ps-product__content">
                                <p class="ps-product__type"><i class="icon-store"></i>Naulomart</p>
                                <h5><a class="ps-product__name" href="product-default.html">Extreme Budweiser Light Can</a></h5>
                                <p class="ps-product__unit">250g</p>
                                <div class="ps-product__rating">
                                    <select class="rating-stars">
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                        <option value="5" selected="selected">5</option>
                                    </select><span>(14)</span>
                                </div>
                                <p class="ps-product-price-block"><span class="ps-product__sale">Rs6.99</span><span class="ps-product__price">Rs12.00</span><span class="ps-product__off">45% Off</span>
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
                    <div class="ps-post--product">
                        <div class="ps-product--standard"><a href="product-default.html"><img class="ps-product__thumbnail" src="assets/img/products/01-fresh/01_21a.jpg" alt="alt" /></a><a class="ps-product__expand" href="javascript:void(0);"><i class="icon-heart"></i></a>
                            <div class="ps-product__content">
                                <p class="ps-product__type"><i class="icon-store"></i>Naulomart</p>
                                <h5><a class="ps-product__name" href="product-default.html">Grapes, Red Seedless</a></h5>
                                <p class="ps-product__unit">5 per pack</p>
                                <div class="ps-product__rating">
                                    <select class="rating-stars">
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                        <option value="5">5</option>
                                    </select><span>(0)</span>
                                </div>
                                <p class="ps-product-price-block"><span class="ps-product__sale">Rs12.90</span><span class="ps-product__price">Rs20.99</span><span class="ps-product__off">25% Off</span>
                                </p>
                            </div>
                            <div class="ps-product__footer">
                                <div class="def-number-input number-input safari_only">
                                    <button class="minus" onclick="this.parentNode.querySelector('input[type=number]').stepDown()"><i class="icon-minus"></i></button>
                                    <input class="quantity" min="0" name="quantity" value="1" type="number" />
                                    <button class="plus" onclick="this.parentNode.querySelector('input[type=number]').stepUp()"><i class="icon-plus"></i></button>
                                </div>
                                <div class="ps-product__total">Total: <span>Rs12.90</span>
                                </div>
                                <button class="ps-product__addcart" ><i class="icon-cart"></i>Add to cart</button>

                            </div>
                        </div>
                    </div>
                    <div class="ps-post--product">
                        <div class="ps-product--standard"><a href="product-default.html"><img class="ps-product__thumbnail" src="assets/img/products/01-fresh/01_20a.jpg" alt="alt" /></a><a class="ps-product__expand" href="javascript:void(0);"><i class="icon-heart"></i></a><span class="ps-badge ps-product__new">New </span>
                            <div class="ps-product__content">
                                <p class="ps-product__type"><i class="icon-store"></i>Naulobazar Mart</p>
                                <h5><a class="ps-product__name" href="product-default.html">Morrisons The Best Beef Topside</a></h5>
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
                                <p class="ps-product-price-block"><span class="ps-product__sale">Rs5.99</span><span class="ps-product__price">Rs8.99</span><span class="ps-product__off">30% Off</span>
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
                    <div class="ps-post--product">
                        <div class="ps-product--standard"><a href="product-default.html"><img class="ps-product__thumbnail" src="assets/img/products/01-fresh/01_25a.jpg" alt="alt" /></a><a class="ps-product__expand" href="javascript:void(0);"><i class="icon-heart"></i></a>
                            <div class="ps-product__content">
                                <p class="ps-product__type"><i class="icon-store"></i>Naulobazar Mart</p>
                                <h5><a class="ps-product__name" href="product-default.html">Natures Own 100% Wheat</a></h5>
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
                                <p class="ps-product-price-block"><span class="ps-product__price-default">Rs12.00</span>
                                </p>
                            </div>
                            <div class="ps-product__footer">
                                <div class="def-number-input number-input safari_only">
                                    <button class="minus" onclick="this.parentNode.querySelector('input[type=number]').stepDown()"><i class="icon-minus"></i></button>
                                    <input class="quantity" min="0" name="quantity" value="1" type="number" />
                                    <button class="plus" onclick="this.parentNode.querySelector('input[type=number]').stepUp()"><i class="icon-plus"></i></button>
                                </div>
                                <div class="ps-product__total">Total: <span>Rs12.00</span>
                                </div>
                                <button class="ps-product__addcart" ><i class="icon-cart"></i>Add to cart</button>
                            </div>
                        </div>
                    </div>
                    <div class="ps-post--product">
                        <div class="ps-product--standard"><a href="product-default.html"><img class="ps-product__thumbnail" src="assets/img/products/06-softdrinks-teacoffee/06_11a.jpg" alt="alt" /></a><a class="ps-product__expand" href="javascript:void(0);"><i class="icon-heart"></i></a><span class="ps-badge ps-product__offbadge">35% Off </span>
                            <div class="ps-product__content">
                                <p class="ps-product__type"><i class="icon-store"></i>Naulobazar Mart</p>
                                <h5><a class="ps-product__name" href="product-default.html">Corn, Yellow Sweet</a></h5>
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
                                <p class="ps-product-price-block"><span class="ps-product__price-default">Rs99.99</span>
                                </p>
                            </div>
                            <div class="ps-product__footer">
                                <div class="def-number-input number-input safari_only">
                                    <button class="minus" onclick="this.parentNode.querySelector('input[type=number]').stepDown()"><i class="icon-minus"></i></button>
                                    <input class="quantity" min="0" name="quantity" value="1" type="number" />
                                    <button class="plus" onclick="this.parentNode.querySelector('input[type=number]').stepUp()"><i class="icon-plus"></i></button>
                                </div>
                                <div class="ps-product__total">Total: <span>Rs99.99</span>
                                </div>
                                <button class="ps-product__addcart" ><i class="icon-cart"></i>Add to cart</button>

                            </div>
                        </div>
                    </div>
                </div>
        </div>
    </div>
</section>




</main>
@endsection

@section('script')
    <script type="text/javascript">
        $(document).ready(function() {
    		$('#share').jsSocials({
    			showLabel: false,
                showCount: false,
                shares: ["email", "twitter", "facebook", "linkedin", "pinterest", "stumbleupon", "whatsapp"]
    		});
            getVariantPrice();
    	});

        function CopyToClipboard(containerid) {
            if (document.selection) {
                var range = document.body.createTextRange();
                range.moveToElementText(document.getElementById(containerid));
                range.select().createTextRange();
                document.execCommand("Copy");

            } else if (window.getSelection) {
                var range = document.createRange();
                document.getElementById(containerid).style.display = "block";
                range.selectNode(document.getElementById(containerid));
                window.getSelection().addRange(range);
                document.execCommand("Copy");
                document.getElementById(containerid).style.display = "none";

            }
            showFrontendAlert('success', 'Copied');
        }

        function show_chat_modal(){
            @if (Auth::check())
                $('#chat_modal').modal('show');
            @else
                $('#login_modal').modal('show');
            @endif
        }

    </script>
@endsection
