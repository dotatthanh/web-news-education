<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title')</title>

    <meta content="Premium Multipurpose Admin & Dashboard Template" name="description">
    <meta content="Themesbrand" name="author">
    <!-- App favicon -->
    {{-- <link rel="shortcut icon" href="{{ asset('images/favicon.ico') }}"> --}}

    @yield('css')
    @stack('css')


    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('css/font-awesome.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('css/animate.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('css/reset.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('scss/style.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('scss/media.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('slick/slick.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('css/select2.min.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('jquery-fancybox/dist/jquery.fancybox.min.css') }}" type="text/css">
</head>
<body class="bg-body">
    <header class="header">
        <div class="container">
            <div class="row align-items-center justify-content-between">
                <div class="col-lg-3 col-md-5 col-sm-6 col-8">
                    <a href="{{ route('web.index') }}" title="" class="c-img logo">
                        <img src="{{ asset('images/logo.png') }}" alt="">
                    </a>
                </div>
                <div class="col-lg-auto menu">
                    <ul>
                        <li><a href="{{ route('web.index') }}" title="">{{ __('messages.menu.home') }}</a></li>
                        <li><a href="{{ route('web.ads') }}" title="">{{ __('messages.menu.advertise') }}</a></li>
                        <li><a href="javascript:void(0)" title="">{{ __('messages.title') }}</a>
                            <ul>
                                @foreach ($all_categories as $category_news)
                                    <li><a href="{{ route('web.category-news', $category_news->id) }}" title="">{{ $category_news->name }}</a></li>
                                @endforeach
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </header>

    <button class="btn-bars"><i class="fa fa-bars" aria-hidden="true"></i></button>

    <div class="menu-mobile">
        <ul>
            <li><a href="{{ route('web.index') }}" title="">{{ __('messages.menu.home') }}</a></li>
            <li><a href="{{ route('web.ads') }}" title="">{{ __('messages.menu.advertise') }}</a></li>
            <li><a href="javascript:void(0)" title="">{{ __('messages.title') }}</a>
                <ul>
                    @foreach ($all_categories as $category_news)
                        <li><a href="{{ route('web.category-news', $category_news->id) }}" title="">{{ $category_news->name }}</a></li>
                    @endforeach
                </ul>
            </li>
        </ul>
        <div class="info-contact">
            <p>{{ __('messages.info.web_name') }}</p>
            <p>{{ __('messages.info.address') }}</p>
            <p>{{ __('messages.info.province') }}</p>
            <p>{{ __('messages.info.country') }}</p>
            <p><a href="tel:0564654654" title="">{{ __('messages.info.phone') }}</a></p>
        </div>
    </div>

    @yield('content')


    <div class="email">
        <a href="mailto:abc@gmail.com" title=""><i class="fa fa-envelope-o" aria-hidden="true"></i>EMAIL</a>
    </div>

    <button class="back-to-top"><i class="fa fa-chevron-up" aria-hidden="true"></i></button>

    <script src="{{ asset('js/jquery-2.2.1.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('js/script.js') }}"></script>
    <script src="{{ asset('slick/slick.js') }}"></script>
    <script src="{{ asset('js/select2.min.js') }}"></script>
    <script src="{{ asset('jquery-fancybox/dist/jquery.fancybox.min.js') }}"></script>

    <script type="text/javascript">
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

      // add class paginate theme
      $('ul.pagination').addClass('pagination-rounded justify-content-center mt-4 mb-4');

      // toastr noti
        @if(Session::has('alert-success'))
            Command: toastr["success"]("{{ Session::get('alert-success') }}")

            toastr.options = {
                "closeButton": false,
                "debug": false,
                "newestOnTop": false,
                "progressBar": false,
                "positionClass": "toast-top-right",
                "preventDuplicates": false,
                "onclick": null,
                "showDuration": 300,
                "hideDuration": 1000,
                "timeOut": 0,
                "extendedTimeOut": 1000,
                "showEasing": "swing",
                "hideEasing": "linear",
                "showMethod": "fadeIn",
                "hideMethod": "fadeOut"
            }
        @endif

        @if(Session::has('alert-error'))
        Command: toastr["error"]("{{ Session::get('alert-error') }}")

        toastr.options = {
            "closeButton": false,
            "debug": false,
            "newestOnTop": false,
            "progressBar": false,
            "positionClass": "toast-top-right",
            "preventDuplicates": false,
            "onclick": null,
            "showDuration": 300,
            "hideDuration": 1000,
            "timeOut": 5000,
            "extendedTimeOut": 1000,
            "showEasing": "swing",
            "hideEasing": "linear",
            "showMethod": "fadeIn",
            "hideMethod": "fadeOut"
        }
        @endif
    </script>

    @yield('js')
    @stack('js')
</body>
</html>