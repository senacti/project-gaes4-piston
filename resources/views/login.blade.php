<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="{{('css/estilos.css')}}">
  <title>Iniciar sesión - Piston Taller Mecánico</title>
</head>
<body>
  <div class="login-container">
    <h1>Iniciar sesión</h1>
    <form>
      <div class="form-group">
        <label for="email">Correo electrónico:</label>
        <input type="email" id="email" name="email" required>
      </div>
      <div class="form-group">
        <label for="password">Contraseña:</label>
        <input type="password" id="password" name="password" required>
        <a href="#" class="forgot-password">¿Olvidaste tu contraseña?</a>
      </div>
      <button type="submit">Ingresar</button>
      
    </form>
  </div>
</body>
</html>