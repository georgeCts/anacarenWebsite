@section('components.Navbar')
    <!-- Header-->
    <header class="header">
        <!-- Top bar -->
        <div class="py-2 bg-dark text-white">
            <div class="container py-1">
                <div class="row align-items-center">
                    <div class="col-lg-4">
                        {{-- <ul class="list-inline mb-0 text-small">
                            <li class="list-inline-item"><a class="reset-anchor" href="#">About us</a></li>
                            <li class="list-inline-item">|</li>
                            <li class="list-inline-item"><a class="reset-anchor" href="#">Sitemap</a></li>
                        </ul> --}}
                    </div>
                    <div class="col-lg-4 d-none d-lg-block text-center">
                        <ul class="list-inline mb-0 small">
                            <li class="list-inline-item"><a class="reset-anchor" href="#"><i class="fab fa-facebook-f"></i></a></li>
                            <li class="list-inline-item"><a class="reset-anchor" href="#"><i class="fab fa-twitter"></i></a></li>
                            <li class="list-inline-item"><a class="reset-anchor" href="#"><i class="fab fa-instagram"></i></a></li>
                            <li class="list-inline-item"><a class="reset-anchor" href="#"><i class="fab fa-youtube"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- Navbar 1 -->
        <nav class="navbar navbar-expand-lg navbar-light bg-white py-4">
            <div class="container text-center">
                <a class="navbar-brand mx-auto" href="index.html">
                    {{-- <img class="mb-2" src="img/logo.svg" alt="" width="140" /> --}}
                    <h2>Anacaren</h2>
                    <p class="text-small text-uppercase text-gray mb-0">Dejando el miedo atrás</p>
                </a>
            </div>
        </nav>
        <!-- Navbar 2 -->
        <nav class="navbar navbar-expand-lg navbar-light border-gray py-2 bg-light">
            <div class="container">
                <button class="navbar-toggler navbar-toggler-right mx-auto border-0" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse text-center" id="navbarSupportedContent">
                    <ul class="navbar-nav mx-auto">
                        <li class="nav-item px-1">
                            <a @if (Request::path() == ('/')) {!!'class=" nav-link active"' !!} @else {!!'class=" nav-link"' !!}  @endif href="{{URL::to('/') }}">Inicio</a>
                        </li>
                        <li class="nav-item px-1">
                            <a @if (Request::path() == ('/blog')) {!!'class=" nav-link active"' !!} @else {!!'class=" nav-link"' !!}  @endif href="{{URL::to('/blog') }}">Blog</a>
                        </li>
                        <li class="nav-item px-1">
                            <a class="nav-link" href="#">Tienda</a>
                        </li>
                        <li class="nav-item px-1">
                            <a class="nav-link" href="#">Contacto</a>
                        </li>
                        {{-- <li class="nav-item px-1 dropdown"><a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Pages</a>
                            <div class="dropdown-menu text-center text-lg-left" aria-labelledby="navbarDropdownMenuLink"><a class="dropdown-item" href="index.html">Home</a><a class="dropdown-item" href="listing.html">Listing</a><a class="dropdown-item" href="post.html">Post</a></div>
                        </li> --}}
                    </ul>
                </div>
            </div>
        </nav>
    </header>
@endsection