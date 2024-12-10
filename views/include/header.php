<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Novatec</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">

    <link rel="stylesheet" href="<?php echo BASE_URL ?>views/plantilla/css/style.css">
    <link rel="icon" href="img/Pes...ico">
    <script>
        const base_url = '<?php echo BASE_URL; ?>';
    </script>

</head>
<script src="https://kit.fontawesome.com/f244ab63ac.js" crossorigin="anonymous"></script>

<body>

    <div class="container-fluid p-0 ">
        <nav class="navbar navbar-dark fixed-top" style="background-color:#413FB6; min-height:150px;">
            <div class="container-fluid">
                <!-- Logo -->
                <a class="navbar-brand d-none d-lg-block" href="<?php echo BASE_URL; ?>index">
                    <img src="./views/plantilla/img/logo.png" alt="Logo" width="350" height="100" class="d-inline-block align-top">
                </a>

                <!-- Botón hamburguesa -->
                <button class="navbar-toggler order-0" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasDarkNavbar" aria-controls="offcanvasDarkNavbar">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <!-- Contenedor principal de elementos -->
                <div class="d-flex flex-grow-1 justify-content-end align-items-center gap-3">
                    <!-- Barra de búsqueda -->
                    <div class="d-none d-md-block flex-grow-1 mx-4">
                        <form class="d-flex">
                            <input class="form-control me-2" type="search" placeholder="¿Qué estás buscando?" aria-label="Search">
                            <button class="btn btn-outline-light" type="submit">Buscar</button>
                        </form>
                    </div>

                    <!-- Iconos de navegación -->
                    <div class="d-flex align-items-center gap-3">
                        <!-- Favoritos -->
                        <a href="<?php echo BASE_URL ?>favoritos" class="text-white">
                            <i class="fas fa-bookmark fa-lg"></i>
                        </a>

                        <!-- Usuario Dropdown -->
                        <div class="dropdown">
                            <a class="text-white position-relative px-2" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                <i class="fas fa-user fa-lg"></i>
                            </a>
                            <div class="dropdown-menu dropdown-menu-end shadow-sm mt-2 position-absolute" style="min-width: 200px;">
                                <!-- Triángulo usando Font Awesome -->
                                <div class="position-absolute top-0 start-50 translate-middle-x text-white">
                                    <i class="fas fa-caret-up fa-2x" style="margin-top: -16px;"></i>
                                </div>

                                <button class="btn btn-light d-flex align-items-center gap-2">
                                    <i class="fas fa-user"></i>
                                    <?php echo $_SESSION['sesion_ventas_nombres'] ?>
                                </button>

                                <a class="dropdown-item py-2" href="<?php echo BASE_URL ?>login">
                                    <i class="fas fa-sign-in-alt me-2"></i>Iniciar Sesión
                                </a>

                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item py-2" href="<?php echo BASE_URL ?>Admin">
                                    <i class="fas fa-user-circle me-2"></i>Panel Admin
                                </a>
                            </div>
                        </div>

                        <!-- Carrito -->
                        <a href="<?php echo BASE_URL ?>carrito" class="text-white position-relative">
                            <i class="fas fa-shopping-cart fa-lg"></i>
                            <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger">
                                0
                                <span class="visually-hidden">productos en carrito</span>
                            </span>
                        </a>

                        <!-- Cerrar Sesión -->
                        <a href="#" onclick="cerrar_sesion();" class="text-white text-decoration-none d-none d-md-block">
                            <i class="fas fa-sign-out-alt"></i>
                            <span class="ms-1">Cerrar Sesión</span>
                        </a>

                    </div>
                </div>

                <!-- Offcanvas Menu -->
                <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasDarkNavbar">
                    <div class="offcanvas-header " style="background-color:#413FB6">
                        <h5 class="offcanvas-title text-white">Menú</h5>
                        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                    </div>
                    <div class="offcanvas-body">
                        <!-- Barra de búsqueda móvil -->
                        <div class="d-md-none mb-3">
                            <form class="d-flex">
                                <input class="form-control me-2" type="search" placeholder="¿Qué estás buscando?" aria-label="Search">
                                <button class="btn btn-outline-primary" type="submit">Buscar</button>
                            </form>
                        </div>

                        <h6 class="text-uppercase fw-bold mb-3">Categorías</h6>
                        <ul class="navbar-nav">
                            <li class="nav-item">
                                <a class="nav-link text-dark" href="<?php echo BASE_URL ?>producto">Celulares</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link text-dark" href="<?php echo BASE_URL ?>producto3">Laptops</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link text-dark" href="<?php echo BASE_URL ?>producto2">Accesorios</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link text-dark" href="<?php echo BASE_URL ?>contacto">Contáctanos</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link text-dark" href="<?php echo BASE_URL ?>nosotros">Nosotros</a>
                            </li>
                            <!-- Cerrar Sesión en móvil -->
                            <li class="nav-item d-md-none">
                                <a class="nav-link text-dark" href="#" onclick="cerrar_sesion();">
                                    <i class="fas fa-sign-out-alt me-2"></i>Cerrar Sesión
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </nav>