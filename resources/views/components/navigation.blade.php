<link rel = "stylesheet" href = "css/navigation.css">
<nav class="navbar navbar-expand-lg navbar-light shadow-sm fixed-top" style="background-color: #F5E6D3; z-index: 1030;">
    <div class="container-fluid px-4">
        <!-- Logo/Brand -->
        <a class="navbar-brand fw-bold fs-3 d-flex align-items-center gap-2" href="/" style="font-family: Georgia, serif; letter-spacing: 1px; color: #2C2C2C;">
            <img src="{{ asset('images/Logo_Vanilla.png') }}" 
                 alt="Logo Vanilla Bakery" 
                 style="height: 40px; width: auto; object-fit: contain;">
            <span>Vanilla Bakery</span>
        </a>

        <!-- Mobile Toggle Button -->
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <!-- Navigation Links -->
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                    <a class="nav-link nav-link-custom {{ Request::is('/') ? 'active' : '' }}" href="/">
                        Home
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link nav-link-custom {{ Request::is('about*') ? 'active' : '' }}" href="/about">
                        About Us
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link nav-link-custom {{ Request::is('products') || Request::is('products/*') ? 'active' : '' }}" href="/products">
                        Our Products
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link nav-link-custom {{ Request::is('contact*') || Request::is('/') && str_contains(url()->full(), '#contact') ? 'active' : '' }}" href="/#contact">
                        Contact
                    </a>
                </li>
            </ul>
        </div>
    </div>
</nav>