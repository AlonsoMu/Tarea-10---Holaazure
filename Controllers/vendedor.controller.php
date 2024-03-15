<?php
// Configurar la zona local


require_once '../Models/Vendedores.php';

if (isset($_POST['operacion'])) {

  $vendedor = new Vendedor();

  // ¿Que operación es?
  switch ($_POST['operacion']) {
    case 'listar':
      // EL método listar retorna un array PHP asociativo, esto no lo entiende el navegador
      // Entonces convertimos el arreglo en un objeto JSON y lo enviamos a la vista.
      echo json_encode($vendedor->listar());
      // render... ENVIAR ETIQUETAS / DATOS NAVEGADOR
      break;

    case 'registrar':

      $datosEnviar = [
        'apellidos'     => $_POST['apellidos'],
        'nombres'       => $_POST['nombres'],
        'dni'           => $_POST['dni'],
        'telefono'      => $_POST['telefono'],
        'correo'        => $_POST['correo'],
      ];


      echo json_encode($vendedor->registrar($datosEnviar));
      break;
  }
}
