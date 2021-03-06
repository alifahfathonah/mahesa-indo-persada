<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="description" content="property">
    <meta name="author" content="PT Mahesa Indo Persada">
    <title>P.T. Mahesa Indo Persada</title>
    <!-- FAVICON -->
    <link rel="shortcut icon" type="image/x-icon" href="/assets/findhouse/images/logo-only.png">
    <link rel="stylesheet" href="/assets/findhouse/css//jquery-ui.css">
    <!-- GOOGLE FONTS -->
    <link href="https://fonts.googleapis.com/css?family=Lato:300,300i,400,400i%7CMontserrat:600,800" rel="stylesheet">
    <!-- FONT AWESOME -->
    <link rel="stylesheet" href="/assets/findhouse/css/fontawesome-all.min.css">
    <link rel="stylesheet" href="/assets/findhouse/css/font-awesome.min.css">
    <!-- Slider Revolution CSS Files -->
    <link rel="stylesheet" href="/assets/findhouse/revolution/css/settings.css">
    <link rel="stylesheet" href="/assets/findhouse/revolution/css/layers.css">
    <link rel="stylesheet" href="/assets/findhouse/revolution/css/navigation.css">
    <!-- ARCHIVES CSS -->
    <link rel="stylesheet" href="/assets/findhouse/css/slider-home18.css">
    <link rel="stylesheet" href="/assets/findhouse/css/search.css">
    <link rel="stylesheet" href="/assets/findhouse/css/animate.css">
    <link rel="stylesheet" href="/assets/findhouse/css/swiper.min.css">
    <link rel="stylesheet" href="/assets/findhouse/css/magnific-popup.css">
    <link rel="stylesheet" href="/assets/findhouse/css/lightcase.css">
    <link rel="stylesheet" href="/assets/findhouse/css/owl.carousel.min.css">
    <link rel="stylesheet" href="/assets/findhouse/css/bootstrap.css">
    <link rel="stylesheet" href="/assets/findhouse/css/menu.css">
    <link rel="stylesheet" href="/assets/findhouse/css/slick.css">
    <link rel="stylesheet" href="/assets/findhouse/css/styles.css">
    <link rel="stylesheet" id="color" href="/assets/findhouse/css/colors/light-black.css">

    @stack('css')
</head>
<body class="int_white_bg h19">
    <!-- Wrapper -->
    <div id="wrapper" class="int_main_wraapper">
		@yield('content')

        @include('frontend.includes.footer', ['warna' => 'bg-white-2'])
    </div>
    @include('frontend.includes.page-js')
</body>
</html>
