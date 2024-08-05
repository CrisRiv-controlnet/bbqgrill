<footer class="site-footer"
    style="position: relative;@if (isset($option) && $option->is_hide == 1) opacity: 0.5; @else opacity: 1; @endif"
    data-index="{{ $option->order ?? '' }}" data-id="{{ $option->order ?? '' }}" data-value="{{ $option->id ?? '' }}"
    data-hide="{{ $option->is_hide ?? '' }}" data-section="{{ $option->section_name ?? '' }}"
    data-store="{{ $option->store_id ?? '' }}" data-theme="{{ $option->theme_id ?? '' }}">
    <div class="custome_tool_bar"></div>
    <div class="container">

        @include('front_end.hooks.footer_link')
        <div class="footer-row">
            <div class="footer-col footer-store-detail">
                <div class="footer-widget">
                    <div class="footer-logo">
                        <a href="{{ route('landing_page', $slug) }}">
                        <img src="{{ get_file(((isset($theme_logo) && !empty($theme_logo)) ? $theme_logo : 'themes/' . $currentTheme . '/assets/images/logo.png'), $currentTheme) }}"
                                    alt="Logo">
                        </a>
                    </div>
                    @if (isset($section->footer->section->description))
                        <div class="store-detail">
                            <p id="{{ $section->footer->section->description->slug ?? '' }}_preview">
                                {!! $section->footer->section->description->text ?? '' !!}</p>
                        </div>
                    @endif
                    <div class="social-media">
                        @if (isset($section->footer->section->footer_link))
                            <ul class="social-links">
                                @for ($i = 0; $i < $section->footer->section->footer_link->loop_number ?? 1; $i++)
                                    <li>
                                        <a href="{{ $section->footer->section->footer_link->social_link->{$i} ?? '#' }}"
                                            target="_blank" id="social_link_{{ $i }}">

                                            <img src="{{ get_file($section->footer->section->footer_link->social_icon->{$i}->image ?? 'themes/' . $currentTheme . '/assets/images/youtube.svg', $currentTheme) }}"
                                                class="{{ 'social_icon_' . $i . '_preview' }}" alt="icon"
                                                id="social_icon_{{ $i }}">
                                        </a>
                                    </li>
                                @endfor
                            </ul>
                        @endif
                    </div>
                </div>
            </div>
            @if (isset($section->footer->section->footer_menu_type))
                @for ($i = 0; $i < $section->footer->section->footer_menu_type->loop_number ?? 1; $i++)
                    <div class="footer-col footer-link footer-link-{{ $i + 2 }}">
                        <div class="footer-widget">
                            <h4> {{ $section->footer->section->footer_menu_type->footer_title->{$i} ?? '' }} </h4>
                            @php
                                $footer_menu_id = $section->footer->section->footer_menu_type->footer_menu_ids->{$i} ?? '';
                                $footer_menu = get_nav_menu($footer_menu_id);
                            @endphp
                            <ul>
                                @if (!empty($footer_menu))
                                    @foreach ($footer_menu as $key => $nav)
                                        @if ($nav->type == 'custom')
                                            <li><a href="{{ url($nav->slug) }}" target="{{ $nav->target }}">
                                                    @if ($nav->title == null)
                                                        {{ $nav->title }}
                                                    @else
                                                        {{ $nav->title }}
                                                    @endif
                                                </a></li>
                                        @elseif($nav->type == 'category')
                                            <li><a href="{{ route('themes.page', [$currentTheme, $nav->slug]) }}"
                                                    target="{{ $nav->target }}">
                                                    @if ($nav->title == null)
                                                        {{ $nav->title }}
                                                    @else
                                                        {{ $nav->title }}
                                                    @endif
                                                </a></li>
                                        @else
                                            <li><a href="{{ route('themes.page', [$currentTheme, $nav->slug]) }}"
                                                    target="{{ $nav->target }}">
                                                    @if ($nav->title == null)
                                                        {{ $nav->title }}
                                                    @else
                                                        {{ $nav->title }}
                                                    @endif
                                                </a>
                                            </li>
                                        @endif
                                    @endforeach
                                @endif
                            </ul>
                        </div>
                    </div>
                @endfor
            @endif
            <div class="footer-col footer-subscribe-col">
                <div class="footer-widget">

                    <h4 id="{{ $section->footer->section->title->slug ?? '' }}_preview">{!! $section->footer->section->title->text ?? '' !!}</h4>
                    <p id="{{ $section->footer->section->sub_title->slug ?? '' }}_preview">{!! $section->footer->section->sub_title->text ?? '' !!} </p>
                    <form class="footer-subscribe-form" action="{{ route('newsletter.store', $slug) }}" method="post">
                        @csrf
                        <div class="input-wrapper">
                            <input type="email" placeholder="Enter email address..." name="email">
                            <button type="submit" class="btn-subscibe">
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                    viewBox="0 0 20 20" fill="none">
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                        d="M4.97863e-08 9.99986C-7.09728e-06 10.4601 0.373083 10.8332 0.83332 10.8332L17.113 10.8335L15.1548 12.7358C14.8247 13.0565 14.817 13.584 15.1377 13.9142C15.4584 14.2443 15.986 14.2519 16.3161 13.9312L19.7474 10.5979C19.9089 10.441 20.0001 10.2254 20.0001 10.0002C20.0001 9.77496 19.9089 9.55935 19.7474 9.40244L16.3161 6.0691C15.986 5.74841 15.4584 5.75605 15.1377 6.08617C14.817 6.41628 14.8247 6.94387 15.1548 7.26456L17.1129 9.1668L0.833346 9.16654C0.373109 9.16653 7.24653e-06 9.53962 4.97863e-08 9.99986Z"
                                        fill="#183A40"></path>
                                </svg>
                            </button>
                        </div>
                        <div class="checkbox-custom">
                            <input type="checkbox" id="subscibecheck">
                            <label for="subscibecheck" id="{{ $section->footer->section->sub_description->slug ?? '' }}_preview">
                                {!! $section->footer->section->sub_description->text ?? '' !!}
                            </label>
                        </div>

                    </form>
                </div>
            </div>
        </div>
        <div class="footer-bottom">
            <div class="row align-items-center">
                <div class="col-12 col-md-6">
                    <p id="{{ $section->footer->section->copy_right->slug ?? '' }}_preview">{!! $section->footer->section->copy_right->text ?? '' !!} </p>
                </div>

            </div>
        </div>
    </div>
