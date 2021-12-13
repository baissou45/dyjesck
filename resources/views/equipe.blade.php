@extends('layout.allBlanc')

@section('contenu')

<!-- Start Page Title Area -->
<div class="page-title-area bg-1">
    <div class="container">
        <div class="page-title-content">
            <h2>Notre Equipe</h2>
            <ul>
                <li>
                    <a class="text-white" style="font-size: 20px" href="{{route('accueil')}}">
                        Accueil 
                    </a>
                </li>

                <li class="active" style="font-size: 20px">À propos de nous</li>
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
                    <h2>Notre Equipe</h2>
                    <p>20 ingénieurs et plus de 40 techniciens supérieurs
                        s’investissent dans les projets et les chantiers conduits
                        par Dyjesck S.A. Ils encadrent plus de 250 ouvriers sur
                        ces chantiers. <br>
                        Dyjesck S.A,a une stratégie tournée vers la qualité et la satisfaction de ses clients grâce à </p>
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
                    <img src="{{asset('dysj/equipe.JPG')}}" alt="" srcset="">
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Why Choose Us Area -->


@endsection
