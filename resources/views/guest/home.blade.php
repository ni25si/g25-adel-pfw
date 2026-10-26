@extends('layouts.guest.app')

@section('title', 'Home')

@section('content')

<div class="container-xxl py-5 bg-dark hero-header mb-5" style="background: linear-gradient(rgba(15, 23, 43, .75), rgba(15, 23, 43, .75)), url('{{ asset('assets-guest/img/background.jpg') }}'); background-position: center center; background-repeat: no-repeat; background-size: cover;">
    <div class="container my-5 py-5">
        <div class="row align-items-center g-5">
            <div class="col-lg-6 text-center text-lg-start">
                <h1 class="display-3 text-white animated slideInLeft">Lagi Laper?<br>Laperin Aja!</h1>
                <p class="text-white animated slideInLeft mb-4 pb-2">Nikmati beragam santapan favorit dengan bahan
                    berkualitas dan racikan bumbu istimewa. Tinggal pilih, kami siap sajikan!</p>
                <a href="{{ route('auth.index') }}" class="btn btn-primary py-sm-3 px-sm-5 me-3 animated slideInLeft">Pesan Sekarang</a>
            </div>
            <div class="col-lg-6 text-center text-lg-end overflow-hidden">
                <img class="img-fluid" src="{{ asset('assets-guest/img/hero.png') }}" alt="">
            </div>
        </div>
    </div>
</div>

@php
    $services = [
        ['icon' => 'fa-user-tie',  'title' => 'Master Chefs'],
        ['icon' => 'fa-utensils',  'title' => 'Quality Food'],
        ['icon' => 'fa-cart-plus', 'title' => 'Online Order'],
        ['icon' => 'fa-headset',   'title' => '24/7 Service'],
    ];
@endphp
<div class="container-xxl py-5" id="service">
    <div class="container">
        <div class="row g-4">
            @foreach ($services as $i => $service)
            <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="{{ 0.1 + $i * 0.2 }}s">
                <div class="service-item rounded pt-3">
                    <div class="p-4">
                        <i class="fa fa-3x {{ $service['icon'] }} text-primary mb-4"></i>
                        <h5>{{ $service['title'] }}</h5>
                        <p>Diam elitr kasd sed at elitr sed ipsum justo dolor sed clita amet diam</p>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>

<div class="container-xxl py-5" id="about">
    <div class="container">
        <div class="row g-5 align-items-center">
            <div class="col-lg-6">
                <div class="row g-3">
                    <div class="col-6 text-start">
                        <img class="img-fluid rounded w-100 wow zoomIn" data-wow-delay="0.1s" src="{{ asset('assets-guest/img/about-1.jpg') }}">
                    </div>
                    <div class="col-6 text-start">
                        <img class="img-fluid rounded w-75 wow zoomIn" data-wow-delay="0.3s" src="{{ asset('assets-guest/img/about-2.jpg') }}" style="margin-top: 25%;">
                    </div>
                    <div class="col-6 text-end">
                        <img class="img-fluid rounded w-75 wow zoomIn" data-wow-delay="0.5s" src="{{ asset('assets-guest/img/about-3.jpg') }}">
                    </div>
                    <div class="col-6 text-end">
                        <img class="img-fluid rounded w-100 wow zoomIn" data-wow-delay="0.7s" src="{{ asset('assets-guest/img/about-4.jpg') }}">
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <h5 class="section-title ff-secondary text-start text-primary fw-normal">About Us</h5>
                <h1 class="mb-4">Welcome to <i class="fa fa-utensils text-primary me-2"></i>Laperin</h1>
                <p class="mb-4">Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit. Aliqu diam amet
                    diam et eos erat ipsum et lorem et sit, sed stet lorem sit.</p>
                <p class="mb-4">Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit. Aliqu diam amet
                    diam et eos. Clita erat ipsum et lorem et sit, sed stet lorem sit clita duo justo magna
                    dolore erat amet</p>
                <div class="row g-4 mb-4">
                    <div class="col-sm-6">
                        <div class="d-flex align-items-center border-start border-5 border-primary px-3">
                            <h1 class="flex-shrink-0 display-5 text-primary mb-0" data-toggle="counter-up">15</h1>
                            <div class="ps-4">
                                <p class="mb-0">Years of</p>
                                <h6 class="text-uppercase mb-0">Experience</h6>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="d-flex align-items-center border-start border-5 border-primary px-3">
                            <h1 class="flex-shrink-0 display-5 text-primary mb-0" data-toggle="counter-up">50</h1>
                            <div class="ps-4">
                                <p class="mb-0">Popular</p>
                                <h6 class="text-uppercase mb-0">Master Chefs</h6>
                            </div>
                        </div>
                    </div>
                </div>
                <a class="btn btn-primary py-3 px-5 mt-2" href="#">Read More</a>
            </div>
        </div>
    </div>
