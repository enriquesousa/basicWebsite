@extends('home.home_master')
@section('home_content')
    <!-- breadcrumb -->
    <div class="breadcrumb-wrapper light-bg">
        <div class="container">
            <div class="breadcrumb-content">
                <h1 class="breadcrumb-title pb-0">{{ __('Blog') }}</h1>
                <div class="breadcrumb-menu-wrapper">
                    <div class="breadcrumb-menu-wrap">
                        <div class="breadcrumb-menu">
                            <ul>
                                <li><a href="index.html">{{ __('Home') }}</a></li>
                                <li><img src="{{ asset('frontend/assets/images/blog/right-arrow.svg') }}" alt="right-arrow">
                                </li>
                                <li aria-current="page">{{ __('Blog') }}</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End breadcrumb -->


    <!-- Blog Main Content Temporal -->
    <div class="lonyo-section-padding9 overflow-hidden">
        <div class="container">
            <div class="row">

                <div class="col-lg-8">
                    

                    {{-- @foreach ($posts as $item)

                            <!-- Blog Image -->
                            <div class="lonyo-blog-thumb">
                                <img src="{{ asset($item->image) }}" alt="">
                            </div>

                            <!-- Blog Date -->
                            <div class="lonyo-blog-meta">
                                <ul>
                                    <li>
                                        <a href="single-blog.html">
                                            <img src="{{ asset('frontend/assets/images/blog/date.svg') }}"
                                                alt="">
                                            {{ $item->created_at->format('d M Y') }}
                                        </a>
                                    </li>
                                </ul>
                            </div>

                            <!-- Blog Title & Content -->
                            <div class="lonyo-blog-content">
                                <h2><a
                                        href="{{ url('blog/details/' . $item->post_slug) }}">{{ $item->post_title }}</a>
                                </h2>
                                <p>{!! Str::limit($item->long_description, 150, '...') !!}</p>
                            </div>

                            <!-- Blog Button Details -->
                            <div class="lonyo-blog-btn">
                                <a href="{{ url('blog/details/' . $item->post_slug) }}"
                                    class="lonyo-default-btn blog-btn">{{ __('continue reading') }}...</a>
                            </div>

                    @endforeach --}}

                    @foreach ($posts as $item)
                        <div class="lonyo-blog-wrap" data-aos="fade-up" data-aos-duration="500">

                            <!-- Blog Image -->
                            <div class="lonyo-blog-thumb">
                                <img src="{{ asset($item->image) }}" alt="" style="width: 746px; height: 500px;">
                            </div>

                            <!-- Blog Date -->
                            <div class="lonyo-blog-meta">
                                <ul>
                                    <li>
                                        <a href="single-blog.html">
                                            <img src="{{ asset('frontend/assets/images/blog/date.svg') }}" alt="">
                                            {{ $item->created_at->format('d M Y') }}
                                        </a>
                                    </li>
                                </ul>
                            </div>

                            <!-- Blog Title & Content -->
                            <div class="lonyo-blog-content">
                                <h2>
                                    <a href="{{ url('blog/details/' . $item->post_slug) }}">
                                        {{ $item->post_title }}
                                    </a>
                                </h2>
                                <p>{{ Str::limit(strip_tags($item->long_description), 150, '...') }}</p>
                            </div>

                            <div class="lonyo-blog-btn">
                                <a href="{{ url('blog/details/' . $item->post_slug) }}"
                                    class="lonyo-default-btn blog-btn">{{ __('continue reading') }}...</a>
                            </div>

                        </div>
                    @endforeach

                    {{-- <div class="lonyo-blog-wrap" data-aos="fade-up" data-aos-duration="700">
                        <div class="lonyo-blog-thumb">
                            <img src="assets/images/blog/b2.png" alt="">
                        </div>
                        <div class="lonyo-blog-meta">
                            <ul>
                                <li>
                                    <a href="single-blog.html"><img src="assets/images/blog/date.svg" alt="">June
                                        10, 2025</a>
                                </li>
                                <li>
                                    <a href="single-blog.html"><img src="assets/images/blog/clock.svg" alt="">7 min
                                        read</a>
                                </li>
                            </ul>
                        </div>
                        <div class="lonyo-blog-content">
                            <h2><a href="single-blog.html">AI-powered tools for increasing productivity</a></h2>
                            <p>Artificial Intelligence (AI) has revolutionized many industries, and the field of finance and
                                financial planning and analysis...</p>
                        </div>
                        <div class="lonyo-blog-btn">
                            <a href="single-blog.html" class="lonyo-default-btn blog-btn">continue reading</a>
                        </div>
                    </div>

                    <div class="lonyo-blog-wrap mb-0" data-aos="fade-up" data-aos-duration="900">
                        <div class="lonyo-blog-thumb">
                            <img src="assets/images/blog/b3.png" alt="">
                        </div>
                        <div class="lonyo-blog-meta">
                            <ul>
                                <li>
                                    <a href="single-blog.html"><img src="assets/images/blog/date.svg" alt="">June
                                        05, 2025</a>
                                </li>
                                <li>
                                    <a href="single-blog.html"><img src="assets/images/blog/clock.svg" alt="">10 min
                                        read</a>
                                </li>
                            </ul>
                        </div>
                        <div class="lonyo-blog-content">
                            <h2><a href="single-blog.html">Using finance software to boost your income</a></h2>
                            <p>Are you aware of the fact that what is the most significant stress cause in the United States
                                of America? If your...</p>
                        </div>
                        <div class="lonyo-blog-btn">
                            <a href="single-blog.html" class="lonyo-default-btn blog-btn">continue reading</a>
                        </div>
                    </div> --}}



                    <div class="lonyo-pagination center">
                        <a class="pagi-btn btn2" href="single-blog.html">
                            <svg width="7" height="12" viewBox="0 0 7 12" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path d="M0.75 0.75L6 6L0.75 11.25" stroke="#001A3D" stroke-width="1.5"
                                    stroke-linecap="round" stroke-linejoin="round" />
                            </svg>
                        </a>
                        <ul>
                            <li><a class="current" href="#">1</a></li>
                            <li><a href="single-blog.html">2</a></li>
                            <li><a href="single-blog.html">3</a></li>
                        </ul>
                        <a class="pagi-btn" href="single-blog.html">
                            <svg width="7" height="12" viewBox="0 0 7 12" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path d="M0.75 0.75L6 6L0.75 11.25" stroke="#001A3D" stroke-width="1.5"
                                    stroke-linecap="round" stroke-linejoin="round" />
                            </svg>
                        </a>
                    </div>
                </div>

                <div class="col-lg-4">
                    <div class="lonyo-blog-sidebar" data-aos="fade-left" data-aos-duration="700">

                        <!-- Search Box -->
                        <div class="lonyo-blog-widgets">
                            <form action="#">
                                <div class="lonyo-search-box">
                                    <input type="search" placeholder="{{ __('Search here') }}">
                                    <button id="lonyo-search-btn" type="button"><i class="ri-search-line"></i></button>
                                </div>
                            </form>
                        </div>

                        <!-- Blog Categories -->
                        <div class="lonyo-blog-widgets">
                            <h4>{{ __('Categories') }}:</h4>
                            <div class="lonyo-blog-categorie">
                                <ul>
                                    @foreach ($blogCategories as $item)
                                        <li><a
                                                href="single-blog.html">{{ $item->category_name }}<span>({{ $item->posts_count }})</span></a>
                                        </li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>

                        <!-- Recent Posts -->
                        <div class="lonyo-blog-widgets">
                            <h4>{{ __('Recent Posts') }}</h4>
                            @foreach ($recentPosts as $item)
                                <a class="lonyo-blog-recent-post-item" href="single-blog.html">
                                    <div class="lonyo-blog-recent-post-thumb">
                                        <img src="{{ asset($item->image) }}" alt=""
                                            style="width: 150px; height: 120px;">
                                    </div>
                                    <div class="lonyo-blog-recent-post-data">
                                        <ul>
                                            <li><img src="{{ asset('frontend/assets/images/blog/date.svg') }}"
                                                    alt="">{{ $item->created_at->format('d M Y') }}</li>
                                        </ul>
                                        <div>
                                            <h4>{{ Str::limit($item->post_title, 20, '...') }}</h4>
                                        </div>
                                    </div>
                                </a>
                            @endforeach
                        </div>

                        {{-- <div class="lonyo-blog-widgets">
                            <form action="#">
                                <div class="lonyo-search-box">
                                    <input type="search" placeholder="Type keyword here">
                                    <button id="lonyo-search-btn" type="button"><i class="ri-search-line"></i></button>
                                </div>
                            </form>
                        </div>
                        <div class="lonyo-blog-widgets">
                            <h4>Categories:</h4>
                            <div class="lonyo-blog-categorie">
                                <ul>
                                    <li><a href="single-blog.html">Finance <span>10</span></a></li>
                                    <li><a href="single-blog.html">Business <span>18</span></a></li>
                                    <li><a href="single-blog.html">Technology <span>03</span></a></li>
                                    <li><a href="single-blog.html">Development <span>07</span></a></li>
                                    <li><a href="single-blog.html">Uncategorized <span>49</span></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="lonyo-blog-widgets">
                            <h4>Recent Posts</h4>
                            <a class="lonyo-blog-recent-post-item" href="single-blog.html">
                                <div class="lonyo-blog-recent-post-thumb">
                                    <img src="assets/images/blog/b4.png" alt="">
                                </div>
                                <div class="lonyo-blog-recent-post-data">
                                    <ul>
                                        <li><img src="assets/images/blog/date.svg" alt="">June 15, 2025</li>
                                    </ul>
                                    <div>
                                        <h4>7 businesses for easy money</h4>
                                    </div>
                                </div>
                            </a>
                            <a class="lonyo-blog-recent-post-item" href="single-blog.html">
                                <div class="lonyo-blog-recent-post-thumb">
                                    <img src="assets/images/blog/b5.png" alt="">
                                </div>
                                <div class="lonyo-blog-recent-post-data">
                                    <ul>
                                        <li><img src="assets/images/blog/date.svg" alt="">June 12, 2025</li>
                                    </ul>
                                    <div>
                                        <h4>10 Finance apps for you to use</h4>
                                    </div>
                                </div>
                            </a>
                            <a class="lonyo-blog-recent-post-item" href="single-blog.html">
                                <div class="lonyo-blog-recent-post-thumb">
                                    <img src="assets/images/blog/b6.png" alt="">
                                </div>
                                <div class="lonyo-blog-recent-post-data">
                                    <ul>
                                        <li><img src="assets/images/blog/date.svg" alt="">June 08, 2025</li>
                                    </ul>
                                    <div>
                                        <h4>How to create a stock market</h4>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="lonyo-blog-widgets">
                            <h4>Tags</h4>
                            <div class="lonyo-blog-tags">
                                <ul>
                                    <li><a href="single-blog.html">Software</a></li>
                                    <li><a href="single-blog.html">Business</a></li>
                                    <li><a href="single-blog.html">App</a></li>
                                    <li><a href="single-blog.html">Solutions</a></li>
                                    <li><a href="single-blog.html">Finance</a></li>
                                </ul>
                            </div>
                        </div> --}}

                    </div>
                </div>

            </div>
        </div>
    </div>



    <!-- Content -->
    {{-- <div class="lonyo-section-padding7 overflow-hidden">
        <div class="container">
            <div class="row">

                <div class="col-lg-8">
                    <div class="lonyo-blog-wrap" data-aos="fade-up" data-aos-duration="500">

                        <!-- Posts -->
                        @foreach ($posts as $item)
                            <div class="lonyo-blog-wrap" data-aos="fade-up" data-aos-duration="500">

                                <!-- Blog Image -->
                                <div class="lonyo-blog-thumb">
                                    <img src="{{ asset($item->image) }}" alt="">
                                </div>

                                <!-- Blog Date -->
                                <div class="lonyo-blog-meta">
                                    <ul>
                                        <li>
                                            <a href="single-blog.html">
                                                <img src="{{ asset('frontend/assets/images/blog/date.svg') }}"
                                                    alt="">
                                                {{ $item->created_at->format('d M Y') }}
                                            </a>
                                        </li>
                                    </ul>
                                </div>

                                <!-- Blog Title & Content -->
                                <div class="lonyo-blog-content">
                                    <h2><a
                                            href="{{ url('blog/details/' . $item->post_slug) }}">{{ $item->post_title }}</a>
                                    </h2>
                                    <p>{!! Str::limit($item->long_description, 150, '...') !!}</p>
                                </div>

                                <!-- Blog Button Details -->
                                <div class="lonyo-blog-btn">
                                    <a href="{{ url('blog/details/' . $item->post_slug) }}"
                                        class="lonyo-default-btn blog-btn">{{ __('continue reading') }}...</a>
                                </div>

                            </div>
                        @endforeach

                        <!-- Pagination -->
                        <div class="lonyo-pagination center">
                            <a class="pagi-btn btn2" href="single-blog.html">
                                <svg width="7" height="12" viewBox="0 0 7 12" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path d="M0.75 0.75L6 6L0.75 11.25" stroke="#001A3D" stroke-width="1.5"
                                        stroke-linecap="round" stroke-linejoin="round" />
                                </svg>
                            </a>
                            <ul>
                                <li><a class="current" href="#">1</a></li>
                                <li><a href="single-blog.html">2</a></li>
                                <li><a href="single-blog.html">3</a></li>
                            </ul>
                            <a class="pagi-btn" href="single-blog.html">
                                <svg width="7" height="12" viewBox="0 0 7 12" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path d="M0.75 0.75L6 6L0.75 11.25" stroke="#001A3D" stroke-width="1.5"
                                        stroke-linecap="round" stroke-linejoin="round" />
                                </svg>
                            </a>
                        </div>

                    </div>
                </div>

                <div class="col-lg-4">
                    <div class="lonyo-blog-sidebar" data-aos="fade-left" data-aos-duration="700">

                        <!-- Search Box -->
                        <div class="lonyo-blog-widgets">
                            <form action="#">
                                <div class="lonyo-search-box">
                                    <input type="search" placeholder="Type keyword here">
                                    <button id="lonyo-search-btn" type="button"><i class="ri-search-line"></i></button>
                                </div>
                            </form>
                        </div>

                        <!-- Blog Categories -->
                        <div class="lonyo-blog-widgets">
                            <h4>{{ __('Categories') }}:</h4>
                            <div class="lonyo-blog-categorie">
                                <ul>
                                    @foreach ($blogCategories as $item)
                                        <li><a
                                                href="single-blog.html">{{ $item->category_name }}<span>({{ $item->posts_count }})</span></a>
                                        </li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>

                        <!-- Recent Posts -->
                        <div class="lonyo-blog-widgets">
                            <h4>{{ __('Recent Posts') }}</h4>
                            @foreach ($recentPosts as $item)
                                <a class="lonyo-blog-recent-post-item" href="single-blog.html">
                                    <div class="lonyo-blog-recent-post-thumb">
                                        <img src="{{ asset($item->image) }}" alt=""
                                            style="width: 150px; height: 120px;">
                                    </div>
                                    <div class="lonyo-blog-recent-post-data">
                                        <ul>
                                            <li><img src="{{ asset('frontend/assets/images/blog/date.svg') }}"
                                                    alt="">{{ $item->created_at->format('d M Y') }}</li>
                                        </ul>
                                        <div>
                                            <h4>{{ Str::limit($item->post_title, 20, '...') }}</h4>
                                        </div>
                                    </div>
                                </a>
                            @endforeach
                        </div>

                    </div>
                </div>

            </div>
        </div>
    </div> --}}
    <!-- end blog -->

    <!-- Separador -->
    <div class="lonyo-content-shape">
        <img src="{{ asset('frontend/assets/images/shape/shape2.svg') }}" alt="">
    </div>

    <!-- App Celular -->
    @include('home.home_layout.mobile')
@endsection
