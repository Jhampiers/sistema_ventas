<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Novatec</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo BASE_URL ?>views/plantilla/css/style.css">
    <link rel="icon" href="img/Pes...ico">
</head>
<script src="https://kit.fontawesome.com/f244ab63ac.js" crossorigin="anonymous"></script>
<style>
    /*login interactivo*/
@import url('https://fonts.googleapis.com/css?family=Montserrat:400,800');

* {
	box-sizing: border-box;
}


.buttonn {
	border-radius: 20px;
	border: 1px solid #413FB6;
	background-color: #413FB6;
	color: #FFFFFF;
	font-size: 12px;
	font-weight: bold;
	padding: 12px 45px;
	letter-spacing: 1px;
	text-transform: uppercase;
	transition: transform 80ms ease-in;
}

.ghost {
	border-radius: 20px;
	border: 1px solid #413FB6;
	background-color: #413FB6;
	color: #FFFFFF;
	font-size: 12px;
	font-weight: bold;
	padding: 12px 45px;
	letter-spacing: 1px;
	text-transform: uppercase;
	transition: transform 80ms ease-in;
}


.buttonn,.ghost:active {
	transform: scale(0.95);
}

.ghost:focus {
	outline: none;
}

.ghost {
	background-color: transparent;
	border-color: #FFFFFF;
}

.formm {
	background-color: #FFFFFF;
	display: flex;
	align-items: center;
	justify-content: center;
	flex-direction: column;
	padding: 0 50px;
	height: 100%;
	text-align: center;
}

.inputt {
	background-color: #eee;
	border: none;
	padding: 12px 15px;
	margin: 8px 0;
	width: 100%;
}

.coontainer {
	background-color: #fff;
	border-radius: 10px;
  	box-shadow: 0 14px 28px rgba(0,0,0,0.25), 
			0 10px 10px rgba(0,0,0,0.22);
	position: relative;
	overflow: hidden;
	width: 768px;
	max-width: 100%;
	min-height: 460px;
}

.form-coontainer {
	position: absolute;
	top: 0;
	height: 100%;
	transition: all 0.6s ease-in-out;
}

.sign-in-coontainer {
	left: 0;
	width: 50%;
	z-index: 2;
}

.coontainer.right-panel-active .sign-in-coontainer {
	transform: translateX(100%);
}

.sign-up-coontainer {
	left: 0;
	width: 50%;
	opacity: 0;
	z-index: 1;
}

.coontainer.right-panel-active .sign-up-coontainer {
	transform: translateX(100%);
	opacity: 1;
	z-index: 5;
	animation: show 0.6s;
}

@keyframes show {
	0%, 49.99% {
		opacity: 0;
		z-index: 1;
	}
	
	50%, 100% {
		opacity: 1;
		z-index: 5;
	}
}

.overlay-coontainer {
	position: absolute;
	top: 0;
	left: 50%;
	width: 50%;
	height: 100%;
	overflow: hidden;
	transition: transform 0.6s ease-in-out;
	z-index: 100;
}

.coontainer.right-panel-active .overlay-coontainer{
	transform: translateX(-100%);
}

.overlay {
	background: #a892a0;
	background: -webkit-linear-gradient(to right, #413FB6, #c994b4);
	background: linear-gradient(to right, #413FB6, #c2b1bb);
	background-repeat: no-repeat;
	background-size: cover;
	background-position: 0 0;
	color: #FFFFFF;
	position: relative;
	left: -100%;
	height: 100%;
	width: 200%;
  	transform: translateX(0);
	transition: transform 0.6s ease-in-out;
}

.coontainer.right-panel-active .overlay {
  	transform: translateX(50%);
}

.overlay-panel {
	position: absolute;
	display: flex;
	align-items: center;
	justify-content: center;
	flex-direction: column;
	padding: 0 40px;
	text-align: center;
	top: 0;
	height: 100%;
	width: 50%;
	transform: translateX(0);
	transition: transform 0.6s ease-in-out;
}

.overlay-left {
	transform: translateX(-20%);
}

.coontainer.right-panel-active .overlay-left {
	transform: translateX(0);
}

.overlay-right {
	right: 0;
	transform: translateX(0);
}

.coontainer.right-panel-active .overlay-right {
	transform: translateX(20%);
}

.social-coontainer {
	margin: 20px 0;
}

.social-coontainer a {
	border: 1px solid #DDDDDD;
	border-radius: 50%;
	display: inline-flex;
	justify-content: center;
	align-items: center;
	margin: 0 5px;
	height: 40px;
	width: 40px;
}
.interactivo{
    width: auto;
    height:700px;
    margin-top:160px;
    display: flex;
    justify-content: center;
    padding:90px;
}
</style>
<body>

    <div class="container-fluid p-0">

        <nav class="navbar navbar-dark fixed-top"
            style="background-color:#413FB6 ; height: 145px;box-sizing:content-box;">
            <div class="container-fluid">
             
                <a class="navbar-brand d-none d-lg-block" href="<?php echo BASE_URL ?>index">
                    <img src="./views/plantilla/img/logo.png" alt="Bootstrap" width="350px" height="100px">
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
                            <a href="<?php echo BASE_URL ?>login"><i class="fas fa-user fa-lg icon-zoom"
                                    style="margin-right: 15px;color: white;"></i>
                            </a>

                        </li>
                        <li class="nav-item me-3">
                            <a href="<?php echo BASE_URL ?>carrito" class="cart-link" style="position: relative; display: inline-block;">
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

	