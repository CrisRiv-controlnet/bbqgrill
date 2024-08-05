<header class="site-header header-style-one"
    style="@if (isset($option) && $option->is_hide == 1) opacity: 0.5; @else opacity: 1; @endif"
    data-index="{{ $option->order ?? '' }}" data-id="{{ $option->order ?? '' }}" data-value="{{ $option->id ?? '' }}"
    data-hide="{{ $option->is_hide ?? '' }}" data-section="{{ $option->section_name ?? '' }}"
    data-store="{{ $option->store_id ?? '' }}" data-theme="{{ $option->theme_id ?? '' }}">
    <div class="custome_tool_bar"></div>
    <div class="announcebar">
        <div class="container">
            <div class="announce-row row align-items-center">
                <div class="annoucebar-left col-6 d-flex">
                    <p> {!! $section->header->section->title->text ?? '' !!}
                    </p>
                </div>
                <div class="announcebar-right col-6 d-flex justify-content-end">
                    <a href="tel:{{ $section->header->section->support_value->text ?? '#' }}">
                        <span>{{ $section->header->section->support_title->text ?? '' }} <b>
                                {{ $section->header->section->support_value->text ?? '#' }}</b></span>
                    </a>
                    <button id="announceclose">
                        <svg xmlns="http://www.w3.org/2000/svg" aria-hidden="true" focusable="false" role="presentation"
                            class="icon icon-close" viewBox="0 0 18 17">
                            <path
                                d="M.865 15.978a.5.5 0 00.707.707l7.433-7.431 7.579 7.282a.501.501 0 00.846-.37.5.5 0 00-.153-.351L9.712 8.546l7.417-7.416a.5.5 0 10-.707-.708L8.991 7.853 1.413.573a.5.5 0 10-.693.72l7.563 7.268-7.418 7.417z">
                            </path>
                        </svg>
                    </button>
                </div>
            </div>
        </div>
    </div>
    <div class="container top-header-wrapper">
        <div class="top-header">
            <div class="logo-col">
                 <h1>
                    <a href="{{ route('landing_page', $slug) }}">
                        <img src="{{ asset(asset($theme_logo) && !empty($theme_logo) ? $theme_logo : 'themes/' . $currentTheme . '/assets/images/logo.png') }}"
                            alt="Logo">

                    </a>
                </h1>
            </div>
            <div class="right-side-header">
                <div class="search-form-wrapper">
                    <form>
                        <div class="form-inputs">
                            <input type="search" placeholder="Search Product..." class="form-control search_input"
                                list="products" name="search_product" id="product">
                            <datalist id="products">
                            </datalist>
                            <button type="submit" class="btn search_product_globaly">
                                <svg xmlns="http://www.w3.org/2000/svg" width="13" height="13"
                                    viewBox="0 0 13 13" fill="none">
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                        d="M9.47487 10.5131C8.48031 11.2863 7.23058 11.7466 5.87332 11.7466C2.62957 11.7466 0 9.11706 0 5.87332C0 2.62957 2.62957 0 5.87332 0C9.11706 0 11.7466 2.62957 11.7466 5.87332C11.7466 7.23058 11.2863 8.48031 10.5131 9.47487L12.785 11.7465C13.0717 12.0332 13.0717 12.4981 12.785 12.7848C12.4983 13.0715 12.0334 13.0715 11.7467 12.7848L9.47487 10.5131ZM10.2783 5.87332C10.2783 8.30612 8.30612 10.2783 5.87332 10.2783C3.44051 10.2783 1.46833 8.30612 1.46833 5.87332C1.46833 3.44051 3.44051 1.46833 5.87332 1.46833C8.30612 1.46833 10.2783 3.44051 10.2783 5.87332Z"
                                        fill="#545454" />
                                </svg>
                            </button>
                        </div>

                        {{-- <li class=" form-select profile-headers">
                            <a href="#">
                                {{__('All Categories')}}
                            </a>
                            <div class="menu-dropdown">
                                <ul>
                                    @foreach ($MainCategoryList as $category)
                                      <li><a href="{{route('page.product-list',[$slug,'main_category' => $category->id ])}}">{{$category->name}}</a></li>
                                    @endforeach
                                </ul>
                            </div>
                        </li> --}}

                    </form>

                </div>
                <div class="store-info-wrapper">
                    <div class="store-info-block" id="{{ $section->header->section->title->slug ?? '' }}_preview">
                        <p>{!! $section->header->section->title->text ?? '' !!}</p>
                    </div>
                    <div class="store-info-block">
                        <a href="tel:{{ $section->header->section->support_value->text ?? '#' }}"><span class="label"
                                id="{{ $section->header->section->support_title->slug ?? '' }}_preview">{{ $section->header->section->support_title->text ?? '' }}</span>
                            <b
                                id="{{ $section->header->section->support_value->slug ?? '' }}_preview">{{ $section->header->section->support_value->text ?? '' }}</b></a>
                    </div>
                </div>

                <div class="header-info-end">
                    <ul class="menu-right d-flex align-items-center justify-content-end">
                        <li class="search-header mobile-only">
                            <a href="javascript:void(0)">
                                <svg xmlns="http://www.w3.org/2000/svg" width="13" height="13"
                                    viewBox="0 0 13 13" fill="none">
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                        d="M9.47487 10.5131C8.48031 11.2863 7.23058 11.7466 5.87332 11.7466C2.62957 11.7466 0 9.11706 0 5.87332C0 2.62957 2.62957 0 5.87332 0C9.11706 0 11.7466 2.62957 11.7466 5.87332C11.7466 7.23058 11.2863 8.48031 10.5131 9.47487L12.785 11.7465C13.0717 12.0332 13.0717 12.4981 12.785 12.7848C12.4983 13.0715 12.0334 13.0715 11.7467 12.7848L9.47487 10.5131ZM10.2783 5.87332C10.2783 8.30612 8.30612 10.2783 5.87332 10.2783C3.44051 10.2783 1.46833 8.30612 1.46833 5.87332C1.46833 3.44051 3.44051 1.46833 5.87332 1.46833C8.30612 1.46833 10.2783 3.44051 10.2783 5.87332Z"
                                        fill="#545454"></path>
                                </svg>
                            </a>
                        </li>


                        @auth('customers')
                            <li class="profile-header">
                                <a href="#">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="22"
                                        viewBox="0 0 16 22" fill="none">
                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                            d="M13.3699 21.0448H4.60183C4.11758 21.0448 3.72502 20.6522 3.72502 20.168C3.72502 19.6837 4.11758 19.2912 4.60183 19.2912H13.3699C13.8542 19.2912 14.2468 18.8986 14.2468 18.4143V14.7756C14.2026 14.2836 13.9075 13.8492 13.4664 13.627C10.0296 12.2394 6.18853 12.2394 2.75176 13.627C2.31062 13.8492 2.01554 14.2836 1.9714 14.7756V20.168C1.9714 20.6522 1.57883 21.0448 1.09459 21.0448C0.610335 21.0448 0.217773 20.6522 0.217773 20.168V14.7756C0.256548 13.5653 0.986136 12.4845 2.09415 11.9961C5.95255 10.4369 10.2656 10.4369 14.124 11.9961C15.232 12.4845 15.9616 13.5653 16.0004 14.7756V18.4143C16.0004 19.8671 14.8227 21.0448 13.3699 21.0448ZM12.493 4.38406C12.493 1.96281 10.5302 0 8.10892 0C5.68767 0 3.72486 1.96281 3.72486 4.38406C3.72486 6.80531 5.68767 8.76812 8.10892 8.76812C10.5302 8.76812 12.493 6.80531 12.493 4.38406ZM10.7393 4.38483C10.7393 5.83758 9.56159 7.01526 8.10884 7.01526C6.6561 7.01526 5.47841 5.83758 5.47841 4.38483C5.47841 2.93208 6.6561 1.75439 8.10884 1.75439C9.56159 1.75439 10.7393 2.93208 10.7393 4.38483Z"
                                            fill="#183A40" />
                                    </svg>
                                    <span class="desk-only icon-lable">{{ __('My profile') }}</span>
                                </a>
                                <div class="menu-dropdown">
                                    <ul>
                                        <li class="menu-lnk has-item"><a
                                                href="{{ route('my-account.index', $slug) }}">{{ __('My Account') }}</a>
                                        </li>
                                        <li>
                                            <form method="POST" action="{{ route('customer.logout', $slug) }}"
                                                id="form_logout">
                                                <a href="#"
                                                    onclick="event.preventDefault(); this.closest('form').submit();"
                                                    class="dropdown-item">
                                                    @csrf
                                                    {{ __('Log Out') }}
                                                </a>
                                            </form>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            @include('front_end.hooks.header_button')
                        @endauth
                        @guest('customers')
                            <li class="profile-header">
                                <a href="{{ route('customer.login', $slug) }}">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="22"
                                        viewBox="0 0 16 22" fill="none">
                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                            d="M13.3699 21.0448H4.60183C4.11758 21.0448 3.72502 20.6522 3.72502 20.168C3.72502 19.6837 4.11758 19.2912 4.60183 19.2912H13.3699C13.8542 19.2912 14.2468 18.8986 14.2468 18.4143V14.7756C14.2026 14.2836 13.9075 13.8492 13.4664 13.627C10.0296 12.2394 6.18853 12.2394 2.75176 13.627C2.31062 13.8492 2.01554 14.2836 1.9714 14.7756V20.168C1.9714 20.6522 1.57883 21.0448 1.09459 21.0448C0.610335 21.0448 0.217773 20.6522 0.217773 20.168V14.7756C0.256548 13.5653 0.986136 12.4845 2.09415 11.9961C5.95255 10.4369 10.2656 10.4369 14.124 11.9961C15.232 12.4845 15.9616 13.5653 16.0004 14.7756V18.4143C16.0004 19.8671 14.8227 21.0448 13.3699 21.0448ZM12.493 4.38406C12.493 1.96281 10.5302 0 8.10892 0C5.68767 0 3.72486 1.96281 3.72486 4.38406C3.72486 6.80531 5.68767 8.76812 8.10892 8.76812C10.5302 8.76812 12.493 6.80531 12.493 4.38406ZM10.7393 4.38483C10.7393 5.83758 9.56159 7.01526 8.10884 7.01526C6.6561 7.01526 5.47841 5.83758 5.47841 4.38483C5.47841 2.93208 6.6561 1.75439 8.10884 1.75439C9.56159 1.75439 10.7393 2.93208 10.7393 4.38483Z"
                                            fill="#183A40" />
                                    </svg>
                                    <span class="desk-only icon-lable">{{ __('Login') }}</span>
                                </a>
                            </li>
                        @endguest
                        @auth('customers')
                            <li class="wishlist-header wish-header">
                                <a href="#">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="16"
                                        viewBox="0 0 20 16" fill="none">
                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                            d="M10.6295 3.52275C10.2777 3.85668 9.7223 3.85668 9.37055 3.52275L8.74109 2.92517C8.00434 2.22574 7.00903 1.79867 5.90909 1.79867C3.64974 1.79867 1.81818 3.61057 1.81818 5.84567C1.81818 7.98845 2.99071 9.75782 4.68342 11.2116C6.37756 12.6666 8.40309 13.6316 9.61331 14.1241C9.86636 14.2271 10.1336 14.2271 10.3867 14.1241C11.5969 13.6316 13.6224 12.6666 15.3166 11.2116C17.0093 9.75782 18.1818 7.98845 18.1818 5.84567C18.1818 3.61057 16.3503 1.79867 14.0909 1.79867C12.991 1.79867 11.9957 2.22574 11.2589 2.92517L10.6295 3.52275ZM10 1.62741C8.93828 0.619465 7.49681 0 5.90909 0C2.64559 0 0 2.6172 0 5.84567C0 11.5729 6.33668 14.7356 8.92163 15.7875C9.61779 16.0708 10.3822 16.0708 11.0784 15.7875C13.6633 14.7356 20 11.5729 20 5.84567C20 2.6172 17.3544 0 14.0909 0C12.5032 0 11.0617 0.619465 10 1.62741Z"
                                            fill="#545454" />
                                    </svg>
                                    <span class="count">{!! \App\Models\Wishlist::WishCount($currentTheme) !!}</span>
                                </a>
                            </li>
                       @endauth
                        <li class="cart-header">
                            <a href="javascript:;">
                                <span class="icon-lable desk-only"> {{ __('My Cart:') }} <b> </b>
                                    <span id ="sub_total_main_page">{{ 0 }}</span>
                                    {{ $currency }}

                                </span>
                                <svg xmlns="http://www.w3.org/2000/svg" width="19" height="19"
                                    viewBox="0 0 19 19" fill="none">
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                        d="M7.91797 15.8359C7.91797 17.1476 6.85465 18.2109 5.54297 18.2109C4.23129 18.2109 3.16797 17.1476 3.16797 15.8359C3.16797 14.5243 4.23129 13.4609 5.54297 13.4609C6.85465 13.4609 7.91797 14.5243 7.91797 15.8359ZM6.33464 15.8359C6.33464 16.2732 5.98019 16.6276 5.54297 16.6276C5.10574 16.6276 4.7513 16.2732 4.7513 15.8359C4.7513 15.3987 5.10574 15.0443 5.54297 15.0443C5.98019 15.0443 6.33464 15.3987 6.33464 15.8359Z"
                                        fill="#545454" />
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                        d="M15.8346 15.8359C15.8346 17.1476 14.7713 18.2109 13.4596 18.2109C12.148 18.2109 11.0846 17.1476 11.0846 15.8359C11.0846 14.5243 12.148 13.4609 13.4596 13.4609C14.7713 13.4609 15.8346 14.5243 15.8346 15.8359ZM14.2513 15.8359C14.2513 16.2732 13.8969 16.6276 13.4596 16.6276C13.0224 16.6276 12.668 16.2732 12.668 15.8359C12.668 15.3987 13.0224 15.0443 13.4596 15.0443C13.8969 15.0443 14.2513 15.3987 14.2513 15.8359Z"
                                        fill="#545454" />
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                        d="M1.66578 2.01983C1.86132 1.62876 2.33685 1.47025 2.72792 1.66578L3.52236 2.06301C4.25803 2.43084 4.75101 3.15312 4.82547 3.97225L4.86335 4.38888C4.88188 4.59276 5.05283 4.74887 5.25756 4.74887H15.702C17.0838 4.74887 18.0403 6.12909 17.5551 7.42297L16.1671 11.1245C15.8195 12.0514 14.9333 12.6655 13.9433 12.6655H6.19479C4.96644 12.6655 3.94076 11.7289 3.82955 10.5056L3.24864 4.1156C3.22382 3.84255 3.05949 3.60179 2.81427 3.47918L2.01983 3.08196C1.62876 2.88643 1.47025 2.41089 1.66578 2.01983ZM5.47346 6.3322C5.2407 6.3322 5.05818 6.53207 5.07926 6.76388L5.40638 10.3622C5.44345 10.77 5.78534 11.0822 6.19479 11.0822H13.9433C14.2733 11.0822 14.5687 10.8775 14.6845 10.5685L16.0726 6.86702C16.1696 6.60825 15.9783 6.3322 15.702 6.3322H5.47346Z"
                                        fill="#545454" />
                                </svg>
                                <span class="count">0</span>
                            </a>
                        </li>
                        <li class="menu-lnk has-item lang-dropdown">
                            <a href="#">
                                <span class="link-icon">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 512" width="24px">
                                        <path
                                            d="M160 243.1L147.2 272h25.69L160 243.1zM576 63.1L336 64v384l240 0c35.35 0 64-28.65 64-64v-256C640 92.65 611.3 63.1 576 63.1zM552 232h-1.463c-8.082 27.78-21.06 49.29-35.06 66.34c7.854 4.943 13.33 7.324 13.46 7.375c12.22 5 18.19 18.94 13.28 31.19C538.4 346.3 529.5 352 519.1 352c-2.906 0-5.875-.5313-8.75-1.672c-1-.3906-14.33-5.951-31.26-18.19c-16.69 12.04-29.9 17.68-31.18 18.19C445.9 351.5 442.9 352 440 352c-9.562 0-18.59-5.766-22.34-15.2c-4.844-12.3 1.188-26.19 13.44-31.08c.748-.3047 6.037-2.723 13.25-7.189c-3.375-4.123-6.742-8.324-9.938-13.03c-7.469-10.97-4.594-25.89 6.344-33.34c11.03-7.453 25.91-4.594 33.34 6.375c1.883 2.77 3.881 5.186 5.854 7.682C487.3 256.8 494.1 245.5 499.5 232H408C394.8 232 384 221.3 384 208S394.8 184 408 184h48c0-13.25 10.75-24 24-24S504 170.8 504 184h48c13.25 0 24 10.75 24 24S565.3 232 552 232zM0 127.1v256c0 35.35 28.65 64 64 64L304 448V64L64 63.1C28.65 63.1 0 92.65 0 127.1zM74.06 318.3l64-144c7.688-17.34 36.19-17.34 43.88 0l64 144c5.375 12.11-.0625 26.3-12.19 31.69C230.6 351.3 227.3 352 224 352c-9.188 0-17.97-5.312-21.94-14.25L193.1 319.6C193.3 319.7 192.7 320 192 320H128c-.707 0-1.305-.3418-1.996-.4023l-8.066 18.15c-5.406 12.14-19.69 17.55-31.69 12.19C74.13 344.5 68.69 330.4 74.06 318.3z"
                                            fill="#FEBD2F" />
                                    </svg>
                                </span>
                                <span class="drp-text">{{ Str::upper($currantLang) }}</span>
                                <div class="lang-icn">
                                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:svg="http://www.w3.org/2000/svg"
                                        version="1.1" id="svg2223" xml:space="preserve" width="682.66669"
                                        height="682.66669" viewBox="0 0 682.66669 682.66669">
                                        <g id="g2229" transform="matrix(1.3333333,0,0,-1.3333333,0,682.66667)">
                                            <g id="g2231">
                                                <g id="g2233" clip-path="url(#clipPath2237)">
                                                    <g id="g2239" transform="translate(497,256)">
                                                        <path
                                                            d="m 0,0 c 0,-132.548 -108.452,-241 -241,-241 -132.548,0 -241,108.452 -241,241 0,132.548 108.452,241 241,241 C -108.452,241 0,132.548 0,0 Z"
                                                            style="fill:none;stroke:#FEBD2F;stroke-width:30;stroke-linecap:butt;stroke-linejoin:miter;stroke-miterlimit:10;stroke-dasharray:none;stroke-opacity:1"
                                                            id="path2241" />
                                                    </g>
                                                    <g id="g2243" transform="translate(376,256)">
                                                        <path
                                                            d="m 0,0 c 0,-132.548 -53.726,-241 -120,-241 -66.274,0 -120,108.452 -120,241 0,132.548 53.726,241 120,241 C -53.726,241 0,132.548 0,0 Z"
                                                            style="fill:none;stroke:#FEBD2F;stroke-width:30;stroke-linecap:butt;stroke-linejoin:miter;stroke-miterlimit:10;stroke-dasharray:none;stroke-opacity:1"
                                                            id="path2245" />
                                                    </g>
                                                    <g id="g2247" transform="translate(256,497)">
                                                        <path d="M 0,0 V -482"
                                                            style="fill:none;stroke:#FEBD2F;stroke-width:30;stroke-linecap:butt;stroke-linejoin:miter;stroke-miterlimit:10;stroke-dasharray:none;stroke-opacity:1"
                                                            id="path2249" />
                                                    </g>
                                                    <g id="g2251" transform="translate(15,256)">
                                                        <path d="M 0,0 H 482"
                                                            style="fill:none;stroke:#FEBD2F;stroke-width:30;stroke-linecap:butt;stroke-linejoin:miter;stroke-miterlimit:10;stroke-dasharray:none;stroke-opacity:1"
                                                            id="path2253" />
                                                    </g>
                                                    <g id="g2255" transform="translate(463.8926,136)">
                                                        <path d="M 0,0 H -415.785"
                                                            style="fill:none;stroke:#FEBD2F;stroke-width:30;stroke-linecap:butt;stroke-linejoin:miter;stroke-miterlimit:10;stroke-dasharray:none;stroke-opacity:1"
                                                            id="path2257" />
                                                    </g>
                                                    <g id="g2259" transform="translate(48.1079,377)">
                                                        <path d="M 0,0 H 415.785"
                                                            style="fill:none;stroke:#FEBD2F;stroke-width:30;stroke-linecap:butt;stroke-linejoin:miter;stroke-miterlimit:10;stroke-dasharray:none;stroke-opacity:1"
                                                            id="path2261" />
                                                    </g>
                                                </g>
                                            </g>
                                        </g>
                                    </svg>
                                </div>
                            </a>
                            <div class="menu-dropdown">
                                <ul>
                                    @foreach ($languages as $code => $language)
                                        <li><a href="{{ route('change.languagestore', [$code]) }}"
                                                class="@if ($language == $currantLang) active-language text-primary @endif">{{ ucFirst($language) }}</a>
                                        </li>
                                    @endforeach
                                </ul>
                            </div>
                        </li>
                        <div class="mobile-menu">
                            <button class="mobile-menu-button" id="menu">
                                <div class="one"></div>
                                <div class="two"></div>
                                <div class="three"></div>
                            </button>
                        </div>
                    </ul>

                </div>
            </div>
        </div>
    </div>
    <div class="main-navigationbar">
        <div class="container">
        <div class="navigationbar-row d-flex align-items-center justify-content-between">
                <div class="menu-items-col">
                    <ul class="main-nav">

                        <li class="menu-lnk has-item">
                            <a href="#" class="category-btn active">

                                {{ __('All Categories') }}
                            </a>

                            @if ($has_subcategory)
                            <div class="mega-menu menu-dropdown">
                                <div class="container mega-menu-container">
                                    <ul class="row">
                                        @foreach ($MainCategoryList as $category)
                                        <li class="col-md-3 col-12">
                                            <ul class="megamenu-list arrow-list">
                                                <li class="list-title"><span>{{ $category->name }}</span>
                                                </li>
                                                <li><a
                                                        href="{{ route('page.product-list', [$slug, 'main_category' => $category->id]) }}">{{ __('All') }}</a>
                                                </li>
                                                @foreach ($SubCategoryList as $cat)
                                                @if ($cat->maincategory_id == $category->id)
                                                <li><a
                                                        href="{{ route('page.product-list', [$slug, 'main_category' => $category->id, 'sub_category' => $cat->id]) }}">{{ $cat->name }}</a>
                                                </li>
                                                @endif
                                                @endforeach

                                            </ul>
                                        </li>
                                        @endforeach
                                    </ul>
                                </div>
                            </div>
                            @else
                            <div class="menu-dropdown">
                                <ul>
                                    @foreach ($MainCategoryList as $category)
                                    <li><a
                                            href="{{ route('page.product-list', [$slug, 'main_category' => $category->id]) }}">{{ $category->name }}</a>
                                    </li>
                                    @endforeach
                                </ul>
                            </div>
                            @endif
                        </li>
                        @foreach ($MainCategoryList as $category)
                        <li>
                            <a href="{{ route('page.product-list', [$slug, 'main_category' => $category->id]) }}">

                                {{ $category->name }}
                            </a>

                        </li>
                        @endforeach
                        @if (!empty($topNavItems))
                        @foreach ($topNavItems as $key => $nav)
                        @if (!empty($nav->children[0]))
                        <li class="menu-lnk has-item">
                            <a href="#">

                                @if ($nav->title == null)
                                {{ $nav->title }}
                                @else
                                {{ $nav->title }}
                                @endif
                            </a>
                            <div class="menu-dropdown">
                                <ul>
                                    @foreach ($nav->children[0] as $childNav)
                                    @if ($childNav->type == 'custom')
                                    <li><a href="{{ url($childNav->slug) }}" target="{{ $childNav->target }}">
                                            @if ($childNav->title == null)
                                            {{ $childNav->title }}
                                            @else
                                            {{ $childNav->title }}
                                            @endif
                                        </a></li>
                                    @elseif($childNav->type == 'category')
                                    <li><a href="{{ route('themes.page', [$currentTheme, $childNav->slug]) }}"
                                            target="{{ $childNav->target }}">
                                            @if ($childNav->title == null)
                                            {{ $childNav->title }}
                                            @else
                                            {{ $childNav->title }}
                                            @endif
                                        </a></li>
                                    @else
                                    <li><a href="{{ route('themes.page', [$currentTheme, $childNav->slug]) }}"
                                            target="{{ $childNav->target }}">
                                            @if ($childNav->title == null)
                                            {{ $childNav->title }}
                                            @else
                                            {{ $childNav->title }}
                                            @endif
                                        </a></li>
                                    @endif
                                    @endforeach
                                </ul>
                            </div>
                        </li>
                        @else
                        @if ($nav->type == 'custom')
                        <li>
                            <a href="{{ url($nav->slug) }}" target="{{ $nav->target }}">

                                @if ($nav->title == null)
                                {{ $nav->title }}
                                @else
                                {{ $nav->title }}
                                @endif
                            </a>
                        </li>
                        @elseif($nav->type == 'category')
                        <li>
                            <a href="{{ route('themes.page', [$currentTheme, $nav->slug]) }}"
                                target="{{ $nav->target }}" target="{{ $nav->target }}">

                                @if ($nav->title == null)
                                {{ $nav->title }}
                                @else
                                {{ $nav->title }}
                                @endif
                            </a>
                        </li>
                        @else
                        <li>
                            <a href="{{ route('themes.page', [$currentTheme, $nav->slug]) }}"
                                target="{{ $nav->target }}">

                                @if ($nav->title == null)
                                {{ $nav->title }}
                                @else
                                {{ $nav->title }}
                                @endif
                            </a>
                        </li>
                        @endif
                        @endif
                        @endforeach
                        @endif
                        <li class="menu-lnk has-item">
                            <a href="#">

                                {{ __('Page') }}
                            </a>
                            <div class="menu-dropdown">
                                <ul>
                                    @foreach ($pages as $page)
                                    <li><a
                                            href="{{ route('custom.page', [$slug, $page->page_slug]) }}">{{ $page->name }}</a>
                                    </li>
                                    @endforeach
                                    <li><a href="{{ route('page.faq', $slug) }}">{{ __('FAQs') }}</a></li>
                                    <li><a href="{{ route('page.blog', $slug) }}">{{ __('Blog') }}</a></li>
                                    <li><a href="{{ route('page.product-list', $slug) }}">{{ __('Collection') }}</a>
                                </ul>
                            </div>
                            @include('front_end.hooks.header_link')
                        </li>
                        <li>
                            <a href="{{ route('page.product-list', [$slug, 'filter_product' => 'best-selling']) }}">

                                {{ __('Bestsellers') }}
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('page.contact_us', $slug) }}">

                                {{ __('Contact') }}
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- Mobile search start here -->
    <div class="search-popup">
        <div class="close-search">
            <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" viewBox="0 0 50 50"
                fill="none">
                <path
                    d="M27.7618 25.0008L49.4275 3.33503C50.1903 2.57224 50.1903 1.33552 49.4275 0.572826C48.6647 -0.189868 47.428 -0.189965 46.6653 0.572826L24.9995 22.2386L3.33381 0.572826C2.57102 -0.189965 1.3343 -0.189965 0.571605 0.572826C-0.191089 1.33562 -0.191186 2.57233 0.571605 3.33503L22.2373 25.0007L0.571605 46.6665C-0.191186 47.4293 -0.191186 48.666 0.571605 49.4287C0.952952 49.81 1.45285 50.0007 1.95275 50.0007C2.45266 50.0007 2.95246 49.81 3.3339 49.4287L24.9995 27.763L46.6652 49.4287C47.0465 49.81 47.5464 50.0007 48.0463 50.0007C48.5462 50.0007 49.046 49.81 49.4275 49.4287C50.1903 48.6659 50.1903 47.4292 49.4275 46.6665L27.7618 25.0008Z"
                    fill="white"></path>
            </svg>
        </div>
        <div class="search-form-wrapper">
            <form>
                <div class="form-inputs">
                    <input type="search" placeholder="Search Product..." class="form-control">
                    <button type="submit" class="btn">
                        <svg>
                            <path fill-rule="evenodd" clip-rule="evenodd"
                                d="M0.000169754 6.99457C0.000169754 10.8576 3.13174 13.9891 6.99473 13.9891C8.60967 13.9891 10.0968 13.4418 11.2807 12.5226C11.3253 12.6169 11.3866 12.7053 11.4646 12.7834L17.0603 18.379C17.4245 18.7432 18.015 18.7432 18.3792 18.379C18.7434 18.0148 18.7434 17.4243 18.3792 17.0601L12.7835 11.4645C12.7055 11.3864 12.6171 11.3251 12.5228 11.2805C13.442 10.0966 13.9893 8.60951 13.9893 6.99457C13.9893 3.13157 10.8577 0 6.99473 0C3.13174 0 0.000169754 3.13157 0.000169754 6.99457ZM1.86539 6.99457C1.86539 4.1617 4.16187 1.86522 6.99473 1.86522C9.8276 1.86522 12.1241 4.1617 12.1241 6.99457C12.1241 9.82743 9.8276 12.1239 6.99473 12.1239C4.16187 12.1239 1.86539 9.82743 1.86539 6.99457Z">
                            </path>
                        </svg>
                    </button>
                </div>
            </form>
        </div>
    </div>
</header>
