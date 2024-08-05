
<section class="padding-bottom padding-top loved-category"style="position: relative;@if(isset($option) && $option->is_hide == 1) opacity: 0.5; @else opacity: 1; @endif" data-index="{{ $option->order ?? '' }}" data-id="{{ $option->order ?? '' }}" data-value="{{ $option->id ?? '' }}" data-hide="{{ $option->is_hide ?? '' }}" data-section="{{ $option->section_name ?? '' }}"  data-store="{{ $option->store_id ?? '' }}" data-theme="{{ $option->theme_id ?? '' }}">
    <div class="custome_tool_bar"></div>
    <div class="container">
        <div class="section-title d-flex align-items-center justify-content-between">

            <h2 class="title" id="{{ $section->best_product->section->title->slug ?? '' }}_preview"> {!!
                $section->best_product->section->title->text ?? '' !!}</h2>
            <a href="#" class="btn" id="{{ $section->best_product->section->button->slug ?? '' }}_preview">
                {!! $section->best_product->section->button->text ?? '' !!}
                <svg xmlns="http://www.w3.org/2000/svg" width="4" height="6" viewBox="0 0 4 6" fill="none">
                    <path fill-rule="evenodd" clip-rule="evenodd"
                        d="M0.65976 0.662719C0.446746 0.879677 0.446746 1.23143 0.65976 1.44839L2.18316 3L0.65976 4.55161C0.446747 4.76856 0.446747 5.12032 0.65976 5.33728C0.872773 5.55424 1.21814 5.55424 1.43115 5.33728L3.34024 3.39284C3.55325 3.17588 3.55325 2.82412 3.34024 2.60716L1.43115 0.662719C1.21814 0.445761 0.872773 0.445761 0.65976 0.662719Z"
                        fill="white"></path>
                </svg>
            </a>

        </div>
        <div class="row row-gap">
            <div class="col-xl-6 col-lg-5 col-md-4 col-12">
                <div class="category-card">

                        <div class="category-img">
                            <img src=" {{asset($section->best_product->section->image->image ?? 'themes/'.$currentTheme.'/assets/img/img1.png') }} ">
                        </div>
                        <div class="category-card-body">

                            <div class="title-wrapper">
                                <h4 class="title" id="{{ $section->best_product->section->sub_title->slug ?? '' }}_preview">{!!  $section->best_product->section->sub_title->text ?? '' !!}</h4>
                            </div>
                            <p id="{{ $section->best_product->section->description->slug ?? '' }}_preview">
                                {!! $section->best_product->section->description->text ?? '' !!}
                            </p>
                            <div class="btn-wrapper">
                                <a href="{{ route('page.product-list',$slug) }}" class="addtocart-btn btn btn-white" id="{{ $section->best_product->section->button_second->slug ?? '' }}_preview">
                                    {!! $section->best_product->section->button_second->text ?? ''  !!} <svg xmlns="http://www.w3.org/2000/svg"
                                        width="4" height="6" viewBox="0 0 4 6" fill="none">
                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                            d="M0.65976 0.662719C0.446746 0.879677 0.446746 1.23143 0.65976 1.44839L2.18316 3L0.65976 4.55161C0.446747 4.76856 0.446747 5.12032 0.65976 5.33728C0.872773 5.55424 1.21814 5.55424 1.43115 5.33728L3.34024 3.39284C3.55325 3.17588 3.55325 2.82412 3.34024 2.60716L1.43115 0.662719C1.21814 0.445761 0.872773 0.445761 0.65976 0.662719Z"
                                            fill="white"></path>
                                    </svg></a>
                            </div>
                        </div>

                </div>
            </div>
            <div class="col-xl-6 col-lg-7 col-md-8 col-12">
                <div class="product-row loved-category-slider">

                    @foreach ($modern_products as $product)

                    <div class="product-card">
                        <div class="product-card-inner">
                            <div class="product-card-image">
                                {!! \App\Models\Product::productSalesPage($currentTheme, $slug, $product->id) !!}
                                <a href="{{ url($slug.'/product/'.$product->slug) }}">
                                    <img src="{{ get_file($product->cover_image_path, $currentTheme) }}"
                                        class="default-img">
                                    @if ($product->Sub_image($product->id)['status'] == true)
                                        <img src="{{ get_file($product->Sub_image($product->id)['data'][0]->image_path, $currentTheme) }}"
                                            class="hover-img">
                                    @else
                                        <img src="{{ get_file($product->Sub_image($product->id), $currentTheme) }}"
                                            class="hover-img">
                                    @endif

                                            <a href="javascript:void(0)" class="wishlist-btn wishbtn-globaly"
                                                tabindex="0" product_id="{{ $product->id }}"
                                                in_wishlist="{{ $product->in_whishlist ? 'remove' : 'add' }}">
                                                <i
                                                    class="{{ $product->in_whishlist ? 'fa fa-heart' : 'ti ti-heart' }}"></i>
                                            </a>
                                       
                                        {!! \App\Models\Product::actionLinks($currentTheme, $slug, $product) !!}
                                </a>
                            </div>
                            <div class="product-content">
                                <div class="product-content-top">
                                    <div class="product-type">{{ $product->label->name ?? '' }}</div>
                                    <h3 class="product-title">
                                        <a href="{{ url($slug.'/product/'.$product->slug) }}">
                                            {{ $product->name }}
                                        </a>
                                    </h3>
                                    <div class="reviews-stars-wrap d-flex align-items-center">
                                        <div class="reviews-stars-outer">
                                            @for ($i = 0; $i < 5; $i++)
                                                <i
                                                    class="ti ti-star review-stars {{ $i < $product->average_rating ? 'text-warning' : '' }} "></i>
                                            @endfor
                                        </div>
                                        <div class="point-wrap">
                                            <span class="review-point">{{ $product->average_rating }}.0 /
                                                <span>5.0</span></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="product-content-bottom">
                                    @if ($product->variant_product == 0)
                                        <div class="price">
                                            <ins>{{ currency_format_with_sym(($product->sale_price ?? $product->price) , $store->id, $currentTheme )}}</ins>
                                        </div>
                                    @else
                                        <div class="price">
                                            <ins>{{ __('In Variant') }}</ins>
                                        </div>
                                    @endif
                                    <button class="addtocart-btn btn   addcart-btn-globaly" tabindex="0"
                                        product_id="{{ $product->id }}"
                                        variant_id="0" qty="1">
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
            </div>
        </div>

    </div>
</section>
