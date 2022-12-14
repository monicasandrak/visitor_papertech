
<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">

    <!-- Title -->
    <title>@yield('title')</title>

    <!-- Favicon-->
    <link rel="icon" href="{{asset('template3')}}/favicon.ico" type="image/x-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,700&subset=latin,cyrillic-ext" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" type="text/css">

    <!-- Bootstrap Core Css -->
    <link href="{{asset('template3')}}/plugins/bootstrap/css/bootstrap.css" rel="stylesheet">

    <!-- Waves Effect Css -->
    <link href="{{asset('template3')}}/plugins/node-waves/waves.css" rel="stylesheet" />

    <!-- Animation Css -->
    <link href="{{asset('template3')}}/plugins/animate-css/animate.css" rel="stylesheet" />
    
    <!-- Bootstrap Select Css -->
    <link href="{{asset('template3')}}/plugins/bootstrap-select/css/bootstrap-select.css" rel="stylesheet" />

    <!-- Dropzone Css -->
    <link href="{{asset('template3')}}/plugins/dropzone/dropzone.css" rel="stylesheet">

    <!-- JQuery DataTable Css -->
    <link href="{{asset('template3')}}/plugins/jquery-datatable/skin/bootstrap/css/dataTables.bootstrap.css" rel="stylesheet">

    <!-- Custom Css -->
    <link href="{{asset('template3')}}/css/style.css" rel="stylesheet">

    <!-- AdminBSB Themes. You can choose a theme from css/themes instead of get all themes -->
    <link href="{{asset('template3')}}/css/themes/all-themes.css" rel="stylesheet" />

    
</head>

<body class="theme-teal">
    <!-- Page Loader -->
    <div class="page-loader-wrapper">
        <div class="loader">
            <div class="preloader">
                <div class="spinner-layer pl-red">
                    <div class="circle-clipper left">
                        <div class="circle"></div>
                    </div>
                    <div class="circle-clipper right">
                        <div class="circle"></div>
                    </div>
                </div>
            </div>
            <p>Please wait...</p>
        </div>
    </div>
    <!-- #END# Page Loader -->
    <!-- Overlay For Sidebars -->
    <div class="overlay"></div>
    <!-- #END# Overlay For Sidebars -->
    <!-- Search Bar -->
    <div class="search-bar">
        <div class="search-icon">
            <i class="material-icons">search</i>
        </div>
        <input type="text" placeholder="START TYPING...">
        <div class="close-search">
            <i class="material-icons">close</i>
        </div>
    </div>
    <!-- #END# Search Bar -->
    <!-- Top Bar -->
    <nav class="navbar">
        <div class="container-fluid">
            <div class="navbar-header">
                <a href="javascript:void(0);" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse" aria-expanded="false"></a>
                <a href="javascript:void(0);" class="bars"></a>
                <a class="navbar-brand">
                @if(Auth::user()->level == 'security')
                SISTEM INFORMASI VISITOR DAN MANAJEMEN DATA PADA SECURITY PT. PAPERTECH INDONESIA       
                @endif 
                @if(Auth::user()->level == 'klinik')
                SISTEM INFORMASI PENCATATAN PASIEN KLINIK PT. PAPERTECH INDONESIA       
                @endif 
                @if(Auth::user()->level == 'admin')
                PT. PAPERTECH INDONESIA       
                @endif 
                </a>
                <!-- SISTEM INFORMASI VISITOR DAN KLINIK PT PAPERTECH INDONESIA</a> -->
                
            </div>
            <div class="collapse navbar-collapse" id="navbar-collapse">
                <ul class="nav navbar-nav navbar-right">
                    <!-- Call Search -->
                    <!-- <li><a href="javascript:void(0);" class="js-search" data-close="true"><i class="material-icons">search</i></a></li> -->
                    <!-- #END# Call Search -->
                    <!-- Notifications -->
                    <!-- <a class="navbar-brand" href="{{asset('template3')}}/index.html">PT.Papertech Indonesia</a> -->
                    <!-- #END# Notifications -->
                    <!-- Tasks -->
                    
                    <!-- #END# Tasks -->
                    
                </ul>
            </div>
        </div>
    </nav>
    <!-- #Top Bar -->
    @include('layout/v_nav2')
    
    <!-- #Content -->
    @yield('content')

    <!-- Jquery Core Js -->
    <script src="{{asset('template3')}}/plugins/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core Js -->
    <script src="{{asset('template3')}}/plugins/bootstrap/js/bootstrap.js"></script>

    <!-- Select Plugin Js -->
    <script src="{{asset('template3')}}/plugins/bootstrap-select/js/bootstrap-select.js"></script>

    <!-- Slimscroll Plugin Js -->
    <script src="{{asset('template3')}}/plugins/jquery-slimscroll/jquery.slimscroll.js"></script>

    <!-- Select Plugin Js -->
    <script src="{{asset('template3')}}/plugins/bootstrap-select/js/bootstrap-select.js"></script>

    <!-- Waves Effect Plugin Js -->
    <script src="{{asset('template3')}}/plugins/node-waves/waves.js"></script>
    <script src="{{asset('template3')}}/plugins/bootstrap-datepicker/css/bootstrap-datepicker.css"></script>
    <script src="{{asset('template3')}}/plugins/bootstrap-datepicker/css/bootstrap-datepicker.min.css"></script>
    <script src="{{asset('template3')}}/plugins/bootstrap-datepicker/js/bootstrap-datepicker.js"></script>
    <script src="{{asset('template3')}}/plugins/bootstrap-datepicker/js/bootstrap-datepicker.min.js"></script>

    <!-- Jquery DataTable Plugin Js -->
    <script src="{{asset('template3')}}/plugins/jquery-datatable/jquery.dataTables.js"></script>
    <script src="{{asset('template3')}}/plugins/jquery-datatable/skin/bootstrap/js/dataTables.bootstrap.js"></script>
    <script src="{{asset('template3')}}/plugins/jquery-datatable/extensions/export/dataTables.buttons.min.js"></script>
    <script src="{{asset('template3')}}/plugins/jquery-datatable/extensions/export/buttons.flash.min.js"></script>
    <script src="{{asset('template3')}}/plugins/jquery-datatable/extensions/export/jszip.min.js"></script>
    <script src="{{asset('template3')}}/plugins/jquery-datatable/extensions/export/pdfmake.min.js"></script>
    <script src="{{asset('template3')}}/plugins/jquery-datatable/extensions/export/vfs_fonts.js"></script>
    <script src="{{asset('template3')}}/plugins/jquery-datatable/extensions/export/buttons.html5.min.js"></script>
    <script src="{{asset('template3')}}/plugins/jquery-datatable/extensions/export/buttons.print.min.js"></script>

    <!-- Custom Js -->
    <script src="{{asset('template3')}}/js/admin.js"></script>
    <script src="{{asset('template3')}}/js/pages/tables/jquery-datatable.js"></script>

    <!-- Demo Js -->
    <script src="{{asset('template3')}}/js/demo.js"></script>
</body>

</html>
