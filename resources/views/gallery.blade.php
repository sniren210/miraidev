@extends('layouts/app')

@section('title','Gallery')

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
                        <h1>Gallery Kami</h1>
                        <!-- end: Captions -->
                    </div>
                </div>
            </div>
            <!-- end: Slide 2 -->
        </div>
        <!--end: Inspiro Slider -->
        <!-- Content -->
        <section id="page-content">
            <div class="container">
                <!-- Gallery -->
                <div class="grid-layout grid-3-columns" data-margin="20" data-item="grid-item" data-lightbox="gallery">
                    <div class="grid-item">
                        <a class="image-hover-zoom" href="image/gallery/1.jpg" data-lightbox="gallery-image"><img src="image/gallery/1.jpg"></a>
                    </div>
                    <div class="grid-item">
                        <a class="image-hover-zoom" href="image/gallery/2.jpg" data-lightbox="gallery-image"><img src="image/gallery/2.jpg"></a>
                    </div>
                    <div class="grid-item">
                        <a class="image-hover-zoom" href="image/gallery/3.jpg" data-lightbox="gallery-image"><img src="image/gallery/3.jpg"></a>
                    </div>
                    <div class="grid-item">
                        <a class="image-hover-zoom" href="image/gallery/4.jpg" data-lightbox="gallery-image"><img src="image/gallery/4.jpg"></a>
                    </div>
                    <div class="grid-item">
                        <a class="image-hover-zoom" href="image/gallery/5.jpg" data-lightbox="gallery-image"><img src="image/gallery/5.jpg"></a>
                    </div>
                    <div class="grid-item">
                        <a class="image-hover-zoom" href="image/gallery/6.jpg" data-lightbox="gallery-image"><img src="image/gallery/6.jpg"></a>
                    </div>
                    <div class="grid-item">
                        <a class="image-hover-zoom" href="image/gallery/7.jpg" data-lightbox="gallery-image"><img src="image/gallery/7.jpg"></a>
                    </div>
                    <div class="grid-item">
                        <a class="image-hover-zoom" href="image/gallery/8.jpg" data-lightbox="gallery-image"><img src="image/gallery/8.jpg"></a>
                    </div>
                    <div class="grid-item">
                        <a class="image-hover-zoom" href="image/gallery/9.jpg" data-lightbox="gallery-image"><img src="image/gallery/9.jpg"></a>
                    </div>
                </div>
                <ul class="pagination pagination-flat">
                    <li class="page-item"><a class="page-link" href="#"><i class="fa fa-angle-left"></i></a></li>
                    <li class="page-item"><a class="page-link" href="#">1</a></li>
                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                    <li class="page-item active"><a class="page-link" href="#">3</a></li>
                    <li class="page-item"><a class="page-link" href="#">4</a></li>
                    <li class="page-item"><a class="page-link" href="#">5</a></li>
                    <li class="page-item"><a class="page-link" href="#"><i class="fa fa-angle-right"></i></a></li>
                </ul>
                <!-- end: Gallery -->
            </div>
        </section> <!-- end: Content -->
@endsection