@extends('../layouts/app')

@section('title','Tentang')
    
@section('content')
        <!-- Inspiro Slider -->
        <div id="slider" class="inspiro-slider dots-creative" data-height-xs="360">
            <!-- Slide 2 -->
            <div class="slide kenburns" style="background-image:url({{asset('image/home/slide3.jpg')}});">
                <div class="bg-overlay"></div>
                <div class="container">
                    <div class="slide-captions text-center text-light">
                        <!-- Captions -->
                        <span class="strong">Tentang Kami</span>
                        <h1>Miraima Developer</h1>
                        <!-- end: Captions -->
                    </div>
                </div>
            </div>
            <!-- end: Slide 2 -->
        </div>
        <!--end: Inspiro Slider -->
        <!-- WELCOME -->
        <section id="welcome" class="p-b-0">
            <div class="container">
                <div class="heading-text heading-section text-center m-b-40" data-animate="fadeInUp"> 
                </div>
                <div class="row" data-animate="fadeInUp">
                    <div class="col-lg-6">
                        <img class="img-fluid" src="{{ asset('image/home/mirai.jpg') }}" alt="Welcome to POLO" width="70%">
                    </div>
                    <div class="col-lg-6">
                        <div class="heading-text heading-section">
                            <span class="lead">Tempat perkumpulan orang-orang gabut yg membuat projek apapun yg mungkin dapat mendapatkan CUAN dan juga tempat untuk membuat software,wiraswasta,buku dan Komik walaupun gagal atau berhasil. </span>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- end: WELCOME -->
        <section class="p-b-10">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 m-t-60">
                        <div class="p-progress-bar-container title-up small extra-small color">
                            <div class="p-progress-bar" data-percent="100" data-delay="100" data-type="%">
                                <div class="progress-title">Programmer</div>
                            </div>
                        </div>
                        <div class="p-progress-bar-container title-up small extra-small color">
                            <div class="p-progress-bar" data-percent="94" data-delay="200" data-type="%">
                                <div class="progress-title">Desain</div>
                            </div>
                        </div>
                        <div class="p-progress-bar-container title-up small extra-small color">
                            <div class="p-progress-bar" data-percent="78" data-delay="300" data-type="%">
                                <div class="progress-title">Tulisan</div>
                            </div>
                        </div>
                        <div class="p-progress-bar-container title-up small extra-small color">
                            <div class="p-progress-bar" data-percent="65" data-delay="400" data-type="%">
                                <div class="progress-title">Wiraswasta</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <hr class="space">
@endsection