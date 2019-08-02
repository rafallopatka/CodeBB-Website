<!DOCTYPE html>
<!--[if IE 8]> <html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="ie8 no-js"> <![endif]-->
<!--[if IE 9]> <html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="ie9 no-js"> <![endif]-->
<!--[if !IE]><!-->
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="no-js">
<!--<![endif]-->
<head>
@include('layout.partials.head')
</head>
<body class="page-header-fixed">
    @include('layout.partials.nav')
    @include('layout.partials.header')
    <div class="page-content">
        @yield('content')
    </div>
    @include('layout.partials.footer')
    @include('layout.partials.footer-scripts')

</body>
</html>