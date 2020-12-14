@extends('layouts/app')

@section('title','Home')
    
@section('content')        
    <!-- Inspiro Slider -->
    <div id="slider" class="inspiro-slider slider-fullscreen dots-creative">
        <!-- Slide 1 -->
        <div class="slide kenburns" data-bg-image="{{ asset('image/home/slide1.jpg') }} ">
            <div class="bg-overlay"></div>
            <div class="container">
                <div class="slide-captions text-center text-light">
                    <!-- Captions -->
                    <h1>WELCOME TO THE WORLD OF ISENG</h1>
                    <p>Say hello kepada website yg dibuat melalui framework Laravel dan template Polo</p>
                    <!-- end: Captions -->
                </div>
            </div>
        </div>
        <!-- end: Slide 1 -->
        <!-- Slide 2 -->
        <div class="slide" data-bg-image="{{ asset('image/home/slide2.jpg') }}">
            <div class="bg-overlay"></div>
            <div class="container">
                <div class="slide-captions text-left text-light">
                    <!-- Captions -->
                    <h1>AKIBAT DARIPADA PANDEMI</h1>
                    <p class="text-small">Website ini di buat karena keisengan karena pandemi.</p>
                    <!-- end: Captions -->
                </div>
            </div>
        </div>
        <!-- end: Slide 2 -->
    </div>
    <!--end: Inspiro Slider -->
    <!-- WHAT WE DO -->
    <section class="container">
        <div class="container">
            <div class="heading-text heading-section">
                <h2>WHAT WE DO</h2>
            </div>
            <div class="row">
                <div class="col-lg-4">
                    <div data-animate="fadeInUp" data-animate-delay="0">
                        <h4>Project Web</h4>
                        <p>project programming iseng yg dibuat pada waktu luang dan kebanyakan di buat dalam basis web.</p>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div data-animate="fadeInUp" data-animate-delay="200">
                        <h4>Games</h4>
                        <p>Game yg di buat karena termotivasi dari main game dan keinginan untuk membuat game sendiri .</p>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div data-animate="fadeInUp" data-animate-delay="400">
                        <h4>Penulis Buku</h4>
                        <p>Penulis yg di membuat tulisan dari SMP sampai sekarang dan belum terselesaikan lalu ingin mencari motivasi untuk menulis.</p>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div data-animate="fadeInUp" data-animate-delay="600">
                        <h4>Desain Grafis</h4>
                        <p>Desain yg dibuat dari sisa belajaran desain grafis dan kegabutan dari freeclass.</p>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div data-animate="fadeInUp" data-animate-delay="800">
                        <h4>Wiraswasta</h4>
                        <p>Dagang apapun yg bisa di jual dari papeda,kripca dan lain-lain karena membutuhkan CUAN.</p>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div data-animate="fadeInUp" data-animate-delay="1000">
                        <h4>Photograper</h4>
                        <p>Poto iseng yg dibuat karena mumpung ada beli kamera HP bagus.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- END WHAT WE DO -->
    <!-- COUNTERS -->
    <section class="text-light p-t-150 p-b-150 " data-bg-parallax="{{ asset('image/home/anime.jpg') }}">
        <div class="bg-overlay"></div>
        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                    <div class="text-center">
                        <div class="icon"><i class="fa fa-3x fa-code"></i></div>
                        <div class="counter"> <span data-speed="3000" data-refresh-interval="50" data-to="12416" data-from="600" data-seperator="true"></span> </div>
                        <div class="seperator seperator-small"></div>
                        <p>LINES OF CODE</p>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="text-center">
                        <div class="icon"><i class="fa fa-3x fa-coffee"></i></div>
                        <div class="counter"> <span data-speed="4500" data-refresh-interval="23" data-to="365" data-from="100" data-seperator="true"></span> </div>
                        <div class="seperator seperator-small"></div>
                        <p>CUPS OF COFFEE</p>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="text-center">
                        <div class="icon"><i class="fa fa-3x fa-rocket"></i></div>
                        <div class="counter"> <span data-speed="3000" data-refresh-interval="12" data-to="114" data-from="50" data-seperator="true"></span> </div>
                        <div class="seperator seperator-small"></div>
                        <p>FINISHED PROJECTS</p>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="text-center">
                        <div class="icon"><i class="fa fa-3x fa-smile-o"></i></div>
                        <div class="counter"> <span data-speed="4550" data-refresh-interval="50" data-to="14825" data-from="48" data-seperator="true"></span> </div>
                        <div class="seperator seperator-small"></div>
                        <p>SATISFIED CLIENTS</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end: COUNTERS -->
    <!-- SERVICES -->
    <section>
        <div class="container">
            <div class="heading-text heading-section text-center">
                <h2>SERVICES</h2>
            </div>
            <div class="row">
                <div class="col-lg-4" data-animate="fadeInUp" data-animate-delay="0">
                    <div class="icon-box effect medium border small">
                        <div class="icon">
                            <a href="#"><i class="fa fa-plug"></i></a>
                        </div>
                        <h3>Robotik</h3>
                        <p>Lorem ipsum dolor sit amet, consecte adipiscing elit. Suspendisse condimentum porttitor
                            cursumus.</p>
                    </div>
                </div>
                <div class="col-lg-4" data-animate="fadeInUp" data-animate-delay="200">
                    <div class="icon-box effect medium border small">
                        <div class="icon">
                            <a href="#"><i class="fa fa-desktop"></i></a>
                        </div>
                        <h3>Programming</h3>
                        <p>Lorem ipsum dolor sit amet, consecte adipiscing elit. Suspendisse condimentum porttitor
                            cursumus.</p>
                    </div>
                </div>
                <div class="col-lg-4" data-animate="fadeInUp" data-animate-delay="400">
                    <div class="icon-box effect medium border small">
                        <div class="icon">
                            <a href="#"><i class="fa fa-cloud"></i></a>
                        </div>
                        <h3>Desain Grafis</h3>
                        <p>Lorem ipsum dolor sit amet, consecte adipiscing elit. Suspendisse condimentum porttitor
                            cursumus.</p>
                    </div>
                </div>
                <div class="col-lg-4" data-animate="fadeInUp" data-animate-delay="600">
                    <div class="icon-box effect medium border small">
                        <div class="icon">
                            <a href="#"><i class="far fa-lightbulb"></i></a>
                        </div>
                        <h3>Penulis</h3>
                        <p>Lorem ipsum dolor sit amet, consecte adipiscing elit. Suspendisse condimentum porttitor
                            cursumus.</p>
                    </div>
                </div>
                <div class="col-lg-4" data-animate="fadeInUp" data-animate-delay="800">
                    <div class="icon-box effect medium border small">
                        <div class="icon">
                            <a href="#"><i class="fa fa-trophy"></i></a>
                        </div>
                        <h3>Wiraswasta</h3>
                        <p>Lorem ipsum dolor sit amet, consecte adipiscing elit. Suspendisse condimentum porttitor
                            cursumus.</p>
                    </div>
                </div>
                <div class="col-lg-4" data-animate="fadeInUp" data-animate-delay="1000">
                    <div class="icon-box effect medium border small">
                        <div class="icon">
                            <a href="#"><i class="fa fa-thumbs-up"></i></a>
                        </div>
                        <h3>Pencitranaan</h3>
                        <p>Lorem ipsum dolor sit amet, consecte adipiscing elit. Suspendisse condimentum porttitor
                            cursumus.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end: SERVICES -->
@endsection