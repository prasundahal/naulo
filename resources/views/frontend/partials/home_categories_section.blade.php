
<section class="ps-component ps-component--category">
                    <div class="container">
                        <div class="component__header">
                            <h3 class="component__title">Shop By Category</h3><a class="component__view" href="shop-categories.html">View All <i class="icon-chevron-right"></i></a>
                        </div>
                        <div class="component__content" >
                            <div class="owl-carousel"  data-owl-auto="true" data-owl-loop="true" data-owl-speed="5000" data-owl-gap="0" data-owl-nav="true" data-owl-dots="true" data-owl-item="8" data-owl-item-xs="3" data-owl-item-sm="3" data-owl-item-md="5" data-owl-item-lg="8" data-owl-duration="1000" data-owl-mousedrag="on">

                                @foreach (\App\Category::where('featured', 1)->get()->take(7) as $key => $category)
                                {{-- @if ($key == 0) class="active" @endif --}}
                                <div  class="ps-category__item" ><a href="{{ route('products.category', $category->slug) }}"><img class="ps-categories__thumbnail" src="{{ asset($category->banner) }}" data-src="{{ asset($category->banner) }}"alt ="{{ __($category->name) }}"></a><a class="ps-categories__name" href="#">{{ __($category->name) }} </a></div>

                                @endforeach

                            </div>
                        </div>
                    </div>
                </section>


