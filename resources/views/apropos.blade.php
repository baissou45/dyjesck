@extends('layout.allBlanc')

@section('contenu')

<!-- Start Page Title Area -->
<div class="page-title-area bg-1">
    <div class="container">
        <div class="page-title-content">
            <h2>Qui somme nous ?</h2>
            <ul>
                <li>
                    <a href="{{ route('accueil') }}">
                        Accueil
                    </a>
                </li>
                <li class="active">À propos de nous</li>
            </ul>
        </div>
    </div>
</div>
<!-- End Page Title Area -->
{{-- <img src="{{asset('logo.jpeg')}}" alt="Image"> --}}

<!-- End About Area -->
<div class="section about-area ptb-100">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6">
                <div class="about-img-three mr-15">
                    <img src="{{asset('logo.jpeg')}}" alt="Image">
                    {{-- <img src="{{asset('logo.jpeg')}}" class="abput-img-shape-3" alt="Image">
                    <img src="assets/images/abput-img-logo-3.jpg" class="abput-img-logo-3" alt="Image"> --}}
                </div>
            </div>
            <div class="col-lg-6">
                <div class="about-content style-three ml-15">
                    <span class="top-title">Dyjesck S.A .</span>
                    <h2>Qui sommes-nous</h2>
                    <p>DYJESCK S.A. est une entreprise béninoise de bâtiments et travaux public qui développe son activité depuis 1996 dans la perpétuation d’une tradition familiale ancrée dans la culture du respect de l’engagement pris.</p>
                    <h4>Pourquoi nous choisirs ?</h4>
                    <p>Pour répondre aux exigences spécifiques de l’international, Dyjesck S.A est accompagné par le Cabinet Conseils Bcozec reconnu pour son efficacité en Afrique occidentale et centrale notamment, dans l’organisation, la gestion des contrats internationaux, la mise à disposition du personnel technique qualifié.</p>
                    <div class="row justify-content-center">
                        <div class="col-lg-4 col-sm-6">
                            <div class="single-count">
                                <h1>20</h1>
                                <h3>Ingénieurs</h3>
                            </div>
                        </div>
                        <div class="col-lg-4 col-sm-6">
                            <div class="single-count">
                                <center>
                                    <h1>40</h1>
                                </center>
                                <h3>Techniciens Supérieurs</h3>
                            </div>
                        </div>
                        <div class="col-lg-4 col-sm-6">
                            <div class="single-count mb-0">
                                <center>
                                    <h1>250</h1>
                                </center>
                                <center>
                                    <h3>Ouvriers</h3>
                                </center>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End About Area -->
{{-- 
<!-- Start Our Skills Area -->
<section class="our-skills-area bg-color-f3f7ff ptb-100">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6">
                <div class="skills-content">
                    <span class="top-title">Interventions</span>
                    <h2>Nos domaines d’interventions</h2>
                    <p>DYJESCK SA est une entreprise générale spécialisée dans la construction des bâtiments, des ouvrages d’art, d’adduction d’eau villageoise, de pavage des routes et assainissement des voies. La qualité des travaux exécutés et leurs brefs délais de réalisation ont permis à l’Entreprise de gagner la confiance des Maîtres d’Ouvrage et leur délégation ainsi que plusieurs promoteurs immobiliers tant dans le secteur public que dans le privé. A travers les différents travaux réalisés, elle a su donner un nouveau visage aux principales villes du pays avec plusieurs kilomètres de chaussées pavées et assainies dans les villes.</p>
                </div>

                <div class="all-skill-bar">
                    <div class="skill-bar" data-percentage="38%">
                        <h4 class="progress-title-holder">
                            <span class="progress-title">Compétences de réparation</span>
                            &emsp;&emsp;<span class="progress-number-wrapper">
                                <span class="progress-number-mark">
                                    <span class="percent"></span>
                                    <span class="down-arrow"></span>
                                </span>
                            </span>
                        </h4>

                        <div class="progress-content-outter">
                            <div class="progress-content"></div>
                        </div>
                    </div>

                    <div class="skill-bar color-change" data-percentage="6%">
                        <h4 class="progress-title-holder clearfix">
                            <span class="progress-title">Adduction d'Eau Villageoises</span>
                            &emsp;&emsp;<span class="progress-number-wrapper">
                                <span class="progress-number-mark">
                                    &emsp;<span class="percent"></span>
                                    <span class="down-arrow"></span>
                                </span>
                            </span>
                        </h4>

                        <div class="progress-content-outter">
                            <div class="progress-content"></div>
                        </div>
                    </div>

                    <div class="skill-bar" data-percentage="33%">
                        <h4 class="progress-title-holder clearfix">
                            <span class="progress-title">Pavage et Assainissement</span>
                            &emsp;&emsp; <span class="progress-number-wrapper">
                                <span class="progress-number-mark">
                                    <span class="percent"></span>
                                    <span class="down-arrow"></span>
                                </span>
                            </span>
                        </h4>

                        <div class="progress-content-outter">
                            <div class="progress-content"></div>
                        </div>
                    </div>

                    <div class="skill-bar color-change mb-0" data-percentage="77%">
                        <h4 class="progress-title-holder clearfix">
                            <span class="progress-title">Total des Projets</span>
                            &emsp;&emsp;<span class="progress-number-wrapper">
                                <span class="progress-number-mark">
                                    &emsp;<span class="percent"></span>
                                    <span class="down-arrow"></span>
                                </span>
                            </span>
                        </h4>

                        <div class="progress-content-outter">
                            <div class="progress-content"></div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-6">
                <div class="skill-img">
                    <img src="assets/images/skill-img.jpg" alt="Image">
                    <h3>Notre expérience de travail est de 25 ans</h3>
                    <img src="assets/images/skill-shape.png" class="skill-shape" alt="Image">
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Our Skills Area -->

<!-- Start Offer Area -->
<section class="offer-area pt-100 pb-70">
    <div class="container">
        <div class="section-title">
            <span class="top-title">Ce que nous offrons</span>
            <h2>Respect de l’engagement, Probité et équité, Humanisme.</h2>
        </div>
        <div class="row justify-content-center">
            <div class="col-lg-4 col-md-6">
                <div class="single-offer-shape-three">
                    <div class="offer-icon">
                        <img src="assets/images/offer-shape.png" alt="Image">
                        <div class="icon">
                            <img src="assets/images/icon/icon-6.png" alt="Image">
                        </div>
                    </div>

                    <h3> Revêtement Intérieur</h3>
                    <p>Construction du siège de l'Africaine des Assurances à Cotonou (R+8); Construction du siège de ECOBANK à Cotonou; Construction de la cours suprême à Porto-Novo; Construction de Terminal de revêtement à Bolloré .</p>
                </div>
            </div>

            <div class="col-lg-4 col-md-6">
                <div class="single-offer-shape-three">
                    <div class="offer-icon">
                        <img src="assets/images/offer-shape.png" alt="Image">
                        <div class="icon">
                            <img src="assets/images/icon/icon-7.png" alt="Image">
                        </div>
                    </div>
                    <h3> Ouvrage d'arts </h3>
                    <p>Dalot quadruple 4x3x4 à Kétou; Dalot quadruple 3x2,5x4 à Savè; Dalot simple 1,5x1,5 au Port Sec à Parakou; Travaux de construction du collecteur "G" à Porto-Novo (partie amont) en groupement avec CERAB-TP et CERTA.</p>

                </div>
            </div>

            <div class="col-lg-4 col-md-6">
                <div class="single-offer-shape-three">
                    <div class="offer-icon">
                        <img src="assets/images/offer-shape.png" alt="Image">
                        <div class="icon">
                            <img src="assets/images/icon/icon-8.png" alt="Image">
                        </div>
                    </div>

                    <h3>Voirie Réseaux Divers</h3>
                    <p>Projet de construction du Centre Aéré de la BCEAO à Cotonou: Aménagement paysager; Construction du village d'enfants SOS à Yamoussoukro en Côte d'Ivoire; Construction et rénovation du village d'enfants SOS à Abobo en Côte d'Ivoire.</p>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Offer Area -->

<!-- Start Why Choose Us Area -->
<section class="why-choose-us-area pb-100">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="why-choose-us-content">
                    <span class="top-title">Notre Equipe</span>
                    <h2>Vous pouvez nous choisir en fonction de la qualité de notre travail et de la satisfaction de nos clients</h2>
                    <p>Dyjesck S.A,a une stratégie tournée vers la qualité et la satisfaction de ses clients grâce à : </p>
                    <div class="why-choose-us-list">
                        <div class="row">
                            <div class="col-lg-6 col-sm-6">
                                <ul>
                                    <li>
                                        <span>1</span>
                                        La suppression de la hiérarchisation verticale,
                                    </li>
                                    <li>
                                        <span>2</span>
                                        L’analyse des réclamations et l’écoute client à tout instant,
                                    </li>
                                    <li>
                                        <span>3</span>
                                        La valorisation et la mise à niveau des compétences,
                                    </li>
                                </ul>
                            </div>

                            <div class="col-lg-6 col-sm-6">
                                <ul>
                                    <li>
                                        <span>4</span>
                                        L’utilisation d’outils de recherche d’efficience et d’efficacité,
                                    </li>
                                    <li>
                                        <span>5</span>
                                        Le développement continu du réseau de consultants externes.
                                    </li>
                                    <li>
                                        <span>6</span>
                                        Fiabilité
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="why-choose-us-img">

                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Why Choose Us Area -->

<!-- Start Partner Area -->
<div class="partner-area pb-100">
    <div class="container">
        <div class="partner-bg style-two">
            <span>Our accreditations</span>

            <div class="partner-slider owl-carousel owl-theme">
                <div class="single-partner-style-two">
                    <a href="index.html" target="_blank">
                        <img src="assets/images/partner/partner-1.png" alt="Image">
                    </a>
                </div>

                <div class="single-partner-style-two">
                    <a href="index.html" target="_blank">
                        <img src="assets/images/partner/partner-2.png" alt="Image">
                    </a>
                </div>

                <div class="single-partner-style-two">
                    <a href="index.html" target="_blank">
                        <img src="assets/images/partner/partner-3.png" alt="Image">
                    </a>
                </div>

                <div class="single-partner-style-two">
                    <a href="index.html" target="_blank">
                        <img src="assets/images/partner/partner-4.png" alt="Image">
                    </a>
                </div>

                <div class="single-partner-style-two">
                    <a href="index.html" target="_blank">
                        <img src="assets/images/partner/partner-5.png" alt="Image">
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Partner Area -->

<!-- Start Team Area -->
<section class="team-area pb-70">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-3 col-sm-6">
                <div class="team-content">
                    <h2>Meet our staff</h2>
                    <p>Lorem ipsum dolor sit amet, consectet adipiscing elit, sed do eiusmod tempor incididunt ut labore.</p>

                    <a href="our-staff.html" class="read-more">
                        View all staff
                        <i class="ri-arrow-right-line"></i>
                    </a>
                </div>
            </div>

            <div class="col-lg-3 col-sm-6">
                <div class="single-team">
                    <img src="assets/images/team/team-1.jpg" alt="Image">

                    <div class="single-team-content">
                        <h3>Everett conley</h3>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-sm-6">
                <div class="single-team">
                    <img src="assets/images/team/team-2.jpg" alt="Image">

                    <div class="single-team-content">
                        <h3>Michael young</h3>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-sm-6">
                <div class="single-team">
                    <img src="assets/images/team/team-3.jpg" alt="Image">

                    <div class="single-team-content">
                        <h3>Scott ross</h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Team Area --> --}}

@endsection
