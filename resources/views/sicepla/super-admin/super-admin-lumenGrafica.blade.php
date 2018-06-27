@extends('layouts.dash')


@section('content')

        <div class="col-md-12">
        {{-- BEGIN HTML SAMPLE --}}
        @component('components.portlet', ['icon' => 'fa fa-play', 'title' => 'Calcula la extensión de la luz sobre una superficie plana'])
        <div class="panel-body">
        <div class="portlet-body">
        <div class="row">

        <button class="btn btn-success" onclick="printHTML()">Generar PDF</button>

        <br>

        <canvas id="graph" width="800px" height="400px"></canvas>

        <button id="btn1">
        Option 1
        </button>
        <button id="btn2">
        Option 2
        </button>
              
	     

        </div>
        </div>
        </div>
        @endcomponent
        
        </div>

@endsection

@push('functions')
    <script src="/js/Calculos.js" type="text/javascript">
    </script>

    <script src="/js/image.js" type="text/javascript">
    </script>

    <script src="/js/Pdf.js" type="text/javascript">
    </script>

    <script src="/js/Grafica.js" type="text/javascript">
    </script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/1.0.2/Chart.min.js"></script>

@endpush

