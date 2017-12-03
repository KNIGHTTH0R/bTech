<!DOCTYPE html>
<html lang="en" class="system">
<head>

    <meta charset="utf-8">

    <title>
        @hasSection('title')
            @yield('title')
        @endif
        | bTech
    </title>

    @hasSection('description')
        @yield('description')
    @else
        <meta name="description" content="Web educational service with articles, tasks and collections of articles, tools and videos">
    @endif

    @yield('head')

    <meta http-equiv="X-UA-Compatible" content="IE=11">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <!-- TODO: Add favicon -->

    <!-- Chrome, Firefox OS and Opera -->
    <meta name="theme-color" content="#6c9afd">
    <!-- Windows Phone -->
    <meta name="msapplication-navbutton-color" content="#6c9afd">
    <!-- iOS Safari -->
    <meta name="apple-mobile-web-app-status-bar-style" content="#6c9afd">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <script>
        window.Laravel = <?php echo json_encode(['csrfToken' => csrf_token()]); ?>

            window.callIfjQueryLoad = function(callback) {
            if (window.jQuery) {
                if (typeof callback == 'function') {
                    callback();
                }
            } else {
                var interval = setInterval(function() {
                    if (window.jQuery) {
                        if (typeof callback == 'function') {
                            callback();
                        }
                        clearInterval(interval);
                    }
                }, 20);
            }
        }
    </script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body>

<div class="system-body-wrapper">

    @include('layouts.chunks.user-sidebar')

    <main class="content left-sidebar">

        @include('layouts.chunks.user-header')

        @yield('main')

    </main>

</div>

{{-- CSS --}}
<link rel="stylesheet" href="{{ asset('css/main.css') }}">
@yield('css')

{{-- JS --}}
<script src="{{ asset('js/base.js') }}"></script>
@yield('js')

</body>
</html>