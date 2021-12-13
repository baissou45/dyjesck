@extends('layout.allBlanc')

@section('contenu')
	
	<!-- Start Banner Area -->
		@include('composants.carousel')
	<!-- End Banner Area -->

	<!-- Start Services Area -->
	<section class="services-area-two bg-color-f6f7ff pt-100 pb-70">
		<div class="container">
			<div class="section-title">
				<h3>Nos Services</h3>
			</div>

			<div class="row">
				<div class="col">
					<div class="single-services-three">
						<img src="{{asset('assets/images/icon/icon-1.png')}}" alt="Image">
						<h3>
							<a href="#">
								BÂTIMENT
							</a>
						</h3>
					</div>
				</div>
				<div class="col">
					<div class="single-services-three">
						<img src="{{asset('assets/images/icon/icon-2.png')}}" alt="Image">
						<h3>
							<a href="#">
								ADDUCTION D'EAU
							</a>
						</h3>
					</div>
				</div>
				<div class="col">
					<div class="single-services-three">
						<img src="{{asset('assets/images/icon/icon-3.png')}}" alt="Image">
						<h3>
							<a href="#">
								Electrical
							</a>
						</h3>
					</div>
				</div>
				<div class="col">
					<div class="single-services-three">
						<img src="{{asset('assets/images/icon/icon-4.png')}}" alt="Image">
						<h3>
							<a href="#">
								REVÊTEMENT
							</a>
						</h3>
					</div>
				</div>
				<div class="col">
					<div class="single-services-three">
						<img src="{{asset('assets/images/icon/icon-5.png')}}" alt="Image">
						<h3>
							<a href="#">
								PAVAGE ET ASSAINISSEMENT
							</a>
						</h3>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- End Services Area -->

	<!-- Start Our Services Area -->
	<section class="our-services-area style-three pt-100 pb-70">
		<div class="container">
			<div class="section-title">
				{{-- <span class="top-title">Our services</span> --}}
				<h2>NOUS VOUS DONNONS LE MEILLEUR</h2>
				<p>
					En somme, tous les travaux réalisés par l’Entreprise présententun intérêt économique et social
					certain qu’il n’est plus nécessaire de décrire 
					(réduction de la pauvreté par la création d’emplois aux jeunes désœuvrés).
				</p>
				<a href="services.html">View all services <i class="ri-arrow-right-line"></i></a>
			</div>

			<div class="row justify-content-center">
				<div class="col-lg-3 col-md-6">
					<div class="single-services-two">
						<a href="#">
							<img src="{{asset('dysj/batiment.jpg')}}" alt="Image" style="height: 250px">
						</a>
						<h3><a href="#">BÂTIMENT</a></h3>
						<p>
							Construction, Réhabilitation, Extension de bâtiments Travaux tous corps d'états : gros œuvres,
							plomberie, menuiserie bois et métalliques, revêtements carreaux et souple, étanchéité, peinture etc.
						</p>
					</div>
				</div>

				<div class="col-lg-3 col-md-6">
					<div class="single-services-two">
						<a href="#">
							<img src="{{asset('dysj/revetement.jpg')}}" alt="Image" style="height: 250px ">
						</a>
						<h3><a href="#">REVÊTEMENT</a></h3>
						<p>
							Revêtement intérieur et extérieur.
						</p>
					</div>
				</div>

				<div class="col-lg-3 col-md-6">
					<div class="single-services-two">
						<a href="#">
							<img src="{{asset('dysj/pavage.jpg')}}" alt="Image" style="height: 250px ">
						</a>
						<h3><a href="#">PAVAGE ET ASSAINISSEMENT</a></h3>
						<p>
							Viabilisation des quartiers populaires, Construction des ouvrages d'assainissement et Pavage des rues.
						</p>
					</div>
				</div>

				<div class="col-lg-3 col-md-6">	
					<div class="single-services-two">
						<a href="#">
							<img src="{{asset('dysj/adduction.jpg')}}" alt="Image" style="height: 250px ">
						</a>
						<h3>
							<a href="#">ADDUCTION D'EAU</a>
							<p>
								Travaux d'Adduction d'Eau Villageoise (AEV): Construction et équipement de châteaux.
							</p>
						</h3>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- End Our Services Area -->

	<!-- Start Our Project Area -->
	<section class="our-project-area mt-5">
		<div class="container">
			<div class="section-title">
				<span class="top-title">NOS PARTENAIRES</span>
				<h2>Ils nous font confiance</h2>
			</div>
			
			<div class="project-slider owl-carousel owl-theme">
				<div class="single-project">
					<img src="{{asset('dysj/partenaires/Benin.jpg')}}" alt="Image">

					<div class="project-content">
						<h3>
							<a href="product-details.html">Etat Béninois</a>
						</h3>
					</div>
				</div>

				<div class="single-project">
					<img src="{{asset('dysj/partenaires/cote-divoire.jpg')}}" alt="Image">

					<div class="project-content">
						<h3>
							<a href="product-details.html">Etat Ivoirien</a>
						</h3>
					</div>
				</div>

				<div class="single-project">
					<img src="{{asset('dysj/partenaires/Nigeria.jpg')}}" alt="Image">

					<div class="project-content">
						<h3>
							<a href="product-details.html">Etat du Nigeria</a>
						</h3>
					</div>
				</div>

				<div class="single-project">
					<img src="{{asset('dysj/partenaires/AGETUR.jpg')}}" alt="Image">

					<div class="project-content">
						<h3>
							<a href="product-details.html">Ageture SA</a>
						</h3>
					</div>
				</div>

				<div class="single-project">
					<img src="{{asset('dysj/partenaires/agetip.jpg')}}" alt="Image">

					<div class="project-content">
						<h3>
							<a href="product-details.html">AGETIP Bénin</a>
						</h3>
					</div>
				</div>

				<div class="single-project">
					<img src="{{asset('dysj/partenaires/comtel.jpg')}}" alt="Image">

					<div class="project-content">
						<h3>
							<a href="product-details.html">COMTEL IMMOBILIER</a>
						</h3>
					</div>
				</div>

				<div class="single-project">
					<img src="{{asset('dysj/partenaires/sogea-satom.jpg')}}" alt="Image">

					<div class="project-content">
						<h3>
							<a href="product-details.html">SOGEA SATOM</a>
						</h3>
					</div>
				</div>
				
				<div class="single-project">
					<img src="{{asset('dysj/partenaires/afrique-omnitech.jpg')}}" alt="Image">

					<div class="project-content">
						<h3>
							<a href="product-details.html">AFRIQUE OMNITECH</a>
						</h3>
					</div>
				</div>
				
				<div class="single-project">
					<img src="{{asset('dysj/partenaires/sos-village.jpg')}}" alt="Image">

					<div class="project-content">
						<h3>
							<a href="product-details.html">SOS Village d'enfant</a>
						</h3>
					</div>
				</div>
				
				<div class="single-project">
					<img src="{{asset('dysj/partenaires/fagace.jpg')}}" alt="Image">

					<div class="project-content">
						<h3>
							<a href="product-details.html">FAGACE</a>
						</h3>
					</div>
				</div>
				
			</div>
		</div>
	</section>
	<!-- End Our Project Area -->

	<!-- Start Testimonials Area -->
	<section class="testimonials-area mt-5">
		<div class="container-fluid">
			<div class="row">
				{{-- <div class="col-lg-6 pl-0 pr-0 hidden-xs hidden-md">
					<div class="">
						<img src="{{asset('dysj/slide5.jpg')}}" style="height: 100%">
					</div>
				</div> --}}
				
				<div class="col-lg-6 pl-0 pr-0">
					<div class="testimonials-bg">
						<div class="video-button">
							<img src="{{asset('dysj/slide5.jpg')}}" style="height: 100%">
						</div>
					</div>
				</div>

				<div class="col-lg-6 pl-0 pr-0">
					<div class="testimonial-wrap">
						<div class="section-title white-title">
							<span class="top-title">Témoignages</span>
							<h2>Ce que disent nos clients</h2>
						</div>

						<div class="testimonial-slider owl-carousel owl-theme">
							<div class="single-testimonial-content ">
								<div class="testimonial-avatar">
									<img src="{{asset('dysj/Victor-zounmenou.jpg')}}" alt="Image">
									<h3>MONSIEUR VICTOR ZOUNMENOU</h3>
									<span>DG VICO S.A.R.L.</span>
								</div>

								<p>“ Etre concurrent de DYJESCK est un plaisir, même si ça peut paraître bizarre de dire ça. Quand vos aînés ont le respect de la parole donnée, cet esprit de partage de l'expérience, vous ne pouvez que grandir à leur côté, avec eux.”</p>
							</div>

							<div class="single-testimonial-content ">
								<div class="testimonial-avatar">
									<img src="{{asset('dysj/lambert-koty.jpeg')}}" alt="Image">
									<h3>MONSIEUR LAMBERT KOTY</h3>
									<span>PDG AGETUR S.A.</span>
								</div>

								<p>“ C'est un plaisir sincère de témoigner pour la société DYJESCK avec qui nous travaillons depuis des décennies (leur premier marché avec nous fût un chantier de pavage à Ouidah en 1997). Dyjesck, c'est la performance tout simplement. ”</p>
							</div>

							<div class="single-testimonial-content ">
								<div class="testimonial-avatar">
									<img src="{{asset('dysj/djidjoho.jpg')}}" alt="Image">
									<h3>MONSIEUR JEAN-JACQUES DJIDJOHO</h3>
									<span>Chef Agence SATOM Bénin</span>
								</div>

								<p>“ DYJESCK est dirigé par un vrai leader. Monsieur Guy V. est un entrepreneur sérieux. DYJESCK connait la valeur de l'engagement. Ce sont les champions du respect des délais. ”</p>
							</div>

							
							<div class="single-testimonial-content ">
								<div class="testimonial-avatar">
									<img src="{{asset('dysj/Silhouette-homme.png')}}" alt="Image">
									<h3>MONSIEUR JIVKO</h3>
									<span>Village d'enfants S.O.S - Côte d'Ivoire</span>
								</div>

								<p>“ J'ai rarement rencontré des hommes de la trempe du PDG de DYJESCK. Dans des situations très difficiles, j'ai été impressionné par sa passion et son investissement personnel pour la qualité et la réussite des projets. Je peux dire aujourd'hui, même si ma position m'oblige à la réserve, que GUY est plus qu'un prestataire, c'est un ami. ”</p>
							</div>

						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- End Testimonials Area -->
	
	<!-- Start Blog Area -->
	<section class="blog-area bg-color-f6f7ff pt-100 pb-70">
		<div class="container">
			<div class="section-title">
				<span class="top-title"></span>
				<h2>Nos Dernieres réalisations</h2>
			</div>

			<div class="row justify-content-center">

				@foreach ($posts as $post)
					
					<div class="col-lg-4 col-md-6">
						<div class="single-blog style-for-page">
							<a href="{{route('realisations.show', $post->slug)}}" class="blog-img">
								<img src="{{asset($post->img)}}" alt="Image">
								<span class="date">{{ $post->date }}</span>
							</a>

							<div class="blog-content">
								<ul>
									<li>
										<a href="author.html">
											By: {{ $post->user->name }}
										</a>
									</li>
									<li class="tag">
										<a href="blog.html"> {{ $post->categorie->titre }} </a>
									</li>
								</ul>
	
								<h3>
									<a href="blog-details.html"> {{  $post->titre }} </a>
								</h3>

								<p>{{ Str::limit($post->description, 100, ' ...') }}</p>

								<a href="blog-details.html" class="default-btn">
									Voir plus
								</a>
							</div>
						</div>
					</div>

				@endforeach

			</div>
		</div>
	</section>
	<!-- End Blog Area -->

@endsection