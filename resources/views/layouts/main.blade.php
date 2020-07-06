<!doctype html>
<html lang="en">
    <head>
        <title>Курсы разговорного английского языка - TeachHouse</title>
        <!-- meta tags section start -->
        @include('layouts.meta-tags')
        <!-- meta tags section end -->
        <!-- css section start -->
        @include('layouts.css-header')
        <!-- css section end -->
        <!-- header scripts section start -->
        @include('layouts.scripts-header')
        <!-- header scripts section end -->
    </head>
    <body>
        <!-- header section start -->
        @include('layouts.header')
		<!-- header section end -->
        @yield('content')
        <!-- footer section start -->
        @include('layouts.footer')
        <!-- footer section end -->
        <!-- footer scripts section start -->
        @include('layouts.scripts-footer')
        <!-- footer scripts section end -->
    </body>
</html>
