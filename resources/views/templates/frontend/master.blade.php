<?php
$page_attr = (object) [
    'title' => isset($page_attr['title']) ? $page_attr['title'] : '',
    'description' => isset($page_attr['description']) ? $page_attr['description'] : settings()->get(set_front('meta.description')),
    'keywords' => isset($page_attr['keywords']) ? $page_attr['keywords'] : settings()->get(set_front('meta.keyword')),
    'author' => isset($page_attr['author']) ? $page_attr['author'] : settings()->get(set_front('meta.author')),
    'image' => isset($page_attr['image']) ? $page_attr['image'] : asset(settings()->get(set_front('meta.image'))),
    'navigation' => isset($page_attr['navigation']) ? $page_attr['navigation'] : false,
    'loader' => isset($page_attr['loader']) ? $page_attr['loader'] : settings()->get(set_front('app.preloader')),
    'breadcrumbs' => isset($page_attr['breadcrumbs']) ? (is_array($page_attr['breadcrumbs']) ? $page_attr['breadcrumbs'] : false) : false,
    'url' => isset($page_attr['url']) ? $page_attr['url'] : url(''),
    'type' => isset($page_attr['type']) ? $page_attr['type'] : 'website',
    'periode_id' => isset($page_attr['periode_id']) ? $page_attr['periode_id'] : false,
];
$page_attr_title = ($page_attr->title == '' ? '' : $page_attr->title . ' | ') . (env('APP_NAME') ?? '');
$search_master_key = isset($_GET['search']) ? $_GET['search'] : '';

$getSosmed_val = get_sosmed();
$footerInstagram_val = footer_instagram();
$notifikasi = notif_depan_atas();
?>
<!DOCTYPE html>
<html lang="en-US">

<head>
    <!-- Favicon -->
    <link rel="icon" href="{{ asset('favicon/favicon.ico') }}">
    <link rel="apple-touch-icon" sizes="57x57" href="{{ asset('favicon/apple-icon-57x57.png') }}">
    <link rel="apple-touch-icon" sizes="60x60" href="{{ asset('favicon/apple-icon-60x60.png') }}">
    <link rel="apple-touch-icon" sizes="72x72" href="{{ asset('favicon/apple-icon-72x72.png') }}">
    <link rel="apple-touch-icon" sizes="76x76" href="{{ asset('favicon/apple-icon-76x76.png') }}">
    <link rel="apple-touch-icon" sizes="114x114" href="{{ asset('favicon/apple-icon-114x114.png') }}">
    <link rel="apple-touch-icon" sizes="120x120" href="{{ asset('favicon/apple-icon-120x120.png') }}">
    <link rel="apple-touch-icon" sizes="144x144" href="{{ asset('favicon/apple-icon-144x144.png') }}">
    <link rel="apple-touch-icon" sizes="152x152" href="{{ asset('favicon/apple-icon-152x152.png') }}">
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('favicon/apple-icon-180x180.png') }}">
    <link rel="icon" type="image/png" sizes="192x192" href="{{ asset('favicon/android-icon-192x192.png') }}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('favicon/favicon-32x32.png') }}">
    <link rel="icon" type="image/png" sizes="96x96" href="{{ asset('favicon/favicon-96x96.png') }}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('favicon/favicon-16x16.png') }}">
    <link rel="manifest" href="{{ asset('favicon/manifest.json') }}">
    <meta name="msapplication-TileColor" content="#fff">
    <meta name="theme-color" content="#0191D7">
    <meta name="msapplication-TileImage" content="{{ asset('favicon/icon-144x144.png') }}">

    <!-- META DATA -->
    <meta charset="UTF-8">
    <meta name='viewport' content='width=device-width, initial-scale=1.0, user-scalable=0'>
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <!-- SEO -->
    <!-- Primary Meta Tags -->
    <title>{{ $page_attr_title }}</title>
    <meta name="description" content="{{ $page_attr->description }}">
    <meta name="author" content="{{ $page_attr->author }}">
    <meta name="keywords" content="{{ $page_attr->keywords }}">

    <!-- Open Graph / Facebook -->
    <meta property="og:url" content="{{ $page_attr->url }}">
    <meta property="og:type" content="{{ $page_attr->type }}">
    <meta property="og:title" content="{{ $page_attr_title }}">
    <meta property="og:description" content="{{ $page_attr->description }}">
    <meta property="og:image" content="{{ $page_attr->image }}">

    <!-- Twitter -->
    <meta name="twitter:card" content="summary_large_image">
    <meta property="twitter:url" content="{{ $page_attr->url }}">
    <meta name="twitter:title" content="{{ $page_attr_title }}">
    <meta name="twitter:description" content="{{ $page_attr->description }}">
    <meta name="twitter:image" content="{{ $page_attr->image }}">

    <!-- Google / Search Engine Tags -->
    <meta itemprop="name" content="{{ $page_attr_title }}">
    <meta itemprop="description" content="{{ $page_attr->description }}">
    <meta itemprop="image" content="{{ $page_attr->image }}">

    <!-- STYLES -->
    <link rel="stylesheet" href="{{ asset('assets/templates/frontend/css/bootstrap.min.css') }}" type="text/css"
        media="all">
    <link rel="stylesheet" href="{{ asset('assets/templates/frontend/css/all.min.css') }}" type="text/css"
        media="all">
    <link rel="stylesheet" href="{{ asset('assets/templates/frontend/css/slick.css') }}" type="text/css"
        media="all">
    <link rel="stylesheet" href="{{ asset('assets/templates/frontend/css/simple-line-icons.css') }}" type="text/css"
        media="all">
    <link rel="stylesheet" href="{{ asset('assets/templates/frontend/css/style.css') }}" type="text/css"
        media="all">

    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    <style>
        .lds-ellipsis {
            display: inline-block;
            position: relative;
            width: 80px;
            height: 80px;
        }

        .lds-ellipsis div {
            position: absolute;
            top: 33px;
            width: 13px;
            height: 13px;
            border-radius: 50%;
            background: #0092DF;
            animation-timing-function: cubic-bezier(0, 1, 1, 0);
        }

        .lds-ellipsis div:nth-child(1) {
            left: 8px;
            animation: lds-ellipsis1 0.6s infinite;
        }

        .lds-ellipsis div:nth-child(2) {
            left: 8px;
            animation: lds-ellipsis2 0.6s infinite;
        }

        .lds-ellipsis div:nth-child(3) {
            left: 32px;
            animation: lds-ellipsis2 0.6s infinite;
        }

        .lds-ellipsis div:nth-child(4) {
            left: 56px;
            animation: lds-ellipsis3 0.6s infinite;
        }

        @keyframes lds-ellipsis1 {
            0% {
                transform: scale(0);
            }

            100% {
                transform: scale(1);
            }
        }

        @keyframes lds-ellipsis3 {
            0% {
                transform: scale(1);
            }

            100% {
                transform: scale(0);
            }
        }

        @keyframes lds-ellipsis2 {
            0% {
                transform: translate(0, 0);
            }

            100% {
                transform: translate(24px, 0);
            }
        }
    </style>

    @yield('stylesheet')
