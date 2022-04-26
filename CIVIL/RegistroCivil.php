<?php
//Recibo todos los datos del formulario 
$nombre1=$_POST['nombre1'];
$nombre2=$_POST['nombre2'];
$apellido1=$_POST['apellido1'];
$apellido2=$_POST['apellido2'];
$cedula=$_POST['cedula'];
$telefono=$_POST['telefono'];
$email=$_POST['email'];
$departamento=$_POST['departamento'];
$municipio=$_POST['municipio'];
$barrio=$_POST['barrio'];
$direccion=$_POST['direccion'];
$nombreunidad=$_POST['nombreunidad'];

echo "Los datos son los siguiente: <br> ";
echo "$nombre1, $nombre2,$apellido1,$apellido2,$cedula,$telefono,$email,$departamento,$municipio,$barrio,$direccion,$nombreunidad "
?>