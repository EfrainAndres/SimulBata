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
    <link href="{{asset('assets/vendors/base/vendors.bundle.css')}}" rel="stylesheet" type="text/css" />
	<link href="{{asset('assets/demo/default/base/style.bundle.css')}}" rel="stylesheet" type="text/css" />
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
									    Clusters
								    </h1>
                                    <div id="map"></div>
                                </div>
                                </br>
                                <div class="col-md-12">
                                    <div class="m-portlet__body">
                                        <div id="chartdiv" style="height: 500px;"></div>
                                        <table style="width:100%">
                                                <tr>
                                                  <th>1</th>
                                                  <th>2</th>
                                                  <th>3</th>
                                                  <th>4</th>
                                                  <th>5</th>
                                                  <th>6</th>
                                                  <th>7</th>
                                                  <th>8</th>
                                                  <th>9</th>
                                                  <th>10</th>
                                                  <th>11</th>
                                                  <th>12</th>
                                                  <th>13</th>
                                                  <th>14</th>
                                                  <th>15</th>
                                                  <th>16</th>
                                                  <th>17</th>
                                                  <th>18</th>
                                                  <th>19</th>
                                                  <th>20</th>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <a href="{{asset('assets/doc/Usaquen Seguidores.xlsx')}}">
                                                            <i class="fa fa-arrow-circle-o-down"  style="color: #9e0404" aria-hidden="true"></i>
                                                        </a>
                                                    </td>
                                                    <td>
                                                        <a href="{{asset('assets/doc/Chapinero Seguidores.xlsx')}}">
                                                            <i class="fa fa-arrow-circle-o-down"  style="color: #9e3404" aria-hidden="true"></i>
                                                        </a>
                                                    </td>
                                                    <td>
                                                        <a href="{{asset('assets/doc/SantaFe Seguidores.xlsx')}}">
                                                            <i class="fa fa-arrow-circle-o-down"  style="color: #9e6804" aria-hidden="true"></i>
                                                        </a>
                                                    </td>
                                                    <td>
                                                        <a href="{{asset('assets/doc/San Cristobal Seguidores.xlsx')}}">
                                                            <i class="fa fa-arrow-circle-o-down" style="color: #9e9e04" aria-hidden="true"></i>
                                                        </a>
                                                    </td>
                                                    <td>
                                                        <a href="{{asset('assets/doc/Usme Seguidores.xlsx')}}">
                                                            <i class="fa fa-arrow-circle-o-down" style="color: #5d9e04" aria-hidden="true"></i>
                                                        </a>
                                                    </td>
                                                    <td>
                                                        <a href="{{asset('assets/doc/Tunjuelito Seguidores.xlsx')}}">
                                                            <i class="fa fa-arrow-circle-o-down" style="color: #229e04" aria-hidden="true"></i>
                                                        </a>
                                                    </td>
                                                    <td>
                                                        <a href="{{asset('assets/doc/Bosa Seguidores.xlsx')}}">
                                                            <i class="fa fa-arrow-circle-o-down" style="color: #049e20" aria-hidden="true"></i>
                                                        </a>
                                                    </td>
                                                    <td>
                                                        <a href="{{asset('assets/doc/Kennedy Seguidores.xlsx')}}">
                                                            <i class="fa fa-arrow-circle-o-down" style="color: #049e53" aria-hidden="true"></i>
                                                        </a>
                                                    </td>
                                                    <td>
                                                        <a href="{{asset('assets/doc/Fontibon Seguidores.xlsx')}}">
                                                            <i class="fa fa-arrow-circle-o-down" style="color: #049e8e" aria-hidden="true"></i>
                                                        </a>
                                                    </td>
                                                    <td>
                                                        <a href="{{asset('assets/doc/Engativa Seguidores.xlsx')}}">
                                                            <i class="fa fa-arrow-circle-o-down" style="color: #04899e" aria-hidden="true"></i>
                                                        </a>
                                                    </td>
                                                    <td>
                                                        <a href="{{asset('assets/doc/Suba Seguidores.xlsx')}}">
                                                            <i class="fa fa-arrow-circle-o-down" style="color: #04519e" aria-hidden="true"></i>
                                                        </a>
                                                    </td>
                                                    <td>
                                                        <a href="{{asset('assets/doc/Barrios Unidos Seguidores.xlsx')}}">
                                                            <i class="fa fa-arrow-circle-o-down" style="color: #04209e" aria-hidden="true"></i>
                                                        </a>
                                                    </td>
                                                    <td>
                                                        <a href="{{asset('assets/doc/Teusaquillo Seguidores.xlsx')}}">
                                                            <i class="fa fa-arrow-circle-o-down" style="color: #18049e" aria-hidden="true"></i>
                                                        </a>
                                                    </td>
                                                    <td>
                                                        <a href="{{asset('assets/doc/Martires Seguidores.xlsx')}}">
                                                            <i class="fa fa-arrow-circle-o-down" style="color: #4b049e" aria-hidden="true"></i>
                                                        </a>
                                                    </td>
                                                    <td>
                                                        <a href="{{asset('assets/doc/Antonio Nariño Seguidores.xlsx')}}">
                                                            <i class="fa fa-arrow-circle-o-down" style="color: #6a049e" aria-hidden="true"></i>
                                                        </a>
                                                    </td>
                                                    <td>
                                                        <a href="{{asset('assets/doc/Puente Aranda Seguidores.xlsx')}}">
                                                            <i class="fa fa-arrow-circle-o-down" style="color: #8e049e" aria-hidden="true"></i>
                                                        </a>
                                                    </td>
                                                    <td>
                                                        <a href="{{asset('assets/doc/Candelaria Seguidores.xlsx')}}">
                                                            <i class="fa fa-arrow-circle-o-down" style="color: #9e048e" aria-hidden="true"></i>
                                                        </a>
                                                    </td>
                                                    <td>
                                                        <a href="{{asset('assets/doc/Rafael Uribe Seguidores.xlsx')}}">
                                                            <i class="fa fa-arrow-circle-o-down" style="color: #9e046d" aria-hidden="true"></i>
                                                        </a>
                                                    </td>
                                                    <td>
                                                        <a href="{{asset('assets/doc/Ciudad Bolivar Seguidores.xlsx')}}">
                                                            <i class="fa fa-arrow-circle-o-down" style="color: #9e044b" aria-hidden="true"></i>
                                                        </a>
                                                    </td>
                                                    <td>
                                                        <a href="{{asset('assets/doc/Sumapaz Seguidores.xlsx')}}">
                                                            <i class="fa fa-arrow-circle-o-down" style="color: #9e0427" aria-hidden="true"></i>
                                                        </a>
                                                    </td>
                                                </tr>
                                              </table>
    	    			            </div>
                                </div>
                                
                            </div>
                            <div class="m-widget1">
                                    <div class="m-widget1__item">
                                        <div class="row m-row--no-padding align-items-center">
                                            <div class="col">
                                                <h3 class="m-widget1__title">Seguidores por localidades</h3>
                                                <!--<a href="{{ asset('assets/doc/Partido Verde Seguidores.xlsx')}}">
                                                    <span class="m-widget1__desc">Descarga <i class="fa fa-arrow-down" aria-hidden="true"></i></span>
                                                </a>-->
                                            </div>
                                            <div class="col m--align-right">
                                                <span class="m-widget1__number m--font-brand">156,115</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="m-widget1__item">
                                        <div class="row m-row--no-padding align-items-center">
                                            <div class="col">
                                                <h3 class="m-widget1__title">Seguidores Alianza Verde</h3>
                                                <a href="{{ asset('assets/doc/Partido Verde Seguidores.xlsx')}}">
                                                    <span class="m-widget1__desc">Descarga <i class="fa fa-arrow-down" aria-hidden="true"></i></span>
                                                </a>
                                            </div>
                                            <div class="col m--align-right">
                                                <span class="m-widget1__number m--font-success">67,419</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="m-widget1__item">
                                        <div class="row m-row--no-padding align-items-center">
                                            <div class="col">
                                                <h3 class="m-widget1__title">Usuarios</h3>
                                                <a href="{{ asset('assets/doc/Cuentas Usuarios.xlsx')}}">
                                                    <span class="m-widget1__desc">Descarga <i class="fa fa-arrow-down" aria-hidden="true"></i></span>
                                                </a>
                                            </div>
                                            <div class="col m--align-right">
                                                <span class="m-widget1__number m--font-danger">133,035</span>
                                            </div>
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

    for (i = 0; i < 8625; i++) {
        //Usaquen 8625 ,
        locations[i] = {lat: 4.707536, lng:  -74.030911};
    }
    ult = i;
    for (i; i < 13041 + ult; i++) {
        //chapinero 1341 , 
        locations[i] = {lat: 4.658399, lng: -74.054557};
    }
    ult = i;
    for (i; i < 7439 + ult; i++) {
        //Santafe 7439 
        locations[i] = {lat: 4.617214, lng: -74.070693};
    }
    ult = i;
    for (i; i < 6243 + ult; i++) {
        //San Cristobal 6243 , 
        locations[i] = {lat: 4.555567, lng: -74.091616};
    }
    ult = i;
    for (i; i < 7134 + ult; i++) {
        //Usme 7134 4.512006, -74.108367
        locations[i] = {lat: 4.512006, lng: -74.108367};
    }
    ult = i;
    for (i; i < 6100 + ult; i++) {
        //Tunjuelito 6100 4.560697, 
        locations[i] = {lat: 4.560697, lng: -74.133864};
    }
    ult = i;
    for (i; i < 11276 + ult; i++) {
        //Bosa 11276  , 
        locations[i] = {lat: 4.618361, lng: -74.186050};
    }
    ult = i;
    for (i; i < 8027 + ult; i++) {
        //Kennedy 8027 , -
        locations[i] = {lat: 4.638038, lng: -74.147941};
    }
    ult = i;
    for (i; i < 9404 + ult; i++) {
        //Fontibon 9404 
        locations[i] = {lat: 4.680433, lng: -74.147580};
    }
    ult = i;
    for (i; i < 10928 + ult; i++) {
        //Engativa 10928 , 
        locations[i] = {lat: 4.722388, lng: -74.113384};
    }
    ult = i;
    for (i; i < 9823 + ult; i++) {
        //Suba 9823 
        locations[i] = {lat: 4.750142, lng: -74.084370};
    }
    ult = i;
    for (i; i < 5879 + ult; i++) {
        //Barrios unidos 5879 
        locations[i] = {lat: 4.670058, lng: -74.076759};
    }
    ult = i;
    for (i; i < 5747 + ult; i++) {
        //Teusaquilo 5747
        locations[i] = {lat: 4.641056, lng: -74.087150};
    }
    ult = i;
    for (i; i < 7086 + ult; i++) {
        //Los mártires 7086 
        locations[i] = {lat: 4.607992, lng: -74.086874};
    }
    ult = i;
    for (i; i < 5322 + ult; i++) {
        //Antonio Nariño 5322 
        locations[i] = {lat: 4.589875, lng: -74.101892};
    }
    ult = i;
    for (i; i < 8092 + ult; i++) {
        //Puente Aranda 8092 
        locations[i] = {lat: 4.620412, lng: -74.110455};
    }
    ult = i;
    for (i; i < 9068 + ult; i++) {
        //La Candelaria 9823 , -
        locations[i] = {lat:  4.587733, lng: -74.073096};
    }
    ult = i;
    for (i; i < 5982 + ult; i++) {
        //Rafael uribe Uribe 6113 
        locations[i] = {lat: 4.571707, lng: -74.114879};
    }
    ult = i;
    for (i; i < 9811 + ult; i++) {
        //Ciudad Bolivar 11263 
        locations[i] = {lat: 4.585559, lng: -74.163734};
    }
    ult = i;
    for (i; i < 1088 + ult; i++) {
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
        "endTime": 8625,
        "color": "#9e0404"
    }, {
        "name": "Chapinero (2)",
        "startTime": 0,
        "endTime": 13041,
        "color": "#9e3404"
    }, {
        "name": "Santa Fe (3)",
        "startTime": 0,
        "endTime": 7439,
        "color": "#9e6804"
    }, {
        "name": "San Cristóbal (4)",
        "startTime": 0,
        "endTime": 6243,
        "color": "#9e9e04"
    },{
        "name": "Usme (5)",
        "startTime": 0,
        "endTime": 7134,
        "color": "#5d9e04"
    },
    {
        "name": "Tunjuelito (6)",
        "startTime": 0,
        "endTime": 6100,
        "color": "#229e04"
    },
    {
        "name": "Bosa (7)",
        "startTime": 0,
        "endTime": 11276,
        "color": "#049e20"
    },
    {
        "name": "Kennedy (8)",
        "startTime": 0,
        "endTime": 8027,
        "color": "#049e53"
    },
    {
        "name": "Fontibón (9)",
        "startTime": 0,
        "endTime": 9404,
        "color": "#049e8e"
    },
    {
        "name": "Engativá (10)",
        "startTime": 0,
        "endTime": 10928,
        "color": "#04899e"
    },
    {
        "name": "Suba (11)",
        "startTime": 0,
        "endTime": 9823,
        "color": "#04519e"
    },
    {
        "name": "Barrios unidos (12)",
        "startTime": 0,
        "endTime": 5879,
        "color": "#04209e"
    },
    {
        "name": "Teusaquillo (13)",
        "startTime": 0,
        "endTime": 5747,
        "color": "#18049e"
    },
    {
        "name": "Los Mártires (14)",
        "startTime": 0,
        "endTime": 7086,
        "color": "#4b049e"
    },
    {
        "name": "Antonio Nariño (15)",
        "startTime": 0,
        "endTime": 5322,
        "color": "#6a049e"
    },
    {
        "name": "Puente Aranda (16)",
        "startTime": 0,
        "endTime": 8092,
        "color": "#8e049e"
    },
    {
        "name": "La Candelaria (17)",
        "startTime": 0,
        "endTime": 9068,
        "color": "#9e048e"
    },
    {
        "name": "Rafael Uribe Uribe (18)",
        "startTime": 0,
        "endTime": 5982,
        "color": "#9e046d"
    },
    {
        "name": "Ciudad Bolívar (19)",
        "startTime": 0,
        "endTime": 9811,
        "color": "#9e044b"
    },
    {
        "name": "Suma Paz (20)",
        "startTime": 0,
        "endTime": 1088,
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











