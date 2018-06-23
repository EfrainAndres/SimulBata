@extends('layouts.dash')


@section('content')

    <div class="col-md-12">
    @component('components.portlet', ['icon' => 'fa fa-users', 'title' => 'Calculo Lumens'])

        <div id="app">

        <div class="panel-body">

            <div class="portlet-body">
        <div class="col-md-6">
        {{-- BEGIN HTML SAMPLE --}}
        @component('components.portlet', ['icon' => 'fa-square', 'title' => 'Calcular numero de lumens necesarios (Largo x Ancho)'])
        <div class="panel-body">
        <div class="portlet-body">
        <div class="row">

            
            <p>Largo: <input type="number" placeholder="Largo de la Sala" id="txt_campo_1" class="monto" onkeyup="sumar();" /></p>
            <label><b>X</b></label>
            <p>Ancho: <input type="number" placeholder="Ancho de la Sala" id="txt_campo_2" class="monto" onkeyup="sumar();" /></p>
            <label><b>=</b></label>
            <p>Cálculo: <label id="spTotal"></label></p>

            <br>
            <br>

            @component('components.panel', ['icon' => 'icon-layers', 'title' => 'Introducción','contenido'=>'Hoy en dia, todo lo que hace referencia a iluminación  (Luz, vatios, etc), es importante en nuestro diario vivir, ya sea su uso el trabajo, estudio , recreacion, etc','class'=>'panel-success'])
            @endcomponent

            <br>
            <br>
            <img src="/fotos/3.jpeg" width="100" height="100" id="img100" style="display:none;" alt="Lumenes en diferentes areas">
            <img src="/fotos/4.jpeg" width="100" height="100" id="img200" style="display:none;" alt="Lumenes en diferentes areas">


        </div>
        </div>
        </div>
        @endcomponent
        
        </div>

        <div class="col-md-6">
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

            <br>
            <br>
            <img src="/fotos/3.jpeg" width="100" height="100" id="img100" style="display:none;" alt="Lumenes en diferentes areas">
            <img src="/fotos/4.jpeg" width="100" height="100" id="img200" style="display:none;" alt="Lumenes en diferentes areas">

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

