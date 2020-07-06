@extends('layouts.main')
@section('content')
    <!-- Banner Area Start -->
    <div class="banner-area-wrapper">
        <div class="banner-area text-center">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12">
                        <div class="banner-content-wrapper">
                            <div class="banner-content">
                                <h2>about us</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Banner Area End -->
    <!-- About Start -->
    <div class="about-area pt-145 pb-155">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-sm-6">
                    <div class="about-content">
                        <h2>WELCOME TO <span>TeachHouse</span></h2>
                        <p>I must explain to you how all this mistaken idea of denouncing pleure and prsing pain was born and I will give you a complete account of the system, and expound the actual teachings  the master-builder of humanit happiness</p>
                        <p class="hidden-sm">I must explain to you how all this mistaken idea of denouncing pleure and prsing pain was born and I will give you a complete account of the system</p>
                        <a class="default-btn" href="#">view courses</a>
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
    <!-- Teacher Start -->
    <div class="teacher-area pb-150">
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <div class="section-title text-center">
                        <img src="{{ asset('assets/img/icon/section.png') }}" alt="title">
                        <h2>meet our teacher</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-3 col-sm-4 col-xs-12">
                    <div class="single-teacher">
                        <div class="single-teacher-img">
                            <a href="{{ route('teacher-details') }}"><img src="{{ asset('assets/img/teacher/teacher2.jpg') }}" alt="teacher"></a>
                        </div>
                        <div class="single-teacher-content text-center">
                            <h2><a href="{{ route('teacher-details') }}">Andy Fedorchuk</a></h2>
                            <h4>English native speaker</h4>
                            <ul>
                                <li><a href="https://www.facebook.com/devitems/?ref=bookmarks"><i class="zmdi zmdi-facebook"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Teacher End -->
    <!-- Testimonial Area Start -->
    <div class="testimonial-area pt-110 pb-105 text-center">
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
    <!-- Notice Start -->
    <section class="notice-area two pt-140 pb-100">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-sm-6 col-xs-12">
                    <div class="notice-right-wrapper mb-25 pb-25">
                        <h3>TAKE A VIDEO TOUR</h3>
                        <div class="notice-video">
                            <div class="video-icon video-hover">
                                <a class="video-popup" href="https://www.youtube.com/watch?v=to6Ghf8UL7o">
                                    <i class="zmdi zmdi-play"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-sm-6 col-xs-12">
                    <div class="notice-left-wrapper">
                        <h3>notice board</h3>
                        <div class="notice-left">
                            <div class="single-notice-left mb-23 pb-20">
                                <h4>5, June 2017</h4>
                                <p>I must explain to you how all this mistaken idea of denouncing plasure and praising pain was born and I will give you a complete </p>
                            </div>
                            <div class="single-notice-left hidden-sm mb-23 pb-20">
                                <h4>4, June 2017</h4>
                                <p>I must explain to you how all this mistaken idea of denouncing plasure and praising pain was born and I will give you a complete </p>
                            </div>
                            <div class="single-notice-left pb-70">
                                <h4>3, June 2017</h4>
                                <p>I must explain to you how all this mistaken idea of denouncing plasure and praising pain was born and I will give you a complete </p>
                            </div>
                            <div class="single-notice-left mb-23 pb-20">
                                <h4>5, June 2017</h4>
                                <p>I must explain to you how all this mistaken idea of denouncing plasure and praising pain was born and I will give you a complete </p>
                            </div>
                            <div class="single-notice-left hidden-sm mb-23 pb-20">
                                <h4>4, June 2017</h4>
                                <p>I must explain to you how all this mistaken idea of denouncing plasure and praising pain was born and I will give you a complete </p>
                            </div>
                            <div class="single-notice-left pb-70">
                                <h4>3, June 2017</h4>
                                <p>I must explain to you how all this mistaken idea of denouncing plasure and praising pain was born and I will give you a complete </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Notice End -->
    <!-- Subscribe Start -->
    <div class="subscribe-area pt-58 pb-70">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-md-offset-2">
                    <div class="subscribe-content section-title text-center">
                        <h2>subscribe our newsletter</h2>
                        <p>I must explain to you how all this mistaken idea </p>
                    </div>
                    <div class="newsletter-form mc_embed_signup">
                        <form action="http://devitems.us11.list-manage.com/subscribe/post?u=6bbb9b6f5827bd842d9640c82&amp;id=05d85f18ef" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
                            <div id="mc_embed_signup_scroll" class="mc-form">
                                <input type="email" value="" name="EMAIL" class="email" id="mce-EMAIL" placeholder="Enter your e-mail address" required>
                                <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
                                <div class="mc-news" aria-hidden="true"><input type="text" name="b_6bbb9b6f5827bd842d9640c82_05d85f18ef" tabindex="-1" value=""></div>
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
