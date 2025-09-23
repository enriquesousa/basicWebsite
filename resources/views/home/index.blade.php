@extends('home.home_master')
@section('home_content')

    @include('home.home_layout.slider')

    @include('home.home_layout.features')

    @include('home.home_layout.clarifies')

    @include('home.home_layout.financial')

    <!-- Section Divider -->
    <div class="lonyo-content-shape3">
        <img src="{{ asset('frontend/assets/images/shape/shape2.svg') }}" alt="">
    </div>
    
    @include('home.home_layout.video')
    
    @include('home.home_layout.testimonial')
    
    @include('home.home_layout.faq')

    <!-- Section Divider -->
    <div class="lonyo-content-shape3">
        <img src="{{ asset('frontend/assets/images/shape/shape2.svg') }}" alt="">
    </div>

    @include('home.home_layout.mobile')

@endsection
