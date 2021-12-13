@extends('layout.allBlanc')

@section('contenu')

<!-- Start Page Title Area -->
<div class="page-title-area bg-1">
    <div class="container">
        <div class="page-title-content">
            <h2>Domaines d’interventions</h2>
            <ul>
                <li>
                    <a href="{{route('accueil')}}">
                        Accueil 
                    </a>
                </li>
                
                <li class="active">À propos de nous</li>
            </ul>
        </div>
    </div>
</div>

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
                            <span class="progress-number-wrapper">
                                <span class="progress-number-mark">
                                    <span class="percent"></span>
                                    {{-- <span class="down-arrow"></span> --}}
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
                            <span class="progress-number-wrapper">
                                <span class="progress-number-mark">
                                    <span class="percent"></span>
                                    {{-- <span class="down-arrow"></span> --}}
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
                             <span class="progress-number-wrapper">
                                <span class="progress-number-mark">
                                    <span class="percent"></span>
                                    {{-- <span class="down-arrow"></span> --}}
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
                            <span class="progress-number-wrapper">
                                <span class="progress-number-mark">
                                    <span class="percent"></span>
                                    {{-- <span class="down-arrow"></span> --}}
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
                    <img src="{{asset('dysj/domaine.JPG')}}" alt="Image">
                    <h3>Notre expérience de travail est de 25 ans</h3>
                    <img src="assets/images/skill-shape.png" class="skill-shape" alt="Image">
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Our Skills Area -->

@endsection
