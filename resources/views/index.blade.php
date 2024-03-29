@section('title', 'Inicio')

@section('content')
  <!-- Destinations -->
  <section class="pt-5">
    <div class="container">
      <h1>Momentos</h1>
      <p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quis aliquid</p>
    </div>
    <div class="destinations-slider owl-carousel owl-theme nav-center-custom owl-padding">
      @foreach ($lstPosts as $post)
        <a class="destination d-flex align-items-end bg-center bg-cover" href="{{URL::to('blog/'.$post->slug)}}" style="background: url(/storage{{$post->file}})">
          <div class="destination-inner w-100 text-center text-white index-forward has-transition">
            <h2 class="h3 mb-4">{{$post->title}}</h2>
            <div class="btn btn-primary btn-block destination-btn text-white">Leer más</div>
          </div>
        </a>
      @endforeach
    </div>
  </section>

  <!-- Divider Section -->
  <section class="py-5">
    <div class="container py-4">
      <!-- Home listing -->
      <div class="row align-items-stretch bg-full-left">
        <div class="col-lg-6 pr-lg-0 order-2 order-lg-1">
          <div class="h-100 bg-light d-flex align-items-center">
            <div class="py-5 pr-4 pl-3 pl-lg-0">
              <p class="text-primary font-weight-bold small text-uppercase mb-2">Dejando el miedo atrás</p>
              <h3 class="h4"> <a class="text-reset" href="post.html">Viajando sola</a></h3>
              <p class="text-muted text-small mb-3">
                Viajar solo no es algo fácil y para muchos algo imposible de hacer. Para viajar solo se necesita valor no solo para enfrentar al mundo, si no para toparnos con nuestro más grande miedo, nosotros mismos. Yo te voy a mostrar que a la Soledad no hay que tenerle miedo, solo es una palabra que una vez leyéndome aprenderás a saborearla y no podrás soltarla. Atrévete a ser diferente y a conocerte, atrévete, a retarte y superar tus más grandes temores. Bienvenidos a mi Blog #ViajandoSola
              </p>
              <ul class="list-inline small text-uppercase mb-0">
                <li class="list-inline-item align-middle"><img class="rounded-circle shadow-sm" src="img/avatar_anacaren.jpeg" alt="" width="30"/></li>
                <li class="list-inline-item mr-0 text-gray align-middle">Por </li>
                <li class="list-inline-item align-middle mr-0"><a class="font-weight-bold reset-anchor" href="#">Anacaren Gtz.</a></li>
                <li class="list-inline-item text-gray align-middle mr-0">|</li>
                <li class="list-inline-item text-gray align-middle">Sep, 2021</li>
              </ul>
            </div>
          </div>
        </div>
          <div class="col-lg-6 pl-lg-0 order-1 order-lg-2">
              <a class="d-block h-100 bg-center bg-cover" href="post.html" style="background: url(img/home_divider.jpeg)"></a>
          </div>
      </div>
    </div>
  </section>

  <!-- Instagram section-->
  <section class="pb-5">
    <div class="container pb-4">
      <header class="text-center mb-5">
        <h2>Galería</h2>
        <p>Se supone que aquí irán las fotos de ana... XD</p>
      </header>
      <div class="row">
        <div class="col-lg-3 col-md-6 px-md-1 py-1"><a class="instagram-item d-block w-100 reset-anchor text-white" href="#"><img class="img-fluid" src="img/listing-tnumbnail-1.jpg" alt="">
            <div class="instagram-item-overlay p-5">
              <h6>We travel not to escape life, but for life not to escape us.</h6>
            </div></a></div>
        <div class="col-lg-3 col-md-6 px-md-1 py-1"><a class="instagram-item d-block w-100 reset-anchor text-white" href="#"><img class="img-fluid" src="img/listing-tnumbnail-2.jpg" alt="">
            <div class="instagram-item-overlay p-5">
              <h6>We travel not to escape life, but for life not to escape us.</h6>
            </div></a></div>
        <div class="col-lg-3 col-md-6 px-md-1 py-1"><a class="instagram-item d-block w-100 reset-anchor text-white" href="#"><img class="img-fluid" src="img/listing-tnumbnail-3.jpg" alt="">
            <div class="instagram-item-overlay p-5">
              <h6>We travel not to escape life, but for life not to escape us.</h6>
            </div></a></div>
        <div class="col-lg-3 col-md-6 px-md-1 py-1"><a class="instagram-item d-block w-100 reset-anchor text-white" href="#"><img class="img-fluid" src="img/listing-tnumbnail-4.jpg" alt="">
            <div class="instagram-item-overlay p-5">
              <h6>We travel not to escape life, but for life not to escape us.</h6>
            </div></a></div>
        <div class="col-lg-3 col-md-6 px-md-1 py-1"><a class="instagram-item d-block w-100 reset-anchor text-white" href="#"><img class="img-fluid" src="img/listing-tnumbnail-5.jpg" alt="">
            <div class="instagram-item-overlay p-5">
              <h6>We travel not to escape life, but for life not to escape us.</h6>
            </div></a></div>
        <div class="col-lg-3 col-md-6 px-md-1 py-1"><a class="instagram-item d-block w-100 reset-anchor text-white" href="#"><img class="img-fluid" src="img/listing-tnumbnail-6.jpg" alt="">
            <div class="instagram-item-overlay p-5">
              <h6>We travel not to escape life, but for life not to escape us.</h6>
            </div></a></div>
        <div class="col-lg-3 col-md-6 px-md-1 py-1"><a class="instagram-item d-block w-100 reset-anchor text-white" href="#"><img class="img-fluid" src="img/listing-tnumbnail-1.jpg" alt="">
            <div class="instagram-item-overlay p-5">
              <h6>We travel not to escape life, but for life not to escape us.</h6>
            </div></a></div>
        <div class="col-lg-3 col-md-6 px-md-1 py-1"><a class="instagram-item d-block w-100 reset-anchor text-white" href="#"><img class="img-fluid" src="img/listing-tnumbnail-2.jpg" alt="">
            <div class="instagram-item-overlay p-5">
              <h6>We travel not to escape life, but for life not to escape us.</h6>
            </div></a></div>
      </div>
    </div>
  </section>

  <!-- Travel essentials section -->
  <section class="py-5 bg-light">
    <div class="container py-4">
      <header class="text-center mb-5">
        <h2>Productos relevantes</h2>
        <p>Se pueden poner algunos productos de ana.... :D</p>
      </header>
      <div class="row text-center">
        <div id='product-component-1635017265656'></div>
        {{-- <div class="col-lg-3 col-md-6"><a class="text-reset text-decoration-none" href="post.html"><img class="mb-4" src="img/bag.png" alt="" height="150">
            <h3 class="h5">Backpack</h3>
            <p class="text-small text-muted">Deserunt et ad culpa culpa dolore.</p></a></div>
        <div class="col-lg-3 col-md-6"><a class="text-reset text-decoration-none" href="post.html"><img class="mb-4" src="img/camera.png" alt="" height="150">
            <h3 class="h5">Camera</h3>
            <p class="text-small text-muted">Consectetur ex sunt duis minim quis dolor.</p></a></div>
        <div class="col-lg-3 col-md-6"><a class="text-reset text-decoration-none" href="post.html"><img class="mb-4" src="img/glasses.png" alt="" height="150">
            <h3 class="h5">Sunglasses</h3>
            <p class="text-small text-muted">Deserunt et ad culpa culpa dolore.</p></a></div>
        <div class="col-lg-3 col-md-6"><a class="text-reset text-decoration-none" href="post.html"><img class="mb-4" src="img/headphone.png" alt="" height="150">
            <h3 class="h5">Headphones</h3>
            <p class="text-small text-muted">Elit ad est labore irure qui.</p></a></div>
      </div> --}}
    </div>
  </section>

  <!-- Subscribe section -->
  <section class="py-5">
    <div class="container py-4">
      <div class="row align-items-center">
        <div class="col-lg-6 position-relative py-4"><img class="subscribe-img" src="img/subscribe-img-1.jpg" alt=""><img class="subscribe-img" src="img/subscribe-img-2.jpg" alt=""></div>
        <div class="col-lg-6">
          <h2>Consejos y más</h2>
          <p class="text-muted mb-5">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eos quidem facere aliquam, delectus, incidunt ipsum fugit deserunt ducimus quibusdam consequuntur quos numquam ipsa suscipit animi dolore. Est beatae inventore voluptas.</p>
          <form action="#">
            <div class="row">
              <div class="form-group col-lg-8">
                <input class="form-control" type="email" name="email" placeholder="Ingresa tu correo electrónico">
              </div>
              <div class="form-group col-lg-4">
                <button class="btn btn-dark btn-block" type="submit">Suscríbete</button>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </section>

  <!-- Top categories section -->
  <section class="py-5 bg-light">
    <div class="container py-4">
      <header class="mb-5 text-center">
        <h2>Top categorías</h2>
        <p>En caso de querer agregar un top de tipos de categorias.....</p>
      </header>
      <div class="row text-center">
        <div class="col-lg-2 col-md-4 col-sm-6 mb-4 mb-lg-0"><a class="reset-anchor d-block" href="listing.html">
            <svg class="svg-icon mb-3 svg-icon-big svg-icon-light text-primary">
              <use xlink:href="#food-1"> </use>
            </svg>
            <h3 class="h5">Restaurants</h3>
            <p class="text-muted text-small">3 Destinations</p></a></div>
        <div class="col-lg-2 col-md-4 col-sm-6 mb-4 mb-lg-0"><a class="reset-anchor d-block" href="listing.html">
            <svg class="svg-icon mb-3 svg-icon-big svg-icon-light text-primary">
              <use xlink:href="#paper-bag-1"> </use>
            </svg>
            <h3 class="h5 mb-1">Markets</h3>
            <p class="text-muted text-small">7 Destinations</p></a></div>
        <div class="col-lg-2 col-md-4 col-sm-6 mb-4 mb-lg-0"><a class="reset-anchor d-block" href="listing.html">
            <svg class="svg-icon mb-3 svg-icon-big svg-icon-light text-primary">
              <use xlink:href="#special-price-1"> </use>
            </svg>
            <h3 class="h5 mb-1">Low budget</h3>
            <p class="text-muted text-small">2 Destinations</p></a></div>
        <div class="col-lg-2 col-md-4 col-sm-6 mb-4 mb-lg-0"><a class="reset-anchor d-block" href="listing.html">
            <svg class="svg-icon mb-3 svg-icon-big svg-icon-light text-primary">
              <use xlink:href="#movie-camera-1"> </use>
            </svg>
            <h3 class="h5 mb-1">Cinemas</h3>
            <p class="text-muted text-small">4 Destinations</p></a></div>
        <div class="col-lg-2 col-md-4 col-sm-6 mb-4 mb-lg-0"><a class="reset-anchor d-block" href="listing.html">
            <svg class="svg-icon mb-3 svg-icon-big svg-icon-light text-primary">
              <use xlink:href="#beach-1"> </use>
            </svg>
            <h3 class="h5 mb-1">Beaches</h3>
            <p class="text-muted text-small">5 Destinations</p></a></div>
        <div class="col-lg-2 col-md-4 col-sm-6 mb-4 mb-lg-0"><a class="reset-anchor d-block" href="listing.html">
            <svg class="svg-icon mb-3 svg-icon-big svg-icon-light text-primary">
              <use xlink:href="#camping-1"> </use>
            </svg>
            <h3 class="h5 mb-1">Camping</h3>
            <p class="text-muted text-small">6 Destinations</p></a></div>
      </div>
    </div>
  </section>

  <!-- Sponsors section-->
  <section class="py-5">
    <div class="container py-4">
      <header class="text-center mb-4">
        <h2>Colaboraciones</h2>
      </header>
      <!-- Brands -->
      <div class="owl-carousel sponsors-slider">
        <a href="#"><img class="d-block mx-auto my-3 sponsor" src="img/brand-1.svg" alt=""></a>
        <a href="#"><img class="d-block mx-auto my-3 sponsor" src="img/brand-2.svg" alt=""></a>
        <a href="#"><img class="d-block mx-auto my-3 sponsor" src="img/brand-3.svg" alt=""></a>
        <a href="#"><img class="d-block mx-auto my-3 sponsor" src="img/brand-4.svg" alt=""></a>
        <a href="#"><img class="d-block mx-auto my-3 sponsor" src="img/brand-5.svg" alt=""></a>
        <a href="#"><img class="d-block mx-auto my-3 sponsor" src="img/brand-6.svg" alt=""></a>
      </div>
    </div>
  </section>
@endsection

@include('components.Navbar')
@include('components.Footer')
@include('components.Scripts')
@include('components.Stylesheets')

@extends('components.Main')