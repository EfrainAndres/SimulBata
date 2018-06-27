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

        <div class="col-md-8"><canvas id="graph" width="800px" height="400px"></canvas></div>
        
        <div class="col-md-4">
        <button class="btn btn-success" id="btn1">
        Option 1
        </button>
        <button class="btn btn-success" id="btn2">
        Option 2
        </button>
        <button class="btn btn-success" id="btn3">
        Option 3
        </button>
        <button class="btn btn-success" id="btn4">
        Option 4
        </button>
        <button class="btn btn-success" id="btn5">
        Option 5
        </button>
        </div>
        
        <div align="center"> <img src="/m2/fluorescentes.jpg" width="20%" height="350" id="imgFluorescente" style="display:none;" alt="Lumenes en diferentes areas">
            <img src="/m2/halogena.jpg" width="20%" height="350" id="imgHalogena" style="display:none;" alt="Lumenes en diferentes areas">
            <img src="/m2/incandescente.jpg" width="20%" height="350" id="imgIncandescente" style="display:none;" alt="Lumenes en diferentes areas">
            <img src="/m2/led.jpg" width="20%" height="350" id="imgLed" style="display:none;" alt="Lumenes en diferentes areas">
            <img src="/m2/tubo.jpg" width="20%" height="350" id="imgTubo" style="display:none;" alt="Lumenes en diferentes areas">
        </div>
            
              
	     

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

