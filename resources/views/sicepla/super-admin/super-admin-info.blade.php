@extends('layouts.dash')

@section('content')
    <div class="col-md-12">
            @component('components.portlet', ['icon' => 'fa fa-users', 'title' => 'Información General Luminosidad'])
            <div id="app">

            <div class="panel-body">

                    <div class="portlet-body">
                
                        <div class="col-md-4">
                                <div class="mt-widget-3">
                                    <div class="mt-head bg-red">
                                        <div class="mt-head-icon">
                                            <i class="fa fa-briefcase"></i>
                                        </div>
                                        <div class="mt-head-desc"> Informacion Detallada Iluminación </div>
                                        <div class="mt-head-button">
                                        <a href="/slide" target="_blank"><button type="button" class="btn btn-circle btn-outline white btn-sm">Ver</button></a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="mt-widget-3">
                                    <div class="mt-head bg-green">
                                        <div class="mt-head-icon">
                                            <i class="fa fa-briefcase"></i>
                                        </div>
                                        <div class="mt-head-desc"> Galeria de Iluminación</div>
                                        <div class="mt-head-button">
                                        <a href="/images" target="_blank"><button type="button" class="btn btn-circle btn-outline white btn-sm">Ver</button></a>
                                        </div>
                                    </div>

                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="mt-widget-3">
                                    <div class="mt-head bg-red">
                                        <div class="mt-head-icon">
                                            <i class="fa fa-briefcase"></i>
                                        </div>
                                        <div class="mt-head-desc"> Simulaciones </div>
                                        <div class="mt-head-button">
                                        <a href="/simulacion" target="_blank"><button type="button" class="btn btn-circle btn-outline white btn-sm">Ver</button></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                    </div>
                </div>
            </div>                
        @endcomponent  
    </div>
@endsection

