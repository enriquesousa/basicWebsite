@extends('home.home_master')
@section('home_content')

    @include('home.home_layout.slider')

    @include('home.home_layout.features')

    @include('home.home_layout.clarifies')

    @include('home.home_layout.financial')
    
    @include('home.home_layout.usability')
    
    @include('home.home_layout.testimonial')
    
    @include('home.home_layout.faq')

    @include('home.home_layout.mobile')

@endsection
