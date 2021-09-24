@extends('frontend.layouts.app')

@section('content')
<main class="no-main">
    <div class="ps-breadcrumb">
        <div class="container">
            <ul class="ps-breadcrumb__list">
                <li class="active"><a href="index.html">Home</a></li>
                <li class="active"><a href="shop.html">Shop</a></li>
            <li><a href="javascript:void(0);">wishlist</a></li>
            </ul>
        </div>
    </div>

    <section class="section--become">

        <h2 class="page__title">My Wishlist</h2>
            <div class="container">
                <div class="row">
                    <div class="col-12 col-lg-3">
                       @include('frontend.inc.dashboardSidebar');
                    </div>
                    <div class="col-12 col-lg-9">
                        <div class="product_tbl">

                            <table class="table">
                                <thead class="wishlist__thead">
                                    <tr>
                                        <th scope="col"></th>
                                        <th scope="col">Product Name</th>
                                        <th scope="col">Unit Price</th>
                                        <th scope="col">Stock Status</th>
                                        <th scope="col"></th>
                                    </tr>
                                </thead>
                                <tbody class="wishlist__tbody">
                                   
                                    @foreach ($wishlists as $key => $wishlist)
                                    @if ($wishlist->product != null)
                                    <tr>
                                        <td>
                                            <div class="wishlist__trash" id="wishlist_{{ $wishlist->id }}"><a href="" onclick="removeFromWishlist({{$wishlist->id}}"><i class="icon-trash2"></i></a></div>
                                        </td>
                                        <td>
                                            <div class="ps-product--vertical"><a href=""><img class="ps-product__thumbnail" src="{{asset($wishlist->product->thumbnail_img)}}" alt="alt" /></a>
                                                <div class="ps-product__content">
                                                    <h5><a class="ps-product__name" href="">{{$wishlist->product->name}}</a></h5>
                                                    <p class="ps-product__unit">{{$wishlist->product->unit}}</p>
                                                </div>
                                            </div>
                                        </td>
                                        <td><span class="ps-product__price">Rs.{{$wishlist->product->unit_price}}</span>
                                        </td>
                                        <td><span class="ps-product__instock">{{$wishlist->product->current_stock}}</span>
                                        </td>
                                        <td>
                                            <button class="btn wishlist__btn add-cart" onclick="showAddToCartModal({{ $wishlist->product->id }})"><i class="icon-cart"></i>Add to cart</button>
                                        </td>
                                    </tr>
                                </tbody>
                                @endif
                                @endforeach
                            </table>
                        </div>

                    </div>
                    <div class="clearfix"></div>
                </div>
            </div> 
    </section>
</main>
@endsection
@section('script')
    <script type="text/javascript">
        function removeFromWishlist(id){
            $.post('{{ route('wishlists.remove') }}',{_token:'{{ csrf_token() }}', id:id}, function(data){
                $('#wishlist').html(data);
                $('#wishlist_'+id).hide();
                showFrontendAlert('success', 'Item has been renoved from wishlist');
            })
        }
    </script>
@endsection