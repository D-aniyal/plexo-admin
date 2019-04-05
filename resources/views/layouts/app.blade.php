<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <base href="/">
    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link href="{{ asset('font-awesome/css/font-awesome.css') }}" rel="stylesheet">

    <!-- Bootstrap -->
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">

    <!-- DataTable -->
    <link href="{{ asset('css/plugins/dataTables/datatables.min.css') }}" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/animate.css') }}" rel="stylesheet">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">

    @stack('styles')
</head>
<body>
    <div id="app">
        <div id="wrapper">
            <nav class="navbar-default navbar-static-side" role="navigation">
                <div class="sidebar-collapse">
                    <ul class="nav metismenu" id="side-menu">
                        <li class="nav-header">
                            <div class="dropdown profile-element">
                                <span><img alt="image" class="img-circle" src="{{ asset('img/profile_small.jpg') }}"/></span>
                                <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                                    <span class="clear"> <span class="block m-t-xs"> <strong class="font-bold">{{ Auth::user()->name }}</strong>
                                    </span> <span class="text-muted text-xs block">Admin <b class="caret"></b></span> </span>
                                </a>
                                <ul class="dropdown-menu animated fadeInRight m-t-xs">
                                    <li><a href="#">Profile</a></li>
                                    <li><a href="#">Contacts</a></li>
                                    <li><a href="#">Mailbox</a></li>
                                    <li class="divider"></li>
                                    <li><a href="{{ route('logout') }}" onclick="event.preventDefault();
                                    document.getElementById('logout-form').submit();">{{ __('Logout') }}</a></li>
                                </ul>
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">@csrf</form>
                            </div>
                            <div class="logo-element">BS</div>
                        </li>
                        <li class="active">
                            <a href="#"><i class="fa fa-th-large"></i> <span class="nav-label">Dashboards</span> </a>
                            {{--<ul class="nav nav-second-level"> <span class="fa arrow"></span>--}}
                                {{--<li><a href="#">Dashboard v.1</a></li>--}}
                            {{--</ul>--}}
                        </li>
                        <li>
                            <a href="{{ route('platforms') }}"><i class="fa fa-diamond"></i> <span class="nav-label">Platforms</span></a>
                        </li>
                    </ul>

                </div>
            </nav>

            <div id="page-wrapper" class="gray-bg">
                <div class="row border-bottom">
                    <nav class="navbar navbar-static-top white-bg" role="navigation" style="margin-bottom: 0">
                        <div class="navbar-header">
                            <a class="navbar-minimalize minimalize-styl-2 btn btn-primary" href="#"><i class="fa fa-bars"></i> </a>
                        </div>
                        <ul class="nav navbar-top-links navbar-right">
                            <li>
                                <span class="m-r-sm text-muted welcome-message">Welcome {{ Auth::user()->first_name }}.</span>
                            </li>

                            <!-- messages and notification dropdown html here -->

                            <li>
                                <a href="{{ route('logout') }}" onclick="event.preventDefault();
                                    document.getElementById('logout-form').submit();"><i class="fa fa-sign-out"></i> {{ __('Logout') }}</a>
                            </li>
                            <!-- right sidebar toggle li here -->
                        </ul>

                    </nav>
                </div>

                    @yield('content')

                <div class="footer">
                    <div class="pull-right">
                        10GB of <strong>250GB</strong> Free.
                    </div>
                    <div>
                        <strong>Copyright</strong> Example Company &copy; 2014-2015
                    </div>
                </div>
            </div>

            <!-- right sidebar html here -->
        </div><!--/. wrapper -->
    </div><!--/. app -->

    <!-- Mainly scripts -->
    <script src="{{ asset('js/jquery-2.1.1.js') }}"></script>
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('js/plugins/metisMenu/jquery.metisMenu.js') }}"></script> <!-- Create a collapsible menu -->
    <script src="{{ asset('js/plugins/slimscroll/jquery.slimscroll.min.js') }}"></script> <!-- Transforms any div into a scrollable -->

    <!-- DataTable -->
    <script src="{{ asset('js/plugins/dataTables/datatables.min.js') }}"></script>

    <!-- Custom and plugin javascript -->
    <script src="{{ asset('js/inspinia.js') }}"></script>
    <script src="{{ asset('js/plugins/pace/pace.min.js') }}"></script> <!-- PACE — Automatic page load progress bars -->

    @stack('scripts')
</body>
</html>
