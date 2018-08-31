@extends('layouts.dash')

@section('content')

@section('content')
    <div class="col-md-12">
        {{-- BEGIN HTML SAMPLE --}}
        @component('components.portlet', ['icon' => 'icon-layers', 'title' => 'SOFTWARE DE SIMULACIÓN DE TECNOLOGÍAS LUMÍNICAS'])

            @component('components.panel', ['icon' => 'icon-layers', 'title' => 'Introducción','contenido'=>'Hoy en dia, todo lo que hace referencia a iluminación  (Luz, vatios, etc), es importante en nuestro diario vivir, ya sea su uso el trabajo, estudio , recreacion, etc','class'=>'panel-success'])
            @endcomponent

            @component('components.panel', ['icon' => 'icon-layers', 'title' => 'Beneficios','contenido'=>'Los beneficios que da este software, es que se dara una proyeccion sobre el significado y los diferentes calculos para obtener una iluminación adecuada y de cierta manera saber que bombillas en el mercado se pueden usar para optimizar costos.','class'=>'panel-info'])
            @endcomponent

        @endcomponent

        {{-- END HTML SAMPLE --}}
    </div>
@endsection
  

@endsection
