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
                        <a>
                            <i class="fa fa-h-square"></i> Citas e Historias <span class="fa fa-chevron-down"></span>
                        </a>
                        <ul class="nav child_menu">
                            <li>
                                <a href="{{ route('citas.index') }}">Citas Medica</a>
                            </li>
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