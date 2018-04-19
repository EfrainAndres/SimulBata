@extends('layouts.dash')

@section('content')

@section('content')
    <div class="col-md-12">
        {{-- BEGIN HTML SAMPLE --}}
        @component('components.portlet', ['icon' => 'icon-layers', 'title' => 'Sistema de ...... '])

            @component('components.panel', ['icon' => 'icon-layers', 'title' => 'Introducción','contenido'=>'...','class'=>'panel-success'])
            @endcomponent

            @component('components.panel', ['icon' => 'icon-layers', 'title' => 'Beneficios','contenido'=>'...','class'=>'panel-info'])
            @endcomponent

             @component('components.panel', ['icon' => 'icon-layers', 'title' => 'Política Calidad','contenido'=>'......','class'=>'panel-warning'])
             @endcomponent

             @component('components.panel', ['icon' => 'icon-layers', 'title' => 'Objetivos Calidad','contenido'=>'....','class'=>'panel-primary'])
             @endcomponent

        @endcomponent

        {{-- END HTML SAMPLE --}}
    </div>
@endsection
  

@endsection
