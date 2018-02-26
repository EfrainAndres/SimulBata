{{--
|--------------------------------------------------------------------------
| Extends
|--------------------------------------------------------------------------
|
| Hereda los estilos y srcipts de la de la plantilla original.
| Es la base para todas las páginas que se deseen crear.
|
--}}
@extends('material.layouts.dashboard')

{{--
|--------------------------------------------------------------------------
| Styles
|--------------------------------------------------------------------------
|
| Inyecta CSS requerido ya sea por un JS o para un elemento específico
|
| @push('styles')
|
| @endpush
--}}
@push('styles')
    <link href="{{-- asset('assets/global/plugins/bootstrap-daterangepicker/daterangepicker.min.css') --}}" rel="stylesheet" type="text/css" />
    <link href="//www.amcharts.com/lib/3/plugins/export/export.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="https://www.amcharts.com/lib/3/plugins/export/export.css" type="text/css" media="all" />
@endpush


{{--
|--------------------------------------------------------------------------
| Title
|--------------------------------------------------------------------------
|
| Inyecta el título de la página a la etiqueta <title></title> de la plantilla
| Recibe texto o variables de los controladores
| Sin embargo, también se puede usar de la siguiente forma
|
| @section('title', $miVariable)
| @section('title', 'Título')
--}}
@section('title', '| Dashboard')

{{--
|--------------------------------------------------------------------------
| Page Title
|--------------------------------------------------------------------------
|
| Inyecta el título a la sección del contenido de página.
| Recibe texto o variables de los controladores
| Sin embargo, también se puede usar de la siguiente forma
|
| @section('page-title', $miVariable)
| @section('page-title', 'Título')
|
|
--}}
@section('page-title', 'Dashboard')
{{--
|--------------------------------------------------------------------------
| Page Description
|--------------------------------------------------------------------------
|
| Inyecta una breve descripción a la sección del contenido de página.
| Recibe texto o variables de los controladores o se puede dejar sin datos
| Sin embargo, también se puede usar de la siguiente forma
|
| @section('page-description', $miVariable)
| @section('page-description', 'Título')
--}}

@section('page-description', 'Breve descripción de la página')

