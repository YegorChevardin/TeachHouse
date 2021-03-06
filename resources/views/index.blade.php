@extends('layouts.main')
@section('content')
    <!-- Background Area Start -->
    <section id="slider-container" class="slider-area three">
        <div class="slider-owl owl-theme owl-carousel">
            <!-- Start Slingle Slide -->
            <div class="single-slide item" style="background-image: url({{asset('assets/img/slider/slider2.jpg')}})">
                <!-- Start Slider Content -->
                <div class="slider-content-area">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-7">
                                <div class="slide-content-wrapper">
                                    <div class="slide-content">
                                        <p>Избавьтесь от проблем с</p>
                                        <h2>РАЗГОВОРНЫМ АНГЛИЙСКИМ</h2>
                                        <p>навсегда, после прохождения нашего онлайн курса, с учителем <a href="{{ route('teacher-details') }}" target="_blank">Andy Fedorchuk</a> , до того, как вы уедите за границу!</p>
                                        <a class="default-btn" href="{{ route('about') }}">подробнее</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-5">
                                <div class="slider-img">
                                    <img src="{{ asset('assets/img/slider/home.png') }}" alt="slider">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Slider Content -->
            </div>
            <!-- End Slingle Slide -->
        </div>
    </section>
    <!-- Background Area End -->
    <!-- Courses Area Start -->
    <div class="courses-area pt-150 text-center">
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <div class="section-title">
                        <img src="{{ asset('assets/img/icon/section.png') }}" alt="section-title">
                        <h2>Популярные курсы</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4 col-sm-6 col-xs-12">
                    <div class="single-course">
                        <div class="course-img">
                            <a href="{{ route('course-details') }}"><img src="{{ asset('assets/img/course/course1.jpg') }}" alt="course">
                                <div class="course-hover">
                                    <i class="fa fa-link"></i>
                                </div>
                            </a>
                        </div>
                        <div class="course-content">
                            <h3><a href="{{ route('course-details') }}">Менеджмент на английском</a></h3>
                            <p>I must explain to you how all this a mistaken idea of denouncing great explorer of the rut the is lder of human happiness</p>
                            <a class="default-btn" href="{{ route('course-details') }}">подробнее</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 col-xs-12">
                    <div class="single-course">
                        <div class="course-img">
                            <a href="{{ route('course-details') }}"><img src="{{ asset('assets/img/course/course2.jpg') }}" alt="course">
                                <div class="course-hover">
                                    <i class="fa fa-link"></i>
                                </div>
                            </a>
                        </div>
                        <div class="course-content">
                            <h3><a href="{{ route('course-details') }}">Улучшение разговорного английского</a></h3>
                            <p>I must explain to you how all this a mistaken idea of denouncing great explorer of the rut the is lder of human happiness</p>
                            <a class="default-btn" href="{{ route('course-details') }}">подробнее</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 hidden-sm col-xs-12">
                    <div class="single-course">
                        <div class="course-img">
                            <a href="{{ route('course-details') }}"><img src="{{ asset('assets/img/course/course3.jpg') }}" alt="course">
                                <div class="course-hover">
                                    <i class="fa fa-link"></i>
                                </div>
                            </a>
                        </div>
                        <div class="course-content">
                            <h3><a href="{{ route('course-details') }}">Улучшение разговорного английского для детей</a></h3>
                            <p>I must explain to you how all this a mistaken idea of denouncing great explorer of the rut the is lder of human happiness</p>
                            <a class="default-btn" href="{{ route('course-details') }}">подробнее</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Courses Area End -->
    <!-- Notice Start -->
    <section class="notice-area two three pt-140 pb-100">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-sm-6 col-xs-12">
                    <div class="notice-right-wrapper mb-25 pb-25">
                        <h3>Знакомство с клубом разговорного английского языка</h3>
                        <div class="notice-video">
                            <div class="video-icon video-hover">
                                <a class="video-popup" href="https://www.youtube.com/watch?v=sXHbvSJ4RPk">
                                    <i class="zmdi zmdi-play"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-sm-6 col-xs-12">
                    <div class="notice-left-wrapper">
                        <h3>Ближайшие события</h3>
                        <div class="notice-left">
                            <div class="single-notice-left mb-23 pb-20">
                                <h4>01.09.2020</h4>
                                <p>
                                    Бесплатный зум класс. Консультация с иностранцем
                                </p>
                            </div>
                            <div class="single-notice-left mb-23 pb-20">
                                <h4>01.09.2020</h4>
                                <p>
                                    Бесплатный зум класс. Консультация с иностранцем
                                </p>
                            </div>
                            <div class="single-notice-left mb-23 pb-20">
                                <h4>01.09.2020</h4>
                                <p>
                                    Бесплатный зум класс. Консультация с иностранцем
                                </p>
                            </div>
                            <div class="single-notice-left mb-23 pb-20">
                                <h4>01.09.2020</h4>
                                <p>
                                    Бесплатный зум класс. Консультация с иностранцем
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Notice End -->
    <!-- About Start -->
    <div class="about-area pb-135 pt-130 bg-light">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-sm-6">
                    <div class="about-content">
                        <h2><span>TeachHouse</span> the best education theme for you</h2>
                        <p>I must explain to you how all this mistaken idea of denouncing pleure and prsing pain was born and I will give you a complete account of the system, and expound the actual teachings  the master-builder of humanit happiness</p>
                        <p class="hidden-sm">I must explain to you how all this mistaken idea of denouncing pleure and prsing pain was born and I will give you a complete account of the system</p>
                        <a class="default-btn" href="{{ route('about') }}">buy now</a>
                    </div>
                </div>
                <div class="col-md-6 col-sm-6">
                    <div class="about-img">
                        <img src="{{ asset('assets/img/about/about.png') }}" alt="about">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->
    <!-- Event Area Start -->
    <div class="event-area three text-center pt-100 pb-115">
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <div class="section-title">
                        <img src="{{ asset('assets/img/icon/section.png') }}" alt="section-title">
                        <h2>UPCOMMING EVENTS</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4 col-sm-6 col-xs-12">
                    <div class="single-event mb-35">
                        <div class="event-img">
                            <a href="{{ route('event-details') }}"><img src="{{ asset('assets/img/event/event5.jpg') }}" alt="event"></a>
                            <div class="event-date">
                                <h3>20 <span>jun</span></h3>
                            </div>
                        </div>
                        <div class="event-content text-left">
                            <h4><a href="{{ route('event-details') }}">ADVANCE PHP WORKSHOP</a></h4>
                            <ul>
                                <li><span>time:</span> 9.00 AM - 4.45 PM</li>
                                <li><span>venue</span> New Yourk City</li>
                            </ul>
                            <div class="event-content-right">
                                <a class="default-btn" href="{{ route('event-details') }}">join now</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 col-xs-12">
                    <div class="single-event mb-35">
                        <div class="event-img">
                            <a href="{{ route('event-details') }}"><img src="{{ asset('assets/img/event/event6.jpg') }}" alt="event"></a>
                            <div class="event-date">
                                <h3>18 <span>jun</span></h3>
                            </div>
                        </div>
                        <div class="event-content text-left">
                            <h4><a href="{{ route('event-details') }}">learning english history</a></h4>
                            <ul>
                                <li><span>time:</span> 9.00 AM - 4.45 PM</li>
                                <li><span>venue</span> New Yourk City</li>
                            </ul>
                            <div class="event-content-right">
                                <a class="default-btn" href="{{ route('event-details') }}">join now</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 hidden-sm col-xs-12">
                    <div class="single-event mb-35">
                        <div class="event-img">
                            <a href="{{ route('event-details') }}"><img src="{{ asset('assets/img/event/event7.jpg') }}" alt="event"></a>
                            <div class="event-date">
                                <h3>16 <span>jun</span></h3>
                            </div>
                        </div>
                        <div class="event-content text-left">
                            <h4><a href="{{ route('event-details') }}">UI &amp; UX DESIGNER MEETUP</a></h4>
                            <ul>
                                <li><span>time:</span> 9.00 AM - 4.45 PM</li>
                                <li><span>venue</span> New Yourk City</li>
                            </ul>
                            <div class="event-content-right">
                                <a class="default-btn" href="{{ route('event-details') }}">join now</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Event Area End -->
    <!-- Testimonial Area Start -->
    <div class="testimonial-area three pt-110 pb-105 text-center">
        <div class="container">
            <div class="row">
                <div class="testimonial-owl owl-theme owl-carousel">
                    <div class="col-md-8 col-md-offset-2 col-sm-12">
                        <div class="single-testimonial">
                            <div class="testimonial-info">
                                <div class="testimonial-img">
                                    <img src="{{ asset('assets/img/testimonial/testimonial.jpg') }}" alt="testimonial">
                                </div>
                                <div class="testimonial-content">
                                    <p>I must explain to you how all this mistaken idea of denoung pleure and praising pain was born and I will give you a coete account of the system, and expound the actual</p>
                                    <h4>David Morgan</h4>
                                    <h5>Student, CSE</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Testimonial Area End -->
    <!-- Blog Area Start -->
    <div class="blog-area pt-150 pb-150">
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <div class="section-title text-center">
                        <img src="{{ asset('assets/img/icon/section.png') }}" alt="section-title">
                        <h2>LATEST FROM BLOG</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4 col-sm-6 col-xs-12">
                    <div class="single-blog">
                        <div class="blog-img">
                            <a href="{{ route('blog-details') }}"><img src="{{ asset('assets/img/blog/blog1.jpg') }}" alt="blog"></a>
                            <div class="blog-hover">
                                <a href="{{ route('blog-details') }}"><i class="fa fa-link"></i></a>
                            </div>
                        </div>
                        <div class="blog-content">
                            <div class="blog-top">
                                <p>By Alex  /  June 20, 2017  /  <i class="fa fa-comments-o"></i> 4</p>
                            </div>
                            <div class="blog-bottom">
                                <h2><a href="{{ route('blog-details') }}">I must explain to you how all this a mistaken idea </a></h2>
                                <a href="{{ route('blog-details') }}">read more</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 col-xs-12">
                    <div class="single-blog">
                        <div class="blog-img">
                            <a href="{{ route('blog-details') }}"><img src="{{ asset('assets/img/blog/blog2.jpg') }}" alt="blog"></a>
                            <div class="blog-hover">
                                <a href="{{ route('blog-details') }}"><i class="fa fa-link"></i></a>
                            </div>
                        </div>
                        <div class="blog-content">
                            <div class="blog-top">
                                <p>By Alex  /  June 20, 2017  /  <i class="fa fa-comments-o"></i> 4</p>
                            </div>
                            <div class="blog-bottom">
                                <h2><a href="{{ route('blog-details') }}">I must explain to you how all this a mistaken idea </a></h2>
                                <a href="{{ route('blog-details') }}">read more</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 hidden-sm col-xs-12">
                    <div class="single-blog">
                        <div class="blog-img">
                            <a href="{{ route('blog-details') }}"><img src="{{ asset('assets/img/blog/blog3.jpg') }}" alt="blog"></a>
                            <div class="blog-hover">
                                <a href="{{ route('blog-details') }}"><i class="fa fa-link"></i></a>
                            </div>
                        </div>
                        <div class="blog-content">
                            <div class="blog-top">
                                <p>By Alex  /  June 20, 2017  /  <i class="fa fa-comments-o"></i> 4</p>
                            </div>
                            <div class="blog-bottom">
                                <h2><a href="{{ route('blog-details') }}">I must explain to you how all this a mistaken idea </a></h2>
                                <a href="{{ route('blog-details') }}">read more</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Blog Area End -->
    <!-- Subscribe Start -->
    <div class="subscribe-area pt-60 pb-70">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-md-offset-2">
                    <div class="subscribe-content section-title text-center">
                        <h2>subscribe our newsletter</h2>
                        <p>I must explain to you how all this mistaken idea </p>
                    </div>
                    <div class="newsletter-form mc_embed_signup">
                        <form action="" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
                            <div id="mc_embed_signup_scroll" class="mc-form">
                                <input type="email" name="email" class="email" id="mce-EMAIL" placeholder="Enter your e-mail address" required>
                                <button id="mc-embedded-subscribe" class="default-btn" type="submit" name="subscribe"><span>subscribe</span></button>
                            </div>
                        </form>
                        <!-- mailchimp-alerts Start -->
                        <div class="mailchimp-alerts">
                            <div class="mailchimp-submitting"></div><!-- mailchimp-submitting end -->
                            <div class="mailchimp-success"></div><!-- mailchimp-success end -->
                            <div class="mailchimp-error"></div><!-- mailchimp-error end -->
                        </div>
                        <!-- mailchimp-alerts end -->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Subscribe End -->
@endsection
