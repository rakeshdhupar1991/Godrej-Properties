<div class="container-xxl bg-white p-0">
        <!-- Spinner Start -->
        <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
                <span class="sr-only">Loading...</span>
            </div>
        </div>
        <!-- Spinner End -->


        <!-- Navbar Start -->
        <div class="container-fluid nav-bar bg-transparent">
            <nav class="navbar navbar-expand-lg bg-white navbar-light py-0 px-4">
                <a href="index.html" class="navbar-brand d-flex align-items-center text-center">
                    <div class="icon p-2 me-2">
                        <img class="img-fluid" src="img/icon-deal.png" alt="Icon" style="width: 30px; height: 30px;">
                    </div>
                    <h1 class="m-0 text-primary">Godrej Properties</h1>
                </a>
                <button type="button" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <div class="navbar-nav ms-auto">
                        <a href="{{ url('/index') }}" class="nav-item nav-link active">Home</a>
                        <a href="{{ url('/property') }}" class="nav-item nav-link">Property</a>
                        <div class="nav-item dropdown">
                            <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown" >Location</a>
                            <div class="dropdown-menu rounded-0 m-0">
                         
                               <a href="{{ url('/location/Gurgaon') }}" class="dropdown-item">Gurgaon</a>
                               <a href="{{ url('/location/Noida') }}" class="dropdown-item">Noida</a>
                               <a href="{{ url('/location/Faridabad') }}" class="dropdown-item">Faridabad</a>
                               <a href="{{ url('/location/Delhi') }}" class="dropdown-item">Delhi</a>

                            </div>
                        </div>
                        <div class="nav-item dropdown">
                            <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">New Launch</a>
                            <div class="dropdown-menu rounded-0 m-0">
                                <a href="testimonial.html" class="dropdown-item"> Under Construction</a>
                                <a href="404.html" class="dropdown-item">Ready to Move</a>
                            </div>
                        </div>
                    </div>
                        <a href="contact.html" class="btn btn-primary px-3 d-none d-lg-flex">Call Now</a>
                    
                    <a href="" class="btn btn-primary px-3 d-none d-lg-flex">Book A Site Visit</a>
                </div>
            </nav>
        </div>
        <!-- Navbar End -->


        <!-- Header Start -->
        <div class="container-fluid header bg-white p-0">
            <div class="row g-0 align-items-center flex-column-reverse flex-md-row">
                <div class="col-md-6 p-5 mt-lg-5">
                    <h1 class="display-5 animated fadeIn mb-4">Find A <span class="text-primary">Perfect Home</span> To Live With Your Family</h1>
                    <p class="animated fadeIn mb-4 pb-2">Vero elitr justo clita lorem. Ipsum dolor at sed stet
                        sit diam no. Kasd rebum ipsum et diam justo clita et kasd rebum sea elitr.</p>
                    <a href="" class="btn btn-primary py-3 px-5 me-3 animated fadeIn">Get Started</a>
                </div>
                <div class="col-md-6 animated fadeIn">
                    <div class="owl-carousel header-carousel">
                        <div class="owl-carousel-item">
                            <img class="img-fluid" src="img/carousel-1.jpg" alt="">
                        </div>
                        <div class="owl-carousel-item">
                            <img class="img-fluid" src="img/carousel-2.jpg" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Header End -->
</div>      