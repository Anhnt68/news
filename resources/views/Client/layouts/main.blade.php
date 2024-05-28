<!doctype html>
<html class="no-js" lang="en">

<!-- Mirrored from themegenix.net/html/zaira/index-6.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 25 May 2024 13:39:38 GMT -->

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Zaira - News Magazine HTML Template</title>
    <meta name="description" content="Zaira - News Magazine HTML Template">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="shortcut icon" type="image/x-icon" href="{{asset('fe/assets/img/favicon.png')}}">
    <!-- Place favicon.ico in the root directory -->

    <!-- CSS here -->
    <link rel="stylesheet" href="{{asset('fe/assets/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('fe/assets/css/animate.min.css')}}">
    <link rel="stylesheet" href="{{asset('fe/assets/css/magnific-popup.css')}}">
    <link rel="stylesheet" href="{{asset('fe/assets/css/fontawesome-all.min.css')}}">
    <link rel="stylesheet" href="{{asset('fe/assets/css/flaticon.css')}}">
    <link rel="stylesheet" href="{{asset('fe/assets/css/slick.css')}}">
    <link rel="stylesheet" href="{{asset('fe/assets/css/swiper-bundle.css')}}">
    <link rel="stylesheet" href="{{asset('fe/assets/css/default.css')}}">
    <link rel="stylesheet" href="{{asset('fe/assets/css/style.css')}}">
    <link rel="stylesheet" href="{{asset('fe/assets/css/responsive.css')}}">
</head>