</div>

@php
    $tabs = [
        ['id' => 'tab-1', 'icon' => 'fa-coffee',    'label' => 'Popular', 'title' => 'Breakfast'],
        ['id' => 'tab-2', 'icon' => 'fa-hamburger', 'label' => 'Special', 'title' => 'Launch'],
        ['id' => 'tab-3', 'icon' => 'fa-utensils',  'label' => 'Lovely',  'title' => 'Dinner'],
    ];
@endphp
<div class="container-xxl py-5" id="menu">
    <div class="container">
        <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
            <h5 class="section-title ff-secondary text-center text-primary fw-normal">Food Menu</h5>
            <h1 class="mb-5">Most Popular Items</h1>
        </div>
        <div class="tab-class text-center wow fadeInUp" data-wow-delay="0.1s">
            <ul class="nav nav-pills d-inline-flex justify-content-center border-bottom mb-5">
                @foreach ($tabs as $tab)
                <li class="nav-item">
                    <a class="d-flex align-items-center text-start mx-3 {{ $loop->first ? 'ms-0 active' : '' }} {{ $loop->last ? 'me-0' : '' }} pb-3"
                        data-bs-toggle="pill" href="#{{ $tab['id'] }}">
                        <i class="fa {{ $tab['icon'] }} fa-2x text-primary"></i>
                        <div class="ps-3">
                            <small class="text-body">{{ $tab['label'] }}</small>
                            <h6 class="mt-n1 mb-0">{{ $tab['title'] }}</h6>
                        </div>
                    </a>
                </li>
                @endforeach
            </ul>
            <div class="tab-content">
                @foreach ($tabs as $tab)
                <div id="{{ $tab['id'] }}" class="tab-pane fade show p-0 {{ $loop->first ? 'active' : '' }}">
                    <div class="row g-4">
                        @for ($i = 1; $i <= 8; $i++)
                        <div class="col-lg-6">
                            <div class="d-flex align-items-center">
                                <img class="flex-shrink-0 img-fluid rounded" src="{{ asset('assets-guest/img/menu-' . $i . '.jpg') }}" alt="" style="width: 80px;">
                                <div class="w-100 d-flex flex-column text-start ps-4">
                                    <h5 class="d-flex justify-content-between border-bottom pb-2">
                                        <span>Chicken Burger</span>
                                        <span class="text-primary">$115</span>
                                    </h5>
                                    <small class="fst-italic">Ipsum ipsum clita erat amet dolor justo diam</small>
                                </div>
                            </div>
                        </div>
                        @endfor
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</div>

