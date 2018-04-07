@component('components.nav-link', [
    'icon' => 'fa fa-users',
    'title' => 'Usuarios',
    'link' => route('usuarios.index')
])
@endcomponent

@component('components.nav-link', [
    'icon' => 'fa fa-book',
    'title' => 'Formatos',
    'link' => route('formatos.index')
])
@endcomponent
