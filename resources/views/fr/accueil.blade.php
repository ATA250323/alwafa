@extends('layouts.appsitefr')

@section('content')
    <!-- Carousel Start -->
    <div class="header-carousel owl-carousel">

        <div class="header-carousel-item bg-success">
            <div class="carousel-caption">
                <div class="container">
                    <div class="row gy-4 gy-lg-0 gx-0 gx-lg-5 align-items-center">
                        <div class="col-lg-7 animated fadeInRight">
                            <div class="text-sm-center text-md-end">
                                <center>
                                    <h1 class="display-5  text-white mb-3">Bienvenue chez <span>Al Wafa</span></h1>
                                    <p class="mb-5 fs-5"> </p>
                                </center>

                            </div>
                        </div>
                        <div class="col-lg-5 animated fadeInLeft">
                            <div class="calrousel-img">
                                <img src="{{ asset('assets/img/hero-carousel/logos.jpg') }}" class="img-fluid w-100"
                                    alt="">
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
        <div class="header-carousel-item bg-success">
            <div class="carousel-caption">
                <div class="container">
                    <div class="row gy-4 gy-lg-0 gx-0 gx-lg-5 align-items-center">
                        <div class="col-lg-7 animated fadeInRight">
                            <div class="text-sm-center text-md-end">
                                <center>
                                    <h1 class="display-5 text-white mb-4">Mosquée</h1>
                                    <p class="mb-5 fs-5"> </p>
                                </center>

                            </div>
                        </div>
                        <div class="col-lg-5 animated fadeInLeft">
                            <div class="calrousel-img">
                                <img src="{{ asset('assets/img/hero-carousel/hero-carousel-1.jpg') }}"
                                    class="img-fluid w-100" alt="">
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
        <div class="header-carousel-item bg-success">
            <div class="carousel-caption">
                <div class="container">
                    <div class="row gy-4 gy-lg-0 gx-0 gx-lg-5 align-items-center">
                        <div class="col-lg-7 animated fadeInRight">
                            <div class="text-sm-center text-md-end">
                                <center>
                                    <h1 class="display-5 text-white mb-4">Unversités</h1>
                                    <p class="mb-5 fs-5"> </p>
                                </center>

                            </div>
                        </div>
                        <div class="col-lg-5 animated fadeInLeft">
                            <div class="calrousel-img">
                                <img src="{{ asset('assets/img/hero-carousel/hero-carousel-2.jpg') }}"
                                    class="img-fluid w-100" alt="">
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
        <div class="header-carousel-item bg-success">
            <div class="carousel-caption">
                <div class="container">
                    <div class="row gy-4 gy-lg-0 gx-0 gx-lg-5 align-items-center">
                        <div class="col-lg-7 animated fadeInRight">
                            <div class="text-sm-center text-md-end">
                                <center>
                                    <h1 class="display-5 text-white mb-4">Zakât</h1>
                                    <p class="mb-5 fs-5"> </p>
                                </center>

                            </div>
                        </div>
                        <div class="col-lg-5 animated fadeInLeft">
                            <div class="calrousel-img">
                                <img src="{{ asset('assets/img/hero-carousel/hero-carousel-3.jpg') }}"
                                    class="img-fluid w-100" alt="">
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Carousel End -->

    <!-- Service Start -->
    <div class="container-fluid service py-5">
        <div class="container py-5">
            <div class="text-center mx-auto pb-5 wow fadeInUp" data-wow-delay="0.2s" style="max-width: 800px;">
                <h4 class="text-primary">Our Services</h4>
                <h1 class="display-4 mb-4">We Provide Best Services</h1>
                <p class="mb-0">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Tenetur adipisci facilis
                    cupiditate recusandae aperiam temporibus corporis itaque quis facere, numquam, ad culpa deserunt sint
                    dolorem autem obcaecati, ipsam mollitia hic.
                </p>
            </div>
            <div class="row g-4 justify-content-center">
                <div class="col-md-6 col-lg-6 col-xl-3 wow fadeInUp" data-wow-delay="0.2s">
                    <div class="service-item">
                        <div class="service-img">
                            <img src="img/blog-1.png" class="img-fluid rounded-top w-100" alt="">
                            <div class="service-icon p-3">
                                <i class="fa fa-users fa-2x"></i>
                            </div>
                        </div>
                        <div class="service-content p-4">
                            <div class="service-content-inner">
                                <a href="#" class="d-inline-block h4 mb-4">Life Insurance</a>
                                <p class="mb-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Perspiciatis,
                                    eum!</p>
                                <a class="btn btn-primary rounded-pill py-2 px-4" href="#">Read More</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-6 col-xl-3 wow fadeInUp" data-wow-delay="0.4s">
                    <div class="service-item">
                        <div class="service-img">
                            <img src="img/blog-2.png" class="img-fluid rounded-top w-100" alt="">
                            <div class="service-icon p-3">
                                <i class="fa fa-hospital fa-2x"></i>
                            </div>
                        </div>
                        <div class="service-content p-4">
                            <div class="service-content-inner">
                                <a href="#" class="d-inline-block h4 mb-4">Health Insurance</a>
                                <p class="mb-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Perspiciatis,
                                    eum!</p>
                                <a class="btn btn-primary rounded-pill py-2 px-4" href="#">Read More</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-6 col-xl-3 wow fadeInUp" data-wow-delay="0.6s">
                    <div class="service-item">
                        <div class="service-img">
                            <img src="img/blog-3.png" class="img-fluid rounded-top w-100" alt="">
                            <div class="service-icon p-3">
                                <i class="fa fa-car fa-2x"></i>
                            </div>
                        </div>
                        <div class="service-content p-4">
                            <div class="service-content-inner">
                                <a href="#" class="d-inline-block h4 mb-4">Car Insurance</a>
                                <p class="mb-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Perspiciatis,
                                    eum!</p>
                                <a class="btn btn-primary rounded-pill py-2 px-4" href="#">Read More</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-6 col-xl-3 wow fadeInUp" data-wow-delay="0.8s">
                    <div class="service-item">
                        <div class="service-img">
                            <img src="img/blog-4.png" class="img-fluid rounded-top w-100" alt="">
                            <div class="service-icon p-3">
                                <i class="fa fa-home fa-2x"></i>
                            </div>
                        </div>
                        <div class="service-content p-4">
                            <div class="service-content-inner">
                                <a href="#" class="d-inline-block h4 mb-4">Home Insurance</a>
                                <p class="mb-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Perspiciatis,
                                    eum!</p>
                                <a class="btn btn-primary rounded-pill py-2 px-4" href="#">Read More</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 text-center wow fadeInUp" data-wow-delay="0.2s">
                    <a class="btn btn-primary rounded-pill py-3 px-5" href="#">More Services</a>
                </div>
            </div>
        </div>
    </div>
    <!-- Service End -->
@endsection
