@section('title', 'Proyectos')
<x-app-layout>
    <div class="page">
        <div class="page-wrapper">
            <div class="container-xl">
                <!-- Page title -->
                <div class="page-header d-print-none">
                    <div class="row g-2 align-items-center">
                        <div class="col">
                            <h2 class="page-title">
                                Administrar Usuarios
                            </h2>
                            <p style="font-size: 10px">Proyecto: {{ $diagrama->nombre }}</p>
                        </div>
                        <!-- Page title actions -->
                        <div class="col-12 col-md-auto ms-auto d-print-none">
                            <span class="d-none d-sm-inline">
                                <a href="{{ route('diagramas.index', $diagrama->id) }}" class="btn btn-secondary">
                                    Volver
                                </a>
                            </span>
                            
                        </div>
                    </div>
                </div>
            </div>

            <div class="page-body">
                <div class="container-xl">
                    <ul class="nav nav-bordered mb-4">
                        <li class="nav-item">
                            <a class="nav-link active" href="#">Ver todos</a>
                        </li>
                        {{-- <li class="nav-item">
                            <a class="nav-link" href="{{ route('eventos.favoritos') }}">Favoritos</a>
                        </li> --}}
                    </ul>
                    <div class="col-12 row">
                        <div class="col-6">
                            <div class="card">
                                <div class="card-header">
                                    <h3 class="card-title">Usuarios</h3>
                                </div>
                                @if (count($diagrama->usuarios) > 0)
                                    @foreach ($diagrama->usuarios as $usuario)
                                        <div class="list-group list-group-flush list-group-hoverable">
                                            <div class="list-group-item">
                                                <div class="row align-items-center">
                                                    <div class="col-auto">
                                                        <a href="#">
                                                            <span class="avatar"
                                                                style="background-image: url(./static/avatars/000m.jpg)"></span>
                                                        </a>
                                                    </div>
                                                    <div class="col text-truncate">
                                                        <a href="#"
                                                            class="text-reset d-block">{{ $usuario->name }}</a>
                                                        <div class="d-block text-muted text-truncate mt-n1">Change
                                                            deprecated html tags to text decoration classes (#29604)
                                                        </div>
                                                    </div>
                                                    <div class="col-auto">
                                                        <a href="#" class="list-group-item-actions">
                                                            <!-- Download SVG icon from http://tabler-icons.io/i/star -->
                                                            <svg xmlns="http://www.w3.org/2000/svg"
                                                                class="icon text-muted" width="24" height="24"
                                                                viewBox="0 0 24 24" stroke-width="2"
                                                                stroke="currentColor" fill="none"
                                                                stroke-linecap="round" stroke-linejoin="round">
                                                                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                                                <path
                                                                    d="M12 17.75l-6.172 3.245l1.179 -6.873l-5 -4.867l6.9 -1l3.086 -6.253l3.086 6.253l6.9 1l-5 4.867l1.179 6.873z" />
                                                            </svg>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                @else
                                    <div class="row row-cards">
                                        <div class="col-lg-12">
                                            <div class="card">
                                                <div class="empty">
                                                    <div class="empty-img"><img
                                                            src="{{ asset('/back/static/illustrations/undraw_quitting_time_dm8t.svg') }}"
                                                            height="128" alt="">
                                                    </div>
                                                    <p class="empty-title">No tienes proyectos para administrar</p>
                                                    <p class="empty-subtitle text-muted">
                                                        Comienza administrando un proyecto, creando uno.
                                                    </p>
                                                    <div class="empty-action">
                                                        <a href="{{-- {{ route('eventos.create') }} --}}" class="btn btn-primary">
                                                            <!-- Download SVG icon from http://tabler-icons.io/i/search -->
                                                            <svg xmlns="http://www.w3.org/2000/svg" class="icon"
                                                                width="24" height="24" viewBox="0 0 24 24"
                                                                stroke-width="2" stroke="currentColor" fill="none"
                                                                stroke-linecap="round" stroke-linejoin="round">
                                                                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                                                <line x1="12" y1="5" x2="12"
                                                                    y2="19" />
                                                                <line x1="5" y1="12" x2="19"
                                                                    y2="12" />
                                                            </svg>
                                                            Crear Proyecto
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endif
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="card">
                                <div class="card-header">
                                    <h3 class="card-title">Agregar Usuario</h3>
                                </div>
                                <div class="card-body">
                                    <div class="g-3">
                                        <div class="col-lg-12">
                                            <div class="mb-3">
                                                <label class="form-label">Seleccionar el usuario</label>
                                                {{-- <select class="form-select" name="usuario_id"> --}}
                                                @foreach ($usuarios as $usuario)
                                                    <div class="list-group list-group-flush list-group-hoverable">
                                                        <div class="list-group-item">
                                                            <div class="row align-items-center">
                                                                <div class="col-auto">
                                                                    <a href="#">
                                                                        <span class="avatar"
                                                                            style="background-image: url(./static/avatars/000m.jpg)"></span>
                                                                    </a>
                                                                </div>
                                                                <div class="col text-truncate">
                                                                    <a href="#"
                                                                        class="text-reset d-block">{{ $usuario->name }}</a>
                                                                    <div
                                                                        class="d-block text-muted text-truncate mt-n1">
                                                                        {{ $usuario->email }}
                                                                    </div>
                                                                </div>
                                                                <div class="col-auto">
                                                                    @if ($diagrama->usuarios->contains($usuario->id))
                                                                        @if ($usuario->id == $diagrama->user_id)
                                                                            <div class="row">
                                                                                <div class="col-auto px-1">
                                                                                    <a href="#"
                                                                                        class="btn btn-orange disabled">
                                                                                        Dueño
                                                                                    </a>
                                                                                </div>
                                                                            </div>
                                                                        @else
                                                                            <a href="#"
                                                                                class="btn btn-success disabled">
                                                                                Participando
                                                                            </a>
                                                                        @endif
                                                                    @else
                                                                        <form
                                                                            action="{{ route('diagramas.agregarUsuario') }}"
                                                                            method="POST">
                                                                            @csrf
                                                                            <input type="integer" hidden
                                                                                value="{{ $diagrama->id }}"
                                                                                name="diagrama_id">
                                                                            <input type="integer" hidden
                                                                                value="{{ $usuario->id }}"
                                                                                name="user_id">
                                                                            <button class="btn btn-success"
                                                                                type="submit">
                                                                                Agregar
                                                                            </button>
                                                                        </form>
                                                                    @endif


                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                @endforeach
                                                {{-- </select> --}}
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>

            </div>

        </div>

    </div>

    @push('scripts')
        {{-- <script>
            function invitar() {
                $.ajax({

                });
            }
        </script> --}}
    @endpush

</x-app-layout>
