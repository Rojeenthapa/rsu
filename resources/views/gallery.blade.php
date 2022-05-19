@extends('layout.app')
@section('content')
 <!-- Inne Page Banner Area Start Here -->
 <section class="inner-page-banner bg-common inner-page-top-margin" data-bg-image="img/figure/figure2.jpg">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="breadcrumbs-area">
                    <h1>RSU Gallery</h1>
                    <ul>
                        <li>
                            <a href="#">Home</a>
                        </li>
                        <li>Gallery</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Inne Page Banner Area End Here -->
<!-- Gallery Area Start Here -->
<section class="gallery-wrap-layout1 bg-light-accent100">
    <div class="container">
        <div class="isotope-wrap">
            <div class="text-center">
                <!-- <div class="isotope-classes-tab isotop-btn">
                    <a href="#" class="current nav-item" data-filter="*">All</a>
                    <a href="#" class="nav-item" data-filter=".dental">Dental</a>
                    <a href="#" class="nav-item" data-filter=".eye">Eye</a>
                    <a href="#" class="nav-item" data-filter=".cardiology">Cardiology</a>
                    <a href="#" class="nav-item" data-filter=".orthopaedics">Orthopaedics</a>
                </div> -->
            </div>
            <div class="row featuredContainer zoom-gallery">
                <div class="col-lg-4 col-md-6 col-sm-6 col-12 dental cardiology">
                    <div class="gallery-box-layout1">
                        <img src="img/gallery/gallery1.jpg" alt="gallery" class="img-fluid">
                        <div class="item-icon">
                            <a href="img/gallery/gallery1.jpg" class="popup-zoom" data-fancybox-group="gallery"
                                title="">
                                <i class="flaticon-search"></i>
                            </a>
                        </div>
                        <div class="item-content">
                            <h3 class="item-title">Modern Clinic</h3>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6 col-12 orthopaedics">
                    <div class="gallery-box-layout1">
                        <img src="img/gallery/gallery2.jpg" alt="gallery" class="img-fluid">
                        <div class="item-icon">
                            <a href="img/gallery/gallery2.jpg" class="popup-zoom" data-fancybox-group="gallery"
                                title="">
                                <i class="flaticon-search"></i>
                            </a>
                        </div>
                        <div class="item-content">
                            <h3 class="item-title">Modern Clinic</h3>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6 col-12 dental eye">
                    <div class="gallery-box-layout1">
                        <img src="img/gallery/gallery3.jpg" alt="gallery" class="img-fluid">
                        <div class="item-icon">
                            <a href="img/gallery/gallery3.jpg" class="popup-zoom" data-fancybox-group="gallery"
                                title="">
                                <i class="flaticon-search"></i>
                            </a>
                        </div>
                        <div class="item-content">
                            <h3 class="item-title">Modern Clinic</h3>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6 col-12 cardiology orthopaedics">
                    <div class="gallery-box-layout1">
                        <img src="img/gallery/gallery4.jpg" alt="gallery" class="img-fluid">
                        <div class="item-icon">
                            <a href="img/gallery/gallery4.jpg" class="popup-zoom" data-fancybox-group="gallery"
                                title="">
                                <i class="flaticon-search"></i>
                            </a>
                        </div>
                        <div class="item-content">
                            <h3 class="item-title">Modern Clinic</h3>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6 col-12 orthopaedics">
                    <div class="gallery-box-layout1">
                        <img src="img/gallery/gallery5.jpg" alt="gallery" class="img-fluid">
                        <div class="item-icon">
                            <a href="img/gallery/gallery5.jpg" class="popup-zoom" data-fancybox-group="gallery"
                                title="">
                                <i class="flaticon-search"></i>
                            </a>
                        </div>
                        <div class="item-content">
                            <h3 class="item-title">Modern Clinic</h3>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6 col-12 orthopaedics">
                    <div class="gallery-box-layout1">
                        <img src="img/gallery/gallery6.jpg" alt="gallery" class="img-fluid">
                        <div class="item-icon">
                            <a href="img/gallery/gallery6.jpg" class="popup-zoom" data-fancybox-group="gallery"
                                title="">
                                <i class="flaticon-search"></i>
                            </a>
                        </div>
                        <div class="item-content">
                            <h3 class="item-title">Modern Clinic</h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Gallery Area End Here -->
@endsection