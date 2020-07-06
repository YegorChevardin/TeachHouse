<header class="top">
    <div class="header-top">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-sm-8 col-xs-12">
                    <div class="header-top-left">
                        <p>
                            besfor16@gmail.com
                        </p>
                    </div>
                </div>
                <div class="col-md-4 col-sm-4 col-xs-12">
                    <div class="header-top-right text-right">
                        <ul>
                            <li><a href="{{ route('login') }}">Войти</a></li>
                            <li><a href="{{ route('register') }}">Зарегитсрироватся</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="header-area two header-sticky">
        <div class="container">
            <div class="row">
                <div class="col-md-3 col-sm-3 col-xs-6">
                    <div class="logo">
                        <a href="{{ route('/') }}"><img src="{{ asset('assets/img/logo/logo2.png') }}" alt="TeachHouse" /></a>
                    </div>
                </div>
                <div class="col-md-9 col-sm-9 col-xs-6">
                    <div class="content-wrapper text-right">
                        <!-- menu section start -->
                        <div class="main-menu">
                            <nav>
                                <ul>
                                    <li><a href="{{ route('/') }}">Главная</a></li>
                                    <li><a href="{{ route('about') }}">О нас</a></li>
                                    <li><a href="{{ route('courses') }}">Курсы</a></li>
                                    <li><a href="{{ route('events') }}">События</a></li>
                                    <li><a href="{{ route('blog') }}">Блог</a></li>
                                    <li class="hidden-sm"><a href="{{ route('teachers') }}">Учителя</a></li>
                                    <li><a href="{{ route('contact') }}">Контакты</a></li>
                                </ul>
                            </nav>
                        </div>
                        <!--Search Form Start-->
                        <div class="search-btn">
                            <ul data-toggle="dropdown" class="header-search search-toggle">
                                <li class="search-menu">
                                    <i class="fa fa-search"></i>
                                </li>
                            </ul>
                            <div class="search">
                                <div class="search-form">
                                    <form id="search-form" action="#">
                                        @csrf
                                        <input type="search" placeholder="Поиск по сайту" name="search" />
                                        <button type="submit">
                                            <span><i class="fa fa-search"></i></span>
                                        </button>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <!--End of Search Form-->
                        <!-- Main Menu End -->
                    </div>
                </div>
                <div class="col-xs-12">
                    <div class="mobile-menu hidden-lg hidden-md hidden-sm"></div>
                </div>
            </div>
        </div>
    </div>
</header>
