<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title') - {{ session('sitename') }} - Admin Area</title>

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}" />

    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet" />
    <script src="{{ asset('js/jquery-1.10.2.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>

    @yield('head')
</head>
<body>
    <!-- Powered by DigiOz PHP Portal -->
    <!-- For more information visit http://www.digioz.com -->
    <div class="container">
        <div style="padding-left:20px;"><h1 style="position:absolute; top:20px;">{{ session('sitename') }} Admin Area</h1><br /><br /></div>
    </div>
    <p>&nbsp;</p>
    <p>&nbsp;</p>
    <!-- Fixed navbar -->
    <div class="navbar navbar-inverse">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
            </div>
            <div class="navbar-collapse collapse">
                <ul class="nav navbar-nav">
                    <li class="active"><a href="{{ route('admin.index') }}">Dashboard</a></li>
                    <li class="active"><a href="{{ route('home') }}" target="_blank">Home</a></li>
                </ul>
            </div>
        </div>
    </div>

    <div class="container theme-showcase" style="padding:0px;">
        <div class="col-sm-3">

            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">Menu</h3>
                </div>
                <div class="panel-body">
                    <ul>

                        <li class="active"><a href="{{ route('admin.index') }}">Dashboard</a></li>
                        <li class="active"><a href="{{ route('pagemanager.index') }}">Page Manager</a></li>
                        <li class="active"><a href="{{ route('configurationmanager.index') }}">Configuration</a></li>
                        <li class="active"><a href="{{ route('databaseutilities.index') }}">Database Utilities</a></li>
                        <li class="active"><a href="{{ route('filemanager.index') }}">File Manager</a></li>
                        <li class="active"><a href="{{ route('pluginmanager.index') }}">Plugin Manager</a></li>
                        <li class="active">Forum Manager</li>
                        <li class="active"><a href="{{ route('pollmanager.index') }}">Poll Manager</a></li>
                        <li class="active"><a href="{{ route('statisticsmanager.index') }}">Statistics</a></li>
                        <li class="active"><a href="{{ route('menumanager.index') }}">Menu Manager</a></li>
                        <li class="active"><a href="{{ route('usermanager.index') }}">User Manager</a></li>
                        <li class="active"><a href="{{ route('userrolemanager.index') }}">User Role Manager</a></li>
                        <li class="active"><a href="{{ route('announcementmanager.index') }}">Announcements</a></li>
                        <li class="active"><a href="{{ route('picturemanager.index') }}">Picture Manager</a></li>
                        <li class="active"><a href="{{ route('videomanager.index') }}">Video Manager</a></li>
                        <li class="active"><a href="{{ route('linkmanager.index') }}">Link Manager</a></li>
                        <li class="active"><a href="{{ route('chatmanager.index') }}">Chat Manager</a></li>
                        <li class="active"><a href="{{ route('productmanager.index') }}">Product Manager</a></li>
                        <li class="active"><a href="{{ route('productcategorymanager.index') }}">Product Category Manager</a></li>
                        <li class="active"><a href="{{ route('ordermanager.index') }}">Order Manager</a></li>
                        <li class="active"><a href="{{ route('mailinglist.index') }}">Mailing List</a></li>
                        <li class="active"><a href="{{ route('modulemanager.index') }}">Module Manager</a></li>
                        <li class="active"><a href="{{ route('slideshowmanager.index') }}">Slide Show Manager</a></li>
                        <li class="active"><a href="{{ route('commentmanager.index') }}">Comment Manager</a></li>
                    </ul>
                </div>
            </div>

            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">User</h3>
                </div>
                <div class="panel-body">
                    <!-- Authentication Links -->
                    @guest
                    <li>
                        <a href="{{ route('login') }}">Login</a>
                    </li>
                    <li>
                        <a href="{{ route('register') }}">Register</a>
                    </li>
                    @else
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                            {{ Auth::user()->name }}
                            <span class="caret"></span>
                        </a>
                        <ul class="dropdown-menu" role="menu">
                            <li>
                                <a href="{{ route('logout') }}"
                                   onclick="event.preventDefault();
                                        document.getElementById('logout-form').submit();">
                                    Logout
                                </a>
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    {{csrf_field() }}
                                </form>
                            </li>
                        </ul>
                    </li>
                    @endguest
                </div>
            </div>
        </div>
        <div class="col-sm-9">
            @yield('featured')
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">@yield('title')</h3>
                </div>
                <div class="panel-body">
                    @yield('content')
                </div>
            </div>
        </div>
    </div> <!-- /container -->

    <div class="navbar navbar-inverse">
        <div class="container">
            <div style="padding-top:10px;width:100%;text-align:center;">
                <p><a href="/home" style="color:#FFFFFF;padding-top:20px;">&copy; {{date('Y') }} {{ session('sitename') }}</a></p>
            </div>
        </div>
    </div>
    @yield('scripts')
</body>
</html>
