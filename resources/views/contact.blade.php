@extends('layout.allBlanc')

@section('contenu')
	
	<!-- Start Page Title Area -->
	<div class="page-title-area bg-8">
		<div class="container">
			<div class="page-title-content">
				<h2>Contact us</h2>

				<ul>
					<li>
						<a href="index.html">
							Home 
						</a>
					</li>

					<li class="active">Contact us</li>
				</ul>
			</div>
		</div>
	</div>
	<!-- End Page Title Area -->

	<!-- Start Contact Area -->
	<section class="main-contact-area pt-100 pb-100">
		<div class="container">
			<form id="contactForm">
				<div class="row">
					<div class="col-lg-8">
						<h3>Contactez-nous</h3>
						
						<div class="row">
							<div class="col-lg-6 col-sm-6">
								<div class="form-group">
									<label>Votre nom</label>
									<input type="text" name="name" id="name" class="form-control" required data-error="Veuillez saisir votre nom">
									<div class="help-block with-errors"></div>
								</div>
							</div>
	
							<div class="col-lg-6 col-sm-6">
								<div class="form-group">
									<label>Adresse E-mail</label>
									<input type="email" name="email" id="email" class="form-control" required data-error="Veuillez saisir votre adresse E-Mail">
									<div class="help-block with-errors"></div>
								</div>
							</div>
	
							<div class="col-lg-6 col-sm-6">
								<div class="form-group">
									<label>Votre contact</label>
									<input type="text" name="phone_number" id="phone_number" required data-error="Veuillez saisir votre numéro de téléphone" class="form-control">
									<div class="help-block with-errors"></div>
								</div>
							</div>
	
							<div class="col-lg-6 col-sm-6">
								<div class="form-group">
									<label>Le sujet</label>
									<input type="text" name="msg_subject" id="msg_subject" class="form-control" required data-error="Veuillez saisir votre sujet">
									<div class="help-block with-errors"></div>
								</div>
							</div>
	
							<div class="col-12">
								<div class="form-group">
									<label>Votre message</label>
									<textarea name="message" class="form-control" id="message" cols="30" rows="8" required data-error="Entrer votre message"></textarea>
									<div class="help-block with-errors"></div>
								</div>
							</div>
	
							<div class="col-lg-12 col-md-12">
								<div class="form-group checkboxs">
									<input type="checkbox" id="chb2">
									<p>
										I have read and completely accept the <a href="terms-of-service.html">Terms of service</a> And <a href="privacy-policy.html">Privacy policy.</a>
									</p>
								</div>
							</div>
	
							<div class="col-lg-12 col-md-12">
								<button type="submit" class="default-btn">
									<span>Send message</span>
								</button>
								<div id="msgSubmit" class="h3 text-center hidden"></div>
								<div class="clearfix"></div>
							</div>
						</div>
					</div>

					<div class="col-lg-4">
						<div class="single-contact-bg">
							<div class="single-contact-info">
								<h3>Coordonnées</h3>
	
								<ul class="address">
									<li class="location">
										<span>Addresse</span>
										Carré 217 Parcelle « O » Adjégounlè Akpakpa Cotonou Bénin – 01 BP 721 Recette Principale
									</li>
									<li>
										<span>Contact</span>
										<a href="tel:+22921331311">+ (229) 21 33 13 11</a>
										<a href="tel:+22921334428">+ (229) 21 33 44 28</a>			
									</li>
									<li>
										<span>Email</span>
										<a href="mailto:info@hacbu.com">dyjesck@yahoo.fr</a>
									</li>
								</ul>
							</div>
	
							<div class="single-contact-info follow-us">
								<h3>Heures de travail</h3>
	
								<ul class="works-hours">
									<li>
										Du Lundi <audio src=""></audio> Vendredi
									</li>
									<li>
										08h:00 - 12h:30  
										<span>15H:00 - 18H:30</span>
									</li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</form>
		</div>
	</section>
	<!-- End Contact Area -->

@endsection
