<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>CIS-355 Semester Project</title>

    <!-- jQuery -->
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>

    <!-- Bootstrap Files -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>

    <!-- MetisMenu CSS -->
    <link href="/bower_components/metisMenu/dist/metisMenu.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="/dist/css/sb-admin-2.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="/bower_components/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- Metis Menu Plugin JavaScript -->
    <script src="/bower_components/metisMenu/dist/metisMenu.min.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="/dist/js/sb-admin-2.js"></script>

    <!-- DataTables JavaScript -->
    <script src="/bower_components/datatables/media/js/jquery.dataTables.min.js"></script>
    <script src="/bower_components/datatables-plugins/integration/bootstrap/3/dataTables.bootstrap.min.js"></script>

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body>
    <div id="wrapper">
        <!-- Navigation -->
        <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="{{ route('dnd.index') }}">5th Edition D&D Resources</a>
            </div>
            <!-- /.navbar-header -->

            <ul class="nav navbar-top-links navbar-right">
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-user fa-fw"></i> Admin <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-user">
                        @if(userIsAdmin())
                            <li><a href="{{ route('function.logout') }}"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
                        @else
                            <li><a href="{{ route('dnd.login') }}"><i class="fa fa-sign-out fa-fw"></i> Login</a>
                        </li>
                        @endif
                    </ul>
                    <!-- /.dropdown-user -->
                </li>
            </ul>

            <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">
                        <li>
                            <a href="{{ route('dnd.index') }}"><i class="fa fa-star fa-fw"></i> Home Page</a>
                        </li>
                        <li>
                            <a href="{{ route('dnd.rules') }}"><i class="fa fa-book fa-fw"></i> Basic Rules</a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-pencil fa-fw"></i> Races<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                @foreach($races as $race)
                                    <li>
                                        <a href="{{ route('dnd.race', $race->race_name) }}">{{ $race->race_name }}</a>
                                    </li>
                                @endforeach
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-pencil fa-fw"></i> Classes<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                @foreach($classes as $class)
                                    <li>
                                        <a href="{{ route('dnd.class', $class->class_name) }}">{{ $class->class_name }}</a>
                                    </li>
                                @endforeach
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                        <li>
                            <a href="{{ route('dnd.items') }}"><i class="glyphicon glyphicon-th-list"></i> Magic Item List</a>
                        </li>
                        <li>
                            <a href="{{ route('dnd.spells') }}"><i class="glyphicon glyphicon-th-list"></i> Spell List</a>
                        </li>
                        <li>
                            <a href="{{ route('dnd.monsters') }}"><i class="glyphicon glyphicon-th-list"></i> Monster List</a>
                        </li>
                        <li>
                            <a href="{{ route('dnd.homebrew') }}"><i class="fa fa-edit fa-fw"></i> Submit Homebrew</a>
                        </li>
                    </ul>
                </div>
                <!-- /.sidebar-collapse -->
            </div>
            <!-- /.navbar-static-side -->
        </nav>

        <!-- Page Content -->
        <div id="page-wrapper">
            <div class="container-fluid">
                <!-- start of page content -->
                @yield('content')




                <br>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

</body>

</html>
