<!DOCTYPE HTML>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">
    <meta name="viewport"
        content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1, viewport-fit=cover" />
    <title>Azures BootStrap</title>
    <link rel="stylesheet" type="text/css" href="{{ url('/azure') }}/styles/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="{{ url('/azure') }}/styles/style.css">
    <link
        href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900|Roboto:300,300i,400,400i,500,500i,700,700i,900,900i&amp;display=swap"
        rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{ url('/azure') }}/fonts/css/fontawesome-all.min.css">
    <link rel="manifest" href="{{ url('/azure') }}/_manifest.json" data-pwa-version="set_in_manifest_and_pwa_js">
    <link rel="apple-touch-icon" sizes="180x180" href="{{ url('/azure') }}/app/icons/icon-192x192.png">
</head>

<body class="theme-light" data-highlight="blue2">

    <div id="preloader">
        <div class="spinner-border color-highlight" role="status"></div>
    </div>

    <div id="page">

        <!-- header and footer bar go here-->
        <div class="header header-fixed header-auto-show header-logo-app">
            <a href="#" data-back-button class="header-title header-subtitle">Back to Pages</a>
            <a href="#" data-back-button class="header-icon header-icon-1"><i class="fas fa-arrow-left"></i></a>
            <a href="#" data-toggle-theme class="header-icon header-icon-2 show-on-theme-dark"><i
                    class="fas fa-sun"></i></a>
            <a href="#" data-toggle-theme class="header-icon header-icon-2 show-on-theme-light"><i
                    class="fas fa-moon"></i></a>
            <a href="#" data-menu="menu-highlights" class="header-icon header-icon-3"><i class="fas fa-brush"></i></a>
            <a href="#" data-menu="menu-main" class="header-icon header-icon-4"><i class="fas fa-bars"></i></a>
        </div>
        <div id="footer-bar" class="footer-bar-5">
            <a href="{{url('/')}}/menu?kejuruan=rpl"><i data-feather="heart" data-feather-line="1" data-feather-size="21" data-feather-color="red2-dark" data-feather-bg="red2-fade-light"></i><span>RPL</span></a>
            <a href="{{url('/')}}/menu?kejuruan=tkr"><i data-feather="image" data-feather-line="1" data-feather-size="21" data-feather-color="green1-dark" data-feather-bg="green1-fade-light"></i><span>TKR</span></a>
            <a href="/home" class="active-nav"><i data-feather="home" data-feather-line="1" data-feather-size="21" data-feather-color="blue2-dark" data-feather-bg="blue2-fade-light"></i><span>Home</span></a>
            <a href="{{url('/')}}/menu?kejuruan=tkj" ><i data-feather="file" data-feather-line="1" data-feather-size="21" data-feather-color="brown1-dark" data-feather-bg="brown1-fade-light"></i><span>TKJ</span></a>
            <a href="{{url('/')}}/menu?kejuruan=tfl"><i data-feather="settings" data-feather-line="1" data-feather-size="21" data-feather-color="gray2-dark" data-feather-bg="gray2-fade-light"></i><span>TFL</span></a>
        </div>

        <div class="page-content">

            <div class="page-title page-title-small">
                <h2><a href="{{ url('/home') }}" data-back-button><i class="fa fa-arrow-left"></i></a>Hallo {{$_GET['nama_guru']}} </h2>
                <a href="#" data-menu="menu-main" class="bg-fade-gray1-dark shadow-xl preload-img"
                    data-src="{{ url('/azure') }}/images/avatars/5s.png"></a>
            </div>
            <div class="card header-card shape-rounded" data-card-height="150">
                <div class="card-overlay bg-highlight opacity-95"></div>
                <div class="card-overlay dark-mode-tint"></div>
                <div class="card-bg preload-img" data-src="{{ url('/azure') }}/images/pictures/20s.jpg"></div>
            </div>

            <div class="card card-style preload-img" data-src="{{ $data->img }}" data-card-height="55vh">
                <div class="card-bottom ml-3">
                    <h1 class="font-40 line-height-xl">{{ $data->nama_guru }}</h1>
                    <p class="pb-0 mb-0 font-12"><i class="fa fa-map-marker mr-2"></i>{{ $data->kode_ruangan }},
                        {{ $data->nama_mapel }}
                    </p>
                    <p>
                        {{ $data->jam_masuk }} - {{ $data->jam_keluar }}
                    </p>
                </div>
                <div class="card-overlay bg-gradient-fade"></div>
            </div>



            <div class="card card-style preload-img" data-src="{{ url('/azure') }}/images/pictures/14l.jpg"
                data-card-height="55vh">
                <div class="card-bottom ml-3">

                <h1 class="font-40 line-height-xl">{{ $data->kelas }}</h1>
                    <p>
                        Ruangan Mengajar : {{ $data->kode_ruangan }}
                    </p>
                </div>
                <div class="card-overlay bg-gradient-fade"></div>
            </div>


            <!-- footer and footer card-->
            <div class="footer" data-menu-load="menu-footer.html"></div>
        </div>
        <!-- end of page content-->


        <div id="menu-share" class="menu menu-box-bottom menu-box-detached rounded-m" data-menu-load="menu-share.html"
            data-menu-height="420" data-menu-effect="menu-over">
        </div>

        <div id="menu-highlights" class="menu menu-box-bottom menu-box-detached rounded-m"
            data-menu-load="menu-colors.html" data-menu-height="510" data-menu-effect="menu-over">
        </div>

        <div id="menu-main" class="menu menu-box-right menu-box-detached rounded-m" data-menu-width="260"
            data-menu-load="menu-main.html" data-menu-active="nav-pages" data-menu-effect="menu-over">
        </div>


    </div>


    <script type="text/javascript" src="{{ url('/azure') }}/scripts/jquery.js"></script>
    <script type="text/javascript" src="{{ url('/azure') }}/scripts/bootstrap.min.js"></script>
    <script type="text/javascript" src="{{ url('/azure') }}/scripts/custom.js"></script>
</body>
