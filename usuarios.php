<?php

include('bd.php');

if(isset($_POST['usuarios'])){

$nombre= $_POST['usuario'];
$clave=$_POST['password'];
$query = "INSERT INTO sesion(usuario, clave) VALUES ('$nombre', '$clave')";
$resultado=mysqli_query($conexion, $query);


if(!$resultado){

    die("Fallido");
}
$_SESSION['message'] = 'Bienvenido.';
$_SESSION['message_type'] = 'success';
header('Location: principal.php');

}
?>