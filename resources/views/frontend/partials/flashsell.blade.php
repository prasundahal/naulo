
@php
$flash_deal = \App\FlashDeal::where('status', 1)->where('featured', 1)->first();
@endphp
@if($flash_deal != null && strtotime(date('d-m-Y')) <= $flash_deal->start_date && strtotime(date('d-m-Y')) <= $flash_deal->end_date)


<section class="ps-component ps-component--flash">
    <div class="container">
        <div class="component__header">
            <h3 class="component__title">Today Flash Sale<span class="ps-countdown"><span class="ps-countdown-end">Ends in : </span><span class="ps-countdown"><b class="hours">00</b> hours : <b class="minutes">12</b> mins : <b class="seconds">45</b> secs</span><span class="ps-countdown mobile"><b class="hours">00</b> h : <b class="minutes">12</b> m : <b class="seconds">45</b> s</span></span></h3>
            <a class="component__view" href="flash-sale.html">View All <i class="icon-chevron-right"></i></a>
        </div>
        <div class="component__content">
            <div class="owl-carousel" data-owl-auto="true" data-owl-loop="true" data-owl-speed="8000" data-owl-gap="0" data-owl-nav="true" data-owl-dots="false" data-owl-item="5" data-owl-item-xs="2" data-owl-item-sm="2" data-owl-item-md="3" data-owl-item-lg="5" data-owl-duration="1000" data-owl-mousedrag="on">
                <div class="ps-flash__product">
                    <div class="ps-product--standard"><a href="product_details.html"><img class="ps-product__thumbnail" src="assets/img/products/01-fresh/01_16a.jpg" alt="alt" />
                    </a>
                    <a class="ps-product__expand" href="javascript:void(0);" data-toggle="modal" data-target="#popupQuickview"><i class="icon-expand"></i></a>
                        <div class="ps-product__content">
                            <p class="ps-product__type"><i class="icon-store"></i>Onemart</p>
                            <h5><a class="ps-product__name" href="product_details.html">Cornboat Holders</a></h5>
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
                            <p class="ps-product-price-block"><span class="ps-product__sale">Rs2.90</span><span class="ps-product__price">Rs4.90</span><span class="ps-product__off">25% Off</span>
                            </p>
                            <div class="progress">
                                <div class="progress-bar bg-warning" role="progressbar" style="width: 0%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                            <p class="ps-product__sold">Sold: 0/40</p>
                        </div>
                        <div class="ps-product__footer">
                            <div class="def-number-input number-input safari_only">
                                <button class="minus" onclick="this.parentNode.querySelector('input[type=number]').stepDown()"><i class="icon-minus"></i></button>
                                <input class="quantity" min="0" name="quantity" value="1" type="number" />
                                <button class="plus" onclick="this.parentNode.querySelector('input[type=number]').stepUp()"><i class="icon-plus"></i></button>
                            </div>
                            <div class="ps-product__total">Total: <span>Rs2.90</span>
                            </div>
                            <button class="ps-product__addcart" data-toggle="modal" data-target="#popupAddToCart"><i class="icon-cart"></i>Add to cart</button>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</section>
@endif