<body>

    <!-- preloader -->
    <div id="preloader">
        <div class="loader-inner">
            <div id="loader">
                <h2 id="bg-loader">zaira<span>.</span></h2>
                <h2 id="fg-loader">zaira<span>.</span></h2>
            </div>
        </div>
    </div>
    <!-- preloader-end -->

    <!-- Dark/Light-toggle -->
    <div class="darkmode-trigger">
        <label class="modeSwitch">
            <input type="checkbox">
            <span class="icon"></span>
        </label>
    </div>
    <!-- Dark/Light-toggle-end -->

    <!-- Scroll-top -->
    <button class="scroll-top scroll-to-target" data-target="html">
        <i class="fas fa-angle-up"></i>
    </button>
    <!-- Scroll-top-end-->

    <!-- header-area -->
    @include('Client.layouts.header');
    <!-- header-area-end -->


    <!-- main-area -->
    <main class="fix">

        <!-- banner-post-area -->
        <section class="banner-post-area-five pt-50">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xl-9">
                        <div class="news-banner-post-wrap">
                            <div class="row">
                                <div class="col-67 order-0 order-lg-2">
                                    <div class="banner-post-six">
                                        <div class="banner-post-thumb-six">
                                            <a href="blog-details.html"><img src="{{asset('assets/img/blog/nw_banner_post03.jpg')}}" alt=""></a>
                                        </div>
                                        <div class="banner-post-content-six">
                                            <a href="blog.html" class="post-tag-two">Politics</a>
                                            <h2 class="post-title bold-underline"><a href="blog-details.html">Beyond Algorithms Skills Of Designers That AI Can’t Replicate</a>
                                            </h2>
                                            <div class="blog-post-meta">
                                                <ul class="list-wrap">
                                                    <li><i class="flaticon-user"></i>by<a href="author.html">Admin</a></li>
                                                    <li><i class="flaticon-calendar"></i>27 August, 2024</li>
                                                    <li><i class="flaticon-history"></i>20 Mins</li>
                                                </ul>
                                            </div>
                                            <p>Browned butter and brown sugar caramelly goodness, crispy edgend software centers and melty little puddles of chocolate first favorite.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-33">
                                    <div class="news-banner-small-post">
                                        <div class="banner-post-five">
                                            <div class="banner-post-thumb-five">
                                                <a href="blog-details.html"><img src="{{asset('assets/img/blog/nw_banner_post01.jpg')}}" alt=""></a>
                                            </div>
                                            <div class="banner-post-content-five">
                                                <a href="blog.html" class="post-tag-four">Business</a>
                                                <h2 class="post-title"><a href="blog-details.html">A Pragmatist’s Guide To Theire Lean User Research</a>
                                                </h2>
                                                <div class="blog-post-meta">
                                                    <ul class="list-wrap">
                                                        <li><i class="flaticon-user"></i>by<a href="author.html">Admin</a></li>
                                                        <li><i class="flaticon-calendar"></i>27 August, 2024</li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="banner-post-five">
                                            <div class="banner-post-thumb-five">
                                                <a href="blog-details.html"><img src="{{asset('assets/img/blog/nw_banner_post02.jpg')}}" alt=""></a>
                                            </div>
                                            <div class="banner-post-content-five">
                                                <a href="blog.html" class="post-tag-four">Tech</a>
                                                <h2 class="post-title"><a href="blog-details.html">Five Data-Loading Patterns To Boost Web Performance</a>
                                                </h2>
                                                <div class="blog-post-meta">
                                                    <ul class="list-wrap">
                                                        <li><i class="flaticon-user"></i>by<a href="author.html">Admin</a></li>
                                                        <li><i class="flaticon-calendar"></i>27 August, 2024</li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="ad-banner-img ad-banner-img-two text-center pt-20 pb-50">
                            <a href="#">
                                <img src="{{asset('assets/img/images/advertisement13.jpg')}}" alt="">
                            </a>
                        </div>

                        <!-- politics-post-area -->
                        <section class="politics-post-area">
                            <div class="section-title-wrap">
                                <div class="section-title section-title-four">
                                    <h2 class="title">Politics</h2>
                                    <div class="section-title-line"></div>
                                </div>
                            </div>
                            <div class="politics-post-wrap">
                                <div class="row">
                                    <div class="col-69">
                                        <div class="politics-post">
                                            <div class="politics-post-thumb">
                                                <a href="index.html"><img src="{{asset('assets/img/blog/politics_post01.jpg')}}" alt=""></a>
                                            </div>
                                            <div class="politics-post-content">
                                                <a href="blog.html" class="post-tag-four">Politics</a>
                                                <h2 class="post-title"><a href="blog-details.html">Warns Financial Institutions to be on Watch for Russian</a></h2>
                                                <div class="blog-post-meta">
                                                    <ul class="list-wrap">
                                                        <li><i class="flaticon-user"></i>by<a href="author.html">Admin</a></li>
                                                        <li><i class="flaticon-calendar"></i>27 August, 2024</li>
                                                    </ul>
                                                </div>
                                                <p>Browned butter browa melly ness crispy edgend software centers puddles of chocolate.</p>
                                                <div class="view-all-btn">
                                                    <a href="blog.html" class="link-btn">Read More
                                                        <span class="svg-icon">
                                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 10 10" fill="none">
                                                                <path d="M1.07692 10L0 8.92308L7.38462 1.53846H0.769231V0H10V9.23077H8.46154V2.61538L1.07692 10Z" fill="currentColor" />
                                                                <path d="M1.07692 10L0 8.92308L7.38462 1.53846H0.769231V0H10V9.23077H8.46154V2.61538L1.07692 10Z" fill="currentColor" />
                                                            </svg>
                                                        </span>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-31">
                                        <div class="politics-post-wrap-two">
                                            <div class="politics-post-two">
                                                <div class="politics-post-content-two">
                                                    <h2 class="post-title"><a href="blog-details.html">UX Checklists For Interface Designers</a></h2>
                                                    <div class="blog-post-meta">
                                                        <ul class="list-wrap">
                                                            <li><i class="flaticon-calendar"></i>27 August, 2024</li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="politics-post-two">
                                                <div class="politics-post-content-two">
                                                    <h2 class="post-title"><a href="blog-details.html">The Realities And Myths Of Contrast And Color</a></h2>
                                                    <div class="blog-post-meta">
                                                        <ul class="list-wrap">
                                                            <li><i class="flaticon-calendar"></i>27 August, 2024</li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="politics-post-two">
                                                <div class="politics-post-content-two">
                                                    <h2 class="post-title"><a href="blog-details.html">Designing Better Error Messages UX</a></h2>
                                                    <div class="blog-post-meta">
                                                        <ul class="list-wrap">
                                                            <li><i class="flaticon-calendar"></i>27 August, 2024</li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>
                        <!-- politics-post-area-end -->

                        <!-- today-post-area -->
                        <section class="today-post-area pt-50">
                            <div class="section-title-wrap">
                                <div class="section-title section-title-four">
                                    <h2 class="title">Today’s Hot Spot</h2>
                                    <div class="section-title-line"></div>
                                </div>
                            </div>
                            <div class="today-post-wrap">
                                <div class="row gutter-40 justify-content-center">
                                    <div class="col-lg-4 col-md-6">
                                        <div class="banner-post-five banner-post-seven">
                                            <div class="banner-post-thumb-five">
                                                <a href="blog-details.html"><img src="{{asset('assets/img/blog/today_post01.jpg')}}" alt=""></a>
                                            </div>
                                            <div class="banner-post-content-five">
                                                <a href="blog.html" class="post-tag-four">Sports</a>
                                                <h2 class="post-title"><a href="blog-details.html">Designing Better Error Messages UX</a></h2>
                                                <div class="blog-post-meta">
                                                    <ul class="list-wrap">
                                                        <li><i class="flaticon-user"></i>by<a href="author.html">Admin</a></li>
                                                        <li><i class="flaticon-calendar"></i>27 August, 2024</li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-6">
                                        <div class="banner-post-five banner-post-seven">
                                            <div class="banner-post-thumb-five">
                                                <a href="blog-details.html"><img src="{{asset('assets/img/blog/today_post02.jpg')}}" alt=""></a>
                                                <a href="https://www.youtube.com/watch?v=G_AEL-Xo5l8" class="paly-btn popup-video"><i class="fas fa-play"></i></a>
                                            </div>
                                            <div class="banner-post-content-five">
                                                <a href="blog.html" class="post-tag-four">Tech</a>
                                                <h2 class="post-title"><a href="blog-details.html">Implementing A Reset Password Feature With Dynamic Routes</a></h2>
                                                <div class="blog-post-meta">
                                                    <ul class="list-wrap">
                                                        <li><i class="flaticon-user"></i>by<a href="author.html">Admin</a></li>
                                                        <li><i class="flaticon-calendar"></i>27 August, 2024</li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-6">
                                        <div class="banner-post-five banner-post-seven">
                                            <div class="banner-post-thumb-five">
                                                <a href="blog-details.html"><img src="{{asset('assets/img/blog/nw_banner_post01.jpg')}}" alt=""></a>
                                            </div>
                                            <div class="banner-post-content-five">
                                                <a href="blog.html" class="post-tag-four">Politics</a>
                                                <h2 class="post-title"><a href="blog-details.html">An Introduction To Context Propagation In JavaScript</a></h2>
                                                <div class="blog-post-meta">
                                                    <ul class="list-wrap">
                                                        <li><i class="flaticon-user"></i>by<a href="author.html">Admin</a></li>
                                                        <li><i class="flaticon-calendar"></i>27 August, 2024</li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>
                        <!-- today-post-area-end -->

                    </div>
                    <div class="col-xl-3 col-lg-8">
                        <div class="sidebar-wrap-three">
                            <div class="sidebar-widget-three">
                                <div class="widget-title widget-title-three mb-20">
                                    <div class="section-title-line"></div>
                                    <h2 class="title">Top Stories</h2>
                                </div>
                                <div class="stories-post-wrap">
                                    <div class="stories-post">
                                        <div class="stories-post-thumb">
                                            <a href="blog-details.html"><img src="{{asset('assets/img/blog/stories_post01.jpg')}}" alt=""></a>
                                        </div>
                                        <div class="stories-post-content">
                                            <a href="blog.html" class="post-tag-four">Politics</a>
                                            <h5 class="post-title"><a href="blog-details.html">Lessons Learned As A Designer-Founder</a></h5>
                                            <div class="blog-post-meta">
                                                <ul class="list-wrap">
                                                    <li><i class="flaticon-calendar"></i>27 August, 2024</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="stories-post">
                                        <div class="stories-post-thumb">
                                            <a href="blog-details.html"><img src="{{asset('assets/img/blog/stories_post02.jpg')}}" alt=""></a>
                                        </div>
                                        <div class="stories-post-content">
                                            <a href="blog.html" class="post-tag-four">MOdern</a>
                                            <h5 class="post-title"><a href="blog-details.html">A Complete Guide To Live Validation UX</a></h5>
                                            <div class="blog-post-meta">
                                                <ul class="list-wrap">
                                                    <li><i class="flaticon-calendar"></i>27 August, 2024</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="stories-post">
                                        <div class="stories-post-thumb">
                                            <a href="blog-details.html"><img src="{{asset('assets/img/blog/stories_post03.jpg')}}" alt=""></a>
                                        </div>
                                        <div class="stories-post-content">
                                            <a href="blog.html" class="post-tag-four">Sports</a>
                                            <h5 class="post-title"><a href="blog-details.html">Building A Retro Draggable Web</a></h5>
                                            <div class="blog-post-meta">
                                                <ul class="list-wrap">
                                                    <li><i class="flaticon-calendar"></i>27 August, 2024</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="stories-post">
                                        <div class="stories-post-thumb">
                                            <a href="blog-details.html"><img src="{{asset('assets/img/blog/stories_post04.jpg')}}" alt=""></a>
                                        </div>
                                        <div class="stories-post-content">
                                            <a href="blog.html" class="post-tag-four">Fashion</a>
                                            <h5 class="post-title"><a href="blog-details.html">Rethinking Star Ratings For Readers</a></h5>
                                            <div class="blog-post-meta">
                                                <ul class="list-wrap">
                                                    <li><i class="flaticon-calendar"></i>27 August, 2024</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="sidebar-widget-three">
                                <div class="sidebar-img-two">
                                    <a href="#"><img src="{{asset('assets/img/images/sidebar_img05.jpg')}}" alt=""></a>
                                </div>
                            </div>
                            <div class="sidebar-widget-three">
                                <div class="widget-title widget-title-three mb-20">
                                    <div class="section-title-line"></div>
                                    <h2 class="title">Top Stories</h2>
                                </div>
                                <div class="stories-post-wrap-two">
                                    <div class="stories-post-two">
                                        <h2 class="number">1.</h2>
                                        <div class="stories-post-content">
                                            <h5 class="post-title"><a href="blog-details.html">Awersing Instagram tawo promote your</a></h5>
                                            <div class="blog-post-meta">
                                                <ul class="list-wrap">
                                                    <li><i class="flaticon-calendar"></i>27 August, 2024</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="stories-post-two">
                                        <h2 class="number">2.</h2>
                                        <div class="stories-post-content">
                                            <h5 class="post-title"><a href="blog-details.html">Rethinking Star Ratings For Readers</a></h5>
                                            <div class="blog-post-meta">
                                                <ul class="list-wrap">
                                                    <li><i class="flaticon-calendar"></i>27 August, 2024</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="stories-post-two">
                                        <h2 class="number">3.</h2>
                                        <div class="stories-post-content">
                                            <h5 class="post-title"><a href="blog-details.html">Headless In Times Of Accessibility</a></h5>
                                            <div class="blog-post-meta">
                                                <ul class="list-wrap">
                                                    <li><i class="flaticon-calendar"></i>27 August, 2024</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="stories-post-two">
                                        <h2 class="number">4.</h2>
                                        <div class="stories-post-content">
                                            <h5 class="post-title"><a href="blog-details.html">Making S WAI-ARIA A Comprehensive Guide</a></h5>
                                            <div class="blog-post-meta">
                                                <ul class="list-wrap">
                                                    <li><i class="flaticon-calendar"></i>27 August, 2024</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="stories-post-two">
                                        <h2 class="number">5.</h2>
                                        <div class="stories-post-content">
                                            <h5 class="post-title"><a href="blog-details.html">UX Checklists For Interface Designers</a></h5>
                                            <div class="blog-post-meta">
                                                <ul class="list-wrap">
                                                    <li><i class="flaticon-calendar"></i>27 August, 2024</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- banner-post-area-end -->

        <!-- ad-banner-area -->
        <div class="ad-banner-area pt-50 pb-60">
            <div class="container">
                <div class="ad-banner-img ad-banner-img-two text-center">
                    <a href="#">
                        <img src="{{asset('assets/img/images/advertisement14.jpg')}}" alt="">
                    </a>
                </div>
            </div>
        </div>
        <!-- ad-banner-area-end -->

        <!-- editor-post-area -->
        <section class="editor-post-area-three">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="section-title-wrap mb-30">
                            <div class="section-title section-title-four">
                                <h2 class="title">Editors' Picks</h2>
                                <div class="editor-nav-two"></div>
                            </div>
                            <div class="section-title-line"></div>
                        </div>
                    </div>
                </div>
                <div class="row gutter-40 editor-post-active-two">
                    <div class="col-lg-3">
                        <div class="editor-post-three">
                            <div class="editor-post-thumb-three">
                                <a href="blog-details.html"><img src="{{asset('assets/img/blog/nw_editor_post01.jpg')}}'" alt=""></a>
                                <a href="https://www.youtube.com/watch?v=G_AEL-Xo5l8" class="paly-btn popup-video"><i class="fas fa-play"></i></a>
                            </div>
                            <div class="editor-post-content-three">
                                <a href="blog.html" class="post-tag-four">Sports</a>
                                <h2 class="post-title"><a href="blog-details.html">Everything Developers Must Know About Figma</a></h2>
                                <div class="blog-post-meta">
                                    <ul class="list-wrap">
                                        <li><i class="flaticon-calendar"></i>27 August, 2024</li>
                                        <li><i class="flaticon-history"></i>20 Mins</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="editor-post-three">
                            <div class="editor-post-thumb-three">
                                <a href="blog-details.html"><img src="{{asset('assets/img/blog/nw_editor_post02.jpg')}}" alt=""></a>
                            </div>
                            <div class="editor-post-content-three">
                                <a href="blog.html" class="post-tag-four">Tech</a>
                                <h2 class="post-title"><a href="blog-details.html">Phone Numbers For Web Designers</a></h2>
                                <div class="blog-post-meta">
                                    <ul class="list-wrap">
                                        <li><i class="flaticon-calendar"></i>27 August, 2024</li>
                                        <li><i class="flaticon-history"></i>20 Mins</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="editor-post-three">
                            <div class="editor-post-thumb-three">
                                <a href="blog-details.html"><img src="{{asset('assets/img/blog/nw_editor_post03.jpg')}}" alt=""></a>
                                <a href="https://www.youtube.com/watch?v=G_AEL-Xo5l8" class="paly-btn popup-video"><i class="fas fa-play"></i></a>
                            </div>
                            <div class="editor-post-content-three">
                                <a href="blog.html" class="post-tag-four">Food</a>
                                <h2 class="post-title"><a href="blog-details.html">How To Create Dynamic Donut Tailwind React</a></h2>
                                <div class="blog-post-meta">
                                    <ul class="list-wrap">
                                        <li><i class="flaticon-calendar"></i>27 August, 2024</li>
                                        <li><i class="flaticon-history"></i>20 Mins</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="editor-post-three">
                            <div class="editor-post-thumb-three">
                                <a href="blog-details.html"><img src="{{asset('assets/img/blog/nw_editor_post04.jpg')}}" alt=""></a>
                            </div>
                            <div class="editor-post-content-three">
                                <a href="blog.html" class="post-tag-four">News</a>
                                <h2 class="post-title"><a href="blog-details.html">An Introduction To Context Propagation In JavaScript</a></h2>
                                <div class="blog-post-meta">
                                    <ul class="list-wrap">
                                        <li><i class="flaticon-calendar"></i>27 August, 2024</li>
                                        <li><i class="flaticon-history"></i>20 Mins</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="editor-post-three">
                            <div class="editor-post-thumb-three">
                                <a href="blog-details.html"><img src="{{asset('assets/img/blog/nw_editor_post03.jpg')}}" alt=""></a>
                                <a href="https://www.youtube.com/watch?v=G_AEL-Xo5l8" class="paly-btn popup-video"><i class="fas fa-play"></i></a>
                            </div>
                            <div class="editor-post-content-three">
                                <a href="blog.html" class="post-tag-four">Food</a>
                                <h2 class="post-title"><a href="blog-details.html">How To Create Dynamic Donut Tailwind React</a></h2>
                                <div class="blog-post-meta">
                                    <ul class="list-wrap">
                                        <li><i class="flaticon-calendar"></i>27 August, 2024</li>
                                        <li><i class="flaticon-history"></i>20 Mins</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- editor-post-area-end -->

        <!-- top-news-post -->
        <section class="top-news-post-area pt-70 pb-70">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xl-9">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="section-title-wrap mb-30">
                                    <div class="section-title section-title-four">
                                        <h2 class="title">World Top News</h2>
                                    </div>
                                    <div class="section-title-line"></div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12">
                                <div class="top-news-post">
                                    <div class="top-news-post-thumb">
                                        <a href="blog-details.html"><img src="{{asset('assets/img/blog/top_news_post01.jpg')}}" alt=""></a>
                                        <a href="https://www.youtube.com/watch?v=G_AEL-Xo5l8" class="paly-btn popup-video"><i class="fas fa-play"></i></a>
                                    </div>
                                    <div class="top-news-post-content">
                                        <a href="blog.html" class="post-tag-four">Sports</a>
                                        <h2 class="post-title bold-underline"><a href="blog-details.html">How To Protect Your App With Threat Model Based On JSONDiff</a></h2>
                                        <div class="blog-post-meta">
                                            <ul class="list-wrap">
                                                <li><i class="flaticon-calendar"></i>27 August, 2024</li>
                                                <li><i class="flaticon-history"></i>20 Mins</li>
                                            </ul>
                                        </div>
                                        <p>Browned butter and brown sugar caramelly oodness crispy edgesthick and soft centers and melty little puddles of chocolate y first favorite.Browned butter brown sugar caramelly oodness.</p>
                                        <div class="view-all-btn">
                                            <a href="blog.html" class="link-btn">Read More
                                                <span class="svg-icon">
                                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 10 10" fill="none">
                                                        <path d="M1.07692 10L0 8.92308L7.38462 1.53846H0.769231V0H10V9.23077H8.46154V2.61538L1.07692 10Z" fill="currentColor" />
                                                        <path d="M1.07692 10L0 8.92308L7.38462 1.53846H0.769231V0H10V9.23077H8.46154V2.61538L1.07692 10Z" fill="currentColor" />
                                                    </svg>
                                                </span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="horizontal-post-four">
                                    <div class="horizontal-post-thumb-four">
                                        <a href="blog-details.html"><img src="{{asset('assets/img/blog/top_news_post02.jpg')}}" alt=""></a>
                                    </div>
                                    <div class="horizontal-post-content-four">
                                        <a href="blog.html" class="post-tag-four">Politics</a>
                                        <h4 class="post-title"><a href="blog-details.html">Using Instagram tawo promote your</a></h4>
                                        <div class="blog-post-meta">
                                            <ul class="list-wrap">
                                                <li><i class="flaticon-calendar"></i>27 August, 2024</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="horizontal-post-four">
                                    <div class="horizontal-post-thumb-four">
                                        <a href="blog-details.html"><img src="{{asset('assets/img/blog/top_news_post03.jpg')}}" alt=""></a>
                                    </div>
                                    <div class="horizontal-post-content-four">
                                        <a href="blog.html" class="post-tag-four">Tech</a>
                                        <h4 class="post-title"><a href="blog-details.html">Everything Developers Must Know About</a></h4>
                                        <div class="blog-post-meta">
                                            <ul class="list-wrap">
                                                <li><i class="flaticon-calendar"></i>27 August, 2024</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="horizontal-post-four">
                                    <div class="horizontal-post-thumb-four">
                                        <a href="blog-details.html"><img src="{{asset('assets/img/blog/top_news_post04.jpg')}}" alt=""></a>
                                    </div>
                                    <div class="horizontal-post-content-four">
                                        <a href="blog.html" class="post-tag-four">Modern</a>
                                        <h4 class="post-title"><a href="blog-details.html">Implementing Okta Authentication In</a></h4>
                                        <div class="blog-post-meta">
                                            <ul class="list-wrap">
                                                <li><i class="flaticon-calendar"></i>27 August, 2024</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="ad-banner-area pt-20 pb-50">
                            <div class="ad-banner-img ad-banner-img-two text-center">
                                <a href="#">
                                    <img src="{{asset('assets/img/images/advertisement15.jpg')}}" alt="">
                                </a>
                            </div>
                        </div>
                        <div class="sports-post-wrap">
                            <div class="section-title-wrap mb-30">
                                <div class="section-title section-title-four">
                                    <h2 class="title">Sports</h2>
                                </div>
                                <div class="section-title-line"></div>
                            </div>
                            <div class="row">
                                <div class="col-lg-8">
                                    <div class="sports-post">
                                        <div class="sports-post-thumb">
                                            <a href="blog-details.html"><img src="{{asset('assets/img/blog/sports_post01.jpg')}}" alt=""></a>
                                        </div>
                                        <div class="sports-post-content">
                                            <a href="blog.html" class="post-tag-four">Swimming</a>
                                            <h4 class="post-title bold-underline"><a href="blog-details.html">How To Protect Your App With Threat Model Based On w To Protect Your App With Based</a></h4>
                                            <div class="blog-post-meta">
                                                <ul class="list-wrap">
                                                    <li><i class="flaticon-calendar"></i>27 August, 2024</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="sidebar-wrap sidebar-wrap-four">
                                        <div class="horizontal-post-four horizontal-post-five">
                                            <div class="horizontal-post-thumb-four">
                                                <a href="blog-details.html"><img src="{{asset('assets/img/blog/sports_post02.jpg')}}" alt=""></a>
                                            </div>
                                            <div class="horizontal-post-content-four">
                                                <a href="blog.html" class="post-tag-four">basket Ball</a>
                                                <h4 class="post-title"><a href="blog-details.html">Using Instagram tawo promote your</a></h4>
                                                <div class="blog-post-meta">
                                                    <ul class="list-wrap">
                                                        <li><i class="flaticon-calendar"></i>27 August, 2024</li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="horizontal-post-four horizontal-post-five">
                                            <div class="horizontal-post-thumb-four">
                                                <a href="blog-details.html"><img src="{{asset('assets/img/blog/sports_post03.jpg')}}" alt=""></a>
                                            </div>
                                            <div class="horizontal-post-content-four">
                                                <a href="blog.html" class="post-tag-four">Boxing</a>
                                                <h4 class="post-title"><a href="blog-details.html">Implementing Okta Authentication</a></h4>
                                                <div class="blog-post-meta">
                                                    <ul class="list-wrap">
                                                        <li><i class="flaticon-calendar"></i>27 August, 2024</li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="horizontal-post-four horizontal-post-five">
                                            <div class="horizontal-post-thumb-four">
                                                <a href="blog-details.html"><img src="{{asset('assets/img/blog/sports_post04.jpg')}}" alt=""></a>
                                            </div>
                                            <div class="horizontal-post-content-four">
                                                <a href="blog.html" class="post-tag-four">Football</a>
                                                <h4 class="post-title"><a href="blog-details.html">Core Web Vitals Tools To Boost Your</a></h4>
                                                <div class="blog-post-meta">
                                                    <ul class="list-wrap">
                                                        <li><i class="flaticon-calendar"></i>27 August, 2024</li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="horizontal-post-four horizontal-post-five">
                                            <div class="horizontal-post-thumb-four">
                                                <a href="blog-details.html"><img src="{{asset('assets/img/blog/sports_post05.jpg')}}" alt=""></a>
                                            </div>
                                            <div class="horizontal-post-content-four">
                                                <a href="blog.html" class="post-tag-four">Politics</a>
                                                <h4 class="post-title"><a href="blog-details.html">Migration From jQuery to Next.js: A Guide</a></h4>
                                                <div class="blog-post-meta">
                                                    <ul class="list-wrap">
                                                        <li><i class="flaticon-calendar"></i>27 August, 2024</li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-8">
                        <div class="sidebar-wrap-three">
                            <div class="sidebar-widget-three">
                                <div class="sidebar-newsletter sidebar-newsletter-two">
                                    <div class="icon"><i class="flaticon-envelope"></i></div>
                                    <h4 class="title">Daily Newsletter</h4>
                                    <p>Get all the top stories from Blogs to keep track.</p>
                                    <div class="sidebar-newsletter-form-two">
                                        <form action="#">
                                            <div class="form-grp">
                                                <input type="text" placeholder="Enter your e-mail">
                                                <button type="submit" class="btn">Subscribe Now</button>
                                            </div>
                                            <div class="form-check">
                                                <input type="checkbox" class="form-check-input" id="checkbox">
                                                <label for="checkbox">I agree to the terms & conditions</label>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <div class="sidebar-widget-three">
                                <div class="widget-title widget-title-three mb-20">
                                    <div class="section-title-line"></div>
                                    <h2 class="title">Business</h2>
                                </div>
                                <div class="hot-post-wrap">
                                    <div class="hot-post-item hot-post-item-two">
                                        <div class="hot-post-thumb">
                                            <a href="blog-details.html"><img src="{{asset('assets/img/blog/nw_banner_post01.jpg')}}" alt=""></a>
                                        </div>
                                        <div class="hot-post-content">
                                            <a href="blog.html" class="post-tag-four">Audit</a>
                                            <h4 class="post-title"><a href="blog-details.html">Take a Look Back at the Moseret Gala Red Carpet Ever</a></h4>
                                            <div class="blog-post-meta">
                                                <ul class="list-wrap">
                                                    <li><i class="flaticon-calendar"></i>27 August, 2024</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="hot-post-item hot-post-item-two">
                                        <div class="hot-post-content">
                                            <a href="blog.html" class="post-tag-four">Marketing</a>
                                            <h4 class="post-title"><a href="blog-details.html">Take a Look Back at the Moseret Gala Red Carpet Ever</a></h4>
                                            <div class="blog-post-meta">
                                                <ul class="list-wrap">
                                                    <li><i class="flaticon-calendar"></i>27 August, 2024</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="hot-post-item hot-post-item-two">
                                        <div class="hot-post-content">
                                            <a href="blog.html" class="post-tag-four">Marketing</a>
                                            <h4 class="post-title"><a href="blog-details.html">Take a Look Back at the Moseret Gala Red Carpet Ever</a></h4>
                                            <div class="blog-post-meta">
                                                <ul class="list-wrap">
                                                    <li><i class="flaticon-calendar"></i>27 August, 2024</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="sidebar-widget sidebar-widget-two">
                                <div class="sidebar-img">
                                    <a href="#">
                                        <img src="{{asset('assets/img/images/sidebar_img06.jpg')}}" alt="">
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- top-news-post-end -->

        <!-- newsletter-area -->
        <section class="newsletter-area-four">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="newsletter-wrap-four">
                            <div class="newsletter-content">
                                <h2 class="title">Get Subscribe To Our Latest News & Update</h2>
                            </div>
                            <div class="newsletter-form">
                                <form action="#">
                                    <div class="form-grp">
                                        <input type="text" placeholder="Name">
                                    </div>
                                    <div class="form-grp">
                                        <input type="email" placeholder="E-mail">
                                    </div>
                                    <button type="submit" class="btn">Submit Now</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- newsletter-area-end -->

    </main>
    <!-- main-area-end -->

    <!-- footer-area -->
    <footer>
        <div class="footer-area-four">
            <div class="footer-top footer-top-three">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-3 col-md-7">
                            <div class="footer-widget">
                                <div class="fw-logo">
                                    <a href="index.html"><img src="{{asset('assets/img/logo/logo.png')}}" alt=""></a>
                                </div>
                                <div class="fw-logo d-none">
                                    <a href="index.html"><img src="{{asset('assets/img/logo/w_logo.png')}}" alt=""></a>
                                </div>
                                <div class="footer-content">
                                    <p>Browned butter and brown sugar caramelly goodness, crispy edges thick and soft centers and melty little puddles of chocolate.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-2 col-md-5 col-sm-6">
                            <div class="footer-widget">
                                <h4 class="fw-title">Company</h4>
                                <div class="footer-link-wrap">
                                    <ul class="list-wrap">
                                        <li><a href="about.html">About Us</a></li>
                                        <li><a href="contact.html">The Test Kitchen</a></li>
                                        <li><a href="contact.html">Podcast</a></li>
                                        <li><a href="contact.html">Events</a></li>
                                        <li><a href="contact.html">Jobs</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-4 col-sm-6">
                            <div class="footer-widget">
                                <h4 class="fw-title">Get Help</h4>
                                <div class="footer-link-wrap">
                                    <ul class="list-wrap">
                                        <li><a href="contact.html">Contact & Faq</a></li>
                                        <li><a href="contact.html">Oders & Returns</a></li>
                                        <li><a href="contact.html">Gift Cards</a></li>
                                        <li><a href="contact.html">Register</a></li>
                                        <li><a href="contact.html">Catalog</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-2 col-md-4 col-sm-6">
                            <div class="footer-widget">
                                <h4 class="fw-title">Explore</h4>
                                <div class="footer-link-wrap">
                                    <ul class="list-wrap">
                                        <li><a href="contact.html">The Shop</a></li>
                                        <li><a href="contact.html">Recipes</a></li>
                                        <li><a href="contact.html">Food</a></li>
                                        <li><a href="contact.html">Travel</a></li>
                                        <li><a href="contact.html">Hotline</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-2 col-md-4 col-sm-6">
                            <div class="footer-widget">
                                <h4 class="fw-title">Follow us On</h4>
                                <div class="footer-link-wrap">
                                    <ul class="list-wrap">
                                        <li><a href="#">facebook</a></li>
                                        <li><a href="#">Twitter</a></li>
                                        <li><a href="#">Instagram</a></li>
                                        <li><a href="#">Youtube</a></li>
                                        <li><a href="#">Pinterest</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer-bottom footer-bottom-three">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="footer-bottom-menu">
                                <ul class="list-wrap">
                                    <li><a href="contact.html">Privacy Policy & Terms</a></li>
                                    <li><a href="contact.html">Site Credits</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="copyright-text">
                                <p>© 2023 All Rights Reserved</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- footer-area-end -->


    <!-- JS here -->
    <script src="{{asset('fe/assets/js/vendor/jquery-3.6.0.min.js')}}"></script>
    <script src="{{asset('fe/assets/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('fe/assets/js/jquery.magnific-popup.min.js')}}"></script>
    <script src="{{asset('fe/assets/js/slick.min.js')}}"></script>
    <script src="{{asset('fe/assets/js/swiper-bundle.js')}}"></script>
    <script src="{{asset('fe/assets/js/ajax-form.js')}}"></script>
    <script src="{{asset('fe/assets/js/wow.min.js')}}"></script>
    <script src="{{asset('fe/assets/js/main.js')}}"></script>
</body>

<!-- Mirrored from themegenix.net/html/zaira/index-6.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 25 May 2024 13:39:44 GMT -->

</html>