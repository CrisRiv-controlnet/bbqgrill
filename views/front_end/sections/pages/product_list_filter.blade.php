<div class="row">
    @foreach ($products as $product)
        <div class="col-lg-4 col-xl-4 col-md-4 col-sm-6 col-12 product-card">
            <div class="product-card-inner">
                <div class="product-card-image">
                    <a href="{{ url($slug.'/product/'.$product->slug) }}">
                        <img src="{{ get_file($product->cover_image_path, $currentTheme) }}" class="default-img">
                        @if ($product->Sub_image($product->id)['status'] == true)
                            <img src="{{ get_file($product->Sub_image($product->id)['data'][0]->image_path, $currentTheme) }}"
                                class="hover-img">
                        @else
                            <img src="{{ get_file($product->Sub_image($product->id), $currentTheme) }}" class="hover-img">
                        @endif
                    </a>

                        <a href="javascript:void(0)" class="wishlist-btn wishbtn-globaly" tabindex="0"
                            product_id="{{ $product->id }}"
                            in_wishlist="{{ $product->in_whishlist ? 'remove' : 'add' }}">
                            <i class="{{ $product->in_whishlist ? 'fa fa-heart' : 'ti ti-heart' }}"></i>
                        </a>
                        {!! \App\Models\Product::actionLinks($currentTheme, $slug, $product) !!}
                </div>
                {!! \App\Models\Product::productSalesPage($currentTheme, $slug, $product->id) !!}
                <div class="product-content">
                    <div class="product-content-top">
                        <div class="product-type">{{ ucfirst($product->label->name ?? '') }}</div>
                        <h3 class="product-title">
                            <a href="{{ url($slug.'/product/'.$product->slug) }}">
                                {{ $product->name }}
                            </a>
                        </h3>
                        <div class="reviews-stars-wrap">
                            <div class="reviews-stars-outer">
                                @for ($i = 0; $i < 5; $i++)
                                    <i
                                        class="ti ti-star review-stars {{ $i < $product->average_rating ? 'text-warning' : '' }} "></i>
                                @endfor

                            </div>
                            <div class="point-wrap">
                                <span class="review-point">{{ $product->average_rating }}.0 / <span>5.0</span></span>
                            </div>
                        </div>
                    </div>

                    <div class="product-content-bottom">
                        @if ($product->variant_product == 0)
                            <div class="price">
                                <ins>{{ currency_format_with_sym(($product->sale_price ?? $product->price) , $store->id, $currentTheme)}} </ins>
                            </div>
                        @else
                            <div class="price">
                                <ins>{{ __('In Variant') }}</ins>
                            </div>
                        @endif
                        <button class="addtocart-btn btn   addcart-btn-globaly" tabindex="0"
                            product_id="{{ $product->id }}" variant_id="0" qty="1">
                            <span> {{ __('Add to cart') }} </span>
                            <svg xmlns="http://www.w3.org/2000/svg" width="4" height="6" viewBox="0 0 4 6"
                            fill="none">
                            <path fill-rule="evenodd" clip-rule="evenodd"
                                d="M0.65976 0.662719C0.446746 0.879677 0.446746 1.23143 0.65976 1.44839L2.18316 3L0.65976 4.55161C0.446747 4.76856 0.446747 5.12032 0.65976 5.33728C0.872773 5.55424 1.21814 5.55424 1.43115 5.33728L3.34024 3.39284C3.55325 3.17588 3.55325 2.82412 3.34024 2.60716L1.43115 0.662719C1.21814 0.445761 0.872773 0.445761 0.65976 0.662719Z"
                                fill="white"></path>
                        </svg>
                        </button>
                        {!! \App\Models\Product::ProductcardButton($currentTheme, $slug, $product) !!}
                    </div>
                </div>
            </div>
        </div>
    @endforeach
</div>

@php
$page_no = !empty($page) ? $page : 1;
@endphp
<div class="d-flex justify-content-end col-12">
    <nav class="dataTable-pagination">
        <ul class="dataTable-pagination-list">
            <li class="pagination">
                {{ $products->onEachSide(0)->links('pagination::bootstrap-4') }}
            </li>
        </ul>
    </nav>
</div>
