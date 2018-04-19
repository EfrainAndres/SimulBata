@extends('layouts.dash')


@section('content')

    @component('components.portlet', ['icon' => 'fa fa-users', 'title' => 'Información General Luminosidad'])

    <div id="app">

        <div class="panel-body">

                <div class="portlet-body">
    
                <iframe src="//www.slideshare.net/slideshow/embed_code/key/tjx4Qx0caf3DmO?startSlide=2" width="100%" height="485" frameborder="0" marginwidth="0" marginheight="0" scrolling="no" style="border:1px solid #CCC; border-width:1px; margin-bottom:5px; max-width: 100%;" allowfullscreen> </iframe> <div style="margin-bottom:5px"> </div>

                  </div>
                </div>

        </div>
    
    @endcomponent
@endsection

