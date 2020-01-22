<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>@yield('title','SF Admin 2 - Dashboardv')</title>

    <!-- Custom fonts for this template-->
    <link rel="stylesheet" href="{!! asset('vendor/fontawesome-free/css/all.min.css') !!}" type="text/css">
    <link rel="stylesheet" href="{!! asset('css/font-google.css') !!}" rel="stylesheet" type="text/css">

    <!-- Custom styles for this template-->
    <link rel="stylesheet" href="{!! asset('css/sb-admin-2.min.css') !!}" rel="stylesheet">
    <!-- Custom styles for this page -->
    <link rel="stylesheet" href="{!! asset('vendor/datatables/dataTables.bootstrap4.min.css') !!}" rel="stylesheet">


</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.php">
                <div class="sidebar-brand-icon rotate-n-15">
                    <i class="fas fa-laugh-wink"></i>
                </div>
                <div class="sidebar-brand-text mx-3">GASF <sup>V0.1</sup></div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item active">
                <a class="nav-link" href="index.php">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Panel de Control</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">


            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                Addons
            </div>

            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages1" aria-expanded="true" aria-controls="collapsePages">
                    <i class="fas fa-fw fa-folder"></i>
                    <span>Clientes</span>
                </a>
                <div id="collapsePages1" class="collapse" aria-labelledby="headingPages1" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Opciones Clientes</h6>
                        <a class="collapse-item" href="{{ route('cliente.index') }}">Listado</a>
                        <a class="collapse-item" href="{{ route('cliente.create') }}">Crear</a>
                    </div>
                </div>
            </li>
            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#personal" aria-expanded="true" aria-controls="collapsePages">
                    <i class="fas fa-fw fa-folder"></i>
                    <span>Personal Almacen</span>
                </a>
                <div id="personal" class="collapse" aria-labelledby="personal" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Opciones Personal</h6>
                        <a class="collapse-item" href="{{ route('personalalmacen.index') }}">Listado</a>
                        <a class="collapse-item" href="{{ route('personalalmacen.create') }}">Crear</a>
                    </div>
                </div>
            </li>
            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages2" aria-expanded="true" aria-controls="collapsePages">
                    <i class="fas fa-fw fa-folder"></i>
                    <span>Vendedor</span>
                </a>
                <div id="collapsePages2" class="collapse" aria-labelledby="headingPages2" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Opciones Vendedor</h6>
                        <a class="collapse-item" href="{{ route('vendedor.index') }}">Listado</a>
                        <a class="collapse-item" href="{{ route('vendedor.create') }}">Crear</a>
                    </div>
                </div>
            </li>
            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages3" aria-expanded="true" aria-controls="collapsePages">
                    <i class="fas fa-fw fa-folder"></i>
                    <span>Transporte</span>
                </a>
                <div id="collapsePages3" class="collapse" aria-labelledby="headingPages3" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Opciones Transporte</h6>
                        <a class="collapse-item" href="{{ route('transporte.index') }}">Listado</a>
                        <a class="collapse-item" href="{{ route('transporte.create') }}">Crear</a>
                    </div>
                </div>
            </li>
            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#destino" aria-expanded="true" aria-controls="collapsePages">
                    <i class="fas fa-fw fa-folder"></i>
                    <span>Destino</span>
                </a>
                <div id="destino" class="collapse" aria-labelledby="destino" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Opciones Destino</h6>
                        <a class="collapse-item" href="{{ route('destino.index') }}">Listado</a>
                        <a class="collapse-item" href="{{ route('destino.create') }}">Crear</a>
                    </div>
                </div>
            </li>
            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#pedido" aria-expanded="true" aria-controls="collapsePages">
                    <i class="fas fa-fw fa-folder"></i>
                    <span>Pedido</span>
                </a>
                <div id="pedido" class="collapse" aria-labelledby="pedido" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Opciones Pedido</h6>
                        <a class="collapse-item" href="{{ route('pedido.index') }}">Listado</a>
                        <a class="collapse-item" href="{{ route('destino.create') }}">Crear</a>
                    </div>
                </div>
            </li>
            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#envios" aria-expanded="true" aria-controls="collapsePages">
                    <i class="fas fa-fw fa-folder"></i>
                    <span>Envios</span>
                </a>
                <div id="envios" class="collapse" aria-labelledby="envios" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Opciones Envios</h6>
                        <a class="collapse-item" href="{{ route('envio.index') }}">Listado</a>
                        <a class="collapse-item" href="{{ route('envio.create') }}">Crear</a>
                    </div>
                </div>
            </li>

            <!-- Nav Item - ControlPedidos Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages4" aria-expanded="true" aria-controls="collapsePages">
                    <i class="fas fa-fw fa-folder"></i>
                    <span>Control de Pedidos</span>
                </a>
                <div id="collapsePages4" class="collapse" aria-labelledby="headingPages4" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Login Screens:</h6>
                        <a class="collapse-item" href="subirArchivo.php">Subir Archivo</a>
                        <a class="collapse-item" href="tables.php">Resumen Notas</a>
                        <a class="collapse-item" href="registroPikingBuscador.php">Registro Piking</a>
                        <a class="collapse-item" href="registroDespachoBuscador.php">Registro Despacho</a>
                        <a class="collapse-item" href="registroNulo.php">Registro Nulo</a>
                        <a class="collapse-item" href="reporteDespacho.php">Reporte</a>
                        <a class="collapse-item" href="reporteDespachoDetalle.php">Reporte Detallado</a>
                        <a class="collapse-item" href="registroDestino.php">Registro Envio</a>
                        <a class="collapse-item" href="register.html">Register</a>
                        <a class="collapse-item" href="forgot-password.html">Forgot Password</a>

                        <div class="collapse-divider"></div>
                        <h6 class="collapse-header">Other Pages:</h6>
                        <a class="collapse-item" href="404.html">404 Page</a>
                        <a class="collapse-item" href="blank.html">Blank Page</a>
                    </div>
                </div>
            </li>

            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages5" aria-expanded="true" aria-controls="collapsePages">
                    <i class="fas fa-fw fa-folder"></i>
                    <span>Registros</span>
                </a>
                <div id="collapsePages5" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Registros</h6>
                        <a class="collapse-item" href="registrocliente.php">Registro Cliente</a>
                        <a class="collapse-item" href="registrovendedor.php">Registro Vendedor</a>
                        <a class="collapse-item" href="registrodespachador.php">Registro Despachador</a>
                        <a class="collapse-item" href="registrodestinatario.php">Registro Destinatario</a>
                        <a class="collapse-item" href="registrofallo.php">Registro Fallo</a>
                        <a class="collapse-item" href="registropersonal.php">Registro Personal Almacen</a>
                        <a class="collapse-item" href="registrotransporte.php">Registro Transporte</a>
                        <div class="collapse-divider"></div>
                        <h6 class="collapse-header">Other Pages:</h6>
                        <a class="collapse-item" href="404.html">404 Page</a>
                        <a class="collapse-item" href="blank.html">Blank Page</a>
                    </div>
                </div>
            </li>


            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>

        </ul>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                    <!-- Sidebar Toggle (Topbar) -->
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>
                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">

                        <!-- Nav Item - Alerts -->
                        <li class="nav-item dropdown no-arrow mx-1">
                            <a class="nav-link dropdown-toggle" href="#" id="alertsDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-bell fa-fw"></i>
                                <!-- Counter - Alerts -->
                                <span class="badge badge-danger badge-counter">3+</span>
                            </a>
                            <!-- Dropdown - Alerts -->
                            <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="alertsDropdown">
                                <h6 class="dropdown-header">
                                    Alerts Center
                                </h6>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="mr-3">
                                        <div class="icon-circle bg-primary">
                                            <i class="fas fa-file-alt text-white"></i>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="small text-gray-500">December 12, 2019</div>
                                        <span class="font-weight-bold">A new monthly report is ready to download!</span>
                                    </div>
                                </a>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="mr-3">
                                        <div class="icon-circle bg-success">
                                            <i class="fas fa-donate text-white"></i>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="small text-gray-500">December 7, 2019</div>
                                        $290.29 has been deposited into your account!
                                    </div>
                                </a>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="mr-3">
                                        <div class="icon-circle bg-warning">
                                            <i class="fas fa-exclamation-triangle text-white"></i>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="small text-gray-500">December 2, 2019</div>
                                        Spending Alert: We've noticed unusually high spending for your account.
                                    </div>
                                </a>
                                <a class="dropdown-item text-center small text-gray-500" href="#">Show All Alerts</a>
                            </div>
                        </li>


                        <div class="topbar-divider d-none d-sm-block"></div>

                        <!-- Nav Item - User Information -->
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small">{{ Auth::user()->name }}</span>
                                <img class="img-profile rounded-circle" src="{{ asset('img/avatar.jpg') }}">
                            </a>
                            <!-- Dropdown - User Information -->
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                    {{ __('Logout') }}
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    @csrf
                                </form>
                            </div>
                        </li>

                    </ul>

                </nav>
                <!-- End of Topbar -->
                @yield('contenido')
                <!-- Footer -->
                <footer class="sticky-footer bg-white">
                    <div class="container my-auto">
                        <div class="copyright text-center my-auto">
                            <span>Copyright &copy; Your Website 2019</span>
                        </div>
                    </div>
                </footer>
                <!-- End of Footer -->

            </div>
            <!-- End of Content Wrapper -->

        </div>
        <!-- End of Page Wrapper -->

        <!-- Scroll to Top Button-->
        <a class="scroll-to-top rounded" href="#page-top">
            <i class="fas fa-angle-up"></i>
        </a>

        <!-- Logout Modal-->
        <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                        <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">×</span>
                        </button>
                    </div>
                    <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                    <div class="modal-footer">
                        <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                        <a class="btn btn-primary" href="login.html">Logout</a>
                    </div>
                </div>
            </div>
        </div>

        <!-- Bootstrap core JavaScript-->
        <script type="text/javascript" src="{!! asset('vendor/jquery/jquery.min.js') !!}"></script>
        <script type="text/javascript" src="{!! asset('vendor/bootstrap/js/bootstrap.bundle.min.js') !!}"></script>

        <!-- Core plugin JavaScript-->
        <script type="text/javascript" src="{!! asset('vendor/jquery-easing/jquery.easing.min.js') !!}"></script>

        <!-- Custom scripts for all pages-->
        <script type="text/javascript" src="{!! asset('js/sb-admin-2.min.js') !!}"></script>

        <!-- Page level plugins -->
        <script type="text/javascript" src="{!! asset('vendor/chart.js/Chart.min.js') !!}"></script>

        <!-- Page level custom scripts -->
        <script type="text/javascript" src="{!! asset('js/demo/chart-area-demo.js') !!}"></script>
        <script type="text/javascript" src="{!! asset('js/demo/chart-pie-demo.js') !!}"></script>
        <!-- Page level plugins -->
        <script type="text/javascript" src="{!! asset('vendor/datatables/jquery.dataTables.min.js') !!}"></script>
        <script type="text/javascript" src="{!! asset('vendor/datatables/dataTables.bootstrap4.min.js') !!}"></script>

        <!-- Page level custom scripts -->
        <script type="text/javascript" src="{!! asset('js/demo/datatables-demo.js') !!}"></script>

</body>

</html>