@extends('layouts.dash')


@section('content')


        <div class="col-md-12">
        {{-- BEGIN HTML SAMPLE --}}
        @component('components.portlet', ['icon' => 'fa fa-play', 'title' => 'Conversión entre Lumens y Lux'])
        <div class="panel-body">
        <div class="portlet-body">
        <div class="row">

            <form method="post" name="lumens_lux_calculator">
                <table border="0" width="100%" cellspacing="1" cellpadding="2" class="infoBox">
                  <tr class="infoBoxContents">
                    <td>
                      <table width="100%" cellpadding="5px">
                        <tr>
                          <td class="main">
                          <div align="center">
                          <table cellspacing="0px">
                              <tr>
                                <td class="main CalcField" width="130px">Haz (vista) Ángulo:</td><td class="main">&nbsp;<input class="textinput" type="text" name="angle" size="12"> degrees<br><br></td>
                              </tr>
                              <tr>
                                <td class="main CalcField">Distancia:</td><td class="main">&nbsp;<input class="textinput" type="text" name="distance" size="12"> meters<br></td>
                              </tr>
                              <tr>
                                <td class="main CalcField">Lumens:</td><td class="main">&nbsp;<input class="textinput" type="text" name="lumens" size="12"> Lumens (Lm)<br></td>
                                <td valign="middle">&nbsp;<input onClick="calculate_lux()" value="Calcular Lux" type="button" class="btn btn-success" style="width:125px"><br><br></td>
                              </tr>
                              <tr>
                                <td class="main CalcField" width="150px">Lux:</td><td class="main">&nbsp;<input class="textinput" type="text" name="lux" size="12"> lux<br></td>
                                <td valign="middle">&nbsp;<input onClick="calculate_lumens()" value="Calcular Lumen" type="button" class="btn btn-success" style="width:125px"><br></td>
                              </tr>
                            </table>
                            </div>
                      <br>
                      <b>Iluminancia (lux)</b>: La iluminancia es una medida de la intensidad de la luz en cualquier punto. La intensidad de la luz cae exponencialmente a medida que se aleja de la fuente (distancia).<br><br>
                      <b>Flujo luminoso (Lm)</b>: el flujo luminoso es una medida del rendimiento de luz total de una fuente. Por ejemplo, una fuente de luz de 1 candela producirá 1 lumen por metro cuadrado a la distancia de 1 metro. <br><br>
                      <b>Ángulo de haz</b>:El ángulo de haz es el ángulo de radiación de una fuente de luz. Por ejemplo, un ángulo del haz de 30 grados significa que la luz tiene forma de cono y sus bordes forman un ángulo de 15 grados con el eje central. Un cambio en el ángulo del haz afecta la intensidad luminosa (lux) de una fuente de luz, pero no el flujo luminoso (lúmenes).
                          </td>
                        </tr>
                      </table>
                    </td>
                  </tr>
                </table>
              </form>

              <br>

              <div><button class="btn btn-success" onclick="printHTML()">Generar PDF</button></div>
              
              
	     

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

