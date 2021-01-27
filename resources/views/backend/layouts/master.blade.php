<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title>@yield('title') | Dashboard</title>
    <meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" name="viewport" />
    <meta content="" name="description" />
    <meta content="" name="author" />
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
    <link href="{{asset('backend')}}/assets/css/default/app.min.css" rel="stylesheet" />
    <link href="{{asset('backend')}}/assets/plugins/bootstrap-datepicker/dist/css/bootstrap-datepicker.css" rel="stylesheet" />
    <link href="{{asset('backend')}}/assets/plugins/gritter/css/jquery.gritter.css" rel="stylesheet" />
    <link href="{{asset('backend')}}/assets/fontawesome/css/font-awesome.min.css" rel="stylesheet" />

    <link href="{{asset('backend')}}/assets/plugins/datatables.net-bs4/css/dataTables.bootstrap4.min.css" rel="stylesheet" />
    <link href="{{asset('backend')}}/assets/plugins/datatables.net-responsive-bs4/css/responsive.bootstrap4.min.css" rel="stylesheet" />





    <style>
        .content {
            padding: 20px;
        }
    </style>

</head>

<body>

    <div id="page-loader" class="fade show">
        <span class="spinner"></span>
    </div>

    <div id="page-container" class="fade page-sidebar-fixed page-header-fixed">
        <!--header area-->
        @include('backend.layouts.header')
        <!--sidebar area-->
        @include('backend.layouts.sidebar')
        <!--main content area-->
        @yield('content')

        <a href="javascript:;" class="btn btn-icon btn-circle btn-success btn-scroll-to-top fade" data-click="scroll-top"><i class="fa fa-angle-up"></i></a>

    </div>



    <script src="{{asset('backend')}}/assets/js/app.min.js" type="text/javascript"></script>
    <script src="{{asset('backend')}}/assets/js/theme/default.min.js" type="text/javascript"></script>
    <script src="{{asset('backend')}}/assets/plugins/flot/source/jquery.canvaswrapper.js" type="text/javascript"></script>
    <script src="{{asset('backend')}}/assets/plugins/flot/source/jquery.colorhelpers.js" type="text/javascript"></script>
    <script src="{{asset('backend')}}/assets/plugins/flot/source/jquery.flot.js" type="text/javascript"></script>
    <script src="{{asset('backend')}}/assets/plugins/flot/source/jquery.flot.saturated.js" type="text/javascript"></script>
    <script src="{{asset('backend')}}/assets/plugins/flot/source/jquery.flot.browser.js" type="text/javascript"></script>
    <script src="{{asset('backend')}}/assets/plugins/flot/source/jquery.flot.drawSeries.js" type="text/javascript"></script>
    <script src="{{asset('backend')}}/assets/plugins/flot/source/jquery.flot.uiConstants.js" type="text/javascript"></script>
    <script src="{{asset('backend')}}/assets/plugins/flot/source/jquery.flot.time.js" type="text/javascript"></script>
    <script src="{{asset('backend')}}/assets/plugins/flot/source/jquery.flot.resize.js" type="text/javascript"></script>
    <script src="{{asset('backend')}}/assets/plugins/flot/source/jquery.flot.pie.js" type="text/javascript"></script>
    <script src="{{asset('backend')}}/assets/plugins/flot/source/jquery.flot.crosshair.js" type="text/javascript"></script>
    <script src="{{asset('backend')}}/assets/plugins/flot/source/jquery.flot.categories.js" type="text/javascript"></script>
    <script src="{{asset('backend')}}/assets/plugins/flot/source/jquery.flot.navigate.js" type="text/javascript"></script>
    <script src="{{asset('backend')}}/assets/plugins/flot/source/jquery.flot.touchNavigate.js" type="text/javascript"></script>
    <script src="{{asset('backend')}}/assets/plugins/flot/source/jquery.flot.hover.js" type="text/javascript"></script>
    <script src="{{asset('backend')}}/assets/plugins/flot/source/jquery.flot.touch.js" type="text/javascript"></script>
    <script src="{{asset('backend')}}/assets/plugins/flot/source/jquery.flot.selection.js" type="text/javascript"></script>
    <script src="{{asset('backend')}}/assets/plugins/flot/source/jquery.flot.symbol.js" type="text/javascript"></script>
    <script src="{{asset('backend')}}/assets/plugins/flot/source/jquery.flot.legend.js" type="text/javascript"></script>
    <script src="{{asset('backend')}}/assets/plugins/jquery-sparkline/jquery.sparkline.min.js" type="text/javascript"></script>
    <script src="{{asset('backend')}}/assets/plugins/jvectormap-next/jquery-jvectormap.min.js" type="text/javascript"></script>
    <script src="{{asset('backend')}}/assets/plugins/jvectormap-next/jquery-jvectormap-world-mill.js" type="text/javascript"></script>
    <script src="{{asset('backend')}}/assets/plugins/bootstrap-datepicker/dist/js/bootstrap-datepicker.js" type="text/javascript"></script>
    <script src="{{asset('backend')}}/assets/js/demo/dashboard.js" type="text/javascript"></script>
    <script src="{{asset('public/backend/sweetalert/sweetalert2@9.js')}}"></script>


    <script src="{{asset('backend')}}/assets/plugins/datatables.net/js/jquery.dataTables.min.js" type="text/javascript"></script>
    <script src="{{asset('backend')}}/assets/plugins/datatables.net-bs4/js/dataTables.bootstrap4.min.js" type="text/javascript"></script>
    <script src="{{asset('backend')}}/plugins/datatables.net-responsive/js/dataTables.responsive.min.js" type="text/javascript"></script>
    <script src="{{asset('backend')}}/assets/plugins/datatables.net-responsive-bs4/js/responsive.bootstrap4.min.js" type="text/javascript"></script>
    <script src="{{asset('backend')}}/assets/js/demo/table-manage-default.demo.js" type="text/javascript"></script>


</body>

</html>