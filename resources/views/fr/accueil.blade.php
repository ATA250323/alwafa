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
                <h4 class="text-primary">Les projets de chaques année</h4>
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
                            <img src="{{ asset('assets/img/2015/IMG-20151227-WA0132.jpg') }}"
                                class="img-fluid rounded-top w-100" alt="">
                            <div class="service-icon p-3">
                                2015
                            </div>
                        </div>
                        <div class="service-content p-2">
                            <div class="service-content-inner">
                                <center>
                                    <a class="btn btn-success rounded-pill py-2 px-4" href="#">Voir plus</a>
                                </center>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 col-lg-6 col-xl-3 wow fadeInUp" data-wow-delay="0.2s">
                    <div class="service-item">
                        <div class="service-img">
                            <img src="{{ asset('assets/img/2016/IMG_20160610_190753.jpg') }}"
                                class="img-fluid rounded-top w-100" alt="">
                            <div class="service-icon p-3">
                                2016
                            </div>
                        </div>
                        <div class="service-content p-2">
                            <div class="service-content-inner">
                                <center>
                                    <a class="btn btn-success rounded-pill py-2 px-4" href="#">Voir plus</a>
                                </center>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 col-lg-6 col-xl-3 wow fadeInUp" data-wow-delay="0.2s">
                    <div class="service-item">
                        <div class="service-img">
                            <img src="{{ asset('assets/img/2017/IMG_20161105_144107') }}"
                                class="img-fluid rounded-top w-100" alt="">
                            <div class="service-icon p-3">
                                2017
                            </div>
                        </div>
                        <div class="service-content p-2">
                            <div class="service-content-inner">
                                <center>
                                    <a class="btn btn-success rounded-pill py-2 px-4" href="#">Voir plus</a>
                                </center>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 col-lg-6 col-xl-3 wow fadeInUp" data-wow-delay="0.2s">
                    <div class="service-item">
                        <div class="service-img">
                            <img src="{{ asset('assets/img/2022/1universite222.jpg') }}"
                                class="img-fluid rounded-top w-100" alt="">
                            <div class="service-icon p-3">
                                2022
                            </div>
                        </div>
                        <div class="service-content p-2">
                            <div class="service-content-inner">
                                <center>
                                    <a class="btn btn-success rounded-pill py-2 px-4" href="#">Voir plus</a>
                                </center>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 col-lg-6 col-xl-3 wow fadeInUp" data-wow-delay="0.2s">
                    <div class="service-item">
                        <div class="service-img">
                            <img src="{{ asset('assets/img/2023/IMG-20230122-WA0099.jpg') }}"
                                class="img-fluid rounded-top w-100" alt="">
                            <div class="service-icon p-3">
                                2023
                            </div>
                        </div>
                        <div class="service-content p-2">
                            <div class="service-content-inner">
                                <center>
                                    <a class="btn btn-success rounded-pill py-2 px-4" href="#">Voir plus</a>
                                </center>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 col-lg-6 col-xl-3 wow fadeInUp" data-wow-delay="0.2s">
                    <div class="service-item">
                        <div class="service-img">
                            <img src="{{ asset('assets/img/2024/موزة.jpg') }}" class="img-fluid rounded-top w-100"
                                alt="">
                            <div class="service-icon p-3">
                                2024
                            </div>
                        </div>
                        <div class="service-content p-2">
                            <div class="service-content-inner">
                                <center>
                                    <a class="btn btn-success rounded-pill py-2 px-4" href="#">Voir plus</a>
                                </center>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!-- Service End -->
@endsection
