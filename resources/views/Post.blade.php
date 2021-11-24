@section('title', $post->title)

@section('content')
    <section class="py-5">
        <div class="container text-center">
            <p class="h6 mb-0 text-uppercase text-primary">{{$post->category->category}}</p>
            <h1>{{$post->title}}</h1>
            <ul class="list-inline small text-uppercase mb-0">
                <li class="list-inline-item align-middle"><img class="rounded-circle shadow-sm" src="img/person-1.jpg" alt="" width="40"/></li>
                <li class="list-inline-item mr-0 text-muted align-middle">By </li>
                <li class="list-inline-item align-middle mr-0"><a class="font-weight-bold reset-anchor" href="#">{{ $post->user->completeName() }}</a></li>
                <li class="list-inline-item text-muted align-middle mr-0">|</li>
                <li class="list-inline-item text-muted align-middle mr-0">{{ $post->formattedCreated() }}</li>
            </ul>
        </div>

        <div class="container mt-5">
            <div class="row">
                <div class="col-lg-8 mb-5 mb-lg-0">
                    {!! $post->body !!}

                    {{-- <h3 class="h4 mb-4">Comparte esta publicación</h3>
                    <ul class="list-inline mb-5">
                        <li class="list-inline-item mr-1 mb-3"><a class="social-link-share facebook" href="#"><i class="fab fa-facebook-f mr-2"></i>Compartir</a></li>
                        <li class="list-inline-item mr-1 mb-3"><a class="social-link-share twitter" href="#"><i class="fab fa-twitter mr-2"></i>Tweet</a></li>
                        <li class="list-inline-item mr-1 mb-3"><a class="social-link-share instagram" href="#"><i class="fab fa-instagram mr-2"></i>Compartir</a></li>
                    </ul> --}}
                </div>

                <div class="col-lg-4">
                    <!-- About me widget -->
                    <div class="mb-5 text-center"><img class="mb-3 rounded-circle img-thumbnail shadow-sm" src="{{ asset('storage/' . $post->user->photo) }}" alt="" width="110" />
                        <h3 class="h4">/Acerca de mi</h3>
                        <p class="text-small text-muted px-sm-4">Viajera. Escritora. Abogada.</p>
                        <img class="d-block mx-auto mb-3" src="img/signature.png" alt="" width="60" />
                        <ul class="list-inline text-small mb-0">
                            <li class="list-inline-item"><a class="reset-anchor" href="#"><i class="fab fa-facebook-f"></i></a></li>
                            <li class="list-inline-item"><a class="reset-anchor" href="#"><i class="fab fa-twitter"></i></a></li>
                            <li class="list-inline-item"><a class="reset-anchor" href="#"><i class="fab fa-instagram"></i></a></li>
                            <li class="list-inline-item"><a class="reset-anchor" href="#"><i class="fab fa-youtube"></i></a></li>
                        </ul>
                    </div>

                    <!-- Categories widget -->
                    <div class="mb-5 text-center">
                        <a class="category reset-anchor bg-cover bg-center mb-2" href="#" style="background: url(/img/category-1.jpg)">
                            <p class="category-title text-uppercase small">Lifestyle</p>
                        </a>
                        <a class="category reset-anchor bg-cover bg-center mb-2" href="#" style="background: url(/img/category-2.jpg)">
                            <p class="category-title text-uppercase small">Travel</p>
                        </a>
                        <a class="category reset-anchor bg-cover bg-center" href="#" style="background: url(/img/category-3.jpg)">
                            <p class="category-title text-uppercase small">Vacation</p>
                        </a>
                    </div>

                    <!-- Newsletter widget -->
                    <div class="px-4 py-5 bg-light mb-5 text-center">
                        <h3 class="h5"><i class="far fa-envelope mr-2"></i>Unete a la familia</h3>
                        <p class="text-small text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod.</p>
                        <form action="#">
                            <div class="form-group mb-1">
                                <input class="form-control form-control-sm" type="email" name="email" placeholder="Emaill address">
                            </div>
                            <div class="form-group mb-0">
                                <button class="btn btn-dark btn-block btn-sm" type="submit">Subscribe</button>
                            </div>
                        </form>
                    </div>

                    <!-- Latest posts widget -->
                    <div class="mb-5">
                        <h3 class="h5">Ultimos posts</h3>
                        <p class="text-small text-muted mb-4">Lorem ipsum dolor sit, consectetur adipisicing elit, sed do eiusmod.</p>
                        <ul class="list-unstyled">
                            <li class="media mb-1"><a href="post.html"><img src="/img/recent-posts-thumb-1.jpg" alt="" width="80"></a>
                                <div class="media-body ml-3">
                                <p class="small text-primary text-uppercase mb-0">5 Aug 2018</p>
                                <h6 class="mb-1"><a class="reset-anchor" href="post.html">The top climbing tours</a></h6>
                                <p class="small text-muted">Lorem ipsum dolor sit, consectetur adipisicing elit, sed.</p>
                                </div>
                            </li>
                            <li class="media mb-1"><a href="post.html"><img src="/img/recent-posts-thumb-2.jpg" alt="" width="80"></a>
                                <div class="media-body ml-3">
                                <p class="small text-primary text-uppercase mb-0">5 Aug 2018</p>
                                <h6 class="mb-1"><a class="reset-anchor" href="post.html">Travel guide to Canada</a></h6>
                                <p class="small text-muted">Lorem ipsum dolor sit, consectetur adipisicing elit, sed.</p>
                                </div>
                            </li>
                            <li class="media"><a href="post.html"><img src="/img/recent-posts-thumb-3.jpg" alt="" width="80"></a>
                                <div class="media-body ml-3">
                                <p class="small text-primary text-uppercase mb-0">5 Aug 2018</p>
                                <h6 class="mb-1"><a class="reset-anchor" href="post.html">A day in Tailand</a></h6>
                                <p class="small text-muted mb-0">Lorem ipsum dolor sit, consectetur adipisicing elit, sed.</p>
                                </div>
                            </li>
                        </ul>
                    </div>

                    <!-- Instagram widget -->
                    <div class="mb-5">
                        <h3 class="h5">Sigueme en Instagram</h3>
                        <p class="text-small text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod.</p>
                        <div id="instafeed" class="row px-3"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

@section('scripts')
    <script src="{{ asset('js/instafeed.js') }}"></script>
    <script type="text/javascript">
        var feed = new Instafeed({
            accessToken: 'IGQVJYdUJuTFpqZAFZAFUXRabVNvMlZAtV1lySnM0ZAmh5OGlkT0tWeEdlWGhzT0ZAiUmlJVTRuT2J3d0cyZADBGb2NtSENTb0dnbXVGTmltV2dOQzcwMVdzWGFJQVFNaFpreHBFNXN1b19BUDYwSWN5b0MyRwZDZD',
            limit: 8,
            templateBoundaries: ['_{','}_'],
            template: '<div class="col-3 px-0"><a class="instagram-item overlay-hover-dark-sm d-block w-100" href="_{link}_"><div class="overlay-content"><img class="img-fluid" src="_{image}_" alt=""></div></a></div>'
        });
        feed.run();
    </script>
@endsection

@include('components.Navbar')
@include('components.Footer')
@include('components.Scripts')
@include('components.Stylesheets')

@extends('components.Main')