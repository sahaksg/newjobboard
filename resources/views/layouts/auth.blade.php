
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>AdminLTE 3 | Log in</title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{asset('frontend/css/all.min.css')}}">
    <!-- icheck bootstrap -->
    <link rel="stylesheet" href="{{asset('frontend/css/icheck-bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/css/bootstrap.css')}}">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{asset('frontend/css/adminlte.min.css')}}">
</head>
<body class="hold-transition login-page">
@yield('content')

<!-- /.login-box -->

<!-- jQuery -->
<script src="{{asset('frontend/js/jquery.min.js')}}"></script>
<!-- Bootstrap 4 -->
<script src="{{asset('frontend/js/bootstrap.bundle.min.js')}}"></script>
<!-- AdminLTE App -->
<script src="{{asset('frontend/js/adminlte.js')}}"></script>
</body>
</html>
