@extends('material.layouts.dashboard')

{{--
  Dash del usuario, los links cambian segun el rol del usuario
--}}
@php
  $rol = auth()->user()->rol->nombre;
@endphp

@section('links')
  

    @includeWhen($rol == 'Super Administrador', 'sicepla.super-admin.super-admin-dash')

   

  
@endsection

@push('styles')
    <link rel="stylesheet" href="/assets/global/plugins/bootstrap-toastr/toastr.min.css">
 @endpush

@push('plugins')
    <script src="/assets/global/plugins/bootstrap-toastr/toastr.min.js"></script>
    <script>
        Object.assign(toastr.options, {
            positionClass: "toast-bottom-right"
        })
    </script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/1.0.2/Chart.min.js"></script>
@endpush
