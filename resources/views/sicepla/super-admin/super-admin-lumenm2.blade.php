@extends('layouts.dash')


@section('content')

    <div class="col-md-12">
    @component('components.portlet', ['icon' => 'fa fa-users', 'title' => 'Calculo Lumens'])

        <div id="app">

        <div class="panel-body">

            <div class="portlet-body">
        <div class="col-md-12">
        {{-- BEGIN HTML SAMPLE --}}
        @component('components.portlet', ['icon' => 'fa-square', 'title' => 'Calcular numero de lumens necesarios (Largo x Ancho)'])
        <div class="panel-body">
        <div class="portlet-body">
        <div class="row">

            <div class="col-md-3">
            <p>Largo: <input type="number" placeholder="Largo de la Sala" id="txt_campo_1" class="monto" onkeyup="sumar();" /></p>
            <label><b>X</b></label>
            <p>Ancho: <input type="number" placeholder="Ancho de la Sala" id="txt_campo_2" class="monto" onkeyup="sumar();" /></p>
            </div>

            <div class="col-md-1">
            <br>
            <br>
            <label><b>=</b></label>
            </div>

            <div class="col-md-2">
            <p>Cálculo m²: <label id="spTotal"></label>m²</p>
            Un minimó de <label id="spTotalLumen"></label> bombillas, son requeridas.
            </div>

            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>

            @component('components.panel', ['icon' => 'icon-layers', 'title' => 'Introducción','contenido'=>'Hoy en dia, todo lo que hace referencia a iluminación  (Luz, vatios, etc), es importante en nuestro diario vivir, ya sea su uso el trabajo, estudio , recreacion, etc','class'=>'panel-success'])
            @endcomponent

            <img src="/m2/10m2.jpg" width="100%" height="350" id="img10-1" style="display:none;" alt="Lumenes en diferentes areas">
            <img src="/m2/20m2.jpg" width="100%" height="350" id="img20-1" style="display:none;" alt="Lumenes en diferentes areas">
            <img src="/m2/50m2.jpg" width="100%" height="350" id="img50-1" style="display:none;" alt="Lumenes en diferentes areas">
            <img src="/m2/100m2.jpg" width="100%" height="350" id="img100-1" style="display:none;" alt="Lumenes en diferentes areas">
            <img src="/m2/200m2.jpg" width="100%" height="350" id="img200-1" style="display:none;" alt="Lumenes en diferentes areas">
            <img src="/m2/500m2.png" width="100%" height="350" id="img500-1" style="display:none;" alt="Lumenes en diferentes areas">
    
        </div>
        </div>
        </div>
        @endcomponent
        
        </div>

        <div class="col-md-12">
        {{-- BEGIN HTML SAMPLE --}}
        @component('components.portlet', ['icon' => 'fa-square', 'title' => 'Calcular numero de lumens necesarios por area'])
        <div class="panel-body">
        <div class="portlet-body">
        <div class="row">

            <input type="text" id="fx" placeholder="Ingrese el Area de la Sala">
            m²=
            Un minimó de <label id="resultado"></label> bombillas, son requeridas.

            <br>
            <br>

            @component('components.panel', ['icon' => 'icon-layers', 'title' => 'Introducción','contenido'=>'Hoy en dia, todo lo que hace referencia a iluminación  (Luz, vatios, etc), es importante en nuestro diario vivir, ya sea su uso el trabajo, estudio , recreacion, etc','class'=>'panel-success'])
            @endcomponent
            <img src="/m2/10m2.jpg" width="100%" height="350" id="img10" style="display:none;" alt="Lumenes en diferentes areas">
            <img src="/m2/20m2.jpg" width="100%" height="350" id="img20" style="display:none;" alt="Lumenes en diferentes areas">
            <img src="/m2/50m2.jpg" width="100%" height="350" id="img50" style="display:none;" alt="Lumenes en diferentes areas">
            <img src="/m2/100m2.jpg" width="100%" height="350" id="img100" style="display:none;" alt="Lumenes en diferentes areas">
            <img src="/m2/200m2.jpg" width="100%" height="350" id="img200" style="display:none;" alt="Lumenes en diferentes areas">
            <img src="/m2/500m2.png" width="100%" height="350" id="img500" style="display:none;" alt="Lumenes en diferentes areas">

        </div>
        </div>
        </div>
        @endcomponent
        
        </div>

        </div>
        </div>
        </div>
             

    @endcomponent
    </div>
@endsection

@push('functions')
    <script src="/js/Lumens.js" type="text/javascript">
    </script>

    <script src="/js/AxL.js" type="text/javascript">
    </script>

    <script src="/js/image.js" type="text/javascript">
    </script>
@endpush

