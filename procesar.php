<?php
$servidor = "localhost";
$usuario = "root";
$contrasena = "";
$basedatos = "rese";
$conexion = new mysqli($servidor, $usuario, $contrasena, $basedatos);
if ($conexion->connect_error) {
die("Error de conexión: " . $conexion->connect_error);
}


// Recibe los datos del formulario de registro
$usuario = $_POST["usuario"];




//$apellido = $_POST["apellido"];
//$correo = $_POST["correo"];


$contrasena = $_POST["contrasena"];
// Inserta los datos en la tabla de usuarios
$sql = "INSERT INTO usuarios (usuario, contrasena) VALUES ('$usuario','$contrasena')";
if ($conexion->query($sql) === TRUE) {
echo "Registro exitoso";
$conexion->close();} else {
echo "Error al registrar: " . $conexion->error;
}


