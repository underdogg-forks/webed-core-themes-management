<!DOCTYPE html>
<!--[if IE 8]>
<html lang="en" class="ie8 no-js"> <![endif]-->
<!--[if IE 9]>
<html lang="en" class="ie9 no-js"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en">
<!--<![endif]-->
<head>
    <title>{{ $pageTitle or '' }} - {{ get_settings('site_title', 'WebEd') ?: 'WebEd' }}</title>

    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">

    {!! seo()->render() !!}

    <base href="{{ asset('') }}">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"
          integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    @php do_action('front_header_css') @endphp

    @yield('css')

    @php do_action('front_header_js') @endphp
</head>

<body class="{{ $bodyClass or '' }} @php do_action('front_body_class') @endphp">

<div class="wrapper" id="site_wrapper">
    @php do_action('front_before_header_wrapper_content') @endphp

    <header class="header" id="header">
        @include('webed-theme::front._partials.header')
    </header>

    @php do_action('front_before_main_wrapper_content') @endphp

    <main class="main" id="main">
        @yield('content')
    </main>

    @php do_action('front_before_footer_wrapper_content') @endphp

    <footer class="footer" id="footer">
        @include('webed-theme::front._partials.footer')
    </footer>

    @php do_action('front_bottom_wrapper_content') @endphp
</div>

@php do_action('front_bottom_content') @endphp

<!--[if lt IE 9]>
<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->

<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"
        integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa"
        crossorigin="anonymous"></script>

@php do_action('front_footer_js') @endphp

@yield('js')

@yield('js-init')

</body>

</html>
