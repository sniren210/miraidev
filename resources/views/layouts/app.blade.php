<!DOCTYPE html>
<html lang="en">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <meta name="author" content="INSPIRO" />
    <meta name="description" content="Themeforest Template Polo">
    <!-- Document title -->
    <title>MiraiDev | @yield('title') </title>
    <link rel="shortcut icon" href="image/home/favicon.ico">
    <!-- Stylesheets & Fonts -->
    <link href="{{ asset('css/plugins.css') }}" rel="stylesheet">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
</head>

<body>
    <!-- Body Inner -->
    <div class="body-inner">
        <!-- Header -->
        <header id="header" data-transparent="true" data-fullwidth="true" class="dark submenu-light">
            <div class="header-inner">
                <div class="container">
                    <!--Logo-->
                    <div id="logo">
                        <a href="{{ url('/home') }} ">
                            <span class="default">MIRAIDEV</span>
                        </a>
                    </div>
                    <!--End: Logo-->
                    <!--Navigation Resposnive Trigger-->
                    <div id="mainMenu-trigger">
                        <a class="lines-button x"><span class="lines"></span></a>
                    </div>
                    <!--end: Navigation Resposnive Trigger-->
                    <!--Navigation-->
                    <div id="mainMenu">
                        <div class="container">
                            <nav>
                                <ul>
                                    <li><a href="{{ url('/home') }}">Home</a></li>
                                    <li class="dropdown"><a href="#">Portfolio</a>
                                        <ul class="dropdown-menu">
                                            <li class=""><a href="https://pustaka-alpha.000webhostapp.com/" target="_blank">E-Library</a>
                                            </li>
                                            <li><a href="https://pappy-decrease.000webhostapp.com/" target="_blank">Sistem Buku Induk</a></li>
                                            <li><a href="https://beefiest-speaker.000webhostapp.com/" target="_blank">Buku Ramadha</a></li>
                                            <li><a href="https://miraima.000webhostapp.com/">E-Mading</a></li>
                                        </ul>
                                    </li>
                                    <li class="dropdown"><a href="#">Games</a>
                                        <ul class="dropdown-menu">
                                            <li><a href="https://sniren210.github.io/" target="_blank">Kalkulator</a></li>
                                            <li><a href="https://sniren210.github.io/Game-Number/" target="_blank">Tebak Angka</a></li>
                                            <li><a href="https://sniren210.github.io/pengawasan-corona/" target="_blank">Pengawasan Covid-19</a></li>
                                            <li><a href="https://sniren210.github.io/whack-a-mole/" target="_blank">whack-a-mole</a></li>
                                            <li><a href="https://sniren210.github.io/react-tiga/" target="_blank">React Emote</a></li>
                                            <li><a href="https://sniren210.github.io/magic-mirai/" target="_blank">Magic Mirai</a></li>
                                            <li><a href="https://sniren210.github.io/kartu-pengenal/" target="_blank">Kartu Pengenal</a></li>
                                        </ul>
                                    </li>
                                    <li ><a href="{{ url('/gallery') }}">Gallery</a>
                                    </li>
                                    <li class="dropdown"><a href="#">Tentang</a>
                                        <ul class="dropdown-menu">
                                            <li><a href="{{ url('/tentang-miraima') }}">Miraima</a></li>
                                            <li><a href="{{ url('/tentang-staff') }}">Staff</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="{{ url('/kontak') }}">Kontak</a></li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                    <!--end: Navigation-->
                </div>
            </div>
        </header>
        <!-- end: Header -->
        @yield('content')
        <!-- Footer -->
        <footer id="footer">
            <div class="footer-content">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-5">
                            <div class="widget">
                                <div class="widget-title">Mirai Developer</div>
                                <p class="mb-5">Built with love in Fort Worth, Texas, USA<br>
                                    All rights reserved. Copyright © 2019. INSPIRO.</p>
                            </div>
                        </div>
                        <div class="col-lg-7">
                            <div class="row">
                                <div class="col-lg-3">
                                    <div class="widget">
                                        <div class="widget-title">Tentang</div>
                                        <ul class="list">
                                            <li><a href="{{ url('/tentang-miraima') }}">MiraiDev</a></li>
                                            <li><a href="{{ url('/tentang-staff') }}">Staff</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <div class="widget">
                                        <div class="widget-title">Kontak</div>
                                        <ul class="list">
                                            <li><a href="https://www.youtube.com/channel/UCrGO3egqYk95REdKP2Tno7w" target="_blank">Youtube</a></li>
                                            <li><a href="https://www.instagram.com/r3ndks/" target="_blank">Instagram</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="copyright-content">
                <div class="container">
                    <div class="copyright-text text-center">&copy; 2020 MIRAI-DEV - Website Iseng. </div>
                </div>
            </div>
        </footer>
        <!-- end: Footer -->
    </div>
    <!-- end: Body Inner -->
    <!-- Scroll top -->
    <a id="scrollTop"><i class="icon-chevron-up"></i><i class="icon-chevron-up"></i></a>
    <!--Plugins-->
    <script src="{{ asset('js/jquery.js') }}"></script>
    <script src="{{ asset('js/plugins.js') }}"></script>
    <!--Template functions-->
    <script src="{{ asset('js/functions.js') }} "></script>
</body>

</html>
