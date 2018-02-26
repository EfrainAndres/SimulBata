{{--begin::Base Scripts --}}


<script src="{{ asset('assets/dist/default/assets/vendors/base/vendors.bundle.js') }}" type="text/javascript"></script>

<script src="{{ asset('assets/dist/default/assets/demo/default/base/scripts.bundle.js') }}"
        type="text/javascript"></script>

<script src="{{ asset('assets/dist/default/assets/app/js/dashboard.js')}}" type="text/javascript"></script>

<!--script type="text/javascript" src="https://cdn.datatables.net/r/bs-3.3.5/jqc-1.11.3,dt-1.10.8/datatables.min.js"></script-->
        
<script src="{{asset('assets/dist/default/assets/demo/default/custom/components/datatables/plugins/datatables/datatables.min.js')}}" type="text/javascript"></script>
<script src="{{asset('assets/dist/default/assets/demo/default/custom/components/datatables/plugins/datatables/plugins/bootstrap/datatables.bootstrap.js')}}" type="text/javascript"></script>
<script src="{{asset('assets/dist/default/assets/demo/default/custom/components/datatables/plugins/bootstrap-datepicker/js/bootstrap-datepicker.min.js')}}" type="text/javascript"></script>
<!--
<script src="{{asset('assets/dist/default/assets/demo/default/custom/components/datatables/base/html-table.js')}}" type="text/javascript"></script>
 -->       


{{--end::Base Scripts --}}
{{-- begin::Page Vendors --}}
@stack('plugins')
{{-- end::Page Vendors --}}