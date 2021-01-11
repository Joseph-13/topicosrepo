<?php

include('bd.php');

if(isset($_POST['guarda'])){
$marca= $_POST['marca'];
$modelo=$_POST['modelo'];
$año= $_POST['año'];
$placas=$_POST['placas'];
$kilometraje= $_POST['kilometraje'];
$serie=$_POST['serie'];
$query = "INSERT INTO auto(marca, modelo, año, placas, kilometraje, serie) VALUES ('$marca', '$modelo', '$año', '$placas', '$kilometraje', '$serie')";
$resultado=mysqli_query($conexion, $query);
if(!$resultado){

    die("Fallido");
}

$_SESSION['message'] = 'Auto guardado con éxito.';
$_SESSION['message_type'] = 'success';
header('Location: principal.php');
}

?>
}