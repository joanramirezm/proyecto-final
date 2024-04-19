<!DOCTYPE html>
<html lang="en">
<!-- BEGIN HEAD -->

<head>
	<meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta content="width=device-width, initial-scale=1" name="viewport" />
	<meta name="description" content="Responsive Admin Template" />
	<meta name="author" content="Proyecto Final Hospital" />
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
						<span class="logo-default">Proyecto Final </span> </a>
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
				<!-- start header menu -->
	
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
										<img alt="image" src="{{ asset('img/dp.jpg') }}">
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
									<li class="nav-item   ">
										<a href="{{ route('patients.index') }}" class="nav-link "> <span class="title">Todos los pacientes
												</span>
											<span class="selected"></span>
										</a>
									</li>
									<li class="nav-item  active open">
										<a href="{{ route('patients.create') }}" class="nav-link "> <span class="title">Agregar paciente</span>
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
                                <div class="page-title">Agregar paciente</div>
                            </div>
                            <ol class="breadcrumb page-breadcrumb pull-right">
                                <li><i class="fa fa-home"></i>&nbsp;<a class="parent-item"
                                        href="index.html">inicio</a>&nbsp;<i class="fa fa-angle-right"></i>
                                </li>
                                <li><a class="parent-item" href="{{ route('patients.index') }}">Pacientes</a>&nbsp;<i class="fa fa-angle-right"></i>
                                </li>
                                <li class="active">Agregar paciente</li>
                            </ol>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12 col-sm-12">
                            <div class="card card-box">
                                <div class="card-head">
                                    <header>Informacion del paciente</header>
                 
                                </div>
                                <div class="card-body" id="bar-parent">
                                    <form action="{{ route('patients.store') }}" method="POST" class="form-horizontal">
                                        @csrf
                                        <div class="form-body">

                                            <div class="form-group row">
                                                <label class="control-label col-md-3">ID de paciente 
                                                    <span class="required"> * </span>
                                                </label>
                                                <div class="col-md-5">
                                                    <input type="text" name="id_patient" data-required="1"
                                                        placeholder="ID de paciente " required
                                                        class="form-control input-height" />
                                                </div>
                                            </div>


                                            <div class="form-group row">
                                                <label class="control-label col-md-3">Nombre
                                                    <span class="required"> * </span>
                                                </label>
                                                <div class="col-md-5">
                                                    <input type="text" name="name" data-required="1"
                                                        placeholder="Nombre" required
                                                        class="form-control input-height" />
                                                </div>
                                            </div>


                                            <div class="form-group row">
                                                <label class="control-label col-md-3">Correo electrónico
                                                    <span class="required"> * </span>
                                                </label>
                                                <div class="col-md-5">
                                                    <input type="email" name="email" data-required="1"
                                                        placeholder="Correo electrónico" required
                                                        class="form-control input-height" />
                                                </div>
                                            </div>

                                            <div class="form-group row">
                                                <label class="control-label col-md-3">Teléfono 
                                                    <span class="required"> * </span>
                                                </label>
                                                <div class="col-md-5">
                                                    <input type="text" name="phone" data-required="1"
                                                        placeholder="Teléfono" required
                                                        class="form-control input-height" />
                                                </div>
                                            </div>
                                
                                  
                                
                                            <div class="form-actions">
                                                <div class="col-lg-12 p-t-20 text-center">
                                                    <button type="submit"
                                                        class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect m-b-10 m-r-20 btn-circle btn-primary">Guardar</button>

                                                </div>
                                            </div>
                                        </div>
                                    </form>
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