<div class="container-xxl py-5 px-0 wow fadeInUp" data-wow-delay="0.1s" id="reservation">
    <div class="row g-0">
        <div class="col-md-6">
            <div class="video">
                <button type="button" class="btn-play" data-bs-toggle="modal"
                    data-src="https://www.youtube.com/embed/DWRcNpR6Kdc" data-bs-target="#videoModal">
                    <span></span>
                </button>
            </div>
        </div>
        <div class="col-md-6 bg-dark d-flex align-items-center">
            <div class="p-5 wow fadeInUp" data-wow-delay="0.2s">
                <h5 class="section-title ff-secondary text-start text-primary fw-normal">Reservation</h5>
                <h1 class="text-white mb-4">Book A Table Online</h1>
                <form>
                    <div class="row g-3">
                        <div class="col-md-6">
                            <div class="form-floating">
                                <input type="text" class="form-control" id="name" placeholder="Your Name">
                                <label for="name">Your Name</label>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-floating">
                                <input type="email" class="form-control" id="email" placeholder="Your Email">
                                <label for="email">Your Email</label>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-floating date" id="date3" data-target-input="nearest">
                                <input type="text" class="form-control datetimepicker-input" id="datetime"
                                    placeholder="Date & Time" data-target="#date3" data-toggle="datetimepicker" />
                                <label for="datetime">Date & Time</label>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-floating">
                                <select class="form-select" id="select1">
                                    <option value="1">People 1</option>
                                    <option value="2">People 2</option>
                                    <option value="3">People 3</option>
                                </select>
                                <label for="select1">No Of People</label>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-floating">
                                <textarea class="form-control" placeholder="Special Request" id="message" style="height: 100px"></textarea>
                                <label for="message">Special Request</label>
                            </div>
                        </div>
                        <div class="col-12">
                            <button class="btn btn-primary w-100 py-3" type="submit">Book Now</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="videoModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content rounded-0">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Youtube Video</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="ratio ratio-16x9">
                    <iframe class="embed-responsive-item" src="" id="video" allowfullscreen allowscriptaccess="always" allow="autoplay"></iframe>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container-xxl pt-5 pb-3" id="team">
    <div class="container">
        <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
            <h5 class="section-title ff-secondary text-center text-primary fw-normal">Team Members</h5>
            <h1 class="mb-5">Our Master Chefs</h1>
        </div>
        <div class="row g-4">
            @for ($i = 1; $i <= 4; $i++)
            <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="{{ 0.1 + ($i - 1) * 0.2 }}s">
                <div class="team-item text-center rounded overflow-hidden">
                    <div class="rounded-circle overflow-hidden m-4">
                        <img class="img-fluid" src="{{ asset('assets-guest/img/team-' . $i . '.jpg') }}" alt="">
                    </div>
                    <h5 class="mb-0">Full Name</h5>
                    <small>Designation</small>
                    <div class="d-flex justify-content-center mt-3">
                        <a class="btn btn-square btn-primary mx-1" href="#"><i class="fab fa-facebook-f"></i></a>
                        <a class="btn btn-square btn-primary mx-1" href="#"><i class="fab fa-twitter"></i></a>
                        <a class="btn btn-square btn-primary mx-1" href="#"><i class="fab fa-instagram"></i></a>
                    </div>
                </div>
            </div>
            @endfor
        </div>
    </div>
</div>

<div class="container-xxl py-5 wow fadeInUp" data-wow-delay="0.1s" id="testimonial">
    <div class="container">
        <div class="text-center">
            <h5 class="section-title ff-secondary text-center text-primary fw-normal">Testimonial</h5>
            <h1 class="mb-5">Our Clients Say!!!</h1>
        </div>
        <div class="owl-carousel testimonial-carousel">
            @for ($i = 1; $i <= 4; $i++)
            <div class="testimonial-item bg-transparent border rounded p-4">
                <i class="fa fa-quote-left fa-2x text-primary mb-3"></i>
                <p>Dolor et eos labore, stet justo sed est sed. Diam sed sed dolor stet amet eirmod eos labore diam</p>
                <div class="d-flex align-items-center">
                    <img class="img-fluid flex-shrink-0 rounded-circle" src="{{ asset('assets-guest/img/testimonial-' . $i . '.jpg') }}" style="width: 50px; height: 50px;">
                    <div class="ps-3">
                        <h5 class="mb-1">Client Name</h5>
                        <small>Profession</small>
                    </div>
                </div>
            </div>
            @endfor
        </div>
    </div>
</div>

@endsection