{{--
|--------------------------------------------------------------------------
| Content
|--------------------------------------------------------------------------
|
| Inyecta el contenido HTML que se usará en la página
|
| @section('content')
|
| @endsection
--}}
@section('content')
    {{-- BEGIN HTML SAMPLE --}}
    <div class="m-content">
        <div class="row">
            <div class="col-md-12">
                <!--begin::Portlet-->
                <div class="m-portlet m-portlet--head-sm" data-portlet="true" id="m_portlet_tools_3">
                    <div class="m-portlet__head">
                        <div class="m-portlet__head-caption">
                            <div class="m-portlet__head-title">
												<span class="m-portlet__head-icon">
													<i class="flaticon-coins"></i>
												</span>
                                <h3 class="m-portlet__head-text">
                                    SIAP
                                </h3>
                            </div>
                        </div>
                        <div class="m-portlet__head-tools">
                            <ul class="m-portlet__nav">
                                <!--<li class="m-portlet__nav-item">
                                    <a href="#"  data-portlet-tool="reload" class="m-portlet__nav-link m-portlet__nav-link--icon">
                                        <i class="la la-refresh"></i>
                                    </a>
                                </li>-->
                                <li class="m-portlet__nav-item">
                                    <a href="#"  data-portlet-tool="toggle" class="m-portlet__nav-link m-portlet__nav-link--icon">
                                        <i class="la la-angle-down"></i>
                                    </a>
                                </li>
                                <li class="m-portlet__nav-item">
                                    <a href="#"  data-portlet-tool="fullscreen" class="m-portlet__nav-link m-portlet__nav-link--icon">
                                        <i class="la la-expand"></i>
                                    </a>
                                </li>
                                <li class="m-portlet__nav-item">
                                    <a href="#" data-portlet-tool="remove" class="m-portlet__nav-link m-portlet__nav-link--icon">
                                        <i class="la la-close"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="m-portlet__body">
                            <div class="row m-row--no-padding m-row--col-separator-xl">
                                    @include('material.partials.pilares')
                            </div>
                            <div class="row m-row--no-padding m-row--col-separator-xl">
                                <div class="col-md-12">
                                        <h1  class="m--font-success text-center">
									    Clusters Movilidad 
								    </h1>
                                    <div id="map"></div>
                                </div>
                                </br>
                                <div class="col-md-12">
                                    <div class="m-portlet__body">
                                            <div class="m-portlet__head">
                                                    <div class="m-portlet__head-caption">
                                                        <div class="m-portlet__head-title">
                                                            <h3 class="m-portlet__head-text">
                                                                Diagrama de barras
                                                            </h3>
                                                        </div>
                                                    </div>
                                                </div>
                                        <div id="chartdiv" style="height: 500px;"></div>
                                        <br>
                                        <br>
                                            <div class="m-portlet__head">
                                                <div class="m-portlet__head-caption">
                                                    <div class="m-portlet__head-title">
                                                        <h3 class="m-portlet__head-text">
                                                            Diagrama de torta general
                                                        </h3>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="m-portlet__body">
                                                <div class="m-widget16">
                                                    <div class="row">
                                                        <div class="col-md-12">
                                                            <div class="m-widget16__stats">
                                                                <div class="m-widget16__visual">
                                                                    <div id="torta" style="height: 180px"></div>
                                                                </div>
                                                                <div class="m-widget16__legends">
                                                                    <div class="m-widget16__legend">
                                                                        <span class="m-widget16__legend-bullet m--bg-success"></span>
                                                                        <span class="m-widget16__legend-text">
                                                                            {{$loca[24]}}% Medio A
                                                                        </span>
                                                                    </div>
                                                                    <div class="m-widget16__legend">
                                                                        <span class="m-widget16__legend-bullet m--bg-danger"></span>
                                                                        <span class="m-widget16__legend-text">
                                                                                {{$loca[25]}}% Móvilidad
                                                                        </span>
                                                                    </div>
                                                                    <div class="m-widget16__legend">
                                                                        <span class="m-widget16__legend-bullet m--bg-info"></span>
                                                                        <span class="m-widget16__legend-text">
                                                                                {{$loca[26]}}% R-D-C
                                                                        </span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <br>
                                            <br>
                                            <div class="m-portlet__head">
                                                <div class="m-portlet__head-caption">
                                                    <div class="m-portlet__head-title">
                                                        <h3 class="m-portlet__head-text">
                                                            Diagrama de torta ambiente (Frecuencia de palabras por redes sociales)
                                                        </h3>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="m-portlet__body">
                                                <div class="m-widget16">
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <h4 class="m-widget24__title text-center">
                                                            Tweeter
                                                            </h4>
                                                            <div class="m-widget16__stats">
                                                                <div class="m-widget16__visual">
                                                                    <div id="torta2" style="height: 180px"></div>
                                                                </div>
                                                                <div class="m-widget16__legends">
                                                                    @foreach($fin as $f)
                                                                    <div class="m-widget16__legend">
                                                                        <span class="m-widget16__legend-bullet m--bg-{{$f->color}}" ></span>
                                                                        <span class="m-widget16__legend-text">
                                                                            {{$f->porcentaje}}% {{$f->nombre}}
                                                                        </span>
                                                                    </div>
                                                                    @endforeach
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <h4 class="m-widget24__title text-center">
                                                            Facebook
                                                            </h4>
                                                            <div class="m-widget16__stats">
                                                                <div class="m-widget16__visual">
                                                                    <div id="torta3" style="height: 180px"></div>
                                                                </div>
                                                                <div class="m-widget16__legends">
                                                                    @foreach($finF as $fa)
                                                                    <div class="m-widget16__legend">
                                                                        <span class="m-widget16__legend-bullet m--bg-{{$fa->color}}" ></span>
                                                                        <span class="m-widget16__legend-text">
                                                                            {{$fa->porcentaje}}% {{$fa->nombre}}
                                                                        </span>
                                                                    </div>
                                                                    @endforeach
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            </br>
                                            <div class="m-portlet__head">
                                                <div class="m-portlet__head-caption">
                                                    <div class="m-portlet__head-title">
                                                        <h3 class="m-portlet__head-text">
                                                            Tabla de información Tweeter
                                                        </h3>
                                                    </div>
                                                </div>
                                            </div>
                                            <br>
                                            

                                        <table class="table table-striped table-bordered table-hover" id="tweets" style="width: none;" width="none" >
                                                <thead>
                                                    <tr>
                                                        <th  style="text-align: center"> Usuario </th>
                                                        <th  style="text-align: center"> Localidad </th>
                                                        <th  style="text-align: center"> Tema </th>
                                                        <th  style="text-align: center"> Tweet </th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @foreach($tweets as $tw)
                                                        <tr>
                                                            <td style="text-align: center">&#64;{{$tw->usuario}}</td>
                                                            <td  style="text-align: center">{{$tw->localidad}}</td>
                                                            <td  style="text-align: center">{{$tw->tema}}</td>
                                                            <td  style="text-align: center">{{$tw->tokens}}</td>
                                                        </tr>
                                                    @endforeach
                                                </tbody>
                                        </table>
                                        </br>
                                        </br>
                                        <div class="m-portlet__head">
                                                <div class="m-portlet__head-caption">
                                                    <div class="m-portlet__head-title">
                                                        <h3 class="m-portlet__head-text">
                                                            Tabla de información Facebook
                                                        </h3>
                                                    </div>
                                                </div>
                                        </div>
                                            <br>
                                            

                                        <table class="table table-striped table-bordered table-hover" id="face" style="width: none;" width="none" >
                                                <thead>
                                                    <tr>
                                                        <th  style="text-align: center"> Comentario </th>
                                                        <th  style="text-align: center"> Tokens </th>
                                                        <th  style="text-align: center"> Tema </th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @foreach($face as $fa)
                                                        <tr>
                                                            <td  style="text-align: center">{{$fa->comentario}}</td>
                                                            <td  style="text-align: center">{{$fa->tokens}}</td>
                                                            <td  style="text-align: center">{{$fa->tema}}</td>
                                                        </tr>
                                                    @endforeach
                                                </tbody>
                                        </table>

    	    			            </div>
                                </div>
                                
                            </div>
                    </div>	
                </div>
                <!--end::Portlet-->
            </div>
        </div>
    </div>
    {{-- END HTML SAMPLE --}}
