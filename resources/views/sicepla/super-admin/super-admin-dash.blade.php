@component('components.nav-link', [
    'icon' => 'fa fa-users',
    'title' => 'Usuarios',
    'link' => route('usuarios.index')
])
@endcomponent

@component('components.nav-link', [
    'icon' => 'fa fa-map',
    'title' => 'Mapa',
    'link' => route('mapacom.index')
])
@endcomponent
