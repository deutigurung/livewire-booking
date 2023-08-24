<!DOCTYPE html>
<html lang="en"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>The River</title>
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="description" content="The River template project">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="{{ asset('front/css/bootstrap.min.css') }}">
<link href="{{ asset('front/css/font-awesome.min.css') }}" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="{{ asset('front/css/owl.carousel.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('front/css/owl.theme.default.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('front/css/animate.css') }}">
<link href="{{ asset('front/css/jquery-ui.css') }}" rel="stylesheet" type="text/css">
<link href="{{ asset('front/css/colorbox.css') }}" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="{{ asset('front/css/main_styles.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('front/css/responsive.css') }}">
@yield('style')
</head>
<body>
	<div class="parallax-mirror" style="visibility: hidden; z-index: -100; position: fixed; top: 0px; left: 0px; overflow: hidden; height: 719.297px; width: 1349px;">
		<img class="parallax-slider" src="{{ asset('front/img/testimonials.jpg') }}" style="position: absolute; height: 706px; width: 1487px; max-width: none;">
    </div>

    <div class="super_container">

        @include('front.includes.header')

        @yield('content')

        @include('front.includes.footer')

    </div>
    @include('front.includes.foot')
    @yield('js')
</body>
</html>