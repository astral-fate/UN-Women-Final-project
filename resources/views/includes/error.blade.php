<main>
    <nav class="navbar navbar-expand-lg">
    <div class="container">
        <a class="navbar-brand" href="index.html">
            <i class="bi-back"></i>
            <span>Topic</span>
        </a>

        <div class="d-lg-none ms-auto me-4">
            <a href="#top" class="navbar-icon bi-person smoothscroll"></a>
        </div>

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav ms-lg-5 me-lg-auto">
        <li class="nav-item">
            <a class="nav-link click-scroll" href="{{ route('home') }}">Home</a>
        </li>
        <li class="nav-item">
            <a class="nav-link click-scroll" href="{{ route('topics.listing') }}">Browse Topics</a>
        </li>
        <li class="nav-item">
            <a class="nav-link click-scroll" href="#section_3">How it works</a>
        </li>
        <li class="nav-item">
            <a class="nav-link click-scroll" href="#section_4">FAQs</a>
        </li>
        <li class="nav-item">
            <a class="nav-link click-scroll" href="{{ route('testimonials') }}">Testimonials</a>
        </li>
        <li class="nav-item">
            <a class="nav-link click-scroll" href="{{ route('contact') }}">Contact</a>
        </li>
        <li class="border"></li>
        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarLightDropdownMenuLink" role="button"
                data-bs-toggle="dropdown" aria-expanded="false">Pages</a>
            <ul class="dropdown-menu dropdown-menu-light" aria-labelledby="navbarLightDropdownMenuLink">
                <li><a class="dropdown-item" href="{{ route('contact') }}">Contact Us</a></li>
                <li><a class="dropdown-item" href="{{ route('testimonials') }}">Our Client Says</a></li>
                <li><a class="dropdown-item" href="{{ route('topics.listing') }}">Topics Listing</a></li>
                <li><a class="dropdown-item" href="{{ route('topics.detail') }}">Topics details</a></li>
            </ul>
        </li>
    </ul>
    <div class="d-none d-lg-block">
        <a href="{{ route('login') }}" class="navbar-icon bi-person smoothscroll"></a>
    </div>
</div>
    </div>
</nav>


        <section class="hero-section d-flex justify-content-center align-items-center" style="height: 100vh;">
            <div class="container">
                <div class="row">

                    <div class="col-lg-8 col-12 mx-auto">
                        <h1 class="text-white text-center"><i class="bi bi-exclamation-triangle"
                                style="font-size: 150px;"></i></h1>
                        <h6 class="text-center">404| page not found</h6>
                    </div>
                    <div class="col-12 text-center">
                        <a href="#" class="text-center fs-6 link mt-5">Back to Home Page ✈</a>
                    </div>
                </div>
            </div>
        </section>
    </main>