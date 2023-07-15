<!DOCTYPE html>
<html lang='{{ str_replace('_', '-', app()->getLocale()) }}'>

<head>
<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title>Campus Canteen /admin</title>
    
<link rel="stylesheet" href="{{ URL::asset('') }}" />

	<!-- Global stylesheets -->
	<link href="https://fonts.googleapis.com/css?family=Roboto:400,300,100,500,700,900" rel="stylesheet" type="text/css">
	<link rel="stylesheet" type="text/css" href="{{URL::asset('global_assets1/css/icons/icomoon/styles.min.css')}}"  />
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('assets/css/bootstrap.min.css') }}" />
	<link rel="stylesheet" type="text/css" href="{{ URL::asset('assets/css/bootstrap_limitless.min.css') }}" />
	
	<link href="{{ URL::asset('assets/css/layout.min.css')}}" rel="stylesheet" type="text/css">
	<link href="{{ URL::asset('assets/css/components.min.css')}}" rel="stylesheet" type="text/css">
	<link href="{{ URL::asset('assets/css/colors.min.css')}}" rel="stylesheet" type="text/css">
	<!-- /global stylesheets -->

	<!-- Core JS files -->
	<script src="{{ URL::asset('global_assets1/js/main/jquery.min.js')}}"></script>
	<script src="{{ URL::asset('global_assets1/js/main/bootstrap.bundle.min.js')}}"></script>
	<script src="{{ URL::asset('global_assets1/js/plugins/loaders/blockui.min.js')}}"></script>
	<script src="{{ URL::asset('global_assets1/js/plugins/ui/ripple.min.js')}}"></script>
	<!-- /core JS files -->

	<!-- Theme JS files -->
	<script src="{{ URL::asset('global_assets1/js/plugins/visualization/d3/d3.min.js')}}"></script>
	<script src="{{ URL::asset('global_assets1/js/plugins/visualization/d3/d3_tooltip.js')}}"></script>
	<script src="{{ URL::asset('global_assets1/js/plugins/forms/styling/switchery.min.js')}}"></script>
	<script src="{{ URL::asset('global_assets1/js/plugins/ui/moment/moment.min.js')}}"></script>
	<script src="{{ URL::asset('global_assets1/js/plugins/pickers/daterangepicker.js')}}"></script>

	<script src="{{ URL::asset('assets/js/app.js')}}"></script>
	<script src="{{ URL::asset('global_assets1/js/demo_pages/dashboard.js')}}"></script>
	<script src="{{ URL::asset('global_assets1/js/demo_charts/pages/dashboard/light/streamgraph.js')}}"></script>
	<script src="{{ URL::asset('global_assets1/js/demo_charts/pages/dashboard/light/sparklines.js')}}"></script>
	<script src="{{ URL::asset('global_assets1/js/demo_charts/pages/dashboard/light/lines.js')}}"></script>	
	<script src="{{ URL::asset('global_assets1/js/demo_charts/pages/dashboard/light/areas.js')}}"></script>
	<script src="{{ URL::asset('global_assets1/js/demo_charts/pages/dashboard/light/donuts.js')}}"></script>
	<script src="{{ URL::asset('global_assets1/js/demo_charts/pages/dashboard/light/bars.js')}}"></script>
	<script src="{{ URL::asset('global_assets1/js/demo_charts/pages/dashboard/light/progress.js')}}"></script>
	<script src="{{ URL::asset('global_assets1/js/demo_charts/pages/dashboard/light/heatmaps.js')}}"></script>
	<script src="{{ URL::asset('global_assets1/js/demo_charts/pages/dashboard/light/pies.js')}}"></script>
	<script src="{{ URL::asset('global_assets1/js/demo_charts/pages/dashboard/light/bullets.js')}}"></script>
	<!-- /theme JS files -->
    <x-sg-meta />
    <x-sg-title />
    <x-sg-favicon />
    <x-sg-style />
    
</head>

