<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Celulares</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
		integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
	<link rel="stylesheet" href="<?php echo BASE_URL ?>views/plantilla/css/style.css">
    <link rel="stylesheet" href="<?php echo BASE_URL ?>views/plantilla/css/stylee.css">
</head>
<script src="https://kit.fontawesome.com/f244ab63ac.js" crossorigin="anonymous"></script>

<body>
	<div id="cont">
		<div id="menus">
			<nav class="navbar navbar-dark fixed-top"
            style="background-color:#413FB6 ; height: 145px;box-sizing:content-box;">
            <div class="container-fluid">
                
                <a class="navbar-brand d-none d-lg-block" href="<?php echo BASE_URL ?>index">
                    <img src="./views/plantilla/img/logo.png" alt="Bootstrap" width="300px" height="100px">
                </a>

                <button class="navbar-toggler" style="color: #413FB6 ;" type="button" data-bs-toggle="offcanvas"
                    data-bs-target="#offcanvasDarkNavbar" aria-controls="offcanvasDarkNavbar"
                    aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="d-flex justify-content-end align-items-center flex-grow-1">
                    
                    <form class="d-flex mt-3 me-0" style="width:60%;margin-bottom:20px">
                        <input class="form-control me-2" type="search" placeholder="¿Queestas buscando?"
                            aria-label="Search">
                        <button style="border-color:#DCDCDC ;color: #B8B8B8 ;" class="btn btn-outline-primary"
                            type="submit">Buscar</button>
                    </form>

                   
                    <ul class="navbar-nav d-flex flex-row" style="margin-left:60px;margin-top:-5px;">
                        <li class="nav-item me-3"> 
                            <a href="<?php echo BASE_URL ?>favoritos"><i class="fas fa-bookmark fa-lg icon-zoom"
                                    style="margin-right: 15px;color: white;"></i>
                            </a>

                        </li>
                        <li class="nav-item me-3"> 
                            <a href="login.html"><i class="fas fa-user fa-lg icon-zoom"
                                    style="margin-right: 15px;color: white;"></i>
                            </a>

                        </li>
						<li class="nav-item me-3">
                            <a href="contenido/carrito.html" class="cart-link" style="position: relative; display: inline-block;">
                                <i class="fas fa-shopping-cart fa-lg icon-zoom" style="color: white;margin-right:40px;"></i>
                                <span class="cart-badge">0</span>
                            </a>
                        </li>
                    </ul>


                </div>

               
                <div class="offcanvas offcanvas-start " style="background-color: white;" tabindex="-1"
                    id="offcanvasDarkNavbar" aria-labelledby="offcanvasDarkNavbarLabel">
                    <div class="offcanvas-header" style="background-color: #413FB6;height:70px;">

                        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas"
                            aria-label="Close"></button>
                    </div>
                    <div class="offcanvas-body">
                        <h5 class="offcanvas-title" id="offcanvasDarkNavbarLabel">Categorias</h5>
                        <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
                            <li class="nav-item">
                                <a style="color: black;" class="nav-link active" aria-current="page"
                                    href="<?php echo BASE_URL ?>producto">Celulares</a>
                            </li>
                            <li class="nav-item">
                                <a style="color: black;" class="nav-link active" aria-current="page"
                                    href="<?php echo BASE_URL ?>producto3">Laptops</a>
                            </li>
                            <li class="nav-item">
                                <a style="color: black;" class="nav-link active" aria-current="page"
                                    href="<?php echo BASE_URL ?>producto2">Accesorios</a>
                            </li>
                            <li class="nav-item">
                                <a style="color: black;" class="nav-link active" aria-current="page"
                                    href="<?php echo BASE_URL ?>contacto">Contactanos</a>

                            </li>
                            <li class="nav-item">
                                <a style="color: black;" class="nav-link active" aria-current="page"
                                    href="<?php echo BASE_URL ?>nosotros">Nosotros</a>
                            </li>
                        </ul>
                    </div>
                </div>

            </div>
        </nav>

		</div>
	