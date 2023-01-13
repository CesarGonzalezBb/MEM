<!DOCTYPE html>
<html dir="ltr" lang="es">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="keywords"
        content="wrappixel, admin dashboard, html css dashboard, web dashboard, bootstrap 5 admin, bootstrap 5, css3 dashboard, bootstrap 5 dashboard, material admin bootstrap 5 dashboard, frontend, responsive bootstrap 5 admin template, material design, material dashboard bootstrap 5 dashboard template">
    <meta name="description"
        content="MaterialPro is powerful and clean admin dashboard template, inpired from Google's Material Design">
    <meta name="robots" content="noindex,nofollow">
    <title>JEANSWEST</title>
    <link rel="stylesheet" href="{{ asset('assets/libs/apexcharts/dist/apexcharts.css') }}">
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('assets/images/favicon.png') }}">
    <!-- Custom CSS -->
    <link href="{{ asset('assets/libs/jquery-steps/steps.css') }}" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{asset('assets/libs/select2/dist/css/select2.css')}}">
    <link href="{{ asset('dist/css/style.css') }}" rel="stylesheet">
    <!--Style Tabla-->
    <link rel="stylesheet" href="//cdn.datatables.net/1.12.1/css/jquery.dataTables.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.25/css/dataTables.bootstrap5.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.2.9/css/responsive.bootstrap5.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/fullcalendar@5.11.0/main.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css"
        integrity="sha512-1sCRPdkRXhBV2PBLUdRb4tMg1w2YPf37qatUFeS7zlBy7jJI8Lf4VHwWfZZfpXtYSLy85pkm9GaYVYMfw5BC1A=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=IBM+Plex+Sans:ital,wght@0,500;0,600;0,700;1,400&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="{{asset('css/design_system.css')}}">
    <link href="{{asset('css/dropzone.css')}}" type="text/css" rel="stylesheet" />
    @livewireStyles
</head>

