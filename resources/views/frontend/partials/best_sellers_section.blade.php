@if (\App\BusinessSetting::where('type', 'vendor_system_activation')->first()->value == 1)
    @php
        $array = array();
        foreach (\App\Seller::where('verification_status', 1)->get() as $key => $seller) {
            if($seller->user != null && $seller->user->shop != null){
                $total_sale = 0;
                foreach ($seller->user->products as $key => $product) {
                    $total_sale += $product->num_of_sale;
                }
                $array[$seller->id] = $total_sale;
            }
        }
        asort($array);
    @endphp
    @if(!empty($array))


<section class="section--storeList">
    <div class="container">
        <div class="storeList__content pb-0">
            <div class="component__header">
                <h3 class="component__title">Our Top Venders</h3>
            </div>
            <div class="owl-carousel" data-owl-auto="true" data-owl-loop="true" data-owl-speed="8000" data-owl-gap="10" data-owl-nav="true" data-owl-dots="true" data-owl-item="4" data-owl-item-xs="1" data-owl-item-sm="1" data-owl-item-md="2" data-owl-item-lg="4" data-owl-item-xl="4" data-owl-duration="1000" data-owl-mousedrag="on">
                @php
                $count = 0;
            @endphp
            @foreach ($array as $key => $value)
                @if ($count < 20)
                    @php
                        $count ++;
                        $seller = \App\Seller::find($key);
                        $total = 0;
                        $rating = 0;
                        foreach ($seller->user->products as $key => $seller_product) {
                            $total += $seller_product->reviews->count();
                            $rating += $seller_product->reviews->sum('rating');
                        }
                    @endphp
                <div class="storeList__item">



                    <div class="item__header"><img src="{{ asset($seller->user->shop->logo) }}" alt="alt" />
                        <div class="item__content">
                            <h5 class="item__title">{{ $seller->user->shop->name }} </h5>
                            <div class="item__rating">
                                <select class="rating-stars">
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3" selected="selected">3</option>
                                    <option value="4">4</option>
                                    <option value="5">5</option>
                                </select>
                            </div>
                            <div class="item__street">{{ $seller->user->shop->address }}</div>
                            {{-- <div class="item__address">44600, Kathmandu, Nepal</div> --}}
                            <div class="item__phone"> <i class="fa fa-phone"></i>{{ $seller->user->phone }}</div>
                        </div>
                    </div>
                    <div class="item__footer"><a class="item__store" href="{{ route('shop.visit', $seller->user->shop->slug) }}">Visit Store</a>
                        <div class="item__avatar">
                            <div class="avatar"><img src="@if ($seller->user->avatar !== null) {{ asset($seller->user->avatar) }} @else {{ asset('frontend/images/placeholder.jpg') }} @endif" alt="user image" /></div>
                        </div>
                    </div>


                </div>
                @endif
                @endforeach

            </div>

        </div>

    </div>
</section>
@endif
@endif