@endsection

{{--
|--------------------------------------------------------------------------
| Functions
|--------------------------------------------------------------------------
|
| Inyecta scripts necesarios para usar plugins
| > Tablas
| > Checkboxes
| > Radios
| > Mapas
| > Notificaciones
| > Validaciones de Formularios por JS
| > Entre otros
| @push('functions')
|
| @endpush
--}}

@push('plugins')
    <script src="{{ asset('assets/dist/default/assets/vendors/custom/gmaps/gmaps.js') }}" type="text/javascript"></script>
 
@endpush

{{--
|--------------------------------------------------------------------------
| Functions
|--------------------------------------------------------------------------
|
| Inyecta scripts para inicializar componentes Javascript como
| > Tablas
| > Checkboxes
| > Radios
| > Mapas
| > Notificaciones
| > Validaciones de Formularios por JS
| > Entre otros
| @push('functions')
|
| @endpush
--}}
@push('functions')


<script>
$(document).ready(function() {


    $('#tweets').DataTable( {
        "language": {
            "lengthMenu": "Muestra _MENU_ Campos por página",
            "zeroRecords": "No se encontró nada - Lo siento",
            "info": "Página _PAGE_ de _PAGES_",
            "search": "Buscar",
            "infoEmpty": "No hay registros disponibles",
            "infoFiltered": "(Filtrado de _MAX_ registros totales)"
        },
        "lengthMenu": [ [10, 30, 50, 100, -1], [10, 30, 50, 100, "All"] ],
        dom: 'lBfrtip',
        buttons: [
            'excel', 'pdf'
        ],
        "pagingType": "full_numbers",
        "scrollX": true
    } );

} );
</script>

