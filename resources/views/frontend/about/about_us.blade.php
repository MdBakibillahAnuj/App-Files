@extends('frontend.frontend_master')

@section('title')
    About-Page
@endsection
@section('banner')
    <section class="hero-wrap hero-wrap-2" style="background-image: url({{ asset('frontend/images/bg_3.jpg') }});" data-stellar-background-ratio="0.5">
        <div class="overlay"></div>
        <div class="container">
            <div class="row no-gutters slider-text align-items-end justify-content-center">
                <div class="col-md-9 ftco-animate text-center mb-4">
                    <h1 class="mb-2 bread">About</h1>
                    <p class="breadcrumbs"><span class="mr-2"><a href="/">Home <i class="ion-ios-arrow-forward"></i></a></span> <span>About <i class="ion-ios-arrow-forward"></i></span></p>
                </div>
            </div>
        </div>
    </section>

@endsection

@section('content')


    <section class="ftco-section ftco-wrap-about">
        <div class="container">
            <div class="row">
                <div class="col-md-7 d-flex">
                    <div class="img img-1 mr-md-2" style="background-image: url({{ asset('frontend/images/about.jpg') }});"></div>
                    <div class="img img-2 ml-md-2" style="background-image: url({{ asset('frontend/images/about-1.jpg') }});"></div>
                </div>
                <div class="col-md-5 wrap-about pt-5 pt-md-5 pb-md-3 ftco-animate">
                    <div class="heading-section mb-4 my-5 my-md-0">
                        <span class="subheading">About</span>
                        <h2 class="mb-4">Feliciano Restaurant</h2>
                    </div>
                    <p>A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth.</p>
                    <pc class="time">
                        <span>Mon - Fri <strong>8 AM - 11 PM</strong></span>
                        <span><a href="#">+ 1-978-123-4567</a></span>
                        </p>
                </div>
            </div>
        </div>
    </section>
    <section class="ftco-section ftco-counter img ftco-no-pt" id="section-counter">
        <div class="container">
            <div class="row d-md-flex">
                <div class="col-md-9">
                    <div class="row d-md-flex align-items-center">
                        <div class="col-md-6 col-lg-3 mb-4 mb-lg-0 d-flex justify-content-center counter-wrap ftco-animate">
                            <div class="block-18">
                                <div class="text">
                                    <strong class="number" data-number="5">0</strong>
                                    <span>Years of Experienced</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-3 mb-4 mb-lg-0 d-flex justify-content-center counter-wrap ftco-animate">
                            <div class="block-18">
                                <div class="text">
                                    <strong class="number" data-number="100">0</strong>
                                    <span>Menus/Dish</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-3 mb-4 mb-lg-0 d-flex justify-content-center counter-wrap ftco-animate">
                            <div class="block-18">
                                <div class="text">
                                    <strong class="number" data-number="25">0</strong>
                                    <span>Staffs</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-3 mb-4 mb-lg-0 d-flex justify-content-center counter-wrap ftco-animate">
                            <div class="block-18">
                                <div class="text">
                                    <strong class="number" data-number="15000">0</strong>
                                    <span>Happy Customers</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 text-center text-md-left">
                    <p>A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
                </div>
            </div>
        </div>
    </section>

    <section class="ftco-section bg-light">
        <div class="container">
            <div class="row justify-content-center mb-5 pb-2">
                <div class="col-md-12 text-center heading-section ftco-animate">
                    {{-- <span class="subheading">Services</span> --}}
                    <h2 class="mb-4">Our Services</h2>
                </div>
            </div>
            <div class="row">
                @php
                    $service=DB::table('services')->get();
                @endphp
                @foreach ($service as $service)
                    <div class="col-md-4 d-flex align-self-stretch ftco-animate text-center">
                        <div class="media block-6 services d-block">
                            <div class="icon d-flex justify-content-center align-items-center">
                                <img src="{{ asset('upload/service/'.$service->image) }}" alt="" style="width:80px ">
                            </div>
                            <div class="media-body p-2 mt-3">
                                <h3 class="heading">{{ $service->title }}</h3>
                                <p>{{ $service->description }}</p>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
    <section class="ftco-section">
        <div class="container">
            <div class="row justify-content-center mb-5 pb-2">
                <div class="col-md-12 text-center heading-section ftco-animate">
                    <span class="subheading">Chef</span>
                    <h2 class="mb-4">Our Master Chef</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 col-lg-3 ftco-animate">
                    <div class="staff">
                        <div class="img" style="background-image: url(frontend/images/chef-4.jpg);"></div>
                        <div class="text pt-4">
                            <h3>John Smooth</h3>
                            <span class="position mb-2">Restaurant Owner</span>
                            <div class="faded">
                                <ul class="ftco-social d-flex">
                                    <li class="ftco-animate"><a href="#"><span class="icon-twitter"></span></a></li>
                                    <li class="ftco-animate"><a href="#"><span class="icon-facebook"></span></a></li>
                                    <li class="ftco-animate"><a href="#"><span class="icon-google-plus"></span></a></li>
                                    <li class="ftco-animate"><a href="#"><span class="icon-instagram"></span></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3 ftco-animate">
                    <div class="staff">
                        <div class="img" style="background-image: url(frontend/images/chef-2.jpg);"></div>
                        <div class="text pt-4">
                            <h3>Rebeca Welson</h3>
                            <span class="position mb-2">Head Chef</span>
                            <div class="faded">
                                <ul class="ftco-social d-flex">
                                    <li class="ftco-animate"><a href="#"><span class="icon-twitter"></span></a></li>
                                    <li class="ftco-animate"><a href="#"><span class="icon-facebook"></span></a></li>
                                    <li class="ftco-animate"><a href="#"><span class="icon-google-plus"></span></a></li>
                                    <li class="ftco-animate"><a href="#"><span class="icon-instagram"></span></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3 ftco-animate">
                    <div class="staff">
                        <div class="img" style="background-image: url(frontend/images/chef-3.jpg);"></div>
                        <div class="text pt-4">
                            <h3>Kharl Branyt</h3>
                            <span class="position mb-2">Chef</span>
                            <div class="faded">
                                <ul class="ftco-social d-flex">
                                    <li class="ftco-animate"><a href="#"><span class="icon-twitter"></span></a></li>
                                    <li class="ftco-animate"><a href="#"><span class="icon-facebook"></span></a></li>
                                    <li class="ftco-animate"><a href="#"><span class="icon-google-plus"></span></a></li>
                                    <li class="ftco-animate"><a href="#"><span class="icon-instagram"></span></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3 ftco-animate">
                    <div class="staff">
                        <div class="img" style="background-image: url(frontend/images/chef-1.jpg);"></div>
                        <div class="text pt-4">
                            <h3>Luke Simon</h3>
                            <span class="position mb-2">Chef</span>
                            <div class="faded">
                                <ul class="ftco-social d-flex">
                                    <li class="ftco-animate"><a href="#"><span class="icon-twitter"></span></a></li>
                                    <li class="ftco-animate"><a href="#"><span class="icon-facebook"></span></a></li>
                                    <li class="ftco-animate"><a href="#"><span class="icon-google-plus"></span></a></li>
                                    <li class="ftco-animate"><a href="#"><span class="icon-instagram"></span></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
