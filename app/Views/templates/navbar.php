<header class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-0 shadow">
    <a class="navbar-brand col-md-3 col-lg-2 me-0 px-3" href="#">Crud Estudiantes</a>
    <button class="navbar-toggler position-absolute d-md-none collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <input class="form-control form-control-dark w-100" type="text" placeholder="Buscar" aria-label="Search">
    <!-- <ul class="navbar-nav px-3">
    <li class="nav-item text-nowrap">
    <a class="nav-link" href="">Cerrar Sesión</a>
    </li>
</ul> -->
    <nav class="navbar-nav navbar-expand-md navbar-dark bg-dark px-3">
        <div class="container-fluid">
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item dropdown text-nowrap">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            <?php echo session('user') ?>
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="<?php echo base_url('/logout') ?>">Salir</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</header>