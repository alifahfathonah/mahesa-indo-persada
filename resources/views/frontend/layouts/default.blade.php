<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
	@include('frontend.includes.head')
</head>
<body class="inner-pages homepage-4">
    <!-- Wrapper -->
    <div id="wrapper" class="int_main_wraapper">

		@include('frontend.includes.header')

		@yield('content')

        @include('frontend.includes.footer', ['warna' => ''])
        @include('frontend.includes.page-js')
    </div>
</body>
</html>
