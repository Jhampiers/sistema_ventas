<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Iniciar sesión</title>

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">

  <script> const base_url = '<?php echo BASE_URL; ?>';</script>
</head>

<body class="bg-light">
  <div class="container d-flex justify-content-center align-items-center p-5" style="height: 130vh;">
    <div class="card shadow-lg border-0 rounded-4 text-white"
      style="width: 100%; max-width: 400px; background-color: #413FB6;">
      <div class="card-body p-4">
        <!-- Sección del logo -->
        <div class="text-center mb-4">
        <img src="./views/plantilla/img/logo.png" alt="Logo" class="img-fluid" style="max-width:270px;height:80px;;">
        </div>
        <!-- Título del formulario -->
        <h5 class="card-title text-center text-white fw-bold mb-4">¡Bienvenido a Novatec!</h5>
        <form id="frm_iniciar_sesion">
          <!-- Campo Usuario -->
          <div class="mb-3">
            <label for="usuario" class="form-label">Usuario</label>
            <div class="input-group">
              <span class="input-group-text bg-light">
                <i class="bi bi-person-fill text-muted"></i>
              </span>
              <input type="text" class="form-control" id="usuario" name="usuario" placeholder="Introduce tu usuario"
                required>
            </div>
          </div>

          <!-- Campo Contraseña -->
          <div class="mb-3">
            <label for="password" class="form-label">Contraseña</label>
            <div class="input-group">
              <span class="input-group-text bg-light">
                <i class="bi bi-lock-fill text-muted"></i>
              </span>
              <input type="password" class="form-control" id="password" name="password"
                placeholder="Introduce tu contraseña" required>
            </div>
          </div>

          <!-- Botones -->
          <div class="d-grid gap-2">
            <button type="submit" class="btn btn-light text-primary">Iniciar sesión</button>
            <a href="#" class="btn btn-link text-white text-decoration-none">¿Olvidaste tu contraseña?</a>
          </div>
        </form>
      </div>
    </div>
  </div>

  <!-- Bootstrap JS -->
  <script src="<?php echo BASE_URL;?>views/js/functions_login.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>






