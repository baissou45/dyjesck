<!-- Start Header Area -->
<div class="header-area">
    {{-- <div class="top-header-area">
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
    </div> --}}

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
                    <a class="navbar-brand" href="{{route('accueil')}}">
                        <img src="{{asset('logo.jpeg')}}" width="100" alt="logo">
                    </a>

                    <div class="collapse navbar-collapse mean-menu" id="navbarSupportedContent">
                        <ul class="navbar-nav m-auto">
                            {{-- {{dd(Auth::check())}} --}}
                            @if (! is_null(auth()->user())) 

                                <li class="nav-item">
                                        <a href="{{route('accueil')}}" class="nav-link {{ Route::currentRouteName() == "accueil" ? "active" : '' }}">
                                            Accueil
                                        </a>
                                    </li>

                                    <li class="nav-item">
                                        <a href="{{route('realisations')}}" class="nav-link {{ Route::currentRouteName() == "realisations" ? "active" : '' }}">
                                            Nos réalisations
                                        </a>
                                    </li>

                                    <li class="nav-item">
                                        <a class="nav-link {{ Route::currentRouteName() == "apropos" ? "active" : '' }}">
                                            Dyjesck SA
                                            <i class="ri-arrow-down-s-line"></i>
                                        </a>

                                        <ul class="dropdown-menu">
                                            <li class="nav-item">
                                                <a href="{{route('domaines')}}" class="nav-link">Domaines d’interventions</a>
                                            </li>
                                            <li class="nav-item">
                                                <a href="{{route('equipe')}}" class="nav-link">Notre equipe</a>
                                            </li>
                                            <li class="nav-item">
                                                <a href="{{route('apropos')}}" class="nav-link">Qui somme nous ?</a>
                                            </li>
                                            {{-- <li class="nav-item">
                                                <a href="{{route('pouquoiNous')}}" class="nav-link">Pourquoi nous choisir ?</a>
                                            </li> --}}
                                        </ul>
                                    </li>
                                    <li class="nav-item">
                                        <a href="{{route('contact')}}" class="nav-link {{ Route::currentRouteName() == "contact" ? "active" : '' }}">Contact</a>
                                    </li>


                                    <li class="nav-item">
                                        <a href="{{route('categorie.create')}}" class="nav-link {{ Route::currentRouteName() == "realisations" ? "active" : '' }}">
                                            Catégorie
                                        </a>
                                    </li>

                                    <li class="nav-item">
                                        <a href="{{route('post.create')}}" class="nav-link {{ Route::currentRouteName() == "realisations" ? "active" : '' }}">
                                            Nouvelle réalisation
                                        </a>
                                    </li>

                            @else 

                            <li class="nav-item">
                                        <a href="{{route('accueil')}}" class="nav-link {{ Route::currentRouteName() == "accueil" ? "active" : '' }}">
                                            Accueil
                                        </a>
                                </li>

                                <li class="nav-item">
                                    <a href="{{route('realisations')}}" class="nav-link {{ Route::currentRouteName() == "realisations" ? "active" : '' }}">
                                        Nos réalisations
                                    </a>
                                </li>

                                <li class="nav-item">
                                    <a class="nav-link {{ Route::currentRouteName() == "apropos" ? "active" : '' }}">
                                        Dyjesck SA
                                        <i class="ri-arrow-down-s-line"></i>
                                    </a>

                                    <ul class="dropdown-menu">
                                        <li class="nav-item">
                                            <a href="{{route('domaines')}}" class="nav-link">Domaines d’interventions</a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="{{route('equipe')}}" class="nav-link">Notre equipe</a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="{{route('apropos')}}" class="nav-link">Qui somme nous ?</a>
                                        </li>
                                        {{-- <li class="nav-item">
                                            <a href="{{route('pouquoiNous')}}" class="nav-link">Pourquoi nous choisir ?</a>
                                        </li> --}}
                                    </ul>
                                </li>
                                <li class="nav-item">
                                    <a href="{{route('contact')}}" class="nav-link {{ Route::currentRouteName() == "contact" ? "active" : '' }}">Contact</a>
                                </li>
                                    
                            @endif
                        </ul>

                        <div class="others-options">
                            <ul>
                                <li>
                                    <li>
                                        <i class="ri-phone-fill"></i>
                                        <a href="tel:+22921331311">+ (229) 21 33 13 11</a>
                                    </li>
                                    <li>
                                        <i class="ri-phone-fill"></i>
                                        <a href="tel:+22921334428">+ (229) 21 33 44 28</a>
                                    </li>
                                </li>
                            </ul>
                        </div>
                    </div>
                </nav>
            </div>
        </div>

    </div>
    <!-- End Navbar Area -->
</div>
<!-- End Header Area -->