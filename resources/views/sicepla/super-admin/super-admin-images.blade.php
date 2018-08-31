@extends('layouts.dash')


@section('content')

    @component('components.portlet', ['icon' => 'fa fa-users', 'title' => 'Información General Luminosidad'])

    <div id="app">

        <div class="panel-body">

                <div class="portlet-body">
    <div class="col-md-12">
    <img src="/fotos/lumenes.jpg" width="100%" height="500" alt="Lumenes en diferentes areas">
    <div>

    <div class="col-md-12">
    @component('components.panel', ['icon' => 'icon-layers', 'title' => 'Nota!!!','contenido'=>'El numero de lúmenes, que se utiliza para iluminar un salon de clases equivale a 400 - 500 Lm, teniendo en cuenta la superfice total del salon, esta puede variar','class'=>'panel-success'])
            @endcomponent
    <div class="col-md-6">
    <img src="/fotos/3.jpg" width="500" height="500" alt="Lumenes en diferentes areas">
    </div>
    <div class="col-md-6">
    <img src="/fotos/2.png" width="500" height="500" alt="Lumenes en diferentes areas">
    </div>
    <div>


    <div class="col-md-12">
    <br>
    <br>
    @component('components.panel', ['icon' => 'icon-layers', 'title' => 'Nota!!!','contenido'=>'El numero de lúmenes, que se utiliza para iluminar un salon de clases equivale a 300 - 350 Lm, teniendo en cuenta la superfice total del pásillo, esta puede variar','class'=>'panel-success'])
            @endcomponent
    <div class="col-md-6">
    <img src="/fotos/9.jpeg" width="500" height="500" alt="Lumenes en diferentes areas">
    </div>
    <div class="col-md-6">
    <img src="/fotos/8.jpeg" width="500" height="500" alt="Lumenes en diferentes areas">
    </div>
    <div>


                  </div>
                </div>

        </div>
    
    @endcomponent
@endsection



