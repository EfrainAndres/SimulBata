@component('components.nav-link', [
    'icon' => 'fa fa-info',
    'title' => 'Información General',
    'link' => route('informacion')
])
@endcomponent


@component('components.nav-dropdown', ['icon'=> 'fa fa-play','title'=>'Cálculos & Simulación'])
    @component('components.nav-link', [
    'icon' => 'fa fa-book',
    'title' => 'Cálculo M²',
    'link' => route('lumenmdos')
    ])
    @endcomponent
    @component('components.nav-link', [
    'icon' => 'fa fa-book',
    'link'=>route('lumenIlu'),
    'title' => 'Cálculo M² & Luminarias'])
    @endcomponent
    @component('components.nav-link', [
    'icon' => 'fa fa-book',
    'title' => 'Cálculo Lumen - Lux',
    'link' => route('lumenLux')
    ])
    @endcomponent
    @component('components.nav-link', [
    'icon' => 'fa fa-book',
    'title' => 'Cálculo Dispersion de Luz',
    'link' => route('lumenDispersion')
    ])
    @endcomponent
    @component('components.nav-link', [
    'icon' => 'fa fa-graph',
    'link'=>route('lumenGrafica'),
    'title' => 'Graficas'])
    @endcomponent
@endcomponent

@component('components.nav-link', [
    'icon' => 'fa fa-map',
    'title' => 'Mapa',
    'link' => route('mapacom.index')
])
@endcomponent

