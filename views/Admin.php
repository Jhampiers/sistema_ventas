<!DOCTYPE html>
<html lang="en">
 <style>
        .btn-primary {
            background-color: #413FB6;
            border-color: #413FB6;
        }

        .btn-primary:hover {
            background-color: #353497;
            border-color: #353497;
        }

        .btn-outline-primary {
            color: #413FB6;
            border-color: #413FB6;
        }

        .btn-outline-primary:hover {
            background-color: #413FB6;
            border-color: #413FB6;
        }

        .card {
            transition: transform 0.2s ease-in-out;
            border: none;
            border-radius: 10px;
        }

        .card:hover {
            transform: translateY(-5px);
        }

        .display-5 {
            font-size: 2.5rem;
        }
    </style>

<body>
    
    <div class="container-fluid py-5" style="margin-top: 200px; margin-bottom: 50px; background-color: #ffff;">
        <div class="container">
            <h2 class="text-center mb-4" style="color: #413FB6;">Panel Administrativo</h2>
            <div class="row g-4">
                
                <div class="col-12 col-md-6 col-lg-3">
                    <div class="card h-100 shadow-sm">
                        <div class="card-body text-center">
                            <div class="display-5 mb-3" style="color: #413FB6;">
                                <i class="fas fa-box"></i>
                            </div>
                            <h5 class="card-title">Productos</h5>
                            <div class="d-grid gap-2">
                                <a href="<?php echo BASE_URL ?>nuevo-producto" class="btn btn-primary">
                                    <i class="fas fa-plus-circle me-2"></i>Registrar
                                </a>
                                <a href="<?php echo BASE_URL ?>productos" class="btn btn-outline-primary">
                                    <i class="fas fa-list me-2"></i>Ver Lista
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

             
                <div class="col-12 col-md-6 col-lg-3">
                    <div class="card h-100 shadow-sm">
                        <div class="card-body text-center">
                            <div class="display-5 mb-3" style="color: #413FB6;">
                                <i class="fas fa-tags"></i>
                            </div>
                            <h5 class="card-title">Categorías</h5>
                            <div class="d-grid gap-2">
                                <a href="<?php echo BASE_URL ?>nuevo-categoria" class="btn btn-primary">
                                    <i class="fas fa-plus-circle me-2"></i>Registrar
                                </a>
                                <a href="<?php echo BASE_URL ?>categorias" class="btn btn-outline-primary">
                                    <i class="fas fa-list me-2"></i>Ver Lista
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

              
                <div class="col-12 col-md-6 col-lg-3">
                    <div class="card h-100 shadow-sm">
                        <div class="card-body text-center">
                            <div class="display-5 mb-3" style="color: #413FB6;">
                                <i class="fas fa-users"></i>
                            </div>
                            <h5 class="card-title">Usuarios</h5>
                            <div class="d-grid gap-2">
                                <a href="<?php echo BASE_URL ?>nuevo-persona" class="btn btn-primary">
                                    <i class="fas fa-user-plus me-2"></i>Registrar
                                </a>
                                <a href="<?php echo BASE_URL ?>personas" class="btn btn-outline-primary">
                                    <i class="fas fa-list me-2"></i>Ver Lista
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                
                <div class="col-12 col-md-6 col-lg-3">
                    <div class="card h-100 shadow-sm">
                        <div class="card-body text-center">
                            <div class="display-5 mb-3" style="color: #413FB6;">
                                <i class="fas fa-shopping-cart"></i>
                            </div>
                            <h5 class="card-title">Compras</h5>
                            <div class="d-grid gap-2">
                                <a href="<?php echo BASE_URL ?>nuevo-compra" class="btn btn-primary">
                                    <i class="fas fa-plus-circle me-2"></i>Nueva compra
                                </a>
                                <a href="<?php echo BASE_URL ?>compras" class="btn btn-outline-primary">
                                <i class="fas fa-list me-2"></i>ver lista
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    

    <div class="py-4" style="background-color:#413FB6;">
       
    </div>

</body>
</html>