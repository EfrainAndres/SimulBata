@extends('layouts.dash')


@section('content')

    @component('components.portlet', ['icon' => 'fa fa-users', 'title' => 'Información General Luminosidad'])

    <div id="app">

        <div class="panel-body">

                <div class="portlet-body">
    
                <iframe src="https://docs.google.com/presentation/d/e/2PACX-1vQ_WIsntqG1v85LK-Um_Xxod6lD8SKlMTxFQ2Pc-awozgZ9FLgjLO2-X4SgVD8r6sSipe63-AUwgE6c/embed?start=false&loop=true&delayms=60000" frameborder="0" width="100%" height="600" allowfullscreen="true" mozallowfullscreen="true" webkitallowfullscreen="true"></iframe>
                  </div>
                </div>

        </div>
    
    @endcomponent
@endsection

