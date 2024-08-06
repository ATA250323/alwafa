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
@endsection
