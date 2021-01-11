
<?php

session_start();
$conexion= mysqli_connect(
    'localhost',
    'root',
    'tebis123',
    'carros'
);

$nombre= $_POST['usuario'];
$clave=$_POST['password'];

$query = mysqli_query($conexion,"SELECT * FROM sesion WHERE usuario = '".$nombre."' and clave = '".$clave."'");
$nr = mysqli_num_rows($query);

if($nr == 1)
{
	 
$_SESSION['message'] = 'Bienvenido.';
$_SESSION['message_type'] = 'success';
header('Location: principal.php');
}
else if ($nr == 0) 
{
    $_SESSION['message'] = 'No existe';
    $_SESSION['message_type'] = 'danger';
    header('Location: inicios.php');
	
}

?>