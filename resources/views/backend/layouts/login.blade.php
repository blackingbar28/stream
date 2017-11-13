<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>@yield('title')</title>
    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
    <!-- Bootstrap 3.3.2 -->
    <link href="{!! asset('/css/bootstrap.min.css') !!}" rel="stylesheet" type="text/css" />
    <link href="{!! asset('/css/font-awesome.min.css') !!}" rel="stylesheet" type="text/css" />
    <link href="{!! asset("/css/ionicons.min.css") !!}" rel="stylesheet" type="text/css" />
    <link href="{!! asset("/css/AdminLTE.min.css") !!}" rel="stylesheet" type="text/css" />
    <link href="{!! asset("/css/skin-blue.min.css") !!}" rel="stylesheet" type="text/css" />
</head>
<body class="hold-transition login-page">
@yield('content')
<!-- jQuery 2.1.3 -->
<script src="{!! asset ('/js/jquery-3.2.1.min.js') !!}"></script>
<!-- Bootstrap 3.3.2 JS -->
<script src="{!! asset ('/js/bootstrap.min.js') !!}" type="text/javascript"></script>
<script src="{!! asset ('/js/popper.min.js') !!}" type="text/javascript"></script>
</body>
</html>