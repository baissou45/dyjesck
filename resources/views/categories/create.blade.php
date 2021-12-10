@extends('layout.allBlanc')

@section('contenu')

    <!-- Start Page Title Area -->
		<div class="page-title-area bg-3">
			<div class="container">
				<div class="page-title-content">
					<h2>Nouvelle catégorie</h2>

					<ul>
						<li>
							<a href="index.html">
								Home 
							</a>
						</li>

						<li class="active">Book online</li>
					</ul>
				</div>
			</div>
		</div>
		<!-- End Page Title Area -->

		<!-- Start Online Book Area -->
		<section class="book-online-area ptb-100">
			<div class="container">
				<div class="row justify-content-center">
					<div class="col-lg-8 col-md-12">
						<form method="post" action="{{route('categorie.store')}}">
                            @csrf
                            
							<div class="book-online">
								<h3 class="title">Nouvelle catégorie</h3>

								<div class="row">

									<div class="col-lg-12 col-md-12">
										<div class="form-group">
											<label class="{{ $errors->first('titre') ? 'text-danger' : '' }}">Titre <span class="required {{ $errors->first('titre') ? 'text-danger' : '' }}">*</span></label>
											<input type="text" class="form-control {{ $errors->first('titre') ? 'border-danger' : '' }} " name="titre" value="{{old('titre')}}">
                                            @error('titre')
                                                <small class="text-danger"> {{ $errors->first('titre') }} </small>
                                            @enderror
										</div>
									</div>


									<div class="col-lg-12">
										<button class="default-btn">
											Submit
										</button>
									</div>
								</div>
							</div>
						</form>
					</div>
				</div>
			</div>
		</section>
		<!-- End Online Book Area -->
    
@endsection