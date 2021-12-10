@extends('layout.allBlanc')

@section('contenu')

    <!-- Start Page Title Area -->
		<div class="page-title-area bg-3">
			<div class="container">
				<div class="page-title-content">
					<h2>Book online</h2>

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
						<form method="post" action="{{route('post.store')}}" enctype="multipart/form-data">
                            @csrf
                            
							<div class="book-online">
								<h3 class="title">Nouvelle réalisation</h3>

								<div class="row">
									<div class="col-lg-6 col-md-6">
										<div class="form-group">
											<label class="{{ $errors->first('titre') ? 'text-danger' : '' }}">Titre <span class="required {{ $errors->first('titre') ? 'text-danger' : '' }}">*</span></label>
											<input type="text" class="form-control {{ $errors->first('titre') ? 'border-danger' : '' }} " name="titre" value="{{old('titre')}}">
                                            @error('titre')
                                                <small class="text-danger"> {{ $errors->first('titre') }} </small>
                                            @enderror
										</div>
									</div>

                                    <div class="col-lg-6 col-md-6">
										<div class="form-group">
											<label class="{{ $errors->first('date') ? 'text-danger' : '' }}">Date <span class="required {{ $errors->first('date') ? 'text-danger' : '' }}">*</span></label>
											<input type="date" class="form-control {{ $errors->first('date') ? 'border-danger' : '' }}" name="date" value="old('date')">
                                            @error('date')
                                                <small class="text-danger"> {{ $errors->first('date') }} </small>
                                            @enderror
										</div>
									</div>

									<div class="col-lg-12 col-md-12">
										<div class="form-group">
											<label class="{{ $errors->first('categ') ? 'text-danger' : '' }}">Catégorie <span class="required">*</span></label>
											<div class="select-box">
												<select class="form-select form-control {{ $errors->first('categ') ? 'border-danger' : '' }}" name="categ">
                                                    @foreach ($categories as $categorie)
													    <option value="{{ $categorie->id }}"> {{ $categorie->titre }} </option>
                                                    @endforeach
												</select>
                                                @error('categ')
                                                    <small class="text-danger"> {{ $errors->first('categ') }} </small>
                                                @enderror
											</div>
										</div>
									</div>

                                    <div class="col-lg-12 col-md-12">
										<div class="form-group">
											<label class="{{ $errors->first('description') ? 'text-danger' : '' }}"">Description <span class="required">*</span></label>
											<textarea name="description" class="form-control  {{ $errors->first('description') ? 'border-danger' : '' }}" rows="3"> {{  old('date') }} </textarea>
                                            @error('description')
                                                <small class="text-danger"> {{ $errors->first('description') }} </small>
                                            @enderror
										</div>
									</div>
                                    
                                    <div class="col-lg-6 col-md-6">
										<div class="form-group">
											<label class="{{ $errors->first('img') ? 'text-danger' : '' }}>Image de couverture <span class="required">*</span></label>
											<input type="file" class="form-control  {{ $errors->first('img') ? 'border-danger' : '' }}" name="img">
                                            @error('img')
                                                <small class="text-danger"> {{ $errors->first('img') }} </small>
                                            @enderror
										</div>
									</div>

                                    <div class="col-lg-6 col-md-6">
										<div class="form-group">
											<label class="{{ $errors->first('img2') ? 'text-danger' : '' }}>Image 2 <span class="required">*</span></label>
                                            <input type="file" class="form-control  {{ $errors->first('img2') ? 'border-danger' : '' }}" name="img2">
                                            @error('img2')
                                                <small class="text-danger"> {{ $errors->first('img2') }} </small>
                                            @enderror
										</div>
									</div>
                                    
                                    <div class="col-lg-6 col-md-6">
                                        <div class="form-group">
                                            <label class="{{ $errors->first('img3') ? 'text-danger' : '' }}>Image 3 <span class="required">*</span></label>
                                            <input type="file" class="form-control  {{ $errors->first('img3') ? 'border-danger' : '' }}" name="img3">
                                            @error('img3')
                                                <small class="text-danger"> {{ $errors->first('img3') }} </small>
                                            @enderror
										</div>
									</div>
                                    
                                    <div class="col-lg-6 col-md-6">
                                        <div class="form-group">
                                            <label class="{{ $errors->first('img4') ? 'text-danger' : '' }}>Image 4 <span class="required">*</span></label>
                                            <input type="file" class="form-control  {{ $errors->first('img4') ? 'border-danger' : '' }}" name="img4">
                                            @error('img4')
                                                <small class="text-danger"> {{ $errors->first('img4') }} </small>
                                            @enderror
										</div>
									</div>

									<div class="col-lg-12 col-md-12">
										<div class="form-check">
											<input type="checkbox" class="form-check-input" name="epingle">
											<p class="form-check-label" for="ship-different-address">Epinglé</p>
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
