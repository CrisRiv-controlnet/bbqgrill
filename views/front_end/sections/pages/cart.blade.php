@extends('front_end.layouts.app')
@section('page-title')
    {{ __('Article Page') }}
@endsection
@section('content')
    @include('front_end.sections.partision.header_section')

    <section class="cart-page-section padding-bottom">
    </section>
    @include('front_end.hooks.cart_slider')
    @include('front_end.sections.homepage.bestseller_slider_section')
    
    @include('front_end.sections.partision.footer_section')
@endsection
