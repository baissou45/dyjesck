@extends('layout.allBlanc')

@section('contenu')

<!-- Start Page Title Area -->
<div class="page-title-area bg-6">
    <div class="container">
        <div class="page-title-content">
            <h2>Blog</h2>

            <ul>
                <li>
                    <a href="{{route('accueil')}}">
                        Accueil 
                    </a>
                </li>

                <li class="active">Blog</li>
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
                <div class="mr-15">
                    <div class="row justify-content-center">
                        
                        @foreach ($posts as $post)
                            <div class="col-lg-6 col-md-6">
                                <div class="single-blog style-for-page">
                                    <a href="{{route('realisations.show', $post->slug)}}" class="blog-img">
                                        <img src="{{asset($post->img)}}" style="width: 400px; height: 430px;" />
                                        <span class="date">{{ $post->date }}</span>
                                    </a>
        
                                    <div class="blog-content">
                                        <ul>
                                            <li>
                                                <a href="{{route('realisations.show', $post->slug)}}">
                                                    By: {{ $post->user->name }}
                                                </a>
                                            </li>
                                            <li class="tag">
                                                <a href="{{route('realisations.show', $post->slug)}}"> {{ $post->categorie->titre }} </a>
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
                        {!! $posts->links() !!}
                        
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