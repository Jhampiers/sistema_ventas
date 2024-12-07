<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
    <style>
        body {
            background: #ffff;
            font-family: 'Poppins', sans-serif;
        }

        .stats-container {
            margin-bottom: 2rem;
        }

        .stats-card {
            background: linear-gradient(45deg, #413FB6, #5654d1);
            color: white;
            padding: 1rem;
            border-radius: 10px;
            text-align: center;
            margin-bottom: 1rem;
        }

        .stats-card h3 {
            font-size: 2rem;
            margin: 0;
        }

        .stats-card p {
            margin: 0;
            opacity: 0.8;
        }

        .btn-primary {
            background-color: #413FB6;
            border-color: #413FB6;
            flex: 1;
            transition: all 0.3s ease;
        }

        .btn-primary:hover {
            background-color: #353497;
            border-color: #353497;
            transform: translateY(-2px);
            box-shadow: 0 5px 15px rgba(65, 63, 182, 0.3);
        }

        .btn-outline-primary {
            color: #413FB6;
            border-color: #413FB6;
            flex: 1;
            transition: all 0.3s ease;
        }

        .btn-outline-primary:hover {
            background-color: #413FB6;
            border-color: #413FB6;
            transform: translateY(-2px);
            box-shadow: 0 5px 15px rgba(65, 63, 182, 0.3);
        }

        .card {
            transition: all 0.3s ease-in-out;
            border: none;
            border-radius: 15px;
            box-shadow: 0 4px 8px rgba(0,0,0,0.1) !important;
            background: white;
            overflow: hidden;
        }

        .card:hover {
            transform: translateY(-5px);
            box-shadow: 0 8px 20px rgba(65, 63, 182, 0.2) !important;
        }

        .card::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 4px;
            background: linear-gradient(45deg, #413FB6, #5654d1);
        }

        .display-5 {
            font-size: 2.5rem;
            margin-bottom: 1rem;
        }

        .button-container {
            display: flex;
            gap: 10px;
            justify-content: center;
            padding: 0 1rem;
        }

        .card-body {
            display: flex;
            flex-direction: column;
            align-items: center;
            padding: 2rem;
        }

        .card-title {
            margin-bottom: 1.5rem;
            font-weight: 600;
            color: #2c2c2c;
        }

        .welcome-section {
            text-align: center;
            margin-bottom: 3rem;
        }

        .welcome-section h3 {
            color: #413FB6;
            font-weight: 700;
            margin-bottom: 1rem;
        }

        .welcome-section p {
            color: #6c757d;
            max-width: 600px;
            margin: 0 auto;
        }

        .quick-actions {
            position: fixed;
            bottom: 2rem;
            right: 2rem;
            z-index: 1000;
        }

        .action-button {
            width: 50px;
            height: 50px;
            border-radius: 50%;
            background: #413FB6;
            color: white;
            display: flex;
            align-items: center;
            justify-content: center;
            margin-bottom: 1rem;
            cursor: pointer;
            transition: all 0.3s ease;
            box-shadow: 0 4px 8px rgba(0,0,0,0.1);
        }

        .action-button:hover {
            transform: scale(1.1);
            box-shadow: 0 6px 12px rgba(0,0,0,0.2);
        }

        @media (max-width: 768px) {
            .stats-container {
                margin-top: 1rem;
            }
        }
    </style>
</head>
<body>
    <div class="container-fluid py-5" style="margin-top: 150px; margin-bottom: 50px; background-color: #ffff;">
        <div class="container">
            <div class="welcome-section">
                <h3>Bienvenido al Panel Administrativo</h3>
               
            </div>

            <div class="row stats-container">
                <div class="col-md-3">
                    <div class="stats-card">
                        <h3>16</h3>
                        <p>Productos Activos</p>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="stats-card">
                        <h3>7</h3>
                        <p>Categorías</p>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="stats-card">
                        <h3>13</h3>
                        <p>Usuarios</p>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="stats-card">
                        <h3>13</h3>
                        <p>Compras este mes</p>
                    </div>
                </div>
            </div>
           
            <div class="row g-4">
                <div class="col-12 col-md-6 col-lg-3">
                    <div class="card h-100">
                        <div class="card-body">
                            <div class="display-5" style="color: #413FB6;">
                                <i class="fas fa-box"></i>
                            </div>
                            <h5 class="card-title">Productos</h5>
                            <div class="button-container">
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
                    <div class="card h-100">
                        <div class="card-body">
                            <div class="display-5" style="color: #413FB6;">
                                <i class="fas fa-tags"></i>
                            </div>
                            <h5 class="card-title">Categorías</h5>
                            <div class="button-container">
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
                    <div class="card h-100">
                        <div class="card-body">
                            <div class="display-5" style="color: #413FB6;">
                                <i class="fas fa-users"></i>
                            </div>
                            <h5 class="card-title">Usuarios</h5>
                            <div class="button-container">
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
                    <div class="card h-100">
                        <div class="card-body">
                            <div class="display-5" style="color: #413FB6;">
                                <i class="fas fa-shopping-cart"></i>
                            </div>
                            <h5 class="card-title">Compras</h5>
                            <div class="button-container">
                                <a href="<?php echo BASE_URL ?>nuevo-compra" class="btn btn-primary">
                                    <i class="fas fa-plus-circle me-2"></i>Registrar
                                </a>
                                <a href="<?php echo BASE_URL ?>compras" class="btn btn-outline-primary">
                                    <i class="fas fa-list me-2"></i>Ver Lista
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