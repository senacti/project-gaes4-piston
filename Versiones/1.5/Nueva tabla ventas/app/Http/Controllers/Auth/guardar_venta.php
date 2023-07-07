<?php
// guardar_venta.php

if (isset($_POST['data'])) {
  $data = json_decode($_POST['data'], true);

  // Realizar las operaciones para guardar los datos en la base de datos

  // Ejemplo de inserción en una base de datos MySQL utilizando PDO
  $dsn = 'mysql:host=localhost;dbname=tu_base_de_datos';
  $username = 'tu_usuario';
  $password = 'tu_contraseña';

  try {
    $pdo = new PDO($dsn, $username, $password);

    foreach ($data as $row) {
      $mecanico = $row[0];
      $porcentaje = $row[1];
      $marca = $row[2];
      $modelo = $row[3];
      $matricula = $row[4];
      $vin = $row[5];
      $fecha = $row[6];
      $servicio = $row[7];
      $producto = $row[8];
      $total = $row[9];

      // Realizar la inserción en la base de datos
      $stmt = $pdo->prepare('INSERT INTO ventas (mecanico, porcentaje, marca, modelo, matricula, vin, fecha, servicio, producto, total) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?)');
      $stmt->execute([$mecanico, $porcentaje, $marca, $modelo, $matricula, $vin, $fecha, $servicio, $producto, $total]);
    }

    // Cerrar la conexión a la base de datos
    $pdo = null;

    // Enviar respuesta de éxito
    echo 'Datos guardados correctamente';
  } catch (PDOException $e) {
    // Enviar respuesta de error
    echo 'Error al guardar los datos: ' . $e->getMessage();
  }
} else {
  // Enviar respuesta de error si no se proporcionaron datos
  echo 'No se proporcionaron datos';
}
?>