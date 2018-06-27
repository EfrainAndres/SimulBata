@extends('layouts.dash')


@section('content')

        <div class="col-md-12">
        {{-- BEGIN HTML SAMPLE --}}
        @component('components.portlet', ['icon' => 'fa fa-play', 'title' => 'Calcular numero de luz necesaria por area'])
        <div class="panel-body">
        <div class="portlet-body">
        <div class="row">

            <form method="post" name="downlight_calculator">
            <div class="col-md-4">
            Ancho x Largo: 
            <input class="textinput" type="text" name="downlight_width" size="4" onKeyup="calculate_downlights()"> x <input class="textinput" type="text" name="downlight_length" size="4" onKeyup="calculate_downlights()"> metros
            <br>
            <br>
            Área: 
            <input class="textinput" type="text" name="downlight_area" size="12" onKeyup="calculate_downlights()"> m<sup>2</sup>
            <br>
            <br>
            Tipo de habitación: 
            <br>
            <select class="textinput" height="15" name="downlight_room" id="downlight_room" onChange="calculate_downlights()" selected="">
					                      	<option value="100">Dormitorio / Pasillo (100 Lux)</option>
                                            <option value="150">Vestidores - Baños (150 Lux)</option>
                                            <option value="160">Escaleras (160 Lux)</option>
					                      	<option value="250">Salón - Bien Iluminado (250 Lux)</option>
					                      	<option value="400">Almacenes - Bodegas (400 Lux)</option>
                            		</select>
            <br>
            <br>
            Tipo de Bombilla: 
            <br>
            <select class="textinput" height="15" name="downlight_product" onChange="calculate_downlights()" selected="">
					                      	<option value="750">DLD10WW - Bombillas Economicas - 10W</option>
					                      	<option value="1200">DLD15WW - Bombillas Economicas - 15W</option>
					                      	<option value="570">DLN07WW - Bombillas Economicas - 7W</option>
					                      	<option value="830">DLN10WW - Bombillas Economicas - 10W</option>
					                      	<option value="1120">DLN13WW - Bombillas Economicas - 13W</option>
					                      	<option value="1240">DLN15WW - Bombillas Economicas - 15W</option>
					                      	<option value="1200">DLG16WW - Bombilla Empotrable - 16W</option>
					                      	<option value="700">DLS07WW - Bombillas Premium - 7W</option>
					                      	<option value="1000">DLS10WW - Bombillas Premium - 10W</option>
					                      	<option value="1400">DLS14WW - Bombillas Premium - 14W</option>
					                      	<option value="500">PNLE08WW - Panel de Luz - 8W</option>
					                      	<option value="800">PNLE12WW - Panel de Luz - 12W</option>
					                      	<option value="1100">PNLE16WW - Panel de Luz - 16W</option>
					                      	<option value="1350">PNLE20WW - Panel de Luz - 20W</option>
                            		</select>
            <br>
            </div>
            <br>

            <b><span id="res_downlights">El resultado del cálculo es:</span></b>
            <br>
            <br>
  
                      <b>Lux</b>: Lux (Iluminancia) es una medida de la intensidad de la luz en cualquier punto. Es igual a 1 Lumen por metro cuadrado.<br>
                      <br>
                      <b>Tipo de habitación</b>: se suministra una pequeña lista de los tipos de habitación típicos y sus niveles recomendados de iluminación..<br><br>

              </form>

              
            <div align="center">
              <img src="/m2/corredor.jpg" width="50%" height="350" id="imgCorredor" style="display:none;" alt="Lumenes en diferentes areas">
              <img src="/m2/vestidores.jpg" width="50%" height="350" id="imgVestidor" style="display:none;" alt="Lumenes en diferentes areas">
              <img src="/m2/escalera.jpg" width="50%" height="350" id="imgEscalera" style="display:none;" alt="Lumenes en diferentes areas">
              <img src="/m2/bano.jpg" width="50%" height="350" id="imgBano" style="display:none;" alt="Lumenes en diferentes areas">
              <img src="/m2/bodega.jpg" width="50%" height="350" id="imgBodega" style="display:none;" alt="Lumenes en diferentes areas">
            </div>

            <button class="btn btn-success" onclick="printHTML()">Generar PDF</button>
              
	     

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

@endpush

