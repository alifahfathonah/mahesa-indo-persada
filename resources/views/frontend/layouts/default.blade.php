<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
	@include('frontend.includes.head')
</head>
<body class="int_white_bg h19">
    <!-- Wrapper -->
    <div id="wrapper" class="int_main_wraapper">

		@include('frontend.includes.header')

		@yield('content')

        @include('frontend.includes.footer')
        @include('frontend.includes.page-js')
    </div>
</body>
</html>