<script>
        $(document).ready(function() {
        
        
            $('#face').DataTable( {
                "language": {
                    "lengthMenu": "Muestra _MENU_ Campos por página",
                    "zeroRecords": "No se encontró nada - Lo siento",
                    "info": "Página _PAGE_ de _PAGES_",
                    "search": "Buscar",
                    "infoEmpty": "No hay registros disponibles",
                    "infoFiltered": "(Filtrado de _MAX_ registros totales)"
                },
                "lengthMenu": [ [10, 30, 50, 100, -1], [10, 30, 50, 100, "All"] ],
                dom: 'lBfrtip',
                buttons: [
                    'excel', 'pdf'
                ],
                "pagingType": "full_numbers",
                "scrollX": true
            } );
        
        } );
        </script>

<script>
    Morris.Donut({
        element: 'torta2',
        data: [@foreach ($fin as $f)
                {
                label: "{{$f->nombre}}",
                value: {{$f->total}}
            },
            @endforeach

        ],
        labelColor: '#a7a7c2',
        colors: [
            @foreach ($fin as $f)
            mUtil.getColor('{{$f->color}}'),
            @endforeach
        ]
        //formatter: function (x) { return x + "%"}
    });
</script> 

<script>
    Morris.Donut({
        element: 'torta3',
        data: [@foreach ($finF as $fa)
                {
                label: "{{$fa->nombre}}",
                value: {{$fa->total}}
            },
            @endforeach

        ],
        labelColor: '#a7a7c2',
        colors: [
            @foreach ($finF as $fa)
            mUtil.getColor('{{$fa->color}}'),
            @endforeach
        ]
        //formatter: function (x) { return x + "%"}
    });
</script> 

<script>
        Morris.Donut({
            element: 'torta',
            data: [{
                    label: "Ambiente",
                    value: {{$loca[21]}}
                },
                {
                    label: "Móvilidad",
                    value: {{$loca[22]}}
                },
                {
                    label: "Cultura",
                    value: {{$loca[23]}}
                }
            ],
            labelColor: '#a7a7c2',
            colors: [
                mUtil.getColor('success'),
                mUtil.getColor('danger'),
                mUtil.getColor('info')
            ]
            //formatter: function (x) { return x + "%"}
        });
