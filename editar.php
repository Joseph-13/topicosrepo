<?php include('header.php'); ?>
<?php
include("bd.php");

$marca = '';
$modelo= '';
$año= '';
$placas= '';
$kilometraje= '';
$serie= '';

if  (isset($_GET['id'])) {
  $id = $_GET['id'];
  $query = "SELECT * FROM auto WHERE id=$id";
  $result = mysqli_query($conexion, $query);
  if (mysqli_num_rows($result) == 1) {
    $row = mysqli_fetch_array($result);
    $marca = $row['marca'];
    $modelo = $row['modelo'];
    $año = $row['año'];
    $placas = $row['placas'];
    $kilometraje = $row['kilometraje'];
    $serie = $row['serie'];
  }
}

if (isset($_POST['editar'])) {
  $id = $_GET['id'];
  $marca= $_POST['marca'];
  $modelo = $_POST['modelo'];
  $año= $_POST['año'];
  $placas = $_POST['placas'];
  $kilometraje= $_POST['kilometraje'];
  $serie = $_POST['serie'];

  $query = "UPDATE auto set marca = '$marca', modelo = '$modelo', año='$año', placas='$placas', kilometraje='$kilometraje', serie='$serie' WHERE id=$id";
  mysqli_query($conexion, $query);
  $_SESSION['message'] = 'Información guardada con éxito';
  $_SESSION['message_type'] = 'warning';
  header('Location: principal.php');
}

?>
<?php include('head.php'); ?>
<div class="container p-4">
  <div class="row">
    <div class="col-md-4 mx-auto">
      <div class="card card-body">
      <form action="editar.php?id=<?php echo $_GET['id']; ?>" method="POST">
      <div class="form-group">
         Marca: <input name="marca" type="text" class="form-control" value="<?php echo $marca; ?>" autofocus>
        </div>
        <div class="form-group">
          Modelo: <input name="modelo" type="text" class="form-control" value="<?php echo $modelo; ?>">
        </div>
        <div class="form-group">
        Año:  <input name="año" type="number" class="form-control" value="<?php echo $año; ?>" min="1940" max="2020">
        </div>
        <div class="form-group">
        Placas:  <input name="placas" type="text" class="form-control" value="<?php echo $placas; ?>" attern="[a-zA-Z0-9]+" minlength="7" maxlength="7">
        </div>
        <div class="form-group">
         Kilometraje:  <input name="kilometraje" type="number" class="form-control" value="<?php echo $kilometraje; ?>">
          <div class="form-group">
         Serie:  <input name="serie" type="text" class="form-control" value="<?php echo $serie; ?>" pattern="[a-zA-Z0-9]+" minlength="10" maxlength="10">
        </div>
        </div>
        <button class="btn-success" name="editar">
          Actualizar
</button>
      </form>
      </div>
    </div>
  </div>
</div>
<?php include('footer.php'); ?>