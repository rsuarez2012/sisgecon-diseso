<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>
    


    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/custom.css') }}" rel="stylesheet">
    <link href="{{ asset('css/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/select2.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/bootstrap-datepicker/css/bootstrap-datepicker.css') }}" rel="stylesheet">
    <link href="{{ asset('css/jquery.dataTables.min.css') }}" rel="stylesheet" type="text/css" />
    
</head>
<!--<body>-->
<body class="nav-md">
    <div class="container body">
      <div class="main_container">
        <div class="col-md-3 left_col menu-fixed">
          <div class="left_col scroll-view">
            <div class="navbar nav_title" style="border: 0;">
              <a href="index.html" class="site_title"><i class="fa fa-paw"></i> <span>{{ config('app.name', 'Laravel') }}!</span></a>
            </div>

            <div class="clearfix"></div>

            <!-- menu profile quick info -->
            <div class="profile clearfix">
              <div class="profile_pic">
                <img src="images/img.jpg" alt="..." class="img-circle profile_img">
              </div>
              <div class="profile_info">
                <span>Bienvenido,</span>
                <h2>{{ Auth::user()->name }}</h2>
              </div>
            </div>
            <!-- /menu profile quick info -->

            <br />

            <!-- sidebar menu -->
            <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
              <div class="menu_section">

                <h3>General</h3>
                <ul class="nav side-menu">
                    <li>
                        <a>
                            <i class="fa fa-home"></i> 
                            Dashboard                             
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('titulares.index') }}">
                            <i class="fa fa-users"></i>Titulares
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('beneficiarios.index') }}">
                            <i class="fa fa-users"></i>Beneficiarios</a>
                    </li>
                    <li>
                        <a href="{{ route('dependencias.index') }}">
                            <i class="fa fa-institution"></i>Dependencias</a>
                    </li>
                    <li>
                        <a>
                            <i class="fa fa-h-square"></i> Historias Y Reposos <span class="fa fa-chevron-down"></span>
                        </a>
                        <ul class="nav child_menu">
                            <li>
                                <a href="{{ route('historias.index') }}">Historias Medica</a>
                            </li>
                            <li>
                                <a href="{{ route('historia_ocupacional.index') }}">Historia Ocupacional</a>
                            </li>
                            <li>
                                <a href="{{ route('reposos.index') }}">Reposos</a>
                            </li>
                        </ul>
                    </li> 
                    <li>
                        <a>
                            <i class="fa fa-user"></i>Usuarios
                            <span class="fa fa-chevron-down"></span>

                        </a>
                        <ul class="nav child_menu">
                          <li>
                            <a href="{{ route('usuarios.index') }}">Usuarios</a>
                          </li>
                          <li>
                              <a href="{{ route('register') }}">
                                  Nuevo Usuario
                              </a>
                          </li>
                        </ul>
                    </li>   
                    <li></li>
                    <li></li>        
                </ul>
              </div>
            </div>
            <div class="sidebar-footer hidden-small">

            </div>
          </div>
        </div>

        <!-- top navigation -->
        <div class="top_nav">
          <div class="nav_menu">
            <nav>
              <div class="nav toggle">
                <a id="menu_toggle"><i class="fa fa-bars"></i></a>
              </div>
            
              <ul class="nav navbar-nav navbar-right">
                @guest
                    <li><a href="{{ route('login') }}">Login</a></li>
                    <li><a href="{{ route('register') }}">Register</a></li>
                @else
                    <li class="">
                      <a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                        <img src="images/img.jpg" alt="">  {{ Auth::user()->name }}
                        <span class=" fa fa-angle-down"></span>
                      </a>
                      <ul class="dropdown-menu dropdown-usermenu pull-right">
                        <!--<li><a href="javascript:;"> Profile</a></li>--> 
                        <li>
                            
                                <a href="{{ route('logout') }}"
                                onclick="event.preventDefault();
                                         document.getElementById('logout-form').submit();">
                                <i class="fa fa-sign-out pull-right"></i>Logout
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                {{ csrf_field() }}
                            </form>
                        </li>                   
                    @endguest
                  </ul>
                </li>

              </ul>
            </nav>
          </div>
        </div>
        <!-- /top navigation -->

        <!-- page content -->
        <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                @php $path = explode('/',Request::path()) @endphp 
                               
                <h3>{{ strtoupper(title_case($path[0])) }}</h3>
              </div>

              <div class="title_right">
                
              </div>
            </div>

            <div class="clearfix"></div>

            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <div class="container">
                      <div class="row">
                          <div class="col-md-12 col-md-offset-0">
                              @if(session('info'))
                                  <div class="alert alert-success">
                                    <i class="fa fa-check"></i>
                                      {{ session('info') }}
                                  </div>
                              @endif                    
                          </div>
                          @if(count($errors))            
                              <div class="col-md-10 col-md-offset-1">
                                  <div class="alert alert-danger">
                                     <i class="fa fa-exclamation-circle"></i>
                                      <ul>
                                          @foreach($errors->all() as $error)
                                          <li>{{ $error }}</li>
                                          @endforeach
                                      </ul>
                                  </div>
                              </div>          
                          @endif
                      </div>
                    </div>
                    @yield('content')
                    
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- /page content -->

        <!-- footer content -->
        <footer>
          <div class="pull-right">
            Sistema Desarrollado por Ing Raul Suarez UNERG
          </div>
          <div class="clearfix"></div>
        </footer>
        <!-- /footer content -->
      </div>
    </div>
            
    

    <!--<div id="app">
        <nav class="navbar navbar-default navbar-static-top">
            <div class="container">
                <div class="navbar-header">

                    
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse" aria-expanded="false">
                        <span class="sr-only">Toggle Navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>

                   
                    <a class="navbar-brand" href="{{ url('/') }}">
                        {{ config('app.name', 'Laravel') }}
                    </a>
                </div>

                <div class="collapse navbar-collapse" id="app-navbar-collapse">
                    
                    <ul class="nav navbar-nav">
                        &nbsp;
                    </ul>

                    
                    <ul class="nav navbar-nav navbar-right">
                        
                        @guest
                            <li><a href="{{ route('login') }}">Login</a></li>
                            <li><a href="{{ route('register') }}">Register</a></li>
                        @else
                            <li><a href="{{ route('titulares.index') }}">Titulares</a></li>
                            <li><a href="{{ route('beneficiarios.index') }}">Beneficiarios</a></li>
                            <li><a href="{{ route('dependencias.index') }}">Dependencias</a></li>
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" aria-haspopup="true">Historias <span class="caret"></span>
                                </a>
                                <ul class="dropdown-menu">
                                    <li>
                                        <a href="{{ route('historias.index') }}">Historias Medica</a>
                                    </li>
                                    <li>
                                        <a href="{{ route('historia_ocupacional.index') }}">Historia Ocupacional</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" aria-haspopup="true">
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>-->

                               <!-- <ul class="dropdown-menu">
                                    <li>
                                        <a href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            Logout
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </li>
                                </ul>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-md-offset-0">
                    @if(session('info'))
                        <div class="alert alert-success">
                            {{ session('info') }}
                        </div>
                    @endif                    
                </div>
                @if(count($errors))            
                    <div class="col-md-10 col-md-offset-1">
                        <div class="alert alert-danger">
                            <ul>
                                @foreach($errors->all() as $error)
                                <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    </div>          
                @endif
            </div>
        </div>
        <!--yield('content')-->
    </div>

    <!-- Scripts -->
    <!--<script src="http://code.jquery.com/jquery-3.3.1.js"
              integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60="
              crossorigin="anonymous"></script>-->
    <script src="{{ asset('js/jquery-2.0.3.min.js') }}"></script>
    <script src="{{ asset('js/jquery.js') }}"></script>

    @yield('scripts')



    <script src="{{ asset('js/app.js') }}"></script>
    <script src="{{ asset('js/custom.js') }}"></script>
    <script src="{{ asset('js/jquery.js') }}"></script>
    <script src="{{ asset('js/bootstrap-datepicker.js') }}"></script>
    <script src="{{ asset('js/select2.min.js') }}"></script>
    <script src="{{ asset('js/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('js/actions.js') }}"></script>

    

</body>
</html>
