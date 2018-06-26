@component('components.nav-link', [
    'icon' => 'fa fa-info',
    'title' => 'Información General',
    'link' => route('informacion')
])
@endcomponent



@component('components.nav-dropdown', ['icon'=> 'fa fa-book','title'=>'Cálculos & Simulación'])
    @component('components.nav-link', [
    'icon' => 'fa fa-book',
    'link'=>route('lumenIlu'),
    'title' => 'Calculo M² & Luminarias'])
    @endcomponent
    @component('components.nav-link', [
    'icon' => 'fa fa-info',
    'title' => 'Calculo M²',
    'link' => route('lumenmdos')
    ])
    @endcomponent
@endcomponent

@component('components.nav-link', [
    'icon' => 'fa fa-map',
    'title' => 'Mapa',
    'link' => route('mapacom.index')
])
@endcomponent

