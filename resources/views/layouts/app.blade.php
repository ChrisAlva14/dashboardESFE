<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <link rel="shortcut icon"
        href="https://scontent-mia3-2.xx.fbcdn.net/v/t39.30808-6/218245011_4682196735142604_2043222367202137883_n.png?_nc_cat=102&ccb=1-7&_nc_sid=6ee11a&_nc_ohc=HV52RTHQzQYQ7kNvgGBdWP0&_nc_ht=scontent-mia3-2.xx&oh=00_AYD13Yis_l8FNRHx83PL_PWbnF_TAJvavv8rYogE3Aee6Q&oe=6682A96A"
        type="image/x-icon">
    <title>ESFE DASHBOARD</title>
    <link href="{{ asset('css/styles.css') }}" rel="stylesheet" />
    <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
</head>

<body>
    <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
        <!-- Navbar Brand-->
        <a class="navbar-brand ps-3" href="{{ route('home') }}">ESFE DASHBOARD</a>
        <!-- Sidebar Toggle-->
        <button class="btn btn-link btn-sm order-1 order-lg-0 me-4 me-lg-0" id="sidebarToggle" href="#!"><i
                class="fas fa-bars"></i></button>
        <!-- Navbar Search-->
        <form class="d-none d-md-inline-block form-inline ms-auto me-0 me-md-3 my-2 my-md-0">
            <div class="input-group">
                <input class="form-control" type="text" placeholder="Buscar..." aria-label="Search for..."
                    aria-describedby="btnNavbarSearch" />
                <button class="btn btn-primary" id="btnNavbarSearch" type="button"><i
                        class="fas fa-search"></i></button>
            </div>
        </form>
        <!-- Navbar-->
        <ul class="navbar-nav ms-auto ms-md-0 me-3 me-lg-4">
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button"
                    data-bs-toggle="dropdown" aria-expanded="false"><i class="fas fa-user fa-fw"></i></a>
                <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                    @if (auth()->check())
                        <li><a class="dropdown-item" href="{{ route('docentes.logout') }}">Cerrar Sesión</a></li>
                    @else
                        <li><a class="dropdown-item" href="{{ route('docentes.login') }}">Iniciar Sesión</a></li>
                        <li><a class="dropdown-item" href="{{ route('asistencias.marcar') }}">Marcar Asistencia</a></li>
                    @endif
                </ul>
            </li>
        </ul>
    </nav>
    <div id="layoutSidenav">
        <div id="layoutSidenav_nav">
            <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                <div class="sb-sidenav-menu">
                    <div class="nav">
                        @if (auth()->check())
                            <div class="sb-sidenav-menu-heading">Mantenimiento</div>
                            <a class="nav-link" href="{{ route('docentes.index') }}">
                                <div class="sb-nav-link-icon"><i class="fa-solid fa-person-chalkboard"></i></div>
                                Docentes
                            </a>
                            <a class="nav-link" href="{{ route('estudiantes.index') }}">
                                <div class="sb-nav-link-icon">
                                    <i class="fa-solid fa-user-group"></i>
                                </div>
                                Estudiantes
                            </a>
                            <a class="nav-link" href="{{ route('asistencias.index') }}">
                                <div class="sb-nav-link-icon">
                                    <i class="fa-solid fa-list-check"></i>
                                </div>
                                Asistencias
                            </a>
                            <a class="nav-link" href="{{ route('grupos.index') }}">
                                <div class="sb-nav-link-icon">
                                    <i class="fa-solid fa-users"></i>
                                </div>
                                Grupos
                            </a>
                            <a class="nav-link" href="{{ route('docentes_grupos.index') }}">
                                <div class="sb-nav-link-icon">
                                    <i class="fa-solid fa-people-group"></i>
                                </div>
                                Grupos de Docentes
                            </a>
                            <a class="nav-link" href="{{ route('estudiantes_grupos.index') }}">
                                <div class="sb-nav-link-icon">
                                    <i class="fa-solid fa-people-group"></i>
                                </div>
                                Grupos de Estudiantes
                            </a>
                        @endif
                    </div>
                </div>
            </nav>
        </div>
        <div id="layoutSidenav_content">
            <main>
                <div class="container-fluid px-4">
                    @yield('content')
                </div>
            </main>
            <footer class="py-4 bg-light mt-auto">
                <div class="container-fluid px-4">
                    <div class="d-flex align-items-center justify-content-between small">
                        <div class="text-muted">Derechos Reservados &copy; 2024</div>
                        <div>
                            <a href="#">Politica de Privacidad</a>
                            &middot;
                            <a href="#">Términos &amp; Condiciones</a>
                        </div>
                    </div>
                </div>
            </footer>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous">
    </script>
    <script src="{{ asset('js/scripts.js') }}"></script>
</body>

</html>