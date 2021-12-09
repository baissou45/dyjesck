{{-- @extends('layout.allBlanc')

@section('contenu') --}}

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Create Post</div>
                <div class="card-body">

                    @error('title')
                    <div class="alert alert-danger">{{ $message }}</div>
                    @enderror

                    <form method="post" action="{{ route('post.store') }}">
                        <div class="form-group">
                            @csrf
                            <label class="label">Titre du Post : </label>
                            <input type="text" name="titre" class="form-control" required />
                        </div>
                        <div class="form-group">
                            <label class="label">Soustitre du Post : </label>
                            <input type="text" name="soustitre" class="form-control" required />
                        </div>
                        <div class="form-group">
                            <label class="label">Contenus du Post : </label>
                            <input type="text" name="contenus" class="form-control" required />
                        </div>
                        <div class="form-group">
                            <label class="label"> Image du Post : </label>

                            <input type="file" name="image" class="form-control" required />
                        </div>
                        <div class="form-group">
                            <input type="submit" class="btn btn-success" value="Créer le " />
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

{{-- @endsection --}}