<body>

    {{-- <div class="preloader">
        <svg class="" width="1" height="1" viewbox="0 0 37 48" fill="none"
            xmlns="http://www.w3.org/2000/svg">
            <path
                d="M27.0819 17H3.02508C1.91076 17 1.01376 17.9059 1.0485 19.0197C1.15761 22.5177 1.49703 29.7374 2.5 34C4.07125 40.6778 7.18553 44.8868 8.44856 46.3845C8.79051 46.79 9.29799 47 9.82843 47H20.0218C20.639 47 21.2193 46.7159 21.5659 46.2052C22.6765 44.5687 25.2312 40.4282 27.5 34C28.9757 29.8188 29.084 22.4043 29.0441 18.9156C29.0319 17.8436 28.1539 17 27.0819 17Z"
                stroke="#1e88e5" stroke-width="2"></path>
            <path
                d="M29 23.5C29 23.5 34.5 20.5 35.5 25.4999C36.0986 28.4926 34.2033 31.5383 32 32.8713C29.4555 34.4108 28 34 28 34"
                stroke="#1e88e5" stroke-width="2"></path>
            <path id="teabag" fill="#1e88e5" fill-rule="evenodd" clip-rule="evenodd"
                d="M16 25V17H14V25H12C10.3431 25 9 26.3431 9 28V34C9 35.6569 10.3431 37 12 37H18C19.6569 37 21 35.6569 21 34V28C21 26.3431 19.6569 25 18 25H16ZM11 28C11 27.4477 11.4477 27 12 27H18C18.5523 27 19 27.4477 19 28V34C19 34.5523 18.5523 35 18 35H12C11.4477 35 11 34.5523 11 34V28Z">
            </path>
            <path id="steamL" d="M17 1C17 1 17 4.5 14 6.5C11 8.5 11 12 11 12" stroke-width="2" stroke-linecap="round"
                stroke-linejoin="round" stroke="#1e88e5"></path>
            <path id="steamR" d="M21 6C21 6 21 8.22727 19 9.5C17 10.7727 17 13 17 13" stroke="#1e88e5"
                stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
        </svg>
    </div> --}}

    <div id="main-wrapper">

        <aside class="left-sidebar">
            <!-- Sidebar scroll-->
            <div class="scroll-sidebar">
                <!-- User profile -->

                <!-- End User profile text-->
                <!-- Sidebar navigation-->
                <nav class="sidebar-nav">
                    <!-- User profile -->
                    <div class="user-profile position-relative">
                        <!-- User profile image -->
                        <div class="p-3"> <img src="{{ asset('img/jeanswest.svg') }}" alt="user"
                                class="w-100" />
                            <hr>
                        </div>

                        <ul id="sidebarnav">

                            <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link"
                                    href="{{route('dashboard')}}" aria-expanded="false">
                                    <img id="dashboard_icon" style="margin-right: 10px"
                                        src="{{ asset('img/portal/menu/home.svg') }}" width="22" alt="">
                                    <span class="hide-menu">Dashboard</span></a></li>

                            <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link"
                                    href=" {{route('user.compras')}} " aria-expanded="false">
                                    <img id="miscompras_icon" style="margin-right: 10px"
                                        src="{{ asset('img/portal/menu/shoppingbag.svg') }}" width="18"
                                        alt="">
                                    <span class="hide-menu">Mis compras</span></a></li>

                            <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link"
                                    href=" {{route('admin.pedidos')}} " aria-expanded="false">
                                    <img id="pedidos_icon" style="margin-right: 10px"
                                        src="{{ asset('img/portal/menu/pedidos.svg') }}" width="20" alt="">
                                    <span class="hide-menu">Pedidos</span></a></li>

                            <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link"
                                    href=" {{route('admin.productos')}} " aria-expanded="false">
                                    <img id="productos_icon" style="margin-right: 10px"
                                        src="{{ asset('img/portal/menu/shoppingbag.svg') }}" width="18"
                                        alt="">
                                    <span class="hide-menu">Productos</span></a></li>
                            
                            <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link"
                                href=" {{route('admin.colecciones')}} " aria-expanded="false">
                                <img id="productos_icon" style="margin-right: 10px"
                                    src="{{ asset('img/portal/menu/colecciones.svg') }}" width="22"
                                    alt="">
                                <span class="hide-menu">Colecciones</span></a></li>

                            <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link"
                                href=" {{route('admin.clientes')}} " aria-expanded="false">
                                <img id="descuentos_icon" style="margin-right: 10px"
                                    src="{{ asset('img/portal/menu/clientes.svg') }}" width="20"
                                    alt="">
                                <span class="hide-menu">Clientes</span></a></li>

                            <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link"
                                    href=" {{route('admin.descuentos')}} " aria-expanded="false">
                                    <img id="descuentos_icon" style="margin-right: 10px"
                                        src="{{ asset('img/portal/menu/descuentos.svg') }}" width="20"
                                        alt="">
                                    <span class="hide-menu">Descuentos</span></a></li>

                            {{-- <li class="sidebar-item">
                                <a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)"
                                    aria-expanded="false">
                                    <img id="descuentos_icon" style="margin-right: 10px" src="{{ asset('img/portal/menu/descuentos.svg') }}"
                                        width="20" alt="">
                                    <span class="hide-menu">Descuentos</span>
                                </a>
                                <ul aria-expanded="false" class="collapse  first-level">
                                    <li class="sidebar-item">
                                        <a href="#"
                                            class="sidebar-link">
                                            <img style="margin-right: 10px"
                                                src="{{ asset('img/svg/collaborate.svg') }}" width="22"
                                                alt="">
                                            <span class="hide-menu">Descuentos</span>
                                        </a>
                                    </li>
                                    <li class="sidebar-item">
                                        <a href="#" class="sidebar-link">
                                            <img style="margin-right: 10px"
                                                src="{{ asset('img/svg/application--web.svg') }}" width="22"
                                                alt="">
                                            <span class="hide-menu">Cupones</span>
                                        </a>
                                    </li>
                                    
                                </ul>
                            </li> --}}

                            <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link"
                                    href=" {{route('user.facturacion')}} " aria-expanded="false">
                                    <img id="facturacion_icon" style="margin-right: 10px"
                                        src="{{ asset('img/portal/menu/facturacion.svg') }}" width="22"
                                        alt="">
                                    <span class="hide-menu">Usuario - Facturación</span></a></li>

                            <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link"
                                    href=" {{route('admin.facturacion')}} " aria-expanded="false">
                                    <img id="facturacion_icon" style="margin-right: 10px"
                                        src="{{ asset('img/portal/menu/facturacion.svg') }}" width="22"
                                        alt="">
                                    <span class="hide-menu">Admin - Facturación</span></a></li>


                            <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link"
                                    href=" {{route('soporte')}} " aria-expanded="false">
                                    <img id="soporte_icon" style="margin-right: 10px"
                                        src="{{ asset('img/portal/menu/soporte.svg') }}" width="20"
                                        alt="">
                                    <span class="hide-menu">Soporte</span></a></li>

                            <hr>
                            <li class="sidebar-item">
                                <a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)"
                                    aria-expanded="false">
                                    <img id="user_user_icon" style="margin-right: 10px" src="{{ asset('img/portal/menu/user.svg') }}"
                                        width="16" alt="">
                                    <span class="hide-menu"> Usuario - Mi perfil</span>
                                </a>
                                <ul aria-expanded="false" class="collapse  first-level">
                                    <li class="sidebar-item">
                                        <a href="{{route('user.perfil')}}"
                                            class="sidebar-link">
                                            <img id="perfil_icon" style="margin-right: 10px"
                                                src="{{ asset('img/portal/menu/perfil.svg') }}" width="16"
                                                alt="">
                                            <span class="hide-menu">Mis datos</span>
                                        </a>
                                    </li>
                                    <li class="sidebar-item">
                                        <a href="{{route('user.tarjetas')}}" class="sidebar-link">
                                            <img id="tarjeta_icon" style="margin-right: 10px"
                                                src="{{ asset('img/portal/menu/tarjeta.svg') }}" width="20"
                                                alt="">
                                            <span class="hide-menu">Mis tarjetas</span>
                                        </a>
                                    </li>
                                    <li class="sidebar-item">
                                        <a href="{{route('user.direcciones')}}" class="sidebar-link">
                                            <img id="direccion_icon" style="margin-right: 10px"
                                                src="{{ asset('img/portal/menu/localizacion.svg') }}" width="18"
                                                alt="">
                                            <span class="hide-menu">Direccion de envío</span>
                                        </a>
                                    </li>
                                    {{-- <li class="sidebar-item">
                                        <a href="{{route('user.seguridad')}}" class="sidebar-link">
                                            <img style="margin-right: 10px"
                                                src="{{ asset('img/portal/menu/seguridad.svg') }}" width="18"
                                                alt="">
                                            <span class="hide-menu">Seguridad</span>
                                        </a>
                                    </li> --}}
                                    
                                </ul>
                            </li>
                            <li class="sidebar-item">
                                <a href="{{route('admin.perfil')}}" class="sidebar-link waves-effect waves-dark sidebar-link"
                                    aria-expanded="false">
                                    <img id="user_admin_icon" style="margin-right: 10px"
                                        src="{{ asset('img/portal/menu/user.svg') }}" width="16" alt="">
                                    <span class="hide-menu"> Admin - Mi perfil</span>
                                </a>
                            </li>
                          
                            <li class="sidebar-item">
                                <a href="#" class="sidebar-link waves-effect waves-dark sidebar-link"
                                    aria-expanded="false">
                                    <img id="logout_icon" style="margin-right: 10px"
                                        src="{{ asset('img/portal/menu/logout.svg') }}" width="16"
                                        alt="">
                                    <span class="hide-menu">Cerrar sesión</span>
                                </a>
                            </li>
                            <hr>
                        </ul>
                </nav>
            </div>
            <div class="sidebar-footer">
                <img style="padding: 10%" src="{{ asset('img/materialized-Negro_.gif') }}" width="100%"
                    alt="">
            </div>
            <!-- End Bottom points-->
        </aside>

        <div class="page-wrapper">

            <div class="container-fluid">
                <main>
                    {{ $slot }}
                </main>
            </div>

            {{-- <footer class="footer">
                All Rights Reserved by Materialpro admin.
            </footer> --}}

        </div>

    </div>

    @livewireScripts
    <script src="{{ asset('assets/libs/jquery/dist/jquery.min.js') }}"></script>
    <script src="{{ asset('assets/extra-libs/taskboard/js/jquery-ui.min.js') }}"></script>
    <!-- Bootstrap tether Core JavaScript -->
    <script src="{{ asset('assets/libs/popper.js/popper.min.js') }}"></script>
    <script src="{{ asset('assets/libs/bootstrap/dist/js/bootstrap.min.js') }}"></script>
    <!-- apps -->
    <script src="{{ asset('dist/js/app.min.js') }}"></script>
    <script src="{{ asset('dist/js/app.init.js') }}"></script>
    <script src="{{ asset('dist/js/app-style-switcher.js') }}"></script>
    <!-- slimscrollbar scrollbar JavaScript -->
    <script src="{{ asset('assets/libs/perfect-scrollbar/dist/perfect-scrollbar.jquery.min.js') }}"></script>
    <script src="{{ asset('assets/extra-libs/sparkline/sparkline.js') }}"></script>
    <!--Wave Effects -->
    <script src="{{ asset('dist/js/waves.js') }}"></script>
    <!--Menu sidebar -->
    <script src="{{ asset('dist/js/sidebarmenu.js') }}"></script>
    <!--Custom JavaScript -->
    <script src="{{ asset('dist/js/feather.min.js') }}"></script>
    <script src="{{ asset('dist/js/custom.min.js') }}"></script>
    <!--This page JavaScript -->
    <script src="{{ asset('assets/libs/moment/min/moment.min.js') }}"></script>
    {{-- Wizard Form --}}
    <script src="{{ asset('assets/libs/jquery-steps/build/jquery.steps.js')}}"></script>
    <script src="{{ asset('assets/libs/jquery-validation/dist/jquery.validate.js')}}"></script>
    <script src="{{ asset('js/form_wizard.js') }}"></script>
    {{-- Select --}}
    <script src="{{asset('assets/libs/select2/dist/js/select2.full.js')}}"></script>
    <script src="{{asset('assets/libs/select2/dist/js/select2.js')}}"></script>
    <script src="{{asset('dist/js/pages/forms/select2/select2.init.js')}}"></script>
    {{-- Extras --}}
    <script src="{{asset('js/tab.js')}}"></script>
    <script src="{{asset('js/next.js')}}"></script>
    <script src="{{asset('js/input_file.js')}}"></script>
    <script src="{{asset('js/dropzone.js')}}"></script>

</body>

</html>