</footer>
<div class="mobile-menu-wrapper">
            <div class="menu-close-icon">
                <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" viewBox="0 0 35 34" fill="none">
                    <line x1="2.29695" y1="1.29289" x2="34.1168" y2="33.1127" stroke="white" stroke-width="2" />
                    <line x1="0.882737" y1="33.1122" x2="32.7025" y2="1.29242" stroke="white" stroke-width="2" />
                </svg>
            </div>
            <div class="mobile-menu-bar">
                <ul class="mobile-only">
                    <li class="mobile-item has-children">
                        <a href="javascript:void()" class="acnav-label">
                            {{ __('Accessories') }}
                            <svg class="menu-open-arrow" xmlns="http://www.w3.org/2000/svg" width="20" height="11"
                                viewBox="0 0 20 11">
                                <path fill="#24272a"
                                    d="M.268 1.076C.373.918.478.813.584.76l.21.474c.79.684 2.527 2.158 5.21 4.368 2.738 2.21 4.159 3.316 4.264 3.316.474-.053 1.158-.369 1.947-1.053.842-.631 1.632-1.42 2.474-2.368.895-.948 1.737-1.842 2.632-2.58.842-.789 1.578-1.262 2.105-1.42l.316.684c0 .21-.106.474-.316.737-.053.21-.263.421-.474.579-.053.052-.316.21-.737.474l-.526.368c-.421.263-1.105.947-2.158 2l-1.105 1.053-2.053 1.947c-1 .947-1.579 1.421-1.842 1.421-.263 0-.684-.263-1.158-.895-.526-.631-.842-1-1.052-1.105l-.737-.579c-.316-.316-.527-.474-.632-.474l-5.42-4.315L.267 2.339l-.105-.421-.053-.369c0-.157.053-.315.158-.473z">
                                </path>
                            </svg>
                            <svg class="close-menu-ioc" xmlns="http://www.w3.org/2000/svg" width="20" height="18"
                                viewBox="0 0 20 18">
                                <path fill="#24272a"
                                    d="M19.95 16.75l-.05-.4-1.2-1-5.2-4.2c-.1-.05-.3-.2-.6-.5l-.7-.55c-.15-.1-.5-.45-1-1.1l-.1-.1c.2-.15.4-.35.6-.55l1.95-1.85 1.1-1c1-1 1.7-1.65 2.1-1.9l.5-.35c.4-.25.65-.45.75-.45.2-.15.45-.35.65-.6s.3-.5.3-.7l-.3-.65c-.55.2-1.2.65-2.05 1.35-.85.75-1.65 1.55-2.5 2.5-.8.9-1.6 1.65-2.4 2.3-.8.65-1.4.95-1.9 1-.15 0-1.5-1.05-4.1-3.2C3.1 2.6 1.45 1.2.7.55L.45.1c-.1.05-.2.15-.3.3C.05.55 0 .7 0 .85l.05.35.05.4 1.2 1 5.2 4.15c.1.05.3.2.6.5l.7.6c.15.1.5.45 1 1.1l.1.1c-.2.15-.4.35-.6.55l-1.95 1.85-1.1 1c-1 1-1.7 1.65-2.1 1.9l-.5.35c-.4.25-.65.45-.75.45-.25.15-.45.35-.65.6-.15.3-.25.55-.25.75l.3.65c.55-.2 1.2-.65 2.05-1.35.85-.75 1.65-1.55 2.5-2.5.8-.9 1.6-1.65 2.4-2.3.8-.65 1.4-.95 1.9-1 .15 0 1.5 1.05 4.1 3.2 2.6 2.15 4.3 3.55 5.05 4.2l.2.45c.1-.05.2-.15.3-.3.1-.15.15-.3.15-.45z">
                                </path>
                            </svg>
                        </a>
                        <ul class="mobile_menu_inner acnav-list">
                            <li class="menu-h-link">
                                <ul>
                                    @foreach ($MainCategoryList as $category)
                                    <li><a
                                            href="{{ route('page.product-list', [$slug, 'main_category' => $category->id]) }}">{{ $category->name }}</a>
                                    </li>
                                    @endforeach
                                </ul>
                            </li>
                        </ul>
                    </li>

                    <li class="mobile-item">
                        <a href="{{ route('page.product-list', $slug) }}"> {{ __('Shop All') }} </a>
                    </li>

                    <li class="mobile-item has-children">
                        <a href="javascript:void()" class="acnav-label">
                            {{ __('Pages') }}
                            <svg class="menu-open-arrow" xmlns="http://www.w3.org/2000/svg" width="20" height="11"
                                viewBox="0 0 20 11">
                                <path fill="#24272a"
                                    d="M.268 1.076C.373.918.478.813.584.76l.21.474c.79.684 2.527 2.158 5.21 4.368 2.738 2.21 4.159 3.316 4.264 3.316.474-.053 1.158-.369 1.947-1.053.842-.631 1.632-1.42 2.474-2.368.895-.948 1.737-1.842 2.632-2.58.842-.789 1.578-1.262 2.105-1.42l.316.684c0 .21-.106.474-.316.737-.053.21-.263.421-.474.579-.053.052-.316.21-.737.474l-.526.368c-.421.263-1.105.947-2.158 2l-1.105 1.053-2.053 1.947c-1 .947-1.579 1.421-1.842 1.421-.263 0-.684-.263-1.158-.895-.526-.631-.842-1-1.052-1.105l-.737-.579c-.316-.316-.527-.474-.632-.474l-5.42-4.315L.267 2.339l-.105-.421-.053-.369c0-.157.053-.315.158-.473z">
                                </path>
                            </svg>
                            <svg class="close-menu-ioc" xmlns="http://www.w3.org/2000/svg" width="20" height="18"
                                viewBox="0 0 20 18">
                                <path fill="#24272a"
                                    d="M19.95 16.75l-.05-.4-1.2-1-5.2-4.2c-.1-.05-.3-.2-.6-.5l-.7-.55c-.15-.1-.5-.45-1-1.1l-.1-.1c.2-.15.4-.35.6-.55l1.95-1.85 1.1-1c1-1 1.7-1.65 2.1-1.9l.5-.35c.4-.25.65-.45.75-.45.2-.15.45-.35.65-.6s.3-.5.3-.7l-.3-.65c-.55.2-1.2.65-2.05 1.35-.85.75-1.65 1.55-2.5 2.5-.8.9-1.6 1.65-2.4 2.3-.8.65-1.4.95-1.9 1-.15 0-1.5-1.05-4.1-3.2C3.1 2.6 1.45 1.2.7.55L.45.1c-.1.05-.2.15-.3.3C.05.55 0 .7 0 .85l.05.35.05.4 1.2 1 5.2 4.15c.1.05.3.2.6.5l.7.6c.15.1.5.45 1 1.1l.1.1c-.2.15-.4.35-.6.55l-1.95 1.85-1.1 1c-1 1-1.7 1.65-2.1 1.9l-.5.35c-.4.25-.65.45-.75.45-.25.15-.45.35-.65.6-.15.3-.25.55-.25.75l.3.65c.55-.2 1.2-.65 2.05-1.35.85-.75 1.65-1.55 2.5-2.5.8-.9 1.6-1.65 2.4-2.3.8-.65 1.4-.95 1.9-1 .15 0 1.5 1.05 4.1 3.2 2.6 2.15 4.3 3.55 5.05 4.2l.2.45c.1-.05.2-.15.3-.3.1-.15.15-.3.15-.45z">
                                </path>
                            </svg>
                        </a>
                        <ul class="mobile_menu_inner acnav-list">
                            <li class="menu-h-link">
                                <ul>
                                    @foreach ($pages as $page)
                                    <li><a
                                            href="{{ route('custom.page', [$slug, $page->page_slug]) }}">{{ $page->name }}</a>
                                    </li>
                                    @endforeach
                                    <li><a href="{{ route('page.faq', $slug) }}"> {{ __('FAQs') }} </a></li>
                                    <li><a href="{{ route('page.blog', $slug) }}"> {{ __('Blog') }} </a></li>
                                    <li><a href="{{ route('page.product-list', $slug) }}"> {{ __('Collection') }} </a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </li>

                    <li class="mobile-item">
                        <a href="{{ route('page.contact_us', $slug) }}">
                            {{ __('Contact') }}
                        </a>
                    </li>

                </ul>
            </div>
        </div>
<div class="overlay cart-overlay"></div>
<div class="cartDrawer cartajaxDrawer">

</div>
<div class="overlay wish-overlay"></div>
<div class="wishajaxDrawer">
</div>
