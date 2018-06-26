@extends('layouts.dash')


@section('content')

    <div class="col-md-12">
    @component('components.portlet', ['icon' => 'fa fa-users', 'title' => 'Calculo Lumens'])

        <div id="app">

        <div class="panel-body">

            <div class="portlet-body">

        <div class="col-md-12">
        {{-- BEGIN HTML SAMPLE --}}
        @component('components.portlet', ['icon' => 'fa fa-play', 'title' => 'Calcula la extensión de la luz sobre una superficie plana'])
        <div class="panel-body">
        <div class="portlet-body">
        <div class="row">

            <form method="post" name="spread_calculator">
                <table border="0" width="100%" cellspacing="1" cellpadding="2" class="infoBox">
                  <tr class="infoBoxContents">
                    <td>
                      <table width="100%" cellpadding="5px">
                        <tr>
                          <td valign="top" class="main">
                          <div align="center">
                            <table cellspacing="0px" width="350px">
                              <tr>
                                <td class="main CalcField" width="150px">Haz (vista) Ángulo:<br><br></td><td class="main">&nbsp;<input class="textinput" type="text" name="spread_angle" size="12"> grados<br><br></td>
                              </tr>
                              <tr>
                                <td class="main CalcField">Distancia:<br><br></td><td class="main">&nbsp;<input class="textinput" type="text" name="spread_distance" size="12"> metros<br><br></td>
                              </tr>
                              <tr>
                                <td class="main" colspan="2"><img src="images/pixel_trans.gif" width="80px" height="1px"><input onClick="calculate_spread()" value=" Calcular " type="button" class="btn btn-success" style="width:100px"><br><br></td>
                              </tr>
                              <tr>
                                <td class="main" width="150px" height="40px" colspan="2"><b><span id="res_spread">Ingresar los valores y click en 'Calcular'.</span></b></td>
                              </tr>
                            </table>
                            </div>
                      <br>
                      <b>Spread (m)</b>: El esparcimiento es el ancho de la luz cuando golpea la superficie plana.<br>
                      <b>Área de cobertura (m<sup>2</sup>)</b>: El área de cobertura es el tamaño del área circular que la luz ilumina en la superficie plana.
                          </td>
                          <td>
                            <img src="/m2/light_coverage_diagram.jpg" />
                          </td>
                        </tr>
                      </table>
                    </td>
                  </tr>
                </table>
                <br>
              </form>
              
	     

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
    <script src="/js/Calculos.js" type="text/javascript">
    </script>

    <script src="/js/image.js" type="text/javascript">
    </script>

@endpush

