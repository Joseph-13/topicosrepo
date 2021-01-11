
<?php
session_start();
$conexion= mysqli_connect(
    'localhost',
    'root',
    'tebis123',
    'carros'
);
if(isset($_POST['login'])){
$nombre= $_POST['usuario'];
$clave=$_POST['password'];

$query = mysqli_query($conexion,"SELECT * FROM sesion WHERE usuario = '".$nombre."'");
$nr = mysqli_num_rows($query);

if($nr == 1)
{
	 
$_SESSION['message'] = 'Ya existe.';
$_SESSION['message_type'] = 'danger';
header('Location: principal.php');
}

}
?>