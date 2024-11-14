<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Iniciar sesión</title>
  
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
  <script> const base_url = '<?php echo BASE_URL; ?>';</script>
</head>
<body>
  <div class="container d-flex justify-content-center align-items-center" style="height: 100vh;">
    <div class="card" style="width: 100%; max-width: 400px;">
      <div class="card-body">
        <h5 class="card-title text-center">Iniciar sesión</h5>
        <form id="frm_iniciar_sesion">
          <div class="mb-3">
            <label for="text" class="form-label">Usuario</label>
            <input type="text" class="form-control" id="usuario" placeholder="Introduce tu usuario" required>
          </div>
          <div class="mb-3">
            <label for="password" class="form-label">Contraseña</label>
            <input type="password" class="form-control" id="password" placeholder="Introduce tu contraseña" required>
          </div>
          <div class="d-flex justify-content-between">
            <button type="submit" class="btn btn-primary">Iniciar sesión</button>
            <a href="#" class="btn btn-link">¿Olvidaste tu contraseña?</a>
          </div>
        </form>
      </div>
    </div>
  </div>

  <script src="<?php echo BASE_URL;?>views/js/functions_login.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
