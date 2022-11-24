<header class="navbar navbar-expand-md navbar-dark d-print-none p-0" style="height: 20px;">
    <div class="container">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbar-menu">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="d-md-flex">
            <h1 class="navbar-brand navbar-brand-autodark d-none-navbar-horizontal pe-md-3">
                <a href="#">
                    <img src="{{ asset('assets/img/logo.png') }}" height="45" {{-- height="32" --}}
                        alt="FOCUSPHOTOGRAPHY" class="{{-- navbar-brand-image --}}">
                </a>
            </h1>
            <div class="nav-item dropdown d-none d-md-flex me-3">
                <a href="#" class="nav-link px-0 text-reset" data-bs-toggle="dropdown" tabindex="-1"
                    aria-label="Mostrar menus">
                    <!-- Download SVG icon from http://tabler-icons.io/i/bell -->
                    <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-layout-grid"
                        width="44" height="44" viewBox="0 0 24 24" stroke-width="1.5" stroke="#ffffff"
                        fill="none" stroke-linecap="round" stroke-linejoin="round">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                        <rect x="4" y="4" width="6" height="6" rx="1" />
                        <rect x="14" y="4" width="6" height="6" rx="1" />
                        <rect x="4" y="14" width="6" height="6" rx="1" />
                        <rect x="14" y="14" width="6" height="6" rx="1" />
                    </svg>

                </a>
                <div class="dropdown-menu dropdown-menu-arrow dropdown-menu-start dropdown-menu-card" style="">
                    <div class="card" style="z-index: 50">
                        <div class="card-header">
                            <h3 class="card-title">Menu</h3>
                        </div>
                        <div class="list-group list-group-flush list-group-hoverable">

                            <div class="list-group-item">
                                <a href="{{ route('dashboard') }}" class="btn border-0 shadow-none p-0">
                                    <div
                                        class="row align-items-center {{ request()->routeIs('dashboard') ? 'text-success' : '' }}">
                                        <div class="col-auto pe-0">
                                            <svg xmlns="http://www.w3.org/2000/svg"
                                                class="icon icon-tabler icon-tabler-copyright" width="44"
                                                height="44" viewBox="0 0 24 24" stroke-width="1.5" stroke="#597e8d"
                                                fill="none" stroke-linecap="round" stroke-linejoin="round">
                                                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                                <circle cx="12" cy="12" r="9" />
                                                <path d="M14.5 9a3.5 4 0 1 0 0 6" />
                                            </svg>
                                        </div>
                                        <div class="col text-truncate">
                                            Inicio
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="list-group-item">
                                <a href="{{ route('proyectos.index') }}" class="btn border-0 shadow-none p-0">
                                    <div
                                        class="row align-items-center {{ request()->routeIs('proyectos.index') ? 'text-success' : '' }}">
                                        <div class="col-auto pe-0">
                                            <svg xmlns="http://www.w3.org/2000/svg"
                                                class="icon icon-tabler icon-tabler-grid-dots" width="44"
                                                height="44" viewBox="0 0 24 24" stroke-width="1.5" stroke="#597e8d"
                                                fill="none" stroke-linecap="round" stroke-linejoin="round">
                                                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                                <circle cx="5" cy="5" r="1" />
                                                <circle cx="12" cy="5" r="1" />
                                                <circle cx="19" cy="5" r="1" />
                                                <circle cx="5" cy="12" r="1" />
                                                <circle cx="12" cy="12" r="1" />
                                                <circle cx="19" cy="12" r="1" />
                                                <circle cx="5" cy="19" r="1" />
                                                <circle cx="12" cy="19" r="1" />
                                                <circle cx="19" cy="19" r="1" />
                                            </svg>
                                        </div>
                                        <div class="col">
                                            Mis Proyectos
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="list-group-item">
                                <a href="{{ route('diagramas.misDiagramas') }}" class="btn border-0 shadow-none p-0">
                                    <div class="row align-items-center {{-- {{request()->routeIs('proyectos.index')? 'text-success' : '' }} --}}">
                                        <div class="col-auto pe-0">
                                            <svg xmlns="http://www.w3.org/2000/svg"
                                                class="icon icon-tabler icon-tabler-layout-board" width="44"
                                                height="44" viewBox="0 0 24 24" stroke-width="1.5"
                                                stroke="#597e8d" fill="none" stroke-linecap="round"
                                                stroke-linejoin="round">
                                                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                                <rect x="4" y="4" width="16" height="16"
                                                    rx="2" />
                                                <path d="M4 9h8" />
                                                <path d="M12 15h8" />
                                                <path d="M12 4v16" />
                                            </svg>
                                        </div>
                                        <div class="col">
                                            Mis Diagramas
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="navbar-nav flex-row order-md-last">
            <div class="d-none d-md-flex">
                <a href="?theme=dark" class="nav-link px-0 hide-theme-dark" title="Enable dark mode"
                    data-bs-toggle="tooltip" data-bs-placement="bottom">
                    <!-- Download SVG icon from http://tabler-icons.io/i/moon -->
                    <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24"
                        viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                        stroke-linecap="round" stroke-linejoin="round">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                        <path d="M12 3c.132 0 .263 0 .393 0a7.5 7.5 0 0 0 7.92 12.446a9 9 0 1 1 -8.313 -12.454z" />
                    </svg>
                </a>
                <a href="?theme=light" class="nav-link px-0 hide-theme-light" title="Enable light mode"
                    data-bs-toggle="tooltip" data-bs-placement="bottom">
                    <!-- Download SVG icon from http://tabler-icons.io/i/sun -->
                    <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24"
                        viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                        stroke-linecap="round" stroke-linejoin="round">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                        <circle cx="12" cy="12" r="4" />
                        <path
                            d="M3 12h1m8 -9v1m8 8h1m-9 8v1m-6.4 -15.4l.7 .7m12.1 -.7l-.7 .7m0 11.4l.7 .7m-12.1 -.7l-.7 .7" />
                    </svg>
                </a>
                <div class="nav-item dropdown d-none d-md-flex me-3">
                    <a href="#" class="nav-link px-0" data-bs-toggle="dropdown" tabindex="-1"
                        aria-label="Show notifications">
                        <!-- Download SVG icon from http://tabler-icons.io/i/bell -->
                        <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24"
                            viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                            stroke-linecap="round" stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                            <path
                                d="M10 5a2 2 0 0 1 4 0a7 7 0 0 1 4 6v3a4 4 0 0 0 2 3h-16a4 4 0 0 0 2 -3v-3a7 7 0 0 1 4 -6" />
                            <path d="M9 17v1a3 3 0 0 0 6 0v-1" />
                        </svg>
                        @if (count(Auth::user()->invitaciones()->where('aceptado', 0)->get()) > 0)
                            <span class="badge bg-success"></span>
                        @endif
                    </a>
                    <div class="dropdown-menu dropdown-menu-arrow dropdown-menu-end dropdown-menu-card"
                        style="width: 400px">
                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title">Notificacion de Solicitudes</h3>
                            </div>
                            @if (count(Auth::user()->invitaciones()->where('aceptado', 0)->get()) > 0)
                            <div class="list-group list-group-flush list-group-hoverable">
                                @foreach (Auth::user()->invitaciones()->where('aceptado', 0)->where('user_id', Auth::user()->id)->take(5)->get() as $notificacion)
                                    <div class="list-group-item">
                                        <div class="row align-items-center">
                                            <div class="col text-truncate">
                                                <a href="#" class="text-body">Proyecto:
                                                    {{ $notificacion->proyecto->nombre }}</a>
                                                <div class="text-muted text-truncate mt-n1">
                                                    {{ $notificacion->contenido }}
                                                </div>
                                            </div>
                                            <div class="col-auto">
                                                <div class="row">
                                                    <div class="col-auto px-1">
                                                        <form action="{{route('notificaciones.aceptar', $notificacion->id)}}" method="POST">
                                                            @csrf
                                                            @method('put')
                                                            <button type="submit" class="btn btn-success">
                                                                Aceptar
                                                            </button>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                            @endif
                        </div>
                    </div>
                </div>
                <div class="nav-item dropdown pe-3">
                    <a href="#" class="nav-link d-flex lh-1 text-reset p-0" data-bs-toggle="dropdown"
                        aria-label="Open user menu">
                        {{-- @if (Auth::user()->url)
                    <span class="avatar avatar-sm"
                    style="background-image: url({{Storage::disk('s3')->url(Auth::user()->url)}})"></span>                        
                    @else --}}
                        <span class="avatar avatar-sm">{{ Str::substr(Auth::user()->name, 0, 2) }}</span>
                        {{-- @endif --}}

                        <div class="d-none d-xl-block ps-2">
                            <div>{{ Auth::user()->name }}</div>
                            {{-- <div class="mt-1 small text-muted">
                            @forelse (Auth::user()->roles as $role)
                                {{ $role->name }}
                            @empty
                                No roles
                            @endforelse
                        </div> --}}
                        </div>
                    </a>
                    <div class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                        <a href="{{-- {{ route('profile.index') }} --}}" class="dropdown-item">Configuracion</a>
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf
                            <a :href="route('logout')"
                                onclick="event.preventDefault();
                        this.closest('form').submit();"
                                class="dropdown-item">Logout</a>
                        </form>
                    </div>
                </div>
            </div>

        </div>
    </div>
</header>
