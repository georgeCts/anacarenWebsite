@section('title', 'Blog')

@section('content')
    <!-- Hero section -->
    <section class="hero bg-center bg-cover" style="background: url(/img/hero-banner.jpg)">
        <div class="dark-overlay py-5">
          <div class="overlay-content">
            <div class="container py-5 text-white text-center">
              <h1>Blog</h1>
              <p>Algunas de las publicaciones que se han creado.</p>
            </div>
          </div>
        </div>
    </section>

    <!-- Blog listing -->
    <section class="pt-5">
        <div class="container pt-5">
            <div class="row mb-5">
                <div class="col-lg-8">
                    <div class="row text-center">
                        @foreach ($lstPosts as $post)
                            <div class="col-lg-6 mb-5">
                                <a href="{{URL::to('test/blog/'.$post->slug)}}"><img class="img-fluid mb-4" src="/img/listing-tnumbnail-3.jpg" alt=""/></a>
                                <ul class="list-inline small text-uppercase mb-0">
                                    <li class="list-inline-item mr-0 text-gray align-middle">Por </li>
                                    <li class="list-inline-item align-middle mr-0"><a class="font-weight-bold reset-anchor" href="#">{{ $post->user->completeName() }}</a></li>
                                    <li class="list-inline-item text-gray align-middle mr-0">|</li>
                                    <li class="list-inline-item text-gray align-middle">{{ $post->formattedCreated() }}</li>
                                </ul>
                                <h3 class="h4 mt-2"><a class="reset-anchor" href="{{URL::to('test/blog/'.$post->slug)}}">{{ $post->title }}</a></h3>
                                <a class="reset-anchor text-gray text-uppercase small mb-2 d-block" href="#">{{ $post->category->category }}</a>
                                <p class="text-small mb-1">{{ $post->excerpt }}</p>
                                <a class="btn btn-link" href="{{URL::to('test/blog/'.$post->slug)}}">Seguir leyendo</a>
                            </div>
                        @endforeach
                    </div>
                </div>
                <!-- Sidebar -->
                <div class="col-lg-4">
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
                        <h3 class="h5">Últimos posts</h3>
                        <p class="text-small text-muted mb-4">Lorem ipsum dolor sit, consectetur adipisicing elit, sed do eiusmod.</p>
                        <ul class="list-unstyled">
                            <li class="media mb-1">
                                <a href="post.html"><img src="/img/recent-posts-thumb-1.jpg" alt="" width="80"></a>
                                <div class="media-body ml-3">
                                    <p class="small text-primary text-uppercase mb-0">5 Aug 2018</p>
                                    <h6 class="mb-1"><a class="reset-anchor" href="post.html">The top climbing tours</a></h6>
                                    <p class="small text-muted">Lorem ipsum dolor sit, consectetur adipisicing elit, sed.</p>
                                </div>
                            </li>
                            <li class="media mb-1">
                                <a href="post.html"><img src="/img/recent-posts-thumb-2.jpg" alt="" width="80"></a>
                                <div class="media-body ml-3">
                                    <p class="small text-primary text-uppercase mb-0">5 Aug 2018</p>
                                    <h6 class="mb-1"><a class="reset-anchor" href="post.html">Travel guide to Canada</a></h6>
                                    <p class="small text-muted">Lorem ipsum dolor sit, consectetur adipisicing elit, sed.</p>
                                </div>
                            </li>
                            <li class="media">
                                <a href="post.html"><img src="/img/recent-posts-thumb-3.jpg" alt="" width="80"></a>
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