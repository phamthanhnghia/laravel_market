<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Market Admintrators</title>

    <!-- Bootstrap Core CSS -->
    <link href="{{ asset('theme_public/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="{{ asset('theme_public/vendor/metisMenu/metisMenu.min.css') }}" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="{{ asset('theme_public/dist/css/sb-admin-2.css') }}" rel="stylesheet">

    <!-- Morris Charts CSS -->
    <link href="{{ asset('theme_public/vendor/morrisjs/morris.css') }}" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="{{ asset('theme_public/vendor/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet" type="text/css">
    
    <!-- Social Buttons CSS -->
    <link href="{{ asset('theme_public/vendor/bootstrap-social/bootstrap-social.css') }}" rel="stylesheet" type="text/css">

    <!-- DataTables CSS -->
    <link href="{{ asset('theme_public/vendor/datatables-plugins/dataTables.bootstrap.css') }}" rel="stylesheet" type="text/css">

    <!-- DataTables Responsive CSS -->
    <link href="{{ asset('theme_public/vendor/datatables-responsive/dataTables.responsive.css') }}" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>
	@yield('container')

	<!-- jQuery -->
    <script src="{{ asset('theme_public/vendor/jquery/jquery.min.js') }}"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="{{ asset('theme_public/vendor/bootstrap/js/bootstrap.min.js') }}"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="{{ asset('theme_public/vendor/metisMenu/metisMenu.min.js') }}"></script>

    <!-- Morris Charts JavaScript -->
    <script src="{{ asset('theme_public/vendor/raphael/raphael.min.js') }}"></script>
    <script src="{{ asset('theme_public/vendor/morrisjs/morris.min.js') }}"></script>
    <script src="{{ asset('theme_public/data/morris-data.js') }}"></script>

    <!-- Custom Theme JavaScript -->
    <script src="{{ asset('theme_public/dist/js/sb-admin-2.js') }}"></script>

    <!-- DataTables JavaScript -->
    <script src="{{ asset('theme_public/vendor/datatables/js/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('theme_public/vendor/datatables-plugins/dataTables.bootstrap.min.js') }}"></script>
    <script src="{{ asset('theme_public/vendor/datatables-responsive/dataTables.responsive.js') }}"></script>

    <!-- Flot Charts JavaScript -->
    <script src="{{ asset('theme_public/vendor/flot/excanvas.min.js') }}"></script>
    <script src="{{ asset('theme_public/vendor/flot/jquery.flot.js') }}"></script>
    <script src="{{ asset('theme_public/vendor/flot/jquery.flot.pie.js') }}"></script>
    <script src="{{ asset('theme_public/vendor/flot/jquery.flot.resize.js') }}"></script>
    <script src="{{ asset('theme_public/vendor/flot/jquery.flot.time.js') }}"></script>
    <script src="{{ asset('theme_public/vendor/flot-tooltip/jquery.flot.tooltip.min.js') }}"></script>
    <script src="{{ asset('theme_public/data/flot-data.js') }}"></script>

        <!-- Page-Level Demo Scripts - Notifications - Use for reference -->
    <script>
    // tooltip demo
    $('.tooltip-demo').tooltip({
        selector: "[data-toggle=tooltip]",
        container: "body"
    })
    // popover demo
    $("[data-toggle=popover]")
        .popover()
    </script>
</body>
</html>