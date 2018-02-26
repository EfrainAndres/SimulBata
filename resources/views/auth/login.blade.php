<!DOCTYPE html>
<!--
Template Name: Metronic - Responsive Admin Dashboard Template build with Twitter Bootstrap 4
Version: 5.0.5
Author: KeenThemes
Website: http://www.keenthemes.com/
Contact: support@keenthemes.com
Follow: www.twitter.com/keenthemes
Dribbble: www.dribbble.com/keenthemes
Like: www.facebook.com/keenthemes
Purchase: http://themeforest.net/item/metronic-responsive-admin-dashboard-template/4021469?ref=keenthemes
Renew Support: http://themeforest.net/item/metronic-responsive-admin-dashboard-template/4021469?ref=keenthemes
License: You must have a valid license purchased only from themeforest(the above link) in order to legally use the theme for your project.
-->
<html lang="en">
<!-- begin::Head -->
<head>
    <meta charset="utf-8"/>
    <title>
        SIAP | Login
    </title>
    <meta name="description" content="Latest updates and statistic charts">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!--begin::Web font -->
    <script src="https://ajax.googleapis.com/ajax/libs/webfont/1.6.16/webfont.js"></script>
    <script>
        WebFont.load({
            google: {"families": ["Poppins:300,400,500,600,700", "Roboto:300,400,500,600,700"]},
            active: function () {
                sessionStorage.fonts = true;
            }
        });
    </script>
    <!--end::Web font -->
    <!--begin::Base Styles -->
    <link href="{{ asset('assets/dist/default/assets/vendors/base/vendors.bundle.css') }}" rel="stylesheet"
          id="style_components" type="text/css"/>
    <link href="{{ asset('assets/dist/default/assets/demo/default/base/style.bundle.css') }}" rel="stylesheet"
          id="style_components" type="text/css"/>
    <!--end::Base Styles -->
    <link rel="shortcut icon" href="../../../assets/demo/default/media/img/logo/favicon.ico"/>
    <link href="{{asset('assets/global/plugins/bootstrap-toastr/toastr.min.css')}}" rel="stylesheet" type="text/css"/>
