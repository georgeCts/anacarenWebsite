@section('components.Sidebar')
    <!-- partial:partials/_sidebar.html -->
    <nav class="sidebar sidebar-offcanvas" id="sidebar">
        <ul class="nav">
            <li class="nav-item nav-profile">
                <div class="nav-link">
                    <div class="user-wrapper">
                        <div class="profile-image">
                            <img src="{{ asset('storage/'.Auth::user()->photo) }}" alt="profile image" />
                        </div>
                        <div class="text-wrapper">
                            <p class="profile-name">{{ ucfirst(Auth::user()->name) }} {{ ucfirst(Auth::user()->last_name) }}</p>
                            <div>
                                <small class="designation text-muted">Administrador</small>
                                <span class="status-indicator online"></span>
                            </div>
                        </div>
                    </div>
                    <a href="{{URL::to('panel/publicaciones/crear') }}" class="btn btn-success btn-block">Nuevo Post <i class="mdi mdi-plus"></i></a>
                </div>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="{{URL::to('panel')}}">
                    <i class="menu-icon mdi mdi-television"></i>
                    <span class="menu-title">Panel</span>
                </a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="{{URL::to('panel/publicaciones')}}">
                    <i class="menu-icon mdi mdi-rocket"></i>
                    <span class="menu-title">Publicaciones</span>
                </a>
            </li>
        </ul>
    </nav>
    <!-- partial -->
@endsection