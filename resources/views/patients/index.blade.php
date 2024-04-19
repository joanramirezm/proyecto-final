<!DOCTYPE html>
<html lang="en">
<!-- BEGIN HEAD -->

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta content="width=device-width, initial-scale=1" name="viewport" />
    <meta name="description" content="Responsive Admin Template" />
    <meta name="author" content="Proyecto FinalHospital" />
    <title>Proyecto Final Hospital | Bootstrap Responsive Hospital Admin Template</title>
    <!-- google font -->
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet" type="text/css" />
    <!-- icons -->
    <link href="{{ asset('fonts/simple-line-icons/simple-line-icons.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('fonts/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('fonts/font-awesome/v6/css/all.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('fonts/material-design-icons/material-icon.css') }}" rel="stylesheet" type="text/css" />
    <!--bootstrap -->
    <link href="{{ asset('assets/bundles/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" />
    <!-- Material Design Lite CSS -->
    <link rel="stylesheet" href="{{ asset('assets/bundles/material/material.min.css ') }}">
    <link rel="stylesheet" href="{{ asset('css/material_style.css') }}">
    <!-- Theme Styles -->
    <link href="{{ asset('css/theme_style.css') }}" rel="stylesheet" id="rt_style_components" type="text/css" />
    <link href="{{ asset('css/plugins.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('css/style.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('css/responsive.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('css/theme-color.css') }}" rel="stylesheet" type="text/css" />
    <!-- favicon -->
    <link rel="shortcut icon" href="{{ asset('img/favicon.ico') }}" />
</head>
<!-- END HEAD -->