</head>
<!-- end::Head -->
<!-- end::Body -->
<body class="m--skin- m-header--fixed m-header--fixed-mobile m-aside-left--enabled m-aside-left--skin-dark m-aside-left--offcanvas m-footer--push m-aside--offcanvas-default">
<!-- begin:: Page -->
<div class="m-grid m-grid--hor m-grid--root m-page">
    <div class="m-login m-login--singin  m-login--5" id="m_login"
         style="background-image: url( {{ asset('assets/dist/default/assets/app/media/img//bg/bg-3.jpg') }} );">
        <div class="m-login__wrapper-1 m-portlet-full-height">
            <div class="m-login__wrapper-1-1">
                <div class="m-login__contanier">
                    <div class="m-login__content">
                        <div class="m-login__logo">
                            <a href="#">
                                <img src="{{ asset('assets/dist/default/assets/app/media/img//logos/logo-4.png') }} ">
                            </a>
                        </div>
                        <div class="m-login__title">
                            <h3>
                                SISTEMA INTELIGENTE DE APOYO POLITICO -SIAP
                            </h3>
                        </div>
                        <div class="m-login__desc">
                            Alianza verde
                        </div>
                        <!--<div class="m-login__form-action">
                            <button type="button" id="m_login_signup" class="btn btn-outline-focus m-btn--pill">
                                Obtener Una Cuenta
                            </button>
                        </div>-->
                    </div>
                </div>
                <div class="m-login__border">
                    <div></div>
                </div>
            </div>
        </div>
        <div class="m-login__wrapper-2 m-portlet-full-height">
            <div class="m-login__contanier">
                <div class="m-login__signin">
                    <div class="m-login__head">
                        <h3 class="m-login__title">
                            Iniciar Sesión
                        </h3>
                    </div>
                    {!! Form::open(['role' => 'form', 'id' => 'form-login', 'class' => 'm-login__form m-form', 'novalidate', 'method' => 'POST', 'url' => route('login')]) !!}
                    @if (Auth::guest())
                        <div class="form-group m-form__group">
                            <input id="emailR" type="email" class="form-control m-input"
                                   placeholder="Correo Electrónico"
                                   name="email" autocomplete="off">
                        </div>
                        <div class="form-group m-form__group">
                            <input id="password" type="password" class="form-control m-input m-login__form-input--last"
                                   placeholder="Contraseña" name="password">
                        </div>
                    @endif
                    <div class="row m-login__form-sub">
                        <div class="col m--align-left">
                            <label class="m-checkbox m-checkbox--focus">
                                <input type="checkbox" name="remember">
                                Recuérdame
                                <span></span>
                            </label>
                        </div>
                        <!--<div class="col m--align-right">
                            <a href="javascript:;" id="m_login_forget_password" class="m-link">
                                Contraseña Olvidada ?
                            </a>
                        </div>-->
                    </div>
                    <div class="m-login__form-action">
                        {{ Form::submit('Ingresar', ['id' => 'm_login_signin_submit', 'class' => 'btn btn-focus m-btn m-btn--pill m-btn--custom m-btn--air']) }}
                    </div>
                    {!! Form::close() !!}
                </div>
                <div class="m-login__signup">
                    <div class="m-login__head">
                        <h3 class="m-login__title">
                            Regístrate
                        </h3>
                        <div class="m-login__desc">
                            Ingrese sus datos para crear su cuenta:
                        </div>
                    </div>
                    {!! Form::open(['role' => 'form', 'id' => 'form-register', 'class' => 'm-login__form m-form', 'novalidate', 'method' => 'POST', 'url' => route('register')]) !!}
                    <div class="form-group m-form__group">
                        <input id="name" class="form-control m-input" type="text" placeholder="Nombre Completo"
                               name="name">
                    </div>
                    <div class="form-group m-form__group">
                        <input id="email" class="form-control m-input" type="text" placeholder="Correo Electrónico"
                               name="email" autocomplete="off">
                    </div>
                    <div class="form-group m-form__group">
                        <input class="form-control m-input" type="password" placeholder="Contraseña" name="password">
                    </div>
                    <div class="form-group m-form__group">
                        <input class="form-control m-input m-login__form-input--last" type="password"
                               placeholder="Confirmar Contraseña" name="password_confirmation">
                    </div>
                    <div class="m-login__form-sub">
                        <label class="m-checkbox m-checkbox--focus">
                            <input type="checkbox" name="agree">
                            Estoy de acuerdo con los
                            <a href="#" class="m-link m-link--focus">
                                términos y condiciones.
                            </a>
                            .
                            <span></span>
                        </label>
                        <span class="m-form__help"></span>
                    </div>
                    <div class="m-login__form-action">
                        {{ Form::submit('Regístrate', ['id' => '', 'class' => 'btn btn-focus m-btn m-btn--pill m-btn--custom m-btn--air']) }}
                        <button id="m_login_signup_cancel"
                                class="btn btn-outline-focus m-btn m-btn--pill m-btn--custom">
                            Cancelar
                        </button>
                    </div>
                    {!! Form::close() !!}
                </div>
                <div class="m-login__forget-password">
                    <div class="m-login__head">
                        <h3 class="m-login__title">
                            Contraseña Olvidada ??
                        </h3>
                        <div class="m-login__desc">
                            Ingrese su correo electrónico para restablecer su contraseña:
                        </div>
                    </div>
                    <form class="m-login__form m-form" action="">
                        <div class="form-group m-form__group">
                            <input class="form-control m-input" type="text" placeholder="Email" name="email"
                                   id="m_email" autocomplete="off">
                        </div>
                        <div class="m-login__form-action">
                            <button id="m_login_forget_password_submit"
                                    class="btn btn-focus m-btn m-btn--pill m-btn--custom m-btn--air">
                                Enviar
                            </button>
                            <button id="m_login_forget_password_cancel"
                                    class="btn btn-outline-focus m-btn m-btn--pill m-btn--custom ">
                                Cancelar
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- end:: Page -->
{{--begin::Base Scripts --}}
<script src="{{ asset('assets/global/plugins/jquery.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('assets/dist/default/assets/vendors/base/vendors.bundle.js') }}" type="text/javascript"></script>
<script src="{{ asset('assets/dist/default/assets/demo/default/base/scripts.bundle.js') }}"
        type="text/javascript"></script>
<script src="{{ asset('assets/global/plugins/bootstrap-toastr/toastr.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('assets/main/scripts/ui-toastr.js') }}" type="text/javascript"></script>
@if($errors->has('read'))
    <script type="text/javascript">
        UIToastr.init('error', '{{$errors->first('read')}}', '');
    </script>
@endif
{{--end::Base Scripts --}}
<!--begin::Page Snippets -->
<!--<script src="{{ asset('assets/dist/default/assets/snippets/pages/user/login.js') }}" type="text/javascript"></script>-->
<!--end::Page Snippets -->
</body>
<!-- end::Body -->
</html>