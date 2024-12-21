<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Iniciar Sesión</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <link rel="stylesheet" href="<?php echo BASE_URL ?>assets/css/login.css">
    <script> const base_url = '<?php echo BASE_URL; ?>';</script>
 
</head>
<body>
   
    <div class="login-container">
        <div class="login-header">
            <i class="fas fa-user-circle"></i>
            <span>Iniciar Sesión</span>
        </div>
        <form id="frm_iniciar_sesion">
            <div class="form-group">
                <label for="usuario">USUARIO</label>
                <input type="text" id="usuario" name="usuario"  placeholder="Ingrese su usuario" required>
                <i class="fas fa-user"></i>
            </div>
            <div class="form-group">
                <label for="password">CONTRASEÑA</label>
                <input type="password" id="password" name="password" placeholder="Ingrese su contraseña" required>
                <i class="fas fa-lock"></i>
            </div>
            <button type="submit" class="login-btn">
                Ingresar <i class="fas fa-arrow-right"></i>
            </button>
        </form>
        <div class="forgot-password">
            <a href="#">¿Olvidaste tu contraseña?</a>
        </div>
    </div>

    <script src="<?php echo BASE_URL;?>views/js/functions_login.js"></script>
</body>
</html>