<body
    class="page-header-fixed sidemenu-closed-hidelogo page-content-white page-md header-white white-sidebar-color logo-indigo">
    <div class="page-wrapper">
        <!-- start header -->
        <div class="page-header navbar navbar-fixed-top">
            <div class="page-header-inner ">
                <!-- logo start -->
                <div class="page-logo">
                    <a href="index.html">
                        <span class="logo-icon fa fa-stethoscope fa-rotate-45"></span>
                        <span class="logo-default">Proyecto Final</span> </a>
                </div>
                <!-- logo end -->
                <ul class="nav navbar-nav navbar-left in">
                    <li><a href="#" class="menu-toggler sidebar-toggler"><i data-feather="menu"></i></a></li>
                </ul>

                <!-- start mobile menu -->
                <a class="menu-toggler responsive-toggler" data-bs-toggle="collapse" data-bs-target=".navbar-collapse">
                    <span></span>
                </a>
                <!-- end mobile menu -->

            </div>
        </div>
        <!-- end header -->
        <!-- start color quick setting -->
        <div class="settingSidebar">
            <a href="javascript:void(0)" class="settingPanelToggle"> <i class="fa fa-spin fa-cog"></i>
            </a>
            <div class="settingSidebar-body ps-container ps-theme-default">
                <div class=" fade show active">
                    <div class="setting-panel-header">Setting Panel
                    </div>
                    <div class="quick-setting slimscroll-style">
                        <ul id="themecolors">
                            <li>
                                <p class="sidebarSettingTitle">Sidebar Color</p>
                            </li>
                            <li class="complete">
                                <div class="theme-color sidebar-theme">
                                    <a href="#" data-theme="white"><span class="head"></span><span
                                            class="cont"></span></a>
                                    <a href="#" data-theme="dark"><span class="head"></span><span
                                            class="cont"></span></a>
                                    <a href="#" data-theme="blue"><span class="head"></span><span
                                            class="cont"></span></a>
                                    <a href="#" data-theme="indigo"><span class="head"></span><span
                                            class="cont"></span></a>
                                    <a href="#" data-theme="cyan"><span class="head"></span><span
                                            class="cont"></span></a>
                                    <a href="#" data-theme="green"><span class="head"></span><span
                                            class="cont"></span></a>
                                    <a href="#" data-theme="red"><span class="head"></span><span
                                            class="cont"></span></a>
                                </div>
                            </li>
                            <li>
                                <p class="sidebarSettingTitle">Header Brand color</p>
                            </li>
                            <li class="theme-option">
                                <div class="theme-color logo-theme">
                                    <a href="#" data-theme="logo-white"><span class="head"></span><span
                                            class="cont"></span></a>
                                    <a href="#" data-theme="logo-dark"><span class="head"></span><span
                                            class="cont"></span></a>
                                    <a href="#" data-theme="logo-blue"><span class="head"></span><span
                                            class="cont"></span></a>
                                    <a href="#" data-theme="logo-indigo"><span class="head"></span><span
                                            class="cont"></span></a>
                                    <a href="#" data-theme="logo-cyan"><span class="head"></span><span
                                            class="cont"></span></a>
                                    <a href="#" data-theme="logo-green"><span class="head"></span><span
                                            class="cont"></span></a>
                                    <a href="#" data-theme="logo-red"><span class="head"></span><span
                                            class="cont"></span></a>
                                </div>
                            </li>
                            <li>
                                <p class="sidebarSettingTitle">Header color</p>
                            </li>
                            <li class="theme-option">
                                <div class="theme-color header-theme">
                                    <a href="#" data-theme="header-white"><span class="head"></span><span
                                            class="cont"></span></a>
                                    <a href="#" data-theme="header-dark"><span class="head"></span><span
                                            class="cont"></span></a>
                                    <a href="#" data-theme="header-blue"><span class="head"></span><span
                                            class="cont"></span></a>
                                    <a href="#" data-theme="header-indigo"><span class="head"></span><span
                                            class="cont"></span></a>
                                    <a href="#" data-theme="header-cyan"><span class="head"></span><span
                                            class="cont"></span></a>
                                    <a href="#" data-theme="header-green"><span class="head"></span><span
                                            class="cont"></span></a>
                                    <a href="#" data-theme="header-red"><span class="head"></span><span
                                            class="cont"></span></a>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- end color quick setting -->
        <!-- start page container -->
        <div class="page-container">
            <!-- start sidebar menu -->
            <div class="sidebar-container">
                <div class="sidemenu-container navbar-collapse collapse fixed-menu">
                    <div id="remove-scroll" class="left-sidemenu">
                        <ul class="sidemenu  page-header-fixed slimscroll-style" data-keep-expanded="false"
                            data-auto-scroll="true" data-slide-speed="200" style="padding-top: 20px">
                            <li class="sidebar-toggler-wrapper hide">
                                <div class="sidebar-toggler">
                                    <span></span>
                                </div>
                            </li>
                            <li class="sidebar-user-panel">
                                <div class="sidebar-user">
                                    <div class="sidebar-user-picture">
                                        <img alt="image" src="img/dp.jpg">
                                    </div>
                                    <div class="sidebar-user-details">
                                        <div class="user-name">Dr. Joan Ramirez</div>
                                        <div class="user-role">Administrator</div>
                                    </div>
                                </div>
                            </li>

                            <li class="nav-item active open ">
                                <a href="#" class="nav-link nav-toggle"> <i data-feather="user"></i>
                                    <span class="title">Pacientes</span> <span class="selected"></span>
                                    <span class="arrow open"></span>
                                </a>
                                <ul class="sub-menu">
                                    <li class="nav-item active open ">
                                        <a href="{{ route('patients.index') }}" class="nav-link "> <span
                                                class="title">Todos los pacientes
                                            </span>
                                            <span class="selected"></span>
                                        </a>
                                    </li>
                                    <li class="nav-item  ">
                                        <a href="{{ route('patients.create') }}" class="nav-link "> <span
                                                class="title">Agregar paciente</span>
                                        </a>
                                    </li>
                                </ul>
                            </li>

                        </ul>
                    </div>
                </div>
            </div>
            <!-- end sidebar menu -->
            <!-- start page content -->
            <div class="page-content-wrapper">
                <div class="page-content">
                    <div class="page-bar">
                        <div class="page-title-breadcrumb">
                            <div class=" pull-left">
                                <div class="page-title">Listado de Pacientes</div>
                            </div>
                            <ol class="breadcrumb page-breadcrumb pull-right">
                                <li><i class="fa fa-home"></i>&nbsp;<a class="parent-item"
                                        href="index.html">Inicio</a>&nbsp;<i class="fa fa-angle-right"></i>
                                </li>
                                <li><a class="parent-item" href="">Pacientes</a>&nbsp;<i
                                        class="fa fa-angle-right"></i>
                                </li>
                                <li class="active">Listado de Pacientes</li>
                            </ol>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="tabbable-line">
                                <div class="tab-pane active fontawesome-demo">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="card">
                                                <div class="card-head">
                                                    <header></header>
                                                    <div class="tools">
                                                        <a class="fa fa-repeat btn-color box-refresh"
                                                            href="javascript:;"></a>
                                                        <a class="t-collapse btn-color fa fa-chevron-down"
                                                            href="javascript:;"></a>
                                                        <a class="t-close btn-color fa fa-times"
                                                            href="javascript:;"></a>
                                                    </div>
                                                </div>
                                                <div class="card-body ">
                                                    <div class="row">
                                                        <div class="col-md-6 col-sm-6 col-xs-6">
                                                            <div class="btn-group">
                                                                <a href="{{ route('patients.create') }}"
                                                                    id="addRow" class="btn btn-primary">
                                                                    Agregar Nuevo <i class="fa fa-plus"></i>
                                                                </a>
                                                            </div>
                                                        </div>


                                                        <form class="search-form-opened" action="#"
                                                            method="GET">
                                                            <div class="input-group">
                                                                <input type="text" class="form-control"
                                                                    placeholder="Buscar paciente" name="query" value="{{ request('query') }}">
                                                                <span class="input-group-btn">
                                                                    <a href="javascript:;" class="btn submit">
                                                                        <i class="icon-magnifier"></i>
                                                                    </a>
                                                                </span>
                                                            </div>
                                                        </form>

                                                    </div>
                                                    <br>
                                                    <table
                                                        class="table table-striped table-bordered table-hover table-checkable order-column full-width"
                                                        id="example4">
                                                        <thead>
                                                            <tr>
                                                                <th> ID de Paciente </th>
                                                                <th> Nombre </th>
                                                                <th> Telefono </th>
                                                                <th> Email </th>
                                                                <th> Acciones </th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>

                                                            @foreach ($patients as $patient)
                                                                <tr class="odd gradeX">
                                                                    <td>{{ $patient->id_patient }}</td>
                                                                    <td>{{ $patient->name }}</td>
                                                                    <td>{{ $patient->phone }}</td>
                                                                    <td>{{ $patient->email }}</td>
                                                                    <td>
                                                                        <a href="" class="tblEditBtn">
                                                                            <i class="fa fa-pencil"></i>
                                                                        </a>
                                                                        <a class="tblDelBtn">
                                                                            <i class="fa fa-trash-o"></i>
                                                                        </a>
                                                                    </td>
                                                                </tr>
                                                            @endforeach

                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end page content -->

        </div>
        <!-- end page container -->

    </div>
    <!-- start js include path -->
    <script src="{{ asset('assets/bundles/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('assets/bundles/popper/popper.js') }}"></script>
    <script src="{{ asset('assets/bundles/jquery-blockUI/jquery.blockui.min.js') }}"></script>
    <script src="{{ asset('assets/bundles/jquery.slimscroll/jquery.slimscroll.js') }}"></script>
    <script src="{{ asset('assets/bundles/feather/feather.min.js') }}"></script>
    <!-- bootstrap -->
    <script src="{{ asset('assets/bundles/bootstrap/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('assets/bundles/bootstrap-switch/js/bootstrap-switch.min.js') }}"></script>
    <!-- counterup -->
    <script src="{{ asset('assets/bundles/counterup/jquery.waypoints.min.js') }}"></script>
    <script src="{{ asset('assets/bundles/counterup/jquery.counterup.min.js') }}"></script>
    <!-- Common js-->
    <script src="{{ asset('assets/app.js') }}"></script>
    <script src="{{ asset('assets/layout.js') }}"></script>
    <script src="{{ asset('assets/theme-color.js') }}"></script>
    <!-- material -->
    <script src="{{ asset('assets/bundles/material/material.min.js') }}"></script>
    <!-- chart js -->
    <script src="{{ asset('assets/bundles/chart-js/Chart.min.js') }}"></script>
    <script src="{{ asset('assets/bundles/chart-js/utils.js') }}"></script>
    <script src="{{ asset('assets/bundles/apexcharts/apexcharts.min.js') }}"></script>
    <script src="{{ asset('assets/data/charts/apex/apex-home.js') }}"></script>
    <!-- end js include path -->
</body>

</html>
