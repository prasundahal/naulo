

@extends('frontend.layouts.app')

@section('content')
<main class="no-main">
        <section class="section--become">
            <div class="banner--block"><img class="banner-img desktop-only" src="assets/img/banner_become.jpg" alt="image">
                <div class="banner__content">
                    <div class="banner__box">
                        <div class="banner__title">Open your store on Naulobazar & reach millions of buyers all over the Nepal.</div>
                        <div class="banner__subtitle">There's no brtter way to showcase your products to a massive, tech-savy audience.</div><a class="ps-button banner__link" href="{{ route('affiliate.apply') }}">Start selling to Naulobazar today!</a>
                    </div>
                </div>
            </div>
            <div class="become__service">
                <div class="container">
                    <h6 class="service__title">Our contracts are based on the idea that a happy vendor makes for the best partner. Watch your products sell on Naulobazar and grow your business with every sale.</h6>
                    <div class="row">
                        <div class="col-6 col-lg-3 service__item">
                            <div class="service__icon"><img src="assets/img/chart.png" alt></div>
                            <div class="service__name">FREE COMMISSON</div>
                            <div class="service__des">Open and operate an online store at no cost</div>
                        </div>
                        <div class="col-6 col-lg-3 service__item">
                            <div class="service__icon"><img src="assets/img/delivery.png" alt></div>
                            <div class="service__name">NATIONWIDE DELIVERY</div>
                            <div class="service__des">Sell across the nation</div>
                        </div>
                        <div class="col-6 col-lg-3 service__item">
                            <div class="service__icon"><img src="assets/img/monthly.png" alt></div>
                            <div class="service__name">MONTHLY TRAFFIC</div>
                            <div class="service__des">Grap to chance to reach a large customer base</div>
                        </div>
                        <div class="col-6 col-lg-3 service__item">
                            <div class="service__icon"><img src="assets/img/support.png" alt></div>
                            <div class="service__name">FLATFORM SUPPORT</div>
                            <div class="service__des">Assist you managing your store and orders</div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="become__vender">
                <div class="container">
                    <div class="vender__header">
                        <h3 class="become__title">About Vendor Program</h3>
                        <p>Naulobazar E-Commerce gives you a chance to quickly and easily find the phone you want and have it delivered to your home in no time, regardless of your location, as long as it in one of the countries of the EU.</p>
                        <p>When a company is in the business of selling large equipment or technology to businesses, often purchasing through cash is difficult. But the customer might not really be interested in taking a loan and going through all the hassle in order to make that purchase. In such a case, the company provides financial support to the customer through a vendor program like paying in instalments. In a vendor leasing program, the company is effectively buying it's own products at that point of time and still increasing it's sales.</p>
                    </div>
                    <div class="vender__content">
                        <div class="row m-0">
                            <div class="col-6 col-lg-4 vender__item">
                                <div class="vender__icon"><i class="icon-group-work"></i></div>
                                <div class="vender__item__content">
                                    <div class="vender__number">30.000+</div>
                                    <p>REGISTERED USERS</p>
                                </div>
                            </div>
                            <div class="col-6 col-lg-4 vender__item">
                                <div class="vender__icon"><i class="icon-store"></i></div>
                                <div class="vender__item__content">
                                    <div class="vender__number">1.949</div>
                                    <p>SELLERS</p>
                                </div>
                            </div>
                            <div class="col-6 col-lg-4 vender__item">
                                <div class="vender__icon"><i class="icon-receipt"></i></div>
                                <div class="vender__item__content">
                                    <div class="vender__number">15.000+</div>
                                    <p>DAILY ORDERED</p>
                                </div>
                            </div>
                            <div class="col-6 col-lg-4 vender__item">
                                <div class="vender__icon"><i class="icon-users2"></i></div>
                                <div class="vender__item__content">
                                    <div class="vender__number">1M</div>
                                    <p>DAILY PAGE VISITS</p>
                                </div>
                            </div>
                            <div class="col-6 col-lg-4 vender__item">
                                <div class="vender__icon"><i class="icon-chart-growth"></i></div>
                                <div class="vender__item__content">
                                    <div class="vender__number">45%</div>
                                    <p>GROWTH PER YEAR</p>
                                </div>
                            </div>
                            <div class="col-6 col-lg-4 vender__item">
                                <div class="vender__icon"><i class="icon-diamond4"></i></div>
                                <div class="vender__item__content">
                                    <div class="vender__number">89</div>
                                    <p>TOP GLOBAL BRANDS</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="become__stories">
                <div class="container">
                    <div class="stories__header">
                        <h3 class="become__title">Success Stories</h3>
                        <p>Every member of the Naulobazar team knows that this is more than a job, this mission is essential to our survival because agritech has presented us with a unique opportunity and the possibility to achieve global food security.</p>
                    </div>
                    <div class="stories__content">
                        <div class="owl-carousel" data-owl-auto="true" data-owl-loop="true" data-owl-speed="5000" data-owl-gap="0" data-owl-nav="true" data-owl-dots="true" data-owl-item="4" data-owl-item-xs="1" data-owl-item-sm="1" data-owl-item-md="2" data-owl-item-lg="4" data-owl-item-xl="4" data-owl-duration="1000" data-owl-mousedrag="on">
                            <div class="customer__item"><img src="assets/img/avatar1.jpg" alt="alt" />
                                <div class="customer__name">Bikash Bhandari</div>
                                <div class="customer__position">Founder of <span>BikashMart</span></div>
                                <div class="customer__message">"We can't understand how we've been living without Naulobazar. Absolutely wonderfull. I don't know what else to say. Great job, I will definitely be ordering again!"</div>
                            </div>
                            <div class="customer__item"><img src="assets/img/avatar2.jpg" alt="alt" />
                                <div class="customer__name">Ganesh Khadka</div>
                                <div class="customer__position">Founder of <span>GaneshMart</span></div>
                                <div class="customer__message">"I couldn't have asked for more than this. Naulobazar is the real deal! Naulobazar has really helped our business."</div>
                            </div>
                            <div class="customer__item"><img src="assets/img/avatar9.jpg" alt="alt" />
                                <div class="customer__name">Bipin Dhakal</div>
                                <div class="customer__position">Founder of <span>BipinMart</span></div>
                                <div class="customer__message">"We're loving it. I don't always clop, but when I do, it's because of market. We've used Naulobazar for the last five yaers. I just can't get enough of Naulobazar. I want to get a with pleasure on it so I can show."</div>
                            </div>
                            <div class="customer__item"><img src="assets/img/avatar4.jpg" alt="alt" />
                                <div class="customer__name">Sundar Neupane</div>
                                <div class="customer__position">Founder of <span>SundarMart</span></div>
                                <div class="customer__message">"Naulobazar is the most valuable business resource we have EVER purchased. Really good. Naulobazar is awesome! You won't regret it."</div>
                            </div>
                            <div class="customer__item"><img src="assets/img/avatar5.jpg" alt="alt" />
                                <div class="customer__name">Bikash Bhandari</div>
                                <div class="customer__position">Founder of <span>TejoMart</span></div>
                                <div class="customer__message">"We can't understand how we've been living without Naulobazar. Absolutely wonderfull. I don't know what else to say. Great job, I will definitely be ordering again!"</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="become__questions">
                <div class="container">
                    <div class="questions__header">
                        <h3 class="become__title">Frequently Asked Question.</h3>
                        <p>Here are some common questions about selling on Naulobazar. For more question,
                            <u class="text-success">Please contact us</u>
                        </p>
                    </div>
                    <div class="questions__content">
                        <div class="questions__collapse">
                            <div class="accordion" id="accordionQuestion">
                                <div class="card">
                                    <div class="card-header" id="headingOne">
                                        <button class="btn btn-block" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">How do fees work on Naulobazar?<i class="icon-chevron-up"></i></button>
                                    </div>
                                    <div class="collapse show" id="collapseOne" aria-labelledby="headingOne" data-parent="#accordionQuestion">
                                        <div class="card-body">It's easy to set up a shop on Naulobazar. Create an Martfury account (if you don't already have one), set your shop location and currency, choose a shop name, create a listing, set a payment method (how you want to be paid), and finally set a billing method (how you want to pay your Naulobazar fees).</div>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-header" id="headingTwo">
                                        <button class="btn btn-block collapsed" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">What do I need to do create a shop?<i class="icon-chevron-up"></i></button>
                                    </div>
                                    <div class="collapse" id="collapseTwo" aria-labelledby="headingTwo" data-parent="#accordionQuestion">
                                        <div class="card-body">It's easy to set up a shop on Naulobazar. Create an Martfury account (if you don't already have one), set your shop location and currency, choose a shop name, create a listing, set a payment method (how you want to be paid), and finally set a billing method (how you want to pay your Naulobazar fees).</div>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-header" id="headingThree">
                                        <button class="btn btn-block collapsed" data-toggle="collapse" data-target="#collapseThree" aria-expanded="true" aria-controls="collapseThree">How do I get paid?<i class="icon-chevron-up"></i></button>
                                    </div>
                                    <div class="collapse" id="collapseThree" aria-labelledby="headingThree" data-parent="#accordionQuestion">
                                        <div class="card-body">It's easy to set up a shop on Naulobazar. Create an Martfury account (if you don't already have one), set your shop location and currency, choose a shop name, create a listing, set a payment method (how you want to be paid), and finally set a billing method (how you want to pay your Naulobazar fees).</div>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-header" id="headingFour">
                                        <button class="btn btn-block collapsed" data-toggle="collapse" data-target="#collapseFour" aria-expanded="true" aria-controls="collapseFour">Do I need a credit or debit card to create a shop?<i class="icon-chevron-up"></i></button>
                                    </div>
                                    <div class="collapse" id="collapseFour" aria-labelledby="headingFour" data-parent="#accordionQuestion">
                                        <div class="card-body">It's easy to set up a shop on Naulobazar. Create an Martfury account (if you don't already have one), set your shop location and currency, choose a shop name, create a listing, set a payment method (how you want to be paid), and finally set a billing method (how you want to pay your Naulobazar fees).</div>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-header" id="headingFive">
                                        <button class="btn btn-block collapsed" data-toggle="collapse" data-target="#collapseFive" aria-expanded="true" aria-controls="collapseFive">What can I sell on Naulobazar?<i class="icon-chevron-up"></i></button>
                                    </div>
                                    <div class="collapse" id="collapseFive" aria-labelledby="headingFive" data-parent="#accordionQuestion">
                                        <div class="card-body">It's easy to set up a shop on Naulobazar. Create an Martfury account (if you don't already have one), set your shop location and currency, choose a shop name, create a listing, set a payment method (how you want to be paid), and finally set a billing method (how you want to pay your Naulobazar fees).</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="become__footer">
                <div class="container">
                    <h3 class="become__title">Millions of shoppers are waiting to visit your own store.</h3><a class="btn ps-button" href="{{ route('affiliate.apply') }}">Start selling to Naulobazar today!</a>
                </div>
            </div>
        </section>
    </main>


    @endsection
