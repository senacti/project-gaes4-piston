<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="{{ asset('css/estilosregister.css') }}">
  <title>Registro - Piston Taller Mecánico</title>
</head>
<body>
  <div class="login-container">
    <h1>Registro</h1>
    <form>
      <div class="form-group">
        <label for="name">Nombre:</label>
        <input type="text" id="name" name="name" required>
      </div>
      <div class="form-group">
        <label for="email">Correo electrónico:</label>
        <input type="email" id="email" name="email" required>
      </div>
      <div class="form-group">
        <label for="password">Contraseña:</label>
        <input type="password" id="password" name="password" required>
      </div>
      <div class="form-group">
        <label for="password_confirmation">Confirmar contraseña:</label>
        <input type="password" id="password_confirmation" name="password_confirmation" required>
      </div>
      <button type="submit">Registrarse</button>
      <p class="register-link">¿Ya tienes una cuenta? <a>Iniciar sesión</a></p>
    </form>
  </div>
</body>
</html>

