

<section class="padding-bottom today-discounts"tyle="position: relative;@if(isset($option) && $option->is_hide == 1) opacity: 0.5; @else opacity: 1; @endif" data-index="{{ $option->order ?? '' }}" data-id="{{ $option->order ?? '' }}" data-value="{{ $option->id ?? '' }}" data-hide="{{ $option->is_hide ?? '' }}" data-section="{{ $option->section_name ?? '' }}"  data-store="{{ $option->store_id ?? '' }}" data-theme="{{ $option->theme_id ?? '' }}">
    <div class="custome_tool_bar"></div>

    <div class="container">
        <div class="section-title d-flex align-items-center justify-content-between">
            <h2 class="title" id="{{ $section->bestseller_slider->section->title->slug ?? ''}}_preview">
                {!! $section->bestseller_slider->section->title->text ?? ''!!}</h2>
            <a href="{{ route('page.product-list',  ['storeSlug' => $slug]) }}" class="btn" id="{{ $section->bestseller_slider->section->button->slug ?? ''}}_preview">
                {!! $section->bestseller_slider->section->button->text ?? '' !!}
                <svg xmlns="http://www.w3.org/2000/svg" width="4" height="6" viewBox="0 0 4 6" fill="none">
                    <path fill-rule="evenodd" clip-rule="evenodd"
                        d="M0.65976 0.662719C0.446746 0.879677 0.446746 1.23143 0.65976 1.44839L2.18316 3L0.65976 4.55161C0.446747 4.76856 0.446747 5.12032 0.65976 5.33728C0.872773 5.55424 1.21814 5.55424 1.43115 5.33728L3.34024 3.39284C3.55325 3.17588 3.55325 2.82412 3.34024 2.60716L1.43115 0.662719C1.21814 0.445761 0.872773 0.445761 0.65976 0.662719Z"
                        fill="white"></path>
                </svg>
            </a>
        </div>
        <div class="product-row today-discounts-slider">
            @foreach ($discount_products as $item)

                <div class="product-card">
                    <div class="product-card-inner">
                        <div class="product-card-image">
                            {!! \App\Models\Product::productSalesPage($currentTheme, $slug, $item->id) !!}
                            <a href="{{ url($slug . '/product/' . $item->slug) }}">
                                <img src="{{ get_file($item->cover_image_path ?? '', $currentTheme) }}"
                                    class="default-img">
                                @if ($item->Sub_image($item->id)['status'] == true)
                                    <img src="{{ get_file($item->Sub_image($item->id)['data'][0]->image_path, $currentTheme) }}"
                                        class="hover-img">
                                @else
                                    <img src="{{ get_file($item->Sub_image($item->id), $currentTheme) }}"
                                        class="hover-img">
                                @endif

                                        <a href="javascript:void(0)" class="wishlist-btn wishbtn-globaly"
                                            tabindex="0" product_id="{{ $item->id }}"
                                            in_wishlist="{{ $item->in_whishlist ? 'remove' : 'add' }}">
                                            <i class="{{ $item->in_whishlist ? 'fa fa-heart' : 'ti ti-heart' }}"></i>
                                        </a>
                                        {!! \App\Models\Product::actionLinks($currentTheme, $slug, $item) !!}
                            </a>
                        </div>
                        <div class="product-content">
                            <div class="product-content-top">
                                <div class="product-type">{{ $item->label->name ?? '' }}</div>
                                <h3 class="product-title">
                                    <a href="{{ url($slug . '/product/' . $item->slug) }}">
                                        {{ $item->name }}
                                    </a>
                                </h3>
                                <div class="reviews-stars-wrap">
                                    <div class="reviews-stars-outer">
                                        @for ($i = 0; $i < 5; $i++)
                                            <i
                                                class="ti ti-star review-stars {{ $i < $item->average_rating ? 'text-warning' : '' }} "></i>
                                        @endfor
                                    </div>
                                    <div class="point-wrap">
                                        <span class="review-point">{{ $item->average_rating }}.0 /
                                            <span>5.0</span></span>
                                    </div>
                                </div>
                            </div>
                            <div class="product-content-bottom">
                                @if ($item->variant_product == 0)
                                    <div class="price">
                                        <ins>{{ currency_format_with_sym(($item->sale_price ?? $item->price) , $store->id, $currentTheme )}}</ins>
                                    </div>
                                @else
                                    <div class="price">
                                        <ins>{{ __('In Variant') }}</ins>
                                    </div>
                                @endif
                                <button class="addtocart-btn btn   addcart-btn-globaly" tabindex="0"
                                    product_id="{{ $item->id }}"
                                    variant_id="0" qty="1">
                                    <span> {{ __('Add to cart') }} </span>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="4" height="6" viewBox="0 0 4 6"
                                    fill="none">
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                        d="M0.65976 0.662719C0.446746 0.879677 0.446746 1.23143 0.65976 1.44839L2.18316 3L0.65976 4.55161C0.446747 4.76856 0.446747 5.12032 0.65976 5.33728C0.872773 5.55424 1.21814 5.55424 1.43115 5.33728L3.34024 3.39284C3.55325 3.17588 3.55325 2.82412 3.34024 2.60716L1.43115 0.662719C1.21814 0.445761 0.872773 0.445761 0.65976 0.662719Z"
                                        fill="white"></path>
                                </svg>
                                </button>
                                {!! \App\Models\Product::ProductcardButton($currentTheme, $slug, $item) !!}
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>

</section>