</head>

<body>
    @if ($page_attr->loader)
        <!-- preloader -->
        <div id="preloader">
            <div class="d-flex justify-content-center align-items-center flex-column" style="height: 90vh;">
                <img src="{{ asset(settings()->get(set_front('app.foto_light_mode'))) }}" style="max-width: 80px;"
                    alt="logo" />
                <div class="ms-2 lds-ellipsis">
                    <div></div>
                    <div></div>
                    <div></div>
                    <div></div>
                </div>
            </div>
        </div>
    @endif

    @if ($notifikasi)
        @foreach ($notifikasi as $v)
            <div class="alert alert-secondary alert-dismissible fade show" role="alert">
                {{ $v->deskripsi }}
                @if ($v->link)
                    <a href="{{ $v->link }}" class="text-purple-1 fw-bold">{{ $v->link_nama }}</a>
                @endif
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">

                </button>
            </div>
        @endforeach
    @endif

    <br>

    {{-- header template --}}
    @include('templates.frontend.body.header', [
        'list_sosmed' => $getSosmed_val,
        'page_attr_navigation' => $page_attr->navigation,
    ])

    @yield('udnder_header')

    <!-- section main content -->
    <div class="w-100 py-5 mb-5 mt-0">
        <section class="main-content mt-0">
            @yield('content', '')
        </section>
    </div>

    @include('templates.frontend.body.instagram', [
        'footerInstagram' => $footerInstagram_val,
    ])

    @include('templates.frontend.body.footer', [
        'list_sosmed' => $getSosmed_val,
    ])

    </div><!-- end site wrapper -->

    <!-- search popup area -->
    <div class="search-popup">
        <!-- close button -->
        <button type="button" class="btn-close" aria-label="Close"></button>
        <!-- content -->
        <div class="search-content">
            <div class="text-center">
                <h3 class="mb-4 mt-0">Press ESC to close</h3>
            </div>
            <!-- form -->
            <form class="d-flex search-form" action="{{ url('anggota') }}" method="GET">
                <input class="form-control me-2" type="search" name="search"
                    placeholder="Search and press enter ..." aria-label="Search" value="{{ $search_master_key }}">
                <button class="btn btn-default btn-lg" type="submit"><i class="icon-magnifier"></i></button>
            </form>
        </div>
    </div>

    {{-- menu sidebar --}}
    @include('templates.frontend.body.sidebar', [
        'list_sosmed' => $getSosmed_val,
        'page_attr_navigation' => $page_attr->navigation,
    ])

    <!-- JAVA SCRIPTS -->
    <script src="{{ asset('assets/templates/frontend/js/jquery.min.js') }}"></script>
    <script src="{{ asset('assets/templates/frontend/js/popper.min.js') }}"></script>
    <script src="{{ asset('assets/templates/frontend/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('assets/templates/frontend/js/slick.min.js') }}"></script>
    <script src="{{ asset('assets/templates/frontend/js/jquery.sticky-sidebar.min.js') }}"></script>
    <script src="{{ asset('assets/templates/frontend/js/custom.js') }}"></script>
    @yield('javascript')

    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-FHJNB91XME"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'G-FHJNB91XME');
    </script>
</body>

</html>
