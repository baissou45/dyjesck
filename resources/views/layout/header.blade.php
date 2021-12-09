<!-- Start Header Area -->
<div class="header-area">
    <div class="top-header-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6">
                    <div class="header-left-content">
                        <ul>
                            <li>
                                <a class="call" href="tel:+1-(514)-312-5678">
                                    <i class="ri-phone-fill"></i>
                                    +1 (514) 312-5678
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="ri-facebook-fill"></i>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="ri-instagram-line"></i>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="ri-youtube-fill"></i>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="ri-twitter-fill"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="col-lg-6 col-md-6">
                    <div class="header-right-content">
                        <div class="others-options">
                            <ul>
                                <li>
                                    <a href="my-account.html">
                                        <i class="ri-account-circle-line"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="cart.html">
                                        <i class="ri-shopping-cart-fill"></i>
                                        <span class="count">0</span>
                                    </a>
                                </li>
                                <li>
                                    <div class="navbar-option-item navbar-option-language dropdown language-option"> 
                                        <button class="dropdown-toggle" type="button" id="language1" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <i class="ri-global-line"></i>
                                            <span class="lang-name">English</span>
                                        </button>

                                        <div class="dropdown-menu language-dropdown-menu" aria-labelledby="language1"> 
                                            <a class="dropdown-item" href="#">
                                                <img src="assets/images/language/english.png" alt="Image">
                                                English
                                            </a>
                                            <a class="dropdown-item" href="#">
                                                <img src="assets/images/language/deutsch.png" alt="Image">
                                                Deutsch
                                            </a>
                                            <a class="dropdown-item" href="#">
                                                <img src="assets/images/language/china.png" alt="Image">
                                                简体中文
                                            </a>
                                            <a class="dropdown-item" href="#">
                                                <img src="assets/images/language/arbic.png" alt="Image">
                                                العربيّة
                                            </a>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Start Navbar Area -->
    <div class="navbar-area navbar-area-four">
        <div class="mobile-responsive-nav">
            <div class="container">
                <div class="mobile-responsive-menu">
                    <div class="logo">
                        <a href="index.html">
                            <img src="{{asset('logo.jpeg')}}" alt="logo">
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <div class="desktop-nav">
            <div class="container">
                <nav class="navbar navbar-expand-md navbar-light">
                    <a class="navbar-brand" href="index.html">
                        <img src="{{asset('logo.jpeg')}}" width="100" alt="logo">
                    </a>

                    <div class="collapse navbar-collapse mean-menu" id="navbarSupportedContent">
                        <ul class="navbar-nav m-auto">
                            <li class="nav-item">
                                <a href="{{route('accueil')}}" class="nav-link active">
                                    Accueil
                                </a>
                            </li>

                            <li class="nav-item">
                                <a href="#" class="nav-link">
                                    Pages 
                                    <i class="ri-arrow-down-s-line"></i>
                                </a>

                                <ul class="dropdown-menu">
                                    <li class="nav-item">
                                        <a href="about-us.html" class="nav-link">About Us</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="pricing-plan.html" class="nav-link">Pricing Plan</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="#" class="nav-link">
                                            Projects 
                                            <i class="ri-arrow-down-s-line"></i>
                                        </a>

                                        <ul class="dropdown-menu">
                                            <li class="nav-item">
                                                <a href="our-projects.html" class="nav-link">Our Projects</a>
                                            </li>
                                            <li class="nav-item">
                                                <a href="project-details.html" class="nav-link">Projects Details</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="nav-item">
                                        <a href="faq.html" class="nav-link">FAQ</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="#" class="nav-link">
                                            Shop 
                                            <i class="ri-arrow-down-s-line"></i>
                                        </a>
    
                                        <ul class="dropdown-menu">
                                            <li class="nav-item">
                                                <a href="products.html" class="nav-link">Products</a>
                                            </li>
                                            <li class="nav-item">
                                                <a href="cart.html" class="nav-link">Cart</a>
                                            </li>
                                            <li class="nav-item">
                                                <a href="checkout.html" class="nav-link">Checkout</a>
                                            </li>
                                            <li class="nav-item">
                                                <a href="product-details.html" class="nav-link">Product Details</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="nav-item">
                                        <a href="our-staff.html" class="nav-link">Our staff</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="#" class="nav-link">
                                            User 
                                            <i class="ri-arrow-down-s-line"></i>
                                        </a>

                                        <ul class="dropdown-menu">
                                            <li class="nav-item">
                                                <a href="my-account.html" class="nav-link">My Account</a>
                                            </li>
                                            <li class="nav-item">
                                                <a href="sign-in.html" class="nav-link">Sign In</a>
                                            </li>
                                            <li class="nav-item">
                                                <a href="sign-up.html" class="nav-link">Sign Up</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="nav-item">
                                        <a href="our-team.html" class="nav-link">Our Team</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="privacy-policy.html" class="nav-link">Privacy Policy</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="terms-of-service.html" class="nav-link">Terms Of Service</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="coming-soon.html" class="nav-link">Coming Soon</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="404.html" class="nav-link">404 Page</a>
                                    </li>
                                </ul>
                            </li>

                            <li class="nav-item">
                                <a href="#" class="nav-link">
                                    Services 
                                    <i class="ri-arrow-down-s-line"></i>
                                </a>

                                <ul class="dropdown-menu">
                                    <li class="nav-item">
                                        <a href="services.html" class="nav-link">Services</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="services-details.html" class="nav-link">Services Details</a>
                                    </li>
                                </ul>
                            </li>

                            <li class="nav-item">
                                <a href="#" class="nav-link">
                                    Blog 
                                    <i class="ri-arrow-down-s-line"></i>
                                </a>

                                <ul class="dropdown-menu">
                                    <li class="nav-item">
                                        <a href="blog.html" class="nav-link">Blog</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="blog-details.html" class="nav-link">Blog Details</a>
                                    </li>
                                </ul>
                            </li>

                            <li class="nav-item">
                                <a href="contact.html" class="nav-link">Contact</a>
                            </li>
                        </ul>

                        <div class="others-options">
                            <ul>
                                <li>
                                    <a href="search-page.html">
                                        <i class="ri-search-line"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="pricing-plan.html" class="default-btn gradient-btn">
                                        Get a quote
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </nav>
            </div>
        </div>

        <div class="others-option-for-responsive">
            <div class="container">
                <div class="dot-menu">
                    <div class="inner">
                        <div class="circle circle-one"></div>
                        <div class="circle circle-two"></div>
                        <div class="circle circle-three"></div>
                    </div>
                </div>
                
                <div class="container">
                    <div class="option-inner">
                        <div class="others-options justify-content-center d-flex align-items-center">
                            <ul>
                                <li>
                                    <a href="search.html">
                                        <i class="ri-search-line"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="search.html" class="default-btn gradient-btn">
                                        Get a quote
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Navbar Area -->
</div>
<!-- End Header Area -->