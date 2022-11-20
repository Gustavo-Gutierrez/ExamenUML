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
                                Mis Proyectos
                                @if (Session::has('message'))
                                    {{ $message }}
                                @endif
                            </h2>
                        </div>
                        <!-- Page title actions -->
                        <div class="col-12 col-md-auto ms-auto d-print-none">
                            <a href="#" class="btn btn-primary d-none d-sm-inline-block" data-bs-toggle="modal"
                                data-bs-target="#modal-report">
                                <!-- Download SVG icon from http://tabler-icons.io/i/plus -->
                                <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24"
                                    viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                                    stroke-linecap="round" stroke-linejoin="round">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                    <line x1="12" y1="5" x2="12" y2="19" />
                                    <line x1="5" y1="12" x2="19" y2="12" />
                                </svg>
                                Crear Proyecto
                            </a>
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
                        <li class="nav-item">
                            <a class="nav-link" href="{{-- {{ route('eventos.favoritos') }} --}}">Favoritos</a>
                        </li>
                    </ul>
                    @if (count($proyectos) > 0)
                        <div class="row row-cards">
                            @foreach ($proyectos as $proyecto)
                                <div class="col-lg-12 mt-1 mb-1">
                                    <div class="card">
                                        <div class="card-body">
                                            <div class="row align-items-center">
                                                <div class="col-2 text-center">
                                                    @if ($proyecto->url)
                                                        <img src="{{ asset('storage/' . $proyecto->url) }}"
                                                            alt="Food Deliver UI dashboards" class="rounded">
                                                    @else
                                                        <img src="{{ asset('/assets/img/image-default.jpg') }}"
                                                            alt="Food Deliver UI dashboards" class="rounded height-min">
                                                    @endif

                                                </div>
                                                <div class="col">
                                                    <h3 class="card-title mb-1">
                                                        <a href="#" class="text-reset">{{ $proyecto->nombre }}</a>
                                                    </h3>
                                                    <div class="text-muted">
                                                        {{ $proyecto->descripcion }}
                                                    </div>
                                                    <div class="text-muted">
                                                        Fecha de finalizacion: {{ $proyecto->fecha_fin }}
                                                    </div>
                                                    @if ($proyecto->terminado == 1)
                                                        <div class="text-muted text-success">
                                                            Proyecto terminado!
                                                        </div>
                                                    @elseif($proyecto->fecha_fin > Carbon\Carbon::now())
                                                        <div class="text-muted text-success">
                                                            Tiempo restante: {{ $proyecto->tiempoRestante() }} Días
                                                        </div>
                                                    @else
                                                        <div class="text-danger">
                                                            Estas retrasado por: {{ $proyecto->tiempoRestante() }}
                                                            Dias
                                                        </div>
                                                    @endif
                                                    {{-- <div class="text-muted">
                                                        {{ Carbon\Carbon::createFromTimestamp(strtotime($proyecto->fecha_fin))->diff(\Carbon\Carbon::now())->days }}
                                                    </div> --}}
                                                    <div class="mt-3">
                                                        <div class="row g-2 align-items-center">
                                                            <div class="col-auto">
                                                                Progreso: 
                                                                {{ $proyecto->porcentajeTerminado() }}%
                                                            </div>
                                                            <div class="col">
                                                                <div class="progress progress-sm">
                                                                    <div class="progress-bar" style="width: {{ $proyecto->porcentajeTerminado() }}%"
                                                                        role="progressbar" aria-valuenow="25"
                                                                        aria-valuemin="0" aria-valuemax="100"
                                                                        aria-label="25% Complete">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="col-auto row">
                                                    <div class="col-auto dropdown">
                                                        <a href="#" class="btn-action" data-bs-toggle="dropdown"
                                                            aria-expanded="false" title="Opciones">
                                                            <!-- Download SVG icon from http://tabler-icons.io/i/dots-vertical -->
                                                            <svg xmlns="http://www.w3.org/2000/svg" class="icon"
                                                                width="24" height="24" viewBox="0 0 24 24"
                                                                stroke-width="2" stroke="currentColor" fill="none"
                                                                stroke-linecap="round" stroke-linejoin="round">
                                                                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                                                <circle cx="12" cy="12" r="1" />
                                                                <circle cx="12" cy="19" r="1" />
                                                                <circle cx="12" cy="5"
                                                                    r="1" />
                                                            </svg>
                                                        </a>
                                                        <div class="dropdown-menu dropdown-menu-end">
                                                            {{-- @can('verImagenesAgregadas') --}}
                                                            <a href="{{ route('diagramas.index', $proyecto->id) }}"
                                                                class="dropdown-item">Ver y Agregar Diagramas</a>
                                                            {{-- @endcan --}}
                                                            <a href="{{-- {{ route('diagramas.index', $proyecto->id) }} --}}"
                                                                class="dropdown-item">Editar
                                                                Informacion</a>
                                                        </div>
                                                    </div>
                                                    {{-- <div class="btn-action col-auto">
                                                        <div class="hover-overlay">
                                                            <a href="" class=""><i
                                                                    class="{{ $proyecto->favorito == 1 ? 'fa-solid fa-heart' : 'fa-regular fa-heart' }} text-pink ms-1"></i></a>
                                                            <div class="mask bg-danger"></div>
                                                        </div>
                                                    </div> --}}
                                                    <div class="col-auto">
                                                        <div class="btn-action">
                                                            <button class="switch-icon switch-icon-fade"
                                                                data-bs-toggle="switch-icon" title="Favorito"
                                                                onclick="favorito({{ $proyecto->id }})">
                                                                @if ($proyecto->favorito == 1)
                                                                    <span class="switch-icon-a text-red mt-1">
                                                                        <i class="fa-solid fa-heart text-pink"></i>
                                                                    </span>
                                                                    <span class="switch-icon-b text-muted mt-1">
                                                                        <i class="fa-regular fa-heart text-pink"></i>
                                                                    </span>
                                                                @else
                                                                    <span class="switch-icon-a text-red mt-1">
                                                                        <i class="fa-regular fa-heart text-pink"></i>
                                                                    </span>
                                                                    <span class="switch-icon-b text-muted mt-1">
                                                                        <i class="fa-solid fa-heart text-pink"></i>
                                                                    </span>
                                                                @endif
                                                            </button>
                                                        </div>
                                                    </div>
                                                    <div class="col-auto">
                                                        <div class="btn-action">
                                                            <button class="switch-icon switch-icon-flip"
                                                                data-bs-toggle="switch-icon" title="Estado"
                                                                onclick="terminado({{ $proyecto->id }})">
                                                                @if ($proyecto->terminado == 1)
                                                                    <span class="switch-icon-a text-red mt-1">
                                                                        <i class="fa-solid fa-check text-success"></i>
                                                                    </span>
                                                                    <span class="switch-icon-b text-muted mt-1">
                                                                        <i class="fa-solid fa-xmark text-danger"></i>
                                                                    </span>
                                                                @else
                                                                <span class="switch-icon-b text-muted mt-1">
                                                                    <i class="fa-solid fa-check text-success"></i>
                                                                </span>
                                                                    <span class="switch-icon-a text-red mt-1">
                                                                        <i class="fa-solid fa-xmark text-danger"></i>
                                                                    </span>
                                                                @endif
                                                            </button>
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                        {{-- <div class="card mt-1">
                            <div class="card-body pb-0">
                                <div class="pagination">
                                    {{ $eventos_a->links() }}
                                </div>
                            </div>
                        </div> --}}
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
                                                <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24"
                                                    height="24" viewBox="0 0 24 24" stroke-width="2"
                                                    stroke="currentColor" fill="none" stroke-linecap="round"
                                                    stroke-linejoin="round">
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
                    {{-- <div class="row">
                        <div class="col-lg-8">
                            <div class="card">
                                <div class="list-group card-list-group">
                                    <div class="list-group-item">
                                        <div class="row g-2 align-items-center">
                                            <div class="col-auto fs-3">
                                                1
                                            </div>
                                            <div class="col-auto">
                                                <img src="./static/tracks/a4fb1d293bd8d3fd38352418c50fcf1369a7a87d.jpg"
                                                    class="rounded" alt="Górą ty" width="40" height="40">
                                            </div>
                                            <div class="col">
                                                Górą ty
                                                <div class="text-muted">
                                                    GOLEC UORKIESTRA,
                                                    Gromee,
                                                    Bedoes
                                                </div>
                                            </div>
                                            <div class="col-auto text-muted">
                                                03:41 
                                            </div>
                                            <div class="col-auto">
                                                <a href="#" class="link-secondary">
                                                    <button class="switch-icon" data-bs-toggle="switch-icon">
                                                        <span class="switch-icon-a text-muted">
                                                            <!-- Download SVG icon from http://tabler-icons.io/i/heart -->
                                                            <svg xmlns="http://www.w3.org/2000/svg" class="icon"
                                                                width="24" height="24" viewBox="0 0 24 24"
                                                                stroke-width="2" stroke="currentColor" fill="none"
                                                                stroke-linecap="round" stroke-linejoin="round">
                                                                <path stroke="none" d="M0 0h24v24H0z"
                                                                    fill="none" />
                                                                <path
                                                                    d="M19.5 12.572l-7.5 7.428l-7.5 -7.428m0 0a5 5 0 1 1 7.5 -6.566a5 5 0 1 1 7.5 6.572" />
                                                            </svg>
                                                        </span>
                                                        <span class="switch-icon-b text-red">
                                                            <!-- Download SVG icon from http://tabler-icons.io/i/heart -->
                                                            <svg xmlns="http://www.w3.org/2000/svg"
                                                                class="icon icon-filled" width="24"
                                                                height="24" viewBox="0 0 24 24" stroke-width="2"
                                                                stroke="currentColor" fill="none"
                                                                stroke-linecap="round" stroke-linejoin="round">
                                                                <path stroke="none" d="M0 0h24v24H0z"
                                                                    fill="none" />
                                                                <path
                                                                    d="M19.5 12.572l-7.5 7.428l-7.5 -7.428m0 0a5 5 0 1 1 7.5 -6.566a5 5 0 1 1 7.5 6.572" />
                                                            </svg>
                                                        </span>
                                                    </button>
                                                </a>
                                            </div>
                                            <div class="col-auto lh-1">
                                                <div class="dropdown">
                                                    <a href="#" class="link-secondary"
                                                        data-bs-toggle="dropdown">
                                                        <!-- Download SVG icon from http://tabler-icons.io/i/dots -->
                                                        <svg xmlns="http://www.w3.org/2000/svg" class="icon"
                                                            width="24" height="24" viewBox="0 0 24 24"
                                                            stroke-width="2" stroke="currentColor" fill="none"
                                                            stroke-linecap="round" stroke-linejoin="round">
                                                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                                            <circle cx="5" cy="12" r="1" />
                                                            <circle cx="12" cy="12" r="1" />
                                                            <circle cx="19" cy="12" r="1" />
                                                        </svg>
                                                    </a>
                                                    <div class="dropdown-menu dropdown-menu-end">
                                                        <a class="dropdown-item" href="#">
                                                            Action
                                                        </a>
                                                        <a class="dropdown-item" href="#">
                                                            Another action
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <h3 class="mb-3">Top tracks</h3>
                            <div class="row row-cards">
                                <div class="col-md-6 col-lg-12">
                                    <div class="card">
                                        <div class="row row-0">
                                            <div class="col-auto">
                                                <img src="./static/tracks/c976bfc96d5e44820e553a16a6097cd02a61fd2f.jpg"
                                                    class="rounded-start" alt="Shape of You" width="80"
                                                    height="80">
                                            </div>
                                            <div class="col">
                                                <div class="card-body">
                                                    Shape of You
                                                    <div class="text-muted">
                                                        Ed Sheeran
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div> --}}
                </div>

            </div>

        </div>

        <div class="modal modal-blur fade" id="modal-report" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Nuevo Proyecto</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                            aria-label="Close"></button>
                    </div>
                    <form action="{{ route('proyectos.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="modal-body">
                            <div class="row row-cards">
                                <div class="col-lg-6">

                                    <div class="containerdd">
                                        <h3 class="text-white">Subir Imagen</h3>
                                        <div class="drag-area">
                                            <div class="icono">
                                                <i class="fas fa-images"></i>
                                            </div>
                                            <span class="header">Arrastrar y soltar en el area</span>
                                            <span class="header">o <span class="buttonDrop">navega</span></span>
                                            <span class="support">Support: JPEG, JPG, PNG</span>
                                        </div>
                                        <input type="file" id="img" name="url" class="form-control"
                                            accept=".jpge,.jpg,.png" hidden>
                                    </div>


                                </div>
                                <div class="col-lg-6 row mt-3">
                                    <div class="row">
                                        <div class="mb-1">
                                            <label class="form-label">Nombre</label>
                                            <input name="nombre" type="text" class="form-control">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="mb-3">
                                            <label class="form-label">Fecha de Finalizacion</label>
                                            <input name="fecha_fin" type="datetime-local" class="form-control">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div>
                                        <label class="form-label">Descripcion</label>
                                        <textarea name="descripcion" class="form-control" rows="3"></textarea>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="modal-footer">
                            <a href="#" class="btn btn-link link-secondary bg-danger text-white"
                                data-bs-dismiss="modal">
                                Cancelar
                            </a>
                            <button class="btn btn-primary ms-auto" type="submit" data-bs-dismiss="modal">
                                <!-- Download SVG icon from http://tabler-icons.io/i/plus -->
                                <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24"
                                    viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                                    stroke-linecap="round" stroke-linejoin="round">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                    <line x1="12" y1="5" x2="12" y2="19" />
                                    <line x1="5" y1="12" x2="19" y2="12" />
                                </svg>
                                Crear Proyecto
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    @push('scripts')
        <script>
            const dragArea = document.querySelector('.drag-area');
            const dragText = document.querySelector('.header');
            let button = document.querySelector('.buttonDrop');
            let input = document.getElementById('img');

            let file;

            button.onclick = () => {
                input.click();
            };

            input.addEventListener('change', function() {
                file = this.files[0];
                dragArea.classList.add('active');
                displayFile();
            });

            dragArea.addEventListener('dragover', (event) => {
                event.preventDefault();
                dragText.textContent = 'Soltar imagen';
                dragArea.classList.add('active');
                // console.log('documento dentro');
            });

            dragArea.addEventListener('dragleave', () => {
                dragText.textContent = 'Arrastra la imagen al area';
                dragArea.classList.remove('active');
                // console.log('Archivo fuera del area');
            });

            dragArea.addEventListener('drop', (event) => {
                event.preventDefault();
                file = event.dataTransfer.files[0];
                displayFile();
            });

            function displayFile() {
                let fileType = file.type;
                // console.log(fileType);
                let validExtension = ['image/png', 'image/jpg', 'image/jpeg'];
                if (validExtension.includes(fileType)) {
                    let fileReader = new FileReader();
                    fileReader.onload = () => {
                        let fileURL = fileReader.result;
                        // console.og(fileURL);
                        let tag = `<img src="${fileURL}" alt="">`;
                        dragArea.innerHTML = tag;
                        input.hidden = false;
                        console.log(file);
                        // input.value = `${fileReader.filename}`;
                        console.log(input.value);
                    }
                    fileReader.readAsDataURL(file);
                } else {
                    alert('El archivo seleccionado no es una imagen');
                    dragArea.classList.remove('active');
                }
                // console.log('El archivo fue enviando en el area drag')
            };

            function favorito(proyecto_id) {
                $.ajax({
                    type: "POST",
                    url: "{{ url('proyectos/favorito') }}",
                    data: {
                        id: proyecto_id
                    },
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },
                    dataType: 'JSON',
                    success: function() {
                        /* console.log('protasdas'); */
                        /* window.location('/proyectos'); */
                    },
                });
            };

            function terminado(proyecto_id) {
                $.ajax({
                    type: "POST",
                    url: "{{ url('proyectos/terminado') }}",
                    data: {
                        id: proyecto_id
                    },
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },
                    dataType: 'JSON',
                    success: function() {
                        /* console.log('protasdas'); */
                        /* window.location('/proyectos'); */
                    },
                });
            };
        </script>
    @endpush
</x-app-layout>
