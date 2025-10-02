@extends('home.home_master')
@section('home_content')

    <!-- breadcrumb -->
    <div class="breadcrumb-wrapper light-bg">
        <div class="container">

            <div class="breadcrumb-content">
                <h1 class="breadcrumb-title pb-0">{{ __('Our Team') }}</h1>
                <div class="breadcrumb-menu-wrapper">
                    <div class="breadcrumb-menu-wrap">
                        <div class="breadcrumb-menu">
                            <ul>
                                <li><a href="index.html">{{ __('Home') }}</a></li>
                                <li><img src="{{ asset('frontend/assets/images/blog/right-arrow.svg') }}" alt="right-arrow"></li>
                                <li aria-current="page">{{ __('Our Team') }}</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <!-- End breadcrumb -->

    <section class="lonyo-section-padding9">
        <div class="container">
            <div class="lonyo-section-title max-w616">
                <h2>{{ __('Meet Our Team') }}</h2>
            </div>

            @php
                $team = App\Models\Team::latest()->get();
            @endphp
            <div class="row">
                @foreach ($team as $item)
                    <div class="col-lg-3 col-md-6">
                        <div class="lonyo-team-wrap" data-aos="fade-up" data-aos-duration="500">
                            <div class="lonyo-team-thumb">
                                <a href="single-team.html">
                                    <img src="{{ asset($item->image) }}" alt="">
                                </a>
                            </div>
                            <div class="lonyo-team-content2">
                                <!-- Name -->
                                <form action="{{ route('team.details') }}" method="POST">
                                    @csrf
                                    <input type="hidden" name="item_id" value="{{ $item->id }}">
                                    <button type="submit" class="lonyo-default-btn">{{ $item->name }}</button>
                                </form>
                                <!-- Position -->
                                <p>{{ $item->position }}</p>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>

            <div class="mt-50 team-btn" data-aos="fade-up" data-aos-duration="700">
                <a href="{{ route('home') }}" class="lonyo-default-btn team-btn2">
                    {{ __('Would you joint of our group?') }}
                </a>
            </div>

        </div>
    </section>
    <!-- end content -->

    <div class="lonyo-content-shape">
        <img src="{{ asset('frontend/assets/images/shape/shape2.svg') }}" alt="">
    </div>

    {{-- section de mobile en la pagina --}}
    @include('home.home_layout.mobile')
    

@endsection
