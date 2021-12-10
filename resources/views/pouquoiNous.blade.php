@extends('layout.allBlanc')

@section('contenu')

    <!-- Start Page Title Area -->
    <div class="page-title-area bg-1">
        <div class="container">
            <div class="page-title-content">
                <h2>Pourquoi nous choisir ?</h2>
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


    <!-- Start Why Choose Us Area -->
    <section class="why-choose-us-area pb-100">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="why-choose-us-content">
                        <span class="top-title">Notre Equipe</span>
                        <h2>Pourquoi nous choisir ?</h2>
                        <p>
                            Pour répondre aux exigences spécifiques de l’international, Dyjesck S.A est accompagné par le Cabinet Conseils Bcozec reconnu pour son efficacité 
                            en Afrique occidentale et centrale notamment, dans l’organisation, la gestion des contrats internationaux, la mise à disposition du personnel technique qualifié.
                        </p>
                        {{-- <div class="why-choose-us-list">
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
                        </div> --}}
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

@endsection
