<?php

include("bd.php");

if(isset($_GET['id'])) 
{
  $id = $_GET['id'];
  $query = "DELETE FROM auto WHERE id = $id";
  $result = mysqli_query($conexion, $query);
  if(!$result) {
    die("Fallido.");
  }

  $_SESSION['message'] = 'Auto eliminado';
  $_SESSION['message_type'] = 'danger';
  header('Location: principal.php');
}

?>
