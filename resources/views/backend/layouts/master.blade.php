<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html>
<head>
    <meta charset="UTF-8">
    <title>@yield('title')</title>
    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
    <!-- Bootstrap 3.3.2 -->
    <link href="{!! asset('/css/bootstrap.min.css') !!}" rel="stylesheet" type="text/css" />
    <link href="{!! asset('/css/font-awesome.min.css') !!}" rel="stylesheet" type="text/css" />
    <link href="{!! asset("/css/AdminLTE.min.css") !!}" rel="stylesheet" type="text/css" />
    <link href="{!! asset("/css/skin-blue.min.css") !!}" rel="stylesheet" type="text/css" />
    <link href="{!! asset("/css/style.css") !!}" rel="stylesheet" type="text/css" />
    @yield('styles')
</head>
<body class="skin-blue">
<div class="wrapper">

<!-- Left side column. contains the logo and sidebar -->
@include('backend.layouts.sidebar')

<!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                <small>{!! $pageDescription or null !!}</small>
            </h1>
        </section>

        <!-- Main content -->
        <section class="content">
        @yield('content')
        <!-- Your Page Content Here -->

        </section><!-- /.content -->
    </div><!-- /.content-wrapper -->

</div><!-- ./wrapper -->

<!-- REQUIRED JS SCRIPTS -->

<!-- jQuery 2.1.3 -->
<script src="{!! asset ('/js/jquery-3.2.1.min.js') !!}"></script>
<!-- Bootstrap 3.3.2 JS -->
<script src="{!! asset ('/js/bootstrap.min.js') !!}" type="text/javascript"></script>
<script src="{!! asset ('/js/popper.min.js') !!}" type="text/javascript"></script>
@yield('scripts')
</body>
</html>