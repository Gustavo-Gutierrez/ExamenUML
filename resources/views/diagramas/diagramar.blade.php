@section('title', 'Home')
<x-app-layout>
    <div class="page-wrapper">
        <div class="container-xl">
            <!-- Page title -->
            <div class="page-header d-print-none">
                <div class="row g-2 align-items-center">
                    <div class="col">
                        <h2 class="page-title">
                            Proyecto: {{ $proyecto->nombre }}
                        </h2>
                        <p style="font-size: 10px">Diagrama: {{ $diagrama->nombre }}</p>
                    </div>
                    <!-- Page title actions -->
                    <div class="col-12 col-md-auto ms-auto d-print-none">
                        <span class="d-none d-sm-inline">
                            <a href="{{ route('diagramas.index', $diagrama->proyecto_id) }}" class="btn btn-secondary">
                                Volver
                            </a>
                        </span>
                        @if ($diagrama->proyecto->user_id == Auth::user()->id)
                            
                        <a href="#" class="btn btn-primary d-none d-sm-inline-block" title="Guardar copia de seguridad">
                            <!-- Download SVG icon from http://tabler-icons.io/i/plus -->
                            <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24"
                            viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                            stroke-linecap="round" stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                            <line x1="12" y1="5" x2="12" y2="19" />
                            <line x1="5" y1="12" x2="19" y2="12" />
                        </svg>
                            Guardar
                        </a>
                        
                        <a href="#" class="btn btn-blue d-none d-sm-inline-block" title="Exportar para architect">
                            <img src="{{asset('/assets/img/enterprise-architect-logo.png')}}" width="75">
                        </a>
                        @endif
                    </div>

                </div>
            </div>
        </div>
    </div>
    <div id="app">
        <div class="app-header">
            <div class="app-title" style="background-color: rgb(235, 235, 235)">
                <img src="{{ asset('assets/img/logo.png') }}" height="70px" alt="">
            </div>
            <div class="toolbar-container"></div>
        </div>
        <div class="app-body">
            <div class="stencil-container"></div>
            <div class="paper-container"></div>
            <div class="inspector-container" style="background-color: rgba(23,67,122,255)"></div>
            <div class="navigator-container"></div>
        </div>
    </div>

    <textarea id="contenido" hidden cols="30" rows="10">{{ $diagrama->contenido }}</textarea>
    <input name="diagrama_id" type="text" value="{{ $diagrama->id }}" hidden>


    <input name="persona" type="text" value="{{ asset('assets/image-person.svg') }}" hidden>
    <input name="persona2" type="text" value="{{ asset('assets/image-person-2.svg') }}" hidden>
    <input name="cylinder_horizontal" type="text" value="{{ asset('assets/image-cylinder-horizontal.svg') }}" hidden>
    <input name="data_container" type="text" value="{{ asset('assets/image-data-container.svg') }}" hidden>
    <input name="hexagon" type="text" value="{{ asset('assets/image-hexagon.svg') }}" hidden>
    <input name="web_browser" type="text" value="{{ asset('assets/image-web-browser.svg') }}" hidden>
    <input name="transparent_icon" type="text" value="{{ asset('assets/transparent-icon.svg') }}" hidden>
    <input name="no_color_icon" type="text" value="{{ asset('assets/no-color-icon.svg') }}" hidden>
    @push('scripts')
        <script>
            var diagrama_id = $("input[name=diagrama_id]").val();
            var contenido = document.getElementById("contenido").value;

            var person = $("input[name=persona]").val();
            var person2 = $("input[name=persona2]").val();
            var cylinder_horizontal = $("input[name=cylinder_horizontal]").val();
            var data_container = $("input[name=data_container]").val();
            var hexagon = $("input[name=hexagon]").val();
            var web_browser = $("input[name=web_browser]").val();
            var transparent_icon = $("input[name=transparent_icon]").val();
            var no_color_icon = $("input[name=no_color_icon]").val();

            // console.log(contenido)

            // console.log(window.location.pathname.substr(11));



            function guardar(paper) {
                /* $.ajax({
                    type: "POST",
                    url: "{{ url('diagramas/guardar') }}",
                    data: {
                        id: diagrama_id,
                        contenido: paper
                    },
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },
                    dataType: 'JSON',
                    success: function() {
                        
                    },
                }); */
                axios.post("/diagramas/guardar", {
                        id: diagrama_id,
                        contenido: paper
                    })
                    .then((res) => {
                        /* console.log(res.data) */
                    })
                    .catch((error) => {
                        console.log(error);
                        Swal.fire(`Ocurrió un problema, por favor inténtalo más tarde.`)
                    });
            };
        </script>
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
                console.log(contenido.length)
                /* App.MainView.paper = JSON.parse(contenido); */
                app.graph.fromJSON(JSON.parse(contenido));
            });

            Echo.join(`diagramar.${diagrama_id}`).listen('DiagramaSent', (e) => {
                app.graph.fromJSON(JSON.parse(e.diagrama.contenido));
                // console.log(e.diagrama.contenido);
                // app.MainView.paper = JSON.parse(e.diagrama.contenido);
            })
        </script>
        {{-- <script>
function imprimirxd(){
console.log(App.MainView.paper)
}
</script> --}}

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
    @endpush
</x-app-layout>
