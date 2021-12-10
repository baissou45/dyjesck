@extends('layout.allBlanc')

@section('contenu')
    
<!-- Start Page Title Area -->
<div class="page-title-area bg-7">
    <div class="container">
        <div class="page-title-content">
            <h2>Blog details</h2>

            <ul>
                <li>
                    <a href="index.html">
                        Home 
                    </a>
                </li>

                <li class="active">Blog details</li>
            </ul>
        </div>
    </div>
</div>
<!-- End Page Title Area -->

<!-- Start Blog Page Area -->
<section class="blog-page-area ptb-100">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <div class="blog-details-content mr-15">

                    <h2 class="mb-5">The ultimate guide on how to use Inata software?</h2>

                    
                    <div class="blog-details-img">
                        <img src="{{asset('assets/images/blog/blog-1.jpg')}}" alt="Image">
                        <span class="date">May <br> 03</span>
                    </div>

                    <div class="row">
                        <div class="col-4">
                            <img src="{{asset('assets/images/blog/blog-1.jpg')}}" alt="Image">
                        </div>
                        <div class="col-4">
                            <img src="{{asset('assets/images/blog/blog-1.jpg')}}" alt="Image">
                        </div>
                        <div class="col-4">
                            <img src="{{asset('assets/images/blog/blog-1.jpg')}}" alt="Image">
                        </div>
                    </div>

                    <div class="blog-top-content">
                        <div class="blog-content">
                            <ul class="admin">
                                <li> 
                                    {{ $post->categorie->titre }}
                                </li>
                                <li> 
                                    <a href="#comments">
                                        {{ count($post->comments) }} commentaire(s)
                                    </a>
                                </li>
                            </ul>
                            
                            <p>
                                {{ $post->description }}
                            </p>

                            <div class="gap-mb-20"></div>
                        </div>
                    </div>

                    <h3 class="my-5">Commentaires</h3>

                    <ul class="comment" id="comments">
                        <div class="row">
                            @foreach ($post->comments as $comment)
                                <li>
                                    <img src="{{asset('assets/images/blog/comment-1.jpg')}}" alt="Image">
                                    <span>{{ $comment->created_at }}</span>
                                    <h3> {{ $comment->nom }} </h3>
                                    <button type="button" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#staticBackdrop{{$comment->id}}">
                                        commenter    
                                    </button>
                                    <p>
                                        {{ $comment->comment }}
                                    </p>

                                    {{-- {{ dd($post->comments[2]->commentaires) }} --}}
                                </li>
                                    
                                @forelse ($comment->commentaires as $cmt)
                                <li class="margin-left">
                                    <img src="{{asset('assets/images/blog/comment-1.jpg')}}" alt="Image">
                                    <span>{{ $cmt->created_at }}</span>
                                    <h3> {{ $cmt->nom }} </h3>
                                    <p>
                                        {{ $cmt->comment }}
                                    </p>
                                </li>
                                @empty
                                @endforelse
                                <!-- Modal -->
                                <div class="modal fade" id="staticBackdrop{{$comment->id}}" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                    <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                        <h5 class="modal-title" id="staticBackdropLabel">Nouveau commentaire</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                        <form method="post" action="{{route('comment.add')}}">
                                            @csrf
                                            <input type="hidden" name="commentId" value="{{$comment->id}}">

                                            <div class="row">

                                                <div class="col-lg-6 col-sm-6">
                                                    <div class="form-group">
                                                        <label>Nom *</label>
                                                        <input type="text" name="nom" class="form-control">
                                                    </div>
                                                </div>
                                                
                                                <div class="col-lg-6 col-sm-6">
                                                    <div class="form-group">
                                                        <label>Email*</label>
                                                        <input type="email" name="mail" class="form-control">
                                                    </div>
                                                </div>
                                                
                                                <div class="col-lg-12 col-md-12">
                                                    <div class="form-group">
                                                        <label>Commentaire</label>
                                                        <textarea name="comment" class="form-control" rows="3"></textarea>
                                                    </div>
                                                </div>
                                            </div>
                                            
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fermer</button>
                                                <button type="submit" class="btn btn-warning">Commenter</button>
                                            </div>
                                        </form>
                                        </div>
                                    </div>
                                    </div>
                                </div>
                                
                            @endforeach
                        </div>

                    </ul>

                    <div class="leave-reply">
                        <h3>Laisser un commentaire</h3>

                        <form method="post" action="{{route('comment.add')}}">
                            @csrf

                            <input type="hidden" name="postId" value="{{$post->id}}">
                            
                            <p>
                                Votre adresse e-mail ne sera pas publiée. <br>
                                Les champs obligatoires sont marqués par (*)
                            </p>
                            <div class="row">
                                <div class="col-lg-6 col-sm-6">
                                    <div class="form-group">
                                        <label>Nom *</label>
                                        <input type="text" name="nom" class="form-control">
                                    </div>
                                </div>
    
                                <div class="col-lg-6 col-sm-6">
                                    <div class="form-group">
                                        <label>Email*</label>
                                        <input type="email" name="mail" class="form-control">
                                    </div>
                                </div>
    
                                <div class="col-lg-12 col-md-12">
                                    <div class="form-group">
                                        <label>Commentaire</label>
                                        <textarea name="comment" class="form-control" rows="8"></textarea>
                                    </div>
                                </div>
    
                                <div class="col-lg-12 col-md-12">
                                    <button type="submit" class="default-btn">
                                        Poster le commentaire
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

            <div class="col-lg-4">
                <div class="widget-sidebar ml-15">
                    <div class="sidebar-widget search">
                        <form class="search-form">
                            <input class="form-control" name="search" placeholder="Search..." type="text">
                            <button class="search-button" type="submit">
                                <i class="ri-search-line"></i>
                            </button>
                        </form>	
                    </div>

                    <div class="sidebar-widget categories">
                        <h3>Categories</h3>

                        <ul>
                            <li>
                                <a href="{{route('realisations')}}">
                                    <i class="ri-arrow-right-s-line"></i>
                                    Toutes les catégories
                                </a>
                            </li>
                            @foreach ($categories as $categorie)    
                                <li>
                                    <a href="{{route('post.categorie', $categorie->slug)}}">
                                        <i class="ri-arrow-right-s-line"></i>
                                        {{ $categorie->titre }}
                                    </a>
                                </li>
                            @endforeach
                        </ul>
                    </div>

                    <div class="sidebar-widget recent-post">
                        <h3 class="widget-title">Autres Travaux </h3>
                        
                        <ul>
                            @php
                                $i = 0;
                            @endphp
                            @foreach ($posts as $post)
                                <li>
                                    <a href="blog-details.html">
                                        {{ $post->titre }} <br> {{ Str::limit($post->description, 20, ' ...') }}
                                        <img src="assets/images/blog/blog-4.jpg" alt="Image">
                                    </a>
                                    <span> {{ $post->date }} </span>
                                </li>
                                @php
                                    $i++ ;
                                    if ( $i > 3 ) {
                                        break;
                                    }
                                @endphp
                            @endforeach
                        </ul>
                    </div>

                    
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Blog Page Area -->
  
@endsection