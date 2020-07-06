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
                                <h2>event / details</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Banner Area End -->
    <!-- Event Details Start -->
    <div class="event-details-area blog-area pt-150 pb-140">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <div class="event-details">
                        <div class="event-details-img">
                            <img src="img/event/event-details.jpg" alt="event-details">
                            <div class="event-date">
                                <h3>20 <span>jun</span></h3>
                            </div>
                        </div>
                        <div class="event-details-content">
                            <h2>ADVANCE WED DEVELOPMENT WORKSHOP</h2>
                            <ul>
                                <li><span>time : </span>9:30am - 4:45pm</li>
                                <li><span>venue : </span>Cristal Centre, 254 New Yourk</li>
                            </ul>
                            <p>I must explain to you how all this a mistaken idea of denouncing great explorer of the rut the is lder of human happiness pcias unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit asnatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui </p>
                            <p>I must explain to you how all this a mistaken idea of denouncing great explorer of the rut the is lder of human happiness pcias unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem </p>
                            <p>I must explain to you how all this a mistaken idea of denouncing great explorer of the rut the is lder of human happiness pcias unde omnis iste natus error sit voluptatem accusantium doloremque laudantium</p>
                            <div class="speakers-area fix">
                                <h4>speakers</h4>
                                <div class="single-speaker">
                                    <div class="speaker-img">
                                        <img src="img/event/speaker1.jpg" alt="speaker">
                                    </div>
                                    <div class="speaker-name">
                                        <h5>Anthony Smith</h5>
                                        <p>CEO, Hastech </p>
                                    </div>
                                </div>
                                <div class="single-speaker">
                                    <div class="speaker-img">
                                        <img src="img/event/speaker2.jpg" alt="speaker">
                                    </div>
                                    <div class="speaker-name">
                                        <h5>Lucy Rose</h5>
                                        <p>Developer, STD </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="reply-area">
                            <h3>LEAVE A REPLY</h3>
                            <p>I must explain to you how all this a mistaken idea of ncing great explorer of the rut<br> the is lder of human happinescias unde omnis iste natus error sit volptatem </p>
                            <form id="contact-form" action="mail.php" method="post">
                                <div class="row">
                                    <div class="col-md-12">
                                        <p>Name</p>
                                        <input type="text" name="name" id="name">
                                    </div>
                                    <div class="col-md-12">
                                        <p>Email</p>
                                        <input type="text" name="email" id="email">
                                    </div>
                                    <div class="col-md-12">
                                        <p>Subject</p>
                                        <input type="text" name="subject" id="subject">
                                        <p>Massage</p>
                                        <textarea name="message" id="message" cols="15" rows="10"></textarea>
                                    </div>
                                </div>
                                <a class="reply-btn" href="#" data-text="send"><span>send message</span></a>
                                <p class="form-messege"></p>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="blog-sidebar right">
                        <div class="single-blog-widget mb-50">
                            <h3>search</h3>
                            <div class="blog-search">
                                <form id="search" action="#">
                                    <input type="search" placeholder="Search..." name="search" />
                                    <button type="submit">
                                        <span><i class="fa fa-search"></i></span>
                                    </button>
                                </form>
                            </div>
                        </div>
                        <div class="single-blog-widget mb-50">
                            <h3>categories</h3>
                            <ul>
                                <li><a href="#">CSS Engineering (10)</a></li>
                                <li><a href="#">Political Science (12)</a></li>
                                <li><a href="#">Micro Biology (08)</a></li>
                                <li><a href="#">HTML5 &amp; CSS3 (15)</a></li>
                                <li><a href="#">Web Design (20)</a></li>
                                <li><a href="#">PHP (23)</a></li>
                            </ul>
                        </div>
                        <div class="single-blog-widget mb-50">
                            <div class="single-blog-banner">
                                <a href="blog-details.html" id="blog"><img src="img/blog/blog-img.jpg" alt="blog"></a>
                                <h2>best<br> eductaion<br> theme</h2>
                            </div>
                        </div>
                        <div class="single-blog-widget mb-50">
                            <h3>latest post</h3>
                            <div class="single-post mb-30">
                                <div class="single-post-img">
                                    <a href="blog-details.html"><img src="img/post/post1.jpg" alt="post">
                                        <div class="blog-hover">
                                            <i class="fa fa-link"></i>
                                        </div>
                                    </a>
                                </div>
                                <div class="single-post-content">
                                    <h4><a href="blog-details.html">English Language Course for you</a></h4>
                                    <p>By Alex  /  June 20, 2017</p>
                                </div>
                            </div>
                            <div class="single-post mb-30">
                                <div class="single-post-img">
                                    <a href="blog-details.html"><img src="img/post/post2.jpg" alt="post">
                                        <div class="blog-hover">
                                            <i class="fa fa-link"></i>
                                        </div>
                                    </a>
                                </div>
                                <div class="single-post-content">
                                    <h4><a href="blog-details.html">Advance Web Design and Develop</a></h4>
                                    <p>By Alex  /  June 20, 2017</p>
                                </div>
                            </div>
                            <div class="single-post">
                                <div class="single-post-img">
                                    <a href="blog-details.html"><img src="img/post/post3.jpg" alt="post">
                                        <div class="blog-hover">
                                            <i class="fa fa-link"></i>
                                        </div>
                                    </a>
                                </div>
                                <div class="single-post-content">
                                    <h4><a href="blog-details.html">English Language Course for you</a></h4>
                                    <p>By Alex  /  June 20, 2017</p>
                                </div>
                            </div>
                        </div>
                        <div class="single-blog-widget">
                            <h3>tags</h3>
                            <div class="single-tag">
                                <a href="blog-details.html" class="mr-10 mb-10">course</a>
                                <a href="blog-details.html" class="mr-10 mb-10">education</a>
                                <a href="blog-details.html" class="mb-10">teachers</a>
                                <a href="blog-details.html" class="mr-10">learning</a>
                                <a href="blog-details.html" class="mr-10">university</a>
                                <a href="blog-details.html">events</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Event Details End -->
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
