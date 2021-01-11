<?php include("bd.php"); ?>

<?php include('head.php'); ?>

<style type="text/css">

body{background-color:#CFD6FF;}

</style>

<nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="#">CRUD vehículos</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a class="nav-link " href="inicios.php">Salir</a>
            </li>
          </ul>
        </div>
      </nav> 
    <div class="container">
        <div class="row">
        <!--formula-->
        <div class="col-md-2.5">
        <?php if (isset($_SESSION['message'])) { ?>
      <div class="alert alert-<?= $_SESSION['message_type']?> alert-dismissible fade show" role="alert">
        <?= $_SESSION['message']?>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <?php session_unset(); } ?>
            <div class="card">
                <div class="card-body">
                    <form action="guardar.php" method="POST">
                        <div class="form-group">
                            <input type="text" id="marca"  name="marca" placeholder=" Inserta la marca" autofocus>
                        </div>
                        <div class="form-group">
                                <input type="text" id="modelo"  name="modelo" placeholder=" Inserta modelo">
                        </div>
                        <div class="form-group">
                        <input type="number" id="año" name="año" min="1940" max="2019" placeholder=" Año">
                        </div>
                        <div class="form-group">
                            <input type="text" id="placas" name="placas" placeholder=" Inserta placas"  pattern="[a-zA-Z0-9]+" 
                            minlength="7" maxlength="7">
                        </div>
                        <div class="form-group">
                                <input type="number" id="kilometraje" name="kilometraje" placeholder=" Inserta el Kilometraje">
                        </div>
                        <div class="form-group">
                                <input type="text" id="serie" name="serie" placeholder=" Inserta numero de serie" 
                                pattern="[a-zA-Z0-9]+" minlength="10" maxlength="10">
                        </div>
                        <input type="submit" name="guarda" class="btn btn-success btn-block" value="Guardar">
                    </form>
                </div>
            </div>
        </div>


        <!--lista-->

        <div class="col-md-9">
           <table class="table table-bordered table-hover">
               <thead>
                   <tr>
                       <th>Modelo</th>
                       <th>Marca</th>
                       <th>Año</th>
                       <th>Placas</th>
                       <th>Kilometraje</th>
                       <th>Número Serie</th>
                       <th>Fecha</th>
                       <th>Operación</th>
                   </tr>
               </thead>
               <tbody>
               <tbody>

          <?php
          $query = "SELECT * FROM  auto";
          $result_tasks = mysqli_query($conexion, $query);    

          while($row = mysqli_fetch_assoc($result_tasks)) { ?>
          <tr>
            <td><?php echo $row['marca']; ?></td>
            <td><?php echo $row['modelo']; ?></td>
            <td><?php echo $row['año']; ?></td>
            <td><?php echo $row['placas']; ?></td>
            <td><?php echo $row['kilometraje']; ?></td>
            <td><?php echo $row['serie']; ?></td>
            <td><?php echo $row['created_at']; ?></td>
            <td>
              <a href="editar.php?id=<?php echo $row['id']?>" class="btn btn-secondary">
                <i class="fas fa-marker"></i>
              </a>
              <a href="eliminar.php?id=<?php echo $row['id']?>" class="btn btn-danger">
                <i class="far fa-trash-alt"></i>
              </a>
            </td>
          <?php } ?>
        </tbody>
           </table>   
        </div>
        </div>
    </div>


<?php include('footer.php'); ?>