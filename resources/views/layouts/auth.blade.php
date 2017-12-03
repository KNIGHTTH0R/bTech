<!DOCTYPE html>
<html lang="en">
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

    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('/img/favicon/apple-touch-icon.png') }}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('/img/favicon/favicon-32x32.png') }}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('/img/favicon/favicon-16x16.png') }}">
    <link rel="manifest" href="{{ asset('/img/favicon/manifest.json') }}">
    <link rel="mask-icon" href="{{ asset('/img/favicon/safari-pinned-tab.svg" color="#282d47') }}">
    <link rel="shortcut icon" href="{{ asset('/img/favicon/favicon.ico') }}">
    <meta name="msapplication-config" content="{{ asset('/img/favicon/browserconfig.xml') }}">
    <meta name="theme-color" content="#282d47">

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

<main>
    @yield('main')
</main>

{{-- CSS --}}
@yield('css')
<link rel="stylesheet" href="{{ asset('css/main.css') }}">

{{-- JS --}}
<script src="{{ asset('js/base.js') }}"></script>
@yield('js')

</body>
</html>