@extends('frontend.layouts.app')

@section('content')

<main class="no-main">
    <div class="ps-breadcrumb">
        <div class="container">
            <ul class="ps-breadcrumb__list">
                <li class="active"><a href="index.html">Home</a></li>
                <li><a href="javascript:void(0);">My Cancellations</a></li>
            </ul>
        </div>
    </div>

    <section class="section--become">

        <h2 class="page__title">My Cancellations</h2>
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
                                        <th scope="col">Order ID #</th>
                                        <th scope="col">Product Name</th>
                                        <th scope="col">Canceled On</th>
                                        <th scope="col">Manage</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>
                                            <div class="order_id">
                                                201914718858678
                                            </div>
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
                                            <button class="btn btn-sm btn-light">View Detail</button>
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