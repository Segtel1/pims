<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from hencework.com/theme/hound/full-width-light/profile.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 10 Dec 2018 14:04:17 GMT -->
<head>
    <meta charset="UTF-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
	<title>PIMS - Pharmacy Inventory Management System</title>
	<meta name="description" content="Hound is a Dashboard & Admin Site Responsive Template by hencework." />
	<meta name="keywords" content="admin, admin dashboard, admin template, cms, crm, Hound Admin, Houndadmin, premium admin templates, responsive admin, sass, panel, software, ui, visualization, web app, application" />
    <meta name="author" content="hencework"/>
        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">
	
	<!-- Favicon -->
	<link rel="shortcut icon" href="favicon.ico">
	<link rel="icon" href="favicon.ico" type="image/x-icon">
	
	<!-- Morris Charts CSS -->
    <link href="{{asset('vendors/bower_components/morris.js/morris.css')}}" rel="stylesheet" type="text/css"/>
	
	<!-- vector map CSS -->
	<link href="{{asset('vendors/vectormap/jquery-jvectormap-2.0.2.css')}}" rel="stylesheet" type="text/css"/>
    
    
	<!-- Calendar CSS -->
	<link href="{{asset('vendors/bower_components/fullcalendar/dist/fullcalendar.css')}}" rel="stylesheet" type="text/css"/>
  
	<!-- Data table CSS -->
    <link href="{{asset('vendors/bower_components/datatables/media/css/jquery.dataTables.min.css')}}" rel="stylesheet" type="text/css"/>
    
    <!-- Data table CSS -->
	<link href="{{asset('vendors/bower_components/jasny-bootstrap/dist/css/jasny-bootstrap.min.css')}}" rel="stylesheet" type="text/css"/>

	<!-- Custom CSS -->
	<link href="{{asset('css/style.css')}}" rel="stylesheet" type="text/css">
</head>

<body>
	<!--Preloader-->
	{{-- <div class="preloader-it">
		<div class="la-anim-1"></div>
	</div> --}}
	<!--/Preloader-->
    <div class="wrapper theme-4-active pimary-color-red">
		<!-- Top Menu Items -->
		<nav class="navbar navbar-inverse navbar-fixed-top">
			<div class="mobile-only-brand pull-left">
				<div class="nav-header pull-left">
					<div class="logo-wrap">
						<a href="index-2.html">
							<img class="brand-img" src="../img/logo.png" alt="brand"/>
							<span class="brand-text">PIMS</span>
						</a>
					</div>
				</div>	
				<a id="toggle_nav_btn" class="toggle-left-nav-btn inline-block ml-20 pull-left" href="javascript:void(0);"><i class="zmdi zmdi-menu"></i></a>
				<a id="toggle_mobile_search" data-toggle="collapse" data-target="#search_form" class="mobile-only-view" href="javascript:void(0);"><i class="zmdi zmdi-search"></i></a>
				<a id="toggle_mobile_nav" class="mobile-only-view" href="javascript:void(0);"><i class="zmdi zmdi-more"></i></a>
			</div>
			<div id="mobile_only_nav" class="mobile-only-nav pull-right">
				<ul class="nav navbar-right top-nav pull-right">
					<li class="dropdown auth-drp">
						<a href="#" class="dropdown-toggle pr-0" data-toggle="dropdown"><img src="img/thumb-2.jpg" alt="user_auth" class="user-auth-img img-circle"/><span class="user-online-status"></span></a>
						<ul class="dropdown-menu user-auth-dropdown" data-dropdown-in="flipInX" data-dropdown-out="flipOutX">
							<li>
                                    <a href="{{ route('logout') }}" onclick="event.preventDefault();
                                    document.getElementById('logout-form').submit();">
                                    <i class="zmdi zmdi-power" ></i><span>{{ __('Logout') }}</span></a>
                                            <form id="logout-form" action="{{ route('logout') }}" method="post" style="display: none;">
                                                    @method('POST')
                                                @csrf
                                           </form>
							</li>
						</ul>
					</li>
				</ul>
			</div>	
		</nav>
		<!-- /Top Menu Items -->
		
		<!-- Left Sidebar Menu -->
		<div class="fixed-sidebar-left">
			<ul class="nav navbar-nav side-nav nicescroll-bar">
				<li class="navigation-header">
					<span>Main</span> 
					<i class="zmdi zmdi-more"></i>
				</li>
				 <li>
                        <a href="{{route('dashboard')}}"><div class="pull-left"><i class="ti ti-dashboard mr-20"></i><span class="right-nav-text">Dashboard</span></div><div class="clearfix"></div></a>
                </li>
                <li>
                        <a href="{{route('manage_customer')}}"><div class="pull-left"><i class="ti ti-user mr-20"></i><span class="right-nav-text">Manage Customers</span></div><div class="clearfix"></div></a>
                </li>
				<li>
				 <a href="{{route('manage_items')}}"><div class="pull-left"><i class="ti ti-shopping-cart mr-20"></i><span class="right-nav-text">Manage Item</span></div><div class="clearfix"></div></a>
				</li>
				<li>
					<a href="{{route('view_order')}}"><div class="pull-left"><i class="ti ti-eye mr-20"></i><span class="right-nav-text">View Order</span></div><div class="clearfix"></div></a>
				   </li>
				<li>
						<a href="{{route('create_invoice')}}" data-toggle="collapse" data-target="#finance_dr"><div class="pull-left"><i class="ti ti-money mr-20"></i><span class="right-nav-text">Billing</span></div><div class="pull-right"></div><div class="clearfix"></div></a>
				</li>
			</ul>
		</div>
		<!-- /Left Sidebar Menu -->