</script>

    
<script>
        
                
    function initMap() {

    var map = new google.maps.Map(document.getElementById('map'), {
        zoom: 13,
        center: {lat: 4.658416, lng: -74.075150}
        
    });

    var labels = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';

    var markers = locations.map(function(location, i) {
        return new google.maps.Marker({
            position: location,
            label: labels[i % labels.length]
        });
    });

    // Add a marker clusterer to manage the markers.
    var markerCluster = new MarkerClusterer(map, markers,
        {imagePath: 'https://developers.google.com/maps/documentation/javascript/examples/markerclusterer/m'});
    }

    var locations = [];
    var ult = 0;

    for (i = 0; i < {{$loca[1]}}; i++) {
        //Usaquen 8625 ,
        locations[i] = {lat: 4.707536, lng:  -74.030911};
    }
    ult = i;
    for (i; i < {{$loca[2]}} + ult; i++) {
        //chapinero 1341 , 
        locations[i] = {lat: 4.658399, lng: -74.054557};
    }
    ult = i;
    for (i; i < {{$loca[3]}} + ult; i++) {
        //Santafe 7439 
        locations[i] = {lat: 4.617214, lng: -74.070693};
    }
    ult = i;
    for (i; i < {{$loca[4]}} + ult; i++) {
        //San Cristobal 6243 , 
        locations[i] = {lat: 4.555567, lng: -74.091616};
    }
    ult = i;
    for (i; i < {{$loca[5]}} + ult; i++) {
        //Usme 7134 4.512006, -74.108367
        locations[i] = {lat: 4.512006, lng: -74.108367};
    }
    ult = i;
    for (i; i < {{$loca[6]}} + ult; i++) {
        //Tunjuelito 6100 4.560697, 
        locations[i] = {lat: 4.560697, lng: -74.133864};
    }
    ult = i;
    for (i; i < {{$loca[7]}} + ult; i++) {
        //Bosa 11276  , 
        locations[i] = {lat: 4.618361, lng: -74.186050};
    }
    ult = i;
    for (i; i < {{$loca[8]}} + ult; i++) {
        //Kennedy 8027 , -
        locations[i] = {lat: 4.638038, lng: -74.147941};
    }
    ult = i;
    for (i; i < {{$loca[9]}} + ult; i++) {
        //Fontibon 9404 
        locations[i] = {lat: 4.680433, lng: -74.147580};
    }
    ult = i;
    for (i; i < {{$loca[10]}} + ult; i++) {
        //Engativa 10928 , 
        locations[i] = {lat: 4.722388, lng: -74.113384};
    }
    ult = i;
    for (i; i < {{$loca[11]}} + ult; i++) {
        //Suba 9823 
        locations[i] = {lat: 4.750142, lng: -74.084370};
    }
    ult = i;
    for (i; i < {{$loca[12]}} + ult; i++) {
        //Barrios unidos 5879 
        locations[i] = {lat: 4.670058, lng: -74.076759};
    }
    ult = i;
    for (i; i < {{$loca[13]}} + ult; i++) {
        //Teusaquilo 5747
        locations[i] = {lat: 4.641056, lng: -74.087150};
    }
    ult = i;
    for (i; i < {{$loca[14]}} + ult; i++) {
        //Los mártires 7086 
        locations[i] = {lat: 4.607992, lng: -74.086874};
    }
    ult = i;
    for (i; i < {{$loca[15]}} + ult; i++) {
        //Antonio Nariño 5322 
        locations[i] = {lat: 4.589875, lng: -74.101892};
    }
    ult = i;
    for (i; i < {{$loca[16]}} + ult; i++) {
        //Puente Aranda 8092 
        locations[i] = {lat: 4.620412, lng: -74.110455};
    }
    ult = i;
    for (i; i < {{$loca[17]}} + ult; i++) {
        //La Candelaria 9823 , -
        locations[i] = {lat:  4.587733, lng: -74.073096};
    }
    ult = i;
    for (i; i < {{$loca[18]}} + ult; i++) {
        //Rafael uribe Uribe 6113 
        locations[i] = {lat: 4.571707, lng: -74.114879};
    }
    ult = i;
    for (i; i < {{$loca[19]}} + ult; i++) {
        //Ciudad Bolivar 11263 
        locations[i] = {lat: 4.585559, lng: -74.163734};
    }
    ult = i;
    for (i; i < {{$loca[20]}} + ult; i++) {
        //Sumapaz 1036 
        locations[i] = {lat: 4.442410, lng: -74.126483};
    }
    ult = i;

    
</script>
<script src="https://developers.google.com/maps/documentation/javascript/examples/markerclusterer/markerclusterer.js">
</script>
<script async defer
     src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCiOlzGfEKo16xk7RvMLM0iZp8ycIlSvJ0&callback=initMap">
</script>

<script src="https://www.amcharts.com/lib/3/amcharts.js"></script>
<script src="https://www.amcharts.com/lib/3/serial.js"></script>
<script src="https://www.amcharts.com/lib/3/plugins/export/export.min.js"></script>
<script src="https://www.amcharts.com/lib/3/themes/light.js"></script>