<body>


    <!-- Main navbar -->
    <div class="navbar navbar-expand-md navbar-dark bg-indigo navbar-static">
        

        <div class="d-md-none">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-mobile">
                <i class="icon-tree5"></i>
            </button>
            <button class="navbar-toggler sidebar-mobile-main-toggle" type="button">
                <i class="icon-paragraph-justify3"></i>
            </button>
        </div>

        <div class="collapse navbar-collapse" id="navbar-mobile">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a href="#" class="navbar-nav-link sidebar-control sidebar-main-toggle d-none d-md-block">
                        <i class="icon-paragraph-justify3"></i>
                    </a>
                </li>
            </ul>

            <span class="navbar-text ml-md-3">
                <span class="badge badge-mark border-orange-300 mr-2"></span>
                Morning, Ahad!
            </span>

            <ul class="navbar-nav ml-md-auto">
                <li class="nav-item dropdown">
                    <a href="#" class="navbar-nav-link dropdown-toggle" data-toggle="dropdown">
                        <i class="icon-make-group mr-2"></i>
                        Connect
                    </a>

                    <div class="dropdown-menu dropdown-menu-right dropdown-content wmin-md-350">
                        <div class="dropdown-content-body p-2">
                            <div class="row no-gutters">
                                <div class="col-12 col-sm-4">
                                    <a href="#" class="d-block text-default text-center ripple-dark rounded p-3">
                                        <i class="icon-github4 icon-2x"></i>
                                        <div class="font-size-sm font-weight-semibold text-uppercase mt-2">Github</div>
                                    </a>

                                    <a href="#" class="d-block text-default text-center ripple-dark rounded p-3">
                                        <i class="icon-dropbox text-blue-400 icon-2x"></i>
                                        <div class="font-size-sm font-weight-semibold text-uppercase mt-2">Dropbox</div>
                                    </a>
                                </div>

                                <div class="col-12 col-sm-4">
                                    <a href="#" class="d-block text-default text-center ripple-dark rounded p-3">
                                        <i class="icon-dribbble3 text-pink-400 icon-2x"></i>
                                        <div class="font-size-sm font-weight-semibold text-uppercase mt-2">Dribbble
                                        </div>
                                    </a>

                                    <a href="#" class="d-block text-default text-center ripple-dark rounded p-3">
                                        <i class="icon-google-drive text-success-400 icon-2x"></i>
                                        <div class="font-size-sm font-weight-semibold text-uppercase mt-2">Drive</div>
                                    </a>
                                </div>

                                <div class="col-12 col-sm-4">
                                    <a href="#" class="d-block text-default text-center ripple-dark rounded p-3">
                                        <i class="icon-twitter text-info-400 icon-2x"></i>
                                        <div class="font-size-sm font-weight-semibold text-uppercase mt-2">Twitter</div>
                                    </a>

                                    <a href="#" class="d-block text-default text-center ripple-dark rounded p-3">
                                        <i class="icon-youtube text-danger icon-2x"></i>
                                        <div class="font-size-sm font-weight-semibold text-uppercase mt-2">Youtube</div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>

                <li class="nav-item dropdown">
                    <a href="#" class="navbar-nav-link dropdown-toggle" data-toggle="dropdown">
                        <i class="icon-pulse2 mr-2"></i>
                        Activity
                    </a>

                    <div class="dropdown-menu dropdown-menu-right dropdown-content wmin-md-350">
                        <div class="dropdown-content-header">
                            <span class="font-size-sm line-height-sm text-uppercase font-weight-semibold">Latest
                                activity</span>
                            <a href="#" class="text-default"><i class="icon-search4 font-size-base"></i></a>
                        </div>

                        <div class="dropdown-content-body dropdown-scrollable">
                            <ul class="media-list">
                                <li class="media">
                                    <div class="mr-3">
                                        <a href="#" class="btn bg-success-400 rounded-round btn-icon"><i
                                                class="icon-mention"></i></a>
                                    </div>

                                    <div class="media-body">
                                        <a href="#">Taylor Swift</a> mentioned you in a post "Angular JS. Tips and
                                        tricks"
                                        <div class="font-size-sm text-muted mt-1">4 minutes ago</div>
                                    </div>
                                </li>

                                <li class="media">
                                    <div class="mr-3">
                                        <a href="#" class="btn bg-pink-400 rounded-round btn-icon"><i
                                                class="icon-paperplane"></i></a>
                                    </div>

                                    <div class="media-body">
                                        Special offers have been sent to subscribed users by <a href="#">Donna
                                            Gordon</a>
                                        <div class="font-size-sm text-muted mt-1">36 minutes ago</div>
                                    </div>
                                </li>

                                <li class="media">
                                    <div class="mr-3">
                                        <a href="#" class="btn bg-blue rounded-round btn-icon"><i
                                                class="icon-plus3"></i></a>
                                    </div>

                                    <div class="media-body">
                                        <a href="#">Chris Arney</a> created a new <span
                                            class="font-weight-semibold">Design</span> branch in <span
                                            class="font-weight-semibold">Limitless</span> repository
                                        <div class="font-size-sm text-muted mt-1">2 hours ago</div>
                                    </div>
                                </li>

                                <li class="media">
                                    <div class="mr-3">
                                        <a href="#" class="btn bg-purple-300 rounded-round btn-icon"><i
                                                class="icon-truck"></i></a>
                                    </div>

                                    <div class="media-body">
                                        Shipping cost to the Netherlands has been reduced, database updated
                                        <div class="font-size-sm text-muted mt-1">Feb 8, 11:30</div>
                                    </div>
                                </li>

                                <li class="media">
                                    <div class="mr-3">
                                        <a href="#" class="btn bg-warning-400 rounded-round btn-icon"><i
                                                class="icon-comment"></i></a>
                                    </div>

                                    <div class="media-body">
                                        New review received on <a href="#">Server side integration</a> services
                                        <div class="font-size-sm text-muted mt-1">Feb 2, 10:20</div>
                                    </div>
                                </li>

                                <li class="media">
                                    <div class="mr-3">
                                        <a href="#" class="btn bg-teal-400 rounded-round btn-icon"><i
                                                class="icon-spinner11"></i></a>
                                    </div>

                                    <div class="media-body">
                                        <strong>January, 2018</strong> - 1320 new users, 3284 orders, $49,390 revenue
                                        <div class="font-size-sm text-muted mt-1">Feb 1, 05:46</div>
                                    </div>
                                </li>
                            </ul>
                        </div>

                        <div class="dropdown-content-footer bg-light">
                            <a href="#"
                                class="font-size-sm line-height-sm text-uppercase font-weight-semibold text-grey mr-auto">All
                                activity</a>
                            <div>
                                <a href="#" class="text-grey" data-popup="tooltip" title="Clear list"><i
                                        class="icon-checkmark3"></i></a>
                                <a href="#" class="text-grey ml-2" data-popup="tooltip" title="Settings"><i
                                        class="icon-gear"></i></a>
                            </div>
                        </div>
                    </div>
                </li>

                <li class="nav-item">
                    <a href="#" class="navbar-nav-link">
                        <i class="icon-switch2"></i>
                        <span class="d-md-none ml-2">Logout</span>
                    </a>
                </li>
            </ul>
        </div>
    </div>
    <!-- /main navbar -->


    <!-- Page content -->
    <div class="page-content">

        <!-- Main sidebar -->
        <div class="sidebar sidebar-light sidebar-main sidebar-expand-md">

            <!-- Sidebar mobile toggler -->
            <div class="sidebar-mobile-toggler text-center">
                <a href="#" class="sidebar-mobile-main-toggle">
                    <i class="icon-arrow-left8"></i>
                </a>
                <span class="font-weight-semibold">Navigation</span>
                <a href="#" class="sidebar-mobile-expand">
                    <i class="icon-screen-full"></i>
                    <i class="icon-screen-normal"></i>
                </a>
            </div>
            <!-- /sidebar mobile toggler -->


            <!-- Sidebar content -->
            <div class="sidebar-content">

                <!-- User menu -->
                <div class="sidebar-user-material">
                    <div class="sidebar-user-material-body">
                        
                        <div class="card-body text-center">
                            <a href="#">
                                <img src="{{ URL::asset('global_assets1/images/placeholders/placeholder.jpg')}}"
                                    class="img-fluid rounded-circle shadow-1 mb-3" width="80" height="80"
                                    alt="">
                            </a>
                            <h6 class="mb-0 text-white text-dark">Abdul Ahad</h6>
                            <span class="font-size-sm text-white text-dark">Mirpur 2 , Dhaka</span>
                        </div>

                        <div class="sidebar-user-material-footer">
                            <a href="#user-nav"
                                class="d-flex justify-content-between align-items-center text-shadow-dark dropdown-toggle"
                                data-toggle="collapse"><span>My account</span></a>
                        </div>
                    </div>

                    <div class="collapse" id="user-nav">
                        <ul class="nav nav-sidebar">
                            <li class="nav-item">
                                <a href="#" class="nav-link">
                                    <i class="icon-user-plus"></i>
                                    <span>My profile</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="#" class="nav-link">
                                    <i class="icon-coins"></i>
                                    <span>My balance</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="#" class="nav-link">
                                    <i class="icon-comment-discussion"></i>
                                    <span>Messages</span>
                                    <span class="badge bg-teal-400 badge-pill align-self-center ml-auto">58</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="#" class="nav-link">
                                    <i class="icon-cog5"></i>
                                    <span>Account settings</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="#" class="nav-link">
                                    <i class="icon-switch2"></i>
                                    <span>Logout</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <!-- /user menu -->


                <!-- Main navigation -->
                <div class="card card-sidebar-mobile">
                    <ul class="nav nav-sidebar" data-nav-type="accordion">

                        <!-- Main -->
                        <li class="nav-item-header">
                            <div class="text-uppercase font-size-xs line-height-xs">Main</div> <i class="icon-menu"
                                title="Main"></i>
                        </li>
                        <li class="nav-item">
                            <a href="index.html" class="nav-link">
                                <i class="icon-home4"></i>
                                <span>
                                    Dashboard
                                    <span class="d-block font-weight-normal opacity-50">No active orders</span>
                                </span>
                            </a>
                        </li>
                        <li class="nav-item nav-item-submenu">
                            <a href="#" class="nav-link"><i class="icon-copy"></i> <span>Product</span></a>

                            <ul class="nav nav-group-sub" data-submenu-title="Layouts">
                                <li class="nav-item"><a href="{{route('admin.index')}}"
                                        class="nav-link">Product Show</a></li>
                                <li class="nav-item"><a href="{{route('admin.create')}}"
                                        class="nav-link">Add Product</a></li>
                                <li class="nav-item"><a href="{{route('admin.order.list')}}"
                                        class="nav-link">Order product</a></li>
                                <li class="nav-item"><a href="../../../../layout_6/LTR/material/full/index.html"
                                        class="nav-link disabled"> Layout  <span
                                            class="badge bg-transparent align-self-center ml-auto">Coming
                                            soon</span></a></li>
                            </ul>
                        </li>
                        <li class="nav-item nav-item-submenu">
                            <a href="#" class="nav-link"><i class="icon-copy"></i> <span>Category</span></a>

                            <ul class="nav nav-group-sub" data-submenu-title="Layouts">
                                <li class="nav-item"><a href="{{route('admin.category.index')}}"
                                        class="nav-link">Category Show</a></li>
                                <li class="nav-item"><a href="{{route('admin.category.create')}}"
                                        class="nav-link">Add Category</a></li>
                                
                                <li class="nav-item"><a href="../../../../layout_6/LTR/material/full/index.html"
                                        class="nav-link disabled"> Layout  <span
                                            class="badge bg-transparent align-self-center ml-auto">Coming
                                            soon</span></a></li>
                            </ul>
                        </li>
                        
                        
                    </ul>
                    
                </div>
                
            </div>
        </div>
        <!-- Main content -->
