<div class="col-md-3 left_col">
    <div class="left_col scroll-view">
        <div class="navbar nav_title" style="border: 0;">
            <a href="{{ url('/') }}" class="site_title">
                <i class="fa fa-graduation-cap"></i>
                <span>U M</span>
            </a>
        </div>

        <div class="clearfix"></div>
        <!-- menu profile quick info -->
        <div class="profile">
            <div class="profile_pic">
                <img src="{{ Gravatar::src(Auth::user()->email) }}" alt="Avatar of {{ Auth::user()->name }}" class="img-circle profile_img">
            </div>
            <div class="profile_info">
                <span>En linea,</span>
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
                        <a href="{{url('/')}}">
                            <i class="fa fa-home"></i>
                            Inicio
                        </a>
                    </li>
                    <li>
                        <a>
                            <i class="fa fa-graduation-cap"></i> Planteles
                            <span class="fa fa-chevron-down"></span>
                        </a>
                        <ul class="nav child_menu">
                            <li>
                                <a href="{{url('/campus/campus')}}">Plantel</a>
                            </li>
                            <li>
                                <a href="form_advanced.html">Asignaturas</a>
                            </li>
                            <li>
                                <a href="form_validation.html">Carreras</a>
                            </li>
                            <li>
                                <a href="form_wizards.html">Grupos</a>
                            </li>
                            <li>
                                <a href="form_upload.html">Planes</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a>
                            <i class="fa fa-book"></i> Alumnos
                            <span class="fa fa-chevron-down"></span>
                        </a>
                        <ul class="nav child_menu">
                            <li>
                                <a href="{{url('/school/student')}}">Alumnos</a>
                            </li>
                            <li>
                                <a href="media_gallery.html">Escuelas de procedencia</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a>
                            <i class="fa fa-laptop"></i> Control Escolar
                            <span class="fa fa-chevron-down"></span>
                        </a>
                        <ul class="nav child_menu">
                            <li>
                                <a href="{{url('/school/teacher')}}">Profesores</a>
                            </li>
                            <li>
                                <a href="tables_dynamic.html">Asignación de clases</a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
            <div class="menu_section">
                <h3>GESTIÓN DEL SISTEMA</h3>
                <ul class="nav side-menu">
                    <li>
                        <a>
                            <i class="fa fa-user-plus"></i> Usuarios
                            <span class="fa fa-chevron-down"></span>
                        </a>
                        <ul class="nav child_menu">
                            <li>
                                <a href="e_commerce.html">E-commerce</a>
                            </li>
                            <li>
                                <a href="projects.html">Projects</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a>
                            <i class="fa fa-lock"></i> Roles
                            <span class="fa fa-chevron-down"></span>
                        </a>
                        <ul class="nav child_menu">
                            <li>
                                <a href="page_403.html">403 Error</a>
                            </li>
                            <li>
                                <a href="page_404.html">404 Error</a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>

        </div>
        <!-- /sidebar menu -->

        <!-- /menu footer buttons -->
        <div class="sidebar-footer hidden-small">
            <a data-toggle="tooltip" data-placement="top" title="Settings">
                <span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
            </a>
            <a data-toggle="tooltip" data-placement="top" title="FullScreen">
                <span class="glyphicon glyphicon-fullscreen" aria-hidden="true"></span>
            </a>
            <a data-toggle="tooltip" data-placement="top" title="Lock">
                <span class="glyphicon glyphicon-eye-close" aria-hidden="true"></span>
            </a>
            <a data-toggle="tooltip" data-placement="top" title="Logout" href="{{ url('/logout') }}">
                <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
            </a>
        </div>
        <!-- /menu footer buttons -->
    </div>
</div>