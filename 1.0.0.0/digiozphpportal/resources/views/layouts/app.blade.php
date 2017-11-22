<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>@yield('title') - {{ session('sitename') }}</title>
    <meta name="keywords" content="DigiOz PHP Portal, CMS, Portal, Web Portal, PHP CMS" />
    <meta name="description" content="DigiOz PHP Portal is a web based portal system written using Laravel PHP Framework and MySQL Database to allows webmasters to setup and customize an instant website for either business or personal use." />
    
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('js/jquery-ui.min.css') }}" rel="stylesheet" />
    <script src="{{ asset('js/jquery-1.10.2.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('js/jquery-ui.min.js') }}"></script>
    @yield('head')
</head>
<body>
    <!-- Powered by DigiOz PHP Portal -->
    <!-- For more information visit http://www.digioz.com -->
    <div class="container">
        <div style="padding-left:20px;">
            <a href="/">
                <img src="{{asset('Content/images/Logo_Small.png') }}" alt="DigiOz Portal" />
            </a>
            <h1 style="position:absolute; top:20px;">&nbsp;</h1>
            <br />
            <br />
        </div>
    </div>
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
                @include('menus.topnav')
                <form class="navbar-form navbar-right" role="search" style="text-align: right;" action="/SearchPages">
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Search" name="searchString" />
                    </div>
                    <button type="submit" class="btn btn-default">Submit</button>
                </form>
            </div>
        </div>
    </div>
    <div class="container theme-showcase" style="padding: 0px;">
        <div class="col-sm-3">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">Menu</h3>
                </div>
                <div class="panel-body">
                    @include('menus.leftnav')
                </div>
            </div>
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">User</h3>
                </div>
                <div class="panel-body">
                    <ul>
                        @guest
                        <li>
                            <a href="{{ route('login') }}">Login</a>
                        </li>
                        <li>
                            <a href="{{ route('register') }}">Register</a>
                        </li>
                        @else
                        <li>
                            <a href="{{ route('logout') }}"
                                onclick="event.preventDefault();
                                    document.getElementById('logout-form').submit();">
                                Log off
                            </a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                {{csrf_field() }}
                            </form>
                        </li>
                        <li>
                            <a href="{{ route('profile.index') }}">My Profile</a>
                        </li>
                        <li>
                            <a href="{{ route('privatemessages.index') }}">Private Messages</a>
                        </li>
                        <li>
                            <a href="{{ route('changepassword') }}">Change Password</a>
                        </li>
                        @endguest
                        
                        @if(checkPermission(['Administrator']))
                            <li>
                                <a href="{{ route('admin.index') }}">Admin Dashboard</a>
                            </li>
                        @endif
                    </ul>
                    
                    <span style="padding-left:30px;">
                        @if(Auth::user())
                        Logged in as <a href="{{ route('profile.index') }}">{{{isset(Auth::user()->name) ? Auth::user()->name : Auth::user()->email }}}</a>.
                        @endif
                    </span>

                </div>
            </div>
            @include('menus.whoisonline')
            <!--<div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">Product Categories</h3>
                </div>
                <div class="panel-body">
                    <ul>
                        <li>
                            <a href="/Store/History">Order History</a>
                        </li>
                        <li>
                            <a href="/Store/ByCategory/f6cca3c9-7389-42d5-817a-9b81c3188344">Cars</a>
                        </li>
                    </ul>
                    <div style="text-align: center;">
                        <a href="/Store/List">
                            <img src="/Content/images/icons/64x64/shopping_cart.png" />
                        </a>
                    </div>
                </div>
            </div>
            div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">Polls</h3>
                </div>
                <div class="panel-body" style="margin-left: auto; margin-right: auto; float: none; width: 100%;">
                    <span style="font-weight: bold;">Best Car</span>
                    <img src="/PollCharts/Index/640cf199-73f2-49f9-96f0-a6e6013a55a3" style="width: 100%" />
                    <center>
                        <div class="btn btn-primary btn-xs" style="text-align: center;">
                            <a href="/PollCharts/AddPollVote/640cf199-73f2-49f9-96f0-a6e6013a55a3" style="color:#ffffff;">Add Vote</a>
                        </div>
                    </center>
                </div>
            </div>-->
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">Left Custom HTML Module</h3>
                </div>
                <div class="panel-body">
                    <p>This is a custom HTML Module for the left Zone.&nbsp;</p>
                </div>
            </div>
        </div>
        <div class="col-sm-9">
            @yield('content')
        </div>
    </div>
    <!-- /container -->
    <div class="navbar navbar-inverse">
        <div class="container">
            <div style="padding-top:10px;width:100%;text-align:center;">
                <p>
                    <a href="{{ route('home') }}" style="color:#FFFFFF;padding-top:20px;">&copy; {{ date('Y') }} {{ session('sitename') }}</a>
                </p>
            </div>
        </div>
    </div>
</body>
</html>