<script>
var chart = AmCharts.makeChart("chartdiv", {
	"theme": "light",
    "type": "serial",
    "dataProvider": [{
        "name": "Usaquén (1)",
        "startTime": 0,
        "endTime": {{$loca[1]}},
        "color": "#9e0404"
    }, {
        "name": "Chapinero (2)",
        "startTime": 0,
        "endTime": {{$loca[2]}},
        "color": "#9e3404"
    }, {
        "name": "Santa Fe (3)",
        "startTime": 0,
        "endTime": {{$loca[3]}},
        "color": "#9e6804"
    }, {
        "name": "San Cristóbal (4)",
        "startTime": 0,
        "endTime": {{$loca[4]}},
        "color": "#9e9e04"
    },{
        "name": "Usme (5)",
        "startTime": 0,
        "endTime": {{$loca[5]}},
        "color": "#5d9e04"
    },
    {
        "name": "Tunjuelito (6)",
        "startTime": 0,
        "endTime": {{$loca[6]}},
        "color": "#229e04"
    },
    {
        "name": "Bosa (7)",
        "startTime": 0,
        "endTime": {{$loca[7]}},
        "color": "#049e20"
    },
    {
        "name": "Kennedy (8)",
        "startTime": 0,
        "endTime": {{$loca[8]}},
        "color": "#049e53"
    },
    {
        "name": "Fontibón (9)",
        "startTime": 0,
        "endTime": {{$loca[9]}},
        "color": "#049e8e"
    },
    {
        "name": "Engativá (10)",
        "startTime": 0,
        "endTime": {{$loca[10]}},
        "color": "#04899e"
    },
    {
        "name": "Suba (11)",
        "startTime": 0,
        "endTime": {{$loca[11]}},
        "color": "#04519e"
    },
    {
        "name": "Barrios unidos (12)",
        "startTime": 0,
        "endTime": {{$loca[12]}},
        "color": "#04209e"
    },
    {
        "name": "Teusaquillo (13)",
        "startTime": 0,
        "endTime": {{$loca[13]}},
        "color": "#18049e"
    },
    {
        "name": "Los Mártires (14)",
        "startTime": 0,
        "endTime": {{$loca[14]}},
        "color": "#4b049e"
    },
    {
        "name": "Antonio Nariño (15)",
        "startTime": 0,
        "endTime": {{$loca[15]}},
        "color": "#6a049e"
    },
    {
        "name": "Puente Aranda (16)",
        "startTime": 0,
        "endTime": {{$loca[16]}},
        "color": "#8e049e"
    },
    {
        "name": "La Candelaria (17)",
        "startTime": 0,
        "endTime": {{$loca[17]}},
        "color": "#9e048e"
    },
    {
        "name": "Rafael Uribe Uribe (18)",
        "startTime": 0,
        "endTime": {{$loca[18]}},
        "color": "#9e046d"
    },
    {
        "name": "Ciudad Bolívar (19)",
        "startTime": 0,
        "endTime": {{$loca[19]}},
        "color": "#9e044b"
    },
    {
        "name": "Suma Paz (20)",
        "startTime": 0,
        "endTime": {{$loca[20]}},
        "color": "#9e0427"
    },
    
    
    ],
    "valueAxes": [{
        "axisAlpha": 0,
        "gridAlpha": 0.1
    }],
    "startDuration": 1,
    "graphs": [{
        "balloonText": "<b>[[category]]</b><br>Total: [[endTime]]",
        "colorField": "color",
        "fillAlphas": 0.8,
        "lineAlpha": 0,
        "openField": "startTime",
        "type": "column",
        "valueField": "endTime"
    }],
    "rotate": true,
    "columnWidth": 1,
    "categoryField": "name",
    "categoryAxis": {
        "gridPosition": "start",
        "axisAlpha": 0,
        "gridAlpha": 0.1,
        "position": "left"
    },
    "export": {
    	"enabled": true
     }
});
</script>



@endpush










