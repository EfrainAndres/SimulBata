@extends('layouts.dash')


@section('content')

    @component('components.portlet', ['icon' => 'fa fa-users', 'title' => 'Información General Luminosidad'])
    <div id="app">

        <div class="panel-body">

            <div class="portlet-body">
  <div class="col-md-12">
          {{-- BEGIN HTML SAMPLE --}}
      @component('components.portlet', ['icon' => 'fa-square', 'title' => 'Simulador DiaLux para Luminess-Soft'])
  <div class="panel-body">
    <div class="portlet-body">
        <div class="row">
        <iframe width="1000" height="500" src="https://www.youtube.com/embed/LfH3L3ZqoqI" frameborder="0" allowfullscreen></iframe>

      </div>
    </div>
  </div>
</div>
@endcomponent

<div class="col-md-12">
        {{-- BEGIN HTML SAMPLE --}}
    @component('components.portlet', ['icon' => 'fa-square', 'title' => 'Simulacion de un salon en DiaLux'])
<div class="panel-body">
  <div class="portlet-body">
      <div class="row">
      <iframe width="1000" height="500" src="https://www.youtube.com/embed/XVfAj7yKLLA" frameborder="0" allowfullscreen></iframe>

    </div>
  </div>
</div>
</div>
@endcomponent

<div class="col-md-12">
        {{-- BEGIN HTML SAMPLE --}}
    @component('components.portlet', ['icon' => 'fa-square', 'title' => 'Simulacion de una oficina'])
<div class="panel-body">
  <div class="portlet-body">
      <div class="row">
      <iframe width="1000" height="500" src="https://www.youtube.com/embed/26dFFzVE458" frameborder="0" allowfullscreen></iframe>

    </div>
  </div>
</div>
</div>
@endcomponent
</div>
  </div>
</div>

@endcomponent

@endsection

