@extends('front_end.layouts.app')
@section('page-title')
    {{ __('Article Page') }}
@endsection
@section('content')
    @include('front_end.sections.partision.header_section')
        @foreach ($blogs as $blog)

<section class="blog-page-banner common-banner-section"  style="background-image:url({{ get_file( $page_json->article_page->section->image->image ?? 'themes/' . $currentTheme . '/assets/images/blog-page-banner.jpg', $currentTheme)}});">
    <div class="container">
        <div class="row">
            <div class="col-lg-7 col-md-8 col-xl-6 col-12">
                <div class="common-banner-content">
                    <ul class="blog-cat">
                        <li class="active"><a href="#">{{__('Featured')}}</a></li>
                        <li><a href="#"><b>{{__('Category:')}}</b> {{$blog->category->name}}</a></li>
                        <li><a href="#"><b>{{__('Date:')}}</b> {{$blog->created_at->format('d M, Y ')}}</a></li>
                    </ul>
                    <div class="section-title">
                        <h2>{{$blog->title}}</h2>
                    </div>
                    <div class="blog-desk">
                        <p>{{$blog->short_description}}</p>
                    </div>
                    <a href="#" class="btn-secondary" tabindex="0">
                        {{__('Go to Article')}}
                        <svg viewBox="0 0 10 5">
                            <path d="M2.37755e-08 2.57132C-3.38931e-06 2.7911 0.178166 2.96928 0.397953 2.96928L8.17233 2.9694L7.23718 3.87785C7.07954 4.031 7.07589 4.28295 7.22903 4.44059C7.38218 4.59824 7.63413 4.60189 7.79177 4.44874L9.43039 2.85691C9.50753 2.78197 9.55105 2.679 9.55105 2.57146C9.55105 2.46392 9.50753 2.36095 9.43039 2.28602L7.79177 0.69418C7.63413 0.541034 7.38218 0.544682 7.22903 0.702329C7.07589 0.859976 7.07954 1.11192 7.23718 1.26507L8.1723 2.17349L0.397965 2.17336C0.178179 2.17336 3.46059e-06 2.35153 2.37755e-08 2.57132Z">
                            </path>
                        </svg>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="article-section padding-bottom padding-top">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="about-user d-flex align-items-center">
                    <div class="abt-user-img">
                        <img src="{{ asset('themes/'.$currentTheme.'/assets/images/john.png') }}">
                    </div>
                    <h6>
                        <span>{{ __('John Doe,')}}</span>
                        {{ __('company.com')}}
                    </h6>
                    <div class="post-lbl"><b>{{__('Category:')}}</b> {{$blog->category->name}}</div>
                    <div class="post-lbl"><b>{{__('Date:')}}</b>{{$blog->created_at->format('d M, Y ')}}</div>
                </div>
            </div>
            <div class="col-md-8 col-12">
                <div class="aticleleftbar">
                    <h5></h5>
                    <p> {!! html_entity_decode($blog->content) !!} </p>
                    <img src="{{ asset('themes/'.$currentTheme.'/assets/images/article-img.jpg') }}" alt="article">

                    <div class="art-auther"><b>{{__('John Doe')}}</b>, <a href="company.com">{{__('company.com')}}</a></div>                    <div class="art-auther"><b>{{__('Tags:')}}</b> {{$blog->category->name}}
                    </div>
                    <ul class="article-socials d-flex align-items-center">

                        <li><span>{{__('Share:')}}</span></li>
                        @for ($i = 0; $i < $section->footer->section->footer_link->loop_number ?? 1; $i++)
                                <li>
                                    <a href="{{ $section->footer->section->footer_link->social_link->{$i} ?? '#'}}" target="_blank">
                                        <img src="{{ get_file($section->footer->section->footer_link->social_icon->{$i}->image ?? 'themes/' . $currentTheme . '/assets/images/youtube.svg', $currentTheme) }}" class="{{ 'social_icon_'. $i .'_preview' }}" alt="icon" >
                                    </a>
                                </li>
                            @endfor
                    </ul>
                </div>
            </div>
            <div class="col-md-4 col-12">
                <div class="articlerightbar">
                    <div class="section-title">
                        <h3>{{__('Related articles')}}</h3>
                    </div>
                    <div class="row blog-grid">
                        @foreach ($datas->take(2) as $data)
                        <div class="blog-widget col-md-12 col-sm-6 col-12">
                            <div class="blog-widget-inner">
                                <div class="blog-media">
                                    <span class="new-labl bg-second">{{$blog->category->name}}</span>
                                    <a href="{{route('page.article',[$slug,$data->id])}}">
                                        <img src="{{ get_file($data->cover_image_path, $currentTheme) }}">
                                    </a>
                                </div>
                                <div class="blog-caption">
                                    <h4><a href="{{route('page.article',[$slug,$data->id])}} " class ="descriptions">{{$data->title}}</a></h4>
                                        <p>{{$data->short_description}}</p>
                                    <div class="blog-lbl-row d-flex align-items-center justify-content-between">
                                        <a class="btn blog-btn" href="{{route('page.article',[$slug,$data->id])}}">
                                           {{__('Read more')}}
                                            <svg xmlns="http://www.w3.org/2000/svg" width="3" height="6" viewBox="0 0 3 6" fill="none">
                                                <path fill-rule="evenodd" clip-rule="evenodd" d="M0.15976 0.662719C-0.0532536 0.879677 -0.0532536 1.23143 0.15976 1.44839L1.68316 3L0.15976 4.55161C-0.0532533 4.76856 -0.0532532 5.12032 0.15976 5.33728C0.372773 5.55424 0.718136 5.55424 0.931149 5.33728L2.84024 3.39284C3.05325 3.17588 3.05325 2.82412 2.84024 2.60716L0.931149 0.662719C0.718136 0.445761 0.372773 0.445761 0.15976 0.662719Z" fill="white"/>
                                                </svg>
                                        </a>
                                        <div class="author-info">
                                            <strong class="auth-name">{{__('John Doe')}},</strong>
                                            <span class="date">{{$data->created_at->format('d M, Y ')}}</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

        @endforeach
        <section class="latest-article-slider-section padding-bottom">
    <div class="container">
        <div class="section-title">
            <h2>{{__('Last')}} <b>{{__('articles')}}</b></h2>
        </div>
         <div class="row justify-content-center">
            @foreach ($l_articles->take(4) as $data)

                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12 blog-widget d-flex">
                    <div class="blog-widget-inner">
                        <div class="blog-media">
                            <span class="new-labl bg-second">{{$data->category->name}}</span>
                            <a href="{{route('page.article',[$slug,$data->id])}}">
                                <img src="{{ get_file($data->cover_image_path, $currentTheme) }}">
                            </a>
                        </div>
                        <div class="blog-caption">
                            <h4><a href="{{route('page.article',[$slug,$data->id])}} " class ="descriptions">{{$data->title}}</a></h4>
                                <p>{{$data->short_description}}</p>
                            <div class="blog-lbl-row d-flex align-items-center justify-content-between">
                                <a class="btn blog-btn" href="{{route('page.article',[$slug,$data->id])}}">
                                    {{__('Read more')}}
                                    <svg xmlns="http://www.w3.org/2000/svg" width="3" height="6" viewBox="0 0 3 6" fill="none">
                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M0.15976 0.662719C-0.0532536 0.879677 -0.0532536 1.23143 0.15976 1.44839L1.68316 3L0.15976 4.55161C-0.0532533 4.76856 -0.0532532 5.12032 0.15976 5.33728C0.372773 5.55424 0.718136 5.55424 0.931149 5.33728L2.84024 3.39284C3.05325 3.17588 3.05325 2.82412 2.84024 2.60716L0.931149 0.662719C0.718136 0.445761 0.372773 0.445761 0.15976 0.662719Z" fill="white"/>
                                        </svg>
                                </a>
                                <div class="author-info">
                                    <strong class="auth-name">{{__('John Doe')}},</strong>
                                    <span class="date">{{$data->created_at->format('d M, Y ')}}</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>
    @include('front_end.sections.partision.footer_section')
@endsection

