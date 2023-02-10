<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Gentlemen Premium Tailor</title>
    <!-- fav icon -->
    <link rel="icon" type="image/x-icon" href="{{asset('assets/images/home/mob-logo.png')}}">
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />

    <!-- bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css"
          rel="stylesheet">
    <script
        src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"></script>

    {{--Icons--}}
    <link rel="stylesheet"
          href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>

    {{--Swiper--}}
    <link
        rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css"
    />
    <script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>
    {{--Axios--}}
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
    <!-- Default Style -->
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <link rel="stylesheet" href="{{asset('css/home.css')}}">

    <script src="https://unpkg.com/sweetalert@2.1.2/dist/sweetalert.min.js"></script>
  <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script src="{{ asset('js/front.js') }}"></script>
    @stack('styles')
</head>
<body>
@yield('content')
@stack('script_tag')
@stack('script_fabric_infinite')
@stack('script_jacket_infinite')
@stack('script_pant_infinite')
@stack('script_vest_infinite')
@stack('script_suit_tip_infinite')
</body>

</html>
@yield('js')
@stack('zh-js')

@stack('whishlist-scripts')
@stack('whishlist-scripts-ready-to-wear')
@stack('whishlist-scripts-additional')
@stack('whishlist-nav')

@stack('desktop-paypal')
@stack('mobile-paypal')


