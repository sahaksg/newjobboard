<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title')</title>

    <!-- Scripts -->
    <script src="{{ asset('frontend/js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('frontend/css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('frontend/css/owl.carousel.min.css') }}">
    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet"
          href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->

    <!-- Ionicons -->
    <link href="{{asset('frontend/css/tailwind.min.css')}}" rel="stylesheet">
{{--    <link rel="stylesheet" href="{{asset('frontend/css/all.min.css')}}"/>--}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.0/css/all.min.css"  />
{{--    <link rel="stylesheet" href="{{asset('frontend/css/ionicons.min.css')}}">--}}
    <link rel="stylesheet" href="{{asset('frontend/css/ionicons.min.css')}}"  />
    <!-- Tempusdominus Bootstrap 4 -->
    <link rel="stylesheet" href="{{asset('frontend/css/tempusdominus-bootstrap-4.min.css')}}">
    <!-- iCheck -->
    <link rel="stylesheet" href="{{asset('frontend/css/icheck-bootstrap.min.css')}}">
    <!-- JQVMap -->
    <link rel="stylesheet" href="{{asset('frontend/css/jqvmap.min.css')}}">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{asset('frontend/css/adminlte.min.css')}}">
    <!-- overlayScrollbars -->
    <link rel="stylesheet" href="{{asset('frontend/css/OverlayScrollbars.min.css')}}">
    <!-- Daterange picker -->
    <link rel="stylesheet" href="{{asset('frontend/css/daterangepicker.css')}}">
    <!-- summernote -->
    <link rel="stylesheet" href="{{asset('frontend/css/summernote-bs4.min.css')}}">

    <!-- DataTables -->
    <link rel="stylesheet" href="{{asset('frontend/css/datatables-bs4/css/dataTables.bootstrap4.min.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/css/datatables-responsive/css/responsive.bootstrap4.min.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/css/datatables-buttons/css/buttons.bootstrap4.min.css')}}">
    {{--    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/bs5/dt-1.12.1/datatables.min.css"/>--}}


</head>
<body>
@if(!Auth::user())

    <script>
        location.replace('{{ route('login') }}');
    </script>


@else
    <div class="wrapper">
        @include('layouts.inc.admin-navbar')
        @include('layouts.inc.admin-sidebar')
        <div class="content-wrapper">
        @include('layouts.inc.admin-topmenu')

        <!-- Main content -->
        @yield('content')
        <!-- /.content -->
        </div>
        <!-- /.content-wrapper -->

        <!-- Control Sidebar -->
        <aside class="control-sidebar control-sidebar-dark">
            <!-- Control sidebar content goes here -->
        </aside>
        <!-- /.control-sidebar -->

        @include('layouts.inc.admin-footer')
    </div>
@endif


<!-- jQuery -->
<script src="{{asset('frontend/js/jquery.min.js')}}"></script>
<!-- jQuery UI 1.11.4 -->
<script src="{{asset('frontend/js/jquery-ui.min.js')}}"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
    $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="{{asset('frontend/js/bootstrap.bundle.min.js')}}"></script>
<!-- ChartJS -->
<script src="{{asset('frontend/js/Chart.min.js')}}"></script>
<!-- Sparkline -->
<script src="{{asset('frontend/js/jquery.vmap.min.js')}}"></script>
<!-- JQVMap -->

<!-- jQuery Knob Chart -->
<script src="{{asset('frontend/js/jquery.knob.min.js')}}"></script>
<!-- daterangepicker -->
<script src="{{asset('frontend/js/moment.min.js')}}"></script>
<script src="{{asset('frontend/js/daterangepicker.js')}}"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="{{asset('frontend/js/tempusdominus-bootstrap-4.min.js')}}"></script>
<!-- Summernote -->
<script src="{{asset('frontend/js/summernote-bs4.min.js')}}"></script>
<!-- datatables -->
<script type="text/javascript" src="{{asset('frontend/js/datatables.min.js')}}"></script>
<!-- overlayScrollbars -->
<script src="{{asset('frontend/js/jquery.overlayScrollbars.min.js')}}"></script>
<!-- AdminLTE App -->
<script src="{{asset('frontend/js/adminlte.js')}}"></script>
<!-- DataTables  & Plugins -->
<script src="{{asset('frontend/css/datatables/jquery.dataTables.min.js')}}"></script>
<script src="{{asset('frontend/css/datatables-bs4/js/dataTables.bootstrap4.min.js')}}"></script>
<script src="{{asset('frontend/css/datatables-responsive/js/dataTables.responsive.min.js')}}"></script>
<script src="{{asset('frontend/css/datatables-responsive/js/responsive.bootstrap4.min.js')}}"></script>
<script src="{{asset('frontend/css/datatables-buttons/js/dataTables.buttons.min.js')}}"></script>
<script src="{{asset('frontend/css/datatables-buttons/js/buttons.bootstrap4.min.js')}}"></script>
<script src="{{asset('frontend/css/jszip/jszip.min.js')}}"></script>
<script src="{{asset('frontend/css/pdfmake/pdfmake.min.js')}}"></script>
<script src="{{asset('frontend/css/pdfmake/vfs_fonts.js')}}"></script>
<script src="{{asset('frontend/css/datatables-buttons/js/buttons.html5.min.js')}}"></script>
<script src="{{asset('frontend/css/datatables-buttons/js/buttons.print.min.js')}}"></script>
<script src="{{asset('frontend/css/datatables-buttons/js/buttons.colVis.min.js')}}"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
{{--<script src="{{asset('frontend/js/dashboard.js')}}"></script>--}}
<script>
    $(function () {
        $('#example2').DataTable({
            "paging": false,
            "lengthChange": false,
            "searching": false,
            "ordering": true,
            "info": true,
            "autoWidth": false,
            "responsive": true,
        });
    });
</script>
</body>
</html>
