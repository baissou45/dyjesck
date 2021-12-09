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
                                    Maintenance
                                </li>
                                <li> 
                                    <a href="#comments">
                                        (03) comments
                                    </a>
                                </li>
                            </ul>
                            
                            <p>Nulla quis lorem ut libero malesuada feugiat. Sed porttitor lectus nibh. Quisque velit nisi, pretium ut lacinia in, elementum id enim. Praesent sapien massa, convallis a pellentesque nec, egestas non nisi. Proin eget tortor risus. Curabitur aliquet quam id dui posuere blandit. Proin eget tortor risus. Vestibulum ac diam sit amet quam vehicula elementum sed sit amet dui. Praesent sapien massa, convallis a pellentesque nec, egestas non nisi. Quisque velit nisi, pretium ut lacinia in, elementum id enim. Nulla quis lorem ut libero malesuada feugiat. Mauris blandit aliquet elit, eget tincidunt nibh pulvinara.</p>


                            <div class="gap-mb-20"></div>
                        </div>
                    </div>

                    <h3 class="my-5">Commentaires</h3>

                    <ul class="comment" id="comments">
                        <li>
                            <img src="{{asset('assets/images/blog/comment-1.jpg')}}" alt="Image">
                            <h3>Harold McLeod</h3>
                            <span>14, May 2021</span>
                            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ullam, quos! Pariatur ipsum aperiam alias distinctio vel molestiae id. Aut atque sequi eius omnis et? Nesciunt blanditiis incidunt.</p>

                            <button data-toggle="modal" data-target="#exampleModalCenter" class="read-more">Répondre</button>
                        </li>

                        <li class="margin-left">
                            <img src="{{asset('assets/images/blog/comment-2.jpg')}}" alt="Image">
                            <h3>Alex Dew</h3>
                            <span>14, May 2021</span>
                            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ullam, quos! Pariatur ipsum aperiam alias distinctio vel molestiae id. Aut atque sequi eius omnis et? Nesciunt.</p>

                            <a href="blog-details.html" class="read-more">Reply</a>
                        </li>

                        <li>
                            <img src="{{asset('assets/images/blog/comment-3.jpg')}}" alt="Image">
                            <h3>Juhon Smith</h3>
                            <span>14, May 2021</span>
                            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ullam, quos! Pariatur ipsum aperiam alias distinctio vel molestiae id. Aut atque sequi eius omnis Nesciunt blanditiis.</p>

                            <a href="blog-details.html" class="read-more">Reply</a>
                        </li>
                    </ul>

                    <div class="leave-reply">
                        <h3>Laisser un commentaire</h3>

                        <form method="post" action="{{route('comment.add')}}">
                            @csrf

                            <input type="hidden" name="postId">
                            
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
                                <a href="blog.html">
                                    <i class="ri-arrow-right-s-line"></i>
                                    Renovation
                                </a>
                            </li>
                            <li>
                                <a href="blog.html">
                                    <i class="ri-arrow-right-s-line"></i>
                                    Plumber
                                </a>
                            </li>
                            <li>
                                <a href="blog.html">
                                    <i class="ri-arrow-right-s-line"></i>
                                    Electrical
                                </a>
                            </li>
                            <li>
                                <a href="blog.html">
                                    <i class="ri-arrow-right-s-line"></i>
                                    Painter
                                </a>
                            </li>
                            <li>
                                <a href="blog.html">
                                    <i class="ri-arrow-right-s-line"></i>
                                    Carpentry
                                </a>
                            </li>
                            <li>
                                <a href="blog.html">
                                    <i class="ri-arrow-right-s-line"></i>
                                    Garden
                                </a>
                            </li>
                            <li>
                                <a href="blog.html">
                                    <i class="ri-arrow-right-s-line"></i>
                                    Heating
                                </a>
                            </li>
                            <li>
                                <a href="blog.html">
                                    <i class="ri-arrow-right-s-line"></i>
                                    Home maintenance
                                </a>
                            </li>
                        </ul>
                    </div>

                    <div class="sidebar-widget recent-post">
                        <h3 class="widget-title">Latest post</h3>
                        
                        <ul>
                            <li>
                                <a href="blog-details.html">
                                    Why you need <br> handyman services
                                    <img src="{{asset('assets/images/blog/blog-4.jpg')}}" alt="Image">
                                </a>
                                <span>5th May, 2021</span>
                            </li>
                            <li>
                                <a href="blog-details.html">
                                    Top 10 tips for <br> handyman services
                                    <img src="{{asset('assets/images/blog/blog-5.jpg')}}" alt="Image">
                                </a>
                                <span>4th May, 2021</span>
                            </li>
                            <li>
                                <a href="blog-details.html">
                                    Top 5 tips for cleaning <br> your home
                                    <img src="{{asset('assets/images/blog/blog-6.jpg')}}" alt="Image">
                                </a>
                                <span>3rd May, 2021</span>
                            </li>
                        </ul>
                    </div>

                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Blog Page Area -->

<!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
    Launch static backdrop modal
  </button>
  
  <!-- Modal -->
  <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="staticBackdropLabel">Modal title</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          ...
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary">Understood</button>
        </div>
      </div>
    </div>
  </div>

@endsection