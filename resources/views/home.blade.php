@section('title', 'Home')
<x-app-layout>
    <div class="page">
        <div class="page-wrapper">
            <div class="container-xl">
                <!-- Page title -->
                <div class="page-header d-print-none">
                    <div class="row g-2 align-items-center">
                        <div class="col">
                            <!-- Page pre-title -->
                            <div class="page-pretitle">
                                Overview
                            </div>
                            <h2 class="page-title">
                                Dashboard
                            </h2>
                        </div>
                        <!-- Page title actions -->
                        <div class="col-12 col-md-auto ms-auto d-print-none">
                            <div class="btn-list">
                                <span class="d-none d-sm-inline">
                                    <a href="#" class="btn btn-white">
                                        New view
                                    </a>
                                </span>
                                <a href="#" class="btn btn-primary d-none d-sm-inline-block"
                                    data-bs-toggle="modal" data-bs-target="#modal-report">
                                    <!-- Download SVG icon from http://tabler-icons.io/i/plus -->
                                    <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24"
                                        viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                                        stroke-linecap="round" stroke-linejoin="round">
                                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                        <line x1="12" y1="5" x2="12" y2="19" />
                                        <line x1="5" y1="12" x2="19" y2="12" />
                                    </svg>
                                    Create new report
                                </a>
                                <a href="#" class="btn btn-primary d-sm-none btn-icon" data-bs-toggle="modal"
                                    data-bs-target="#modal-report" aria-label="Create new report">
                                    <!-- Download SVG icon from http://tabler-icons.io/i/plus -->
                                    <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24"
                                        viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                                        stroke-linecap="round" stroke-linejoin="round">
                                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                        <line x1="12" y1="5" x2="12" y2="19" />
                                        <line x1="5" y1="12" x2="19" y2="12" />
                                    </svg>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="page-body">
                <div class="container-xl">
                    {{-- @can('dashboardDatos')
                    <div class="row row-deck row-cards mb-2">
                        <div class="col-sm-6 col-lg-3">
                            <div class="card">
                                <div class="card-body">
                                    <div class="d-flex align-items-center">
                                        <div class="subheader">Ingresos</div>
                                    </div>
                                    <div class="d-flex align-items-baseline">
                                        <div class="h1 mb-0 me-2">${{ $ingresos }}</div>
                                        <div class="me-auto">
                                            <span class="text-warning d-inline-flex align-items-center lh-1">
                                                <i class="fa-solid fa-sack-dollar"></i>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        @foreach ($planes as $plan)
                            <div class="col-sm-6 col-lg-3">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="d-flex align-items-center">
                                            <div class="subheader">Usuarios {{ $plan->nombre }}</div>
                                        </div>
                                        <div class="d-flex align-items-baseline">

                                            <div class="h1 mb-0 me-2">${{ $plan->total() }}</div>
                                            <div class="me-auto">
                                                @if ($plan->id == 1)
                                                    <i class="fa-solid fa-user text-info"></i>
                                                @endif
                                                @if ($plan->id == 2)
                                                    <i class="fa-solid fa-camera text-success"></i>
                                                @endif
                                                @if ($plan->id == 3)
                                                    <i class="fa-solid fa-user-tie"></i>
                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                @endcan --}}
                    <div class="row row-cards mb-2">

                        <div class="col-lg-6">
                            <div class="col-md-12">
                                <div class="card">
                                    <div class="card-header">
                                        <h3 class="card-title">Modelo C4</h3>
                                    </div>
                                    <div class="card-body">
                                        <div id="carousel-captions" class="carousel slide" data-bs-ride="carousel">

                                            <div class="carousel-inner">
                                                {{-- @foreach ($eventos as $evento) --}}

                                                <!-- <div class="carousel-item {{-- {{ ++$i == 1 ? 'active' : '' }} --}}">
                                                    <div class="drag-area" style="border: 0">
                                                        <img class="d-block w-100" alt=""
                                                            src="{{-- {{ asset('storage/' . $evento->url) }} --}}" style="">
                                                    </div>
                                                    <div class="carousel-caption-background d-none d-md-block"></div>
                                                    <div class="carousel-caption d-none d-md-block">
                                                        <h3>{{-- {{ $evento->nombre }} --}}</h3>
                                                        <p>{{-- {{ $evento->ubicacion }} --}}
                                                        </p>
                                                    </div>
                                                </div> -->

                                                <div class="carousel-item active{{-- {{ ++$i == 1 ? 'active' : '' }} --}}">
                                                    <div class="" style="border: 0">
                                                        <img class="d-block h-auto" alt=""
                                                            src="{{ asset('/assets/img/image-level-1.png') }}">
                                                    </div>
                                                    <div class="carousel-caption-background d-none d-md-block"></div>
                                                    <div class="carousel-caption d-none d-md-block">
                                                        <h3>Nivel 1: Diagrama de Contexto</h3>
                                                        <p>Diagrama elemental para el proyecto
                                                        </p>
                                                    </div>
                                                </div>
                                                <div class="carousel-item {{-- {{ ++$i == 1 ? 'active' : '' }} --}}">
                                                    <div class="" style="border: 0">
                                                        <img class="d-block w-max" alt=""
                                                            src="{{ asset('/assets/img/image-level-2.png') }}">
                                                    </div>
                                                    <div class="carousel-caption-background d-none d-md-block"></div>
                                                    <div class="carousel-caption d-none d-md-block">
                                                        <h3>Nivel 2: Diagrama de Contenedores</h3>
                                                        <p>Diagraam necesario para el proyecto
                                                        </p>
                                                    </div>
                                                </div>
                                                <div class="carousel-item {{-- {{ ++$i == 1 ? 'active' : '' }} --}}">
                                                    <div class="" style="border: 0">
                                                        <img class="d-block w-max" alt=""
                                                            src="{{ asset('/assets/img/image-level-3.png') }}">
                                                    </div>
                                                    <div class="carousel-caption-background d-none d-md-block"></div>
                                                    <div class="carousel-caption d-none d-md-block">
                                                        <h3>Nivel 3: Diagrama de Componentes</h3>
                                                        <p>Diagrama opcional para el proyecto
                                                        </p>
                                                    </div>
                                                </div>
                                                <div class="carousel-item {{-- {{ ++$i == 1 ? 'active' : '' }} --}}">
                                                    <div class="" style="border: 0">
                                                        <img class="d-block w-100" alt=""
                                                            src="{{ asset('/assets/img/image-level-4.png') }}">
                                                    </div>
                                                    <div class="carousel-caption-background d-none d-md-block"></div>
                                                    <div class="carousel-caption d-none d-md-block">
                                                        <h3>Nivel 4: Diagrama de Codigo</h3>
                                                        <p>Diagrama opcional para el proyecto
                                                        </p>
                                                    </div>
                                                </div>
                                                {{-- @endforeach --}}
                                            </div>

                                            <a class="carousel-control-prev" href="#carousel-captions" role="button"
                                                data-bs-slide="prev">
                                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                                <span class="visually-hidden">Previous</span>
                                            </a>
                                            <a class="carousel-control-next" href="#carousel-captions" role="button"
                                                data-bs-slide="next">
                                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                                <span class="visually-hidden">Next</span>
                                            </a>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-lg-6">
                            <div class="card">
                                <div class="card-header">
                                    <h3 class="card-title">Diagramas Favoritos</h3>
                                </div>
                                <div class="card-body">
                                    <div class="row row-cards">

                                        @foreach ($proyectos as $proyecto)
                                            <div class="col-12">
                                                <div class="card card-sm">
                                                    <div class="card-body">
                                                        <div class="row align-items-center">

                                                            <div class="col-2">
                                                                @if ($proyecto->url)
                                                                    <img src="{{ asset('storage/' . $proyecto->url) }}"
                                                                        alt="Food Deliver UI dashboards"
                                                                        class="rounded">
                                                                @else
                                                                    <img src="{{ asset('/assets/img/image-default.jpg') }}"
                                                                        alt="Food Deliver UI dashboards"
                                                                        class="rounded height-min">
                                                                @endif
                                                            </div>

                                                            <div class="col">
                                                                <div class="font-weight-medium">
                                                                    {{ $proyecto->nombre }}
                                                                </div>
                                                                <div class="text-muted">
                                                                    {{ $proyecto->calificacion }}
                                                                </div>
                                                            </div>

                                                            @if ($proyecto->favorito == 1)
                                                                <div class="col-auto">
                                                                    <i class="fa-solid fa-heart text-pink"></i>
                                                                </div>
                                                            @else
                                                                <div class="col-auto">
                                                                    <i class="fa-regular fa-heart text-pink"></i>
                                                                </div>
                                                            @endif

                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        @endforeach
                                    </div>
                                    <div class="card mt-1">
                                        <div class="card-body pb-0">
                                            <div class="pagination">
                                                {{ $proyectos->links() }}
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="card card-md">
                            <div class="card-stamp card-stamp-lg">
                                <div class="card-stamp-icon bg-primary">
                                    <!-- Download SVG icon from http://tabler-icons.io/i/ghost -->
                                    <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24"
                                        height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"
                                        fill="none" stroke-linecap="round" stroke-linejoin="round">
                                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                        <path
                                            d="M5 11a7 7 0 0 1 14 0v7a1.78 1.78 0 0 1 -3.1 1.4a1.65 1.65 0 0 0 -2.6 0a1.65 1.65 0 0 1 -2.6 0a1.65 1.65 0 0 0 -2.6 0a1.78 1.78 0 0 1 -3.1 -1.4v-7" />
                                        <line x1="10" y1="10" x2="10.01" y2="10" />
                                        <line x1="14" y1="10" x2="14.01" y2="10" />
                                        <path d="M10 14a3.5 3.5 0 0 0 4 0" />
                                    </svg>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="row align-items-center">
                                    <div class="col-10 mb-2">
                                        <h3 class="h1">Diagramas de núcleo</h3>
                                        <div class="markdown text-muted">
                                            La visualización de esta jerarquía de abstracciones se realiza mediante la
                                            creación de una colección de diagramas de <b>Contexto</b>, <b>Contenedor</b>
                                            , <b>Componente</b> y (opcionalmente) <b>Código</b> (por ejemplo, clase
                                            UML). Aquí es donde el modelo C4 recibe su nombre.
                                        </div>

                                    </div>
                                    <hr>
                                    <div class="col-12 row mb-2">
                                        <div class="col-3 row">
                                            <div><img src="{{ asset('/assets/img/image-level-1.png') }}"
                                                    alt=""></div>
                                            <div><img src="{{ asset('/assets/img/image-level-1-sub.png') }}"
                                                    alt=""></div>
                                        </div>
                                        <div class="col-8">
                                            <div class="ms-2">
                                                <h3 class="h1">Nivel 1: diagrama de contexto del sistemaEnlace</h3>
                                                <span class="text-muted">
                                                    <p class="mb-1">Un diagrama de contexto del sistema es un buen
                                                        punto
                                                        de partida para
                                                        diagramar y documentar un sistema de software, lo que le permite
                                                        dar
                                                        un paso
                                                        atrás y ver el panorama general. Dibuje un diagrama que muestre
                                                        su
                                                        sistema
                                                        como un cuadro en el centro, rodeado por sus usuarios y los
                                                        otros
                                                        sistemas
                                                        con los que interactúa.</p>
                                                    <p>Los detalles no son importantes aquí, ya que esta es su vista
                                                        alejada
                                                        que
                                                        muestra una imagen grande del panorama del sistema. El enfoque
                                                        debe
                                                        estar en
                                                        las personas (actores, roles, personajes, etc.) y los sistemas
                                                        de
                                                        software
                                                        en lugar de las tecnologías, los protocolos y otros detalles de
                                                        bajo
                                                        nivel.
                                                        Es el tipo de diagrama que podría mostrar a personas no
                                                        técnicas.
                                                    </p>
                                                    <span style="font-size: 10px">
                                                        <p class="mb-1"><b>Alcance : </b>Un solo
                                                            sistema de software.
                                                        </p>
                                                        <p class="mb-1"><b>Elementos primarios :
                                                            </b>El sistema de
                                                            software en el alcance.</p>
                                                        <p class="mb-1"><b>Elementos de soporte :
                                                            </b>personas (por
                                                            ejemplo, usuarios, actores, roles o
                                                            personas) y sistemas de software (dependencias externas) que
                                                            están
                                                            directamente conectados al sistema de software en el
                                                            alcance.
                                                            Por lo
                                                            general, estos otros sistemas de software se encuentran
                                                            fuera
                                                            del alcance o
                                                            los límites de su propio sistema de software, y usted no
                                                            tiene
                                                            responsabilidad ni propiedad sobre ellos.
                                                        </p>
                                                        <p class="mb-1"><b>Público objetivo :
                                                            </b>todos, tanto
                                                            técnicos
                                                            como no técnicos, dentro y fuera
                                                            del equipo de desarrollo de software.</p>
                                                        <p class="mb-1"><b>Recomendado para la
                                                                mayoría de los equipos
                                                                :
                                                            </b><span class="text-success">Sí.</span></p>
                                                    </span>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="col-12 row mb-2">
                                        <div class="col-3 row">
                                            <div><img src="{{ asset('/assets/img/image-level-2.png') }}"
                                                    alt=""></div>
                                            <div><img src="{{ asset('/assets/img/image-level-2-sub.png') }}"
                                                    alt=""></div>
                                        </div>
                                        <div class="col-8">
                                            <div class="markdown ms-2">
                                                <h3 class="h1">Nivel 2: Diagrama de contenedorEnlace</h3>
                                                <span class="text-muted">
                                                    <p class="mb-1">Una vez que comprenda cómo encaja su sistema en
                                                        el
                                                        entorno de TI general, el siguiente paso realmente útil es
                                                        acercarse
                                                        al límite del sistema con un diagrama de contenedor. Un
                                                        "contenedor"
                                                        es algo así como una aplicación web del lado del servidor, una
                                                        aplicación de una sola página, una aplicación de escritorio, una
                                                        aplicación móvil, un esquema de base de datos, un sistema de
                                                        archivos, etc. Básicamente, un contenedor es una unidad
                                                        ejecutable/implementable por separado (por ejemplo, un espacio
                                                        de
                                                        proceso separado ) que ejecuta código o almacena datos.
                                                    </p>
                                                    <p class="mb-1">El diagrama de contenedores muestra la forma de
                                                        alto
                                                        nivel de la arquitectura del software y cómo se distribuyen las
                                                        responsabilidades a través de ella. También muestra las
                                                        principales
                                                        opciones tecnológicas y cómo los contenedores se comunican entre
                                                        sí.
                                                        Es un diagrama centrado en la tecnología simple y de alto nivel
                                                        que
                                                        es útil para los desarrolladores de software y el personal de
                                                        soporte/operaciones por igual.
                                                    </p>
                                                    <span style="font-size: 10px">
                                                        <p class="mb-1"><b>Alcance : </b>Un solo sistema de software.
                                                        </p>

                                                        <p class="mb-1"><b>Elementos primarios : </b>Contenedores
                                                            dentro
                                                            del sistema de software en
                                                            el alcance.</p>
                                                        <p class="mb-1"><b>Elementos de apoyo : </b>Personas y
                                                            sistemas
                                                            de software conectados
                                                            directamente a los contenedores.</p>

                                                        <p class="mb-1"><b>Público objetivo : </b>personas técnicas
                                                            dentro y fuera del equipo de
                                                            desarrollo de software; incluyendo arquitectos de software,
                                                            desarrolladores y personal de operaciones/soporte.</p>

                                                        <p class="mb-1"><b>Recomendado para la mayoría de los equipos
                                                                :
                                                            </b><span class="text-success">Sí.</span></p>

                                                        <p class="mb-1"><b>Notas : </b>este diagrama no dice nada
                                                            sobre
                                                            escenarios de
                                                            implementación, agrupación, replicación, conmutación por
                                                            error,
                                                            etc.</p>
                                                    </span>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="col-12 row mb-2">
                                        <div class="col-3 row">
                                            <div><img src="{{ asset('/assets/img/image-level-3.png') }}"
                                                    alt=""></div>
                                            <div><img src="{{ asset('/assets/img/image-level-3-sub.png') }}"
                                                    alt=""></div>
                                        </div>
                                        <div class="col-8">
                                            <div class="markdown ms-2">
                                                <h3 class="h1">Nivel 3: diagrama de componentesEnlace</h3>
                                                <span class="text-muted">
                                                    <p class="mb-1">A continuación, puede acercar y descomponer aún
                                                        más
                                                        cada contenedor para identificar los principales bloques de
                                                        construcción estructurales y sus interacciones.
                                                    </p>
                                                    <p class="mb-1">El diagrama de componentes muestra cómo un
                                                        contenedor
                                                        se compone de una serie de "componentes", qué es cada uno de
                                                        esos
                                                        componentes, sus responsabilidades y los detalles de
                                                        tecnología/implementación.
                                                    </p>
                                                    <span style="font-size: 10px">
                                                        <p class="mb-1"><b>Alcance : </b>Un solo contenedor.</p>

                                                        <p class="mb-1"><b>Elementos primarios : </b>Componentes
                                                            dentro del contenedor en el
                                                            alcance.</p>
                                                        <p class="mb-1"><b>Elementos de soporte : </b>Contenedores
                                                            (dentro del alcance del sistema
                                                            de software) más personas y sistemas de software conectados
                                                            directamente a los componentes.</p>

                                                        <p class="mb-1"><b>Público objetivo : </b>Arquitectos y
                                                            desarrolladores de software.</p>

                                                        <p class="mb-1"><b>Recomendado para la mayoría de los equipos
                                                                :
                                                            </b><span class="text-danger">no, solo cree diagramas
                                                                de componentes si cree que agregan valor y considere
                                                                automatizar su
                                                                creación para una documentación de larga
                                                                duración.</span>
                                                        </p>
                                                    </span>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="col-12 row mb-2">
                                        <div class="col-3 row">
                                            <div><img src="{{ asset('/assets/img/image-level-4.png') }}"
                                                    alt=""></div>

                                        </div>
                                        <div class="col-8">
                                            <div class="markdown ms-2">
                                                <h3 class="h1">Nivel 4: CódigoEnlace</h3>
                                                <span class="text-muted">
                                                    <p class="mb-1">Finalmente, puede ampliar cada componente para
                                                        mostrar cómo se implementa como código; utilizando diagramas de
                                                        clases UML, diagramas entidad relación o similares.
                                                    </p>
                                                    <p class="mb-1">Este es un nivel de detalle opcional y, a menudo,
                                                        está disponible a pedido desde herramientas como IDE.
                                                        Idealmente,
                                                        este diagrama se generaría automáticamente utilizando
                                                        herramientas
                                                        (por ejemplo, una herramienta de modelado IDE o UML), y debería
                                                        considerar mostrar solo aquellos atributos y métodos que le
                                                        permitan
                                                        contar la historia que desea contar. Este nivel de detalle no se
                                                        recomienda para nada más que para los componentes más
                                                        importantes o
                                                        complejos.
                                                    </p>
                                                    <span style="font-size: 10px">
                                                        <p class="mb-1"><b>Alcance : </b>Un solo componente.</p>

                                                        <p class="mb-1"><b>Elementos primarios : </b>elementos de
                                                            código
                                                            (por ejemplo, clases,
                                                            interfaces, objetos, funciones, tablas de bases de datos,
                                                            etc.)
                                                            dentro del componente en el ámbito.</p>

                                                        <p class="mb-1"><b>Público objetivo : </b>Arquitectos y
                                                            desarrolladores de software.</p>

                                                        <p class="mb-1"><b>Recomendado para la mayoría de los equipos
                                                                :
                                                            </b><span class="text-danger">no, para la
                                                                documentación de larga duración, la mayoría de los IDE
                                                                pueden
                                                                generar este nivel de detalle a pedido.</span></p>
                                                    </span>
                                                </span>
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


        <div class="modal modal-blur fade" id="modal-report" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">New report</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                            aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="mb-3">
                            <label class="form-label">Name</label>
                            <input type="text" class="form-control" name="example-text-input"
                                placeholder="Your report name">
                        </div>
                        <label class="form-label">Report type</label>
                        <div class="form-selectgroup-boxes row mb-3">
                            <div class="col-lg-6">
                                <label class="form-selectgroup-item">
                                    <input type="radio" name="report-type" value="1"
                                        class="form-selectgroup-input" checked>
                                    <span class="form-selectgroup-label d-flex align-items-center p-3">
                                        <span class="me-3">
                                            <span class="form-selectgroup-check"></span>
                                        </span>
                                        <span class="form-selectgroup-label-content">
                                            <span class="form-selectgroup-title strong mb-1">Simple</span>
                                            <span class="d-block text-muted">Provide only basic data needed for the
                                                report</span>
                                        </span>
                                    </span>
                                </label>
                            </div>
                            <div class="col-lg-6">
                                <label class="form-selectgroup-item">
                                    <input type="radio" name="report-type" value="1"
                                        class="form-selectgroup-input">
                                    <span class="form-selectgroup-label d-flex align-items-center p-3">
                                        <span class="me-3">
                                            <span class="form-selectgroup-check"></span>
                                        </span>
                                        <span class="form-selectgroup-label-content">
                                            <span class="form-selectgroup-title strong mb-1">Advanced</span>
                                            <span class="d-block text-muted">Insert charts and additional advanced
                                                analyses to be inserted in the report</span>
                                        </span>
                                    </span>
                                </label>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-8">
                                <div class="mb-3">
                                    <label class="form-label">Report url</label>
                                    <div class="input-group input-group-flat">
                                        <span class="input-group-text">
                                            https://tabler.io/reports/
                                        </span>
                                        <input type="text" class="form-control ps-0" value="report-01"
                                            autocomplete="off">
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="mb-3">
                                    <label class="form-label">Visibility</label>
                                    <select class="form-select">
                                        <option value="1" selected>Private</option>
                                        <option value="2">Public</option>
                                        <option value="3">Hidden</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="mb-3">
                                    <label class="form-label">Client name</label>
                                    <input type="text" class="form-control">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="mb-3">
                                    <label class="form-label">Reporting period</label>
                                    <input type="date" class="form-control">
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div>
                                    <label class="form-label">Additional information</label>
                                    <textarea class="form-control" rows="3"></textarea>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <a href="#" class="btn btn-link link-secondary" data-bs-dismiss="modal">
                            Cancel
                        </a>
                        <a href="#" class="btn btn-primary ms-auto" data-bs-dismiss="modal">
                            <!-- Download SVG icon from http://tabler-icons.io/i/plus -->
                            <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24"
                                viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                                stroke-linecap="round" stroke-linejoin="round">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                <line x1="12" y1="5" x2="12" y2="19" />
                                <line x1="5" y1="12" x2="19" y2="12" />
                            </svg>
                            Create new report
                        </a>
                    </div>

                </div>
            </div>
        </div>

    </div>
    {{-- @push('scripts')
    <script src="{{ asset('js/jquery.js') }}"></script>
    <script src="{{ asset('js/lodash.js') }}"></script>
    <script src="{{ asset('js/backbone.js') }}"></script>
    <script src="{{ asset('js/graphlib.core.js') }}"></script>
    <script src="{{ asset('js/dagre.core.js') }}"></script>
    <script src="{{ asset('js/rappid.js') }}"></script>

    <script src="{{ asset('js/config/halo.js') }}"></script>
    <script src="{{ asset('js/config/selection.js') }}"></script>
    <script src="{{ asset('js/config/inspector.js') }}"></script>
    <script src="{{ asset('js/config/stencil.js') }}"></script>
    <script src="{{ asset('js/config/toolbar.js') }}"></script>
    <script src="{{ asset('js/config/sample-graphs.js') }}"></script>
    <script src="{{ asset('js/views/main.js') }}"></script>
    <script src="{{ asset('js/views/theme-picker.js') }}"></script>
    <script src="{{ asset('js/models/joint.shapes.app.js') }}"></script>
    <script src="{{ asset('js/views/navigator.js') }}"></script>
    <script>
        joint.setTheme('modern');
        app = new App.MainView({
            el: '#app'
        });
        themePicker = new App.ThemePicker({
            mainView: app
        });
        themePicker.render().$el.appendTo(document.body);
        window.addEventListener('load', function() {
            app.graph.fromJSON(JSON.parse(App.config.sampleGraphs.emergencyProcedure));
        });
    </script>
    <!-- Local file warning: -->
    <div id="message-fs" style="display: none;">
        <p>The application was open locally using the file protocol. It is recommended to access it trough a <b>Web
                server</b>.</p>
        <p>Please see <a href="README.md">instructions</a>.</p>
    </div>
    <script>
        (function() {
            var fs = (document.location.protocol === 'file:');
            var ff = (navigator.userAgent.toLowerCase().indexOf('firefox') !== -1);
            if (fs && !ff) {
                (new joint.ui.Dialog({
                    width: 300,
                    type: 'alert',
                    title: 'Local File',
                    content: $('#message-fs').show()
                })).open();
            }
        })();
    </script>
    @endpush --}}
</x-app-layout>
