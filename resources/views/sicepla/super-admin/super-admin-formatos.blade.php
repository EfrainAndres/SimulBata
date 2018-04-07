@extends('layouts.dash')


@section('content')

    @component('components.portlet', ['icon' => 'fa fa-users', 'title' => 'Formatos'])

    <iframe src="/mapa" style="height:700px;width:100%;"></iframe>
    
    @endcomponent
@endsection

