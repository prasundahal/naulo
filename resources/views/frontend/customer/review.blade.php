@extends('frontend.layouts.app')

@section('content')

<main class="no-main">
    <div class="ps-breadcrumb">
        <div class="container">
            <ul class="ps-breadcrumb__list">
                <li class="active"><a href="index.html">Home</a></li>
                <li><a href="javascript:void(0);">My Reviews</a></li>
            </ul>
        </div>
    </div>

    <section class="section--become">
        <h2 class="page__title">My Reviews</h2>
            <div class="container">
                <div class="row">
                    <div class="col-12 col-lg-3">
                        @include('frontend.inc.dashboardSidebar');
                    </div>
                    <div class="col-12 col-lg-9">
                        <div class="product_tbl">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th scope="col">Sold By</th>
                                        <th scope="col">Product Name</th>
                                        <th scope="col">Purchased Date</th>
                                        <th scope="col">Manage</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>
                                           <a href="vendor-store.html">
                                                Hamro Kiraana Store
                                           </a>
                                        </td>
                                        <td>
                                            <div class="ps-product--vertical"><a href="product_details.html"><img class="ps-product__thumbnail" src="assets/img/products/01-fresh/01_18a.jpg" alt="alt" /></a>
                                                <div class="ps-product__content">
                                                    <h5><a class="ps-product__name" href="product_details.html">Extreme Budweiser Light Can</a></h5>
                                                    <p class="ps-product__unit">500g</p>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <small>25 Oct 2020</small>
                                        </td>
                                        <td>
                                            <button class="btn btn-sm btn-light">Reviews</button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <a href="vendor-store.html">
                                                Naulo Bazar Nepal
                                           </a>
                                        </td>
                                        <td>
                                            <div class="ps-product--vertical"><a href="product_details.html"><img class="ps-product__thumbnail" src="assets/img/products/01-fresh/01_31a.jpg" alt="alt" /></a>
                                                <div class="ps-product__content">
                                                    <h5><a class="ps-product__name" href="product_details.html">Honest Organic Still Lemonade</a></h5>
                                                    <p class="ps-product__unit">100g</p>
                                                </div>
                                            </div>
                                        </td>
                                        <td><small>10 July 2020</small>
                                        </td>
                                        <td>
                                            <div class="ps-product__rating">
                                                <select class="rating-stars">
                                                    <option value="1">1</option>
                                                    <option value="2">2</option>
                                                    <option value="3">3</option>
                                                    <option value="4" selected="selected">4</option>
                                                    <option value="5">5</option>
                                                </select>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <a href="vendor-store.html">
                                                Manakamana Cable Car
                                           </a>
                                        </td>
                                        <td>
                                            <div class="ps-product--vertical"><a href="product_details.html"><img class="ps-product__thumbnail" src="assets/img/products/01-fresh/01_16a.jpg" alt="alt" /></a>
                                                <div class="ps-product__content">
                                                    <h5><a class="ps-product__name" href="product_details.html">Matures Own 100% Wheat</a></h5>
                                                    <p class="ps-product__unit">1.5L</p>
                                                </div>
                                            </div>
                                        </td>
                                        <td><small>14 Feb 2020</small>
                                        </td>
                                        <td>
                                            <div class="ps-product__rating">
                                                <select class="rating-stars">
                                                    <option value="1">1</option>
                                                    <option value="2">2</option>
                                                    <option value="3" selected="selected">3</option>
                                                    <option value="4">4</option>
                                                    <option value="5">5</option>
                                                </select>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <a href="vendor-store.html">
                                                Friends Store
                                           </a>
                                        </td>
                                        <td>
                                            <div class="ps-product--vertical"><a href="product_details.html"><img class="ps-product__thumbnail" src="assets/img/products/01-fresh/01_1a.jpg" alt="alt" /></a>
                                                <div class="ps-product__content">
                                                    <h5><a class="ps-product__name" href="product_details.html">Corn, Yellow Sweet</a></h5>
                                                    <p class="ps-product__unit">500g</p>
                                                </div>
                                            </div>
                                        </td>
                                       <td><small>09 Jan 2020</small>
                                        </td>
                                        <td>
                                            <button class="btn btn-sm btn-light">Review</button>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>

                    </div>
                    <div class="clearfix"></div>
                </div>
            </div> 
    </section>
</main>

@endsection