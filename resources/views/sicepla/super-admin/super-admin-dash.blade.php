@component('components.nav-link', [
    'icon' => 'fa fa-map',
    'title' => 'Mapa',
    'link' => route('mapacom.index')
])
@endcomponent

@component('components.nav-link', [
    'icon' => 'fa fa-info',
    'title' => 'Información General',
    'link' => route('informacion')
])
@endcomponent
