@extends('layouts/app')

@section('title','Kontak')

@section('content')
        <!-- Inspiro Slider -->
        <div id="slider" class="inspiro-slider dots-creative" data-height-xs="360">
            <!-- Slide 2 -->
            <div class="slide kenburns" style="background-image:url({{asset('image/home/slide3.jpg')}});">
                <div class="bg-overlay"></div>
                <div class="container">
                    <div class="slide-captions text-center text-light">
                        <!-- Captions -->
                        <span class="strong">Miraima</span>
                        <h1>Kontak Kami</h1>
                        <!-- end: Captions -->
                    </div>
                </div>
            </div>
            <!-- end: Slide 2 -->
        </div>
        <!--end: Inspiro Slider -->
        <!-- CONTENT -->
        <section>
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <h3 class="text-uppercase">Kontaklah Kami</h3>
                        <p>Kontak kami jika ada saran ataupun kritik dan juga bilaa ada bisnis.</p>
                        <div class="m-t-30">
                            <form class="widget-contact-form" novalidate action="include/contact-form.php" role="form" method="post">
                                <div class="row">
                                    <div class="form-group col-md-6">
                                        <label for="name">Name</label>
                                        <input type="text" aria-required="true" name="widget-contact-form-name" required class="form-control required name" placeholder="Enter your Name">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="email">Email</label>
                                        <input type="email" aria-required="true" name="widget-contact-form-email" required class="form-control required email" placeholder="Enter your Email">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="form-group col-md-12">
                                        <label for="subject">Your Subject</label>
                                        <input type="text" name="widget-contact-form-subject" required class="form-control required" placeholder="Subject...">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="message">Message</label>
                                    <textarea type="text" name="widget-contact-form-message" required rows="5" class="form-control required" placeholder="Enter your Message"></textarea>
                                </div>
                                <!--    <div class="form-group">
                                    <script src="https://www.google.com/recaptcha/api.js"></script>
                                    <div class="g-recaptcha" data-sitekey="6LddCxAUAAAAAKOg0-U6IprqOZ7vTfiMNSyQT2-M"></div>
                                </div> -->
                                <button class="btn" type="submit" id="form-submit"><i class="fa fa-paper-plane"></i>&nbsp;Send message</button>
                            </form>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <h3 class="text-uppercase">Alamat & Sosial Media</h3>
                        <div class="row">
                            <div class="col-lg-6">
                                <address>
                                    <strong>Isekai.</strong><br>
                                    Akihabara Deep<br>
                                    Boom<br>
                                    <abbr title="Phone">P:</h4> (444) 6969-696
                                </address>
                            </div>
                            <div class="col-lg-6">
                                <address>
                                    <strong>Sosmed</strong><br>
                                    IG : @miraimaDev<br>
                                    Twiter : @miraimaDev<br>
                                    FB : N end Neko
                                </address>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section> <!-- end: Content -->
@endsection