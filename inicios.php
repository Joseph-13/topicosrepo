<?php
include("bd.php");
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>CRUD vehículos</title>
    <!-- bootstrap4-->
    <link rel="stylesheet" 
    href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" 
    integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" 
    crossorigin="anonymous">
<style type="text/css">

body{background: url(carro.jpg) no-repeat center; background-size: 1265px 965px}
    


</style>
</head>
<body>
        <nav class="navbar navbar-dark bg-dark mb-0">
                <a href="/" class="navbar-brand"></a>
            </nav>
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="#">José Luis CRUD </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav ml-auto">
        <li class="nav-item">
          <a class="nav-link" href="inicios.php">Iniciar sesión</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="login.php">Regístrarte</a>
        </li>
      </ul>
    </div>
  </nav>
</div class="row">
<div class="col-md-4 offset-md-4">
        <div class="card mt-4 text-center">
                <div class="card-header">
                    <h3>Iniciar sesión</h3>
     <div class="card-body">
     <?php if (isset($_SESSION['message'])) { ?>
      <div class="alert alert-<?= $_SESSION['message_type']?> alert-dismissible fade show" role="alert">
        <?= $_SESSION['message']?>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <?php session_unset(); } ?>
<form action="sesion.php" method="POST">
    <div class="form-group">
    <input type="text" name="usuario" placeholder="ID" class="form-control">
    <input type="password" name="password" placeholder="Ingresa Contraseña" class="form-control">

    <button type="submit" name="usuarios" class="btn btn-primary btn-block">
        Entrar
    </button>
</form>
<?php include('footer.php'); ?>
</div>
</div>
</body>
</html>
