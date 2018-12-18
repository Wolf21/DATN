<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Mobile Shop : Hệ thống bán hàng trực tuyến</title>
@section('title')
    @yield('title')
@show
<!-- Bootstrap core CSS -->
    <link href="{!!url('bootstrap/css/bootstrap.min.css')!!}" rel="stylesheet">
    <!-- Fonts -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css"
          integrity="sha384-XdYbMnZ/QjLh6iI4ogqCTaIjrFk87ip+ekIjefZch0Y+PvJ8CDYtEs1ipDmPorQ+" crossorigin="anonymous">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato:100,300,400,700">

    <!-- Styles -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.6/css/bootstrap.min.css"
          integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

    <style>
        body {
            font-family: 'Lato';
        }

        .fa-btn {
            margin-right: 6px;
        }
    </style>
    <!-- Custom styles for this template -->
    <link href="{!!url('/front-end/front-end-style.css')!!}" rel="stylesheet">
    <link rel='stylesheet' id='camera-css' href="{!!url('/css/camera.css')!!}" type='text/css' media='all'>
    <link rel='stylesheet' id='camera-css' href="{!!url('/css/cam-1.css')!!}" type='text/css' media='all'>

    <link href="{!!asset('/css/blueimp-gallery.css')!!}" rel="stylesheet">
    @section ('css')
    @show
</head>
<body>
@include('modules.menu')
@section ('slide')
@show
<div class="container">
    <div class="row">
        @yield('content')
        @include('modules.gioithieu')
    </div>
</div>
@include('layouts.footer')
</body>
<!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
<!--[if lt IE 9]>
<script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
<script type='text/javascript' src="{!!url('/js/ads.js')!!}"></script>

<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
<!--[if lt IE 9]>
<script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<!-- Bootstrap core JavaScript
    ================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>')</script>
<script src="{!!url('/bootstrap/js/bootstrap.min.js')!!}"></script>
<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
{{-- <script src="{!!url('public/bootstrap/js/ie10-viewport-bug-workaround.js')!!}"></script> --}}
<!-- menu js -->
<script src="{!!url('/js/menu.js')!!}"></script>
<script type='text/javascript' src='{!!url('/js/jquery.easing.1.3.js')!!}'></script>
<script type='text/javascript' src='{!!url('/js/camera.min.js')!!}'></script>
<script type='text/javascript' src='{!!url('/js/myscript.js')!!}'></script>
<script type='text/javascript' src='{!!url('/js/active-menu.js')!!}'></script>
<script src="{!!url('/js/bootstrap-image-gallery.min.js')!!}"></script>
<script src="{!!url('/js/jquery.blueimp-gallery.min.js')!!}"></script>

{{-- validate --}}
<script src="{!!url('/js/validate/jquery.validate.min.js')!!}"></script>
<script src="{!!url('/js/validate/jquery.validate.js')!!}"></script>
<![endif]-->
@section('script')
@show
</html>
