@extends('../layouts/app')

@section('title','Staff')

@section('content')
        <!-- Inspiro Slider -->
        <div id="slider" class="inspiro-slider dots-creative" data-height-xs="360">
            <!-- Slide 2 -->
            <div class="slide kenburns" style="background-image:url({{asset('image/home/slide3.jpg')}});">
                <div class="bg-overlay"></div>
                <div class="container">
                    <div class="slide-captions text-center text-light">
                        <!-- Captions -->
                        <span class="strong">Staff Kami</span>
                        <h1>Staff Miraima</h1>
                        <!-- end: Captions -->
                    </div>
                </div>
            </div>
            <!-- end: Slide 2 -->

        </div>
        <!--end: Inspiro Slider -->
        <!-- TEAM -->
    <section class="container">
        <div class="container">
            <div class="heading-text heading-section text-center">
                <h2>MEET OUR TEAM</h2>
                <p>Lorem ipsum dolor sit amet, consecte adipiscing elit. Suspendisse condimentum porttitor cursumus.
                </p>
            </div>
            <div class="row team-members" style="justify-content: center;">
                <div class="col-lg-2">
                    <div class="team-member">
                        <div class="team-image">
                            <img src="{{ asset('image/staff/adam2.jpg') }}">
                        </div>
                        <div class="team-desc">
                            <h3>Adam Ghifari</h3>
                            <span>UI/UX Designer</span>
                            <p>Hidup itu seperti sedang mengendarai sepeda yang terbakar, bannya terbakar, jalanannya terbakar. karena kamu sedang di neraka.. </p>
                            <div class="align-center">
                                <a class="btn btn-xs btn-slide btn-light" href="#">
                                    <i class="fab fa-facebook-f"></i>
                                    <span>Facebook</span>
                                </a>
                                <a class="btn btn-xs btn-slide btn-light" href="#" data-width="100">
                                    <i class="fab fa-twitter"></i>
                                    <span>Twitter</span>
                                </a>
                                <a class="btn btn-xs btn-slide btn-light" href="#" data-width="118">
                                    <i class="fab fa-instagram"></i>
                                    <span>Instagram</span>
                                </a>
                                <a class="btn btn-xs btn-slide btn-light" href="mailto:#" data-width="80">
                                    <i class="icon-mail"></i>
                                    <span>Mail</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2">
                    <div class="team-member">
                        <div class="team-image">
                            <img src="{{ asset('image/staff/rio2.jpg') }}">
                        </div>
                        <div class="team-desc">
                            <h3>Rio Sandria</h3>
                            <span>Multimedia Master</span>
                            <p>Dibawa Santuy Aja hirup mah . </p>
                            <div class="align-center">
                                <a class="btn btn-xs btn-slide btn-light" href="#">
                                    <i class="fab fa-facebook-f"></i>
                                    <span>Facebook</span>
                                </a>
                                <a class="btn btn-xs btn-slide btn-light" href="#" data-width="100">
                                    <i class="fab fa-twitter"></i>
                                    <span>Twitter</span>
                                </a>
                                <a class="btn btn-xs btn-slide btn-light" href="#" data-width="118">
                                    <i class="fab fa-instagram"></i>
                                    <span>Instagram</span>
                                </a>
                                <a class="btn btn-xs btn-slide btn-light" href="mailto:#" data-width="80">
                                    <i class="icon-mail"></i>
                                    <span>Mail</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2">
                    <div class="team-member">
                        <div class="team-image">
                            <img src="{{ asset('image/staff/inki2.jpg') }}">
                        </div>
                        <div class="team-desc">
                            <h3>Emma Ross</h3>
                            <span>Sir Algorithm & Database Management</span>
                            <p>Kamu suka apa? permen? wah hebat. kalau aku sih sukanya kamu.. </p>
                            <div class="align-center">
                                <a class="btn btn-xs btn-slide btn-light" href="#">
                                    <i class="fab fa-facebook-f"></i>
                                    <span>Facebook</span>
                                </a>
                                <a class="btn btn-xs btn-slide btn-light" href="#" data-width="100">
                                    <i class="fab fa-twitter"></i>
                                    <span>Twitter</span>
                                </a>
                                <a class="btn btn-xs btn-slide btn-light" href="#" data-width="118">
                                    <i class="fab fa-instagram"></i>
                                    <span>Instagram</span>
                                </a>
                                <a class="btn btn-xs btn-slide btn-light" href="mailto:#" data-width="80">
                                    <i class="icon-mail"></i>
                                    <span>Mail</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2">
                    <div class="team-member">
                        <div class="team-image">
                            <img src="{{ asset('image/staff/difani2.jpg') }}">
                        </div>
                        <div class="team-desc">
                            <h3>Dinafi Nurul H</h3>
                            <span>System Analyst</span>
                            <p>Bissmillah is my way. Jannah is my destination. </p>
                            <div class="align-center">
                                <a class="btn btn-xs btn-slide btn-light" href="#">
                                    <i class="fab fa-facebook-f"></i>
                                    <span>Facebook</span>
                                </a>
                                <a class="btn btn-xs btn-slide btn-light" href="#" data-width="100">
                                    <i class="fab fa-twitter"></i>
                                    <span>Twitter</span>
                                </a>
                                <a class="btn btn-xs btn-slide btn-light" href="#" data-width="118">
                                    <i class="fab fa-instagram"></i>
                                    <span>Instagram</span>
                                </a>
                                <a class="btn btn-xs btn-slide btn-light" href="mailto:#" data-width="80">
                                    <i class="icon-mail"></i>
                                    <span>Mail</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2">
                    <div class="team-member">
                        <div class="team-image">
                            <img src="{{ asset('image/staff/rendi2.jpg') }}">
                        </div>
                        <div class="team-desc">
                            <h3>Rendi Dwi Aka Sniren</h3>
                            <span>Backend Developer</span>
                            <p>n ataupun kucing keduanya sangat baik untuk edukasi setiap orang. </p>
                            <div class="align-center">
                                <a class="btn btn-xs btn-slide btn-light" href="#">
                                    <i class="fab fa-facebook-f"></i>
                                    <span>Facebook</span>
                                </a>
                                <a class="btn btn-xs btn-slide btn-light" href="#" data-width="100">
                                    <i class="fab fa-twitter"></i>
                                    <span>Twitter</span>
                                </a>
                                <a class="btn btn-xs btn-slide btn-light" href="#" data-width="118">
                                    <i class="fab fa-instagram"></i>
                                    <span>Instagram</span>
                                </a>
                                <a class="btn btn-xs btn-slide btn-light" href="mailto:#" data-width="80">
                                    <i class="icon-mail"></i>
                                    <span>Mail</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end: TEAM -->
@endsection