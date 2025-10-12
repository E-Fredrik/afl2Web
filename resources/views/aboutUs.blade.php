@extends('layouts.layout')
@section('title', 'About Us - Vanilla Bakery')
@section('content')
    <link rel = "stylesheet" href = "css/aboutUs.css">
    <!-- Hero Section -->
    <section class="bg-light py-5" style="background-color: #F5E6D3 !important;">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 mb-4 mb-lg-0">
                    <span class="badge rounded-pill px-4 py-2 mb-3" style="background-color: #D4AF88;">
                        <i class="bi bi-info-circle-fill me-2"></i>About Us
                    </span>
                    <h1 class="display-4 fw-bold mb-3" style="color: #2C2C2C;">About Vanilla Bakery</h1>
                    <p class="lead text-muted">
                        <i class="bi bi-calendar-check me-2" style="color: #D4AF88;"></i>
                        Crafting delicious memories since 2020, one pastry at a time.
                    </p>
                    <p class="text-muted">
                        <i class="bi bi-heart-fill me-2" style="color: #D4AF88;"></i>
                        At Vanilla Bakery, we believe that every bite should be an experience. From our signature milk buns
                        to our delectable eclairs,
                        we pour our hearts into creating baked goods that bring joy to our customers.
                    </p>
                </div>
                <div class="col-lg-6">
                    <img src="{{ asset('images/jumbotron.jpeg') }}" alt="Vanilla Bakery" class="img-fluid rounded shadow-lg"
                        style="object-fit: cover; max-height: 400px; width: 100%;">
                </div>
            </div>
        </div>
    </section>

    <!-- Our Story Section -->
    <section class="py-5">
        <div class="container">
            <div class="row mb-5">
                <div class="col-lg-8 mx-auto text-center">
                    <span class="badge rounded-pill px-4 py-2 mb-3" style="background-color: #D4AF88;">
                        <i class="bi bi-book-fill me-2"></i>Our Journey
                    </span>
                    <h2 class="display-5 fw-bold mb-3" style="color: #2C2C2C;">Our Story</h2>
                    <p class="lead text-muted">
                        <i class="bi bi-shop me-2" style="color: #D4AF88;"></i>
                        What started as a passion for baking in a small kitchen has grown into a beloved bakery
                        serving the community with fresh, handcrafted treats every day.
                    </p>
                </div>
            </div>

            <div class="row g-4">
                <div class="col-md-6">
                    <div class="card h-100 border-0 shadow-sm hover-lift">
                        <div class="card-body p-4">
                            <div class="d-flex align-items-center mb-3">
                                <div class="rounded-circle d-flex align-items-center justify-content-center me-3"
                                    style="width: 60px; height: 60px; background-color: #D4AF88;">
                                    <i class="bi bi-bullseye text-white fs-4"></i>
                                </div>
                                <h4 class="mb-0 fw-bold" style="color: #2C2C2C;">Our Mission</h4>
                            </div>
                            <p class="text-muted">
                                To create high-quality baked goods using the finest ingredients, bringing happiness and
                                warmth
                                to every customer through our passion for baking and commitment to excellence.
                            </p>
                        </div>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="card h-100 border-0 shadow-sm hover-lift">
                        <div class="card-body p-4">
                            <div class="d-flex align-items-center mb-3">
                                <div class="rounded-circle d-flex align-items-center justify-content-center me-3"
                                    style="width: 60px; height: 60px; background-color: #D4AF88;">
                                    <i class="bi bi-eye-fill text-white fs-4"></i>
                                </div>
                                <h4 class="mb-0 fw-bold" style="color: #2C2C2C;">Our Vision</h4>
                            </div>
                            <p class="text-muted">
                                To become the most loved bakery in the region, known for our exceptional quality,
                                innovative flavors, and the warm, welcoming atmosphere that makes everyone feel at home.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Values Section -->
    <section class="py-5" style="background-color: #F5E6D3;">
        <div class="container">
            <div class="row mb-5">
                <div class="col-lg-8 mx-auto text-center">
                    <span class="badge rounded-pill px-4 py-2 mb-3" style="background-color: white; color: #D4AF88;">
                        <i class="bi bi-gem me-2"></i>Core Values
                    </span>
                    <h2 class="display-5 fw-bold mb-3" style="color: #2C2C2C;">Our Values</h2>
                    <p class="lead text-muted">
                        The principles that guide everything we do at Vanilla Bakery.
                    </p>
                </div>
            </div>

            <div class="row g-4">
                <div class="col-lg-4 col-md-6">
                    <div class="text-center p-4 hover-lift">
                        <div class="rounded-circle d-inline-flex align-items-center justify-content-center mb-3 shadow"
                            style="width: 80px; height: 80px; background-color: white;">
                            <i class="bi bi-award-fill" style="font-size: 2rem; color: #D4AF88;"></i>
                        </div>
                        <h5 class="fw-bold mb-2" style="color: #2C2C2C;">Quality First</h5>
                        <p class="text-muted">
                            We use only premium ingredients and traditional baking methods to ensure every product meets our
                            high standards.
                        </p>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="text-center p-4 hover-lift">
                        <div class="rounded-circle d-inline-flex align-items-center justify-content-center mb-3 shadow"
                            style="width: 80px; height: 80px; background-color: white;">
                            <i class="bi bi-people-fill" style="font-size: 2rem; color: #D4AF88;"></i>
                        </div>
                        <h5 class="fw-bold mb-2" style="color: #2C2C2C;">Customer Focused</h5>
                        <p class="text-muted">
                            Your satisfaction is our priority. We listen to feedback and continuously improve to serve you
                            better.
                        </p>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="text-center p-4 hover-lift">
                        <div class="rounded-circle d-inline-flex align-items-center justify-content-center mb-3 shadow"
                            style="width: 80px; height: 80px; background-color: white;">
                            <i class="bi bi-lightbulb-fill" style="font-size: 2rem; color: #D4AF88;"></i>
                        </div>
                        <h5 class="fw-bold mb-2" style="color: #2C2C2C;">Innovation</h5>
                        <p class="text-muted">
                            We blend time-honored recipes with creative new flavors to keep our menu exciting and delicious.
                        </p>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="text-center p-4 hover-lift">
                        <div class="rounded-circle d-inline-flex align-items-center justify-content-center mb-3 shadow"
                            style="width: 80px; height: 80px; background-color: white;">
                            <i class="bi bi-recycle" style="font-size: 2rem; color: #D4AF88;"></i>
                        </div>
                        <h5 class="fw-bold mb-2" style="color: #2C2C2C;">Sustainability</h5>
                        <p class="text-muted">
                            We're committed to sustainable practices, from sourcing ingredients to eco-friendly packaging.
                        </p>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="text-center p-4 hover-lift">
                        <div class="rounded-circle d-inline-flex align-items-center justify-content-center mb-3 shadow"
                            style="width: 80px; height: 80px; background-color: white;">
                            <i class="bi bi-house-heart-fill" style="font-size: 2rem; color: #D4AF88;"></i>
                        </div>
                        <h5 class="fw-bold mb-2" style="color: #2C2C2C;">Community</h5>
                        <p class="text-muted">
                            We're proud to be part of the local community and support local farmers and suppliers.
                        </p>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="text-center p-4 hover-lift">
                        <div class="rounded-circle d-inline-flex align-items-center justify-content-center mb-3 shadow"
                            style="width: 80px; height: 80px; background-color: white;">
                            <i class="bi bi-emoji-smile-fill" style="font-size: 2rem; color: #D4AF88;"></i>
                        </div>
                        <h5 class="fw-bold mb-2" style="color: #2C2C2C;">Passion</h5>
                        <p class="text-muted">
                            Every loaf, pastry, and treat is made with love and dedication by our passionate team of bakers.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Team Section -->
    <section class="py-5">
        <div class="container">
            <div class="row mb-5">
                <div class="col-lg-8 mx-auto text-center">
                    <span class="badge rounded-pill px-4 py-2 mb-3" style="background-color: #D4AF88;">
                        <i class="bi bi-people-fill me-2"></i>Our Team
                    </span>
                    <h2 class="display-5 fw-bold mb-3" style="color: #2C2C2C;">Meet Our Team</h2>
                    <p class="lead text-muted">
                        The talented bakers and staff who make Vanilla Bakery special.
                    </p>
                </div>
            </div>

            <div class="row g-4 justify-content-center">
                @foreach ($staffs as $staff)
                    <div class="col-lg-3 col-md-6">
                        <div class="card border-0 shadow-sm h-100 hover-lift">
                            <div class="card-body text-center p-4">
                                <div class="rounded-circle mx-auto mb-3 d-flex align-items-center justify-content-center"
                                    style="width: 120px; height: 120px; background-color: #F5E6D3;">
                                    <i class="bi bi-person-fill" style="font-size: 4rem; color: #D4AF88;"></i>
                                </div>
                                <h5 class="fw-bold mb-1" style="color: #2C2C2C;">{{ $staff->name }}</h5>
                                <p class="text-muted small mb-2">
                                    <i class="{{ $staff->icon }} me-1" style="color: #D4AF88;"></i>
                                    {{ $staff->position }}
                                </p>
                                <p class="text-muted small">
                                    {{ $staff->description }}
                                </p>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <!-- Call to Action -->
    <section class="py-5" style="background: linear-gradient(135deg, #D4AF88 0%, #C19A6B 100%);">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 mx-auto text-center text-white">
                    <i class="bi bi-shop-window display-1 mb-4"></i>
                    <h2 class="display-5 fw-bold mb-3">Visit Us Today!</h2>
                    <p class="lead mb-4">
                        <i class="bi bi-heart-fill me-2"></i>
                        Experience the warmth and deliciousness of Vanilla Bakery. Stop by our store or browse our products
                        online.
                    </p>
                    <div class="d-flex gap-3 justify-content-center flex-wrap">
                        <a href="/products" class="btn btn-light btn-lg px-5 shadow">
                            <i class="bi bi-basket2-fill me-2"></i>View Our Products
                        </a>
                        <a href="/#contact" class="btn btn-outline-light btn-lg px-5 shadow">
                            <i class="bi bi-envelope-fill me-2"></i>Contact Us
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
