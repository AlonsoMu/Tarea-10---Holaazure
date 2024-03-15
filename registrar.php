<!doctype html>
<html lang="es">

<head>
  <title>Registro</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS v5.2.1 -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">

</head>

<body>
  
  <div class="container mt-3">
    <form action="" autocomplete="off" id="form-vendedor">
      <div class="card">
        <div class="card-header">
          <div>Registrar Vendedores</div>
        </div>
        <div class="card-body">
          
          <!-- CAMPO Apellidos Y Nombres -->
          <div class="row">
            <div class="col-md-6 mb-3">
              <label for="apellidos" class="form-label">Apellidos:</label>
              <input type="text" class="form-control" id="apellidos" required>
            </div>

            <div class="col-md-6 mb-3">
              <label for="nombres" class="form-label">Nombres:</label>
              <input type="text" class="form-control" id="nombres" required>
            </div>
          </div>

          <div class="row">
            <!-- CAMPO DNI -->
            <div class="col-md-6 mb-3">
              <label for="dni" class="form-label">DNI:</label>
              <input type="text" class="form-control" id="dni" required>
            </div>
            <!-- CAMPO TELEFONO -->
            <div class="col-md-6 mb-3">
              <label for="telefono" class="form-label">Teléfono:</label>
              <input type="text" class="form-control" id="telefono" required>
            </div>
          </div> <!-- FIN DEL ROW -->
          <!-- CAMPO CORREO -->
          <div class="col-md-6 mb-3">
            <label for="correo" class="form-label">Correo:</label>
            <input type="text" class="form-control" id="correo" required>
          </div>
        </div>
        <div class="card-footer text-end">
          <button class="btn btn-sm btn-primary" type="submit" id="guardar">Guardar</button>
        </div>
      </div> <!-- FIN DEL CARD -->
    </form> <!-- FIN DEL FORMULARIO-->
  </div> <!-- FIN DEL CONTAINER -->
  
  <!-- Bootstrap JavaScript Libraries -->
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
    integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
  </script>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js"
    integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous">
  </script>
  <!-- SweetAlert -->
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
  <script>
   
</body>  

</html>