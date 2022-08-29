<script src="/assets/vendor/jquery/dist/jquery.min.js"></script>
<script src="/assets/vendor/jquery/dist/jquery.slim.min.js"></script>

<script src="/assets/vendor/select2/dist/js/select2.min.js"></script>
<link rel="stylesheet" href="/assets/vendor/select2/dist/css/select2.min.css">


<script src="/assets/vendor/sweetalert2/dist/sweetalert2.all.min.js"></script>
<link rel="stylesheet" href="/assets/vendor/sweetalert2/dist/sweetalert2.min.css">


<script src="/assets/vendor/datatables.net/js/jquery.dataTables.min.js"></script>

<link rel="stylesheet" href="/assets/vendor/datatables.net-bs4/css/dataTables.bootstrap4.min.css">
<script src="/assets/vendor/datatables.net-bs4/js/dataTables.bootstrap4.min.js"></script>


{{--  scripts end  --}}


<nav class="navbar navbar-vertical fixed-left navbar-expand-md navbar-light bg-white" id="sidenav-main">
    <div class="container-fluid">
        <!-- Toggler -->
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#sidenav-collapse-main" aria-controls="sidenav-main" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <!-- Brand -->
        <a class="navbar-brand pt-0" href="{{ route('home') }}">
            <img src="{{ asset('argon') }}/img/brand/blue.png" class="navbar-brand-img" alt="...">
        </a>
        <!-- User -->
        <ul class="nav align-items-center d-md-none">
            <li class="nav-item dropdown">
                <a class="nav-link" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <div class="media align-items-center">
                        <span class="avatar avatar-sm rounded-circle">
                        <img alt="Image placeholder" src="{{ asset('argon') }}/img/theme/team-1-800x800.jpg">
                        </span>
                    </div>
                </a>
                <div class="dropdown-menu dropdown-menu-arrow dropdown-menu-right">
                    <div class=" dropdown-header noti-title">
                        <h6 class="text-overflow m-0">{{ __('Welcome!') }}</h6>
                    </div>
                    <a href="{{ route('profile.edit') }}" class="dropdown-item">
                        <i class="ni ni-single-02"></i>
                        <span>{{ __('My profile') }}</span>
                    </a>
                    <a href="#" class="dropdown-item">
                        <i class="ni ni-settings-gear-65"></i>
                        <span>{{ __('Settings') }}</span>
                    </a>

                    <a href="#" class="dropdown-item">
                        <i class="ni ni-support-16"></i>
                        <span>{{ __('Support') }}</span>
                    </a>
                    <div class="dropdown-divider"></div>
                    <a href="{{ route('logout') }}" class="dropdown-item" onclick="event.preventDefault();
                    document.getElementById('logout-form').submit();">
                        <i class="ni ni-user-run"></i>
                        <span>{{ __('Logout') }}</span>
                    </a>
                </div>
            </li>
        </ul>
        <!-- Collapse -->
        <div class="collapse navbar-collapse" id="sidenav-collapse-main">
            <!-- Collapse header -->
            <div class="navbar-collapse-header d-md-none">
                <div class="row">
                    <div class="col-6 collapse-brand">
                        <a href="{{ route('home') }}">
                            <img src="{{ asset('argon') }}/img/brand/blue.png">
                        </a>
                    </div>
                    <div class="col-6 collapse-close">
                        <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#sidenav-collapse-main" aria-controls="sidenav-main" aria-expanded="false" aria-label="Toggle sidenav">
                            <span></span>
                            <span></span>
                        </button>
                    </div>
                </div>
            </div>
            <!-- Form -->

       <form class="mt-4 mb-3 d-md-none">
                <div class="input-group input-group-rounded input-group-merge">
                    <input type="search" class="form-control form-control-rounded form-control-prepended" placeholder="{{ __('Search') }}" aria-label="Search">
                    <div class="input-group-prepend">
                        <div class="input-group-text">
                            <span class="fa fa-search"></span>
                        </div>
                    </div>
                </div>
            </form>
            <!-- Navigation -->
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link @if($menu === 'dashboard') active @endif"  href="{{ route('home') }}">
                        <i class="ni ni-tv-2 text-primary"></i> {{ __('Dashboard') }}
                    </a>
                </li>



                </li>

            </ul>


            <hr class="my-3">
            <h6 class="navbar-heading text-muted">Admnistración</h6>
            <ul class="navbar-nav">


                <li class="nav-item">
                    <a class="nav-link" href="{{ route('logbook_index') }}">
                        <i class="ni ni-books text-primary"></i>Pagos
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('home') }}">
                        <i class="ni ni-single-02 text-primary"></i>Citas
                    </a>
                </li>

                </li>




                </li>

            </ul>



            </ul>

            <hr class="my-3">
            <h6 class="navbar-heading text-muted">Página principal</h6>
            <ul class="navbar-nav">


                <li class="nav-item">
                    <a class="nav-link" href="{{ route('logbook_index') }}">
                        <i class="ni ni-books text-primary"></i>Anuncios
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('home') }}">
                        <i class="ni ni-single-02 text-primary"></i>Talleres
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('home') }}">
                        <i class="fa fa-users text-primary" aria-hidden="true"></i>
                        Oferta educativa
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('home') }}">
                        <i class="fa fa-users text-primary" aria-hidden="true"></i>
                        Configuración general
                    </a>
                </li>



                </li>

            </ul>



            </ul>
            <!-- Navigation -->
            <!-- Divider -->
            <hr class="my-3">
            <!-- Heading -->
            <h6 class="navbar-heading text-muted">Complementos</h6>
            <!-- Navigation -->
            <ul class="navbar-nav">


                <li class="nav-item">
                    <a class="nav-link @if($menu === 'logbook') active @endif " href="{{ route('logbook_index') }}">
                        <i class="ni ni-books text-primary"></i>Bitácora
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link  @if($menu === 'role') active @endif " href="{{ route('role_index') }}">
                        <i class="ni ni-single-02 text-primary"></i>Roles
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link @if($menu === 'users_all') active @endif"  href="{{ route('users_all_index') }}">
                        <i class="fa fa-users text-primary" aria-hidden="true"></i>
                        Usuarios
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link @if($menu === 'menus') active @endif"  href="{{ route('menu_index') }}">
                        <i class="fa fa-bars text-primary" aria-hidden="true"></i>

                        Menus
                    </a>
                </li>



                </li>

            </ul>



            </ul>
            <hr class="my-3">
            <h6 class="navbar-heading text-muted">Reportes</h6>

        </div>
    </div>
</nav>