<div class="content-wrapper">

<!-- Page header -->
<div class="page-header page-header-light">
    <div class="page-header-content header-elements-md-inline">
        <div class="page-title d-flex">
            <h4><i class="icon-arrow-left52 mr-2"></i> <span class="font-weight-semibold">Home</span> - Dashboard</h4>
            <a href="#" class="header-elements-toggle text-default d-md-none"><i class="icon-more"></i></a>
        </div>

        <div class="header-elements d-none">
            <div class="d-flex justify-content-center">
                <a href="#" class="btn btn-link btn-float font-size-sm font-weight-semibold text-default">
                    <i class="icon-bars-alt text-pink-300"></i>
                    <span>Statistics</span>
                </a>
                <a href="#" class="btn btn-link btn-float font-size-sm font-weight-semibold text-default">
                    <i class="icon-calculator text-pink-300"></i>
                    <span>Invoices</span>
                </a>
                <a href="#" class="btn btn-link btn-float font-size-sm font-weight-semibold text-default">
                    <i class="icon-calendar5 text-pink-300"></i>
                    <span>Schedule</span>
                </a>
            </div>
        </div>
    </div>

    <div class="breadcrumb-line breadcrumb-line-light header-elements-md-inline">
        <div class="d-flex">
            <div class="breadcrumb">
                <a href="index.html" class="breadcrumb-item"><i class="icon-home2 mr-2"></i> Home</a>
                <span class="breadcrumb-item active">Dashboard</span>
            </div>

            <a href="#" class="header-elements-toggle text-default d-md-none"><i class="icon-more"></i></a>
        </div>

        <div class="header-elements d-none">
            <div class="breadcrumb justify-content-center">
                <a href="#" class="breadcrumb-elements-item">
                    <i class="icon-comment-discussion mr-2"></i>
                    Support
                </a>

                <div class="breadcrumb-elements-item dropdown p-0">
                    <a href="#" class="breadcrumb-elements-item dropdown-toggle" data-toggle="dropdown">
                        <i class="icon-gear mr-2"></i>
                        Settings
                    </a>

                    <div class="dropdown-menu dropdown-menu-right">
                        <a href="#" class="dropdown-item"><i class="icon-user-lock"></i> Account security</a>
                        <a href="#" class="dropdown-item"><i class="icon-statistics"></i> Analytics</a>
                        <a href="#" class="dropdown-item"><i class="icon-accessibility"></i> Accessibility</a>
                        <div class="dropdown-divider"></div>
                        <a href="#" class="dropdown-item"><i class="icon-gear"></i> All settings</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- /page header -->


<!-- Content area -->
<div class="content">

    
{{ $slot }}

    

</div>
<!-- /content area -->


<x-(sg-footer)/>


</div>
<!-- /main content -->
</div>

<x-(sg-js) />

</body>

</html>

