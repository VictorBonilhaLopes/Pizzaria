<!DOCTYPE html>
<html dir="ltr" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="keywords"
        content="wrappixel, admin dashboard, html css dashboard, web dashboard, bootstrap 5 admin, bootstrap 5, css3 dashboard, bootstrap 5 dashboard, Matrix lite admin bootstrap 5 dashboard, frontend, responsive bootstrap 5 admin template, Matrix admin lite design, Matrix admin lite dashboard bootstrap 5 dashboard template">
    <meta name="description"
        content="Matrix Admin Lite Free Version is powerful and clean admin dashboard template, inpired from Bootstrap Framework">
    <meta name="robots" content="noindex,nofollow">
    <title>AdminArea</title>
    <link rel="icon" type="image/png" sizes="16x16" href="admin/assets/images/favicon.png">
    <link href="{{url("admin/assets/libs/flot/css/float-chart.css")}}" rel="stylesheet">
    <link href="{{url("admin/dist/css/style.min.css")}}" rel="stylesheet">
</head>

<body>
    <div class="preloader">
        <div class="lds-ripple">
            <div class="lds-pos"></div>
            <div class="lds-pos"></div>
        </div>
    </div>
    <div id="main-wrapper" data-layout="vertical" data-navbarbg="skin5" data-sidebartype="full"
        data-sidebar-position="absolute" data-header-position="absolute" data-boxed-layout="full">
        <header class="topbar" data-navbarbg="skin5">
            <nav class="navbar top-navbar navbar-expand-md navbar-dark">
                <div class="navbar-header" data-logobg="skin5">
                    <a class="navbar-brand" href="/">
                        <b class="logo-icon ps-2">
                            <img src="{{url("admin/assets/images/logo.png")}}" alt="homepage" class="light-logo" />
                        </b>
                        </span>
                    </a>
                    <a class="nav-toggler waves-effect waves-light d-block d-md-none" href="javascript:void(0)"><i
                            class="ti-menu ti-close"></i></a>
                </div>
                <div class="navbar-collapse collapse" id="navbarSupportedContent" data-navbarbg="skin5">
                    <ul class="navbar-nav float-start me-auto">
                        <li class="nav-item dropdown">
                        
                        </li>   
                    </ul>
                    <ul class="navbar-nav float-end">
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle text-muted waves-effect waves-dark pro-pic" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                <img src="{{url("admin/assets/images/users/1.jpg")}}" alt="user" class="rounded-circle" width="31">
                            </a>
                            <ul class="dropdown-menu dropdown-menu-end user-dd animated" aria-labelledby="navbarDropdown">
                                <form method="POST" action="{{ route('logout') }}">
                                    @csrf
                                    <button class="dropdown-item" href="{{ route('logout') }}">
                                        <i class="fa fa-power-off me-1 ms-1"></i> Logout</button>
                                </form>    
                            </ul>
                        </li>
                    </ul>
                </div>
            </nav>
        </header>
        <aside class="left-sidebar" data-sidebarbg="skin5">
            <!-- Sidebar scroll-->
            <div class="scroll-sidebar">
                <!-- Sidebar navigation-->
                <nav class="sidebar-nav">
                    <ul id="sidebarnav" class="pt-4">
                        <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link"
                                href="/dashboard" aria-expanded="false"><i class="mdi mdi-border-inside"></i><span
                                    class="hide-menu">Pizzas</span></a>
                        </li>
                        <li class="sidebar-item"> <a class="sidebar-link has-arrow waves-effect waves-dark"
                                href="javascript:void(0)" aria-expanded="false"><i class="mdi mdi-receipt"></i><span
                                    class="hide-menu">Pedidos</span></a>
                            <ul aria-expanded="false" class="collapse  first-level">
                                <li class="sidebar-item"><a href="/staff/pedidos" class="sidebar-link"><i
                                            class="mdi mdi-note-outline"></i><span class="hide-menu"> Pedidos nao Enviados
                                        </span></a></li>
                                <li class="sidebar-item"><a href="/staff/pedidosEnviados" class="sidebar-link"><i
                                            class="mdi mdi-note-plus"></i><span class="hide-menu"> Pedidos Enviados
                                        </span></a></li>
                            </ul>
                        </li>          
                    </ul>
                    
                </nav>
                <!-- End Sidebar navigation -->
            </div>
            <!-- End Sidebar scroll-->
        </aside>
        <div class="page-wrapper">

        @yield('content')

    <script src="{{url("admin/assets/libs/jquery/dist/jquery.min.js")}}"></script>
    <!-- Bootstrap tether Core JavaScript -->
    <script src="{{url("admin/assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js")}}"></script>
    <script src="{{url("admin/assets/libs/perfect-scrollbar/dist/perfect-scrollbar.jquery.min.js")}}"></script>
    <script src="{{url("admin/assets/extra-libs/sparkline/sparkline.js")}}"></script>
    <!--Wave Effects -->
    <script src="{{url("admin/dist/js/waves.js")}}"></script>
    <!--Menu sidebar -->
    <script src="{{url("admin/dist/js/sidebarmenu.js")}}"></script>
    <!--Custom JavaScript -->
    <script src="{{url("admin/dist/js/custom.min.js")}}"></script>
    <script src="{{url("admin/assets/libs/flot/excanvas.js")}}"></script>
    <script src="{{url("admin/assets/libs/flot/jquery.flot.js")}}"></script>
    <script src="{{url("admin/assets/libs/flot/jquery.flot.pie.js")}}"></script>
    <script src="{{url("admin/assets/libs/flot/jquery.flot.time.js")}}"></script>
    <script src="{{url("admin/assets/libs/flot/jquery.flot.stack.js")}}"></script>
    <script src="{{url("admin/assets/libs/flot/jquery.flot.crosshair.js")}}"></script>
    <script src="{{url("admin/assets/libs/flot.tooltip/js/jquery.flot.tooltip.min.js")}}"></script>
    <script src="{{url("admin/dist/js/pages/chart/chart-page-init.js")}}"></script>

</body>

</html>